<?php

/* ::base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8441fafbf7ab7f15c806a1e59b518ca647bb37720d56b445e3ad35d0c720e12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8441fafbf7ab7f15c806a1e59b518ca647bb37720d56b445e3ad35d0c720e12e->enter($__internal_8441fafbf7ab7f15c806a1e59b518ca647bb37720d56b445e3ad35d0c720e12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ab8cae298ce5eb0b561b787757e55f84bce1befc87957f28eb3da9e7f4de3829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8cae298ce5eb0b561b787757e55f84bce1befc87957f28eb3da9e7f4de3829->enter($__internal_ab8cae298ce5eb0b561b787757e55f84bce1befc87957f28eb3da9e7f4de3829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        <title>Bootstrap Example</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/estilo.css"), "html", null, true);
        echo "\">
    </head>
      <body>

      <header>

        <nav class=\"navbar navbar-inverse\">
          <section class=\"container-fluid\">
            <article class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
            </article>
            <article class=\"collapse navbar-collapse\" id=\"myNavbar\">
              <img src=\"\" alt=\"\">
              <ul class=\"nav navbar-nav\">
                <li ><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_plantilla");
        echo "\">Plantilla </a></li>
                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_jornada");
        echo "\">Jornada</a></li>
              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_user");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                <li><a href=\"/usuarios/logout\"><span class=\"glyphicon glyphicon-log-in\"></span> Logout</a></li>
              </ul>
            </article>
          </section>
        </nav>
        <div class=\"container\">
          <h1>Maristas Cullera Senior FS</h1>
        <div class=\"container\">
          <div class=\"jumbotron\">
            <h1>Pagina Oficial</h1>
            <p>Maristas Cullera FS</p>
          </div>
        </div>
      </div>
      </header>


      <section class=\"container\">
        <section class=\"main row\">
          <article class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "          </article>
        </section>
      </section>

    </body>
</html>
";
        
        $__internal_8441fafbf7ab7f15c806a1e59b518ca647bb37720d56b445e3ad35d0c720e12e->leave($__internal_8441fafbf7ab7f15c806a1e59b518ca647bb37720d56b445e3ad35d0c720e12e_prof);

        
        $__internal_ab8cae298ce5eb0b561b787757e55f84bce1befc87957f28eb3da9e7f4de3829->leave($__internal_ab8cae298ce5eb0b561b787757e55f84bce1befc87957f28eb3da9e7f4de3829_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30064bff0ea3953222adcc30027637c69ba850a11695b78c1cb08e42417a6265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30064bff0ea3953222adcc30027637c69ba850a11695b78c1cb08e42417a6265->enter($__internal_30064bff0ea3953222adcc30027637c69ba850a11695b78c1cb08e42417a6265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ae181176974244f7a2ad8f23d348fea3d4e1c910bb824c5a4cabd3032c86ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae181176974244f7a2ad8f23d348fea3d4e1c910bb824c5a4cabd3032c86ed6->enter($__internal_6ae181176974244f7a2ad8f23d348fea3d4e1c910bb824c5a4cabd3032c86ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6ae181176974244f7a2ad8f23d348fea3d4e1c910bb824c5a4cabd3032c86ed6->leave($__internal_6ae181176974244f7a2ad8f23d348fea3d4e1c910bb824c5a4cabd3032c86ed6_prof);

        
        $__internal_30064bff0ea3953222adcc30027637c69ba850a11695b78c1cb08e42417a6265->leave($__internal_30064bff0ea3953222adcc30027637c69ba850a11695b78c1cb08e42417a6265_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94cbf7fac1616cc9cdc10c20d17577f62c5c7d551b0be149bc2851d36ad90db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94cbf7fac1616cc9cdc10c20d17577f62c5c7d551b0be149bc2851d36ad90db0->enter($__internal_94cbf7fac1616cc9cdc10c20d17577f62c5c7d551b0be149bc2851d36ad90db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_421ee75ce31a37b5fcc5ba5d24e17258c3b0d67f9b01ff5f5c2fe600f2de3b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421ee75ce31a37b5fcc5ba5d24e17258c3b0d67f9b01ff5f5c2fe600f2de3b31->enter($__internal_421ee75ce31a37b5fcc5ba5d24e17258c3b0d67f9b01ff5f5c2fe600f2de3b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_421ee75ce31a37b5fcc5ba5d24e17258c3b0d67f9b01ff5f5c2fe600f2de3b31->leave($__internal_421ee75ce31a37b5fcc5ba5d24e17258c3b0d67f9b01ff5f5c2fe600f2de3b31_prof);

        
        $__internal_94cbf7fac1616cc9cdc10c20d17577f62c5c7d551b0be149bc2851d36ad90db0->leave($__internal_94cbf7fac1616cc9cdc10c20d17577f62c5c7d551b0be149bc2851d36ad90db0_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e583cc9a4b8c03034108b20b0323e8dc3189dc12efdb43cf8ed86cd38e31f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e583cc9a4b8c03034108b20b0323e8dc3189dc12efdb43cf8ed86cd38e31f4e->enter($__internal_9e583cc9a4b8c03034108b20b0323e8dc3189dc12efdb43cf8ed86cd38e31f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f4bf28e47a3b04b980442f05ca2a08a0c5a13cd5d82adec4f77e324c0529613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4bf28e47a3b04b980442f05ca2a08a0c5a13cd5d82adec4f77e324c0529613->enter($__internal_3f4bf28e47a3b04b980442f05ca2a08a0c5a13cd5d82adec4f77e324c0529613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3f4bf28e47a3b04b980442f05ca2a08a0c5a13cd5d82adec4f77e324c0529613->leave($__internal_3f4bf28e47a3b04b980442f05ca2a08a0c5a13cd5d82adec4f77e324c0529613_prof);

        
        $__internal_9e583cc9a4b8c03034108b20b0323e8dc3189dc12efdb43cf8ed86cd38e31f4e->leave($__internal_9e583cc9a4b8c03034108b20b0323e8dc3189dc12efdb43cf8ed86cd38e31f4e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 58,  146 => 6,  128 => 5,  112 => 59,  110 => 58,  86 => 37,  82 => 36,  76 => 33,  72 => 32,  51 => 14,  40 => 7,  38 => 6,  34 => 5,  28 => 1,);
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
        <title>Bootstrap Example</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" href=\"{{ asset('css/estilo.css') }}\">
    </head>
      <body>

      <header>

        <nav class=\"navbar navbar-inverse\">
          <section class=\"container-fluid\">
            <article class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
            </article>
            <article class=\"collapse navbar-collapse\" id=\"myNavbar\">
              <img src=\"\" alt=\"\">
              <ul class=\"nav navbar-nav\">
                <li ><a href=\"{{ path('mostrar_plantilla') }}\">Plantilla </a></li>
                <li><a href=\"{{ path('mostrar_jornada') }}\">Jornada</a></li>
              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"{{ path('user_registration') }}\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
                <li><a href=\"{{ path('login_user') }}\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                <li><a href=\"/usuarios/logout\"><span class=\"glyphicon glyphicon-log-in\"></span> Logout</a></li>
              </ul>
            </article>
          </section>
        </nav>
        <div class=\"container\">
          <h1>Maristas Cullera Senior FS</h1>
        <div class=\"container\">
          <div class=\"jumbotron\">
            <h1>Pagina Oficial</h1>
            <p>Maristas Cullera FS</p>
          </div>
        </div>
      </div>
      </header>


      <section class=\"container\">
        <section class=\"main row\">
          <article class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            {% block body %}{% endblock %}
          </article>
        </section>
      </section>

    </body>
</html>
", "::base.html.twig", "/Users/javi/Documents/symfony/proyectoDeporte/app/Resources/views/base.html.twig");
    }
}
