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

/* Home/Sidebar.html.twig */
class __TwigTemplate_66effbf72bec12563682c1b11bd326a177192bab3ce95600dcea39494ceecd76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/Sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/Sidebar.html.twig"));

        // line 1
        echo "<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"#\" class=\"brand-link\">
        <i class=\"fa fa-building\" aria-hidden=\"true\"></i>

        <span class=\"brand-text font-weight-light\"> Gestion d'Ecole</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class=\"mt-3\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class=\"nav-item\">
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichePers");
        echo "\" class=\"nav-link\">
                        <i class=\"fa fa-fw fa-user\"></i>
                        <p>
                            Personne

                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_affichage");
        echo "\" class=\"nav-link\">
                        <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>

                        <p>
                            Classe

                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche_mat");
        echo "\" class=\"nav-link\">
                        <i class=\"fa fa-book\" aria-hidden=\"true\"></i>

                        <p>
                            Matière

                        </p>
                    </a>

                </li>
                <li class=\"nav-item has-treeview\">
                    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche_eleve");
        echo "\" class=\"nav-link\">
                        <i class=\"fa fa-address-card\" aria-hidden=\"true\"></i>
                        <p>
                            Elève
                        </p>
                    </a>
                </li>
                <li class=\"nav-item has-treeview\">
                    <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Note_affichage");
        echo "\" class=\"nav-link\">
                        <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i>

                        <p>
                            Notes
                        </p>
                    </a>
                </li>
                <li class=\"nav-item has-treeview\">
                    <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("absence_affichage");
        echo "\" class=\"nav-link\">
                        <i class=\"fa fa-clipboard\" ></i>


                        <p>
                            Absences
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Home/Sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 69,  109 => 60,  98 => 52,  84 => 41,  70 => 30,  57 => 20,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"#\" class=\"brand-link\">
        <i class=\"fa fa-building\" aria-hidden=\"true\"></i>

        <span class=\"brand-text font-weight-light\"> Gestion d'Ecole</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class=\"mt-3\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class=\"nav-item\">
                    <a href=\"{{ path('affichePers')}}\" class=\"nav-link\">
                        <i class=\"fa fa-fw fa-user\"></i>
                        <p>
                            Personne

                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"{{ path('classe_affichage') }}\" class=\"nav-link\">
                        <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>

                        <p>
                            Classe

                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"{{ path ('affiche_mat') }}\" class=\"nav-link\">
                        <i class=\"fa fa-book\" aria-hidden=\"true\"></i>

                        <p>
                            Matière

                        </p>
                    </a>

                </li>
                <li class=\"nav-item has-treeview\">
                    <a href=\"{{ path('affiche_eleve') }}\" class=\"nav-link\">
                        <i class=\"fa fa-address-card\" aria-hidden=\"true\"></i>
                        <p>
                            Elève
                        </p>
                    </a>
                </li>
                <li class=\"nav-item has-treeview\">
                    <a href=\"{{ path('Note_affichage') }}\" class=\"nav-link\">
                        <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i>

                        <p>
                            Notes
                        </p>
                    </a>
                </li>
                <li class=\"nav-item has-treeview\">
                    <a href=\"{{ path('absence_affichage') }}\" class=\"nav-link\">
                        <i class=\"fa fa-clipboard\" ></i>


                        <p>
                            Absences
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
", "Home/Sidebar.html.twig", "C:\\wamp64\\www\\Ecole\\app\\Resources\\views\\Home\\Sidebar.html.twig");
    }
}
