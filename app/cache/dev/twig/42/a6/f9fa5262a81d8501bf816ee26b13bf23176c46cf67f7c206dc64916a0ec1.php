<?php

/* realEstateBundle:Offre:show.html.twig */
class __TwigTemplate_42a6f9fa5262a81d8501bf816ee26b13bf23176c46cf67f7c206dc64916a0ec1 extends Twig_Template
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
        echo "    <h1>Offre</h1>

    <table class=\"record_properties\">
        <tbody>

            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idgerant</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idGerant", array()), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>adresse</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "Adresse", array()), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typeimmob</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typeimmob", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nature</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nature", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Payement</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "payement", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Surface</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "surface", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbrpiece</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbrpiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datepublication</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datepublication", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datemodification</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datemodification", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dispobileapartir</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dispobileapartir", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etage</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ascenceur</th>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ascenceur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cuisineequipe</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cuisineequipe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Jardin</th>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jardin", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Entreeindep</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "entreeindep", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gazdeville</th>
                <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gazdeville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Chauffage</th>
                <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chauffage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Meuble</th>
                <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "meuble", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Climatisation</th>
                <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "climatisation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "note", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Urlimage</th>
                <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "urlimage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("offre");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offre_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 123
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
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
        return array (  241 => 123,  234 => 119,  226 => 114,  216 => 107,  209 => 103,  202 => 99,  195 => 95,  188 => 91,  181 => 87,  174 => 83,  167 => 79,  160 => 75,  153 => 71,  146 => 67,  139 => 63,  132 => 59,  125 => 55,  118 => 51,  111 => 47,  104 => 43,  97 => 39,  90 => 35,  83 => 31,  76 => 27,  69 => 23,  62 => 19,  55 => 15,  48 => 11,  39 => 4,  36 => 3,  11 => 1,);
    }
}
