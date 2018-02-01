<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3b45fc737d1ecfdca2a3d18f22ad983e5467ce51c5b1f83f5470d0895d913c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b45fc737d1ecfdca2a3d18f22ad983e5467ce51c5b1f83f5470d0895d913c9->enter($__internal_d3b45fc737d1ecfdca2a3d18f22ad983e5467ce51c5b1f83f5470d0895d913c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_332cbbc5bd07c39410887c260d295dfa64b169cf150c1b519808aa728a39de34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332cbbc5bd07c39410887c260d295dfa64b169cf150c1b519808aa728a39de34->enter($__internal_332cbbc5bd07c39410887c260d295dfa64b169cf150c1b519808aa728a39de34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3b45fc737d1ecfdca2a3d18f22ad983e5467ce51c5b1f83f5470d0895d913c9->leave($__internal_d3b45fc737d1ecfdca2a3d18f22ad983e5467ce51c5b1f83f5470d0895d913c9_prof);

        
        $__internal_332cbbc5bd07c39410887c260d295dfa64b169cf150c1b519808aa728a39de34->leave($__internal_332cbbc5bd07c39410887c260d295dfa64b169cf150c1b519808aa728a39de34_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bbbf64c625cf060f8ab0d01bc4ea68917c84d0d124faa43308d861f122ee9e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbbf64c625cf060f8ab0d01bc4ea68917c84d0d124faa43308d861f122ee9e87->enter($__internal_bbbf64c625cf060f8ab0d01bc4ea68917c84d0d124faa43308d861f122ee9e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6b72e40e8b5c03cb49b85440eac8847cb9787dad4f525c6da43b38d547b0b297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b72e40e8b5c03cb49b85440eac8847cb9787dad4f525c6da43b38d547b0b297->enter($__internal_6b72e40e8b5c03cb49b85440eac8847cb9787dad4f525c6da43b38d547b0b297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6b72e40e8b5c03cb49b85440eac8847cb9787dad4f525c6da43b38d547b0b297->leave($__internal_6b72e40e8b5c03cb49b85440eac8847cb9787dad4f525c6da43b38d547b0b297_prof);

        
        $__internal_bbbf64c625cf060f8ab0d01bc4ea68917c84d0d124faa43308d861f122ee9e87->leave($__internal_bbbf64c625cf060f8ab0d01bc4ea68917c84d0d124faa43308d861f122ee9e87_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4b022f579c2de863907e11f90c663c442d5ced4d593367569b70d1cf2ed1439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4b022f579c2de863907e11f90c663c442d5ced4d593367569b70d1cf2ed1439->enter($__internal_e4b022f579c2de863907e11f90c663c442d5ced4d593367569b70d1cf2ed1439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5b87e8ea675eda5c12b05755dd6d9f3e572e84e9322aee14b152d8def05ef518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b87e8ea675eda5c12b05755dd6d9f3e572e84e9322aee14b152d8def05ef518->enter($__internal_5b87e8ea675eda5c12b05755dd6d9f3e572e84e9322aee14b152d8def05ef518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5b87e8ea675eda5c12b05755dd6d9f3e572e84e9322aee14b152d8def05ef518->leave($__internal_5b87e8ea675eda5c12b05755dd6d9f3e572e84e9322aee14b152d8def05ef518_prof);

        
        $__internal_e4b022f579c2de863907e11f90c663c442d5ced4d593367569b70d1cf2ed1439->leave($__internal_e4b022f579c2de863907e11f90c663c442d5ced4d593367569b70d1cf2ed1439_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1684e1429774b2bef7012797ed08ae60dc0079daad687250cf1749faac9467ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1684e1429774b2bef7012797ed08ae60dc0079daad687250cf1749faac9467ab->enter($__internal_1684e1429774b2bef7012797ed08ae60dc0079daad687250cf1749faac9467ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0eb5fa0ee2ecaf8b308ef9bca34f09ea04ab372ab0f08605f8fdbeb8a8a705aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb5fa0ee2ecaf8b308ef9bca34f09ea04ab372ab0f08605f8fdbeb8a8a705aa->enter($__internal_0eb5fa0ee2ecaf8b308ef9bca34f09ea04ab372ab0f08605f8fdbeb8a8a705aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0eb5fa0ee2ecaf8b308ef9bca34f09ea04ab372ab0f08605f8fdbeb8a8a705aa->leave($__internal_0eb5fa0ee2ecaf8b308ef9bca34f09ea04ab372ab0f08605f8fdbeb8a8a705aa_prof);

        
        $__internal_1684e1429774b2bef7012797ed08ae60dc0079daad687250cf1749faac9467ab->leave($__internal_1684e1429774b2bef7012797ed08ae60dc0079daad687250cf1749faac9467ab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
