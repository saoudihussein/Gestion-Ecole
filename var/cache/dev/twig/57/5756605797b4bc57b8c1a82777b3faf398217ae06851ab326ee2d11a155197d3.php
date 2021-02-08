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

/* Dashboard/dashboard.html.twig */
class __TwigTemplate_d4d41459a6d27d257bd4f7dcef40ea659953d9229316370094af79cb595f4d2f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/dashboard.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

";
        // line 4
        $this->loadTemplate("Home/Header.html.twig", "Dashboard/dashboard.html.twig", 4)->display($context);
        // line 5
        echo "
<body class=\"hold-transition sidebar-mini\">
<div class=\"wrapper\">

    ";
        // line 9
        $this->loadTemplate("Home/Navbar.html.twig", "Dashboard/dashboard.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        $this->loadTemplate("Home/Sidebar.html.twig", "Dashboard/dashboard.html.twig", 10)->display($context);
        // line 11
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0 text-dark\">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard_homepage");
        echo "\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Dashboard </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

<!-- Main content -->
<section class=\"content\">
    <div class=\"container-fluid\">
        <!-- Small boxes (Stat box) -->
        <div class=\"row\">
            <div class=\"col-lg-3 col-6\">
                <!-- small box -->
                <div class=\"small-box bg-info\">
                    <div class=\"inner\">
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["personnes"] ?? $this->getContext($context, "personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["elvs"]) {
            // line 41
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["elvs"], "nom", []), "html", null, true);
            echo "</h3>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elvs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
                        <p>Nombre des Maitres</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"ion ion-bag\"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
                <!-- small box -->
                <div class=\"small-box bg-success\">
                    <div class=\"inner\">
                        <h3>53<sup style=\"font-size: 20px\">%</sup></h3>

                        <p>Nombre des Parents</p>
                    </div>
                    <div class=\"icon\">
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
                <!-- small box -->
                <div class=\"small-box bg-warning\">
                    <div class=\"inner\">
                        <h3>44</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"ion ion-person-add\"></i>
                    </div>
                    <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
                <!-- small box -->
                <div class=\"small-box bg-danger\">
                    <div class=\"inner\">
                        <h3>65</h3>

                        <p>Unique Visitors</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"ion ion-pie-graph\"></i>
                    </div>
                    <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class=\"row\">

            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->
</body>
";
        // line 110
        $this->loadTemplate("Home/Footer.html.twig", "Dashboard/dashboard.html.twig", 110)->display($context);
        // line 111
        echo "</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Dashboard/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 111,  170 => 110,  101 => 43,  92 => 41,  88 => 40,  67 => 22,  54 => 11,  51 => 10,  49 => 9,  43 => 5,  41 => 4,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

{% include 'Home/Header.html.twig' %}

<body class=\"hold-transition sidebar-mini\">
<div class=\"wrapper\">

    {% include 'Home/Navbar.html.twig' %}
    {% include 'Home/Sidebar.html.twig' %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0 text-dark\">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"{{ path('dashboard_homepage')}}\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Dashboard </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

<!-- Main content -->
<section class=\"content\">
    <div class=\"container-fluid\">
        <!-- Small boxes (Stat box) -->
        <div class=\"row\">
            <div class=\"col-lg-3 col-6\">
                <!-- small box -->
                <div class=\"small-box bg-info\">
                    <div class=\"inner\">
                        {% for elvs in personnes %}
                        <h3>{{ elvs.nom }}</h3>
                        {% endfor %}

                        <p>Nombre des Maitres</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"ion ion-bag\"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
                <!-- small box -->
                <div class=\"small-box bg-success\">
                    <div class=\"inner\">
                        <h3>53<sup style=\"font-size: 20px\">%</sup></h3>

                        <p>Nombre des Parents</p>
                    </div>
                    <div class=\"icon\">
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
                <!-- small box -->
                <div class=\"small-box bg-warning\">
                    <div class=\"inner\">
                        <h3>44</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"ion ion-person-add\"></i>
                    </div>
                    <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
                <!-- small box -->
                <div class=\"small-box bg-danger\">
                    <div class=\"inner\">
                        <h3>65</h3>

                        <p>Unique Visitors</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"ion ion-pie-graph\"></i>
                    </div>
                    <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class=\"row\">

            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->
</body>
{% include 'Home/Footer.html.twig' %}
</html>", "Dashboard/dashboard.html.twig", "C:\\wamp64\\www\\Ecole\\app\\Resources\\views\\Dashboard\\dashboard.html.twig");
    }
}
