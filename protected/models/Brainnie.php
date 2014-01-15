<?php

/**
 * This is the model class for table "tbl_brainnie".
 *
 * The followings are the available columns in table 'tbl_brainnie':
 * @property integer $brainnie_id
 * @property string $email
 * @property string $name_first
 * @property string $name_last
 * @property string $salt
 * @property string $password
 * @property string $time_create
 * @property string $time_last_login
 * @property integer $brainnie_group_id
 *
 * The followings are the available model relations:
 * @property BrainnieGroup $brainnieGroup
 */
class Brainnie extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_brainnie';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, name_first, name_last, salt, password', 'required'),
			array('brainnie_group_id', 'numerical', 'integerOnly'=>true),
			array('email, name_first, name_last, salt, password', 'length', 'max'=>255),
			array('time_create, time_last_login', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('brainnie_id, email, name_first, name_last, salt, password, time_create, time_last_login, brainnie_group_id', 'safe', 'on'=>'search'),
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
			'brainnieGroup' => array(self::BELONGS_TO, 'BrainnieGroup', 'brainnie_group_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'brainnie_id' => 'Brainnie',
			'email' => 'E-mail',
			'name_first' => 'First Name',
			'name_last' => 'Last Name',
			'salt' => 'Salt',
			'password' => 'Password',
			'time_create' => 'Time Create',
			'time_last_login' => 'Time Last Login',
			'brainnie_group_id' => 'Brainnie Group',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

//		$criteria->compare('brainnie_id',$this->brainnie_id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('name_first',$this->name_first,true);
		$criteria->compare('name_last',$this->name_last,true);
//		$criteria->compare('salt',$this->salt,true);
//		$criteria->compare('password',$this->password,true);
		$criteria->compare('time_create',$this->time_create,true);
		$criteria->compare('time_last_login',$this->time_last_login,true);
//		$criteria->compare('brainnie_group_id',$this->brainnie_group_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Brainnie the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function behaviors()
    {
        return array(
            'CTimestampBehavior' => array(
                'class'             => 'zii.behaviors.CTimestampBehavior',
                'createAttribute'   => 'time_create',
                'updateAttribute'   => 'time_last_login',
                'setUpdateOnCreate' => true,
            ),
        );
    }
}
