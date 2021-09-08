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
 * Topic replica and details
 *
 * @method string getPartition() Obtain Partition name
 * @method void setPartition(string $Partition) Set Partition name
 * @method integer getLeader() Obtain Leader ID
 * @method void setLeader(integer $Leader) Set Leader ID
 * @method string getReplica() Obtain Replica set
 * @method void setReplica(string $Replica) Set Replica set
 * @method string getInSyncReplica() Obtain ISR
 * @method void setInSyncReplica(string $InSyncReplica) Set ISR
 * @method integer getBeginOffset() Obtain Starting offset
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBeginOffset(integer $BeginOffset) Set Starting offset
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getEndOffset() Obtain Ending offset
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEndOffset(integer $EndOffset) Set Ending offset
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMessageCount() Obtain Number of messages
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMessageCount(integer $MessageCount) Set Number of messages
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOutOfSyncReplica() Obtain Unsynced replica set
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOutOfSyncReplica(string $OutOfSyncReplica) Set Unsynced replica set
Note: this field may return null, indicating that no valid values can be obtained.
 */
class TopicInSyncReplicaInfo extends AbstractModel
{
    /**
     * @var string Partition name
     */
    public $Partition;

    /**
     * @var integer Leader ID
     */
    public $Leader;

    /**
     * @var string Replica set
     */
    public $Replica;

    /**
     * @var string ISR
     */
    public $InSyncReplica;

    /**
     * @var integer Starting offset
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BeginOffset;

    /**
     * @var integer Ending offset
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EndOffset;

    /**
     * @var integer Number of messages
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MessageCount;

    /**
     * @var string Unsynced replica set
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OutOfSyncReplica;

    /**
     * @param string $Partition Partition name
     * @param integer $Leader Leader ID
     * @param string $Replica Replica set
     * @param string $InSyncReplica ISR
     * @param integer $BeginOffset Starting offset
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $EndOffset Ending offset
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MessageCount Number of messages
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OutOfSyncReplica Unsynced replica set
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Leader",$param) and $param["Leader"] !== null) {
            $this->Leader = $param["Leader"];
        }

        if (array_key_exists("Replica",$param) and $param["Replica"] !== null) {
            $this->Replica = $param["Replica"];
        }

        if (array_key_exists("InSyncReplica",$param) and $param["InSyncReplica"] !== null) {
            $this->InSyncReplica = $param["InSyncReplica"];
        }

        if (array_key_exists("BeginOffset",$param) and $param["BeginOffset"] !== null) {
            $this->BeginOffset = $param["BeginOffset"];
        }

        if (array_key_exists("EndOffset",$param) and $param["EndOffset"] !== null) {
            $this->EndOffset = $param["EndOffset"];
        }

        if (array_key_exists("MessageCount",$param) and $param["MessageCount"] !== null) {
            $this->MessageCount = $param["MessageCount"];
        }

        if (array_key_exists("OutOfSyncReplica",$param) and $param["OutOfSyncReplica"] !== null) {
            $this->OutOfSyncReplica = $param["OutOfSyncReplica"];
        }
    }
}
