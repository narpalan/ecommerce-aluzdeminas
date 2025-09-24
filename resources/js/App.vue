<template>
    <div>
        <!-- Navbar -->
        <header class="container o-gutter-x">
            <div class="row align-items-center" style="height:54px">
                <div class="col-3">
                    <a href="/">
                        <img src="/assets/imgs/burguer-menu.svg" alt="Menu">
                    </a>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center" id="logo">
                    <a class="navbar-brand" href="/">
                        <img src="/assets/imgs/logo-navbar.svg" alt="Logo">
                    </a>
                </div>
            </div>
        </header>

        <!-- Conteúdo principal -->
        <main>
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
export default {
    name: 'App'
}
</script>