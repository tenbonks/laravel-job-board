<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder as QueryBuilder; // alias to avoid Eloquent\Builder

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    // Public static arrays are useful for creating enums for a model, $category and $experience can be seen referenced in the models factory
    public static array $experience = ['entry', 'intermediate', 'senior'];
    public static array $category = ['IT', 'Finance', 'Sales', 'Marketing'];


    public function employer() : belongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function scopeFilter(Builder | QueryBuilder $query, array $filters) : Builder | QueryBuilder
    {
        return $query->when($filters['search'] ?? null, function ($query, $search) {

            $query->where(function ($query) use($search) {
                $query
                    ->where('title', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%')
                    // Querying against a relation
                    ->orWhereHas('employer', function ($query) use ($search) {
                        // at this point we are checking against the employers data
                        $query->where('company_name', 'like', '%' . $search . '%');
                });
            });

        })->when($filters['min_salary'] ?? null, function ($query, $minSalary) {

            $query->where('salary', '>=', $minSalary);

        })->when($filters['max_salary'] ?? null, function ($query, $maxSalary) {

            $query->where('salary', '<=', $maxSalary);

        })->when($filters['experience'] ?? null, function ($query, $experience) {

            $query->where('experience', $experience);

        })->when($filters['category'] ?? null, function ($query, $category) {

            $query->where('category', $category);

        });
    }

}
