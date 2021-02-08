<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Home/Navbar.html.twig */
class __TwigTemplate_14eef87aa9a73e490d0cf1bdadbb917e081480f05ce70501a924694fafaedf79 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/Navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/Navbar.html.twig"));

        // line 1
        echo "<!-- Navbar -->
<nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichePers");
        echo "\" class=\"nav-link\">Home</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"far fa-bell\"></i>
                <span class=\"badge badge-warning navbar-badge\">15</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                    <span class=\"float-right text-muted text-sm\">3 mins</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                    <span class=\"float-right text-muted text-sm\">12 hours</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-file mr-2\"></i> 3 new reports
                    <span class=\"float-right text-muted text-sm\">2 days</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
            </div>
        </li>


        <!-- hedhi deconnexion ye hossni -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
                <i class=\"fa fa-retweet\" aria-hidden=\"true\"></i>

            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Home/Navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navbar -->
<nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            <a href=\"{{ path('affichePers') }}\" class=\"nav-link\">Home</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"far fa-bell\"></i>
                <span class=\"badge badge-warning navbar-badge\">15</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                    <span class=\"float-right text-muted text-sm\">3 mins</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                    <span class=\"float-right text-muted text-sm\">12 hours</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-file mr-2\"></i> 3 new reports
                    <span class=\"float-right text-muted text-sm\">2 days</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
            </div>
        </li>


        <!-- hedhi deconnexion ye hossni -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
                <i class=\"fa fa-retweet\" aria-hidden=\"true\"></i>

            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
", "Home/Navbar.html.twig", "C:\\wamp64\\www\\Ecole\\app\\Resources\\views\\Home\\Navbar.html.twig");
    }
}
