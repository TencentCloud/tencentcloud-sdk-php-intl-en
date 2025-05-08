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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * vhost overview statistical information.
 *
 * @method integer getCurrentQueues() Obtain Number of queues of the current vhost.
 * @method void setCurrentQueues(integer $CurrentQueues) Set Number of queues of the current vhost.
 * @method integer getCurrentExchanges() Obtain Number of exchanges in the current vhost.
 * @method void setCurrentExchanges(integer $CurrentExchanges) Set Number of exchanges in the current vhost.
 * @method integer getCurrentConnections() Obtain Number of current connections of the vhost.
 * @method void setCurrentConnections(integer $CurrentConnections) Set Number of current connections of the vhost.
 * @method integer getCurrentChannels() Obtain Number of channels for the current vhost.
 * @method void setCurrentChannels(integer $CurrentChannels) Set Number of channels for the current vhost.
 * @method integer getCurrentUsers() Obtain Number of users of the current vhost.
 * @method void setCurrentUsers(integer $CurrentUsers) Set Number of users of the current vhost.
 */
class RabbitMQVirtualHostStatistics extends AbstractModel
{
    /**
     * @var integer Number of queues of the current vhost.
     */
    public $CurrentQueues;

    /**
     * @var integer Number of exchanges in the current vhost.
     */
    public $CurrentExchanges;

    /**
     * @var integer Number of current connections of the vhost.
     */
    public $CurrentConnections;

    /**
     * @var integer Number of channels for the current vhost.
     */
    public $CurrentChannels;

    /**
     * @var integer Number of users of the current vhost.
     */
    public $CurrentUsers;

    /**
     * @param integer $CurrentQueues Number of queues of the current vhost.
     * @param integer $CurrentExchanges Number of exchanges in the current vhost.
     * @param integer $CurrentConnections Number of current connections of the vhost.
     * @param integer $CurrentChannels Number of channels for the current vhost.
     * @param integer $CurrentUsers Number of users of the current vhost.
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
