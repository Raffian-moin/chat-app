<template>
<div class="h-96 w-fill">
	<div class="h-full p-2 flex flex-col-reverse overflow-scroll">
		<div v-for="(message,index) in messages" :key="index">
			<message-item :message="message"/>
		</div>
		
	</div>
	
</div>
                    

</template>

<script>

	import MessageItem from './MessageItem.vue'

    export default {

    	components: {MessageItem},

    	props:['messages']

    }
</script>