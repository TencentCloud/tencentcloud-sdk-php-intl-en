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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * `Transform` output parameter
 *
 * @method string getKey() Obtain Key in the corresponding JSON output
 * @method void setKey(string $Key) Set Key in the corresponding JSON output
 * @method string getValue() Obtain You can enter a JsonPath, constant, or built-in date type
 * @method void setValue(string $Value) Set You can enter a JsonPath, constant, or built-in date type
 * @method string getValueType() Obtain Data type of `Value`. Valid values: STRING, NUMBER, BOOLEAN, NULL, SYS_VARIABLE, JSONPATH
 * @method void setValueType(string $ValueType) Set Data type of `Value`. Valid values: STRING, NUMBER, BOOLEAN, NULL, SYS_VARIABLE, JSONPATH
 */
class OutputStructParam extends AbstractModel
{
    /**
     * @var string Key in the corresponding JSON output
     */
    public $Key;

    /**
     * @var string You can enter a JsonPath, constant, or built-in date type
     */
    public $Value;

    /**
     * @var string Data type of `Value`. Valid values: STRING, NUMBER, BOOLEAN, NULL, SYS_VARIABLE, JSONPATH
     */
    public $ValueType;

    /**
     * @param string $Key Key in the corresponding JSON output
     * @param string $Value You can enter a JsonPath, constant, or built-in date type
     * @param string $ValueType Data type of `Value`. Valid values: STRING, NUMBER, BOOLEAN, NULL, SYS_VARIABLE, JSONPATH
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }
    }
}
