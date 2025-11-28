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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Message log
 *
 * @method string getMsgId() Obtain Message ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMsgId(string $MsgId) Set Message ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTags() Obtain Message tag

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(string $Tags) Set Message tag

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKeys() Obtain Message key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeys(string $Keys) Set Message key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProducerAddr() Obtain Client address.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProducerAddr(string $ProducerAddr) Set Client address.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProduceTime() Obtain Message Sending Time	
	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProduceTime(string $ProduceTime) Set Message Sending Time	
	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDeadLetterResendTimes() Obtain Dead-letter resend count	
	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeadLetterResendTimes(integer $DeadLetterResendTimes) Set Dead-letter resend count	
	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDeadLetterResendSuccessTimes() Obtain Dead Letter Resend Success Count

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeadLetterResendSuccessTimes(integer $DeadLetterResendSuccessTimes) Set Dead Letter Resend Success Count

Note: This field may return null, indicating that no valid values can be obtained.
 */
class MessageItem extends AbstractModel
{
    /**
     * @var string Message ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MsgId;

    /**
     * @var string Message tag

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Message key.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Keys;

    /**
     * @var string Client address.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProducerAddr;

    /**
     * @var string Message Sending Time	
	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProduceTime;

    /**
     * @var integer Dead-letter resend count	
	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeadLetterResendTimes;

    /**
     * @var integer Dead Letter Resend Success Count

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeadLetterResendSuccessTimes;

    /**
     * @param string $MsgId Message ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Tags Message tag

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Keys Message key.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProducerAddr Client address.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProduceTime Message Sending Time	
	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DeadLetterResendTimes Dead-letter resend count	
	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DeadLetterResendSuccessTimes Dead Letter Resend Success Count

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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("ProducerAddr",$param) and $param["ProducerAddr"] !== null) {
            $this->ProducerAddr = $param["ProducerAddr"];
        }

        if (array_key_exists("ProduceTime",$param) and $param["ProduceTime"] !== null) {
            $this->ProduceTime = $param["ProduceTime"];
        }

        if (array_key_exists("DeadLetterResendTimes",$param) and $param["DeadLetterResendTimes"] !== null) {
            $this->DeadLetterResendTimes = $param["DeadLetterResendTimes"];
        }

        if (array_key_exists("DeadLetterResendSuccessTimes",$param) and $param["DeadLetterResendSuccessTimes"] !== null) {
            $this->DeadLetterResendSuccessTimes = $param["DeadLetterResendSuccessTimes"];
        }
    }
}
