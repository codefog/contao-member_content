<?php

/**
 * member_content extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 Codefog
 *
 * @package member_content
 * @author  Codefog <http://codefog.pl>
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    'Contao\ModuleMemberContent' => 'system/modules/member_content/modules/ModuleMemberContent.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'mod_member_content' => 'system/modules/member_content/templates/modules'
));
