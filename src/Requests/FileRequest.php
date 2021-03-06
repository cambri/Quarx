<?php

namespace Yab\Quarx\Requests;

use Gate;
use Auth;
use Yab\Quarx\Models\File;
use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (env('APP_ENV') !== 'testing') {
            return Gate::allows('quarx', Auth::user());
        }

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }

}
