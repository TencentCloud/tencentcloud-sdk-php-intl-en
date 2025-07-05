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
 * ModifyCmqQueueAttribute request structure.
 *
 * @method string getQueueName() Obtain Queue name, which must be unique under the same account in the same region. It can contain up to 64 letters, digits, and hyphens and must begin with a letter.
 * @method void setQueueName(string $QueueName) Set Queue name, which must be unique under the same account in the same region. It can contain up to 64 letters, digits, and hyphens and must begin with a letter.
 * @method integer getMaxMsgHeapNum() Obtain Maximum number of heaped messages. The value range is 1,000,000–10,000,000 during the beta test and can be 1,000,000–1,000,000,000 after the product is officially released. The default value is 10,000,000 during the beta test and will be 100,000,000 after the product is officially released.
 * @method void setMaxMsgHeapNum(integer $MaxMsgHeapNum) Set Maximum number of heaped messages. The value range is 1,000,000–10,000,000 during the beta test and can be 1,000,000–1,000,000,000 after the product is officially released. The default value is 10,000,000 during the beta test and will be 100,000,000 after the product is officially released.
 * @method integer getPollingWaitSeconds() Obtain Long polling wait time for message reception. Value range: 0–30 seconds. Default value: 0.
 * @method void setPollingWaitSeconds(integer $PollingWaitSeconds) Set Long polling wait time for message reception. Value range: 0–30 seconds. Default value: 0.
 * @method integer getVisibilityTimeout() Obtain Message visibility timeout period. Value range: 1–43200 seconds (i.e., 12 hours). Default value: 30.
 * @method void setVisibilityTimeout(integer $VisibilityTimeout) Set Message visibility timeout period. Value range: 1–43200 seconds (i.e., 12 hours). Default value: 30.
 * @method integer getMaxMsgSize() Obtain Max message size, which defaults to 1,024 KB for the queue of TDMQ for CMQ and cannot be modified.
 * @method void setMaxMsgSize(integer $MaxMsgSize) Set Max message size, which defaults to 1,024 KB for the queue of TDMQ for CMQ and cannot be modified.
 * @method integer getMsgRetentionSeconds() Obtain The max period during which a message is retained before it is automatically acknowledged. Value range: 30-43,200 seconds (30 seconds to 12 hours). Default value: 3600 seconds (1 hour).
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) Set The max period during which a message is retained before it is automatically acknowledged. Value range: 30-43,200 seconds (30 seconds to 12 hours). Default value: 3600 seconds (1 hour).
 * @method integer getRewindSeconds() Obtain Rewindable time of messages in the queue. Value range: 0-1,296,000s (if message rewind is enabled). The value “0” indicates that message rewind is not enabled.
 * @method void setRewindSeconds(integer $RewindSeconds) Set Rewindable time of messages in the queue. Value range: 0-1,296,000s (if message rewind is enabled). The value “0” indicates that message rewind is not enabled.
 * @method integer getFirstQueryInterval() Obtain First query time
 * @method void setFirstQueryInterval(integer $FirstQueryInterval) Set First query time
 * @method integer getMaxQueryCount() Obtain Maximum number of queries
 * @method void setMaxQueryCount(integer $MaxQueryCount) Set Maximum number of queries
 * @method string getDeadLetterQueueName() Obtain Dead letter queue name
 * @method void setDeadLetterQueueName(string $DeadLetterQueueName) Set Dead letter queue name
 * @method integer getMaxTimeToLive() Obtain Maximum period in seconds before an unconsumed message expires, which is required if `MaxTimeToLivepolicy` is 1. Value range: 300–43200. This value should be smaller than `MsgRetentionSeconds` (maximum message retention period)
 * @method void setMaxTimeToLive(integer $MaxTimeToLive) Set Maximum period in seconds before an unconsumed message expires, which is required if `MaxTimeToLivepolicy` is 1. Value range: 300–43200. This value should be smaller than `MsgRetentionSeconds` (maximum message retention period)
 * @method integer getMaxReceiveCount() Obtain Maximum number of receipts
 * @method void setMaxReceiveCount(integer $MaxReceiveCount) Set Maximum number of receipts
 * @method integer getPolicy() Obtain Dead letter queue policy
 * @method void setPolicy(integer $Policy) Set Dead letter queue policy
 * @method boolean getTrace() Obtain Whether to enable message trace. true: yes; false: no. If this field is left empty, the feature will not be enabled.
 * @method void setTrace(boolean $Trace) Set Whether to enable message trace. true: yes; false: no. If this field is left empty, the feature will not be enabled.
 * @method integer getTransaction() Obtain Whether to enable transaction. 1: yes; 0: no
 * @method void setTransaction(integer $Transaction) Set Whether to enable transaction. 1: yes; 0: no
 * @method integer getRetentionSizeInMB() Obtain Queue storage space configured for message rewind. Value range: 10,240-512,000 MB (if message rewind is enabled). The value “0” indicates that message rewind is not enabled.
 * @method void setRetentionSizeInMB(integer $RetentionSizeInMB) Set Queue storage space configured for message rewind. Value range: 10,240-512,000 MB (if message rewind is enabled). The value “0” indicates that message rewind is not enabled.
 */
