<template>
     <div class="flex items-center justify-center ">
    <div class="px-4 lg:py-12">
        <div class="lg:gap-4 lg:flex">
            <div class="flex flex-col items-center justify-center md:py-24 lg:py-32">
                <h1 class="mb-8 font-bold text-blue-600 text-5xl">No Appointments</h1>
                <p class="mb-8 text-2xl font-bold text-center text-gray-800 md:text-3xl">
                    <span class="text-red-500">Oops!</span> You don't have any appointment
                </p>
                <p class="mb-8 text-center text-gray-500 md:text-lg">
                    The page you’re looking for doesn’t exist.
                </p>
                <button @click="BackBook" class="px-6 py-2 text-sm font-semibold text-blue-800 bg-blue-100">Go
                    Book </button>
            </div>
            <div class="mt-4 w-80">
                <img src="../../assets/img/fontfound.svg" alt="img" class="object-cover w-30 h-30" />
            </div>
        </div>
    </div>
</div>
</template>

<script>

export default {
    name: 'No_Appointments',
}

</script>
