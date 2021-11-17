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
 * AS event notification
 *
 * @method string getAutoScalingGroupId() Obtain Auto scaling group ID.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Auto scaling group ID.
 * @method array getNotificationUserGroupIds() Obtain List of user group IDs.
 * @method void setNotificationUserGroupIds(array $NotificationUserGroupIds) Set List of user group IDs.
 * @method array getNotificationTypes() Obtain List of notification events.
 * @method void setNotificationTypes(array $NotificationTypes) Set List of notification events.
 * @method string getAutoScalingNotificationId() Obtain Event notification ID.
 * @method void setAutoScalingNotificationId(string $AutoScalingNotificationId) Set Event notification ID.
 * @method string getTargetType() Obtain Notification receiver type.
 * @method void setTargetType(string $TargetType) Set Notification receiver type.
 * @method string getQueueName() Obtain CMQ queue name.
 * @method void setQueueName(string $QueueName) Set CMQ queue name.
 * @method string getTopicName() Obtain CMQ topic name.
 * @method void setTopicName(string $TopicName) Set CMQ topic name.
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
     * @var array List of notification events.
     */
    public $NotificationTypes;

    /**
     * @var string Event notification ID.
     */
    public $AutoScalingNotificationId;

    /**
     * @var string Notification receiver type.
     */
    public $TargetType;

    /**
     * @var string CMQ queue name.
     */
    public $QueueName;

    /**
     * @var string CMQ topic name.
     */
    public $TopicName;

    /**
     * @param string $AutoScalingGroupId Auto scaling group ID.
     * @param array $NotificationUserGroupIds List of user group IDs.
     * @param array $NotificationTypes List of notification events.
     * @param string $AutoScalingNotificationId Event notification ID.
     * @param string $TargetType Notification receiver type.
     * @param string $QueueName CMQ queue name.
     * @param string $TopicName CMQ topic name.
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
