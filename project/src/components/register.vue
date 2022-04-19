<script setup>
  import {RouterLink} from 'vue-router'
</script>



<template>
    <div>
    <div id="account-register" class="container">
    <div class="row">
    <div id="content" class="col-sm-12">
      <h1>Hesabı Qeydiyyatdan keçirin</h1>
      <p>Əgər artıq bizimlə hesabınız varsa, lütfən, bu ünvana daxil olun <RouterLink to="/login" exact-active-class="active"><a href=""><strong>login səhifəsi</strong></a></RouterLink>.</p>
      <form @submit.prevent="register" class="form-horizontal">
          <legend>Şəxsi Məlumatlarınız</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-poçt ünvanınızı bura daxil edin...</label>
            <div class="col-sm-10">
              <input type="email" placeholder="E-poçt ünvanınızı bura daxil edin..." id="input-email" class="form-control" v-model="user.email" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password">Şifrə</label>
            <div class="col-sm-10">
              <input type="password" placeholder="Şifrənizi daxil edin..." id="input-password" class="form-control" v-model="user.password" />
               </div>
          </div>
        <div class="buttons">
          <div class="pull-right">
            <input type="submit" value="Qeydiyyatdan Keç" class="btn btn-primary" />
          </div>
        </div>
        </form>
      </div>
    </div>
</div>        
    </div>
</template>


<script>
export default {
  data() {
    return {
      user : {
        email : '',
        password : null
      }
    }
  },

  methods: {
    register() {
      this.$store.dispatch('Register',this.user)
      this.user = {
        email : '',
        password : null
      }
    }
  },
}
</script>


<style scoped>

</style>