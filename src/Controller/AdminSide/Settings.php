<?php
namespace Azrael\CMS\Controller\AdminSide;

use Azrael\CMS\Admin\Panel;
use Azrael\CMS\Component\Controller;

class Settings extends Controller
{
    public function index()
    {
        $variables = Panel::instance()->getTemplateVariables();
        return self::getTemplate('settings.twig', $variables);
    }
}
