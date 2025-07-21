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
 * DeleteNotificationConfiguration request structure.
 *
 * @method string getAutoScalingNotificationId() Obtain The notification ID to be deleted. this is currently a required parameter. you can obtain the notification ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeNotificationConfigurations](https://intl.cloud.tencent.com/document/api/377/33183?from_cn_redirect=1) and retrieving the AutoScalingNotificationId from the returned information.
 * @method void setAutoScalingNotificationId(string $AutoScalingNotificationId) Set The notification ID to be deleted. this is currently a required parameter. you can obtain the notification ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeNotificationConfigurations](https://intl.cloud.tencent.com/document/api/377/33183?from_cn_redirect=1) and retrieving the AutoScalingNotificationId from the returned information.
 */
class DeleteNotificationConfigurationRequest extends AbstractModel
{
    /**
     * @var string The notification ID to be deleted. this is currently a required parameter. you can obtain the notification ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeNotificationConfigurations](https://intl.cloud.tencent.com/document/api/377/33183?from_cn_redirect=1) and retrieving the AutoScalingNotificationId from the returned information.
     */
    public $AutoScalingNotificationId;

    /**
     * @param string $AutoScalingNotificationId The notification ID to be deleted. this is currently a required parameter. you can obtain the notification ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeNotificationConfigurations](https://intl.cloud.tencent.com/document/api/377/33183?from_cn_redirect=1) and retrieving the AutoScalingNotificationId from the returned information.
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
    }
}
