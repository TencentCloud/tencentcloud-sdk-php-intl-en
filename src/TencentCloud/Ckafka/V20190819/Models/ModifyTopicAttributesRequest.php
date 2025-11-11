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
 * ModifyTopicAttributes request structure.
 *
 * @method string getInstanceId() Obtain The ckafka cluster instance Id.
 * @method void setInstanceId(string $InstanceId) Set The ckafka cluster instance Id.
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method string getNote() Obtain Topic remarks string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`).
 * @method void setNote(string $Note) Set Topic remarks string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`).
 * @method integer getEnableWhiteList() Obtain IP allowlist switch. 1: enabled, 0: disabled.
 * @method void setEnableWhiteList(integer $EnableWhiteList) Set IP allowlist switch. 1: enabled, 0: disabled.
 * @method integer getMinInsyncReplicas() Obtain Default value: 1.
 * @method void setMinInsyncReplicas(integer $MinInsyncReplicas) Set Default value: 1.
 * @method integer getUncleanLeaderElectionEnable() Obtain 0: false, 1: true. Default value: 0.
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) Set 0: false, 1: true. Default value: 0.
 * @method integer getRetentionMs() Obtain Message retention period in ms. The current minimum value is 60,000 ms.
 * @method void setRetentionMs(integer $RetentionMs) Set Message retention period in ms. The current minimum value is 60,000 ms.
 * @method integer getMaxMessageBytes() Obtain Max message size in bytes. Max value: 8,388,608 bytes (8 MB).
 * @method void setMaxMessageBytes(integer $MaxMessageBytes) Set Max message size in bytes. Max value: 8,388,608 bytes (8 MB).
 * @method integer getSegmentMs() Obtain Duration of Segment shard scrolling in milliseconds. current min value is 86400000 ms.
 * @method void setSegmentMs(integer $SegmentMs) Set Duration of Segment shard scrolling in milliseconds. current min value is 86400000 ms.
 * @method string getCleanUpPolicy() Obtain Message deletion policy. Valid values: delete, compact
 * @method void setCleanUpPolicy(string $CleanUpPolicy) Set Message deletion policy. Valid values: delete, compact
 * @method array getIpWhiteList() Obtain IP allowlist, which is required if the value of `enableWhileList` is 1.
 * @method void setIpWhiteList(array $IpWhiteList) Set IP allowlist, which is required if the value of `enableWhileList` is 1.
 * @method integer getEnableAclRule() Obtain Preset ACL rule. `1`: enable, `0`: disable. Default value: `0`.
 * @method void setEnableAclRule(integer $EnableAclRule) Set Preset ACL rule. `1`: enable, `0`: disable. Default value: `0`.
 * @method string getAclRuleName() Obtain ACL rule name.
 * @method void setAclRuleName(string $AclRuleName) Set ACL rule name.
 * @method integer getRetentionBytes() Obtain Message retention file size in bytes, which is an optional parameter. Default value: -1. Currently, the min value that can be entered is 1,048,576 B.
 * @method void setRetentionBytes(integer $RetentionBytes) Set Message retention file size in bytes, which is an optional parameter. Default value: -1. Currently, the min value that can be entered is 1,048,576 B.
 * @method array getTags() Obtain Tag list.
 * @method void setTags(array $Tags) Set Tag list.
 * @method integer getQuotaProducerByteRate() Obtain Production traffic throttling in MB/s. set to -1 to disable throttling.
 * @method void setQuotaProducerByteRate(integer $QuotaProducerByteRate) Set Production traffic throttling in MB/s. set to -1 to disable throttling.
 * @method integer getQuotaConsumerByteRate() Obtain Consumption traffic throttling in MB/s. set to -1 for unlimited consumption.
 * @method void setQuotaConsumerByteRate(integer $QuotaConsumerByteRate) Set Consumption traffic throttling in MB/s. set to -1 for unlimited consumption.
 * @method integer getReplicaNum() Obtain Number of topic replicas. valid values: 1, 3.
 * @method void setReplicaNum(integer $ReplicaNum) Set Number of topic replicas. valid values: 1, 3.
 */
