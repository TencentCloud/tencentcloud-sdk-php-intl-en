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
 * CreateSubscription request structure.
 *
 * @method string getEnvironmentId() Obtain Environment (namespace) name.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment (namespace) name.
 * @method string getTopicName() Obtain Topic name.
 * @method void setTopicName(string $TopicName) Set Topic name.
 * @method string getSubscriptionName() Obtain Subscriber name, which can contain up to 128 characters.
 * @method void setSubscriptionName(string $SubscriptionName) Set Subscriber name, which can contain up to 128 characters.
 * @method boolean getIsIdempotent() Obtain Whether the creation is idempotent; if not, you cannot create subscriptions with the same name.
 * @method void setIsIdempotent(boolean $IsIdempotent) Set Whether the creation is idempotent; if not, you cannot create subscriptions with the same name.
 * @method string getRemark() Obtain Remarks (up to 128 characters).
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters).
 * @method string getClusterId() Obtain Pulsar cluster ID
 * @method void setClusterId(string $ClusterId) Set Pulsar cluster ID
 * @method boolean getAutoCreatePolicyTopic() Obtain Whether to automatically create a dead letter topic and a retry letter topic. true: yes (default value); false: no.
 * @method void setAutoCreatePolicyTopic(boolean $AutoCreatePolicyTopic) Set Whether to automatically create a dead letter topic and a retry letter topic. true: yes (default value); false: no.
 * @method string getPostFixPattern() Obtain Naming convention for dead letter and retry letter topics. `LEGACY` indicates to use the legacy naming convention, and `COMMUNITY` indicates to use the naming convention in the Pulsar community.
 * @method void setPostFixPattern(string $PostFixPattern) Set Naming convention for dead letter and retry letter topics. `LEGACY` indicates to use the legacy naming convention, and `COMMUNITY` indicates to use the naming convention in the Pulsar community.
 */
class CreateSubscriptionRequest extends AbstractModel
{
    /**
     * @var string Environment (namespace) name.
     */
    public $EnvironmentId;

    /**
     * @var string Topic name.
     */
    public $TopicName;

    /**
     * @var string Subscriber name, which can contain up to 128 characters.
     */
    public $SubscriptionName;

    /**
     * @var boolean Whether the creation is idempotent; if not, you cannot create subscriptions with the same name.
     */
    public $IsIdempotent;

    /**
     * @var string Remarks (up to 128 characters).
     */
    public $Remark;

    /**
     * @var string Pulsar cluster ID
     */
    public $ClusterId;

    /**
     * @var boolean Whether to automatically create a dead letter topic and a retry letter topic. true: yes (default value); false: no.
     */
    public $AutoCreatePolicyTopic;

    /**
     * @var string Naming convention for dead letter and retry letter topics. `LEGACY` indicates to use the legacy naming convention, and `COMMUNITY` indicates to use the naming convention in the Pulsar community.
     */
    public $PostFixPattern;

    /**
     * @param string $EnvironmentId Environment (namespace) name.
     * @param string $TopicName Topic name.
     * @param string $SubscriptionName Subscriber name, which can contain up to 128 characters.
     * @param boolean $IsIdempotent Whether the creation is idempotent; if not, you cannot create subscriptions with the same name.
     * @param string $Remark Remarks (up to 128 characters).
     * @param string $ClusterId Pulsar cluster ID
     * @param boolean $AutoCreatePolicyTopic Whether to automatically create a dead letter topic and a retry letter topic. true: yes (default value); false: no.
     * @param string $PostFixPattern Naming convention for dead letter and retry letter topics. `LEGACY` indicates to use the legacy naming convention, and `COMMUNITY` indicates to use the naming convention in the Pulsar community.
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

        if (array_key_exists("SubscriptionName",$param) and $param["SubscriptionName"] !== null) {
            $this->SubscriptionName = $param["SubscriptionName"];
        }

        if (array_key_exists("IsIdempotent",$param) and $param["IsIdempotent"] !== null) {
            $this->IsIdempotent = $param["IsIdempotent"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AutoCreatePolicyTopic",$param) and $param["AutoCreatePolicyTopic"] !== null) {
            $this->AutoCreatePolicyTopic = $param["AutoCreatePolicyTopic"];
        }

        if (array_key_exists("PostFixPattern",$param) and $param["PostFixPattern"] !== null) {
            $this->PostFixPattern = $param["PostFixPattern"];
        }
    }
}
