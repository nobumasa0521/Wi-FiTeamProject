<template>
  <v-container >
    <!-- <v-sheet rounded="lg" class="spacing-playground pa-6"> -->
    <v-row>
      <v-col cols="auto" xs="12">
      <client-select-component v-on:select-device="onSelectDevice"></client-select-component>
      </v-col>
      <v-col cols="auto">
        <v-sheet rounded="lg" class="spacing-playground pa-6" elevation="0">
          <!-- <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="520" height="520" class="preview-svg" id="noneroom"> -->
            <!-- 
              <rect x="0" y="150" width="200" height="200" stroke="#808080" v-bind:class="stateenv2" id="Env2ndroom"/>
            <rect x="200" y="150" width="300" height="200" stroke="#808080" v-bind:class="statefa" id="Faroom" /> -->
            <!-- 
              <rect :style="{
              transform: `translate(${room_rect_stat.env2ndroom.x}px, ${room_rect_stat.env2ndroom.y}px)`}"  width="200" height="200" stroke="#808080" v-bind:class="stateenv2" id="Env2ndroom"/>
            <rect :style="{
              transform: `translate(${room_rect_stat.faroom.x}px, ${room_rect_stat.faroom.y}px)`}"  width="300" height="200" stroke="#808080" v-bind:class="statefa" id="Faroom" />
            <rect  rx="10" ry="10" :style="{
              transform: `translate(${target_rect_stat.x}px, ${target_rect_stat.y}px)`}" width="50" height="50" stroke="#63fc89" fill="#63fc89" id="target"
              class="target-svg"/>
          </svg> -->
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="664px" height="374px" viewBox="-0.5 -0.5 664 374" id="master">
            <defs/>
            <g>
              <rect x="542.5" y="110.5" width="88" height="90" fill="#e1f5fe" stroke="#36393d" transform="rotate(-90,586.5,155.5)" pointer-events="all"/>
              <rect x="467" y="125" width="89" height="60" fill="#e1f5fe" stroke="#36393d" transform="rotate(-90,511.5,155)" pointer-events="all"/>
              <rect x="485" y="-62" width="113" height="239" fill="#e1f5fe" stroke="#36393d" transform="rotate(-90,541.5,57.5)" pointer-events="all"/>
              <rect x="154" y="-61" width="85" height="210" fill="#e1f5fe" stroke="#36393d" transform="rotate(-90,196.5,44)" pointer-events="all"/>
              <rect x="4" y="-1" width="85" height="90" fill="#e1f5fe" stroke="#36393d" transform="rotate(-90,46.5,44)" pointer-events="all"/>
              <rect x="199" y="97" width="85" height="120" fill="#fff8e1" stroke="#36393d" transform="rotate(-90,241.5,157)" pointer-events="all"/>
              <rect x="79" y="97" width="85" height="120" fill="#fff8e1" stroke="#36393d" transform="rotate(-90,121.5,157)" pointer-events="all"/>
              <rect x="298" y="204" width="128" height="120" fill="#fff8e1" stroke="#36393d" transform="rotate(-90,362,264)" pointer-events="all"/>
              <path d="M 481.5 199.5 L 422 200" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <rect x="-11" y="127" width="85" height="60" fill="#fff8e1" stroke="#36393d" transform="rotate(-90,31.5,157)" pointer-events="all"/>
              <rect x="340.5" y="289" width="43" height="120" fill="#fff8e1" stroke="#36393d" transform="rotate(-90,362,349)" pointer-events="all"/>
              <path d="M 301.5 1.5 L 422 1" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 302.13 55.77 L 421.5 56" fill="none" stroke="#36393d" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 301.5 114.5 L 362 115 L 362 200" fill="none" stroke="#36393d" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 481.02 169.51 L 422 146 L 422 114" fill="none" stroke="#36393d" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 1.5 1.5 L 661 1" fill="none" stroke="#36393d" stroke-width="2" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 1.5 1.5 L 1.5 199.5" fill="none" stroke="#36393d" stroke-width="2" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 1.5 199.5 L 302 200" fill="none" stroke="#36393d" stroke-width="2" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 302 200 L 302 370.5" fill="none" stroke="#36393d" stroke-width="2" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 302 370.5 L 422 370.5" fill="none" stroke="#36393d" stroke-width="2" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 422 370.5 L 422 200" fill="none" stroke="#36393d" stroke-width="2" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 422 200 L 661 200 L 661 1" fill="none" stroke="#36393d" stroke-width="2" stroke-miterlimit="10" pointer-events="stroke"/>
              <ellipse cx="360" cy="29" rx="20" ry="20" fill="#ffffff" stroke="#4d4d4d" pointer-events="all"/>
              <rect x="348.42" y="16.46" width="23.17" height="25.08" fill="none" stroke="none" pointer-events="all"/>
              <path d="M 361.66 16.68 L 361.66 41.03 L 359.71 41.03 L 359.71 16.68 L 361.66 16.68 Z" fill="#4d4d4d" stroke="none" pointer-events="all"/>
              <path d="M 353.53 20.47 C 354.48 20.48 355.25 19.58 355.25 18.47 C 355.25 17.36 354.49 16.47 353.53 16.46 C 352.59 16.47 351.82 17.36 351.82 18.47 C 351.82 19.58 352.59 20.48 353.53 20.47 L 353.53 20.47 Z" fill="#4d4d4d" stroke="none" pointer-events="all"/>
              <path d="M 353.28 33.2 L 353.28 40.21 C 353.28 41.48 351.67 41.48 351.67 40.21 L 351.67 33.2 L 349.52 33.2 L 351.82 23.89 L 351.45 23.89 L 350.1 29.21 C 349.78 30.37 348.42 29.89 348.73 28.66 L 350.23 22.88 C 350.39 22.22 351.11 21.05 352.34 21.05 L 353.47 21.05 L 353.47 21.05 L 354.7 21.05 C 355.92 21.05 356.64 22.23 356.82 22.88 L 358.32 28.64 C 358.62 29.89 357.27 30.4 356.95 29.19 L 355.6 23.89 L 355.21 23.89 L 357.52 33.2 L 355.37 33.2 L 355.37 40.23 C 355.37 41.48 353.76 41.47 353.76 40.23 L 353.76 33.2 L 353.28 33.2 L 353.28 33.2 Z" fill="#4d4d4d" stroke="none" pointer-events="all"/>
              <path d="M 365.78 21.04 C 364.57 21.04 363.6 22.21 363.61 23.67 L 363.61 29.88 C 363.6 31.08 365.09 31.08 365.09 29.88 L 365.09 24.2 L 365.45 24.2 L 365.45 39.93 C 365.45 41.54 367.43 41.49 367.43 39.93 L 367.43 30.72 L 367.78 30.72 L 367.78 39.93 C 367.77 41.49 369.76 41.54 369.77 39.93 L 369.77 24.2 L 370.11 24.2 L 370.11 29.87 C 370.11 31.09 371.59 31.09 371.59 29.87 L 371.59 23.71 C 371.59 22.36 370.71 21.04 369.39 21.05 L 365.78 21.04 L 365.78 21.04 Z" fill="#4d4d4d" stroke="none" pointer-events="all"/>
              <path d="M 367.6 20.47 C 368.54 20.48 369.31 19.58 369.31 18.47 C 369.31 17.36 368.54 16.47 367.6 16.46 C 366.65 16.47 365.88 17.36 365.88 18.47 C 365.87 19.58 366.64 20.48 367.6 20.47 L 367.6 20.47 Z" fill="#4d4d4d" stroke="none" pointer-events="all"/>
              
              <rect  rx="40" ry="40" :style="{
              transform: `translate(${target_rect_stat.x}px, ${target_rect_stat.y}px)`}" width="50" height="50" stroke="#afeeee" fill="#afeeee" fill-opacity="1" id="target"
              class="target-svg">
              <v-icon>
                mdi-access-point
              </v-icon>  
              </rect>

              <ellipse cx="331" cy="178" rx="20" ry="20" fill="#ffffff" stroke="#4d4d4d" pointer-events="all"/>
              <rect x="319.63" y="165.5" width="22.75" height="25" fill="none" stroke="none" pointer-events="all"/>
              <path d="M 319.63 187.67 L 323.78 187.67 L 323.78 182.11 L 327.89 182.11 L 327.89 176.49 L 332.07 176.49 L 332.07 170.99 L 336.22 170.99 L 336.22 165.5 L 342.38 165.5 L 342.38 168.29 L 338.28 168.29 L 338.28 173.79 L 334.13 173.79 L 334.13 179.36 L 329.99 179.36 L 329.99 184.9 L 325.81 184.9 L 325.81 190.5 L 319.63 190.5 L 319.63 187.67 Z" fill="#4d4d4d" stroke="none" pointer-events="all"/>
              <ellipse cx="331" cy="137" rx="20" ry="20" fill="#ffffff" stroke="#4d4d4d" pointer-events="all"/>
              <rect x="321" y="124" width="20" height="25.83" fill="none" stroke="none" pointer-events="all"/>
              <path d="M 336.4 143.17 L 335.24 143.17 L 335.24 146.88 C 335.25 147.53 336.4 147.53 336.4 146.88 L 336.4 143.17 L 336.4 143.17 Z M 335.08 143.17 L 333.92 143.17 L 333.92 146.88 C 333.92 147.53 335.07 147.53 335.08 146.88 L 335.08 143.17 L 335.08 143.17 Z M 332.26 143.17 L 331.09 143.17 L 331.09 146.88 C 331.1 147.53 332.26 147.53 332.26 146.88 L 332.26 143.17 L 332.26 143.17 Z M 330.93 143.17 L 329.77 143.17 L 329.77 146.88 C 329.77 147.53 330.93 147.53 330.93 146.88 L 330.93 143.17 L 330.93 143.17 Z M 328.11 143.17 L 326.95 143.17 L 326.95 146.88 C 326.95 147.53 328.11 147.53 328.11 146.88 L 328.11 143.17 L 328.11 143.17 Z M 326.78 143.17 L 325.62 143.17 L 325.62 146.88 C 325.62 147.53 326.78 147.53 326.78 146.88 L 326.78 143.17 L 326.78 143.17 Z M 337.88 134.31 L 324.16 134.31 C 322.71 134.31 321.66 135.25 321.66 136.38 L 321.66 147.77 C 321.66 148.93 322.79 149.83 324.16 149.82 L 337.9 149.82 C 339.26 149.83 340.38 148.98 340.37 147.77 L 340.37 136.38 C 340.37 135.24 339.28 134.31 337.88 134.31 Z M 337.79 147.67 L 324.23 147.67 L 324.23 136.48 L 337.79 136.48 L 337.79 147.67 Z M 334.4 125.5 C 334.38 124.02 336.98 124 336.99 125.5 L 336.94 130.02 L 338.35 128.61 C 339.31 127.72 341 128.95 339.96 129.93 L 336.58 133.28 C 336.04 133.73 335.35 133.72 334.82 133.28 L 331.46 129.92 C 330.41 128.94 332.11 127.7 333.06 128.6 L 334.44 130.02 L 334.4 125.5 L 334.4 125.5 Z M 324.99 132.5 C 324.98 133.99 327.57 134.01 327.58 132.5 L 327.55 127.98 L 328.94 129.41 C 329.9 130.28 331.59 129.06 330.55 128.07 L 327.17 124.72 C 326.63 124.28 325.94 124.28 325.41 124.72 L 322.05 128.08 C 321 129.07 322.71 130.31 323.65 129.42 L 325.03 127.98 L 324.99 132.5 L 324.99 132.5 Z M 337.14 142.9 C 337.14 143.12 336.92 143.27 336.69 143.27 C 336.69 143.27 333.65 143.27 333.64 143.27 C 333.41 143.27 333.19 143.11 333.19 142.9 L 333.19 140.15 C 333.19 139.84 333.49 139.62 333.82 139.63 C 333.82 139.62 336.51 139.63 336.51 139.63 C 336.87 139.62 337.14 139.86 337.14 140.15 L 337.14 142.9 L 337.14 142.9 Z M 335.18 139.4 C 335.66 139.4 336.04 139.08 336.04 138.69 C 336.04 138.29 335.66 137.96 335.18 137.96 C 334.7 137.96 334.31 138.29 334.31 138.69 C 334.31 139.08 334.7 139.4 335.18 139.4 L 335.18 139.4 Z M 332.99 142.9 C 333 143.12 332.78 143.27 332.54 143.27 C 332.54 143.27 329.51 143.27 329.5 143.27 C 329.27 143.27 329.04 143.11 329.04 142.9 L 329.04 140.15 C 329.04 139.84 329.34 139.62 329.68 139.63 C 329.67 139.62 332.36 139.63 332.36 139.63 C 332.72 139.62 333 139.86 332.99 140.15 L 332.99 142.9 L 332.99 142.9 Z M 331.03 139.4 C 331.51 139.4 331.9 139.08 331.89 138.69 C 331.9 138.29 331.51 137.96 331.03 137.96 C 330.55 137.96 330.16 138.29 330.16 138.69 C 330.17 139.08 330.55 139.4 331.03 139.4 L 331.03 139.4 Z M 328.85 142.9 C 328.85 143.12 328.64 143.27 328.4 143.27 C 328.4 143.27 325.36 143.27 325.35 143.27 C 325.12 143.27 324.9 143.11 324.9 142.9 L 324.9 140.15 C 324.9 139.84 325.2 139.62 325.53 139.63 C 325.53 139.62 328.22 139.63 328.22 139.63 C 328.58 139.62 328.85 139.86 328.85 140.15 L 328.85 142.9 L 328.85 142.9 Z M 326.89 139.4 C 327.36 139.4 327.75 139.08 327.75 138.69 C 327.75 138.29 327.37 137.96 326.89 137.96 C 326.41 137.96 326.02 138.29 326.02 138.69 C 326.02 139.08 326.41 139.4 326.89 139.4 L 326.89 139.4 Z" fill="#4d4d4d" stroke="none" pointer-events="all"/>
              <ellipse cx="541.5" cy="57.5" rx="22.270000000000003" ry="22.270000000000003" fill="#000000" stroke="none" transform="translate(2,3)" opacity="0.25"/>
            <ellipse cx="541.5" cy="57.5" rx="22.270000000000003" ry="22.270000000000003" fill="#81d4fa" stroke="none" pointer-events="all"/>
              <path d="M 539.91 63.86 L 539.91 60.68 C 540.71 59.57 542.46 58.7 544.68 58.3 L 547.86 58.3 C 550.08 58.7 551.83 59.57 552.63 60.68 L 552.63 63.86 Z" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="546.27" cy="54.32" rx="3.1814285714285706" ry="3.181428571428572" fill="#ffffff" stroke="none" pointer-events="all"/>
              <path d="M 533.55 63.86 L 533.55 60.68 C 534.35 59.57 536.1 58.7 538.32 58.3 L 541.5 58.3 C 543.72 58.7 545.47 59.57 546.27 60.68 L 546.27 63.86 Z" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="539.91" cy="54.32" rx="3.1814285714285706" ry="3.181428571428572" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="586.5" cy="157" rx="22.270000000000003" ry="22.270000000000003" fill="#000000" stroke="none" transform="translate(2,3)" opacity="0.25"/>
            <ellipse cx="586.5" cy="157" rx="22.270000000000003" ry="22.270000000000003" fill="#81d4fa" stroke="none" pointer-events="all"/>
              <path d="M 584.91 163.36 L 584.91 160.18 C 585.71 159.07 587.46 158.2 589.68 157.8 L 592.86 157.8 C 595.08 158.2 596.83 159.07 597.63 160.18 L 597.63 163.36 Z" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="591.27" cy="153.82" rx="3.1814285714285706" ry="3.181428571428572" fill="#ffffff" stroke="none" pointer-events="all"/>
              <path d="M 578.55 163.36 L 578.55 160.18 C 579.35 159.07 581.1 158.2 583.32 157.8 L 586.5 157.8 C 588.72 158.2 590.47 159.07 591.27 160.18 L 591.27 163.36 Z" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="584.91" cy="153.82" rx="3.1814285714285706" ry="3.181428571428572" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="358.5" cy="264" rx="22.270000000000003" ry="22.270000000000003" fill="#000000" stroke="none" transform="translate(2,3)" opacity="0.25"/>
            <ellipse cx="358.5" cy="264" rx="22.270000000000003" ry="22.270000000000003" fill="#81d4fa" stroke="none" pointer-events="all"/>
              <path d="M 356.91 270.36 L 356.91 267.18 C 357.71 266.07 359.46 265.2 361.68 264.8 L 364.86 264.8 C 367.08 265.2 368.83 266.07 369.63 267.18 L 369.63 270.36 Z" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="363.27" cy="260.82" rx="3.1814285714285706" ry="3.181428571428572" fill="#ffffff" stroke="none" pointer-events="all"/>
              <path d="M 350.55 270.36 L 350.55 267.18 C 351.35 266.07 353.1 265.2 355.32 264.8 L 358.5 264.8 C 360.72 265.2 362.47 266.07 363.27 267.18 L 363.27 270.36 Z" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="356.91" cy="260.82" rx="3.1814285714285706" ry="3.181428571428572" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="241.5" cy="157" rx="22.270000000000003" ry="22.270000000000003" fill="#000000" stroke="none" transform="translate(2,3)" opacity="0.25"/>
            <ellipse cx="241.5" cy="157" rx="22.270000000000003" ry="22.270000000000003" fill="#81d4fa" stroke="none" pointer-events="all"/>
              <path d="M 239.91 163.36 L 239.91 160.18 C 240.71 159.07 242.46 158.2 244.68 157.8 L 247.86 157.8 C 250.08 158.2 251.83 159.07 252.64 160.18 L 252.64 163.36 Z" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="246.27" cy="153.82" rx="3.1814285714285706" ry="3.181428571428572" fill="#ffffff" stroke="none" pointer-events="all"/>
              <path d="M 233.55 163.36 L 233.55 160.18 C 234.35 159.07 236.1 158.2 238.32 157.8 L 241.5 157.8 C 243.72 158.2 245.47 159.07 246.27 160.18 L 246.27 163.36 Z" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="239.91" cy="153.82" rx="3.1814285714285706" ry="3.181428571428572" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="196.5" cy="44" rx="22.270000000000003" ry="22.270000000000003" fill="#000000" stroke="none" transform="translate(2,3)" opacity="0.25"/>
          <ellipse v-bind:class="statefa" id="Faroom" cx="196.5" cy="44" rx="22.270000000000003" ry="22.270000000000003" fill="#81d4fa" stroke="none" pointer-events="all"/>
              <path d="M 194.91 50.36 L 194.91 47.18 C 195.71 46.07 197.46 45.2 199.68 44.8 L 202.86 44.8 C 205.08 45.2 206.83 46.07 207.64 47.18 L 207.64 50.36 Z" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="201.27" cy="40.82" rx="3.1814285714285706" ry="3.181428571428572" fill="#ffffff" stroke="none" pointer-events="all"/>
              <path d="M 188.55 50.36 L 188.55 47.18 C 189.35 46.07 191.1 45.2 193.32 44.8 L 196.5 44.8 C 198.72 45.2 200.47 46.07 201.27 47.18 L 201.27 50.36 Z" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="194.91" cy="40.82" rx="3.1814285714285706" ry="3.181428571428572" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="46.5" cy="44" rx="22.270000000000003" ry="22.270000000000003" fill="#000000" stroke="none" transform="translate(2,3)" opacity="0.25"/>
          <ellipse v-bind:class="stateenv2" id="Env2ndroom" cx="46.5" cy="44" rx="22.270000000000003" ry="22.270000000000003" fill="#81d4fa" stroke="none" pointer-events="all"/>
              <path d="M 44.91 50.36 L 44.91 47.18 C 45.71 46.07 47.46 45.2 49.68 44.8 L 52.86 44.8 C 55.08 45.2 56.83 46.07 57.64 47.18 L 57.64 50.36 Z" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="51.27" cy="40.82" rx="3.1814285714285706" ry="3.181428571428572" fill="#ffffff" stroke="none" pointer-events="all"/>
              <path d="M 38.55 50.36 L 38.55 47.18 C 39.35 46.07 41.1 45.2 43.32 44.8 L 46.5 44.8 C 48.72 45.2 50.47 46.07 51.27 47.18 L 51.27 50.36 Z" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="44.91" cy="40.82" rx="3.1814285714285706" ry="3.181428571428572" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="121.5" cy="157" rx="22.270000000000003" ry="22.270000000000003" fill="#000000" stroke="none" transform="translate(2,3)" opacity="0.25"/>
            <ellipse cx="121.5" cy="157" rx="22.270000000000003" ry="22.270000000000003" fill="#81d4fa" stroke="none" pointer-events="all"/>
              <path d="M 119.91 163.36 L 119.91 160.18 C 120.71 159.07 122.46 158.2 124.68 157.8 L 127.86 157.8 C 130.08 158.2 131.83 159.07 132.64 160.18 L 132.64 163.36 Z" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="126.27" cy="153.82" rx="3.1814285714285706" ry="3.181428571428572" fill="#ffffff" stroke="none" pointer-events="all"/>
              <path d="M 113.55 163.36 L 113.55 160.18 C 114.35 159.07 116.1 158.2 118.32 157.8 L 121.5 157.8 C 123.72 158.2 125.47 159.07 126.27 160.18 L 126.27 163.36 Z" fill="#ffffff" stroke="none" pointer-events="all"/>
              <ellipse cx="119.91" cy="153.82" rx="3.1814285714285706" ry="3.181428571428572" fill="#ffffff" stroke="none" pointer-events="all"/>
              <rect x="257" y="84" width="37" height="5" fill="#ffffff" stroke="#36393d" pointer-events="all"/>
              <path d="M 263.77 78.96 L 288.77 78.96 L 288.77 87.12 C 288.77 93.13 283.17 98 276.27 98 C 269.37 98 263.77 93.13 263.77 87.12 Z M 268.77 78.96 L 268.77 72.62 C 268.77 69.11 272.13 66.27 276.27 66.27 C 280.41 66.27 283.77 69.11 283.77 72.62 L 283.77 78.96 L 280.44 78.96 L 280.44 72.62 C 280.44 71.11 278.57 69.9 276.27 69.9 C 273.97 69.9 272.1 71.11 272.1 72.62 L 272.1 78.96 Z" fill="#e0e0e0" stroke="#000000" stroke-width="2" stroke-miterlimit="10" pointer-events="all"/>
              <path d="M 274.6 84.4 C 274.6 83.4 275.35 82.59 276.27 82.59 C 277.19 82.59 277.94 83.4 277.94 84.4 L 277.94 90.75 C 277.94 91.75 277.19 92.56 276.27 92.56 C 275.35 92.56 274.6 91.75 274.6 90.75 Z" fill="#000000" stroke="none" pointer-events="all"/>
              <rect x="257.77" y="112" width="37" height="5" fill="#ffffff" stroke="#36393d" pointer-events="all"/>
              <rect x="129" y="84" width="37" height="5" fill="#ffffff" stroke="#36393d" pointer-events="all"/>
              <rect x="129" y="112" width="37" height="5" fill="#ffffff" stroke="#36393d" pointer-events="all"/>
              <rect x="6" y="84" width="37" height="5" fill="#ffffff" stroke="#36393d" pointer-events="all"/>
              <rect x="6" y="112" width="37" height="5" fill="#ffffff" stroke="#36393d" pointer-events="all"/>
              <rect x="373" y="198" width="37" height="5" fill="#ffffff" stroke="#36393d" pointer-events="all"/>
              <rect x="493" y="112" width="37" height="5" fill="#ffffff" stroke="#36393d" pointer-events="all"/>
              <rect x="548" y="112" width="37" height="5" fill="#ffffff" stroke="#36393d" pointer-events="all"/>
              <rect x="404" y="89" width="37" height="5" fill="#ffffff" stroke="#36393d" transform="rotate(90,422.5,91.5)" pointer-events="all"/>
              <rect x="373" y="325" width="37" height="5" fill="#ffffff" stroke="#36393d" pointer-events="all"/></g>
          <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="662px" height="370px" viewBox="-0.5 -0.5 662 370" id="master">
            <g>
              <rect x="541.5" y="109.5" rx="10" ry="10" width="88" height="90" fill="#ffffff" stroke="#000000" transform="rotate(-90,585.5,154.5)" pointer-events="all"/>
              <rect x="466" y="124" rx="10" ry="10" width="89" height="60" fill="#ffffff" stroke="#000000" transform="rotate(-90,510.5,154)" pointer-events="all"/>
              <rect x="484" y="-63" rx="10" ry="10" width="113" height="239" fill="#ffffff" stroke="#000000" transform="rotate(-90,540.5,56.5)" pointer-events="all"/>
              <rect v-bind:class="stateenv2" id="Env2ndroom" x="153" y="-62" rx="10" ry="10" width="85" height="210" fill="#ffffff" stroke="#000000" transform="rotate(-90,195.5,43)" pointer-events="all"/>
              <rect v-bind:class="statefa" id="Faroom" x="3" y="-2" rx="10" ry="10" width="85" height="90" fill="#ffffff" stroke="#000000" transform="rotate(-90,45.5,43)" pointer-events="all"/>
              <rect x="198" y="96" width="85" rx="10" ry="10" height="120" fill="#ffffff" stroke="#000000" transform="rotate(-90,240.5,156)" pointer-events="all"/>
              <rect x="78" y="96" width="85" rx="10" ry="10" height="120" fill="#ffffff" stroke="#000000" transform="rotate(-90,120.5,156)" pointer-events="all"/>
              <rect x="297" y="203" rx="10" ry="10" width="128" height="120" fill="#ffffff" stroke="#000000" transform="rotate(-90,361,263)" pointer-events="all"/>
              <rect x="-12" y="126" rx="10" ry="10" width="85" height="60" fill="#ffffff" stroke="#000000" transform="rotate(-90,30.5,156)" pointer-events="all"/>
              <rect x="339" y="287" rx="10" ry="10" width="43" height="120" fill="#ffffff" stroke="#000000" transform="rotate(-90,360.5,347)" pointer-events="all"/>
              <path d="M 0.5 113.5 L 0.5 85.5" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 480.5 198.5 L 421 199" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 300.5 0.5 L 421 0" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 301.13 54.77 L 420.5 55" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 300.5 113.5 L 347 114 L 347 198" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 480.02 169.86 L 421 145 L 421 113" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 660 113 L 660 198 L 630.5 198.5" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
            </g> -->
            <!-- <g>
              <rect x="541.5" y="109.5" width="88" height="90" fill="#ffffff" stroke="#000000" transform="rotate(-90,585.5,154.5)" pointer-events="all"/>
              <rect x="466" y="124" width="89" height="60" fill="#ffffff" stroke="#000000" transform="rotate(-90,510.5,154)" pointer-events="all"/>
              <rect x="484" y="-63" width="113" height="239" fill="#ffffff" stroke="#000000" transform="rotate(-90,540.5,56.5)" pointer-events="all"/>
              <rect v-bind:class="stateenv2" id="Env2ndroom" x="153" y="-62" width="85" height="210" fill="#ffffff" stroke="#000000" transform="rotate(-90,195.5,43)" pointer-events="all"/>
              <rect v-bind:class="statefa" id="Faroom" x="3" y="-2" width="85" height="90" fill="#ffffff" stroke="#000000" transform="rotate(-90,45.5,43)" pointer-events="all"/>
              <rect x="198" y="96" width="85" height="120" fill="#ffffff" stroke="#000000" transform="rotate(-90,240.5,156)" pointer-events="all"/>
              <rect x="78" y="96" width="85" height="120" fill="#ffffff" stroke="#000000" transform="rotate(-90,120.5,156)" pointer-events="all"/>
              <rect x="297" y="203" width="128" height="120" fill="#ffffff" stroke="#000000" transform="rotate(-90,361,263)" pointer-events="all"/>
              <rect x="-12" y="126" width="85" height="60" fill="#ffffff" stroke="#000000" transform="rotate(-90,30.5,156)" pointer-events="all"/>
              <rect x="339" y="287" width="43" height="120" fill="#ffffff" stroke="#000000" transform="rotate(-90,360.5,347)" pointer-events="all"/>
              <path d="M 0.5 113.5 L 0.5 85.5" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 480.5 198.5 L 421 199" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 300.5 0.5 L 421 0" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 301.13 54.77 L 420.5 55" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 300.5 113.5 L 347 114 L 347 198" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 480.02 169.86 L 421 145 L 421 113" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 660 113 L 660 198 L 630.5 198.5" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
            </g> -->
            
            
          </svg>
          </div>
        </v-sheet>
      </v-col>
    </v-row>
    <!-- </v-sheet> -->
  </v-container>
