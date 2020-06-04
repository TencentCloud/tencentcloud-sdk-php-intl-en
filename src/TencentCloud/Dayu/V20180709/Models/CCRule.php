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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The custom CC protection policy in key-value format
 *
 * @method string getSkey() Obtain Key of the policy. Valid values: `host`, `cgi`, `ua`, `referer`
 * @method void setSkey(string $Skey) Set Key of the policy. Valid values: `host`, `cgi`, `ua`, `referer`
 * @method string getOperator() Obtain Rule condition. Valid values: `include`, `not_include`, `equal`
 * @method void setOperator(string $Operator) Set Rule condition. Valid values: `include`, `not_include`, `equal`
 * @method string getValue() Obtain Value of the policy. Length limit: 31 bytes
 * @method void setValue(string $Value) Set Value of the policy. Length limit: 31 bytes
 */
class CCRule extends AbstractModel
{
    /**
     * @var string Key of the policy. Valid values: `host`, `cgi`, `ua`, `referer`
     */
    public $Skey;

    /**
     * @var string Rule condition. Valid values: `include`, `not_include`, `equal`
     */
    public $Operator;

    /**
     * @var string Value of the policy. Length limit: 31 bytes
     */
    public $Value;

    /**
     * @param string $Skey Key of the policy. Valid values: `host`, `cgi`, `ua`, `referer`
     * @param string $Operator Rule condition. Valid values: `include`, `not_include`, `equal`
     * @param string $Value Value of the policy. Length limit: 31 bytes
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
        if (array_key_exists("Skey",$param) and $param["Skey"] !== null) {
            $this->Skey = $param["Skey"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
