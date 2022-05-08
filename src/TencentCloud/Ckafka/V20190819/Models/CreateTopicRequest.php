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
 * CreateTopic request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getTopicName() Obtain Topic name, which is a string of up to 128 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
 * @method void setTopicName(string $TopicName) Set Topic name, which is a string of up to 128 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
 * @method integer getPartitionNum() Obtain Number of partitions, which should be greater than 0
 * @method void setPartitionNum(integer $PartitionNum) Set Number of partitions, which should be greater than 0
 * @method integer getReplicaNum() Obtain Number of replicas, which cannot be higher than the number of brokers. Maximum value: 3
 * @method void setReplicaNum(integer $ReplicaNum) Set Number of replicas, which cannot be higher than the number of brokers. Maximum value: 3
 * @method integer getEnableWhiteList() Obtain IP allowlist switch. 1: enabled, 0: disabled. Default value: 0
 * @method void setEnableWhiteList(integer $EnableWhiteList) Set IP allowlist switch. 1: enabled, 0: disabled. Default value: 0
 * @method array getIpWhiteList() Obtain IP allowlist list for quota limit, which is required if `enableWhileList` is 1
 * @method void setIpWhiteList(array $IpWhiteList) Set IP allowlist list for quota limit, which is required if `enableWhileList` is 1
 * @method string getCleanUpPolicy() Obtain Log cleanup policy, which is `delete` by default. `delete`: logs will be deleted by save time; `compact`: logs will be compressed by key; `compact, delete`: logs will be compressed by key and deleted by save time.
 * @method void setCleanUpPolicy(string $CleanUpPolicy) Set Log cleanup policy, which is `delete` by default. `delete`: logs will be deleted by save time; `compact`: logs will be compressed by key; `compact, delete`: logs will be compressed by key and deleted by save time.
 * @method string getNote() Obtain Topic remarks string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
 * @method void setNote(string $Note) Set Topic remarks string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
 * @method integer getMinInsyncReplicas() Obtain Default value: 1
 * @method void setMinInsyncReplicas(integer $MinInsyncReplicas) Set Default value: 1
 * @method integer getUncleanLeaderElectionEnable() Obtain Whether to allow an unsynced replica to be elected as leader. false: no, true: yes. Default value: false
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) Set Whether to allow an unsynced replica to be elected as leader. false: no, true: yes. Default value: false
 * @method integer getRetentionMs() Obtain Message retention period in milliseconds, which is optional. Min value: 60,000 ms.
 * @method void setRetentionMs(integer $RetentionMs) Set Message retention period in milliseconds, which is optional. Min value: 60,000 ms.
 * @method integer getSegmentMs() Obtain Segment rolling duration in ms. The current minimum value is 3,600,000 ms
 * @method void setSegmentMs(integer $SegmentMs) Set Segment rolling duration in ms. The current minimum value is 3,600,000 ms
 * @method integer getMaxMessageBytes() Obtain Max message size in bytes. Value range: 1,024 bytes (1 KB) to 8,388,608 bytes (8 MB).
 * @method void setMaxMessageBytes(integer $MaxMessageBytes) Set Max message size in bytes. Value range: 1,024 bytes (1 KB) to 8,388,608 bytes (8 MB).
 * @method integer getEnableAclRule() Obtain Preset ACL rule. `1`: enable, `0`: disable. Default value: `0`.
 * @method void setEnableAclRule(integer $EnableAclRule) Set Preset ACL rule. `1`: enable, `0`: disable. Default value: `0`.
 * @method string getAclRuleName() Obtain Name of the preset ACL rule.
 * @method void setAclRuleName(string $AclRuleName) Set Name of the preset ACL rule.
 * @method integer getRetentionBytes() Obtain Message retention file size in bytes, which is an optional parameter. Default value: -1. Currently, the min value that can be entered is 1,048,576 B.
 * @method void setRetentionBytes(integer $RetentionBytes) Set Message retention file size in bytes, which is an optional parameter. Default value: -1. Currently, the min value that can be entered is 1,048,576 B.
 * @method array getTags() Obtain Tag list.
 * @method void setTags(array $Tags) Set Tag list.
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Topic name, which is a string of up to 128 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
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
     * @var integer IP allowlist switch. 1: enabled, 0: disabled. Default value: 0
     */
    public $EnableWhiteList;

    /**
     * @var array IP allowlist list for quota limit, which is required if `enableWhileList` is 1
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
     * @var integer Message retention period in milliseconds, which is optional. Min value: 60,000 ms.
     */
    public $RetentionMs;

    /**
     * @var integer Segment rolling duration in ms. The current minimum value is 3,600,000 ms
     */
    public $SegmentMs;

    /**
     * @var integer Max message size in bytes. Value range: 1,024 bytes (1 KB) to 8,388,608 bytes (8 MB).
     */
    public $MaxMessageBytes;

    /**
     * @var integer Preset ACL rule. `1`: enable, `0`: disable. Default value: `0`.
     */
    public $EnableAclRule;

    /**
     * @var string Name of the preset ACL rule.
     */
    public $AclRuleName;

    /**
     * @var integer Message retention file size in bytes, which is an optional parameter. Default value: -1. Currently, the min value that can be entered is 1,048,576 B.
     */
    public $RetentionBytes;

    /**
     * @var array Tag list.
     */
    public $Tags;

    /**
     * @param string $InstanceId Instance ID
     * @param string $TopicName Topic name, which is a string of up to 128 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
     * @param integer $PartitionNum Number of partitions, which should be greater than 0
     * @param integer $ReplicaNum Number of replicas, which cannot be higher than the number of brokers. Maximum value: 3
     * @param integer $EnableWhiteList IP allowlist switch. 1: enabled, 0: disabled. Default value: 0
     * @param array $IpWhiteList IP allowlist list for quota limit, which is required if `enableWhileList` is 1
     * @param string $CleanUpPolicy Log cleanup policy, which is `delete` by default. `delete`: logs will be deleted by save time; `compact`: logs will be compressed by key; `compact, delete`: logs will be compressed by key and deleted by save time.
     * @param string $Note Topic remarks string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
     * @param integer $MinInsyncReplicas Default value: 1
     * @param integer $UncleanLeaderElectionEnable Whether to allow an unsynced replica to be elected as leader. false: no, true: yes. Default value: false
     * @param integer $RetentionMs Message retention period in milliseconds, which is optional. Min value: 60,000 ms.
     * @param integer $SegmentMs Segment rolling duration in ms. The current minimum value is 3,600,000 ms
     * @param integer $MaxMessageBytes Max message size in bytes. Value range: 1,024 bytes (1 KB) to 8,388,608 bytes (8 MB).
     * @param integer $EnableAclRule Preset ACL rule. `1`: enable, `0`: disable. Default value: `0`.
     * @param string $AclRuleName Name of the preset ACL rule.
     * @param integer $RetentionBytes Message retention file size in bytes, which is an optional parameter. Default value: -1. Currently, the min value that can be entered is 1,048,576 B.
     * @param array $Tags Tag list.
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

        if (array_key_exists("MaxMessageBytes",$param) and $param["MaxMessageBytes"] !== null) {
            $this->MaxMessageBytes = $param["MaxMessageBytes"];
        }

        if (array_key_exists("EnableAclRule",$param) and $param["EnableAclRule"] !== null) {
            $this->EnableAclRule = $param["EnableAclRule"];
        }

        if (array_key_exists("AclRuleName",$param) and $param["AclRuleName"] !== null) {
            $this->AclRuleName = $param["AclRuleName"];
        }

        if (array_key_exists("RetentionBytes",$param) and $param["RetentionBytes"] !== null) {
            $this->RetentionBytes = $param["RetentionBytes"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
