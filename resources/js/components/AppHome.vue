<template>
  <div class="site-section bg-light">
    <div class="container">
      <div class="overlap-category mb-5">
        <div class="row align-items-stretch no-gutters">
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-4" v-for="category in categories" :key="category.id" >
            <a href="#" class="popular-category h-100">
              <img class="im-circle" :src="getImagelink()+category.image_url" alt="Category Image" />
              <span class="caption mb-2 d-block">{{category.name}}</span>
            </a>
          </div>
          <div class="col-12 text-center mt-4">
            <a href="#" class="btn btn-primary rounded py-2 px-4 text-white">Shop Now</a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <h2 class="h5 mb-4 text-black">Featured Ads</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12 block-13">
          <div class="owl-carousel nonloop-block-13">
            <div class="d-block d-md-flex listing vertical" v-for="feature in features" :key="feature.id">
              <a href="listings-single.html" class="img d-block" v-bind:style="{ 'background-image': 'url('+ getImagelinkPost() + feature.images_url + ')' }"></a>
              <div class="lh-content">
                <span class="category">{{feature.title}}</span>
                <h3>
                  <a href="listings-single.html">${{feature.price}}</a>
                </h3>
              </div>
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
    return {
      categories: {},
      features: {}
    };
  },
  mounted: function() {
    this.feature();
  },
  created() {
    axios.get("/api/category").then(res => (this.categories = res.data.data));
  },
  methods: {
    feature() {
      axios.get("/api/features").then(res => (this.features = res.data.data));
    },
    getImagelink() {
      return "http://127.0.0.1:8000/images/category/";
    },
    getImagelinkPost() {
      return "http://127.0.0.1:8000/images/product/";
    },
  }
};
</script>
