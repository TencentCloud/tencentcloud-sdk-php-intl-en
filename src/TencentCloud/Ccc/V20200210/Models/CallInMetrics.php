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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Real-Time inbound metric.
 *
 * @method integer getIvrCount() Obtain Number of ivr residency.
 * @method void setIvrCount(integer $IvrCount) Set Number of ivr residency.
 * @method integer getQueueCount() Obtain Number in queue.
 * @method void setQueueCount(integer $QueueCount) Set Number in queue.
 * @method integer getRingCount() Obtain Number in ringing.
 * @method void setRingCount(integer $RingCount) Set Number in ringing.
 * @method integer getAcceptCount() Obtain Number of connections.
 * @method void setAcceptCount(integer $AcceptCount) Set Number of connections.
 * @method integer getTransferOuterCount() Obtain Number of customer service transferring to the external line.
 * @method void setTransferOuterCount(integer $TransferOuterCount) Set Number of customer service transferring to the external line.
 * @method integer getMaxQueueDuration() Obtain Maximum queue duration.
 * @method void setMaxQueueDuration(integer $MaxQueueDuration) Set Maximum queue duration.
 * @method integer getAvgQueueDuration() Obtain Average queue duration.
 * @method void setAvgQueueDuration(integer $AvgQueueDuration) Set Average queue duration.
 * @method integer getMaxRingDuration() Obtain Maximum ringing duration.
 * @method void setMaxRingDuration(integer $MaxRingDuration) Set Maximum ringing duration.
 * @method integer getAvgRingDuration() Obtain Average ringing duration.
 * @method void setAvgRingDuration(integer $AvgRingDuration) Set Average ringing duration.
 * @method integer getMaxAcceptDuration() Obtain Maximum connection duration.
 * @method void setMaxAcceptDuration(integer $MaxAcceptDuration) Set Maximum connection duration.
 * @method integer getAvgAcceptDuration() Obtain Average connection duration.
 * @method void setAvgAcceptDuration(integer $AvgAcceptDuration) Set Average connection duration.
 */
class CallInMetrics extends AbstractModel
{
    /**
     * @var integer Number of ivr residency.
     */
    public $IvrCount;

    /**
     * @var integer Number in queue.
     */
    public $QueueCount;

    /**
     * @var integer Number in ringing.
     */
    public $RingCount;

    /**
     * @var integer Number of connections.
     */
    public $AcceptCount;

    /**
     * @var integer Number of customer service transferring to the external line.
     */
    public $TransferOuterCount;

    /**
     * @var integer Maximum queue duration.
     */
    public $MaxQueueDuration;

    /**
     * @var integer Average queue duration.
     */
    public $AvgQueueDuration;

    /**
     * @var integer Maximum ringing duration.
     */
    public $MaxRingDuration;

    /**
     * @var integer Average ringing duration.
     */
    public $AvgRingDuration;

    /**
     * @var integer Maximum connection duration.
     */
    public $MaxAcceptDuration;

    /**
     * @var integer Average connection duration.
     */
    public $AvgAcceptDuration;

    /**
     * @param integer $IvrCount Number of ivr residency.
     * @param integer $QueueCount Number in queue.
     * @param integer $RingCount Number in ringing.
     * @param integer $AcceptCount Number of connections.
     * @param integer $TransferOuterCount Number of customer service transferring to the external line.
     * @param integer $MaxQueueDuration Maximum queue duration.
     * @param integer $AvgQueueDuration Average queue duration.
     * @param integer $MaxRingDuration Maximum ringing duration.
     * @param integer $AvgRingDuration Average ringing duration.
     * @param integer $MaxAcceptDuration Maximum connection duration.
     * @param integer $AvgAcceptDuration Average connection duration.
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
        if (array_key_exists("IvrCount",$param) and $param["IvrCount"] !== null) {
            $this->IvrCount = $param["IvrCount"];
        }

        if (array_key_exists("QueueCount",$param) and $param["QueueCount"] !== null) {
            $this->QueueCount = $param["QueueCount"];
        }

        if (array_key_exists("RingCount",$param) and $param["RingCount"] !== null) {
            $this->RingCount = $param["RingCount"];
        }

        if (array_key_exists("AcceptCount",$param) and $param["AcceptCount"] !== null) {
            $this->AcceptCount = $param["AcceptCount"];
        }

        if (array_key_exists("TransferOuterCount",$param) and $param["TransferOuterCount"] !== null) {
            $this->TransferOuterCount = $param["TransferOuterCount"];
        }

        if (array_key_exists("MaxQueueDuration",$param) and $param["MaxQueueDuration"] !== null) {
            $this->MaxQueueDuration = $param["MaxQueueDuration"];
        }

        if (array_key_exists("AvgQueueDuration",$param) and $param["AvgQueueDuration"] !== null) {
            $this->AvgQueueDuration = $param["AvgQueueDuration"];
        }

        if (array_key_exists("MaxRingDuration",$param) and $param["MaxRingDuration"] !== null) {
            $this->MaxRingDuration = $param["MaxRingDuration"];
        }

        if (array_key_exists("AvgRingDuration",$param) and $param["AvgRingDuration"] !== null) {
            $this->AvgRingDuration = $param["AvgRingDuration"];
        }

        if (array_key_exists("MaxAcceptDuration",$param) and $param["MaxAcceptDuration"] !== null) {
            $this->MaxAcceptDuration = $param["MaxAcceptDuration"];
        }

        if (array_key_exists("AvgAcceptDuration",$param) and $param["AvgAcceptDuration"] !== null) {
            $this->AvgAcceptDuration = $param["AvgAcceptDuration"];
        }
    }
}
