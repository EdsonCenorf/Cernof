<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
<div class="cordefundo2">
                        <div class="container mt-3">
                            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-primary">
                                <!---- <a class="navbar-brand" href="#">Navbar</a>-->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                  </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="nav  menup mb-5 pt-5" id="myTab" role="tab">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="Todos-tab" data-toggle="tab" href="#Todos" role="nav-pills" aria-controls="Todos" aria-selected="true">Dados Pesoais</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Situação Sócio-Familiar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Situação Profissional</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Dependência</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#cultura" role="tab" aria-controls="cultura" aria-selected="false">Foto</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                            <!-- Tab panes -->
                            <div class="tab-content mt-4 ">
                                <div class="tab-pane active" id="Todos" role="tabpanel" aria-labelledby="nav-pills">
                                   
                                     <div class="row">
                                         <div class="col-sm-2">
                                              <button type="button" class="btn btn-warning">crear</button>
                                         </div>
                                         <div class="col-sm-10 text-right">
                                            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="button">
                                                            <i class="fas fa-search fa-sm"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                         </div>

                                     </div>
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
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                edson de jesus vieira tavares
                                                            </td>
                                                            <td>Masculino</td>
                                                            <td>975633</td>
                                                            <td class="button-rigth mr-10">
                                                                <div  class="button-rigth">
                                                                    <button type="button" class="btn btn-warning">Visualizar</button>
                                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                Susy
                                                            </td>
                                                            <td>Fiminino</td>
                                                            <td>645789</td>
                                                            <td>
                                                                <div  class="button-rigth">
                                                                    <button type="button" class="btn btn-warning">visualizar</button>
                                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                edson
                                                            </td>
                                                            <td>Masculino</td>
                                                            <td>975633</td>
                                                            <td>
                                                                <div class="button-rigth mr-10">
                                                                    <button type="button" class="btn btn-warning">Visualizar</button>
                                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                                </div>

                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row mt-2">
                                        <div class="col-sm-12 text-right">
                                            <button class="btn btn-primary btn-primary--create">
                                                Salvar
                                            </button>
                                        </div>
                                     </div>
                                </div>

                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    567
                                </div>
                                <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                    2
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                    12
                                </div>
                                <div class="tab-pane" id="cultura" role="tabpanel" aria-labelledby="settings-tab">
                                    8
                                </div>

                            </div>
                        </div>

                    </div>
</div>
