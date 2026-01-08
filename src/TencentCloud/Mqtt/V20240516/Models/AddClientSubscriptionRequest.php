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
 * AddClientSubscription request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getClientId() Obtain Client ID.
 * @method void setClientId(string $ClientId) Set Client ID.
 * @method string getTopicFilter() Obtain Specifies the subscription.
 * @method void setTopicFilter(string $TopicFilter) Set Specifies the subscription.
 * @method string getQos() Obtain Service quality. valid values: 0, 1, 2.
 * @method void setQos(string $Qos) Set Service quality. valid values: 0, 1, 2.
 */
class AddClientSubscriptionRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Client ID.
     */
    public $ClientId;

    /**
     * @var string Specifies the subscription.
     */
    public $TopicFilter;

    /**
     * @var string Service quality. valid values: 0, 1, 2.
     */
    public $Qos;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $ClientId Client ID.
     * @param string $TopicFilter Specifies the subscription.
     * @param string $Qos Service quality. valid values: 0, 1, 2.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("TopicFilter",$param) and $param["TopicFilter"] !== null) {
            $this->TopicFilter = $param["TopicFilter"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }
    }
}
