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

/* @EasyAdmin/includes/_js_assets.html.twig */
class __TwigTemplate_f0529d3d5a9500327ea603eef4dc8753 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/includes/_js_assets.html.twig"));

        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["assets"]) || array_key_exists("assets", $context) ? $context["assets"] : (function () { throw new RuntimeError('Variable "assets" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 3
            yield "    ";
            $context["src"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "value", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "packageName", [], "any", false, false, false, 3));
            // line 4
            yield "    <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "preload", [], "any", false, false, false, 4)) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "preload", (isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 4, $this->source); })()), ["as" => "script", "nopush" => CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "nopush", [], "any", false, false, false, 4)])) : ("")), (isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 4, $this->source); })())), "html", null, true);
            yield "\" ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "async", [], "any", false, false, false, 4)) ? ("async") : (""));
            yield " ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "defer", [], "any", false, false, false, 4)) ? ("defer") : (""));
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["js_asset"], "htmlAttributes", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html");
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_asset'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/includes/_js_assets.html.twig";
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
        return array (  59 => 5,  52 => 4,  49 => 3,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var assets \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetDto[] #}
{% for js_asset in assets %}
    {% set src = asset(js_asset.value, js_asset.packageName) %}
    <script src=\"{{ (js_asset.preload ? ea_call_function_if_exists('preload', src, { as: 'script', nopush: js_asset.nopush }))|default(src) }}\" {{ js_asset.async ? 'async' }} {{ js_asset.defer ? 'defer' }}
    {%- for attr, value in js_asset.htmlAttributes %} {{ attr }}=\"{{ value|e('html') }}\"{% endfor %}></script>
{% endfor %}
", "@EasyAdmin/includes/_js_assets.html.twig", "C:\\Users\\JENGO\\B2_projet\\php_symphonie\\SpyMusic\\vendor\\easycorp\\easyadmin-bundle\\templates\\includes\\_js_assets.html.twig");
    }
}
