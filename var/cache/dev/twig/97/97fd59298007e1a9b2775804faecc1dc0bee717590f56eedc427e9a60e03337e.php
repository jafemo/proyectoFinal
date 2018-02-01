<?php

/* usuariosBundle:Carpeta_User:register.html.twig */
class __TwigTemplate_7bfd63cd2178ee6df981c7073749df0e49fba8c2de3bee2cca24029e46033a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "usuariosBundle:Carpeta_User:register.html.twig", 1);
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
        $__internal_06d07f42b4cda75138543acfbe0f3f7ae04a0badb516370ff86e9981ddf25556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d07f42b4cda75138543acfbe0f3f7ae04a0badb516370ff86e9981ddf25556->enter($__internal_06d07f42b4cda75138543acfbe0f3f7ae04a0badb516370ff86e9981ddf25556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuariosBundle:Carpeta_User:register.html.twig"));

        $__internal_94fa101aaf5dd90000150c1e61b2e68feac2ace322565f098dbe93488b16dc77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94fa101aaf5dd90000150c1e61b2e68feac2ace322565f098dbe93488b16dc77->enter($__internal_94fa101aaf5dd90000150c1e61b2e68feac2ace322565f098dbe93488b16dc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuariosBundle:Carpeta_User:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06d07f42b4cda75138543acfbe0f3f7ae04a0badb516370ff86e9981ddf25556->leave($__internal_06d07f42b4cda75138543acfbe0f3f7ae04a0badb516370ff86e9981ddf25556_prof);

        
        $__internal_94fa101aaf5dd90000150c1e61b2e68feac2ace322565f098dbe93488b16dc77->leave($__internal_94fa101aaf5dd90000150c1e61b2e68feac2ace322565f098dbe93488b16dc77_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_379c21c3dde6a5f50c9f3eeccb966b3ecf89a665e6869c48db9e594459edd8fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_379c21c3dde6a5f50c9f3eeccb966b3ecf89a665e6869c48db9e594459edd8fa->enter($__internal_379c21c3dde6a5f50c9f3eeccb966b3ecf89a665e6869c48db9e594459edd8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7e7541971cd8e2d5df0cb24232bd7f9460cdde1146c3046f7395df49dd398a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e7541971cd8e2d5df0cb24232bd7f9460cdde1146c3046f7395df49dd398a5->enter($__internal_f7e7541971cd8e2d5df0cb24232bd7f9460cdde1146c3046f7395df49dd398a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

<form>
  <div class=\"form-group\">
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Registrar", array()), 'row');
        echo "
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

</form>

";
        
        $__internal_f7e7541971cd8e2d5df0cb24232bd7f9460cdde1146c3046f7395df49dd398a5->leave($__internal_f7e7541971cd8e2d5df0cb24232bd7f9460cdde1146c3046f7395df49dd398a5_prof);

        
        $__internal_379c21c3dde6a5f50c9f3eeccb966b3ecf89a665e6869c48db9e594459edd8fa->leave($__internal_379c21c3dde6a5f50c9f3eeccb966b3ecf89a665e6869c48db9e594459edd8fa_prof);

    }

    public function getTemplateName()
    {
        return "usuariosBundle:Carpeta_User:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}


<form>
  <div class=\"form-group\">
{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}
    {{ form_row(form.Registrar) }}
{{ form_end(form) }}
</div>

</form>

{% endblock %}
", "usuariosBundle:Carpeta_User:register.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/src/usuariosBundle/Resources/views/Carpeta_User/register.html.twig");
    }
}
