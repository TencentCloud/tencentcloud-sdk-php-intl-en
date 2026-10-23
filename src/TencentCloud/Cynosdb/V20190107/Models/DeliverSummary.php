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
 * @method string getDeliverType() Obtain Delivery type. Valid values: `store` (storage class), `mq` (message channel).
 * @method void setDeliverType(string $DeliverType) Set Delivery type. Valid values: `store` (storage class), `mq` (message channel).
 * @method string getDeliverSubType() Obtain Delivery subtype: cls, ckafka.
 * @method void setDeliverSubType(string $DeliverSubType) Set Delivery subtype: cls, ckafka.
 * @method string getDeliverConsumer() Obtain Submitter
 * @method void setDeliverConsumer(string $DeliverConsumer) Set Submitter
 * @method string getDeliverConsumerName() Obtain Submitter name
 * @method void setDeliverConsumerName(string $DeliverConsumerName) Set Submitter name
 * @method string getDeliverError() Obtain Submission exception error
 * @method void setDeliverError(string $DeliverError) Set Submission exception error
 */
class DeliverSummary extends AbstractModel
{
    /**
     * @var string Delivery type. Valid values: `store` (storage class), `mq` (message channel).
     */
    public $DeliverType;

    /**
     * @var string Delivery subtype: cls, ckafka.
     */
    public $DeliverSubType;

    /**
     * @var string Submitter
     */
    public $DeliverConsumer;

    /**
     * @var string Submitter name
     */
    public $DeliverConsumerName;

    /**
     * @var string Submission exception error
     */
    public $DeliverError;

    /**
     * @param string $DeliverType Delivery type. Valid values: `store` (storage class), `mq` (message channel).
     * @param string $DeliverSubType Delivery subtype: cls, ckafka.
     * @param string $DeliverConsumer Submitter
     * @param string $DeliverConsumerName Submitter name
     * @param string $DeliverError Submission exception error
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
