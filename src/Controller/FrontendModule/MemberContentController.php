<?php

declare(strict_types=1);

namespace Codefog\MemberContentBundle\Controller\FrontendModule;

use Contao\ContentModel;
use Contao\Controller;
use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsFrontendModule;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Contao\FrontendUser;
use Contao\ModuleModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsFrontendModule('member_content', category: 'user', template: 'frontend_module/member_content')]
class MemberContentController extends AbstractFrontendModuleController
{
    protected function getResponse(FragmentTemplate $template, ModuleModel $model, Request $request): Response
    {
        $user = $this->getUser();

        if (!$user instanceof FrontendUser) {
            return new Response();
        }

        $elements = [];

        if (($contentModels = ContentModel::findPublishedByPidAndTable($user->id, 'tl_member')) !== null) {
            foreach ($contentModels as $contentModel) {
                $elements[] = Controller::getContentElement($contentModel->id);
            }
        }

        $template->set('elements', $elements);

        return $template->getResponse();
    }
}
