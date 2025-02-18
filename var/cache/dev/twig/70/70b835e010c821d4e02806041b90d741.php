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

/* @EasyAdmin/components/ActionMenu/ActionList/Item.html.twig */
class __TwigTemplate_88bb607fac98ccbcc6b20c58d9f6051e extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig"));

        // line 1
        $propsNames = [];        if (isset($context['__props']['label'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "label" in template "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'label';        
        $context['attributes'] = $context['attributes']->remove('label');        
        if (!isset($context['label'])) {            $context['label'] = null;
        }        
        if (isset($context['__context']['label'])) {
            $context['label'] = null;
        }
        if (isset($context['__props']['renderLabelRaw'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "renderLabelRaw" in template "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'renderLabelRaw';        
        $context['attributes'] = $context['attributes']->remove('renderLabelRaw');        
        if (!isset($context['renderLabelRaw'])) {            $context['renderLabelRaw'] = false;
        }        
        if (isset($context['__context']['renderLabelRaw'])) {
            $context['renderLabelRaw'] = false;
        }
        if (isset($context['__props']['icon'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "icon" in template "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'icon';        
        $context['attributes'] = $context['attributes']->remove('icon');        
        if (!isset($context['icon'])) {            $context['icon'] = null;
        }        
        if (isset($context['__context']['icon'])) {
            $context['icon'] = null;
        }
        if (isset($context['__props']['url'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "url" in template "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'url';        
        $context['attributes'] = $context['attributes']->remove('url');        
        if (!isset($context['url'])) {            $context['url'] = null;
        }        
        if (isset($context['__context']['url'])) {
            $context['url'] = null;
        }
        if (isset($context['__props']['htmlAttributes'])) {
        $componentClass = isset($context['this']) ? get_debug_type($context['this']) : "";
        throw new \Twig\Error\RuntimeError('Cannot define prop "htmlAttributes" in template "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig". Property already defined in component class "'.$componentClass.'".');
        }
        $propsNames[] = 'htmlAttributes';        
        $context['attributes'] = $context['attributes']->remove('htmlAttributes');        
        if (!isset($context['htmlAttributes'])) {            $context['htmlAttributes'] = [];
        }        
        if (isset($context['__context']['htmlAttributes'])) {
            $context['htmlAttributes'] = [];
        }
        $attributesKeys = array_keys($context['attributes']->all());
        foreach ($context as $key => $value) {
            if (in_array($key, $attributesKeys) && !in_array($key, $propsNames)) {
unset($context[$key]);
            }
        }
        // line 8
        yield "
<li>
    <a ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 10, $this->source); })()), "defaults", [Twig\Extension\CoreExtension::merge(["class" => "dropdown-item", "href" => (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 10, $this->source); })())], (isset($context["htmlAttributes"]) || array_key_exists("htmlAttributes", $context) ? $context["htmlAttributes"] : (function () { throw new RuntimeError('Variable "htmlAttributes" does not exist.', 10, $this->source); })()))], "method", false, false, false, 10), "html", null, true);
        yield ">";
        // line 11
        if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 11, $this->source); })())) {
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", [...CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 11, $this->source); })()), "nested", ["icon"], "method", false, false, false, 11), "defaults", [["name" => (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 11, $this->source); })())]], "method", false, false, false, 11)]);
            yield " ";
        }
        // line 12
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 12, $this->source); })()))) {
            yield "<span ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 12, $this->source); })()), "nested", ["label"], "method", false, false, false, 12), "html", null, true);
            yield ">";
            yield (((isset($context["renderLabelRaw"]) || array_key_exists("renderLabelRaw", $context) ? $context["renderLabelRaw"] : (function () { throw new RuntimeError('Variable "renderLabelRaw" does not exist.', 12, $this->source); })())) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 12, $this->source); })())) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 12, $this->source); })()), "html", null, true)));
            yield "</span>";
        }
        // line 13
        yield "</a>
</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig";
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
        return array (  127 => 13,  119 => 12,  114 => 11,  111 => 10,  107 => 8,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% props
    label = null,
    renderLabelRaw = false,
    icon = null,
    url = null,
    htmlAttributes = {},
%}

<li>
    <a {{ attributes.defaults({class: 'dropdown-item', href: url}|merge(htmlAttributes)) }}>
        {%- if icon %}{{ component('ea:Icon', { ...attributes.nested('icon').defaults({name: icon}) }) }} {% endif -%}
        {%- if label is not empty -%}<span {{ attributes.nested('label') }}>{{ renderLabelRaw ? label|raw : label }}</span>{%- endif -%}
    </a>
</li>
", "@EasyAdmin/components/ActionMenu/ActionList/Item.html.twig", "C:\\Users\\JENGO\\B2_projet\\php_symphonie\\SpyMusic\\vendor\\easycorp\\easyadmin-bundle\\templates\\components\\ActionMenu\\ActionList\\Item.html.twig");
    }
}
