
@extends('base')
@section('title', 'télécharger papier')
@section('content')
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      jQuery File Upload Demo
                  </header>
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-md-12">
                              <p>Supports cross-domain, chunked and resumable file uploads and client-side image resizing. <br>
                                  Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads. </p>
                              <br>
                              <br>
                              <!-- The file upload form used as target for the file upload widget -->
                              <form id="fileupload" action="http://jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
                                  <!-- Redirect browsers with JavaScript disabled to the origin page -->
                                  <noscript>
                                      <input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/">
                                  </noscript>
                                  <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                  <div class="row fileupload-buttonbar">
                                      <div class="col-lg-7">
                                          <!-- The fileinput-button span is used to style the file input field as button -->
                                        <span class="btn btn-success fileinput-button">
                                        <i class="glyphicon glyphicon-plus"></i>
                                        <span>Add files...</span>
                                        <input type="file" name="files[]" multiple>
                                        </span>
                                          <button type="submit" class="btn btn-primary start">
                                              <i class="glyphicon glyphicon-upload"></i>
                                              <span>Start upload</span>
                                          </button>
                                          <button type="reset" class="btn btn-warning cancel">
                                              <i class="glyphicon glyphicon-ban-circle"></i>
                                              <span>Cancel upload</span>
                                          </button>
                                          <button type="button" class="btn btn-danger delete">
                                              <i class="glyphicon glyphicon-trash"></i>
                                              <span>Delete</span>
                                          </button>
                                          <input type="checkbox" class="toggle">
                                          <!-- The global file processing state -->
                                          <span class="fileupload-process"></span>
                                      </div>
                                      <!-- The global progress state -->
                                      <div class="col-lg-5 fileupload-progress fade">
                                          <!-- The global progress bar -->
                                          <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                              <div class="progress-bar progress-bar-success" style="width:0%;">
                                              </div>
                                          </div>
                                          <!-- The extended global progress state -->
                                          <div class="progress-extended">
                                              &nbsp;
                                          </div>
                                      </div>
                                  </div>
                                  <!-- The table listing the files available for upload/download -->
                                  <table role="presentation" class="table table-striped">
                                      <tbody class="files">
                                      </tbody>
                                  </table>
                              </form>
                              <br>
                              <div class="panel panel-default">
                                  <div class="panel-heading">
                                      <h3 class="panel-title">Demo Notes</h3>
                                  </div>
                                  <div class="panel-body">
                                      <ul>
                                          <li>The maximum file size for uploads in this demo is <strong>5 MB</strong> (default file size is unlimited).</li>
                                          <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction).</li>
                                          <li>Uploaded files will be deleted automatically after <strong>5 minutes</strong> (demo setting).</li>
                                          <li>You can <strong>drag &amp; drop</strong> files from your desktop on this webpage (see <a href="https://github.com/blueimp/jQuery-File-Upload/wiki/Browser-support">Browser support</a>).</li>
                                          <li>Please refer to the <a href="https://github.com/blueimp/jQuery-File-Upload">project website</a> and <a href="https://github.com/blueimp/jQuery-File-Upload/wiki">documentation</a> for more information.</li>
                                          <li>Built with Twitter's <a href="http://twitter.github.com/bootstrap/">Bootstrap</a> CSS framework and Icons from <a href="http://glyphicons.com/">Glyphicons</a>.</li>
                                      </ul>
                                  </div>
                              </div>
                              <!-- The blueimp Gallery widget -->
                              <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                                  <div class="slides">
                                  </div>
                                  <h3 class="title"></h3>
                                  <a class="prev">‹</a>
                                  <a class="next">›</a>
                                  <a class="close">×</a>
                                  <a class="play-pause"></a>
                                  <ol class="indicator">
                                  </ol>
                              </div>

                          </div>
                      </div>

                  </div>
              </section>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
    @endsection