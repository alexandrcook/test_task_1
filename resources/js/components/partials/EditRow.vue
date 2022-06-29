<template>
    <tr>
        <th> Edit: </th>
        <td><input class="form-control" type="text" v-model="item.client"></td>
        <td><input class="form-control" type="text" v-model="item.product"></td>
        <td><input class="form-control" type="text" v-model="item.total"></td>
        <td><input class="form-control" type="text" v-model="item.date"></td>
        <td>
            <!-- Button trigger modal -->
            <button type="submit" class="btn btn-primary">
                Edit
            </button>
            <button type="button" class="btn btn-primary" >
                X
            </button>
        </td>
    </tr>
</template>

<script>
export default {
    name: "EditRow",
    props: ['item']
}
</script>

<style scoped>

</style>
