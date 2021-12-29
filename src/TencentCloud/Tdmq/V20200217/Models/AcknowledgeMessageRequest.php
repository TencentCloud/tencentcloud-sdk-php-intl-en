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
 * AcknowledgeMessage request structure.
 *
 * @method string getMessageId() Obtain Unique ID used to identify the message, which can be obtained from the returned value of `receiveMessage`.
 * @method void setMessageId(string $MessageId) Set Unique ID used to identify the message, which can be obtained from the returned value of `receiveMessage`.
 * @method string getAckTopic() Obtain Topic name, which can be obtained from the returned value of `receiveMessage` and is better to be the full path of the topic, such as `tenant/namespace/topic`. If it is not specified, `public/default` will be used by default.
 * @method void setAckTopic(string $AckTopic) Set Topic name, which can be obtained from the returned value of `receiveMessage` and is better to be the full path of the topic, such as `tenant/namespace/topic`. If it is not specified, `public/default` will be used by default.
 * @method string getSubName() Obtain Subscriber name, which can be obtained from the returned value of `receiveMessage`. Make sure that it is the same as the subscriber name identified in `receiveMessage`; otherwise, the received message cannot be correctly acknowledged.
 * @method void setSubName(string $SubName) Set Subscriber name, which can be obtained from the returned value of `receiveMessage`. Make sure that it is the same as the subscriber name identified in `receiveMessage`; otherwise, the received message cannot be correctly acknowledged.
 */
class AcknowledgeMessageRequest extends AbstractModel
{
    /**
     * @var string Unique ID used to identify the message, which can be obtained from the returned value of `receiveMessage`.
     */
    public $MessageId;

    /**
     * @var string Topic name, which can be obtained from the returned value of `receiveMessage` and is better to be the full path of the topic, such as `tenant/namespace/topic`. If it is not specified, `public/default` will be used by default.
     */
    public $AckTopic;

    /**
     * @var string Subscriber name, which can be obtained from the returned value of `receiveMessage`. Make sure that it is the same as the subscriber name identified in `receiveMessage`; otherwise, the received message cannot be correctly acknowledged.
     */
    public $SubName;

    /**
     * @param string $MessageId Unique ID used to identify the message, which can be obtained from the returned value of `receiveMessage`.
     * @param string $AckTopic Topic name, which can be obtained from the returned value of `receiveMessage` and is better to be the full path of the topic, such as `tenant/namespace/topic`. If it is not specified, `public/default` will be used by default.
     * @param string $SubName Subscriber name, which can be obtained from the returned value of `receiveMessage`. Make sure that it is the same as the subscriber name identified in `receiveMessage`; otherwise, the received message cannot be correctly acknowledged.
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

        if (array_key_exists("AckTopic",$param) and $param["AckTopic"] !== null) {
            $this->AckTopic = $param["AckTopic"];
        }

        if (array_key_exists("SubName",$param) and $param["SubName"] !== null) {
            $this->SubName = $param["SubName"];
        }
    }
}
