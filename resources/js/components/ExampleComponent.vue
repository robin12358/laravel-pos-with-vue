<template>


      <div class="container-fluid">
      <div class="container">
        <div class="row">
		<div class="col-md-10">
				<div class="card">
					<div class="card-header">Product Category</div>
					<div class="card-body">

  <div class="form-group">
    <label for="exampleInputEmail1">New Product Category</label>
    
    <input
    class="form-control"
     v-model="data.category"
   
     >
  </div>
 
  <button @click="submit()" class="btn btn-success">Submit</button>

					</div>
				</div>
        </div>


        <div class="container-fluid">

<div class="row">
<div class="col-md-10">


<div class="card mt-3 ">
  <div class="card-header">Product Category Table</div>
  <div class="card-body">
  <table class="table table-bordered">
								<thead>
                  <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(data,index) in categorydata">
                    <td>{{data.name}}</td>
                    <td>
                      <button v-if="data.status == 1" @click="status(data.product_categories_id,index)" class="btn btn-success">Active</button>
                      <button v-if="data.status == 0" @click="status(data.product_categories_id,index)" class="btn btn-warning">Deactive</button>
                    </td>
                    <td><button @click="del(data.product_categories_id,index)"  class="btn btn-danger">Delete</button></td>
                  </tr>
                   
                 
                </tbody>
						</table>
</div>



  

</div>

</div>
</div>
</div>


      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    </div>
    <!-- /.content-wrapper -->





    <!-- /.content-wrapper -->


</template>

<script>
import Vuelidate from 'vuelidate';
import { required,minLength } from  'vuelidate/lib/validators';
Vue.use(Vuelidate)
    export default {
        data(){
            return{
                data:{
                    category:'',
                },
                    
                    categorydata: [],   
                    changestatus: '',
            }
        },
        methods:{
           submit(){
            if(this.data.category.length > 0){
                   axios.post('/add_category',this.data).then((response)=>{
                 console.log(response.data);
                 this.categorydata.push(response.data)
                 this.data.category = ''
                })
            }
        },
        getcate(){ 
           axios.get('/productcategorydata').then((response)=>{
                 this.categorydata = response.data ;
                })
        },
        del(get_id,index){
          if(confirm("Do you want to delete this product category.")){
                     axios.post(`/delproductcategory/${get_id}`).then(
                 (response)=>this.categorydata.splice(index,1)
                )
                }
        },
        status(get_id,index){
              
               axios.post(`/change_prod_cate_sta/${get_id}`).then((response)=>{
                 if(response.data == 200){
                   if(this.categorydata[index].status == 1){
                     this.categorydata[index].status = 0
                   }
                   else{
                      this.categorydata[index].status = 1

                   }
                 }
               
                })
        },
    },
   
        created(){
          this.getcate();
        }
}
</script>
