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

/* dashboard/index.html.twig */
class __TwigTemplate_005ecd75aacba94902a42dc6e18223b9 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mon Dashboard
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<div
\t\tclass=\"container\">
\t\t<!-- En-tête de bienvenue -->
\t\t<div class=\"row mb-4 align-items-center\">
\t\t\t<div class=\"col\">
\t\t\t\t<h1 class=\"h3 mb-0 text-gray-800\">Bonjour,
\t\t\t\t\t";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "email", [], "any", false, false, false, 13), "@"), 0, [], "array", false, false, false, 13)), "html", null, true);
        yield "
\t\t\t\t\t👋</h1>
\t\t\t\t<p class=\"text-muted small\">Voici votre résumé personnel pour aujourd'hui.</p>
\t\t\t</div>
\t\t\t<div class=\"col-auto\">
\t\t\t\t<a
\t\t\t\t\thref=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"btn btn-white shadow-sm d-flex align-items-center py-2 px-3 rounded-pill text-decoration-none transition-hover\" title=\"Modifier ma ville\">

\t\t\t\t\t<!-- Icône plus raisonnable (fs-4 au lieu de fs-2) -->
\t\t\t\t\t<span class=\"fs-4 me-2\">📍</span>

\t\t\t\t\t<div class=\"text-start lh-1\">
\t\t\t\t\t\t<span class=\"d-block text-muted text-uppercase fw-bold\" style=\"font-size: 0.65rem;\">Ma ville</span>
\t\t\t\t\t\t<!-- Texte de ville plus compact (fs-5 au lieu de fs-4) -->
\t\t\t\t\t\t<span class=\"fs-5 fw-bold text-dark\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "</span>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Petit crayon discret -->
\t\t\t\t\t<i class=\"bi bi-pencil-square ms-2 text-muted opacity-50 small\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- Messages Flash (Succès/Erreur) -->
\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 38
            yield "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 39
                yield "\t\t\t\t<div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show shadow-sm border-0\" role=\"alert\">
\t\t\t\t\t";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "
\t\t<div
\t\t\tclass=\"row g-4\">
\t\t\t<!-- BLOC METEO -->
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t<h5 class=\"card-title text-primary mb-0\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-cloud-sun me-2\"></i>Météo</h5>
\t\t\t\t\t\t\t<a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"text-muted\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-gear\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 60
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["weather"] ?? null), "error", [], "any", true, true, false, 60)) {
            // line 61
            yield "\t\t\t\t\t\t\t<div class=\"alert alert-light text-center\">
\t\t\t\t\t\t\t\t<small>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 62, $this->source); })()), "error", [], "any", false, false, false, 62), "html", null, true);
            yield "</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 65
            yield "\t\t\t\t\t\t\t<div class=\"text-center py-3\">
\t\t\t\t\t\t\t\t";
            // line 66
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["weather"] ?? null), "icon", [], "any", true, true, false, 66)) {
                // line 67
                yield "\t\t\t\t\t\t\t\t\t<img src=\"https://openweathermap.org/img/wn/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 67, $this->source); })()), "icon", [], "any", false, false, false, 67), "html", null, true);
                yield "@2x.png\" alt=\"Icone météo\" width=\"80\">
\t\t\t\t\t\t\t\t";
            }
            // line 69
            yield "\t\t\t\t\t\t\t\t<h2 class=\"display-4 fw-bold mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 69, $this->source); })()), "temperature", [], "any", false, false, false, 69), "html", null, true);
            yield "°</h2>
\t\t\t\t\t\t\t\t<p class=\"text-muted text-capitalize mb-0\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 73
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- BLOC NEWS -->
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t<div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t<h5 class=\"card-title text-danger mb-0\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-newspaper me-2\"></i>News</h5>
\t\t\t\t\t\t\t<a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"text-muted\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-gear\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"flex-grow-1 overflow-auto\" style=\"max-height: 300px;\">
\t\t\t\t\t\t\t";
        // line 90
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 90, $this->source); })()))) {
            // line 91
            yield "\t\t\t\t\t\t\t\t<div class=\"text-center text-muted mt-4\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-journal-x fs-1\"></i>
\t\t\t\t\t\t\t\t\t<p class=\"mt-2\">Aucune news.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 96
            yield "\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t\t\t";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 97, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 98
                yield "\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item border-0 px-0 py-3\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "url", [], "any", false, false, false, 99), "html", null, true);
                yield "\" target=\"_blank\" class=\"text-decoration-none text-dark fw-bold d-block mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 100), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted fst-italic\">";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "source", [], "any", false, false, false, 103), "name", [], "any", false, false, false, 103), "html", null, true);
                yield "</small>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-up-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            yield "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        }
        // line 112
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- BLOC FINANCE -->
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card h-100 bg-primary text-white bg-gradient shadow-sm\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title text-white mb-4 border-bottom border-white pb-2\" style=\"--bs-border-opacity: .3;\">
\t\t\t\t\t\t\t<i class=\"bi bi-graph-up-arrow me-2\"></i>Finance
\t\t\t\t\t\t</h5>

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"d-flex flex-column gap-4 justify-content-center h-75\">

