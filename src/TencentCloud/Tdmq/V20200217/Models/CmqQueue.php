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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Batch queue attribute information of CMQ
 *
 * @method string getQueueId() Obtain Message queue ID.
 * @method void setQueueId(string $QueueId) Set Message queue ID.
 * @method string getQueueName() Obtain Message queue name.
 * @method void setQueueName(string $QueueName) Set Message queue name.
 * @method integer getQps() Obtain Limit of the number of messages produced per second. The value for consumed messages is 1.1 times this value.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setQps(integer $Qps) Set Limit of the number of messages produced per second. The value for consumed messages is 1.1 times this value.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getBps() Obtain Bandwidth limit.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBps(integer $Bps) Set Bandwidth limit.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxDelaySeconds() Obtain Maximum retention period for inflight messages.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxDelaySeconds(integer $MaxDelaySeconds) Set Maximum retention period for inflight messages.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxMsgHeapNum() Obtain Maximum number of heaped messages. The value range is 1,000,000–10,000,000 during the beta test and can be 1,000,000–1,000,000,000 after the product is officially released. The default value is 10,000,000 during the beta test and will be 100,000,000 after the product is officially released.
 * @method void setMaxMsgHeapNum(integer $MaxMsgHeapNum) Set Maximum number of heaped messages. The value range is 1,000,000–10,000,000 during the beta test and can be 1,000,000–1,000,000,000 after the product is officially released. The default value is 10,000,000 during the beta test and will be 100,000,000 after the product is officially released.
 * @method integer getPollingWaitSeconds() Obtain Long polling wait time for message reception. Value range: 0–30 seconds. Default value: 0.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPollingWaitSeconds(integer $PollingWaitSeconds) Set Long polling wait time for message reception. Value range: 0–30 seconds. Default value: 0.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMsgRetentionSeconds() Obtain Message retention period. Value range: 60–1296000 seconds (i.e., 1 minute–15 days). Default value: 345600 (i.e., 4 days).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) Set Message retention period. Value range: 60–1296000 seconds (i.e., 1 minute–15 days). Default value: 345600 (i.e., 4 days).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getVisibilityTimeout() Obtain Message visibility timeout period. Value range: 1–43200 seconds (i.e., 12 hours). Default value: 30.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVisibilityTimeout(integer $VisibilityTimeout) Set Message visibility timeout period. Value range: 1–43200 seconds (i.e., 12 hours). Default value: 30.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxMsgSize() Obtain Maximum message length. Value range: 1024–1048576 bytes (i.e., 1–1024 KB). Default value: 65536.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxMsgSize(integer $MaxMsgSize) Set Maximum message length. Value range: 1024–1048576 bytes (i.e., 1–1024 KB). Default value: 65536.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRewindSeconds() Obtain Maximum time range during which a message can be rewound in the queue, which ranges from 0 to 43,200 seconds. 0 indicates that message rewind is disabled.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRewindSeconds(integer $RewindSeconds) Set Maximum time range during which a message can be rewound in the queue, which ranges from 0 to 43,200 seconds. 0 indicates that message rewind is disabled.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Queue creation time. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Queue creation time. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getLastModifyTime() Obtain Time when the queue attribute is last modified. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastModifyTime(integer $LastModifyTime) Set Time when the queue attribute is last modified. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getActiveMsgNum() Obtain Total number of messages in `Active` status (i.e., unconsumed) in the queue, which is an approximate value.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setActiveMsgNum(integer $ActiveMsgNum) Set Total number of messages in `Active` status (i.e., unconsumed) in the queue, which is an approximate value.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getInactiveMsgNum() Obtain Total number of messages in `Inactive` status (i.e., being consumed) in the queue, which is an approximate value.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInactiveMsgNum(integer $InactiveMsgNum) Set Total number of messages in `Inactive` status (i.e., being consumed) in the queue, which is an approximate value.
