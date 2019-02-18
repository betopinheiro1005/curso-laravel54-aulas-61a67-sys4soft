<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\usuarios;

class usuariosController extends Controller
{
    
	// Apresentar o formulário de Login
    public function ApresentarFormularioLogin(){
    	return view('usuarios_login');
    }

    public function FazerLogin(Request $request){

    	// // Verificação dos inputs

    	// $this->validate($request,[
    	// 	'text_usuario' => 'alpha|required|min:5',
    	// 	'text_senha' => 'required|min:3'

    	// ]);

    	// // Só depois da verificação, consultar a BD

    	// return 'Validado';

    	/*------------------------------------------------------*/

    	// $senha = $request->text_senha;

    	// $senha_encriptada = Hash::make($senha);

    	// return "Senha: " . $senha . "<br>Senha encriptada: " . $senha_encriptada;

    	/*------------------------------------------------------*/

    	// Verifica se os dados de login estão corretos

    	// Primeiro vai buscar a conta do usuário

        $dados = usuarios::where('usuario', $request->text_usuario)->first();

        if($dados == null){
            $num_ocorrencias = 0;    
        } else {
            $num_ocorrencias = $dados->count();    
        }

        $resultado = "";
		
		if ($num_ocorrencias == 0) {
			$resultado = "Não existe essa conta de usuário";
         } else {
		
		 	// foi encontrado o usuário
		 	if (Hash::check($request->text_senha, $dados->senha)) {
		 		$resultado = "Login com sucesso";
		 	} else {
		 		$resultado = "Login não realizado. A senha está errada";
		 	}
		
		 }

		return $resultado;

    }

    public function InserirUsuario(){

    	// Inserir um usuário na base de dados

    	// $novo = new usuarios;
    	// $novo->usuario = 'João';
    	// $novo->senha = Hash::make('abc123');
    	// $novo->email = 'teste@teste.com';
    	// $novo->save();

    	// $novo = new usuarios;
    	// $novo->usuario = 'Carlos';
    	// $novo->senha = Hash::make('minhapass');
    	// $novo->email = 'carlos@teste.com';
    	// $novo->save();

    	$novo = new usuarios;
    	$novo->usuario = 'Ana';
    	$novo->senha = Hash::make('adivinhaesta');
    	$novo->email = 'ana@teste.com';
    	$novo->save();


    	return 'Usuário inserido com sucesso!';

    }


}
