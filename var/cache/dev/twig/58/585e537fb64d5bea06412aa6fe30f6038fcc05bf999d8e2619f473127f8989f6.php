<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c8888a5cd9493ab66e1a6b244c8b170cd180103d48abc67477ac4e9b85dff0ab extends Twig_Template
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
        $__internal_e28ff0fc4449db2b3d80b393f295d921d06103e3e58eda6b7015afe650cdb874 = $this->env->getExtension("native_profiler");
        $__internal_e28ff0fc4449db2b3d80b393f295d921d06103e3e58eda6b7015afe650cdb874->enter($__internal_e28ff0fc4449db2b3d80b393f295d921d06103e3e58eda6b7015afe650cdb874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e28ff0fc4449db2b3d80b393f295d921d06103e3e58eda6b7015afe650cdb874->leave($__internal_e28ff0fc4449db2b3d80b393f295d921d06103e3e58eda6b7015afe650cdb874_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7389f7120cfa990ceeed61440478587e3904aa0dca5dc58f872a198ce68390e9 = $this->env->getExtension("native_profiler");
        $__internal_7389f7120cfa990ceeed61440478587e3904aa0dca5dc58f872a198ce68390e9->enter($__internal_7389f7120cfa990ceeed61440478587e3904aa0dca5dc58f872a198ce68390e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7389f7120cfa990ceeed61440478587e3904aa0dca5dc58f872a198ce68390e9->leave($__internal_7389f7120cfa990ceeed61440478587e3904aa0dca5dc58f872a198ce68390e9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f5355c3978666fd8c479fbc1c950eda6727d0977abe3c5e71e23a68930692391 = $this->env->getExtension("native_profiler");
        $__internal_f5355c3978666fd8c479fbc1c950eda6727d0977abe3c5e71e23a68930692391->enter($__internal_f5355c3978666fd8c479fbc1c950eda6727d0977abe3c5e71e23a68930692391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f5355c3978666fd8c479fbc1c950eda6727d0977abe3c5e71e23a68930692391->leave($__internal_f5355c3978666fd8c479fbc1c950eda6727d0977abe3c5e71e23a68930692391_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d548bee7868fa4aa7b1c7e3796fd1e9788003cd142ba80d877fcdf228cd18f97 = $this->env->getExtension("native_profiler");
        $__internal_d548bee7868fa4aa7b1c7e3796fd1e9788003cd142ba80d877fcdf228cd18f97->enter($__internal_d548bee7868fa4aa7b1c7e3796fd1e9788003cd142ba80d877fcdf228cd18f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d548bee7868fa4aa7b1c7e3796fd1e9788003cd142ba80d877fcdf228cd18f97->leave($__internal_d548bee7868fa4aa7b1c7e3796fd1e9788003cd142ba80d877fcdf228cd18f97_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
