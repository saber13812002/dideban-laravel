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
                  src="http://azmaa.net/uploads/7c7ee8bceff9fb07393a28b069419cd9_222.jpg"
                />
              </div>
            </div>
            <div class="col-md-12 padding-0 visible-lg visible-md">
              <div class="col-md-12 padding-0 RightPanel">
                <ul class="col-md-12 padding-0 commonScrollStyle RightPanelUl">
                  <li class="col-md-12 padding-0">
                    <a href="#academic-background" dideo-checked="true">
                      <i class="zmdi RightpanelIcon">
                        <span class="fa fa-book"></span>
                      </i>
                      <div class="RightPanelContent">
                        <div class="RightPanleTitle">سوابق تحصیلی</div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-12 padding-0">
                    <a href="#military-records" dideo-checked="true">
                      <i class="zmdi RightpanelIcon">
                        <span class="fa fa-flag"></span>
                      </i>
                      <div class="RightPanelContent">
                        <div class="RightPanleTitle">نظام وظیفه</div>
                      </div>
                    </a>
                  </li>
                  <a href="#military-records" dideo-checked="true"></a>
                  <li class="col-md-12 padding-0">
                    <a href="#military-records" dideo-checked="true"></a>
                    <a href="#work-experience" dideo-checked="true">
                      <i class="zmdi RightpanelIcon">
                        <span class="fa fa-cogs"></span>
                      </i>
                      <div class="RightPanelContent">
                        <div class="RightPanleTitle">سوابق شغلی</div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-12 padding-0">
                    <a href="#scientific-research-records" dideo-checked="true">
                      <i class="zmdi RightpanelIcon">
                        <span class="fa fa-flask"></span>
                      </i>
                      <div class="RightPanelContent">
                        <div class="RightPanleTitle">سوابق علمی پژوهشی</div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-12 padding-0">
                    <a href="#skills" dideo-checked="true">
                      <i class="zmdi RightpanelIcon">
                        <span class="fa fa-outdent"></span>
                      </i>
                      <div class="RightPanelContent">
                        <div class="RightPanleTitle">مهارت ها</div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-12 padding-0">
                    <a href="#election-promises" dideo-checked="true">
                      <i class="zmdi RightpanelIcon">
                        <span class="fa fa-outdent"></span>
                      </i>
                      <div class="RightPanelContent">
                        <div class="RightPanleTitle">وعده های انتخاباتی</div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-12 padding-0">
                    <a href="#political-background" dideo-checked="true">
                      <i class="zmdi RightpanelIcon">
                        <span class="fa fa-handshake-o"></span>
                      </i>
                      <div class="RightPanelContent">
                        <div class="RightPanleTitle">سوابق سیاسی</div>
                      </div>
                    </a>
                  </li>
                  <a href="#political-background" dideo-checked="true"></a>
                  <li class="col-md-12 padding-0">
                    <a href="#political-background" dideo-checked="true"></a>
                    <a href="#social-cultural-background" dideo-checked="true">
                      <i class="zmdi RightpanelIcon">
                        <span class="fa fa-bookmark"></span>
                      </i>
                      <div class="RightPanelContent">
                        <div class="RightPanleTitle">سوابق فرهنگی اجتماعی</div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-12 padding-0">
                    <a href="#property-assets" dideo-checked="true">
                      <i class="zmdi RightpanelIcon">
                        <span class="fa fa-money"></span>
                      </i>
                      <div class="RightPanelContent">
                        <div class="RightPanleTitle">اطلاعات مالی</div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-12 padding-0">
                    <a
                      href="http://azmaa.net/State/detail/15/%D8%B3%D9%85%D9%86%D8%A7%D9%86"
                      dideo-checked="true"
                    >
                      <i class="zmdi RightpanelIcon">
                        <span class="fa fa-arrow-left"></span>
                      </i>
                      <div class="RightPanelContent">
                        <div class="RightPanleTitle">بازگشت</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-12 padding-0">
                <h4
                  style="text-align: center; background: #095644;color: #fff;padding: 6px 2px;font-size: 14px;"
                >رویداد های مرتبط</h4>
                <p>موردی یافت نشد</p>
              </div>
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
                    <h2 class="ng-binding">
{{namayandes.name}}
                    </h2>
                    <span class="ng-binding">1354/01/01</span>
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

              <div class="panel left-candidate-panel-resume padding-0">
                <div class>
                  <div class="col-xs-12">
                    <table class="table table-condensed table-hover text-center">
                      <thead>
                        <tr class="text-center">
                          <th
                            class="text-center"
                            style="font-size: 10px;text-align: center !important;"
                          >
                            برآیند
                            آزمون و کانون
                          </th>
                          <th
                            class="text-center"
                            style="font-size: 10px;text-align: center !important;"
                          >
                            نمره
                            کانون ارزیابی (وزن 0.7)
                          </th>
                          <th
                            class="text-center"
                            style="font-size: 10px;text-align: center !important;"
                          >
                            نمره
                            کل
                            آزمون (وزن 0.3)
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center">68</td>
                          <td class="text-center">68</td>
                          <td class="text-center">69</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="chart-container" style="position: relative;margin: 40px 0;">
                    <div class="chartjs-size-monitor">
                      <div class="chartjs-size-monitor-expand">
                        <div class></div>
                      </div>
                      <div class="chartjs-size-monitor-shrink">
                        <div class></div>
                      </div>
                    </div>
                    <canvas
                      id="BarChart"
                      style="display: block; width: 855px; height: 427px;"
                      width="855"
                      height="427"
                      class="chartjs-render-monitor"
                    ></canvas>
                  </div>
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
              <div
                class="panel left-candidate-panel-resume padding-0 single-scroll"
                id="scientific-research-records"
              >
                <div
                  class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0"
                >
                  <div class="have-border-bottom">
                    <h3>سوابق علمی پژوهشی</h3>
                  </div>
                </div>
                <div class="col-xs-12">
                  <li>کتب</li>
                  <ul class="resume-ul">
                    <!-- ngRepeat: item in candidateBooks -->
                  </ul>
                </div>
                <div class="col-xs-12">
                  <li>مقالات</li>
                  <ul class="resume-ul">
                    <!-- ngRepeat: item in candidateArticles -->
                  </ul>
                </div>
                <div class="col-xs-12">
                  <li>اختراعات</li>
                  <ul class="resume-ul">
                    <!-- ngRepeat: item in candidateInvention -->
                  </ul>
                </div>
                <div class="col-xs-12">
                  <li>طراح های پژوهشی</li>
                  <ul class="resume-ul">
                    <!-- ngRepeat: item in candidateResearch -->
                  </ul>
                </div>
                <div class="col-xs-12">
                  <li>همایش ها</li>
                  <ul class="resume-ul">
                    <!-- ngRepeat: item in candidateConference -->
                  </ul>
                </div>
                <div class="col-xs-12">
                  <li>ترجمه ها</li>
                  <ul class="resume-ul">
                    <!-- ngRepeat: item in candidateTranslation -->
                  </ul>
                </div>
              </div>
              <!-- Skills History -->
              <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="skills">
                <div
                  class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0"
                >
                  <div class="have-border-bottom">
                    <h3>مهارت ها</h3>
                  </div>
                </div>
                <div class="panel-body">
                  <ul class="resume-ul">
                    <!-- ngRepeat: item in candidateSkills -->
                  </ul>
                </div>
              </div>
              <!-- Promises History -->
              <div
                class="panel left-candidate-panel-resume padding-0 single-scroll"
                id="election-promises"
              >
                <div
                  class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0"
                >
                  <div class="have-border-bottom">
                    <h3>وعده های انتخاباتی</h3>
                  </div>
                </div>
                <div class="panel-body">
                  <ul class="resume-ul">
                    <!-- ngRepeat: item in promises -->
                  </ul>
                </div>
              </div>
              <!-- Politic History -->
              <div
                class="panel left-candidate-panel-resume padding-0 single-scroll"
                id="political-background"
              >
                <div
                  class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0"
                >
                  <div class="have-border-bottom">
                    <h3>سوابق سیاسی</h3>
                  </div>
                </div>
                <div class="panel-body political-info-container table-responsive">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 padding-0">
                      <!-- ngRepeat: item in politicBackground -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- social-cultural-background -->
              <div
                class="panel left-candidate-panel-resume padding-0 single-scroll"
                id="social-cultural-background"
              >
                <div
                  class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0"
                >
                  <div class="have-border-bottom">
                    <h3>سوابق فرهنگی اجتماعی</h3>
                  </div>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 padding-0">
                      <!-- ngRepeat: item in candidateSocialCulturalBackground -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- Finance History -->
              <div
                class="panel left-candidate-panel-resume padding-0 single-scroll"
                id="property-assets"
              >
                <div
                  class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0"
                >
                  <div class="have-border-bottom">
                    <h3>فهرست اموال و دارایی ها</h3>
                  </div>
                </div>
                <div class="panel-body political-info-container">
                  <div class="panel with-nav-tabs panel-default">
                    <div class>
                      <ul class="nav nav-tabs">
                        <li class="active">
                          <a href="#tab1myself" data-toggle="tab" dideo-checked="true">خود</a>
                        </li>
                        <li>
                          <a href="#tab2wife" data-toggle="tab" dideo-checked="true">همسر</a>
                        </li>
                        <li>
                          <a href="#tab3child" data-toggle="tab" dideo-checked="true">فرزند</a>
                        </li>
                      </ul>
                    </div>
                    <div class="panel-body padding-r-0 padding-l-0">
                      <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1myself">
                          <div class="LeftPanel">
                            <div class="LeftPanelcontent">
                              <div class="row">
                                <!--RealEStates -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">املاک و مستغلات</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.RealEStates.hasSelfItems === 0  -->
                                          <!-- ngRepeat: item in finance.RealEStates -->
                                          <form
                                            ng-repeat="item in finance.RealEStates"
                                            id="form-RealEstate"
                                            class="ng-pristine ng-valid ng-scope"
                                          >
                                            <span class="divider"></span>
                                            <!-- ngIf: item.ForWho == 'Self' -->
                                          </form>
                                          <!-- end ngRepeat: item in finance.RealEStates -->
                                          <form
                                            ng-repeat="item in finance.RealEStates"
                                            id="form-RealEstate"
                                            class="ng-pristine ng-valid ng-scope"
                                          >
                                            <span class="divider"></span>
                                            <!-- ngIf: item.ForWho == 'Self' -->
                                            <div
                                              ng-if="item.ForWho == 'Self'"
                                              class="col-md-12 col-xs-12 padding-0 form ng-scope"
                                            >
                                              <div
                                                class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat"
                                              >
                                                <label for="inputRealEstateType">
                                                  نوع کاربری :
                                                  <span class="text-danger"></span>
                                                </label>
                                                <span class="span-h ng-binding">کشاورزی</span>
                                              </div>
                                              <div
                                                class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat"
                                              >
                                                <label for="inputRealEstateOwnershipDate">
                                                  سال شروع مالکیت :
                                                  <span class="text-danger"></span>
                                                </label>
                                                <span class="span-h ng-binding">1389</span>
                                              </div>
                                              <div
                                                class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat"
                                              >
                                                <label
                                                  for="inputRealEstateOwnershipType"
                                                >نحوه مالکیت :</label>
                                                <span class="span-h ng-binding">ارث</span>
                                              </div>
                                              <div
                                                class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat countries"
                                              >
                                                <label for="inputRealEstateCountryId">
                                                  کشور
                                                  :
                                                </label>
                                                <span class="span-h ng-binding">ایران</span>
                                              </div>
                                              <div
                                                class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv"
                                              >
                                                <label for="inputRealEstateStateId">
                                                  استان
                                                  :
                                                </label>
                                                <span class="span-h ng-binding">سمنان</span>
                                              </div>
                                              <div
                                                class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv"
                                              >
                                                <label for="inputRealEstateCityId">شهر :</label>
                                                <span class="span-h ng-binding">سمنان</span>
                                              </div>
                                              <div
                                                class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat"
                                              >
                                                <label for="inputRealEstatePortion">
                                                  سهم از ملک(1 تا 6 دانگ) :
                                                  <span
                                                    class="text-danger"
                                                  ></span>
                                                </label>
                                                <span class="span-h ng-binding">6</span>
                                              </div>
                                              <div
                                                class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat"
                                              >
                                                <label for="inputRealEstateExtent">
                                                  متراژ حدودی ملک :
                                                  <span class="text-danger"></span>
                                                </label>
                                                <span class="span-h ng-binding">2500 , متر مربع</span>
                                              </div>
                                              <div
                                                class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat"
                                              >
                                                <label for="inputRealEstateBuyTimePrice">
                                                  ارزش حدودی کل سهام در
                                                  زمان
                                                  شروع مالکیت :
                                                  <span
                                                    class="text-danger"
                                                  ></span>
                                                </label>
                                                <span class="span-h ng-binding">
                                                  ,
                                                  15
                                                  میلیون تومان
                                                </span>
                                              </div>
                                              <div
                                                class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat"
                                              >
                                                <label for="inputRealEstateNowTimePrice">
                                                  ارزش حدودی کل سهام درحال
                                                  حاضر :
                                                  <span
                                                    class="text-danger"
                                                  ></span>
                                                </label>
                                                <span class="span-h ng-binding">
                                                  ,
                                                  300
                                                  میلیون تومان
                                                </span>
                                              </div>
                                              <div
                                                class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat"
                                              >
                                                <label for="inputRealEstateAddress">
                                                  آدرس
                                                  :
                                                </label>
                                                <span class="span-h ng-binding">سمنان، چهلتن درجزین</span>
                                              </div>
                                              <hr />
                                            </div>
                                            <!-- end ngIf: item.ForWho == 'Self' -->
                                          </form>
                                          <!-- end ngRepeat: item in finance.RealEStates -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End RealEStates -->
                                <!--Vehicle -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">وسایل نقلیه</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Vehicle.hasSelfItems === 0  -->
                                          <p
                                            ng-if="finance.Vehicle.hasSelfItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Vehicle.hasSelfItems === 0  -->
                                          <!-- ngRepeat: item in finance.Vehicle -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End Vehicle -->
                                <!--Invest -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div
                                      class="panel-heading"
                                    >سرمایه‌گذاری‌ها (سهام‌، اوراق بهادار، ...)</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Invest.hasSelfItems === 0  -->
                                          <p
                                            ng-if="finance.Invest.hasSelfItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Invest.hasSelfItems === 0  -->
                                          <!-- ngRepeat: item in finance.Invest -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End Invest -->
                                <!--BankAccount -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div
                                      class="panel-heading"
                                    >حساب‌های جاری، پس‌انداز و سرمایه‌گذاری</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.BankAccount.hasSelfItems === 0  -->
                                          <p
                                            ng-if="finance.BankAccount.hasSelfItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.BankAccount.hasSelfItems === 0  -->
                                          <!-- ngRepeat: item in finance.BankAccount -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End BankAccount -->
                                <!-- Debtor -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">دیون و مطالبات</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.CreditDebtor.hasSelfItems === 0  -->
                                          <!-- ngRepeat: item in finance.CreditDebtor -->
                                          <form
                                            ng-repeat="item in finance.CreditDebtor"
                                            id="form-Credit-Debtor"
                                            class="ng-pristine ng-valid ng-scope"
                                          >
                                            <span class="divider"></span>
                                            <!-- ngIf: item.ForWho =='Self' -->
                                            <div
                                              ng-if="item.ForWho =='Self'"
                                              class="col-md-12 col-xs-12 padding-0 form ng-scope"
                                            >
                                              <div
                                                class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat padding-left-0"
                                              >
                                                <label for="inputCreditPrice">
                                                  جمع کل بستانکاری از اشخاص حقیقی
                                                  یا
                                                  حقوقی
                                                  :
                                                  <span
                                                    class="text-danger"
                                                  ></span>
                                                </label>
                                                <span class="span-h ng-binding">
                                                  0 ,
                                                  25
                                                  میلیون تومان
                                                </span>
                                              </div>
                                              <div
                                                class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat"
                                              >
                                                <label for="inputDebotrPrice">
                                                  جمع کل بدهکاری از اشخاص حقیقی یا
                                                  حقوقی :
                                                  <span
                                                    class="text-danger"
                                                  ></span>
                                                </label>
                                                <span class="span-h ng-binding">
                                                  0 ,
                                                  0
                                                  هزار تومان
                                                </span>
                                              </div>
                                              <div class="col-md-12 col-xs-12">
                                                <label for="inputDebotrPrice">توضیحات :</label>
                                                <span
                                                  class="span-h ng-binding"
                                                >برای خرید یک واحد آپارتمان در منطقه ی دوازده تهران که به عنوان مهریه تقدیم به همسر شده است، در مجموع حدود 25 میلیون تومان از بدهی به بانک باقی مانده است.</span>
                                              </div>
                                              <hr />
                                            </div>
                                            <!-- end ngIf: item.ForWho =='Self' -->
                                          </form>
                                          <!-- end ngRepeat: item in finance.CreditDebtor -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End Debtor -->
                                <!--Goods -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">کلیه کالاهای فاقد سند مالکیت رسمی</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Goods.hasSelfItems === 0  -->
                                          <p
                                            ng-if="finance.Goods.hasSelfItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Goods.hasSelfItems === 0  -->
                                          <!-- ngRepeat: item in finance.Goods -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End Goods -->
                                <!--Fee -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">حقوق مالکیت معنوی</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Fee.hasSelfItems === 0  -->
                                          <p
                                            ng-if="finance.Fee.hasSelfItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Fee.hasSelfItems === 0  -->
                                          <!-- ngRepeat: item in finance.Fee -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End Fee -->
                                <!--AverageMonthIncome -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">در آمد</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Income.hasSelfItems === 0  -->
                                          <p
                                            ng-if="finance.Income.hasSelfItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Income.hasSelfItems === 0  -->
                                          <!-- ngRepeat: item in finance.Income -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End AverageMonthIncome -->
                                <!-- ElectionPlacePrice -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">شفاف سازی هزینه های انتخاباتی</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Election.hasSelfItems === 0  -->
                                          <p
                                            ng-if="finance.Election.hasSelfItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Election.hasSelfItems === 0  -->
                                          <!-- ngRepeat: item in finance.Election -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End ElectionPlacePrice -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="tab2wife">
                          <div class="LeftPanel">
                            <div class="LeftPanelcontent">
                              <div class="row">
                                <!--RealEStates -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">املاک و مستغلات</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.RealEStates.hasWifeItems === 0  -->
                                          <!-- ngRepeat: item in finance.RealEStates -->
                                          <form
                                            ng-repeat="item in finance.RealEStates"
                                            id="form-RealEstate"
                                            class="ng-pristine ng-valid ng-scope"
                                          >
                                            <span class="divider"></span>
                                            <!-- ngIf: item.ForWho == 'Wife' -->
                                            <div
                                              ng-if="item.ForWho == 'Wife'"
                                              class="col-md-12 col-xs-12 padding-0 form ng-scope"
                                            >
                                              <div
                                                class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat"
                                              >
                                                <label for="inputRealEstateType">
                                                  نوع کاربری :
                                                  <span class="text-danger"></span>
                                                </label>
                                                <span class="span-h ng-binding">مسکونی</span>
                                              </div>
                                              <div
                                                class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat"
                                              >
                                                <label for="inputRealEstateOwnershipDate">
                                                  سال شروع مالکیت :
                                                  <span class="text-danger"></span>
                                                </label>
                                                <span class="span-h ng-binding">1392</span>
                                              </div>
                                              <div
                                                class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat"
                                              >
                                                <label
                                                  for="inputRealEstateOwnershipType"
                                                >نحوه مالکیت :</label>
                                                <span class="span-h ng-binding">مهریه</span>
                                              </div>
                                              <div
                                                class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat countries"
                                              >
                                                <label for="inputRealEstateCountryId">
                                                  کشور
                                                  :
                                                </label>
                                                <span class="span-h ng-binding">ایران</span>
                                              </div>
                                              <div
                                                class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv"
                                              >
                                                <label for="inputRealEstateStateId">
                                                  استان
                                                  :
                                                </label>
                                                <span class="span-h ng-binding">تهران</span>
                                              </div>
                                              <div
                                                class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv"
                                              >
                                                <label for="inputRealEstateCityId">شهر :</label>
                                                <span class="span-h ng-binding">تهران</span>
                                              </div>
                                              <div
                                                class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat"
                                              >
                                                <label for="inputRealEstatePortion">
                                                  سهم از ملک(1 تا 6 دانگ) :
                                                  <span
                                                    class="text-danger"
                                                  ></span>
                                                </label>
                                                <span class="span-h ng-binding">6</span>
                                              </div>
                                              <div
                                                class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat"
                                              >
                                                <label for="inputRealEstateExtent">
                                                  متراژ حدودی ملک :
                                                  <span class="text-danger"></span>
                                                </label>
                                                <span class="span-h ng-binding">113 , متر مربع</span>
                                              </div>
                                              <div
                                                class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat"
                                              >
                                                <label for="inputRealEstateBuyTimePrice">
                                                  ارزش حدودی کل سهام در
                                                  زمان
                                                  شروع مالکیت :
                                                  <span
                                                    class="text-danger"
                                                  ></span>
                                                </label>
                                                <span class="span-h ng-binding">
                                                  ,
                                                  300
                                                  میلیون تومان
                                                </span>
                                              </div>
                                              <div
                                                class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat"
                                              >
                                                <label for="inputRealEstateNowTimePrice">
                                                  ارزش حدودی کل سهام درحال
                                                  حاضر :
                                                  <span
                                                    class="text-danger"
                                                  ></span>
                                                </label>
                                                <span class="span-h ng-binding">
                                                  500 ,
                                                  1
                                                  میلیارد تومان
                                                </span>
                                              </div>
                                              <div
                                                class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat"
                                              >
                                                <label for="inputRealEstateAddress">
                                                  آدرس
                                                  :
                                                </label>
                                                <span
                                                  class="span-h ng-binding"
                                                >تهران، میدان بهارستان، منطقه 12</span>
                                              </div>
                                              <hr />
                                            </div>
                                            <!-- end ngIf: item.ForWho == 'Wife' -->
                                          </form>
                                          <!-- end ngRepeat: item in finance.RealEStates -->
                                          <form
                                            ng-repeat="item in finance.RealEStates"
                                            id="form-RealEstate"
                                            class="ng-pristine ng-valid ng-scope"
                                          >
                                            <span class="divider"></span>
                                            <!-- ngIf: item.ForWho == 'Wife' -->
                                          </form>
                                          <!-- end ngRepeat: item in finance.RealEStates -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End RealEStates -->
                                <!--Vehicle -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">وسایل نقلیه</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Vehicle.hasWifeItems === 0  -->
                                          <p
                                            ng-if="finance.Vehicle.hasWifeItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Vehicle.hasWifeItems === 0  -->
                                          <!-- ngRepeat: item in finance.Vehicle -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End Vehicle -->
                                <!--Invest -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div
                                      class="panel-heading"
                                    >سرمایه‌گذاری‌ها (سهام‌، اوراق بهادار، ...)</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Invest.hasWifeItems === 0  -->
                                          <p
                                            ng-if="finance.Invest.hasWifeItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Invest.hasWifeItems === 0  -->
                                          <!-- ngRepeat: item in finance.Invest -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End Invest -->
                                <!--BankAccount -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div
                                      class="panel-heading"
                                    >حساب‌های جاری، پس‌انداز و سرمایه‌گذاری</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.BankAccount.hasWifeItems === 0  -->
                                          <p
                                            ng-if="finance.BankAccount.hasWifeItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.BankAccount.hasWifeItems === 0  -->
                                          <!-- ngRepeat: item in finance.BankAccount -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End BankAccount -->
                                <!-- Debtor -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">دیون و مطالبات</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.CreditDebtor.hasWifeItems === 0  -->
                                          <p
                                            ng-if="finance.CreditDebtor.hasWifeItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.CreditDebtor.hasWifeItems === 0  -->
                                          <!-- ngRepeat: item in finance.CreditDebtor -->
                                          <form
                                            ng-repeat="item in finance.CreditDebtor"
                                            id="form-Credit-Debtor"
                                            class="ng-pristine ng-valid ng-scope"
                                          >
                                            <span class="divider"></span>
                                            <!-- ngIf: item.ForWho =='Wife' -->
                                          </form>
                                          <!-- end ngRepeat: item in finance.CreditDebtor -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End Debtor -->
                                <!--Goods -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">کلیه کالاهای فاقد سند مالکیت رسمی</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Goods.hasWifeItems === 0  -->
                                          <p
                                            ng-if="finance.Goods.hasWifeItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Goods.hasWifeItems === 0  -->
                                          <!-- ngRepeat: item in finance.Goods -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End Goods -->
                                <!--Fee -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">حقوق مالکیت معنوی</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Fee.hasWifeItems === 0  -->
                                          <p
                                            ng-if="finance.Fee.hasWifeItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Fee.hasWifeItems === 0  -->
                                          <!-- ngRepeat: item in finance.Fee -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End Fee -->
                                <!--AverageMonthIncome -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">در آمد</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Income.hasWifeItems === 0  -->
                                          <p
                                            ng-if="finance.Income.hasWifeItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Income.hasWifeItems === 0  -->
                                          <!-- ngRepeat: item in finance.Income -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End AverageMonthIncome -->
                                <!-- ElectionPlacePrice -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">شفاف سازی هزینه های انتخاباتی</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Election.hasWifeItems === 0  -->
                                          <p
                                            ng-if="finance.Election.hasWifeItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Election.hasWifeItems === 0  -->
                                          <!-- ngRepeat: item in finance.Election -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End ElectionPlacePrice -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="tab3child">
                          <div class="LeftPanel">
                            <div class="LeftPanelcontent">
                              <div class="row">
                                <!--RealEStates -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">املاک و مستغلات</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.RealEStates.hasChildItems === 0  -->
                                          <p
                                            ng-if="finance.RealEStates.hasChildItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.RealEStates.hasChildItems === 0  -->
                                          <!-- ngRepeat: item in finance.RealEStates -->
                                          <form
                                            ng-repeat="item in finance.RealEStates"
                                            id="form-RealEstate"
                                            class="ng-pristine ng-valid ng-scope"
                                          >
                                            <span class="divider"></span>
                                            <!-- ngIf: item.ForWho === 'Child' -->
                                          </form>
                                          <!-- end ngRepeat: item in finance.RealEStates -->
                                          <form
                                            ng-repeat="item in finance.RealEStates"
                                            id="form-RealEstate"
                                            class="ng-pristine ng-valid ng-scope"
                                          >
                                            <span class="divider"></span>
                                            <!-- ngIf: item.ForWho === 'Child' -->
                                          </form>
                                          <!-- end ngRepeat: item in finance.RealEStates -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End RealEStates -->
                                <!--Vehicle -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">وسایل نقلیه</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Vehicle.hasChildItems === 0  -->
                                          <p
                                            ng-if="finance.Vehicle.hasChildItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Vehicle.hasChildItems === 0  -->
                                          <!-- ngRepeat: item in finance.Vehicle -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End Vehicle -->
                                <!--Invest -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div
                                      class="panel-heading"
                                    >سرمایه‌گذاری‌ها (سهام‌، اوراق بهادار، ...)</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Invest.hasChildItems === 0  -->
                                          <p
                                            ng-if="finance.Invest.hasChildItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Invest.hasChildItems === 0  -->
                                          <!-- ngRepeat: item in finance.Invest -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End Invest -->
                                <!--BankAccount -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div
                                      class="panel-heading"
                                    >حساب‌های جاری، پس‌انداز و سرمایه‌گذاری</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.BankAccount.hasChildItems === 0  -->
                                          <p
                                            ng-if="finance.BankAccount.hasChildItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.BankAccount.hasChildItems === 0  -->
                                          <!-- ngRepeat: item in finance.BankAccount -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End BankAccount -->
                                <!-- Debtor -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">دیون و مطالبات</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.CreditDebtor.hasChildItems === 0  -->
                                          <p
                                            ng-if="finance.CreditDebtor.hasChildItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.CreditDebtor.hasChildItems === 0  -->
                                          <!-- ngRepeat: item in finance.CreditDebtor -->
                                          <form
                                            ng-repeat="item in finance.CreditDebtor"
                                            id="form-Credit-Debtor"
                                            class="ng-pristine ng-valid ng-scope"
                                          >
                                            <span class="divider"></span>
                                            <!-- ngIf: item.ForWho =='Child' -->
                                          </form>
                                          <!-- end ngRepeat: item in finance.CreditDebtor -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End Debtor -->
                                <!--Goods -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">کلیه کالاهای فاقد سند مالکیت رسمی</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Goods.hasChildItems === 0  -->
                                          <p
                                            ng-if="finance.Goods.hasChildItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Goods.hasChildItems === 0  -->
                                          <!-- ngRepeat: item in finance.Goods -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End Goods -->
                                <!--Fee -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">حقوق مالکیت معنوی</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Fee.hasChildItems === 0  -->
                                          <p
                                            ng-if="finance.Fee.hasChildItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Fee.hasChildItems === 0  -->
                                          <!-- ngRepeat: item in finance.Fee -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End Fee -->
                                <!--AverageMonthIncome -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">در آمد</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Income.hasChildItems === 0  -->
                                          <p
                                            ng-if="finance.Income.hasChildItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Income.hasChildItems === 0  -->
                                          <!-- ngRepeat: item in finance.Income -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End AverageMonthIncome -->
                                <!-- ElectionPlacePrice -->
                                <div class="col-md-12 col-xs-12">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">شفاف سازی هزینه های انتخاباتی</div>
                                    <div class="panel-body padding-r-0 padding-l-0">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                          <!-- ngIf: finance.Election.hasChildItems === 0  -->
                                          <p
                                            ng-if="finance.Election.hasChildItems === 0 "
                                            class="ng-binding ng-scope"
                                          >اطلاعاتی برای این مورد وارد نشده است</p>
                                          <!-- end ngIf: finance.Election.hasChildItems === 0  -->
                                          <!-- ngRepeat: item in finance.Election -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--End ElectionPlacePrice -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Report Abuse -->
              <div class="panel left-candidate-panel-resume padding-0 single-scroll report">
                <div
                  class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0"
                >
                  <div class="have-border-bottom">
                    <h3>گزارش تخلف</h3>
                  </div>
                  <h5>در صورت مشاهده هر گونه مغایرت لطفا از طریق فرم زیر گزارش دهید</h5>
                </div>
                <div class="panel-body">
                  <input
                    type="hidden"
                    id="inputReportCandidateId"
                    name="inputReportCandidateId"
                    value="739"
                    autocomplete="off"
                  />
                  <input type="hidden" id="inputCSRF" name="inputCSRF" autocomplete="off" />
                  <div class="row col-xs-12 col-md-12 pull-right padding-r-0">
                    <div class="form-group col-xs-12 col-md-4 pull-right">
                      <label for="inputReportFullName">نام و نام خانوادگی</label>
                      <input
                        class="form-control"
                        type="text"
                        id="inputReportFullName"
                        name="inputReportFullName"
                        autofocus
                      />
                    </div>
                    <div class="form-group col-xs-12 col-md-4 pull-right">
                      <label for="inputReportTitle">عنوان</label>
                      <input
                        class="form-control"
                        type="text"
                        id="inputReportTitle"
                        name="inputReportTitle"
                      />
                    </div>
                    <div class="form-group col-xs-12 col-md-4 pull-right">
                      <label for="inputReportPhone">تلفن همراه (نزد ما محفوظ خواهد ماند)</label>
                      <input
                        class="form-control"
                        type="text"
                        id="inputReportPhone"
                        name="inputReportPhone"
                      />
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-12 padding-r-0">
                    <div class="form-group">
                      <label for="inputReportContent">پیام</label>
                      <textarea
                        class="form-control"
                        rows="6"
                        id="inputReportContent"
                        name="inputReportContent"
                      ></textarea>
                    </div>
                    <div class="row col-xs-12 form-group">
                      <div class="row col-xs-12">
                        <label>کد امنیتی</label>
                      </div>
                      <div class="pull-right">
                        <img
                          class="captcha_img"
                          style="margin: 10px 5px;border: 2px solid #ccc;"
                          src="http://azmaa.net/GetCaptcha"
                        />
                      </div>
                      <div class="pull-right">
                        <input
                          type="text"
                          style="position: relative;top:20px;"
                          name="inputCaptcha"
                          id="inputCaptcha"
                          class="form-control"
                          placeholder="کد امنیتی"
                        />
                      </div>
                    </div>
                    <div class="form-group">
                      <button
                        class="btn btn-danger pull-left submit-form"
                        id="submitReportForm"
                      >ارسال</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <vue-fab mainBtnColor="#3599DB">
      <fab-item  :idx="0" title="بالا" icon="up" />
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
      // api_url: process.env.MIX_APP_URL,
      api_url: "https://dideban.liara.run",
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
