<?php

namespace ImpactBlue\JobPosting;

use Illuminate\Support\ServiceProvider;

class JobPostingServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Get the classes provided for deferred loading.
     *
     * @return array
     */
    public function provides(): array
    {
        return [JobPosting::class];
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->publishConfig();
        $this->publishView();

        $this->app->singleton('JobPosting', function($app)
        {
            $jobPosting = $this->app->make('ImpactBlue\JobPosting\JobPosting');

            return $jobPosting;
        });
    }

    /**
     * Publish the job posting config.
     *
     * @return void
     */
    protected function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/job-posting.php' => config_path('job-posting.php'),
        ]);
    }

    /**
     * Publish the job posting view.
     *
     * @return void
     */
    protected function publishView()
    {
        $this->loadViewsFrom(__DIR__ . '/../views/', 'job-posting');
    }
}
