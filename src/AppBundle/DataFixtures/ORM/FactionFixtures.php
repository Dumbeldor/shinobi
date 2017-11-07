<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Pr;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use GameBundle\Entity\Faction;

class FactionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $gensou = new Faction();
        $gensou->setName("Gensou");
        $gensou->setDescription(" Le village de Gensou est protégé par un long fleuve qui traverse la zone Yuukan. Ses shinobis sont experts dans les illusions, le genjutsu. Leur style est donc particulièrement défensif, mais leur jutsus d'attaques, très difficiles à maîtriser, sont des plus puissants.");
        $gensou->setPoint(0);

        $mahou = new Faction();
        $mahou->setName("Mahou");
        $mahou->setDescription("Le village de Mahou, caché dans les dangereuses forêts de Yuukan, est protégé par des shinobis maniant particulièrement l'art des jutsus. Leur style n'est ni offensif, ni défensif, il est plutôt polyvalent et leur affinité naturelle est le feu.");
        $mahou->setPoint(0);

        $chikara = new Faction();
        $chikara->setName("Chikara");
        $chikara->setDescription("Le village caché de Chikara, entouré par le désert de Yuukan, a été fondé par des experts en techniques de corps à corps. Leur style de taijutsu très offensif leur assure une très bonne attaque lors de combats, sans être influencé par leur réserve de chakra.");
        $chikara->setPoint(0);

        $manager->persist($gensou);
        $manager->persist($mahou);
        $manager->persist($chikara);

        $manager->flush();
    }
}
?>