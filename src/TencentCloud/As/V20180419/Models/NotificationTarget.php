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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTargetType() 获取Target type. Value range: `CMQ_QUEUE`, `CMQ_TOPIC`.
<li> CMQ_QUEUE: CMQ_QUEUE: CMQ queue model.</li>
<li> CMQ_TOPIC: CMQ topic model.</li>
 * @method void setTargetType(string $TargetType) 设置Target type. Value range: `CMQ_QUEUE`, `CMQ_TOPIC`.
<li> CMQ_QUEUE: CMQ_QUEUE: CMQ queue model.</li>
<li> CMQ_TOPIC: CMQ topic model.</li>
 * @method string getQueueName() 获取Queue name. If `TargetType` is `CMQ_QUEUE`, this parameter is required.
 * @method void setQueueName(string $QueueName) 设置Queue name. If `TargetType` is `CMQ_QUEUE`, this parameter is required.
 * @method string getTopicName() 获取Topic name. If `TargetType` is `CMQ_TOPIC`, this parameter is required.
 * @method void setTopicName(string $TopicName) 设置Topic name. If `TargetType` is `CMQ_TOPIC`, this parameter is required.
 */

/**
 *Notification target
 */
class NotificationTarget extends AbstractModel
{
    /**
     * @var string Target type. Value range: `CMQ_QUEUE`, `CMQ_TOPIC`.
<li> CMQ_QUEUE: CMQ_QUEUE: CMQ queue model.</li>
<li> CMQ_TOPIC: CMQ topic model.</li>
     */
    public $TargetType;

    /**
     * @var string Queue name. If `TargetType` is `CMQ_QUEUE`, this parameter is required.
     */
    public $QueueName;

    /**
     * @var string Topic name. If `TargetType` is `CMQ_TOPIC`, this parameter is required.
     */
    public $TopicName;
    /**
     * @param string $TargetType Target type. Value range: `CMQ_QUEUE`, `CMQ_TOPIC`.
<li> CMQ_QUEUE: CMQ_QUEUE: CMQ queue model.</li>
<li> CMQ_TOPIC: CMQ topic model.</li>
     * @param string $QueueName Queue name. If `TargetType` is `CMQ_QUEUE`, this parameter is required.
     * @param string $TopicName Topic name. If `TargetType` is `CMQ_TOPIC`, this parameter is required.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