Note: this field may return null, indicating that no valid values can be obtained.
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
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTenantId(string $TenantId) Set Tenant ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getNamespaceName() Obtain Namespace name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNamespaceName(string $NamespaceName) Set Namespace name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Cluster status. 0: creating; 1: normal; 2: terminating; 3: deleted; 4. isolated; 5. creation failed; 6: deletion failed
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Cluster status. 0: creating; 1: normal; 2: terminating; 3: deleted; 4. isolated; 5. creation failed; 6: deletion failed
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMaxUnackedMsgNum() Obtain The maximum number of unacknowledged messages.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMaxUnackedMsgNum(integer $MaxUnackedMsgNum) Set The maximum number of unacknowledged messages.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMaxMsgBacklogSize() Obtain Maximum size of heaped messages in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMaxMsgBacklogSize(integer $MaxMsgBacklogSize) Set Maximum size of heaped messages in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getRetentionSizeInMB() Obtain Queue storage space configured for message rewind. Value range: 1,024-10,240 MB (if message rewind is enabled). The value “0” indicates that message rewind is not enabled.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRetentionSizeInMB(integer $RetentionSizeInMB) Set Queue storage space configured for message rewind. Value range: 1,024-10,240 MB (if message rewind is enabled). The value “0” indicates that message rewind is not enabled.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
     * @var integer Limit of the number of messages produced per second. The value for consumed messages is 1.1 times this value.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Qps;

    /**
     * @var integer Bandwidth limit.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Bps;

    /**
     * @var integer Maximum retention period for inflight messages.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxDelaySeconds;

    /**
     * @var integer Maximum number of heaped messages. The value range is 1,000,000–10,000,000 during the beta test and can be 1,000,000–1,000,000,000 after the product is officially released. The default value is 10,000,000 during the beta test and will be 100,000,000 after the product is officially released.
     */
    public $MaxMsgHeapNum;

    /**
     * @var integer Long polling wait time for message reception. Value range: 0–30 seconds. Default value: 0.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PollingWaitSeconds;

    /**
     * @var integer Message retention period. Value range: 60–1296000 seconds (i.e., 1 minute–15 days). Default value: 345600 (i.e., 4 days).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MsgRetentionSeconds;

    /**
     * @var integer Message visibility timeout period. Value range: 1–43200 seconds (i.e., 12 hours). Default value: 30.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VisibilityTimeout;

    /**
     * @var integer Maximum message length. Value range: 1024–1048576 bytes (i.e., 1–1024 KB). Default value: 65536.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxMsgSize;

    /**
     * @var integer Maximum time range during which a message can be rewound in the queue, which ranges from 0 to 43,200 seconds. 0 indicates that message rewind is disabled.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RewindSeconds;

    /**
     * @var integer Queue creation time. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Time when the queue attribute is last modified. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastModifyTime;

    /**
     * @var integer Total number of messages in `Active` status (i.e., unconsumed) in the queue, which is an approximate value.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ActiveMsgNum;

    /**
     * @var integer Total number of messages in `Inactive` status (i.e., being consumed) in the queue, which is an approximate value.
Note: this field may return null, indicating that no valid values can be obtained.
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
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TenantId;

    /**
     * @var string Namespace name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NamespaceName;

    /**
     * @var integer Cluster status. 0: creating; 1: normal; 2: terminating; 3: deleted; 4. isolated; 5. creation failed; 6: deletion failed
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer The maximum number of unacknowledged messages.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MaxUnackedMsgNum;

    /**
     * @var integer Maximum size of heaped messages in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MaxMsgBacklogSize;

    /**
     * @var integer Queue storage space configured for message rewind. Value range: 1,024-10,240 MB (if message rewind is enabled). The value “0” indicates that message rewind is not enabled.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RetentionSizeInMB;

    /**
     * @param string $QueueId Message queue ID.
     * @param string $QueueName Message queue name.
     * @param integer $Qps Limit of the number of messages produced per second. The value for consumed messages is 1.1 times this value.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Bps Bandwidth limit.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxDelaySeconds Maximum retention period for inflight messages.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxMsgHeapNum Maximum number of heaped messages. The value range is 1,000,000–10,000,000 during the beta test and can be 1,000,000–1,000,000,000 after the product is officially released. The default value is 10,000,000 during the beta test and will be 100,000,000 after the product is officially released.
     * @param integer $PollingWaitSeconds Long polling wait time for message reception. Value range: 0–30 seconds. Default value: 0.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MsgRetentionSeconds Message retention period. Value range: 60–1296000 seconds (i.e., 1 minute–15 days). Default value: 345600 (i.e., 4 days).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $VisibilityTimeout Message visibility timeout period. Value range: 1–43200 seconds (i.e., 12 hours). Default value: 30.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxMsgSize Maximum message length. Value range: 1024–1048576 bytes (i.e., 1–1024 KB). Default value: 65536.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RewindSeconds Maximum time range during which a message can be rewound in the queue, which ranges from 0 to 43,200 seconds. 0 indicates that message rewind is disabled.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Queue creation time. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $LastModifyTime Time when the queue attribute is last modified. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ActiveMsgNum Total number of messages in `Active` status (i.e., unconsumed) in the queue, which is an approximate value.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $InactiveMsgNum Total number of messages in `Inactive` status (i.e., being consumed) in the queue, which is an approximate value.
Note: this field may return null, indicating that no valid values can be obtained.
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
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $NamespaceName Namespace name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Cluster status. 0: creating; 1: normal; 2: terminating; 3: deleted; 4. isolated; 5. creation failed; 6: deletion failed
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MaxUnackedMsgNum The maximum number of unacknowledged messages.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MaxMsgBacklogSize Maximum size of heaped messages in bytes.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $RetentionSizeInMB Queue storage space configured for message rewind. Value range: 1,024-10,240 MB (if message rewind is enabled). The value “0” indicates that message rewind is not enabled.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
