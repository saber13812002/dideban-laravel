
<template>
  <div>
    <div>
      <transition name="fade">
        <router-view></router-view>
      </transition>
    </div>
  </div>
</template>

<style>
@media only screen and (max-width: 600px) {
  .form {
    width: 100vw !important;
  }
  .listbox {
    margin-right: 2% !important;
    width: 92vw !important;
    padding: 5px !important;
  }

  .name {
    width: 9%;
    margin-left: 1% !important;
  }
  .code {
    width: 9%;
    margin-left: 1% !important;
  }
  .hoze {
    width: 9%;
    margin-left: 1% !important;
  }
  .devider {
    padding: 15px !important;
  }
  .deviderr {
    padding: 1px !important;
  }
  h2 {
    font-weight: 200 !important;
    font-size: 17px !important;
  }
}
.loader {
  margin-right: 40%;
  border: 16px solid #f3f3f3; /* Light grey */
  border-top: 16px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.listbox {
  margin-right: 20%;
  width: 60%;
  background: #fff;
  -webkit-box-shadow: 0 30px 60px 0 rgba(90, 116, 148, 0.4);
  box-shadow: 0 30px 60px 0 rgba(90, 116, 148, 0.4);
  border-radius: 10px;
  padding: 35px;
  border-top: 78px solid rgb(65, 125, 244);
  padding-top: 0%;
}
.devider {
  padding: 10px;
  display: inline;
}
.deviderr {
  padding: 5px;
  display: inline;
}
.name {
  width: 9%;
  margin-left: 9%;
}
.code {
  width: 9%;
  margin-left: 9%;
}
.hoze {
  width: 9%;
  margin-left: 9%;
}
.list {
  text-align: center;
  background: #ebebeb;
  color: #000;
  display: block;
  padding: 0 8px;
  line-height: 26px;
  margin: 2px 2px;
  text-decoration: none;
}
.namayande {
  display: inline;
  font-size: initial;
}
#mapdiv {
  width: 100%;
  height: 500px;
}
.instagram {
  /* background: url('https://dideban.liara.run//images/instagram.png'); */
}
body {
  background: #ddeefc;
  font-family: yekan, byekan;
}
.form-photo {
  margin: 0 auto;
  width: 199px;
  border-radius: 50%;
  border: 10px solid blue;
}
.profile_image {
  border-radius: 50%;
  border: 10px solid #539af3;
}
select {
  height: 40px !important;
}
h2 {
  text-align: center;
  width: 100%;
  position: relative;
  top: -54px;
  color: white;
  margin: 0px;
}
.form {
  width: 500px;
  background: #fff;
  -webkit-box-shadow: 0 30px 60px 0 rgba(90, 116, 148, 0.4);
  box-shadow: 0 30px 60px 0 rgba(90, 116, 148, 0.4);
  border-radius: 10px;
  padding: 35px;
  border-top: 78px solid rgb(65, 125, 244);
  padding-top: 0%;
}
.wrapper {
  min-height: 100vh;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  display: flex;
  padding: 50px 15px;
}
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter,
.fade-leave-active {
  opacity: 0;
}
</style>


<script>
export default {};
</script>