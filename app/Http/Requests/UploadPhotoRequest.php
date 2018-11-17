public function rules()
{
	return [
		'photo' => 'required|max:1024|mimes:jpeg,png'
		];
}