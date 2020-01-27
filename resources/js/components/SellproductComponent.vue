<template>
    

      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-header">Product Table</div>
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th><input type="text"  class="form-control" placeholder="Select product..."></th>
                        <th><input type="text" class="form-control" placeholder="Product Category..."></th>
                        <th><button class="btn btn-success">Search</button></th>
                      </tr>
                      <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Alu</td>
                        <td>12</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-header">Details</div>
                <div class="card-body">
                  
              <div class="form-group">
                <label for="product name">Product Name:</label>
                <input type="text" name="productname" class="form-control">
              </div>
              <div class="row">

                 <div class="form-group col-md-6">
                <label for="product name">Category:</label>
                <input type="text" name="productname" class="form-control">
              </div>
               <div class="form-group col-md-6">
                <label for="product name">Company name:</label>
                <input type="text" name="productname" class="form-control">
              </div>

              </div>

              <div class="row">

                 <div class="form-group col-md-6">
                <label for="product name">Select Measurement Method:</label>
                <input type="text" name="productname" class="form-control">
              </div>
               <div class="form-group col-md-6">
                <label for="product name">Minmum Quantity:</label>
                <input type="text" name="productname" class="form-control">
              </div>

              </div>

              <div class="form-group">
                <label for="product name">Product Details:</label>
                <textarea type="text" name="productname" class="form-control"></textarea>
              </div>

              <div class="row col-sm-12">
                 <div class="form-group">
                <label for="product name">Amount of Product :</label>
                <input type="number" name="productamount" class="form-control">
              </div>
              </div>
              <div class="row col-sm-12">
                 
                <button class="btn btn-success">Submit</button>
              
              </div>



                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-12">
            <div class="card">
              <div class="card-header">Sell Product List:</div>
              <div class="card-body">
                     <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Alu</td>
                        <td><input type="number" class="form-control col-sm-2" value="1"></td>
                        <td>120</td>
                        <td><button class="btn btn-danger">Delete</button></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>Total:-</td>
                        <td>120</td>
                      </tr>
                    </tfoot>
                  </table>
                        <button class="btn btn-info mt-2">Confrom</button>

              </div>
            </div>
            </div>
          </div>
        </div>
        
      </div>

</template>
  <script>
    export default{
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

        getproduct(){
            console.log(this.products[0].product_category)
        }
    },
    created(){
      this.getcategory();
    }
    }
  </script>