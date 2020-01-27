<template>
   
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Product Category</a> </div>
  <h1>Product Category</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span9">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add New Product Category</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#"  class="form-horizontal">
            <div class="control-group">
              <label class="control-label">New Category Name :</label>
              <div class="controls">
                <input type="text" class="span9" placeholder="First name" name="Category" v-model="name" />
              </div>
            </div>

            <div class="form-actions">
              <button @click="click()" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>

    </div>

  </div>
  </div>
  


<hr>

 <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Product Category</h5>
            <span class="label label-info">Featured</span> </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Rice</td>
                  <td><span class="date badge badge-success">Active</span></td>
                  <td>
                    <a href="#" class="btn btn-mini btn-success"><span class="icon"><i class="icon-edit"></i></span> Edit<a>
                    <a href="#" class="btn btn-mini btn-danger"><span class="icon"><i class="icon-trash"></i></span> Delete</a> 
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Oil</td>
                  <td><span class="date badge badge-warning">Deactive</span></td>
                  <td>
                    <a href="#" class="btn btn-mini btn-success"><span class="icon"><i class="icon-edit"></i></span> Edit<a>
                    <a href="#" class="btn btn-mini btn-danger"><span class="icon"><i class="icon-trash"></i></span> Delete</a> 
                  </td>
                </tr>
              
              </tbody>
            </table>
          </div>
          </div>
  </div>


</template>
  <script>
    export default{
      data(){
        return{
          name:'hello'
        }
      },
      methods:{
        click(){
          console.log(this.name)
        }
      }
    }
  </script>