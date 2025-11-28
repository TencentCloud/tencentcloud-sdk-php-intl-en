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
 * Consumption log
 *
 * @method string getMsgId() Obtain Message ID.
 * @method void setMsgId(string $MsgId) Set Message ID.
 * @method string getConsumerGroup() Obtain Consumption group.
 * @method void setConsumerGroup(string $ConsumerGroup) Set Consumption group.
 * @method string getConsumerName() Obtain Consumer name.
 * @method void setConsumerName(string $ConsumerName) Set Consumer name.
 * @method string getConsumeTime() Obtain Consumption time.
 * @method void setConsumeTime(string $ConsumeTime) Set Consumption time.
 * @method string getConsumerAddr() Obtain Consumer client address.
 * @method void setConsumerAddr(string $ConsumerAddr) Set Consumer client address.
 * @method integer getConsumeUseTime() Obtain Consumption time (milliseconds).
 * @method void setConsumeUseTime(integer $ConsumeUseTime) Set Consumption time (milliseconds).
 * @method string getStatus() Obtain Consumption status.
 * @method void setStatus(string $Status) Set Consumption status.
 */
class ConsumerLog extends AbstractModel
{
    /**
     * @var string Message ID.
     */
    public $MsgId;

    /**
     * @var string Consumption group.
     */
    public $ConsumerGroup;

    /**
     * @var string Consumer name.
     */
    public $ConsumerName;

    /**
     * @var string Consumption time.
     */
    public $ConsumeTime;

    /**
     * @var string Consumer client address.
     */
    public $ConsumerAddr;

    /**
     * @var integer Consumption time (milliseconds).
     */
    public $ConsumeUseTime;

    /**
     * @var string Consumption status.
     */
    public $Status;

    /**
     * @param string $MsgId Message ID.
     * @param string $ConsumerGroup Consumption group.
     * @param string $ConsumerName Consumer name.
     * @param string $ConsumeTime Consumption time.
     * @param string $ConsumerAddr Consumer client address.
     * @param integer $ConsumeUseTime Consumption time (milliseconds).
     * @param string $Status Consumption status.
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

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("ConsumerName",$param) and $param["ConsumerName"] !== null) {
            $this->ConsumerName = $param["ConsumerName"];
        }

        if (array_key_exists("ConsumeTime",$param) and $param["ConsumeTime"] !== null) {
            $this->ConsumeTime = $param["ConsumeTime"];
        }

        if (array_key_exists("ConsumerAddr",$param) and $param["ConsumerAddr"] !== null) {
            $this->ConsumerAddr = $param["ConsumerAddr"];
        }

        if (array_key_exists("ConsumeUseTime",$param) and $param["ConsumeUseTime"] !== null) {
            $this->ConsumeUseTime = $param["ConsumeUseTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
