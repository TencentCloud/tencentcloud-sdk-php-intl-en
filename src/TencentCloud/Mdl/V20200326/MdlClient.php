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

namespace TencentCloud\Mdl\V20200326;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mdl\V20200326\Models as Models;

/**
 * @method Models\CreateMediaLiveChannelResponse CreateMediaLiveChannel(Models\CreateMediaLiveChannelRequest $req) This API is used to create a media channel.
 * @method Models\CreateMediaLiveInputResponse CreateMediaLiveInput(Models\CreateMediaLiveInputRequest $req) This API is used to create a media input.
 * @method Models\CreateMediaLiveInputSecurityGroupResponse CreateMediaLiveInputSecurityGroup(Models\CreateMediaLiveInputSecurityGroupRequest $req) This API is used to create an input security group. Up to 5 ones can be created.
 * @method Models\DeleteMediaLiveChannelResponse DeleteMediaLiveChannel(Models\DeleteMediaLiveChannelRequest $req) This API is used to delete a MediaLive channel.
 * @method Models\DeleteMediaLiveInputResponse DeleteMediaLiveInput(Models\DeleteMediaLiveInputRequest $req) This API is used to delete a media input.
 * @method Models\DeleteMediaLiveInputSecurityGroupResponse DeleteMediaLiveInputSecurityGroup(Models\DeleteMediaLiveInputSecurityGroupRequest $req) This API is used to delete an input security group.
 * @method Models\DescribeMediaLiveChannelResponse DescribeMediaLiveChannel(Models\DescribeMediaLiveChannelRequest $req) This API is used to query the information of a MediaLive channel.
 * @method Models\DescribeMediaLiveChannelsResponse DescribeMediaLiveChannels(Models\DescribeMediaLiveChannelsRequest $req) This API is used to query the information of MediaLive channels in batches.
 * @method Models\DescribeMediaLiveInputResponse DescribeMediaLiveInput(Models\DescribeMediaLiveInputRequest $req) This API is used to query a media input.
 * @method Models\DescribeMediaLiveInputSecurityGroupResponse DescribeMediaLiveInputSecurityGroup(Models\DescribeMediaLiveInputSecurityGroupRequest $req) This API is used to query an input security group.
 * @method Models\DescribeMediaLiveInputSecurityGroupsResponse DescribeMediaLiveInputSecurityGroups(Models\DescribeMediaLiveInputSecurityGroupsRequest $req) This API is used to query the information of input security groups in batches.
 * @method Models\DescribeMediaLiveInputsResponse DescribeMediaLiveInputs(Models\DescribeMediaLiveInputsRequest $req) This API is used to query the information of media inputs in batches.
 * @method Models\ModifyMediaLiveChannelResponse ModifyMediaLiveChannel(Models\ModifyMediaLiveChannelRequest $req) This API is used to modify the information of a MediaLive channel.
 * @method Models\ModifyMediaLiveInputResponse ModifyMediaLiveInput(Models\ModifyMediaLiveInputRequest $req) This API is used to update a media input.
 * @method Models\ModifyMediaLiveInputSecurityGroupResponse ModifyMediaLiveInputSecurityGroup(Models\ModifyMediaLiveInputSecurityGroupRequest $req) This API is used to update an input security group.
 * @method Models\StartMediaLiveChannelResponse StartMediaLiveChannel(Models\StartMediaLiveChannelRequest $req) This API is used to start a MediaLive channel.
 * @method Models\StopMediaLiveChannelResponse StopMediaLiveChannel(Models\StopMediaLiveChannelRequest $req) This API is used to stop a MediaLive channel.
 */

class MdlClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mdl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2020-03-26";

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
        $respClass = "TencentCloud"."\\".ucfirst("mdl")."\\"."V20200326\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
