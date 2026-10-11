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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task type attribute key-value pair
 *
 * @method string getPropertyKey() Obtain <p>Attribute key name. When used as an input parameter in TaskType, if it is not passed or is empty, this attribute item is silently ignored by the server (no error reported), equivalent to the attribute being unconfigured. For the list of valid PropertyKey, see the description in TaskType.</p>
 * @method void setPropertyKey(string $PropertyKey) Set <p>Attribute key name. When used as an input parameter in TaskType, if it is not passed or is empty, this attribute item is silently ignored by the server (no error reported), equivalent to the attribute being unconfigured. For the list of valid PropertyKey, see the description in TaskType.</p>
 * @method string getPropertyValue() Obtain <p>Attribute value.</p>
 * @method void setPropertyValue(string $PropertyValue) Set <p>Attribute value.</p>
 */
class TaskTypeProperty extends AbstractModel
{
    /**
     * @var string <p>Attribute key name. When used as an input parameter in TaskType, if it is not passed or is empty, this attribute item is silently ignored by the server (no error reported), equivalent to the attribute being unconfigured. For the list of valid PropertyKey, see the description in TaskType.</p>
     */
    public $PropertyKey;

    /**
     * @var string <p>Attribute value.</p>
     */
    public $PropertyValue;

    /**
     * @param string $PropertyKey <p>Attribute key name. When used as an input parameter in TaskType, if it is not passed or is empty, this attribute item is silently ignored by the server (no error reported), equivalent to the attribute being unconfigured. For the list of valid PropertyKey, see the description in TaskType.</p>
     * @param string $PropertyValue <p>Attribute value.</p>
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
        if (array_key_exists("PropertyKey",$param) and $param["PropertyKey"] !== null) {
            $this->PropertyKey = $param["PropertyKey"];
        }

        if (array_key_exists("PropertyValue",$param) and $param["PropertyValue"] !== null) {
            $this->PropertyValue = $param["PropertyValue"];
        }
    }
}
