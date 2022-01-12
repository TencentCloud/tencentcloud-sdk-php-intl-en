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
 * Topic parameters that can be modified in batches
 *
 * @method string getTopicName() Obtain Topic name.
 * @method void setTopicName(string $TopicName) Set Topic name.
 * @method integer getPartitionNum() Obtain The number of partitions.
 * @method void setPartitionNum(integer $PartitionNum) Set The number of partitions.
 * @method string getNote() Obtain Remarks.
 * @method void setNote(string $Note) Set Remarks.
 * @method integer getReplicaNum() Obtain Number of replicas.
 * @method void setReplicaNum(integer $ReplicaNum) Set Number of replicas.
 * @method string getCleanUpPolicy() Obtain Message deletion policy. Valid values: `delete`, `compact`.
 * @method void setCleanUpPolicy(string $CleanUpPolicy) Set Message deletion policy. Valid values: `delete`, `compact`.
 * @method integer getMinInsyncReplicas() Obtain The minimum number of replicas specified by `min.insync.replicas` when the producer sets `request.required.acks` to `-1`.
 * @method void setMinInsyncReplicas(integer $MinInsyncReplicas) Set The minimum number of replicas specified by `min.insync.replicas` when the producer sets `request.required.acks` to `-1`.
 * @method boolean getUncleanLeaderElectionEnable() Obtain Whether to allow a non-ISR replica to be the leader.
 * @method void setUncleanLeaderElectionEnable(boolean $UncleanLeaderElectionEnable) Set Whether to allow a non-ISR replica to be the leader.
 * @method integer getRetentionMs() Obtain Message retention period in topic dimension in milliseconds. Value range: 1 minute to 90 days.
 * @method void setRetentionMs(integer $RetentionMs) Set Message retention period in topic dimension in milliseconds. Value range: 1 minute to 90 days.
 * @method integer getRetentionBytes() Obtain Message retention size in topic dimension. Value range: 1 MB - 1024 GB.
 * @method void setRetentionBytes(integer $RetentionBytes) Set Message retention size in topic dimension. Value range: 1 MB - 1024 GB.
 * @method integer getSegmentMs() Obtain Segment rolling duration in milliseconds. Value range: 1-90 days.
 * @method void setSegmentMs(integer $SegmentMs) Set Segment rolling duration in milliseconds. Value range: 1-90 days.
 * @method integer getMaxMessageBytes() Obtain Message size per batch. Value range: 1 KB - 12 MB.
 * @method void setMaxMessageBytes(integer $MaxMessageBytes) Set Message size per batch. Value range: 1 KB - 12 MB.
 */
class BatchModifyTopicInfo extends AbstractModel
{
    /**
     * @var string Topic name.
     */
    public $TopicName;

    /**
     * @var integer The number of partitions.
     */
    public $PartitionNum;

    /**
     * @var string Remarks.
     */
    public $Note;

    /**
     * @var integer Number of replicas.
     */
    public $ReplicaNum;

    /**
     * @var string Message deletion policy. Valid values: `delete`, `compact`.
     */
    public $CleanUpPolicy;

    /**
     * @var integer The minimum number of replicas specified by `min.insync.replicas` when the producer sets `request.required.acks` to `-1`.
     */
    public $MinInsyncReplicas;

    /**
     * @var boolean Whether to allow a non-ISR replica to be the leader.
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer Message retention period in topic dimension in milliseconds. Value range: 1 minute to 90 days.
     */
    public $RetentionMs;

    /**
     * @var integer Message retention size in topic dimension. Value range: 1 MB - 1024 GB.
     */
    public $RetentionBytes;

    /**
     * @var integer Segment rolling duration in milliseconds. Value range: 1-90 days.
     */
    public $SegmentMs;

    /**
     * @var integer Message size per batch. Value range: 1 KB - 12 MB.
     */
    public $MaxMessageBytes;

    /**
     * @param string $TopicName Topic name.
     * @param integer $PartitionNum The number of partitions.
     * @param string $Note Remarks.
     * @param integer $ReplicaNum Number of replicas.
     * @param string $CleanUpPolicy Message deletion policy. Valid values: `delete`, `compact`.
     * @param integer $MinInsyncReplicas The minimum number of replicas specified by `min.insync.replicas` when the producer sets `request.required.acks` to `-1`.
     * @param boolean $UncleanLeaderElectionEnable Whether to allow a non-ISR replica to be the leader.
     * @param integer $RetentionMs Message retention period in topic dimension in milliseconds. Value range: 1 minute to 90 days.
     * @param integer $RetentionBytes Message retention size in topic dimension. Value range: 1 MB - 1024 GB.
     * @param integer $SegmentMs Segment rolling duration in milliseconds. Value range: 1-90 days.
     * @param integer $MaxMessageBytes Message size per batch. Value range: 1 KB - 12 MB.
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }

        if (array_key_exists("CleanUpPolicy",$param) and $param["CleanUpPolicy"] !== null) {
            $this->CleanUpPolicy = $param["CleanUpPolicy"];
        }

        if (array_key_exists("MinInsyncReplicas",$param) and $param["MinInsyncReplicas"] !== null) {
            $this->MinInsyncReplicas = $param["MinInsyncReplicas"];
        }

        if (array_key_exists("UncleanLeaderElectionEnable",$param) and $param["UncleanLeaderElectionEnable"] !== null) {
            $this->UncleanLeaderElectionEnable = $param["UncleanLeaderElectionEnable"];
        }

        if (array_key_exists("RetentionMs",$param) and $param["RetentionMs"] !== null) {
            $this->RetentionMs = $param["RetentionMs"];
        }

        if (array_key_exists("RetentionBytes",$param) and $param["RetentionBytes"] !== null) {
            $this->RetentionBytes = $param["RetentionBytes"];
        }

        if (array_key_exists("SegmentMs",$param) and $param["SegmentMs"] !== null) {
            $this->SegmentMs = $param["SegmentMs"];
        }

        if (array_key_exists("MaxMessageBytes",$param) and $param["MaxMessageBytes"] !== null) {
            $this->MaxMessageBytes = $param["MaxMessageBytes"];
        }
    }
}
