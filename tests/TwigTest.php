<?php

include "Twig.php";

class TwigTest extends \PHPUnit\Framework\TestCase
{
    public function testTwig()
    {
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        $twig = new \Twig\Environment($loader, [
            'cache' => false,
        ]);
        $template = $twig->loadTemplate('index.html');

        $this->assertSame('Hello 123', $template->render(['name' => "123"]));
        callTwig();
    }
}
