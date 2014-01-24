(function () {
    'use strict'

    var url = 'http://omaha3dprint.dev/form_controller.php'

    angular.module('OmahaPrintApp', [
        'angularFileUpload',
        'ui.bootstrap'
    ])

    .controller('ItemOrderCtrl', [
        '$scope', '$http', '$upload',
        function($scope, $http, $upload) {

            $scope.onFileSelect = function($files) {
                $scope.show_upload_progress = true
                $files.forEach(function($file) {
                    $scope.upload = $upload.upload({
                        url: url,
                        data: { myObj: $scope.myModelObj },
                        file: $file
                    }).progress(function(evt) {
                        $scope.file_upload_percent = parseInt(100.0 * evt.loaded / evt.total)
                    }).success(function(data, status, headers, config) {
                        $scope.show_upload_progress = false
                        $scope.file_upload_percent = 0
                        if (typeof $scope['queue'] === 'undefined') {
                            $scope.queue = new Array();
                            $scope.queue.push(data)
                        } else {
                            $scope.queue.push(data)
                        }
                        $scope.calculateTotals()
                    }).error(function(data) {
                        console.log(data)
                    })
                })
            }

            $scope.editObject = function(item) {
                item.edit = {
                    plastic : item.settings.plastic,
                    resolution : item.settings.resolution,
                    perimeter_layers : item.settings.perimeter_layers,
                    percent_infill : item.settings.percent_infill,
                    infill_type : item.settings.infill_type
                }
                item.show_settings = true
            }

            $scope.saveObject = function(item) {                
                item.saving_changes = true
                item.show_settings = false
                $http.post(url, item)
                    .success(function (data) {
                            item.thumbnail_url = data.thumbnail_url,
                            item.name = data.name,
                            item.price = parseFloat(data.price),
                            item.settings = data.settings,
                            item.saving_changes = false
                            $scope.calculateTotals()
                    })
                    .error(function () {
                            console.log('error I assume')
                            item.saving_changes = false
                        }
                    )
            }

            $scope.cancelSaveObject = function(item) {
                item.show_settings = false
                item.edit = null
            }

            $scope.deleteObject = function(item) {
                $scope.queue.splice($scope.queue.indexOf(item), 1)
                $scope.calculateTotals()
            }

            $scope.calculateTotals = function() {
                $scope.show_receipt_totals = true

                var receiptSubtotal = 0.0
                $scope.queue.forEach(function(item) {
                    receiptSubtotal = receiptSubtotal + item.price
                })

                $scope.totals = {
                    subtotal: receiptSubtotal,
                    shipping: $scope.queue.length * 1.2,
                    tax: receiptSubtotal * 0.2
                }
                $scope.totals.total = $scope.totals.subtotal + $scope.totals.tax + $scope.totals.shipping
            }

        }
    ])

}())