\t\t\t\t\t\t\t<!-- Section Bitcoin -->
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-currency-bitcoin fs-1 me-2 opacity-75\"></i>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 opacity-75\">Bitcoin (BTC)</h6>
\t\t\t\t\t\t\t\t\t\t";
        // line 134
        if ((($tmp = (isset($context["bitcoinPrice"]) || array_key_exists("bitcoinPrice", $context) ? $context["bitcoinPrice"] : (function () { throw new RuntimeError('Variable "bitcoinPrice" does not exist.', 134, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-4 fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["bitcoinPrice"]) || array_key_exists("bitcoinPrice", $context) ? $context["bitcoinPrice"] : (function () { throw new RuntimeError('Variable "bitcoinPrice" does not exist.', 135, $this->source); })()), 0, ",", " "), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t€</span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 138
            yield "\t\t\t\t\t\t\t\t\t\t\t<span class=\"small text-warning\">Indisponible</span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 140
        yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Section USD -->
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-currency-dollar fs-1 me-2 opacity-75\"></i>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 opacity-75\">Taux EUR
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-right-short\"></i>
\t\t\t\t\t\t\t\t\t\t\tUSD</h6>
\t\t\t\t\t\t\t\t\t\t";
        // line 152
        if ((($tmp = (isset($context["usdRate"]) || array_key_exists("usdRate", $context) ? $context["usdRate"] : (function () { throw new RuntimeError('Variable "usdRate" does not exist.', 152, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 153
            yield "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-4 fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usdRate"]) || array_key_exists("usdRate", $context) ? $context["usdRate"] : (function () { throw new RuntimeError('Variable "usdRate" does not exist.', 153, $this->source); })()), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\$</span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 156
            yield "\t\t\t\t\t\t\t\t\t\t\t<span class=\"small text-warning\">Indisponible</span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 158
        yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer bg-transparent border-0 text-white-50 small text-end\">
\t\t\t\t\t\tDonnées temps réel
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- NOUVELLE LIGNE POUR LES OBJECTIFS -->
\t\t\t<div class=\"row mt-4\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"card shadow-sm h-100\">
\t\t\t\t\t\t<div class=\"card-header bg-white border-0 py-3 d-flex align-items-center\">
\t\t\t\t\t\t\t<h5 class=\"mb-0 text-dark fw-bold\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check2-circle me-2 text-success\"></i>Mes Objectifs du jour</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card-body p-0\">

\t\t\t\t\t\t\t<!-- LISTE DES OBJECTIFS -->
\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t\t";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["goals"]) || array_key_exists("goals", $context) ? $context["goals"] : (function () { throw new RuntimeError('Variable "goals" does not exist.', 182, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
            // line 183
            yield "\t\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex justify-content-between align-items-center py-3 ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "isDone", [], "any", false, false, false, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-light") : (""));
            yield "\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<!-- BOUTON COCHER (Lien qui agit comme une checkbox) -->
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_goal_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "id", [], "any", false, false, false, 187)]), "html", null, true);
            yield "\" class=\"text-decoration-none me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 188
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "isDone", [], "any", false, false, false, 188)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 189
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle-fill fs-4 text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 191
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle fs-4 text-muted hover-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 193
            yield "\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t<!-- TITRE (Barré si fait) -->
\t\t\t\t\t\t\t\t\t\t\t<span class=\"";
            // line 196
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "isDone", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-decoration-line-through text-muted") : ("fw-bold"));
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "title", [], "any", false, false, false, 197), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<!-- BOUTON SUPPRIMER -->
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_goal_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "id", [], "any", false, false, false, 202)]), "html", null, true);
            yield "\" class=\"btn btn-link text-danger p-0\" onclick=\"return confirm('Supprimer cet objectif ?')\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash3\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 206
        if (!$context['_iterated']) {
            // line 207
            yield "\t\t\t\t\t\t\t\t\t<li class=\"list-group-item text-center py-4 text-muted\">
\t\t\t\t\t\t\t\t\t\t☕ Vous n'avez pas encore d'objectif pour aujourd'hui.
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['goal'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield "\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<!-- FORMULAIRE D'AJOUT -->
\t\t\t\t\t\t\t<div class=\"p-3 bg-light border-top\">
\t\t\t\t\t\t\t\t";
        // line 215
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["goalForm"]) || array_key_exists("goalForm", $context) ? $context["goalForm"] : (function () { throw new RuntimeError('Variable "goalForm" does not exist.', 215, $this->source); })()), 'form_start', ["attr" => ["class" => "d-flex gap-2"]]);
        yield "
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["goalForm"]) || array_key_exists("goalForm", $context) ? $context["goalForm"] : (function () { throw new RuntimeError('Variable "goalForm" does not exist.', 217, $this->source); })()), "title", [], "any", false, false, false, 217), 'widget');
        yield "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-plus-lg\"></i>
