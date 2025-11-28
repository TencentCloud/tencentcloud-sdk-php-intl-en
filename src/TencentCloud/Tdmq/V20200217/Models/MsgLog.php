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
 * Message log
 *
 * @method string getMsgId() Obtain Message ID.
 * @method void setMsgId(string $MsgId) Set Message ID.
 * @method string getProducerName() Obtain Producer name.
 * @method void setProducerName(string $ProducerName) Set Producer name.
 * @method string getProduceTime() Obtain Production time.
 * @method void setProduceTime(string $ProduceTime) Set Production time.
 * @method string getProducerAddr() Obtain Producer client address.
 * @method void setProducerAddr(string $ProducerAddr) Set Producer client address.
 */
class MsgLog extends AbstractModel
{
    /**
     * @var string Message ID.
     */
    public $MsgId;

    /**
     * @var string Producer name.
     */
    public $ProducerName;

    /**
     * @var string Production time.
     */
    public $ProduceTime;

    /**
     * @var string Producer client address.
     */
    public $ProducerAddr;

    /**
     * @param string $MsgId Message ID.
     * @param string $ProducerName Producer name.
     * @param string $ProduceTime Production time.
     * @param string $ProducerAddr Producer client address.
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

        if (array_key_exists("ProducerName",$param) and $param["ProducerName"] !== null) {
            $this->ProducerName = $param["ProducerName"];
        }

        if (array_key_exists("ProduceTime",$param) and $param["ProduceTime"] !== null) {
            $this->ProduceTime = $param["ProduceTime"];
        }

        if (array_key_exists("ProducerAddr",$param) and $param["ProducerAddr"] !== null) {
            $this->ProducerAddr = $param["ProducerAddr"];
        }
    }
}
