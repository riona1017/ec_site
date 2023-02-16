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
                          <x-flash-message />
                          <div class="lg:w-3/4 w-full mx-auto overflow-auto">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                              <thead>
                                <tr>
                                  <th class="md:px-4 pl-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">名前</th>
                                  <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                                  <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                  <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($expiredOwners as $owner)
                                <tr>
                                  <td class="md:px-4 pl-2 py-3">{{ $owner->name }}</td>
                                  <td class="md:px-4 py-3">{{ $owner->email }}</td>
                                  <form id="restore_{{ $owner->id }}" method="post" action="{{ route('admin.expired-owners.restore', ['owner' => $owner->id]) }}">
                                    @csrf
                                    <td class="md:px-4 py-4 text-center">
                                      <button onclick="location.href='{{ route('admin.expired-owners.restore', ['owner' => $owner->id])}}'" class="text-white bg-yellow-500 border-0 py-2 md:px-6 px-4 focus:outline-none hover:bg-yellow-600 rounded">復元</button>
                                    </td>
                                  </form>
                                  <form id="delete_{{ $owner->id }}" method="post" action="{{ route('admin.expired-owners.destroy', ['owner' => $owner->id]) }}">
                                    @csrf
                                    <td class="md:px-4 py-4 text-center">
                                      <a href="#" data-id="{{ $owner->id }}" onclick="deletePost(this)" class="text-white bg-red-500 border-0 py-2 md:px-6 px-4 focus:outline-none hover:bg-red-600 rounded">削除</a>
                                    </td>
                                  </form>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
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
