<?php

/* base.html.twig */
class __TwigTemplate_e5e8d519a03de1307a5d8829e42e32a55e34004d0ff67749cfe8373f05da7f0b extends Twig_Template
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
        $__internal_ec93172b59e7f74b184acd3716cd5b9bdba34bc4b7bb001482ce754b67bfdc41 = $this->env->getExtension("native_profiler");
        $__internal_ec93172b59e7f74b184acd3716cd5b9bdba34bc4b7bb001482ce754b67bfdc41->enter($__internal_ec93172b59e7f74b184acd3716cd5b9bdba34bc4b7bb001482ce754b67bfdc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ec93172b59e7f74b184acd3716cd5b9bdba34bc4b7bb001482ce754b67bfdc41->leave($__internal_ec93172b59e7f74b184acd3716cd5b9bdba34bc4b7bb001482ce754b67bfdc41_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbf5aaaf2f69389976f6a6d5676c69cf3f22c0b8c69a3593b88afedcd893ea8c = $this->env->getExtension("native_profiler");
        $__internal_fbf5aaaf2f69389976f6a6d5676c69cf3f22c0b8c69a3593b88afedcd893ea8c->enter($__internal_fbf5aaaf2f69389976f6a6d5676c69cf3f22c0b8c69a3593b88afedcd893ea8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fbf5aaaf2f69389976f6a6d5676c69cf3f22c0b8c69a3593b88afedcd893ea8c->leave($__internal_fbf5aaaf2f69389976f6a6d5676c69cf3f22c0b8c69a3593b88afedcd893ea8c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_def0dcadeba7bdfdda3f54ba5344fcff12abf80ba0053c9a5364602b564d0e91 = $this->env->getExtension("native_profiler");
        $__internal_def0dcadeba7bdfdda3f54ba5344fcff12abf80ba0053c9a5364602b564d0e91->enter($__internal_def0dcadeba7bdfdda3f54ba5344fcff12abf80ba0053c9a5364602b564d0e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_def0dcadeba7bdfdda3f54ba5344fcff12abf80ba0053c9a5364602b564d0e91->leave($__internal_def0dcadeba7bdfdda3f54ba5344fcff12abf80ba0053c9a5364602b564d0e91_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5cfd3677f175c69215feb9ffa5f25eb153d4c8943184cb1b51619a84e71ef79 = $this->env->getExtension("native_profiler");
        $__internal_d5cfd3677f175c69215feb9ffa5f25eb153d4c8943184cb1b51619a84e71ef79->enter($__internal_d5cfd3677f175c69215feb9ffa5f25eb153d4c8943184cb1b51619a84e71ef79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d5cfd3677f175c69215feb9ffa5f25eb153d4c8943184cb1b51619a84e71ef79->leave($__internal_d5cfd3677f175c69215feb9ffa5f25eb153d4c8943184cb1b51619a84e71ef79_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f47c8b3430193a86a2d9c8aac1c3e148743f14b147f0539182f91ddc66a86b97 = $this->env->getExtension("native_profiler");
        $__internal_f47c8b3430193a86a2d9c8aac1c3e148743f14b147f0539182f91ddc66a86b97->enter($__internal_f47c8b3430193a86a2d9c8aac1c3e148743f14b147f0539182f91ddc66a86b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f47c8b3430193a86a2d9c8aac1c3e148743f14b147f0539182f91ddc66a86b97->leave($__internal_f47c8b3430193a86a2d9c8aac1c3e148743f14b147f0539182f91ddc66a86b97_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
