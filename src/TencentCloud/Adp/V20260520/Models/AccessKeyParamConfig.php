<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Access Key Field Configuration
 *
 * @method integer getFieldType() Obtain <p>Access Key field type. 1: AccessKeyId, 2: AccessKeySecret, 3: SessionToken</p>
 * @method void setFieldType(integer $FieldType) Set <p>Access Key field type. 1: AccessKeyId, 2: AccessKeySecret, 3: SessionToken</p>
 * @method boolean getIsRequired() Obtain <p>Required or not</p>
 * @method void setIsRequired(boolean $IsRequired) Set <p>Required or not</p>
 * @method string getParamName() Obtain <p>header/query field name</p>
 * @method void setParamName(string $ParamName) Set <p>header/query field name</p>
 * @method string getParamValue() Obtain <p>Default value of the AccessKey, which can be empty.</p>
 * @method void setParamValue(string $ParamValue) Set <p>Default value of the AccessKey, which can be empty.</p>
 */
class AccessKeyParamConfig extends AbstractModel
{
    /**
     * @var integer <p>Access Key field type. 1: AccessKeyId, 2: AccessKeySecret, 3: SessionToken</p>
     */
    public $FieldType;

    /**
     * @var boolean <p>Required or not</p>
     */
    public $IsRequired;

    /**
     * @var string <p>header/query field name</p>
     */
    public $ParamName;

    /**
     * @var string <p>Default value of the AccessKey, which can be empty.</p>
     */
    public $ParamValue;

    /**
     * @param integer $FieldType <p>Access Key field type. 1: AccessKeyId, 2: AccessKeySecret, 3: SessionToken</p>
     * @param boolean $IsRequired <p>Required or not</p>
     * @param string $ParamName <p>header/query field name</p>
     * @param string $ParamValue <p>Default value of the AccessKey, which can be empty.</p>
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
        if (array_key_exists("FieldType",$param) and $param["FieldType"] !== null) {
            $this->FieldType = $param["FieldType"];
        }

        if (array_key_exists("IsRequired",$param) and $param["IsRequired"] !== null) {
            $this->IsRequired = $param["IsRequired"];
        }

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("ParamValue",$param) and $param["ParamValue"] !== null) {
            $this->ParamValue = $param["ParamValue"];
        }
    }
}
