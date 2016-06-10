$scope.saveName = function(){
 if($scope.data.firstName && $scope.data.lastName){
  $scope.name = $scope.data.firstName + " " + $scope.data.lastName;
} else {
  alert("Please fill the required area");
  };

console.log("Submitting Form",user);






















app.controller("Page2Ctrl",function($scope)
{
app.service("formData",function(){
  return{
    form:{},
    getForm:function(){
      return this.form;
    },
    updateForm:function(form){
      this.form=form;
    }
  };
});