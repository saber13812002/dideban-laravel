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
            <h1>اسامی پیشنهادی نامزدهای انتخاباتی یازدهمین دوره مجلس شورای اسلامی</h1>
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
                <div class="col-md-9" id="mapdiv"></div>
                <div class="col-md-3">
                  {{ selectedCountry }}
                  <select
                    class="form-control"
                    v-model="selectedCountry"
                    v-on:change="onChange()"
                  >
                    <option value>Select a country</option>
                    <option value="All">All</option>
                    <option value="IR">Iran</option>
                    <option value="ir-th">Tehran</option>
                    <option value="AU">Australia</option>
                    <option value="CN">China</option>
                    <option value="FR">France</option>
                  </select>
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
      </div>
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
      tasks: [
        { id: 1, icotitle: "Laravel", countries: "AU" },
        { id: 2, icotitle: "Lara", countries: "AU" },
        { id: 4, icotitle: "Lara", countries: "IR" },
        { id: 3, icotitle: "Foo", countries: "FR" }
      ],
      selectedCountry: "All",
      map: null
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  created() {
    this.map = AmCharts.makeChart("mapdiv", {
      type: "map",
      zoomDuration: 0.1,
      colorSteps: 100,

      dataProvider: {
        map: "iranLow",
        getAreasFromMap: true
      },

      areasSettings: {
        autoZoom: true,
        colorSolid: "#1B144B",
        selectedColor: "#1B144B",
        color: "#4DC5AC"
      },

      valueLegend: {
        right: 100,
        minValue: "some",
        maxValue: "a lot!"
      }
    });
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
      var id = this.selectedCountry;

      var mapObject = this.map.getObjectById(id);

      if ("All" == id) {
        this.map.clickMapObject(this.map.dataProvider);
      } else {
        this.map.clickMapObject(mapObject);
      }
    }
  }
};
</script>
