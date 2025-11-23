<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method string getInstanceId() Obtain Instance Id. you can obtain it by calling the DescribeInstances api.
 * @method void setInstanceId(string $InstanceId) Set Instance Id. you can obtain it by calling the DescribeInstances api.
 * @method string getTopicName() Obtain Can only contain letters, digits, underscores, "-", or ".".
 * @method void setTopicName(string $TopicName) Set Can only contain letters, digits, underscores, "-", or ".".
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
 * @method string getNote() Obtain Topic remark is a string of no more than 64 characters. the first character can be a letter or digit, and the remaining part can contain letters, digits, and hyphens (-).
 * @method void setNote(string $Note) Set Topic remark is a string of no more than 64 characters. the first character can be a letter or digit, and the remaining part can contain letters, digits, and hyphens (-).
 * @method integer getMinInsyncReplicas() Obtain Minimum number of synchronous replicas, defaults to 1.
 * @method void setMinInsyncReplicas(integer $MinInsyncReplicas) Set Minimum number of synchronous replicas, defaults to 1.
 * @method integer getUncleanLeaderElectionEnable() Obtain Whether to allow unsynchronized replicas to be elected as leader. valid values: 0 (not allowed), 1 (allowed). default: not allowed.
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) Set Whether to allow unsynchronized replicas to be elected as leader. valid values: 0 (not allowed), 1 (allowed). default: not allowed.
 * @method integer getRetentionMs() Obtain Optional parameter. specifies the message retention period in milliseconds. current min value is 60000. default value is 7200000 ms (2 hours). maximum value is 7776000000 ms (90 days).
 * @method void setRetentionMs(integer $RetentionMs) Set Optional parameter. specifies the message retention period in milliseconds. current min value is 60000. default value is 7200000 ms (2 hours). maximum value is 7776000000 ms (90 days).
 * @method integer getSegmentMs() Obtain Duration of Segment shard scrolling in milliseconds. minimum value is 86400000 ms (1 day).
 * @method void setSegmentMs(integer $SegmentMs) Set Duration of Segment shard scrolling in milliseconds. minimum value is 86400000 ms (1 day).
 * @method integer getMaxMessageBytes() Obtain Maximum topic messages in Bytes. value range: 1024 (1 KB) to 12582912 (12 MB).
 * @method void setMaxMessageBytes(integer $MaxMessageBytes) Set Maximum topic messages in Bytes. value range: 1024 (1 KB) to 12582912 (12 MB).
 * @method integer getEnableAclRule() Obtain Preset ACL rule. `1`: enable, `0`: disable. Default value: `0`.
 * @method void setEnableAclRule(integer $EnableAclRule) Set Preset ACL rule. `1`: enable, `0`: disable. Default value: `0`.
 * @method string getAclRuleName() Obtain Name of the preset ACL rule.
 * @method void setAclRuleName(string $AclRuleName) Set Name of the preset ACL rule.
 * @method integer getRetentionBytes() Obtain Optional. retain file size. defaults to -1, unit Byte. current min value is 1073741824.
 * @method void setRetentionBytes(integer $RetentionBytes) Set Optional. retain file size. defaults to -1, unit Byte. current min value is 1073741824.
 * @method array getTags() Obtain Tag list.
 * @method void setTags(array $Tags) Set Tag list.
 * @method string getLogMsgTimestampType() Obtain Time type for message saving. valid values: CreateTime/LogAppendTime.
 * @method void setLogMsgTimestampType(string $LogMsgTimestampType) Set Time type for message saving. valid values: CreateTime/LogAppendTime.
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string Instance Id. you can obtain it by calling the DescribeInstances api.
     */
    public $InstanceId;

    /**
     * @var string Can only contain letters, digits, underscores, "-", or ".".
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
     * @var string Topic remark is a string of no more than 64 characters. the first character can be a letter or digit, and the remaining part can contain letters, digits, and hyphens (-).
     */
    public $Note;

    /**
     * @var integer Minimum number of synchronous replicas, defaults to 1.
     */
    public $MinInsyncReplicas;

    /**
     * @var integer Whether to allow unsynchronized replicas to be elected as leader. valid values: 0 (not allowed), 1 (allowed). default: not allowed.
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer Optional parameter. specifies the message retention period in milliseconds. current min value is 60000. default value is 7200000 ms (2 hours). maximum value is 7776000000 ms (90 days).
     */
    public $RetentionMs;

    /**
     * @var integer Duration of Segment shard scrolling in milliseconds. minimum value is 86400000 ms (1 day).
     */
    public $SegmentMs;

    /**
     * @var integer Maximum topic messages in Bytes. value range: 1024 (1 KB) to 12582912 (12 MB).
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
     * @var integer Optional. retain file size. defaults to -1, unit Byte. current min value is 1073741824.
     */
    public $RetentionBytes;

    /**
     * @var array Tag list.
     */
    public $Tags;

    /**
     * @var string Time type for message saving. valid values: CreateTime/LogAppendTime.
     */
    public $LogMsgTimestampType;

    /**
     * @param string $InstanceId Instance Id. you can obtain it by calling the DescribeInstances api.
     * @param string $TopicName Can only contain letters, digits, underscores, "-", or ".".
     * @param integer $PartitionNum Number of partitions, which should be greater than 0
     * @param integer $ReplicaNum Number of replicas, which cannot be higher than the number of brokers. Maximum value: 3
     * @param integer $EnableWhiteList IP allowlist switch. 1: enabled, 0: disabled. Default value: 0
     * @param array $IpWhiteList IP allowlist list for quota limit, which is required if `enableWhileList` is 1
     * @param string $CleanUpPolicy Log cleanup policy, which is `delete` by default. `delete`: logs will be deleted by save time; `compact`: logs will be compressed by key; `compact, delete`: logs will be compressed by key and deleted by save time.
     * @param string $Note Topic remark is a string of no more than 64 characters. the first character can be a letter or digit, and the remaining part can contain letters, digits, and hyphens (-).
     * @param integer $MinInsyncReplicas Minimum number of synchronous replicas, defaults to 1.
     * @param integer $UncleanLeaderElectionEnable Whether to allow unsynchronized replicas to be elected as leader. valid values: 0 (not allowed), 1 (allowed). default: not allowed.
     * @param integer $RetentionMs Optional parameter. specifies the message retention period in milliseconds. current min value is 60000. default value is 7200000 ms (2 hours). maximum value is 7776000000 ms (90 days).
     * @param integer $SegmentMs Duration of Segment shard scrolling in milliseconds. minimum value is 86400000 ms (1 day).
     * @param integer $MaxMessageBytes Maximum topic messages in Bytes. value range: 1024 (1 KB) to 12582912 (12 MB).
     * @param integer $EnableAclRule Preset ACL rule. `1`: enable, `0`: disable. Default value: `0`.
     * @param string $AclRuleName Name of the preset ACL rule.
     * @param integer $RetentionBytes Optional. retain file size. defaults to -1, unit Byte. current min value is 1073741824.
     * @param array $Tags Tag list.
     * @param string $LogMsgTimestampType Time type for message saving. valid values: CreateTime/LogAppendTime.
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

        if (array_key_exists("LogMsgTimestampType",$param) and $param["LogMsgTimestampType"] !== null) {
            $this->LogMsgTimestampType = $param["LogMsgTimestampType"];
        }
    }
}
