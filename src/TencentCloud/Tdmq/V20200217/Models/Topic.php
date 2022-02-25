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
 * Topic instance
 *
 * @method string getAverageMsgSize() Obtain Average size of the messages published in the last interval in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAverageMsgSize(string $AverageMsgSize) Set Average size of the messages published in the last interval in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getConsumerCount() Obtain Number of consumers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerCount(string $ConsumerCount) Set Number of consumers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLastConfirmedEntry() Obtain Total number of recorded messages.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastConfirmedEntry(string $LastConfirmedEntry) Set Total number of recorded messages.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLastLedgerCreatedTimestamp() Obtain Time when the last ledger was created.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastLedgerCreatedTimestamp(string $LastLedgerCreatedTimestamp) Set Time when the last ledger was created.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMsgRateIn() Obtain Number of messages published by local and replicated publishers per second.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMsgRateIn(string $MsgRateIn) Set Number of messages published by local and replicated publishers per second.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMsgRateOut() Obtain Sum of the numbers of messages delivered by local and replicated consumers per second.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMsgRateOut(string $MsgRateOut) Set Sum of the numbers of messages delivered by local and replicated consumers per second.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMsgThroughputIn() Obtain Number of bytes of messages published by local and replicated publishers per second.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMsgThroughputIn(string $MsgThroughputIn) Set Number of bytes of messages published by local and replicated publishers per second.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMsgThroughputOut() Obtain Number of bytes of messages delivered by local and replicated consumers per second.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMsgThroughputOut(string $MsgThroughputOut) Set Number of bytes of messages delivered by local and replicated consumers per second.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getNumberOfEntries() Obtain Total number of recorded messages.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNumberOfEntries(string $NumberOfEntries) Set Total number of recorded messages.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPartitions() Obtain Number of partitions ≤ 0: there are no subpartitions in the topic.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPartitions(integer $Partitions) Set Number of partitions ≤ 0: there are no subpartitions in the topic.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProducerCount() Obtain Number of producers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProducerCount(string $ProducerCount) Set Number of producers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTotalSize() Obtain Total amount of all stored messages in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalSize(string $TotalSize) Set Total amount of all stored messages in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getSubTopicSets() Obtain Subpartitions in a partitioned topic.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubTopicSets(array $SubTopicSets) Set Subpartitions in a partitioned topic.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTopicType() Obtain Topic type description:
