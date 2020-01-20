<?php

namespace Baul\TestBundle\Module;
use Contao\Database;
use Contao\Database\Result;
use Contao\Database\Statement;


class MemberListModule extends \Module
{
    /**
     * @var string
     */
    protected $strTemplate = 'mod_memberList';

    /**
     * Displays a wildcard in the back end.
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $template = new \BackendTemplate('be_wildcard');

            $template->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['memberList'][0]) . ' ###';
            $template->title = $this->headline;
            $template->id = $this->id;
            $template->link = $this->name;
            $template->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $template->parse();
        }

        return parent::generate();
    }

    /**
     * Generates the module.
     */
    protected function compile()
    {
        $this->import('Database');
        $result = Database::getInstance()->prepare("SELECT lastname FROM tl_member")->query();
        $this->Template->members = $result['lastname'];
    }
}
