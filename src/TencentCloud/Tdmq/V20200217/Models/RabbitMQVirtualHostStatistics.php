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
 * Statistics of vhost overview
 *
 * @method integer getCurrentQueues() Obtain The number of queues in the current vhost
 * @method void setCurrentQueues(integer $CurrentQueues) Set The number of queues in the current vhost
 * @method integer getCurrentExchanges() Obtain The number of exchanges in the current vhost
 * @method void setCurrentExchanges(integer $CurrentExchanges) Set The number of exchanges in the current vhost
 * @method integer getCurrentConnections() Obtain The number of connections in the current vhost
 * @method void setCurrentConnections(integer $CurrentConnections) Set The number of connections in the current vhost
 * @method integer getCurrentChannels() Obtain The number of channels in the current vhost
 * @method void setCurrentChannels(integer $CurrentChannels) Set The number of channels in the current vhost
 * @method integer getCurrentUsers() Obtain The number of users in the current vhost
 * @method void setCurrentUsers(integer $CurrentUsers) Set The number of users in the current vhost
 */
class RabbitMQVirtualHostStatistics extends AbstractModel
{
    /**
     * @var integer The number of queues in the current vhost
     */
    public $CurrentQueues;

    /**
     * @var integer The number of exchanges in the current vhost
     */
    public $CurrentExchanges;

    /**
     * @var integer The number of connections in the current vhost
     */
    public $CurrentConnections;

    /**
     * @var integer The number of channels in the current vhost
     */
    public $CurrentChannels;

    /**
     * @var integer The number of users in the current vhost
     */
    public $CurrentUsers;

    /**
     * @param integer $CurrentQueues The number of queues in the current vhost
     * @param integer $CurrentExchanges The number of exchanges in the current vhost
     * @param integer $CurrentConnections The number of connections in the current vhost
     * @param integer $CurrentChannels The number of channels in the current vhost
     * @param integer $CurrentUsers The number of users in the current vhost
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
        if (array_key_exists("CurrentQueues",$param) and $param["CurrentQueues"] !== null) {
            $this->CurrentQueues = $param["CurrentQueues"];
        }

        if (array_key_exists("CurrentExchanges",$param) and $param["CurrentExchanges"] !== null) {
            $this->CurrentExchanges = $param["CurrentExchanges"];
        }

        if (array_key_exists("CurrentConnections",$param) and $param["CurrentConnections"] !== null) {
            $this->CurrentConnections = $param["CurrentConnections"];
        }

        if (array_key_exists("CurrentChannels",$param) and $param["CurrentChannels"] !== null) {
            $this->CurrentChannels = $param["CurrentChannels"];
        }

        if (array_key_exists("CurrentUsers",$param) and $param["CurrentUsers"] !== null) {
            $this->CurrentUsers = $param["CurrentUsers"];
        }
    }
}