class ModifyTopicAttributesRequest extends AbstractModel
{
    /**
     * @var string The ckafka cluster instance Id.
     */
    public $InstanceId;

    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var string Topic remarks string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`).
     */
    public $Note;

    /**
     * @var integer IP allowlist switch. 1: enabled, 0: disabled.
     */
    public $EnableWhiteList;

    /**
     * @var integer Default value: 1.
     */
    public $MinInsyncReplicas;

    /**
     * @var integer 0: false, 1: true. Default value: 0.
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer Message retention period in ms. The current minimum value is 60,000 ms.
     */
    public $RetentionMs;

    /**
     * @var integer Max message size in bytes. Max value: 8,388,608 bytes (8 MB).
     */
    public $MaxMessageBytes;

    /**
     * @var integer Duration of Segment shard scrolling in milliseconds. current min value is 86400000 ms.
     */
    public $SegmentMs;

    /**
     * @var string Message deletion policy. Valid values: delete, compact
     */
    public $CleanUpPolicy;

    /**
     * @var array IP allowlist, which is required if the value of `enableWhileList` is 1.
     */
    public $IpWhiteList;

    /**
     * @var integer Preset ACL rule. `1`: enable, `0`: disable. Default value: `0`.
     */
    public $EnableAclRule;

    /**
     * @var string ACL rule name.
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
     * @var integer Production traffic throttling in MB/s. set to -1 to disable throttling.
     */
    public $QuotaProducerByteRate;

    /**
     * @var integer Consumption traffic throttling in MB/s. set to -1 for unlimited consumption.
     */
    public $QuotaConsumerByteRate;

    /**
     * @var integer Number of topic replicas. valid values: 1, 3.
     */
    public $ReplicaNum;

    /**
     * @param string $InstanceId The ckafka cluster instance Id.
     * @param string $TopicName Topic name
     * @param string $Note Topic remarks string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`).
     * @param integer $EnableWhiteList IP allowlist switch. 1: enabled, 0: disabled.
     * @param integer $MinInsyncReplicas Default value: 1.
     * @param integer $UncleanLeaderElectionEnable 0: false, 1: true. Default value: 0.
     * @param integer $RetentionMs Message retention period in ms. The current minimum value is 60,000 ms.
     * @param integer $MaxMessageBytes Max message size in bytes. Max value: 8,388,608 bytes (8 MB).
     * @param integer $SegmentMs Duration of Segment shard scrolling in milliseconds. current min value is 86400000 ms.
     * @param string $CleanUpPolicy Message deletion policy. Valid values: delete, compact
     * @param array $IpWhiteList IP allowlist, which is required if the value of `enableWhileList` is 1.
     * @param integer $EnableAclRule Preset ACL rule. `1`: enable, `0`: disable. Default value: `0`.
     * @param string $AclRuleName ACL rule name.
     * @param integer $RetentionBytes Message retention file size in bytes, which is an optional parameter. Default value: -1. Currently, the min value that can be entered is 1,048,576 B.
     * @param array $Tags Tag list.
     * @param integer $QuotaProducerByteRate Production traffic throttling in MB/s. set to -1 to disable throttling.
     * @param integer $QuotaConsumerByteRate Consumption traffic throttling in MB/s. set to -1 for unlimited consumption.
     * @param integer $ReplicaNum Number of topic replicas. valid values: 1, 3.
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

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("EnableWhiteList",$param) and $param["EnableWhiteList"] !== null) {
            $this->EnableWhiteList = $param["EnableWhiteList"];
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

        if (array_key_exists("MaxMessageBytes",$param) and $param["MaxMessageBytes"] !== null) {
            $this->MaxMessageBytes = $param["MaxMessageBytes"];
        }

        if (array_key_exists("SegmentMs",$param) and $param["SegmentMs"] !== null) {
            $this->SegmentMs = $param["SegmentMs"];
        }

        if (array_key_exists("CleanUpPolicy",$param) and $param["CleanUpPolicy"] !== null) {
            $this->CleanUpPolicy = $param["CleanUpPolicy"];
        }

        if (array_key_exists("IpWhiteList",$param) and $param["IpWhiteList"] !== null) {
            $this->IpWhiteList = $param["IpWhiteList"];
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

        if (array_key_exists("QuotaProducerByteRate",$param) and $param["QuotaProducerByteRate"] !== null) {
            $this->QuotaProducerByteRate = $param["QuotaProducerByteRate"];
        }

        if (array_key_exists("QuotaConsumerByteRate",$param) and $param["QuotaConsumerByteRate"] !== null) {
            $this->QuotaConsumerByteRate = $param["QuotaConsumerByteRate"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }
    }
}
