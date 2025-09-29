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

/* themes/custom/canvas/templates/page.html.twig */
class __TwigTemplate_769d28353811c4081cfae9a65f65c343 extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
  <meta charset=\"utf-8\">
  <title>";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</title>
  <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"style.css\">
</head>
<body>

  <!-- HERO SECTION -->
<div class=\"hero-section\">

  <!-- Top-left theme name -->
  <div class=\"hero-box-title\">CANVAS</div>

  <!-- Top-right buttons -->
  <div class=\"hero-buttons\">
    <a href=\"/\" class=\"hero-circle\" title=\"Home\">&#8962;</a> <!-- Home icon -->
    <a href=\"/about\" class=\"hero-circle\" title=\"About\">?</a> 
    <form class=\"hero-search\" action=\"/search\" method=\"get\">
      <input type=\"text\" name=\"q\" placeholder=\"Search...\" required>
      <button type=\"submit\" class=\"hero-circle\">&#128269;</button> <!-- Search icon -->
    </form>
  </div>

  <div class=\"hero-content\">
    <h2>Where Ideas Take Shape</h2>
    <p>Easily turn your ideas into a stunning, fully functional website with style and flexibility.</p>
  </div>
</div>

  <!-- Main Content -->
  <main class=\"main\">
    <div class=\"content\">
      ";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 36), "html", null, true);
        yield "
      ";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["first_module_variable"] ?? null), "html", null, true);
        yield "
    </div>

    ";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 40)) {
            // line 41
            yield "    <aside class=\"sidebar\">
      ";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 42), "html", null, true);
            yield "
    </aside>
    ";
        }
        // line 45
        yield "  </main>

  <!-- Footer -->
  <footer class=\"footer\">
    ";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 49), "html", null, true);
        yield "
  </footer>

</body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "page", "first_module_variable"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/canvas/templates/page.html.twig";
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
        return array (  111 => 49,  105 => 45,  99 => 42,  96 => 41,  94 => 40,  88 => 37,  84 => 36,  50 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/canvas/templates/page.html.twig", "/app/web/themes/custom/canvas/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 40];
        static $filters = ["escape" => 5];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
