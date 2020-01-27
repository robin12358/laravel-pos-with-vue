<template>




      <div class="container-fluid">
      <div class="container">
        <div class="row">
		<div class="col-md-10">
				<div class="card">
					<div class="card-header">Product Category</div>
					<div class="card-body">
   <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" class="form-control"  v-model="list.product_name"  placeholder="Product name">
  </div>
<div class="row">
    <div class="form-group col-sm-6">
    <label for="exampleInputEmail1">Select Product Category</label>
    <select class="form-control" v-model="list.product_category" >
                  
                  <option v-for="data in product_category"  v-text="data.name" :value="data.product_categories_id" ></option>
                  
            
                </select>
  </div>
 


   <div class="form-group col-sm-6">
    <label for="exampleInputEmail1">Select Measurement Method</label>
    <select class="form-control" v-model="list.Measurement_method">
                  <option value="1">Kilogram</option>
                  <option value="2">Pound</option>
                  <option value="3">Litter</option>
                  <option value="4">Packet</option>
                  <option value="5">Box</option>
                  <option value="6">Bottle</option>
            
                </select>
  </div>

</div>

   <div class="form-group">
    <label for="exampleInputEmail1">Company Name</label>
    <input type="text" class="form-control"  v-model="list.company_name"  placeholder="Company name">
  </div>
<div class="row">
           <div class="form-group col-sm-6">
    <label for="exampleInputEmail1">Minmum Quantity</label>
    <input type="number" class="form-control"  v-model="list.minmum_quantity"  placeholder="minmum_quantity">
  </div>
   <div class="form-group col-sm-6">
    <label for="exampleInputEmail1">Product Image</label>
    <input type="file" class="form-control"   @change="imageUpload"  placeholder="select a image">
  </div>
</div>

   <div class="form-group">
    <label for="exampleInputEmail1">Product Details</label>
    <textarea type="text" class="form-control" v-model="list.details" placeholder="product details"></textarea>
  </div>


  <button @click="submit()" class="btn btn-success">Submit</button>

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
 






</template>

<script>
    export default {
        data(){
            return{
              
                list:{
                    product_category:'',
                    product_name:'',
                    company_name:'',
                    Measurement_method:'',
                    minmum_quantity:'',
                    details:'',
                    image:'',
                },
                product_category:[],
               
            }
        },
        methods:{
           submit(){
                axios.post('/productstore',this.$data.list).then((response)=>{
                
                console.log(response.data);
             
                })
					
				  .catch((error) => this.errors = error.response.data.errors)
                console.log(this.this.errors)
        },
        imageUpload(e){
          console.log(e.target)
          var fileReader = new FileReader()

          fileReader.readAsDataURL(e.target.files[0])
          fileReader.onload = (e) => {
            this.list.image = e.target.result
          }
 
        },
        getcategory(){
            axios.get('/productcategorydata').then((response)=>{
                this.product_category = response.data;
                console.log(product_category);
             
                })
					
				  .catch((error) => this.errors = error.response.data.errors)
        }
    },
    created(){
      this.getcategory();
    }
}
</script>
