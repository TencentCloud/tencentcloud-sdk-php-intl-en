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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Queue consumer list information.
 *
 * @method string getClientIp() Obtain Client Ip.
 * @method void setClientIp(string $ClientIp) Set Client Ip.
 * @method string getConsumerTag() Obtain Consumer Tag.
 * @method void setConsumerTag(string $ConsumerTag) Set Consumer Tag.
 * @method string getQueueName() Obtain Consume target queue
 * @method void setQueueName(string $QueueName) Set Consume target queue
 * @method boolean getAckRequired() Obtain Whether required for the consumer to manually ack
 * @method void setAckRequired(boolean $AckRequired) Set Whether required for the consumer to manually ack
 * @method integer getPrefetchCount() Obtain Consumer qos value
 * @method void setPrefetchCount(integer $PrefetchCount) Set Consumer qos value
 * @method string getActive() Obtain Consumer status
 * @method void setActive(string $Active) Set Consumer status
 * @method string getLastDeliveredTime() Obtain Time of the last message submission
 * @method void setLastDeliveredTime(string $LastDeliveredTime) Set Time of the last message submission
 * @method integer getUnAckMsgCount() Obtain Number of unconfirmed messages of the consumer
 * @method void setUnAckMsgCount(integer $UnAckMsgCount) Set Number of unconfirmed messages of the consumer
 * @method string getChannelName() Obtain channel belonging to the consumer
 * @method void setChannelName(string $ChannelName) Set channel belonging to the consumer
 */
class RabbitMQConsumersListInfo extends AbstractModel
{
    /**
     * @var string Client Ip.
     */
    public $ClientIp;

    /**
     * @var string Consumer Tag.
     */
    public $ConsumerTag;

    /**
     * @var string Consume target queue
     */
    public $QueueName;

    /**
     * @var boolean Whether required for the consumer to manually ack
     */
    public $AckRequired;

    /**
     * @var integer Consumer qos value
     */
    public $PrefetchCount;

    /**
     * @var string Consumer status
     */
    public $Active;

    /**
     * @var string Time of the last message submission
     */
    public $LastDeliveredTime;

    /**
     * @var integer Number of unconfirmed messages of the consumer
     */
    public $UnAckMsgCount;

    /**
     * @var string channel belonging to the consumer
     */
    public $ChannelName;

    /**
     * @param string $ClientIp Client Ip.
     * @param string $ConsumerTag Consumer Tag.
     * @param string $QueueName Consume target queue
     * @param boolean $AckRequired Whether required for the consumer to manually ack
     * @param integer $PrefetchCount Consumer qos value
     * @param string $Active Consumer status
     * @param string $LastDeliveredTime Time of the last message submission
     * @param integer $UnAckMsgCount Number of unconfirmed messages of the consumer
     * @param string $ChannelName channel belonging to the consumer
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
        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("ConsumerTag",$param) and $param["ConsumerTag"] !== null) {
            $this->ConsumerTag = $param["ConsumerTag"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("AckRequired",$param) and $param["AckRequired"] !== null) {
            $this->AckRequired = $param["AckRequired"];
        }

        if (array_key_exists("PrefetchCount",$param) and $param["PrefetchCount"] !== null) {
            $this->PrefetchCount = $param["PrefetchCount"];
        }

        if (array_key_exists("Active",$param) and $param["Active"] !== null) {
            $this->Active = $param["Active"];
        }

        if (array_key_exists("LastDeliveredTime",$param) and $param["LastDeliveredTime"] !== null) {
            $this->LastDeliveredTime = $param["LastDeliveredTime"];
        }

        if (array_key_exists("UnAckMsgCount",$param) and $param["UnAckMsgCount"] !== null) {
            $this->UnAckMsgCount = $param["UnAckMsgCount"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }
    }
}