class ModifyCmqQueueAttributeRequest extends AbstractModel
{
    /**
     * @var string Queue name, which must be unique under the same account in the same region. It can contain up to 64 letters, digits, and hyphens and must begin with a letter.
     */
    public $QueueName;

    /**
     * @var integer Maximum number of heaped messages. The value range is 1,000,000–10,000,000 during the beta test and can be 1,000,000–1,000,000,000 after the product is officially released. The default value is 10,000,000 during the beta test and will be 100,000,000 after the product is officially released.
     */
    public $MaxMsgHeapNum;

    /**
     * @var integer Long polling wait time for message reception. Value range: 0–30 seconds. Default value: 0.
     */
    public $PollingWaitSeconds;

    /**
     * @var integer Message visibility timeout period. Value range: 1–43200 seconds (i.e., 12 hours). Default value: 30.
     */
    public $VisibilityTimeout;

    /**
     * @var integer Max message size, which defaults to 1,024 KB for the queue of TDMQ for CMQ and cannot be modified.
     */
    public $MaxMsgSize;

    /**
     * @var integer The max period during which a message is retained before it is automatically acknowledged. Value range: 30-43,200 seconds (30 seconds to 12 hours). Default value: 3600 seconds (1 hour).
     */
    public $MsgRetentionSeconds;

    /**
     * @var integer Rewindable time of messages in the queue. Value range: 0-1,296,000s (if message rewind is enabled). The value “0” indicates that message rewind is not enabled.
     */
    public $RewindSeconds;

    /**
     * @var integer First query time
     */
    public $FirstQueryInterval;

    /**
     * @var integer Maximum number of queries
     */
    public $MaxQueryCount;

    /**
     * @var string Dead letter queue name
     */
    public $DeadLetterQueueName;

    /**
     * @var integer Maximum period in seconds before an unconsumed message expires, which is required if `MaxTimeToLivepolicy` is 1. Value range: 300–43200. This value should be smaller than `MsgRetentionSeconds` (maximum message retention period)
     */
    public $MaxTimeToLive;

    /**
     * @var integer Maximum number of receipts
     */
    public $MaxReceiveCount;

    /**
     * @var integer Dead letter queue policy
     */
    public $Policy;

    /**
     * @var boolean Whether to enable message trace. true: yes; false: no. If this field is left empty, the feature will not be enabled.
     */
    public $Trace;

    /**
     * @var integer Whether to enable transaction. 1: yes; 0: no
     */
    public $Transaction;

    /**
     * @var integer Queue storage space configured for message rewind. Value range: 10,240-512,000 MB (if message rewind is enabled). The value “0” indicates that message rewind is not enabled.
     */
    public $RetentionSizeInMB;