\t\t\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t";
        // line 223
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["goalForm"]) || array_key_exists("goalForm", $context) ? $context["goalForm"] : (function () { throw new RuntimeError('Variable "goalForm" does not exist.', 223, $this->source); })()), 'form_end');
        yield "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/index.html.twig";
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
        return array (  467 => 223,  458 => 217,  453 => 215,  447 => 211,  438 => 207,  436 => 206,  427 => 202,  419 => 197,  415 => 196,  410 => 193,  406 => 191,  402 => 189,  400 => 188,  396 => 187,  388 => 183,  383 => 182,  357 => 158,  353 => 156,  346 => 153,  344 => 152,  330 => 140,  326 => 138,  319 => 135,  317 => 134,  293 => 112,  289 => 110,  276 => 103,  270 => 100,  266 => 99,  263 => 98,  259 => 97,  256 => 96,  249 => 91,  247 => 90,  238 => 84,  225 => 73,  219 => 70,  214 => 69,  208 => 67,  206 => 66,  203 => 65,  197 => 62,  194 => 61,  192 => 60,  184 => 55,  172 => 45,  166 => 44,  156 => 40,  151 => 39,  146 => 38,  142 => 37,  129 => 27,  118 => 19,  109 => 13,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Dashboard
{% endblock %}

{% block body %}
\t<div
\t\tclass=\"container\">
\t\t<!-- En-tête de bienvenue -->
\t\t<div class=\"row mb-4 align-items-center\">
\t\t\t<div class=\"col\">
\t\t\t\t<h1 class=\"h3 mb-0 text-gray-800\">Bonjour,
\t\t\t\t\t{{ user.email|split('@')[0]|capitalize }}
\t\t\t\t\t👋</h1>
\t\t\t\t<p class=\"text-muted small\">Voici votre résumé personnel pour aujourd'hui.</p>
\t\t\t</div>
\t\t\t<div class=\"col-auto\">
\t\t\t\t<a
\t\t\t\t\thref=\"{{ path('app_profile') }}\" class=\"btn btn-white shadow-sm d-flex align-items-center py-2 px-3 rounded-pill text-decoration-none transition-hover\" title=\"Modifier ma ville\">

\t\t\t\t\t<!-- Icône plus raisonnable (fs-4 au lieu de fs-2) -->
\t\t\t\t\t<span class=\"fs-4 me-2\">📍</span>

\t\t\t\t\t<div class=\"text-start lh-1\">
\t\t\t\t\t\t<span class=\"d-block text-muted text-uppercase fw-bold\" style=\"font-size: 0.65rem;\">Ma ville</span>
\t\t\t\t\t\t<!-- Texte de ville plus compact (fs-5 au lieu de fs-4) -->
\t\t\t\t\t\t<span class=\"fs-5 fw-bold text-dark\">{{ city }}</span>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Petit crayon discret -->
\t\t\t\t\t<i class=\"bi bi-pencil-square ms-2 text-muted opacity-50 small\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- Messages Flash (Succès/Erreur) -->
\t\t{% for label, messages in app.flashes %}
\t\t\t{% for message in messages %}
\t\t\t\t<div class=\"alert alert-{{ label }} alert-dismissible fade show shadow-sm border-0\" role=\"alert\">
\t\t\t\t\t{{ message }}
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t{% endfor %}

\t\t<div
\t\t\tclass=\"row g-4\">
\t\t\t<!-- BLOC METEO -->
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t<h5 class=\"card-title text-primary mb-0\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-cloud-sun me-2\"></i>Météo</h5>
\t\t\t\t\t\t\t<a href=\"{{ path('app_profile') }}\" class=\"text-muted\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-gear\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{% if weather.error is defined %}
\t\t\t\t\t\t\t<div class=\"alert alert-light text-center\">
\t\t\t\t\t\t\t\t<small>{{ weather.error }}</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"text-center py-3\">
\t\t\t\t\t\t\t\t{% if weather.icon is defined %}
\t\t\t\t\t\t\t\t\t<img src=\"https://openweathermap.org/img/wn/{{ weather.icon }}@2x.png\" alt=\"Icone météo\" width=\"80\">
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<h2 class=\"display-4 fw-bold mb-0\">{{ weather.temperature }}°</h2>
\t\t\t\t\t\t\t\t<p class=\"text-muted text-capitalize mb-0\">{{ weather.description }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- BLOC NEWS -->
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t<div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t<h5 class=\"card-title text-danger mb-0\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-newspaper me-2\"></i>News</h5>
\t\t\t\t\t\t\t<a href=\"{{ path('app_profile') }}\" class=\"text-muted\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-gear\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"flex-grow-1 overflow-auto\" style=\"max-height: 300px;\">
\t\t\t\t\t\t\t{% if news is empty %}
\t\t\t\t\t\t\t\t<div class=\"text-center text-muted mt-4\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-journal-x fs-1\"></i>
\t\t\t\t\t\t\t\t\t<p class=\"mt-2\">Aucune news.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t\t\t{% for article in news %}
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item border-0 px-0 py-3\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ article.url }}\" target=\"_blank\" class=\"text-decoration-none text-dark fw-bold d-block mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ article.title }}
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted fst-italic\">{{ article.source.name }}</small>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-up-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- BLOC FINANCE -->
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card h-100 bg-primary text-white bg-gradient shadow-sm\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title text-white mb-4 border-bottom border-white pb-2\" style=\"--bs-border-opacity: .3;\">
\t\t\t\t\t\t\t<i class=\"bi bi-graph-up-arrow me-2\"></i>Finance
\t\t\t\t\t\t</h5>

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"d-flex flex-column gap-4 justify-content-center h-75\">

