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
 * ResumeInstanceRefresh request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID. obtain in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID. obtain in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
 * @method string getRefreshActivityId() Obtain Refresh activity ID. you can get the instance refresh activity ID by calling the api [DescribeRefreshActivities](https://intl.cloud.tencent.com/document/api/377/99175?from_cn_redirect=1) and retrieving the RefreshActivityId from the returned information.
 * @method void setRefreshActivityId(string $RefreshActivityId) Set Refresh activity ID. you can get the instance refresh activity ID by calling the api [DescribeRefreshActivities](https://intl.cloud.tencent.com/document/api/377/99175?from_cn_redirect=1) and retrieving the RefreshActivityId from the returned information.
 * @method string getResumeMode() Obtain Recovery mode of instances that have failed to be refreshed in the current batch. If there are no failed instances, this parameter is invalid. Default value: RETRY. Valid values: <li>RETRY: Retry instances that have failed to be refreshed in the current batch.</li> <li>CONTINUE: Skip instances that have failed to be refreshed in the current batch.</li>
 * @method void setResumeMode(string $ResumeMode) Set Recovery mode of instances that have failed to be refreshed in the current batch. If there are no failed instances, this parameter is invalid. Default value: RETRY. Valid values: <li>RETRY: Retry instances that have failed to be refreshed in the current batch.</li> <li>CONTINUE: Skip instances that have failed to be refreshed in the current batch.</li>
 */
class ResumeInstanceRefreshRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID. obtain in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
     */
    public $AutoScalingGroupId;

    /**
     * @var string Refresh activity ID. you can get the instance refresh activity ID by calling the api [DescribeRefreshActivities](https://intl.cloud.tencent.com/document/api/377/99175?from_cn_redirect=1) and retrieving the RefreshActivityId from the returned information.
     */
    public $RefreshActivityId;

    /**
     * @var string Recovery mode of instances that have failed to be refreshed in the current batch. If there are no failed instances, this parameter is invalid. Default value: RETRY. Valid values: <li>RETRY: Retry instances that have failed to be refreshed in the current batch.</li> <li>CONTINUE: Skip instances that have failed to be refreshed in the current batch.</li>
     */
    public $ResumeMode;

    /**
     * @param string $AutoScalingGroupId Scaling group ID. obtain in the following ways:.
<li>Query the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group).</li>.
<li>Specifies the scaling group ID obtained by calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.</li>.
     * @param string $RefreshActivityId Refresh activity ID. you can get the instance refresh activity ID by calling the api [DescribeRefreshActivities](https://intl.cloud.tencent.com/document/api/377/99175?from_cn_redirect=1) and retrieving the RefreshActivityId from the returned information.
     * @param string $ResumeMode Recovery mode of instances that have failed to be refreshed in the current batch. If there are no failed instances, this parameter is invalid. Default value: RETRY. Valid values: <li>RETRY: Retry instances that have failed to be refreshed in the current batch.</li> <li>CONTINUE: Skip instances that have failed to be refreshed in the current batch.</li>
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

        if (array_key_exists("RefreshActivityId",$param) and $param["RefreshActivityId"] !== null) {
            $this->RefreshActivityId = $param["RefreshActivityId"];
        }

        if (array_key_exists("ResumeMode",$param) and $param["ResumeMode"] !== null) {
            $this->ResumeMode = $param["ResumeMode"];
        }
    }
}
