<?php
namespace My\FrontendBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setCurrentUri($this->container->get('request')->getRequestUri());

        $menu->addChild('Lorem', array('route' => 'czarnykotek'));
        $menu->addChild('Ipsum', array('route' => 'niebieskimotylek'));
        $menu->addChild('Dolor', array('route' => 'url_dolor'));


        $menu
            ->addChild('Open', array('route' => 'czarnykotek'))
            ->addChild('File', array('route' => 'czarnykotek'));

        return $menu;
    }
}