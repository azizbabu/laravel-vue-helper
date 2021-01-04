Vue.component('menu-list', {
	props:['items'],
	template:`
		<div>
			<ul>
				<li v-for="item in items">
					<slot name="menu-item" :item="item" thing="foo" bar="baz">{{ item }}</slot>
				</li>
			</ul>
		</div>	
	`,
	data() {
		return {
			
		}
	},
	methods:{
		
	},
	mounted() {
		console.log(this.items)
	}
})

new Vue({
	el:'#app',
	data:{
		
	}
})