<template>
    <form id="form1" runat="server">
        <section class="banner" role="banner">

            <header id="header">
                <div class="header-content clearfix">
                    <a class="logo" href="#">
                        <img src="" alt=""></a>
                    <nav class="navigation" role="navigation">
                        <ul class="primary-nav">
                            <!-- <li><a class="login" href="/reg">ورود/ثبت نام</a></li> -->
                        </ul>
                    </nav>
                    <a href="#" class="nav-toggle">منو<span></span></a>
                </div>
                <!-- header content -->
            </header>
            <!-- header -->

            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-text text-center">
                        <h1>اسامی پیشنهادی نامزدهای انتخاباتی یازدهمین دور مجلس شورای اسلامی</h1>
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
                    
                </div>
                <!-- ./end row -->
            </div>
        </section>
        <!-- End Contact -->


        <footer class="footer">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <img class="instagram" >
                        </div>
                    </div>
                </div>
                <!-- footer top -->
                <div class="footer-bottom">
                    <div class="container">
                        <div class="col-md-12">
                                <p>
                                    کلیه حقوق محفوظ است
                                </p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer -->
    </form>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
