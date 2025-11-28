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
 * DescribeMsgTrace request structure.
 *
 * @method string getEnvironmentId() Obtain Environment (namespace).
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment (namespace).
 * @method string getMsgId() Obtain Message ID.
 * @method void setMsgId(string $MsgId) Set Message ID.
 * @method string getProduceTime() Obtain Message production time.
 * @method void setProduceTime(string $ProduceTime) Set Message production time.
 * @method integer getOffset() Obtain Starting index. Default is 0 if left empty.
 * @method void setOffset(integer $Offset) Set Starting index. Default is 0 if left empty.
 * @method integer getLimit() Obtain Number of returns, default to 10 if not specified, maximum value: 20.
 * @method void setLimit(integer $Limit) Set Number of returns, default to 10 if not specified, maximum value: 20.
 * @method string getSubscriptionName() Obtain Fuzzy matching of consumer group name.
 * @method void setSubscriptionName(string $SubscriptionName) Set Fuzzy matching of consumer group name.
 * @method string getClusterId() Obtain Pulsar cluster ID
 * @method void setClusterId(string $ClusterId) Set Pulsar cluster ID
 */
class DescribeMsgTraceRequest extends AbstractModel
{
    /**
     * @var string Environment (namespace).
     */
    public $EnvironmentId;

    /**
     * @var string Message ID.
     */
    public $MsgId;

    /**
     * @var string Message production time.
     */
    public $ProduceTime;

    /**
     * @var integer Starting index. Default is 0 if left empty.
     */
    public $Offset;

    /**
     * @var integer Number of returns, default to 10 if not specified, maximum value: 20.
     */
    public $Limit;

    /**
     * @var string Fuzzy matching of consumer group name.
     */
    public $SubscriptionName;

    /**
     * @var string Pulsar cluster ID
     */
    public $ClusterId;

    /**
     * @param string $EnvironmentId Environment (namespace).
     * @param string $MsgId Message ID.
     * @param string $ProduceTime Message production time.
     * @param integer $Offset Starting index. Default is 0 if left empty.
     * @param integer $Limit Number of returns, default to 10 if not specified, maximum value: 20.
     * @param string $SubscriptionName Fuzzy matching of consumer group name.
     * @param string $ClusterId Pulsar cluster ID
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("ProduceTime",$param) and $param["ProduceTime"] !== null) {
            $this->ProduceTime = $param["ProduceTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SubscriptionName",$param) and $param["SubscriptionName"] !== null) {
            $this->SubscriptionName = $param["SubscriptionName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
