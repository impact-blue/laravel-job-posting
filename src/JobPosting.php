<?php

namespace ImpactBlue\JobPosting;

class JobPosting
{
    /**
     * @var \Illuminate\View
     */
    protected $view;


    /**
     * The name of the default view to use for the job posting.
     *
     * @var string
     */
    protected $viewName = 'job-posting::job-posting';


    /**
     * Create a new job posting.
     *
     * @param \Illuminate\View $view;
     * @param string viewName;
     * @return void
     */
    public function __construct(View $view, string $viewName)
    {
        $this->view = $view;
        $this->viewName = $viewName;
    }

    /**
     * Render the job posting for a model with the default view.
     *
     * @param collection $model The model to create the job posting for.
     * @return \Illuminate\Support\HtmlString The generated HTML.
     */
    public function render($model)
    {
        $jobPosting = $this->createJobPosting($model);

        return $this->view('job-posting::job-posting', $jobPosting);
    }

    /**
     * Create the job posting for a model.
     *
     * @param collection $model The model to create the job posting for.
     * @return array The job posting.
     */
    private function createJobPosting($model)
    {
        return [];
    }
}
