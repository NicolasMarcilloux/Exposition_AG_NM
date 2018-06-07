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
 * ArtisteController
 */
class ArtisteController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * artisteRepository
     * 
     * @var \AGNM\ExpositionAgNm\Domain\Repository\ArtisteRepository
     * @inject
     */
    protected $artisteRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $artistes = $this->artisteRepository->findAll();
        $this->view->assign('artistes', $artistes);
    }

    /**
     * action show
     * 
     * @param \AGNM\ExpositionAgNm\Domain\Model\Artiste $artiste
     * @return void
     */
    public function showAction(\AGNM\ExpositionAgNm\Domain\Model\Artiste $artiste)
    {
        $this->view->assign('artiste', $artiste);
    }
}
