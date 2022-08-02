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
 * Statistics of the Spark flow task
 *
 * @method string getStartTime() Obtain Task start time
 * @method void setStartTime(string $StartTime) Set Task start time
 * @method integer getReceivers() Obtain Number of data receivers
 * @method void setReceivers(integer $Receivers) Set Number of data receivers
 * @method integer getNumActiveReceivers() Obtain Number of receivers in service
 * @method void setNumActiveReceivers(integer $NumActiveReceivers) Set Number of receivers in service
 * @method integer getNumInactiveReceivers() Obtain Number of inactive receivers
 * @method void setNumInactiveReceivers(integer $NumInactiveReceivers) Set Number of inactive receivers
 * @method integer getNumActiveBatches() Obtain Number of running batches
 * @method void setNumActiveBatches(integer $NumActiveBatches) Set Number of running batches
 * @method integer getNumRetainedCompletedBatches() Obtain Number of batches to be processed
 * @method void setNumRetainedCompletedBatches(integer $NumRetainedCompletedBatches) Set Number of batches to be processed
 * @method integer getNumTotalCompletedBatches() Obtain Number of completed batches
 * @method void setNumTotalCompletedBatches(integer $NumTotalCompletedBatches) Set Number of completed batches
 * @method float getAverageInputRate() Obtain Average input speed
 * @method void setAverageInputRate(float $AverageInputRate) Set Average input speed
 * @method float getAverageSchedulingDelay() Obtain Average queue time
 * @method void setAverageSchedulingDelay(float $AverageSchedulingDelay) Set Average queue time
 * @method float getAverageProcessingTime() Obtain Average processing time
 * @method void setAverageProcessingTime(float $AverageProcessingTime) Set Average processing time
 * @method float getAverageTotalDelay() Obtain Average latency
 * @method void setAverageTotalDelay(float $AverageTotalDelay) Set Average latency
 */
class StreamingStatistics extends AbstractModel
{
    /**
     * @var string Task start time
     */
    public $StartTime;

    /**
     * @var integer Number of data receivers
     */
    public $Receivers;

    /**
     * @var integer Number of receivers in service
     */
    public $NumActiveReceivers;

    /**
     * @var integer Number of inactive receivers
     */
    public $NumInactiveReceivers;

    /**
     * @var integer Number of running batches
     */
    public $NumActiveBatches;

    /**
     * @var integer Number of batches to be processed
     */
    public $NumRetainedCompletedBatches;

    /**
     * @var integer Number of completed batches
     */
    public $NumTotalCompletedBatches;

    /**
     * @var float Average input speed
     */
    public $AverageInputRate;

    /**
     * @var float Average queue time
     */
    public $AverageSchedulingDelay;

    /**
     * @var float Average processing time
     */
    public $AverageProcessingTime;

    /**
     * @var float Average latency
     */
    public $AverageTotalDelay;

    /**
     * @param string $StartTime Task start time
     * @param integer $Receivers Number of data receivers
     * @param integer $NumActiveReceivers Number of receivers in service
     * @param integer $NumInactiveReceivers Number of inactive receivers
     * @param integer $NumActiveBatches Number of running batches
     * @param integer $NumRetainedCompletedBatches Number of batches to be processed
     * @param integer $NumTotalCompletedBatches Number of completed batches
     * @param float $AverageInputRate Average input speed
     * @param float $AverageSchedulingDelay Average queue time
     * @param float $AverageProcessingTime Average processing time
     * @param float $AverageTotalDelay Average latency
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("NumActiveReceivers",$param) and $param["NumActiveReceivers"] !== null) {
            $this->NumActiveReceivers = $param["NumActiveReceivers"];
        }

        if (array_key_exists("NumInactiveReceivers",$param) and $param["NumInactiveReceivers"] !== null) {
            $this->NumInactiveReceivers = $param["NumInactiveReceivers"];
        }

        if (array_key_exists("NumActiveBatches",$param) and $param["NumActiveBatches"] !== null) {
            $this->NumActiveBatches = $param["NumActiveBatches"];
        }

        if (array_key_exists("NumRetainedCompletedBatches",$param) and $param["NumRetainedCompletedBatches"] !== null) {
            $this->NumRetainedCompletedBatches = $param["NumRetainedCompletedBatches"];
        }

        if (array_key_exists("NumTotalCompletedBatches",$param) and $param["NumTotalCompletedBatches"] !== null) {
            $this->NumTotalCompletedBatches = $param["NumTotalCompletedBatches"];
        }

        if (array_key_exists("AverageInputRate",$param) and $param["AverageInputRate"] !== null) {
            $this->AverageInputRate = $param["AverageInputRate"];
        }

        if (array_key_exists("AverageSchedulingDelay",$param) and $param["AverageSchedulingDelay"] !== null) {
            $this->AverageSchedulingDelay = $param["AverageSchedulingDelay"];
        }

        if (array_key_exists("AverageProcessingTime",$param) and $param["AverageProcessingTime"] !== null) {
            $this->AverageProcessingTime = $param["AverageProcessingTime"];
        }

        if (array_key_exists("AverageTotalDelay",$param) and $param["AverageTotalDelay"] !== null) {
            $this->AverageTotalDelay = $param["AverageTotalDelay"];
        }
    }
}
