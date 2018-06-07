<?php
namespace AGNM\ExpositionAgNm\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Gonzalez Alexandre <alexandregonzalez33470@gmail.com>
 * @author Marcilloux Nicolas <nicolas.marcilloux@etu.u-bordeaux.fr>
 */
class OeuvreTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \AGNM\ExpositionAgNm\Domain\Model\Oeuvre
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \AGNM\ExpositionAgNm\Domain\Model\Oeuvre();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIntituleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIntitule()
        );

    }

    /**
     * @test
     */
    public function setIntituleForStringSetsIntitule()
    {
        $this->subject->setIntitule('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'intitule',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );

    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
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
    public function getTypeReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setTypeForIntSetsType()
    {
    }

    /**
     * @test
     */
    public function getDimentionsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDimentions()
        );

    }

    /**
     * @test
     */
    public function setDimentionsForStringSetsDimentions()
    {
        $this->subject->setDimentions('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'dimentions',
            $this->subject
        );

    }
}
