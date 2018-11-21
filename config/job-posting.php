<?php

return [
	'baseSalary' => [
		/*
		|--------------------------------------------------------------------------
		| Currency
		|--------------------------------------------------------------------------
		|
		| The currency in which the monetary amount is expressed.
		|
		| Use standard formats: ISO 4217 currency format e.g. "USD"; Ticker symbol
		| for cryptocurrencies e.g. "BTC"; well known names for Local Exchange
		| Tradings Systems (LETS) and other currency types e.g. "Ithaca HOUR".
		|
		*/

		'currency' => 'JPY',

		'value' => [
			/*
			|--------------------------------------------------------------------------
			| Salary range
			|--------------------------------------------------------------------------
			|
			| Only specify 'value' for job postings without a salary range.
			|
			| If 'minValue' is set and 'maxValue' can't be found 'minValue' will be
			| used as 'value' instead.
			|
			*/

			'minValue' => 'salary_low',
			'maxValue' => 'salary_high',
			'value' => '',

			/*
			|--------------------------------------------------------------------------
			| Salary unit
			|--------------------------------------------------------------------------
			|
			| For the unitText use one of the following case-sensitive values:
			|
			| "HOUR"
			| "DAY"
			| "WEEK"
			| "MONTH"
			| "YEAR"
			|
			*/

			'unitText' => 'HOUR',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Employment type
    |--------------------------------------------------------------------------
    |
	| Choose one or more of the following case-sensitive values:
	|
	| "FULL_TIME"
	| "PART_TIME"
	| "CONTRACTOR"
	| "TEMPORARY"
	| "INTERN"
	| "VOLUNTEER"
	| "PER_DIEM"
	| "OTHER"
	|
	| 日本語:
	|
	| "アルバイト"
	| "パート"
    |
	| You can include more than one employmentType property. For example:
	|
	| 'employmentType': ['FULL_TIME', 'CONTRACTOR']
	|
    */

	'employmentType': ['アルバイト', 'パート'],

    /*
    |--------------------------------------------------------------------------
    | Organisation name
    |--------------------------------------------------------------------------
    |
	| The name of the organization offering the job position.
	|
	| This should be the name of the company, and not the specific location
	| that is hiring.
	|
    */
	
	'hiringOrganization' => [
		'name' => 'shop_name',
	],

    /*
    |--------------------------------------------------------------------------
    | Job location
    |--------------------------------------------------------------------------
    |
	| The geographic location(s) where the employee will primarily work, not
	| the location where the job was posted.
	|
    */

	'jobLocation' => [
        'address' => [
            'addressCountry' => 'JP',
            'addressRegion' => 'regions',
            'addressLocality' => 'prefectures',
        ],
	],

    /*
    |--------------------------------------------------------------------------
    | Special commitments
    |--------------------------------------------------------------------------
    |
	| Any special commitments associated with this job posting. Valid entries
	| include any PR line or job introduction line.
	|
    */
	
	'specialCommitments': 'pr',

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
	| The title of the job (not the title of the posting). For example,
	| "Software Engineer" or "Barista".
	|
    */

    'title' => '',

    /*
    |--------------------------------------------------------------------------
    | Work hours
    |--------------------------------------------------------------------------
    |
    | The typical working hours for this job (e.g. 20:00～1:00).
	|
    */

    'workHours' => '',

    /*
    |--------------------------------------------------------------------------
    | Description
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
];
