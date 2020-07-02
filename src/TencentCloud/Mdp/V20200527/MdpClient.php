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

namespace TencentCloud\Mdp\V20200527;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mdp\V20200527\Models as Models;

/**
 * @method Models\CreateMediaPackageChannelResponse CreateMediaPackageChannel(Models\CreateMediaPackageChannelRequest $req) This API is used to create a media package channel.
 * @method Models\CreateMediaPackageChannelEndpointResponse CreateMediaPackageChannelEndpoint(Models\CreateMediaPackageChannelEndpointRequest $req) This API is used to create an endpoint of a media package channel.
 * @method Models\DeleteMediaPackageChannelEndpointsResponse DeleteMediaPackageChannelEndpoints(Models\DeleteMediaPackageChannelEndpointsRequest $req) This API is used to delete endpoints from a media package channel in batches.
 * @method Models\DeleteMediaPackageChannelsResponse DeleteMediaPackageChannels(Models\DeleteMediaPackageChannelsRequest $req) This API is used to delete media package channels in batches.
 * @method Models\DescribeMediaPackageChannelResponse DescribeMediaPackageChannel(Models\DescribeMediaPackageChannelRequest $req) This API is used to query the information of a media package channel.
 * @method Models\DescribeMediaPackageChannelsResponse DescribeMediaPackageChannels(Models\DescribeMediaPackageChannelsRequest $req) This API is used to query the information list of media package channels.
 * @method Models\ModifyMediaPackageChannelResponse ModifyMediaPackageChannel(Models\ModifyMediaPackageChannelRequest $req) This API is used to modify the information of a media package channel.
 * @method Models\ModifyMediaPackageChannelEndpointResponse ModifyMediaPackageChannelEndpoint(Models\ModifyMediaPackageChannelEndpointRequest $req) This API is used to modify an endpoint of a media package channel.
 * @method Models\ModifyMediaPackageChannelInputAuthInfoResponse ModifyMediaPackageChannelInputAuthInfo(Models\ModifyMediaPackageChannelInputAuthInfoRequest $req) This API is used to modify the input authentication information of a media package channel.
 */

class MdpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mdp.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2020-05-27";

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
        $respClass = "TencentCloud"."\\".ucfirst("mdp")."\\"."V20200527\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
