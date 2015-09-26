<?php

/**
 * This is the model class for table "specialists".
 *
 * The followings are the available columns in table 'specialists':
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $city
 * @property string $address
 * @property integer $gender
 * @property integer $age
 * @property string $phone
 * @property string $email
 * @property string $services
 * @property string $available_days
 * @property string $available_hours
 * @property string $password
 * @property integer $rating
 */
class Specialists extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Specialists the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'specialists';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, surname, city, address, gender, age, phone, email, services, available_days, available_hours, password, rating', 'required'),
			array('gender, age, rating', 'numerical', 'integerOnly'=>true),
			array('name, surname, city, address, phone, email, services, available_days, available_hours, password', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, surname, city, address, gender, age, phone, email, services, available_days, available_hours, password, rating', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'surname' => 'Surname',
			'city' => 'City',
			'address' => 'Address',
			'gender' => 'Gender',
			'age' => 'Age',
			'phone' => 'Phone',
			'email' => 'Email',
			'services' => 'Services',
			'available_days' => 'Available Days',
			'available_hours' => 'Available Hours',
			'password' => 'Password',
			'rating' => 'Rating',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('age',$this->age);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('services',$this->services,true);
		$criteria->compare('available_days',$this->available_days,true);
		$criteria->compare('available_hours',$this->available_hours,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('rating',$this->rating);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}