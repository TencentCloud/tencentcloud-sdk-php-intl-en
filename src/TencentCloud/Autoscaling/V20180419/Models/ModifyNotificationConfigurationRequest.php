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
 * ModifyNotificationConfiguration request structure.
 *
 * @method string getAutoScalingNotificationId() Obtain ID of the notification to be modified.
 * @method void setAutoScalingNotificationId(string $AutoScalingNotificationId) Set ID of the notification to be modified.
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
 * @method array getNotificationUserGroupIds() Obtain Notification group ID, which is the set of user group IDs. You can query the user group IDs through the [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1) API.
 * @method void setNotificationUserGroupIds(array $NotificationUserGroupIds) Set Notification group ID, which is the set of user group IDs. You can query the user group IDs through the [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1) API.
 * @method string getQueueName() Obtain CMQ or TDMQ CMQ queue name.
 * @method void setQueueName(string $QueueName) Set CMQ or TDMQ CMQ queue name.
 * @method string getTopicName() Obtain CMQ or TDMQ CMQ toipc name.
 * @method void setTopicName(string $TopicName) Set CMQ or TDMQ CMQ toipc name.
 */
class ModifyNotificationConfigurationRequest extends AbstractModel
{
    /**
     * @var string ID of the notification to be modified.
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
     * @var array Notification group ID, which is the set of user group IDs. You can query the user group IDs through the [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1) API.
     */
    public $NotificationUserGroupIds;

    /**
     * @var string CMQ or TDMQ CMQ queue name.
     */
    public $QueueName;

    /**
     * @var string CMQ or TDMQ CMQ toipc name.
     */
    public $TopicName;

    /**
     * @param string $AutoScalingNotificationId ID of the notification to be modified.
     * @param array $NotificationTypes Notification type, i.e., the set of types of notifications to be subscribed to. Value range:
<li>SCALE_OUT_SUCCESSFUL: scale-out succeeded</li>
<li>SCALE_OUT_FAILED: scale-out failed</li>
<li>SCALE_IN_SUCCESSFUL: scale-in succeeded</li>
<li>SCALE_IN_FAILED: scale-in failed</li>
<li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL: unhealthy instance replacement succeeded</li>
<li>REPLACE_UNHEALTHY_INSTANCE_FAILED: unhealthy instance replacement failed</li>
     * @param array $NotificationUserGroupIds Notification group ID, which is the set of user group IDs. You can query the user group IDs through the [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1) API.
     * @param string $QueueName CMQ or TDMQ CMQ queue name.
     * @param string $TopicName CMQ or TDMQ CMQ toipc name.
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
