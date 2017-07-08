<template>
    <div class="dashboard">
        <slot></slot>
        <div class ="news">
            <h3>{{msg}}</h3>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return{
                msg:'No upcoming meetings scheduled.'
            }
        },
    mounted: function()
    {
        console.log("Here");
    }
}
</script>