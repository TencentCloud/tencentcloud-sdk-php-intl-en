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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceSchedule response structure.
 *
 * @method boolean getOpenSwitch() Obtain Whether to enable the resource scheduling feature
 * @method void setOpenSwitch(boolean $OpenSwitch) Set Whether to enable the resource scheduling feature
 * @method string getScheduler() Obtain The resource scheduler in service
 * @method void setScheduler(string $Scheduler) Set The resource scheduler in service
 * @method string getFSInfo() Obtain Fair Scheduler information
 * @method void setFSInfo(string $FSInfo) Set Fair Scheduler information
 * @method string getCSInfo() Obtain Capacity Scheduler information
 * @method void setCSInfo(string $CSInfo) Set Capacity Scheduler information
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeResourceScheduleResponse extends AbstractModel
{
    /**
     * @var boolean Whether to enable the resource scheduling feature
     */
    public $OpenSwitch;

    /**
     * @var string The resource scheduler in service
     */
    public $Scheduler;

    /**
     * @var string Fair Scheduler information
     */
    public $FSInfo;

    /**
     * @var string Capacity Scheduler information
     */
    public $CSInfo;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $OpenSwitch Whether to enable the resource scheduling feature
     * @param string $Scheduler The resource scheduler in service
     * @param string $FSInfo Fair Scheduler information
     * @param string $CSInfo Capacity Scheduler information
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("OpenSwitch",$param) and $param["OpenSwitch"] !== null) {
            $this->OpenSwitch = $param["OpenSwitch"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("FSInfo",$param) and $param["FSInfo"] !== null) {
            $this->FSInfo = $param["FSInfo"];
        }

        if (array_key_exists("CSInfo",$param) and $param["CSInfo"] !== null) {
            $this->CSInfo = $param["CSInfo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
