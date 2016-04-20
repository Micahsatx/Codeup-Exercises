<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];

function sortingArrays($companies)
{
    // companies is an array of all the companies
    // the key is the name of each company.
    // $names is the values within each company (all the names)
    foreach ($companies as $key => $names){
        // now sort all the values (names) within each company.  but that is just a copy
        // next we will assign that copy to something
        sort($names);
        // this is where $names gets assigned to each $companies[key].  
        // think of it like the copy of the sorted list of names
        // is now assigned to each company as its key.  its keys are the names
        // within each company
        $companies[$key] = $names; 
    }
    // now that the interals are sort, sort the company names themselves.
    arsort($companies);
    print_r($companies);
};

echo sortingArrays($companies);

