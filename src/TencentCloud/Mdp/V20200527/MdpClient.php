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
 * @method Models\BindNewLVBDomainWithChannelResponse BindNewLVBDomainWithChannel(Models\BindNewLVBDomainWithChannelRequest $req) This API is used to bind an LVB domain name to a channel.
 * @method Models\CreateStreamPackageChannelResponse CreateStreamPackageChannel(Models\CreateStreamPackageChannelRequest $req) This API is used to create a StreamPackage channel.
 * @method Models\CreateStreamPackageChannelEndpointResponse CreateStreamPackageChannelEndpoint(Models\CreateStreamPackageChannelEndpointRequest $req) This API is used to create an endpoint on a StreamPackage channel.
 * @method Models\DeleteStreamPackageChannelEndpointsResponse DeleteStreamPackageChannelEndpoints(Models\DeleteStreamPackageChannelEndpointsRequest $req) This API is used to delete endpoints from a StreamPackage channel in batches.
 * @method Models\DeleteStreamPackageChannelsResponse DeleteStreamPackageChannels(Models\DeleteStreamPackageChannelsRequest $req) This API is used to delete StreamPackage channels in batches.
 * @method Models\DescribeStreamPackageChannelResponse DescribeStreamPackageChannel(Models\DescribeStreamPackageChannelRequest $req) This API is used to query the information of a StreamPackage channel.
 * @method Models\DescribeStreamPackageChannelsResponse DescribeStreamPackageChannels(Models\DescribeStreamPackageChannelsRequest $req) This API is used to query the information of multiple StreamPackage channels.
 * @method Models\ModifyStreamPackageChannelResponse ModifyStreamPackageChannel(Models\ModifyStreamPackageChannelRequest $req) This API is used to modify a StreamPackage channel.
 * @method Models\ModifyStreamPackageChannelEndpointResponse ModifyStreamPackageChannelEndpoint(Models\ModifyStreamPackageChannelEndpointRequest $req) This API is used to modify an endpoint of a StreamPackage channel.
 * @method Models\ModifyStreamPackageChannelInputAuthInfoResponse ModifyStreamPackageChannelInputAuthInfo(Models\ModifyStreamPackageChannelInputAuthInfoRequest $req) This API is used to modify the input authentication information of a StreamPackage channel.
 * @method Models\UnbindCdnDomainWithChannelResponse UnbindCdnDomainWithChannel(Models\UnbindCdnDomainWithChannelRequest $req) This API is used to unbind a CDN playback domain name from a channel.
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
    protected $service = "mdp";

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
