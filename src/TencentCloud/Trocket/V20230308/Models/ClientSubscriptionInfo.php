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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Client subscription details, which are used to help determine clients with inconsistent subscription relationships.
 *
 * @method string getClientId() Obtain Client ID
 * @method void setClientId(string $ClientId) Set Client ID
 * @method string getClientAddr() Obtain Client ip address.
 * @method void setClientAddr(string $ClientAddr) Set Client ip address.
 * @method string getTopic() Obtain Specifies the subscribed topic.
 * @method void setTopic(string $Topic) Set Specifies the subscribed topic.
 * @method string getSubString() Obtain Subscription expression.
 * @method void setSubString(string $SubString) Set Subscription expression.
 * @method string getExpressionType() Obtain Specifies the subscription method.
 * @method void setExpressionType(string $ExpressionType) Set Specifies the subscription method.
 */
class ClientSubscriptionInfo extends AbstractModel
{
    /**
     * @var string Client ID
     */
    public $ClientId;

    /**
     * @var string Client ip address.
     */
    public $ClientAddr;

    /**
     * @var string Specifies the subscribed topic.
     */
    public $Topic;

    /**
     * @var string Subscription expression.
     */
    public $SubString;

    /**
     * @var string Specifies the subscription method.
     */
    public $ExpressionType;

    /**
     * @param string $ClientId Client ID
     * @param string $ClientAddr Client ip address.
     * @param string $Topic Specifies the subscribed topic.
     * @param string $SubString Subscription expression.
     * @param string $ExpressionType Specifies the subscription method.
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
        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientAddr",$param) and $param["ClientAddr"] !== null) {
            $this->ClientAddr = $param["ClientAddr"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("SubString",$param) and $param["SubString"] !== null) {
            $this->SubString = $param["SubString"];
        }

        if (array_key_exists("ExpressionType",$param) and $param["ExpressionType"] !== null) {
            $this->ExpressionType = $param["ExpressionType"];
        }
    }
}
