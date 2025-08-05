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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule condition configuration.
 *
 * @method string getKey() Obtain Key of the quality inspection item condition.
 * @method void setKey(string $Key) Set Key of the quality inspection item condition.
 * @method string getValue() Obtain Value corresponding to the condition.
 * @method void setValue(string $Value) Set Value corresponding to the condition.
 */
class RuleConditionItem extends AbstractModel
{
    /**
     * @var string Key of the quality inspection item condition.
     */
    public $Key;

    /**
     * @var string Value corresponding to the condition.
     */
    public $Value;

    /**
     * @param string $Key Key of the quality inspection item condition.
     * @param string $Value Value corresponding to the condition.
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
