<template>
    <v-card>
        <v-layout>
            <v-app-bar
                density="compact"
                class="custom-bar"
                prominent    
            >
             
            <v-toolbar-title class="app-title" style=" font-size: 30px !important">Chillchic</v-toolbar-title>
            <v-spacer/>
            <p>follow us in our</p>
            
                <v-btn fab icon>
                    <v-icon>mdi-facebook</v-icon>
                </v-btn>
                <v-btn fab icon>
                    <v-icon>mdi-instagram</v-icon>
                </v-btn>
            </v-app-bar>
            <v-navigation-drawer
                rail
                rail-width="75"
                expand-on-hover
                class="custom-bar"
                v-model="drawer"
                @click="rail = false"
                permanent>
                <v-list density="compact" class="pt-0">
                    
                    <v-list-item
                        class="nav-title"
                        v-for="(item, i) in items"
                        :key="i"
                        :value="item"
                        color="primary"
                        :to="item.path">
                        <template v-slot:prepend>
                            <v-icon >{{ item.icon }}</v-icon>
                        </template>
                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                    </v-list-item>
                </v-list>
            </v-navigation-drawer>

            <v-main>
                <router-view ></router-view>
            </v-main>
        </v-layout>
    </v-card>
</template>

<script>
    export default{
        data:() => ({
            drawer : true,
            group: null,
            items: [
                {
                    title: 'Dashboard',
                    path: '/Dashboard',
                    icon: 'mdi-view-dashboard-outline'
                },
                {
                    title: 'Products',
                    path: '/Products',
                    icon: 'mdi-package-variant-closed'
                },
                {
                    title: 'Inventory',
                    path: '/Inventory',
                    icon: 'mdi-clipboard-list-outline'
                },
                {
                    title: 'Stock Outflow',
                    path: '/StockOutflow',
                    icon: 'mdi-bank-transfer-out'
                },
                {
                    title: 'Stock Inflow',
                    path: '/StockInflow',
                    icon: 'mdi-bank-transfer-in'
                },
                {
                    title: 'Customer',
                    path: '/Customer',
                    icon: 'mdi-account-circle-outline'
                },
            ]
        }),

        watch:{
            group(){
                this.drawer = false;
            }
        }
    }
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap');

    .custom-bar{
        font-family: 'Lily Script One' !important;
        background-image: linear-gradient(to right, rgba(238, 79, 105, 1.8), rgba(55, 14, 151, 0.48)) !important;

        font-family: "Lily Script One", system-ui;
        font-weight: 400;
        font-style: normal;
       
    }

    .app-title{
        font-size: 30px !important;
        background-image: linear-gradient(to right, rgb(255,255,255), rgba(241, 224, 29, 0.90), rgba(226, 24, 27, 0.90), rgba(132, 209, 155, 0.90)) !important;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;

    }
    
    .nav-title{
        color: #f1ecec !important;
        font-size: 30px !important;
        font-weight: 900;
    }

    .main-content{
        background: #f1ecec !important;

    }



</style>