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
 * Oeuvre
 */
class Oeuvre extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * intitulé
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $intitule = '';

    /**
     * date
     * 
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $date = null;

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * type
     * 
     * @var int
     */
    protected $type = 0;

    /**
     * dimentions
     * 
     * @var string
     */
    protected $dimentions = '';

    /**
     * Returns the intitule
     * 
     * @return string $intitule
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Sets the intitule
     * 
     * @param string $intitule
     * @return void
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    }

    /**
     * Returns the date
     * 
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     * 
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
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
     * Returns the type
     * 
     * @return int $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     * 
     * @param int $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Returns the dimentions
     * 
     * @return string $dimentions
     */
    public function getDimentions()
    {
        return $this->dimentions;
    }

    /**
     * Sets the dimentions
     * 
     * @param string $dimentions
     * @return void
     */
    public function setDimentions($dimentions)
    {
        $this->dimentions = $dimentions;
    }
}
