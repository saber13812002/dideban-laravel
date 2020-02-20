
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
.listbox {
  margin-right: 33%;
  width: 40%;
  background: #fff;
  -webkit-box-shadow: 0 30px 60px 0 rgba(90, 116, 148, 0.4);
  box-shadow: 0 30px 60px 0 rgba(90, 116, 148, 0.4);
  border-radius: 10px;
  padding: 35px;
  border-top: 78px solid rgb(65, 125, 244);
  padding-top: 0%;
}
.devider {
  padding: 15px;
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
  font-family: yekan,byekan;
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
h1 {
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