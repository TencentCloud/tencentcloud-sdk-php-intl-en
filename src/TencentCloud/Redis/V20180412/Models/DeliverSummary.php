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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Shipping information
 *
 * @method string getDeliverType() Obtain <p>Delivery Type, store (storage class), mq (message channel)</p>
 * @method void setDeliverType(string $DeliverType) Set <p>Delivery Type, store (storage class), mq (message channel)</p>
 * @method string getDeliverSubType() Obtain <p>Delivery subtype: cls, ckafka.</p>
 * @method void setDeliverSubType(string $DeliverSubType) Set <p>Delivery subtype: cls, ckafka.</p>
 * @method string getDeliverConsumer() Obtain <p>Subscriber</p>
 * @method void setDeliverConsumer(string $DeliverConsumer) Set <p>Subscriber</p>
 * @method string getDeliverConsumerName() Obtain <p>Subscriber name</p>
 * @method void setDeliverConsumerName(string $DeliverConsumerName) Set <p>Subscriber name</p>
 * @method string getDeliverError() Obtain <p>Delivery</p>
 * @method void setDeliverError(string $DeliverError) Set <p>Delivery</p>
 */
class DeliverSummary extends AbstractModel
{
    /**
     * @var string <p>Delivery Type, store (storage class), mq (message channel)</p>
     */
    public $DeliverType;

    /**
     * @var string <p>Delivery subtype: cls, ckafka.</p>
     */
    public $DeliverSubType;

    /**
     * @var string <p>Subscriber</p>
     */
    public $DeliverConsumer;

    /**
     * @var string <p>Subscriber name</p>
     */
    public $DeliverConsumerName;

    /**
     * @var string <p>Delivery</p>
     */
    public $DeliverError;

    /**
     * @param string $DeliverType <p>Delivery Type, store (storage class), mq (message channel)</p>
     * @param string $DeliverSubType <p>Delivery subtype: cls, ckafka.</p>
     * @param string $DeliverConsumer <p>Subscriber</p>
     * @param string $DeliverConsumerName <p>Subscriber name</p>
     * @param string $DeliverError <p>Delivery</p>
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
        if (array_key_exists("DeliverType",$param) and $param["DeliverType"] !== null) {
            $this->DeliverType = $param["DeliverType"];
        }

        if (array_key_exists("DeliverSubType",$param) and $param["DeliverSubType"] !== null) {
            $this->DeliverSubType = $param["DeliverSubType"];
        }

        if (array_key_exists("DeliverConsumer",$param) and $param["DeliverConsumer"] !== null) {
            $this->DeliverConsumer = $param["DeliverConsumer"];
        }

        if (array_key_exists("DeliverConsumerName",$param) and $param["DeliverConsumerName"] !== null) {
            $this->DeliverConsumerName = $param["DeliverConsumerName"];
        }

        if (array_key_exists("DeliverError",$param) and $param["DeliverError"] !== null) {
            $this->DeliverError = $param["DeliverError"];
        }
    }
}
