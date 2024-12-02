<template >
    <v-row>
        <v-col cols="3" md="3">
            <v-card
                class="mx-auto"
                subtitle="show full details"
                title="Purchase"
            >
                <template v-slot:prepend>
                    <v-icon color="primary" icon="mdi-cart"></v-icon>
                </template>
                <template v-slot:append>
                    <v-icon color="success" icon="mdi-check-circle-outline"></v-icon>
                </template>
            <v-card-text>Monitor your purchases monthly and daily.</v-card-text>
            </v-card>
        </v-col>

        <v-col cols="3" md="3">
            <v-card
                class="mx-auto"
                subtitle="show full details"
                title="Revenue"
            >
                <template v-slot:prepend>
                    <v-icon color="primary" icon="mdi-currency-php"></v-icon>
                </template>
                <template v-slot:append>
                    <v-icon color="success" icon="mdi-check-circle-outline"></v-icon>
                </template>
            <v-card-text>Monitor your sales monthly and daily.</v-card-text>
            </v-card>
        </v-col>

        <v-col cols="3" md="3">
            <v-card
                class="mx-auto"
                subtitle="show full details"
                title="Inventory"
            >
                <template v-slot:prepend>
                    <v-icon color="primary" icon="mdi-store-cog"></v-icon>
                </template>
                <template v-slot:append>
                    <v-icon color="success" icon="mdi-check-circle-outline"></v-icon>
                </template>
            <v-card-text>Monitor your sales inventory.</v-card-text>
            </v-card>
        </v-col>

        <v-col cols="3" md="3">
            <v-card
                class="mx-auto"
                subtitle="show full details"
                title="Products Sold"
            >
                <template v-slot:prepend>
                    <v-icon color="primary" icon="mdi-truck-check-outline"></v-icon>
                </template>
                <template v-slot:append>
                    <v-icon color="success" icon="mdi-check-circle-outline"></v-icon>
                </template>
            <v-card-text>Monitor sold products.</v-card-text>
            </v-card>
        </v-col>
    </v-row>

</template>