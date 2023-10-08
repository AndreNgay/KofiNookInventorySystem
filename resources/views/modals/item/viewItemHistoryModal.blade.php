@foreach($items as $item)
<div class="modal fade" id="viewItemHistoryModal{{ $item->id }}" tabindex="-1"
    aria-labelledby="viewItemHistoryModal{{ $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="viewItemHistoryModal{{ $item->id }}Label">View History</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Item</th>
                                <th scope="col">Updated On</th>
                                <th scope="col">Updated By</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($item_histories as $item_history)
                            @if($item_history->item == $item->id)
                            <tr>
                                <th scope="row">{{ $item_history->id }}</th>
                                <td>{{ $item->item_name }}</td>
                                <td>{{ $item_history->updated_on }}</td>
                                <td>
                                    @foreach($users as $user)
                                    @if($user->id == $item_history->updated_by)
                                    {{ $user->first_name . ' ' . $user->last_name }}
                                    @endif
                                    @endforeach
                                </td>


                            <tr>
                                @endif
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach