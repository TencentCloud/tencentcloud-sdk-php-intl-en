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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CC precise protection configuration fields
 *
 * @method string getFieldType() Obtain Type of the configuration field. Only `value` is supported.
 * @method void setFieldType(string $FieldType) Set Type of the configuration field. Only `value` is supported.
 * @method string getFieldName() Obtain Configuration field. Valid values: `cgi`, `ua`, `cookie`, `referer`, `accept`, and `srcip`.
 * @method void setFieldName(string $FieldName) Set Configuration field. Valid values: `cgi`, `ua`, `cookie`, `referer`, `accept`, and `srcip`.
 * @method string getValue() Obtain Value of the configuration field
 * @method void setValue(string $Value) Set Value of the configuration field
 * @method string getValueOperator() Obtain Filters values of configuration fields. `equal`: The value matches the configuration field. `not_equal`: The value does not match the configuration field. `include`: The value is included.
 * @method void setValueOperator(string $ValueOperator) Set Filters values of configuration fields. `equal`: The value matches the configuration field. `not_equal`: The value does not match the configuration field. `include`: The value is included.
 */
class CCPrecisionPlyRecord extends AbstractModel
{
    /**
     * @var string Type of the configuration field. Only `value` is supported.
     */
    public $FieldType;

    /**
     * @var string Configuration field. Valid values: `cgi`, `ua`, `cookie`, `referer`, `accept`, and `srcip`.
     */
    public $FieldName;

    /**
     * @var string Value of the configuration field
     */
    public $Value;

    /**
     * @var string Filters values of configuration fields. `equal`: The value matches the configuration field. `not_equal`: The value does not match the configuration field. `include`: The value is included.
     */
    public $ValueOperator;

    /**
     * @param string $FieldType Type of the configuration field. Only `value` is supported.
     * @param string $FieldName Configuration field. Valid values: `cgi`, `ua`, `cookie`, `referer`, `accept`, and `srcip`.
     * @param string $Value Value of the configuration field
     * @param string $ValueOperator Filters values of configuration fields. `equal`: The value matches the configuration field. `not_equal`: The value does not match the configuration field. `include`: The value is included.
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

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ValueOperator",$param) and $param["ValueOperator"] !== null) {
            $this->ValueOperator = $param["ValueOperator"];
        }
    }
}
