<?php

/* SonataIntlBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_eb68f360147ec53a12df1ae56a68a9e3b55ec3e8218492429d49f306272fc6d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataIntlBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        if ((null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            $context["currency"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array());
            // line 19
            echo "        ";
            $context["attributes"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "attributes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "attributes", array()), array())) : (array()));
            // line 20
            echo "        ";
            $context["textAttributes"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "textAttributes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "textAttributes", array()), array())) : (array()));
            // line 21
            echo "        ";
            $context["locale"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "locale", array()), null)) : (null));
            // line 22
            echo "
        ";
            // line 23
            echo $this->env->getExtension('sonata_intl_number')->formatCurrency((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["currency"]) ? $context["currency"] : $this->getContext($context, "currency")), (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), (isset($context["textAttributes"]) ? $context["textAttributes"] : $this->getContext($context, "textAttributes")), (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")));
        }
    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 23,  46 => 22,  43 => 21,  40 => 20,  37 => 19,  35 => 18,  32 => 16,  30 => 15,  27 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field%}*/
/*     {%- if value is null -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {% set currency = field_description.options.currency %}*/
/*         {% set attributes = field_description.options.attributes|default({}) %}*/
/*         {% set textAttributes = field_description.options.textAttributes|default({}) %}*/
/*         {% set locale = field_description.options.locale|default(null) %}*/
/* */
/*         {{ value | number_format_currency(currency, attributes, textAttributes, locale) }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
