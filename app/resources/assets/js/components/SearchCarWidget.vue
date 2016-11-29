<template>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Find a car</div>
					<div class="panel-body">

						<input
								id="search-input"
								type="text"
								v-model="query"
								v-on:keyup="search"
								placeholder="Find a car"
						>

						<div class="results">
							<article v-for="car in cars">
								<h2 v-html="car._highlightResult.model.value"></h2>
								<h4 v-html="car._highlightResult.manufacturer.value"></h4>
								<p v-html="car._highlightResult.description.value"></p>
								<hr/>
							</article>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<style>
	em{
	   background-color:yellow;
	}

	#search-input{
		width:100%;
	}

</style>
<script>

	import algoliasearch from 'algoliasearch';
	import _ from 'lodash';

	export default{
		data(){
			return{
				msg:'hello vue',
				query: '',
				cars: []
			}
		},
		mounted(){
			this.client = algoliasearch(Laravel.algoliaAppId, Laravel.algoliaSearchKey);
			this.index = this.client.initIndex('cars_index');
			this.search();
		},
		methods: {
			search: _.debounce(function() {
				this.index.search(this.query, function(error, results) {
					this.cars = results.hits;
				}.bind(this));
			}, 500)
		}
	}

</script>
