<template>
     <nav class="text-sm font-semibold mb-6" aria-label="Breadcrumb">
              <ol class="list-none p-0 inline-flex">
                <li @click="$route.go(-1)" class="flex items-center text-blue-500">
                  <span  class="text-gray-700">
                      {{items[0]}}
                  </span>
                  <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                </li>
                <li @click="$route.go(-1)" class="flex items-center">
                  <span  class="text-gray-600">
                      {{items[1]}}  
                  </span>
                </li>
              </ol>
            </nav>
</template>

<script>
export default {
    name: 'BreadCrummb',
    props: {
        items: {
            type: Array,
            default: () => ['Home', 'Products']
        }
    
    }
}
</script>