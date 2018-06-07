<?php
namespace AGNM\ExpositionAgNm\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Gonzalez Alexandre <alexandregonzalez33470@gmail.com>
 * @author Marcilloux Nicolas <nicolas.marcilloux@etu.u-bordeaux.fr>
 */
class OeuvreControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \AGNM\ExpositionAgNm\Controller\OeuvreController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\AGNM\ExpositionAgNm\Controller\OeuvreController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllOeuvresFromRepositoryAndAssignsThemToView()
    {

        $allOeuvres = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $oeuvreRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $oeuvreRepository->expects(self::once())->method('findAll')->will(self::returnValue($allOeuvres));
        $this->inject($this->subject, 'oeuvreRepository', $oeuvreRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('oeuvres', $allOeuvres);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenOeuvreToView()
    {
        $oeuvre = new \AGNM\ExpositionAgNm\Domain\Model\Oeuvre();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('oeuvre', $oeuvre);

        $this->subject->showAction($oeuvre);
    }
}
