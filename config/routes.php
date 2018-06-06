<?php
$modules = [
    'Home' => 'Home/',
    'Story' => 'Story/',
    'Speaking' => 'Speaking/',
    'TV & Radio' => 'TV/',
    'Why' => 'Why/',
    'Contact' => 'Contact/',
    'Keywords' => 'Keywords/',
];

// Loop the merge array and include the classes in them.
foreach ($modules as $module) {
    // List all the php files inside the folder.
    $files[] = 'source/' . $module . 'routes.php';
}

// Loop and include the files.
foreach ($files as $file) {
    require $file;
}
