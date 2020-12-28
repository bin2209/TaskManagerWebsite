var app = angular.module('app', []);
app.directive('fileInput', ['$parse', function ($parse) {
	return {
		restrict: 'A',
		link: function($scope, elm, attrs){
			elm.bind('change', function(){
				$parse(attrs.fileInput).assign($scope, elm[0].files);
				$scope.$apply();
				// console.log($scope["type"]);	
			});
		}
	}
	console.log ($scope["name"]);
	$check = json_encode($scope);
	// console.log ($check);
}]);

function CheckDinhDangHopLe(tenfile){
	console.log(tenfile);
	if(tenfile.indexOf(".")>=0)
	var dinhdang = tenfile.split(".").pop();
	console.log(dinhdang);

}
app.controller('uploader', function($scope, $http){
	$scope.error = false;
	$scope.errorMessage = "";
	$scope.success = false;
	$scope.successMessage = "";
	$scope.upload = function(){
		var uploadForm = new FormData();

		angular.forEach($scope.files, function (file) {
			uploadForm.append('file', file);
		});

		var value = uploadForm.getAll('file');

		// CheckDinhDangHopLe(value[0]["name"]);


		var uploadForm = new FormData();
		angular.forEach($scope.files, function(file){
			uploadForm.append('file[]', file);
		});

		//ELSE
		$http.post('upload.php', uploadForm, {
			transformRequest:angular.identity, 
			headers: {'Content-Type':undefined, 'Process-Data': false}
		}).success(function(response){
			console.log(response);
			if(response.error){
				$scope.error = true;
				$scope.errorMessage = response.message;
			}
			else{
				$scope.success = true;
				$scope.successMessage = response.message;
				$scope.fetch();
			}
		})
	}

	$scope.fetch = function(){
		$http.get('fetch.php')
		.success(function(data){
			$scope.images = data;
		});

	}

	$scope.clearMessage = function(){
		$scope.error = false;
		$scope.errorMessage = "";
		$scope.success = false;
		$scope.successMessage = "";
	}	
});