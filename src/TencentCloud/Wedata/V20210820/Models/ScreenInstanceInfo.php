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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance Statistics Display
 *
 * @method integer getCountTag() Obtain Statistical Indicator 0: All Instances, 1: Current Day, 2: YesterdayNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCountTag(integer $CountTag) Set Statistical Indicator 0: All Instances, 1: Current Day, 2: YesterdayNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTotalNum() Obtain Total numberNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTotalNum(integer $TotalNum) Set Total numberNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRunningNum() Obtain RunningNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setRunningNum(integer $RunningNum) Set RunningNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getWaitRunningNum() Obtain Pending Execution
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWaitRunningNum(integer $WaitRunningNum) Set Pending Execution
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDependencyNum() Obtain Wait for Upstream
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDependencyNum(integer $DependencyNum) Set Wait for Upstream
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getWaitEventNum() Obtain Waiting for Event
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWaitEventNum(string $WaitEventNum) Set Waiting for Event
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStoppingNum() Obtain Terminating
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStoppingNum(integer $StoppingNum) Set Terminating
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSucceedNum() Obtain SuccessNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setSucceedNum(integer $SucceedNum) Set SuccessNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getFailedNum() Obtain Failed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFailedNum(integer $FailedNum) Set Failed
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ScreenInstanceInfo extends AbstractModel
{
    /**
     * @var integer Statistical Indicator 0: All Instances, 1: Current Day, 2: YesterdayNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CountTag;

    /**
     * @var integer Total numberNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TotalNum;

    /**
     * @var integer RunningNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $RunningNum;

    /**
     * @var integer Pending Execution
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WaitRunningNum;

    /**
     * @var integer Wait for Upstream
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DependencyNum;

    /**
     * @var string Waiting for Event
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WaitEventNum;

    /**
     * @var integer Terminating
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StoppingNum;

    /**
     * @var integer SuccessNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $SucceedNum;

    /**
     * @var integer Failed
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FailedNum;

    /**
     * @param integer $CountTag Statistical Indicator 0: All Instances, 1: Current Day, 2: YesterdayNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TotalNum Total numberNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RunningNum RunningNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $WaitRunningNum Pending Execution
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DependencyNum Wait for Upstream
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $WaitEventNum Waiting for Event
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $StoppingNum Terminating
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SucceedNum SuccessNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $FailedNum Failed
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("CountTag",$param) and $param["CountTag"] !== null) {
            $this->CountTag = $param["CountTag"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("RunningNum",$param) and $param["RunningNum"] !== null) {
            $this->RunningNum = $param["RunningNum"];
        }

        if (array_key_exists("WaitRunningNum",$param) and $param["WaitRunningNum"] !== null) {
            $this->WaitRunningNum = $param["WaitRunningNum"];
        }

        if (array_key_exists("DependencyNum",$param) and $param["DependencyNum"] !== null) {
            $this->DependencyNum = $param["DependencyNum"];
        }

        if (array_key_exists("WaitEventNum",$param) and $param["WaitEventNum"] !== null) {
            $this->WaitEventNum = $param["WaitEventNum"];
        }

        if (array_key_exists("StoppingNum",$param) and $param["StoppingNum"] !== null) {
            $this->StoppingNum = $param["StoppingNum"];
        }

        if (array_key_exists("SucceedNum",$param) and $param["SucceedNum"] !== null) {
            $this->SucceedNum = $param["SucceedNum"];
        }

        if (array_key_exists("FailedNum",$param) and $param["FailedNum"] !== null) {
            $this->FailedNum = $param["FailedNum"];
        }
    }
}
