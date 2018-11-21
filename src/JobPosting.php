<?php

namespace ImpactBlue\JobPosting;

use Exception;

use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\View\Factory as ViewFactory;

class JobPosting
{
    /**
     * The values defines in config/job-posting.php.
     *
     * @var array
     */
    protected $config;


    /**
     * @var ViewFactory
     */
    protected $viewFactory;


    /**
     * The name of the default view to use for the job posting.
     *
     * @var string
     */
    protected $viewName = 'job-posting::job-posting';


    /**
     * Create a new job posting.
     *
     * @param ViewFactory $viewFactory;
     * @return void
     */
    public function __construct(ViewFactory $viewFactory)
    {
        $this->viewFactory = $viewFactory;
    }

    /**
     * Create the job posting view.
     *
     * @param \Illuminate\Support\Collection $jobPosting The job posting to create the view for.
     * @return string The created view.
     */
    public function view($jobPosting)
    {
		return $this->viewFactory->make($this->viewName, compact('jobPosting'))->render();
	}

    /**
     * Render the job posting view.
     *
     * @param \Illuminate\Support\Collection $model The model to render the job posting view for.
     * @param \Illuminate\Support\Collection|array $optionalProperties Optional properties to merge into the job posting.
     * @return string The rendered view.
     */
    public function render($model, $optionalProperties = null)
    {
        $jobPosting = $this->createJobPosting($model, $optionalProperties);

        return $this->view($jobPosting);
    }

    /**
     * Create the job posting for a model.
     *
     * @param \Illuminate\Support\Collection $model The model to create the job posting for.
     * @param \Illuminate\Support\Collection|array $optionalProperties Optional properties to merge into the job posting.
     * @return \Illuminate\Support\Collection The job posting.
     */
    private function createJobPosting($model, $optionalProperties = null)
    {
        $this->getConfig();
        $this->convertConfig($model);

        $jobPosting = collect([
            '@context' => 'http://schema.org',
            '@type' => 'JobPosting',
            'datePosted' => $this->config['datePosted'],
            'description' => $this->config['description'],
            'hiringOrganization' => [
                '@type' => 'Organization',
                'name' => $this->config['name'],
            ],
            'jobLocation' => [
                '@type' => 'Place',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressCountry' => $this->config['addressCountry'],
                    'addressRegion' => $this->config['addressRegion'],
                    'addressLocality' => $this->config['addressLocality'],
                ],
            ],
            'title' => $this->config['title'],
        ]);

        if ($optionalProperties) {
            $jobPosting = $jobPosting->merge($optionalProperties); 
        }

        return $jobPosting;
    }

    /**
     * Get the job-posting config.
     *
     * @return void 
     */
    private function getConfig()
    {
        $config = config('job-posting');

        if ($config) {
            $this->config = $config;

            foreach ($this->config as $propertyName => $property) {
                if ($property && empty($property)) {
                    throw new Exception("Required job posting property '$propertyName' is empty!\nYou must include the required properties for your content to be eligible for display in Google's enhanced search results");
                }
            }
        } else {
            throw new Exception("The job-posting config couldn't be found!\nDid you forget to publish the config file using vendor:publish?");
        }
    }

    /**
     * Convert config property values to model attribute values.
     *
     * @param \Illuminate\Support\Collection $model The model to create the job posting for.
     * @return void 
     */
    private function convertConfig($model)
    {
        $this->config = array_map(function($property) use ($model) {
            return isset($model[$property]) ? $model[$property] : $property;
        }, $this->config);
    }
}
