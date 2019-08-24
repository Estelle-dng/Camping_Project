<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vitrine/photos.html.twig */
class __TwigTemplate_5352fa66070d8a74c3c2bc39529c76e426b4a97d2ccbc314939ec60c85115e4e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/photos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/photos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vitrine/photos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vitrine/photos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
    <!-- Container for the image gallery -->
    <div class=\"container\">

        <!-- Full-width images with number text -->
        <div class=\"mySlides\">
            <div class=\"numbertext\">1 / 6</div>
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/emplacement.png"), "html", null, true);
        echo "\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">2 / 6</div>
            <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tentes.png"), "html", null, true);
        echo "\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">3 / 6</div>
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/emplacement_mobilhome.png"), "html", null, true);
        echo "\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">4 / 6</div>
            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/resto.png"), "html", null, true);
        echo "\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">5 / 6</div>
            <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/lac2.png"), "html", null, true);
        echo "\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">6 / 6</div>
            <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/mobilhome_interieur.png"), "html", null, true);
        echo "\" style=\"width:100%\">
        </div>

        <!-- Next and previous buttons -->
        <a class=\"prev text-white\" onclick=\"plusSlides(-1)\">&#10094;</a>
        <a class=\"next text-white\" onclick=\"plusSlides(1)\">&#10095;</a>

        <!-- Image text -->
        <div class=\"caption-container\">
            <p id=\"caption\"></p>
        </div>

        <!-- Thumbnail images -->
        <div class=\"row\">
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/emplacement.png"), "html", null, true);
        echo "\" style=\"width:100%\" onclick=\"currentSlide(1)\" alt=\"Les tentes en bord de lac\">
            </div>
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tentes.png"), "html", null, true);
        echo "\" style=\"width:100%\" onclick=\"currentSlide(2)\" alt=\"Tentes sous les arbres\">
            </div>
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/emplacement_mobilhome.png"), "html", null, true);
        echo "\" style=\"width:100%\" onclick=\"currentSlide(3)\" alt=\"Mobil-home en famille\">
            </div>
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/resto.png"), "html", null, true);
        echo "\" style=\"width:100%\" onclick=\"currentSlide(4)\" alt=\"Snack-Bar Les amis de la forêt\">
            </div>
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/lac2.png"), "html", null, true);
        echo "\" style=\"width:100%\" onclick=\"currentSlide(5)\" alt=\"Étang de pêche\">
            </div>
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/mobilhome_interieur.png"), "html", null, true);
        echo "\" style=\"width:100%\" onclick=\"currentSlide(6)\" alt=\"Intérieur de nos mobil-home\">
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    <script>var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName(\"mySlides\");
        var dots = document.getElementsByClassName(\"demo\");
        var captionText = document.getElementById(\"caption\");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
        slides[i].style.display = \"none\";
        }
        for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(\" active\", \"\");
        }
        slides[slideIndex-1].style.display = \"block\";
        dots[slideIndex-1].className += \" active\";
        captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 77,  205 => 76,  190 => 70,  184 => 67,  178 => 64,  172 => 61,  166 => 58,  160 => 55,  142 => 40,  134 => 35,  126 => 30,  118 => 25,  110 => 20,  102 => 15,  93 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ('base.html.twig') %}

{% block stylesheets %}
    <link href=\"{{ asset ('assets/css/vitrine/photos.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}

{% block main %}

    <!-- Container for the image gallery -->
    <div class=\"container\">

        <!-- Full-width images with number text -->
        <div class=\"mySlides\">
            <div class=\"numbertext\">1 / 6</div>
            <img src=\"{{ asset ('assets/img/emplacement.png')}}\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">2 / 6</div>
            <img src=\"{{ asset ('assets/img/tentes.png')}}\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">3 / 6</div>
            <img src=\"{{ asset ('assets/img/emplacement_mobilhome.png') }}\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">4 / 6</div>
            <img src=\"{{ asset ('assets/img/resto.png') }}\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">5 / 6</div>
            <img src=\"{{ asset ('assets/img/lac2.png') }}\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">6 / 6</div>
            <img src=\"{{ asset ('assets/img/mobilhome_interieur.png') }}\" style=\"width:100%\">
        </div>

        <!-- Next and previous buttons -->
        <a class=\"prev text-white\" onclick=\"plusSlides(-1)\">&#10094;</a>
        <a class=\"next text-white\" onclick=\"plusSlides(1)\">&#10095;</a>

        <!-- Image text -->
        <div class=\"caption-container\">
            <p id=\"caption\"></p>
        </div>

        <!-- Thumbnail images -->
        <div class=\"row\">
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"{{ asset ('assets/img/emplacement.png') }}\" style=\"width:100%\" onclick=\"currentSlide(1)\" alt=\"Les tentes en bord de lac\">
            </div>
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"{{ asset ('assets/img/tentes.png') }}\" style=\"width:100%\" onclick=\"currentSlide(2)\" alt=\"Tentes sous les arbres\">
            </div>
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"{{ asset ('assets/img/emplacement_mobilhome.png') }}\" style=\"width:100%\" onclick=\"currentSlide(3)\" alt=\"Mobil-home en famille\">
            </div>
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"{{ asset ('assets/img/resto.png') }}\" style=\"width:100%\" onclick=\"currentSlide(4)\" alt=\"Snack-Bar Les amis de la forêt\">
            </div>
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"{{ asset ('assets/img/lac2.png') }}\" style=\"width:100%\" onclick=\"currentSlide(5)\" alt=\"Étang de pêche\">
            </div>
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"{{ asset ('assets/img/mobilhome_interieur.png') }}\" style=\"width:100%\" onclick=\"currentSlide(6)\" alt=\"Intérieur de nos mobil-home\">
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName(\"mySlides\");
        var dots = document.getElementsByClassName(\"demo\");
        var captionText = document.getElementById(\"caption\");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
        slides[i].style.display = \"none\";
        }
        for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(\" active\", \"\");
        }
        slides[slideIndex-1].style.display = \"block\";
        dots[slideIndex-1].className += \" active\";
        captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
{% endblock %}", "vitrine/photos.html.twig", "/Applications/MAMP/htdocs/camping_project/templates/vitrine/photos.html.twig");
    }
}
