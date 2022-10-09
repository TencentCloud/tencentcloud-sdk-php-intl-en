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
 * SendMessages request structure.
 *
 * @method string getTopic() Obtain Name of the topic to which to send the message. It is better to be the full path of the topic, such as `tenant/namespace/topic`. If it is not specified, `public/default` will be used by default.
 * @method void setTopic(string $Topic) Set Name of the topic to which to send the message. It is better to be the full path of the topic, such as `tenant/namespace/topic`. If it is not specified, `public/default` will be used by default.
 * @method string getPayload() Obtain Content of the message to be sent
 * @method void setPayload(string $Payload) Set Content of the message to be sent
 * @method string getStringToken() Obtain Token used for authentication, which is optional and will be automatically obtained by the system.
 * @method void setStringToken(string $StringToken) Set Token used for authentication, which is optional and will be automatically obtained by the system.
 * @method string getProducerName() Obtain Producer name, which is randomly generated and must be globally unique. If you set the producer name manually, the producer may fail to be created, causing message sending failure.
This parameter is used only when a specific producer is allowed to produce messages. It won’t be used in most cases.
 * @method void setProducerName(string $ProducerName) Set Producer name, which is randomly generated and must be globally unique. If you set the producer name manually, the producer may fail to be created, causing message sending failure.
This parameter is used only when a specific producer is allowed to produce messages. It won’t be used in most cases.
 * @method integer getSendTimeout() Obtain Message sending timeout period, which is 30s by default.
 * @method void setSendTimeout(integer $SendTimeout) Set Message sending timeout period, which is 30s by default.
 * @method integer getMaxPendingMessages() Obtain Maximum number of produced messages which can be cached in the memory. Default value: 1000
 * @method void setMaxPendingMessages(integer $MaxPendingMessages) Set Maximum number of produced messages which can be cached in the memory. Default value: 1000
 */
class SendMessagesRequest extends AbstractModel
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
     * @var string Token used for authentication, which is optional and will be automatically obtained by the system.
     */
    public $StringToken;

    /**
     * @var string Producer name, which is randomly generated and must be globally unique. If you set the producer name manually, the producer may fail to be created, causing message sending failure.
This parameter is used only when a specific producer is allowed to produce messages. It won’t be used in most cases.
     */
    public $ProducerName;

    /**
     * @var integer Message sending timeout period, which is 30s by default.
     */
    public $SendTimeout;

    /**
     * @var integer Maximum number of produced messages which can be cached in the memory. Default value: 1000
     */
    public $MaxPendingMessages;

    /**
     * @param string $Topic Name of the topic to which to send the message. It is better to be the full path of the topic, such as `tenant/namespace/topic`. If it is not specified, `public/default` will be used by default.
     * @param string $Payload Content of the message to be sent
     * @param string $StringToken Token used for authentication, which is optional and will be automatically obtained by the system.
     * @param string $ProducerName Producer name, which is randomly generated and must be globally unique. If you set the producer name manually, the producer may fail to be created, causing message sending failure.
This parameter is used only when a specific producer is allowed to produce messages. It won’t be used in most cases.
     * @param integer $SendTimeout Message sending timeout period, which is 30s by default.
     * @param integer $MaxPendingMessages Maximum number of produced messages which can be cached in the memory. Default value: 1000
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
    }
}
