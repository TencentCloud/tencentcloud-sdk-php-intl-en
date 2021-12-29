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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendBatchMessages request structure.
 *
 * @method string getTopic() Obtain Name of the topic to which to send the message. It is better to be the full path of the topic, such as `tenant/namespace/topic`. If it is not specified, `public/default` will be used by default.
 * @method void setTopic(string $Topic) Set Name of the topic to which to send the message. It is better to be the full path of the topic, such as `tenant/namespace/topic`. If it is not specified, `public/default` will be used by default.
 * @method string getPayload() Obtain Content of the message to be sent
 * @method void setPayload(string $Payload) Set Content of the message to be sent
 * @method string getStringToken() Obtain String-Type token, which is optional and will be automatically obtained by the system.
 * @method void setStringToken(string $StringToken) Set String-Type token, which is optional and will be automatically obtained by the system.
 * @method string getProducerName() Obtain Producer name, which must be globally unique. If it is not configured, the system will automatically generate one.
 * @method void setProducerName(string $ProducerName) Set Producer name, which must be globally unique. If it is not configured, the system will automatically generate one.
 * @method integer getSendTimeout() Obtain Message sending timeout period in seconds. Default value: 30s
 * @method void setSendTimeout(integer $SendTimeout) Set Message sending timeout period in seconds. Default value: 30s
 * @method integer getMaxPendingMessages() Obtain Maximum number of produced messages which can be cached in the memory. Default value: 1000
 * @method void setMaxPendingMessages(integer $MaxPendingMessages) Set Maximum number of produced messages which can be cached in the memory. Default value: 1000
 * @method integer getBatchingMaxMessages() Obtain Maximum number of messages in each batch. Default value: 1000 messages/batch
 * @method void setBatchingMaxMessages(integer $BatchingMaxMessages) Set Maximum number of messages in each batch. Default value: 1000 messages/batch
 * @method integer getBatchingMaxPublishDelay() Obtain Maximum wait time for each batch, after which the batch will be sent no matter whether the specified number or size of messages in the batch is reached. Default value: 10 ms
 * @method void setBatchingMaxPublishDelay(integer $BatchingMaxPublishDelay) Set Maximum wait time for each batch, after which the batch will be sent no matter whether the specified number or size of messages in the batch is reached. Default value: 10 ms
 * @method integer getBatchingMaxBytes() Obtain Maximum allowed size of messages in each batch. Default value: 128 KB
 * @method void setBatchingMaxBytes(integer $BatchingMaxBytes) Set Maximum allowed size of messages in each batch. Default value: 128 KB
 */
class SendBatchMessagesRequest extends AbstractModel
{
    /**
     * @var string Name of the topic to which to send the message. It is better to be the full path of the topic, such as `tenant/namespace/topic`. If it is not specified, `public/default` will be used by default.
     */
    public $Topic;

    /**
     * @var string Content of the message to be sent
     */
    public $Payload;

    /**
     * @var string String-Type token, which is optional and will be automatically obtained by the system.
     */
    public $StringToken;

    /**
     * @var string Producer name, which must be globally unique. If it is not configured, the system will automatically generate one.
     */
    public $ProducerName;

    /**
     * @var integer Message sending timeout period in seconds. Default value: 30s
     */
    public $SendTimeout;

    /**
     * @var integer Maximum number of produced messages which can be cached in the memory. Default value: 1000
     */
    public $MaxPendingMessages;

    /**
     * @var integer Maximum number of messages in each batch. Default value: 1000 messages/batch
     */
    public $BatchingMaxMessages;

    /**
     * @var integer Maximum wait time for each batch, after which the batch will be sent no matter whether the specified number or size of messages in the batch is reached. Default value: 10 ms
     */
    public $BatchingMaxPublishDelay;

    /**
     * @var integer Maximum allowed size of messages in each batch. Default value: 128 KB
     */
    public $BatchingMaxBytes;

    /**
     * @param string $Topic Name of the topic to which to send the message. It is better to be the full path of the topic, such as `tenant/namespace/topic`. If it is not specified, `public/default` will be used by default.
     * @param string $Payload Content of the message to be sent
     * @param string $StringToken String-Type token, which is optional and will be automatically obtained by the system.
     * @param string $ProducerName Producer name, which must be globally unique. If it is not configured, the system will automatically generate one.
     * @param integer $SendTimeout Message sending timeout period in seconds. Default value: 30s
     * @param integer $MaxPendingMessages Maximum number of produced messages which can be cached in the memory. Default value: 1000
     * @param integer $BatchingMaxMessages Maximum number of messages in each batch. Default value: 1000 messages/batch
     * @param integer $BatchingMaxPublishDelay Maximum wait time for each batch, after which the batch will be sent no matter whether the specified number or size of messages in the batch is reached. Default value: 10 ms
     * @param integer $BatchingMaxBytes Maximum allowed size of messages in each batch. Default value: 128 KB
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("StringToken",$param) and $param["StringToken"] !== null) {
            $this->StringToken = $param["StringToken"];
        }

        if (array_key_exists("ProducerName",$param) and $param["ProducerName"] !== null) {
            $this->ProducerName = $param["ProducerName"];
        }

        if (array_key_exists("SendTimeout",$param) and $param["SendTimeout"] !== null) {
            $this->SendTimeout = $param["SendTimeout"];
        }

        if (array_key_exists("MaxPendingMessages",$param) and $param["MaxPendingMessages"] !== null) {
            $this->MaxPendingMessages = $param["MaxPendingMessages"];
        }

        if (array_key_exists("BatchingMaxMessages",$param) and $param["BatchingMaxMessages"] !== null) {
            $this->BatchingMaxMessages = $param["BatchingMaxMessages"];
        }

        if (array_key_exists("BatchingMaxPublishDelay",$param) and $param["BatchingMaxPublishDelay"] !== null) {
            $this->BatchingMaxPublishDelay = $param["BatchingMaxPublishDelay"];
        }

        if (array_key_exists("BatchingMaxBytes",$param) and $param["BatchingMaxBytes"] !== null) {
            $this->BatchingMaxBytes = $param["BatchingMaxBytes"];
        }
    }
}
