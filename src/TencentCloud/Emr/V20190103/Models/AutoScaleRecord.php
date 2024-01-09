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
 * Elastic Scaling Record
 *
 * @method string getStrategyName() Obtain Name of the scale-in or scale-out rule.
 * @method void setStrategyName(string $StrategyName) Set Name of the scale-in or scale-out rule.
 * @method string getScaleAction() Obtain "SCALE_OUT" and "SCALE_IN", representing expansion and reduction respectively.
 * @method void setScaleAction(string $ScaleAction) Set "SCALE_OUT" and "SCALE_IN", representing expansion and reduction respectively.
 * @method string getActionStatus() Obtain The values are "SUCCESS", "FAILED", "PART_SUCCESS", "IN_PROCESS", which indicate success, failure, partial success, and in-progress, respectively.
 * @method void setActionStatus(string $ActionStatus) Set The values are "SUCCESS", "FAILED", "PART_SUCCESS", "IN_PROCESS", which indicate success, failure, partial success, and in-progress, respectively.
 * @method string getActionTime() Obtain Process initiation time.
 * @method void setActionTime(string $ActionTime) Set Process initiation time.
 * @method string getScaleInfo() Obtain Description related to auto-scaling.
 * @method void setScaleInfo(string $ScaleInfo) Set Description related to auto-scaling.
 * @method integer getExpectScaleNum() Obtain Valid only when ScaleAction is SCALE_OUT.
 * @method void setExpectScaleNum(integer $ExpectScaleNum) Set Valid only when ScaleAction is SCALE_OUT.
 * @method string getEndTime() Obtain Process termination time.
 * @method void setEndTime(string $EndTime) Set Process termination time.
 * @method integer getStrategyType() Obtain Policy type. Valid values: 1 (load-based scaling), 2 (time-based scaling).
 * @method void setStrategyType(integer $StrategyType) Set Policy type. Valid values: 1 (load-based scaling), 2 (time-based scaling).
 * @method string getSpecInfo() Obtain Specification information used during scale-out.
 * @method void setSpecInfo(string $SpecInfo) Set Specification information used during scale-out.
 * @method integer getCompensateFlag() Obtain Compensatory scale-out. Valid values: 0 (disabled), 1 (enabled).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompensateFlag(integer $CompensateFlag) Set Compensatory scale-out. Valid values: 0 (disabled), 1 (enabled).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCompensateCount() Obtain Number of compensations
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompensateCount(integer $CompensateCount) Set Number of compensations
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRetryCount() Obtain 
 * @method void setRetryCount(integer $RetryCount) Set 
 * @method string getRetryInfo() Obtain 
 * @method void setRetryInfo(string $RetryInfo) Set 
 */
class AutoScaleRecord extends AbstractModel
{
    /**
     * @var string Name of the scale-in or scale-out rule.
     */
    public $StrategyName;

    /**
     * @var string "SCALE_OUT" and "SCALE_IN", representing expansion and reduction respectively.
     */
    public $ScaleAction;

    /**
     * @var string The values are "SUCCESS", "FAILED", "PART_SUCCESS", "IN_PROCESS", which indicate success, failure, partial success, and in-progress, respectively.
     */
    public $ActionStatus;

    /**
     * @var string Process initiation time.
     */
    public $ActionTime;

    /**
     * @var string Description related to auto-scaling.
     */
    public $ScaleInfo;

    /**
     * @var integer Valid only when ScaleAction is SCALE_OUT.
     */
    public $ExpectScaleNum;

    /**
     * @var string Process termination time.
     */
    public $EndTime;

    /**
     * @var integer Policy type. Valid values: 1 (load-based scaling), 2 (time-based scaling).
     */
    public $StrategyType;

    /**
     * @var string Specification information used during scale-out.
     */
    public $SpecInfo;

    /**
     * @var integer Compensatory scale-out. Valid values: 0 (disabled), 1 (enabled).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompensateFlag;

    /**
     * @var integer Number of compensations
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompensateCount;

    /**
     * @var integer 
     */
    public $RetryCount;

    /**
     * @var string 
     */
    public $RetryInfo;

    /**
     * @param string $StrategyName Name of the scale-in or scale-out rule.
     * @param string $ScaleAction "SCALE_OUT" and "SCALE_IN", representing expansion and reduction respectively.
     * @param string $ActionStatus The values are "SUCCESS", "FAILED", "PART_SUCCESS", "IN_PROCESS", which indicate success, failure, partial success, and in-progress, respectively.
     * @param string $ActionTime Process initiation time.
     * @param string $ScaleInfo Description related to auto-scaling.
     * @param integer $ExpectScaleNum Valid only when ScaleAction is SCALE_OUT.
     * @param string $EndTime Process termination time.
     * @param integer $StrategyType Policy type. Valid values: 1 (load-based scaling), 2 (time-based scaling).
     * @param string $SpecInfo Specification information used during scale-out.
     * @param integer $CompensateFlag Compensatory scale-out. Valid values: 0 (disabled), 1 (enabled).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CompensateCount Number of compensations
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RetryCount 
     * @param string $RetryInfo 
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
        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("ScaleAction",$param) and $param["ScaleAction"] !== null) {
            $this->ScaleAction = $param["ScaleAction"];
        }

        if (array_key_exists("ActionStatus",$param) and $param["ActionStatus"] !== null) {
            $this->ActionStatus = $param["ActionStatus"];
        }

        if (array_key_exists("ActionTime",$param) and $param["ActionTime"] !== null) {
            $this->ActionTime = $param["ActionTime"];
        }

        if (array_key_exists("ScaleInfo",$param) and $param["ScaleInfo"] !== null) {
            $this->ScaleInfo = $param["ScaleInfo"];
        }

        if (array_key_exists("ExpectScaleNum",$param) and $param["ExpectScaleNum"] !== null) {
            $this->ExpectScaleNum = $param["ExpectScaleNum"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("SpecInfo",$param) and $param["SpecInfo"] !== null) {
            $this->SpecInfo = $param["SpecInfo"];
        }

        if (array_key_exists("CompensateFlag",$param) and $param["CompensateFlag"] !== null) {
            $this->CompensateFlag = $param["CompensateFlag"];
        }

        if (array_key_exists("CompensateCount",$param) and $param["CompensateCount"] !== null) {
            $this->CompensateCount = $param["CompensateCount"];
        }

        if (array_key_exists("RetryCount",$param) and $param["RetryCount"] !== null) {
            $this->RetryCount = $param["RetryCount"];
        }

        if (array_key_exists("RetryInfo",$param) and $param["RetryInfo"] !== null) {
            $this->RetryInfo = $param["RetryInfo"];
        }
    }
}
