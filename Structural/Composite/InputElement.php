 <?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午5:15
 */

 class InputElement implements RenderableIF
 {
     public function render(): string
     {
         return '<input type="text" />';
     }
 }