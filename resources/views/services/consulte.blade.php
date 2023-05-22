@extends('layout1')
@section('title', 'Agents')
@section('content')
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
            
      <div class="mail-box">
                  <aside class="sm-side">
                      <div class="user-head">
                          <a href="javascript:;" class="inbox-avatar">
                                <img src="/img/{{$agent->agen}}" alt="">
                          </a>
                          <div class="user-name">
                              <h5><a href="#">{{$agent->prenom}}{{$agent->nom}}</a></h5>
                              <span><a href="#">{{$agent->email}}</a></span>
                          </div>
                          <a href="javascript:;" class="mail-dropdown pull-right">
                              <i class="fa fa-chevron-down"></i>
                          </a>
                      </div>
                      <div class="inbox-body">
                          <a class="btn btn-compose" data-toggle="modal" href="#myModal">
                           Envoyer réponse au client
                          </a>
                          <!-- Modal -->
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title"> Envoyer réponse au client</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" role="form">
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">à</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="inputEmail1" placeholder="">
                                                  </div>
                                              </div>
                          
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Objet</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="inputPassword1" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Message</label>
                                                  <div class="col-lg-10">
                                                      <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                      <button type="submit" class="btn btn-send">Envoyer</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                      </div>
                      <ul class="inbox-nav inbox-divider">
                          <li class="active">
                              <a href="#"><i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right">2</span></a>

                          </li>
                          <li>
                              <a href="#"><i class="fa fa-envelope-o"></i> Sent Mail</a>
                          </li>
                          <li>
                              <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
                          </li>
                          <li>
                              <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="label label-info pull-right">30</span></a>
                          </li>
                          <li>
                              <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
                          </li>
                      </ul>
                      
                     
                      <div class="inbox-body text-center">
                          <div class="btn-group">
                              <a href="javascript:;" class="btn mini btn-primary">
                                  <i class="fa fa-plus"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a href="javascript:;" class="btn mini btn-success">
                                  <i class="fa fa-phone"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a href="javascript:;" class="btn mini btn-info">
                                  <i class="fa fa-cog"></i>
                              </a>
                          </div>
                      </div>

                  </aside>
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>Parcours</h3>
                          <form class="pull-right position" action="#">
                              <div class="input-append">
                                  <input type="text"  placeholder="Search Mail" class="sr-input">
                                  <button type="button" class="btn sr-btn"><i class="fa fa-search"></i></button>
                              </div>
                          </form>
                      </div>
                      <div class="inbox-body">
                         <div class="mail-option">
                            <ul class="unstyled inbox-pagination">
                                 <li><span>1-50 of 234</span></li>
                                 <li>
                                     <a href="#" class="np-btn"><i class="fa fa-angle-left  pagination-left"></i></a>
                                 </li>
                                 <li>
                                     <a href="#" class="np-btn"><i class="fa fa-angle-right pagination-right"></i></a>
                                 </li>
                             </ul>
                         </div>
                          <table class="table table-inbox table-hover">
                            <tbody>
                
                              <tr class="active">
                                
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message  dont-show">{{$service->designation}}</td>
                                  <td class="view-message ">{{$client->email}}</td>
                                  <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                 
                                  </tr>
                          </tbody>
                          </table>
                          
                      </div>
                  </aside>
              </div>
              <!--mail inbox end-->
          </section>
      </section>
      </li></li></ul>
      </li>
      </li>
      </ul>
      </aside>
      </div>
      </section>
      </section>

      <!--main content end-->
      @endsection