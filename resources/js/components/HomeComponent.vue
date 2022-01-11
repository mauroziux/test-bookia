<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8 mb-3">
                <div class="card">
                    <div class="card-header">
                        <button @click="allTables" class="btn btn-primary btn-lg">All tables</button>
                        <button @click="activeTables" class="btn btn-primary btn-lg">Active tables</button>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">min</th>
                                <th scope="col">max</th>
                                <th scope="col">dining area</th>
                                <th scope="col">active</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="item in filterTables">
                                <td>{{ item.id }}</td>
                                <td>{{ item.name }}</td>
                                <td>{{ item.minimum_capacity }}</td>
                                <td>{{ item.maximum_capacity }}</td>
                                <td>{{ item.dining_area.name }}</td>
                                <td>
                                    <span v-if="item.active" class="badge badge-success">Active</span>
                                    <span v-else class="badge badge-danger">No active</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mb-3">
                <div class="card">
                    <div class="card-header">
                        New table
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input required v-model="form.name" type="text" class="form-control"
                                       placeholder="table #">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>minimum capacity</label>
                                        <input required min="0" max="100" v-model="form.minimum_capacity" type="number"
                                               class="form-control" placeholder="1">
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>maximun capacity</label>
                                        <input required min="0" max="100" v-model="form.maximum_capacity" type="number"
                                               class="form-control" placeholder="4">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Dining Area</label>
                                <select required v-model="form.dining_area_id" class="form-control">
                                    <option v-for="item in dining_areas" :value="item.id">{{ item.name }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Restaurant</label>
                                <select required v-model="form.restaurant_id" class="form-control">
                                    <option v-for="item in restaurants" :value="item.id">{{ item.name }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Active</label>
                                <select required v-model="form.active" class="form-control">
                                    <option value="1">yes</option>
                                    <option value="0">no</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" @click="createTable" class="btn btn-danger btn-lg">Create table
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            tables: [],
            filterTables: [],
            restaurants: [],
            dining_areas: [],
            form: {
                name: '',
                minimum_capacity: '',
                maximum_capacity: '',
                active: '1',
                restaurant_id: '1',
                dining_area_id: '1',
                _method: 'POST'
            }
        }
    },
    methods: {
        allTables() {
            this.filterTables = this.tables
        },
        activeTables() {
            this.filterTables = _.orderBy(this.tables.filter(item => item.active), 'dining_area_id')
        },
        async createTable() {
            let response = await axios.post('/api/tables', this.form)
            this.tables.push(response.data)
        }
    },
    async mounted() {
        let responseTable = await axios.get('/api/tables')
        let responseRestaurants = await axios.get('/api/restaurants')
        let responseDiningAreas = await axios.get('/api/dining-areas')
        this.tables = responseTable.data
        this.filterTables = responseTable.data
        this.restaurants = responseRestaurants.data
        this.dining_areas = responseDiningAreas.data
    }
}
</script>
