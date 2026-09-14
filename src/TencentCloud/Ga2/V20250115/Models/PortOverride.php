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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Port mapping
 *
 * @method integer getListenerPort() Obtain Listening port.
 * @method void setListenerPort(integer $ListenerPort) Set Listening port.
 * @method integer getEndpointPort() Obtain Mapping port.
 * @method void setEndpointPort(integer $EndpointPort) Set Mapping port.
 */
class PortOverride extends AbstractModel
{
    /**
     * @var integer Listening port.
     */
    public $ListenerPort;

    /**
     * @var integer Mapping port.
     */
    public $EndpointPort;

    /**
     * @param integer $ListenerPort Listening port.
     * @param integer $EndpointPort Mapping port.
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
        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("EndpointPort",$param) and $param["EndpointPort"] !== null) {
            $this->EndpointPort = $param["EndpointPort"];
        }
    }
}
