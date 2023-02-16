<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          その他
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="md:p-6 text-gray-900 dark:text-gray-100">
                
                  <section class="text-gray-600 body-font">
                      <div class="container md:px-5 mx-auto">
                          <div class="mt-10 md:mt-5 flex flex-col text-center w-full mb-5 md:mb-12">
                              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-1 text-gray-900">オーナーデータを完全に削除・復元する</h1>
                              <p class="text-gray-500">※完全に削除するとデータは復元できません</p>
                          </div>
                      </div>
                    </section>
              </div>
          </div>
      </div>
  </div>

<script>
  function deletePost(e) {
    'use strict';
    if (confirm('完全に削除してもいいですか？ ※データは復元できなくなります。')) {
      document.getElementById('delete_' + e.dataset.id).submit();
    }
  }
</script>
</x-app-layout>
