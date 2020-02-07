<template>
    


      <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="card">
            <div class="card-header">Stock Create Page</div>
            <div class="card-body">
		<div class="col-md-12">
				<div class="card">
					<div class="card-header"> New Stock Name<button @click="addproduct" class="btn btn-success float-right">Add Product</button></div>
					<div class="card-body">

  <div class="form-group">
    <label for="exampleInputEmail1">Stock Name:</label>
    <input type="text" class="form-control" name="stock" 
    v-model="stock_name" 
    required
    @input="$v.stock_name.$touch()"
    @blur="$v.stock_name.$touch()"
     placeholder="Enter New name....">
     <label class="text-danger" v-for="data in stock_nameErrors ">{{data}}</label>
  </div>
 

					</div>
				</div>
        </div>


        <div class="container-fluid" v-for="(product,index) in products" >

<div class="row">
<div class="col-md-12">


<div class="card mt-3 ">
        
  <div class="card-header">Create Product Stock<button @click="deleteform(index)" class="btn btn-danger float-right">Cancel</button></div>
  <div class="card-body">
  <div class="row">
    <div class="col-md-5">
       <div class="form-group">
    <label for="exampleInputEmail1">Select Product </label>
    <select class="form-control" v-model="product.productname" >
                  <option value="1">Kilogram</option>
                  <option value="2">Pound</option>
                  <option value="3">Litter</option>
                  <option value="4">Packet</option>
                  <option value="5">Box</option>
                  <option value="6">Bottle</option>
            
                </select>
  </div>
  </div>

    <div class="col-md-3">

   <div class="form-group ">
    <label for="exampleInputEmail1">Quantity</label>
    <input type="number" class="form-control" 
    v-model="product.quantity"
    required
    @input="$v.products.quantity.$touch()"
    @blur="$v.products.quantity.$touch()">
  </div>
</div>

    <div class="col-md-2">

<div class="form-group ">
    <label for="exampleInputEmail1">P.U.B.P</label>
    <input type="number" class="form-control"   v-model="product.buyprice">
  </div>
</div>

    <div class="col-md-2">

<div class="form-group ">
    <label for="exampleInputEmail1">P.U.S.P</label>
    <input type="number" class="form-control"    v-model="product.sellprice">
  </div>
</div>
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Note</label>
    <textarea type="text" class="form-control" v-model="product.note"></textarea>
  </div>

 
</div>



  </div>

</div>
<button class="btn btn-success" @click="sendstock()" >Submit</button>
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
            product_category:[],
            stock_name:"",
              products:[
             {
                productname:'',
                quantity:'',
                buyprice:'',
                sellprice:'',
                note:'',
             }
         ]
            }
        },  
      methods:{
                sendstock(){
          axios.post('/sendstock',{stock:this.stock_name,products:this.products}).then((response)=>{
            console.log(response.data);
          })
        },
        addproduct(){
            this.products.push({
                productname:'',
                quantity:'',
                buyprice:'',
                sellprice:'',
                note:'',
            })
        },
        deleteform(index){
               if(this.products.length>1){
                this.products.splice(index, 1)
            }
        },
              getcategory(){
            axios.get('/productcategorydata').then((response)=>{
                this.product_category = response.data;
                })
        },
        getproduct(){
            console.log(this.products[0].product_category)
        }
    },
    created(){
      this.getcategory();
    },
     
    }
  </script>