\t\t\t\t\t\t\t<!-- Section Bitcoin -->
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-currency-bitcoin fs-1 me-2 opacity-75\"></i>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 opacity-75\">Bitcoin (BTC)</h6>
\t\t\t\t\t\t\t\t\t\t{% if bitcoinPrice %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-4 fw-bold\">{{ bitcoinPrice|number_format(0, ',', ' ') }}
\t\t\t\t\t\t\t\t\t\t\t\t€</span>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"small text-warning\">Indisponible</span>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Section USD -->
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-currency-dollar fs-1 me-2 opacity-75\"></i>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 opacity-75\">Taux EUR
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-right-short\"></i>
\t\t\t\t\t\t\t\t\t\t\tUSD</h6>
\t\t\t\t\t\t\t\t\t\t{% if usdRate %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-4 fw-bold\">{{ usdRate }}
\t\t\t\t\t\t\t\t\t\t\t\t\$</span>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"small text-warning\">Indisponible</span>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer bg-transparent border-0 text-white-50 small text-end\">
\t\t\t\t\t\tDonnées temps réel
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- NOUVELLE LIGNE POUR LES OBJECTIFS -->
\t\t\t<div class=\"row mt-4\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"card shadow-sm h-100\">
\t\t\t\t\t\t<div class=\"card-header bg-white border-0 py-3 d-flex align-items-center\">
\t\t\t\t\t\t\t<h5 class=\"mb-0 text-dark fw-bold\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check2-circle me-2 text-success\"></i>Mes Objectifs du jour</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card-body p-0\">

\t\t\t\t\t\t\t<!-- LISTE DES OBJECTIFS -->
\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t\t{% for goal in goals %}
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex justify-content-between align-items-center py-3 {{ goal.isDone ? 'bg-light' : '' }}\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<!-- BOUTON COCHER (Lien qui agit comme une checkbox) -->
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_goal_toggle', {'id': goal.id}) }}\" class=\"text-decoration-none me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if goal.isDone %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle-fill fs-4 text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle fs-4 text-muted hover-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t<!-- TITRE (Barré si fait) -->
\t\t\t\t\t\t\t\t\t\t\t<span class=\"{{ goal.isDone ? 'text-decoration-line-through text-muted' : 'fw-bold' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ goal.title }}
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<!-- BOUTON SUPPRIMER -->
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_goal_delete', {'id': goal.id}) }}\" class=\"btn btn-link text-danger p-0\" onclick=\"return confirm('Supprimer cet objectif ?')\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash3\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item text-center py-4 text-muted\">
\t\t\t\t\t\t\t\t\t\t☕ Vous n'avez pas encore d'objectif pour aujourd'hui.
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<!-- FORMULAIRE D'AJOUT -->
\t\t\t\t\t\t\t<div class=\"p-3 bg-light border-top\">
\t\t\t\t\t\t\t\t{{ form_start(goalForm, {'attr': {'class': 'd-flex gap-2'}}) }}
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t{{ form_widget(goalForm.title) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-plus-lg\"></i>
\t\t\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t{{ form_end(goalForm) }}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "dashboard/index.html.twig", "/var/www/app/templates/dashboard/index.html.twig");
    }
}
