<?php
namespace Imie\GameBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Imie\GameBundle\Entity\Word;

class LoadWordData extends AbstractFixture
{
    public function load(ObjectManager $em)
    {
        $word = new Word();
        $word->setText('ARMOIRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BANC');
        $em->persist($word);

        $word = new Word();
        $word->setText('BUREAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('CABINET');
        $em->persist($word);

        $word = new Word();
        $word->setText('CARREAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHAISE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CLASSE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CLEF');
        $em->persist($word);

        $word = new Word();
        $word->setText('COIN');
        $em->persist($word);

        $word = new Word();
        $word->setText('COULOIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('DOSSIER');
        $em->persist($word);

        $word = new Word();
        $word->setText('EAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECOLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENTRER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ESCALIER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ETAGERE');
        $em->persist($word);

        $word = new Word();
        $word->setText('EXTERIEUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('FENETRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('INTERIEUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('LAVABO');
        $em->persist($word);

        $word = new Word();
        $word->setText('LIT');
        $em->persist($word);

        $word = new Word();
        $word->setText('MARCHE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MATELAS');
        $em->persist($word);

        $word = new Word();
        $word->setText('MATERNELLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MEUBLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MOUSSE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('PELUCHE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PLACARD');
        $em->persist($word);

        $word = new Word();
        $word->setText('PLAFOND');
        $em->persist($word);

        $word = new Word();
        $word->setText('PORTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('POUBELLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('RADIATEUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('RAMPE');
        $em->persist($word);

        $word = new Word();
        $word->setText('RIDEAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('ROBINET');
        $em->persist($word);

        $word = new Word();
        $word->setText('SALLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SALON');
        $em->persist($word);

        $word = new Word();
        $word->setText('SERRURE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SERVIETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SIEGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SIESTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SILENCE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SOL');
        $em->persist($word);

        $word = new Word();
        $word->setText('SOMMEIL');
        $em->persist($word);

        $word = new Word();
        $word->setText('SONNETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SORTIE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TABLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TABLEAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('TABOURET');
        $em->persist($word);

        $word = new Word();
        $word->setText('TAPIS');
        $em->persist($word);

        $word = new Word();
        $word->setText('TIROIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('TOILETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('VITRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ALLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('AMENER');
        $em->persist($word);

        $word = new Word();
        $word->setText('APPORTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('APPUYER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ATTENDRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BAILLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('COUCHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DORMIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECLAIRER');
        $em->persist($word);

        $word = new Word();
        $word->setText('EMMENER');
        $em->persist($word);

        $word = new Word();
        $word->setText('EMPORTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENTRER');
        $em->persist($word);

        $word = new Word();
        $word->setText('FERMER');
        $em->persist($word);

        $word = new Word();
        $word->setText('FRAPPER');
        $em->persist($word);

        $word = new Word();
        $word->setText('INSTALLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('LEVER');
        $em->persist($word);

        $word = new Word();
        $word->setText('OUVRIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('PRESSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('RECHAUFFER');
        $em->persist($word);

        $word = new Word();
        $word->setText('RESTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('SONNER');
        $em->persist($word);

        $word = new Word();
        $word->setText('SORTIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('VENIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('ABSENT');
        $em->persist($word);

        $word = new Word();
        $word->setText('ASSIS');
        $em->persist($word);

        $word = new Word();
        $word->setText('BAS');
        $em->persist($word);

        $word = new Word();
        $word->setText('HAUT');
        $em->persist($word);

        $word = new Word();
        $word->setText('PRESENT');
        $em->persist($word);

        $word = new Word();
        $word->setText('GAUCHE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DROITE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DEBOUT');
        $em->persist($word);

        $word = new Word();
        $word->setText('DEDANS');
        $em->persist($word);

        $word = new Word();
        $word->setText('DEHORS');
        $em->persist($word);

        $word = new Word();
        $word->setText('FACE');
        $em->persist($word);

        $word = new Word();
        $word->setText('LOIN');
        $em->persist($word);

        $word = new Word();
        $word->setText('PRES');
        $em->persist($word);

        $word = new Word();
        $word->setText('TARD');
        $em->persist($word);

        $word = new Word();
        $word->setText('TOT');
        $em->persist($word);

        $word = new Word();
        $word->setText('APRES');
        $em->persist($word);

        $word = new Word();
        $word->setText('AVANT');
        $em->persist($word);

        $word = new Word();
        $word->setText('CONTRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DANS');
        $em->persist($word);

        $word = new Word();
        $word->setText('DE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DERRIERE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DEVANT');
        $em->persist($word);

        $word = new Word();
        $word->setText('DU');
        $em->persist($word);

        $word = new Word();
        $word->setText('SOUS');
        $em->persist($word);

        $word = new Word();
        $word->setText('SUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('CRAYON');
        $em->persist($word);

        $word = new Word();
        $word->setText('STYLO');
        $em->persist($word);

        $word = new Word();
        $word->setText('FEUTRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MINE');
        $em->persist($word);

        $word = new Word();
        $word->setText('GOMME');
        $em->persist($word);

        $word = new Word();
        $word->setText('DESSIN');
        $em->persist($word);

        $word = new Word();
        $word->setText('COLORIAGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('RAYURE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PEINTURE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PINCEAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('COULEUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('CRAIE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PAPIER');
        $em->persist($word);

        $word = new Word();
        $word->setText('FEUILLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CAHIER');
        $em->persist($word);

        $word = new Word();
        $word->setText('CARNET');
        $em->persist($word);

        $word = new Word();
        $word->setText('CARTON');
        $em->persist($word);

        $word = new Word();
        $word->setText('CISEAUX');
        $em->persist($word);

        $word = new Word();
        $word->setText('DECOUPAGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PLIAGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PLI');
        $em->persist($word);

        $word = new Word();
        $word->setText('COLLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('AFFAIRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BOITE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CASIER');
        $em->persist($word);

        $word = new Word();
        $word->setText('CAISSE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TROUSSE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CARTABLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('JEU');
        $em->persist($word);

        $word = new Word();
        $word->setText('JOUET');
        $em->persist($word);

        $word = new Word();
        $word->setText('PION');
        $em->persist($word);

        $word = new Word();
        $word->setText('DOMINO');
        $em->persist($word);

        $word = new Word();
        $word->setText('PUZZLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CUBE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PERLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHOSE');
        $em->persist($word);

        $word = new Word();
        $word->setText('FORME');
        $em->persist($word);

        $word = new Word();
        $word->setText('CARRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ROND');
        $em->persist($word);

        $word = new Word();
        $word->setText('PATE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MODELER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TAMPON');
        $em->persist($word);

        $word = new Word();
        $word->setText('LIVRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('HISTOIRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BIBLIOTHEQUE');
        $em->persist($word);

        $word = new Word();
        $word->setText('IMAGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ALBUM');
        $em->persist($word);

        $word = new Word();
        $word->setText('TITRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CONTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DICTIONNAIRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MAGAZINE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CATALOGUE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PAGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('LIGNE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MOT');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENVELOPPE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ETIQUETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CARTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('APPEL');
        $em->persist($word);

        $word = new Word();
        $word->setText('AFFICHE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ALPHABET');
        $em->persist($word);

        $word = new Word();
        $word->setText('APPAREIL');
        $em->persist($word);

        $word = new Word();
        $word->setText('CAMESCOPE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CASSETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHAINE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHANSON');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHIFFRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CONTRAIRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DIFFERENCE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DOIGT');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECRAN');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECRITURE');
        $em->persist($word);

        $word = new Word();
        $word->setText('FILM');
        $em->persist($word);

        $word = new Word();
        $word->setText('FOIS');
        $em->persist($word);

        $word = new Word();
        $word->setText('FOI');
        $em->persist($word);

        $word = new Word();
        $word->setText('IDEE');
        $em->persist($word);

        $word = new Word();
        $word->setText('INSTRUMENT');
        $em->persist($word);

        $word = new Word();
        $word->setText('INTRUS');
        $em->persist($word);

        $word = new Word();
        $word->setText('LETTRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('LISTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MAGNETOSCOPE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MAIN');
        $em->persist($word);

        $word = new Word();
        $word->setText('MICRO');
        $em->persist($word);

        $word = new Word();
        $word->setText('MODELE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MUSIQUE');
        $em->persist($word);

        $word = new Word();
        $word->setText('NOM');
        $em->persist($word);

        $word = new Word();
        $word->setText('NOMBRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ORCHESTRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ORDINATEUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('PHOTO');
        $em->persist($word);

        $word = new Word();
        $word->setText('POINT');
        $em->persist($word);

        $word = new Word();
        $word->setText('POSTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('POUCE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PRENOM');
        $em->persist($word);

        $word = new Word();
        $word->setText('QUESTION');
        $em->persist($word);

        $word = new Word();
        $word->setText('RADIO');
        $em->persist($word);

        $word = new Word();
        $word->setText('SENS');
        $em->persist($word);

        $word = new Word();
        $word->setText('TAMBOUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('TELECOMMANDE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TELEPHONE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TELEVISION');
        $em->persist($word);

        $word = new Word();
        $word->setText('TROMPETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('VOIX');
        $em->persist($word);

        $word = new Word();
        $word->setText('XYLOPHONE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ZERO');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHANTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHERCHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHOISIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHUCHOTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('COLLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('COLORIER');
        $em->persist($word);

        $word = new Word();
        $word->setText('COMMENCER');
        $em->persist($word);

        $word = new Word();
        $word->setText('COMPARER');
        $em->persist($word);

        $word = new Word();
        $word->setText('COMPTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('CONSTRUIRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CONTINUER');
        $em->persist($word);

        $word = new Word();
        $word->setText('COPIER');
        $em->persist($word);

        $word = new Word();
        $word->setText('COUPER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DECHIRER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DECOLLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DECORER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DECOUPER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DEMOLIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('DESSINER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DIRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DISCUTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECOUTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECRIRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('EFFACER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENTENDRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENTOURER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENVOYER');
        $em->persist($word);

        $word = new Word();
        $word->setText('FAIRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('FINIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('FOUILLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('GOUTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('IMITER');
        $em->persist($word);

        $word = new Word();
        $word->setText('LAISSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('LIRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('METTRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MONTRER');
        $em->persist($word);

        $word = new Word();
        $word->setText('OUVRIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('PARLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PEINDRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PLIER');
        $em->persist($word);

        $word = new Word();
        $word->setText('POSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PRENDRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PREPARER');
        $em->persist($word);

        $word = new Word();
        $word->setText('RANGER');
        $em->persist($word);

        $word = new Word();
        $word->setText('RECITER');
        $em->persist($word);

        $word = new Word();
        $word->setText('RECOMMENCER');
        $em->persist($word);

        $word = new Word();
        $word->setText('REGARDER');
        $em->persist($word);

        $word = new Word();
        $word->setText('REMETTRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('REPETER');
        $em->persist($word);

        $word = new Word();
        $word->setText('REPONDRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SENTIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('SOULIGNER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TAILLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TENIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('TERMINER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TOUCHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TRAVAILLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TRIER');
        $em->persist($word);

        $word = new Word();
        $word->setText('AMI');
        $em->persist($word);

        $word = new Word();
        $word->setText('ATTENTION');
        $em->persist($word);

        $word = new Word();
        $word->setText('CAMARADE');
        $em->persist($word);

        $word = new Word();
        $word->setText('COLERE');
        $em->persist($word);

        $word = new Word();
        $word->setText('COPAIN');
        $em->persist($word);

        $word = new Word();
        $word->setText('COQUIN');
        $em->persist($word);

        $word = new Word();
        $word->setText('DAME');
        $em->persist($word);

        $word = new Word();
        $word->setText('DIRECTEUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('DIRECTRICE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DROIT');
        $em->persist($word);

        $word = new Word();
        $word->setText('EFFORT');
        $em->persist($word);

        $word = new Word();
        $word->setText('ELEVE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENFANT');
        $em->persist($word);

        $word = new Word();
        $word->setText('FATIGUE');
        $em->persist($word);

        $word = new Word();
        $word->setText('FAUTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('FILLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('GARCON');
        $em->persist($word);

        $word = new Word();
        $word->setText('GARDIEN');
        $em->persist($word);

        $word = new Word();
        $word->setText('MADAME');
        $em->persist($word);

        $word = new Word();
        $word->setText('MAITRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MAITRESSE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MENSONGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ORDRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PERSONNE');
        $em->persist($word);

        $word = new Word();
        $word->setText('RETARD');
        $em->persist($word);

        $word = new Word();
        $word->setText('JOUEUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('SOURIRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TRAVAIL');
        $em->persist($word);

        $word = new Word();
        $word->setText('AIDER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DEFENDRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DESOBEIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('DISTRIBUER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECHANGER');
        $em->persist($word);

        $word = new Word();
        $word->setText('EXPLIQUER');
        $em->persist($word);

        $word = new Word();
        $word->setText('GRONDER');
        $em->persist($word);

        $word = new Word();
        $word->setText('OBEIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('OBLIGER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PARTAGER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PRETER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PRIVER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PROMETTRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PROGRES');
        $em->persist($word);

        $word = new Word();
        $word->setText('PROGRESSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PUNIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('QUITTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('RACONTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('EXPLIQUER');
        $em->persist($word);

        $word = new Word();
        $word->setText('REFUSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('SEPARER');
        $em->persist($word);

        $word = new Word();
        $word->setText('BLOND');
        $em->persist($word);

        $word = new Word();
        $word->setText('BRUN');
        $em->persist($word);

        $word = new Word();
        $word->setText('CALME');
        $em->persist($word);

        $word = new Word();
        $word->setText('CURIEUX');
        $em->persist($word);

        $word = new Word();
        $word->setText('DIFFERENT');
        $em->persist($word);

        $word = new Word();
        $word->setText('DOUX');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENERVER');
        $em->persist($word);

        $word = new Word();
        $word->setText('GENTIL');
        $em->persist($word);

        $word = new Word();
        $word->setText('GRAND');
        $em->persist($word);

        $word = new Word();
        $word->setText('HANDICAPE');
        $em->persist($word);

        $word = new Word();
        $word->setText('INSEPARABLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('JALOUX');
        $em->persist($word);

        $word = new Word();
        $word->setText('MOYEN');
        $em->persist($word);

        $word = new Word();
        $word->setText('MUET');
        $em->persist($word);

        $word = new Word();
        $word->setText('NOIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('NOUVEAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('PETIT');
        $em->persist($word);

        $word = new Word();
        $word->setText('POLI');
        $em->persist($word);

        $word = new Word();
        $word->setText('PROPRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ROUX');
        $em->persist($word);

        $word = new Word();
        $word->setText('SAGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SALE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SERIEUX');
        $em->persist($word);

        $word = new Word();
        $word->setText('SOURD');
        $em->persist($word);

        $word = new Word();
        $word->setText('TRANQUILLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ARROSOIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('ASSIETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BALLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BATEAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('BOITE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BOUCHON');
        $em->persist($word);

        $word = new Word();
        $word->setText('BOUTEILLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BULLES');
        $em->persist($word);

        $word = new Word();
        $word->setText('CANARD');
        $em->persist($word);

        $word = new Word();
        $word->setText('CASSEROLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CUILLERE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CUVETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DOUCHE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENTONNOIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('GOUTTES');
        $em->persist($word);

        $word = new Word();
        $word->setText('LITRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MOULIN');
        $em->persist($word);

        $word = new Word();
        $word->setText('PLUIE');
        $em->persist($word);

        $word = new Word();
        $word->setText('POISSON');
        $em->persist($word);

        $word = new Word();
        $word->setText('PONT');
        $em->persist($word);

        $word = new Word();
        $word->setText('POT');
        $em->persist($word);

        $word = new Word();
        $word->setText('ROUE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SAC');
        $em->persist($word);

        $word = new Word();
        $word->setText('PLASTIQUE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SALADIER');
        $em->persist($word);

        $word = new Word();
        $word->setText('SEAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('TABLIER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TASSE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TROUS');
        $em->persist($word);

        $word = new Word();
        $word->setText('VERRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('AGITER');
        $em->persist($word);

        $word = new Word();
        $word->setText('AMUSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ARROSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ATTRAPER');
        $em->persist($word);

        $word = new Word();
        $word->setText('AVANCER');
        $em->persist($word);

        $word = new Word();
        $word->setText('BAIGNER');
        $em->persist($word);

        $word = new Word();
        $word->setText('BARBOTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('BOUCHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('BOUGER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DEBORDER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DOUCHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECLABOUSSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ESSUYER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENVOYER');
        $em->persist($word);

        $word = new Word();
        $word->setText('COULER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PARTIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('FLOTTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('GONFLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('INONDER');
        $em->persist($word);

        $word = new Word();
        $word->setText('JOUER');
        $em->persist($word);

        $word = new Word();
        $word->setText('LAVER');
        $em->persist($word);

        $word = new Word();
        $word->setText('MELANGER');
        $em->persist($word);

        $word = new Word();
        $word->setText('MOUILLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('NAGER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PLEUVOIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('PLONGER');
        $em->persist($word);

        $word = new Word();
        $word->setText('POUSSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('POUVOIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('PRESSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('RECEVOIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('REMPLIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('RENVERSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('SECHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('SERRER');
        $em->persist($word);

        $word = new Word();
        $word->setText('SOUFFLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TIRER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TOURNER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TREMPER');
        $em->persist($word);

        $word = new Word();
        $word->setText('VERSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('VIDER');
        $em->persist($word);

        $word = new Word();
        $word->setText('VOULOIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('AMUSANT');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHAUD');
        $em->persist($word);

        $word = new Word();
        $word->setText('FROID');
        $em->persist($word);

        $word = new Word();
        $word->setText('HUMIDE');
        $em->persist($word);

        $word = new Word();
        $word->setText('INTERESSANT');
        $em->persist($word);

        $word = new Word();
        $word->setText('MOUILLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SEC');
        $em->persist($word);

        $word = new Word();
        $word->setText('TRANSPARENT');
        $em->persist($word);

        $word = new Word();
        $word->setText('MOITIE');
        $em->persist($word);

        $word = new Word();
        $word->setText('AUTANT');
        $em->persist($word);

        $word = new Word();
        $word->setText('BEAUCOUP');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENCORE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MOINS');
        $em->persist($word);

        $word = new Word();
        $word->setText('PEU');
        $em->persist($word);

        $word = new Word();
        $word->setText('PLUS');
        $em->persist($word);

        $word = new Word();
        $word->setText('TROP');
        $em->persist($word);

        $word = new Word();
        $word->setText('ANORAK');
        $em->persist($word);

        $word = new Word();
        $word->setText('ARC');
        $em->persist($word);

        $word = new Word();
        $word->setText('BAGAGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BAGUETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BARBE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BONNET');
        $em->persist($word);

        $word = new Word();
        $word->setText('BOTTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BOUTON');
        $em->persist($word);

        $word = new Word();
        $word->setText('BRETELLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CAGOULE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CASQUE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CASQUETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CEINTURE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHAPEAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHAUSSETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHAUSSON');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHAUSSURE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHEMISE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CIGARETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('COL');
        $em->persist($word);

        $word = new Word();
        $word->setText('COLLANT');
        $em->persist($word);

        $word = new Word();
        $word->setText('COURONNE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CRAVATE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CULOTTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECHARPE');
        $em->persist($word);

        $word = new Word();
        $word->setText('EPEE');
        $em->persist($word);

        $word = new Word();
        $word->setText('FEE');
        $em->persist($word);

        $word = new Word();
        $word->setText('FLECHE');
        $em->persist($word);

        $word = new Word();
        $word->setText('FUSIL');
        $em->persist($word);

        $word = new Word();
        $word->setText('GANT');
        $em->persist($word);

        $word = new Word();
        $word->setText('HABIT');
        $em->persist($word);

        $word = new Word();
        $word->setText('JEAN');
        $em->persist($word);

        $word = new Word();
        $word->setText('JUPE');
        $em->persist($word);

        $word = new Word();
        $word->setText('LACET');
        $em->persist($word);

        $word = new Word();
        $word->setText('LAINE');
        $em->persist($word);

        $word = new Word();
        $word->setText('LINGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('LUNETTES');
        $em->persist($word);

        $word = new Word();
        $word->setText('MAGICIEN');
        $em->persist($word);

        $word = new Word();
        $word->setText('MAGIE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MAILLOT');
        $em->persist($word);

        $word = new Word();
        $word->setText('MANCHE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MANTEAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('MOUCHOIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('MOUFLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('NOEUD');
        $em->persist($word);

        $word = new Word();
        $word->setText('PAIRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PANTALON');
        $em->persist($word);

        $word = new Word();
        $word->setText('PIED');
        $em->persist($word);

        $word = new Word();
        $word->setText('POCHE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PRINCE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PYJAMA');
        $em->persist($word);

        $word = new Word();
        $word->setText('REINE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ROBE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ROI');
        $em->persist($word);

        $word = new Word();
        $word->setText('RUBAN');
        $em->persist($word);

        $word = new Word();
        $word->setText('SEMELLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SOLDAT');
        $em->persist($word);

        $word = new Word();
        $word->setText('SOCIERE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TACHE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TAILLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TALON');
        $em->persist($word);

        $word = new Word();
        $word->setText('TISSU');
        $em->persist($word);

        $word = new Word();
        $word->setText('TRICOT');
        $em->persist($word);

        $word = new Word();
        $word->setText('UNIFORME');
        $em->persist($word);

        $word = new Word();
        $word->setText('VALISE');
        $em->persist($word);

        $word = new Word();
        $word->setText('VESTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('VETEMENT');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHANGER');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHAUSSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('COUVRIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('DEGUISER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DESHABILLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENLEVER');
        $em->persist($word);

        $word = new Word();
        $word->setText('HABILLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('LACER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PORTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('RESSEMBLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('CLAIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('COURT');
        $em->persist($word);

        $word = new Word();
        $word->setText('ETROIT');
        $em->persist($word);

        $word = new Word();
        $word->setText('FONCE');
        $em->persist($word);

        $word = new Word();
        $word->setText('JOLI');
        $em->persist($word);

        $word = new Word();
        $word->setText('LARGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('LONG');
        $em->persist($word);

        $word = new Word();
        $word->setText('MULTICOLORE');
        $em->persist($word);

        $word = new Word();
        $word->setText('NU');
        $em->persist($word);

        $word = new Word();
        $word->setText('BIEN');
        $em->persist($word);

        $word = new Word();
        $word->setText('MAL');
        $em->persist($word);

        $word = new Word();
        $word->setText('MIEUX');
        $em->persist($word);

        $word = new Word();
        $word->setText('PRESQUE');
        $em->persist($word);

        $word = new Word();
        $word->setText('AIGUILLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('AMPOULE');
        $em->persist($word);

        $word = new Word();
        $word->setText('AVION');
        $em->persist($word);

        $word = new Word();
        $word->setText('BOIS');
        $em->persist($word);

        $word = new Word();
        $word->setText('BOUT');
        $em->persist($word);

        $word = new Word();
        $word->setText('BRICOLAGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BRUIT');
        $em->persist($word);

        $word = new Word();
        $word->setText('CABANE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CARTON');
        $em->persist($word);

        $word = new Word();
        $word->setText('CLOU');
        $em->persist($word);

        $word = new Word();
        $word->setText('COLLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CROCHET');
        $em->persist($word);

        $word = new Word();
        $word->setText('ELASTIQUE');
        $em->persist($word);

        $word = new Word();
        $word->setText('FICELLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('FIL');
        $em->persist($word);

        $word = new Word();
        $word->setText('MARIONNETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MARTEAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('METAL');
        $em->persist($word);

        $word = new Word();
        $word->setText('METRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MORCEAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('MOTEUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('OBJET');
        $em->persist($word);

        $word = new Word();
        $word->setText('OUTIL');
        $em->persist($word);

        $word = new Word();
        $word->setText('PEINTURE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PINCEAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('PLANCHE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PLATRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SCIE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TOURNEVIS');
        $em->persist($word);

        $word = new Word();
        $word->setText('VIS');
        $em->persist($word);

        $word = new Word();
        $word->setText('VOITURE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ARRACHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ATTACHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('CASSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('COUDRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DETRUIRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECORCHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENFILER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENFONCER');
        $em->persist($word);

        $word = new Word();
        $word->setText('FABRIQUER');
        $em->persist($word);

        $word = new Word();
        $word->setText('MESURER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PERCER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PINCER');
        $em->persist($word);

        $word = new Word();
        $word->setText('REPARER');
        $em->persist($word);

        $word = new Word();
        $word->setText('REUSSIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('SERVIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('TAPER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TROUER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TROUVER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ADROIT');
        $em->persist($word);

        $word = new Word();
        $word->setText('DIFFICILE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('FACILE');
        $em->persist($word);

        $word = new Word();
        $word->setText('LISSE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MALADROIT');
        $em->persist($word);

        $word = new Word();
        $word->setText('POINTU');
        $em->persist($word);

        $word = new Word();
        $word->setText('TORDU');
        $em->persist($word);

        $word = new Word();
        $word->setText('ACCIDENT');
        $em->persist($word);

        $word = new Word();
        $word->setText('AEROPORT');
        $em->persist($word);

        $word = new Word();
        $word->setText('CAMION');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENGIN');
        $em->persist($word);

        $word = new Word();
        $word->setText('FEU');
        $em->persist($word);

        $word = new Word();
        $word->setText('FREIN');
        $em->persist($word);

        $word = new Word();
        $word->setText('FUSEE');
        $em->persist($word);

        $word = new Word();
        $word->setText('GARAGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('GARE');
        $em->persist($word);

        $word = new Word();
        $word->setText('GRUE');
        $em->persist($word);

        $word = new Word();
        $word->setText('HELICOPTERE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MOTO');
        $em->persist($word);

        $word = new Word();
        $word->setText('PANNE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PARKING');
        $em->persist($word);

        $word = new Word();
        $word->setText('PILOTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PNEU');
        $em->persist($word);

        $word = new Word();
        $word->setText('QUAI');
        $em->persist($word);

        $word = new Word();
        $word->setText('TRAIN');
        $em->persist($word);

        $word = new Word();
        $word->setText('VIRAGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('VITESSE');
        $em->persist($word);

        $word = new Word();
        $word->setText('VOYAGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('WAGON');
        $em->persist($word);

        $word = new Word();
        $word->setText('ZIGZAG');
        $em->persist($word);

        $word = new Word();
        $word->setText('ARRETER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ATTERRIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('BOUDER');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHARGER');
        $em->persist($word);

        $word = new Word();
        $word->setText('CONDUIRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DEMARRER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DISPARAITRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DONNER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECRASER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENVOLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('GARDER');
        $em->persist($word);

        $word = new Word();
        $word->setText('GARER');
        $em->persist($word);

        $word = new Word();
        $word->setText('MANQUER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PARTIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('POSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('RECULER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ROULER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TENDRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TRANSPORTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('VOLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ABIME');
        $em->persist($word);

        $word = new Word();
        $word->setText('ANCIEN');
        $em->persist($word);

        $word = new Word();
        $word->setText('BLANC');
        $em->persist($word);

        $word = new Word();
        $word->setText('BLEU');
        $em->persist($word);

        $word = new Word();
        $word->setText('CASSE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CINQ');
        $em->persist($word);

        $word = new Word();
        $word->setText('DERNIER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DEUX');
        $em->persist($word);

        $word = new Word();
        $word->setText('DEUXIEME');
        $em->persist($word);

        $word = new Word();
        $word->setText('DIX');
        $em->persist($word);

        $word = new Word();
        $word->setText('GRIS');
        $em->persist($word);

        $word = new Word();
        $word->setText('GROS');
        $em->persist($word);

        $word = new Word();
        $word->setText('HUIT');
        $em->persist($word);

        $word = new Word();
        $word->setText('JAUNE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MEME');
        $em->persist($word);

        $word = new Word();
        $word->setText('NEUF');
        $em->persist($word);

        $word = new Word();
        $word->setText('PAREIL');
        $em->persist($word);

        $word = new Word();
        $word->setText('PREMIER');
        $em->persist($word);

        $word = new Word();
        $word->setText('QUATRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ROUGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SEPT');
        $em->persist($word);

        $word = new Word();
        $word->setText('SEUL');
        $em->persist($word);

        $word = new Word();
        $word->setText('SIX');
        $em->persist($word);

        $word = new Word();
        $word->setText('SOLIDE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TROIS');
        $em->persist($word);

        $word = new Word();
        $word->setText('TROISIEME');
        $em->persist($word);

        $word = new Word();
        $word->setText('UN');
        $em->persist($word);

        $word = new Word();
        $word->setText('VERT');
        $em->persist($word);

        $word = new Word();
        $word->setText('DESSUS');
        $em->persist($word);

        $word = new Word();
        $word->setText('AUTOUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('VITE');
        $em->persist($word);

        $word = new Word();
        $word->setText('VERS');
        $em->persist($word);

        $word = new Word();
        $word->setText('ACROBATE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ARRET');
        $em->persist($word);

        $word = new Word();
        $word->setText('ARRIERE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BARRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BARREAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('BORD');
        $em->persist($word);

        $word = new Word();
        $word->setText('BRAS');
        $em->persist($word);

        $word = new Word();
        $word->setText('CERCEAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHAISE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHEVILLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHUTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('COEUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('CORDE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CORPS');
        $em->persist($word);

        $word = new Word();
        $word->setText('COTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('COU');
        $em->persist($word);

        $word = new Word();
        $word->setText('COUDE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CUISSE');
        $em->persist($word);

        $word = new Word();
        $word->setText('DANGER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DOIGTS');
        $em->persist($word);

        $word = new Word();
        $word->setText('DOS');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECHASSES');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECHELLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('EPAULE');
        $em->persist($word);

        $word = new Word();
        $word->setText('EQUIPE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ESCABEAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('FESSE');
        $em->persist($word);

        $word = new Word();
        $word->setText('FILET');
        $em->persist($word);

        $word = new Word();
        $word->setText('FOND');
        $em->persist($word);

        $word = new Word();
        $word->setText('GENOU');
        $em->persist($word);

        $word = new Word();
        $word->setText('GYMNASTIQUE');
        $em->persist($word);

        $word = new Word();
        $word->setText('HANCHE');
        $em->persist($word);

        $word = new Word();
        $word->setText('JAMBE');
        $em->persist($word);

        $word = new Word();
        $word->setText('JEU');
        $em->persist($word);

        $word = new Word();
        $word->setText('MAINS');
        $em->persist($word);

        $word = new Word();
        $word->setText('MILIEU');
        $em->persist($word);

        $word = new Word();
        $word->setText('MONTAGNE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('ESCALADE');
        $em->persist($word);

        $word = new Word();
        $word->setText('MUSCLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('NUMERO');
        $em->persist($word);

        $word = new Word();
        $word->setText('ONGLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PARCOURS');
        $em->persist($word);

        $word = new Word();
        $word->setText('PAS');
        $em->persist($word);

        $word = new Word();
        $word->setText('PASSERELLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PENTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PEUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('PIED');
        $em->persist($word);

        $word = new Word();
        $word->setText('PLONGEOIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('POIGNET');
        $em->persist($word);

        $word = new Word();
        $word->setText('POING');
        $em->persist($word);

        $word = new Word();
        $word->setText('PONT');
        $em->persist($word);

        $word = new Word();
        $word->setText('SIGNE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SINGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('POUTRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('EQUILIBRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PRISE');
        $em->persist($word);

        $word = new Word();
        $word->setText('RIVIERE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CROCODILE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ROULADE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PIROUETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SAUT');
        $em->persist($word);

        $word = new Word();
        $word->setText('SERPENT');
        $em->persist($word);

        $word = new Word();
        $word->setText('SPORT');
        $em->persist($word);

        $word = new Word();
        $word->setText('SUIVANT');
        $em->persist($word);

        $word = new Word();
        $word->setText('TETE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TOBOGGAN');
        $em->persist($word);

        $word = new Word();
        $word->setText('TOUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('TRAMPOLINE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TUNNEL');
        $em->persist($word);

        $word = new Word();
        $word->setText('VENTRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ACCROCHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('APPUYER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ARRIVER');
        $em->persist($word);

        $word = new Word();
        $word->setText('BAISSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('BALANCER');
        $em->persist($word);

        $word = new Word();
        $word->setText('BONDIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('BOUSCULER');
        $em->persist($word);

        $word = new Word();
        $word->setText('COGNER');
        $em->persist($word);

        $word = new Word();
        $word->setText('COURIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('DANSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DEPASSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DESCENDRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECARTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('ESCALADER');
        $em->persist($word);

        $word = new Word();
        $word->setText('GAGNER');
        $em->persist($word);

        $word = new Word();
        $word->setText('GENER');
        $em->persist($word);

        $word = new Word();
        $word->setText('GLISSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('GRIMPER');
        $em->persist($word);

        $word = new Word();
        $word->setText('MARCHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PATTES');
        $em->persist($word);

        $word = new Word();
        $word->setText('DEBOUT');
        $em->persist($word);

        $word = new Word();
        $word->setText('MONTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('MONTRER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PENCHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PERCHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PERDRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('RAMPER');
        $em->persist($word);

        $word = new Word();
        $word->setText('RATER');
        $em->persist($word);

        $word = new Word();
        $word->setText('REMPLACER');
        $em->persist($word);

        $word = new Word();
        $word->setText('RESPIRER');
        $em->persist($word);

        $word = new Word();
        $word->setText('RETOURNER');
        $em->persist($word);

        $word = new Word();
        $word->setText('REVENIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('SAUTER');
        $em->persist($word);

        $word = new Word();
        $word->setText('SOULEVER');
        $em->persist($word);

        $word = new Word();
        $word->setText('SUIVRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TOMBER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TRANSPIRER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TRAVERSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DANGEUREUX');
        $em->persist($word);

        $word = new Word();
        $word->setText('EPAIS');
        $em->persist($word);

        $word = new Word();
        $word->setText('FORT');
        $em->persist($word);

        $word = new Word();
        $word->setText('GROUPE');
        $em->persist($word);

        $word = new Word();
        $word->setText('IMMOBILE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ROND');
        $em->persist($word);

        $word = new Word();
        $word->setText('SERRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SOUPLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ENSEMBLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ICI');
        $em->persist($word);

        $word = new Word();
        $word->setText('JAMAIS');
        $em->persist($word);

        $word = new Word();
        $word->setText('TOUJOURS');
        $em->persist($word);

        $word = new Word();
        $word->setText('SOUVENT');
        $em->persist($word);

        $word = new Word();
        $word->setText('BAGARRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BALANCOIRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BALLON');
        $em->persist($word);

        $word = new Word();
        $word->setText('BANDE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BICYCLETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('BILLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CAGE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECUREUIL');
        $em->persist($word);

        $word = new Word();
        $word->setText('CERF');
        $em->persist($word);

        $word = new Word();
        $word->setText('VOLANT');
        $em->persist($word);

        $word = new Word();
        $word->setText('CHATEAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('COUP');
        $em->persist($word);

        $word = new Word();
        $word->setText('COUR');
        $em->persist($word);

        $word = new Word();
        $word->setText('COURSE');
        $em->persist($word);

        $word = new Word();
        $word->setText('ECHASSE');
        $em->persist($word);

        $word = new Word();
        $word->setText('FLAQUE');
        $em->persist($word);

        $word = new Word();
        $word->setText('EAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('PAIX');
        $em->persist($word);

        $word = new Word();
        $word->setText('PARDON');
        $em->persist($word);

        $word = new Word();
        $word->setText('PARTIE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PEDALE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PELLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('POMPE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PREAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('RAQUETTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('RAYON');
        $em->persist($word);

        $word = new Word();
        $word->setText('RECREATION');
        $em->persist($word);

        $word = new Word();
        $word->setText('SABLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('SIFFLET');
        $em->persist($word);

        $word = new Word();
        $word->setText('SIGNE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TAS');
        $em->persist($word);

        $word = new Word();
        $word->setText('TRICYCLE');
        $em->persist($word);

        $word = new Word();
        $word->setText('TUYAU');
        $em->persist($word);

        $word = new Word();
        $word->setText('VELO');
        $em->persist($word);

        $word = new Word();
        $word->setText('FILE');
        $em->persist($word);

        $word = new Word();
        $word->setText('RANG');
        $em->persist($word);

        $word = new Word();
        $word->setText('BAGARRER');
        $em->persist($word);

        $word = new Word();
        $word->setText('BATTRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('CACHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('CRACHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('CREUSER');
        $em->persist($word);

        $word = new Word();
        $word->setText('CRIER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DEGONFLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('DISPUTE');
        $em->persist($word);

        $word = new Word();
        $word->setText('EMPECHER');
        $em->persist($word);

        $word = new Word();
        $word->setText('GALOPER');
        $em->persist($word);

        $word = new Word();
        $word->setText('HURLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('JONGLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('LANCER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PEDALER');
        $em->persist($word);

        $word = new Word();
        $word->setText('PLAINDRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PLEURER');
        $em->persist($word);

        $word = new Word();
        $word->setText('POURSUIVRE');
        $em->persist($word);

        $word = new Word();
        $word->setText('PROTEGER');
        $em->persist($word);

        $word = new Word();
        $word->setText('SAIGNER');
        $em->persist($word);

        $word = new Word();
        $word->setText('SALIR');
        $em->persist($word);

        $word = new Word();
        $word->setText('SIFFLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('SURVEILLER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TRAINER');
        $em->persist($word);

        $word = new Word();
        $word->setText('TROUVER');
        $em->persist($word);

        $word = new Word();
        $word->setText('FOU');
        $em->persist($word);

        $em->flush();
    }
}