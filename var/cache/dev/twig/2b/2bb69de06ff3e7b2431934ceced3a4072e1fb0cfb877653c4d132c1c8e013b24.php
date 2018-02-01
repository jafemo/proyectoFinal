<?php

/* ::base2.html.twig */
class __TwigTemplate_8a8eeb2b3a086b670e5b5fbce0d4159b00ddf20fff80a6a2639ca21b3b8ab51f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe017a7adae6f4319d0a7acbc555629f0ea01ea425ce9fefaff722914d594edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe017a7adae6f4319d0a7acbc555629f0ea01ea425ce9fefaff722914d594edf->enter($__internal_fe017a7adae6f4319d0a7acbc555629f0ea01ea425ce9fefaff722914d594edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

        $__internal_cc5485c383d111ca2b00bcd20c43ce43e79d55f379884f2928de97e4732f496f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5485c383d111ca2b00bcd20c43ce43e79d55f379884f2928de97e4732f496f->enter($__internal_cc5485c383d111ca2b00bcd20c43ce43e79d55f379884f2928de97e4732f496f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
      <h2>Logo</h2> puri
      <hr>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_plantilla");
        echo "\">MostrarPlantilla</a> /
        
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_fe017a7adae6f4319d0a7acbc555629f0ea01ea425ce9fefaff722914d594edf->leave($__internal_fe017a7adae6f4319d0a7acbc555629f0ea01ea425ce9fefaff722914d594edf_prof);

        
        $__internal_cc5485c383d111ca2b00bcd20c43ce43e79d55f379884f2928de97e4732f496f->leave($__internal_cc5485c383d111ca2b00bcd20c43ce43e79d55f379884f2928de97e4732f496f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1bdd5e5a75ab94cc1562cfed185beaef6bce5d1a34980ec061bd3fe2bde8b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1bdd5e5a75ab94cc1562cfed185beaef6bce5d1a34980ec061bd3fe2bde8b39->enter($__internal_c1bdd5e5a75ab94cc1562cfed185beaef6bce5d1a34980ec061bd3fe2bde8b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e04eb336ee9dea7e898577b677a1bc7230d31e88ce18323832a41f472cfd41de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04eb336ee9dea7e898577b677a1bc7230d31e88ce18323832a41f472cfd41de->enter($__internal_e04eb336ee9dea7e898577b677a1bc7230d31e88ce18323832a41f472cfd41de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e04eb336ee9dea7e898577b677a1bc7230d31e88ce18323832a41f472cfd41de->leave($__internal_e04eb336ee9dea7e898577b677a1bc7230d31e88ce18323832a41f472cfd41de_prof);

        
        $__internal_c1bdd5e5a75ab94cc1562cfed185beaef6bce5d1a34980ec061bd3fe2bde8b39->leave($__internal_c1bdd5e5a75ab94cc1562cfed185beaef6bce5d1a34980ec061bd3fe2bde8b39_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_75d5cc43197c4373faf433bd44248c44453b1d4c1e1e689d964c90631a1364b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d5cc43197c4373faf433bd44248c44453b1d4c1e1e689d964c90631a1364b3->enter($__internal_75d5cc43197c4373faf433bd44248c44453b1d4c1e1e689d964c90631a1364b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b619d5789d45acc404f95decc965c84feee328bd72021a5b712bb237fb54fd22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b619d5789d45acc404f95decc965c84feee328bd72021a5b712bb237fb54fd22->enter($__internal_b619d5789d45acc404f95decc965c84feee328bd72021a5b712bb237fb54fd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b619d5789d45acc404f95decc965c84feee328bd72021a5b712bb237fb54fd22->leave($__internal_b619d5789d45acc404f95decc965c84feee328bd72021a5b712bb237fb54fd22_prof);

        
        $__internal_75d5cc43197c4373faf433bd44248c44453b1d4c1e1e689d964c90631a1364b3->leave($__internal_75d5cc43197c4373faf433bd44248c44453b1d4c1e1e689d964c90631a1364b3_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fa922104ed665cde9636629d012aed50f7f45fb17786d38a8345a050cc764ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa922104ed665cde9636629d012aed50f7f45fb17786d38a8345a050cc764ab->enter($__internal_4fa922104ed665cde9636629d012aed50f7f45fb17786d38a8345a050cc764ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c060d2d5d7304ea89bb962704a8ff94a687a830fba4a4308f84861239f062a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c060d2d5d7304ea89bb962704a8ff94a687a830fba4a4308f84861239f062a0c->enter($__internal_c060d2d5d7304ea89bb962704a8ff94a687a830fba4a4308f84861239f062a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c060d2d5d7304ea89bb962704a8ff94a687a830fba4a4308f84861239f062a0c->leave($__internal_c060d2d5d7304ea89bb962704a8ff94a687a830fba4a4308f84861239f062a0c_prof);

        
        $__internal_4fa922104ed665cde9636629d012aed50f7f45fb17786d38a8345a050cc764ab->leave($__internal_4fa922104ed665cde9636629d012aed50f7f45fb17786d38a8345a050cc764ab_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42460d8cb4cb5bdf1644c79a6a47073f2ff8d7e26c34e499f0137e8c303b6133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42460d8cb4cb5bdf1644c79a6a47073f2ff8d7e26c34e499f0137e8c303b6133->enter($__internal_42460d8cb4cb5bdf1644c79a6a47073f2ff8d7e26c34e499f0137e8c303b6133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_76eaba3542e2fa6156c3b8ff6281518a2b2bcf3f9734a74cd2e70be180cb2de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76eaba3542e2fa6156c3b8ff6281518a2b2bcf3f9734a74cd2e70be180cb2de0->enter($__internal_76eaba3542e2fa6156c3b8ff6281518a2b2bcf3f9734a74cd2e70be180cb2de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_76eaba3542e2fa6156c3b8ff6281518a2b2bcf3f9734a74cd2e70be180cb2de0->leave($__internal_76eaba3542e2fa6156c3b8ff6281518a2b2bcf3f9734a74cd2e70be180cb2de0_prof);

        
        $__internal_42460d8cb4cb5bdf1644c79a6a47073f2ff8d7e26c34e499f0137e8c303b6133->leave($__internal_42460d8cb4cb5bdf1644c79a6a47073f2ff8d7e26c34e499f0137e8c303b6133_prof);

    }

    public function getTemplateName()
    {
        return "::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 15,  107 => 14,  90 => 6,  72 => 5,  60 => 16,  57 => 15,  55 => 14,  50 => 12,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
      <h2>Logo</h2> puri
      <hr>
        <a href=\"{{ path('mostrar_plantilla') }}\">MostrarPlantilla</a> /
        
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base2.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/app/Resources/views/base2.html.twig");
    }
}
