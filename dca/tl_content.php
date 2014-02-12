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
 * Dynamically add the parent table
 */
if (Input::get('do') == 'member')
{
    $GLOBALS['TL_DCA']['tl_content']['config']['ptable'] = 'tl_member';
    $GLOBALS['TL_DCA']['tl_content']['list']['sorting']['headerFields'] = array('firstname', 'lastname', 'username', 'email');
}
