<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_af336d68dd3f34f97091f0077a8860fcf4b466d9efd777c0f729d43e122323f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0eb0844961ace5ba92a41bf1b0a69d9a09842f2846aed54539387e7448c679f = $this->env->getExtension("native_profiler");
        $__internal_d0eb0844961ace5ba92a41bf1b0a69d9a09842f2846aed54539387e7448c679f->enter($__internal_d0eb0844961ace5ba92a41bf1b0a69d9a09842f2846aed54539387e7448c679f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0eb0844961ace5ba92a41bf1b0a69d9a09842f2846aed54539387e7448c679f->leave($__internal_d0eb0844961ace5ba92a41bf1b0a69d9a09842f2846aed54539387e7448c679f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_496aedcfc374b8af9024c01f85fd6b50f408c5022e3d6e2070a08539fc188979 = $this->env->getExtension("native_profiler");
        $__internal_496aedcfc374b8af9024c01f85fd6b50f408c5022e3d6e2070a08539fc188979->enter($__internal_496aedcfc374b8af9024c01f85fd6b50f408c5022e3d6e2070a08539fc188979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_496aedcfc374b8af9024c01f85fd6b50f408c5022e3d6e2070a08539fc188979->leave($__internal_496aedcfc374b8af9024c01f85fd6b50f408c5022e3d6e2070a08539fc188979_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_17d5fa4015d99c2dbcc1825c0ca90a2e2633cf027f3b9e223ac44d8c7d06b02d = $this->env->getExtension("native_profiler");
        $__internal_17d5fa4015d99c2dbcc1825c0ca90a2e2633cf027f3b9e223ac44d8c7d06b02d->enter($__internal_17d5fa4015d99c2dbcc1825c0ca90a2e2633cf027f3b9e223ac44d8c7d06b02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_17d5fa4015d99c2dbcc1825c0ca90a2e2633cf027f3b9e223ac44d8c7d06b02d->leave($__internal_17d5fa4015d99c2dbcc1825c0ca90a2e2633cf027f3b9e223ac44d8c7d06b02d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_488d75c4e7e6fabe9a57b540d708b71eb7e201486d495a2eea7f0fa9b3acfff3 = $this->env->getExtension("native_profiler");
        $__internal_488d75c4e7e6fabe9a57b540d708b71eb7e201486d495a2eea7f0fa9b3acfff3->enter($__internal_488d75c4e7e6fabe9a57b540d708b71eb7e201486d495a2eea7f0fa9b3acfff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_488d75c4e7e6fabe9a57b540d708b71eb7e201486d495a2eea7f0fa9b3acfff3->leave($__internal_488d75c4e7e6fabe9a57b540d708b71eb7e201486d495a2eea7f0fa9b3acfff3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
