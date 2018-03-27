<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
          [
            'name'=>'Flavio Santos',
            'phone' => '11965459012',
            'email'=>'flavio@gmail.com',
            'imagem'=> 'img/usuarios/imagem_3739.jpeg',
            'user'=>'Santos',
            'password'=>bcrypt("123456"),
            'status'=>'sim'
          ],

          [
            'name'=>'Thiago Valillo',
            'phone' => '11999999999',
            'email'=>'thiago@groupdigital.com.br',
            'imagem'=> 'img/usuarios/imagem_3533.jpeg',
            'user'=>'Valillo',
            'password'=>bcrypt("123456789"),
            'status'=>'sim'
          ]
          
        ];


        if (User::where('user','=',$dados['user'])->count()) {
            $usuarios = User::where('user','=',$dados['user'])->first();
            $usuarios->update($dados);
            echo "Usuario alterado!";
        }else {
          User::create($dados);
          echo "Usuario criado";
        }
    }
}
