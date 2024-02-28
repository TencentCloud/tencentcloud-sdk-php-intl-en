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
 * ResumeInstanceRefresh request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID.
 * @method string getRefreshActivityId() Obtain Refresh activity ID.
 * @method void setRefreshActivityId(string $RefreshActivityId) Set Refresh activity ID.
 * @method string getResumeMode() Obtain The recovery method for the current batch's failed instances. If there are no failed instances, this parameter becomes invalid. Default value: RETRY. Valid values: <br><li>RETRY: Retry refreshing failed instances in the current batch.</li> <li>CONTINUE: Skip failed instances in the current batch.
 * @method void setResumeMode(string $ResumeMode) Set The recovery method for the current batch's failed instances. If there are no failed instances, this parameter becomes invalid. Default value: RETRY. Valid values: <br><li>RETRY: Retry refreshing failed instances in the current batch.</li> <li>CONTINUE: Skip failed instances in the current batch.
 */
class ResumeInstanceRefreshRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID.
     */
    public $AutoScalingGroupId;

    /**
     * @var string Refresh activity ID.
     */
    public $RefreshActivityId;

    /**
     * @var string The recovery method for the current batch's failed instances. If there are no failed instances, this parameter becomes invalid. Default value: RETRY. Valid values: <br><li>RETRY: Retry refreshing failed instances in the current batch.</li> <li>CONTINUE: Skip failed instances in the current batch.
     */
    public $ResumeMode;

    /**
     * @param string $AutoScalingGroupId Scaling group ID.
     * @param string $RefreshActivityId Refresh activity ID.
     * @param string $ResumeMode The recovery method for the current batch's failed instances. If there are no failed instances, this parameter becomes invalid. Default value: RETRY. Valid values: <br><li>RETRY: Retry refreshing failed instances in the current batch.</li> <li>CONTINUE: Skip failed instances in the current batch.
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
