<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\AuthorRequest;

class ContactController extends Controller
{
      // 問い合わせ入力フォーム
      public function questionform()
  {
      $categories = Category::all();
        return view('questionform', compact('categories'));
    }

      // 追加機能(問い合わせ入力フォームエラーメッセージ)
      public function create(AuthorRequest $request){
        $form = $request->all();
        return redirect('/');
    }

      //確認画面
    public function confirm(AuthorRequest $request)
{  
    $contact = $request->all();
    // 性別ラベルの定義
    $gender_label = match((int)$contact['gender']) {
        1 => '男性',
        2 => '女性',
        3 => 'その他',
        default => '未選択',
    };

    // 氏名合成表示
    $contact['name'] = $contact['last_name'] . ' ' . $contact['first_name'];

    // 電話番号合成
    $contact['tel'] = $contact['first_tel'] . '-' . $contact['middle_tel'] . '-' . $contact['last_tel'];

    $category_id = $contact['category'];

    // カテゴリ名取得（null安全演算子で未選択にも対応）
    $contact['category_id'] = $contact['category_id'] ?? null;

    $category = Category::find($category_id);

    $category_name = $category-> content ;

    // Bladeに渡す
    return view('confirm', compact('contact', 'gender_label', 'category_name'));
}

      //登録ボタン完了後データ登録とthanks画面に遷移
        public function store(Request $request)
        {
          $validated = $request->validate([

            'category_id' =>'required',
            'last_name' => 'nullable|string|max:255',
            'first_name' => 'nullable|string',
            'gender' => 'required|in:1,2,3',
            'email' => 'required|string|max:255',
            'tel' => 'string|max:255',
            'address' =>'string|max:255',
            'building' =>'string|max:255',
            'detail' =>'required|string',
        ]);

          Contact::create($validated);
          return redirect()->route('thanks');
    
      }

        //管理画面
          public function register()
      {
          return view('register');
      } 


  
      //ログイン画面
     public function login()
  {
    return view('login');
    }  

    public function showRegisterForm()
{
    return view('register');
}


      //登録完了画面
     public function thanks()
  {
    return view('thanks');
    } 


}