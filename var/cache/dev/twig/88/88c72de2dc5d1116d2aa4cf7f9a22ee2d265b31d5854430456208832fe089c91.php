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

/* Matiere/affiche.html.twig */
class __TwigTemplate_31b4674633206ef099c63076bf9ba40b68814946b6769bdf04f7ed7ba3724492 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Matiere/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Matiere/affiche.html.twig"));

        // line 1
        echo "<h1>Liste des Personnes</h1>
<table border=\"1\">
    <thead>
    <th>Num</th>
    <th>Libelle</th>
    <th>Coef</th>
    <th>Supprimer</th>
    </thead>

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Matieres"] ?? $this->getContext($context, "Matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["mats"]) {
            // line 11
            echo "            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mats"], "numMat", []), "html", null, true);
            echo "</td>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["mats"], "libelle", []), "html", null, true);
            echo "</td>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["mats"], "coef", []), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppMat", ["num" => $this->getAttribute($context["mats"], "numMat", [])]), "html", null, true);
            echo "\" >Supprimer</a> </td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Matiere/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  64 => 14,  60 => 13,  56 => 12,  51 => 11,  47 => 10,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>Liste des Personnes</h1>
<table border=\"1\">
    <thead>
    <th>Num</th>
    <th>Libelle</th>
    <th>Coef</th>
    <th>Supprimer</th>
    </thead>

    {% for mats in Matieres %}
            <td>{{ mats.numMat }}</td>
            <td>{{ mats.libelle }}</td>
            <td>{{ mats.coef }}</td>
            <td><a href=\"{{ path(\"suppMat\", {'num' : mats.numMat}) }}\" >Supprimer</a> </td>
        </tr>

    {% endfor %}
</table>", "Matiere/affiche.html.twig", "C:\\wamp64\\www\\SymfonyProject\\app\\Resources\\views\\Matiere\\affiche.html.twig");
    }
}
