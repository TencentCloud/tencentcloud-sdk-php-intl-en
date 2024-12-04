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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Partition details of Kafka consumer group
 *
 * @method integer getPartitionNo() Obtain The number of the current partition, starting from 0.
 * @method void setPartitionNo(integer $PartitionNo) Set The number of the current partition, starting from 0.
 * @method integer getConsumerGroupOffset() Obtain The offset of the current partition.
 * @method void setConsumerGroupOffset(integer $ConsumerGroupOffset) Set The offset of the current partition.
 * @method integer getConsumerGroupLag() Obtain The amount of unconsumed data in the current partition.
 * @method void setConsumerGroupLag(integer $ConsumerGroupLag) Set The amount of unconsumed data in the current partition.
 * @method integer getLatency() Obtain The consumption delay of the current partition (in seconds).
 * @method void setLatency(integer $Latency) Set The consumption delay of the current partition (in seconds).
 */
class MonitorInfo extends AbstractModel
{
    /**
     * @var integer The number of the current partition, starting from 0.
     */
    public $PartitionNo;

    /**
     * @var integer The offset of the current partition.
     */
    public $ConsumerGroupOffset;

    /**
     * @var integer The amount of unconsumed data in the current partition.
     */
    public $ConsumerGroupLag;

    /**
     * @var integer The consumption delay of the current partition (in seconds).
     */
    public $Latency;

    /**
     * @param integer $PartitionNo The number of the current partition, starting from 0.
     * @param integer $ConsumerGroupOffset The offset of the current partition.
     * @param integer $ConsumerGroupLag The amount of unconsumed data in the current partition.
     * @param integer $Latency The consumption delay of the current partition (in seconds).
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
        if (array_key_exists("PartitionNo",$param) and $param["PartitionNo"] !== null) {
            $this->PartitionNo = $param["PartitionNo"];
        }

        if (array_key_exists("ConsumerGroupOffset",$param) and $param["ConsumerGroupOffset"] !== null) {
            $this->ConsumerGroupOffset = $param["ConsumerGroupOffset"];
        }

        if (array_key_exists("ConsumerGroupLag",$param) and $param["ConsumerGroupLag"] !== null) {
            $this->ConsumerGroupLag = $param["ConsumerGroupLag"];
        }

        if (array_key_exists("Latency",$param) and $param["Latency"] !== null) {
            $this->Latency = $param["Latency"];
        }
    }
}
