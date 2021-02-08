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

/* Dashboard/Dashboard.html.twig */
class __TwigTemplate_3612dd30f62c46701e6bd6ba0c5e4bf7d6f00e7da6cc2c93f5f8e022f412a6e6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/Dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/Dashboard.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

";
        // line 4
        $this->loadTemplate("Home/Header.html.twig", "Dashboard/Dashboard.html.twig", 4)->display($context);
        // line 5
        echo "
<body class=\"hold-transition sidebar-mini\">
<div class=\"wrapper\">

    ";
        // line 9
        $this->loadTemplate("Home/Navbar.html.twig", "Dashboard/Dashboard.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        $this->loadTemplate("Home/Sidebar.html.twig", "Dashboard/Dashboard.html.twig", 10)->display($context);
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

                        <h3>";
        // line 42
        echo twig_escape_filter($this->env, ($context["res"] ?? $this->getContext($context, "res")), "html", null, true);
        echo "</h3>


                        <p>Nombre des Parents</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"ion ion-person\"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
                <!-- small box -->
                <div class=\"small-box bg-success\">
                    <div class=\"inner\">
                        <h3>";
        // line 57
        echo twig_escape_filter($this->env, ($context["res1"] ?? $this->getContext($context, "res1")), "html", null, true);
        echo "</h3>

                        <p>Nombre des Maitres</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"ion ion-person\"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
                <!-- small box -->
                <div class=\"small-box bg-warning\">
                    <div class=\"inner\">
                        <h3>";
        // line 71
        echo twig_escape_filter($this->env, ($context["res2"] ?? $this->getContext($context, "res2")), "html", null, true);
        echo "</h3>

                        <p>Nombre des Elèves</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"ion ion-person\"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
                <!-- small box -->
                <div class=\"small-box bg-danger\">
                    <div class=\"inner\">
                        <h3>";
        // line 85
        echo twig_escape_filter($this->env, ($context["res3"] ?? $this->getContext($context, "res3")), "html", null, true);
        echo "</h3>

                        <p>Nombre des Matiéres</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"fa fa-book\" aria-hidden=\"true\"></i>                    </div>
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
        // line 109
        $this->loadTemplate("Home/Footer.html.twig", "Dashboard/Dashboard.html.twig", 109)->display($context);
        // line 110
        echo "</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Dashboard/Dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 110,  169 => 109,  142 => 85,  125 => 71,  108 => 57,  90 => 42,  67 => 22,  54 => 11,  51 => 10,  49 => 9,  43 => 5,  41 => 4,  36 => 1,);
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

                        <h3>{{ res }}</h3>


                        <p>Nombre des Parents</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"ion ion-person\"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
                <!-- small box -->
                <div class=\"small-box bg-success\">
                    <div class=\"inner\">
                        <h3>{{ res1 }}</h3>

                        <p>Nombre des Maitres</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"ion ion-person\"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
                <!-- small box -->
                <div class=\"small-box bg-warning\">
                    <div class=\"inner\">
                        <h3>{{ res2 }}</h3>

                        <p>Nombre des Elèves</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"ion ion-person\"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
                <!-- small box -->
                <div class=\"small-box bg-danger\">
                    <div class=\"inner\">
                        <h3>{{ res3 }}</h3>

                        <p>Nombre des Matiéres</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"fa fa-book\" aria-hidden=\"true\"></i>                    </div>
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
</html>", "Dashboard/Dashboard.html.twig", "C:\\wamp64\\www\\Ecole\\app\\Resources\\views\\Dashboard\\dashboard.html.twig");
    }
}
