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
 * @method string getInstanceId() Obtain <p>Instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method string getTopicName() Obtain <p>Can only contain letters, digits, underscore, "-", ".". </p>
 * @method void setTopicName(string $TopicName) Set <p>Can only contain letters, digits, underscore, "-", ".". </p>
 * @method integer getPartitionNum() Obtain <p>Number of partitions, more than 0</p>
 * @method void setPartitionNum(integer $PartitionNum) Set <p>Number of partitions, more than 0</p>
 * @method integer getReplicaNum() Obtain <p>Replica count cannot be over the number of brokers, with a maximum of 3</p>
 * @method void setReplicaNum(integer $ReplicaNum) Set <p>Replica count cannot be over the number of brokers, with a maximum of 3</p>
 * @method integer getEnableWhiteList() Obtain <p>ip allowlist switch, 1: on; 0: off, default off</p>
 * @method void setEnableWhiteList(integer $EnableWhiteList) Set <p>ip allowlist switch, 1: on; 0: off, default off</p>
 * @method array getIpWhiteList() Obtain <p>Ip whitelist, Quota limit, essential when enableWhileList=1</p>
 * @method void setIpWhiteList(array $IpWhiteList) Set <p>Ip whitelist, Quota limit, essential when enableWhileList=1</p>
 * @method string getCleanUpPolicy() Obtain <p>Log cleanup policy. Log cleanup mode, defaults to "delete". "delete": logs are deleted by retention time. "compact": logs are compressed by key. "compact, delete": logs are compressed by key and deleted by retention time.</p>
 * @method void setCleanUpPolicy(string $CleanUpPolicy) Set <p>Log cleanup policy. Log cleanup mode, defaults to "delete". "delete": logs are deleted by retention time. "compact": logs are compressed by key. "compact, delete": logs are compressed by key and deleted by retention time.</p>
 * @method string getNote() Obtain <p>Topic remark</p><p>Input parameter limit: No more than 64 characters</p>
 * @method void setNote(string $Note) Set <p>Topic remark</p><p>Input parameter limit: No more than 64 characters</p>
 * @method integer getMinInsyncReplicas() Obtain <p>Minimum sync replica count</p><p>Default value: 1</p><p>Minimum value: 1</p>
 * @method void setMinInsyncReplicas(integer $MinInsyncReplicas) Set <p>Minimum sync replica count</p><p>Default value: 1</p><p>Minimum value: 1</p>
 * @method integer getUncleanLeaderElectionEnable() Obtain <p>Whether to allow unsynchronized replicas to be elected as leader, 0: not allowed, 1: allowed, default not allowed</p>
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) Set <p>Whether to allow unsynchronized replicas to be elected as leader, 0: not allowed, 1: allowed, default not allowed</p>
 * @method integer getRetentionMs() Obtain <p>Optional parameter, message retention period</p><p>Value ranges from 60000 to 7776000000</p><p>Unit: ms</p><p>Default value: 7200000</p>
 * @method void setRetentionMs(integer $RetentionMs) Set <p>Optional parameter, message retention period</p><p>Value ranges from 60000 to 7776000000</p><p>Unit: ms</p><p>Default value: 7200000</p>
 * @method integer getSegmentMs() Obtain <p>Duration of Segment shard scrolling</p><p>Unit: ms</p><p>Default value: 86400000</p><p>Minimum value: 86400000ms (1 day)</p>
 * @method void setSegmentMs(integer $SegmentMs) Set <p>Duration of Segment shard scrolling</p><p>Unit: ms</p><p>Default value: 86400000</p><p>Minimum value: 86400000ms (1 day)</p>
 * @method integer getMaxMessageBytes() Obtain <p>Maximum topic messages in Bytes, minimum value 1024 Bytes (1 KB), maximum value 12582912 Bytes (12 MB)</p>
 * @method void setMaxMessageBytes(integer $MaxMessageBytes) Set <p>Maximum topic messages in Bytes, minimum value 1024 Bytes (1 KB), maximum value 12582912 Bytes (12 MB)</p>
 * @method integer getEnableAclRule() Obtain <p>Preset ACL rule, 1: on 0: off, default is off</p>
 * @method void setEnableAclRule(integer $EnableAclRule) Set <p>Preset ACL rule, 1: on 0: off, default is off</p>
 * @method string getAclRuleName() Obtain <p>Preset ACL rule name</p>
 * @method void setAclRuleName(string $AclRuleName) Set <p>Preset ACL rule name</p>
 * @method integer getRetentionBytes() Obtain <p>Option, retain file size. Defaults to -1, unit Byte, current min value is 1073741824.</p><p>Value ranges from [1073741824, 1099511627776]</p><p>Unit: Byte</p><p>Special value: -1 indicates unlimited</p>
 * @method void setRetentionBytes(integer $RetentionBytes) Set <p>Option, retain file size. Defaults to -1, unit Byte, current min value is 1073741824.</p><p>Value ranges from [1073741824, 1099511627776]</p><p>Unit: Byte</p><p>Special value: -1 indicates unlimited</p>
 * @method array getTags() Obtain <p>Tag list</p>
 * @method void setTags(array $Tags) Set <p>Tag list</p>
 * @method string getLogMsgTimestampType() Obtain <p>Time type for message saving: CreateTime/LogAppendTime</p>
 * @method void setLogMsgTimestampType(string $LogMsgTimestampType) Set <p>Time type for message saving: CreateTime/LogAppendTime</p>
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string <p>Instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var string <p>Can only contain letters, digits, underscore, "-", ".". </p>
     */
    public $TopicName;

    /**
     * @var integer <p>Number of partitions, more than 0</p>
     */
    public $PartitionNum;

    /**
     * @var integer <p>Replica count cannot be over the number of brokers, with a maximum of 3</p>
     */
    public $ReplicaNum;

    /**
     * @var integer <p>ip allowlist switch, 1: on; 0: off, default off</p>
     */
    public $EnableWhiteList;

    /**
     * @var array <p>Ip whitelist, Quota limit, essential when enableWhileList=1</p>
     */
    public $IpWhiteList;

    /**
     * @var string <p>Log cleanup policy. Log cleanup mode, defaults to "delete". "delete": logs are deleted by retention time. "compact": logs are compressed by key. "compact, delete": logs are compressed by key and deleted by retention time.</p>
     */
    public $CleanUpPolicy;

    /**
     * @var string <p>Topic remark</p><p>Input parameter limit: No more than 64 characters</p>
     */
    public $Note;

    /**
     * @var integer <p>Minimum sync replica count</p><p>Default value: 1</p><p>Minimum value: 1</p>
     */
    public $MinInsyncReplicas;

    /**
     * @var integer <p>Whether to allow unsynchronized replicas to be elected as leader, 0: not allowed, 1: allowed, default not allowed</p>
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer <p>Optional parameter, message retention period</p><p>Value ranges from 60000 to 7776000000</p><p>Unit: ms</p><p>Default value: 7200000</p>
     */
    public $RetentionMs;

    /**
     * @var integer <p>Duration of Segment shard scrolling</p><p>Unit: ms</p><p>Default value: 86400000</p><p>Minimum value: 86400000ms (1 day)</p>
     */
    public $SegmentMs;

    /**
     * @var integer <p>Maximum topic messages in Bytes, minimum value 1024 Bytes (1 KB), maximum value 12582912 Bytes (12 MB)</p>
     */
    public $MaxMessageBytes;

    /**
     * @var integer <p>Preset ACL rule, 1: on 0: off, default is off</p>
     */
    public $EnableAclRule;

    /**
     * @var string <p>Preset ACL rule name</p>
     */
    public $AclRuleName;

    /**
     * @var integer <p>Option, retain file size. Defaults to -1, unit Byte, current min value is 1073741824.</p><p>Value ranges from [1073741824, 1099511627776]</p><p>Unit: Byte</p><p>Special value: -1 indicates unlimited</p>
     */
    public $RetentionBytes;

    /**
     * @var array <p>Tag list</p>
     */
    public $Tags;

    /**
     * @var string <p>Time type for message saving: CreateTime/LogAppendTime</p>
     */
    public $LogMsgTimestampType;

    /**
     * @param string $InstanceId <p>Instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     * @param string $TopicName <p>Can only contain letters, digits, underscore, "-", ".". </p>
     * @param integer $PartitionNum <p>Number of partitions, more than 0</p>
     * @param integer $ReplicaNum <p>Replica count cannot be over the number of brokers, with a maximum of 3</p>
     * @param integer $EnableWhiteList <p>ip allowlist switch, 1: on; 0: off, default off</p>
     * @param array $IpWhiteList <p>Ip whitelist, Quota limit, essential when enableWhileList=1</p>
     * @param string $CleanUpPolicy <p>Log cleanup policy. Log cleanup mode, defaults to "delete". "delete": logs are deleted by retention time. "compact": logs are compressed by key. "compact, delete": logs are compressed by key and deleted by retention time.</p>
     * @param string $Note <p>Topic remark</p><p>Input parameter limit: No more than 64 characters</p>
     * @param integer $MinInsyncReplicas <p>Minimum sync replica count</p><p>Default value: 1</p><p>Minimum value: 1</p>
     * @param integer $UncleanLeaderElectionEnable <p>Whether to allow unsynchronized replicas to be elected as leader, 0: not allowed, 1: allowed, default not allowed</p>
     * @param integer $RetentionMs <p>Optional parameter, message retention period</p><p>Value ranges from 60000 to 7776000000</p><p>Unit: ms</p><p>Default value: 7200000</p>
     * @param integer $SegmentMs <p>Duration of Segment shard scrolling</p><p>Unit: ms</p><p>Default value: 86400000</p><p>Minimum value: 86400000ms (1 day)</p>
     * @param integer $MaxMessageBytes <p>Maximum topic messages in Bytes, minimum value 1024 Bytes (1 KB), maximum value 12582912 Bytes (12 MB)</p>
     * @param integer $EnableAclRule <p>Preset ACL rule, 1: on 0: off, default is off</p>
     * @param string $AclRuleName <p>Preset ACL rule name</p>
     * @param integer $RetentionBytes <p>Option, retain file size. Defaults to -1, unit Byte, current min value is 1073741824.</p><p>Value ranges from [1073741824, 1099511627776]</p><p>Unit: Byte</p><p>Special value: -1 indicates unlimited</p>
     * @param array $Tags <p>Tag list</p>
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
