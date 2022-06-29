<template>
    <div>
        <button
            class="btn btn-sm mr-2"
            :class="sortArr.some(obj => obj.column === column && obj.sort === 'asc') ? 'btn-danger' : 'btn-info'"
            @click="runSort(column, 'asc')"
        >
            &#8593;
        </button>
        <button
            class="btn btn-info btn-sm"
            :class="sortArr.some(obj => obj.column === column && obj.sort === 'desc') ? 'btn-danger' : 'btn-info'"
            @click="runSort(column, 'desc')"
        >
            &#8595;
        </button>
    </div>
</template>

<script>
export default {
    name: "TableSortButtons",
    props: ['sortArr', 'column', 'runSort']
}
</script>
