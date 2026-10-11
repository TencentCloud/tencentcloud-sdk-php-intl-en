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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Auto scaling record.
 *
 * @method string getStrategyName() Obtain <p>Scaling rule name.</p>
 * @method void setStrategyName(string $StrategyName) Set <p>Scaling rule name.</p>
 * @method string getScaleAction() Obtain <p>&quot;SCALE_OUT&quot; and &quot;SCALE_IN&quot;, indicating scale-out and scale-in, respectively.</p>
 * @method void setScaleAction(string $ScaleAction) Set <p>&quot;SCALE_OUT&quot; and &quot;SCALE_IN&quot;, indicating scale-out and scale-in, respectively.</p>
 * @method string getActionStatus() Obtain <p>The value is &quot;SUCCESS&quot;, &quot;FAILED&quot;, &quot;PART_SUCCESS&quot;, or &quot;IN_PROCESS&quot;, indicating success, failure, partial success, and in-process, respectively.</p>
 * @method void setActionStatus(string $ActionStatus) Set <p>The value is &quot;SUCCESS&quot;, &quot;FAILED&quot;, &quot;PART_SUCCESS&quot;, or &quot;IN_PROCESS&quot;, indicating success, failure, partial success, and in-process, respectively.</p>
 * @method string getActionTime() Obtain <p>Flow trigger time.</p>
 * @method void setActionTime(string $ActionTime) Set <p>Flow trigger time.</p>
 * @method string getScaleInfo() Obtain <p>Scaling-related description.</p>
 * @method void setScaleInfo(string $ScaleInfo) Set <p>Scaling-related description.</p>
 * @method integer getExpectScaleNum() Obtain <p>Valid only when ScaleAction is SCALE_OUT.</p>
 * @method void setExpectScaleNum(integer $ExpectScaleNum) Set <p>Valid only when ScaleAction is SCALE_OUT.</p>
 * @method string getEndTime() Obtain <p>Flow end time.</p>
 * @method void setEndTime(string $EndTime) Set <p>Flow end time.</p>
 * @method integer getStrategyType() Obtain <p>Policy type. Load-based scaling or time-based scaling. 1 indicates load-based scaling, and 2 indicates time-based scaling.</p>
 * @method void setStrategyType(integer $StrategyType) Set <p>Policy type. Load-based scaling or time-based scaling. 1 indicates load-based scaling, and 2 indicates time-based scaling.</p>
 * @method string getSpecInfo() Obtain <p>Specifications information used during scale-out.</p>
 * @method void setSpecInfo(string $SpecInfo) Set <p>Specifications information used during scale-out.</p>
 * @method integer getCompensateFlag() Obtain <p>Compensatory scale-out. Valid values: 0 (disable) and 1 (enable).</p>
 * @method void setCompensateFlag(integer $CompensateFlag) Set <p>Compensatory scale-out. Valid values: 0 (disable) and 1 (enable).</p>
 * @method integer getCompensateCount() Obtain <p>Number of compensations.</p>
 * @method void setCompensateCount(integer $CompensateCount) Set <p>Number of compensations.</p>
 * @method integer getRetryCount() Obtain <p>Number of retries.</p>
 * @method void setRetryCount(integer $RetryCount) Set <p>Number of retries.</p>
 * @method string getRetryInfo() Obtain <p>Retry information.</p>
 * @method void setRetryInfo(string $RetryInfo) Set <p>Retry information.</p>
 * @method string getRetryEnReason() Obtain <p>Retry description in English.</p>
 * @method void setRetryEnReason(string $RetryEnReason) Set <p>Retry description in English.</p>
 * @method string getRetryReason() Obtain <p>Retry description.</p>
 * @method void setRetryReason(string $RetryReason) Set <p>Retry description.</p>
 * @method integer getShortageClass() Obtain <p>Missing category.</p>
 * @method void setShortageClass(integer $ShortageClass) Set <p>Missing category.</p>
 */
class AutoScaleRecord extends AbstractModel
{
    /**
     * @var string <p>Scaling rule name.</p>
     */
    public $StrategyName;

