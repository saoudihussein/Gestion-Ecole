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

/* Eleve/affiche.html.twig */
class __TwigTemplate_d956fdb48192f94c92740c619b700668633099672f2fa4767dd50dd1b24104ec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Eleve/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Eleve/affiche.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

";
        // line 4
        $this->loadTemplate("Home/Header.html.twig", "Eleve/affiche.html.twig", 4)->display($context);
        // line 5
        echo "
<body class=\"hold-transition sidebar-mini\">
<div class=\"wrapper\">

    ";
        // line 9
        $this->loadTemplate("Home/Navbar.html.twig", "Eleve/affiche.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        $this->loadTemplate("Home/Sidebar.html.twig", "Eleve/affiche.html.twig", 10)->display($context);
        // line 11
        echo "
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Elève</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche_eleve");
        echo "\">Elève</a></li>
                            <li class=\"breadcrumb-item active\">Liste Elève </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\"></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <table class=\"table table-bordered\" >
                                    <thead>
                                    <input class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">

                                    <tr>
                                        <th>Num d'éleve </th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Adresse</th>
                                        <th>Num Classe</th>
                                        <th> Classe</th>
                                        <th>CIN Parent</th>
                                        <th>Nom Parent</th>
                                        <th>Prenom Parent</th>
                                        <th> <a class=\"btn btn-primary\" href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterElev");
        echo "\" role=\"button\">Ajouter</a></th>

                                    </thead>
                                    <tbody id=\"myTable\">
                                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eleves"] ?? $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["elvs"]) {
            // line 61
            echo "                                        <tr>
                                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["elvs"], "numEleve", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["elvs"], "nom", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["elvs"], "prenom", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["elvs"], "adresse", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["elvs"], "num", []), "num", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["elvs"], "num", []), "libelle", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["elvs"], "cinParent", []), "cinPersonne", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["elvs"], "cinParent", []), "nom", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["elvs"], "cinParent", []), "prenom", []), "html", null, true);
            echo "</td>

                                            <td>  <a class=\"btn btn-warning\"href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_eleve", ["num" => $this->getAttribute($context["elvs"], "numEleve", [])]), "html", null, true);
            echo "\" role=\"button\">Modifier</a></td>
                                            <td>  <a class=\"btn btn-danger\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppElvs", ["num" => $this->getAttribute($context["elvs"], "numEleve", [])]), "html", null, true);
            echo "\" role=\"button\">Supprimer</a></td>

                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elvs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                                    </tbody>
                                </table>
                            </div>



                            <!-- /.card-body -->
                            <div class=\"card-footer clearfix\">
                                <ul class=\"pagination pagination-sm m-0 float-right\">
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">&laquo;</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card -->

                        <!-- /.card -->
                    </div>

                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    ";
        // line 108
        $this->loadTemplate("Home/Footer.html.twig", "Eleve/affiche.html.twig", 108)->display($context);
        // line 109
        echo "


    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script>
    \$(document).ready(function(){
        \$(\"#myInput\").on(\"keyup\", function() {
            var value = \$(this).val().toLowerCase();
            \$(\"#myTable tr\").filter(function() {
                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>


<!-- jQuery -->
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 4 -->
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../dist/js/demo.js"), "html", null, true);
        echo "\"></script>
<!-- Insérer cette balise \"link\" après celle de Bootstrap -->
<link rel=\"stylesheet\" href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css"), "html", null, true);
        echo "\">

<!-- Insérer cette balise \"script\" après celle de Bootstrap -->
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>

</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Eleve/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 145,  251 => 142,  246 => 140,  241 => 138,  236 => 136,  231 => 134,  204 => 109,  202 => 108,  169 => 77,  159 => 73,  155 => 72,  150 => 70,  146 => 69,  142 => 68,  138 => 67,  134 => 66,  130 => 65,  126 => 64,  122 => 63,  118 => 62,  115 => 61,  111 => 60,  104 => 56,  68 => 23,  54 => 11,  51 => 10,  49 => 9,  43 => 5,  41 => 4,  36 => 1,);
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
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Elève</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"{{ path('affiche_eleve') }}\">Elève</a></li>
                            <li class=\"breadcrumb-item active\">Liste Elève </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\"></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <table class=\"table table-bordered\" >
                                    <thead>
                                    <input class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Search..\">

                                    <tr>
                                        <th>Num d'éleve </th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Adresse</th>
                                        <th>Num Classe</th>
                                        <th> Classe</th>
                                        <th>CIN Parent</th>
                                        <th>Nom Parent</th>
                                        <th>Prenom Parent</th>
                                        <th> <a class=\"btn btn-primary\" href=\"{{ path('ajouterElev') }}\" role=\"button\">Ajouter</a></th>

                                    </thead>
                                    <tbody id=\"myTable\">
                                    {% for elvs in eleves %}
                                        <tr>
                                            <td>{{ elvs.numEleve }}</td>
                                            <td>{{ elvs.nom }}</td>
                                            <td>{{ elvs.prenom }}</td>
                                            <td>{{ elvs.adresse }}</td>
                                            <td>{{ elvs.num.num }}</td>
                                            <td>{{ elvs.num.libelle }}</td>
                                            <td>{{ elvs.cinParent.cinPersonne }}</td>
                                            <td>{{ elvs.cinParent.nom }}</td>
                                            <td>{{ elvs.cinParent.prenom }}</td>

                                            <td>  <a class=\"btn btn-warning\"href=\"{{ path(\"edit_eleve\", {'num' : elvs.numEleve}) }}\" role=\"button\">Modifier</a></td>
                                            <td>  <a class=\"btn btn-danger\" href=\"{{ path(\"suppElvs\", {'num' : elvs.numEleve}) }}\" role=\"button\">Supprimer</a></td>

                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>



                            <!-- /.card-body -->
                            <div class=\"card-footer clearfix\">
                                <ul class=\"pagination pagination-sm m-0 float-right\">
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">&laquo;</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card -->

                        <!-- /.card -->
                    </div>

                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    {% include 'Home/Footer.html.twig' %}



    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script>
    \$(document).ready(function(){
        \$(\"#myInput\").on(\"keyup\", function() {
            var value = \$(this).val().toLowerCase();
            \$(\"#myTable tr\").filter(function() {
                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>


<!-- jQuery -->
<script src=\"{{ asset('../../plugins/jquery/jquery.min.js')}}\"></script>
<!-- Bootstrap 4 -->
<script src=\"{{ asset('../../plugins/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('../../dist/js/adminlte.min.js')}}\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"{{ asset('../../dist/js/demo.js')}}\"></script>
<!-- Insérer cette balise \"link\" après celle de Bootstrap -->
<link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css')}}\">

<!-- Insérer cette balise \"script\" après celle de Bootstrap -->
<script src=\"{{ asset('https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js')}}\"></script>
</body>
</html>

</div>
</body>
</html>", "Eleve/affiche.html.twig", "C:\\wamp64\\www\\Ecole\\app\\Resources\\views\\Eleve\\affiche.html.twig");
    }
}
