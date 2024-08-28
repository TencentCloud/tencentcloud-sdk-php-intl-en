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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Index key-value information
 *
 * @method string getKey() Obtain Field requiring Key-Value or Meta Field Index configuration
 * @method void setKey(string $Key) Set Field requiring Key-Value or Meta Field Index configuration
 * @method ValueInfo getValue() Obtain Field index description
 * @method void setValue(ValueInfo $Value) Set Field index description
 */
class KeyValueArrayInfo extends AbstractModel
{
    /**
     * @var string Field requiring Key-Value or Meta Field Index configuration
     */
    public $Key;

    /**
     * @var ValueInfo Field index description
     */
    public $Value;

    /**
     * @param string $Key Field requiring Key-Value or Meta Field Index configuration
     * @param ValueInfo $Value Field index description
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
            $this->Value = new ValueInfo();
            $this->Value->deserialize($param["Value"]);
        }
    }
}
