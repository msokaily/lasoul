<div class="input-group input-group-solid">
    <div class="col-md-12" ondragover="dragOverHandler(event)" ondragend="dropHandler(event)"
        ondragleave="leaveHandler(event)">
        <input @if (!$result_to_event) name="{{ $input ?? 'image' }}" @endif
            value="{{ is_array($fileId) ? '[' . implode(',', $fileId) . ']' : $fileId }}" type="hidden">
        <input wire:model='fileId' value="{{ is_array($fileId) ? '[' . implode(',', $fileId) . ']' : $fileId }}"
            type="hidden">
        <input wire:model='fileSize' value="{{ $fileSize }}" type="hidden">
        <input wire:model='multiple' value="{{ isset($multiple) && $multiple ? 1 : 0 }}" type="hidden">
        <input wire:model='type' value="{{ $type == 'video' ? 'video' : 'image' }}" type="hidden">
        <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
            x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">
            <input wire:model='file' id="file" type="file" {{ isset($multiple) && $multiple ? 'multiple' : '' }}
                class="form-control dragging-div" placeholder="{{ $placeholder ?? __('common.image') }}"
                accept="{{ $type == 'video' ? 'video/*' : ($type == 'media' ? 'image/*,video/*' : 'image/*') }}">
            <div x-show="isUploading">
                <progress max="100" x-bind:value="progress" style="width: 100%;"></progress>
            </div>
        </div>
        @error('file')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('file.*')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @if ($preview)
            @if (isset($preview[0]) && count($preview) > 0)
                <div class="mt-3 imgs-container sortable">
                    @foreach ($preview as $key => $f)
                        @if ($f->type == 'video')
                            <div class="image-item video-item" style="{{$thumbnailWidth ? "width: $thumbnailWidth;" : ''}} {{$thumbnailHeight ? "height: $thumbnailHeight;" : ''}}" data-id="{{ $f->id }}">
                                <i class="rm-btn" wire:click='removeFile({{ $f->id }})'>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z"/></svg>
                                </i>
                                <div class="img-number">{{ $key + 1 }}</div>
                                <video controls preload="none">
                                    <source src="{{ $f->url }}"
                                        type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @else
                            <div class="image-item" style="{{$thumbnailWidth ? "width: $thumbnailWidth;" : ''}} {{$thumbnailHeight ? "height: $thumbnailHeight;" : ''}}" data-id="{{ $f->id }}">
                                <i class="rm-btn" wire:click='removeFile({{ $f->id }})'>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z"/></svg>
                                </i>
                                <div class="img-number">{{ $key + 1 }}</div>
                                <img src="{{ $f->url }}">
                            </div>
                        @endif
                    @endforeach
                </div>
            @else
                <div class="mt-3">
                    @if ($preview->type == 'video')
                        <div class="image-item video-item" style="{{$thumbnailWidth ? "width: $thumbnailWidth;" : ''}} {{$thumbnailHeight ? "height: $thumbnailHeight;" : ''}}" data-id="{{ $preview->id }}">
                            <i class="rm-btn" wire:click='removeFile({{ $preview->id }})'>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z"/></svg>
                            </i>
                            <video controls preload="none">
                                <source src="{{ $preview->url }}"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @else
                        <div class="image-item" style="{{$thumbnailWidth ? "width: $thumbnailWidth;" : ''}} {{$thumbnailHeight ? "height: $thumbnailHeight;" : ''}}" data-id="{{ $preview->id }}">
                            <i class="rm-btn" wire:click='removeFile({{ $preview->id }})'>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z"/></svg>
                            </i>
                            <img src="{{ $preview->url }}">
                        </div>
                    @endif
                </div>
            @endif
        @endif
    </div>
</div>

@push('js')
    <script>
        var original_sort = [];
        var stopMoving = false;

        function get_sort() {
            const elems = $('.imgs-container.sortable .image-item:not(.ui-sortable-helper)');
            let tempIds = [];
            for (let i = 0; i < elems.length; i++) {
                const element = $(elems[i]);
                tempIds.push(element.data('id'));
            }
            return tempIds;
        }

        function dropHandler(ev) {
            // ev.preventDefault();
            // console.log('dropped: ', ev.dataTransfer.files);
            $('.dragging-div').removeClass('draggedover-file');
        }

        function dragOverHandler(ev) {
            // console.log('dragged over: ', ev);
            $('.dragging-div').addClass('draggedover-file');
        }

        function leaveHandler(ev) {
            // console.log('dragged over: ', ev);
            $('.dragging-div').removeClass('draggedover-file');
        }
    </script>
    @if ($multiple)
        <script>
            $(function() {
                // $('body').on('mouseup', '.imgs-container.sortable .image-item', function() {
                //     const tempIds = get_sort();
                //     if (original_sort !== tempIds && !stopMoving) {
                //         original_sort = tempIds;
                //         setTimeout(() => {
                //             @this.resort(tempIds);
                //         }, 200);
                //     }
                // });
            });
        </script>
    @endif
@endpush
