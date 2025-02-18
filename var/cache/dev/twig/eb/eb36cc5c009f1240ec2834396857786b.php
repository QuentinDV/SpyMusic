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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_9969bb9ee4e73c2542e342af4f4fcbd1 extends Template
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
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'importmap' => [$this, 'block_importmap'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_attr' => [$this, 'block_body_attr'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'javascript_page_color_scheme' => [$this, 'block_javascript_page_color_scheme'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'user_menu' => [$this, 'block_user_menu'],
            'wrapper' => [$this, 'block_wrapper'],
            'responsive_header' => [$this, 'block_responsive_header'],
            'responsive_header_logo' => [$this, 'block_responsive_header_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'main_content_wrapper' => [$this, 'block_main_content_wrapper'],
            'content_top_header' => [$this, 'block_content_top_header'],
            'search_wrapper' => [$this, 'block_search_wrapper'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'search_form_filters' => [$this, 'block_search_form_filters'],
            'header_custom_menu_wrapper' => [$this, 'block_header_custom_menu_wrapper'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'settings_dropdown_wrapper' => [$this, 'block_settings_dropdown_wrapper'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        // line 2
        $context["__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 2, $this->source); })()), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        yield "\" data-turbo=\"false\">
<head>
    ";
        // line 7
        yield from $this->unwrap()->yieldBlock('head_metas', $context, $blocks);
        // line 14
        yield "
    ";
        // line 15
        $context["page_title_block_output"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        yield "    <title>";
        yield Twig\Extension\CoreExtension::striptags((isset($context["page_title_block_output"]) || array_key_exists("page_title_block_output", $context) ? $context["page_title_block_output"] : (function () { throw new RuntimeError('Variable "page_title_block_output" does not exist.', 16, $this->source); })()));
        yield "</title>

    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('head_stylesheets', $context, $blocks);
        // line 21
        yield "
    ";
        // line 22
        yield from $this->unwrap()->yieldBlock('configured_stylesheets', $context, $blocks);
        // line 26
        yield "
    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('head_favicon', $context, $blocks);
        // line 30
        yield "
    ";
        // line 31
        yield from $this->unwrap()->yieldBlock('head_javascript', $context, $blocks);
        // line 38
        yield "
    ";
        // line 39
        yield from $this->unwrap()->yieldBlock('configured_javascripts', $context, $blocks);
        // line 43
        yield "
    ";
        // line 44
        yield from $this->unwrap()->yieldBlock('configured_head_contents', $context, $blocks);
        // line 49
        yield "</head>

";
        // line 51
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 382
        yield "</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_metas(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_metas"));

        // line 8
        yield "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield from         $this->unwrap()->yieldBlock("content_title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 19
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.css", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 19, $this->source); })()), "assets", [], "any", false, false, false, 19), "defaultAssetPackageName", [], "any", false, false, false, 19)), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 23
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", true, true, false, 23) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 23, $this->source); })()), "assets", [], "any", false, false, false, 23), "cssAssets", [], "any", false, false, false, 23)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 23, $this->source); })()), "assets", [], "any", false, false, false, 23), "cssAssets", [], "any", false, false, false, 23)) : ([]))], false);
        yield "
        ";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 24, $this->source); })()), "assets", [], "any", false, false, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 24, $this->source); })()), "assets", [], "any", false, false, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)) : ([]))], false);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_favicon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 28
        yield "        <link rel=\"shortcut icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 28, $this->source); })()), "dashboardFaviconPath", [], "any", false, false, false, 28)), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 32
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 32, $this->source); })()), "assets", [], "any", false, false, false, 32), "defaultAssetPackageName", [], "any", false, false, false, 32)), "html", null, true);
        yield "\"></script>

        ";
        // line 34
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 37
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        // line 35
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_importmap.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "assetMapperAssets", [], "any", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 35, $this->source); })()), "assets", [], "any", false, false, false, 35), "assetMapperAssets", [], "any", false, false, false, 35)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 35, $this->source); })()), "assets", [], "any", false, false, false, 35), "assetMapperAssets", [], "any", false, false, false, 35)) : ([]))], false);
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        // line 40
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 40), "jsAssets", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 40, $this->source); })()), "assets", [], "any", false, false, false, 40), "jsAssets", [], "any", false, false, false, 40)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 40, $this->source); })()), "assets", [], "any", false, false, false, 40), "jsAssets", [], "any", false, false, false, 40)) : ([]))], false);
        yield "
        ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "webpackEncoreAssets", [], "any", true, true, false, 41) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 41, $this->source); })()), "assets", [], "any", false, false, false, 41), "webpackEncoreAssets", [], "any", false, false, false, 41)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 41, $this->source); })()), "assets", [], "any", false, false, false, 41), "webpackEncoreAssets", [], "any", false, false, false, 41)) : ([]))], false);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        // line 45
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 45, $this->source); })()), "assets", [], "any", false, false, false, 45), "headContents", [], "any", false, false, false, 45)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 45, $this->source); })()), "assets", [], "any", false, false, false, 45), "headContents", [], "any", false, false, false, 45)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 46
            yield "            ";
            yield $context["htmlContent"];
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 52
        yield "    <body ";
        yield from $this->unwrap()->yieldBlock('body_attr', $context, $blocks);
        // line 53
        yield "        id=\"";
        yield from $this->unwrap()->yieldBlock('body_id', $context, $blocks);
        yield "\"
        class=\"ea ";
        // line 54
        yield from $this->unwrap()->yieldBlock('body_class', $context, $blocks);
        yield "\"
        data-ea-content-width=\"";
        // line 55
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 55, $this->source); })()), "crud", [], "any", false, false, false, 55), "contentWidth", [], "any", false, false, false, 55)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 55, $this->source); })()), "crud", [], "any", false, false, false, 55), "contentWidth", [], "any", false, false, false, 55), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 55, $this->source); })()), "dashboardContentWidth", [], "any", false, false, false, 55)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 55, $this->source); })()), "dashboardContentWidth", [], "any", false, false, false, 55), "html", null, true)) : ("normal"))));
        yield "\"
        data-ea-sidebar-width=\"";
        // line 56
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 56, $this->source); })()), "crud", [], "any", false, false, false, 56), "sidebarWidth", [], "any", false, false, false, 56)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 56, $this->source); })()), "crud", [], "any", false, false, false, 56), "sidebarWidth", [], "any", false, false, false, 56), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 56, $this->source); })()), "dashboardSidebarWidth", [], "any", false, false, false, 56)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 56, $this->source); })()), "dashboardSidebarWidth", [], "any", false, false, false, 56), "html", null, true)) : ("normal"))));
        yield "\"
        data-ea-dark-scheme-is-enabled=\"";
        // line 57
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 57, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 57)) ? ("true") : ("false"));
        yield "\"
        data-ea-default-color-scheme=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 58, $this->source); })()), "dashboardDefaultColorScheme", [], "any", false, false, false, 58), "html", null, true);
        yield "\"
        data-ea-icon-set=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 59, $this->source); })()), "assets", [], "any", false, false, false, 59), "iconSet", [], "any", false, false, false, 59), "html", null, true);
        yield "\"
        data-ea-icon-prefix=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 60, $this->source); })()), "assets", [], "any", false, false, false, 60), "defaultIconPrefix", [], "any", false, false, false, 60), "html", null, true);
        yield "\"
    >
    ";
        // line 62
        yield from $this->unwrap()->yieldBlock('javascript_page_layout', $context, $blocks);
        // line 65
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascript_page_color_scheme', $context, $blocks);
        // line 68
        yield "
    ";
        // line 69
        yield from $this->unwrap()->yieldBlock('wrapper_wrapper', $context, $blocks);
        // line 372
        yield "
    ";
        // line 373
        yield from $this->unwrap()->yieldBlock('body_javascript', $context, $blocks);
        // line 374
        yield "
    ";
        // line 375
        yield from $this->unwrap()->yieldBlock('configured_body_contents', $context, $blocks);
        // line 380
        yield "    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_attr(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attr"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_page_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_layout"));

        // line 63
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-layout.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 63, $this->source); })()), "assets", [], "any", false, false, false, 63), "defaultAssetPackageName", [], "any", false, false, false, 63)), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_page_color_scheme(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_color_scheme"));

        // line 66
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-color-scheme.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 66, $this->source); })()), "assets", [], "any", false, false, false, 66), "defaultAssetPackageName", [], "any", false, false, false, 66)), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        // line 70
        yield "        ";
        yield from $this->unwrap()->yieldBlock('flash_messages', $context, $blocks);
        // line 73
        yield "
        ";
        // line 74
        $context["user_menu_avatar"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 75
            yield "            ";
            if ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 75, $this->source); })()), "userMenu", [], "any", false, false, false, 75), "avatarUrl", [], "any", false, false, false, 75))) {
                // line 76
                yield "                <span class=\"user-avatar\">
                    ";
                // line 77
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:user"]);
                yield "
                </span>
            ";
            } else {
                // line 80
                yield "                <img class=\"user-avatar\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 80, $this->source); })()), "userMenu", [], "any", false, false, false, 80), "avatarUrl", [], "any", false, false, false, 80), "html", null, true);
                yield "\" />
            ";
            }
            // line 82
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        yield "
        ";
        // line 84
        $context["user_menu"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 85
            yield "            ";
            yield from $this->unwrap()->yieldBlock('user_menu', $context, $blocks);
            // line 102
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        yield "
        ";
        // line 104
        $context["impersonator_permission"] = ((Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR", null, true)) ? ("IS_IMPERSONATOR") : ("ROLE_PREVIOUS_ADMIN"));
        // line 105
        yield "
        ";
        // line 106
        $context["user_menu_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 107
            yield "            ";
            $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v0->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v0->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 30618993461);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 30618993461);
                $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 107, "30618993461")->display($embeddedContext, $embeddedBlocks);
                $_v0->finishEmbedComponent();
            }
            // line 118
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        yield "
        ";
        // line 120
        $context["settings_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 121
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 121, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 121) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 121, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 121))) {
                // line 122
                yield "                ";
                $_v1 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
                $preRendered = $_v1->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings"]));
                if (null !== $preRendered) {
                    yield $preRendered; 
                } else {
                    $preRenderEvent = $_v1->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings"]), $context, "@EasyAdmin/layout.html.twig", 41080889271);
                    $embeddedContext = $preRenderEvent->getVariables();
                    $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                    $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                    $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 41080889271);
                    $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 122, "41080889271")->display($embeddedContext, $embeddedBlocks);
                    $_v1->finishEmbedComponent();
                }
                // line 156
                yield "            ";
            }
            // line 157
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 158
        yield "
        <div class=\"wrapper\">
            ";
        // line 160
        yield from $this->unwrap()->yieldBlock('wrapper', $context, $blocks);
        // line 369
        yield "        </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_flash_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 71
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 71, $this->source); })()), "templatePath", ["flash_messages"], "method", false, false, false, 71));
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_user_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_menu"));

        // line 86
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 86, $this->source); })()), "userMenu", [], "any", false, false, false, 86), "items", [], "any", false, false, false, 86)) > 0)) {
            // line 87
            yield "                    ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
            yield "

                    ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 89, $this->source); })()), "userMenu", [], "any", false, false, false, 89), "items", [], "any", false, false, false, 89));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 90
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 90)) {
                    // line 91
                    yield "                            ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 91)) {
                        // line 92
                        yield "                                ";
                        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
                        yield "
                            ";
                    }
                    // line 94
                    yield "
                            ";
                    // line 95
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Header", ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 95), [],                     // line 2
(isset($context["__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5"]) || array_key_exists("__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5", $context) ? $context["__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5"] : (function () { throw new RuntimeError('Variable "__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5" does not exist.', 2, $this->source); })())), "class" => CoreExtension::getAttribute($this->env, $this->source,                     // line 95
$context["item"], "cssClass", [], "any", false, false, false, 95), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 95), "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "htmlAttributes", [], "any", false, false, false, 95)]);
                    yield "
                        ";
                } else {
                    // line 97
                    yield "                            ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 97), [],                     // line 2
(isset($context["__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5"]) || array_key_exists("__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5", $context) ? $context["__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5"] : (function () { throw new RuntimeError('Variable "__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5" does not exist.', 2, $this->source); })())), "class" => ("user-action " . CoreExtension::getAttribute($this->env, $this->source,                     // line 97
$context["item"], "cssClass", [], "any", false, false, false, 97)), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 97), "url" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 97), "target" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 97), "rel" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 97), "referrerpolicy" => "origin-when-cross-origin", "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "htmlAttributes", [], "any", false, false, false, 97)]);
                    yield "
                        ";
                }
                // line 99
                yield "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "                ";
        }
        // line 101
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 160
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper"));

        // line 161
        yield "                <div class=\"responsive-header\">
                    ";
        // line 162
        yield from $this->unwrap()->yieldBlock('responsive_header', $context, $blocks);
        // line 192
        yield "                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        ";
        // line 196
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 218
        yield "
                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                ";
        // line 222
        yield from $this->unwrap()->yieldBlock('main_content_wrapper', $context, $blocks);
        // line 368
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 162
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_responsive_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header"));

        // line 163
        yield "                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            ";
        // line 164
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:menu-bars"]);
        yield "
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            ";
        // line 168
        yield from $this->unwrap()->yieldBlock('responsive_header_logo', $context, $blocks);
        // line 173
        yield "                        </div>

                        ";
        // line 175
        $_v2 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v2->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("ms-auto user-menu-wrapper " . (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 175, $this->source); })()))) ? ("user-is-impersonated") : ("")))]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v2->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("ms-auto user-menu-wrapper " . (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 175, $this->source); })()))) ? ("user-is-impersonated") : ("")))]), $context, "@EasyAdmin/layout.html.twig", 3994479931);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 3994479931);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 175, "3994479931")->display($embeddedContext, $embeddedBlocks);
            $_v2->finishEmbedComponent();
        }
        // line 189
        yield "
                        ";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["settings_dropdown"]) || array_key_exists("settings_dropdown", $context) ? $context["settings_dropdown"] : (function () { throw new RuntimeError('Variable "settings_dropdown" does not exist.', 190, $this->source); })()), "html", null, true);
        yield "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 168
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_responsive_header_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header_logo"));

        // line 169
        yield "                                <a class=\"responsive-logo\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 169, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 169)), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 169, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 169));
        yield "\">
                                    ";
        // line 170
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 170, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 170);
        yield "
                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 196
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 197
        yield "                            <header class=\"main-header\">
                                ";
        // line 198
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 212
        yield "                            </header>

                            ";
        // line 214
        yield from $this->unwrap()->yieldBlock('main_menu_wrapper', $context, $blocks);
        // line 217
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 198
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 199
        yield "                                <nav class=\"navbar\" role=\"navigation\">
                                    ";
        // line 200
        yield from $this->unwrap()->yieldBlock('header_navbar', $context, $blocks);
        // line 210
        yield "                                </nav>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 200
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_navbar"));

        // line 201
        yield "                                        <div id=\"header-logo\">
                                            ";
        // line 202
        yield from $this->unwrap()->yieldBlock('header_logo', $context, $blocks);
        // line 208
        yield "                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 202
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        // line 203
        yield "                                                <a class=\"logo\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 203, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 203)), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 203, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 203));
        yield "\">
                                                    <span class=\"logo-custom\">";
        // line 204
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 204, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 204);
        yield "</span>
                                                    <span class=\"logo-compact\">";
        // line 205
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:home"]);
        yield "</span>
                                                </a>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 214
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_menu_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 215
        yield "                                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 215, $this->source); })()), "templatePath", ["main_menu"], "method", false, false, false, 215));
        yield "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 222
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_content_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_content_wrapper"));

        // line 223
        yield "                <section class=\"main-content\">
                    ";
        // line 224
        $context["has_search"] = ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 224, $this->source); })()), "crud", [], "any", false, false, false, 224)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 224, $this->source); })()), "crud", [], "any", false, false, false, 224), "isSearchEnabled", [], "any", false, false, false, 224));
        // line 225
        yield "                    <aside class=\"content-top ";
        yield (((isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 225, $this->source); })())) ? ("ea-search-enabled") : ("ea-search-disabled"));
        yield "\">
                        ";
        // line 226
        yield from $this->unwrap()->yieldBlock('content_top_header', $context, $blocks);
        // line 319
        yield "                    </aside>

                    <div class=\"content-wrapper\">
                        ";
        // line 322
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 363
        yield "
                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 226
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top_header"));

        // line 227
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('search_wrapper', $context, $blocks);
        // line 296
        yield "
                            ";
        // line 297
        yield from $this->unwrap()->yieldBlock('header_custom_menu_wrapper', $context, $blocks);
        // line 314
        yield "
                            ";
        // line 315
        yield from $this->unwrap()->yieldBlock('settings_dropdown_wrapper', $context, $blocks);
        // line 318
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 227
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_wrapper"));

        // line 228
        yield "                            <div class=\"content-search\">
                                ";
        // line 229
        if ((isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 229, $this->source); })())) {
            // line 230
            yield "                                    ";
            yield from $this->unwrap()->yieldBlock('search', $context, $blocks);
            // line 293
            yield "                                ";
        }
        // line 294
        yield "                            </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 230
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 231
        yield "                                        ";
        $context["formActionUrl"] = null;
        // line 232
        yield "                                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 232, $this->source); })()), "usePrettyUrls", [], "any", false, false, false, 232)) {
            // line 233
            yield "                                            ";
            // line 234
            yield "                                            ";
            $context["crudController"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 234), "attributes", [], "any", false, true, false, 234), "get", ["crudControllerFqcn"], "method", true, true, false, 234) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 234, $this->source); })()), "request", [], "any", false, false, false, 234), "attributes", [], "any", false, false, false, 234), "get", ["crudControllerFqcn"], "method", false, false, false, 234)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 234, $this->source); })()), "request", [], "any", false, false, false, 234), "attributes", [], "any", false, false, false, 234), "get", ["crudControllerFqcn"], "method", false, false, false, 234)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 234, $this->source); })()), "request", [], "any", false, false, false, 234), "query", [], "any", false, false, false, 234), "get", ["crudControllerFqcn"], "method", false, false, false, 234)));
            // line 235
            yield "                                            ";
            $context["formActionUrl"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", [(isset($context["crudController"]) || array_key_exists("crudController", $context) ? $context["crudController"] : (function () { throw new RuntimeError('Variable "crudController" does not exist.', 235, $this->source); })())], "method", false, false, false, 235), "setAction", ["index"], "method", false, false, false, 235), "set", ["page", 1], "method", false, false, false, 235);
            // line 236
            yield "                                        ";
        }
        // line 237
        yield "                                        <form class=\"form-action-search\" method=\"get\" ";
        if ((isset($context["formActionUrl"]) || array_key_exists("formActionUrl", $context) ? $context["formActionUrl"] : (function () { throw new RuntimeError('Variable "formActionUrl" does not exist.', 237, $this->source); })())) {
            yield "action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formActionUrl"]) || array_key_exists("formActionUrl", $context) ? $context["formActionUrl"] : (function () { throw new RuntimeError('Variable "formActionUrl" does not exist.', 237, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">
                                            ";
        // line 238
        yield from $this->unwrap()->yieldBlock('search_form', $context, $blocks);
        // line 291
        yield "                                        </form>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 238
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        // line 239
        yield "                                                ";
        yield from $this->unwrap()->yieldBlock('search_form_filters', $context, $blocks);
        // line 264
        yield "
                                                ";
        // line 265
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 265, $this->source); })()), "usePrettyUrls", [], "any", false, false, false, 265)) {
            // line 266
            yield "                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 267, $this->source); })()), "request", [], "any", false, false, false, 267), "query", [], "any", false, false, false, 267), "get", ["crudControllerFqcn"], "method", false, false, false, 267), "html", null, true);
            yield "\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                ";
        }
        // line 270
        yield "
                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        ";
        // line 273
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:search", "class" => "content-search-icon"]);
        yield "

                                                        <label class=\"content-search-label\" data-value=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 275, $this->source); })()), "request", [], "any", false, false, false, 275), "query", [], "any", false, false, false, 275), "get", ["query"], "method", false, false, false, 275), "html", null, true);
        yield "\">
                                                            <input class=\"form-control ";
        // line 276
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 276, $this->source); })()), "request", [], "any", false, false, false, 276), "query", [], "any", false, false, false, 276), "get", ["query"], "method", false, false, false, 276))) ? ("is-blank") : (""));
        yield "\" type=\"search\" name=\"query\" value=\"";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 276), "query", [], "any", false, true, false, 276), "get", ["query"], "method", true, true, false, 276) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 276, $this->source); })()), "request", [], "any", false, false, false, 276), "query", [], "any", false, false, false, 276), "get", ["query"], "method", false, false, false, 276)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 276, $this->source); })()), "request", [], "any", false, false, false, 276), "query", [], "any", false, false, false, 276), "get", ["query"], "method", false, false, false, 276), "html", null, true)) : (""));
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.search", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 276, $this->source); })()), "i18n", [], "any", false, false, false, 276), "translationParameters", [], "any", false, false, false, 276), "EasyAdminBundle"), [],         // line 2
(isset($context["__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5"]) || array_key_exists("__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5", $context) ? $context["__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5"] : (function () { throw new RuntimeError('Variable "__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5" does not exist.', 2, $this->source); })())), "html", null, true);
        // line 276
        yield "\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 276, $this->source); })()), "crud", [], "any", false, false, false, 276), "currentAction", [], "any", false, false, false, 276) == "index") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 276, $this->source); })()), "crud", [], "any", false, false, false, 276), "autofocusSearch", [], "any", false, false, false, 276) == true))) {
            yield " autofocus=\"autofocus\"";
        }
        yield ">
                                                        </label>

                                                        ";
        // line 279
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 279, $this->source); })()), "request", [], "any", false, false, false, 279), "query", [], "any", false, false, false, 279), "get", ["query"], "method", false, false, false, 279)) {
            // line 280
            yield "                                                            ";
            $context["search_reset_url"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["query"], "method", false, false, false, 280);
            // line 281
            yield "                                                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 281, $this->source); })()), "usePrettyUrls", [], "any", false, false, false, 281)) {
                // line 282
                yield "                                                                ";
                $context["search_reset_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["query"], "method", false, false, false, 282), "setController", [(isset($context["crudController"]) || array_key_exists("crudController", $context) ? $context["crudController"] : (function () { throw new RuntimeError('Variable "crudController" does not exist.', 282, $this->source); })())], "method", false, false, false, 282), "setAction", ["index"], "method", false, false, false, 282), "set", ["page", 1], "method", false, false, false, 282);
                // line 283
                yield "                                                            ";
            }
            // line 284
            yield "                                                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_reset_url"]) || array_key_exists("search_reset_url", $context) ? $context["search_reset_url"] : (function () { throw new RuntimeError('Variable "search_reset_url" does not exist.', 284, $this->source); })()), "html", null, true);
            yield "\" class=\"content-search-reset\">
                                                                ";
            // line 285
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:xmark"]);
            yield "
                                                            </a>
                                                        ";
        }
        // line 288
        yield "                                                    </div>
                                                </div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_form_filters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form_filters"));

        // line 240
        yield "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 240, $this->source); })()), "search", [], "any", false, false, false, 240), "appliedFilters", [], "any", false, false, false, 240));
        foreach ($context['_seq'] as $context["field"] => $context["fieldValue"]) {
            // line 241
            yield "                                                        ";
            if (is_iterable($context["fieldValue"])) {
                // line 242
                yield "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["fieldValue"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 243
                    yield "                                                                ";
                    // line 244
                    yield "                                                                ";
                    if (is_iterable($context["value"])) {
                        // line 245
                        yield "                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["value"]);
                        foreach ($context['_seq'] as $context["index"] => $context["iterValue"]) {
                            // line 246
                            yield "                                                                        ";
                            // line 247
                            yield "                                                                        ";
                            if (is_iterable($context["iterValue"])) {
                                // line 248
                                yield "                                                                            ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable($context["iterValue"]);
                                foreach ($context['_seq'] as $context["subIndex"] => $context["subIterValue"]) {
                                    // line 249
                                    yield "                                                                                <input type=\"hidden\" name=\"filters[";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                                    yield "][";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                                    yield "][";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["index"], "html", null, true);
                                    yield "][";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["subIndex"], "html", null, true);
                                    yield "]\" value=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["subIterValue"], "html", null, true);
                                    yield "\">
                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['subIndex'], $context['subIterValue'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 251
                                yield "                                                                        ";
                            } else {
                                // line 252
                                yield "                                                                            <input type=\"hidden\" name=\"filters[";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                                yield "][";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                                yield "][";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["index"], "html", null, true);
                                yield "]\" value=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["iterValue"], "html", null, true);
                                yield "\">
                                                                        ";
                            }
                            // line 254
                            yield "                                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['index'], $context['iterValue'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 255
                        yield "                                                                ";
                    } else {
                        // line 256
                        yield "                                                                    <input type=\"hidden\" name=\"filters[";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                        yield "][";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield "]\" value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "\">
                                                                ";
                    }
                    // line 258
                    yield "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 259
                yield "                                                        ";
            } else {
                // line 260
                yield "                                                            <input type=\"hidden\" name=\"filters[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                yield "]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldValue"], "html", null, true);
                yield "\">
                                                        ";
            }
            // line 262
            yield "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['field'], $context['fieldValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        yield "                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 297
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_custom_menu_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu_wrapper"));

        // line 298
        yield "                            <div class=\"navbar-custom-menu\">
                                ";
        // line 299
        yield from $this->unwrap()->yieldBlock('header_custom_menu', $context, $blocks);
        // line 312
        yield "                            </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 299
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_custom_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 300
        yield "                                    ";
        $_v3 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v3->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("user-menu-wrapper " . (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 300, $this->source); })()))) ? ("user-is-impersonated") : ("")))]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v3->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("user-menu-wrapper " . (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 300, $this->source); })()))) ? ("user-is-impersonated") : ("")))]), $context, "@EasyAdmin/layout.html.twig", 7277531191);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 7277531191);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 300, "7277531191")->display($embeddedContext, $embeddedBlocks);
            $_v3->finishEmbedComponent();
        }
        // line 311
        yield "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 315
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_settings_dropdown_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "settings_dropdown_wrapper"));

        // line 316
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["settings_dropdown"]) || array_key_exists("settings_dropdown", $context) ? $context["settings_dropdown"] : (function () { throw new RuntimeError('Variable "settings_dropdown" does not exist.', 316, $this->source); })()), "html", null, true);
        yield "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 322
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 323
        yield "                            <article class=\"content\">
                                ";
        // line 324
        yield from $this->unwrap()->yieldBlock('content_header_wrapper', $context, $blocks);
        // line 348
        yield "
                                <section id=\"main\" class=\"content-body\">
                                    ";
        // line 350
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 351
        yield "                                </section>

                                ";
        // line 353
        yield from $this->unwrap()->yieldBlock('content_footer_wrapper', $context, $blocks);
        // line 361
        yield "                            </article>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header_wrapper"));

        // line 325
        yield "                                    ";
        $context["has_help_message"] =  !Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 325), "helpMessage", [], "any", true, true, false, 325) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 325, $this->source); })()), "crud", [], "any", false, false, false, 325), "helpMessage", [], "any", false, false, false, 325)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 325, $this->source); })()), "crud", [], "any", false, false, false, 325), "helpMessage", [], "any", false, false, false, 325)) : ("")));
        // line 326
        yield "                                    <section class=\"content-header\">
                                        ";
        // line 327
        yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
        // line 346
        yield "                                    </section>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 327
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 328
        yield "                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 330
        yield from $this->unwrap()->yieldBlock('content_title', $context, $blocks);
        // line 331
        yield "
                                                    ";
        // line 332
        yield from $this->unwrap()->yieldBlock('content_help', $context, $blocks);
        // line 339
        yield "                                                </h1>
                                            </div>

                                            ";
        // line 342
        yield from $this->unwrap()->yieldBlock('page_actions_wrapper', $context, $blocks);
        // line 345
        yield "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 330
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 332
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_help"));

        // line 333
        yield "                                                        ";
        if ((isset($context["has_help_message"]) || array_key_exists("has_help_message", $context) ? $context["has_help_message"] : (function () { throw new RuntimeError('Variable "has_help_message" does not exist.', 333, $this->source); })())) {
            // line 334
            yield "                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 334, $this->source); })()), "crud", [], "any", false, false, false, 334), "helpMessage", [], "any", false, false, false, 334), [],             // line 2
(isset($context["__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5"]) || array_key_exists("__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5", $context) ? $context["__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5"] : (function () { throw new RuntimeError('Variable "__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5" does not exist.', 2, $this->source); })())), "html");
            // line 334
            yield "\">
                                                                ";
            // line 335
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:circle-info"]);
            yield "
                                                            </a>
                                                        ";
        }
        // line 338
        yield "                                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 342
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_wrapper"));

        // line 343
        yield "                                                <div class=\"page-actions\">";
        yield from $this->unwrap()->yieldBlock('page_actions', $context, $blocks);
        yield "</div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 350
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 353
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        // line 354
        yield "                                    ";
        $context["content_footer"] = ((        $this->unwrap()->hasBlock("content_footer", $context, $blocks)) ? (        $this->unwrap()->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 355
        yield "                                    ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["content_footer"]) || array_key_exists("content_footer", $context) ? $context["content_footer"] : (function () { throw new RuntimeError('Variable "content_footer" does not exist.', 355, $this->source); })()))) {
            // line 356
            yield "                                        <section class=\"content-footer\">
                                            ";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["content_footer"]) || array_key_exists("content_footer", $context) ? $context["content_footer"] : (function () { throw new RuntimeError('Variable "content_footer" does not exist.', 357, $this->source); })()), "html", null, true);
            yield "
                                        </section>
                                    ";
        }
        // line 360
        yield "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 373
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 375
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        // line 376
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 376), "bodyContents", [], "any", true, true, false, 376) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 376, $this->source); })()), "assets", [], "any", false, false, false, 376), "bodyContents", [], "any", false, false, false, 376)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 376, $this->source); })()), "assets", [], "any", false, false, false, 376), "bodyContents", [], "any", false, false, false, 376)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 377
            yield "            ";
            yield $context["htmlContent"];
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 379
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  1746 => 379,  1737 => 377,  1732 => 376,  1722 => 375,  1706 => 373,  1698 => 360,  1692 => 357,  1689 => 356,  1686 => 355,  1683 => 354,  1673 => 353,  1657 => 350,  1631 => 343,  1621 => 342,  1613 => 338,  1607 => 335,  1604 => 334,  1602 => 2,  1600 => 334,  1597 => 333,  1587 => 332,  1571 => 330,  1563 => 345,  1561 => 342,  1556 => 339,  1554 => 332,  1551 => 331,  1549 => 330,  1545 => 328,  1535 => 327,  1526 => 346,  1524 => 327,  1521 => 326,  1518 => 325,  1508 => 324,  1499 => 361,  1497 => 353,  1493 => 351,  1491 => 350,  1487 => 348,  1485 => 324,  1482 => 323,  1472 => 322,  1461 => 316,  1451 => 315,  1443 => 311,  1428 => 300,  1418 => 299,  1409 => 312,  1407 => 299,  1404 => 298,  1394 => 297,  1386 => 263,  1380 => 262,  1372 => 260,  1369 => 259,  1363 => 258,  1353 => 256,  1350 => 255,  1344 => 254,  1332 => 252,  1329 => 251,  1312 => 249,  1307 => 248,  1304 => 247,  1302 => 246,  1297 => 245,  1294 => 244,  1292 => 243,  1287 => 242,  1284 => 241,  1279 => 240,  1269 => 239,  1259 => 288,  1253 => 285,  1248 => 284,  1245 => 283,  1242 => 282,  1239 => 281,  1236 => 280,  1234 => 279,  1225 => 276,  1223 => 2,  1218 => 276,  1214 => 275,  1209 => 273,  1204 => 270,  1198 => 267,  1195 => 266,  1193 => 265,  1190 => 264,  1187 => 239,  1177 => 238,  1168 => 291,  1166 => 238,  1157 => 237,  1154 => 236,  1151 => 235,  1148 => 234,  1146 => 233,  1143 => 232,  1140 => 231,  1130 => 230,  1121 => 294,  1118 => 293,  1115 => 230,  1113 => 229,  1110 => 228,  1100 => 227,  1092 => 318,  1090 => 315,  1087 => 314,  1085 => 297,  1082 => 296,  1079 => 227,  1069 => 226,  1057 => 363,  1055 => 322,  1050 => 319,  1048 => 226,  1043 => 225,  1041 => 224,  1038 => 223,  1028 => 222,  1017 => 215,  1007 => 214,  996 => 205,  992 => 204,  985 => 203,  975 => 202,  966 => 208,  964 => 202,  961 => 201,  951 => 200,  942 => 210,  940 => 200,  937 => 199,  927 => 198,  919 => 217,  917 => 214,  913 => 212,  911 => 198,  908 => 197,  898 => 196,  887 => 170,  880 => 169,  870 => 168,  860 => 190,  857 => 189,  843 => 175,  839 => 173,  837 => 168,  830 => 164,  827 => 163,  817 => 162,  809 => 368,  807 => 222,  801 => 218,  799 => 196,  793 => 192,  791 => 162,  788 => 161,  778 => 160,  770 => 101,  767 => 100,  753 => 99,  748 => 97,  747 => 2,  745 => 97,  740 => 95,  739 => 2,  738 => 95,  735 => 94,  729 => 92,  726 => 91,  723 => 90,  706 => 89,  700 => 87,  697 => 86,  687 => 85,  676 => 71,  666 => 70,  656 => 369,  654 => 160,  650 => 158,  646 => 157,  643 => 156,  628 => 122,  625 => 121,  623 => 120,  620 => 119,  616 => 118,  601 => 107,  599 => 106,  596 => 105,  594 => 104,  591 => 103,  587 => 102,  584 => 85,  582 => 84,  579 => 83,  575 => 82,  569 => 80,  563 => 77,  560 => 76,  557 => 75,  555 => 74,  552 => 73,  549 => 70,  539 => 69,  528 => 66,  518 => 65,  507 => 63,  497 => 62,  481 => 54,  465 => 53,  449 => 52,  440 => 380,  438 => 375,  435 => 374,  433 => 373,  430 => 372,  428 => 69,  425 => 68,  422 => 65,  420 => 62,  415 => 60,  411 => 59,  407 => 58,  403 => 57,  399 => 56,  395 => 55,  391 => 54,  386 => 53,  383 => 52,  373 => 51,  365 => 48,  356 => 46,  351 => 45,  341 => 44,  331 => 41,  326 => 40,  316 => 39,  305 => 35,  295 => 34,  287 => 37,  285 => 34,  279 => 32,  269 => 31,  258 => 28,  248 => 27,  238 => 24,  233 => 23,  223 => 22,  212 => 19,  202 => 18,  185 => 15,  172 => 8,  162 => 7,  153 => 382,  151 => 51,  147 => 49,  145 => 44,  142 => 43,  140 => 39,  137 => 38,  135 => 31,  132 => 30,  130 => 27,  127 => 26,  125 => 22,  122 => 21,  120 => 18,  114 => 16,  109 => 15,  106 => 14,  104 => 7,  97 => 5,  93 => 3,  91 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
                                    {% if content_footer is not empty %}
                                        <section class=\"content-footer\">
                                            {{ content_footer }}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "C:\\Users\\JENGO\\B2_projet\\php_symphonie\\SpyMusic\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_9969bb9ee4e73c2542e342af4f4fcbd1___30618993461 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 107
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 107, $this->source); })()), "@EasyAdmin/layout.html.twig", 107);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v4 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v4->preRender("ea:ActionMenu:ActionList:Content", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-user-details"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v4->startEmbedComponent("ea:ActionMenu:ActionList:Content", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-user-details"]), $context, "@EasyAdmin/layout.html.twig", 6417279391);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 6417279391);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 108, "6417279391")->display($embeddedContext, $embeddedBlocks);
            $_v4->finishEmbedComponent();
        }
        // line 115
        yield "
                ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu"]) || array_key_exists("user_menu", $context) ? $context["user_menu"] : (function () { throw new RuntimeError('Variable "user_menu" does not exist.', 116, $this->source); })()), "html", null, true);
        yield "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  2247 => 116,  2244 => 115,  2221 => 108,  2190 => 107,  1746 => 379,  1737 => 377,  1732 => 376,  1722 => 375,  1706 => 373,  1698 => 360,  1692 => 357,  1689 => 356,  1686 => 355,  1683 => 354,  1673 => 353,  1657 => 350,  1631 => 343,  1621 => 342,  1613 => 338,  1607 => 335,  1604 => 334,  1602 => 2,  1600 => 334,  1597 => 333,  1587 => 332,  1571 => 330,  1563 => 345,  1561 => 342,  1556 => 339,  1554 => 332,  1551 => 331,  1549 => 330,  1545 => 328,  1535 => 327,  1526 => 346,  1524 => 327,  1521 => 326,  1518 => 325,  1508 => 324,  1499 => 361,  1497 => 353,  1493 => 351,  1491 => 350,  1487 => 348,  1485 => 324,  1482 => 323,  1472 => 322,  1461 => 316,  1451 => 315,  1443 => 311,  1428 => 300,  1418 => 299,  1409 => 312,  1407 => 299,  1404 => 298,  1394 => 297,  1386 => 263,  1380 => 262,  1372 => 260,  1369 => 259,  1363 => 258,  1353 => 256,  1350 => 255,  1344 => 254,  1332 => 252,  1329 => 251,  1312 => 249,  1307 => 248,  1304 => 247,  1302 => 246,  1297 => 245,  1294 => 244,  1292 => 243,  1287 => 242,  1284 => 241,  1279 => 240,  1269 => 239,  1259 => 288,  1253 => 285,  1248 => 284,  1245 => 283,  1242 => 282,  1239 => 281,  1236 => 280,  1234 => 279,  1225 => 276,  1223 => 2,  1218 => 276,  1214 => 275,  1209 => 273,  1204 => 270,  1198 => 267,  1195 => 266,  1193 => 265,  1190 => 264,  1187 => 239,  1177 => 238,  1168 => 291,  1166 => 238,  1157 => 237,  1154 => 236,  1151 => 235,  1148 => 234,  1146 => 233,  1143 => 232,  1140 => 231,  1130 => 230,  1121 => 294,  1118 => 293,  1115 => 230,  1113 => 229,  1110 => 228,  1100 => 227,  1092 => 318,  1090 => 315,  1087 => 314,  1085 => 297,  1082 => 296,  1079 => 227,  1069 => 226,  1057 => 363,  1055 => 322,  1050 => 319,  1048 => 226,  1043 => 225,  1041 => 224,  1038 => 223,  1028 => 222,  1017 => 215,  1007 => 214,  996 => 205,  992 => 204,  985 => 203,  975 => 202,  966 => 208,  964 => 202,  961 => 201,  951 => 200,  942 => 210,  940 => 200,  937 => 199,  927 => 198,  919 => 217,  917 => 214,  913 => 212,  911 => 198,  908 => 197,  898 => 196,  887 => 170,  880 => 169,  870 => 168,  860 => 190,  857 => 189,  843 => 175,  839 => 173,  837 => 168,  830 => 164,  827 => 163,  817 => 162,  809 => 368,  807 => 222,  801 => 218,  799 => 196,  793 => 192,  791 => 162,  788 => 161,  778 => 160,  770 => 101,  767 => 100,  753 => 99,  748 => 97,  747 => 2,  745 => 97,  740 => 95,  739 => 2,  738 => 95,  735 => 94,  729 => 92,  726 => 91,  723 => 90,  706 => 89,  700 => 87,  697 => 86,  687 => 85,  676 => 71,  666 => 70,  656 => 369,  654 => 160,  650 => 158,  646 => 157,  643 => 156,  628 => 122,  625 => 121,  623 => 120,  620 => 119,  616 => 118,  601 => 107,  599 => 106,  596 => 105,  594 => 104,  591 => 103,  587 => 102,  584 => 85,  582 => 84,  579 => 83,  575 => 82,  569 => 80,  563 => 77,  560 => 76,  557 => 75,  555 => 74,  552 => 73,  549 => 70,  539 => 69,  528 => 66,  518 => 65,  507 => 63,  497 => 62,  481 => 54,  465 => 53,  449 => 52,  440 => 380,  438 => 375,  435 => 374,  433 => 373,  430 => 372,  428 => 69,  425 => 68,  422 => 65,  420 => 62,  415 => 60,  411 => 59,  407 => 58,  403 => 57,  399 => 56,  395 => 55,  391 => 54,  386 => 53,  383 => 52,  373 => 51,  365 => 48,  356 => 46,  351 => 45,  341 => 44,  331 => 41,  326 => 40,  316 => 39,  305 => 35,  295 => 34,  287 => 37,  285 => 34,  279 => 32,  269 => 31,  258 => 28,  248 => 27,  238 => 24,  233 => 23,  223 => 22,  212 => 19,  202 => 18,  185 => 15,  172 => 8,  162 => 7,  153 => 382,  151 => 51,  147 => 49,  145 => 44,  142 => 43,  140 => 39,  137 => 38,  135 => 31,  132 => 30,  130 => 27,  127 => 26,  125 => 22,  122 => 21,  120 => 18,  114 => 16,  109 => 15,  106 => 14,  104 => 7,  97 => 5,  93 => 3,  91 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
                                    {% if content_footer is not empty %}
                                        <section class=\"content-footer\">
                                            {{ content_footer }}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "C:\\Users\\JENGO\\B2_projet\\php_symphonie\\SpyMusic\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_9969bb9ee4e73c2542e342af4f4fcbd1___6417279391 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 108
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 108, $this->source); })()), "@EasyAdmin/layout.html.twig", 108);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield "<div>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 109, $this->source); })()), "html", null, true);
        yield "</div>
                    <div>
                        <span class=\"user-label\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", [], "EasyAdminBundle"), "html", null, true);
        yield "</span>
                        <span class=\"user-name\">";
        // line 112
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", [], "EasyAdminBundle"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 112, $this->source); })()), "userMenu", [], "any", false, false, false, 112), "name", [], "any", false, false, false, 112), "html", null, true)));
        yield "</span>
                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  2743 => 112,  2739 => 111,  2724 => 109,  2693 => 108,  2247 => 116,  2244 => 115,  2221 => 108,  2190 => 107,  1746 => 379,  1737 => 377,  1732 => 376,  1722 => 375,  1706 => 373,  1698 => 360,  1692 => 357,  1689 => 356,  1686 => 355,  1683 => 354,  1673 => 353,  1657 => 350,  1631 => 343,  1621 => 342,  1613 => 338,  1607 => 335,  1604 => 334,  1602 => 2,  1600 => 334,  1597 => 333,  1587 => 332,  1571 => 330,  1563 => 345,  1561 => 342,  1556 => 339,  1554 => 332,  1551 => 331,  1549 => 330,  1545 => 328,  1535 => 327,  1526 => 346,  1524 => 327,  1521 => 326,  1518 => 325,  1508 => 324,  1499 => 361,  1497 => 353,  1493 => 351,  1491 => 350,  1487 => 348,  1485 => 324,  1482 => 323,  1472 => 322,  1461 => 316,  1451 => 315,  1443 => 311,  1428 => 300,  1418 => 299,  1409 => 312,  1407 => 299,  1404 => 298,  1394 => 297,  1386 => 263,  1380 => 262,  1372 => 260,  1369 => 259,  1363 => 258,  1353 => 256,  1350 => 255,  1344 => 254,  1332 => 252,  1329 => 251,  1312 => 249,  1307 => 248,  1304 => 247,  1302 => 246,  1297 => 245,  1294 => 244,  1292 => 243,  1287 => 242,  1284 => 241,  1279 => 240,  1269 => 239,  1259 => 288,  1253 => 285,  1248 => 284,  1245 => 283,  1242 => 282,  1239 => 281,  1236 => 280,  1234 => 279,  1225 => 276,  1223 => 2,  1218 => 276,  1214 => 275,  1209 => 273,  1204 => 270,  1198 => 267,  1195 => 266,  1193 => 265,  1190 => 264,  1187 => 239,  1177 => 238,  1168 => 291,  1166 => 238,  1157 => 237,  1154 => 236,  1151 => 235,  1148 => 234,  1146 => 233,  1143 => 232,  1140 => 231,  1130 => 230,  1121 => 294,  1118 => 293,  1115 => 230,  1113 => 229,  1110 => 228,  1100 => 227,  1092 => 318,  1090 => 315,  1087 => 314,  1085 => 297,  1082 => 296,  1079 => 227,  1069 => 226,  1057 => 363,  1055 => 322,  1050 => 319,  1048 => 226,  1043 => 225,  1041 => 224,  1038 => 223,  1028 => 222,  1017 => 215,  1007 => 214,  996 => 205,  992 => 204,  985 => 203,  975 => 202,  966 => 208,  964 => 202,  961 => 201,  951 => 200,  942 => 210,  940 => 200,  937 => 199,  927 => 198,  919 => 217,  917 => 214,  913 => 212,  911 => 198,  908 => 197,  898 => 196,  887 => 170,  880 => 169,  870 => 168,  860 => 190,  857 => 189,  843 => 175,  839 => 173,  837 => 168,  830 => 164,  827 => 163,  817 => 162,  809 => 368,  807 => 222,  801 => 218,  799 => 196,  793 => 192,  791 => 162,  788 => 161,  778 => 160,  770 => 101,  767 => 100,  753 => 99,  748 => 97,  747 => 2,  745 => 97,  740 => 95,  739 => 2,  738 => 95,  735 => 94,  729 => 92,  726 => 91,  723 => 90,  706 => 89,  700 => 87,  697 => 86,  687 => 85,  676 => 71,  666 => 70,  656 => 369,  654 => 160,  650 => 158,  646 => 157,  643 => 156,  628 => 122,  625 => 121,  623 => 120,  620 => 119,  616 => 118,  601 => 107,  599 => 106,  596 => 105,  594 => 104,  591 => 103,  587 => 102,  584 => 85,  582 => 84,  579 => 83,  575 => 82,  569 => 80,  563 => 77,  560 => 76,  557 => 75,  555 => 74,  552 => 73,  549 => 70,  539 => 69,  528 => 66,  518 => 65,  507 => 63,  497 => 62,  481 => 54,  465 => 53,  449 => 52,  440 => 380,  438 => 375,  435 => 374,  433 => 373,  430 => 372,  428 => 69,  425 => 68,  422 => 65,  420 => 62,  415 => 60,  411 => 59,  407 => 58,  403 => 57,  399 => 56,  395 => 55,  391 => 54,  386 => 53,  383 => 52,  373 => 51,  365 => 48,  356 => 46,  351 => 45,  341 => 44,  331 => 41,  326 => 40,  316 => 39,  305 => 35,  295 => 34,  287 => 37,  285 => 34,  279 => 32,  269 => 31,  258 => 28,  248 => 27,  238 => 24,  233 => 23,  223 => 22,  212 => 19,  202 => 18,  185 => 15,  172 => 8,  162 => 7,  153 => 382,  151 => 51,  147 => 49,  145 => 44,  142 => 43,  140 => 39,  137 => 38,  135 => 31,  132 => 30,  130 => 27,  127 => 26,  125 => 22,  122 => 21,  120 => 18,  114 => 16,  109 => 15,  106 => 14,  104 => 7,  97 => 5,  93 => 3,  91 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
                                    {% if content_footer is not empty %}
                                        <section class=\"content-footer\">
                                            {{ content_footer }}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "C:\\Users\\JENGO\\B2_projet\\php_symphonie\\SpyMusic\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_9969bb9ee4e73c2542e342af4f4fcbd1___41080889271 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 122
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 122, $this->source); })()), "@EasyAdmin/layout.html.twig", 122);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 123
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v5 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v5->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings-button", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v5->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings-button", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/layout.html.twig", 22121858011);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 22121858011);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 123, "22121858011")->display($embeddedContext, $embeddedBlocks);
            $_v5->finishEmbedComponent();
        }
        // line 126
        yield "
                    ";
        // line 127
        $_v6 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v6->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v6->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 22265535521);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 22265535521);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 127, "22265535521")->display($embeddedContext, $embeddedBlocks);
            $_v6->finishEmbedComponent();
        }
        // line 155
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  3261 => 155,  3247 => 127,  3244 => 126,  3221 => 123,  3190 => 122,  2743 => 112,  2739 => 111,  2724 => 109,  2693 => 108,  2247 => 116,  2244 => 115,  2221 => 108,  2190 => 107,  1746 => 379,  1737 => 377,  1732 => 376,  1722 => 375,  1706 => 373,  1698 => 360,  1692 => 357,  1689 => 356,  1686 => 355,  1683 => 354,  1673 => 353,  1657 => 350,  1631 => 343,  1621 => 342,  1613 => 338,  1607 => 335,  1604 => 334,  1602 => 2,  1600 => 334,  1597 => 333,  1587 => 332,  1571 => 330,  1563 => 345,  1561 => 342,  1556 => 339,  1554 => 332,  1551 => 331,  1549 => 330,  1545 => 328,  1535 => 327,  1526 => 346,  1524 => 327,  1521 => 326,  1518 => 325,  1508 => 324,  1499 => 361,  1497 => 353,  1493 => 351,  1491 => 350,  1487 => 348,  1485 => 324,  1482 => 323,  1472 => 322,  1461 => 316,  1451 => 315,  1443 => 311,  1428 => 300,  1418 => 299,  1409 => 312,  1407 => 299,  1404 => 298,  1394 => 297,  1386 => 263,  1380 => 262,  1372 => 260,  1369 => 259,  1363 => 258,  1353 => 256,  1350 => 255,  1344 => 254,  1332 => 252,  1329 => 251,  1312 => 249,  1307 => 248,  1304 => 247,  1302 => 246,  1297 => 245,  1294 => 244,  1292 => 243,  1287 => 242,  1284 => 241,  1279 => 240,  1269 => 239,  1259 => 288,  1253 => 285,  1248 => 284,  1245 => 283,  1242 => 282,  1239 => 281,  1236 => 280,  1234 => 279,  1225 => 276,  1223 => 2,  1218 => 276,  1214 => 275,  1209 => 273,  1204 => 270,  1198 => 267,  1195 => 266,  1193 => 265,  1190 => 264,  1187 => 239,  1177 => 238,  1168 => 291,  1166 => 238,  1157 => 237,  1154 => 236,  1151 => 235,  1148 => 234,  1146 => 233,  1143 => 232,  1140 => 231,  1130 => 230,  1121 => 294,  1118 => 293,  1115 => 230,  1113 => 229,  1110 => 228,  1100 => 227,  1092 => 318,  1090 => 315,  1087 => 314,  1085 => 297,  1082 => 296,  1079 => 227,  1069 => 226,  1057 => 363,  1055 => 322,  1050 => 319,  1048 => 226,  1043 => 225,  1041 => 224,  1038 => 223,  1028 => 222,  1017 => 215,  1007 => 214,  996 => 205,  992 => 204,  985 => 203,  975 => 202,  966 => 208,  964 => 202,  961 => 201,  951 => 200,  942 => 210,  940 => 200,  937 => 199,  927 => 198,  919 => 217,  917 => 214,  913 => 212,  911 => 198,  908 => 197,  898 => 196,  887 => 170,  880 => 169,  870 => 168,  860 => 190,  857 => 189,  843 => 175,  839 => 173,  837 => 168,  830 => 164,  827 => 163,  817 => 162,  809 => 368,  807 => 222,  801 => 218,  799 => 196,  793 => 192,  791 => 162,  788 => 161,  778 => 160,  770 => 101,  767 => 100,  753 => 99,  748 => 97,  747 => 2,  745 => 97,  740 => 95,  739 => 2,  738 => 95,  735 => 94,  729 => 92,  726 => 91,  723 => 90,  706 => 89,  700 => 87,  697 => 86,  687 => 85,  676 => 71,  666 => 70,  656 => 369,  654 => 160,  650 => 158,  646 => 157,  643 => 156,  628 => 122,  625 => 121,  623 => 120,  620 => 119,  616 => 118,  601 => 107,  599 => 106,  596 => 105,  594 => 104,  591 => 103,  587 => 102,  584 => 85,  582 => 84,  579 => 83,  575 => 82,  569 => 80,  563 => 77,  560 => 76,  557 => 75,  555 => 74,  552 => 73,  549 => 70,  539 => 69,  528 => 66,  518 => 65,  507 => 63,  497 => 62,  481 => 54,  465 => 53,  449 => 52,  440 => 380,  438 => 375,  435 => 374,  433 => 373,  430 => 372,  428 => 69,  425 => 68,  422 => 65,  420 => 62,  415 => 60,  411 => 59,  407 => 58,  403 => 57,  399 => 56,  395 => 55,  391 => 54,  386 => 53,  383 => 52,  373 => 51,  365 => 48,  356 => 46,  351 => 45,  341 => 44,  331 => 41,  326 => 40,  316 => 39,  305 => 35,  295 => 34,  287 => 37,  285 => 34,  279 => 32,  269 => 31,  258 => 28,  248 => 27,  238 => 24,  233 => 23,  223 => 22,  212 => 19,  202 => 18,  185 => 15,  172 => 8,  162 => 7,  153 => 382,  151 => 51,  147 => 49,  145 => 44,  142 => 43,  140 => 39,  137 => 38,  135 => 31,  132 => 30,  130 => 27,  127 => 26,  125 => 22,  122 => 21,  120 => 18,  114 => 16,  109 => 15,  106 => 14,  104 => 7,  97 => 5,  93 => 3,  91 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
                                    {% if content_footer is not empty %}
                                        <section class=\"content-footer\">
                                            {{ content_footer }}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "C:\\Users\\JENGO\\B2_projet\\php_symphonie\\SpyMusic\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_9969bb9ee4e73c2542e342af4f4fcbd1___22121858011 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 123
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 123, $this->source); })()), "@EasyAdmin/layout.html.twig", 123);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 124
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:gear"]);
        yield "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  3736 => 124,  3705 => 123,  3261 => 155,  3247 => 127,  3244 => 126,  3221 => 123,  3190 => 122,  2743 => 112,  2739 => 111,  2724 => 109,  2693 => 108,  2247 => 116,  2244 => 115,  2221 => 108,  2190 => 107,  1746 => 379,  1737 => 377,  1732 => 376,  1722 => 375,  1706 => 373,  1698 => 360,  1692 => 357,  1689 => 356,  1686 => 355,  1683 => 354,  1673 => 353,  1657 => 350,  1631 => 343,  1621 => 342,  1613 => 338,  1607 => 335,  1604 => 334,  1602 => 2,  1600 => 334,  1597 => 333,  1587 => 332,  1571 => 330,  1563 => 345,  1561 => 342,  1556 => 339,  1554 => 332,  1551 => 331,  1549 => 330,  1545 => 328,  1535 => 327,  1526 => 346,  1524 => 327,  1521 => 326,  1518 => 325,  1508 => 324,  1499 => 361,  1497 => 353,  1493 => 351,  1491 => 350,  1487 => 348,  1485 => 324,  1482 => 323,  1472 => 322,  1461 => 316,  1451 => 315,  1443 => 311,  1428 => 300,  1418 => 299,  1409 => 312,  1407 => 299,  1404 => 298,  1394 => 297,  1386 => 263,  1380 => 262,  1372 => 260,  1369 => 259,  1363 => 258,  1353 => 256,  1350 => 255,  1344 => 254,  1332 => 252,  1329 => 251,  1312 => 249,  1307 => 248,  1304 => 247,  1302 => 246,  1297 => 245,  1294 => 244,  1292 => 243,  1287 => 242,  1284 => 241,  1279 => 240,  1269 => 239,  1259 => 288,  1253 => 285,  1248 => 284,  1245 => 283,  1242 => 282,  1239 => 281,  1236 => 280,  1234 => 279,  1225 => 276,  1223 => 2,  1218 => 276,  1214 => 275,  1209 => 273,  1204 => 270,  1198 => 267,  1195 => 266,  1193 => 265,  1190 => 264,  1187 => 239,  1177 => 238,  1168 => 291,  1166 => 238,  1157 => 237,  1154 => 236,  1151 => 235,  1148 => 234,  1146 => 233,  1143 => 232,  1140 => 231,  1130 => 230,  1121 => 294,  1118 => 293,  1115 => 230,  1113 => 229,  1110 => 228,  1100 => 227,  1092 => 318,  1090 => 315,  1087 => 314,  1085 => 297,  1082 => 296,  1079 => 227,  1069 => 226,  1057 => 363,  1055 => 322,  1050 => 319,  1048 => 226,  1043 => 225,  1041 => 224,  1038 => 223,  1028 => 222,  1017 => 215,  1007 => 214,  996 => 205,  992 => 204,  985 => 203,  975 => 202,  966 => 208,  964 => 202,  961 => 201,  951 => 200,  942 => 210,  940 => 200,  937 => 199,  927 => 198,  919 => 217,  917 => 214,  913 => 212,  911 => 198,  908 => 197,  898 => 196,  887 => 170,  880 => 169,  870 => 168,  860 => 190,  857 => 189,  843 => 175,  839 => 173,  837 => 168,  830 => 164,  827 => 163,  817 => 162,  809 => 368,  807 => 222,  801 => 218,  799 => 196,  793 => 192,  791 => 162,  788 => 161,  778 => 160,  770 => 101,  767 => 100,  753 => 99,  748 => 97,  747 => 2,  745 => 97,  740 => 95,  739 => 2,  738 => 95,  735 => 94,  729 => 92,  726 => 91,  723 => 90,  706 => 89,  700 => 87,  697 => 86,  687 => 85,  676 => 71,  666 => 70,  656 => 369,  654 => 160,  650 => 158,  646 => 157,  643 => 156,  628 => 122,  625 => 121,  623 => 120,  620 => 119,  616 => 118,  601 => 107,  599 => 106,  596 => 105,  594 => 104,  591 => 103,  587 => 102,  584 => 85,  582 => 84,  579 => 83,  575 => 82,  569 => 80,  563 => 77,  560 => 76,  557 => 75,  555 => 74,  552 => 73,  549 => 70,  539 => 69,  528 => 66,  518 => 65,  507 => 63,  497 => 62,  481 => 54,  465 => 53,  449 => 52,  440 => 380,  438 => 375,  435 => 374,  433 => 373,  430 => 372,  428 => 69,  425 => 68,  422 => 65,  420 => 62,  415 => 60,  411 => 59,  407 => 58,  403 => 57,  399 => 56,  395 => 55,  391 => 54,  386 => 53,  383 => 52,  373 => 51,  365 => 48,  356 => 46,  351 => 45,  341 => 44,  331 => 41,  326 => 40,  316 => 39,  305 => 35,  295 => 34,  287 => 37,  285 => 34,  279 => 32,  269 => 31,  258 => 28,  248 => 27,  238 => 24,  233 => 23,  223 => 22,  212 => 19,  202 => 18,  185 => 15,  172 => 8,  162 => 7,  153 => 382,  151 => 51,  147 => 49,  145 => 44,  142 => 43,  140 => 39,  137 => 38,  135 => 31,  132 => 30,  130 => 27,  127 => 26,  125 => 22,  122 => 21,  120 => 18,  114 => 16,  109 => 15,  106 => 14,  104 => 7,  97 => 5,  93 => 3,  91 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
                                    {% if content_footer is not empty %}
                                        <section class=\"content-footer\">
                                            {{ content_footer }}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "C:\\Users\\JENGO\\B2_projet\\php_symphonie\\SpyMusic\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_9969bb9ee4e73c2542e342af4f4fcbd1___22265535521 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 127
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 127, $this->source); })()), "@EasyAdmin/layout.html.twig", 127);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v7 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v7->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v7->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 3361749131);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 3361749131);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 128, "3361749131")->display($embeddedContext, $embeddedBlocks);
            $_v7->finishEmbedComponent();
        }
        // line 154
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  4245 => 154,  4222 => 128,  4191 => 127,  3736 => 124,  3705 => 123,  3261 => 155,  3247 => 127,  3244 => 126,  3221 => 123,  3190 => 122,  2743 => 112,  2739 => 111,  2724 => 109,  2693 => 108,  2247 => 116,  2244 => 115,  2221 => 108,  2190 => 107,  1746 => 379,  1737 => 377,  1732 => 376,  1722 => 375,  1706 => 373,  1698 => 360,  1692 => 357,  1689 => 356,  1686 => 355,  1683 => 354,  1673 => 353,  1657 => 350,  1631 => 343,  1621 => 342,  1613 => 338,  1607 => 335,  1604 => 334,  1602 => 2,  1600 => 334,  1597 => 333,  1587 => 332,  1571 => 330,  1563 => 345,  1561 => 342,  1556 => 339,  1554 => 332,  1551 => 331,  1549 => 330,  1545 => 328,  1535 => 327,  1526 => 346,  1524 => 327,  1521 => 326,  1518 => 325,  1508 => 324,  1499 => 361,  1497 => 353,  1493 => 351,  1491 => 350,  1487 => 348,  1485 => 324,  1482 => 323,  1472 => 322,  1461 => 316,  1451 => 315,  1443 => 311,  1428 => 300,  1418 => 299,  1409 => 312,  1407 => 299,  1404 => 298,  1394 => 297,  1386 => 263,  1380 => 262,  1372 => 260,  1369 => 259,  1363 => 258,  1353 => 256,  1350 => 255,  1344 => 254,  1332 => 252,  1329 => 251,  1312 => 249,  1307 => 248,  1304 => 247,  1302 => 246,  1297 => 245,  1294 => 244,  1292 => 243,  1287 => 242,  1284 => 241,  1279 => 240,  1269 => 239,  1259 => 288,  1253 => 285,  1248 => 284,  1245 => 283,  1242 => 282,  1239 => 281,  1236 => 280,  1234 => 279,  1225 => 276,  1223 => 2,  1218 => 276,  1214 => 275,  1209 => 273,  1204 => 270,  1198 => 267,  1195 => 266,  1193 => 265,  1190 => 264,  1187 => 239,  1177 => 238,  1168 => 291,  1166 => 238,  1157 => 237,  1154 => 236,  1151 => 235,  1148 => 234,  1146 => 233,  1143 => 232,  1140 => 231,  1130 => 230,  1121 => 294,  1118 => 293,  1115 => 230,  1113 => 229,  1110 => 228,  1100 => 227,  1092 => 318,  1090 => 315,  1087 => 314,  1085 => 297,  1082 => 296,  1079 => 227,  1069 => 226,  1057 => 363,  1055 => 322,  1050 => 319,  1048 => 226,  1043 => 225,  1041 => 224,  1038 => 223,  1028 => 222,  1017 => 215,  1007 => 214,  996 => 205,  992 => 204,  985 => 203,  975 => 202,  966 => 208,  964 => 202,  961 => 201,  951 => 200,  942 => 210,  940 => 200,  937 => 199,  927 => 198,  919 => 217,  917 => 214,  913 => 212,  911 => 198,  908 => 197,  898 => 196,  887 => 170,  880 => 169,  870 => 168,  860 => 190,  857 => 189,  843 => 175,  839 => 173,  837 => 168,  830 => 164,  827 => 163,  817 => 162,  809 => 368,  807 => 222,  801 => 218,  799 => 196,  793 => 192,  791 => 162,  788 => 161,  778 => 160,  770 => 101,  767 => 100,  753 => 99,  748 => 97,  747 => 2,  745 => 97,  740 => 95,  739 => 2,  738 => 95,  735 => 94,  729 => 92,  726 => 91,  723 => 90,  706 => 89,  700 => 87,  697 => 86,  687 => 85,  676 => 71,  666 => 70,  656 => 369,  654 => 160,  650 => 158,  646 => 157,  643 => 156,  628 => 122,  625 => 121,  623 => 120,  620 => 119,  616 => 118,  601 => 107,  599 => 106,  596 => 105,  594 => 104,  591 => 103,  587 => 102,  584 => 85,  582 => 84,  579 => 83,  575 => 82,  569 => 80,  563 => 77,  560 => 76,  557 => 75,  555 => 74,  552 => 73,  549 => 70,  539 => 69,  528 => 66,  518 => 65,  507 => 63,  497 => 62,  481 => 54,  465 => 53,  449 => 52,  440 => 380,  438 => 375,  435 => 374,  433 => 373,  430 => 372,  428 => 69,  425 => 68,  422 => 65,  420 => 62,  415 => 60,  411 => 59,  407 => 58,  403 => 57,  399 => 56,  395 => 55,  391 => 54,  386 => 53,  383 => 52,  373 => 51,  365 => 48,  356 => 46,  351 => 45,  341 => 44,  331 => 41,  326 => 40,  316 => 39,  305 => 35,  295 => 34,  287 => 37,  285 => 34,  279 => 32,  269 => 31,  258 => 28,  248 => 27,  238 => 24,  233 => 23,  223 => 22,  212 => 19,  202 => 18,  185 => 15,  172 => 8,  162 => 7,  153 => 382,  151 => 51,  147 => 49,  145 => 44,  142 => 43,  140 => 39,  137 => 38,  135 => 31,  132 => 30,  130 => 27,  127 => 26,  125 => 22,  122 => 21,  120 => 18,  114 => 16,  109 => 15,  106 => 14,  104 => 7,  97 => 5,  93 => 3,  91 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
                                    {% if content_footer is not empty %}
                                        <section class=\"content-footer\">
                                            {{ content_footer }}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "C:\\Users\\JENGO\\B2_projet\\php_symphonie\\SpyMusic\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_9969bb9ee4e73c2542e342af4f4fcbd1___3361749131 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 128
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 128, $this->source); })()), "@EasyAdmin/layout.html.twig", 128);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 129, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 129)) {
            // line 130
            yield "                                ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Header", ["class" => "dropdown-locales-label", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.locale", [], "EasyAdminBundle")]);
            yield "
                            ";
        }
        // line 132
        yield "
                            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 133, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 133));
        foreach ($context['_seq'] as $context["_key"] => $context["localeDto"]) {
            // line 134
            yield "                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 134, $this->source); })()), "usePrettyUrls", [], "any", false, false, false, 134)) {
                // line 135
                yield "                                    ";
                $context["url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["_locale", CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 135)], "method", false, false, false, 135), "set", ["entityId", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "request", [], "any", false, false, false, 135), "attributes", [], "any", false, false, false, 135), "get", ["entityId"], "method", false, false, false, 135)], "method", false, false, false, 135);
                // line 136
                yield "                                ";
            } else {
                // line 137
                yield "                                    ";
                $context["url"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["_locale", CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 137)], "method", false, false, false, 137);
                // line 138
                yield "                                ";
            }
            // line 139
            yield "                                ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "request", [], "any", false, false, false, 139), "locale", [], "any", false, false, false, 139) == CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 139))) ? ("active") : ("")), "url" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 139, $this->source); })()), "generateUrl", [], "method", false, false, false, 139), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 139), "label" => CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "name", [], "any", false, false, false, 139)]);
            yield "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['localeDto'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "
                            ";
        // line 142
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 142, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 142)) {
            // line 143
            yield "                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 143, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 143)) {
                // line 144
                yield "                                    ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
                yield "
                                ";
            }
            // line 146
            yield "
                                ";
            // line 147
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Header", ["class" => "dropdown-appearance-label", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.label", [], "EasyAdminBundle")]);
            yield "

                                ";
            // line 149
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => "dropdown-appearance-item", "url" => "#", "icon" => "internal:sun", "data-ea-color-scheme" => "light", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.light", [], "EasyAdminBundle")]);
            yield "
                                ";
            // line 150
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => "dropdown-appearance-item", "url" => "#", "icon" => "internal:moon", "data-ea-color-scheme" => "dark", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.dark", [], "EasyAdminBundle")]);
            yield "
                                ";
            // line 151
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => "dropdown-appearance-item active", "url" => "#", "icon" => "internal:desktop", "data-ea-color-scheme" => "auto", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.auto", [], "EasyAdminBundle")]);
            yield "
                            ";
        }
        // line 153
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  4803 => 153,  4798 => 151,  4794 => 150,  4790 => 149,  4785 => 147,  4782 => 146,  4776 => 144,  4773 => 143,  4771 => 142,  4768 => 141,  4759 => 139,  4756 => 138,  4753 => 137,  4750 => 136,  4747 => 135,  4744 => 134,  4740 => 133,  4737 => 132,  4731 => 130,  4720 => 129,  4689 => 128,  4245 => 154,  4222 => 128,  4191 => 127,  3736 => 124,  3705 => 123,  3261 => 155,  3247 => 127,  3244 => 126,  3221 => 123,  3190 => 122,  2743 => 112,  2739 => 111,  2724 => 109,  2693 => 108,  2247 => 116,  2244 => 115,  2221 => 108,  2190 => 107,  1746 => 379,  1737 => 377,  1732 => 376,  1722 => 375,  1706 => 373,  1698 => 360,  1692 => 357,  1689 => 356,  1686 => 355,  1683 => 354,  1673 => 353,  1657 => 350,  1631 => 343,  1621 => 342,  1613 => 338,  1607 => 335,  1604 => 334,  1602 => 2,  1600 => 334,  1597 => 333,  1587 => 332,  1571 => 330,  1563 => 345,  1561 => 342,  1556 => 339,  1554 => 332,  1551 => 331,  1549 => 330,  1545 => 328,  1535 => 327,  1526 => 346,  1524 => 327,  1521 => 326,  1518 => 325,  1508 => 324,  1499 => 361,  1497 => 353,  1493 => 351,  1491 => 350,  1487 => 348,  1485 => 324,  1482 => 323,  1472 => 322,  1461 => 316,  1451 => 315,  1443 => 311,  1428 => 300,  1418 => 299,  1409 => 312,  1407 => 299,  1404 => 298,  1394 => 297,  1386 => 263,  1380 => 262,  1372 => 260,  1369 => 259,  1363 => 258,  1353 => 256,  1350 => 255,  1344 => 254,  1332 => 252,  1329 => 251,  1312 => 249,  1307 => 248,  1304 => 247,  1302 => 246,  1297 => 245,  1294 => 244,  1292 => 243,  1287 => 242,  1284 => 241,  1279 => 240,  1269 => 239,  1259 => 288,  1253 => 285,  1248 => 284,  1245 => 283,  1242 => 282,  1239 => 281,  1236 => 280,  1234 => 279,  1225 => 276,  1223 => 2,  1218 => 276,  1214 => 275,  1209 => 273,  1204 => 270,  1198 => 267,  1195 => 266,  1193 => 265,  1190 => 264,  1187 => 239,  1177 => 238,  1168 => 291,  1166 => 238,  1157 => 237,  1154 => 236,  1151 => 235,  1148 => 234,  1146 => 233,  1143 => 232,  1140 => 231,  1130 => 230,  1121 => 294,  1118 => 293,  1115 => 230,  1113 => 229,  1110 => 228,  1100 => 227,  1092 => 318,  1090 => 315,  1087 => 314,  1085 => 297,  1082 => 296,  1079 => 227,  1069 => 226,  1057 => 363,  1055 => 322,  1050 => 319,  1048 => 226,  1043 => 225,  1041 => 224,  1038 => 223,  1028 => 222,  1017 => 215,  1007 => 214,  996 => 205,  992 => 204,  985 => 203,  975 => 202,  966 => 208,  964 => 202,  961 => 201,  951 => 200,  942 => 210,  940 => 200,  937 => 199,  927 => 198,  919 => 217,  917 => 214,  913 => 212,  911 => 198,  908 => 197,  898 => 196,  887 => 170,  880 => 169,  870 => 168,  860 => 190,  857 => 189,  843 => 175,  839 => 173,  837 => 168,  830 => 164,  827 => 163,  817 => 162,  809 => 368,  807 => 222,  801 => 218,  799 => 196,  793 => 192,  791 => 162,  788 => 161,  778 => 160,  770 => 101,  767 => 100,  753 => 99,  748 => 97,  747 => 2,  745 => 97,  740 => 95,  739 => 2,  738 => 95,  735 => 94,  729 => 92,  726 => 91,  723 => 90,  706 => 89,  700 => 87,  697 => 86,  687 => 85,  676 => 71,  666 => 70,  656 => 369,  654 => 160,  650 => 158,  646 => 157,  643 => 156,  628 => 122,  625 => 121,  623 => 120,  620 => 119,  616 => 118,  601 => 107,  599 => 106,  596 => 105,  594 => 104,  591 => 103,  587 => 102,  584 => 85,  582 => 84,  579 => 83,  575 => 82,  569 => 80,  563 => 77,  560 => 76,  557 => 75,  555 => 74,  552 => 73,  549 => 70,  539 => 69,  528 => 66,  518 => 65,  507 => 63,  497 => 62,  481 => 54,  465 => 53,  449 => 52,  440 => 380,  438 => 375,  435 => 374,  433 => 373,  430 => 372,  428 => 69,  425 => 68,  422 => 65,  420 => 62,  415 => 60,  411 => 59,  407 => 58,  403 => 57,  399 => 56,  395 => 55,  391 => 54,  386 => 53,  383 => 52,  373 => 51,  365 => 48,  356 => 46,  351 => 45,  341 => 44,  331 => 41,  326 => 40,  316 => 39,  305 => 35,  295 => 34,  287 => 37,  285 => 34,  279 => 32,  269 => 31,  258 => 28,  248 => 27,  238 => 24,  233 => 23,  223 => 22,  212 => 19,  202 => 18,  185 => 15,  172 => 8,  162 => 7,  153 => 382,  151 => 51,  147 => 49,  145 => 44,  142 => 43,  140 => 39,  137 => 38,  135 => 31,  132 => 30,  130 => 27,  127 => 26,  125 => 22,  122 => 21,  120 => 18,  114 => 16,  109 => 15,  106 => 14,  104 => 7,  97 => 5,  93 => 3,  91 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
                                    {% if content_footer is not empty %}
                                        <section class=\"content-footer\">
                                            {{ content_footer }}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "C:\\Users\\JENGO\\B2_projet\\php_symphonie\\SpyMusic\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_9969bb9ee4e73c2542e342af4f4fcbd1___3994479931 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 175
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 175, $this->source); })()), "@EasyAdmin/layout.html.twig", 175);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 176
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v8 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v8->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v8->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/layout.html.twig", 23953587231);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 23953587231);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 176, "23953587231")->display($embeddedContext, $embeddedBlocks);
            $_v8->finishEmbedComponent();
        }
        // line 185
        yield "                            ";
        $_v9 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v9->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v9->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 24216236701);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 24216236701);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 185, "24216236701")->display($embeddedContext, $embeddedBlocks);
            $_v9->finishEmbedComponent();
        }
        // line 188
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  5316 => 188,  5301 => 185,  5278 => 176,  5247 => 175,  4803 => 153,  4798 => 151,  4794 => 150,  4790 => 149,  4785 => 147,  4782 => 146,  4776 => 144,  4773 => 143,  4771 => 142,  4768 => 141,  4759 => 139,  4756 => 138,  4753 => 137,  4750 => 136,  4747 => 135,  4744 => 134,  4740 => 133,  4737 => 132,  4731 => 130,  4720 => 129,  4689 => 128,  4245 => 154,  4222 => 128,  4191 => 127,  3736 => 124,  3705 => 123,  3261 => 155,  3247 => 127,  3244 => 126,  3221 => 123,  3190 => 122,  2743 => 112,  2739 => 111,  2724 => 109,  2693 => 108,  2247 => 116,  2244 => 115,  2221 => 108,  2190 => 107,  1746 => 379,  1737 => 377,  1732 => 376,  1722 => 375,  1706 => 373,  1698 => 360,  1692 => 357,  1689 => 356,  1686 => 355,  1683 => 354,  1673 => 353,  1657 => 350,  1631 => 343,  1621 => 342,  1613 => 338,  1607 => 335,  1604 => 334,  1602 => 2,  1600 => 334,  1597 => 333,  1587 => 332,  1571 => 330,  1563 => 345,  1561 => 342,  1556 => 339,  1554 => 332,  1551 => 331,  1549 => 330,  1545 => 328,  1535 => 327,  1526 => 346,  1524 => 327,  1521 => 326,  1518 => 325,  1508 => 324,  1499 => 361,  1497 => 353,  1493 => 351,  1491 => 350,  1487 => 348,  1485 => 324,  1482 => 323,  1472 => 322,  1461 => 316,  1451 => 315,  1443 => 311,  1428 => 300,  1418 => 299,  1409 => 312,  1407 => 299,  1404 => 298,  1394 => 297,  1386 => 263,  1380 => 262,  1372 => 260,  1369 => 259,  1363 => 258,  1353 => 256,  1350 => 255,  1344 => 254,  1332 => 252,  1329 => 251,  1312 => 249,  1307 => 248,  1304 => 247,  1302 => 246,  1297 => 245,  1294 => 244,  1292 => 243,  1287 => 242,  1284 => 241,  1279 => 240,  1269 => 239,  1259 => 288,  1253 => 285,  1248 => 284,  1245 => 283,  1242 => 282,  1239 => 281,  1236 => 280,  1234 => 279,  1225 => 276,  1223 => 2,  1218 => 276,  1214 => 275,  1209 => 273,  1204 => 270,  1198 => 267,  1195 => 266,  1193 => 265,  1190 => 264,  1187 => 239,  1177 => 238,  1168 => 291,  1166 => 238,  1157 => 237,  1154 => 236,  1151 => 235,  1148 => 234,  1146 => 233,  1143 => 232,  1140 => 231,  1130 => 230,  1121 => 294,  1118 => 293,  1115 => 230,  1113 => 229,  1110 => 228,  1100 => 227,  1092 => 318,  1090 => 315,  1087 => 314,  1085 => 297,  1082 => 296,  1079 => 227,  1069 => 226,  1057 => 363,  1055 => 322,  1050 => 319,  1048 => 226,  1043 => 225,  1041 => 224,  1038 => 223,  1028 => 222,  1017 => 215,  1007 => 214,  996 => 205,  992 => 204,  985 => 203,  975 => 202,  966 => 208,  964 => 202,  961 => 201,  951 => 200,  942 => 210,  940 => 200,  937 => 199,  927 => 198,  919 => 217,  917 => 214,  913 => 212,  911 => 198,  908 => 197,  898 => 196,  887 => 170,  880 => 169,  870 => 168,  860 => 190,  857 => 189,  843 => 175,  839 => 173,  837 => 168,  830 => 164,  827 => 163,  817 => 162,  809 => 368,  807 => 222,  801 => 218,  799 => 196,  793 => 192,  791 => 162,  788 => 161,  778 => 160,  770 => 101,  767 => 100,  753 => 99,  748 => 97,  747 => 2,  745 => 97,  740 => 95,  739 => 2,  738 => 95,  735 => 94,  729 => 92,  726 => 91,  723 => 90,  706 => 89,  700 => 87,  697 => 86,  687 => 85,  676 => 71,  666 => 70,  656 => 369,  654 => 160,  650 => 158,  646 => 157,  643 => 156,  628 => 122,  625 => 121,  623 => 120,  620 => 119,  616 => 118,  601 => 107,  599 => 106,  596 => 105,  594 => 104,  591 => 103,  587 => 102,  584 => 85,  582 => 84,  579 => 83,  575 => 82,  569 => 80,  563 => 77,  560 => 76,  557 => 75,  555 => 74,  552 => 73,  549 => 70,  539 => 69,  528 => 66,  518 => 65,  507 => 63,  497 => 62,  481 => 54,  465 => 53,  449 => 52,  440 => 380,  438 => 375,  435 => 374,  433 => 373,  430 => 372,  428 => 69,  425 => 68,  422 => 65,  420 => 62,  415 => 60,  411 => 59,  407 => 58,  403 => 57,  399 => 56,  395 => 55,  391 => 54,  386 => 53,  383 => 52,  373 => 51,  365 => 48,  356 => 46,  351 => 45,  341 => 44,  331 => 41,  326 => 40,  316 => 39,  305 => 35,  295 => 34,  287 => 37,  285 => 34,  279 => 32,  269 => 31,  258 => 28,  248 => 27,  238 => 24,  233 => 23,  223 => 22,  212 => 19,  202 => 18,  185 => 15,  172 => 8,  162 => 7,  153 => 382,  151 => 51,  147 => 49,  145 => 44,  142 => 43,  140 => 39,  137 => 38,  135 => 31,  132 => 30,  130 => 27,  127 => 26,  125 => 22,  122 => 21,  120 => 18,  114 => 16,  109 => 15,  106 => 14,  104 => 7,  97 => 5,  93 => 3,  91 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
                                    {% if content_footer is not empty %}
                                        <section class=\"content-footer\">
                                            {{ content_footer }}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "C:\\Users\\JENGO\\B2_projet\\php_symphonie\\SpyMusic\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_9969bb9ee4e73c2542e342af4f4fcbd1___23953587231 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 176
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 176, $this->source); })()), "@EasyAdmin/layout.html.twig", 176);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 179, $this->source); })()), "userMenu", [], "any", false, false, false, 179), "avatarDisplayed", [], "any", false, false, false, 179)) {
            // line 180
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 180, $this->source); })()), "html", null, true);
            yield "
                                ";
        } else {
            // line 182
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["class" => "user-avatar", "name" => (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 182, $this->source); })()), "user", [], "any", false, false, false, 182))) ? ("internal:user") : ("internal:user-xmark"))]);
            yield "
                                ";
        }
        // line 184
        yield "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  5814 => 184,  5808 => 182,  5802 => 180,  5791 => 179,  5760 => 176,  5316 => 188,  5301 => 185,  5278 => 176,  5247 => 175,  4803 => 153,  4798 => 151,  4794 => 150,  4790 => 149,  4785 => 147,  4782 => 146,  4776 => 144,  4773 => 143,  4771 => 142,  4768 => 141,  4759 => 139,  4756 => 138,  4753 => 137,  4750 => 136,  4747 => 135,  4744 => 134,  4740 => 133,  4737 => 132,  4731 => 130,  4720 => 129,  4689 => 128,  4245 => 154,  4222 => 128,  4191 => 127,  3736 => 124,  3705 => 123,  3261 => 155,  3247 => 127,  3244 => 126,  3221 => 123,  3190 => 122,  2743 => 112,  2739 => 111,  2724 => 109,  2693 => 108,  2247 => 116,  2244 => 115,  2221 => 108,  2190 => 107,  1746 => 379,  1737 => 377,  1732 => 376,  1722 => 375,  1706 => 373,  1698 => 360,  1692 => 357,  1689 => 356,  1686 => 355,  1683 => 354,  1673 => 353,  1657 => 350,  1631 => 343,  1621 => 342,  1613 => 338,  1607 => 335,  1604 => 334,  1602 => 2,  1600 => 334,  1597 => 333,  1587 => 332,  1571 => 330,  1563 => 345,  1561 => 342,  1556 => 339,  1554 => 332,  1551 => 331,  1549 => 330,  1545 => 328,  1535 => 327,  1526 => 346,  1524 => 327,  1521 => 326,  1518 => 325,  1508 => 324,  1499 => 361,  1497 => 353,  1493 => 351,  1491 => 350,  1487 => 348,  1485 => 324,  1482 => 323,  1472 => 322,  1461 => 316,  1451 => 315,  1443 => 311,  1428 => 300,  1418 => 299,  1409 => 312,  1407 => 299,  1404 => 298,  1394 => 297,  1386 => 263,  1380 => 262,  1372 => 260,  1369 => 259,  1363 => 258,  1353 => 256,  1350 => 255,  1344 => 254,  1332 => 252,  1329 => 251,  1312 => 249,  1307 => 248,  1304 => 247,  1302 => 246,  1297 => 245,  1294 => 244,  1292 => 243,  1287 => 242,  1284 => 241,  1279 => 240,  1269 => 239,  1259 => 288,  1253 => 285,  1248 => 284,  1245 => 283,  1242 => 282,  1239 => 281,  1236 => 280,  1234 => 279,  1225 => 276,  1223 => 2,  1218 => 276,  1214 => 275,  1209 => 273,  1204 => 270,  1198 => 267,  1195 => 266,  1193 => 265,  1190 => 264,  1187 => 239,  1177 => 238,  1168 => 291,  1166 => 238,  1157 => 237,  1154 => 236,  1151 => 235,  1148 => 234,  1146 => 233,  1143 => 232,  1140 => 231,  1130 => 230,  1121 => 294,  1118 => 293,  1115 => 230,  1113 => 229,  1110 => 228,  1100 => 227,  1092 => 318,  1090 => 315,  1087 => 314,  1085 => 297,  1082 => 296,  1079 => 227,  1069 => 226,  1057 => 363,  1055 => 322,  1050 => 319,  1048 => 226,  1043 => 225,  1041 => 224,  1038 => 223,  1028 => 222,  1017 => 215,  1007 => 214,  996 => 205,  992 => 204,  985 => 203,  975 => 202,  966 => 208,  964 => 202,  961 => 201,  951 => 200,  942 => 210,  940 => 200,  937 => 199,  927 => 198,  919 => 217,  917 => 214,  913 => 212,  911 => 198,  908 => 197,  898 => 196,  887 => 170,  880 => 169,  870 => 168,  860 => 190,  857 => 189,  843 => 175,  839 => 173,  837 => 168,  830 => 164,  827 => 163,  817 => 162,  809 => 368,  807 => 222,  801 => 218,  799 => 196,  793 => 192,  791 => 162,  788 => 161,  778 => 160,  770 => 101,  767 => 100,  753 => 99,  748 => 97,  747 => 2,  745 => 97,  740 => 95,  739 => 2,  738 => 95,  735 => 94,  729 => 92,  726 => 91,  723 => 90,  706 => 89,  700 => 87,  697 => 86,  687 => 85,  676 => 71,  666 => 70,  656 => 369,  654 => 160,  650 => 158,  646 => 157,  643 => 156,  628 => 122,  625 => 121,  623 => 120,  620 => 119,  616 => 118,  601 => 107,  599 => 106,  596 => 105,  594 => 104,  591 => 103,  587 => 102,  584 => 85,  582 => 84,  579 => 83,  575 => 82,  569 => 80,  563 => 77,  560 => 76,  557 => 75,  555 => 74,  552 => 73,  549 => 70,  539 => 69,  528 => 66,  518 => 65,  507 => 63,  497 => 62,  481 => 54,  465 => 53,  449 => 52,  440 => 380,  438 => 375,  435 => 374,  433 => 373,  430 => 372,  428 => 69,  425 => 68,  422 => 65,  420 => 62,  415 => 60,  411 => 59,  407 => 58,  403 => 57,  399 => 56,  395 => 55,  391 => 54,  386 => 53,  383 => 52,  373 => 51,  365 => 48,  356 => 46,  351 => 45,  341 => 44,  331 => 41,  326 => 40,  316 => 39,  305 => 35,  295 => 34,  287 => 37,  285 => 34,  279 => 32,  269 => 31,  258 => 28,  248 => 27,  238 => 24,  233 => 23,  223 => 22,  212 => 19,  202 => 18,  185 => 15,  172 => 8,  162 => 7,  153 => 382,  151 => 51,  147 => 49,  145 => 44,  142 => 43,  140 => 39,  137 => 38,  135 => 31,  132 => 30,  130 => 27,  127 => 26,  125 => 22,  122 => 21,  120 => 18,  114 => 16,  109 => 15,  106 => 14,  104 => 7,  97 => 5,  93 => 3,  91 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
                                    {% if content_footer is not empty %}
                                        <section class=\"content-footer\">
                                            {{ content_footer }}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "C:\\Users\\JENGO\\B2_projet\\php_symphonie\\SpyMusic\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_9969bb9ee4e73c2542e342af4f4fcbd1___24216236701 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 185
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 185, $this->source); })()), "@EasyAdmin/layout.html.twig", 185);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 186
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu_dropdown"]) || array_key_exists("user_menu_dropdown", $context) ? $context["user_menu_dropdown"] : (function () { throw new RuntimeError('Variable "user_menu_dropdown" does not exist.', 186, $this->source); })()), "html", null, true);
        yield "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  6289 => 186,  6258 => 185,  5814 => 184,  5808 => 182,  5802 => 180,  5791 => 179,  5760 => 176,  5316 => 188,  5301 => 185,  5278 => 176,  5247 => 175,  4803 => 153,  4798 => 151,  4794 => 150,  4790 => 149,  4785 => 147,  4782 => 146,  4776 => 144,  4773 => 143,  4771 => 142,  4768 => 141,  4759 => 139,  4756 => 138,  4753 => 137,  4750 => 136,  4747 => 135,  4744 => 134,  4740 => 133,  4737 => 132,  4731 => 130,  4720 => 129,  4689 => 128,  4245 => 154,  4222 => 128,  4191 => 127,  3736 => 124,  3705 => 123,  3261 => 155,  3247 => 127,  3244 => 126,  3221 => 123,  3190 => 122,  2743 => 112,  2739 => 111,  2724 => 109,  2693 => 108,  2247 => 116,  2244 => 115,  2221 => 108,  2190 => 107,  1746 => 379,  1737 => 377,  1732 => 376,  1722 => 375,  1706 => 373,  1698 => 360,  1692 => 357,  1689 => 356,  1686 => 355,  1683 => 354,  1673 => 353,  1657 => 350,  1631 => 343,  1621 => 342,  1613 => 338,  1607 => 335,  1604 => 334,  1602 => 2,  1600 => 334,  1597 => 333,  1587 => 332,  1571 => 330,  1563 => 345,  1561 => 342,  1556 => 339,  1554 => 332,  1551 => 331,  1549 => 330,  1545 => 328,  1535 => 327,  1526 => 346,  1524 => 327,  1521 => 326,  1518 => 325,  1508 => 324,  1499 => 361,  1497 => 353,  1493 => 351,  1491 => 350,  1487 => 348,  1485 => 324,  1482 => 323,  1472 => 322,  1461 => 316,  1451 => 315,  1443 => 311,  1428 => 300,  1418 => 299,  1409 => 312,  1407 => 299,  1404 => 298,  1394 => 297,  1386 => 263,  1380 => 262,  1372 => 260,  1369 => 259,  1363 => 258,  1353 => 256,  1350 => 255,  1344 => 254,  1332 => 252,  1329 => 251,  1312 => 249,  1307 => 248,  1304 => 247,  1302 => 246,  1297 => 245,  1294 => 244,  1292 => 243,  1287 => 242,  1284 => 241,  1279 => 240,  1269 => 239,  1259 => 288,  1253 => 285,  1248 => 284,  1245 => 283,  1242 => 282,  1239 => 281,  1236 => 280,  1234 => 279,  1225 => 276,  1223 => 2,  1218 => 276,  1214 => 275,  1209 => 273,  1204 => 270,  1198 => 267,  1195 => 266,  1193 => 265,  1190 => 264,  1187 => 239,  1177 => 238,  1168 => 291,  1166 => 238,  1157 => 237,  1154 => 236,  1151 => 235,  1148 => 234,  1146 => 233,  1143 => 232,  1140 => 231,  1130 => 230,  1121 => 294,  1118 => 293,  1115 => 230,  1113 => 229,  1110 => 228,  1100 => 227,  1092 => 318,  1090 => 315,  1087 => 314,  1085 => 297,  1082 => 296,  1079 => 227,  1069 => 226,  1057 => 363,  1055 => 322,  1050 => 319,  1048 => 226,  1043 => 225,  1041 => 224,  1038 => 223,  1028 => 222,  1017 => 215,  1007 => 214,  996 => 205,  992 => 204,  985 => 203,  975 => 202,  966 => 208,  964 => 202,  961 => 201,  951 => 200,  942 => 210,  940 => 200,  937 => 199,  927 => 198,  919 => 217,  917 => 214,  913 => 212,  911 => 198,  908 => 197,  898 => 196,  887 => 170,  880 => 169,  870 => 168,  860 => 190,  857 => 189,  843 => 175,  839 => 173,  837 => 168,  830 => 164,  827 => 163,  817 => 162,  809 => 368,  807 => 222,  801 => 218,  799 => 196,  793 => 192,  791 => 162,  788 => 161,  778 => 160,  770 => 101,  767 => 100,  753 => 99,  748 => 97,  747 => 2,  745 => 97,  740 => 95,  739 => 2,  738 => 95,  735 => 94,  729 => 92,  726 => 91,  723 => 90,  706 => 89,  700 => 87,  697 => 86,  687 => 85,  676 => 71,  666 => 70,  656 => 369,  654 => 160,  650 => 158,  646 => 157,  643 => 156,  628 => 122,  625 => 121,  623 => 120,  620 => 119,  616 => 118,  601 => 107,  599 => 106,  596 => 105,  594 => 104,  591 => 103,  587 => 102,  584 => 85,  582 => 84,  579 => 83,  575 => 82,  569 => 80,  563 => 77,  560 => 76,  557 => 75,  555 => 74,  552 => 73,  549 => 70,  539 => 69,  528 => 66,  518 => 65,  507 => 63,  497 => 62,  481 => 54,  465 => 53,  449 => 52,  440 => 380,  438 => 375,  435 => 374,  433 => 373,  430 => 372,  428 => 69,  425 => 68,  422 => 65,  420 => 62,  415 => 60,  411 => 59,  407 => 58,  403 => 57,  399 => 56,  395 => 55,  391 => 54,  386 => 53,  383 => 52,  373 => 51,  365 => 48,  356 => 46,  351 => 45,  341 => 44,  331 => 41,  326 => 40,  316 => 39,  305 => 35,  295 => 34,  287 => 37,  285 => 34,  279 => 32,  269 => 31,  258 => 28,  248 => 27,  238 => 24,  233 => 23,  223 => 22,  212 => 19,  202 => 18,  185 => 15,  172 => 8,  162 => 7,  153 => 382,  151 => 51,  147 => 49,  145 => 44,  142 => 43,  140 => 39,  137 => 38,  135 => 31,  132 => 30,  130 => 27,  127 => 26,  125 => 22,  122 => 21,  120 => 18,  114 => 16,  109 => 15,  106 => 14,  104 => 7,  97 => 5,  93 => 3,  91 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
                                    {% if content_footer is not empty %}
                                        <section class=\"content-footer\">
                                            {{ content_footer }}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "C:\\Users\\JENGO\\B2_projet\\php_symphonie\\SpyMusic\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_9969bb9ee4e73c2542e342af4f4fcbd1___7277531191 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 300
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 300, $this->source); })()), "@EasyAdmin/layout.html.twig", 300);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 301
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v10 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v10->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v10->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/layout.html.twig", 15502912091);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 15502912091);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 301, "15502912091")->display($embeddedContext, $embeddedBlocks);
            $_v10->finishEmbedComponent();
        }
        // line 307
        yield "                                        ";
        $_v11 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v11->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v11->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 30369516121);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 30369516121);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 307, "30369516121")->display($embeddedContext, $embeddedBlocks);
            $_v11->finishEmbedComponent();
        }
        // line 310
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  6813 => 310,  6798 => 307,  6775 => 301,  6744 => 300,  6289 => 186,  6258 => 185,  5814 => 184,  5808 => 182,  5802 => 180,  5791 => 179,  5760 => 176,  5316 => 188,  5301 => 185,  5278 => 176,  5247 => 175,  4803 => 153,  4798 => 151,  4794 => 150,  4790 => 149,  4785 => 147,  4782 => 146,  4776 => 144,  4773 => 143,  4771 => 142,  4768 => 141,  4759 => 139,  4756 => 138,  4753 => 137,  4750 => 136,  4747 => 135,  4744 => 134,  4740 => 133,  4737 => 132,  4731 => 130,  4720 => 129,  4689 => 128,  4245 => 154,  4222 => 128,  4191 => 127,  3736 => 124,  3705 => 123,  3261 => 155,  3247 => 127,  3244 => 126,  3221 => 123,  3190 => 122,  2743 => 112,  2739 => 111,  2724 => 109,  2693 => 108,  2247 => 116,  2244 => 115,  2221 => 108,  2190 => 107,  1746 => 379,  1737 => 377,  1732 => 376,  1722 => 375,  1706 => 373,  1698 => 360,  1692 => 357,  1689 => 356,  1686 => 355,  1683 => 354,  1673 => 353,  1657 => 350,  1631 => 343,  1621 => 342,  1613 => 338,  1607 => 335,  1604 => 334,  1602 => 2,  1600 => 334,  1597 => 333,  1587 => 332,  1571 => 330,  1563 => 345,  1561 => 342,  1556 => 339,  1554 => 332,  1551 => 331,  1549 => 330,  1545 => 328,  1535 => 327,  1526 => 346,  1524 => 327,  1521 => 326,  1518 => 325,  1508 => 324,  1499 => 361,  1497 => 353,  1493 => 351,  1491 => 350,  1487 => 348,  1485 => 324,  1482 => 323,  1472 => 322,  1461 => 316,  1451 => 315,  1443 => 311,  1428 => 300,  1418 => 299,  1409 => 312,  1407 => 299,  1404 => 298,  1394 => 297,  1386 => 263,  1380 => 262,  1372 => 260,  1369 => 259,  1363 => 258,  1353 => 256,  1350 => 255,  1344 => 254,  1332 => 252,  1329 => 251,  1312 => 249,  1307 => 248,  1304 => 247,  1302 => 246,  1297 => 245,  1294 => 244,  1292 => 243,  1287 => 242,  1284 => 241,  1279 => 240,  1269 => 239,  1259 => 288,  1253 => 285,  1248 => 284,  1245 => 283,  1242 => 282,  1239 => 281,  1236 => 280,  1234 => 279,  1225 => 276,  1223 => 2,  1218 => 276,  1214 => 275,  1209 => 273,  1204 => 270,  1198 => 267,  1195 => 266,  1193 => 265,  1190 => 264,  1187 => 239,  1177 => 238,  1168 => 291,  1166 => 238,  1157 => 237,  1154 => 236,  1151 => 235,  1148 => 234,  1146 => 233,  1143 => 232,  1140 => 231,  1130 => 230,  1121 => 294,  1118 => 293,  1115 => 230,  1113 => 229,  1110 => 228,  1100 => 227,  1092 => 318,  1090 => 315,  1087 => 314,  1085 => 297,  1082 => 296,  1079 => 227,  1069 => 226,  1057 => 363,  1055 => 322,  1050 => 319,  1048 => 226,  1043 => 225,  1041 => 224,  1038 => 223,  1028 => 222,  1017 => 215,  1007 => 214,  996 => 205,  992 => 204,  985 => 203,  975 => 202,  966 => 208,  964 => 202,  961 => 201,  951 => 200,  942 => 210,  940 => 200,  937 => 199,  927 => 198,  919 => 217,  917 => 214,  913 => 212,  911 => 198,  908 => 197,  898 => 196,  887 => 170,  880 => 169,  870 => 168,  860 => 190,  857 => 189,  843 => 175,  839 => 173,  837 => 168,  830 => 164,  827 => 163,  817 => 162,  809 => 368,  807 => 222,  801 => 218,  799 => 196,  793 => 192,  791 => 162,  788 => 161,  778 => 160,  770 => 101,  767 => 100,  753 => 99,  748 => 97,  747 => 2,  745 => 97,  740 => 95,  739 => 2,  738 => 95,  735 => 94,  729 => 92,  726 => 91,  723 => 90,  706 => 89,  700 => 87,  697 => 86,  687 => 85,  676 => 71,  666 => 70,  656 => 369,  654 => 160,  650 => 158,  646 => 157,  643 => 156,  628 => 122,  625 => 121,  623 => 120,  620 => 119,  616 => 118,  601 => 107,  599 => 106,  596 => 105,  594 => 104,  591 => 103,  587 => 102,  584 => 85,  582 => 84,  579 => 83,  575 => 82,  569 => 80,  563 => 77,  560 => 76,  557 => 75,  555 => 74,  552 => 73,  549 => 70,  539 => 69,  528 => 66,  518 => 65,  507 => 63,  497 => 62,  481 => 54,  465 => 53,  449 => 52,  440 => 380,  438 => 375,  435 => 374,  433 => 373,  430 => 372,  428 => 69,  425 => 68,  422 => 65,  420 => 62,  415 => 60,  411 => 59,  407 => 58,  403 => 57,  399 => 56,  395 => 55,  391 => 54,  386 => 53,  383 => 52,  373 => 51,  365 => 48,  356 => 46,  351 => 45,  341 => 44,  331 => 41,  326 => 40,  316 => 39,  305 => 35,  295 => 34,  287 => 37,  285 => 34,  279 => 32,  269 => 31,  258 => 28,  248 => 27,  238 => 24,  233 => 23,  223 => 22,  212 => 19,  202 => 18,  185 => 15,  172 => 8,  162 => 7,  153 => 382,  151 => 51,  147 => 49,  145 => 44,  142 => 43,  140 => 39,  137 => 38,  135 => 31,  132 => 30,  130 => 27,  127 => 26,  125 => 22,  122 => 21,  120 => 18,  114 => 16,  109 => 15,  106 => 14,  104 => 7,  97 => 5,  93 => 3,  91 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
                                    {% if content_footer is not empty %}
                                        <section class=\"content-footer\">
                                            {{ content_footer }}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "C:\\Users\\JENGO\\B2_projet\\php_symphonie\\SpyMusic\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_9969bb9ee4e73c2542e342af4f4fcbd1___15502912091 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 301
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 301, $this->source); })()), "@EasyAdmin/layout.html.twig", 301);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 302
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 302, $this->source); })()), "html", null, true);
        yield "
                                            ";
        // line 303
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 303, $this->source); })()), "userMenu", [], "any", false, false, false, 303), "isNameDisplayed", [], "any", false, false, false, 303)) {
            // line 304
            yield "                                                <span class=\"user-name\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 304, $this->source); })()), "userMenu", [], "any", false, false, false, 304), "name", [], "any", false, false, false, 304), "html", null, true);
            yield "</span>
                                            ";
        }
        // line 306
        yield "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  7309 => 306,  7303 => 304,  7301 => 303,  7288 => 302,  7257 => 301,  6813 => 310,  6798 => 307,  6775 => 301,  6744 => 300,  6289 => 186,  6258 => 185,  5814 => 184,  5808 => 182,  5802 => 180,  5791 => 179,  5760 => 176,  5316 => 188,  5301 => 185,  5278 => 176,  5247 => 175,  4803 => 153,  4798 => 151,  4794 => 150,  4790 => 149,  4785 => 147,  4782 => 146,  4776 => 144,  4773 => 143,  4771 => 142,  4768 => 141,  4759 => 139,  4756 => 138,  4753 => 137,  4750 => 136,  4747 => 135,  4744 => 134,  4740 => 133,  4737 => 132,  4731 => 130,  4720 => 129,  4689 => 128,  4245 => 154,  4222 => 128,  4191 => 127,  3736 => 124,  3705 => 123,  3261 => 155,  3247 => 127,  3244 => 126,  3221 => 123,  3190 => 122,  2743 => 112,  2739 => 111,  2724 => 109,  2693 => 108,  2247 => 116,  2244 => 115,  2221 => 108,  2190 => 107,  1746 => 379,  1737 => 377,  1732 => 376,  1722 => 375,  1706 => 373,  1698 => 360,  1692 => 357,  1689 => 356,  1686 => 355,  1683 => 354,  1673 => 353,  1657 => 350,  1631 => 343,  1621 => 342,  1613 => 338,  1607 => 335,  1604 => 334,  1602 => 2,  1600 => 334,  1597 => 333,  1587 => 332,  1571 => 330,  1563 => 345,  1561 => 342,  1556 => 339,  1554 => 332,  1551 => 331,  1549 => 330,  1545 => 328,  1535 => 327,  1526 => 346,  1524 => 327,  1521 => 326,  1518 => 325,  1508 => 324,  1499 => 361,  1497 => 353,  1493 => 351,  1491 => 350,  1487 => 348,  1485 => 324,  1482 => 323,  1472 => 322,  1461 => 316,  1451 => 315,  1443 => 311,  1428 => 300,  1418 => 299,  1409 => 312,  1407 => 299,  1404 => 298,  1394 => 297,  1386 => 263,  1380 => 262,  1372 => 260,  1369 => 259,  1363 => 258,  1353 => 256,  1350 => 255,  1344 => 254,  1332 => 252,  1329 => 251,  1312 => 249,  1307 => 248,  1304 => 247,  1302 => 246,  1297 => 245,  1294 => 244,  1292 => 243,  1287 => 242,  1284 => 241,  1279 => 240,  1269 => 239,  1259 => 288,  1253 => 285,  1248 => 284,  1245 => 283,  1242 => 282,  1239 => 281,  1236 => 280,  1234 => 279,  1225 => 276,  1223 => 2,  1218 => 276,  1214 => 275,  1209 => 273,  1204 => 270,  1198 => 267,  1195 => 266,  1193 => 265,  1190 => 264,  1187 => 239,  1177 => 238,  1168 => 291,  1166 => 238,  1157 => 237,  1154 => 236,  1151 => 235,  1148 => 234,  1146 => 233,  1143 => 232,  1140 => 231,  1130 => 230,  1121 => 294,  1118 => 293,  1115 => 230,  1113 => 229,  1110 => 228,  1100 => 227,  1092 => 318,  1090 => 315,  1087 => 314,  1085 => 297,  1082 => 296,  1079 => 227,  1069 => 226,  1057 => 363,  1055 => 322,  1050 => 319,  1048 => 226,  1043 => 225,  1041 => 224,  1038 => 223,  1028 => 222,  1017 => 215,  1007 => 214,  996 => 205,  992 => 204,  985 => 203,  975 => 202,  966 => 208,  964 => 202,  961 => 201,  951 => 200,  942 => 210,  940 => 200,  937 => 199,  927 => 198,  919 => 217,  917 => 214,  913 => 212,  911 => 198,  908 => 197,  898 => 196,  887 => 170,  880 => 169,  870 => 168,  860 => 190,  857 => 189,  843 => 175,  839 => 173,  837 => 168,  830 => 164,  827 => 163,  817 => 162,  809 => 368,  807 => 222,  801 => 218,  799 => 196,  793 => 192,  791 => 162,  788 => 161,  778 => 160,  770 => 101,  767 => 100,  753 => 99,  748 => 97,  747 => 2,  745 => 97,  740 => 95,  739 => 2,  738 => 95,  735 => 94,  729 => 92,  726 => 91,  723 => 90,  706 => 89,  700 => 87,  697 => 86,  687 => 85,  676 => 71,  666 => 70,  656 => 369,  654 => 160,  650 => 158,  646 => 157,  643 => 156,  628 => 122,  625 => 121,  623 => 120,  620 => 119,  616 => 118,  601 => 107,  599 => 106,  596 => 105,  594 => 104,  591 => 103,  587 => 102,  584 => 85,  582 => 84,  579 => 83,  575 => 82,  569 => 80,  563 => 77,  560 => 76,  557 => 75,  555 => 74,  552 => 73,  549 => 70,  539 => 69,  528 => 66,  518 => 65,  507 => 63,  497 => 62,  481 => 54,  465 => 53,  449 => 52,  440 => 380,  438 => 375,  435 => 374,  433 => 373,  430 => 372,  428 => 69,  425 => 68,  422 => 65,  420 => 62,  415 => 60,  411 => 59,  407 => 58,  403 => 57,  399 => 56,  395 => 55,  391 => 54,  386 => 53,  383 => 52,  373 => 51,  365 => 48,  356 => 46,  351 => 45,  341 => 44,  331 => 41,  326 => 40,  316 => 39,  305 => 35,  295 => 34,  287 => 37,  285 => 34,  279 => 32,  269 => 31,  258 => 28,  248 => 27,  238 => 24,  233 => 23,  223 => 22,  212 => 19,  202 => 18,  185 => 15,  172 => 8,  162 => 7,  153 => 382,  151 => 51,  147 => 49,  145 => 44,  142 => 43,  140 => 39,  137 => 38,  135 => 31,  132 => 30,  130 => 27,  127 => 26,  125 => 22,  122 => 21,  120 => 18,  114 => 16,  109 => 15,  106 => 14,  104 => 7,  97 => 5,  93 => 3,  91 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
                                    {% if content_footer is not empty %}
                                        <section class=\"content-footer\">
                                            {{ content_footer }}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "C:\\Users\\JENGO\\B2_projet\\php_symphonie\\SpyMusic\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_9969bb9ee4e73c2542e342af4f4fcbd1___30369516121 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 307
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 307, $this->source); })()), "@EasyAdmin/layout.html.twig", 307);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 308
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_menu_dropdown"]) || array_key_exists("user_menu_dropdown", $context) ? $context["user_menu_dropdown"] : (function () { throw new RuntimeError('Variable "user_menu_dropdown" does not exist.', 308, $this->source); })()), "html", null, true);
        yield "
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  7784 => 308,  7753 => 307,  7309 => 306,  7303 => 304,  7301 => 303,  7288 => 302,  7257 => 301,  6813 => 310,  6798 => 307,  6775 => 301,  6744 => 300,  6289 => 186,  6258 => 185,  5814 => 184,  5808 => 182,  5802 => 180,  5791 => 179,  5760 => 176,  5316 => 188,  5301 => 185,  5278 => 176,  5247 => 175,  4803 => 153,  4798 => 151,  4794 => 150,  4790 => 149,  4785 => 147,  4782 => 146,  4776 => 144,  4773 => 143,  4771 => 142,  4768 => 141,  4759 => 139,  4756 => 138,  4753 => 137,  4750 => 136,  4747 => 135,  4744 => 134,  4740 => 133,  4737 => 132,  4731 => 130,  4720 => 129,  4689 => 128,  4245 => 154,  4222 => 128,  4191 => 127,  3736 => 124,  3705 => 123,  3261 => 155,  3247 => 127,  3244 => 126,  3221 => 123,  3190 => 122,  2743 => 112,  2739 => 111,  2724 => 109,  2693 => 108,  2247 => 116,  2244 => 115,  2221 => 108,  2190 => 107,  1746 => 379,  1737 => 377,  1732 => 376,  1722 => 375,  1706 => 373,  1698 => 360,  1692 => 357,  1689 => 356,  1686 => 355,  1683 => 354,  1673 => 353,  1657 => 350,  1631 => 343,  1621 => 342,  1613 => 338,  1607 => 335,  1604 => 334,  1602 => 2,  1600 => 334,  1597 => 333,  1587 => 332,  1571 => 330,  1563 => 345,  1561 => 342,  1556 => 339,  1554 => 332,  1551 => 331,  1549 => 330,  1545 => 328,  1535 => 327,  1526 => 346,  1524 => 327,  1521 => 326,  1518 => 325,  1508 => 324,  1499 => 361,  1497 => 353,  1493 => 351,  1491 => 350,  1487 => 348,  1485 => 324,  1482 => 323,  1472 => 322,  1461 => 316,  1451 => 315,  1443 => 311,  1428 => 300,  1418 => 299,  1409 => 312,  1407 => 299,  1404 => 298,  1394 => 297,  1386 => 263,  1380 => 262,  1372 => 260,  1369 => 259,  1363 => 258,  1353 => 256,  1350 => 255,  1344 => 254,  1332 => 252,  1329 => 251,  1312 => 249,  1307 => 248,  1304 => 247,  1302 => 246,  1297 => 245,  1294 => 244,  1292 => 243,  1287 => 242,  1284 => 241,  1279 => 240,  1269 => 239,  1259 => 288,  1253 => 285,  1248 => 284,  1245 => 283,  1242 => 282,  1239 => 281,  1236 => 280,  1234 => 279,  1225 => 276,  1223 => 2,  1218 => 276,  1214 => 275,  1209 => 273,  1204 => 270,  1198 => 267,  1195 => 266,  1193 => 265,  1190 => 264,  1187 => 239,  1177 => 238,  1168 => 291,  1166 => 238,  1157 => 237,  1154 => 236,  1151 => 235,  1148 => 234,  1146 => 233,  1143 => 232,  1140 => 231,  1130 => 230,  1121 => 294,  1118 => 293,  1115 => 230,  1113 => 229,  1110 => 228,  1100 => 227,  1092 => 318,  1090 => 315,  1087 => 314,  1085 => 297,  1082 => 296,  1079 => 227,  1069 => 226,  1057 => 363,  1055 => 322,  1050 => 319,  1048 => 226,  1043 => 225,  1041 => 224,  1038 => 223,  1028 => 222,  1017 => 215,  1007 => 214,  996 => 205,  992 => 204,  985 => 203,  975 => 202,  966 => 208,  964 => 202,  961 => 201,  951 => 200,  942 => 210,  940 => 200,  937 => 199,  927 => 198,  919 => 217,  917 => 214,  913 => 212,  911 => 198,  908 => 197,  898 => 196,  887 => 170,  880 => 169,  870 => 168,  860 => 190,  857 => 189,  843 => 175,  839 => 173,  837 => 168,  830 => 164,  827 => 163,  817 => 162,  809 => 368,  807 => 222,  801 => 218,  799 => 196,  793 => 192,  791 => 162,  788 => 161,  778 => 160,  770 => 101,  767 => 100,  753 => 99,  748 => 97,  747 => 2,  745 => 97,  740 => 95,  739 => 2,  738 => 95,  735 => 94,  729 => 92,  726 => 91,  723 => 90,  706 => 89,  700 => 87,  697 => 86,  687 => 85,  676 => 71,  666 => 70,  656 => 369,  654 => 160,  650 => 158,  646 => 157,  643 => 156,  628 => 122,  625 => 121,  623 => 120,  620 => 119,  616 => 118,  601 => 107,  599 => 106,  596 => 105,  594 => 104,  591 => 103,  587 => 102,  584 => 85,  582 => 84,  579 => 83,  575 => 82,  569 => 80,  563 => 77,  560 => 76,  557 => 75,  555 => 74,  552 => 73,  549 => 70,  539 => 69,  528 => 66,  518 => 65,  507 => 63,  497 => 62,  481 => 54,  465 => 53,  449 => 52,  440 => 380,  438 => 375,  435 => 374,  433 => 373,  430 => 372,  428 => 69,  425 => 68,  422 => 65,  420 => 62,  415 => 60,  411 => 59,  407 => 58,  403 => 57,  399 => 56,  395 => 55,  391 => 54,  386 => 53,  383 => 52,  373 => 51,  365 => 48,  356 => 46,  351 => 45,  341 => 44,  331 => 41,  326 => 40,  316 => 39,  305 => 35,  295 => 34,  287 => 37,  285 => 34,  279 => 32,  269 => 31,  258 => 28,  248 => 27,  238 => 24,  233 => 23,  223 => 22,  212 => 19,  202 => 18,  185 => 15,  172 => 8,  162 => 7,  153 => 382,  151 => 51,  147 => 49,  145 => 44,  142 => 43,  140 => 39,  137 => 38,  135 => 31,  132 => 30,  130 => 27,  127 => 26,  125 => 22,  122 => 21,  120 => 18,  114 => 16,  109 => 15,  106 => 14,  104 => 7,  97 => 5,  93 => 3,  91 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
<head>
    {% block head_metas %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    {% endblock head_metas %}

    {% set page_title_block_output %}{% block page_title %}{{ block('content_title') }}{% endblock %}{% endset %}
    <title>{{ page_title_block_output|striptags|raw }}</title>

    {% block head_stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
    {% endblock %}

    {% block configured_stylesheets %}
        {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block head_favicon %}
        <link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
    {% endblock %}

    {% block head_javascript %}
        <script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

        {% block importmap %}
            {{ include('@EasyAdmin/includes/_importmap.html.twig', { assets: ea.assets.assetMapperAssets ?? [] }, with_context = false) }}
        {% endblock %}
    {% endblock head_javascript %}

    {% block configured_javascripts %}
        {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
        {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
    {% endblock %}

    {% block configured_head_contents %}
        {% for htmlContent in ea.assets.headContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
</head>

{% block body %}
    <body {% block body_attr %}{% endblock %}
        id=\"{% block body_id %}{% endblock %}\"
        class=\"ea {% block body_class %}{% endblock %}\"
        data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\"
        data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\"
        data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\"
        data-ea-default-color-scheme=\"{{ ea.dashboardDefaultColorScheme }}\"
        data-ea-icon-set=\"{{ ea.assets.iconSet }}\"
        data-ea-icon-prefix=\"{{ ea.assets.defaultIconPrefix }}\"
    >
    {% block javascript_page_layout %}
        <script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_layout %}
    {% block javascript_page_color_scheme %}
        <script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
    {% endblock javascript_page_color_scheme %}

    {% block wrapper_wrapper %}
        {% block flash_messages %}
            {{ include(ea.templatePath('flash_messages')) }}
        {% endblock flash_messages %}

        {% set user_menu_avatar %}
            {% if null == ea.userMenu.avatarUrl %}
                <span class=\"user-avatar\">
                    {{ component('ea:Icon', { name: 'internal:user' }) }}
                </span>
            {% else %}
                <img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\" />
            {% endif %}
        {% endset %}

        {% set user_menu %}
            {% block user_menu %}
                {% if ea.userMenu.items|length > 0 %}
                    {{ component('ea:ActionMenu:ActionList:Divider') }}

                    {% for item in ea.userMenu.items %}
                        {% if item.isMenuSection %}
                            {% if not loop.first %}
                                {{ component('ea:ActionMenu:ActionList:Divider') }}
                            {% endif %}

                            {{ component('ea:ActionMenu:ActionList:Header', { label: (item.label|trans), class: (item.cssClass), icon: (item.icon), htmlAttributes: (item.htmlAttributes) }) }}
                        {% else %}
                            {{ component('ea:ActionMenu:ActionList:Item', { label: (item.label|trans), class: 'user-action '~(item.cssClass), icon: (item.icon), url: (item.linkUrl), target: (item.linkTarget), rel: (item.linkRel), referrerpolicy: 'origin-when-cross-origin', htmlAttributes: (item.htmlAttributes) }) }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endset %}

        {% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

        {% set user_menu_dropdown %}
            {% component 'ea:ActionMenu:ActionList' %}
                {% block content %}{% component 'ea:ActionMenu:ActionList:Content' with { class: 'dropdown-user-details' } %}
                    {% block content %}<div>{{ user_menu_avatar }}</div>
                    <div>
                        <span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                        <span class=\"user-name\">{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') : ea.userMenu.name }}</span>
                    </div>
                {% endblock %}{% endcomponent %}

                {{ user_menu }}
            {% endblock %}{% endcomponent %}
        {% endset %}

        {% set settings_dropdown %}
            {% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
                {% component 'ea:ActionMenu' with { class: 'dropdown-settings' } %}
                    {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'dropdown-settings-button', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                        {% block content %}{{ component('ea:Icon', { name: 'internal:gear' }) }}
                    {% endblock %}{% endcomponent %}

                    {% component 'ea:ActionMenu:Overlay' %}
                        {% block content %}{% component 'ea:ActionMenu:ActionList' %}
                            {% block content %}{% if ea.dashboardLocales %}
                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-locales-label', label: ('settings.locale'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}

                            {% for localeDto in ea.dashboardLocales %}
                                {% if ea.usePrettyUrls %}
                                    {% set url = ea_url().set('_locale', localeDto.locale).set('entityId', app.request.attributes.get('entityId')) %}
                                {% else %}
                                    {% set url = ea_url().set('_locale', localeDto.locale) %}
                                {% endif %}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: (app.request.locale == localeDto.locale ? 'active'), url: (url.generateUrl()), icon: (localeDto.icon), label: (localeDto.name) }) }}
                            {% endfor %}

                            {% if ea.dashboardHasDarkModeEnabled %}
                                {% if ea.dashboardLocales %}
                                    {{ component('ea:ActionMenu:ActionList:Divider') }}
                                {% endif %}

                                {{ component('ea:ActionMenu:ActionList:Header', { class: 'dropdown-appearance-label', label: ('settings.appearance.label'|trans(domain = 'EasyAdminBundle')) }) }}

                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:sun', 'data-ea-color-scheme': 'light', label: ('settings.appearance.light'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item', url: '#', icon: 'internal:moon', 'data-ea-color-scheme': 'dark', label: ('settings.appearance.dark'|trans(domain = 'EasyAdminBundle')) }) }}
                                {{ component('ea:ActionMenu:ActionList:Item', { class: 'dropdown-appearance-item active', url: '#', icon: 'internal:desktop', 'data-ea-color-scheme': 'auto', label: ('settings.appearance.auto'|trans(domain = 'EasyAdminBundle')) }) }}
                            {% endif %}
                        {% endblock %}{% endcomponent %}
                    {% endblock %}{% endcomponent %}
                {% endblock %}{% endcomponent %}
            {% endif %}
        {% endset %}

        <div class=\"wrapper\">
            {% block wrapper %}
                <div class=\"responsive-header\">
                    {% block responsive_header %}
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            {{ component('ea:Icon', { name: 'internal:menu-bars' }) }}
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            {% block responsive_header_logo %}
                                <a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                    {{ ea.dashboardTitle|raw }}
                                </a>
                            {% endblock responsive_header_logo %}
                        </div>

                        {% component 'ea:ActionMenu' with { class: 'ms-auto user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                            {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', 'data-bs-offset': '0,5', withoutDropdownToggleMarker: true } %}
                                {# to make the site design consistent, always display the user avatar in responsive header
                                   and hide the user name (because there's no space left) regardless of the user config #}
                                {% block content %}{% if ea.userMenu.avatarDisplayed %}
                                    {{ user_menu_avatar }}
                                {% else %}
                                    {{ component('ea:Icon', { class: 'user-avatar', name: (ea.user is not null ? 'internal:user' : 'internal:user-xmark') }) }}
                                {% endif %}
                            {% endblock %}{% endcomponent %}
                            {% component 'ea:ActionMenu:Overlay' %}
                                {% block content %}{{ user_menu_dropdown }}
                            {% endblock %}{% endcomponent %}
                        {% endblock %}{% endcomponent %}

                        {{ settings_dropdown }}
                    {% endblock responsive_header %}
                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        {% block sidebar %}
                            <header class=\"main-header\">
                                {% block header %}
                                <nav class=\"navbar\" role=\"navigation\">
                                    {% block header_navbar %}
                                        <div id=\"header-logo\">
                                            {% block header_logo %}
                                                <a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                                    <span class=\"logo-custom\">{{ ea.dashboardTitle|raw }}</span>
                                                    <span class=\"logo-compact\">{{ component('ea:Icon', { name: 'internal:home' }) }}</span>
                                                </a>
                                            {% endblock header_logo %}
                                        </div>
                                    {% endblock header_navbar %}
                                </nav>
                                {% endblock header %}
                            </header>

                            {% block main_menu_wrapper %}
                                {{ include(ea.templatePath('main_menu')) }}
                            {% endblock main_menu_wrapper %}
                        {% endblock sidebar %}

                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                {% block main_content_wrapper %}
                <section class=\"main-content\">
                    {% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
                    <aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
                        {% block content_top_header %}
                            {% block search_wrapper %}
                            <div class=\"content-search\">
                                {% if has_search %}
                                    {% block search %}
                                        {% set formActionUrl = null %}
                                        {% if ea.usePrettyUrls %}
                                            {# even if the app uses pretty URLs, the user might be using an ugly URL, so the controller might be defined in the query string #}
                                            {% set crudController = ea.request.attributes.get('crudControllerFqcn') ?? ea.request.query.get('crudControllerFqcn') %}
                                            {% set formActionUrl = ea_url().setController(crudController).setAction('index').set('page', 1) %}
                                        {% endif %}
                                        <form class=\"form-action-search\" method=\"get\" {% if formActionUrl %}action=\"{{ formActionUrl }}\"{% endif %}>
                                            {% block search_form %}
                                                {% block search_form_filters %}
                                                    {% for field, fieldValue in ea.search.appliedFilters %}
                                                        {% if fieldValue is iterable %}
                                                            {% for key, value in fieldValue %}
                                                                {# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
                                                                {% if value is iterable %}
                                                                    {% for index, iterValue in value %}
                                                                        {# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
                                                                        {% if iterValue is iterable %}
                                                                            {% for subIndex, subIterValue in iterValue %}
                                                                                <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
                                                                            {% endfor %}
                                                                        {% else %}
                                                                            <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            <input type=\"hidden\" name=\"filters[{{ field }}]\" value=\"{{ fieldValue }}\">
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}

                                                {% if not ea.usePrettyUrls %}
                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                {% endif %}

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        {{ component('ea:Icon', { name: 'internal:search', class: 'content-search-icon' }) }}

                                                        <label class=\"content-search-label\" data-value=\"{{ app.request.query.get('query') }}\">
                                                            <input class=\"form-control {{ app.request.query.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.query.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"{% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\"{% endif %}>
                                                        </label>

                                                        {% if app.request.query.get('query') %}
                                                            {% set search_reset_url = ea_url().unset('query') %}
                                                            {% if ea.usePrettyUrls %}
                                                                {% set search_reset_url = ea_url().unset('query').setController(crudController).setAction('index').set('page', 1) %}
                                                            {% endif %}
                                                            <a href=\"{{ search_reset_url }}\" class=\"content-search-reset\">
                                                                {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                                                            </a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock search %}
                                {% endif %}
                            </div>
                            {% endblock search_wrapper %}

                            {% block header_custom_menu_wrapper %}
                            <div class=\"navbar-custom-menu\">
                                {% block header_custom_menu %}
                                    {% component 'ea:ActionMenu' with { class: 'user-menu-wrapper '~(is_granted(impersonator_permission) ? 'user-is-impersonated') } %}
                                        {% block content %}{% component 'ea:ActionMenu:Button' with { class: 'user-details', withoutDropdownToggleMarker: true } %}
                                            {% block content %}{{ user_menu_avatar }}
                                            {% if ea.userMenu.isNameDisplayed %}
                                                <span class=\"user-name\">{{ ea.userMenu.name }}</span>
                                            {% endif %}
                                        {% endblock %}{% endcomponent %}
                                        {% component 'ea:ActionMenu:Overlay' %}
                                            {% block content %}{{ user_menu_dropdown }}
                                        {% endblock %}{% endcomponent %}
                                    {% endblock %}{% endcomponent %}
                                {% endblock header_custom_menu %}
                            </div>
                            {% endblock header_custom_menu_wrapper %}

                            {% block settings_dropdown_wrapper %}
                                {{ settings_dropdown }}
                            {% endblock settings_dropdown_wrapper %}
                        {% endblock content_top_header %}
                    </aside>

                    <div class=\"content-wrapper\">
                        {% block content %}
                            <article class=\"content\">
                                {% block content_header_wrapper %}
                                    {% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
                                    <section class=\"content-header\">
                                        {% block content_header %}
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    {% block content_title %}{% endblock %}

                                                    {% block content_help %}
                                                        {% if has_help_message %}
                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html') }}\">
                                                                {{ component('ea:Icon', { name: 'internal:circle-info' }) }}
                                                            </a>
                                                        {% endif %}
                                                    {% endblock %}
                                                </h1>
                                            </div>

                                            {% block page_actions_wrapper %}
                                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                                            {% endblock %}
                                        {% endblock content_header %}
                                    </section>
                                {% endblock content_header_wrapper %}

                                <section id=\"main\" class=\"content-body\">
                                    {% block main %}{% endblock %}
                                </section>

                                {% block content_footer_wrapper %}
                                    {% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
                                    {% if content_footer is not empty %}
                                        <section class=\"content-footer\">
                                            {{ content_footer }}
                                        </section>
                                    {% endif %}
                                {% endblock %}
                            </article>
                        {% endblock content %}

                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                {% endblock main_content_wrapper %}
            {% endblock wrapper %}
        </div>
        </div>
    {% endblock wrapper_wrapper %}

    {% block body_javascript %}{% endblock body_javascript %}

    {% block configured_body_contents %}
        {% for htmlContent in ea.assets.bodyContents ?? [] %}
            {{ htmlContent|raw }}
        {% endfor %}
    {% endblock %}
    </body>
{% endblock body %}
</html>
", "@EasyAdmin/layout.html.twig", "C:\\Users\\JENGO\\B2_projet\\php_symphonie\\SpyMusic\\vendor\\easycorp\\easyadmin-bundle\\templates\\layout.html.twig");
    }
}
