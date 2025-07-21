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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNotificationConfiguration request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
 * @method array getNotificationTypes() Obtain Notification type, i.e., the set of types of notifications to be subscribed to. Value range:
<li>SCALE_OUT_SUCCESSFUL: scale-out succeeded</li>
<li>SCALE_OUT_FAILED: scale-out failed</li>
<li>SCALE_IN_SUCCESSFUL: scale-in succeeded</li>
<li>SCALE_IN_FAILED: scale-in failed</li>
<li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL: unhealthy instance replacement succeeded</li>
<li>REPLACE_UNHEALTHY_INSTANCE_FAILED: unhealthy instance replacement failed</li>
 * @method void setNotificationTypes(array $NotificationTypes) Set Notification type, i.e., the set of types of notifications to be subscribed to. Value range:
<li>SCALE_OUT_SUCCESSFUL: scale-out succeeded</li>
<li>SCALE_OUT_FAILED: scale-out failed</li>
<li>SCALE_IN_SUCCESSFUL: scale-in succeeded</li>
<li>SCALE_IN_FAILED: scale-in failed</li>
<li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL: unhealthy instance replacement succeeded</li>
<li>REPLACE_UNHEALTHY_INSTANCE_FAILED: unhealthy instance replacement failed</li>
 * @method array getNotificationUserGroupIds() Obtain Notification GROUP ID, which is the USER GROUP ID collection. USER GROUP ID can be accessed through [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1). this parameter is valid only when TargetType is USER_GROUP.
 * @method void setNotificationUserGroupIds(array $NotificationUserGroupIds) Set Notification GROUP ID, which is the USER GROUP ID collection. USER GROUP ID can be accessed through [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1). this parameter is valid only when TargetType is USER_GROUP.
 * @method string getTargetType() Obtain Notification receiver type. values as follows:.
<Li>USER_GROUP: user group</li>.
<Li>TDMQ_CMQ_TOPIC: tdmq cmq topic</li>.
<Li>TDMQ_CMQ_QUEUE: tdmq cmq queue</li>.
<li>CMQ_QUEUE: CMQ QUEUE. [CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, only TDMQ CMQ is recommended.</li>.
<li>CMQ_TOPIC: specifies the CMQ TOPIC. [CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, TDMQ CMQ is recommended for use.</li>.

Default value: `USER_GROUP`.
 * @method void setTargetType(string $TargetType) Set Notification receiver type. values as follows:.
<Li>USER_GROUP: user group</li>.
<Li>TDMQ_CMQ_TOPIC: tdmq cmq topic</li>.
<Li>TDMQ_CMQ_QUEUE: tdmq cmq queue</li>.
<li>CMQ_QUEUE: CMQ QUEUE. [CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, only TDMQ CMQ is recommended.</li>.
<li>CMQ_TOPIC: specifies the CMQ TOPIC. [CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, TDMQ CMQ is recommended for use.</li>.

Default value: `USER_GROUP`.
 * @method string getQueueName() Obtain TDMQ CMQ QUEUE name. this field is required if TargetType value is `TDMQ_CMQ_QUEUE`.
 * @method void setQueueName(string $QueueName) Set TDMQ CMQ QUEUE name. this field is required if TargetType value is `TDMQ_CMQ_QUEUE`.
 * @method string getTopicName() Obtain TDMQ CMQ TOPIC name. this field is required when `TargetType` is `TDMQ_CMQ_TOPIC`.
 * @method void setTopicName(string $TopicName) Set TDMQ CMQ TOPIC name. this field is required when `TargetType` is `TDMQ_CMQ_TOPIC`.
 */
class CreateNotificationConfigurationRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
     */
    public $AutoScalingGroupId;

    /**
     * @var array Notification type, i.e., the set of types of notifications to be subscribed to. Value range:
<li>SCALE_OUT_SUCCESSFUL: scale-out succeeded</li>
<li>SCALE_OUT_FAILED: scale-out failed</li>
<li>SCALE_IN_SUCCESSFUL: scale-in succeeded</li>
<li>SCALE_IN_FAILED: scale-in failed</li>
<li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL: unhealthy instance replacement succeeded</li>
<li>REPLACE_UNHEALTHY_INSTANCE_FAILED: unhealthy instance replacement failed</li>
     */
    public $NotificationTypes;

    /**
     * @var array Notification GROUP ID, which is the USER GROUP ID collection. USER GROUP ID can be accessed through [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1). this parameter is valid only when TargetType is USER_GROUP.
     */
    public $NotificationUserGroupIds;

    /**
     * @var string Notification receiver type. values as follows:.
<Li>USER_GROUP: user group</li>.
<Li>TDMQ_CMQ_TOPIC: tdmq cmq topic</li>.
<Li>TDMQ_CMQ_QUEUE: tdmq cmq queue</li>.
<li>CMQ_QUEUE: CMQ QUEUE. [CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, only TDMQ CMQ is recommended.</li>.
<li>CMQ_TOPIC: specifies the CMQ TOPIC. [CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, TDMQ CMQ is recommended for use.</li>.

Default value: `USER_GROUP`.
     */
    public $TargetType;

    /**
     * @var string TDMQ CMQ QUEUE name. this field is required if TargetType value is `TDMQ_CMQ_QUEUE`.
     */
    public $QueueName;

    /**
     * @var string TDMQ CMQ TOPIC name. this field is required when `TargetType` is `TDMQ_CMQ_TOPIC`.
     */
    public $TopicName;

    /**
     * @param string $AutoScalingGroupId Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
     * @param array $NotificationTypes Notification type, i.e., the set of types of notifications to be subscribed to. Value range:
<li>SCALE_OUT_SUCCESSFUL: scale-out succeeded</li>
<li>SCALE_OUT_FAILED: scale-out failed</li>
<li>SCALE_IN_SUCCESSFUL: scale-in succeeded</li>
<li>SCALE_IN_FAILED: scale-in failed</li>
<li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL: unhealthy instance replacement succeeded</li>
<li>REPLACE_UNHEALTHY_INSTANCE_FAILED: unhealthy instance replacement failed</li>
     * @param array $NotificationUserGroupIds Notification GROUP ID, which is the USER GROUP ID collection. USER GROUP ID can be accessed through [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1). this parameter is valid only when TargetType is USER_GROUP.
     * @param string $TargetType Notification receiver type. values as follows:.
<Li>USER_GROUP: user group</li>.
<Li>TDMQ_CMQ_TOPIC: tdmq cmq topic</li>.
<Li>TDMQ_CMQ_QUEUE: tdmq cmq queue</li>.
<li>CMQ_QUEUE: CMQ QUEUE. [CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, only TDMQ CMQ is recommended.</li>.
<li>CMQ_TOPIC: specifies the CMQ TOPIC. [CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, TDMQ CMQ is recommended for use.</li>.

Default value: `USER_GROUP`.
     * @param string $QueueName TDMQ CMQ QUEUE name. this field is required if TargetType value is `TDMQ_CMQ_QUEUE`.
     * @param string $TopicName TDMQ CMQ TOPIC name. this field is required when `TargetType` is `TDMQ_CMQ_TOPIC`.
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

        if (array_key_exists("NotificationTypes",$param) and $param["NotificationTypes"] !== null) {
            $this->NotificationTypes = $param["NotificationTypes"];
        }

        if (array_key_exists("NotificationUserGroupIds",$param) and $param["NotificationUserGroupIds"] !== null) {
            $this->NotificationUserGroupIds = $param["NotificationUserGroupIds"];
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
