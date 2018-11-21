<?php

namespace ImpactBlue\JobPosting\Facades;

use ImpactBlue\JobPosting\JobPosting;
use Illuminate\Support\Facades\Facade;

class JobPostingFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return JobPosting::class;
    }
}
