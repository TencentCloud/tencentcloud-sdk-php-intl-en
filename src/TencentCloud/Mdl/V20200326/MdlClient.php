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
 * @method Models\CreateStreamLiveChannelResponse CreateStreamLiveChannel(Models\CreateStreamLiveChannelRequest $req) This API is used to create a StreamLive channel.
 * @method Models\CreateStreamLiveInputResponse CreateStreamLiveInput(Models\CreateStreamLiveInputRequest $req) This API is used to create a StreamLive input.
 * @method Models\CreateStreamLiveInputSecurityGroupResponse CreateStreamLiveInputSecurityGroup(Models\CreateStreamLiveInputSecurityGroupRequest $req) This API is used to create an input security group. Up to 5 security groups are allowed.
 * @method Models\CreateStreamLivePlanResponse CreateStreamLivePlan(Models\CreateStreamLivePlanRequest $req) This API is used to create an event in the plan.
 * @method Models\CreateStreamLiveWatermarkResponse CreateStreamLiveWatermark(Models\CreateStreamLiveWatermarkRequest $req) This API is used to add a watermark.
 * @method Models\DeleteStreamLiveChannelResponse DeleteStreamLiveChannel(Models\DeleteStreamLiveChannelRequest $req) This API is used to delete a StreamLive channel.
 * @method Models\DeleteStreamLiveInputResponse DeleteStreamLiveInput(Models\DeleteStreamLiveInputRequest $req) This API is used to delete a StreamLive input.
 * @method Models\DeleteStreamLiveInputSecurityGroupResponse DeleteStreamLiveInputSecurityGroup(Models\DeleteStreamLiveInputSecurityGroupRequest $req) This API is used to delete an input security group.
 * @method Models\DeleteStreamLivePlanResponse DeleteStreamLivePlan(Models\DeleteStreamLivePlanRequest $req) This API is used to delete a StreamLive event.
 * @method Models\DeleteStreamLiveWatermarkResponse DeleteStreamLiveWatermark(Models\DeleteStreamLiveWatermarkRequest $req) This API is used to delete a watermark.
 * @method Models\DescribeStreamLiveChannelResponse DescribeStreamLiveChannel(Models\DescribeStreamLiveChannelRequest $req) This API is used to query a StreamLive channel.
 * @method Models\DescribeStreamLiveChannelAlertsResponse DescribeStreamLiveChannelAlerts(Models\DescribeStreamLiveChannelAlertsRequest $req) This API is used to query the alarm information of a StreamLive channel.
 * @method Models\DescribeStreamLiveChannelInputStatisticsResponse DescribeStreamLiveChannelInputStatistics(Models\DescribeStreamLiveChannelInputStatisticsRequest $req) This API is used to query input statistics.
 * @method Models\DescribeStreamLiveChannelLogsResponse DescribeStreamLiveChannelLogs(Models\DescribeStreamLiveChannelLogsRequest $req) This API is used to query StreamLive channel logs, such as push event logs.
 * @method Models\DescribeStreamLiveChannelOutputStatisticsResponse DescribeStreamLiveChannelOutputStatistics(Models\DescribeStreamLiveChannelOutputStatisticsRequest $req) This API is used to query the output statistics of a StreamLive channel.
 * @method Models\DescribeStreamLiveChannelsResponse DescribeStreamLiveChannels(Models\DescribeStreamLiveChannelsRequest $req) This API is used to query StreamLive channels in batches.
 * @method Models\DescribeStreamLiveInputResponse DescribeStreamLiveInput(Models\DescribeStreamLiveInputRequest $req) This API is used to query a StreamLive input.
 * @method Models\DescribeStreamLiveInputSecurityGroupResponse DescribeStreamLiveInputSecurityGroup(Models\DescribeStreamLiveInputSecurityGroupRequest $req) This API is used to query an input security group.
 * @method Models\DescribeStreamLiveInputSecurityGroupsResponse DescribeStreamLiveInputSecurityGroups(Models\DescribeStreamLiveInputSecurityGroupsRequest $req) This API is used to query input security groups in batches.
 * @method Models\DescribeStreamLiveInputsResponse DescribeStreamLiveInputs(Models\DescribeStreamLiveInputsRequest $req) This API is used to query StreamLive inputs in batches.
 * @method Models\DescribeStreamLivePlansResponse DescribeStreamLivePlans(Models\DescribeStreamLivePlansRequest $req) This API is used to query the events in the plan in batches.
 * @method Models\DescribeStreamLiveRegionsResponse DescribeStreamLiveRegions(Models\DescribeStreamLiveRegionsRequest $req) This API is used to query all StreamLive regions.
 * @method Models\DescribeStreamLiveTranscodeDetailResponse DescribeStreamLiveTranscodeDetail(Models\DescribeStreamLiveTranscodeDetailRequest $req) This API is used to query the transcoding information of StreamLive streams.
 * @method Models\DescribeStreamLiveWatermarkResponse DescribeStreamLiveWatermark(Models\DescribeStreamLiveWatermarkRequest $req) This API is used to query a watermark.
 * @method Models\DescribeStreamLiveWatermarksResponse DescribeStreamLiveWatermarks(Models\DescribeStreamLiveWatermarksRequest $req) This API is used to query multiple watermarks at a time.
 * @method Models\ModifyStreamLiveChannelResponse ModifyStreamLiveChannel(Models\ModifyStreamLiveChannelRequest $req) This API is used to modify a StreamLive channel.
 * @method Models\ModifyStreamLiveInputResponse ModifyStreamLiveInput(Models\ModifyStreamLiveInputRequest $req) This API is used to modify a StreamLive input.
 * @method Models\ModifyStreamLiveInputSecurityGroupResponse ModifyStreamLiveInputSecurityGroup(Models\ModifyStreamLiveInputSecurityGroupRequest $req) This API is used to modify an input security group.
 * @method Models\ModifyStreamLiveWatermarkResponse ModifyStreamLiveWatermark(Models\ModifyStreamLiveWatermarkRequest $req) This API is used to modify a watermark.
 * @method Models\QueryInputStreamStateResponse QueryInputStreamState(Models\QueryInputStreamStateRequest $req) This API is used to query the stream status of a StreamLive input.
 * @method Models\StartStreamLiveChannelResponse StartStreamLiveChannel(Models\StartStreamLiveChannelRequest $req) This API is used to start a StreamLive channel.
 * @method Models\StopStreamLiveChannelResponse StopStreamLiveChannel(Models\StopStreamLiveChannelRequest $req) This API is used to stop a StreamLive channel.
 */

class MdlClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mdl.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mdl";

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
