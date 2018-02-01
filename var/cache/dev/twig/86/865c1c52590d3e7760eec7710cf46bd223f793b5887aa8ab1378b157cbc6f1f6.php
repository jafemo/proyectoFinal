<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_828a933092b42a38e4ad41a7e797e78d66e0e1f0d7780470a54e59605ede2cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828a933092b42a38e4ad41a7e797e78d66e0e1f0d7780470a54e59605ede2cba->enter($__internal_828a933092b42a38e4ad41a7e797e78d66e0e1f0d7780470a54e59605ede2cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c53d88bd1c1d3f232e2dc6ed3616053e9eafa73698911c8814b8a52ee2f28763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53d88bd1c1d3f232e2dc6ed3616053e9eafa73698911c8814b8a52ee2f28763->enter($__internal_c53d88bd1c1d3f232e2dc6ed3616053e9eafa73698911c8814b8a52ee2f28763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_828a933092b42a38e4ad41a7e797e78d66e0e1f0d7780470a54e59605ede2cba->leave($__internal_828a933092b42a38e4ad41a7e797e78d66e0e1f0d7780470a54e59605ede2cba_prof);

        
        $__internal_c53d88bd1c1d3f232e2dc6ed3616053e9eafa73698911c8814b8a52ee2f28763->leave($__internal_c53d88bd1c1d3f232e2dc6ed3616053e9eafa73698911c8814b8a52ee2f28763_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c3845c168a81882909931f7cdbfccacdd736308d3fb0f79a2c36177ea58cd39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3845c168a81882909931f7cdbfccacdd736308d3fb0f79a2c36177ea58cd39->enter($__internal_5c3845c168a81882909931f7cdbfccacdd736308d3fb0f79a2c36177ea58cd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_24370c3d9b7851827f896128a3042b40cf1dfe77a4ed071e4a202906b6140a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24370c3d9b7851827f896128a3042b40cf1dfe77a4ed071e4a202906b6140a06->enter($__internal_24370c3d9b7851827f896128a3042b40cf1dfe77a4ed071e4a202906b6140a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_24370c3d9b7851827f896128a3042b40cf1dfe77a4ed071e4a202906b6140a06->leave($__internal_24370c3d9b7851827f896128a3042b40cf1dfe77a4ed071e4a202906b6140a06_prof);

        
        $__internal_5c3845c168a81882909931f7cdbfccacdd736308d3fb0f79a2c36177ea58cd39->leave($__internal_5c3845c168a81882909931f7cdbfccacdd736308d3fb0f79a2c36177ea58cd39_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d5b0da880aa0d09bdc1c6af7652ca2c068374d9adb4db630a8db31ffca1472b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b0da880aa0d09bdc1c6af7652ca2c068374d9adb4db630a8db31ffca1472b2->enter($__internal_d5b0da880aa0d09bdc1c6af7652ca2c068374d9adb4db630a8db31ffca1472b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8fc8d66cd648cfd965f585bb80051b10ad443679d69f16d22e78714a61525736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc8d66cd648cfd965f585bb80051b10ad443679d69f16d22e78714a61525736->enter($__internal_8fc8d66cd648cfd965f585bb80051b10ad443679d69f16d22e78714a61525736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8fc8d66cd648cfd965f585bb80051b10ad443679d69f16d22e78714a61525736->leave($__internal_8fc8d66cd648cfd965f585bb80051b10ad443679d69f16d22e78714a61525736_prof);

        
        $__internal_d5b0da880aa0d09bdc1c6af7652ca2c068374d9adb4db630a8db31ffca1472b2->leave($__internal_d5b0da880aa0d09bdc1c6af7652ca2c068374d9adb4db630a8db31ffca1472b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e3e5eea440a7c6fa0e789d9747d1da11dec16d072ff754b60f4d09e8fcfe55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3e5eea440a7c6fa0e789d9747d1da11dec16d072ff754b60f4d09e8fcfe55a->enter($__internal_5e3e5eea440a7c6fa0e789d9747d1da11dec16d072ff754b60f4d09e8fcfe55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_576a32c85cd4e14ef643ead869e37681f6299aca5408a7f974d62fcc0346fd95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576a32c85cd4e14ef643ead869e37681f6299aca5408a7f974d62fcc0346fd95->enter($__internal_576a32c85cd4e14ef643ead869e37681f6299aca5408a7f974d62fcc0346fd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_576a32c85cd4e14ef643ead869e37681f6299aca5408a7f974d62fcc0346fd95->leave($__internal_576a32c85cd4e14ef643ead869e37681f6299aca5408a7f974d62fcc0346fd95_prof);

        
        $__internal_5e3e5eea440a7c6fa0e789d9747d1da11dec16d072ff754b60f4d09e8fcfe55a->leave($__internal_5e3e5eea440a7c6fa0e789d9747d1da11dec16d072ff754b60f4d09e8fcfe55a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
