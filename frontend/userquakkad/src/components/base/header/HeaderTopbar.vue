<template>
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-left">
                        <ul class="menu-top-link">
                            <li>
                                <div class="select-position">
                                    <select @change="changeLanguage" id="select5">
                                        <option value="0" selected>English</option>
                                        <option value="3">Français</option>
                                        <option value="4">العربية</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-middle">
                        <ul class="useful-links">
                            <li @click="$router.push('/')" style="cursor: pointer;">
                                <a>Home</a>
                            </li>
                            <li style="cursor: pointer;" @click="$router.push('/about')"><a>About Us</a></li>
                            <li style="cursor: pointer;" @click=" $router.push('/contact')"><a>Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-end">
                        <div v-if="isLoggedIn" class="user">
                            <i class="lni lni-user"></i>
                            Hello
                        </div>
                        <ul class="user-login " style="cursor: pointer;">
                            <li v-if="!isLoggedIn" @click="$router.push('/login')">
                                <span>Sign In</span>
                            </li>
                            <li v-if="!isLoggedIn" @click="$router.push('/register')">
                                <span>Register</span>
                            </li>
                            <li @click="Logout" v-if="isLoggedIn">
                                <span>
                                    Logout
                                </span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Swal from 'sweetalert2';
export default {
    name: 'HeaderTopbar',
    data() {
        return {
            isLoggedIn: false,
        }
    },
    methods: {
        Logout() {
            this.$store.dispatch('logout');
        }
    },

    mounted() {
        this.isLoggedIn = this.$store.state.isLoggedIn
    },

    watch: {
        isLoggedIn() {
            this.isLoggedIn = this.$store.state.isLoggedIn
        }
    },
    computed: {
        isLoggedIn() {
            this.isLoggedIn = this.$store.state.isLoggedIn
            return this.$store.state.isLoggedIn
       }
    },
    changeLanguage() {
      Swal.fire({
        title: 'Coming Soon',
        text: 'This feature is coming soon',
        type: 'info',
        confirmButtonText: 'OK'
      })
        console.log('changeLanguage')
    }
}


</script>
