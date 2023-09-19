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
 * @method float getCreateTaskTime() Obtain The task creation time in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method void setCreateTaskTime(float $CreateTaskTime) Set The task creation time in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method float getProcessTime() Obtain The processing time in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method void setProcessTime(float $ProcessTime) Set The processing time in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method float getQueueTime() Obtain The queue time in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method void setQueueTime(float $QueueTime) Set The queue time in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method float getExecutionTime() Obtain The execution duration in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method void setExecutionTime(float $ExecutionTime) Set The execution duration in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method boolean getIsResultCacheHit() Obtain Whether the result cache is hit.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method void setIsResultCacheHit(boolean $IsResultCacheHit) Set Whether the result cache is hit.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method integer getMatchedMVBytes() Obtain The volume of matched materialized views, in bytes.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method void setMatchedMVBytes(integer $MatchedMVBytes) Set The volume of matched materialized views, in bytes.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method string getMatchedMVs() Obtain The list of matched materialized views.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method void setMatchedMVs(string $MatchedMVs) Set The list of matched materialized views.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method string getAffectedBytes() Obtain The result data in bytes.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method void setAffectedBytes(string $AffectedBytes) Set The result data in bytes.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method integer getAffectedRows() Obtain 	The number of rows in the result.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method void setAffectedRows(integer $AffectedRows) Set 	The number of rows in the result.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method integer getProcessedBytes() Obtain The volume of the data scanned, in bytes.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method void setProcessedBytes(integer $ProcessedBytes) Set The volume of the data scanned, in bytes.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method integer getProcessedRows() Obtain 	The number of scanned rows.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method void setProcessedRows(integer $ProcessedRows) Set 	The number of scanned rows.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 */
class CommonMetrics extends AbstractModel
{
    /**
     * @var float The task creation time in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     */
    public $CreateTaskTime;

    /**
     * @var float The processing time in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     */
    public $ProcessTime;

    /**
     * @var float The queue time in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     */
    public $QueueTime;

    /**
     * @var float The execution duration in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     */
    public $ExecutionTime;

    /**
     * @var boolean Whether the result cache is hit.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     */
    public $IsResultCacheHit;

    /**
     * @var integer The volume of matched materialized views, in bytes.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     */
    public $MatchedMVBytes;

    /**
     * @var string The list of matched materialized views.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     */
    public $MatchedMVs;

    /**
     * @var string The result data in bytes.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     */
    public $AffectedBytes;

    /**
     * @var integer 	The number of rows in the result.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     */
    public $AffectedRows;

    /**
     * @var integer The volume of the data scanned, in bytes.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     */
    public $ProcessedBytes;

    /**
     * @var integer 	The number of scanned rows.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     */
    public $ProcessedRows;

    /**
     * @param float $CreateTaskTime The task creation time in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     * @param float $ProcessTime The processing time in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     * @param float $QueueTime The queue time in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     * @param float $ExecutionTime The execution duration in ms.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     * @param boolean $IsResultCacheHit Whether the result cache is hit.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     * @param integer $MatchedMVBytes The volume of matched materialized views, in bytes.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     * @param string $MatchedMVs The list of matched materialized views.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     * @param string $AffectedBytes The result data in bytes.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     * @param integer $AffectedRows 	The number of rows in the result.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     * @param integer $ProcessedBytes The volume of the data scanned, in bytes.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     * @param integer $ProcessedRows 	The number of scanned rows.
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
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
