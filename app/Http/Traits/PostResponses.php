<?php
namespace App\Http\Traits;

    trait PostResponses
    {

      public function indexResponse($posts =null)
        {
            return response()->json([
                'Postss'           =>$posts,
                'message'         => "All Posts  successfully sent",
                'status'=> 200,
            ],200);
        } 
        public function storeResponse($post )
        {
            return response()->json([
                'Post'           =>$post,
                'message'         => "Post successfully save",
                'status'=> 200,
            ],200);
        }  
        public function showResponse($post )
        {
            return response()->json([
                'Post'           =>$post,
                'message'         => "Post Infoormation",
                'status'=> 200,
            ],200);
        } 
        
        public function updateResponse($post )
        {
            return response()->json([
                'Post'           =>$post,
                'message'         => "Post successfully Updated",
                'status'=> 200,
            ],200);
        }  
    
        public function deleteResponse($post)
        {
            return response()->json([
                'Post'            =>$post,
                'message'         => "Post  Deleted  Successfully",
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