<template >
    <div>
        <v-card>
            <v-card-title class="d-flex justify-space-between">
                <p>Products</p>
                <v-btn-group density="compact">
                    <v-btn color="success" density="compact" append-icon="mdi-plus">Add Products</v-btn>
                    <v-btn color="warning" density="compact" append-icon="mdi-filter">Filter Products</v-btn>

                </v-btn-group>
            </v-card-title>

            <v-card-text>
                <hr>
                <v-data-table density="compact" :headers="headers" :items="productList">
                    <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th width="25%">Product Name</th>
                            <th width="10%">Category</th>
                            <th width="15%">Total Stocks</th>
                            <th width="15%">Delivered</th>
                            <th width="10%">Status</th>
                            <th width="10%">Price</th>
                            <th width="10%">Date Registered</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item, i) in productList" :key="i">
                            <td>{{ ++i }}</td>
                            <td>{{ item.product_name }}</td>
                            <td>{{ item.product_category }}</td>
                            <td>{{ item.stocks?.total_stocks }}</td>
                            <td></td>
                            <td></td>
                            <td>{{ item.prices?.product_price }}</td>
                            <td></td>




                        </tr>
                    </tbody>
                </v-data-table>
            </v-card-text>
        </v-card>
    </div>
</template>

<script>
    export default{
        data:()=>({
            productList : [],
            headers : [
                { text: 'No.', value: '', align: 'start', sortable: true},
                { text: 'Product Code', value: 'product_code', sortable: true},
                { text: 'Product Name', value: 'product_name', sortable: true },
                { text: 'Category', value: 'category', sortable: true },
                { text: 'Batch No', value: 'batch_no' },
                { text: 'Total Quantity', value: 'total_qty', align: 'end' },
                { text: 'Actions', value: 'actions', sortable: false },
            ]

        }),

        methods:{
            async GetItems(){
                try {
                    let response = await axios.get('api/Products/GetItems');

                    if(response.statusText == "OK"){
                        this.productList = response.data
                    }
                } catch (error) {
                    console.log(error)
                }


            }
        },

        mounted(){
            this.GetItems();
        }

    }
</script>
