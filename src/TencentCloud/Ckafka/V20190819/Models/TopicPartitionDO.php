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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Partition details
 *
 * @method integer getPartition() Obtain Partition ID
 * @method void setPartition(integer $Partition) Set Partition ID
 * @method integer getLeaderStatus() Obtain Leader running status
 * @method void setLeaderStatus(integer $LeaderStatus) Set Leader running status
 * @method integer getIsrNum() Obtain ISR quantity
 * @method void setIsrNum(integer $IsrNum) Set ISR quantity
 * @method integer getReplicaNum() Obtain Number of replicas
 * @method void setReplicaNum(integer $ReplicaNum) Set Number of replicas
 */
class TopicPartitionDO extends AbstractModel
{
    /**
     * @var integer Partition ID
     */
    public $Partition;

    /**
     * @var integer Leader running status
     */
    public $LeaderStatus;

    /**
     * @var integer ISR quantity
     */
    public $IsrNum;

    /**
     * @var integer Number of replicas
     */
    public $ReplicaNum;

    /**
     * @param integer $Partition Partition ID
     * @param integer $LeaderStatus Leader running status
     * @param integer $IsrNum ISR quantity
     * @param integer $ReplicaNum Number of replicas
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
        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("LeaderStatus",$param) and $param["LeaderStatus"] !== null) {
            $this->LeaderStatus = $param["LeaderStatus"];
        }

        if (array_key_exists("IsrNum",$param) and $param["IsrNum"] !== null) {
            $this->IsrNum = $param["IsrNum"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }
    }
}
