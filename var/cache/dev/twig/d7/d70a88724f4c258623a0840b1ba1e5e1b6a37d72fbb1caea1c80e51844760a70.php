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
class __TwigTemplate_9ece488d4352b1bbfe061a5c54014eccd1eb185efa968835ea2f3d02b09d4e38 extends \Twig\Template
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
        echo "<h1>Liste des Personnes</h1>
<table border=\"1\">
    <thead>
    <th>Cin</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Adresse</th>
    <th>Email</th>
    <th>Role</th>
    <th>Supprimer</th>
    </thead>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["personnes"] ?? $this->getContext($context, "personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["pers"]) {
            // line 14
            echo "        <tr>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["pers"], "cinPersonne", []), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["pers"], "nom", []), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["pers"], "prenom", []), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["pers"], "adresse", []), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["pers"], "Email", []), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["pers"], "role", []), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppPers", ["cin" => $this->getAttribute($context["pers"], "cinPersonne", [])]), "html", null, true);
            echo "\" >Supprimer</a> </td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>";
        
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
        return array (  91 => 25,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  54 => 14,  50 => 13,  36 => 1,);
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
    <th>Cin</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Adresse</th>
    <th>Email</th>
    <th>Role</th>
    <th>Supprimer</th>
    </thead>

    {% for pers in personnes %}
        <tr>
            <td>{{ pers.cinPersonne }}</td>
            <td>{{ pers.nom }}</td>
            <td>{{ pers.prenom }}</td>
            <td>{{ pers.adresse }}</td>
            <td>{{ pers.Email }}</td>
            <td>{{ pers.role }}</td>
            <td><a href=\"{{ path(\"suppPers\", {'cin' : pers.cinPersonne}) }}\" >Supprimer</a> </td>
        </tr>

    {% endfor %}
</table>", "Personne/affiche.html.twig", "C:\\wamp64\\www\\SymfonyProject\\app\\Resources\\views\\Personne\\affiche.html.twig");
    }
}
