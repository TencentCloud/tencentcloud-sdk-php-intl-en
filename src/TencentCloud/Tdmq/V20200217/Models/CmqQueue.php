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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Batch queue attribute information of CMQ
 *
 * @method string getQueueId() Obtain Message queue ID.
 * @method void setQueueId(string $QueueId) Set Message queue ID.
 * @method string getQueueName() Obtain Message queue name.
 * @method void setQueueName(string $QueueName) Set Message queue name.
 * @method integer getQps() Obtain Limit on the number of messages produced per second. The size of consumed messages is 1.1 times this value.
 * @method void setQps(integer $Qps) Set Limit on the number of messages produced per second. The size of consumed messages is 1.1 times this value.
 * @method integer getBps() Obtain Bandwidth limit.
 * @method void setBps(integer $Bps) Set Bandwidth limit.
 * @method integer getMaxDelaySeconds() Obtain Specifies the maximum retention time for in-flight messages, which must be less than the message retention period.
 * @method void setMaxDelaySeconds(integer $MaxDelaySeconds) Set Specifies the maximum retention time for in-flight messages, which must be less than the message retention period.
 * @method integer getMaxMsgHeapNum() Obtain Maximum number of heaped messages. The value range is 1,000,000–10,000,000 during the beta test and can be 1,000,000–1,000,000,000 after the product is officially released. The default value is 10,000,000 during the beta test and will be 100,000,000 after the product is officially released.
 * @method void setMaxMsgHeapNum(integer $MaxMsgHeapNum) Set Maximum number of heaped messages. The value range is 1,000,000–10,000,000 during the beta test and can be 1,000,000–1,000,000,000 after the product is officially released. The default value is 10,000,000 during the beta test and will be 100,000,000 after the product is officially released.
 * @method integer getPollingWaitSeconds() Obtain Long polling waiting time for message receipt. Value range 0-30 seconds, default value 0.
 * @method void setPollingWaitSeconds(integer $PollingWaitSeconds) Set Long polling waiting time for message receipt. Value range 0-30 seconds, default value 0.
 * @method integer getMsgRetentionSeconds() Obtain Message retention period. The value range is 60-1,296,000 seconds (1 min-15 days), with a default value of 345,600 seconds (4 days).
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) Set Message retention period. The value range is 60-1,296,000 seconds (1 min-15 days), with a default value of 345,600 seconds (4 days).
 * @method integer getVisibilityTimeout() Obtain Message visibility timeout period. The value range is 1-43,200 seconds (within 12 hours), with a default value of 30.
 * @method void setVisibilityTimeout(integer $VisibilityTimeout) Set Message visibility timeout period. The value range is 1-43,200 seconds (within 12 hours), with a default value of 30.
 * @method integer getMaxMsgSize() Obtain Maximum message length. Range: 1,024-1,048,576 bytes (i.e., 1K-1,024K). Default value is 65,536.
 * @method void setMaxMsgSize(integer $MaxMsgSize) Set Maximum message length. Range: 1,024-1,048,576 bytes (i.e., 1K-1,024K). Default value is 65,536.
 * @method integer getRewindSeconds() Obtain Maximum message backtracking time for backtracking queues, range 0-43,200 seconds. 0 means message backtracking is not enabled.
 * @method void setRewindSeconds(integer $RewindSeconds) Set Maximum message backtracking time for backtracking queues, range 0-43,200 seconds. 0 means message backtracking is not enabled.
 * @method integer getCreateTime() Obtain Creation time of queues. Returns a Unix timestamp, accurate to milliseconds.
 * @method void setCreateTime(integer $CreateTime) Set Creation time of queues. Returns a Unix timestamp, accurate to milliseconds.
 * @method integer getLastModifyTime() Obtain The last time the queue attribute was modified. Returns a Unix timestamp, accurate to milliseconds.
 * @method void setLastModifyTime(integer $LastModifyTime) Set The last time the queue attribute was modified. Returns a Unix timestamp, accurate to milliseconds.
 * @method integer getActiveMsgNum() Obtain Total number of active messages (not being consumed) in queue, an approximate value.
 * @method void setActiveMsgNum(integer $ActiveMsgNum) Set Total number of active messages (not being consumed) in queue, an approximate value.
 * @method integer getInactiveMsgNum() Obtain Total number of inactive messages (being consumed) in queue, an approximate value.
 * @method void setInactiveMsgNum(integer $InactiveMsgNum) Set Total number of inactive messages (being consumed) in queue, an approximate value.
 * @method integer getDelayMsgNum() Obtain Number of delayed messages.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDelayMsgNum(integer $DelayMsgNum) Set Number of delayed messages.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRewindMsgNum() Obtain Number of retained messages which have been deleted by the `DelMsg` API but are still within their rewind time range.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRewindMsgNum(integer $RewindMsgNum) Set Number of retained messages which have been deleted by the `DelMsg` API but are still within their rewind time range.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMinMsgTime() Obtain Minimum unconsumed time of message in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMinMsgTime(integer $MinMsgTime) Set Minimum unconsumed time of message in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getTransaction() Obtain Transaction message queue. true: transaction message type; false: other message types.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTransaction(boolean $Transaction) Set Transaction message queue. true: transaction message type; false: other message types.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getDeadLetterSource() Obtain Dead letter queue.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeadLetterSource(array $DeadLetterSource) Set Dead letter queue.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method CmqDeadLetterPolicy getDeadLetterPolicy() Obtain Dead letter queue policy.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeadLetterPolicy(CmqDeadLetterPolicy $DeadLetterPolicy) Set Dead letter queue policy.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method CmqTransactionPolicy getTransactionPolicy() Obtain Transaction message policy.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTransactionPolicy(CmqTransactionPolicy $TransactionPolicy) Set Transaction message policy.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateUin() Obtain Creator `Uin`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUin(integer $CreateUin) Set Creator `Uin`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Associated tag.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Associated tag.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getTrace() Obtain Message trace. true: enabled; false: not enabled
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTrace(boolean $Trace) Set Message trace. true: enabled; false: not enabled
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTenantId() Obtain Tenant ID
 * @method void setTenantId(string $TenantId) Set Tenant ID
 * @method string getNamespaceName() Obtain Specifies the namespace name.
 * @method void setNamespaceName(string $NamespaceName) Set Specifies the namespace name.
 * @method integer getStatus() Obtain Cluster status. 0: Creating, 1: Normal, 2: Deleting, 3: Deleted, 4: Isolating, 5: Creation failed, 6: Deletion failed
 * @method void setStatus(integer $Status) Set Cluster status. 0: Creating, 1: Normal, 2: Deleting, 3: Deleted, 4: Isolating, 5: Creation failed, 6: Deletion failed
 * @method integer getMaxUnackedMsgNum() Obtain Maximum Number of Unacknowledged Messages
 * @method void setMaxUnackedMsgNum(integer $MaxUnackedMsgNum) Set Maximum Number of Unacknowledged Messages
 * @method integer getMaxMsgBacklogSize() Obtain Maximum Message Backlog Size (bytes)
 * @method void setMaxMsgBacklogSize(integer $MaxMsgBacklogSize) Set Maximum Message Backlog Size (bytes)
 * @method integer getRetentionSizeInMB() Obtain Queue retrospective storage space. Value range: 1024 MB to 10240 MB. 0 indicates disabled.
 * @method void setRetentionSizeInMB(integer $RetentionSizeInMB) Set Queue retrospective storage space. Value range: 1024 MB to 10240 MB. 0 indicates disabled.
 */
