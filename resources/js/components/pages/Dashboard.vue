<template >
    <v-container fluid>
        <v-row>
            <v-col cols="12">
                <DashboardCard/>
            </v-col>
        </v-row>

        <v-row>
            <v-col cols="8">
                <DashboardGraph/>
            </v-col>
            <v-col cols="4">
                <DashboardTopSelling/>
            </v-col>
        </v-row>

        <v-row>
            <v-col cols="12">
                <v-card>
                    <v-card-title>
                        Stock Alert [ New Arrival ]
                    </v-card-title>
                    <v-card-text>
                        <v-table class="table">
                            <thead>
                                <tr>
                                    <th v-for="(header, i) in headers" :key="i">{{ header }}</th>
                                </tr>
                            </thead>
                        </v-table>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
        
    </v-container>
</template>

<script>
import DashboardCard from "../utilities/DashboardCard.vue";
import DashboardGraph from "../utilities/DashboardGraph.vue";
import DashboardTopSelling from "../utilities/DashboardTopSelling.vue";

export default{
    components : {DashboardCard, DashboardGraph, DashboardTopSelling},
    data : ()=>({
        headers:['Product ID', 'Date Encoded', 'Item Name', 'Item QTY'],
        newProducts: []
    })
}
</script>