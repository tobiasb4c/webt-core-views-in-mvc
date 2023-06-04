<?php

namespace Tobi\Mvc;
require 'vendor/autoload.php';

use Tobi\Mvc\ViewRenderer;
use Tobi\Mvc\Hotel;
use Tobi\Mvc\Seeder;

echo ViewRenderer::renderView('./templates/hotels/index.html',  Seeder::generateData());
