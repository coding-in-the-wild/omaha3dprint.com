<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Omaha 3D Print</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link href="./assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="./assets/css/jquery.fileupload-ui.css" rel="stylesheet">
    <link href="./assets/css/omaha3dprint.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body ng-app="OmahaPrintApp">

    <div class="container marketing">
        <div class="featurette" id="order" ng-controller="ItemOrderCtrl">
            <h2 class="featurette-heading">Order Parts. <span class="muted">Have some 3D parts, fast.</span></h2>
                <div class="container">
                    <div class="row">
                        <div class="span2"></div>
                        <div class="span6 well">
                            <form class="form-horizontal">
                                <div class="receipt-item-form">


<div class="file-upload-box">
    <p class="lead">Add files here, then adjust the print settings.
        <span class="btn btn-success fileinput-button pull-right">
            <i class="glyphicon glyphicon-plus"></i>
            <span>Select files</span>
            <input id="fileupload" type="file" name="files[]" multiple ng-file-select="onFileSelect($files)">
        </span>
    </p>
    <div ng-hide="!show_upload_progress" id="file-upload-progress" class="progress progress-striped"><div class="bar" style="width: {{file_upload_percent}}%;"></div></div>
</div>

<table class="table receipt-item-list">
    <tbody>
        <tr data-ng-repeat="file in queue">
            <td>
                <div class="row">
                    <div class="edit-item" ng-hide="!file.saving_changes"></div>
                    <div class="span"><img src="{{file.thumbnail_url}}" width="120px" class="file-preview"></div>
                    <div class="span">
                        <p class="file-name">{{file.name}}</p>

                        <p class="file-settings" ng-hide="file.show_settings" ng-click="editObject(file)">
                            {{file.settings.plastic}}<br>
                            {{file.settings.resolution}}mm layers<br>
                            {{file.settings.perimeter_layers}} perimeter layers<br>
                            {{file.settings.percent_infill}}% {{file.settings.infill_type}} infill
                        </p>

                        <div class="form-horizontal item-settings" ng-hide="!file.show_settings">
                            <div class="control-group">
                                <label class="control-label">Color</label>
                                <div class="controls">
                                    <div class="btn-group">
                                        <button class="btn" ng-model="file.edit.plastic" btn-radio="'White ABS'">White ABS</button>
                                        <button class="btn" ng-model="file.edit.plastic" btn-radio="'Black ABS'">Black ABS</button>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Resolution (mm)</label>
                                <div class="controls">
                                    <div class="btn-group">
                                        <button class="btn" ng-model="file.edit.resolution" btn-radio="'0.1'">0.1</button>
                                        <button class="btn" ng-model="file.edit.resolution" btn-radio="'0.2'">0.2</button>
                                        <button class="btn" ng-model="file.edit.resolution" btn-radio="'0.3'">0.3</button>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Outside layers</label>
                                <div class="controls">
                                    <div class="btn-group">
                                        <button class="btn" ng-model="file.edit.perimeter_layers" btn-radio="'1'">1</button>
                                        <button class="btn" ng-model="file.edit.perimeter_layers" btn-radio="'2'">2</button>
                                        <button class="btn" ng-model="file.edit.perimeter_layers" btn-radio="'3'">3</button>
                                        <button class="btn" ng-model="file.edit.perimeter_layers" btn-radio="'4'">4</button>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Infill</label>
                                <div class="controls">
                                    <div class="custom-button-group">
                                        <div class="btn-group">
                                            <button class="btn" ng-model="file.edit.infill_type" btn-radio="'solid'">solid</button>
                                            <button class="btn" ng-model="file.edit.infill_type" btn-radio="'honeycomb'">honeycomb</button>
                                            <button class="btn" ng-model="file.edit.infill_type" btn-radio="'linear'">linear</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Infill percent</label>
                                <div class="controls">
                                    <div class="btn-group">
                                        <div class="button-row-bottom" ng-hide="false">
                                            <div class="input-append"><input type="text" class="input-mini" ng-model="file.edit.percent_infill"><span class="add-on">%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="submit" class="btn" ng-click="cancelSaveObject(file)" value="Cancel">
                                    <input type="submit" class="btn btn-primary" ng-click="saveObject(file)" value="Save">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span pull-right delete-receipt-item" ng-click="deleteObject(file)">X</div>
                    <div class="span pull-right" ng-hide="true">
                        ALERTS AND SUCH?
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<hr>

<div class="receipt-next-action" ng-hide="show_address_form">
    <span class="pull-right"><a href="#address-form" ng-click="show_address_form=true">NEXT: Add shipping information</a></span>
    <br><br>
</div>

<div class="contact-information-form" id="address-form" ng-hide="!show_address_form">
    <div class="control-group">
        <label class="control-label" for="inputEmail">Email Address</label>
        <div class="controls"><input type="text" id="inputEmail" name="inputEmail" placeholder="Email..." ng-model="contact.email"></div>
    </div>
    <div class="control-group">
        <label class="control-label" for="shippingName">Shipping address</label>
        <div class="controls"><span class="help-block">Name</span><input type="text" id="shipping-name" name="shipping-name" ng-model="contact.name"></div><br>
        <div class="controls"><span class="help-block">Street address</span><input type="text" id="shipping-address" name="shipping-address" ng-model="contact.street"></div><br>
        <div class="controls"><span class="help-block">City</span><input type="text" id="shipping-city" name="shipping-city" ng-model="contact.city"></div><br>
        <div class="controls"><span class="help-block">State</span><input type="text" id="shipping-state" name="shipping-state" class="input-small" ng-model="contact.state"></div><br>
        <div class="controls"><span class="help-block">Postal Code</span><input type="text" id="shipping-postal-code" name="shipping-postal-code" class="input-medium" ng-model="contact.postal"></div><br>
    </div>
    <hr>
</div>

<div class="receipt-total-form" ng-hide="!show_receipt_totals">
    <p class="receipt-cost receipt-cost-subtotal">Subtotal: {{totals.subtotal | currency}}</p>
    <p ng-hide="receiptCostShipping" class="receipt-cost">Shipping: {{totals.shipping | currency}}</p>
    <p ng-hide="receiptCostTax" class="receipt-cost">Tax: {{totals.tax | currency}}</p>
    <p ng-hide="receiptCostTotal" class="receipt-cost receipt-cost-total">Total: {{totals.total | currency}}</p>
    <hr>
</div>

<div class="receipt-next-action" ng-hide="!show_final_ticket">
    <span class="pull-right"><a href="#" ng-click="">NEXT: Review and purchase!</a></span>
    <br><br>
</div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="featurette-divider">

            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2013 Davis Research Group</p>
            </footer>
        </div>
        <script src="./assets/js/angular-file-upload-master/angular-file-upload-shim.min.js"></script>
        <script src="./assets/js/angular.min.js"></script>
        <script src="./assets/js/angular-file-upload-master/angular-file-upload.min.js"></script>
        <script src="./assets/js/ui-bootstrap-tpls-0.6.0.min.js"></script>
        <script src="./assets/js/jquery.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/omaha3dprint.js"></script>

    </body>
</html>
