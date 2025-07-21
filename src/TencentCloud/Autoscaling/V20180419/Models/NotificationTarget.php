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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Notification target
 *
 * @method string getTargetType() Obtain Target type. valid values include `CMQ_QUEUE`, `CMQ_TOPIC`, `TDMQ_CMQ_QUEUE`, `TDMQ_CMQ_TOPIC`.
<li>CMQ_QUEUE, specifies tencent cloud message QUEUE - queueing model. the corresponding product is offline. it is recommended to switch to TDMQ_CMQ_QUEUE (https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1).</li>.
<li>CMQ_TOPIC, specifies tencent cloud message queue - TOPIC model. the corresponding product is offline. it is recommended to switch to TDMQ_CMQ_TOPIC (https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1).</li>.
<li> TDMQ_CMQ_QUEUE. specifies the tencent cloud TDMQ message QUEUE - queueing model.</li>.
<Li>TDMQ_CMQ_TOPIC. specifies tencent cloud tdmq message queue - topic model.</li>.
 * @method void setTargetType(string $TargetType) Set Target type. valid values include `CMQ_QUEUE`, `CMQ_TOPIC`, `TDMQ_CMQ_QUEUE`, `TDMQ_CMQ_TOPIC`.
<li>CMQ_QUEUE, specifies tencent cloud message QUEUE - queueing model. the corresponding product is offline. it is recommended to switch to TDMQ_CMQ_QUEUE (https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1).</li>.
<li>CMQ_TOPIC, specifies tencent cloud message queue - TOPIC model. the corresponding product is offline. it is recommended to switch to TDMQ_CMQ_TOPIC (https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1).</li>.
<li> TDMQ_CMQ_QUEUE. specifies the tencent cloud TDMQ message QUEUE - queueing model.</li>.
<Li>TDMQ_CMQ_TOPIC. specifies tencent cloud tdmq message queue - topic model.</li>.
 * @method string getQueueName() Obtain Queue name. This parameter is required when `TargetType` is `CMQ_QUEUE` or `TDMQ_CMQ_QUEUE`.
 * @method void setQueueName(string $QueueName) Set Queue name. This parameter is required when `TargetType` is `CMQ_QUEUE` or `TDMQ_CMQ_QUEUE`.
 * @method string getTopicName() Obtain Topic name. This parameter is required when `TargetType` is `CMQ_TOPIC` or `TDMQ_CMQ_TOPIC`.
 * @method void setTopicName(string $TopicName) Set Topic name. This parameter is required when `TargetType` is `CMQ_TOPIC` or `TDMQ_CMQ_TOPIC`.
 */
class NotificationTarget extends AbstractModel
{
    /**
     * @var string Target type. valid values include `CMQ_QUEUE`, `CMQ_TOPIC`, `TDMQ_CMQ_QUEUE`, `TDMQ_CMQ_TOPIC`.
<li>CMQ_QUEUE, specifies tencent cloud message QUEUE - queueing model. the corresponding product is offline. it is recommended to switch to TDMQ_CMQ_QUEUE (https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1).</li>.
<li>CMQ_TOPIC, specifies tencent cloud message queue - TOPIC model. the corresponding product is offline. it is recommended to switch to TDMQ_CMQ_TOPIC (https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1).</li>.
<li> TDMQ_CMQ_QUEUE. specifies the tencent cloud TDMQ message QUEUE - queueing model.</li>.
<Li>TDMQ_CMQ_TOPIC. specifies tencent cloud tdmq message queue - topic model.</li>.
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
     * @param string $TargetType Target type. valid values include `CMQ_QUEUE`, `CMQ_TOPIC`, `TDMQ_CMQ_QUEUE`, `TDMQ_CMQ_TOPIC`.
<li>CMQ_QUEUE, specifies tencent cloud message QUEUE - queueing model. the corresponding product is offline. it is recommended to switch to TDMQ_CMQ_QUEUE (https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1).</li>.
<li>CMQ_TOPIC, specifies tencent cloud message queue - TOPIC model. the corresponding product is offline. it is recommended to switch to TDMQ_CMQ_TOPIC (https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1).</li>.
<li> TDMQ_CMQ_QUEUE. specifies the tencent cloud TDMQ message QUEUE - queueing model.</li>.
<Li>TDMQ_CMQ_TOPIC. specifies tencent cloud tdmq message queue - topic model.</li>.
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
