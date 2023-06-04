<?php
namespace FabiNiko\WebtCoreViewsInMvc;
require 'vendor/autoload.php';

use FabiNiko\WebtCoreViewsInMvc\ViewRenderer;
use FabiNiko\WebtCoreViewsInMvc\Hotel;
use FabiNiko\WebtCoreViewsInMvc\Seeder;

echo ViewRenderer::renderView('./templates/hotels/index.html',  Seeder::generateData());
