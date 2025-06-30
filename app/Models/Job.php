<?php

namespace App\Models;

use Illuminate\Support\Arr;

// namespace is a way to organize your code into logical groups

class Job {
    public static function all(): array {
        return [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => '$100,000',
            ],
            [
                'id' => 2,
                'title' => 'Data Analyst',
                'salary' => '$500,000',
            ],
            [
                'id' => 3,
                'title' => 'Game Developer',
                'salary' => '$800,000',
            ]
        ];
    }

    public static function find(int $id): array{
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(! $job){
            abort(404, 'Job not found');
        }
        // If the job is not found, we abort with a 404 error
        return $job;
    }
}
