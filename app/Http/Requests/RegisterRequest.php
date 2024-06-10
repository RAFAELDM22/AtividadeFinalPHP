namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Altere isso conforme necessário para controlar quem pode acessar essa rota
    }

    public function rules()
    {
        return [
            'nome' => 'required|between:10,15',
            'email' => 'required|email|unique:users',
            'celular' => 'required|numeric|digits_between:9,15',
            'senha' => 'required|string|min:6',
            'confirmacao_senha' => 'required|same:senha'
        ];
    }
}