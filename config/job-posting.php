<?php

/*
|--------------------------------------------------------------------------
| Job posting required properties
|--------------------------------------------------------------------------
| This section describes the structured data types related to job postings.
| You may define model attributes to use for data retrieval or use string
| values directly.
|
| You must include the required properties for your content to be eligible
| for display in Google's enhanced search results. However if you plan on
| defining a required property through the second parameter of
| JobPosting::render (see below) you may set the property to false in this
| file.
|
| You can also include other properties to add more information about your
| content by passing an array or collection as the second parameter when
| calling JobPosting::render. The second parameter's properties will be
| merged with the properties defined in this file.
|
| For details:
| https://developers.google.com/search/docs/data-types/job-posting
|
*/

return [
    /*
    |--------------------------------------------------------------------------
    | datePosted
    |--------------------------------------------------------------------------
    | The original date that the employer posted the job in ISO 8601 format.
    | For example, "2017-01-24" or "2017-01-24T19:33:17+00:00".
    |
    */

    'datePosted' => '',

    /*
    |--------------------------------------------------------------------------
    | description
    |--------------------------------------------------------------------------
    |
    | The full description of the job in HTML format.
    |
    | The description should be a complete representation of the job, including
    | job responsibilities, qualifications, skills, working hours, education
    | requirements, and experience requirements. The description can't be the
    | same as the title.
    |
    | Additional guidelines:
    | 
    | You must format the description in HTML.
    | At minimum, add paragraph breaks using <br>, <p>, or \n.
    | Valid tags include <p>, <ul>, <li>, and headings <h1> through <h5>.
    | You can also use character-level formatting tags such as <strong> and <em>.
    |
    */

    'description' => '',

    /*
    |--------------------------------------------------------------------------
    | hiringOrganization name
    |--------------------------------------------------------------------------
    |
    | The organization offering the job position. This should be the name of
    | the company (for example, “Starbucks, Inc”), and not the specific
    | location that is hiring (for example, “Starbucks on Main Street”).
    |
    */

    'name' => '',

    /*
    |--------------------------------------------------------------------------
    | jobLocation addressCountry
    |--------------------------------------------------------------------------
    |
    | The country. For example, USA. You can also provide the two-letter ISO
    | 3166-1 alpha-2 country code.
    |
    */

    'addressCountry' => '',

    /*
    |--------------------------------------------------------------------------
    | jobLocation addressRegion
    |--------------------------------------------------------------------------
    |
    | The region. For example, CA.
    |
    */

    'addressRegion' => '',
    
    /*
    |--------------------------------------------------------------------------
    | jobLocation addressLocality
    |--------------------------------------------------------------------------
    |
    | The locality. For example, Mountain View.
    |
    */

    'addressLocality' => '',

    /*
    |--------------------------------------------------------------------------
    | title
    |--------------------------------------------------------------------------
    |
    | The title of the job (not the title of the posting).
    | For example, "Software Engineer" or "Barista".
    |
    */

    'title' => '',
];
