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
 * Rule Execution Result
 *
 * @method integer getTotalCnt() Obtain Total Rule Executions
 * @method void setTotalCnt(integer $TotalCnt) Set Total Rule Executions
 * @method integer getLastTotalCnt() Obtain Quarter-over-quarter total rule executions
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastTotalCnt(integer $LastTotalCnt) Set Quarter-over-quarter total rule executions
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getTotalCntRatio() Obtain Percentage of total rule executions
 * @method void setTotalCntRatio(float $TotalCntRatio) Set Percentage of total rule executions
 * @method float getLastTotalCntRatio() Obtain Quarter-over-quarter change in total rule executions
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastTotalCntRatio(float $LastTotalCntRatio) Set Quarter-over-quarter change in total rule executions
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTriggerCnt() Obtain Number of rule triggers
 * @method void setTriggerCnt(integer $TriggerCnt) Set Number of rule triggers
 * @method integer getLastTriggerCnt() Obtain Quarter-over-quarter number of rule triggers
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastTriggerCnt(integer $LastTriggerCnt) Set Quarter-over-quarter number of rule triggers
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getTriggerCntRatio() Obtain Percentage of triggers in total
 * @method void setTriggerCntRatio(float $TriggerCntRatio) Set Percentage of triggers in total
 * @method float getLastTriggerCntRatio() Obtain Quarter-over-quarter change in rule triggers
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastTriggerCntRatio(float $LastTriggerCntRatio) Set Quarter-over-quarter change in rule triggers
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getAlarmCnt() Obtain Number of rule alerts
 * @method void setAlarmCnt(integer $AlarmCnt) Set Number of rule alerts
 * @method integer getLastAlarmCnt() Obtain Quarter-over-quarter number of rule alerts
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastAlarmCnt(integer $LastAlarmCnt) Set Quarter-over-quarter number of rule alerts
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getAlarmCntRatio() Obtain Percentage of alerts in total
 * @method void setAlarmCntRatio(float $AlarmCntRatio) Set Percentage of alerts in total
 * @method float getLastAlarmCntRatio() Obtain Quarter-over-quarter change in alert numbers
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastAlarmCntRatio(float $LastAlarmCntRatio) Set Quarter-over-quarter change in alert numbers
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getPipelineCnt() Obtain Number of block occurrences
 * @method void setPipelineCnt(integer $PipelineCnt) Set Number of block occurrences
 * @method integer getLastPipelineCnt() Obtain Quarter-over-quarter number of block occurrences
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastPipelineCnt(integer $LastPipelineCnt) Set Quarter-over-quarter number of block occurrences
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getPipelineCntRatio() Obtain Percentage of blocks in total
 * @method void setPipelineCntRatio(float $PipelineCntRatio) Set Percentage of blocks in total
 * @method float getLastPipelineCntRatio() Obtain Quarter-over-quarter change in block occurrences
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastPipelineCntRatio(float $LastPipelineCntRatio) Set Quarter-over-quarter change in block occurrences
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RuleExecStat extends AbstractModel
{
    /**
     * @var integer Total Rule Executions
     */
    public $TotalCnt;

    /**
     * @var integer Quarter-over-quarter total rule executions
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastTotalCnt;

    /**
     * @var float Percentage of total rule executions
     */
    public $TotalCntRatio;

    /**
     * @var float Quarter-over-quarter change in total rule executions
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastTotalCntRatio;

    /**
     * @var integer Number of rule triggers
     */
    public $TriggerCnt;

    /**
     * @var integer Quarter-over-quarter number of rule triggers
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastTriggerCnt;

    /**
     * @var float Percentage of triggers in total
     */
    public $TriggerCntRatio;

    /**
     * @var float Quarter-over-quarter change in rule triggers
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastTriggerCntRatio;

    /**
     * @var integer Number of rule alerts
     */
    public $AlarmCnt;

    /**
     * @var integer Quarter-over-quarter number of rule alerts
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastAlarmCnt;

    /**
     * @var float Percentage of alerts in total
     */
    public $AlarmCntRatio;

    /**
     * @var float Quarter-over-quarter change in alert numbers
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastAlarmCntRatio;

    /**
     * @var integer Number of block occurrences
     */
    public $PipelineCnt;

    /**
     * @var integer Quarter-over-quarter number of block occurrences
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastPipelineCnt;

    /**
     * @var float Percentage of blocks in total
     */
    public $PipelineCntRatio;

    /**
     * @var float Quarter-over-quarter change in block occurrences
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastPipelineCntRatio;

    /**
     * @param integer $TotalCnt Total Rule Executions
     * @param integer $LastTotalCnt Quarter-over-quarter total rule executions
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $TotalCntRatio Percentage of total rule executions
     * @param float $LastTotalCntRatio Quarter-over-quarter change in total rule executions
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TriggerCnt Number of rule triggers
     * @param integer $LastTriggerCnt Quarter-over-quarter number of rule triggers
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $TriggerCntRatio Percentage of triggers in total
     * @param float $LastTriggerCntRatio Quarter-over-quarter change in rule triggers
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $AlarmCnt Number of rule alerts
     * @param integer $LastAlarmCnt Quarter-over-quarter number of rule alerts
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $AlarmCntRatio Percentage of alerts in total
     * @param float $LastAlarmCntRatio Quarter-over-quarter change in alert numbers
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $PipelineCnt Number of block occurrences
     * @param integer $LastPipelineCnt Quarter-over-quarter number of block occurrences
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $PipelineCntRatio Percentage of blocks in total
     * @param float $LastPipelineCntRatio Quarter-over-quarter change in block occurrences
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
        if (array_key_exists("TotalCnt",$param) and $param["TotalCnt"] !== null) {
            $this->TotalCnt = $param["TotalCnt"];
        }

        if (array_key_exists("LastTotalCnt",$param) and $param["LastTotalCnt"] !== null) {
            $this->LastTotalCnt = $param["LastTotalCnt"];
        }

        if (array_key_exists("TotalCntRatio",$param) and $param["TotalCntRatio"] !== null) {
            $this->TotalCntRatio = $param["TotalCntRatio"];
        }

        if (array_key_exists("LastTotalCntRatio",$param) and $param["LastTotalCntRatio"] !== null) {
            $this->LastTotalCntRatio = $param["LastTotalCntRatio"];
        }

        if (array_key_exists("TriggerCnt",$param) and $param["TriggerCnt"] !== null) {
            $this->TriggerCnt = $param["TriggerCnt"];
        }

        if (array_key_exists("LastTriggerCnt",$param) and $param["LastTriggerCnt"] !== null) {
            $this->LastTriggerCnt = $param["LastTriggerCnt"];
        }

        if (array_key_exists("TriggerCntRatio",$param) and $param["TriggerCntRatio"] !== null) {
            $this->TriggerCntRatio = $param["TriggerCntRatio"];
        }

        if (array_key_exists("LastTriggerCntRatio",$param) and $param["LastTriggerCntRatio"] !== null) {
            $this->LastTriggerCntRatio = $param["LastTriggerCntRatio"];
        }

        if (array_key_exists("AlarmCnt",$param) and $param["AlarmCnt"] !== null) {
            $this->AlarmCnt = $param["AlarmCnt"];
        }

        if (array_key_exists("LastAlarmCnt",$param) and $param["LastAlarmCnt"] !== null) {
            $this->LastAlarmCnt = $param["LastAlarmCnt"];
        }

        if (array_key_exists("AlarmCntRatio",$param) and $param["AlarmCntRatio"] !== null) {
            $this->AlarmCntRatio = $param["AlarmCntRatio"];
        }

        if (array_key_exists("LastAlarmCntRatio",$param) and $param["LastAlarmCntRatio"] !== null) {
            $this->LastAlarmCntRatio = $param["LastAlarmCntRatio"];
        }

        if (array_key_exists("PipelineCnt",$param) and $param["PipelineCnt"] !== null) {
            $this->PipelineCnt = $param["PipelineCnt"];
        }

        if (array_key_exists("LastPipelineCnt",$param) and $param["LastPipelineCnt"] !== null) {
            $this->LastPipelineCnt = $param["LastPipelineCnt"];
        }

        if (array_key_exists("PipelineCntRatio",$param) and $param["PipelineCntRatio"] !== null) {
            $this->PipelineCntRatio = $param["PipelineCntRatio"];
        }

        if (array_key_exists("LastPipelineCntRatio",$param) and $param["LastPipelineCntRatio"] !== null) {
            $this->LastPipelineCntRatio = $param["LastPipelineCntRatio"];
        }
    }
}
