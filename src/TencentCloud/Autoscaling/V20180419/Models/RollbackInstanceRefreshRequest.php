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
 * RollbackInstanceRefresh request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID. you can obtain available scaling group ids in the following ways. 
<li>Query the scaling group ID by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/group">console</a>.</li>.
<li>Obtain the scaling group ID by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID. you can obtain available scaling group ids in the following ways. 
<li>Query the scaling group ID by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/group">console</a>.</li>.
<li>Obtain the scaling group ID by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
 * @method RefreshSettings getRefreshSettings() Obtain Refresh settings.
 * @method void setRefreshSettings(RefreshSettings $RefreshSettings) Set Refresh settings.
 * @method string getOriginRefreshActivityId() Obtain The original refresh activity ID. you can obtain the original refresh activity ID by calling the api [DescribeRefreshActivities](https://intl.cloud.tencent.com/document/api/377/99175?from_cn_redirect=1) and retrieving the OriginRefreshActivityId from the returned information.
 * @method void setOriginRefreshActivityId(string $OriginRefreshActivityId) Set The original refresh activity ID. you can obtain the original refresh activity ID by calling the api [DescribeRefreshActivities](https://intl.cloud.tencent.com/document/api/377/99175?from_cn_redirect=1) and retrieving the OriginRefreshActivityId from the returned information.
 * @method string getRefreshMode() Obtain Refresh mode, currently, only rolling updates are supported, with the default value being ROLLING_UPDATE_RESET.
 * @method void setRefreshMode(string $RefreshMode) Set Refresh mode, currently, only rolling updates are supported, with the default value being ROLLING_UPDATE_RESET.
 */
class RollbackInstanceRefreshRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID. you can obtain available scaling group ids in the following ways. 
<li>Query the scaling group ID by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/group">console</a>.</li>.
<li>Obtain the scaling group ID by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
     */
    public $AutoScalingGroupId;

    /**
     * @var RefreshSettings Refresh settings.
     */
    public $RefreshSettings;

    /**
     * @var string The original refresh activity ID. you can obtain the original refresh activity ID by calling the api [DescribeRefreshActivities](https://intl.cloud.tencent.com/document/api/377/99175?from_cn_redirect=1) and retrieving the OriginRefreshActivityId from the returned information.
     */
    public $OriginRefreshActivityId;

    /**
     * @var string Refresh mode, currently, only rolling updates are supported, with the default value being ROLLING_UPDATE_RESET.
     */
    public $RefreshMode;

    /**
     * @param string $AutoScalingGroupId Scaling group ID. you can obtain available scaling group ids in the following ways. 
<li>Query the scaling group ID by logging in to the <a href="https://console.cloud.tencent.com/autoscaling/group">console</a>.</li>.
<li>Obtain the scaling group ID by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
     * @param RefreshSettings $RefreshSettings Refresh settings.
     * @param string $OriginRefreshActivityId The original refresh activity ID. you can obtain the original refresh activity ID by calling the api [DescribeRefreshActivities](https://intl.cloud.tencent.com/document/api/377/99175?from_cn_redirect=1) and retrieving the OriginRefreshActivityId from the returned information.
     * @param string $RefreshMode Refresh mode, currently, only rolling updates are supported, with the default value being ROLLING_UPDATE_RESET.
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

        if (array_key_exists("RefreshSettings",$param) and $param["RefreshSettings"] !== null) {
            $this->RefreshSettings = new RefreshSettings();
            $this->RefreshSettings->deserialize($param["RefreshSettings"]);
        }

        if (array_key_exists("OriginRefreshActivityId",$param) and $param["OriginRefreshActivityId"] !== null) {
            $this->OriginRefreshActivityId = $param["OriginRefreshActivityId"];
        }

        if (array_key_exists("RefreshMode",$param) and $param["RefreshMode"] !== null) {
            $this->RefreshMode = $param["RefreshMode"];
        }
    }
}
