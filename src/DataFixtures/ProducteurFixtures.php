<?php

namespace App\DataFixtures;

use App\Entity\Producteur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProducteurFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $jos_producteur = array(
            array('id_producteur' => '1','raison_sociale' => 'Producteur Test','nom_responsable' => 'producteur','prenom_responsable' => 'producteurtest','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1211','raison_sociale' => 'Francelyne Empeyrou - Arruhat','nom_responsable' => 'Empeyrou - Arruhat','prenom_responsable' => 'Francelyne','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1212','raison_sociale' => 'Philippe CLAVERIE','nom_responsable' => 'CLAVERIE','prenom_responsable' => 'Philippe ','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1213','raison_sociale' => 'EARL PICAPOUT','nom_responsable' => '','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1214','raison_sociale' => 'Michel CAMBAYOU','nom_responsable' => 'CAMBAYOU','prenom_responsable' => 'Michel','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1215','raison_sociale' => 'Jean Pierre et Martine LESTELLE','nom_responsable' => 'LESTELLE','prenom_responsable' => 'Jean Pierre et Martine','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1216','raison_sociale' => 'La ferme de Lou Viens','nom_responsable' => '','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1217','raison_sociale' => 'Didier Lemonnier','nom_responsable' => 'Lemonnier','prenom_responsable' => 'Didier','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1218','raison_sociale' => 'Sandrine BARUS "SCEA Myrtilles de Bournos"','nom_responsable' => 'BARUS','prenom_responsable' => 'Sandrine','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1219','raison_sociale' => 'LOUIT','nom_responsable' => '','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1220','raison_sociale' => 'Armement LAFARGUE','nom_responsable' => '','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1221','raison_sociale' => 'CHÂTEAU LAPUYADE - SCEA CLOS MARIE-LOUISE','nom_responsable' => '','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1223','raison_sociale' => 'SCEA Bioagricola','nom_responsable' => '','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1224','raison_sociale' => 'Delicies de Momas','nom_responsable' => '','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1225','raison_sociale' => 'Isabelle et Pascal LABASSE','nom_responsable' => '','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1226','raison_sociale' => 'La Couveuse','nom_responsable' => '','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1227','raison_sociale' => 'Jean-Jacques ARRIEULA','nom_responsable' => 'ARRIEULA','prenom_responsable' => 'Jean-Jacques','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1228','raison_sociale' => 'Romain VEAU','nom_responsable' => 'VEAU','prenom_responsable' => 'Romain','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1229','raison_sociale' => 'Chrystèle et Jean Barrère','nom_responsable' => 'Barrère','prenom_responsable' => 'Chrystèle et Jean','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1232','raison_sociale' => 'Champignons du Madiran','nom_responsable' => '','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1233','raison_sociale' => 'Jean et Viviane Lagrange','nom_responsable' => 'Lagrange','prenom_responsable' => 'Jean et Viviane Lagrange','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1234','raison_sociale' => 'GAEC PIETOMETI','nom_responsable' => 'GAEC','prenom_responsable' => 'PIETOMETI','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1235','raison_sociale' => 'Amap Lons','nom_responsable' => 'Raynaud','prenom_responsable' => 'Patrick','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1236','raison_sociale' => 'EARL BISCAR','nom_responsable' => '','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1237','raison_sociale' => 'Didier ARRAMON','nom_responsable' => 'ARRAMON','prenom_responsable' => 'Didier','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1238','raison_sociale' => 'Gautier DESES','nom_responsable' => 'DESES','prenom_responsable' => 'Gautier','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1239','raison_sociale' => 'Brasserie de l\'Arrec','nom_responsable' => '','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1240','raison_sociale' => 'Cidrerie Béarnaise','nom_responsable' => '','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1241','raison_sociale' => 'Clémentine PRADALIER','nom_responsable' => 'PRADALIER','prenom_responsable' => 'Clémentine','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1242','raison_sociale' => 'SCIC L\'Odyssée d\'Engrains','nom_responsable' => '','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1243','raison_sociale' => 'Brigitte LACADEE','nom_responsable' => 'LACADEE','prenom_responsable' => 'Brigitte','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1244','raison_sociale' => 'Domaine LARROUDE','nom_responsable' => 'LARROUDE','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => ''),
            array('id_producteur' => '1245','raison_sociale' => 'Ferme GAILLICOU','nom_responsable' => '','prenom_responsable' => '','adresse_producteur' => '','cp_producteur' => '','ville_producteur' => '','tel_fixe_producteur' => '','tel_port_producteur' => '')
          );

          foreach ($jos_producteur as $prod){

            $producteur = new Producteur();

            $producteur -> setId($prod['id_producteur']);
            $producteur -> setRaisonSociale($prod['raison_sociale']);
            $producteur -> setNomResponsable($prod['nom_responsable']);
            $producteur -> setPrenomResponsable($prod['prenom_responsable']);
            $producteur -> setAdresseProducteur($prod['adresse_producteur']);
            $producteur -> setCpProducteur($prod['cp_producteur']);
            $producteur -> setVilleProducteur($prod['ville_producteur']);
            $producteur -> setTelFixeProducteur($prod['tel_fixe_producteur']);
            $producteur -> setTelPortProducteur($prod['tel_port_producteur']);

            $manager -> persist($producteur);

          }

        $manager->flush();
    }
}
