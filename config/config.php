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
 * Extension version
 */
@define('MEMBER_CONTENT_VERSION', '1.0');
@define('MEMBER_CONTENT_BUILD', '2');


/**
 * Add the tl_content table to members module
 */
$GLOBALS['BE_MOD']['accounts']['member']['tables'][] = 'tl_content';


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['user']['member_content'] = 'ModuleMemberContent';
