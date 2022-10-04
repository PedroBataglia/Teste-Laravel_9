@if ($errors->any())
    <tr class="text-decoration-color: #fca5a5;"
        class="errors">
        @foreach($errors->all() as $error)
            <td class="error">
                <p class="text-decoration-color: #fca5a5;">
                {{ $error }}
            </td>
        @endforeach
    </tr>
@endif
