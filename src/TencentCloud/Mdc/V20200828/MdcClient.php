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

namespace TencentCloud\Mdc\V20200828;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mdc\V20200828\Models as Models;

/**
 * @method Models\CreateStreamLinkFlowResponse CreateStreamLinkFlow(Models\CreateStreamLinkFlowRequest $req) This API is used to create a StreamLink flow.
 * @method Models\CreateStreamLinkInputResponse CreateStreamLinkInput(Models\CreateStreamLinkInputRequest $req) Create an input configuration for the StreamLink.
 * @method Models\CreateStreamLinkOutputInfoResponse CreateStreamLinkOutputInfo(Models\CreateStreamLinkOutputInfoRequest $req) This API is used to create a StreamLink output.
 * @method Models\DeleteStreamLinkFlowResponse DeleteStreamLinkFlow(Models\DeleteStreamLinkFlowRequest $req) This API is used to delete a StreamLink flow.
 * @method Models\DeleteStreamLinkOutputResponse DeleteStreamLinkOutput(Models\DeleteStreamLinkOutputRequest $req) This API is used to delete an output of a StreamLink flow.
 * @method Models\DescribeStreamLinkFlowResponse DescribeStreamLinkFlow(Models\DescribeStreamLinkFlowRequest $req) This API is used to query the configuration information of a StreamLink flow.
 * @method Models\DescribeStreamLinkFlowLogsResponse DescribeStreamLinkFlowLogs(Models\DescribeStreamLinkFlowLogsRequest $req) This API is used to query the logs of a StreamLink flow.
 * @method Models\DescribeStreamLinkFlowMediaStatisticsResponse DescribeStreamLinkFlowMediaStatistics(Models\DescribeStreamLinkFlowMediaStatisticsRequest $req) This API is used to query the media quality of a StreamLink flow.

 * @method Models\DescribeStreamLinkFlowRealtimeStatusResponse DescribeStreamLinkFlowRealtimeStatus(Models\DescribeStreamLinkFlowRealtimeStatusRequest $req) This API is used to query the current status of a flow.
 * @method Models\DescribeStreamLinkFlowSRTStatisticsResponse DescribeStreamLinkFlowSRTStatistics(Models\DescribeStreamLinkFlowSRTStatisticsRequest $req) This API is used to query the SRT streaming performance of a StreamLink flow.
 * @method Models\DescribeStreamLinkFlowStatisticsResponse DescribeStreamLinkFlowStatistics(Models\DescribeStreamLinkFlowStatisticsRequest $req) This API is used to query the media quality of a StreamLink flow.

 * @method Models\DescribeStreamLinkFlowsResponse DescribeStreamLinkFlows(Models\DescribeStreamLinkFlowsRequest $req) This API is used to query the configuration information of multiple StreamLink flows in batches.
 * @method Models\DescribeStreamLinkRegionsResponse DescribeStreamLinkRegions(Models\DescribeStreamLinkRegionsRequest $req) This API is used to query all StreamLink regions.
 * @method Models\ModifyStreamLinkFlowResponse ModifyStreamLinkFlow(Models\ModifyStreamLinkFlowRequest $req) This API is used to modify the configuration information of a StreamLink flow.
 * @method Models\ModifyStreamLinkInputResponse ModifyStreamLinkInput(Models\ModifyStreamLinkInputRequest $req) This API is used to modify an input of a StreamLink flow.
 * @method Models\ModifyStreamLinkOutputInfoResponse ModifyStreamLinkOutputInfo(Models\ModifyStreamLinkOutputInfoRequest $req) This API is used to modify an output of a StreamLink flow.
 * @method Models\StartStreamLinkFlowResponse StartStreamLinkFlow(Models\StartStreamLinkFlowRequest $req) This API is used to start a StreamLink flow.
 * @method Models\StopStreamLinkFlowResponse StopStreamLinkFlow(Models\StopStreamLinkFlowRequest $req) This API is used to stop a StreamLink flow.
 */

class MdcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mdc.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mdc";

    /**
     * @var string
     */
    protected $version = "2020-08-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("mdc")."\\"."V20200828\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
