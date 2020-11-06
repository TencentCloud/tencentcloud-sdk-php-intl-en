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
 * @method Models\CreateMediaConnectFlowResponse CreateMediaConnectFlow(Models\CreateMediaConnectFlowRequest $req) This API is used to create the configuration of a MediaConnect flow.
 * @method Models\CreateMediaConnectOutputResponse CreateMediaConnectOutput(Models\CreateMediaConnectOutputRequest $req) This API is used to create the output information of a MediaConnect flow.
 * @method Models\DeleteMediaConnectFlowResponse DeleteMediaConnectFlow(Models\DeleteMediaConnectFlowRequest $req) This API is used to delete the configuration of a MediaConnect flow.
 * @method Models\DeleteMediaConnectOutputResponse DeleteMediaConnectOutput(Models\DeleteMediaConnectOutputRequest $req) This API is used to delete the output configuration of a MediaConnect flow.
 * @method Models\DescribeMediaConnectFlowResponse DescribeMediaConnectFlow(Models\DescribeMediaConnectFlowRequest $req) This API is used to query the configuration information of a MediaConnect flow.
 * @method Models\DescribeMediaConnectFlowsResponse DescribeMediaConnectFlows(Models\DescribeMediaConnectFlowsRequest $req) This API is used to query the configuration information of multiple MediaConnect flows in batches.
 * @method Models\ModifyMediaConnectFlowResponse ModifyMediaConnectFlow(Models\ModifyMediaConnectFlowRequest $req) This API is used to modify the configuration information of a MediaConnect flow.
 * @method Models\ModifyMediaConnectInputResponse ModifyMediaConnectInput(Models\ModifyMediaConnectInputRequest $req) This API is used to modify the input information of a MediaConnect flow.
 * @method Models\ModifyMediaConnectOutputResponse ModifyMediaConnectOutput(Models\ModifyMediaConnectOutputRequest $req) This API is used to modify the output configuration of a MediaConnect flow.
 * @method Models\StartMediaConnectFlowResponse StartMediaConnectFlow(Models\StartMediaConnectFlowRequest $req) This API is used to start a MediaConnect flow.
 * @method Models\StopMediaConnectFlowResponse StopMediaConnectFlow(Models\StopMediaConnectFlowRequest $req) This API is used to stop a MediaConnect flow.
 */

class MdcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mdc.tencentcloudapi.com";

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
