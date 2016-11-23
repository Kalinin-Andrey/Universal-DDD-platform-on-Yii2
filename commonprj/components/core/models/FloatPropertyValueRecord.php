<?php

namespace commonprj\components\core\models;

/**
 * This is the model class for table "float_property_value".
 *
 * @property integer $id
 * @property integer $property_id
 * @property double $value
 *
 * @property PropertyRecord $property
 */
class FloatPropertyValueRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'float_property_value';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['property_id', 'value'], 'required'],
            [['property_id'], 'integer'],
            [['value'], 'number'],
            [['property_id', 'value'], 'unique', 'targetAttribute' => ['property_id', 'value'], 'message' => 'The combination of Property ID and Value has already been taken.'],
            [['property_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyRecord::className(), 'targetAttribute' => ['property_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'          => 'ID',
            'property_id' => 'Property ID',
            'value'       => 'Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProperty()
    {
        return $this->hasOne(PropertyRecord::className(), ['id' => 'property_id']);
    }
}
