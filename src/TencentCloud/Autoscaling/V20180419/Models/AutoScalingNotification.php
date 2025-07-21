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
 * AS event notification
 *
 * @method string getAutoScalingGroupId() Obtain Auto scaling group ID.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Auto scaling group ID.
 * @method array getNotificationUserGroupIds() Obtain List of user group IDs.
 * @method void setNotificationUserGroupIds(array $NotificationUserGroupIds) Set List of user group IDs.
 * @method array getNotificationTypes() Obtain Notification event list. valid values are as follows:.
<Li>SCALE_OUT_SUCCESSFUL: scale-out succeeded</li>.
<Li>SCALE_OUT_FAILED: scale-out failed</li>.
<Li>SCALE_IN_SUCCESSFUL: scale-in succeeded</li>.
<Li>SCALE_IN_FAILED: scale-in failed</li>.
<Li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL: unhealthy instance replacement succeeded</li>.
<Li>REPLACE_UNHEALTHY_INSTANCE_FAILED: unhealthy instance replacement failed</li>.
 * @method void setNotificationTypes(array $NotificationTypes) Set Notification event list. valid values are as follows:.
<Li>SCALE_OUT_SUCCESSFUL: scale-out succeeded</li>.
<Li>SCALE_OUT_FAILED: scale-out failed</li>.
<Li>SCALE_IN_SUCCESSFUL: scale-in succeeded</li>.
<Li>SCALE_IN_FAILED: scale-in failed</li>.
<Li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL: unhealthy instance replacement succeeded</li>.
<Li>REPLACE_UNHEALTHY_INSTANCE_FAILED: unhealthy instance replacement failed</li>.
 * @method string getAutoScalingNotificationId() Obtain Event notification ID.
 * @method void setAutoScalingNotificationId(string $AutoScalingNotificationId) Set Event notification ID.
 * @method string getTargetType() Obtain Notification receiver type. valid values:.
USER_GROUP: specifies the user group.
TDMQ_CMQ_TOPIC: tdmq for cmq topic.
TDMQ_CMQ_QUEUE: specifies the tdmq cmq queue.
`CMQ_QUEUE`: cmq queue. [cmq API offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). unable to select.
CMQ_TOPIC: cmq topic. [cmq API offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1), unable to select.
 * @method void setTargetType(string $TargetType) Set Notification receiver type. valid values:.
USER_GROUP: specifies the user group.
TDMQ_CMQ_TOPIC: tdmq for cmq topic.
TDMQ_CMQ_QUEUE: specifies the tdmq cmq queue.
`CMQ_QUEUE`: cmq queue. [cmq API offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). unable to select.
CMQ_TOPIC: cmq topic. [cmq API offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1), unable to select.
 * @method string getQueueName() Obtain TDMQ CMQ queue name.
 * @method void setQueueName(string $QueueName) Set TDMQ CMQ queue name.
 * @method string getTopicName() Obtain TDMQ CMQ topic name.
 * @method void setTopicName(string $TopicName) Set TDMQ CMQ topic name.
 */
class AutoScalingNotification extends AbstractModel
{
    /**
     * @var string Auto scaling group ID.
     */
    public $AutoScalingGroupId;

    /**
     * @var array List of user group IDs.
     */
    public $NotificationUserGroupIds;

    /**
     * @var array Notification event list. valid values are as follows:.
<Li>SCALE_OUT_SUCCESSFUL: scale-out succeeded</li>.
<Li>SCALE_OUT_FAILED: scale-out failed</li>.
<Li>SCALE_IN_SUCCESSFUL: scale-in succeeded</li>.
<Li>SCALE_IN_FAILED: scale-in failed</li>.
<Li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL: unhealthy instance replacement succeeded</li>.
<Li>REPLACE_UNHEALTHY_INSTANCE_FAILED: unhealthy instance replacement failed</li>.
     */
    public $NotificationTypes;

    /**
     * @var string Event notification ID.
     */
    public $AutoScalingNotificationId;

    /**
     * @var string Notification receiver type. valid values:.
USER_GROUP: specifies the user group.
TDMQ_CMQ_TOPIC: tdmq for cmq topic.
TDMQ_CMQ_QUEUE: specifies the tdmq cmq queue.
`CMQ_QUEUE`: cmq queue. [cmq API offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). unable to select.
CMQ_TOPIC: cmq topic. [cmq API offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1), unable to select.
     */
    public $TargetType;

    /**
     * @var string TDMQ CMQ queue name.
     */
    public $QueueName;

    /**
     * @var string TDMQ CMQ topic name.
     */
    public $TopicName;

    /**
     * @param string $AutoScalingGroupId Auto scaling group ID.
     * @param array $NotificationUserGroupIds List of user group IDs.
     * @param array $NotificationTypes Notification event list. valid values are as follows:.
<Li>SCALE_OUT_SUCCESSFUL: scale-out succeeded</li>.
<Li>SCALE_OUT_FAILED: scale-out failed</li>.
<Li>SCALE_IN_SUCCESSFUL: scale-in succeeded</li>.
<Li>SCALE_IN_FAILED: scale-in failed</li>.
<Li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL: unhealthy instance replacement succeeded</li>.
<Li>REPLACE_UNHEALTHY_INSTANCE_FAILED: unhealthy instance replacement failed</li>.
     * @param string $AutoScalingNotificationId Event notification ID.
     * @param string $TargetType Notification receiver type. valid values:.
USER_GROUP: specifies the user group.
TDMQ_CMQ_TOPIC: tdmq for cmq topic.
TDMQ_CMQ_QUEUE: specifies the tdmq cmq queue.
`CMQ_QUEUE`: cmq queue. [cmq API offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). unable to select.
CMQ_TOPIC: cmq topic. [cmq API offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1), unable to select.
     * @param string $QueueName TDMQ CMQ queue name.
     * @param string $TopicName TDMQ CMQ topic name.
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("NotificationUserGroupIds",$param) and $param["NotificationUserGroupIds"] !== null) {
            $this->NotificationUserGroupIds = $param["NotificationUserGroupIds"];
        }

        if (array_key_exists("NotificationTypes",$param) and $param["NotificationTypes"] !== null) {
            $this->NotificationTypes = $param["NotificationTypes"];
        }

        if (array_key_exists("AutoScalingNotificationId",$param) and $param["AutoScalingNotificationId"] !== null) {
            $this->AutoScalingNotificationId = $param["AutoScalingNotificationId"];
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