class CmqQueue extends AbstractModel
{
    /**
     * @var string Message queue ID.
     */
    public $QueueId;

    /**
     * @var string Message queue name.
     */
    public $QueueName;

    /**
     * @var integer Limit on the number of messages produced per second. The size of consumed messages is 1.1 times this value.
     */
    public $Qps;

    /**
     * @var integer Bandwidth limit.
     */
    public $Bps;

    /**
     * @var integer Specifies the maximum retention time for in-flight messages, which must be less than the message retention period.
     */
    public $MaxDelaySeconds;

    /**
     * @var integer Maximum number of heaped messages. The value range is 1,000,000–10,000,000 during the beta test and can be 1,000,000–1,000,000,000 after the product is officially released. The default value is 10,000,000 during the beta test and will be 100,000,000 after the product is officially released.
     */
    public $MaxMsgHeapNum;

    /**
     * @var integer Long polling waiting time for message receipt. Value range 0-30 seconds, default value 0.
     */
    public $PollingWaitSeconds;

    /**
     * @var integer Message retention period. The value range is 60-1,296,000 seconds (1 min-15 days), with a default value of 345,600 seconds (4 days).
     */
    public $MsgRetentionSeconds;

    /**
     * @var integer Message visibility timeout period. The value range is 1-43,200 seconds (within 12 hours), with a default value of 30.
     */
    public $VisibilityTimeout;

    /**
     * @var integer Maximum message length. Range: 1,024-1,048,576 bytes (i.e., 1K-1,024K). Default value is 65,536.
     */
    public $MaxMsgSize;

    /**
     * @var integer Maximum message backtracking time for backtracking queues, range 0-43,200 seconds. 0 means message backtracking is not enabled.
     */
    public $RewindSeconds;

    /**
     * @var integer Creation time of queues. Returns a Unix timestamp, accurate to milliseconds.
     */
    public $CreateTime;

