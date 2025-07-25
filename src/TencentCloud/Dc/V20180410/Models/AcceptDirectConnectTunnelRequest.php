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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AcceptDirectConnectTunnel request structure.
 *
 * @method string getDirectConnectTunnelId() Obtain The connection owner accepts an application for sharing the dedicated tunnel
 * @method void setDirectConnectTunnelId(string $DirectConnectTunnelId) Set The connection owner accepts an application for sharing the dedicated tunnel
 */
class AcceptDirectConnectTunnelRequest extends AbstractModel
{
    /**
     * @var string The connection owner accepts an application for sharing the dedicated tunnel
     */
    public $DirectConnectTunnelId;

    /**
     * @param string $DirectConnectTunnelId The connection owner accepts an application for sharing the dedicated tunnel
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
        if (array_key_exists("DirectConnectTunnelId",$param) and $param["DirectConnectTunnelId"] !== null) {
            $this->DirectConnectTunnelId = $param["DirectConnectTunnelId"];
        }
    }
}
