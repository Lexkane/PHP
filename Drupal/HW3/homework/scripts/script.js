var data = document.getElementById("data");
var taskList = document.getElementById("taskList");
var set= new Set();
var counter = 0;
 
function addtask(){
var inputdata = document.getElementById('data').value;
var x=inputdata.toLowerCase();
   var html =  '<div class="row" id="data'+counter+'" style="margin-bottom:15px;">'+
    '<div class="col-md-6 col-sm-12 col-xs-12">'+
      '<input type="text" class="form-control" value="'+inputdata+'" disabled>'+
    '</div>'+
    '<div class="col-md-2 col-sm-4 col-xs-4">'+
      '<button type="button" class="btn btn-success" onclick="edit(this.id)" id="edit'+counter+'">Edit</button>'+
    '</div>'+

    '<div class="col-md-2 col-sm-4 col-xs-4">'+
      '<button type="button" class="btn btn-success" onclick="update(this.id)" id="update'+counter+'">Update</button>'+
    '</div>'+
    '<div class="col-md-2 col-sm-4 col-xs-4">'+
      '<button type="button" class="btn btn-danger" onclick="remove(this.id)" id="delete'+counter+'">Delete</button>'+
    '</div>'+
  '</div>';
  if ( x!=undefined && (set.has(x)!=true) ){
  document.getElementById('taskList').insertAdjacentHTML('beforeend', html);
  counter++;
  set.add(x);
  }
  }

function edit(editId){
  var parent =  document.getElementById(editId).parentNode.parentNode;
  var child = parent.firstChild.firstChild;
  child.removeAttribute('disabled');
  }

function update(updateId){
  var parent =   document.getElementById(updateId).parentNode.parentNode;
  var child = parent.firstChild.firstChild;
  child.setAttribute("disabled",'disabled');
  }

function remove(deleteId){
  var parent =   document.getElementById(deleteId).parentNode.parentNode;
  parent.remove();
  
 }