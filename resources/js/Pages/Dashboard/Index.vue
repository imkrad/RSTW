<template>
    <b-row>
        <b-col lg="4" md="6" v-for="(item, index) of events" :key="index">
            <b-card no-body>
                <b-card-body>
                    <div class="d-flex align-items-center" style="cursor: pointer;">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-primary rounded-circle fs-3">
                                <i :class="`ri-bill-line align-middle`"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">
                                {{ item.name }}
                            </p>
                            <h4 class="mb-0">
                                <span class="counter-value">
                                {{ item.participants_count }} / {{item.maximum}}
                                </span>
                            </h4>
                        </div>
                    </div>
                </b-card-body>
            </b-card>
        </b-col>
        <b-col lg="12">
            <b-card>
            </b-card>
        </b-col>
    </b-row>
</template>
<script>
export default {
    props: ['events']
}
</script>