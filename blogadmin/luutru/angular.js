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



// CHECK ĐỊNH DẠNG
function CheckDinhDangHopLe(tenfile){
	// console.log(tenfile);
	if(tenfile.indexOf(".")>=0)
		var dinhdang = tenfile.split(".").pop();
	// console.log(dinhdang);	

	var FileHopLe = ['png', 'jpeg', 'jpg', 'gif', 'psd', 'pdf', 'eps', 'ai', 'indd', 'raw', 'zip', 'mp3', 'accdb', 'avi', 'csv', 'doc', 'docx', 'mdb', 'mov', 'mp4', 'pptx', 'txt'];
	for (i = 0; i<FileHopLe.length;i++)
		if (FileHopLe[i]==dinhdang)
			return 1;
		
		
		return 0;
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

			


			var uploadForm = new FormData();
			angular.forEach($scope.files, function(file){
				uploadForm.append('file[]', file);
			});

		// UPFILE
		if (CheckDinhDangHopLe(value[0]["name"])){
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
				console.log($scope.successMessage);
			})
		}else{
			$scope.error = true;
			$scope.errorMessage = "Định dạng này không được TASKVN hỗ trợ.";
		}
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