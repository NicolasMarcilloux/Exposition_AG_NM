<?php
namespace AGNM\ExpositionAgNm\Domain\Model;

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
 * Nationalite
 */
class Nationalite extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nom
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';

    /**
     * code iso
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $codeISO = '';

    /**
     * Returns the nom
     * 
     * @return string $nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets the nom
     * 
     * @param string $nom
     * @return void
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Returns the codeISO
     * 
     * @return string $codeISO
     */
    public function getCodeISO()
    {
        return $this->codeISO;
    }

    /**
     * Sets the codeISO
     * 
     * @param string $codeISO
     * @return void
     */
    public function setCodeISO($codeISO)
    {
        $this->codeISO = $codeISO;
    }
}
