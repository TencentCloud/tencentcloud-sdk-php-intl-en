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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Common task metrics
 *
 * @method float getCreateTaskTime() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTaskTime(float $CreateTaskTime) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getProcessTime() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessTime(float $ProcessTime) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getQueueTime() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQueueTime(float $QueueTime) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getExecutionTime() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionTime(float $ExecutionTime) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsResultCacheHit() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsResultCacheHit(boolean $IsResultCacheHit) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMatchedMVBytes() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMatchedMVBytes(integer $MatchedMVBytes) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMatchedMVs() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMatchedMVs(string $MatchedMVs) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAffectedBytes() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAffectedBytes(string $AffectedBytes) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAffectedRows() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAffectedRows(integer $AffectedRows) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProcessedBytes() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessedBytes(integer $ProcessedBytes) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProcessedRows() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessedRows(integer $ProcessedRows) Set Note: This field may return null, indicating that no valid values can be obtained.
 */
class CommonMetrics extends AbstractModel
{
    /**
     * @var float Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTaskTime;

    /**
     * @var float Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessTime;

    /**
     * @var float Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QueueTime;

    /**
     * @var float Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionTime;

    /**
     * @var boolean Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsResultCacheHit;

    /**
     * @var integer Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MatchedMVBytes;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MatchedMVs;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AffectedBytes;

    /**
     * @var integer Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AffectedRows;

    /**
     * @var integer Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessedBytes;

    /**
     * @var integer Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessedRows;

    /**
     * @param float $CreateTaskTime Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $ProcessTime Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $QueueTime Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $ExecutionTime Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsResultCacheHit Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MatchedMVBytes Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MatchedMVs Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AffectedBytes Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AffectedRows Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProcessedBytes Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProcessedRows Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CreateTaskTime",$param) and $param["CreateTaskTime"] !== null) {
            $this->CreateTaskTime = $param["CreateTaskTime"];
        }

        if (array_key_exists("ProcessTime",$param) and $param["ProcessTime"] !== null) {
            $this->ProcessTime = $param["ProcessTime"];
        }

        if (array_key_exists("QueueTime",$param) and $param["QueueTime"] !== null) {
            $this->QueueTime = $param["QueueTime"];
        }

        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            $this->ExecutionTime = $param["ExecutionTime"];
        }

        if (array_key_exists("IsResultCacheHit",$param) and $param["IsResultCacheHit"] !== null) {
            $this->IsResultCacheHit = $param["IsResultCacheHit"];
        }

        if (array_key_exists("MatchedMVBytes",$param) and $param["MatchedMVBytes"] !== null) {
            $this->MatchedMVBytes = $param["MatchedMVBytes"];
        }

        if (array_key_exists("MatchedMVs",$param) and $param["MatchedMVs"] !== null) {
            $this->MatchedMVs = $param["MatchedMVs"];
        }

        if (array_key_exists("AffectedBytes",$param) and $param["AffectedBytes"] !== null) {
            $this->AffectedBytes = $param["AffectedBytes"];
        }

        if (array_key_exists("AffectedRows",$param) and $param["AffectedRows"] !== null) {
            $this->AffectedRows = $param["AffectedRows"];
        }

        if (array_key_exists("ProcessedBytes",$param) and $param["ProcessedBytes"] !== null) {
            $this->ProcessedBytes = $param["ProcessedBytes"];
        }

        if (array_key_exists("ProcessedRows",$param) and $param["ProcessedRows"] !== null) {
            $this->ProcessedRows = $param["ProcessedRows"];
        }
    }
}
