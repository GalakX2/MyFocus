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

/* home/index.html.twig */
class __TwigTemplate_cdab911d85a482093489409d475992cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "News & Weather - Votre Dashboard Personnel
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
        yield "\t<!-- Section Héro (Principal) -->
\t<header class=\"bg-white py-5 mb-5\">
\t\t<div class=\"container px-5\">
\t\t\t<div class=\"row gx-5 align-items-center justify-content-center\">
\t\t\t\t<div class=\"col-lg-8 col-xl-7 col-xxl-6\">
\t\t\t\t\t<div class=\"my-5 text-center text-xl-start\">
\t\t\t\t\t\t<h1 class=\"display-5 fw-bolder text-dark mb-2\">Restez concentré sur l'essentiel.</h1>
\t\t\t\t\t\t<p class=\"lead fw-normal text-muted mb-4\">
\t\t\t\t\t\t\tToute votre journée en un seul coup d'œil. Météo locale, actualités ciblées et suivi financier. 
\t\t\t\t\t\t\t                        Simple. Efficace. Gratuit.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start\">
\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-lg px-4 me-sm-3\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Commencer maintenant</a>
\t\t\t\t\t\t\t<a class=\"btn btn-outline-secondary btn-lg px-4\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">J'ai déjà un compte</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tclass=\"col-xl-5 col-xxl-6 d-none d-xl-block text-center\">
\t\t\t\t\t<!-- Illustration simple -->
\t\t\t\t\t<div style=\"font-size: 10rem; opacity: 0.8; animation: float 3s ease-in-out infinite;\">
\t\t\t\t\t\t🚀
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>

\t<!-- Section Fonctionnalités -->
\t<section class=\"py-5 bg-light\" id=\"features\">
\t\t<div class=\"container px-5 my-5\">
\t\t\t<div class=\"row gx-5\">
\t\t\t\t<div class=\"col-lg-4 mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"feature bg-primary bg-gradient text-white rounded-3 mb-3 p-3 d-inline-block shadow-sm\">
\t\t\t\t\t\t<i class=\"bi bi-cloud-sun fs-2\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<h2 class=\"h4 fw-bolder mt-3\">Météo Locale</h2>
\t\t\t\t\t<p class=\"text-muted\">Ne soyez jamais pris au dépourvu. Consultez la météo de votre ville en temps réel dès votre connexion.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"feature bg-danger bg-gradient text-white rounded-3 mb-3 p-3 d-inline-block shadow-sm\">
\t\t\t\t\t\t<i class=\"bi bi-newspaper fs-2\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<h2 class=\"h4 fw-bolder mt-3\">News Ciblées</h2>
\t\t\t\t\t<p class=\"text-muted\">Définissez vos mots-clés (ex: Symfony, Tech, Sport) et recevez uniquement les actualités qui vous intéressent.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"feature bg-success bg-gradient text-white rounded-3 mb-3 p-3 d-inline-block shadow-sm\">
\t\t\t\t\t\t<i class=\"bi bi-currency-exchange fs-2\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<h2 class=\"h4 fw-bolder mt-3\">Finance</h2>
\t\t\t\t\t<p class=\"text-muted\">Gardez un œil sur les taux de change et le cours du Bitcoin sans quitter votre tableau de bord.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Footer -->
\t<footer class=\"py-4 bg-dark mt-auto\">
\t\t<div class=\"container px-5\">
\t\t\t<div class=\"row align-items-center justify-content-between flex-column flex-sm-row\">
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<div class=\"small m-0 text-white\">Copyright &copy; MyFocus 2025</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<a class=\"link-light small text-decoration-none\" href=\"#!\">Mentions légales</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>

\t<style>
\t\t@keyframes float {
\t\t\t0% {
\t\t\t\ttransform: translateY(0px);
\t\t\t}
\t\t\t50% {
\t\t\t\ttransform: translateY(-20px);
\t\t\t}
\t\t\t100% {
\t\t\t\ttransform: translateY(0px);
\t\t\t}
\t\t}
\t</style>
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
        return "home/index.html.twig";
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
        return array (  119 => 20,  115 => 19,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}News & Weather - Votre Dashboard Personnel
{% endblock %}

