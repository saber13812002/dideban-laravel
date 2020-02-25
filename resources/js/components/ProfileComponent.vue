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
            <h2>پروفایل نماینده مجلس</h2>
          </div>
          <!-- banner text -->
        </div>
      </div>
    </section>
    <!-- /banner -->

    <div v-if="!namLoad" class="loader"></div>

    <!-- End Contact -->
    <section>
      <div ng-app="myApp" ng-controller="myCtrl" class="ng-scope">
        <div class="container container-wrapper">
          <div class="col-md-3 col-xs-12 pull-right">
            <div class="panel panel-default">
              <div class="panel-body padding-0">
                <img
                  style="max-width: 100%;"
                  class="thumbnail profile-image"
                  src="https://dideban.liara.run/images/team-2.jpg"
                />
              </div>
            </div>
            <div class="col-md-12 padding-0 visible-lg visible-md">
              <div class="col-md-12 padding-0 RightPanel">
                <ul class="col-md-12 padding-0 commonScrollStyle RightPanelUl">

                  <li class="col-md-12 padding-0">
                    <a
                      href="/"
                    >
                      <div class="RightPanelContent">
                        <div class="RightPanleTitle">بازگشت</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-12 padding-0"></div>
            </div>
          </div>
          <div
            id="container-wrapper"
            class="row col-xs-12 col-md-9 pull-left responsive-style-auto-margin"
          >
            <div class="row">
              <div class="panel left-candidate-panel-resume padding-0">
                <div class="alert alert-info-candidate text-center">
                  <div class="col-md-12 col-xs-12 candidate-description">
                    <h3 class="ng-binding">{{namayandes.name}}</h3>
                    <span class="ng-binding">{{namayandes.birthdate}}</span>
                  </div>
                  <h5>
                    نامزد انتخاباتی استان
                    <strong class="colored ng-binding">{{namayandes.hoze}}</strong>
                    شهر
                    <strong class="colored ng-binding">{{namayandes.hoze}}</strong>
                    حوزه انتخابیه
                    <strong
                      class="colored ng-binding"
                    >{{namayandes.hoze}}</strong>
                  </h5>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="panel left-candidate-panel-resume padding-0">
                <div class>
                  <div class="col-xs-12"></div>
                </div>
              </div>
              <!-- Academic  -->
              <div
                class="panel left-candidate-panel-resume padding-0 single-scroll"
                id="academic-background"
              >
                <div
                  class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0"
                >
                  <div class="have-border-bottom">
                    <h3>سوابق تحصیلی</h3>
                  </div>
                </div>
                <div class="panel-body">
                  <ul class="resume-ul">
                    <!-- ngRepeat: item in candidateAcademicBackground -->
                    <li ng-repeat="item in candidateAcademicBackground" class="ng-scope">
                      <span class="fa fa-circle-o"></span>
                      <strong class="colored bg-white ng-binding">
                        فارغ التحصیل
                        کارشناسی ارشد
                        <strong
                          class="colored bg-white major ng-binding"
                        >علوم سیاسی و روابط بین الملل</strong>
                        دانشگاه تهران
                      </strong>
                    </li>
                    <!-- end ngRepeat: item in candidateAcademicBackground -->
                  </ul>
                </div>
              </div>
              <!-- Military Status -->
              <div
                class="panel left-candidate-panel-resume padding-0 single-scroll"
                id="military-records"
              >
                <div
                  class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0"
                >
                  <div class="have-border-bottom">
                    <h3>سوابق خدمت</h3>
                  </div>
                </div>
                <div class="panel-body">
                  <ul class="resume-ul">
                    <!-- ngRepeat: item in candidateMilitaryStatus -->
                    <li ng-repeat="item in candidateMilitaryStatus" class="ng-scope">
                      <span class="fa fa-circle-o"></span>
                      <strong class="colored bg-white ng-binding">
                        معاف
                        فروردین
                        1398
                        ارتش
                      </strong>
                    </li>
                    <!-- end ngRepeat: item in candidateMilitaryStatus -->
                  </ul>
                </div>
              </div>
              <!-- Job History -->
              <div
                class="panel left-candidate-panel-resume padding-0 single-scroll"
                id="work-experience"
              >
                <div
                  class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0"
                >
                  <div class="have-border-bottom">
                    <h3>سوابق شغلی</h3>
                  </div>
                </div>
                <div class="panel-body">
                  <ul class="resume-ul">
                    <!-- ngRepeat: item in candidateJobHistory -->
                  </ul>
                </div>
              </div>
              <!-- Book Publishing History -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <vue-fab mainBtnColor="#3599DB">
      <fab-item :idx="0" title="بالا" icon="up" />
    </vue-fab>

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
      api_url: process.env.MIX_APP_URL
        ? process.env.MIX_APP_URL
        : "https://dideban.liara.run",
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
      mapVisible: true,
      listVisible: false,
      map: null
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  created() {
    this.getNamayande();
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
    scrollMeTo(refName) {
      var element = this.$refs[refName];
      var top = element.offsetTop;

      window.scrollTo(0, top);
    },
    onChange: function() {
      getNamayende();
    },
    getNamayande() {
      this.mapVisible = false;
      this.listVisible = true;
      //this.scrollMeTo("contact");
      this.namLoad = false;

      console.log(this.api_url);
      let uri = `${this.api_url}/api/v1/profile/${this.$route.params.id}`;
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
          console.log("Error profile");
          console.log(error);
        });
    }
  }
};
</script>
