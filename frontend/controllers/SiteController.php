<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\helpers\VarDumper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

use common\models\Feedback;


/**
 * Site controller
 */
class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

//        $hash = Yii::$app->getSecurity()->generatePasswordHash('admin1234');

//         $ip = Yii::$app->geoip->ip();
//         $ip = Yii::$app->geoip->ip("46.71.41.167");
//         $ip->city; // "San Francisco"
//         $ip->country; // "United States"
//         $ip->location->lng; // 37.7898
//         $ip->location->lat; // -122.3942
//         $ip->isoCode; // "US"

        $feedback = new Feedback();
        
        $user_language = 'ru';
       

        if(Yii::$app->request->get('lng') == 'ru'){
            $user_language = 'ru';
        }
        else if(Yii::$app->request->get('lng') == 'en'){
            $user_language = 'en';
        }
        else {
            $sng_countries_codes = [
                'AM', // 'Armenia'
                'AZ', //'Azerbaijan'
                'BY', // 'Belarus'
                'KZ', // 'Kazakhstan'
                'KG', // 'Kyrgyz Republic'
                'MD', // 'Moldova'
                'RU', // 'Russian Federation'
                'TJ', //  'Tajikistan';
                'TM', // 'Turkmenistan'
                'UZ', // 'Uzbekistan'
                'UA', // 'Ukraine';
                'GE', // 'Georgia'
            ];

            $url = 'https://freegeoip.net/json/';
            $ch = curl_init();
            // Disable SSL verification
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // Will return the response, if false it print the response
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // Set the url
            curl_setopt($ch, CURLOPT_URL,$url);
            // Execute
            $result=curl_exec($ch);
            // Closing
            curl_close($ch);

            $json = $result;

            if ($json) {
                $info = json_decode($json);

                if (in_array($info->country_code, $sng_countries_codes)) {
                    $user_language = 'ru';
                } else {
                    $user_language = 'en';
                }
            } else {
                $user_language = 'en';
            }

        }

        
        $this->layout = 'main_' . $user_language;
        return $this->render('index_new_' . $user_language ,[
            'feedback' => $feedback,
            'user_language' => $user_language
        ]);
        return $this->render('index_' . $user_language ,[
            'feedback' => $feedback,
            'user_language' => $user_language
        ]);

    }
    public function actionCookie()
    {
        $feedback = new Feedback();
        $this->layout = 'cookie';
        return $this->render('cookie' ,[
            'feedback' => $feedback,
        ]);

    }

    public function actionFeedback(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $model = new Feedback();

        $model->setAttribute('name',strip_tags(Yii::$app->request->get('name')));
        $model->setAttribute('contacts',strip_tags(Yii::$app->request->get('contacts')));
        $model->setAttribute('theme',strip_tags(Yii::$app->request->get('theme')));
        $model->setAttribute('text',strip_tags(Yii::$app->request->get('text')));

        $model->reCaptcha = Yii::$app->request->get('reCaptcha');

        if($model->validate() && $model->save()){
            $model->refresh();
            return true;
        } else {
            return false;
        }
    }
//
////    public function actionLogin()
////    {
////        if (!Yii::$app->user->isGuest) {
////            return $this->goHome();
////        }
////
////        $model = new LoginForm();
////        if ($model->load(Yii::$app->request->post()) && $model->login()) {
////            return $this->goBack();
////        } else {
////            return $this->render('login', [
////                'model' => $model,
////            ]);
////        }
////    }
//
//    /**
//     * Logs out the current user.
//     *
//     * @return mixed
//     */
//    public function actionLogout()
//    {
//        Yii::$app->user->logout();
//
//        return $this->goHome();
//    }
//
////
////    public function actionContact()
////    {
////        $model = new ContactForm();
////        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
////            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
////                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
////            } else {
////                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
////            }
////
////            return $this->refresh();
////        } else {
////            return $this->render('contact', [
////                'model' => $model,
////            ]);
////        }
////    }
////
////
////    public function actionAbout()
////    {
////        return $this->render('about');
////    }
////
////    public function actionSignup()
////    {
////        $model = new SignupForm();
////        if ($model->load(Yii::$app->request->post())) {
////            if ($user = $model->signup()) {
////                if (Yii::$app->getUser()->login($user)) {
////                    return $this->goHome();
////                }
////            }
////        }
////
////        return $this->render('signup', [
////            'model' => $model,
////        ]);
////    }
//
//    /**
//     * Requests password reset.
//     *
//     * @return mixed
//     */
//    public function actionRequestPasswordReset()
//    {
//        $model = new PasswordResetRequestForm();
//        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
//            if ($model->sendEmail()) {
//                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
//
//                return $this->goHome();
//            } else {
//                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
//            }
//        }
//
//        return $this->render('requestPasswordResetToken', [
//            'model' => $model,
//        ]);
//    }
//
//    /**
//     * Resets password.
//     *
//     * @param string $token
//     * @return mixed
//     * @throws BadRequestHttpException
//     */
//    public function actionResetPassword($token)
//    {
//        try {
//            $model = new ResetPasswordForm($token);
//        } catch (InvalidParamException $e) {
//            throw new BadRequestHttpException($e->getMessage());
//        }
//
//        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
//            Yii::$app->session->setFlash('success', 'New password saved.');
//
//            return $this->goHome();
//        }
//
//        return $this->render('resetPassword', [
//            'model' => $model,
//        ]);
//    }
}
