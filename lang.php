<?php
    if (isset($_POST['langTitle'])) {
        $_SESSION['myLang'] = $_POST['langTitle'];
    }

    include_once("deepl/DeepLException.php");
    include_once("deepl/Glossary.php");
    include_once("deepl/ClientInterface.php");
    include_once("deepl/Client.php");
    include_once("deepl/DeepL.php");
    $authKey = '388596b1-cea5-9129-a4f0-ac7b6cf184ca:fx';
    $deepl   = new DeepL($authKey,2,'api-free.deepl.com');

    $text001 = "Facilitez votre Gestion Santé et Sécurité au Travail";
    $text002 = "Nouveauté";
    $text003 = "Prise en compte de la nouvelle loi sur le Document Unique";
    $text004 = "Générer vos documents uniques, Réaliser vos Audits, évaluer les risques liés à la pénibilité de vos emplois, Répertorier les accidents de travail et maladies professionnelles.";
    $text005 = "Présentation de notre plateforme";
    $text006 = "Une interface intuitive, des automatisations, une plateforme saas toujours disponible";
    $text007 = "Une Solution Dédiée à la gestion de vos problématiques Santé et Sécurité au Travail";
    $text008 = "Une Interface Ergonomique";
    $text009 = "Une interface qui s’adaptera à vos enjeux et à vos contraintes grâce à une ergonomie intuitive et conviviale";
    $text010 = "Des Alertes Automatiques";
    $text011 = "Recevez des alertes et des relances programmée par email pour vous rappeler et vous aider à suivre vos actions";
    $text012 = "Des Statistiques Complètes";
    $text013 = "Générez des rapports statistiques et des graphiques analytiques permettant de synthétiser en un clic vos données";
    $text014 = "Nos Modules Santé et Sécurité au Travail";
    $text015 = "Nos modules sont activables à tout moment et communique entre eux pour partager les informations.";
    $text016 = "Accident du Travail";
    $text017 = "Document Unique";
    $text018 = "Plan de Prévention";
    $text019 = "Pénibilité";
    $text020 = "Audit";
    $text021 = "Faciliter les analyses<br/>Recenser toutes les fiches des accidents de vos employés<br/>Piloter et gérer vos plans d'actions<br/><br/>";
    $text022 = "Cliquez pour plus d'information sur les Accidents du Travail";
    $text023 = "Répertorier vos risques<br/>Identifier les dangers par unités de travail<br/>Automatiser l’édition de votre document unique et de gagner du temps<br/><br/>";
    $text024 = "Cliquez pour plus d'information sur le Document Unique";
    $text025 = "Créer vos plans à partir de modèle<br/>Gestion des échanges avec vos prestatires<br/>Signature Electronique des documens<br/><br/>";
    $text026 = "Cliquez pour plus d'information sur le Plan de Prévention";
    $text027 = "Définir des facteurs de pénibilité éligibles au sein de votre organisation<br/>Définir de seuils, limites, intensités, durées quotidiennes et/ou hebdomadaires ou fréquences d’exposition<br/>Définir les cotations de la pénibilité des emplois de l’organisation<br/><br/>";
    $text028 = "Cliquez pour plus d'information sur le Pénibilité";
    $text029 = "Véritable outil essentiel dans votre démarche Santé & sécurité au travail, l’audit permet de vérifier l’application, la conformité et l’efficacité de votre système de management S&ST ainsi que les plans d’actions envisageables pour l’améliorer";
    $text030 = "Cliquez pour plus d'information sur l'Audit";
    $text031 = "Une Gestion simple et globale du Plan d'Action";
    $text032 = "Visualiser, Filtrer et Mettre à jour les différentes actions qui vous sont attribuées.<br/><br/>Comme administrateur, vous suivez en quelques clics l'état des actions des différents pilotes.";
    $text033 = "Accès Sécurisé en HTTPS avec Certificat SSL<br/>Sauvegarde automatique de vos données<br/>Nos serveurs sont localisés en France";
    $text034 = "Un écosystème pour gérer l'ensemble des éléments Santé et Sécurité au Travail et pour vous permettre de vous concentrer sur votre activité.";
    $text035 = "Différents type d'accès : administrateur, Manager, Collaborateur";
    $text036 = "Saisissez vos données simplement et rapidement";
    $text037 = "Piloter avec nos tableaux de bord";
    $text038 = "Suivre les actions avec les relances";
    $text039 = "Visualiser les statistiques";
    $text040 = "Totalement paramétrable";
    $text041 = "Un Support dédié et Humain pour vous épauler";
    $text042 = "Nous vous accompagnons pour vous offrir un support Humain et Efficace car vous êtes plus qu'un client !<br/><br/>Dans le processus d'utilisation de la plateforme nous sommes à vos côtés pour déployer, former et conseiller afin que l'utilisation en soit optimale.";
    $text043 = "Support Téléphonique";
    $text044 = "Gestion des Tickets";
    $text045 = "Support par Email";
    $text046 = "Tout au long du processus de mise en place de la plateforme<br/>nos spécialistes métier et nos ingénieurs techniques<br/>sont toujours à vos côtés.";
    $text047 = "Solution Santé et Sécurité au Travail g&eacute;n&eacute;rer vos documents uniques, R&eacute;aliser vos Audits, &Eacute;valuer les risques li&eacute;s à la p&eacute;nibilit&eacute; de vos emplois, R&eacute;pertorier les accidents de travail et maladies professionnelles.";
    $text048 = "Nos Modules";
    $text049 = "Tout droit réservé par";
    $text050 = "Vous souhaitez découvrer la plateforme SISTEOS ?";
    $text051 = "Contactez-nous et nos équipes commerciales vous proposerons une démonstration complète de notre plateforme pour découvrir comment vous facilitez la gestion santé et sécurité de votre entreprise.";
    $text052 = "Cliquez pour vous inscrire";
    $text053 = "Module Document Unique | DU | DUEvRP - Facile, Rapide et Intuitif";
    $text054 = "Créer, mettre à jour et éditer le Document Unique à partir d’un modèle pré-paramétrable Répertorier vos risques Identifier les dangers par unités de travail Automatiser l’édition de votre document unique et de gagner du temps";
    $text055 = "Les avantages de votre module Document Unique";
    $text056 = "Grâce au Module Document Unique du logiciel SISTÉOS, vous pourrez :";
    $text057 = "Créer, mettre à jour et éditer le Document Unique à partir d’un modèle pré-paramétrable";
    $text058 = "Évaluer le niveau de conformité de votre entreprise en matière de Santé & Sécurité au Travail";
    $text059 = "Objectivé par un audit personnalisé et prenant en compte le périmètre des obligations légales applicables dans votre secteur d’activité";
    $text060 = "Votre logiciel Document Unique vous permet de :";
    $text061 = "Répondre de l’<strong>obligation</strong> d’établir un document unique d’évaluation des risques professionnels";
    $text062 = "De <strong>répertorier</strong> vos risques";
    $text063 = "D’<strong>identifier</strong> les dangers par unité de travail";
    $text064 = "D’<strong>automatiser</strong> l’édition de votre document unique et de <strong>gagner du temps";
    $text065 = "De <strong>diagnostiquer</strong> vos risques";
    $text066 = "Créer des <strong>plans d’actions</strong> adaptés à votre <entreprise></entreprise>";
    $text067 = "1. Diagnostiquer vos risques";
    $text068 = "Répondre de l’obligation d’établir un document unique d’évaluation des risques professionnels<br/>Répertorier vos risques<br/>Identifier les risques par unités de travail";
    $text069 = "2. Déterminer des plans d’actions en fonction des risques par unité de travail";
    $text070 = "Automatiser la mise en oeuvre de votre Document Unique d’Évaluation des Risques Professionnels et de gagner en temps et en efficacité<br/>Archiver le Document Unique d’Évaluation des risques par année";
    $text071 = "3. Piloter et gérer vos plans d’actions";
    $text072 = "Évaluer et mesurer l’efficacité des actions et l’amélioration des performances de votre entreprise grâce à des tableaux de bord et graphiques visuels.<br/>Capitalisez sur vos données et gagnez un temps un précieux.";
    $text073 = "Téléphone";
    $text074 = "Votre demande a bien été enregistrée.<br/>Nos équipes commerciales vous contacteront rapidement.";
    $text075 = "Prénom et Nom";
    $text076 = "Numéro de Téléphone";
    $text077 = "Société";
    $text078 = "Adresse Email";
    $text079 = "Votre Message";
    $text080 = "Envoyer le Message";
    $text081 = "Nous Contacter";
    $text082 = "Découvrez la plateforme SISTEOS";
    $text083 = "Découvrez l'ensemble de nos fonctionnalités par visio-conférence<br/>ou sur site avec un des nos commerciaux.";
    $text084 = "Module Accident du Travail | AT/MP - Facile, Rapide et Intuitif";
    $text085 = "Faciliter les analyses<br/>Recenser toutes les fiches des accidents de vos employés<br/>Piloter et gérer vos plans d'actions";
    $text086 = "Les avantages de votre module Accident du Travail";
    $text087 = "Grâce au Module Accident du Travail du logiciel SISTEOS, vous pourrez :";
    $text088 = "Le module facilitera l’analyse des accidents du travail avec arrêts. Cette aide précieuse vous permettra de construire l’arbre des causes.";
    $text089 = "Répertorier et analyser les différents types d’accidents comprenant les presq’accidents et les accidents bénins.";
    $text090 = "Gérer les retours de visites médicales et télécharger les AT/MP en cours de validation.";
    $text091 = "Quels sont les accidents travails/Maladie professionnelles les plus courant dans votre entreprise ?";
    $text092 = "Le module d’analyse d’accident au travail et des maladies professionnelles vous permet de le savoir et d’en réduire le nombre. Ce logiciel vous permet de mettre en place un suivi avec des tableaux le tout répertorié dans un plan d’action.<br/>Une meilleure analyse pour une diminution des risques au sein de votre entreprise. Une solution pour plusieurs avantages :";
    $text093 = "Un enjeu financier en réduisant vos coûts";
    $text094 = "Une meilleure productivité en définissant les causes pour mettre en place des actions";
    $text095 = "Une réponse correcte aux obligations légales";
    $text096 = "1. Faciliter les analyses AT/MP";
    $text097 = "Analyse des accidents de travail avec arrêt, construction de l’arbre des causes, presque accident, accident bénin...<br/>Formaliser la mise en place des plans d’action et suivis réguliers<br/>Protéger l’exposition de vos salariés à l’ensemble des facteurs de risques identifiés";
    $text098 = "2. Recenser toutes les fiches des accidents de vos employés";
    $text099 = "Visualiser les circonstances de l’accident ou de la maladie (témoignage, documents, analyses des causes, description)<br/>Visualiser les plans d’action qui ont été mis en place (actions retenues et non retenues)";
    $text100 = "3. Piloter et gérer vos plans d’actions";
    $text101 = "Évaluer et mesurer l’efficacité des actions et l’amélioration des performances grâce à des tableaux de bord, des statistiques et des graphiques visuels.";
    $text102 = "Accueil";
    $text103 = "Autres Modules";
    $text104 = "Module Plan de Prévention - Facile, Rapide et Intuitif";
    $text105 = "Module Pénibilité au travail : Diagnostic, Gestion et Pilotage simple et intuitif";
    $text106 = "Définir des facteurs de pénibilité éligibles au sein de votre organisation<br/>Définir de seuils, limites, intensités, durées quotidiennes et/ou hebdomadaires ou fréquences d’exposition<br/>Définir les cotations de la pénibilité des emplois de l’organisation<br/>Mettre en place des plans d’actions";
    $text107 = "Les avantages de votre module Pénibilité au travail";
    $text108 = "Grâce au Module Pénibilité au travail du logiciel SISTÉOS, vous pourrez :";
    $text109 = "Définir des facteurs de pénibilité éligibles au sein de votre organisation";
    $text110 = "Définir des seuils, limites, intensités, durées quotidiennes et/ou hebdomadaires ou fréquences d’exposition";
    $text111 = "Capitaliser des mesures de prévention techniques ou organisationnelles et les moyens de protection collective déjà en place";
    $text112 = "Définir les cotations de la pénibilité des emplois de l’organisation";
    $text113 = "Mettre en place des plans d’actions";
    $text114 = "1. Diagnostiquer la pénibilité au travail";
    $text115 = "Définition des facteurs de pénibilité éligibles au sein de votre organisation<br/>Mesure des seuils, intensités, durées, fréquences d’exposition<br/>Gradation des cotations des facteurs de pénibilité au travail<br/>Éditer des fiches d’exposition par emploi avec les actions mises en place";
    $text116 = "2. Déterminer des plans d’actions en fonction des risques par emploi";
    $text117 = "Planification des actions de prévention<br/>Mise en œuvre et suivi des plans d’action<br/>Gestion d’état d’avancement des plans d’action et de l’atteinte des objectifs fixés";
    $text118 = "3. Piloter et gérer vos plans d’actions";
    $text119 = "Évaluer et mesurer l’efficacité des actions et l’amélioration des performances grâce à des tableaux de bord et graphiques visuels";
    $text120 = "Module Audit - Une interface simple et intuitive pour réaliser vos audits QSE";
    $text121 = "Véritable outil essentiel dans votre démarche Santé & sécurité au travail, l’audit permet de vérifier l’application, la conformité et l’efficacité de votre système de management S&ST ainsi que les plans d’actions envisageables pour l’améliorer. En fonction de vos attentes, les audits peuvent porter sur votre système complet ou bien sur une seule partie";
    $text122 = "Diagnostiquer vos risques à l’aide d’un outil éprouvé : l’Audit (pratique)";
    $text123 = "Confronter les exigences de conformité légale applicables à votre secteur d’activité avec la réalité de l’existant dans votre entreprise";
    $text124 = "Évaluer votre niveau de maitrise des exigences attendues en matière de SST compte tenu du périmètre de vos activité";
    $text125 = "Bâtir un programme d’amélioration de performance en suivant votre document audit";
    $text126 = "Cibler des actions à prioriser pour améliorer la prise en charge de la SST";
    $text127 = "Effectuer un suivi des progrès interne accomplis en réalisant périodiquement le diagnostic";
    $text128 = "Soutenir le dialogue autour du management de la prévention des risques pour la SST au sein de votre établissement";
    $text129 = "1. Évaluer votre niveau de maîtrise de votre politique S&ST";
    $text130 = "Evaluer le niveau de conformité de votre entreprise en matière de Santé & Sécurité au Travail, objectivé par un audit personnalisé et prenant en compte le périmètre des obligations légales applicables dans votre secteur d’activité<br/>Calculer le niveau de performance en matière de maîtrise des obligations légales, recommandations et bonnes pratiques dans le domaine de la Santé & Sécurité au Travail";
    $text131 = "2. Bâtir un programme d’amélioration de performances à partir de grilles paramétrables";
    $text132 = "Thèmes, Items, Cotations .... Tout est paramétrable";
    $text133 = "3. Piloter et gérer vos plans d’actions";
    $text134 = "Evaluer et Mesurer l’efficacité des actions et l’amélioration des performances grâce à des tableaux de bord et graphiques visuels";
    $text135 = "";
    $text136 = "";
    $text137 = "";
    $text138 = "";
    $text139 = "";
    $text140 = "";

    if ($_SESSION['myLang'] == "en") {
        $text001 = $deepl->translate($text001, 'fr', 'en')[0]['text'].PHP_EOL;
        $text002 = $deepl->translate($text002, 'fr', 'en')[0]['text'].PHP_EOL;
        $text003 = $deepl->translate($text003, 'fr', 'en')[0]['text'].PHP_EOL;
        $text004 = $deepl->translate($text004, 'fr', 'en')[0]['text'].PHP_EOL;
        $text005 = $deepl->translate($text005, 'fr', 'en')[0]['text'].PHP_EOL;
        $text006 = $deepl->translate($text006, 'fr', 'en')[0]['text'].PHP_EOL;
        $text007 = $deepl->translate($text007, 'fr', 'en')[0]['text'].PHP_EOL;
        $text008 = $deepl->translate($text008, 'fr', 'en')[0]['text'].PHP_EOL;
        $text009 = $deepl->translate($text009, 'fr', 'en')[0]['text'].PHP_EOL;
        $text010 = $deepl->translate($text010, 'fr', 'en')[0]['text'].PHP_EOL;
        $text011 = $deepl->translate($text011, 'fr', 'en')[0]['text'].PHP_EOL;
        $text012 = $deepl->translate($text012, 'fr', 'en')[0]['text'].PHP_EOL;
        $text013 = $deepl->translate($text013, 'fr', 'en')[0]['text'].PHP_EOL;
        $text014 = $deepl->translate($text014, 'fr', 'en')[0]['text'].PHP_EOL;
        $text015 = $deepl->translate($text015, 'fr', 'en')[0]['text'].PHP_EOL;
        $text016 = $deepl->translate($text016, 'fr', 'en')[0]['text'].PHP_EOL;
        $text017 = $deepl->translate($text017, 'fr', 'en')[0]['text'].PHP_EOL;
        $text018 = $deepl->translate($text018, 'fr', 'en')[0]['text'].PHP_EOL;
        $text019 = $deepl->translate($text019, 'fr', 'en')[0]['text'].PHP_EOL;
        $text020 = $deepl->translate($text020, 'fr', 'en')[0]['text'].PHP_EOL;
        $text021 = $deepl->translate($text021, 'fr', 'en')[0]['text'].PHP_EOL;
        $text022 = $deepl->translate($text022, 'fr', 'en')[0]['text'].PHP_EOL;
        $text023 = $deepl->translate($text023, 'fr', 'en')[0]['text'].PHP_EOL;
        $text024 = $deepl->translate($text024, 'fr', 'en')[0]['text'].PHP_EOL;
        $text025 = $deepl->translate($text025, 'fr', 'en')[0]['text'].PHP_EOL;
        $text026 = $deepl->translate($text026, 'fr', 'en')[0]['text'].PHP_EOL;
        $text027 = $deepl->translate($text027, 'fr', 'en')[0]['text'].PHP_EOL;
        $text028 = $deepl->translate($text028, 'fr', 'en')[0]['text'].PHP_EOL;
        $text029 = $deepl->translate($text029, 'fr', 'en')[0]['text'].PHP_EOL;
        $text030 = $deepl->translate($text030, 'fr', 'en')[0]['text'].PHP_EOL;
        $text031 = $deepl->translate($text031, 'fr', 'en')[0]['text'].PHP_EOL;
        $text032 = $deepl->translate($text032, 'fr', 'en')[0]['text'].PHP_EOL;
        $text033 = $deepl->translate($text033, 'fr', 'en')[0]['text'].PHP_EOL;
        $text034 = $deepl->translate($text034, 'fr', 'en')[0]['text'].PHP_EOL;
        $text035 = $deepl->translate($text035, 'fr', 'en')[0]['text'].PHP_EOL;
        $text036 = $deepl->translate($text036, 'fr', 'en')[0]['text'].PHP_EOL;
        $text037 = $deepl->translate($text037, 'fr', 'en')[0]['text'].PHP_EOL;
        $text038 = $deepl->translate($text038, 'fr', 'en')[0]['text'].PHP_EOL;
        $text039 = $deepl->translate($text039, 'fr', 'en')[0]['text'].PHP_EOL;
        $text040 = $deepl->translate($text040, 'fr', 'en')[0]['text'].PHP_EOL;
        $text041 = $deepl->translate($text041, 'fr', 'en')[0]['text'].PHP_EOL;
        $text042 = $deepl->translate($text042, 'fr', 'en')[0]['text'].PHP_EOL;
        $text043 = $deepl->translate($text043, 'fr', 'en')[0]['text'].PHP_EOL;
        $text044 = $deepl->translate($text044, 'fr', 'en')[0]['text'].PHP_EOL;
        $text045 = $deepl->translate($text045, 'fr', 'en')[0]['text'].PHP_EOL;
        $text046 = $deepl->translate($text046, 'fr', 'en')[0]['text'].PHP_EOL;
        $text047 = $deepl->translate($text047, 'fr', 'en')[0]['text'].PHP_EOL;
        $text048 = $deepl->translate($text048, 'fr', 'en')[0]['text'].PHP_EOL;
        $text049 = $deepl->translate($text049, 'fr', 'en')[0]['text'].PHP_EOL;
        $text050 = $deepl->translate($text050, 'fr', 'en')[0]['text'].PHP_EOL;
        $text051 = $deepl->translate($text051, 'fr', 'en')[0]['text'].PHP_EOL;
        $text052 = $deepl->translate($text052, 'fr', 'en')[0]['text'].PHP_EOL;
        $text053 = $deepl->translate($text053, 'fr', 'en')[0]['text'].PHP_EOL;
        $text054 = $deepl->translate($text054, 'fr', 'en')[0]['text'].PHP_EOL;
        $text055 = $deepl->translate($text055, 'fr', 'en')[0]['text'].PHP_EOL;
        $text056 = $deepl->translate($text056, 'fr', 'en')[0]['text'].PHP_EOL;
        $text057 = $deepl->translate($text057, 'fr', 'en')[0]['text'].PHP_EOL;
        $text058 = $deepl->translate($text058, 'fr', 'en')[0]['text'].PHP_EOL;
        $text059 = $deepl->translate($text059, 'fr', 'en')[0]['text'].PHP_EOL;
        $text060 = $deepl->translate($text060, 'fr', 'en')[0]['text'].PHP_EOL;
        $text061 = $deepl->translate($text061, 'fr', 'en')[0]['text'].PHP_EOL;
        $text062 = $deepl->translate($text062, 'fr', 'en')[0]['text'].PHP_EOL;
        $text063 = $deepl->translate($text063, 'fr', 'en')[0]['text'].PHP_EOL;
        $text064 = $deepl->translate($text064, 'fr', 'en')[0]['text'].PHP_EOL;
        $text065 = $deepl->translate($text065, 'fr', 'en')[0]['text'].PHP_EOL;
        $text066 = $deepl->translate($text066, 'fr', 'en')[0]['text'].PHP_EOL;
        $text067 = $deepl->translate($text067, 'fr', 'en')[0]['text'].PHP_EOL;
        $text068 = $deepl->translate($text068, 'fr', 'en')[0]['text'].PHP_EOL;
        $text069 = $deepl->translate($text069, 'fr', 'en')[0]['text'].PHP_EOL;
        $text070 = $deepl->translate($text070, 'fr', 'en')[0]['text'].PHP_EOL;
        $text071 = $deepl->translate($text071, 'fr', 'en')[0]['text'].PHP_EOL;
        $text072 = $deepl->translate($text072, 'fr', 'en')[0]['text'].PHP_EOL;
        $text073 = $deepl->translate($text073, 'fr', 'en')[0]['text'].PHP_EOL;
        $text074 = $deepl->translate($text074, 'fr', 'en')[0]['text'].PHP_EOL;
        $text075 = $deepl->translate($text075, 'fr', 'en')[0]['text'].PHP_EOL;
        $text076 = $deepl->translate($text076, 'fr', 'en')[0]['text'].PHP_EOL;
        $text077 = $deepl->translate($text077, 'fr', 'en')[0]['text'].PHP_EOL;
        $text078 = $deepl->translate($text078, 'fr', 'en')[0]['text'].PHP_EOL;
        $text079 = $deepl->translate($text079, 'fr', 'en')[0]['text'].PHP_EOL;
        $text080 = $deepl->translate($text080, 'fr', 'en')[0]['text'].PHP_EOL;
        $text081 = $deepl->translate($text081, 'fr', 'en')[0]['text'].PHP_EOL;
        $text082 = $deepl->translate($text082, 'fr', 'en')[0]['text'].PHP_EOL;
        $text083 = $deepl->translate($text083, 'fr', 'en')[0]['text'].PHP_EOL;
        $text084 = $deepl->translate($text084, 'fr', 'en')[0]['text'].PHP_EOL;
        $text085 = $deepl->translate($text085, 'fr', 'en')[0]['text'].PHP_EOL;
        $text086 = $deepl->translate($text086, 'fr', 'en')[0]['text'].PHP_EOL;
        $text087 = $deepl->translate($text087, 'fr', 'en')[0]['text'].PHP_EOL;
        $text088 = $deepl->translate($text088, 'fr', 'en')[0]['text'].PHP_EOL;
        $text089 = $deepl->translate($text089, 'fr', 'en')[0]['text'].PHP_EOL;
        $text090 = $deepl->translate($text090, 'fr', 'en')[0]['text'].PHP_EOL;
        $text091 = $deepl->translate($text091, 'fr', 'en')[0]['text'].PHP_EOL;
        $text092 = $deepl->translate($text092, 'fr', 'en')[0]['text'].PHP_EOL;
        $text093 = $deepl->translate($text093, 'fr', 'en')[0]['text'].PHP_EOL;
        $text094 = $deepl->translate($text094, 'fr', 'en')[0]['text'].PHP_EOL;
        $text095 = $deepl->translate($text095, 'fr', 'en')[0]['text'].PHP_EOL;
        $text096 = $deepl->translate($text096, 'fr', 'en')[0]['text'].PHP_EOL;
        $text097 = $deepl->translate($text097, 'fr', 'en')[0]['text'].PHP_EOL;
        $text098 = $deepl->translate($text098, 'fr', 'en')[0]['text'].PHP_EOL;
        $text099 = $deepl->translate($text099, 'fr', 'en')[0]['text'].PHP_EOL;
        $text100 = $deepl->translate($text100, 'fr', 'en')[0]['text'].PHP_EOL;
        $text101 = $deepl->translate($text101, 'fr', 'en')[0]['text'].PHP_EOL;
        $text102 = $deepl->translate($text102, 'fr', 'en')[0]['text'].PHP_EOL;
        $text103 = $deepl->translate($text103, 'fr', 'en')[0]['text'].PHP_EOL;
        $text104 = $deepl->translate($text104, 'fr', 'en')[0]['text'].PHP_EOL;
        $text105 = $deepl->translate($text105, 'fr', 'en')[0]['text'].PHP_EOL;
        $text106 = $deepl->translate($text106, 'fr', 'en')[0]['text'].PHP_EOL;
        $text107 = $deepl->translate($text107, 'fr', 'en')[0]['text'].PHP_EOL;
        $text108 = $deepl->translate($text108, 'fr', 'en')[0]['text'].PHP_EOL;
        $text109 = $deepl->translate($text109, 'fr', 'en')[0]['text'].PHP_EOL;
        $text110 = $deepl->translate($text110, 'fr', 'en')[0]['text'].PHP_EOL;
        $text111 = $deepl->translate($text111, 'fr', 'en')[0]['text'].PHP_EOL;
        $text112 = $deepl->translate($text112, 'fr', 'en')[0]['text'].PHP_EOL;
        $text113 = $deepl->translate($text113, 'fr', 'en')[0]['text'].PHP_EOL;
        $text114 = $deepl->translate($text114, 'fr', 'en')[0]['text'].PHP_EOL;
        $text115 = $deepl->translate($text115, 'fr', 'en')[0]['text'].PHP_EOL;
        $text116 = $deepl->translate($text116, 'fr', 'en')[0]['text'].PHP_EOL;
        $text117 = $deepl->translate($text117, 'fr', 'en')[0]['text'].PHP_EOL;
        $text118 = $deepl->translate($text118, 'fr', 'en')[0]['text'].PHP_EOL;
        $text119 = $deepl->translate($text119, 'fr', 'en')[0]['text'].PHP_EOL;
        $text120 = $deepl->translate($text120, 'fr', 'en')[0]['text'].PHP_EOL;
        $text121 = $deepl->translate($text121, 'fr', 'en')[0]['text'].PHP_EOL;
        $text122 = $deepl->translate($text122, 'fr', 'en')[0]['text'].PHP_EOL;
        $text123 = $deepl->translate($text123, 'fr', 'en')[0]['text'].PHP_EOL;
        $text124 = $deepl->translate($text124, 'fr', 'en')[0]['text'].PHP_EOL;
        $text125 = $deepl->translate($text125, 'fr', 'en')[0]['text'].PHP_EOL;
        $text126 = $deepl->translate($text126, 'fr', 'en')[0]['text'].PHP_EOL;
        $text127 = $deepl->translate($text127, 'fr', 'en')[0]['text'].PHP_EOL;
        $text128 = $deepl->translate($text128, 'fr', 'en')[0]['text'].PHP_EOL;
        $text129 = $deepl->translate($text129, 'fr', 'en')[0]['text'].PHP_EOL;
        $text130 = $deepl->translate($text130, 'fr', 'en')[0]['text'].PHP_EOL;
        $text131 = $deepl->translate($text131, 'fr', 'en')[0]['text'].PHP_EOL;
        $text132 = $deepl->translate($text132, 'fr', 'en')[0]['text'].PHP_EOL;
        $text133 = $deepl->translate($text133, 'fr', 'en')[0]['text'].PHP_EOL;
        $text134 = $deepl->translate($text134, 'fr', 'en')[0]['text'].PHP_EOL;
    }

    if ($_SESSION['myLang'] == "es") {
        $text001 = $deepl->translate($text001, 'fr', 'es')[0]['text'].PHP_EOL;
        $text002 = $deepl->translate($text002, 'fr', 'es')[0]['text'].PHP_EOL;
        $text003 = $deepl->translate($text003, 'fr', 'es')[0]['text'].PHP_EOL;
        $text004 = $deepl->translate($text004, 'fr', 'es')[0]['text'].PHP_EOL;
        $text005 = $deepl->translate($text005, 'fr', 'es')[0]['text'].PHP_EOL;
        $text006 = $deepl->translate($text006, 'fr', 'es')[0]['text'].PHP_EOL;
        $text007 = $deepl->translate($text007, 'fr', 'es')[0]['text'].PHP_EOL;
        $text008 = $deepl->translate($text008, 'fr', 'es')[0]['text'].PHP_EOL;
        $text009 = $deepl->translate($text009, 'fr', 'es')[0]['text'].PHP_EOL;
        $text010 = $deepl->translate($text010, 'fr', 'es')[0]['text'].PHP_EOL;
        $text011 = $deepl->translate($text011, 'fr', 'es')[0]['text'].PHP_EOL;
        $text012 = $deepl->translate($text012, 'fr', 'es')[0]['text'].PHP_EOL;
        $text013 = $deepl->translate($text013, 'fr', 'es')[0]['text'].PHP_EOL;
        $text014 = $deepl->translate($text014, 'fr', 'es')[0]['text'].PHP_EOL;
        $text015 = $deepl->translate($text015, 'fr', 'es')[0]['text'].PHP_EOL;
        $text016 = $deepl->translate($text016, 'fr', 'es')[0]['text'].PHP_EOL;
        $text017 = $deepl->translate($text017, 'fr', 'es')[0]['text'].PHP_EOL;
        $text018 = $deepl->translate($text018, 'fr', 'es')[0]['text'].PHP_EOL;
        $text019 = $deepl->translate($text019, 'fr', 'es')[0]['text'].PHP_EOL;
        $text020 = $deepl->translate($text020, 'fr', 'es')[0]['text'].PHP_EOL;
        $text021 = $deepl->translate($text021, 'fr', 'es')[0]['text'].PHP_EOL;
        $text022 = $deepl->translate($text022, 'fr', 'es')[0]['text'].PHP_EOL;
        $text023 = $deepl->translate($text023, 'fr', 'es')[0]['text'].PHP_EOL;
        $text024 = $deepl->translate($text024, 'fr', 'es')[0]['text'].PHP_EOL;
        $text025 = $deepl->translate($text025, 'fr', 'es')[0]['text'].PHP_EOL;
        $text026 = $deepl->translate($text026, 'fr', 'es')[0]['text'].PHP_EOL;
        $text027 = $deepl->translate($text027, 'fr', 'es')[0]['text'].PHP_EOL;
        $text028 = $deepl->translate($text028, 'fr', 'es')[0]['text'].PHP_EOL;
        $text029 = $deepl->translate($text029, 'fr', 'es')[0]['text'].PHP_EOL;
        $text030 = $deepl->translate($text030, 'fr', 'es')[0]['text'].PHP_EOL;
        $text031 = $deepl->translate($text031, 'fr', 'es')[0]['text'].PHP_EOL;
        $text032 = $deepl->translate($text032, 'fr', 'es')[0]['text'].PHP_EOL;
        $text033 = $deepl->translate($text033, 'fr', 'es')[0]['text'].PHP_EOL;
        $text034 = $deepl->translate($text034, 'fr', 'es')[0]['text'].PHP_EOL;
        $text035 = $deepl->translate($text035, 'fr', 'es')[0]['text'].PHP_EOL;
        $text036 = $deepl->translate($text036, 'fr', 'es')[0]['text'].PHP_EOL;
        $text037 = $deepl->translate($text037, 'fr', 'es')[0]['text'].PHP_EOL;
        $text038 = $deepl->translate($text038, 'fr', 'es')[0]['text'].PHP_EOL;
        $text039 = $deepl->translate($text039, 'fr', 'es')[0]['text'].PHP_EOL;
        $text040 = $deepl->translate($text040, 'fr', 'es')[0]['text'].PHP_EOL;
        $text041 = $deepl->translate($text041, 'fr', 'es')[0]['text'].PHP_EOL;
        $text042 = $deepl->translate($text042, 'fr', 'es')[0]['text'].PHP_EOL;
        $text043 = $deepl->translate($text043, 'fr', 'es')[0]['text'].PHP_EOL;
        $text044 = $deepl->translate($text044, 'fr', 'es')[0]['text'].PHP_EOL;
        $text045 = $deepl->translate($text045, 'fr', 'es')[0]['text'].PHP_EOL;
        $text046 = $deepl->translate($text046, 'fr', 'es')[0]['text'].PHP_EOL;
        $text047 = $deepl->translate($text047, 'fr', 'es')[0]['text'].PHP_EOL;
        $text048 = $deepl->translate($text048, 'fr', 'es')[0]['text'].PHP_EOL;
        $text049 = $deepl->translate($text049, 'fr', 'es')[0]['text'].PHP_EOL;
        $text050 = $deepl->translate($text050, 'fr', 'es')[0]['text'].PHP_EOL;
        $text051 = $deepl->translate($text051, 'fr', 'es')[0]['text'].PHP_EOL;
        $text052 = $deepl->translate($text052, 'fr', 'es')[0]['text'].PHP_EOL;
        $text053 = $deepl->translate($text053, 'fr', 'es')[0]['text'].PHP_EOL;
        $text054 = $deepl->translate($text054, 'fr', 'es')[0]['text'].PHP_EOL;
        $text055 = $deepl->translate($text055, 'fr', 'es')[0]['text'].PHP_EOL;
        $text056 = $deepl->translate($text056, 'fr', 'es')[0]['text'].PHP_EOL;
        $text057 = $deepl->translate($text057, 'fr', 'es')[0]['text'].PHP_EOL;
        $text058 = $deepl->translate($text058, 'fr', 'es')[0]['text'].PHP_EOL;
        $text059 = $deepl->translate($text059, 'fr', 'es')[0]['text'].PHP_EOL;
        $text060 = $deepl->translate($text060, 'fr', 'es')[0]['text'].PHP_EOL;
        $text061 = $deepl->translate($text061, 'fr', 'es')[0]['text'].PHP_EOL;
        $text062 = $deepl->translate($text062, 'fr', 'es')[0]['text'].PHP_EOL;
        $text063 = $deepl->translate($text063, 'fr', 'es')[0]['text'].PHP_EOL;
        $text064 = $deepl->translate($text064, 'fr', 'es')[0]['text'].PHP_EOL;
        $text065 = $deepl->translate($text065, 'fr', 'es')[0]['text'].PHP_EOL;
        $text066 = $deepl->translate($text066, 'fr', 'es')[0]['text'].PHP_EOL;
        $text067 = $deepl->translate($text067, 'fr', 'es')[0]['text'].PHP_EOL;
        $text068 = $deepl->translate($text068, 'fr', 'es')[0]['text'].PHP_EOL;
        $text069 = $deepl->translate($text069, 'fr', 'es')[0]['text'].PHP_EOL;
        $text070 = $deepl->translate($text070, 'fr', 'es')[0]['text'].PHP_EOL;
        $text071 = $deepl->translate($text071, 'fr', 'es')[0]['text'].PHP_EOL;
        $text072 = $deepl->translate($text072, 'fr', 'es')[0]['text'].PHP_EOL;
        $text073 = $deepl->translate($text073, 'fr', 'es')[0]['text'].PHP_EOL;
        $text074 = $deepl->translate($text074, 'fr', 'es')[0]['text'].PHP_EOL;
        $text075 = $deepl->translate($text075, 'fr', 'es')[0]['text'].PHP_EOL;
        $text076 = $deepl->translate($text076, 'fr', 'es')[0]['text'].PHP_EOL;
        $text077 = $deepl->translate($text077, 'fr', 'es')[0]['text'].PHP_EOL;
        $text078 = $deepl->translate($text078, 'fr', 'es')[0]['text'].PHP_EOL;
        $text079 = $deepl->translate($text079, 'fr', 'es')[0]['text'].PHP_EOL;
        $text080 = $deepl->translate($text080, 'fr', 'es')[0]['text'].PHP_EOL;
        $text081 = $deepl->translate($text081, 'fr', 'es')[0]['text'].PHP_EOL;
        $text082 = $deepl->translate($text082, 'fr', 'es')[0]['text'].PHP_EOL;
        $text083 = $deepl->translate($text083, 'fr', 'es')[0]['text'].PHP_EOL;
        $text084 = $deepl->translate($text084, 'fr', 'es')[0]['text'].PHP_EOL;
        $text085 = $deepl->translate($text085, 'fr', 'es')[0]['text'].PHP_EOL;
        $text086 = $deepl->translate($text086, 'fr', 'es')[0]['text'].PHP_EOL;
        $text087 = $deepl->translate($text087, 'fr', 'es')[0]['text'].PHP_EOL;
        $text088 = $deepl->translate($text088, 'fr', 'es')[0]['text'].PHP_EOL;
        $text089 = $deepl->translate($text089, 'fr', 'es')[0]['text'].PHP_EOL;
        $text090 = $deepl->translate($text090, 'fr', 'es')[0]['text'].PHP_EOL;
        $text091 = $deepl->translate($text091, 'fr', 'es')[0]['text'].PHP_EOL;
        $text092 = $deepl->translate($text092, 'fr', 'es')[0]['text'].PHP_EOL;
        $text093 = $deepl->translate($text093, 'fr', 'es')[0]['text'].PHP_EOL;
        $text094 = $deepl->translate($text094, 'fr', 'es')[0]['text'].PHP_EOL;
        $text095 = $deepl->translate($text095, 'fr', 'es')[0]['text'].PHP_EOL;
        $text096 = $deepl->translate($text096, 'fr', 'es')[0]['text'].PHP_EOL;
        $text097 = $deepl->translate($text097, 'fr', 'es')[0]['text'].PHP_EOL;
        $text098 = $deepl->translate($text098, 'fr', 'es')[0]['text'].PHP_EOL;
        $text099 = $deepl->translate($text099, 'fr', 'es')[0]['text'].PHP_EOL;
        $text100 = $deepl->translate($text100, 'fr', 'es')[0]['text'].PHP_EOL;
        $text101 = $deepl->translate($text101, 'fr', 'es')[0]['text'].PHP_EOL;
        $text102 = $deepl->translate($text102, 'fr', 'es')[0]['text'].PHP_EOL;
        $text103 = $deepl->translate($text103, 'fr', 'es')[0]['text'].PHP_EOL;
        $text104 = $deepl->translate($text104, 'fr', 'es')[0]['text'].PHP_EOL;
        $text105 = $deepl->translate($text105, 'fr', 'es')[0]['text'].PHP_EOL;
        $text106 = $deepl->translate($text106, 'fr', 'es')[0]['text'].PHP_EOL;
        $text107 = $deepl->translate($text107, 'fr', 'es')[0]['text'].PHP_EOL;
        $text108 = $deepl->translate($text108, 'fr', 'es')[0]['text'].PHP_EOL;
        $text109 = $deepl->translate($text109, 'fr', 'es')[0]['text'].PHP_EOL;
        $text110 = $deepl->translate($text110, 'fr', 'es')[0]['text'].PHP_EOL;
        $text111 = $deepl->translate($text111, 'fr', 'es')[0]['text'].PHP_EOL;
        $text112 = $deepl->translate($text112, 'fr', 'es')[0]['text'].PHP_EOL;
        $text113 = $deepl->translate($text113, 'fr', 'es')[0]['text'].PHP_EOL;
        $text114 = $deepl->translate($text114, 'fr', 'es')[0]['text'].PHP_EOL;
        $text115 = $deepl->translate($text115, 'fr', 'es')[0]['text'].PHP_EOL;
        $text116 = $deepl->translate($text116, 'fr', 'es')[0]['text'].PHP_EOL;
        $text117 = $deepl->translate($text117, 'fr', 'es')[0]['text'].PHP_EOL;
        $text118 = $deepl->translate($text118, 'fr', 'es')[0]['text'].PHP_EOL;
        $text119 = $deepl->translate($text119, 'fr', 'es')[0]['text'].PHP_EOL;
        $text120 = $deepl->translate($text120, 'fr', 'es')[0]['text'].PHP_EOL;
        $text121 = $deepl->translate($text121, 'fr', 'es')[0]['text'].PHP_EOL;
        $text122 = $deepl->translate($text122, 'fr', 'es')[0]['text'].PHP_EOL;
        $text123 = $deepl->translate($text123, 'fr', 'es')[0]['text'].PHP_EOL;
        $text124 = $deepl->translate($text124, 'fr', 'es')[0]['text'].PHP_EOL;
        $text125 = $deepl->translate($text125, 'fr', 'es')[0]['text'].PHP_EOL;
        $text126 = $deepl->translate($text126, 'fr', 'es')[0]['text'].PHP_EOL;
        $text127 = $deepl->translate($text127, 'fr', 'es')[0]['text'].PHP_EOL;
        $text128 = $deepl->translate($text128, 'fr', 'es')[0]['text'].PHP_EOL;
        $text129 = $deepl->translate($text129, 'fr', 'es')[0]['text'].PHP_EOL;
        $text130 = $deepl->translate($text130, 'fr', 'es')[0]['text'].PHP_EOL;
        $text131 = $deepl->translate($text131, 'fr', 'es')[0]['text'].PHP_EOL;
        $text132 = $deepl->translate($text132, 'fr', 'es')[0]['text'].PHP_EOL;
        $text133 = $deepl->translate($text133, 'fr', 'es')[0]['text'].PHP_EOL;
        $text134 = $deepl->translate($text134, 'fr', 'es')[0]['text'].PHP_EOL;
    }
?>