    /**
     * @var integer The last time the queue attribute was modified. Returns a Unix timestamp, accurate to milliseconds.
     */
    public $LastModifyTime;

    /**
     * @var integer Total number of active messages (not being consumed) in queue, an approximate value.
     */
    public $ActiveMsgNum;

    /**
     * @var integer Total number of inactive messages (being consumed) in queue, an approximate value.
     */
    public $InactiveMsgNum;

    /**
     * @var integer Number of delayed messages.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DelayMsgNum;

    /**
     * @var integer Number of retained messages which have been deleted by the `DelMsg` API but are still within their rewind time range.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RewindMsgNum;

    /**
     * @var integer Minimum unconsumed time of message in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MinMsgTime;

    /**
     * @var boolean Transaction message queue. true: transaction message type; false: other message types.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Transaction;

    /**
     * @var array Dead letter queue.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeadLetterSource;

    /**
     * @var CmqDeadLetterPolicy Dead letter queue policy.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeadLetterPolicy;

    /**
     * @var CmqTransactionPolicy Transaction message policy.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TransactionPolicy;

    /**
     * @var integer Creator `Uin`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUin;

    /**
     * @var array Associated tag.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var boolean Message trace. true: enabled; false: not enabled
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Trace;

    /**
     * @var string Tenant ID
     */
    public $TenantId;

    /**
     * @var string Specifies the namespace name.
     */
    public $NamespaceName;

    /**
     * @var integer Cluster status. 0: Creating, 1: Normal, 2: Deleting, 3: Deleted, 4: Isolating, 5: Creation failed, 6: Deletion failed
     */
    public $Status;

    /**
     * @var integer Maximum Number of Unacknowledged Messages
     */
    public $MaxUnackedMsgNum;

    /**
     * @var integer Maximum Message Backlog Size (bytes)
     */
    public $MaxMsgBacklogSize;

    /**
     * @var integer Queue retrospective storage space. Value range: 1024 MB to 10240 MB. 0 indicates disabled.
     */
    public $RetentionSizeInMB;

