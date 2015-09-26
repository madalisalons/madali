<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property integer $gender
 * @property string $email
 * @property string $username
 * @property string $password
 */

 class Users extends CActiveRecord
 {
 	public $password;
 	public $verifyCode;

 	public function tableName()
 	{
 		return 'users';
 	}

 	public function rules()
 	{

 		return array(
 			array('name', 'required'),
 			array('surname, gender', 'required'),
 			array('password', 'required'),
 			array('email', 'email'),
 			array('phone', 'required'),
      array('username', 'required'),
 			// verifyCode needs to be entered correctly
 			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
 			// The following rule is used by search().
 			array('id, name, surname, email, phone, username, gender', 'safe', 'on'=>'search'),
 		);
 	}

 	/**
 	 * @return array relational rules.
 	 */
 	public function relations()
 	{
 		// NOTE: you may need to adjust the relation name and the related
 		// class name for the relations automatically generated below.
 		return array(
 		);
 	}

 	/**
 	 * @return array customized attribute labels (name=>label)
 	 */
 	public function attributeLabels()
 	{
 		return array(
 			'id' => 'ID',
 			'name' => 'Անուն',
 			'password' => 'Գաղտնաբառ',
 			'surname' => 'Ազգանուն',
 			'email' => 'Էլ.հասցե',
 			'phone' => 'Հեռախոսահամար',
      'username' => 'Մուտքանուն',
 			'gender' => 'Սեռ',
 			'verifyCode'=>'Անվտանգության կոդ',
 		);
 	}

 	public function search()
 	{

 		$criteria=new CDbCriteria;

 		$criteria->compare('id',$this->id,true);
 		$criteria->compare('name',$this->name,true);
 		$criteria->compare('password',$this->password,true);
 		$criteria->compare('surname',$this->surname,true);
 		$criteria->compare('email',$this->email,true);
 		$criteria->compare('username',$this->username,true);
 		$criteria->compare('gender',$this->gender,true);

 		return new CActiveDataProvider($this, array(
 			'criteria'=>$criteria,
 		));
 	}

 	public static function model($className=__CLASS__)
 	{
 		return parent::model($className);
 	}

 	//Save encripted password
 	public function hash($value){
 		return crypt($value);
 	}

 	//calling hash to encrypt given password
 	protected function beforeSave(){
 		if(parent::beforeSave()){
 			$this->password = $this->hash($this->password);
 			return true;
 		}
 		return false;
 	}

 	//check if the password is matched with stored encrypted password
 	public function check($value){
 		$new_hash = crypt($value, $this->password);
 		if($new_hash == $this->password){
 			return true;
 		}
 		return false;
 	}
 }
