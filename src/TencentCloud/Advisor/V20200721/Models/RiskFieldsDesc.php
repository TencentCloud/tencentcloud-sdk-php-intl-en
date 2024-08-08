<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Advisor\V20200721\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Risky instance field description
 *
 * @method string getField() Obtain Field ID
 * @method void setField(string $Field) Set Field ID
 * @method string getFieldName() Obtain Field name
 * @method void setFieldName(string $FieldName) Set Field name
 * @method string getFieldType() Obtain Field type, 
string: String type, such as "aa"
int: Integer, for example, 111
stringSlice : String array type, such as ["a", "b"]
tags: Tag type, for example: [{"Key":"kkk","Value":"vvv"},{"Key":"kkk2","Value":"vvv2"}]
 * @method void setFieldType(string $FieldType) Set Field type, 
string: String type, such as "aa"
int: Integer, for example, 111
stringSlice : String array type, such as ["a", "b"]
tags: Tag type, for example: [{"Key":"kkk","Value":"vvv"},{"Key":"kkk2","Value":"vvv2"}]
 * @method array getFieldDict() Obtain Dictionary corresponding to the field value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFieldDict(array $FieldDict) Set Dictionary corresponding to the field value
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RiskFieldsDesc extends AbstractModel
{
    /**
     * @var string Field ID
     */
    public $Field;

    /**
     * @var string Field name
     */
    public $FieldName;

    /**
     * @var string Field type, 
string: String type, such as "aa"
int: Integer, for example, 111
stringSlice : String array type, such as ["a", "b"]
tags: Tag type, for example: [{"Key":"kkk","Value":"vvv"},{"Key":"kkk2","Value":"vvv2"}]
     */
    public $FieldType;

    /**
     * @var array Dictionary corresponding to the field value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FieldDict;

    /**
     * @param string $Field Field ID
     * @param string $FieldName Field name
     * @param string $FieldType Field type, 
string: String type, such as "aa"
int: Integer, for example, 111
stringSlice : String array type, such as ["a", "b"]
tags: Tag type, for example: [{"Key":"kkk","Value":"vvv"},{"Key":"kkk2","Value":"vvv2"}]
     * @param array $FieldDict Dictionary corresponding to the field value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("FieldType",$param) and $param["FieldType"] !== null) {
            $this->FieldType = $param["FieldType"];
        }

        if (array_key_exists("FieldDict",$param) and $param["FieldDict"] !== null) {
            $this->FieldDict = [];
            foreach ($param["FieldDict"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->FieldDict, $obj);
            }
        }
    }
}
