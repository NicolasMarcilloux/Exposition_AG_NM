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
 * Exposition
 */
class Exposition extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nom
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';

    /**
     * horaires
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $horaires = '';

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * visuel
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $visuel = null;

    /**
     * tarif
     * 
     * @var string
     */
    protected $tarif = '';

    /**
     * dateDebut
     * 
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateDebut = null;

    /**
     * dateFin
     * 
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateFin = null;

    /**
     * le lieu
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AGNM\ExpositionAgNm\Domain\Model\Lieu>
     * @cascade remove
     */
    protected $lieu = null;

    /**
     * les oeuvres
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AGNM\ExpositionAgNm\Domain\Model\Oeuvre>
     * @lazy
     */
    protected $oeuvres = null;

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
     * Returns the horaires
     * 
     * @return string $horaires
     */
    public function getHoraires()
    {
        return $this->horaires;
    }

    /**
     * Sets the horaires
     * 
     * @param string $horaires
     * @return void
     */
    public function setHoraires($horaires)
    {
        $this->horaires = $horaires;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the visuel
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $visuel
     */
    public function getVisuel()
    {
        return $this->visuel;
    }

    /**
     * Sets the visuel
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $visuel
     * @return void
     */
    public function setVisuel(\TYPO3\CMS\Extbase\Domain\Model\FileReference $visuel)
    {
        $this->visuel = $visuel;
    }

    /**
     * Returns the tarif
     * 
     * @return string $tarif
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Sets the tarif
     * 
     * @param string $tarif
     * @return void
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
    }

    /**
     * Returns the dateDebut
     * 
     * @return \DateTime $dateDebut
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Sets the dateDebut
     * 
     * @param \DateTime $dateDebut
     * @return void
     */
    public function setDateDebut(\DateTime $dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * Returns the dateFin
     * 
     * @return \DateTime $dateFin
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Sets the dateFin
     * 
     * @param \DateTime $dateFin
     * @return void
     */
    public function setDateFin(\DateTime $dateFin)
    {
        $this->dateFin = $dateFin;
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
        $this->lieu = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->oeuvres = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Lieu
     * 
     * @param \AGNM\ExpositionAgNm\Domain\Model\Lieu $lieu
     * @return void
     */
    public function addLieu(\AGNM\ExpositionAgNm\Domain\Model\Lieu $lieu)
    {
        $this->lieu->attach($lieu);
    }

    /**
     * Removes a Lieu
     * 
     * @param \AGNM\ExpositionAgNm\Domain\Model\Lieu $lieuToRemove The Lieu to be removed
     * @return void
     */
    public function removeLieu(\AGNM\ExpositionAgNm\Domain\Model\Lieu $lieuToRemove)
    {
        $this->lieu->detach($lieuToRemove);
    }

    /**
     * Returns the lieu
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AGNM\ExpositionAgNm\Domain\Model\Lieu> $lieu
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Sets the lieu
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AGNM\ExpositionAgNm\Domain\Model\Lieu> $lieu
     * @return void
     */
    public function setLieu(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $lieu)
    {
        $this->lieu = $lieu;
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
}
