<?php

/* front/contacto.html.twig */
class __TwigTemplate_a3fc13bd44a73d624e406934094e1d3228f7fdcef4f055fb637567055fa6ca8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "front/contacto.html.twig", 2);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/contacto.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/contacto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Picame - Contacto
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<!-- Content Row -->
<h3 class=\"mt-4 mb-3\">
    Nuestra Ubicación

</h3>
<div class=\"row\">
  <!-- Map Column -->

  <div class=\"col-lg-8 mb-4\">
    <!-- Embedded Google Map -->
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.293415418016!2d-58.395160785306146!3d-34.622024780454744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb20404480ff%3A0xf5d5b4e24fc36235!2sCombate+de+los+Pozos+1138%2C+C1222AAN+CABA!5e0!3m2!1ses!2sar!4v1552832315845\" width=\"100%\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
  </div>
  <!-- Contact Details Column -->
  <div class=\"col-lg-4 mb-4\">
    <p>
      <label>Dirección: </label> Combate de los Pozos 1138, 9B
    </p>
    <p>
      <label>Teléfono:</label> (011)-27389961
    </p>
    <p>
      <label>Email:</label> <a href=\"mailto:juanjmt@gmail.com?subject=feedback\">juanjmt@gmailcom</a>
    </p>
    <p>
      <label>Horarios:</label> <br>
      Pedidos por encargo:<br>
      Todos los dias, por medio de whatsapp, email o formulario de contacto, se pacta el dia y la hora de entrega.<br>
      Horario Operativo continuo:<br>
      Viernes de 19 a 22.<br>
      Sabados de 16 a 22 <br>
      Domingos de 14 a 20.
    </p>
  </div>
</div>
<!-- /.row -->

<!-- Contact Form -->
<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class=\"row\">
  <div class=\"col-lg-12 mb-12\">
    <h3>Envianos un Mensaje</h3>
    <form name=\"sentMessage\" id=\"contactForm\" novalidate>
      <div class=\"control-group form-group\">
        <div class=\"controls\">
          <label>Su Nombre:</label>
          <input type=\"text\" class=\"form-control\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
          <p class=\"help-block\"></p>
        </div>
      </div>
      <div class=\"control-group form-group\">
        <div class=\"controls\">
          <label>Teléfono:</label>
          <input type=\"tel\" class=\"form-control\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
        </div>
      </div>
      <div class=\"control-group form-group\">
        <div class=\"controls\">
          <label>Email:</label>
          <input type=\"email\" class=\"form-control\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
        </div>
      </div>
      <div class=\"control-group form-group\">
        <div class=\"controls\">
          <label>Mensaje:</label>
          <textarea rows=\"10\" cols=\"100\" class=\"form-control\" id=\"message\" required data-validation-required-message=\"Please enter your message\" maxlength=\"999\" style=\"resize:none\"></textarea>
        </div>
      </div>
      <div id=\"success\"></div>
      <!-- For success/fail messages -->
      <button style=\"text-aling:right;\" type=\"submit\" class=\"btn btn-primary\" id=\"sendMessageButton\">Enviar</button>
    </form>
  </div>

</div>
<!-- /.row -->
<br>
<br>
<!-- /.container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  61 => 6,  50 => 4,  41 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# plantilla de nuestra aplicacion #}
{% extends 'base.html.twig' %}
{%block title%}
  Picame - Contacto
{%endblock%}
{%block body%}

<!-- Content Row -->
<h3 class=\"mt-4 mb-3\">
    Nuestra Ubicación

</h3>
<div class=\"row\">
  <!-- Map Column -->

  <div class=\"col-lg-8 mb-4\">
    <!-- Embedded Google Map -->
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.293415418016!2d-58.395160785306146!3d-34.622024780454744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb20404480ff%3A0xf5d5b4e24fc36235!2sCombate+de+los+Pozos+1138%2C+C1222AAN+CABA!5e0!3m2!1ses!2sar!4v1552832315845\" width=\"100%\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
  </div>
  <!-- Contact Details Column -->
  <div class=\"col-lg-4 mb-4\">
    <p>
      <label>Dirección: </label> Combate de los Pozos 1138, 9B
    </p>
    <p>
      <label>Teléfono:</label> (011)-27389961
    </p>
    <p>
      <label>Email:</label> <a href=\"mailto:juanjmt@gmail.com?subject=feedback\">juanjmt@gmailcom</a>
    </p>
    <p>
      <label>Horarios:</label> <br>
      Pedidos por encargo:<br>
      Todos los dias, por medio de whatsapp, email o formulario de contacto, se pacta el dia y la hora de entrega.<br>
      Horario Operativo continuo:<br>
      Viernes de 19 a 22.<br>
      Sabados de 16 a 22 <br>
      Domingos de 14 a 20.
    </p>
  </div>
</div>
<!-- /.row -->

<!-- Contact Form -->
<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class=\"row\">
  <div class=\"col-lg-12 mb-12\">
    <h3>Envianos un Mensaje</h3>
    <form name=\"sentMessage\" id=\"contactForm\" novalidate>
      <div class=\"control-group form-group\">
        <div class=\"controls\">
          <label>Su Nombre:</label>
          <input type=\"text\" class=\"form-control\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
          <p class=\"help-block\"></p>
        </div>
      </div>
      <div class=\"control-group form-group\">
        <div class=\"controls\">
          <label>Teléfono:</label>
          <input type=\"tel\" class=\"form-control\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
        </div>
      </div>
      <div class=\"control-group form-group\">
        <div class=\"controls\">
          <label>Email:</label>
          <input type=\"email\" class=\"form-control\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
        </div>
      </div>
      <div class=\"control-group form-group\">
        <div class=\"controls\">
          <label>Mensaje:</label>
          <textarea rows=\"10\" cols=\"100\" class=\"form-control\" id=\"message\" required data-validation-required-message=\"Please enter your message\" maxlength=\"999\" style=\"resize:none\"></textarea>
        </div>
      </div>
      <div id=\"success\"></div>
      <!-- For success/fail messages -->
      <button style=\"text-aling:right;\" type=\"submit\" class=\"btn btn-primary\" id=\"sendMessageButton\">Enviar</button>
    </form>
  </div>

</div>
<!-- /.row -->
<br>
<br>
<!-- /.container -->
{%endblock%}
", "front/contacto.html.twig", "C:\\AppServ\\www\\picame\\app\\Resources\\views\\front\\contacto.html.twig");
    }
}
