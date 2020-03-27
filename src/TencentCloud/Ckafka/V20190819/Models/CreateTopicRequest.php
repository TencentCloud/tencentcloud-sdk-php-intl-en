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
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getTopicName() Obtain Topic name string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
 * @method void setTopicName(string $TopicName) Set Topic name string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
 * @method integer getPartitionNum() Obtain Number of partitions, which should be greater than 0
 * @method void setPartitionNum(integer $PartitionNum) Set Number of partitions, which should be greater than 0
 * @method integer getReplicaNum() Obtain Number of replicas, which cannot be higher than the number of brokers. Maximum value: 3
 * @method void setReplicaNum(integer $ReplicaNum) Set Number of replicas, which cannot be higher than the number of brokers. Maximum value: 3
 * @method integer getEnableWhiteList() Obtain IP whitelist switch. 1: enabled, 0: disabled. Default value: 0
 * @method void setEnableWhiteList(integer $EnableWhiteList) Set IP whitelist switch. 1: enabled, 0: disabled. Default value: 0
 * @method array getIpWhiteList() Obtain IP whitelist list for quota limit, which is required if `enableWhileList` is 1
 * @method void setIpWhiteList(array $IpWhiteList) Set IP whitelist list for quota limit, which is required if `enableWhileList` is 1
 * @method string getCleanUpPolicy() Obtain Log cleanup policy, which is `delete` by default. `delete`: logs will be deleted by save time; `compact`: logs will be compressed by key; `compact, delete`: logs will be compressed by key and deleted by save time.
 * @method void setCleanUpPolicy(string $CleanUpPolicy) Set Log cleanup policy, which is `delete` by default. `delete`: logs will be deleted by save time; `compact`: logs will be compressed by key; `compact, delete`: logs will be compressed by key and deleted by save time.
 * @method string getNote() Obtain Topic remarks string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
 * @method void setNote(string $Note) Set Topic remarks string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
 * @method integer getMinInsyncReplicas() Obtain Default value: 1
 * @method void setMinInsyncReplicas(integer $MinInsyncReplicas) Set Default value: 1
 * @method integer getUncleanLeaderElectionEnable() Obtain Whether to allow an unsynced replica to be elected as leader. false: no, true: yes. Default value: false
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) Set Whether to allow an unsynced replica to be elected as leader. false: no, true: yes. Default value: false
 * @method integer getRetentionMs() Obtain Message retention period in ms, which is optional. The current minimum value is 60,000 ms
 * @method void setRetentionMs(integer $RetentionMs) Set Message retention period in ms, which is optional. The current minimum value is 60,000 ms
 * @method integer getSegmentMs() Obtain Segment rolling duration in ms. The current minimum value is 3,600,000 ms
 * @method void setSegmentMs(integer $SegmentMs) Set Segment rolling duration in ms. The current minimum value is 3,600,000 ms
 */

/**
 *CreateTopic request structure.
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Topic name string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
     */
    public $TopicName;

    /**
     * @var integer Number of partitions, which should be greater than 0
     */
    public $PartitionNum;

    /**
     * @var integer Number of replicas, which cannot be higher than the number of brokers. Maximum value: 3
     */
    public $ReplicaNum;

    /**
     * @var integer IP whitelist switch. 1: enabled, 0: disabled. Default value: 0
     */
    public $EnableWhiteList;

    /**
     * @var array IP whitelist list for quota limit, which is required if `enableWhileList` is 1
     */
    public $IpWhiteList;

    /**
     * @var string Log cleanup policy, which is `delete` by default. `delete`: logs will be deleted by save time; `compact`: logs will be compressed by key; `compact, delete`: logs will be compressed by key and deleted by save time.
     */
    public $CleanUpPolicy;

    /**
     * @var string Topic remarks string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
     */
    public $Note;

    /**
     * @var integer Default value: 1
     */
    public $MinInsyncReplicas;

    /**
     * @var integer Whether to allow an unsynced replica to be elected as leader. false: no, true: yes. Default value: false
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer Message retention period in ms, which is optional. The current minimum value is 60,000 ms
     */
    public $RetentionMs;

    /**
     * @var integer Segment rolling duration in ms. The current minimum value is 3,600,000 ms
     */
    public $SegmentMs;
    /**
     * @param string $InstanceId Instance ID
     * @param string $TopicName Topic name string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
     * @param integer $PartitionNum Number of partitions, which should be greater than 0
     * @param integer $ReplicaNum Number of replicas, which cannot be higher than the number of brokers. Maximum value: 3
     * @param integer $EnableWhiteList IP whitelist switch. 1: enabled, 0: disabled. Default value: 0
     * @param array $IpWhiteList IP whitelist list for quota limit, which is required if `enableWhileList` is 1
     * @param string $CleanUpPolicy Log cleanup policy, which is `delete` by default. `delete`: logs will be deleted by save time; `compact`: logs will be compressed by key; `compact, delete`: logs will be compressed by key and deleted by save time.
     * @param string $Note Topic remarks string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
     * @param integer $MinInsyncReplicas Default value: 1
     * @param integer $UncleanLeaderElectionEnable Whether to allow an unsynced replica to be elected as leader. false: no, true: yes. Default value: false
     * @param integer $RetentionMs Message retention period in ms, which is optional. The current minimum value is 60,000 ms
     * @param integer $SegmentMs Segment rolling duration in ms. The current minimum value is 3,600,000 ms
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }

        if (array_key_exists("EnableWhiteList",$param) and $param["EnableWhiteList"] !== null) {
            $this->EnableWhiteList = $param["EnableWhiteList"];
        }

        if (array_key_exists("IpWhiteList",$param) and $param["IpWhiteList"] !== null) {
            $this->IpWhiteList = $param["IpWhiteList"];
        }

        if (array_key_exists("CleanUpPolicy",$param) and $param["CleanUpPolicy"] !== null) {
            $this->CleanUpPolicy = $param["CleanUpPolicy"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
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

        if (array_key_exists("SegmentMs",$param) and $param["SegmentMs"] !== null) {
            $this->SegmentMs = $param["SegmentMs"];
        }
    }
}
