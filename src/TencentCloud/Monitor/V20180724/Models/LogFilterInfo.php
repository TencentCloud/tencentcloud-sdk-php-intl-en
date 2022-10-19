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
 * Log alarm search condition structure
 *
 * @method string getKey() Obtain Field name
 * @method void setKey(string $Key) Set Field name
 * @method string getOperator() Obtain Comparison operator
 * @method void setOperator(string $Operator) Set Comparison operator
 * @method string getValue() Obtain Field value
 * @method void setValue(string $Value) Set Field value
 */
class LogFilterInfo extends AbstractModel
{
    /**
     * @var string Field name
     */
    public $Key;

    /**
     * @var string Comparison operator
     */
    public $Operator;

    /**
     * @var string Field value
     */
    public $Value;

    /**
     * @param string $Key Field name
     * @param string $Operator Comparison operator
     * @param string $Value Field value
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
