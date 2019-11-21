
<?php
use yii\helpers\Html;

?>

<div class="card mt-4">
           <div class="card-body p-0">
               <div class="table-responsive">
                   <table class="table">
                       <thead>
                           <tr>
                               <th scope="col">#</th>
                               <th scope="col">NOME</th>
                               <th scope="col">SEXO</th>
                               <th scope="col">CNI</th>
                               <th scope="col">OPÇÃO</th>

                           </tr>
                       </thead>
                       <tbody>
                          
                           <?php foreach($model as $paciet): ?>
                            <tr>
                                <th scope="row"><?= $paciet->id_paciente?></th>
                                <td>
                                     <?= $paciet->nome?>
                                </td>
                                <td>
                                      <?= $paciet->sexo?>
                                </td>
                                <td>
                                     <?= $paciet->cni?>
                                </td>
                                <td class="button-rigth mr-10">
                                    <div class="button-rigth">
                                       <!-- <button type="button" class="btn btn-warning">Visualizar</button>-->
                                        <?= Html::a('Visualização', ['paciente/view', 'id' => $paciet->id_paciente], ['class' => 'btn btn-warning']) ?> 
                                        <!--<button type="button" class="btn btn-primary">Edit</button>-->
                                        <?= Html::a('Active', ['active', 'id' => $paciet->id_paciente], ['class' => 'btn btn-primary']) ?> 
                                    </div>
                                </td>

                            </tr>
                            
                           <?php endforeach; ?>
                           
                       </tbody>
                   </table>
               </div>
           </div>
       </div>

<?php
$script = <<<JS
$(document).ready(function(){
$('#smartwizard').smartWizard();
}); 
JS;
$this->registerJS($script);
?>