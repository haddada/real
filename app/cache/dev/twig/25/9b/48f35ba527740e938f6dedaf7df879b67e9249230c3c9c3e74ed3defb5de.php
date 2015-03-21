<?php

/* realEstateBundle:Offre:show.html.twig */
class __TwigTemplate_259b48f35ba527740e938f6dedaf7df879b67e9249230c3c9c3e74ed3defb5de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Offre</h1>

    <table class=\"record_properties\">
        <tbody>
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 9
            echo "            <tr>
                <th>Id</th>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Idgerant</th>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idGerant", array()), "html", null, true);
            echo "</td>
            </tr>
             <tr>
                <th>adresse</th>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Adresse", array()), "id", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etat", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Typeimmob</th>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typeimmob", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Nature</th>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nature", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Payement</th>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "payement", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Surface</th>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "surface", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Nbrpiece</th>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbrpiece", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Datepublication</th>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datepublication", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Datemodification</th>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datemodification", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Dispobileapartir</th>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dispobileapartir", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Etage</th>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etage", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Ascenceur</th>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ascenceur", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Cuisineequipe</th>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cuisineequipe", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Jardin</th>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "jardin", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Entreeindep</th>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "entreeindep", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Gazdeville</th>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "gazdeville", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Chauffage</th>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "chauffage", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Meuble</th>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "meuble", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Climatisation</th>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "climatisation", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "note", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Urlimage</th>
                <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "urlimage", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "</td>
            </tr>
        </tbody>

    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("offre");
            echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
            Edit
        </a>
    </li>
    
</ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 120,  232 => 115,  221 => 107,  214 => 103,  207 => 99,  200 => 95,  193 => 91,  186 => 87,  179 => 83,  172 => 79,  165 => 75,  158 => 71,  151 => 67,  144 => 63,  137 => 59,  130 => 55,  123 => 51,  116 => 47,  109 => 43,  102 => 39,  95 => 35,  88 => 31,  81 => 27,  74 => 23,  67 => 19,  60 => 15,  53 => 11,  49 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