    /**
     * @param string $QueueId Message queue ID.
     * @param string $QueueName Message queue name.
     * @param integer $Qps Limit on the number of messages produced per second. The size of consumed messages is 1.1 times this value.
     * @param integer $Bps Bandwidth limit.
     * @param integer $MaxDelaySeconds Specifies the maximum retention time for in-flight messages, which must be less than the message retention period.
     * @param integer $MaxMsgHeapNum Maximum number of heaped messages. The value range is 1,000,000–10,000,000 during the beta test and can be 1,000,000–1,000,000,000 after the product is officially released. The default value is 10,000,000 during the beta test and will be 100,000,000 after the product is officially released.
     * @param integer $PollingWaitSeconds Long polling waiting time for message receipt. Value range 0-30 seconds, default value 0.
     * @param integer $MsgRetentionSeconds Message retention period. The value range is 60-1,296,000 seconds (1 min-15 days), with a default value of 345,600 seconds (4 days).
     * @param integer $VisibilityTimeout Message visibility timeout period. The value range is 1-43,200 seconds (within 12 hours), with a default value of 30.
     * @param integer $MaxMsgSize Maximum message length. Range: 1,024-1,048,576 bytes (i.e., 1K-1,024K). Default value is 65,536.
     * @param integer $RewindSeconds Maximum message backtracking time for backtracking queues, range 0-43,200 seconds. 0 means message backtracking is not enabled.
     * @param integer $CreateTime Creation time of queues. Returns a Unix timestamp, accurate to milliseconds.
     * @param integer $LastModifyTime The last time the queue attribute was modified. Returns a Unix timestamp, accurate to milliseconds.
     * @param integer $ActiveMsgNum Total number of active messages (not being consumed) in queue, an approximate value.
     * @param integer $InactiveMsgNum Total number of inactive messages (being consumed) in queue, an approximate value.
     * @param integer $DelayMsgNum Number of delayed messages.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RewindMsgNum Number of retained messages which have been deleted by the `DelMsg` API but are still within their rewind time range.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MinMsgTime Minimum unconsumed time of message in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $Transaction Transaction message queue. true: transaction message type; false: other message types.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $DeadLetterSource Dead letter queue.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param CmqDeadLetterPolicy $DeadLetterPolicy Dead letter queue policy.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param CmqTransactionPolicy $TransactionPolicy Transaction message policy.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateUin Creator `Uin`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Associated tag.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $Trace Message trace. true: enabled; false: not enabled
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TenantId Tenant ID
     * @param string $NamespaceName Specifies the namespace name.
     * @param integer $Status Cluster status. 0: Creating, 1: Normal, 2: Deleting, 3: Deleted, 4: Isolating, 5: Creation failed, 6: Deletion failed
     * @param integer $MaxUnackedMsgNum Maximum Number of Unacknowledged Messages
     * @param integer $MaxMsgBacklogSize Maximum Message Backlog Size (bytes)
     * @param integer $RetentionSizeInMB Queue retrospective storage space. Value range: 1024 MB to 10240 MB. 0 indicates disabled.
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
        if (array_key_exists("QueueId",$param) and $param["QueueId"] !== null) {
            $this->QueueId = $param["QueueId"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Bps",$param) and $param["Bps"] !== null) {
            $this->Bps = $param["Bps"];
        }

        if (array_key_exists("MaxDelaySeconds",$param) and $param["MaxDelaySeconds"] !== null) {
            $this->MaxDelaySeconds = $param["MaxDelaySeconds"];
        }

        if (array_key_exists("MaxMsgHeapNum",$param) and $param["MaxMsgHeapNum"] !== null) {
            $this->MaxMsgHeapNum = $param["MaxMsgHeapNum"];
        }

        if (array_key_exists("PollingWaitSeconds",$param) and $param["PollingWaitSeconds"] !== null) {
            $this->PollingWaitSeconds = $param["PollingWaitSeconds"];
        }

        if (array_key_exists("MsgRetentionSeconds",$param) and $param["MsgRetentionSeconds"] !== null) {
            $this->MsgRetentionSeconds = $param["MsgRetentionSeconds"];
        }

        if (array_key_exists("VisibilityTimeout",$param) and $param["VisibilityTimeout"] !== null) {
            $this->VisibilityTimeout = $param["VisibilityTimeout"];
        }

        if (array_key_exists("MaxMsgSize",$param) and $param["MaxMsgSize"] !== null) {
            $this->MaxMsgSize = $param["MaxMsgSize"];
        }

        if (array_key_exists("RewindSeconds",$param) and $param["RewindSeconds"] !== null) {
            $this->RewindSeconds = $param["RewindSeconds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastModifyTime",$param) and $param["LastModifyTime"] !== null) {
            $this->LastModifyTime = $param["LastModifyTime"];
        }

        if (array_key_exists("ActiveMsgNum",$param) and $param["ActiveMsgNum"] !== null) {
            $this->ActiveMsgNum = $param["ActiveMsgNum"];
        }

        if (array_key_exists("InactiveMsgNum",$param) and $param["InactiveMsgNum"] !== null) {
            $this->InactiveMsgNum = $param["InactiveMsgNum"];
        }

        if (array_key_exists("DelayMsgNum",$param) and $param["DelayMsgNum"] !== null) {
            $this->DelayMsgNum = $param["DelayMsgNum"];
        }

        if (array_key_exists("RewindMsgNum",$param) and $param["RewindMsgNum"] !== null) {
            $this->RewindMsgNum = $param["RewindMsgNum"];
        }

        if (array_key_exists("MinMsgTime",$param) and $param["MinMsgTime"] !== null) {
            $this->MinMsgTime = $param["MinMsgTime"];
        }

        if (array_key_exists("Transaction",$param) and $param["Transaction"] !== null) {
            $this->Transaction = $param["Transaction"];
        }

        if (array_key_exists("DeadLetterSource",$param) and $param["DeadLetterSource"] !== null) {
            $this->DeadLetterSource = [];
            foreach ($param["DeadLetterSource"] as $key => $value){
                $obj = new CmqDeadLetterSource();
                $obj->deserialize($value);
                array_push($this->DeadLetterSource, $obj);
            }
        }

        if (array_key_exists("DeadLetterPolicy",$param) and $param["DeadLetterPolicy"] !== null) {
            $this->DeadLetterPolicy = new CmqDeadLetterPolicy();
            $this->DeadLetterPolicy->deserialize($param["DeadLetterPolicy"]);
        }

        if (array_key_exists("TransactionPolicy",$param) and $param["TransactionPolicy"] !== null) {
            $this->TransactionPolicy = new CmqTransactionPolicy();
            $this->TransactionPolicy->deserialize($param["TransactionPolicy"]);
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Trace",$param) and $param["Trace"] !== null) {
            $this->Trace = $param["Trace"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MaxUnackedMsgNum",$param) and $param["MaxUnackedMsgNum"] !== null) {
            $this->MaxUnackedMsgNum = $param["MaxUnackedMsgNum"];
        }

        if (array_key_exists("MaxMsgBacklogSize",$param) and $param["MaxMsgBacklogSize"] !== null) {
            $this->MaxMsgBacklogSize = $param["MaxMsgBacklogSize"];
        }

        if (array_key_exists("RetentionSizeInMB",$param) and $param["RetentionSizeInMB"] !== null) {
            $this->RetentionSizeInMB = $param["RetentionSizeInMB"];
        }
    }
}
