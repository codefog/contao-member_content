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
 * Add operations to tl_member
 */
$GLOBALS['TL_DCA']['tl_member']['list']['operations']['member_content'] = array
(
    'label'               => &$GLOBALS['TL_LANG']['tl_member']['member_content'],
    'href'                => 'table=tl_content',
    'icon'                => 'article.gif'
);
