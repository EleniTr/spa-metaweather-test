<script setup>
import { RouterLink, RouterView } from 'vue-router'
import HelloWorld from '@/components/HelloWorld.vue'
</script>

<template>
  <header>
    <form role="search">
      <input type="text" name="search" id="search" placeholder="Search" v-model="search" />
      <button type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z" />
        </svg>
      </button>
    </form>
  </header>
  <RouterView />
</template>

<style>
@import '@/assets/base.css';


header {
  line-height: 1.5;
  max-height: 100vh;
  width: 100%;
  display: flex;
  justify-content: center;
  margin-top: 50px;
}

header form{
  width: 100%;
  display: flex;
  justify-content: center;
  height: 10vh;
}

header svg{
  width:30px;
  height: 30px;
}

#search{
  width:85%;
  font-size: 25px;
  padding-left: 20px;
}

 header form button {
  width: 100px;
  background: azure;
  }

a,
.green {
  text-decoration: none;
  color: hsla(160, 100%, 37%, 1);
  transition: 0.4s;
}

@media (hover: hover) {
  a:hover {
    background-color: hsla(160, 100%, 37%, 0.2);
  }
}

nav {
  width: 100%;
  font-size: 12px;
  text-align: center;
  margin-top: 2rem;
}

nav a.router-link-exact-active {
  color: var(--color-text);
}

nav a.router-link-exact-active:hover {
  background-color: transparent;
}

nav a {
  display: inline-block;
  padding: 0 1rem;
  border-left: 1px solid var(--color-border);
}

nav a:first-of-type {
  border: 0;
}

@media (min-width: 1024px) {

  body {
    display: flex;
  }

  #app {
    display: flex;
    flex-direction: column;
    width: 100%;
  }

  header {
    display: flex;
    justify-content: center;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  nav {
    text-align: left;
    margin-left: -1rem;
    font-size: 1rem;

    padding: 1rem 0;
    margin-top: 1rem;
  }
}

@media (max-width: 993px) {
  header form {
    height: 4vh;
  }
    #search {
      width: 65%;
      font-size: 15px;
      padding-left: 10px;
    }
    
    header svg {
      width: 20px;
      height: 20px;
    }
    
    
}
</style>
