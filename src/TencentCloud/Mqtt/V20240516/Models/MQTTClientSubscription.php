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
 * MQTT subscription relationship.
 *
 * @method string getTopicFilter() Obtain Subscribed topic.
 * @method void setTopicFilter(string $TopicFilter) Set Subscribed topic.
 * @method integer getQos() Obtain Service quality grade.
Up to once.
At least once.
Exactly once.
 * @method void setQos(integer $Qos) Set Service quality grade.
Up to once.
At least once.
Exactly once.
 * @method integer getLag() Obtain Indicates the heaped messages.
 * @method void setLag(integer $Lag) Set Indicates the heaped messages.
 * @method integer getInflight() Obtain Unconfirmed delivery count.
 * @method void setInflight(integer $Inflight) Set Unconfirmed delivery count.
 * @method array getUserProperties() Obtain Describes the user attribute.
 * @method void setUserProperties(array $UserProperties) Set Describes the user attribute.
 */
class MQTTClientSubscription extends AbstractModel
{
    /**
     * @var string Subscribed topic.
     */
    public $TopicFilter;

    /**
     * @var integer Service quality grade.
Up to once.
At least once.
Exactly once.
     */
    public $Qos;

    /**
     * @var integer Indicates the heaped messages.
     */
    public $Lag;

    /**
     * @var integer Unconfirmed delivery count.
     */
    public $Inflight;

    /**
     * @var array Describes the user attribute.
     */
    public $UserProperties;

    /**
     * @param string $TopicFilter Subscribed topic.
     * @param integer $Qos Service quality grade.
Up to once.
At least once.
Exactly once.
     * @param integer $Lag Indicates the heaped messages.
     * @param integer $Inflight Unconfirmed delivery count.
     * @param array $UserProperties Describes the user attribute.
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
        if (array_key_exists("TopicFilter",$param) and $param["TopicFilter"] !== null) {
            $this->TopicFilter = $param["TopicFilter"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("Lag",$param) and $param["Lag"] !== null) {
            $this->Lag = $param["Lag"];
        }

        if (array_key_exists("Inflight",$param) and $param["Inflight"] !== null) {
            $this->Inflight = $param["Inflight"];
        }

        if (array_key_exists("UserProperties",$param) and $param["UserProperties"] !== null) {
            $this->UserProperties = [];
            foreach ($param["UserProperties"] as $key => $value){
                $obj = new SubscriptionUserProperty();
                $obj->deserialize($value);
                array_push($this->UserProperties, $obj);
            }
        }
    }
}