0: general message;
1: globally sequential message;
2: partitionally sequential message;
3: retry letter queue;
4: dead letter queue;
5: transaction message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTopicType(integer $TopicType) Set Topic type description:
0: general message;
1: globally sequential message;
2: partitionally sequential message;
3: retry letter queue;
4: dead letter queue;
5: transaction message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEnvironmentId() Obtain Environment (namespace) name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment (namespace) name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTopicName() Obtain Topic name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTopicName(string $TopicName) Set Topic name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Remarks (up to 128 characters).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Modification time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Modification time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProducerLimit() Obtain Maximum number of producers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProducerLimit(string $ProducerLimit) Set Maximum number of producers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getConsumerLimit() Obtain Maximum number of consumers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerLimit(string $ConsumerLimit) Set Maximum number of consumers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPulsarTopicType() Obtain `0`: Non-persistent and non-partitioned
`1`: Non-persistent and partitioned
`2`: Persistent and non-partitioned
`3`: Persistent and partitioned
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPulsarTopicType(integer $PulsarTopicType) Set `0`: Non-persistent and non-partitioned
`1`: Non-persistent and partitioned
`2`: Persistent and non-partitioned
`3`: Persistent and partitioned
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class Topic extends AbstractModel
{
    /**
     * @var string Average size of the messages published in the last interval in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AverageMsgSize;

    /**
     * @var string Number of consumers.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumerCount;

    /**
     * @var string Total number of recorded messages.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastConfirmedEntry;

    /**
     * @var string Time when the last ledger was created.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastLedgerCreatedTimestamp;

    /**
     * @var string Number of messages published by local and replicated publishers per second.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MsgRateIn;

    /**
     * @var string Sum of the numbers of messages delivered by local and replicated consumers per second.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MsgRateOut;

    /**
     * @var string Number of bytes of messages published by local and replicated publishers per second.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MsgThroughputIn;

    /**
     * @var string Number of bytes of messages delivered by local and replicated consumers per second.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MsgThroughputOut;

    /**
     * @var string Total number of recorded messages.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NumberOfEntries;

    /**
     * @var integer Number of partitions ≤ 0: there are no subpartitions in the topic.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Partitions;

    /**
     * @var string Number of producers.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProducerCount;

    /**
     * @var string Total amount of all stored messages in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalSize;

    /**
     * @var array Subpartitions in a partitioned topic.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubTopicSets;

    /**
     * @var integer Topic type description:
0: general message;
1: globally sequential message;
2: partitionally sequential message;
3: retry letter queue;
4: dead letter queue;
5: transaction message.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TopicType;

    /**
     * @var string Environment (namespace) name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EnvironmentId;

    /**
     * @var string Topic name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TopicName;

    /**
     * @var string Remarks (up to 128 characters).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Creation time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Modification time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Maximum number of producers.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProducerLimit;

    /**
     * @var string Maximum number of consumers.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumerLimit;

    /**
     * @var integer `0`: Non-persistent and non-partitioned
`1`: Non-persistent and partitioned
`2`: Persistent and non-partitioned
`3`: Persistent and partitioned
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $PulsarTopicType;

    /**
     * @param string $AverageMsgSize Average size of the messages published in the last interval in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ConsumerCount Number of consumers.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LastConfirmedEntry Total number of recorded messages.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LastLedgerCreatedTimestamp Time when the last ledger was created.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MsgRateIn Number of messages published by local and replicated publishers per second.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MsgRateOut Sum of the numbers of messages delivered by local and replicated consumers per second.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MsgThroughputIn Number of bytes of messages published by local and replicated publishers per second.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MsgThroughputOut Number of bytes of messages delivered by local and replicated consumers per second.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $NumberOfEntries Total number of recorded messages.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Partitions Number of partitions ≤ 0: there are no subpartitions in the topic.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProducerCount Number of producers.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TotalSize Total amount of all stored messages in bytes.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $SubTopicSets Subpartitions in a partitioned topic.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TopicType Topic type description:
0: general message;
1: globally sequential message;
2: partitionally sequential message;
3: retry letter queue;
4: dead letter queue;
5: transaction message.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $EnvironmentId Environment (namespace) name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TopicName Topic name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Remark Remarks (up to 128 characters).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Modification time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProducerLimit Maximum number of producers.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ConsumerLimit Maximum number of consumers.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $PulsarTopicType `0`: Non-persistent and non-partitioned
`1`: Non-persistent and partitioned
`2`: Persistent and non-partitioned
`3`: Persistent and partitioned
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
        if (array_key_exists("AverageMsgSize",$param) and $param["AverageMsgSize"] !== null) {
            $this->AverageMsgSize = $param["AverageMsgSize"];
        }

        if (array_key_exists("ConsumerCount",$param) and $param["ConsumerCount"] !== null) {
            $this->ConsumerCount = $param["ConsumerCount"];
        }

        if (array_key_exists("LastConfirmedEntry",$param) and $param["LastConfirmedEntry"] !== null) {
            $this->LastConfirmedEntry = $param["LastConfirmedEntry"];
        }

        if (array_key_exists("LastLedgerCreatedTimestamp",$param) and $param["LastLedgerCreatedTimestamp"] !== null) {
            $this->LastLedgerCreatedTimestamp = $param["LastLedgerCreatedTimestamp"];
        }

        if (array_key_exists("MsgRateIn",$param) and $param["MsgRateIn"] !== null) {
            $this->MsgRateIn = $param["MsgRateIn"];
        }

        if (array_key_exists("MsgRateOut",$param) and $param["MsgRateOut"] !== null) {
            $this->MsgRateOut = $param["MsgRateOut"];
        }

        if (array_key_exists("MsgThroughputIn",$param) and $param["MsgThroughputIn"] !== null) {
            $this->MsgThroughputIn = $param["MsgThroughputIn"];
        }

        if (array_key_exists("MsgThroughputOut",$param) and $param["MsgThroughputOut"] !== null) {
            $this->MsgThroughputOut = $param["MsgThroughputOut"];
        }

        if (array_key_exists("NumberOfEntries",$param) and $param["NumberOfEntries"] !== null) {
            $this->NumberOfEntries = $param["NumberOfEntries"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("ProducerCount",$param) and $param["ProducerCount"] !== null) {
            $this->ProducerCount = $param["ProducerCount"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("SubTopicSets",$param) and $param["SubTopicSets"] !== null) {
            $this->SubTopicSets = [];
            foreach ($param["SubTopicSets"] as $key => $value){
                $obj = new PartitionsTopic();
                $obj->deserialize($value);
                array_push($this->SubTopicSets, $obj);
            }
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ProducerLimit",$param) and $param["ProducerLimit"] !== null) {
            $this->ProducerLimit = $param["ProducerLimit"];
        }

        if (array_key_exists("ConsumerLimit",$param) and $param["ConsumerLimit"] !== null) {
            $this->ConsumerLimit = $param["ConsumerLimit"];
        }

        if (array_key_exists("PulsarTopicType",$param) and $param["PulsarTopicType"] !== null) {
            $this->PulsarTopicType = $param["PulsarTopicType"];
        }
    }
}