{% block body %}
\t<!-- Section Héro (Principal) -->
\t<header class=\"bg-white py-5 mb-5\">
\t\t<div class=\"container px-5\">
\t\t\t<div class=\"row gx-5 align-items-center justify-content-center\">
\t\t\t\t<div class=\"col-lg-8 col-xl-7 col-xxl-6\">
\t\t\t\t\t<div class=\"my-5 text-center text-xl-start\">
\t\t\t\t\t\t<h1 class=\"display-5 fw-bolder text-dark mb-2\">Restez concentré sur l'essentiel.</h1>
\t\t\t\t\t\t<p class=\"lead fw-normal text-muted mb-4\">
\t\t\t\t\t\t\tToute votre journée en un seul coup d'œil. Météo locale, actualités ciblées et suivi financier. 
\t\t\t\t\t\t\t                        Simple. Efficace. Gratuit.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start\">
\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-lg px-4 me-sm-3\" href=\"{{ path('app_login') }}\">Commencer maintenant</a>
\t\t\t\t\t\t\t<a class=\"btn btn-outline-secondary btn-lg px-4\" href=\"{{ path('app_login') }}\">J'ai déjà un compte</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tclass=\"col-xl-5 col-xxl-6 d-none d-xl-block text-center\">
\t\t\t\t\t<!-- Illustration simple -->
\t\t\t\t\t<div style=\"font-size: 10rem; opacity: 0.8; animation: float 3s ease-in-out infinite;\">
\t\t\t\t\t\t🚀
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>

\t<!-- Section Fonctionnalités -->
\t<section class=\"py-5 bg-light\" id=\"features\">
\t\t<div class=\"container px-5 my-5\">
\t\t\t<div class=\"row gx-5\">
\t\t\t\t<div class=\"col-lg-4 mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"feature bg-primary bg-gradient text-white rounded-3 mb-3 p-3 d-inline-block shadow-sm\">
\t\t\t\t\t\t<i class=\"bi bi-cloud-sun fs-2\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<h2 class=\"h4 fw-bolder mt-3\">Météo Locale</h2>
\t\t\t\t\t<p class=\"text-muted\">Ne soyez jamais pris au dépourvu. Consultez la météo de votre ville en temps réel dès votre connexion.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"feature bg-danger bg-gradient text-white rounded-3 mb-3 p-3 d-inline-block shadow-sm\">
\t\t\t\t\t\t<i class=\"bi bi-newspaper fs-2\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<h2 class=\"h4 fw-bolder mt-3\">News Ciblées</h2>
\t\t\t\t\t<p class=\"text-muted\">Définissez vos mots-clés (ex: Symfony, Tech, Sport) et recevez uniquement les actualités qui vous intéressent.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"feature bg-success bg-gradient text-white rounded-3 mb-3 p-3 d-inline-block shadow-sm\">
\t\t\t\t\t\t<i class=\"bi bi-currency-exchange fs-2\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<h2 class=\"h4 fw-bolder mt-3\">Finance</h2>
\t\t\t\t\t<p class=\"text-muted\">Gardez un œil sur les taux de change et le cours du Bitcoin sans quitter votre tableau de bord.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Footer -->
\t<footer class=\"py-4 bg-dark mt-auto\">
\t\t<div class=\"container px-5\">
\t\t\t<div class=\"row align-items-center justify-content-between flex-column flex-sm-row\">
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<div class=\"small m-0 text-white\">Copyright &copy; MyFocus 2025</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<a class=\"link-light small text-decoration-none\" href=\"#!\">Mentions légales</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>

\t<style>
\t\t@keyframes float {
\t\t\t0% {
\t\t\t\ttransform: translateY(0px);
\t\t\t}
\t\t\t50% {
\t\t\t\ttransform: translateY(-20px);
\t\t\t}
\t\t\t100% {
\t\t\t\ttransform: translateY(0px);
\t\t\t}
\t\t}
\t</style>
{% endblock %}
", "home/index.html.twig", "/var/www/app/templates/home/index.html.twig");
    }
}
