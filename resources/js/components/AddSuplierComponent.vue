<template>




      <div class="container-fluid">
      <div class="container">
        <div class="row">
		<div class="col-md-10">
				<div class="card">
					<div class="card-header">Product Category</div>
					<div class="card-body">
 
<div class="row">

   <div class="form-group col-sm-6">
    <label for="exampleInputEmail1">Suplier Name</label>
    <input type="text" class="form-control" 
     v-model="suplier_name"
     required
     @input="$v.suplier_name.$touch()"
     @blur="$v.suplier_name.$touch()"
     autofocus
       placeholder="Suplier Name">
       <label  class="text-danger">hello</label>
  </div>

<div class="form-group col-sm-6">
    <label for="exampleInputEmail1">Suplier Phone</label>
    <input type="number" class="form-control"  
    v-model="suplier_phone"
     required
     @input="$v.suplier_phone.$touch()"
     @blur="$v.suplier_phone.$touch()"
       placeholder="Suplier Phone">
  </div>


</div>

   
<div class="row">
           <div class="form-group col-sm-6">
    <label for="exampleInputEmail1">Suplier Address</label>
    <input type="text" class="form-control"  
    v-model="suplier_address"
    required
    @input="$v.suplier_address.$touch()"
    @blur="$v.suplier_address.$touch()"
      placeholder="Suplier Address">
  </div>
   <div class="form-group col-sm-6">
    <label for="exampleInputEmail1">Suplier Image</label>
    <input type="file" class="form-control"   
    @change="imageUpload"  placeholder="Suplier Image">
  </div>
</div>

   <div class="form-group">
    <label for="exampleInputEmail1">Suplier Account No</label>
    <input type="number" class="form-control" 
    v-model="suplier_account_no"
    required
     @input="$v.suplier_account_no.$touch()"
     @blur="$v.suplier_account_no.$touch()"

     placeholder="Suplier Account No">
  </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Suplier Opening Balance</label>
    <input type="number" class="form-control" 
    v-model="suplier_opening_balance"
    required
     @input="$v.suplier_opening_balance.$touch()"
     @blur="$v.suplier_opening_balance.$touch()"

     placeholder="Suplier Opening Balance">
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
import Vuelidate from 'vuelidate';
import { required } from  'vuelidate/lib/validators';
Vue.use(Vuelidate)
    export default {
        data(){
            return{
            suplier_name:'',
            suplier_phone:'',
            suplier_address:'',
            suplier_account_no:'',
            suplier_opening_balance:'',
            suplier_image:'',  
            };
        },
        Validations:{
            suplier_name:{ required },                      
            suplier_phone:{ required },
            suplier_address:{ required },
            suplier_account_no:{ required },
            suplier_opening_balance:{ required },
        },
          computed:{
            suplier_nameErrors(){
                const errors = [];
                if(!this.$v.suplier_name.$dirty) return errors;
                !this.$v.suplier_name.required && errors.push("Name is required.");
                return errors;
            },
             suplier_phoneErrors(){
                const errors = [];
                if(!this.$v.suplier_phone.$dirty) return errors;
                !this.$v.suplier_phone.required && errors.push("Suplier phone is required.");
                return errors;
            },
             suplier_addressErrors(){
                const errors = [];
                if(!this.$v.suplier_address.$dirty) return errors;
                !this.$v.suplier_address.required && errors.push("Suplier address is required.");
                return errors;
            },
             suplier_account_noErrors(){
                const errors = [];
                if(!this.$v.suplier_account_no.$dirty) return errors;
                !this.$v.suplier_account_no.required && errors.push("Suplier  account no is required.");
                return errors;
            },
             suplier_opening_balanceErrors(){
                const errors = [];
                if(!this.$v.suplier_opening_balance.$dirty) return errors;
                !this.$v.suplier_opening_balance.required && errors.push("suplier opening balance is required.");
                return errors;
            },
    },
        methods:{
           submit(){
        },
        imageUpload(e){
          console.log(e.target)
          var fileReader = new FileReader()

          fileReader.readAsDataURL(e.target.files[0])
          fileReader.onload = (e) => {
            this.suplier_image = e.target.result
          }
 
        },
 
    },
  
    created(){
      
    }
}
</script>
