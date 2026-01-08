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
 * MQTT message.
 *
 * @method string getMessageId() Obtain Message ID
 * @method void setMessageId(string $MessageId) Set Message ID
 * @method string getClientId() Obtain Client Id of the message sender.
 * @method void setClientId(string $ClientId) Set Client Id of the message sender.
 * @method string getQos() Obtain Message service quality grade.
 * @method void setQos(string $Qos) Set Message service quality grade.
 * @method integer getStoreTimestamp() Obtain Message storage time on the server. millisecond-level timestamp.
 * @method void setStoreTimestamp(integer $StoreTimestamp) Set Message storage time on the server. millisecond-level timestamp.
 * @method string getOriginTopic() Obtain Specifies the source topic.
 * @method void setOriginTopic(string $OriginTopic) Set Specifies the source topic.
 */
class MQTTMessage extends AbstractModel
{
    /**
     * @var string Message ID
     */
    public $MessageId;

    /**
     * @var string Client Id of the message sender.
     */
    public $ClientId;

    /**
     * @var string Message service quality grade.
     */
    public $Qos;

    /**
     * @var integer Message storage time on the server. millisecond-level timestamp.
     */
    public $StoreTimestamp;

    /**
     * @var string Specifies the source topic.
     */
    public $OriginTopic;

    /**
     * @param string $MessageId Message ID
     * @param string $ClientId Client Id of the message sender.
     * @param string $Qos Message service quality grade.
     * @param integer $StoreTimestamp Message storage time on the server. millisecond-level timestamp.
     * @param string $OriginTopic Specifies the source topic.
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
        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("StoreTimestamp",$param) and $param["StoreTimestamp"] !== null) {
            $this->StoreTimestamp = $param["StoreTimestamp"];
        }

        if (array_key_exists("OriginTopic",$param) and $param["OriginTopic"] !== null) {
            $this->OriginTopic = $param["OriginTopic"];
        }
    }
}
