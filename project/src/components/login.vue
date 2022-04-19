<script setup>

</script>


<template>
    <div>
        <div id="account-login" class="container">
      <div class="row">
    <div id="content" class="col-sm-12">
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
            <h2>Yeni müştəri</h2>
            <p><strong>Qeydiyyatdan keçin</strong></p>
            <p>Hesab yaratmaqla siz daha sürətli alış-veriş edə, sifarişin statusundan xəbərdar ola və əvvəllər etdiyiniz sifarişləri izləyə biləcəksiniz..</p>
            <RouterLink to="/register" exact-active-class="active"><a class="btn btn-primary">Hesab Yarat</a></RouterLink>
        </div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            <h2>Geri dönən Müştəri</h2>
            <p><strong>Mən geri qayıdan müştəriyəm</strong></p>
            <form @submit.prevent="login">
              <div class="form-group">
                <label class="control-label" for="input-email">E-poçt ünvanınızı bura daxil edin...</label>
                <input type="text" placeholder="E-poçt ünvanınızı bura daxil edin..." id="input-email" class="form-control" v-model="user.email" />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password">Şifrə</label>
                <input type="password" placeholder="Şifrənizi bura daxil edin..." id="input-password" class="form-control" v-model="user.password" />
                <a href="">Unutulmuş Parol</a></div>
              <input type="submit" value="Daxil ol" class="btn btn-primary">
            </form>
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
                user: {
                    email : '',
                    password : null
                }
            }
        },

        methods: {
            login() {
                this.$store.dispatch('Login',this.user)
                this.user = {
                    email : '',
                    password : null,
                }
            }
        },
}
</script>



<style scoped>

</style>