    /**
     * @param string $QueueName Queue name, which must be unique under the same account in the same region. It can contain up to 64 letters, digits, and hyphens and must begin with a letter.
     * @param integer $MaxMsgHeapNum Maximum number of heaped messages. The value range is 1,000,000–10,000,000 during the beta test and can be 1,000,000–1,000,000,000 after the product is officially released. The default value is 10,000,000 during the beta test and will be 100,000,000 after the product is officially released.
     * @param integer $PollingWaitSeconds Long polling wait time for message reception. Value range: 0–30 seconds. Default value: 0.
     * @param integer $VisibilityTimeout Message visibility timeout period. Value range: 1–43200 seconds (i.e., 12 hours). Default value: 30.
     * @param integer $MaxMsgSize Max message size, which defaults to 1,024 KB for the queue of TDMQ for CMQ and cannot be modified.
     * @param integer $MsgRetentionSeconds The max period during which a message is retained before it is automatically acknowledged. Value range: 30-43,200 seconds (30 seconds to 12 hours). Default value: 3600 seconds (1 hour).
     * @param integer $RewindSeconds Rewindable time of messages in the queue. Value range: 0-1,296,000s (if message rewind is enabled). The value “0” indicates that message rewind is not enabled.
     * @param integer $FirstQueryInterval First query time
     * @param integer $MaxQueryCount Maximum number of queries
     * @param string $DeadLetterQueueName Dead letter queue name
     * @param integer $MaxTimeToLive Maximum period in seconds before an unconsumed message expires, which is required if `MaxTimeToLivepolicy` is 1. Value range: 300–43200. This value should be smaller than `MsgRetentionSeconds` (maximum message retention period)
     * @param integer $MaxReceiveCount Maximum number of receipts
     * @param integer $Policy Dead letter queue policy
     * @param boolean $Trace Whether to enable message trace. true: yes; false: no. If this field is left empty, the feature will not be enabled.
     * @param integer $Transaction Whether to enable transaction. 1: yes; 0: no
     * @param integer $RetentionSizeInMB Queue storage space configured for message rewind. Value range: 10,240-512,000 MB (if message rewind is enabled). The value “0” indicates that message rewind is not enabled.
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
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("MaxMsgHeapNum",$param) and $param["MaxMsgHeapNum"] !== null) {
            $this->MaxMsgHeapNum = $param["MaxMsgHeapNum"];
        }

        if (array_key_exists("PollingWaitSeconds",$param) and $param["PollingWaitSeconds"] !== null) {
            $this->PollingWaitSeconds = $param["PollingWaitSeconds"];
        }

        if (array_key_exists("VisibilityTimeout",$param) and $param["VisibilityTimeout"] !== null) {
            $this->VisibilityTimeout = $param["VisibilityTimeout"];
        }

        if (array_key_exists("MaxMsgSize",$param) and $param["MaxMsgSize"] !== null) {
            $this->MaxMsgSize = $param["MaxMsgSize"];
        }

        if (array_key_exists("MsgRetentionSeconds",$param) and $param["MsgRetentionSeconds"] !== null) {
            $this->MsgRetentionSeconds = $param["MsgRetentionSeconds"];
        }

        if (array_key_exists("RewindSeconds",$param) and $param["RewindSeconds"] !== null) {
            $this->RewindSeconds = $param["RewindSeconds"];
        }

        if (array_key_exists("FirstQueryInterval",$param) and $param["FirstQueryInterval"] !== null) {
            $this->FirstQueryInterval = $param["FirstQueryInterval"];
        }

        if (array_key_exists("MaxQueryCount",$param) and $param["MaxQueryCount"] !== null) {
            $this->MaxQueryCount = $param["MaxQueryCount"];
        }

        if (array_key_exists("DeadLetterQueueName",$param) and $param["DeadLetterQueueName"] !== null) {
            $this->DeadLetterQueueName = $param["DeadLetterQueueName"];
        }

        if (array_key_exists("MaxTimeToLive",$param) and $param["MaxTimeToLive"] !== null) {
            $this->MaxTimeToLive = $param["MaxTimeToLive"];
        }

        if (array_key_exists("MaxReceiveCount",$param) and $param["MaxReceiveCount"] !== null) {
            $this->MaxReceiveCount = $param["MaxReceiveCount"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Trace",$param) and $param["Trace"] !== null) {
            $this->Trace = $param["Trace"];
        }

        if (array_key_exists("Transaction",$param) and $param["Transaction"] !== null) {
            $this->Transaction = $param["Transaction"];
        }

        if (array_key_exists("RetentionSizeInMB",$param) and $param["RetentionSizeInMB"] !== null) {
            $this->RetentionSizeInMB = $param["RetentionSizeInMB"];
        }
    }
}
