<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
    <div class = "panel panel-default">
   <div class = "panel-heading">Panel Heading</div>
   
   <table class = "table">
      <tr>
         <th>Product</th>
         <th>Price </th>
      </tr>
      
      <tr>
         <td>Product A</td>
         <td>200</td>
      </tr>
      
      <tr>
         <td>Product B</td>
         <td>400</td>
      </tr>
   </table>
   
</div>
</div>
