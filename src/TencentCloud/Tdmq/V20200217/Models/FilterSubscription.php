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
 * Filter subscriptions
 *
 * @method boolean getConsumerHasCount() Obtain Whether to only display subscriptions that include real consumers.
 * @method void setConsumerHasCount(boolean $ConsumerHasCount) Set Whether to only display subscriptions that include real consumers.
 * @method boolean getConsumerHasBacklog() Obtain Whether to only display subscriptions with heaped messages.
 * @method void setConsumerHasBacklog(boolean $ConsumerHasBacklog) Set Whether to only display subscriptions with heaped messages.
 * @method boolean getConsumerHasExpired() Obtain Whether to only display subscriptions with messages discarded after expiration.
 * @method void setConsumerHasExpired(boolean $ConsumerHasExpired) Set Whether to only display subscriptions with messages discarded after expiration.
 * @method array getSubscriptionNames() Obtain Filter by subscription name for exact query.
 * @method void setSubscriptionNames(array $SubscriptionNames) Set Filter by subscription name for exact query.
 */
class FilterSubscription extends AbstractModel
{
    /**
     * @var boolean Whether to only display subscriptions that include real consumers.
     */
    public $ConsumerHasCount;

    /**
     * @var boolean Whether to only display subscriptions with heaped messages.
     */
    public $ConsumerHasBacklog;

    /**
     * @var boolean Whether to only display subscriptions with messages discarded after expiration.
     */
    public $ConsumerHasExpired;

    /**
     * @var array Filter by subscription name for exact query.
     */
    public $SubscriptionNames;

    /**
     * @param boolean $ConsumerHasCount Whether to only display subscriptions that include real consumers.
     * @param boolean $ConsumerHasBacklog Whether to only display subscriptions with heaped messages.
     * @param boolean $ConsumerHasExpired Whether to only display subscriptions with messages discarded after expiration.
     * @param array $SubscriptionNames Filter by subscription name for exact query.
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
        if (array_key_exists("ConsumerHasCount",$param) and $param["ConsumerHasCount"] !== null) {
            $this->ConsumerHasCount = $param["ConsumerHasCount"];
        }

        if (array_key_exists("ConsumerHasBacklog",$param) and $param["ConsumerHasBacklog"] !== null) {
            $this->ConsumerHasBacklog = $param["ConsumerHasBacklog"];
        }

        if (array_key_exists("ConsumerHasExpired",$param) and $param["ConsumerHasExpired"] !== null) {
            $this->ConsumerHasExpired = $param["ConsumerHasExpired"];
        }

        if (array_key_exists("SubscriptionNames",$param) and $param["SubscriptionNames"] !== null) {
            $this->SubscriptionNames = $param["SubscriptionNames"];
        }
    }
}
