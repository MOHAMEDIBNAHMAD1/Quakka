<template>
  <div
    class="w-1/2 md:w-1/3 lg:w-64 fixed md:top-0 md:left-0 h-screen lg:block bg-gray-100 border-r z-30"
    :class="sideBarOpen ? '' : 'hidden'"
    id="main-nav"
  >
    <div class="w-full h-20 border-b flex px-4 items-center mb-8">
      <p class="font-semibold text-3xl text-purple-700 pl-4">Quakka</p>
    </div>

    <div class="mb-4 px-4">
      <p class="pl-4 text-sm font-semibold mb-1">MAIN</p>
      <div
        @click="$router.push('/dashboard')"
        class="w-full flex items-center text-purple-700 h-10 pl-4 bg-gray-200 hover:bg-gray-200 rounded-lg cursor-pointer"
      >
        <svg class="h-6 w-6 fill-current mr-2" viewBox="0 0 20 20">
          <path
            d="M18.121,9.88l-7.832-7.836c-0.155-0.158-0.428-0.155-0.584,0L1.842,9.913c-0.262,0.263-0.073,0.705,0.292,0.705h2.069v7.042c0,0.227,0.187,0.414,0.414,0.414h3.725c0.228,0,0.414-0.188,0.414-0.414v-3.313h2.483v3.313c0,0.227,0.187,0.414,0.413,0.414h3.726c0.229,0,0.414-0.188,0.414-0.414v-7.042h2.068h0.004C18.331,10.617,18.389,10.146,18.121,9.88 M14.963,17.245h-2.896v-3.313c0-0.229-0.186-0.415-0.414-0.415H8.342c-0.228,0-0.414,0.187-0.414,0.415v3.313H5.032v-6.628h9.931V17.245z M3.133,9.79l6.864-6.868l6.867,6.868H3.133z"
          ></path>
        </svg>
        <span class="text-gray-700">Dashboard</span>
      </div>
      <div
        class="w-full flex items-center text-purple-700 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer"
      >
        <svg class="h-6 w-6 fill-current mr-2" viewBox="0 0 20 20">
          <path
            d="M17.431,2.156h-3.715c-0.228,0-0.413,0.186-0.413,0.413v6.973h-2.89V6.687c0-0.229-0.186-0.413-0.413-0.413H6.285c-0.228,0-0.413,0.184-0.413,0.413v6.388H2.569c-0.227,0-0.413,0.187-0.413,0.413v3.942c0,0.228,0.186,0.413,0.413,0.413h14.862c0.228,0,0.413-0.186,0.413-0.413V2.569C17.844,2.342,17.658,2.156,17.431,2.156 M5.872,17.019h-2.89v-3.117h2.89V17.019zM9.587,17.019h-2.89V7.1h2.89V17.019z M13.303,17.019h-2.89v-6.651h2.89V17.019z M17.019,17.019h-2.891V2.982h2.891V17.019z"
          ></path>
        </svg>
        <span class="text-gray-700">Analytics</span>
      </div>
      <div
        class="w-full flex items-center text-purple-700 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer"
        @click="$router.push('/purcahse-orders')"
      >
        <svg
          class="h-6 w-6 fill-current mr-2"
          version="1.1"
          id="Capa_1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          viewBox="0 0 204.367 204.367"
          style="enable-background: new 0 0 204.367 204.367"
          xml:space="preserve"
        >
          <path
            d="M99.465,196.049c-0.021,0-0.041-0.001-0.061-0.001H3c-0.853,0-1.666-0.363-2.234-0.998
	c-0.569-0.636-0.841-1.483-0.748-2.331l16.47-149.378c0.167-1.521,1.452-2.671,2.982-2.671h22.756V30.509
	c0-12.236,9.955-22.191,22.19-22.191c2.007,0,3.953,0.268,5.803,0.77c1.851-0.502,3.796-0.77,5.804-0.77
	c12.236,0,22.19,9.955,22.19,22.191v10.161h24.215c1.558,0,2.856,1.191,2.989,2.743l3.75,43.714h7.176v-6.068
	c0-8.944,7.277-16.222,16.222-16.222c2.129,0,4.164,0.412,6.028,1.161c1.864-0.749,3.899-1.161,6.028-1.161
	c8.945,0,16.222,7.277,16.222,16.222v6.068h11.693c1.558,0,2.856,1.191,2.989,2.743l8.83,102.921
	c0.072,0.838-0.211,1.666-0.779,2.285c-0.568,0.619-1.37,0.972-2.21,0.972h-66.115c-0.006,0-0.012,0-0.018,0H99.526
	C99.506,196.048,99.486,196.049,99.465,196.049z M179.95,190.048h18.149l-8.315-96.921h-2.568L179.95,190.048z M137.998,190.048
	h35.935l7.266-96.921h-12.409v4.802c0,1.657-1.343,3-3,3s-3-1.343-3-3v-4.802h-20.445v4.802c0,1.657-1.343,3-3,3s-3-1.343-3-3
	v-4.802h-6.661L137.998,190.048z M104.358,190.048h23.044l-15.832-14.189L104.358,190.048z M69.309,190.048h27.375l7.324-97.703
	c0.002-0.029,0.004-0.06,0.007-0.089l3.417-45.586H86.607v8.323c0,1.657-1.343,3-3,3s-3-1.343-3-3v-8.323H48.226v8.323
	c0,1.657-1.343,3-3,3s-3-1.343-3-3v-8.323H22.158L6.349,190.048h4.782l7.114-53.854c0.197-1.492,1.469-2.607,2.974-2.607h9.185
	v-7.83c0-5.654,4.6-10.254,10.253-10.254s10.253,4.6,10.253,10.254v7.83h6.583c1.469,0,2.722,1.064,2.96,2.514L69.309,190.048z
	 M52.047,190.048h11.181l-7.676-46.76L52.047,190.048z M17.184,190.048H46.03l3.783-50.461H23.849L17.184,190.048z M113.603,169.624
	l18.005,16.137l-11.933-139.09h-6.227l-3.441,45.901L113.603,169.624z M106.306,141.957l-2.728,36.384l4.053-7.974L106.306,141.957z
	 M36.404,133.587h8.507v-7.83c0-2.346-1.908-4.254-4.253-4.254s-4.253,1.908-4.253,4.254V133.587z M168.789,87.128h6.055v-6.068
	c0-5.454-4.293-9.924-9.678-10.207c2.265,2.789,3.623,6.343,3.623,10.207V87.128z M154.4,87.128h8.389v-6.068
	c0-3.384-1.653-6.39-4.195-8.251c-2.541,1.861-4.194,4.867-4.194,8.251V87.128z M142.344,87.128h6.056v-6.068
	c0-3.864,1.358-7.418,3.623-10.207c-5.385,0.283-9.679,4.753-9.679,10.207V87.128z M86.607,40.671h5.607V30.509
	c0-7.514-5.145-13.849-12.097-15.667c4.008,4.017,6.49,9.558,6.49,15.667V40.671z M59.833,40.671h20.774V30.509
	c0-6.884-4.318-12.777-10.387-15.116c-6.069,2.339-10.387,8.232-10.387,15.116V40.671z M48.226,40.671h5.607V30.509
	c0-6.109,2.482-11.65,6.49-15.667c-6.952,1.818-12.097,8.153-12.097,15.667V40.671z"
          />
        </svg>
        <span class="text-gray-700">Purchases</span>
      </div>
      <div
        class="w-full flex items-center text-purple-700 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer"
        @click="$router.push('/commands')"
      >
        <svg class="h-6 w-6 fill-current mr-2" viewBox="0 0 20 20">
          <path
            d="M18.303,4.742l-1.454-1.455c-0.171-0.171-0.475-0.171-0.646,0l-3.061,3.064H2.019c-0.251,0-0.457,0.205-0.457,0.456v9.578c0,0.251,0.206,0.456,0.457,0.456h13.683c0.252,0,0.457-0.205,0.457-0.456V7.533l2.144-2.146C18.481,5.208,18.483,4.917,18.303,4.742 M15.258,15.929H2.476V7.263h9.754L9.695,9.792c-0.057,0.057-0.101,0.13-0.119,0.212L9.18,11.36h-3.98c-0.251,0-0.457,0.205-0.457,0.456c0,0.253,0.205,0.456,0.457,0.456h4.336c0.023,0,0.899,0.02,1.498-0.127c0.312-0.077,0.55-0.137,0.55-0.137c0.08-0.018,0.155-0.059,0.212-0.118l3.463-3.443V15.929z M11.241,11.156l-1.078,0.267l0.267-1.076l6.097-6.091l0.808,0.808L11.241,11.156z"
          ></path>
        </svg>
        <span class="text-gray-700">Commands</span>
      </div>
      <div
        @click="$router.push('/tasks')"
        class="w-full flex items-center text-purple-700 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer"
      >
        <svg
          class="h-6 w-6 fill-current mr-2 bi bi-list-task"
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          viewBox="0 0 16 16"
        >
          <path
            fill-rule="evenodd"
            d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"
          />
          <path
            d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"
          />
          <path
            fill-rule="evenodd"
            d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"
          />
        </svg>
        <span class="text-gray-700"> Tasks </span>
      </div>
    </div>

    <div class="mb-4 px-4">
      <p class="pl-4 text-sm font-semibold mb-1">PRODUCTS</p>
      <div
        @click="createProduct"
        class="w-full flex items-center text-purple-700 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer"
      >
        <AddIcon />
        <span class="text-gray-700">Add Product</span>
      </div>
      <div
        @click="$router.push('/products')"
        class="w-full flex items-center text-purple-700 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer"
      >
        <ViewIcon />
        <span class="text-gray-700">View Products</span>
      </div>
    </div>
    <div class="mb-4 px-4">
      <p class="pl-4 text-sm font-semibold mb-1">HALLS</p>
      <div
        @click="createHall"
        class="w-full flex items-center text-purple-700 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer"
      >
        <AddIcon />
        <span class="text-gray-700">Create Hall</span>
      </div>
      <div
        @click="$router.push('/halls')"
        class="w-full flex items-center text-purple-700 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer"
      >
        <ViewIcon />
        <span class="text-gray-700">View Hall</span>
      </div>
    </div>
    <div class="mb-4 px-4">
      <p class="pl-4 text-sm font-semibold mb-1">BLOGS</p>
      <div
        @click="$router.push('/create-blog')"
        class="w-full flex items-center text-purple-700 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer"
      >
        <AddIcon />
        <span class="text-gray-700">Create Blog</span>
      </div>
      <div
        @click="$router.push('/blogs')"
        class="w-full flex items-center text-purple-700 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer"
      >
        <ViewIcon />
        <span class="text-gray-700">View Blogs</span>
      </div>
    </div>

    <div class="mb-4 px-4">
      <p class="pl-4 text-sm font-semibold mb-1">MAIN 2</p>
      <div
        @click="$router.push('/subscribers')"
        class="w-full flex items-center text-purple-700 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6 fill-current mr-2 bi bi-people"
          fill="currentColor"
          viewBox="0 0 16 16"
        >
          <path
            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"
          />
        </svg>
        <span class="text-gray-700"> Subscribers </span>
      </div>
      <div
        @click="$router.push('/contact-messages')"
        class="w-full flex items-center text-purple-700 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-envelope h-6 w-6 fill-current mr-2"
          viewBox="0 0 16 16"
        >
          <path
            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"
          />
        </svg>
        <span class="text-gray-700"> Contact </span>
      </div>
      <div
        class="w-full flex items-center text-purple-700 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer"
      >
        <svg class="h-6 w-6 fill-current mr-2" viewBox="0 0 20 20">
          <path
            d="M17.498,11.697c-0.453-0.453-0.704-1.055-0.704-1.697c0-0.642,0.251-1.244,0.704-1.697c0.069-0.071,0.15-0.141,0.257-0.22c0.127-0.097,0.181-0.262,0.137-0.417c-0.164-0.558-0.388-1.093-0.662-1.597c-0.075-0.141-0.231-0.22-0.391-0.199c-0.13,0.02-0.238,0.027-0.336,0.027c-1.325,0-2.401-1.076-2.401-2.4c0-0.099,0.008-0.207,0.027-0.336c0.021-0.158-0.059-0.316-0.199-0.391c-0.503-0.274-1.039-0.498-1.597-0.662c-0.154-0.044-0.32,0.01-0.416,0.137c-0.079,0.106-0.148,0.188-0.22,0.257C11.244,2.956,10.643,3.207,10,3.207c-0.642,0-1.244-0.25-1.697-0.704c-0.071-0.069-0.141-0.15-0.22-0.257C7.987,2.119,7.821,2.065,7.667,2.109C7.109,2.275,6.571,2.497,6.07,2.771C5.929,2.846,5.85,3.004,5.871,3.162c0.02,0.129,0.027,0.237,0.027,0.336c0,1.325-1.076,2.4-2.401,2.4c-0.098,0-0.206-0.007-0.335-0.027C3.001,5.851,2.845,5.929,2.77,6.07C2.496,6.572,2.274,7.109,2.108,7.667c-0.044,0.154,0.01,0.32,0.137,0.417c0.106,0.079,0.187,0.148,0.256,0.22c0.938,0.936,0.938,2.458,0,3.394c-0.069,0.072-0.15,0.141-0.256,0.221c-0.127,0.096-0.181,0.262-0.137,0.416c0.166,0.557,0.388,1.096,0.662,1.596c0.075,0.143,0.231,0.221,0.392,0.199c0.129-0.02,0.237-0.027,0.335-0.027c1.325,0,2.401,1.076,2.401,2.402c0,0.098-0.007,0.205-0.027,0.334C5.85,16.996,5.929,17.154,6.07,17.23c0.501,0.273,1.04,0.496,1.597,0.66c0.154,0.047,0.32-0.008,0.417-0.137c0.079-0.105,0.148-0.186,0.22-0.256c0.454-0.453,1.055-0.703,1.697-0.703c0.643,0,1.244,0.25,1.697,0.703c0.071,0.07,0.141,0.15,0.22,0.256c0.073,0.098,0.188,0.152,0.307,0.152c0.036,0,0.073-0.004,0.109-0.016c0.558-0.164,1.096-0.387,1.597-0.66c0.141-0.076,0.22-0.234,0.199-0.393c-0.02-0.129-0.027-0.236-0.027-0.334c0-1.326,1.076-2.402,2.401-2.402c0.098,0,0.206,0.008,0.336,0.027c0.159,0.021,0.315-0.057,0.391-0.199c0.274-0.5,0.496-1.039,0.662-1.596c0.044-0.154-0.01-0.32-0.137-0.416C17.648,11.838,17.567,11.77,17.498,11.697 M16.671,13.334c-0.059-0.002-0.114-0.002-0.168-0.002c-1.749,0-3.173,1.422-3.173,3.172c0,0.053,0.002,0.109,0.004,0.166c-0.312,0.158-0.64,0.295-0.976,0.406c-0.039-0.045-0.077-0.086-0.115-0.123c-0.601-0.6-1.396-0.93-2.243-0.93s-1.643,0.33-2.243,0.93c-0.039,0.037-0.077,0.078-0.116,0.123c-0.336-0.111-0.664-0.248-0.976-0.406c0.002-0.057,0.004-0.113,0.004-0.166c0-1.75-1.423-3.172-3.172-3.172c-0.054,0-0.11,0-0.168,0.002c-0.158-0.312-0.293-0.639-0.405-0.975c0.044-0.039,0.085-0.078,0.124-0.115c1.236-1.236,1.236-3.25,0-4.486C3.009,7.719,2.969,7.68,2.924,7.642c0.112-0.336,0.247-0.664,0.405-0.976C3.387,6.668,3.443,6.67,3.497,6.67c1.75,0,3.172-1.423,3.172-3.172c0-0.054-0.002-0.11-0.004-0.168c0.312-0.158,0.64-0.293,0.976-0.405C7.68,2.969,7.719,3.01,7.757,3.048c0.6,0.6,1.396,0.93,2.243,0.93s1.643-0.33,2.243-0.93c0.038-0.039,0.076-0.079,0.115-0.123c0.336,0.112,0.663,0.247,0.976,0.405c-0.002,0.058-0.004,0.114-0.004,0.168c0,1.749,1.424,3.172,3.173,3.172c0.054,0,0.109-0.002,0.168-0.004c0.158,0.312,0.293,0.64,0.405,0.976c-0.045,0.038-0.086,0.077-0.124,0.116c-0.6,0.6-0.93,1.396-0.93,2.242c0,0.847,0.33,1.645,0.93,2.244c0.038,0.037,0.079,0.076,0.124,0.115C16.964,12.695,16.829,13.021,16.671,13.334 M10,5.417c-2.528,0-4.584,2.056-4.584,4.583c0,2.529,2.056,4.584,4.584,4.584s4.584-2.055,4.584-4.584C14.584,7.472,12.528,5.417,10,5.417 M10,13.812c-2.102,0-3.812-1.709-3.812-3.812c0-2.102,1.71-3.812,3.812-3.812c2.102,0,3.812,1.71,3.812,3.812C13.812,12.104,12.102,13.812,10,13.812"
          ></path>
        </svg>
        <span class="text-gray-700">Settings</span>
      </div>
    </div>
  </div>
</template>

<script>
import { mapState } from "vuex";
import AddIcon from "../icons/AddIcon.vue";
import ViewIcon from "../icons/ViewIcon.vue";

export default {
  name: "Sidebar",
  components: {
    AddIcon,
    ViewIcon,
  },
  computed: {
    ...mapState(["sideBarOpen"]),
  },
  methods: {
    createProduct() {
      this.$router.push("/create-product");
    },
    createHall() {
      this.$router.push("/create-hall");
    },
  },
};
</script>
