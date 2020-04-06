<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{

   /*  private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    } */

// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager.

    public function load(ObjectManager $manager)
    {
        $jos_infosuser = array(
            array('Id' => '0','Nom' => 'PRIOLET','Prenom' => 'Pascal','AdressePostale' => NULL,'CP' => NULL,'Ville' => NULL,'telFixe' => NULL,'telPort' => NULL,'charte_acceptee' => '1'),
            array('Id' => '183','Nom' => 'RAYNAUD','Prenom' => 'Maryline','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '187','Nom' => 'FILLION','Prenom' => 'Bertrand','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '189','Nom' => 'Reynaud','Prenom' => 'Stéphanie','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '192','Nom' => 'Bourdet ','Prenom' => 'Eric','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '193','Nom' => 'Davasse','Prenom' => 'Marie-Pierre','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '194','Nom' => 'LAVENU','Prenom' => 'Anne','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'PAU','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '195','Nom' => 'LE VOT','Prenom' => 'Claude','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '196','Nom' => 'TOULET','Prenom' => 'Maryse','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '197','Nom' => 'MECHIN','Prenom' => 'Sabrina','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '198','Nom' => 'CABAUD','Prenom' => 'Jean-Louis','AdressePostale' => 'chemin de la route','CP' => '64230','Ville' => 'LESCAR','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '199','Nom' => 'BLASCO','Prenom' => 'Monique','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '200','Nom' => 'Castera','Prenom' => 'Lulu  et Zizou','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons ','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '201','Nom' => 'Laubie','Prenom' => 'Elisabeth','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '202','Nom' => 'Menendez','Prenom' => 'Valentin','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '203','Nom' => 'Roger','Prenom' => 'Hélène','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '204','Nom' => 'JOSEPH','Prenom' => 'Irène','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '205','Nom' => 'Neau','Prenom' => 'Joël','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'PAU','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '206','Nom' => 'RAYNAUD','Prenom' => 'Patrick','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '0'),
            array('Id' => '207','Nom' => 'ROBERT','Prenom' => 'Yoann','AdressePostale' => 'chemin de la route','CP' => '64','Ville' => NULL,'telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '0'),
            array('Id' => '209','Nom' => 'Lamballe','Prenom' => 'Stéphane','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '212','Nom' => 'vignaud','Prenom' => 'christelle','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '214','Nom' => 'MAGGION','Prenom' => 'NATHALIE','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'PAU','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '215','Nom' => 'pouts','Prenom' => 'marie-manuelle','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '216','Nom' => 'Guillou','Prenom' => 'Anais','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'pau','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '217','Nom' => 'Hauret-Labarthe','Prenom' => 'Claire','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '218','Nom' => 'Mares','Prenom' => 'Lucie','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '219','Nom' => 'DA ROCHA ','Prenom' => 'Patricia','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '220','Nom' => 'Bourdet','Prenom' => 'Celine','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '221','Nom' => 'schiano','Prenom' => 'valérie','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '223','Nom' => 'PERRY','Prenom' => 'Nathalie','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'PAU','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '224','Nom' => 'piteu','Prenom' => 'daniele','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '225','Nom' => 'Bacelon','Prenom' => 'Marie','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '226','Nom' => 'ROCHER','Prenom' => 'Hélène','AdressePostale' => 'chemin de la route','CP' => '64230','Ville' => 'LESCAR','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '227','Nom' => 'JOSE','Prenom' => 'cécile','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '228','Nom' => 'Lemaire Khripouchine','Prenom' => 'Lara & Jacques','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Billère','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '229','Nom' => 'BOIN GAY','Prenom' => 'Veronique','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'Pau','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '230','Nom' => 'KRAIMPS','Prenom' => 'LAURENCE','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '231','Nom' => 'LOUSTAU','Prenom' => 'ISABELLE','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '232','Nom' => 'valton','Prenom' => 'edouard','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '233','Nom' => 'LAPERNE','Prenom' => 'FLORENCE','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '234','Nom' => 'Ricard','Prenom' => 'Estelle','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '235','Nom' => 'DEMEULENAERE','Prenom' => 'Marjorie','AdressePostale' => 'chemin de la route','CP' => '64230','Ville' => 'LESCAR','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '236','Nom' => 'Lourenço','Prenom' => 'Véronique','AdressePostale' => 'chemin de la route','CP' => '64170','Ville' => 'Labastide Monrejeau','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '237','Nom' => 'BAYLE','Prenom' => 'KARINE','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '238','Nom' => 'GIRARD','Prenom' => 'Veronique','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '239','Nom' => 'RAPACZ','Prenom' => 'Marie-Hélène','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '241','Nom' => 'COSQUER ','Prenom' => 'Isabelle','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons ','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '242','Nom' => 'PRUDHOMME','Prenom' => 'Bruno','AdressePostale' => 'chemin de la route','CP' => '64230','Ville' => 'LESCAR','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '243','Nom' => 'MAPELLI','Prenom' => 'CELINE','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '244','Nom' => 'JARIGE','Prenom' => 'BERNADETTE','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '245','Nom' => 'Cauhape','Prenom' => 'Colette','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '246','Nom' => 'FRICHET','Prenom' => 'ANNE','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '247','Nom' => 'maudire-lapassouse','Prenom' => 'pierre et anne','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'pau','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '248','Nom' => 'KRIEGER MONTEIL','Prenom' => 'NAVINA','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'BILLERE','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '249','Nom' => 'vignau','Prenom' => 'martine','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'pau','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '250','Nom' => 'dupouy','Prenom' => 'annie','AdressePostale' => 'chemin de la route','CP' => '64230','Ville' => 'LESCAR','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '251','Nom' => 'Boulaigue','Prenom' => 'Brigitte','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '252','Nom' => 'Robert ','Prenom' => 'Yoann','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '253','Nom' => 'EZVAN','Prenom' => 'FABIENNE','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '254','Nom' => 'VILLE','Prenom' => 'EMMANUELLE','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '256','Nom' => 'FOURCADE','Prenom' => 'ERIC','AdressePostale' => 'chemin de la route','CP' => '64230','Ville' => 'lescar','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '257','Nom' => 'Lassalle','Prenom' => 'Noëlle','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '259','Nom' => 'Murat','Prenom' => 'Stéphane','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '260','Nom' => 'PREUDHOMME','Prenom' => 'caroline','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '261','Nom' => 'Turpault','Prenom' => 'Sylvie','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '262','Nom' => 'Pescara','Prenom' => 'Christophe','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '263','Nom' => 'BELLOC','Prenom' => 'Sandrine','AdressePostale' => 'chemin de la route','CP' => '64','Ville' => 'PAU','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '264','Nom' => 'camy','Prenom' => 'pascale','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '265','Nom' => 'MILLET-MARQUE','Prenom' => 'Eliette','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '267','Nom' => 'NAUDY','Prenom' => 'Patrice','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '268','Nom' => 'LAURENT','Prenom' => 'Yveline','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '269','Nom' => 'GINGRAS-PERNIN','Prenom' => 'Perrine','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '270','Nom' => 'LETOILE','Prenom' => 'Sylain','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '271','Nom' => 'Lecornu','Prenom' => 'Jérémie','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '272','Nom' => 'Thibaut','Prenom' => 'Anne','AdressePostale' => 'chemin de la route','CP' => '64230','Ville' => 'Lescar','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '277','Nom' => 'sautriot','Prenom' => 'marielle','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '278','Nom' => 'BONNARD','Prenom' => 'CHRYSTELE','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '282','Nom' => 'MONFOUGA','Prenom' => 'AMANDINE','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '283','Nom' => 'sbihi','Prenom' => 'aurélie','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'pau','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '285','Nom' => 'Bessi','Prenom' => 'Sandrine','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '286','Nom' => 'Brunetta ','Prenom' => 'Nadine ','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '292','Nom' => 'LECOCQ','Prenom' => 'Daphné','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '295','Nom' => 'LE ROY','Prenom' => 'LAURA','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '296','Nom' => 'EVRARD','Prenom' => 'PASCAL','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '299','Nom' => 'sempe','Prenom' => 'sophie','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '302','Nom' => 'CALES','Prenom' => 'VALERIE','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'PAU','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '312','Nom' => 'LOUSSALEZ','Prenom' => 'Nicolas','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '316','Nom' => 'MERE','Prenom' => 'CELINE','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '318','Nom' => 'PITEU','Prenom' => 'sandrine ','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '327','Nom' => 'JOLIVET','Prenom' => 'Joëlle','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'PAU','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '329','Nom' => 'le bris','Prenom' => 'marianne','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '335','Nom' => 'Michel ','Prenom' => 'Stéphanie','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '350','Nom' => 'Ramirez ','Prenom' => 'Edmary ','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '351','Nom' => 'RIGOULET / LEFLOCH','Prenom' => 'Johanna et Erwan','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'BILLERE','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '359','Nom' => 'Hourat','Prenom' => 'Guillaume ','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'Pau','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '364','Nom' => 'Chomeau','Prenom' => 'Clément','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '370','Nom' => 'Empeyrou-Arruhat','Prenom' => 'Francelyne','AdressePostale' => 'chemin de la route','CP' => '64230','Ville' => 'Caubios-Loos','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '373','Nom' => 'Grandmougin','Prenom' => 'veronique','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'Pau','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '374','Nom' => 'Mendizabal','Prenom' => 'Ioritz','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '375','Nom' => 'PELE','Prenom' => 'Thierry','AdressePostale' => 'chemin de la route','CP' => '64230','Ville' => 'ARBUS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '380','Nom' => 'Sbihi','Prenom' => 'Lauriane','AdressePostale' => 'chemin de la route','CP' => '64320','Ville' => 'Lee','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '381','Nom' => 'Moreau','Prenom' => 'Marie','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '382','Nom' => 'Leconte','Prenom' => 'Valérie','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'Pau','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '384','Nom' => 'LUDOT','Prenom' => 'Mélanie','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '385','Nom' => 'BAGDASSARIAN','Prenom' => 'Isabelle','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'PAU','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '386','Nom' => 'QUEHEILLE','Prenom' => 'Pierre','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '387','Nom' => 'Laugaa','Prenom' => 'Nathalie','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '390','Nom' => 'Cazaux Mora','Prenom' => 'Christophe Léa','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '399','Nom' => 'Bidan ','Prenom' => 'Agathe ','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons ','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '406','Nom' => 'BRONSIN ','Prenom' => 'Nathalie ','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '407','Nom' => 'crohare','Prenom' => 'ingrid','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '408','Nom' => 'Rauly','Prenom' => 'Claire','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '410','Nom' => 'carvalho','Prenom' => 'elodie','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '411','Nom' => 'Perry','Prenom' => 'Jean christophe','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'Pau','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '414','Nom' => 'PEDEMANAUD','Prenom' => 'Veronique','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '417','Nom' => 'peyroutet','Prenom' => 'guillaume','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '418','Nom' => 'PAPIN-ARNAUD','Prenom' => 'KARINE','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '423','Nom' => 'LEROUX','Prenom' => 'LAURIANNE','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '426','Nom' => 'CHOULOT','Prenom' => 'marie paule','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '427','Nom' => 'Felipe Vital','Prenom' => 'Diego','AdressePostale' => 'chemin de la route','CP' => '64230','Ville' => 'Lescar','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '428','Nom' => 'Vimeney','Prenom' => 'Julie','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '429','Nom' => 'MESSAKSOUDY','Prenom' => 'Charlotte','AdressePostale' => 'chemin de la route','CP' => '64110','Ville' => 'SAINT FAUST','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '431','Nom' => 'NAKACHE','Prenom' => 'Mélanie','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '435','Nom' => 'Lamouret','Prenom' => 'Amandine','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '436','Nom' => 'depriester','Prenom' => 'laura','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '440','Nom' => 'GOUT','Prenom' => 'François','AdressePostale' => 'chemin de la route','CP' => '64230','Ville' => 'mazerolles','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '446','Nom' => 'Tachat','Prenom' => 'camille','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '447','Nom' => 'Tachat','Prenom' => 'Camille','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '448','Nom' => 'BOISSON','Prenom' => 'Cyrille','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '450','Nom' => 'Vial','Prenom' => 'Delphine','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '453','Nom' => 'joos','Prenom' => 'veronique','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '454','Nom' => 'Poveda','Prenom' => 'Emilie','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => '¨Pau','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '457','Nom' => 'Junqua','Prenom' => 'Emmanuelle','AdressePostale' => 'chemin de la route','CP' => '64230','Ville' => 'Sauvagnon','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '462','Nom' => 'BLANC','Prenom' => 'JOSETTE','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '466','Nom' => 'Gard','Prenom' => 'Yoann','AdressePostale' => 'chemin de la route','CP' => '64000','Ville' => 'Pau','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '468','Nom' => 'Bidart','Prenom' => 'Laëtitia ','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '470','Nom' => 'Dubois','Prenom' => 'Mariannick','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'Lons','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '472','Nom' => 'Boulin','Prenom' => 'Laetitia et Charles ','AdressePostale' => 'chemin de la route','CP' => '64450','Ville' => 'ARGELOS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '478','Nom' => 'de Vienne','Prenom' => 'Florent','AdressePostale' => 'chemin de la route','CP' => '64230','Ville' => 'LESCAR','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '482','Nom' => 'CESSAC','Prenom' => 'Juliette','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '486','Nom' => 'matran','Prenom' => 'ghislaine','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'billère','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '487','Nom' => 'LECÊTRE','Prenom' => 'Lydia','AdressePostale' => 'chemin de la route','CP' => '64140','Ville' => 'LONS','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '489','Nom' => 'DUBERTRAND','Prenom' => 'REGINE','AdressePostale' => 'chemin de la route','CP' => '64230','Ville' => 'UZEIN','telFixe' => '0123456789','telPort' => '0123456789','charte_acceptee' => '1'),
            array('Id' => '492','Nom' => 'CASTAING','Prenom' => 'Pierre','AdressePostale' => 'par là','CP' => '64000','Ville' => 'PAU','telFixe' => NULL,'telPort' => NULL,'charte_acceptee' => '0')
          );

          foreach ($jos_infosuser as $user){

            $infosuser = new User();
        
            $infosuser -> setNom($user['Nom']);
            $infosuser -> setPrenom($user['Prenom']);
            $infosuser -> setAdresse($user['AdressePostale']);
            $infosuser -> setVille($user['Ville']);
            $infosuser -> setCP($user['CP']);
            $infosuser -> setTelFixe($user['telFixe']);
            $infosuser -> setTelPort1($user['telPort']);
            $infosuser -> setCharteAcceptee($user['charte_acceptee']);

            $manager -> persist($infosuser);

          }

           /*  Creation d'un User Admin:

            $infosadmin = new User();

            $infosadmin -> setNom($user['Toto']);
            $infosadmin -> setPrenom($user['Lolo']);
            $infosadmin -> setAdresse($user['Avenue des Lilas']);
            $infosadmin -> setVille($user['PAu']);
            $infosadmin -> setRole($user['role_admin']);
            $infosadmin -> setIdentifiant($user['Toto']);
            $infosadmin -> setPassword($this->passwordEncoder->encodePassword($infosadmin, 'toto'));

            $manager -> persist($infosadmin) */;

        $manager->flush();
    }
}
