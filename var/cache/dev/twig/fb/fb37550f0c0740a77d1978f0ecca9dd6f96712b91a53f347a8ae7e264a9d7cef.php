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

/* Personne/ajouter.html.twig */
class __TwigTemplate_4b38f4f9bdc2b2e4986302f567032d39b999a3073f0c0a67f7ff4618767331d0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Personne/ajouter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Personne/ajouter.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
";
        // line 3
        $this->loadTemplate("Home/Header.html.twig", "Personne/ajouter.html.twig", 3)->display($context);
        // line 4
        echo "

<body class=\"hold-transition sidebar-mini\">
<div class=\"wrapper\">

    ";
        // line 9
        $this->loadTemplate("Home/Navbar.html.twig", "Personne/ajouter.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        $this->loadTemplate("Home/Sidebar.html.twig", "Personne/ajouter.html.twig", 10)->display($context);
        // line 11
        echo "
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6 \">
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichePers");
        echo "\">Personne</a></li>
                            <li class=\"breadcrumb-item active\">Ajouter Personnes</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <!-- left column -->

                    <div class=\"col-md-6 offset-md-3 \">
                        <!-- general form elements -->
                        <div class=\"card card-primary\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Formulaire de Personne</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role=\"form\" action=\"\" method=\"post\">
                                ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["Form"] ?? $this->getContext($context, "Form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        // line 46
        echo "
                                <div class=\"card-body\">

                                    <div class=\"form-group\">
                                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "cinPersonne", []), 'label', ["label" => "CIN"]);
        echo "
                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "cinPersonne", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "nom", []), 'label', ["label" => "Nom"]);
        echo "
                                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "prenom", []), 'label', ["label" => "prenom"]);
        echo "
                                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "prenom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "adresse", []), 'label', ["label" => "Adresse"]);
        echo "
                                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "adresse", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "numTel", []), 'label', ["label" => "Télephone"]);
        echo "
                                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "numTel", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "email", []), 'label', ["label" => "Email"]);
        echo "
                                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "MotDePasse", []), 'label', ["label" => "Mot de passe"]);
        echo "
                                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "MotDePasse", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "role", []), 'label', ["label" => "Role"]);
        echo "
                                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "role", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class=\"card-footer\">
                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                                </div>
                                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["Form"] ?? $this->getContext($context, "Form")), 'rest');
        echo "
                                ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["Form"] ?? $this->getContext($context, "Form")), 'form_end');
        echo "
                            </form>
                        </div>



                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    ";
        // line 113
        $this->loadTemplate("Home/Footer.html.twig", "Personne/ajouter.html.twig", 113)->display($context);
        // line 114
        echo "
    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"../../plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"../../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- bs-custom-file-input -->
<script src=\"../../plugins/bs-custom-file-input/bs-custom-file-input.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"../../dist/js/adminlte.min.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"../../dist/js/demo.js\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Personne/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 114,  221 => 113,  201 => 96,  197 => 95,  192 => 93,  182 => 86,  178 => 85,  171 => 81,  167 => 80,  160 => 76,  156 => 75,  149 => 71,  145 => 70,  138 => 66,  134 => 65,  127 => 61,  123 => 60,  116 => 56,  112 => 55,  105 => 51,  101 => 50,  95 => 46,  93 => 45,  67 => 22,  54 => 11,  51 => 10,  49 => 9,  42 => 4,  40 => 3,  36 => 1,);
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
                    <div class=\"col-sm-6 \">
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"{{ path('affichePers') }}\">Personne</a></li>
                            <li class=\"breadcrumb-item active\">Ajouter Personnes</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <!-- left column -->

                    <div class=\"col-md-6 offset-md-3 \">
                        <!-- general form elements -->
                        <div class=\"card card-primary\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Formulaire de Personne</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role=\"form\" action=\"\" method=\"post\">
                                {{ form_start(Form,{'attr':{'novalidate':
                                'novalidate'}})}}
                                <div class=\"card-body\">

                                    <div class=\"form-group\">
                                        {{ form_label(Form.cinPersonne,'CIN') }}
                                        {{ form_widget(Form.cinPersonne,{'attr':{'class':'form-control'}}) }}

                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(Form.nom,'Nom') }}
                                        {{ form_widget(Form.nom,{'attr':{'class':'form-control'}}) }}

                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(Form.prenom,'prenom') }}
                                        {{ form_widget(Form.prenom,{'attr':{'class':'form-control'}}) }}

                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(Form.adresse,'Adresse') }}
                                        {{ form_widget(Form.adresse,{'attr':{'class':'form-control'}}) }}

                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(Form.numTel,'Télephone') }}
                                        {{ form_widget(Form.numTel,{'attr':{'class':'form-control'}}) }}

                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(Form.email,'Email') }}
                                        {{ form_widget(Form.email,{'attr':{'class':'form-control'}}) }}

                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(Form.MotDePasse,'Mot de passe') }}
                                        {{ form_widget(Form.MotDePasse,{'attr':{'class':'form-control'}}) }}

                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(Form.role,'Role') }}
                                        {{ form_widget(Form.role,{'attr':{'class':'form-control'}}) }}

                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class=\"card-footer\">
                                    {{ form_widget(Form.save,{'attr':{'class':'btn btn-primary'}}) }}
                                </div>
                                {{ form_rest(Form) }}
                                {{ form_end(Form)}}
                            </form>
                        </div>



                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
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

<!-- jQuery -->
<script src=\"../../plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"../../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- bs-custom-file-input -->
<script src=\"../../plugins/bs-custom-file-input/bs-custom-file-input.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"../../dist/js/adminlte.min.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"../../dist/js/demo.js\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
</body>
</html>
", "Personne/ajouter.html.twig", "C:\\wamp64\\www\\Ecole\\app\\Resources\\views\\Personne\\ajouter.html.twig");
    }
}
