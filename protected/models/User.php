<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $pwd
 * @property string $wx
 * @property string $price_note
 * @property integer $hits
 * @property string $id_pic_sec
 * @property string $id_pic_main
 * @property double $pf
 * @property string $phone
 * @property string $true_name
 * @property integer $zxs_status
 * @property string $bank_name
 * @property string $bank_no
 * @property string $off_price
 * @property string $name
 * @property integer $parent
 * @property integer $is_jl
 * @property integer $is_manage
 * @property string $id_pic
 * @property integer $qf_uid
 * @property integer $pid
 * @property string $city
 * @property string $pro
 * @property string $openid
 * @property integer $vip_expire
 * @property string $company
 * @property integer $type
 * @property string $price
 * @property integer $ly
 * @property integer $zc
 * @property string $place
 * @property integer $zx_mode
 * @property integer $work_year
 * @property integer $mid
 * @property string $id_card
 * @property string $street_name
 * @property string $area_name
 * @property string $content
 * @property integer $street
 * @property integer $area
 * @property integer $edu
 * @property integer $year
 * @property string $ava
 * @property string $image
 * @property integer $sex
 * @property integer $status
 * @property integer $deleted
 * @property integer $sort
 * @property integer $created
 * @property integer $updated
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, created', 'required'),
			array('hits, zxs_status, parent, is_jl, is_manage, qf_uid, pid, vip_expire, type, ly, zc, zx_mode, work_year, mid, street, area, edu, year, sex, status, deleted, sort, created, updated', 'numerical', 'integerOnly'=>true),
			array('pf', 'numerical'),
			array('pwd, price_note, id_pic_sec, id_pic_main, true_name, id_pic, openid, company, place, ava, image', 'length', 'max'=>255),
			array('wx, bank_name, bank_no, off_price, name, city, pro, id_card, street_name, area_name', 'length', 'max'=>100),
			array('phone', 'length', 'max'=>15),
			array('price', 'length', 'max'=>10),
			array('content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pwd, wx, price_note, hits, id_pic_sec, id_pic_main, pf, phone, true_name, zxs_status, bank_name, bank_no, off_price, name, parent, is_jl, is_manage, id_pic, qf_uid, pid, city, pro, openid, vip_expire, company, type, price, ly, zc, place, zx_mode, work_year, mid, id_card, street_name, area_name, content, street, area, edu, year, ava, image, sex, status, deleted, sort, created, updated', 'safe', 'on'=>'search'),
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
			'pwd' => 'Pwd',
			'wx' => 'Wx',
			'price_note' => 'Price Note',
			'hits' => 'Hits',
			'id_pic_sec' => 'Id Pic Sec',
			'id_pic_main' => 'Id Pic Main',
			'pf' => 'Pf',
			'phone' => 'Phone',
			'true_name' => 'True Name',
			'zxs_status' => 'Zxs Status',
			'bank_name' => 'Bank Name',
			'bank_no' => 'Bank No',
			'off_price' => 'Off Price',
			'name' => 'Name',
			'parent' => 'Parent',
			'is_jl' => 'Is Jl',
			'is_manage' => 'Is Manage',
			'id_pic' => 'Id Pic',
			'qf_uid' => 'Qf Uid',
			'pid' => 'Pid',
			'city' => 'City',
			'pro' => 'Pro',
			'openid' => 'Openid',
			'vip_expire' => 'Vip Expire',
			'company' => 'Company',
			'type' => 'Type',
			'price' => 'Price',
			'ly' => 'Ly',
			'zc' => 'Zc',
			'place' => 'Place',
			'zx_mode' => 'Zx Mode',
			'work_year' => 'Work Year',
			'mid' => 'Mid',
			'id_card' => 'Id Card',
			'street_name' => 'Street Name',
			'area_name' => 'Area Name',
			'content' => 'Content',
			'street' => 'Street',
			'area' => 'Area',
			'edu' => 'Edu',
			'year' => 'Year',
			'ava' => 'Ava',
			'image' => 'Image',
			'sex' => 'Sex',
			'status' => 'Status',
			'deleted' => 'Deleted',
			'sort' => 'Sort',
			'created' => 'Created',
			'updated' => 'Updated',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('pwd',$this->pwd,true);
		$criteria->compare('wx',$this->wx,true);
		$criteria->compare('price_note',$this->price_note,true);
		$criteria->compare('hits',$this->hits);
		$criteria->compare('id_pic_sec',$this->id_pic_sec,true);
		$criteria->compare('id_pic_main',$this->id_pic_main,true);
		$criteria->compare('pf',$this->pf);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('true_name',$this->true_name,true);
		$criteria->compare('zxs_status',$this->zxs_status);
		$criteria->compare('bank_name',$this->bank_name,true);
		$criteria->compare('bank_no',$this->bank_no,true);
		$criteria->compare('off_price',$this->off_price,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('parent',$this->parent);
		$criteria->compare('is_jl',$this->is_jl);
		$criteria->compare('is_manage',$this->is_manage);
		$criteria->compare('id_pic',$this->id_pic,true);
		$criteria->compare('qf_uid',$this->qf_uid);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('pro',$this->pro,true);
		$criteria->compare('openid',$this->openid,true);
		$criteria->compare('vip_expire',$this->vip_expire);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('ly',$this->ly);
		$criteria->compare('zc',$this->zc);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('zx_mode',$this->zx_mode);
		$criteria->compare('work_year',$this->work_year);
		$criteria->compare('mid',$this->mid);
		$criteria->compare('id_card',$this->id_card,true);
		$criteria->compare('street_name',$this->street_name,true);
		$criteria->compare('area_name',$this->area_name,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('street',$this->street);
		$criteria->compare('area',$this->area);
		$criteria->compare('edu',$this->edu);
		$criteria->compare('year',$this->year);
		$criteria->compare('ava',$this->ava,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('status',$this->status);
		$criteria->compare('deleted',$this->deleted);
		$criteria->compare('sort',$this->sort);
		$criteria->compare('created',$this->created);
		$criteria->compare('updated',$this->updated);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
