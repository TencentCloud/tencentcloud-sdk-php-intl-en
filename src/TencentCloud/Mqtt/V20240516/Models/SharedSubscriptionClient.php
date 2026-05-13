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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Shared subscription group client
 *
 * @method string getClientId() Obtain Client ID
 * @method void setClientId(string $ClientId) Set Client ID
 * @method string getSharedName() Obtain Shared subscription group name
 * @method void setSharedName(string $SharedName) Set Shared subscription group name
 * @method string getTopicFilter() Obtain Expression list of subscriptions under the shared group
 * @method void setTopicFilter(string $TopicFilter) Set Expression list of subscriptions under the shared group
 * @method boolean getOnline() Obtain Online status
 * @method void setOnline(boolean $Online) Set Online status
 */
class SharedSubscriptionClient extends AbstractModel
{
    /**
     * @var string Client ID
     */
    public $ClientId;

    /**
     * @var string Shared subscription group name
     */
    public $SharedName;

    /**
     * @var string Expression list of subscriptions under the shared group
     */
    public $TopicFilter;

    /**
     * @var boolean Online status
     */
    public $Online;

    /**
     * @param string $ClientId Client ID
     * @param string $SharedName Shared subscription group name
     * @param string $TopicFilter Expression list of subscriptions under the shared group
     * @param boolean $Online Online status
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
        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("SharedName",$param) and $param["SharedName"] !== null) {
            $this->SharedName = $param["SharedName"];
        }

        if (array_key_exists("TopicFilter",$param) and $param["TopicFilter"] !== null) {
            $this->TopicFilter = $param["TopicFilter"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }
    }
}
