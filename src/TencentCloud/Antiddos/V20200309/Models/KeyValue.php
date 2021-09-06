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
 * Status of the IP
 *
 * @method string getKey() Obtain IP
 * @method void setKey(string $Key) Set IP
 * @method string getValue() Obtain Status of the IP. Values: `1` (blocked); `2` (normal); `3` (being attacked)
 * @method void setValue(string $Value) Set Status of the IP. Values: `1` (blocked); `2` (normal); `3` (being attacked)
 */
class KeyValue extends AbstractModel
{
    /**
     * @var string IP
     */
    public $Key;

    /**
     * @var string Status of the IP. Values: `1` (blocked); `2` (normal); `3` (being attacked)
     */
    public $Value;

    /**
     * @param string $Key IP
     * @param string $Value Status of the IP. Values: `1` (blocked); `2` (normal); `3` (being attacked)
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
