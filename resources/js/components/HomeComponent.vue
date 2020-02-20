<template>
  <form id="form1" runat="server">
    <section class="banner" role="banner">
      <header id="header">
        <div class="header-content clearfix">
          <a class="logo" href="#">
            <img src alt />
          </a>
          <nav class="navigation" role="navigation">
            <ul class="primary-nav">
              <!-- <li><a class="login" href="/reg">ورود/ثبت نام</a></li> -->
            </ul>
          </nav>
          <a href="#" class="nav-toggle">
            منو
            <span></span>
          </a>
        </div>
        <!-- header content -->
      </header>
      <!-- header -->

      <div class="container">
        <div class="col-md-10 col-md-offset-1">
          <div class="banner-text text-center">
            <h2>اسامی پیشنهادی نامزدهای انتخاباتی یازدهمین دوره مجلس شورای اسلامی</h2>
          </div>
          <!-- banner text -->
        </div>
      </div>
    </section>
    <!-- /banner -->

    <!-- Contact -->
    <section id="contact" class="space100">
      <div class="container">
        <div class="row">
          <div id="titles">
            <div class="container map">
              <div class="row">
                <div class="form-group" v-if="provLoad">
                  <label>انتخاب استان</label>
                  <select class="form-control" v-model="infoss.province" @change="getNamayande()">
                    <option value="0">انتخاب استان</option>
                    <option
                      v-for="item in provinces"
                      :value="item.id"
                      v-bind:key="item.id"
                    >{{ item.name }}</option>
                  </select>
                </div>

                <div id="listed">
                  <ul>
                    <!-- <li v-for="task in filteredCountry">{{task.icotitle}}</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./end row -->

      <div class="listbox" v-if="namLoad">
        <h2>لیست پیشنهادی</h2>
        <ul class="list">
          <li class="namayande name">
            <!-- <a href="#"> -->
            نام نام خانوادگی
            <!-- </a> -->
          </li>

          <li class="deviderr"></li>
          <li class="namayande hoze">
            <!-- <a href="#"> -->
            حوزه انتخابیه
            <!-- </a> -->
          </li>
        </ul>
        <ul class="list" v-for="item in namayandes" :value="item.id" v-bind:key="item.id">
          <li class="namayande name">
            <!-- <a href="#"> -->
            {{item.name}}
            <!-- </a> -->
          </li>

          <li class="devider"></li>
          <li class="namayande hoze">
            <!-- <a href="#"> -->
            {{item.hoze}}
            <!-- </a> -->
          </li>
        </ul>
      </div>

      <div v-if="!namLoad" class="loader"></div>

    </section>
    <!-- End Contact -->

    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <img class="instagram" />
          </div>
        </div>
      </div>
      <!-- footer top -->
      <div class="footer-bottom">
        <div class="container">
          <div class="col-md-12">
            <p>کلیه حقوق محفوظ است</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer -->
  </form>
</template>

<script>
export default {
  data() {
    return {
      infoss: {},
      tasks: [
        { id: 1, icotitle: "Laravel", countries: "AU" },
        { id: 2, icotitle: "Lara", countries: "AU" },
        { id: 4, icotitle: "Lara", countries: "IR" },
        { id: 3, icotitle: "Foo", countries: "FR" }
      ],
      provinces: [],
      namayandes: [],
      provLoad: false,
      namLoad: false,
      selectedCountry: "All",
      map: null
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  created() {
    this.getProvince();
  },
  computed: {
    filteredCountry: function() {
      var app = this;
      var countries = app.selectedCountry;

      if (countries === "All") {
        return app.tasks;
      } else {
        return app.tasks.filter(function(task) {
          return countries === "All" || task.countries === countries;
        });
      }
    }
  },
  methods: {
    onChange: function() {
      getNamayende();
    },
    getProvince() {
      this.provLoad = false;
      let uri = `https://dideban.liara.run/api/v1/province`;
      console.log(uri);
      this.axios
        .get(uri)
        .then(response => {
          console.log(response);
          this.provinces = response.data;
          console.log(this.provinces);

          this.provLoad = true;
          this.namLoad = true;
          //this.getCounty();
        })
        .catch(error => {
          console.log("Error provinces");
          console.log(error);
        });
    },
    getNamayande() {
      this.namLoad = false;
      let uri = `https://dideban.liara.run/api/v1/namayande/${this.infoss.province}`;
      console.log(uri);
      this.axios
        .get(uri)
        .then(response => {
          console.log(response);
          this.namayandes = response.data;
          console.log(this.namayandes);

          this.namLoad = true;
          //this.getCounty();
        })
        .catch(error => {
          console.log("Error namayandes");
          console.log(error);
        });
    }
  }
};
</script>
