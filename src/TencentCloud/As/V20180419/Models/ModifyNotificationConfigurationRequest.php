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
 * ModifyNotificationConfiguration request structure.
 *
 * @method string getAutoScalingNotificationId() Obtain Specifies the notification ID that needs modification. get the notification ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeNotificationConfigurations](https://intl.cloud.tencent.com/document/api/377/33183?from_cn_redirect=1) and getting `AutoScalingNotificationId` from the returned information.
 * @method void setAutoScalingNotificationId(string $AutoScalingNotificationId) Set Specifies the notification ID that needs modification. get the notification ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeNotificationConfigurations](https://intl.cloud.tencent.com/document/api/377/33183?from_cn_redirect=1) and getting `AutoScalingNotificationId` from the returned information.
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
 * @method array getNotificationUserGroupIds() Obtain Notification GROUP ID, which is the USER GROUP ID collection. USER GROUP ID can be accessed through [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1). this parameter is valid only when `TargetType` is `USER_GROUP`.
 * @method void setNotificationUserGroupIds(array $NotificationUserGroupIds) Set Notification GROUP ID, which is the USER GROUP ID collection. USER GROUP ID can be accessed through [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1). this parameter is valid only when `TargetType` is `USER_GROUP`.
 * @method string getQueueName() Obtain The TDMQ CMQ QUEUE name. [the original CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, only TDMQ CMQ is recommended for use. this parameter is valid only when `TargetType` is `TDMQ_CMQ_QUEUE`.
 * @method void setQueueName(string $QueueName) Set The TDMQ CMQ QUEUE name. [the original CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, only TDMQ CMQ is recommended for use. this parameter is valid only when `TargetType` is `TDMQ_CMQ_QUEUE`.
 * @method string getTopicName() Obtain The TDMQ CMQ TOPIC name. [original CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, only TDMQ CMQ is recommended for use. this parameter is valid only when `TargetType` is `TDMQ_CMQ_TOPIC`.
 * @method void setTopicName(string $TopicName) Set The TDMQ CMQ TOPIC name. [original CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, only TDMQ CMQ is recommended for use. this parameter is valid only when `TargetType` is `TDMQ_CMQ_TOPIC`.
 */
class ModifyNotificationConfigurationRequest extends AbstractModel
{
    /**
     * @var string Specifies the notification ID that needs modification. get the notification ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeNotificationConfigurations](https://intl.cloud.tencent.com/document/api/377/33183?from_cn_redirect=1) and getting `AutoScalingNotificationId` from the returned information.
     */
    public $AutoScalingNotificationId;

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
     * @var array Notification GROUP ID, which is the USER GROUP ID collection. USER GROUP ID can be accessed through [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1). this parameter is valid only when `TargetType` is `USER_GROUP`.
     */
    public $NotificationUserGroupIds;

    /**
     * @var string The TDMQ CMQ QUEUE name. [the original CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, only TDMQ CMQ is recommended for use. this parameter is valid only when `TargetType` is `TDMQ_CMQ_QUEUE`.
     */
    public $QueueName;

    /**
     * @var string The TDMQ CMQ TOPIC name. [original CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, only TDMQ CMQ is recommended for use. this parameter is valid only when `TargetType` is `TDMQ_CMQ_TOPIC`.
     */
    public $TopicName;

    /**
     * @param string $AutoScalingNotificationId Specifies the notification ID that needs modification. get the notification ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeNotificationConfigurations](https://intl.cloud.tencent.com/document/api/377/33183?from_cn_redirect=1) and getting `AutoScalingNotificationId` from the returned information.
     * @param array $NotificationTypes Notification type, i.e., the set of types of notifications to be subscribed to. Value range:
<li>SCALE_OUT_SUCCESSFUL: scale-out succeeded</li>
<li>SCALE_OUT_FAILED: scale-out failed</li>
<li>SCALE_IN_SUCCESSFUL: scale-in succeeded</li>
<li>SCALE_IN_FAILED: scale-in failed</li>
<li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL: unhealthy instance replacement succeeded</li>
<li>REPLACE_UNHEALTHY_INSTANCE_FAILED: unhealthy instance replacement failed</li>
     * @param array $NotificationUserGroupIds Notification GROUP ID, which is the USER GROUP ID collection. USER GROUP ID can be accessed through [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1). this parameter is valid only when `TargetType` is `USER_GROUP`.
     * @param string $QueueName The TDMQ CMQ QUEUE name. [the original CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, only TDMQ CMQ is recommended for use. this parameter is valid only when `TargetType` is `TDMQ_CMQ_QUEUE`.
     * @param string $TopicName The TDMQ CMQ TOPIC name. [original CMQ is offline](https://intl.cloud.tencent.com/document/product/1496/83970?from_cn_redirect=1). currently, only TDMQ CMQ is recommended for use. this parameter is valid only when `TargetType` is `TDMQ_CMQ_TOPIC`.
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
        if (array_key_exists("AutoScalingNotificationId",$param) and $param["AutoScalingNotificationId"] !== null) {
            $this->AutoScalingNotificationId = $param["AutoScalingNotificationId"];
        }

        if (array_key_exists("NotificationTypes",$param) and $param["NotificationTypes"] !== null) {
            $this->NotificationTypes = $param["NotificationTypes"];
        }

        if (array_key_exists("NotificationUserGroupIds",$param) and $param["NotificationUserGroupIds"] !== null) {
            $this->NotificationUserGroupIds = $param["NotificationUserGroupIds"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
