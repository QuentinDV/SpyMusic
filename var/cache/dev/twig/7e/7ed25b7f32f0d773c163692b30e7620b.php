<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @EasyAdmin/components/ActionMenu/Button.html.twig */
class __TwigTemplate_c8eaa704e51a9e6d7c5bf969fc54a368 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/components/ActionMenu/Button.html.twig"));

        // line 1
        $propsNames = [];        if (isset($context['__props']['withoutDropdownToggleMarker'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "withoutDropdownToggleMarker" in template "@EasyAdmin/components/ActionMenu/Button.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'withoutDropdownToggleMarker';        
        $context['attributes'] = $context['attributes']->remove('withoutDropdownToggleMarker');        
        if (!isset($context['withoutDropdownToggleMarker'])) {            $context['withoutDropdownToggleMarker'] = false;
        }        
        if (isset($context['__context']['withoutDropdownToggleMarker'])) {
            $context['withoutDropdownToggleMarker'] = false;
        }
        $attributesKeys = array_keys($context['attributes']->all());
        foreach ($context as $key => $value) {
            if (in_array($key, $attributesKeys) && !in_array($key, $propsNames)) {
unset($context[$key]);
            }
        }
        // line 4
        yield "
";
        // line 5
        $context["css_class"] = Twig\Extra\Html\HtmlExtension::htmlClasses("dropdown-toggle", ["dropdown-toggle-hidden-marker" =>         // line 7
(isset($context["withoutDropdownToggleMarker"]) || array_key_exists("withoutDropdownToggleMarker", $context) ? $context["withoutDropdownToggleMarker"] : (function () { throw new RuntimeError('Variable "withoutDropdownToggleMarker" does not exist.', 7, $this->source); })())]);
        // line 9
        yield "
<a ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 10, $this->source); })()), "defaults", [["class" => (isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new RuntimeError('Variable "css_class" does not exist.', 10, $this->source); })()), "href" => "#", "role" => "button", "data-bs-toggle" => "dropdown", "aria-haspopup" => "true", "aria-expanded" => "false"]], "method", false, false, false, 10), "html", null, true);
        yield ">
    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 12
        yield "</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/components/ActionMenu/Button.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  88 => 11,  79 => 12,  77 => 11,  73 => 10,  70 => 9,  68 => 7,  67 => 5,  64 => 4,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% props
    withoutDropdownToggleMarker = false,
%}

{% set css_class = html_classes(
    'dropdown-toggle',
    { 'dropdown-toggle-hidden-marker': withoutDropdownToggleMarker }
) %}

<a {{ attributes.defaults({class: css_class, href: '#', role: 'button', 'data-bs-toggle': 'dropdown', 'aria-haspopup': 'true', 'aria-expanded': 'false'}) }}>
    {% block content %}{% endblock %}
</a>
", "@EasyAdmin/components/ActionMenu/Button.html.twig", "D:\\pwoject\\SymfonyApp\\vendor\\easycorp\\easyadmin-bundle\\templates\\components\\ActionMenu\\Button.html.twig");
    }
}
