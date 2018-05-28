<?php

use yii\bootstrap\Tabs;
use backend\models\Region;
use backend\models\RegionSearch;
/* @var $this yii\web\View */


?>
<?php $this->title = 'Philippine Standard Geographic Code'; ?>
</br>


<?php
 echo Tabs::widget([
      'items' => [
          [
              'label' => 'Region',
			  'headerOptions' => ['tab' => 'div'],
			 // 'url' => '?r=region/index',
              'content' => $this->renderPartial('region/index', null, true),
				
           //   'active' => $this->context->route == 'region/index'
          ],
          [
              'label' => 'Two',
              'content' => 'Anim pariatur cliche...',
              'headerOptions' => ['tab' => 'div'],
              'options' => ['id' => 'myveryownID'],
          ],
          [
              'label' => 'Example',
              'url' => 'http://www.example.com',
          ],
          [
              'label' => 'Dropdown',
              'items' => [
                   [
                       'label' => 'DropdownA',
                       'content' => 'DropdownA, Anim pariatur liche...',
                   ],
                   [
                       'label' => 'DropdownB',
                       'content' => 'DropdownB, Anim pariatur cliche...',
                   ],
                   [
                       'label' => 'External Link',
                       'url' => 'http://www.example.com',
                   ],
              ],
          ],
      ],
	 ])
 ?> 