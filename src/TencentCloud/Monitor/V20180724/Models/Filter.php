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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query filter
 *
 * @method string getType() Obtain Filter method. Valid values: `=`, `!=`, `in`.
 * @method void setType(string $Type) Set Filter method. Valid values: `=`, `!=`, `in`.
 * @method string getKey() Obtain Filter dimension name
 * @method void setKey(string $Key) Set Filter dimension name
 * @method string getValue() Obtain Filter value. For the `in` filter method, separate multiple values by comma.
 * @method void setValue(string $Value) Set Filter value. For the `in` filter method, separate multiple values by comma.
 * @method string getName() Obtain Filter name
 * @method void setName(string $Name) Set Filter name
 * @method array getValues() Obtain Filter value range
 * @method void setValues(array $Values) Set Filter value range
 */
class Filter extends AbstractModel
{
    /**
     * @var string Filter method. Valid values: `=`, `!=`, `in`.
     */
    public $Type;

    /**
     * @var string Filter dimension name
     */
    public $Key;

    /**
     * @var string Filter value. For the `in` filter method, separate multiple values by comma.
     */
    public $Value;

    /**
     * @var string Filter name
     */
    public $Name;

    /**
     * @var array Filter value range
     */
    public $Values;

    /**
     * @param string $Type Filter method. Valid values: `=`, `!=`, `in`.
     * @param string $Key Filter dimension name
     * @param string $Value Filter value. For the `in` filter method, separate multiple values by comma.
     * @param string $Name Filter name
     * @param array $Values Filter value range
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
