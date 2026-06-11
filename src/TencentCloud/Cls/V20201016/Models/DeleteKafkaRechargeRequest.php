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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteKafkaRecharge request structure.
 *
 * @method string getId() Obtain Kafka import configuration Id.

-Create a Kafka Data Subscription Task (https://www.tencentcloud.com/document/product/614/94448?from_cn_redirect=1) to obtain the Kafka import configuration Id.
-Get the Kafka import configuration Id by [searching the Kafka Data Subscription Task list](https://www.tencentcloud.com/document/product/614/94446?from_cn_redirect=1).
 * @method void setId(string $Id) Set Kafka import configuration Id.

-Create a Kafka Data Subscription Task (https://www.tencentcloud.com/document/product/614/94448?from_cn_redirect=1) to obtain the Kafka import configuration Id.
-Get the Kafka import configuration Id by [searching the Kafka Data Subscription Task list](https://www.tencentcloud.com/document/product/614/94446?from_cn_redirect=1).
 * @method string getTopicId() Obtain Import the target log topic Id of CLS.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Import the target log topic Id of CLS.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 */
class DeleteKafkaRechargeRequest extends AbstractModel
{
    /**
     * @var string Kafka import configuration Id.

-Create a Kafka Data Subscription Task (https://www.tencentcloud.com/document/product/614/94448?from_cn_redirect=1) to obtain the Kafka import configuration Id.
-Get the Kafka import configuration Id by [searching the Kafka Data Subscription Task list](https://www.tencentcloud.com/document/product/614/94446?from_cn_redirect=1).
     */
    public $Id;

    /**
     * @var string Import the target log topic Id of CLS.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @param string $Id Kafka import configuration Id.

-Create a Kafka Data Subscription Task (https://www.tencentcloud.com/document/product/614/94448?from_cn_redirect=1) to obtain the Kafka import configuration Id.
-Get the Kafka import configuration Id by [searching the Kafka Data Subscription Task list](https://www.tencentcloud.com/document/product/614/94446?from_cn_redirect=1).
     * @param string $TopicId Import the target log topic Id of CLS.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
