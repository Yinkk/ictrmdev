<?php
//------------------Braedcrumbs User-----------------
Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

//------------------Braedcrumbs Admin-----------------
Breadcrumbs::register('admin', function($breadcrumbs) {
    $breadcrumbs->push('AmdminPage', route('admin'));
});

Breadcrumbs::register('news', function($breadcrumbs) {
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('AmdminNews', route('news'));
});

Breadcrumbs::register('user', function($breadcrumbs) {
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('AdminUser', route('user'));
});

Breadcrumbs::register('faculty', function($breadcrumbs) {
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('AdminSystemFaculty', route('faculty'));
});

Breadcrumbs::register('year', function($breadcrumbs) {
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('AdminSystemYear', route('year'));
});

Breadcrumbs::register('major', function($breadcrumbs) {
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('AdminSystemMajor', route('major'));
});

Breadcrumbs::register('createFormFaculty', function($breadcrumbs) {
    $breadcrumbs->parent('faculty');
    $breadcrumbs->push('AdminSystemFacultyCreate', route('createFormFaculty'));
});



// Breadcrumbs::register('category', function($breadcrumbs, $category) {
//     $breadcrumbs->parent('faculty');

//     foreach ($category->ancestors as $ancestor) {
//         $breadcrumbs->push($ancestor->title, route('category', $ancestor->id));
//     }

//     $breadcrumbs->push($category->title, route('category', $category->id));
// });

// Breadcrumbs::register('page', function($breadcrumbs, $page) {
//     $breadcrumbs->parent('category', $page->category);
//     $breadcrumbs->push($page->title, route('page', $page->id));
// });

?>