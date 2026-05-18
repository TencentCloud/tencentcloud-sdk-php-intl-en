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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * mongodb public network service node information.
 *
 * @method string getVipVport() Obtain vip and port information of the instance node.
 * @method void setVipVport(string $VipVport) Set vip and port information of the instance node.
 * @method string getListenerPort() Obtain The listening port of a CLB listener ranges from 1 to 65535.
 * @method void setListenerPort(string $ListenerPort) Set The listening port of a CLB listener ranges from 1 to 65535.
 */
class WanServiceNodeList extends AbstractModel
{
    /**
     * @var string vip and port information of the instance node.
     */
    public $VipVport;

    /**
     * @var string The listening port of a CLB listener ranges from 1 to 65535.
     */
    public $ListenerPort;

    /**
     * @param string $VipVport vip and port information of the instance node.
     * @param string $ListenerPort The listening port of a CLB listener ranges from 1 to 65535.
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
        if (array_key_exists("VipVport",$param) and $param["VipVport"] !== null) {
            $this->VipVport = $param["VipVport"];
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }
    }
}
