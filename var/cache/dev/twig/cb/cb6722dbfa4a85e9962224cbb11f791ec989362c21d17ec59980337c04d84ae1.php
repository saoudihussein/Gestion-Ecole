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
        echo "<h1>Liste des Eleves</h1>
<table border=\"1\">
    <thead>
    <th>Num </th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Adresse</th>
    <th>Parent</th>
    <th>Supprimer</th>
    </thead>

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eleves"] ?? $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["elvs"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["elvs"], "numEleve", []), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["elvs"], "nom", []), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["elvs"], "prenom", []), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["elvs"], "adresse", []), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["elvs"], "cinParent", []), "cinPersonne", []), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppElvs", ["num" => $this->getAttribute($context["elvs"], "numEleve", [])]), "html", null, true);
            echo "\" >Supprimer</a> </td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elvs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</table>";
        
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
        return array (  86 => 23,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  53 => 13,  49 => 12,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>Liste des Eleves</h1>
<table border=\"1\">
    <thead>
    <th>Num </th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Adresse</th>
    <th>Parent</th>
    <th>Supprimer</th>
    </thead>

    {% for elvs in eleves %}
        <tr>
            <td>{{ elvs.numEleve }}</td>
            <td>{{ elvs.nom }}</td>
            <td>{{ elvs.prenom }}</td>
            <td>{{ elvs.adresse }}</td>
            <td>{{ elvs.cinParent.cinPersonne }}</td>
            <td><a href=\"{{ path(\"suppElvs\", {'num' : elvs.numEleve}) }}\" >Supprimer</a> </td>
        </tr>

    {% endfor %}
</table>", "Eleve/affiche.html.twig", "C:\\wamp64\\www\\SymfonyProject\\app\\Resources\\views\\Eleve\\affiche.html.twig");
    }
}
