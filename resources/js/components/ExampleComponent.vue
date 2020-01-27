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
    :error-messages="categoryErrors" 
    required
    @input="$v.category.$touch()"
    @blur="$v.category.$touch()"
     >
   <label class="text-danger" v-for="data in categoryErrors ">{{data}}</label>
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
                    <td>{{data.status}}</td>
                    <td><button class="btn btn-danger">Delete</button></td>
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
            }
        },
        methods:{
           submit(){
            if(this.data.category.length > 0){
                   axios.post('/add_category',this.data).then((response)=>{
                 console.log(response.data);
                 this.data.category = ''
                })
            }
        },
        getcate(){ 
           axios.get('/productcategorydata').then((response)=>{
                 this.categorydata = response.data ;
                })
        },
    },
      validations:{
            category:{ required, minLength: minLength(3),  },
        },
        computed:{
          categoryErrors(){
            const errors =[];
            if(!this.$v.category.$dirty) return errors;
            !this.$v.category.required && errors.push("Category is required.");
            !this.$v.category.minLength && errors.push("Give the minmum required value.");
            return errors;
          }
        },
        created(){
          this.getcate();
        }
}
</script>
