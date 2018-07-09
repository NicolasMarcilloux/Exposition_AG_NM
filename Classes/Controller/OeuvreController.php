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
 * OeuvreController
 */
class OeuvreController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * oeuvreRepository
     *
     * @var \AGNM\ExpositionAgNm\Domain\Repository\OeuvresRepository
     * @inject
     */
    protected $oeuvreRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $oeuvres = $this->oeuvreRepository->findAll();
        $this->view->assign('oeuvres', $oeuvres);
    }

    /**
     * action show
     * 
     * @param \AGNM\ExpositionAgNm\Domain\Model\Oeuvre $oeuvre
     * @return void
     */
    public function showAction(\AGNM\ExpositionAgNm\Domain\Model\Oeuvre $oeuvre)
    {
        $this->view->assign('oeuvre', $oeuvre);
    }

    /**
     * action highlight
     * 
     * @return void
     */
    public function highlightAction()
    {
        $oeuvres = $this->oeuvreRepository->findAll();
        $this->view->assign('oeuvres', $oeuvres);
    }
}
