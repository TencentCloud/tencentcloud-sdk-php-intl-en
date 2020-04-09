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

namespace TencentCloud\Dc\V20180410;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dc\V20180410\Models as Models;

/**
 * @method Models\AcceptDirectConnectTunnelResponse AcceptDirectConnectTunnel(Models\AcceptDirectConnectTunnelRequest $req) This API is used to accept an application for a dedicated tunnel.
 * @method Models\CreateDirectConnectTunnelResponse CreateDirectConnectTunnel(Models\CreateDirectConnectTunnelRequest $req) This API is used to create a dedicated tunnel.
 * @method Models\DeleteDirectConnectTunnelResponse DeleteDirectConnectTunnel(Models\DeleteDirectConnectTunnelRequest $req) This API is used to delete a dedicated tunnel.
 * @method Models\DescribeDirectConnectTunnelsResponse DescribeDirectConnectTunnels(Models\DescribeDirectConnectTunnelsRequest $req) This API is used to query the list of dedicated tunnels.
 * @method Models\DescribeDirectConnectsResponse DescribeDirectConnects(Models\DescribeDirectConnectsRequest $req) This API is used to query the list of connections.
 * @method Models\ModifyDirectConnectTunnelAttributeResponse ModifyDirectConnectTunnelAttribute(Models\ModifyDirectConnectTunnelAttributeRequest $req) This API is used to modify the dedicated tunnel attributes.
 * @method Models\RejectDirectConnectTunnelResponse RejectDirectConnectTunnel(Models\RejectDirectConnectTunnelRequest $req) This API is used to reject an application for a dedicated tunnel.
 */

class DcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2018-04-10";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("dc")."\\"."V20180410\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
