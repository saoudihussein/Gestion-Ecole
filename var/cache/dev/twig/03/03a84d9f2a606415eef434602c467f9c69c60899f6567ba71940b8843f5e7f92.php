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

/* Note/edit.html.twig */
class __TwigTemplate_80f047baee54cb36569c33f4395c232d3a4d6263f4c2f1f0fd9a6bbca2d5beb4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Note/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Note/edit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
";
        // line 3
        $this->loadTemplate("Home/Header.html.twig", "Note/edit.html.twig", 3)->display($context);
        // line 4
        echo "

<body class=\"hold-transition sidebar-mini\">
<div class=\"wrapper\">

    ";
        // line 9
        $this->loadTemplate("Home/Navbar.html.twig", "Note/edit.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        $this->loadTemplate("Home/Sidebar.html.twig", "Note/edit.html.twig", 10)->display($context);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Note_affichage");
        echo "\">Note</a></li>
                            <li class=\"breadcrumb-item active\">Modifier Notes</li>
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
                        <div class=\"card card-warning\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Modifier Note</h3>
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
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "Note", []), 'label', ["label" => "Note"]);
        echo "
                                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "Note", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "numMat", []), 'label', ["label" => "Libelle Matiére"]);
        echo "
                                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "numMat", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>

                                    <div class=\"form-group\">
                                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "numEleve", []), 'label', ["label" => "Num Elève"]);
        echo "
                                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "numEleve", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>

                                    <div class=\"form-group\">
                                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "num", []), 'label', ["label" => "Classe"]);
        echo "
                                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "num", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>



                                </div>
                                <!-- /.card-body -->

                                <div class=\"card-footer\">
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                                </div>
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["Form"] ?? $this->getContext($context, "Form")), 'rest');
        echo "
                                ";
        // line 82
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
        // line 99
        $this->loadTemplate("Home/Footer.html.twig", "Note/edit.html.twig", 99)->display($context);
        // line 100
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
        return "Note/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 100,  183 => 99,  163 => 82,  159 => 81,  154 => 79,  141 => 69,  137 => 68,  129 => 63,  125 => 62,  117 => 57,  113 => 56,  106 => 52,  102 => 51,  95 => 46,  93 => 45,  67 => 22,  54 => 11,  51 => 10,  49 => 9,  42 => 4,  40 => 3,  36 => 1,);
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
                            <li class=\"breadcrumb-item\"><a href=\"{{ path('Note_affichage') }}\">Note</a></li>
                            <li class=\"breadcrumb-item active\">Modifier Notes</li>
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
                        <div class=\"card card-warning\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Modifier Note</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role=\"form\" action=\"\" method=\"post\">
                                {{ form_start(Form,{'attr':{'novalidate':
                                    'novalidate'}})}}
                                <div class=\"card-body\">


                                    <div class=\"form-group\">
                                        {{ form_label(Form.Note,'Note') }}
                                        {{ form_widget(Form.Note,{'attr':{'class':'form-control'}}) }}

                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(Form.numMat,'Libelle Matiére') }}
                                        {{ form_widget(Form.numMat,{'attr':{'class':'form-control'}}) }}

                                    </div>

                                    <div class=\"form-group\">
                                        {{ form_label(Form.numEleve,'Num Elève') }}
                                        {{ form_widget(Form.numEleve,{'attr':{'class':'form-control'}}) }}

                                    </div>

                                    <div class=\"form-group\">
                                        {{ form_label(Form.num,'Classe') }}
                                        {{ form_widget(Form.num,{'attr':{'class':'form-control'}}) }}

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
", "Note/edit.html.twig", "C:\\wamp64\\www\\Ecole\\app\\Resources\\views\\Note\\edit.html.twig");
    }
}
