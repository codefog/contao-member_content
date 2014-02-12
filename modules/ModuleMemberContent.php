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

namespace Contao;

/**
 * Class ModuleMemberContent
 *
 * Front end module "member content".
 */
class ModuleMemberContent extends \Module
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_member_content';


    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['member_content'][0]) . ' ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

        if (!FE_USER_LOGGED_IN)
        {
            return '';
        }

        $this->import('FrontendUser', 'User');
        return parent::generate();
    }


    /**
     * Generate the module
     */
    protected function compile()
    {
        $this->Template->content = '';

        if (($objElement = \ContentModel::findPublishedByPidAndTable($this->User->id, 'tl_member')) !== null)
        {
            while ($objElement->next())
            {
                $this->Template->content .= $this->getContentElement($objElement->id);
            }
        }
    }
}
