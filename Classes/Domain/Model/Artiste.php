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
 * Artiste
 */
class Artiste extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * photo
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $photo = null;

    /**
     * nom
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';

    /**
     * biographie
     * 
     * @var string
     */
    protected $biographie = '';

    /**
     * date de  naissance
     * 
     * @var \DateTime
     */
    protected $dateNaissance = null;

    /**
     * date de décès
     * 
     * @var \DateTime
     */
    protected $dateDeces = null;

    /**
     * influences
     * 
     * @var string
     */
    protected $influences = '';

    /**
     * oeuvres
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AGNM\ExpositionAgNm\Domain\Model\Oeuvre>
     * @cascade remove
     */
    protected $oeuvres = null;

    /**
     * nationalité
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AGNM\ExpositionAgNm\Domain\Model\Nationalite>
     * @cascade remove
     */
    protected $nationalite = null;

    /**
     * Returns the photo
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the photo
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photo = $photo;
    }

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
     * Returns the biographie
     * 
     * @return string $biographie
     */
    public function getBiographie()
    {
        return $this->biographie;
    }

    /**
     * Sets the biographie
     * 
     * @param string $biographie
     * @return void
     */
    public function setBiographie($biographie)
    {
        $this->biographie = $biographie;
    }

    /**
     * Returns the dateNaissance
     * 
     * @return \DateTime $dateNaissance
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Sets the dateNaissance
     * 
     * @param \DateTime $dateNaissance
     * @return void
     */
    public function setDateNaissance(\DateTime $dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * Returns the dateDeces
     * 
     * @return \DateTime $dateDeces
     */
    public function getDateDeces()
    {
        return $this->dateDeces;
    }

    /**
     * Sets the dateDeces
     * 
     * @param \DateTime $dateDeces
     * @return void
     */
    public function setDateDeces(\DateTime $dateDeces)
    {
        $this->dateDeces = $dateDeces;
    }

    /**
     * Returns the influences
     * 
     * @return string $influences
     */
    public function getInfluences()
    {
        return $this->influences;
    }

    /**
     * Sets the influences
     * 
     * @param string $influences
     * @return void
     */
    public function setInfluences($influences)
    {
        $this->influences = $influences;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->oeuvres = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->nationalite = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Oeuvre
     * 
     * @param \AGNM\ExpositionAgNm\Domain\Model\Oeuvre $oeuvre
     * @return void
     */
    public function addOeuvre(\AGNM\ExpositionAgNm\Domain\Model\Oeuvre $oeuvre)
    {
        $this->oeuvres->attach($oeuvre);
    }

    /**
     * Removes a Oeuvre
     * 
     * @param \AGNM\ExpositionAgNm\Domain\Model\Oeuvre $oeuvreToRemove The Oeuvre to be removed
     * @return void
     */
    public function removeOeuvre(\AGNM\ExpositionAgNm\Domain\Model\Oeuvre $oeuvreToRemove)
    {
        $this->oeuvres->detach($oeuvreToRemove);
    }

    /**
     * Returns the oeuvres
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AGNM\ExpositionAgNm\Domain\Model\Oeuvre> $oeuvres
     */
    public function getOeuvres()
    {
        return $this->oeuvres;
    }

    /**
     * Sets the oeuvres
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AGNM\ExpositionAgNm\Domain\Model\Oeuvre> $oeuvres
     * @return void
     */
    public function setOeuvres(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $oeuvres)
    {
        $this->oeuvres = $oeuvres;
    }

    /**
     * Adds a Nationalite
     * 
     * @param \AGNM\ExpositionAgNm\Domain\Model\Nationalite $nationalite
     * @return void
     */
    public function addNationalite(\AGNM\ExpositionAgNm\Domain\Model\Nationalite $nationalite)
    {
        $this->nationalite->attach($nationalite);
    }

    /**
     * Removes a Nationalite
     * 
     * @param \AGNM\ExpositionAgNm\Domain\Model\Nationalite $nationaliteToRemove The Nationalite to be removed
     * @return void
     */
    public function removeNationalite(\AGNM\ExpositionAgNm\Domain\Model\Nationalite $nationaliteToRemove)
    {
        $this->nationalite->detach($nationaliteToRemove);
    }

    /**
     * Returns the nationalite
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AGNM\ExpositionAgNm\Domain\Model\Nationalite> $nationalite
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Sets the nationalite
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AGNM\ExpositionAgNm\Domain\Model\Nationalite> $nationalite
     * @return void
     */
    public function setNationalite(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $nationalite)
    {
        $this->nationalite = $nationalite;
    }
}
