<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CategoryController extends Controller
{
    public function show()
    {
        return view('admin.post.categories.index');
    }

    private $token;

    public function guzzle()
    {
        $client = new Client();

        // $url = 'https://survey.stb.web.id/api/login';
        $url = 'https://survey.stb.web.id/api/progress/questionnaire';

        $json = [
            'username' => 'relawan',
            'password' => '12345678',
        ];

        $headers = [
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjE5MzEyYTZiMTkxNDZkZWZmNjk1MDhmZDM4NmQwNTU2NmQ2ODZhNjBhNDA0ZThjYjhiNTc5YmUxZDBmY2UwN2ZlMTdmNTkyNDBkM2Y2YjciLCJpYXQiOjE2NjYwNzk5NzYuMDUwMTM0ODk3MjMyMDU1NjY0MDYyNSwibmJmIjoxNjY2MDc5OTc2LjA1MDEzODk1MDM0NzkwMDM5MDYyNSwiZXhwIjoxNjk3NjE1OTc2LjA0MjA0OTg4NDc5NjE0MjU3ODEyNSwic3ViIjoiMiIsInNjb3BlcyI6W119.Yfepr3D8t1AUcHA30roTNTHnIVPGjegIH6cX1O2wwS0whgMqG5j8wGqAIiuNvLV19IrrNeGmyswgP8542dmElO8G-iCNUjZDjm3kKAI0nk66RpNl4FpuZa0xOO7q6hGkwFIxsebueeavaKqTcRRAT5LQzDfeTAaf1UrKhseQQW-kHb5J-J34a8pr_0RXWLSfVVAod9l8ed6ZriH0EO0XmUQtkGm2ZPpt6e6p1XUtwdjGT199fyB9gMFyKhtYwtulmief9PfByOjzzHb-grMKvsde_liPtM38-P6NdtkZ7EZPFi-OdWF5RrAmzNYz2Wm7Ewpcn5OPxn0LNBe3z7jF0EeCdMLJd7mIrKav7Ea81voCfslvFgZPLBhbtUZeavwSF41d-NWrKTzZYC7XKGuEEBPR1TaTeWsjtoqJkGkudAV5Y8rXuv6HuV7VuAonFp7VakkQh7sP-vmzA5zdmJzjz_zyRJkdkQDCWTJJUN63uB0HavdSkNauzIDM_35byLnzecyirHphsnJPDq65QyV0d66OCQ5DP18v0NfkzRG8RHPAzBqcjvoets4ngkWorrtt1AUlnmA19fFxFuHzdB0Y-VtQ3d7lLfNXBGRo08Y7a9sUOIDecDdrMgeNZ8gLCPt2o6tJvHlCDjCgva5qQw2e5-LN1gm_ZCo4o8tm9qP8BEQ'
        ];

        $response = $client->request('GET', $url,[
            'headers'   => $headers,
            'json'      => $json
        ]);

        $data = json_decode($response->getBody(), true);
        dd($data);
    }
}
