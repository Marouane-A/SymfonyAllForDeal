<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'),
             new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
             new Application\Sonata\UserBundle\ApplicationSonataUserBundle(),
             new Sonata\ClassificationBundle\SonataClassificationBundle(),
             new Application\Sonata\ClassificationBundle\ApplicationSonataClassificationBundle(),
           // new JMS\SerializerBundle\JMSSerializerBundle(),
                new Sonata\MarkItUpBundle\SonataMarkItUpBundle(),
            new Knp\Bundle\MarkdownBundle\KnpMarkdownBundle(),
            new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
            new Sonata\FormatterBundle\SonataFormatterBundle(),
            new Sonata\MediaBundle\SonataMediaBundle(),
             new Application\Sonata\MediaBundle\ApplicationSonataMediaBundle(),
            new Sonata\IntlBundle\SonataIntlBundle(),
             new Sonata\NewsBundle\SonataNewsBundle(),
            new Application\Sonata\NewsBundle\ApplicationSonataNewsBundle(),
            new Application\ServiceBundle\ServiceBundle(),
            new Application\ProduitBundle\ProduitBundle(),
            
             //new Sonata\TimelineBundle\SonataTimelineBundle(),
           // new Spy\TimelineBundle\SpyTimelineBundle(),
           // new Application\Sonata\TimelineBundle\ApplicationSonataTimelineBundle(),
            
             new FOS\RestBundle\FOSRestBundle(),
               new FOS\CommentBundle\FOSCommentBundle(),
                new JMS\SerializerBundle\JMSSerializerBundle($this),

            new Application\MailBundle\ApplicationMailBundle(),
            new Application\EcommerceBundle\EcommerceBundle(),
            new Ivory\GoogleMapBundle\IvoryGoogleMapBundle(),
            new Nomaya\SocialBundle\NomayaSocialBundle(),
            new Liuggio\StatsDClientBundle\LiuggioStatsDClientBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
