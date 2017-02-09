## 동영상 강좌 따라하기

위치 : https://www.youtube.com/watch?v=ZqrlNub7_z0&index=2&list=PLZAiN3wmUtzV1eI7mAxERQaE2LkyA5Nh6

## Storage Link 

<b> php artisan storage:link </b>

The [public/storage] directory has been linked.


## elxir 한방 설치

laravel 5.4 - Elxir 설치 한방에 해결하기

[ 한방 설치 ]

> npm install axios bootstrap-sass gulp jquery laravel-elixir laravel-elixir-vue-2 laravel-elixir-webpack-official lodash vue vue-resource --save-dev 

> npm install algoliasearch laravel-echo pusher pusher-js vuex --save

[ gulpfile.js ] 작성

const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir(mix => {
   mix.webpack('app.js');
});


[ 되는지 확인해보자 ]

> gulp

[08:58:38] Using gulpfile D:\~~~\gulpfile.js
[08:58:38] Starting 'all'...
[08:58:38] Starting 'webpack'...
[08:58:39]
[08:58:39] Finished 'webpack' after 1.58 s
[08:58:39] Finished 'all' after 1.6 s
[08:58:39] Starting 'default'...

┌───────────────┬───────────────────────────────┬────────────────────────────┬───────────────
───┐
│ Task │ Summary │ Source Files │ Destination
│
├───────────────┼───────────────────────────────┼────────────────────────────┼───────────────
───┤
│ mix.webpack() │ 1. Transforming ES2015 to ES5 │ resources\assets\js\app.js │ public\js\app.js │
│ │ 2. Writing Source Maps │ │
│
│ │ 3. Saving to Destination │ │
│
└───────────────┴───────────────────────────────┴────────────────────────────┴───────────────
───┘

[08:58:39] Finished 'default' after 10 ms


[ 에러가 나는 경우 ]

/node_modules 디렉토리 삭제 하고 위의 한방에 설치 다시 실행

