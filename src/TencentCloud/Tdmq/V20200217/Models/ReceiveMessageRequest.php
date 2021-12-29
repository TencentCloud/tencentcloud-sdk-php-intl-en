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
 * ReceiveMessage request structure.
 *
 * @method string getTopic() Obtain Name of the topic which receives the message. It is better to be the full path of the topic, such as `tenant/namespace/topic`. If it is not specified, `public/default` will be used by default.
 * @method void setTopic(string $Topic) Set Name of the topic which receives the message. It is better to be the full path of the topic, such as `tenant/namespace/topic`. If it is not specified, `public/default` will be used by default.
 * @method string getSubscriptionName() Obtain Subscriber name
 * @method void setSubscriptionName(string $SubscriptionName) Set Subscriber name
 * @method integer getReceiverQueueSize() Obtain Default value: 1000. Messages received by the consumer will first be stored in the `receiverQueueSize` queue to tune the message receiving rate.
 * @method void setReceiverQueueSize(integer $ReceiverQueueSize) Set Default value: 1000. Messages received by the consumer will first be stored in the `receiverQueueSize` queue to tune the message receiving rate.
 * @method string getSubInitialPosition() Obtain Default value: Latest. It is used to determine the position where the consumer initially receives messages. Valid values: Earliest, Latest.
 * @method void setSubInitialPosition(string $SubInitialPosition) Set Default value: Latest. It is used to determine the position where the consumer initially receives messages. Valid values: Earliest, Latest.
 */
class ReceiveMessageRequest extends AbstractModel
{
    /**
     * @var string Name of the topic which receives the message. It is better to be the full path of the topic, such as `tenant/namespace/topic`. If it is not specified, `public/default` will be used by default.
     */
    public $Topic;

    /**
     * @var string Subscriber name
     */
    public $SubscriptionName;

    /**
     * @var integer Default value: 1000. Messages received by the consumer will first be stored in the `receiverQueueSize` queue to tune the message receiving rate.
     */
    public $ReceiverQueueSize;

    /**
     * @var string Default value: Latest. It is used to determine the position where the consumer initially receives messages. Valid values: Earliest, Latest.
     */
    public $SubInitialPosition;

    /**
     * @param string $Topic Name of the topic which receives the message. It is better to be the full path of the topic, such as `tenant/namespace/topic`. If it is not specified, `public/default` will be used by default.
     * @param string $SubscriptionName Subscriber name
     * @param integer $ReceiverQueueSize Default value: 1000. Messages received by the consumer will first be stored in the `receiverQueueSize` queue to tune the message receiving rate.
     * @param string $SubInitialPosition Default value: Latest. It is used to determine the position where the consumer initially receives messages. Valid values: Earliest, Latest.
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

        if (array_key_exists("SubscriptionName",$param) and $param["SubscriptionName"] !== null) {
            $this->SubscriptionName = $param["SubscriptionName"];
        }

        if (array_key_exists("ReceiverQueueSize",$param) and $param["ReceiverQueueSize"] !== null) {
            $this->ReceiverQueueSize = $param["ReceiverQueueSize"];
        }

        if (array_key_exists("SubInitialPosition",$param) and $param["SubInitialPosition"] !== null) {
            $this->SubInitialPosition = $param["SubInitialPosition"];
        }
    }
}
