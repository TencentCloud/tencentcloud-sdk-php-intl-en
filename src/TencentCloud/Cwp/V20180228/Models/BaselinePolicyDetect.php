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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Baseline detection policy
 *
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method integer getTaskId() Obtain Detection task Id
 * @method void setTaskId(integer $TaskId) Set Detection task Id
 * @method integer getHostCount() Obtain Associated hosts
 * @method void setHostCount(integer $HostCount) Set Associated hosts
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getFinishTime() Obtain End time
 * @method void setFinishTime(string $FinishTime) Set End time
 * @method string getPolicyName() Obtain Policy name
 * @method void setPolicyName(string $PolicyName) Set Policy name
 * @method integer getSuccessCount() Obtain Number of successful hosts.
 * @method void setSuccessCount(integer $SuccessCount) Set Number of successful hosts.
 * @method integer getFailedCount() Obtain Number of failed primary technologies
 * @method void setFailedCount(integer $FailedCount) Set Number of failed primary technologies
 * @method integer getTimeoutCount() Obtain Number of failed hosts.
 * @method void setTimeoutCount(integer $TimeoutCount) Set Number of failed hosts.
 * @method integer getPolicyDetectStatus() Obtain 1: Detecting 2: Detection completed
 * @method void setPolicyDetectStatus(integer $PolicyDetectStatus) Set 1: Detecting 2: Detection completed
 */
class BaselinePolicyDetect extends AbstractModel
{
    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var integer Detection task Id
     */
    public $TaskId;

    /**
     * @var integer Associated hosts
     */
    public $HostCount;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $FinishTime;

    /**
     * @var string Policy name
     */
    public $PolicyName;

    /**
     * @var integer Number of successful hosts.
     */
    public $SuccessCount;

    /**
     * @var integer Number of failed primary technologies
     */
    public $FailedCount;

    /**
     * @var integer Number of failed hosts.
     */
    public $TimeoutCount;

    /**
     * @var integer 1: Detecting 2: Detection completed
     */
    public $PolicyDetectStatus;

    /**
     * @param integer $PolicyId Policy ID
     * @param integer $TaskId Detection task Id
     * @param integer $HostCount Associated hosts
     * @param string $StartTime Start time
     * @param string $FinishTime End time
     * @param string $PolicyName Policy name
     * @param integer $SuccessCount Number of successful hosts.
     * @param integer $FailedCount Number of failed primary technologies
     * @param integer $TimeoutCount Number of failed hosts.
     * @param integer $PolicyDetectStatus 1: Detecting 2: Detection completed
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("TimeoutCount",$param) and $param["TimeoutCount"] !== null) {
            $this->TimeoutCount = $param["TimeoutCount"];
        }

        if (array_key_exists("PolicyDetectStatus",$param) and $param["PolicyDetectStatus"] !== null) {
            $this->PolicyDetectStatus = $param["PolicyDetectStatus"];
        }
    }
}
