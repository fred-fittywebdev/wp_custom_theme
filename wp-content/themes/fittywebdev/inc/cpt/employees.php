<?php
$employees = tr_post_type('employees', 'Employees');
$employees->setIcon('user-tie');
$employees->setSlug('employees');
$employees->setTitlePlaceholder('Enter employees name here');
$employees->setArgument('supports', ['title', 'editor', 'thumbnail', 'revisions', 'excerpt']);
