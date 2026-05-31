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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDMQ RabbitMQ vhost basic quota information.
 *
 * @method integer getMaxConnectionPerVhost() Obtain Maximum number of connections allowed in each vhost.
 * @method void setMaxConnectionPerVhost(integer $MaxConnectionPerVhost) Set Maximum number of connections allowed in each vhost.
 * @method integer getMaxExchangePerVhost() Obtain Maximum number of exchanges allowed in each vhost.
 * @method void setMaxExchangePerVhost(integer $MaxExchangePerVhost) Set Maximum number of exchanges allowed in each vhost.
 * @method integer getMaxQueuePerVhost() Obtain Maximum number of queues allowed in a single vhost.
 * @method void setMaxQueuePerVhost(integer $MaxQueuePerVhost) Set Maximum number of queues allowed in a single vhost.
 */
class RabbitMQVHostBaseQuota extends AbstractModel
{
    /**
     * @var integer Maximum number of connections allowed in each vhost.
     */
    public $MaxConnectionPerVhost;

    /**
     * @var integer Maximum number of exchanges allowed in each vhost.
     */
    public $MaxExchangePerVhost;

    /**
     * @var integer Maximum number of queues allowed in a single vhost.
     */
    public $MaxQueuePerVhost;

    /**
     * @param integer $MaxConnectionPerVhost Maximum number of connections allowed in each vhost.
     * @param integer $MaxExchangePerVhost Maximum number of exchanges allowed in each vhost.
     * @param integer $MaxQueuePerVhost Maximum number of queues allowed in a single vhost.
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
        if (array_key_exists("MaxConnectionPerVhost",$param) and $param["MaxConnectionPerVhost"] !== null) {
            $this->MaxConnectionPerVhost = $param["MaxConnectionPerVhost"];
        }

        if (array_key_exists("MaxExchangePerVhost",$param) and $param["MaxExchangePerVhost"] !== null) {
            $this->MaxExchangePerVhost = $param["MaxExchangePerVhost"];
        }

        if (array_key_exists("MaxQueuePerVhost",$param) and $param["MaxQueuePerVhost"] !== null) {
            $this->MaxQueuePerVhost = $param["MaxQueuePerVhost"];
        }
    }
}
