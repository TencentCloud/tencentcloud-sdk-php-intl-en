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
 * @method string getInstanceId() Obtain <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) Set <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method string getTopicName() Obtain <p>Topic name</p>
 * @method void setTopicName(string $TopicName) Set <p>Topic name</p>
 * @method string getNote() Obtain <p>Topic remark</p><p>Input parameter limit: no more than 64 characters</p><p>Default value: ""</p>
 * @method void setNote(string $Note) Set <p>Topic remark</p><p>Input parameter limit: no more than 64 characters</p><p>Default value: ""</p>
 * @method integer getEnableWhiteList() Obtain <p>IP allowlist switch, 1: on; 0: off.</p>
 * @method void setEnableWhiteList(integer $EnableWhiteList) Set <p>IP allowlist switch, 1: on; 0: off.</p>
 * @method integer getMinInsyncReplicas() Obtain <p>Minimum sync replica count</p><p>Default value: 1</p><p>Minimum value: 1</p>
 * @method void setMinInsyncReplicas(integer $MinInsyncReplicas) Set <p>Minimum sync replica count</p><p>Default value: 1</p><p>Minimum value: 1</p>
 * @method integer getUncleanLeaderElectionEnable() Obtain <p>Whether to allow unsynchronized replicas to be elected as leader</p><p>Enumeration value:</p><ul><li>0: Not allowed</li><li>1: Allowed</li></ul><p>Default value: 0</p>
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) Set <p>Whether to allow unsynchronized replicas to be elected as leader</p><p>Enumeration value:</p><ul><li>0: Not allowed</li><li>1: Allowed</li></ul><p>Default value: 0</p>
 * @method integer getRetentionMs() Obtain <p>Duration of Segment shard scrolling</p><p>Unit: ms</p><p>Default value: 86400000</p><p>Minimum value: 86400000ms (1 day)</p>
 * @method void setRetentionMs(integer $RetentionMs) Set <p>Duration of Segment shard scrolling</p><p>Unit: ms</p><p>Default value: 86400000</p><p>Minimum value: 86400000ms (1 day)</p>
 * @method integer getMaxMessageBytes() Obtain <p>Maximum topic messages</p><p>Value ranges from 1024 to 12582912</p><p>Unit: Bytes</p>
 * @method void setMaxMessageBytes(integer $MaxMessageBytes) Set <p>Maximum topic messages</p><p>Value ranges from 1024 to 12582912</p><p>Unit: Bytes</p>
 * @method integer getSegmentMs() Obtain <p>Duration of Segment fragment scrolling</p><p>Unit: ms</p><p>Minimum value: 86400000ms (1 day)</p>
 * @method void setSegmentMs(integer $SegmentMs) Set <p>Duration of Segment fragment scrolling</p><p>Unit: ms</p><p>Minimum value: 86400000ms (1 day)</p>
 * @method string getCleanUpPolicy() Obtain <p>Message deletion strategy: choose delete or compact</p>
 * @method void setCleanUpPolicy(string $CleanUpPolicy) Set <p>Message deletion strategy: choose delete or compact</p>
 * @method array getIpWhiteList() Obtain <p>Ip whitelist, Quota limit, essential when enableWhileList=1</p>
 * @method void setIpWhiteList(array $IpWhiteList) Set <p>Ip whitelist, Quota limit, essential when enableWhileList=1</p>
 * @method integer getEnableAclRule() Obtain <p>Preset ACL rule, 1: on 0: off, default is off</p>
 * @method void setEnableAclRule(integer $EnableAclRule) Set <p>Preset ACL rule, 1: on 0: off, default is off</p>
 * @method string getAclRuleName() Obtain <p>ACL rule name</p>
 * @method void setAclRuleName(string $AclRuleName) Set <p>ACL rule name</p>
 * @method integer getRetentionBytes() Obtain <p>Option, retain file size</p><p>Value ranges from [1073741824, 1099511627776]</p><p>Unit: Bytes</p><p>Default value: -1</p><p>Special value: -1 indicates unlimited</p>
 * @method void setRetentionBytes(integer $RetentionBytes) Set <p>Option, retain file size</p><p>Value ranges from [1073741824, 1099511627776]</p><p>Unit: Bytes</p><p>Default value: -1</p><p>Special value: -1 indicates unlimited</p>
 * @method array getTags() Obtain <p>Tag list</p>
 * @method void setTags(array $Tags) Set <p>Tag list</p>
 * @method integer getQuotaProducerByteRate() Obtain <p>Production traffic throttling in MB/s. Set to -1 for unlimited production traffic throttling.</p>
 * @method void setQuotaProducerByteRate(integer $QuotaProducerByteRate) Set <p>Production traffic throttling in MB/s. Set to -1 for unlimited production traffic throttling.</p>
 * @method integer getQuotaConsumerByteRate() Obtain <p>Consumption throttling, unit MB/s; set to -1 for unlimited consumption throttling.</p>
 * @method void setQuotaConsumerByteRate(integer $QuotaConsumerByteRate) Set <p>Consumption throttling, unit MB/s; set to -1 for unlimited consumption throttling.</p>
 * @method integer getReplicaNum() Obtain <p>topic replica count Minimum value: 1, Maximum value: 3</p>
 * @method void setReplicaNum(integer $ReplicaNum) Set <p>topic replica count Minimum value: 1, Maximum value: 3</p>
 * @method string getLogMsgTimestampType() Obtain <p>Time type for message saving: CreateTime/LogAppendTime</p>
 * @method void setLogMsgTimestampType(string $LogMsgTimestampType) Set <p>Time type for message saving: CreateTime/LogAppendTime</p>
 */
class ModifyTopicAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var string <p>Topic name</p>
     */
    public $TopicName;

    /**
     * @var string <p>Topic remark</p><p>Input parameter limit: no more than 64 characters</p><p>Default value: ""</p>
     */
    public $Note;

    /**
     * @var integer <p>IP allowlist switch, 1: on; 0: off.</p>
     */
    public $EnableWhiteList;

    /**
     * @var integer <p>Minimum sync replica count</p><p>Default value: 1</p><p>Minimum value: 1</p>
     */
    public $MinInsyncReplicas;

    /**
     * @var integer <p>Whether to allow unsynchronized replicas to be elected as leader</p><p>Enumeration value:</p><ul><li>0: Not allowed</li><li>1: Allowed</li></ul><p>Default value: 0</p>
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer <p>Duration of Segment shard scrolling</p><p>Unit: ms</p><p>Default value: 86400000</p><p>Minimum value: 86400000ms (1 day)</p>
     */
    public $RetentionMs;

    /**
     * @var integer <p>Maximum topic messages</p><p>Value ranges from 1024 to 12582912</p><p>Unit: Bytes</p>
     */
    public $MaxMessageBytes;

    /**
     * @var integer <p>Duration of Segment fragment scrolling</p><p>Unit: ms</p><p>Minimum value: 86400000ms (1 day)</p>
     */
    public $SegmentMs;

    /**
     * @var string <p>Message deletion strategy: choose delete or compact</p>
     */
    public $CleanUpPolicy;

    /**
     * @var array <p>Ip whitelist, Quota limit, essential when enableWhileList=1</p>
     */
    public $IpWhiteList;

    /**
     * @var integer <p>Preset ACL rule, 1: on 0: off, default is off</p>
     */
    public $EnableAclRule;

    /**
     * @var string <p>ACL rule name</p>
     */
    public $AclRuleName;

    /**
     * @var integer <p>Option, retain file size</p><p>Value ranges from [1073741824, 1099511627776]</p><p>Unit: Bytes</p><p>Default value: -1</p><p>Special value: -1 indicates unlimited</p>
     */
    public $RetentionBytes;

    /**
     * @var array <p>Tag list</p>
     */
    public $Tags;

    /**
     * @var integer <p>Production traffic throttling in MB/s. Set to -1 for unlimited production traffic throttling.</p>
     */
    public $QuotaProducerByteRate;

    /**
     * @var integer <p>Consumption throttling, unit MB/s; set to -1 for unlimited consumption throttling.</p>
     */
    public $QuotaConsumerByteRate;

    /**
     * @var integer <p>topic replica count Minimum value: 1, Maximum value: 3</p>
     */
    public $ReplicaNum;

    /**
     * @var string <p>Time type for message saving: CreateTime/LogAppendTime</p>
     */
    public $LogMsgTimestampType;

    /**
     * @param string $InstanceId <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     * @param string $TopicName <p>Topic name</p>
     * @param string $Note <p>Topic remark</p><p>Input parameter limit: no more than 64 characters</p><p>Default value: ""</p>
     * @param integer $EnableWhiteList <p>IP allowlist switch, 1: on; 0: off.</p>
     * @param integer $MinInsyncReplicas <p>Minimum sync replica count</p><p>Default value: 1</p><p>Minimum value: 1</p>
     * @param integer $UncleanLeaderElectionEnable <p>Whether to allow unsynchronized replicas to be elected as leader</p><p>Enumeration value:</p><ul><li>0: Not allowed</li><li>1: Allowed</li></ul><p>Default value: 0</p>
     * @param integer $RetentionMs <p>Duration of Segment shard scrolling</p><p>Unit: ms</p><p>Default value: 86400000</p><p>Minimum value: 86400000ms (1 day)</p>
     * @param integer $MaxMessageBytes <p>Maximum topic messages</p><p>Value ranges from 1024 to 12582912</p><p>Unit: Bytes</p>
     * @param integer $SegmentMs <p>Duration of Segment fragment scrolling</p><p>Unit: ms</p><p>Minimum value: 86400000ms (1 day)</p>
     * @param string $CleanUpPolicy <p>Message deletion strategy: choose delete or compact</p>
     * @param array $IpWhiteList <p>Ip whitelist, Quota limit, essential when enableWhileList=1</p>
     * @param integer $EnableAclRule <p>Preset ACL rule, 1: on 0: off, default is off</p>
     * @param string $AclRuleName <p>ACL rule name</p>
     * @param integer $RetentionBytes <p>Option, retain file size</p><p>Value ranges from [1073741824, 1099511627776]</p><p>Unit: Bytes</p><p>Default value: -1</p><p>Special value: -1 indicates unlimited</p>
     * @param array $Tags <p>Tag list</p>
     * @param integer $QuotaProducerByteRate <p>Production traffic throttling in MB/s. Set to -1 for unlimited production traffic throttling.</p>
     * @param integer $QuotaConsumerByteRate <p>Consumption throttling, unit MB/s; set to -1 for unlimited consumption throttling.</p>
     * @param integer $ReplicaNum <p>topic replica count Minimum value: 1, Maximum value: 3</p>
     * @param string $LogMsgTimestampType <p>Time type for message saving: CreateTime/LogAppendTime</p>
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

        if (array_key_exists("LogMsgTimestampType",$param) and $param["LogMsgTimestampType"] !== null) {
            $this->LogMsgTimestampType = $param["LogMsgTimestampType"];
        }
    }
}
