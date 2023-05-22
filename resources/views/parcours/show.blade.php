
@extends('base')
@section('title','Parcours details')

@section('content')
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
              les détails d'un parcours
                      <span class="pull-right">
                          <button type="button" id="loading-btn" class="btn btn-warning btn-xs"><i class="fa fa-refresh"></i> Refresh</button>
                      </span>
                  </header>

              </section>
              <div class="row">
                  <div class="col-md-8">
                      <section class="panel">
                          <div class="bio-graph-heading project-heading">
                              <strong> Le parcours </strong>
                          </div>
                          <div class="panel-body bio-graph-info">
                              <!--<h1>New Dashboard BS3 </h1>-->
                              <div class="row p-details">
                                  <div class="bio-row">
                                      <p><span class="bold">Created by </span>: Jonathan Smith</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Status </span>: <span class="label label-primary">Active</span></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Created </span>: 13.05.2014 10:16:23</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Last Updated</span>: 22.08.2014 03:11:45</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Client </span>: <a href="#">Themeforest</a></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Version </span>: v.2.3</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Participants </span>:
                                      <span class="p-team">
                                          <a href="#"><img alt="image" class="" src="img/chat-avatar.jpg"></a>
                                          <a href="#"><img alt="image" class="" src="img/chat-avatar2.jpg"></a>
                                          <a href="#"><img alt="image" class="" src="img/pro-ac-1.png"></a>
                                      </span>
                                      </p>
                                  </div>

                                  <div class="col-lg-12">
                                      <dl class="dl-horizontal mtop20 p-progress">
                                          <dt>Project Completed:</dt>
                                          <dd>
                                              <div class="progress progress-striped active ">
                                                  <div style="width: 80%;" class="progress-bar progress-bar-success"></div>
                                              </div>
                                              <small>Project completed in <strong>80%</strong>. Remaining close the project, sign a contract and invoice.</small>
                                          </dd>
                                      </dl>
                                  </div>
                              </div>

                          </div>

                      </section>

                      <section class="panel">
                        <header class="panel-heading">
                          Last Activity
                        </header>
                        <div class="panel-body">
                            <table class="table table-hover p-table">
                          <thead>
                          <tr>
                              <th>Title</th>
                              <th>Start Time</th>
                              <th>End Time</th>
                              <th>Commnets</th>
                              <th>Status</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td>
                                  Project analysis
                              </td>
                              <td>
                                 18/11/2014 9:28:23
                              </td>
                              <td>
                                  28/11/2014 12:23:03
                              </td>
                              <td>
                                   Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                              </td>
                              <td>
                                  <span class="label label-info">Completed</span>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  Requirement Collection
                              </td>
                              <td>
                                  10/11/2014 9:28:23
                              </td>
                              <td>
                                  22/11/2014 12:23:03
                              </td>
                              <td>
                                  Tawseef Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                              </td>
                              <td>
                                  <span class="label label-info">Reported</span>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  Design Implement
                              </td>
                              <td>
                                  18/11/2014 9:28:23
                              </td>
                              <td>
                                  28/11/2014 12:23:03
                              </td>
                              <td>
                                  Dism Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                              </td>
                              <td>
                                  <span class="label label-info">Accepted</span>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  Widget Management
                              </td>
                              <td>
                                  18/11/2014 9:28:23
                              </td>
                              <td>
                                  28/11/2014 12:23:03
                              </td>
                              <td>
                                  Cosm Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                              </td>
                              <td>
                                  <span class="label label-info">Completed</span>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  Contact Info
                              </td>
                              <td>
                                  18/11/2014 9:28:23
                              </td>
                              <td>
                                  28/11/2014 12:23:03
                              </td>
                              <td>
                                  Hello that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                              </td>
                              <td>
                                  <span class="label label-info">Sent</span>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  Project analysis
                              </td>
                              <td>
                                  18/11/2014 9:28:23
                              </td>
                              <td>
                                  28/11/2014 12:23:03
                              </td>
                              <td>
                                   Ipsum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                              </td>
                              <td>
                                  <span class="label label-info">Completed</span>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  Project analysis
                              </td>
                              <td>
                                  18/11/2014 9:28:23
                              </td>
                              <td>
                                  28/11/2014 12:23:03
                              </td>
                              <td>
                                  Orem psum is that it has a as opposed to using Lorem Ipsum is that it has a as opposed to using
                              </td>
                              <td>
                                  <span class="label label-info">Completed</span>
                              </td>
                          </tr>
                          </tbody>
                          </table>
                        </div>
                      </section>

                  </div>
                  <div class="col-md-4">
                      <section class="panel">
                          <header class="panel-heading">
                              Projects Description
                          </header>

                          <div class="panel-body">
                              <a href="#"><img src="img/email-img/vector-lab.jpg" alt=""/></a>

                              <p>
                                  Sometimes the simplest things are the hardest to find. I imagined a line of my favorite pieces, the things i would live in every day, all year round. So I stopped looking and started designing. Sometimes the simplest things are the hardest to find. Sometimes the simplest things are the hardest to find. I imagined a line of my favorite pieces, the things i would live in every day, all year round. So I stopped looking and started designing. Sometimes the simplest things are the hardest to find.
                              </p>
                              <br/>
                              <h5 class="bold">Priority</h5>
                              <ul class="nav nav-pills nav-stacked labels-info ">
                                  <li><i class=" fa fa-circle text-danger"></i> High Priority </p></li>
                              </ul>

                              <br/>
                              <h5 class="bold">Project files</h5>
                              <ul class="list-unstyled p-files">
                                  <li><a href="#"><i class="fa fa-file-text"></i> Project-document.docx</a></li>
                                  <li><a href="#"><i class="fa fa-picture-o"></i> Logo-company.jpg</a></li>
                                  <li><a href="#"><i class="fa fa-mail-forward"></i> Email-from-flatbal.mln</a></li>
                                  <li><a href="#"><i class="fa fa-file"></i> Contract-10_12_2014.docx</a></li>
                              </ul>
                              <br/>

                              <h5 class="bold">Project Tags</h5>
                              <ul class="p-tag-list">
                                  <li><a href="#"><i class="fa fa-tag"></i> Dlor</a></li>
                                  <li><a href="#"><i class="fa fa-tag"></i> Lorem ipsum</a></li>
                                  <li><a href="#"><i class="fa fa-tag"></i> Google</a></li>
                                  <li><a href="#"><i class="fa fa-tag"></i> Excellent</a></li>
                                  <li><a href="#"><i class="fa fa-tag"></i> Dlor</a></li>
                                  <li><a href="#"><i class="fa fa-tag"></i> Lorem ipsum</a></li>
                                  <li><a href="#"><i class="fa fa-tag"></i> Google</a></li>
                                  <li><a href="#"><i class="fa fa-tag"></i> Excellent</a></li>
                              </ul>

                              <div class="text-center mtop20">
                                  <a href="#" class="btn btn-sm btn-primary">Add files</a>
                                  <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                              </div>
                          </div>

                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  @endsection