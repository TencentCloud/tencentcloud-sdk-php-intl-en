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
 * DescribeAccountLimits response structure.
 *
 * @method integer getMaxNumberOfLaunchConfigurations() Obtain Maximum number of launch configurations allowed for creation by the user account
 * @method void setMaxNumberOfLaunchConfigurations(integer $MaxNumberOfLaunchConfigurations) Set Maximum number of launch configurations allowed for creation by the user account
 * @method integer getNumberOfLaunchConfigurations() Obtain Current number of launch configurations under the user account
 * @method void setNumberOfLaunchConfigurations(integer $NumberOfLaunchConfigurations) Set Current number of launch configurations under the user account
 * @method integer getMaxNumberOfAutoScalingGroups() Obtain Maximum number of auto scaling groups allowed for creation by the user account
 * @method void setMaxNumberOfAutoScalingGroups(integer $MaxNumberOfAutoScalingGroups) Set Maximum number of auto scaling groups allowed for creation by the user account
 * @method integer getNumberOfAutoScalingGroups() Obtain Current number of auto scaling groups under the user account
 * @method void setNumberOfAutoScalingGroups(integer $NumberOfAutoScalingGroups) Set Current number of auto scaling groups under the user account
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeAccountLimitsResponse extends AbstractModel
{
    /**
     * @var integer Maximum number of launch configurations allowed for creation by the user account
     */
    public $MaxNumberOfLaunchConfigurations;

    /**
     * @var integer Current number of launch configurations under the user account
     */
    public $NumberOfLaunchConfigurations;

    /**
     * @var integer Maximum number of auto scaling groups allowed for creation by the user account
     */
    public $MaxNumberOfAutoScalingGroups;

    /**
     * @var integer Current number of auto scaling groups under the user account
     */
    public $NumberOfAutoScalingGroups;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $MaxNumberOfLaunchConfigurations Maximum number of launch configurations allowed for creation by the user account
     * @param integer $NumberOfLaunchConfigurations Current number of launch configurations under the user account
     * @param integer $MaxNumberOfAutoScalingGroups Maximum number of auto scaling groups allowed for creation by the user account
     * @param integer $NumberOfAutoScalingGroups Current number of auto scaling groups under the user account
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("MaxNumberOfLaunchConfigurations",$param) and $param["MaxNumberOfLaunchConfigurations"] !== null) {
            $this->MaxNumberOfLaunchConfigurations = $param["MaxNumberOfLaunchConfigurations"];
        }

        if (array_key_exists("NumberOfLaunchConfigurations",$param) and $param["NumberOfLaunchConfigurations"] !== null) {
            $this->NumberOfLaunchConfigurations = $param["NumberOfLaunchConfigurations"];
        }

        if (array_key_exists("MaxNumberOfAutoScalingGroups",$param) and $param["MaxNumberOfAutoScalingGroups"] !== null) {
            $this->MaxNumberOfAutoScalingGroups = $param["MaxNumberOfAutoScalingGroups"];
        }

        if (array_key_exists("NumberOfAutoScalingGroups",$param) and $param["NumberOfAutoScalingGroups"] !== null) {
            $this->NumberOfAutoScalingGroups = $param["NumberOfAutoScalingGroups"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
