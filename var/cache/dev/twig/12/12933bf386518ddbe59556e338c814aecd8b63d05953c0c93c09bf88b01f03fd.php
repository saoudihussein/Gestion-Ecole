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

/* Personne/login.html.twig */
class __TwigTemplate_f7b70debb3aa27d2a1ff0d1fe0ad936a383abd4e6f15db346338fd813265cfb9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Personne/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Personne/login.html.twig"));

        // line 1
        echo "<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- icheck bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"), "html", null, true);
        echo " \" rel=\"stylesheet\">

    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://unpkg.com/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

</head>
<body class=\"hold-transition login-page\" style=\"background-image: url(";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://images-na.ssl-images-amazon.com/images/I/61QrCdBXSTL._AC_SL1100_.jpg"), "html", null, true);
        echo ");\">
<div class=\"login-box\">
    <div class=\"login-logo\">
        <a href=\"#\" style=\"color: white\"><b>Gestion ECOLE</b></a>
    </div>
    <!-- /.login-logo -->
    <div class=\"card\">
        <div class=\"card-body login-card-body\">
            <form action=\"\" role=\"form\" method=\"post\">
                ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["Form"] ?? $this->getContext($context, "Form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        // line 35
        echo "
                <div class=\"input-group mb-3\">
                    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-envelope\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-lock\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"row  justify-content-center\">
                    <div class=\"col-6\" >
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["Form"] ?? $this->getContext($context, "Form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src=\"../../plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"../../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"../../dist/js/adminlte.min.js\"></script>
<br><br><br><br>
";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "notice"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 74
            echo "
    <div class=\"alert alert-danger\">
        ";
            // line 76
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Personne/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 80,  145 => 76,  141 => 74,  137 => 73,  115 => 54,  94 => 35,  92 => 34,  80 => 25,  74 => 22,  69 => 20,  64 => 18,  59 => 16,  54 => 14,  49 => 12,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset ('plugins/fontawesome-free/css/all.min.css') }}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"{{ asset ('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}\">
    <!-- icheck bootstrap -->
    <link rel=\"stylesheet\" href=\"{{ asset ('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset ('dist/css/adminlte.min.css') }}\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"{{ asset ('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700') }} \" rel=\"stylesheet\">

    <script src=\"{{ asset ('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}\"></script>

</head>
<body class=\"hold-transition login-page\" style=\"background-image: url({{ asset('https://images-na.ssl-images-amazon.com/images/I/61QrCdBXSTL._AC_SL1100_.jpg') }});\">
<div class=\"login-box\">
    <div class=\"login-logo\">
        <a href=\"#\" style=\"color: white\"><b>Gestion ECOLE</b></a>
    </div>
    <!-- /.login-logo -->
    <div class=\"card\">
        <div class=\"card-body login-card-body\">
            <form action=\"\" role=\"form\" method=\"post\">
                {{ form_start(Form,{'attr':{'novalidate':
                    'novalidate'}})}}
                <div class=\"input-group mb-3\">
                    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-envelope\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-lock\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"row  justify-content-center\">
                    <div class=\"col-6\" >
                        {{ form_widget(Form.save,{'attr':{'class':'btn btn-primary'}}) }}
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src=\"../../plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"../../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"../../dist/js/adminlte.min.js\"></script>
<br><br><br><br>
{% for flashMessage in app.session.flashbag.get('notice') %}

    <div class=\"alert alert-danger\">
        {{ flashMessage }}
    </div>

{% endfor %}
</body>
</html>
", "Personne/login.html.twig", "C:\\wamp64\\www\\Ecole\\app\\Resources\\views\\Personne\\login.html.twig");
    }
}
