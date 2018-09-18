<?php

/* MyBuilder.php.twig */
class __TwigTemplate_a6bba5b729de3e509a1f69e0dc73eaf55d505cbfd3b23567120b59d738ab39ac extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_base/common.php.twig", "MyBuilder.php.twig", 1);
        $this->blocks = array(
            'functions' => array($this, 'block_functions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/common.php.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_functions($context, array $blocks = array())
    {
        // line 4
        echo "    public function tellMeHello()
    {
    echo \"Hello world\";
    }
";
    }

    public function getTemplateName()
    {
        return "MyBuilder.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_base/common.php.twig\" %}

{% block functions %}
    public function tellMeHello()
    {
    echo \"Hello world\";
    }
{% endblock %}", "MyBuilder.php.twig", "/home/bzi/PhpstormProjects/twig-sourcemap-example/templates/MyBuilder.php.twig");
    }
}

//# sourceMappingURL=MyBuilder.php.twig.map