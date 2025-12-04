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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Modifies the request parameters of a TencentDB for MongoDB instance.
 *
 * @method string getKey() Obtain Parameter name to be modified. Strictly refer to the parameter names supported by the current instance, which are obtained through DescribeInstanceParams.
 * @method void setKey(string $Key) Set Parameter name to be modified. Strictly refer to the parameter names supported by the current instance, which are obtained through DescribeInstanceParams.
 * @method string getValue() Obtain Corresponding value of the parameter name to be modified. Strictly refer to the value ranges corresponding to the parameters obtained through DescribeInstanceParams.
 * @method void setValue(string $Value) Set Corresponding value of the parameter name to be modified. Strictly refer to the value ranges corresponding to the parameters obtained through DescribeInstanceParams.
 */
class ModifyMongoDBParamType extends AbstractModel
{
    /**
     * @var string Parameter name to be modified. Strictly refer to the parameter names supported by the current instance, which are obtained through DescribeInstanceParams.
     */
    public $Key;

    /**
     * @var string Corresponding value of the parameter name to be modified. Strictly refer to the value ranges corresponding to the parameters obtained through DescribeInstanceParams.
     */
    public $Value;

    /**
     * @param string $Key Parameter name to be modified. Strictly refer to the parameter names supported by the current instance, which are obtained through DescribeInstanceParams.
     * @param string $Value Corresponding value of the parameter name to be modified. Strictly refer to the value ranges corresponding to the parameters obtained through DescribeInstanceParams.
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
    }
}
