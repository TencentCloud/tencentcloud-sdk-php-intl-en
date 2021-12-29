<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ResetMsgSubOffsetByTimestamp request structure.
 *
 * @method string getEnvironmentId() Obtain Namespace name.
 * @method void setEnvironmentId(string $EnvironmentId) Set Namespace name.
 * @method string getTopicName() Obtain Topic name.
 * @method void setTopicName(string $TopicName) Set Topic name.
 * @method string getSubscription() Obtain Subscriber name.
 * @method void setSubscription(string $Subscription) Set Subscriber name.
 * @method integer getToTimestamp() Obtain Timestamp, accurate down to the millisecond.
 * @method void setToTimestamp(integer $ToTimestamp) Set Timestamp, accurate down to the millisecond.
 * @method string getClusterId() Obtain Pulsar cluster ID
 * @method void setClusterId(string $ClusterId) Set Pulsar cluster ID
 */
class ResetMsgSubOffsetByTimestampRequest extends AbstractModel
{
    /**
     * @var string Namespace name.
     */
    public $EnvironmentId;

    /**
     * @var string Topic name.
     */
    public $TopicName;

    /**
     * @var string Subscriber name.
     */
    public $Subscription;

    /**
     * @var integer Timestamp, accurate down to the millisecond.
     */
    public $ToTimestamp;

    /**
     * @var string Pulsar cluster ID
     */
    public $ClusterId;

    /**
     * @param string $EnvironmentId Namespace name.
     * @param string $TopicName Topic name.
     * @param string $Subscription Subscriber name.
     * @param integer $ToTimestamp Timestamp, accurate down to the millisecond.
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

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Subscription",$param) and $param["Subscription"] !== null) {
            $this->Subscription = $param["Subscription"];
        }

        if (array_key_exists("ToTimestamp",$param) and $param["ToTimestamp"] !== null) {
            $this->ToTimestamp = $param["ToTimestamp"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
