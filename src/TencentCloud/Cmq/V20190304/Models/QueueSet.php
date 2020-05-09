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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Batch queue attribute information
 *
 * @method string getQueueId() Obtain QueueId
 * @method void setQueueId(string $QueueId) Set QueueId
 * @method string getQueueName() Obtain QueueName
 * @method void setQueueName(string $QueueName) Set QueueName
 * @method integer getQps() Obtain Qps
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setQps(integer $Qps) Set Qps
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getBps() Obtain Bps
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBps(integer $Bps) Set Bps
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxDelaySeconds() Obtain MaxDelaySeconds
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxDelaySeconds(integer $MaxDelaySeconds) Set MaxDelaySeconds
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxMsgHeapNum() Obtain MaxMsgHeapNum
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxMsgHeapNum(integer $MaxMsgHeapNum) Set MaxMsgHeapNum
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPollingWaitSeconds() Obtain PollingWaitSeconds
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPollingWaitSeconds(integer $PollingWaitSeconds) Set PollingWaitSeconds
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMsgRetentionSeconds() Obtain MsgRetentionSeconds
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) Set MsgRetentionSeconds
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getVisibilityTimeout() Obtain VisibilityTimeout
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVisibilityTimeout(integer $VisibilityTimeout) Set VisibilityTimeout
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxMsgSize() Obtain MaxMsgSize
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxMsgSize(integer $MaxMsgSize) Set MaxMsgSize
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRewindSeconds() Obtain RewindSeconds
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRewindSeconds(integer $RewindSeconds) Set RewindSeconds
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain CreateTime
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set CreateTime
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getLastModifyTime() Obtain LastModifyTime
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastModifyTime(integer $LastModifyTime) Set LastModifyTime
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getActiveMsgNum() Obtain ActiveMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setActiveMsgNum(integer $ActiveMsgNum) Set ActiveMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getInactiveMsgNum() Obtain InactiveMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInactiveMsgNum(integer $InactiveMsgNum) Set InactiveMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDelayMsgNum() Obtain DelayMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDelayMsgNum(integer $DelayMsgNum) Set DelayMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRewindMsgNum() Obtain RewindMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRewindMsgNum(integer $RewindMsgNum) Set RewindMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMinMsgTime() Obtain MinMsgTime
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMinMsgTime(integer $MinMsgTime) Set MinMsgTime
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getTransaction() Obtain Transaction
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTransaction(boolean $Transaction) Set Transaction
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getDeadLetterSource() Obtain DeadLetterSource
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeadLetterSource(array $DeadLetterSource) Set DeadLetterSource
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DeadLetterPolicy getDeadLetterPolicy() Obtain DeadLetterPolicy
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeadLetterPolicy(DeadLetterPolicy $DeadLetterPolicy) Set DeadLetterPolicy
Note: this field may return null, indicating that no valid values can be obtained.
 * @method TransactionPolicy getTransactionPolicy() Obtain TransactionPolicy
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTransactionPolicy(TransactionPolicy $TransactionPolicy) Set TransactionPolicy
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateUin() Obtain Creator `uin`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUin(integer $CreateUin) Set Creator `uin`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getTrace() Obtain Message trace flag. true: enabled, false: not enabled
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTrace(boolean $Trace) Set Message trace flag. true: enabled, false: not enabled
Note: this field may return null, indicating that no valid values can be obtained.
 */
class QueueSet extends AbstractModel
{
    /**
     * @var string QueueId
     */
    public $QueueId;

    /**
     * @var string QueueName
     */
    public $QueueName;

    /**
     * @var integer Qps
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Qps;

    /**
     * @var integer Bps
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Bps;

    /**
     * @var integer MaxDelaySeconds
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxDelaySeconds;

    /**
     * @var integer MaxMsgHeapNum
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxMsgHeapNum;

    /**
     * @var integer PollingWaitSeconds
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PollingWaitSeconds;

    /**
     * @var integer MsgRetentionSeconds
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MsgRetentionSeconds;

    /**
     * @var integer VisibilityTimeout
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VisibilityTimeout;

    /**
     * @var integer MaxMsgSize
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxMsgSize;

    /**
     * @var integer RewindSeconds
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RewindSeconds;

    /**
     * @var integer CreateTime
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer LastModifyTime
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastModifyTime;

    /**
     * @var integer ActiveMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ActiveMsgNum;

    /**
     * @var integer InactiveMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InactiveMsgNum;

    /**
     * @var integer DelayMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DelayMsgNum;

    /**
     * @var integer RewindMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RewindMsgNum;

    /**
     * @var integer MinMsgTime
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MinMsgTime;

    /**
     * @var boolean Transaction
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Transaction;

    /**
     * @var array DeadLetterSource
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeadLetterSource;

    /**
     * @var DeadLetterPolicy DeadLetterPolicy
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeadLetterPolicy;

    /**
     * @var TransactionPolicy TransactionPolicy
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TransactionPolicy;

    /**
     * @var integer Creator `uin`
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUin;

    /**
     * @var array Tag
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var boolean Message trace flag. true: enabled, false: not enabled
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Trace;

    /**
     * @param string $QueueId QueueId
     * @param string $QueueName QueueName
     * @param integer $Qps Qps
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Bps Bps
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxDelaySeconds MaxDelaySeconds
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxMsgHeapNum MaxMsgHeapNum
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $PollingWaitSeconds PollingWaitSeconds
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MsgRetentionSeconds MsgRetentionSeconds
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $VisibilityTimeout VisibilityTimeout
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxMsgSize MaxMsgSize
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RewindSeconds RewindSeconds
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime CreateTime
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $LastModifyTime LastModifyTime
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ActiveMsgNum ActiveMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $InactiveMsgNum InactiveMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $DelayMsgNum DelayMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RewindMsgNum RewindMsgNum
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MinMsgTime MinMsgTime
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $Transaction Transaction
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $DeadLetterSource DeadLetterSource
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DeadLetterPolicy $DeadLetterPolicy DeadLetterPolicy
Note: this field may return null, indicating that no valid values can be obtained.
     * @param TransactionPolicy $TransactionPolicy TransactionPolicy
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateUin Creator `uin`
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $Trace Message trace flag. true: enabled, false: not enabled
Note: this field may return null, indicating that no valid values can be obtained.
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
                $obj = new DeadLetterSource();
                $obj->deserialize($value);
                array_push($this->DeadLetterSource, $obj);
            }
        }

        if (array_key_exists("DeadLetterPolicy",$param) and $param["DeadLetterPolicy"] !== null) {
            $this->DeadLetterPolicy = new DeadLetterPolicy();
            $this->DeadLetterPolicy->deserialize($param["DeadLetterPolicy"]);
        }

        if (array_key_exists("TransactionPolicy",$param) and $param["TransactionPolicy"] !== null) {
            $this->TransactionPolicy = new TransactionPolicy();
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
    }
}
