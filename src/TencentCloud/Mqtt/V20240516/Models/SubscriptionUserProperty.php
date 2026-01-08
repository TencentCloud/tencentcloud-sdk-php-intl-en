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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subscribed UserProperty structure.
 *
 * @method string getKey() Obtain Specifies the key of the UserProperty for subscription.
 * @method void setKey(string $Key) Set Specifies the key of the UserProperty for subscription.
 * @method string getValue() Obtain Specifies the value of the UserProperty for subscription.
 * @method void setValue(string $Value) Set Specifies the value of the UserProperty for subscription.
 */
class SubscriptionUserProperty extends AbstractModel
{
    /**
     * @var string Specifies the key of the UserProperty for subscription.
     */
    public $Key;

    /**
     * @var string Specifies the value of the UserProperty for subscription.
     */
    public $Value;

    /**
     * @param string $Key Specifies the key of the UserProperty for subscription.
     * @param string $Value Specifies the value of the UserProperty for subscription.
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