</template>

<script>
let count = 0;
//部屋情報一覧用変数
let statdata = null;
// 部屋密度情報用変数
let roomstatnow = {"env2ndroom":"empty","faroom":"empty"};
// クライアント位置情報用変数
let clientplace = null;
let XYdata = 0;
let env2ndroom_stat = "empty";
let faroom_stat = "empty";
let tmpjson = null;

let tmpxpt = 0; //ターゲットsvgのアニメーションの開始値
let tmpypt = 0; //ターゲットsvgのアニメーションの開始値
let place_elem = 0; //ターゲットがいる場所のsvgエレメント
let changeColorTimer = null;

export default {
  name: 'TargetComponent',
    data: function () {
    return {

    //特定対象のデバイス一覧
    //後々管理画面で操作できるようにしないといけない。
    DeviceList: [
    "COMPB13",
    "COMPB16",
    "COMPB17",
    "COMPB20"
    ],
    //htmlからv-bind:classで読み込むクラス名
    //changeColorで書き換える
    stateenv2: "empty",
    statefa: "empty",
    //特定対象機器が入るところ
    //htmlのselectタグでいれる
    TargetDevice: "未選択",
    room_rect_stat  : {
        "faroom" : {
          "x" : 172,
          "y" : 20
        },
        "env2ndroom" :{
          "x" : 22,
          "y" : 20
        }
    },
    target_rect_stat : {
        "x" : 0,
        "y" : 500,
      }
    }
  },
  methods:{
    changeColor: function(){
      console.log("changecolor");
      count++;
      
      axios.get('http://localhost/sample/statget')
        .then(function (response) {
          // handle success
          // レスポンスのデータをstatdataに退避
          statdata =  response.data;
          // statdataの中の部屋密度情報roomstatオブジェクトを取得
          roomstatnow = statdata.roomstat;
          // statdataの中のクライアント位置情報を取得
          clientplace = statdata.clientstat;
          console.log(typeof(statdata));
      })
      .catch(function (error) {
          // handle error
        console.log(error);
      })
      .finally(function () {
          // always executed
      });

      //部屋密度情報更新部
      // 部屋密度情報用変数からそれぞれの部屋情報を取得して
      // vueオブジェクトdataに格納
      this.env2ndroom_stat = roomstatnow.env2ndroom;
      this.faroom_stat = roomstatnow.faroom;
      this.stateenv2 = String(this.env2ndroom_stat);
      this.statefa = String(this.faroom_stat);

      //クライアント位置情報更新部
      // クライアント位置情報構造体変数からターゲットに一致する情報を取得して
      // それをキーにroom_rect_statから対応するsvgの座標を取得して
      // target_rect_statに代入
      if(this.TargetDevice === "未選択"){
        console.log(this.TargetDevice);
        this.target_rect_stat.x = 0;
        this.target_rect_stat.y = 500;
      }else{
        for(let key in clientplace){
          if(key === this.TargetDevice){
            console.log(this.TargetDevice);
            this.target_rect_stat.x = this.room_rect_stat[clientplace[key]].x;
            this.target_rect_stat.y = this.room_rect_stat[clientplace[key]].y;
          }
        }
      }
      
      console.log(count);
    },
    onSelectDevice:function(e){
      this.TargetDevice = e;
    }
  },
  mounted: function(){
    console.log("mounted");
    let that = this;
    this.place_elem = document.getElementById("noneroom");
    this.changeColorTimer = setInterval(
      this.changeColor
    , 1000);
  },
  beforeUpdate: function(){
    console.log("change");
    this.changeColor();
  },
  beforeDestroy: function() {
    clearInterval(this.changeColorTimer);
  }
}
</script>

<style scoped>
  #target{
    position: absolute;
    left: 0;
    top: 0;
    margin: 0px auto auto 0px;
    fill:#1CD2FF;
    stroke: #1CD2FF;
  }
  .empty{
    fill: #1CD2FF
  }
  .some{
    fill: rgb(255, 176, 176)
  }
  .many{
    fill: rgb(255, 104, 104)
  }
  .full{
    fill: rgb(255, 50, 50)
  }

  svg{
    margin-left: auto;
    margin-right: auto; 
    text-align:center;
    margin: 30;
    padding: 30;
    vertical-align: top;
    width : 640px;
    height: 480px;
    background-color : var(--color-secondary);
  }
  
  .target-svg {
  transition: transform 1s ease;
  will-change: transform;
  }

  #master{
    width: 100%;
    height: auto;
  }
</style>