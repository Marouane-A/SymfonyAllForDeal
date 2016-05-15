<?php

/* ApplicationMailBundle:Default:formMail.html.twig */
class __TwigTemplate_bbbc0788040da31e4386acbc66e73303dc3f7a2d9e5ffa37c3b2c0a78b967ffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::layout2.html.twig", "ApplicationMailBundle:Default:formMail.html.twig", 1);
        $this->blocks = array(
            't' => array($this, 'block_t'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProduitBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_t($context, array $blocks = array())
    {
        // line 3
        echo "<html>
    <head>
  
</head>
<form action =\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("application_mail_sendMail");
        echo "\" method=\"POST\">
    
  
  
    </br>
    <h5> Subject: </h5>
    <input type =\"text\" name=\"subject\"class=\"newsletter-input form-control\" >
    <br />
    <h5> Email </h5>
    <input type=\"text\" name=\"email\"class=\"newsletter-input form-control\" > 
    </br>
    <h5> Text: </h5>
    <Textarea name=\"message\" class=\"newsletter-input form-control\" > </textarea>
    <input type =\"submit\" value =\"send\" class=\"btn btn-lg btn-ghost btn-black\"/>
    
    </form>
</html>
";
    }

    public function getTemplateName()
    {
        return "ApplicationMailBundle:Default:formMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'ProduitBundle::layout2.html.twig' %}*/
/* {% block t %}*/
/* <html>*/
/*     <head>*/
/*   */
/* </head>*/
/* <form action ="{{path('application_mail_sendMail')}}" method="POST">*/
/*     */
/*   */
/*   */
/*     </br>*/
/*     <h5> Subject: </h5>*/
/*     <input type ="text" name="subject"class="newsletter-input form-control" >*/
/*     <br />*/
/*     <h5> Email </h5>*/
/*     <input type="text" name="email"class="newsletter-input form-control" > */
/*     </br>*/
/*     <h5> Text: </h5>*/
/*     <Textarea name="message" class="newsletter-input form-control" > </textarea>*/
/*     <input type ="submit" value ="send" class="btn btn-lg btn-ghost btn-black"/>*/
/*     */
/*     </form>*/
/* </html>*/
/* {% endblock  %}*/
