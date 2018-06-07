<?php
namespace AGNM\ExpositionAgNm\Controller;

/***
 *
 * This file is part of the "exposition_AG_NM" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Gonzalez Alexandre <alexandregonzalez33470@gmail.com>
 *           Marcilloux Nicolas <nicolas.marcilloux@etu.u-bordeaux.fr>
 *
 ***/

/**
 * ExpositionController
 */
class ExpositionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * expositionRepository
     * 
     * @var \AGNM\ExpositionAgNm\Domain\Repository\ExpositionRepository
     * @inject
     */
    protected $expositionRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $expositions = $this->expositionRepository->findAll();
        $this->view->assign('expositions', $expositions);
    }

    /**
     * action show
     * 
     * @param \AGNM\ExpositionAgNm\Domain\Model\Exposition $exposition
     * @return void
     */
    public function showAction(\AGNM\ExpositionAgNm\Domain\Model\Exposition $exposition)
    {
        $this->view->assign('exposition', $exposition);
    }
}
