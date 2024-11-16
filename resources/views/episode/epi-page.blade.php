@php
    $postID 	= isset($_GET['post_id']) ? absint($_GET['post_id']) : get_the_ID();
	$metaPost 	= get_post_meta($postID, HNMG_META, true);
	$loaddata 	= get_post_meta($postID, HNMG_EPS, true);
	$data 		= json_decode(stripslashes($loaddata), true);
@endphp

<div>
	<div class="flex flex-wrap justify-center items-center w-auto md:w-full space-x-2 md:space-x-4">
		@if($data)
			<button @click="toggleImport1"
				class="relative inline-flex items-center py-2 px-4 text-sm font-bold text-center text-white rounded-full hover:bg-blue-800 from-rose-400 via-fuchsia-500 to-indigo-500 bg-gradient-to-r mb-2 md:mb-0">
				@hnsvg('plus-circle') @hnepis('Mass Import Episode')
				<div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900">
					1
				</div>
			</button>
			<button @click="toggleImport2"
				class="relative inline-flex items-center py-2 px-4 text-sm font-bold text-center text-white rounded-full hover:bg-blue-800 from-cyan-500 via-sky-500 to-blue-500 bg-gradient-to-r mb-2 md:mb-0">
				@hnsvg('squares-plus') @hnepis('Mass Import Episode')
				<div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900">
					2
				</div>
			</button>
		@endif
		<button @click="toggleAddServer"
			class="m-1 p-1 rounded-full bg-gradient-to-r from-rose-600 via-purple-500 to-violet-700">
			<span class="block text-white text-sx px-4 py-1 font-semibold rounded-full hover:bg-transparent hover:text-white transition">
				@hnsvg('add-server') @hnepis('Add Episode Server')
			</span>
		</button>
		<button @click="toggleEditDetails"
			class="m-1 p-1 rounded-full bg-gradient-to-r from-sky-400 via-emerald-500 to-teal-600">
			<span class="block text-white text-sx px-4 py-1 font-semibold rounded-full hover:bg-transparent hover:text-white transition">
				@hnsvg('edit-post') @hnepis('Edit Movie Details')
			</span>
		</button>
	</div>
	@if($data)
		<div x-show="showImport1" x-transition>
			@include('HNMG::episode.importmulti', compact('data', 'metaPost', 'postID'))
		</div>
		<div x-show="showImport2" x-transition>
			@include('HNMG::episode.importmulti2', compact('data', 'metaPost', 'postID'))
		</div>
	@endif
	<div x-show="showAddServer" x-transition>
		@include('HNMG::episode.addserver', compact('data', 'metaPost', 'postID'))
	</div>
	<div x-show="showEditDetails" x-transition>
		@include('HNMG::episode.postedit', compact('data', 'metaPost', 'postID'))
	</div>
</div>

<div class="my-5 border border-gray-300 bg-white rounded-lg shadow-full w-[98%]" x-init="init({{ $postID ?? 'null' }})">
	<div class="px-4 py-2 text-xs font-semibold text-gray-700 rounded-t-lg uppercase bg-gray-100 flex flex-col md:flex-row justify-between items-start md:items-center">
		<div class="mb-4 md:mb-0">
			@hnepis('Import Episode To'): 
			<a href="{{ get_permalink($postID) }}" target="_blank" class="text-blue-600 hover:underline">
				{!! Str::limit(get_the_title($postID), 110, '...') !!}
			</a>
		</div>
		<div class="flex md:flex-row md:space-y-0 md:space-x-4 w-full md:w-auto">
			<button @click="updateEpisodes({{ $postID }})" x-bind:disabled="isLoading" class="hnepisode-saving flex items-center">
				<template x-if="isLoading">
					<svg aria-hidden="true" class="animate-spin size-4 text-white fill-red-500 stroke-[7px] mr-2 inline" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
							<path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
					</svg>
				</template>
				<span x-text="buttonText"></span>
			</button>

			<button @click="exportEpisodes({{ $postID }}, {{ $server }})" class="hnexport-episodes ">@hnepis('Export Episodes')</button>
		</div>
	</div>
	
	<div class="p-0 md:p-4 rounded-b-lg">
		@include('HNMG::episode.epi-list', compact('postID'))
	</div>
</div>
