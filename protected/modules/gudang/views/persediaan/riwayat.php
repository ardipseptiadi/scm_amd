<?php
/* @var $this AgenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Riwayat Persediaan' => array('index'),
);

$this->menu=array(
	array('label'=>'Create Persediaan', 'url'=>array('create')),
	array('label'=>'Manage Persediaan', 'url'=>array('admin')),
);
?>


<div class="row-fluid">
	<div class="span12">
		<div class="top-bar">
			<h3><i class="icon-eye-open"></i> Riwayat Persediaan</h3>
		</div>

		<div class="well no-padding">
			<?php $this->widget('AmidisGridView',array(
					'dataProvider' => $dataProvider,
					'columns' => array(
						array(
							'header' => 'Material',
							'name' => 'material',
							'value' => '$data->material->nama'
						),
						'stok',
						array(
							'header' => 'Status Riwayat',
							'name' => 'riwayat',
							'value' => function($data){
                    if($data->status ==1){
                      $stat = "Ditambah";
                      }else if($data->status == 2){
                        $stat = "Dikurang";
                        }else{
                          $stat = "Tidak Diketahui";
                          }
                  return $stat;
                }
						),
            'tanggal',
					)
			)); ?>
		</div>
	</div>
</div>

<?php
// $this->widget('zii.widgets.CListView', array(
// 	'dataProvider'=>$dataProvider,
// 	'itemView'=>'_view',
// ));
?>