    /**
     * @var string <p>&quot;SCALE_OUT&quot; and &quot;SCALE_IN&quot;, indicating scale-out and scale-in, respectively.</p>
     */
    public $ScaleAction;

    /**
     * @var string <p>The value is &quot;SUCCESS&quot;, &quot;FAILED&quot;, &quot;PART_SUCCESS&quot;, or &quot;IN_PROCESS&quot;, indicating success, failure, partial success, and in-process, respectively.</p>
     */
    public $ActionStatus;

    /**
     * @var string <p>Flow trigger time.</p>
     */
    public $ActionTime;

    /**
     * @var string <p>Scaling-related description.</p>
     */
    public $ScaleInfo;

    /**
     * @var integer <p>Valid only when ScaleAction is SCALE_OUT.</p>
     */
    public $ExpectScaleNum;

    /**
     * @var string <p>Flow end time.</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Policy type. Load-based scaling or time-based scaling. 1 indicates load-based scaling, and 2 indicates time-based scaling.</p>
     */
    public $StrategyType;

    /**
     * @var string <p>Specifications information used during scale-out.</p>
     */
    public $SpecInfo;

    /**
     * @var integer <p>Compensatory scale-out. Valid values: 0 (disable) and 1 (enable).</p>
     */
    public $CompensateFlag;

    /**
     * @var integer <p>Number of compensations.</p>
     */
    public $CompensateCount;

    /**
     * @var integer <p>Number of retries.</p>
     */
    public $RetryCount;

    /**
     * @var string <p>Retry information.</p>
     */
    public $RetryInfo;

    /**
     * @var string <p>Retry description in English.</p>
     */
    public $RetryEnReason;

    /**
     * @var string <p>Retry description.</p>
     */
    public $RetryReason;

    /**
     * @var integer <p>Missing category.</p>
     */
    public $ShortageClass;

    /**
     * @param string $StrategyName <p>Scaling rule name.</p>
     * @param string $ScaleAction <p>&quot;SCALE_OUT&quot; and &quot;SCALE_IN&quot;, indicating scale-out and scale-in, respectively.</p>
     * @param string $ActionStatus <p>The value is &quot;SUCCESS&quot;, &quot;FAILED&quot;, &quot;PART_SUCCESS&quot;, or &quot;IN_PROCESS&quot;, indicating success, failure, partial success, and in-process, respectively.</p>
     * @param string $ActionTime <p>Flow trigger time.</p>
     * @param string $ScaleInfo <p>Scaling-related description.</p>
     * @param integer $ExpectScaleNum <p>Valid only when ScaleAction is SCALE_OUT.</p>
     * @param string $EndTime <p>Flow end time.</p>
     * @param integer $StrategyType <p>Policy type. Load-based scaling or time-based scaling. 1 indicates load-based scaling, and 2 indicates time-based scaling.</p>
     * @param string $SpecInfo <p>Specifications information used during scale-out.</p>
     * @param integer $CompensateFlag <p>Compensatory scale-out. Valid values: 0 (disable) and 1 (enable).</p>
     * @param integer $CompensateCount <p>Number of compensations.</p>
     * @param integer $RetryCount <p>Number of retries.</p>
     * @param string $RetryInfo <p>Retry information.</p>
     * @param string $RetryEnReason <p>Retry description in English.</p>
     * @param string $RetryReason <p>Retry description.</p>
     * @param integer $ShortageClass <p>Missing category.</p>
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

        if (array_key_exists("RetryEnReason",$param) and $param["RetryEnReason"] !== null) {
            $this->RetryEnReason = $param["RetryEnReason"];
        }

        if (array_key_exists("RetryReason",$param) and $param["RetryReason"] !== null) {
            $this->RetryReason = $param["RetryReason"];
        }

        if (array_key_exists("ShortageClass",$param) and $param["ShortageClass"] !== null) {
            $this->ShortageClass = $param["ShortageClass"];
        }
    }
}
