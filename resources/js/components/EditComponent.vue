<template>
  <div class="wrapper">
    <form :model="infoss" @submit.prevent="updateInfoss" v-if="loading" class="form">
      <h1>اطلاعات شما</h1>
      <div v-if="hasPic" class="form-photo">
        <!-- <img v-bind:src=`https://dideban.liara.run/images/avatars/+ this.infoss.profile_picture` /> -->
        <img class="profile_image" v-bind:src="this.profile_picture" />
      </div>

      <iframe v-if="!hasPic" width="560" height="315" :src="image_picker_url" frameborder="0" />

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>نام</label>
            <input type="text" class="form-control" v-model="infoss.name" />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>نام خانوادگی</label>
            <input type="text" class="form-control" v-model="infoss.family" />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>موبایل</label>
            <input :disabled="true" type="text" class="form-control" v-model="infoss.mobile" />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>ایمیل</label>
            <input type="text" class="form-control" v-model="infoss.email" />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>کدملی</label>
            <input type="number" class="form-control" v-model="infoss.national_code" />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>شماره شناسنامه</label>
            <input type="number" class="form-control" v-model="infoss.shomshenas" />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>نام پدر</label>
            <input type="text" class="form-control" v-model="infoss.fathername" />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>تاریخ تولد</label>
            <date-picker v-model="infoss.birthdate"></date-picker>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>تحصیلات</label>
            <input type="text" class="form-control" v-model="infoss.tahsilat" />
          </div>
        </div>
      </div>

      <div class="form-group" v-if="provLoad">
        <label>انتخاب استان</label>
        <select class="form-control" v-model="infoss.province" @change="getCounty()">
          <option value="0">انتخاب استان</option>
          <option v-for="item in provinces" :value="item.id" v-bind:key="item.id">{{ item.name }}</option>
        </select>
      </div>

      <div class="form-group" v-if="!provLoad" :disabled="false">
        <label>انتخاب استان</label>
        <select class="form-control">
          <option value="0">صبر کنید</option>
        </select>
      </div>

      <div class="form-group" v-if="counLoad">
        <label>انتخاب ناحیه</label>
        <select class="form-control" v-model="infoss.county" @change="getCity()">
          <option value="0">انتخاب ناحیه</option>
          <option v-for="item in counties" :value="item.id" v-bind:key="item.id">{{ item.name }}</option>
        </select>
      </div>

      <div class="form-group" v-if="!counLoad" :disabled="false">
        <label>انتخاب ناحیه</label>
        <select class="form-control">
          <option value="0">صبر کنید</option>
        </select>
      </div>

      <div class="form-group" v-if="cityLoad">
        <label>انتخاب شهر</label>
        <select class="form-control" v-model="infoss.city">
          <option value="0">انتخاب شهر</option>
          <option v-for="item in cities" :value="item.id" v-bind:key="item.id">{{ item.name }}</option>
        </select>
      </div>

      <div class="form-group" v-if="!cityLoad" :disabled="false">
        <label>انتخاب شهر</label>
        <select class="form-control">
          <option value="0">صبر کنید</option>
        </select>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>آدرس</label>
            <input type="text" class="form-control" v-model="infoss.address" />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>کدپستی</label>
            <input type="text" class="form-control" v-model="infoss.postalcode" />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>تلفن تماس</label>
            <input type="text" class="form-control" v-model="infoss.phone" />
          </div>
        </div>
      </div>

      <br />
      <div class="form-group">
        <button class="btn btn-primary" v-if="save">ذخیره</button>
        <button class="btn btn-primary" v-if="!save" :disabled="!save">صبر کنید...</button>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      infoss: {},
      loading: false,
      save: false,
      hasPic: false,
      profile_picture: "",
      provinces: [],
      counties: [],
      cities: [],
      provLoad: false,
      counLoad: false,
      cityLoad: false
    };
  },
  // components: {
  //   DatePicker: VuePersianDatetimePicker
  // },
  created() {
      let app_url = process.env.APP_URL;
      console.log("sa");
      console.log(app_url);
    const jwt = localStorage.getItem("jwt");
    if (!jwt) this.$router.push({ name: "reg" });
    let uri = `https://dideban.liara.run/api/v1/info/me`;
    console.log(uri);
    this.infoss.token = jwt;
    this.axios
      .post(uri, this.infoss)
      .then(response => {
        console.log(response);
        this.infoss = response.data.data[0];
        console.log(this.infoss);
        if (this.infoss.profile_picture) {
          this.hasPic = true;
          this.profile_picture =
            `https://dideban.liara.run/images/avatars/` +
            this.infoss.profile_picture;
        }
        this.image_picker_url = `https://dideban.liara.run/image-upload?author_id=${this.$route.params.id}`;
        //https://dideban.liara.run/image-upload?author_id=155
        this.loading = true;
        this.save = true;
        this.getProvince();
      })
      .catch(error => {
        console.log("Error login");
        console.log(error);
      });
  },
  methods: {
    updateInfoss() {
      this.save = false;
      let uri = `https://dideban.liara.run/api/v1/info/me`;
      this.axios
        .post(uri, this.infoss)
        .then(response => {
          console.log(response);
          this.save = true;
        })
        .catch(error => {
          console.log("Error login");
          console.log(error);
        });
    },
    getProvince() {
      this.provLoad = false;
      let uri = `https://dideban.liara.run/api/v1/province`;
      console.log(uri);
      let app_url = process.env.APP_URL;
      console.log("sa");
      console.log(app_url);
      this.axios
        .get(uri)
        .then(response => {
          console.log(response);
          this.provinces = response.data;
          console.log(this.provinces);

          this.provLoad = true;
          this.getCounty();
        })
        .catch(error => {
          console.log("Error provinces");
          console.log(error);
        });
    },
    getCounty() {
      this.counLoad = false;
      let app_url = process.env.APP_URL;
      console.log("sa");
      console.log(app_url);
      let uri = `https://dideban.liara.run/api/v1/county/${this.infoss.province}`;
      console.log(uri);
      this.axios
        .get(uri)
        .then(response => {
          console.log(response);
          this.counties = response.data;
          console.log(this.counties);
          this.counLoad = true;
          this.getCity();
        })
        .catch(error => {
          console.log("Error counties");
          console.log(error);
        });
    },
    getCity() {
      this.cityLoad = false;
      let uri = `https://dideban.liara.run/api/v1/city/${this.infoss.county}`;
      console.log(uri);
      this.axios
        .get(uri)
        .then(response => {
          console.log(response);
          this.cities = response.data;
          console.log(this.cities);
          this.cityLoad = true;
        })
        .catch(error => {
          console.log("Error cities");
          console.log(error);
        });
    }
  }
};
</script>
