@if ($thread->has_attachments)
    <div class="thread-attachments">
        <i class="glyphicon glyphicon-paperclip"></i>
        <ul>
            @foreach ($thread->attachments as $attachment)
                <li>
                    <a href="{{ $attachment->url() }}" class="break-words" target="_blank">{{ $attachment->file_name }}</a>
                    <span class="text-help">({{ $attachment->getSizeName() }})</span>
                </li>
            @endforeach
        </ul>
    </div>
@endif