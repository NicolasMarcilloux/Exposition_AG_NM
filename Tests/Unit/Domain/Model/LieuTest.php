<?php
namespace AGNM\ExpositionAgNm\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Gonzalez Alexandre <alexandregonzalez33470@gmail.com>
 * @author Marcilloux Nicolas <nicolas.marcilloux@etu.u-bordeaux.fr>
 */
class LieuTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \AGNM\ExpositionAgNm\Domain\Model\Lieu
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \AGNM\ExpositionAgNm\Domain\Model\Lieu();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNomReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNom()
        );

    }

    /**
     * @test
     */
    public function setNomForStringSetsNom()
    {
        $this->subject->setNom('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nom',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLatitudeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLatitude()
        );

    }

    /**
     * @test
     */
    public function setLatitudeForStringSetsLatitude()
    {
        $this->subject->setLatitude('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'latitude',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLongitudeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLongitude()
        );

    }

    /**
     * @test
     */
    public function setLongitudeForStringSetsLongitude()
    {
        $this->subject->setLongitude('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'longitude',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAdresseReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAdresse()
        );

    }

    /**
     * @test
     */
    public function setAdresseForStringSetsAdresse()
    {
        $this->subject->setAdresse('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'adresse',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getCodePostalReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCodePostal()
        );

    }

    /**
     * @test
     */
    public function setCodePostalForStringSetsCodePostal()
    {
        $this->subject->setCodePostal('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'codePostal',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getVilleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVille()
        );

    }

    /**
     * @test
     */
    public function setVilleForStringSetsVille()
    {
        $this->subject->setVille('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ville',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );

    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAccessiblePMRReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAccessiblePMR()
        );

    }

    /**
     * @test
     */
    public function setAccessiblePMRForBoolSetsAccessiblePMR()
    {
        $this->subject->setAccessiblePMR(true);

        self::assertAttributeEquals(
            true,
            'accessiblePMR',
            $this->subject
        );

    }
}
