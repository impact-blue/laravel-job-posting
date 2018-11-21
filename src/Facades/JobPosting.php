<?php

namespace ImpactBlue\JobPosting\Facades;

use ImpactBlue\JobPosting\JobPosting;
use Illuminate\Support\Facades\Facade;

class JobPosting extends Facade
{
    /**
     * Get the name of the class registered in the Application container.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return JobPosting::class;
    }
}
