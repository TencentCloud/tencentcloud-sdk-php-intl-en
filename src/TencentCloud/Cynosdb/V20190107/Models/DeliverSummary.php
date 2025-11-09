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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log shipping information.
 *
 * @method string getDeliverType() Obtain Select the delivery type, storage class, message channel.
 * @method void setDeliverType(string $DeliverType) Set Select the delivery type, storage class, message channel.
 * @method string getDeliverSubType() Obtain Specifies the delivery subtype: cls, ckafka.
 * @method void setDeliverSubType(string $DeliverSubType) Set Specifies the delivery subtype: cls, ckafka.
 * @method string getDeliverConsumer() Obtain Sender.
 * @method void setDeliverConsumer(string $DeliverConsumer) Set Sender.
 * @method string getDeliverConsumerName() Obtain Specifies the name of the sender.
 * @method void setDeliverConsumerName(string $DeliverConsumerName) Set Specifies the name of the sender.
 */
class DeliverSummary extends AbstractModel
{
    /**
     * @var string Select the delivery type, storage class, message channel.
     */
    public $DeliverType;

    /**
     * @var string Specifies the delivery subtype: cls, ckafka.
     */
    public $DeliverSubType;

    /**
     * @var string Sender.
     */
    public $DeliverConsumer;

    /**
     * @var string Specifies the name of the sender.
     */
    public $DeliverConsumerName;

    /**
     * @param string $DeliverType Select the delivery type, storage class, message channel.
     * @param string $DeliverSubType Specifies the delivery subtype: cls, ckafka.
     * @param string $DeliverConsumer Sender.
     * @param string $DeliverConsumerName Specifies the name of the sender.
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
    }
}
