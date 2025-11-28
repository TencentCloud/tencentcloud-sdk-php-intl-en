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
 * RocketMQ Message Log
 *
 * @method string getMsgId() Obtain Message ID
 * @method void setMsgId(string $MsgId) Set Message ID
 * @method string getMsgTag() Obtain Message tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMsgTag(string $MsgTag) Set Message tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMsgKey() Obtain Message key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMsgKey(string $MsgKey) Set Message key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProducerAddr() Obtain Specifies the client ip address.
 * @method void setProducerAddr(string $ProducerAddr) Set Specifies the client ip address.
 * @method string getProduceTime() Obtain Message Sending Time
 * @method void setProduceTime(string $ProduceTime) Set Message Sending Time
 * @method string getPulsarMsgId() Obtain Pulsar Message ID
 * @method void setPulsarMsgId(string $PulsarMsgId) Set Pulsar Message ID
 * @method integer getDeadLetterResendTimes() Obtain Dead-letter resend count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeadLetterResendTimes(integer $DeadLetterResendTimes) Set Dead-letter resend count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getResendSuccessCount() Obtain Dead Letter Resend Success Count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResendSuccessCount(integer $ResendSuccessCount) Set Dead Letter Resend Success Count
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RocketMQMsgLog extends AbstractModel
{
    /**
     * @var string Message ID
     */
    public $MsgId;

    /**
     * @var string Message tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MsgTag;

    /**
     * @var string Message key.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MsgKey;

    /**
     * @var string Specifies the client ip address.
     */
    public $ProducerAddr;

    /**
     * @var string Message Sending Time
     */
    public $ProduceTime;

    /**
     * @var string Pulsar Message ID
     */
    public $PulsarMsgId;

    /**
     * @var integer Dead-letter resend count
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeadLetterResendTimes;

    /**
     * @var integer Dead Letter Resend Success Count
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResendSuccessCount;

    /**
     * @param string $MsgId Message ID
     * @param string $MsgTag Message tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MsgKey Message key.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProducerAddr Specifies the client ip address.
     * @param string $ProduceTime Message Sending Time
     * @param string $PulsarMsgId Pulsar Message ID
     * @param integer $DeadLetterResendTimes Dead-letter resend count
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ResendSuccessCount Dead Letter Resend Success Count
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("MsgTag",$param) and $param["MsgTag"] !== null) {
            $this->MsgTag = $param["MsgTag"];
        }

        if (array_key_exists("MsgKey",$param) and $param["MsgKey"] !== null) {
            $this->MsgKey = $param["MsgKey"];
        }

        if (array_key_exists("ProducerAddr",$param) and $param["ProducerAddr"] !== null) {
            $this->ProducerAddr = $param["ProducerAddr"];
        }

        if (array_key_exists("ProduceTime",$param) and $param["ProduceTime"] !== null) {
            $this->ProduceTime = $param["ProduceTime"];
        }

        if (array_key_exists("PulsarMsgId",$param) and $param["PulsarMsgId"] !== null) {
            $this->PulsarMsgId = $param["PulsarMsgId"];
        }

        if (array_key_exists("DeadLetterResendTimes",$param) and $param["DeadLetterResendTimes"] !== null) {
            $this->DeadLetterResendTimes = $param["DeadLetterResendTimes"];
        }

        if (array_key_exists("ResendSuccessCount",$param) and $param["ResendSuccessCount"] !== null) {
            $this->ResendSuccessCount = $param["ResendSuccessCount"];
        }
    }
}
