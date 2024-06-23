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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Field Variable
 *
 * @method string getFieldKey() Obtain Field key
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFieldKey(string $FieldKey) Set Field key
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFieldValue() Obtain Field valueNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setFieldValue(string $FieldValue) Set Field valueNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getFieldDataType() Obtain Field Value Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFieldDataType(string $FieldDataType) Set Field Value Type
Note: This field may return null, indicating that no valid value can be obtained.
 */
class FieldConfig extends AbstractModel
{
    /**
     * @var string Field key
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FieldKey;

    /**
     * @var string Field valueNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $FieldValue;

    /**
     * @var string Field Value Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FieldDataType;

    /**
     * @param string $FieldKey Field key
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FieldValue Field valueNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $FieldDataType Field Value Type
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("FieldKey",$param) and $param["FieldKey"] !== null) {
            $this->FieldKey = $param["FieldKey"];
        }

        if (array_key_exists("FieldValue",$param) and $param["FieldValue"] !== null) {
            $this->FieldValue = $param["FieldValue"];
        }

        if (array_key_exists("FieldDataType",$param) and $param["FieldDataType"] !== null) {
            $this->FieldDataType = $param["FieldDataType"];
        }
    }
}
