<?php

/* ToDoBundle:Tache:index.html.twig */
class __TwigTemplate_27fff1ec90edd6907606c93be654215f7b9a75f9cf0b43bf433f1b6d060912e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"centre\">
       <center><h1>Todo.com</h1></center>
       <h2>A faire :</h2><br>
    <ul> 
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 9
            echo "            <li>  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tache_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
            echo "</a></li> 
               
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        
</ul>
        
         <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("tache_new");
        echo "\">  <img src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/img/icone.png"), "html", null, true);
        echo "></a>
            </div>
    ";
    }

    public function getTemplateName()
    {
        return "ToDoBundle:Tache:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  61 => 12,  49 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
