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

/* Personne/affiche.html.twig */
class __TwigTemplate_ad5fc7bc63b0c244fc8dcc40736f3224df6dd9e98521030d4d75410b3069d718 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Personne/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Personne/affiche.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

";
        // line 4
        $this->loadTemplate("Home/Header.html.twig", "Personne/affiche.html.twig", 4)->display($context);
        // line 5
        echo "
<body class=\"hold-transition sidebar-mini\">
<div class=\"wrapper\">

    ";
        // line 9
        $this->loadTemplate("Home/Navbar.html.twig", "Personne/affiche.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        $this->loadTemplate("Home/Sidebar.html.twig", "Personne/affiche.html.twig", 10)->display($context);
        // line 11
        echo "
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\">
                            <h1>Personnes</h1>
                        </div>
                        <div class=\"col-sm-6\">
                            <ol class=\"breadcrumb float-sm-right\">
                                <li class=\"breadcrumb-item\"><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichePers");
        echo "\">Personnes</a></li>
                                <li class=\"breadcrumb-item active\">Liste Personnes </li>
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
                                            <th style=\"width: 10px\">Cin</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Adresse</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th> <a class=\"btn btn-primary\" href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterPers");
        echo "\" role=\"button\">Ajouter</a></th>
                                        </tr>
                                        </thead>
                                        <tbody id=\"myTable\">
                                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["personnes"] ?? $this->getContext($context, "personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["pers"]) {
            // line 58
            echo "                                        <tr>
                                            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["pers"], "cinPersonne", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["pers"], "nom", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["pers"], "prenom", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["pers"], "adresse", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["pers"], "Email", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["pers"], "role", []), "html", null, true);
            echo "</td>
                                            <td>  <a class=\"btn btn-warning\"href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_personne", ["cinPersonne" => $this->getAttribute($context["pers"], "cinPersonne", [])]), "html", null, true);
            echo "\" role=\"button\">Modifier</a></td>
                                            <td>  <a class=\"btn btn-danger\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppPers", ["cin" => $this->getAttribute($context["pers"], "cinPersonne", [])]), "html", null, true);
            echo "\" role=\"button\">Supprimer</a></td>


                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                        </tbody>
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
        // line 102
        $this->loadTemplate("Home/Footer.html.twig", "Personne/affiche.html.twig", 102)->display($context);
        // line 103
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
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 4 -->
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../dist/js/demo.js"), "html", null, true);
        echo "\"></script>
<!-- Insérer cette balise \"link\" après celle de Bootstrap -->
<link rel=\"stylesheet\" href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css"), "html", null, true);
        echo "\">

<!-- Insérer cette balise \"script\" après celle de Bootstrap -->
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"), "html", null, true);
        echo "\"></script>
    </body>
    </html>

</div>
</body>
";
        // line 145
        $this->loadTemplate("Home/Footer.html.twig", "Personne/affiche.html.twig", 145)->display($context);
        // line 146
        echo "</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Personne/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 146,  251 => 145,  242 => 139,  236 => 136,  231 => 134,  226 => 132,  221 => 130,  216 => 128,  189 => 103,  187 => 102,  154 => 71,  143 => 66,  139 => 65,  135 => 64,  131 => 63,  127 => 62,  123 => 61,  119 => 60,  115 => 59,  112 => 58,  108 => 57,  101 => 53,  68 => 23,  54 => 11,  51 => 10,  49 => 9,  43 => 5,  41 => 4,  36 => 1,);
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
                            <h1>Personnes</h1>
                        </div>
                        <div class=\"col-sm-6\">
                            <ol class=\"breadcrumb float-sm-right\">
                                <li class=\"breadcrumb-item\"><a href=\"{{ path('affichePers') }}\">Personnes</a></li>
                                <li class=\"breadcrumb-item active\">Liste Personnes </li>
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
                                            <th style=\"width: 10px\">Cin</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Adresse</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th> <a class=\"btn btn-primary\" href=\"{{ path('ajouterPers') }}\" role=\"button\">Ajouter</a></th>
                                        </tr>
                                        </thead>
                                        <tbody id=\"myTable\">
                                        {% for pers in personnes %}
                                        <tr>
                                            <td>{{ pers.cinPersonne }}</td>
                                            <td>{{ pers.nom }}</td>
                                            <td>{{ pers.prenom }}</td>
                                            <td>{{ pers.adresse }}</td>
                                            <td>{{ pers.Email }}</td>
                                            <td>{{ pers.role }}</td>
                                            <td>  <a class=\"btn btn-warning\"href=\"{{ path(\"edit_personne\", {'cinPersonne' : pers.cinPersonne}) }}\" role=\"button\">Modifier</a></td>
                                            <td>  <a class=\"btn btn-danger\" href=\"{{ path(\"suppPers\", {'cin' : pers.cinPersonne}) }}\" role=\"button\">Supprimer</a></td>


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
{% include 'Home/Footer.html.twig' %}
</html>", "Personne/affiche.html.twig", "C:\\wamp64\\www\\Ecole\\app\\Resources\\views\\Personne\\affiche.html.twig");
    }
}
