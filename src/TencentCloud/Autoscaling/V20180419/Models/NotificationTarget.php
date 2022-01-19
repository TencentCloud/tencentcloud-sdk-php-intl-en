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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Notification target
 *
 * @method string getTargetType() Obtain Target type. Valid values: `CMQ_QUEUE`, `CMQ_TOPIC`, `TDMQ_CMQ_QUEUE` and `TDMQ_CMQ_TOPIC`.
<li> CMQ_QUEUE: Tencent Cloud message queue - queue model.</li>
<li> CMQ_TOPIC: Tencent Cloud message queue - topic model.</li>
<li> TDMQ_CMQ_QUEUE: Tencent Cloud TDMQ message queue - queue model.</li>
<li> TDMQ_CMQ_TOPIC: Tencent Cloud TDMQ message queue - topic model.</li>
 * @method void setTargetType(string $TargetType) Set Target type. Valid values: `CMQ_QUEUE`, `CMQ_TOPIC`, `TDMQ_CMQ_QUEUE` and `TDMQ_CMQ_TOPIC`.
<li> CMQ_QUEUE: Tencent Cloud message queue - queue model.</li>
<li> CMQ_TOPIC: Tencent Cloud message queue - topic model.</li>
<li> TDMQ_CMQ_QUEUE: Tencent Cloud TDMQ message queue - queue model.</li>
<li> TDMQ_CMQ_TOPIC: Tencent Cloud TDMQ message queue - topic model.</li>
 * @method string getQueueName() Obtain Queue name. This parameter is required when `TargetType` is `CMQ_QUEUE` or `TDMQ_CMQ_QUEUE`.
 * @method void setQueueName(string $QueueName) Set Queue name. This parameter is required when `TargetType` is `CMQ_QUEUE` or `TDMQ_CMQ_QUEUE`.
 * @method string getTopicName() Obtain Topic name. This parameter is required when `TargetType` is `CMQ_TOPIC` or `TDMQ_CMQ_TOPIC`.
 * @method void setTopicName(string $TopicName) Set Topic name. This parameter is required when `TargetType` is `CMQ_TOPIC` or `TDMQ_CMQ_TOPIC`.
 */
class NotificationTarget extends AbstractModel
{
    /**
     * @var string Target type. Valid values: `CMQ_QUEUE`, `CMQ_TOPIC`, `TDMQ_CMQ_QUEUE` and `TDMQ_CMQ_TOPIC`.
<li> CMQ_QUEUE: Tencent Cloud message queue - queue model.</li>
<li> CMQ_TOPIC: Tencent Cloud message queue - topic model.</li>
<li> TDMQ_CMQ_QUEUE: Tencent Cloud TDMQ message queue - queue model.</li>
<li> TDMQ_CMQ_TOPIC: Tencent Cloud TDMQ message queue - topic model.</li>
     */
    public $TargetType;

    /**
     * @var string Queue name. This parameter is required when `TargetType` is `CMQ_QUEUE` or `TDMQ_CMQ_QUEUE`.
     */
    public $QueueName;

    /**
     * @var string Topic name. This parameter is required when `TargetType` is `CMQ_TOPIC` or `TDMQ_CMQ_TOPIC`.
     */
    public $TopicName;

    /**
     * @param string $TargetType Target type. Valid values: `CMQ_QUEUE`, `CMQ_TOPIC`, `TDMQ_CMQ_QUEUE` and `TDMQ_CMQ_TOPIC`.
<li> CMQ_QUEUE: Tencent Cloud message queue - queue model.</li>
<li> CMQ_TOPIC: Tencent Cloud message queue - topic model.</li>
<li> TDMQ_CMQ_QUEUE: Tencent Cloud TDMQ message queue - queue model.</li>
<li> TDMQ_CMQ_TOPIC: Tencent Cloud TDMQ message queue - topic model.</li>
     * @param string $QueueName Queue name. This parameter is required when `TargetType` is `CMQ_QUEUE` or `TDMQ_CMQ_QUEUE`.
     * @param string $TopicName Topic name. This parameter is required when `TargetType` is `CMQ_TOPIC` or `TDMQ_CMQ_TOPIC`.
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
        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
