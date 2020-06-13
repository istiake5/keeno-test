<template>
<div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left border-primary">
            <h2 class="font-weight-light text-primary">Trending Today</h2>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-6">

              <div class="d-block d-md-flex listing"  v-for="product in products" :key="product.id">
                
               <a href="listings-single.html" class="img d-block"  v-bind:style="{ 'background-image': 'url('+ getImagelink() + product.images_url + ')' }"></a>
              <div class="lh-content">
                <span class="category">{{product.title}}</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="listings-single.html">{{product.category.name}}</a></h3>
                <p class="mb-0" v-if ="product.rating == 1">
                  <span class="icon-star text-warning"></span>
                  <span class="review">(1Reviews)</span>
                </p>
                <p class="mb-0" v-else-if="product.rating == 2">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="review">(2Reviews)</span>
                </p>
                <p class="mb-0" v-else-if="product.rating == 3">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="review">(3Reviews)</span>
                </p>
                <p class="mb-0" v-else-if="product.rating == 4">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="review">(4Reviews)</span>
                </p>
                <p class="mb-0" v-else>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="review">(5Reviews)</span>
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">

            <div class="d-block d-md-flex listing"  v-for="product in products" :key="product.id">
                
               <a href="listings-single.html" class="img d-block"  v-bind:style="{ 'background-image': 'url('+ getImagelink() + product.images_url + ')' }"></a>
              <div class="lh-content">
                <span class="category">{{product.title}}</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="listings-single.html">{{product.category.name}}</a></h3>
                <p class="mb-0" v-if ="product.rating == 1">
                  <span class="icon-star text-warning"></span>
                  <span class="review">(1Reviews)</span>
                </p>
                <p class="mb-0" v-else-if="product.rating == 2">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="review">(2Reviews)</span>
                </p>
                <p class="mb-0" v-else-if="product.rating == 3">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="review">(3Reviews)</span>
                </p>
                <p class="mb-0" v-else-if="product.rating == 4">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="review">(4Reviews)</span>
                </p>
                <p class="mb-0" v-else>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="review">(5Reviews)</span>
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    
</template>
<script>
    export default {
    
    data() {
      link : "http://127.0.0.1:8000/images/product/"
      return {
        products: {},
        
        
      };
    },
    created() {
      axios.get("/api/product").then(res => (this.products = res.data.data));
    },
    methods: {
      getImagelink(){
        return "http://127.0.0.1:8000/images/product/";
      },
    }
  };
</script>
