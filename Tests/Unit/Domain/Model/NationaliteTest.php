<?php
namespace AGNM\ExpositionAgNm\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Gonzalez Alexandre <alexandregonzalez33470@gmail.com>
 * @author Marcilloux Nicolas <nicolas.marcilloux@etu.u-bordeaux.fr>
 */
class NationaliteTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \AGNM\ExpositionAgNm\Domain\Model\Nationalite
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \AGNM\ExpositionAgNm\Domain\Model\Nationalite();
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
    public function getCodeISOReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCodeISO()
        );

    }

    /**
     * @test
     */
    public function setCodeISOForStringSetsCodeISO()
    {
        $this->subject->setCodeISO('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'codeISO',
            $this->subject
        );

    }
}
