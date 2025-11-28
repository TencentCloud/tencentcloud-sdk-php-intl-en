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
 * 
 *
 * @method integer getMaxVirtualHost() Obtain 
 * @method void setMaxVirtualHost(integer $MaxVirtualHost) Set 
 * @method integer getUsedVirtualHost() Obtain Number of created vhosts.
 * @method void setUsedVirtualHost(integer $UsedVirtualHost) Set Number of created vhosts.
 * @method integer getMaxConnectionPerVhost() Obtain Specifies the maximum number of connections allowed per vhost.
 * @method void setMaxConnectionPerVhost(integer $MaxConnectionPerVhost) Set Specifies the maximum number of connections allowed per vhost.
 * @method integer getMaxExchangePerVhost() Obtain Specifies the maximum number of switches allowed in one vhost.
 * @method void setMaxExchangePerVhost(integer $MaxExchangePerVhost) Set Specifies the maximum number of switches allowed in one vhost.
 * @method integer getMaxQueuePerVhost() Obtain Specifies the maximum number of queue machines allowed in one vhost.
 * @method void setMaxQueuePerVhost(integer $MaxQueuePerVhost) Set Specifies the maximum number of queue machines allowed in one vhost.
 */
class VirtualHostQuota extends AbstractModel
{
    /**
     * @var integer 
     */
    public $MaxVirtualHost;

    /**
     * @var integer Number of created vhosts.
     */
    public $UsedVirtualHost;

    /**
     * @var integer Specifies the maximum number of connections allowed per vhost.
     */
    public $MaxConnectionPerVhost;

    /**
     * @var integer Specifies the maximum number of switches allowed in one vhost.
     */
    public $MaxExchangePerVhost;

    /**
     * @var integer Specifies the maximum number of queue machines allowed in one vhost.
     */
    public $MaxQueuePerVhost;

    /**
     * @param integer $MaxVirtualHost 
     * @param integer $UsedVirtualHost Number of created vhosts.
     * @param integer $MaxConnectionPerVhost Specifies the maximum number of connections allowed per vhost.
     * @param integer $MaxExchangePerVhost Specifies the maximum number of switches allowed in one vhost.
     * @param integer $MaxQueuePerVhost Specifies the maximum number of queue machines allowed in one vhost.
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
        if (array_key_exists("MaxVirtualHost",$param) and $param["MaxVirtualHost"] !== null) {
            $this->MaxVirtualHost = $param["MaxVirtualHost"];
        }

        if (array_key_exists("UsedVirtualHost",$param) and $param["UsedVirtualHost"] !== null) {
            $this->UsedVirtualHost = $param["UsedVirtualHost"];
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
