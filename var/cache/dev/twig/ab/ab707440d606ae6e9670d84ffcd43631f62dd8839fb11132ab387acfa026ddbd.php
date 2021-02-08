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

/* Note/affiche.html.twig */
class __TwigTemplate_db5a3018ab9fe312f488f502827cd05fade03b3f960e9406ad8383a0493ded30 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Note/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Note/affiche.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

";
        // line 4
        $this->loadTemplate("Home/Header.html.twig", "Note/affiche.html.twig", 4)->display($context);
        // line 5
        echo "
<body class=\"hold-transition sidebar-mini\">
<div class=\"wrapper\">

    ";
        // line 9
        $this->loadTemplate("Home/Navbar.html.twig", "Note/affiche.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        $this->loadTemplate("Home/Sidebar.html.twig", "Note/affiche.html.twig", 10)->display($context);
        // line 11
        echo "
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Notes</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Note_affichage");
        echo "\">Notes</a></li>
                            <li class=\"breadcrumb-item active\">Liste Note </li>
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
                                        <th>ID</th>
                                        <th>Note</th>
                                        <th>Matiere </th>
                                        <th>Numero d'éleve</th>
                                        <th>Nom d'éleve</th>
                                        <th>Prénom d'éleve</th>
                                        <th>Numéro de Classe</th>
                                        <th>Classe</th>
                                        <th> <a class=\"btn btn-primary\" href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterNote");
        echo "\" role=\"button\">Ajouter</a></th>

                                    </thead>
                                    <tbody id=\"myTable\">
                                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 60
            echo "                                        <tr>
                                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "numNote", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "note", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "numMat", []), "libelle", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "numEleve", []), "numEleve", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "numEleve", []), "nom", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "numEleve", []), "prenom", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "num", []), "num", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "num", []), "libelle", []), "html", null, true);
            echo "</td>
                                            <td>  <a class=\"btn btn-warning\"href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_note", ["numnote" => $this->getAttribute($context["n"], "numNote", [])]), "html", null, true);
            echo "\" role=\"button\">Modifier</a></td>
                                            <td>  <a class=\"btn btn-danger\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppNote", ["numnote" => $this->getAttribute($context["n"], "numNote", [])]), "html", null, true);
            echo "\" role=\"button\">Supprimer</a></td>

                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
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
        // line 105
        $this->loadTemplate("Home/Footer.html.twig", "Note/affiche.html.twig", 105)->display($context);
        // line 106
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
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 4 -->
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../dist/js/demo.js"), "html", null, true);
        echo "\"></script>
<!-- Insérer cette balise \"link\" après celle de Bootstrap -->
<link rel=\"stylesheet\" href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css"), "html", null, true);
        echo "\">

<!-- Insérer cette balise \"script\" après celle de Bootstrap -->
<script src=\"";
        // line 142
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
        return "Note/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 142,  245 => 139,  240 => 137,  235 => 135,  230 => 133,  225 => 131,  198 => 106,  196 => 105,  163 => 74,  153 => 70,  149 => 69,  145 => 68,  141 => 67,  137 => 66,  133 => 65,  129 => 64,  125 => 63,  121 => 62,  117 => 61,  114 => 60,  110 => 59,  103 => 55,  68 => 23,  54 => 11,  51 => 10,  49 => 9,  43 => 5,  41 => 4,  36 => 1,);
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
                        <h1>Notes</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"{{ path('Note_affichage') }}\">Notes</a></li>
                            <li class=\"breadcrumb-item active\">Liste Note </li>
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
                                        <th>ID</th>
                                        <th>Note</th>
                                        <th>Matiere </th>
                                        <th>Numero d'éleve</th>
                                        <th>Nom d'éleve</th>
                                        <th>Prénom d'éleve</th>
                                        <th>Numéro de Classe</th>
                                        <th>Classe</th>
                                        <th> <a class=\"btn btn-primary\" href=\"{{ path('ajouterNote') }}\" role=\"button\">Ajouter</a></th>

                                    </thead>
                                    <tbody id=\"myTable\">
                                    {% for n in notes %}
                                        <tr>
                                            <td>{{ n.numNote }}</td>
                                            <td>{{ n.note }}</td>
                                            <td>{{ n.numMat.libelle }}</td>
                                            <td>{{ n.numEleve.numEleve }}</td>
                                            <td>{{ n.numEleve.nom }}</td>
                                            <td>{{ n.numEleve.prenom }}</td>
                                            <td>{{ n.num.num }}</td>
                                            <td>{{ n.num.libelle }}</td>
                                            <td>  <a class=\"btn btn-warning\"href=\"{{ path(\"edit_note\", {'numnote' : n.numNote}) }}\" role=\"button\">Modifier</a></td>
                                            <td>  <a class=\"btn btn-danger\" href=\"{{ path(\"suppNote\", {'numnote' : n.numNote}) }}\" role=\"button\">Supprimer</a></td>

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
</html>", "Note/affiche.html.twig", "C:\\wamp64\\www\\Ecole\\app\\Resources\\views\\Note\\affiche.html.twig");
    }
}
