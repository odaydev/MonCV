<?php

/* index.twig */
class __TwigTemplate_8a888af0cdea0702e2bd9ebab5b86c42f730c30aa2264e60e3b06166faf6f043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "

<div class=\"container-fluid\">

\t
\t<div class=\"row\">
\t\t<div class=\"col-xs-9\">
\t\t\t<div class=\"cv-header page-header\">\t\t
\t\t\t\t<h1>Développeur Web <small>Od@yD€v</small></h1>\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-xs-3\">
\t\t\t<div class=\"cv-info-side-r\">\t\t
\t\t\t\t<p>
\t\t\t\t\t<span>Etienne CÉNILLE</span>
\t\t\t\t\t<span>30 ans</span>
\t\t\t\t\t<span>etienne.cenille@laposte.net</span>
\t\t\t\t\t<span>7,rue du grand pré 77230 Juilly</span>
\t\t\t\t\t<span>0650858671</span>
\t\t\t\t\t<span>Permis B</span>
\t\t\t\t</p>\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t
\t\t<div class=\"cv-forming bubble left container\">\t\t
\t\t\t
\t\t\t\t<dl>
\t\t\t\t\t<dt>Diplômes & Formations</dt>
\t\t\t\t\t<dd>Certification Techniques de développement web / WEB FORCE 3 Paris 
\t\t\t\tOctobre 2015 - Février 2016</dd>
\t\t\t\t<dd>Certificat de Compétences Opquast Certified Qualité Web - Bonnes
\t\t\t\tpratiques (score 575)</dd>
\t\t\t\t<dd>Zend PHP 5 certification / IP Formation Paris</dd>
\t\t\t\t<dd>2009 - 2010</dd>
\t\t\t\t<dd>Formation PHP/MYSQL / G2R Paris
\t\t\t\t2009 - 2010</dd>
\t\t\t\t<dd>BTS Informatique de Gestion (option développeur d’application) / Lycée
\t\t\t\tVoillaume AULNAY-SOUS-BOIS</dd>
\t\t\t\t<dd>2006 - 2007</dd>
\t\t\t\tBaccalauréat Sciences et Technologies Tertiaire (option Informatique de
\t\t\t\tGestion) / Lycée Charles de Gaulle LONGPERRIER
\t\t\t\t2004 - 2005
\t\t\t</dl>
\t\t\t\t\t
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"cv-xp bubble right\">\t\t
\t\t\t<p>
\t\t\t\t<h4>Expériences professionnelles</h4>
\t\t\t\tDéveloppeur Web (contrat pro IP Formation) / BDV Informatique Paris<br>
\t\t\t\t2009 - 2010<br>
\t\t\t\tCréation d'un site www.degriff.com<br>
\t\t\t\tMaintenance parc sites<br>
\t\t\t\tWebmaster (Stage) / MATADOR INTERACTIF Paris<br>
\t\t\t\t2007<br>
\t\t\t\tPassage d’un site statique en dynamique<br>
\t\t\t\tMaintenance réseau (installation de poste, montage carte réseau,
\t\t\t\tconfiguration du réseau en wi-fi, gestion du serveur)<br>
\t\t\t\tWebmaster (Stage) / B.B.H PIECES AUTO LA COURNEUVE<br>
\t\t\t\t2006<br>
\t\t\t\tCréation d'un site statique<br>
\t\t\t\t\t
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"cv-skills bubble left\">\t\t
\t\t\t<p>
\t\t\t\t<h4>Compétences</h4>
\t\t\t\tFront<br>
\t\t\t\tHTML5, Bootstrap, GULP(SASS)<br>
\t\t\t\tAngularJS, jQuery<br>
\t\t\t\tBack<br>
\t\t\t\tPHP5/7, POO<br>
\t\t\t\tSymfony/Zend Framework<br>
\t\t\t\tVersionning GIT, GITHUB, GITFLOW<br>
\t\t\t</p>\t\t
\t\t</div>
\t\t<div>
\t\t\tAtouts<br>
\t\t\tOrganiser<br>
\t\t\tCentres d'intérêts<br>
\t\t\tSport / Loisir
\t\t\tFootball
\t\t\tMusique
\t\t\tConcerts/Festivals<br>
\t\t\tLangues
\t\t\tAnglais
\t\t\tEcrit, lu, parlé
\t\t</div>
\t\t<div class=\"rating rating2\">
           <a href=\"#5\" title=\"Give 5 stars\">★</a><!--
        --><a href=\"#4\" title=\"Give 4 stars\">★</a><!--
        --><a href=\"#3\" title=\"Give 3 stars\">★</a><!--
        --><a href=\"#2\" title=\"Give 2 stars\">★</a><!--
        --><a href=\"#1\" title=\"Give 1 star\">★</a>
    </div>
\t</div>
\t
\t</div>

</div>

";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.twig", "C:\\Users\\odaydev\\Desktop\\Sites\\MonCV\\templates\\index.twig");
    }
}
