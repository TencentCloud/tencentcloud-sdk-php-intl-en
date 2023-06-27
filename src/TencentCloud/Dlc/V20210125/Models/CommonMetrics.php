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
 * 
 *
 * @method float getCreateTaskTime() Obtain 
 * @method void setCreateTaskTime(float $CreateTaskTime) Set 
 * @method float getProcessTime() Obtain 
 * @method void setProcessTime(float $ProcessTime) Set 
 * @method float getQueueTime() Obtain 
 * @method void setQueueTime(float $QueueTime) Set 
 * @method float getExecutionTime() Obtain 
 * @method void setExecutionTime(float $ExecutionTime) Set 
 * @method boolean getIsResultCacheHit() Obtain 
 * @method void setIsResultCacheHit(boolean $IsResultCacheHit) Set 
 * @method integer getMatchedMVBytes() Obtain 
 * @method void setMatchedMVBytes(integer $MatchedMVBytes) Set 
 * @method string getMatchedMVs() Obtain 
 * @method void setMatchedMVs(string $MatchedMVs) Set 
 * @method string getAffectedBytes() Obtain 
 * @method void setAffectedBytes(string $AffectedBytes) Set 
 * @method integer getAffectedRows() Obtain 
 * @method void setAffectedRows(integer $AffectedRows) Set 
 * @method integer getProcessedBytes() Obtain 
 * @method void setProcessedBytes(integer $ProcessedBytes) Set 
 * @method integer getProcessedRows() Obtain 
 * @method void setProcessedRows(integer $ProcessedRows) Set 
 */
class CommonMetrics extends AbstractModel
{
    /**
     * @var float 
     */
    public $CreateTaskTime;

    /**
     * @var float 
     */
    public $ProcessTime;

    /**
     * @var float 
     */
    public $QueueTime;

    /**
     * @var float 
     */
    public $ExecutionTime;

    /**
     * @var boolean 
     */
    public $IsResultCacheHit;

    /**
     * @var integer 
     */
    public $MatchedMVBytes;

    /**
     * @var string 
     */
    public $MatchedMVs;

    /**
     * @var string 
     */
    public $AffectedBytes;

    /**
     * @var integer 
     */
    public $AffectedRows;

    /**
     * @var integer 
     */
    public $ProcessedBytes;

    /**
     * @var integer 
     */
    public $ProcessedRows;

    /**
     * @param float $CreateTaskTime 
     * @param float $ProcessTime 
     * @param float $QueueTime 
     * @param float $ExecutionTime 
     * @param boolean $IsResultCacheHit 
     * @param integer $MatchedMVBytes 
     * @param string $MatchedMVs 
     * @param string $AffectedBytes 
     * @param integer $AffectedRows 
     * @param integer $ProcessedBytes 
     * @param integer $ProcessedRows 
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
