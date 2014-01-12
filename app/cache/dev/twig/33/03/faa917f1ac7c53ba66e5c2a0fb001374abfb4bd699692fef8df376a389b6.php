<?php

/* IzzeSecurityBundle:Security:login.html.twig */
class __TwigTemplate_3303faa917f1ac7c53ba66e5c2a0fb001374abfb4bd699692fef8df376a389b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Hoo Hotel Manager</title>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type='text/css' />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/izzesecurity/css/unicorn-login.css"), "html", null, true);
        echo "\" type='text/css' />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-glyphicons.css"), "html", null, true);
        echo "\" />

</head>
<body>
<div id=\"container\">
    <div id=\"logo\">
        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\" />
    </div>
    <div id=\"loginbox\">
        ";
        // line 20
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 21
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
        ";
        }
        // line 23
        echo "        <form id=\"loginform\" action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
            <p>Enter username and password to continue.</p>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Username\" />
            </div>

            ";
        // line 35
        echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                <input class=\"form-control\" type=\"password\" placeholder=\"Password\" name=\"_password\" />
            </div>
            <hr />
            <div class=\"form-actions\">
                <br/>
                <div class=\"pull-right\"><input type=\"submit\" class=\"btn btn-default\" value=\"Login\" /></div>
            </div>
        </form>
    </div>
</div>
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/izzesecurity/js/unicorn.login.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "IzzeSecurityBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 48,  87 => 47,  73 => 35,  67 => 27,  59 => 23,  53 => 21,  51 => 20,  45 => 17,  36 => 11,  32 => 10,  28 => 9,  19 => 2,);
    }
}
