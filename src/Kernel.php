<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Vich\UploaderBundle\VichUploaderBundle;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

}
