<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">

            </div>
            <div class="pull-left info">
                <p></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Home', 'icon' => 'fa fa-home', 
                            'url' => ['/'], 'active' => $this->context->route == 'site/index'
                        ],
                        [
                            'label' => 'About LGU',
                            'icon' => 'fa fa-institution',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => 'History',
									'icon' => 'fa fa-history',
                                    'url' => '?r=site/history',
				    'active' => $this->context->route == 'history/index'
                                ],
                                [
                                    'label' => 'Mission and Vision',
									'icon' => 'fa fa-eye',
                                    'url' => '?r=site/mission',
				    'active' => $this->context->route == 'mission/index'
                                ],
								 [
                                    'label' => 'LGU Organization',
									'icon' => 'fa fa-group',
                                    'url' => '?r=master2/',
				    'active' => $this->context->route == 'lguorganization/index'
                                ],
								 [
                                    'label' => 'Socio Economic Profile',
									'icon' => 'fa fa-user',
                                    'url' => '?r=master2/',
				    'active' => $this->context->route == 'socioeconomicprofile/index'
                                ]
                            ]
                        ],
						[
                            'label' => 'Certification',
                            'icon' => 'fa fa-certificate',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => 'Residency',
                                    'url' => '?r=site/residency',
				    'active' => $this->context->route == 'residency/index'
                                ],
                                [
                                    'label' => 'Clearance',
                                    'url' => '?r=clearance',
				    'active' => $this->context->route == 'clearance/index'
                                ],
								 [
                                    'label' => 'Indigency',
                                    'url' => '?r=occupation/',
				    'active' => $this->context->route == 'occupation/index'
                                ],
								 [
                                    'label' => 'Business',
                                    'url' => '?r=Businessuser/',
				    'active' => $this->context->route == 'business/index'
                                ],
								[
                                    'label' => 'Others',
                                    'url' => '?r=Othersuser/',
				    'active' => $this->context->route == 'Others/index'
                                ],
                            ]
                        ],
                        [
                            'label' => 'Registration',
                            'icon' => 'fa fa-users',
                            'url' => ['#'],
							'items' => [
								[
								    'label' => 'Citizen',
									'icon' => 'fa fa-users',
									'url' => '?r=citizen%2Fcreate/',
							'active' => $this->context->route == 'citizen/index'
									],
								
								
									[
										'label' => 'Business',
										'icon' => 'fa fa-briefcase',
									'url' => '?r=newbusiness/',
							'active' => $this->context->route == 'user/index'
									],
									]
								],  
					[
                            'label' => 'Security',
                            'icon' => 'fa fa-key',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => 'Groups',
                                    'url' => '?r=site/psgctabs/',
				    'active' => $this->context->route == 'residency/index'
                                ],
								
																 
                                [
                                    'label' => 'User',
                                    'url' => '?r=Clearanceuser/',
				    'active' => $this->context->route == 'clearance/index'
                                ],
								 [
                                    'label' => 'Permission',
                                    'url' => '?r=Indigencyuser/',
				    'active' => $this->context->route == 'indigency/index'
                                ],
								 [
                                    'label' => 'Role',
                                    'url' => '?r=Businessuser/',
				    'active' => $this->context->route == 'business/index'
                                ],
								
                            ]
                    ],
					[
                            'label' => 'Setup',
                            'icon' => 'fa fa-wrench',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => 'PSGC',
                                    'url' => '?r=site/residencyuser/',
				    'active' => $this->context->route == 'PSGC/index'
                                ],
                                [
                                    'label' => 'Citizen Characteristics',
                                    'url' => '?r=Clearanceuser/',
				    'active' => $this->context->route == 'clearnce/index'
                                ],
								 [
                                    'label' => 'Business Characteristics',
                                    'url' => '?r=Indigencyuser/',
				    'active' => $this->context->route == 'indigency/index'
                                ],
								 [
                                    'label' => 'Taxes, Fees, and Charges',
                                    'url' => '?r=site/geological/',
				    'active' => $this->context->route == 'business/index'
                                ],
								[
                                    'label' => 'LGU Information',
                                    'url' => '?r=lguprofile%2Fcreate',
				    'active' => $this->context->route == 'lguinfo/index'
                                ],
								
                            ]
                    ]
				],
			]
		)						
		 ?>
        
    </section>
    <!-- /.sidebar -->
</aside>
