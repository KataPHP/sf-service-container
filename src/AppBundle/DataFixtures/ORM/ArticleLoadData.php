<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Article;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class LoadArticleData
 *
 * @author Florent DESPIERRES <florent.despierres.ext@francetv.fr>
 */
class LoadArticleData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * load fixtures.
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $article = (new Article())
                ->setTitle($faker->text(25))
                ->setBody($faker->text(250))
            ;

            $manager->persist($article);
            $this->setReference(sprintf('article_%s', $i), $article);
        }

        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 1;
    }
}
