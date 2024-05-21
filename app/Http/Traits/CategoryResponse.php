<?php
namespace App\Http\Traits;

    trait CategoryResponse
    {

      public function indexResponse($categoris =null)
        {
            return response()->json([
                'categories'           =>$categoris,
                'message'         => "All Categories  successfully sent",
                'status'=> 200,
            ],200);
        } 
        public function storeResponse($categorie )
        {
            return response()->json([
                'categorie'           =>$categorie,
                'message'         => "categorie successfully save",
                'status'=> 200,
            ],200);
        }  
        public function showResponse($categorie )
        {
            return response()->json([
                'categorie'           =>$categorie,
                'message'         => "categorie Infoormation",
                'status'=> 200,
            ],200);
        } 
        
        public function updateResponse($categorie )
        {
            return response()->json([
                'categorie'           =>$categorie,
                'message'         => "categorie successfully Updated",
                'status'=> 200,
            ],200);
        }  
    
        public function deleteResponse($categorie)
        {
            return response()->json([
                'categorie'            =>$categorie,
                'message'         => " Category  Deleted Successfully",
                'status'=> 200,
            ],200); 
        }
    //     }
        
    //    public function faildLoginResponse()
    //     {
    //         return response()->json([
    //             'message' => 'Invalid login details',
    //             'status'  => 'false',
    //             'code'    => 401
    //         ], 401);
    //     }

    //     public function loginResponse($data,$token)
    //     {
    //         return response()->json([
    //             'user'         =>$data,
    //             'message'      =>"Login Success",
    //             'access_token' => $token,
    //             'token_type'   => 'Bearer',
    //             'code'         => 202,
    //         ]);
    //     }

    //     public function regesterResponse($data)
    //     {
    //         return response()->json([
    //             'user'         =>$data,
    //             'message'      =>"Regester and Give Token Successfully",
    //             'access_token' => 'Login To get Token!',
    //             'token_type' => 'Bearer',
    //             'code'         => 202,
    //         ]);
    //     }
    
    //     public function logoutResponse($data)
    //     {
    //         return response()->json([
    //             'user'      =>$data,
    //             'status'    =>'true',
    //             'Message'   =>'Current Uesr Logout',
    //         ]);
    //     }


       
      }





?>