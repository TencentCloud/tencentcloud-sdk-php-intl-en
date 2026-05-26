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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log shipping information.
 *
 * @method string getDeliverConsumer() Obtain <p>Delivery consumers currently only support CLS</p>
 * @method void setDeliverConsumer(string $DeliverConsumer) Set <p>Delivery consumers currently only support CLS</p>
 * @method string getDeliverConsumerName() Obtain <p>Consumer name submission, currently only support CLS</p>
 * @method void setDeliverConsumerName(string $DeliverConsumerName) Set <p>Consumer name submission, currently only support CLS</p>
 * @method string getDeliverType() Obtain <p>Currently only support mq for the delivery type</p>
 * @method void setDeliverType(string $DeliverType) Set <p>Currently only support mq for the delivery type</p>
 * @method string getDeliverSubType() Obtain <p>Delivery subtype, currently only support CLS</p>
 * @method void setDeliverSubType(string $DeliverSubType) Set <p>Delivery subtype, currently only support CLS</p>
 * @method string getDeliverError() Obtain <p>Delivery error</p>
 * @method void setDeliverError(string $DeliverError) Set <p>Delivery error</p>
 */
class DeliverSummary extends AbstractModel
{
    /**
     * @var string <p>Delivery consumers currently only support CLS</p>
     */
    public $DeliverConsumer;

    /**
     * @var string <p>Consumer name submission, currently only support CLS</p>
     */
    public $DeliverConsumerName;

    /**
     * @var string <p>Currently only support mq for the delivery type</p>
     */
    public $DeliverType;

    /**
     * @var string <p>Delivery subtype, currently only support CLS</p>
     */
    public $DeliverSubType;

    /**
     * @var string <p>Delivery error</p>
     */
    public $DeliverError;

    /**
     * @param string $DeliverConsumer <p>Delivery consumers currently only support CLS</p>
     * @param string $DeliverConsumerName <p>Consumer name submission, currently only support CLS</p>
     * @param string $DeliverType <p>Currently only support mq for the delivery type</p>
     * @param string $DeliverSubType <p>Delivery subtype, currently only support CLS</p>
     * @param string $DeliverError <p>Delivery error</p>
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
        if (array_key_exists("DeliverConsumer",$param) and $param["DeliverConsumer"] !== null) {
            $this->DeliverConsumer = $param["DeliverConsumer"];
        }

        if (array_key_exists("DeliverConsumerName",$param) and $param["DeliverConsumerName"] !== null) {
            $this->DeliverConsumerName = $param["DeliverConsumerName"];
        }

        if (array_key_exists("DeliverType",$param) and $param["DeliverType"] !== null) {
            $this->DeliverType = $param["DeliverType"];
        }

        if (array_key_exists("DeliverSubType",$param) and $param["DeliverSubType"] !== null) {
            $this->DeliverSubType = $param["DeliverSubType"];
        }

        if (array_key_exists("DeliverError",$param) and $param["DeliverError"] !== null) {
            $this->DeliverError = $param["DeliverError"];
        }
    }
}
