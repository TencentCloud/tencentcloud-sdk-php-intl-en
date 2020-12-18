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

namespace TencentCloud\Cloudaudit\V20190319;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cloudaudit\V20190319\Models as Models;

/**
 * @method Models\CreateRecorderResponse CreateRecorder(Models\CreateRecorderRequest $req) This API is used to create resource recorders to detect and record resource configuration changes.
 * @method Models\DeleteRecorderResponse DeleteRecorder(Models\DeleteRecorderRequest $req) This API is used to delete resource recorders. After deletion, resource configuration changes will not be recorded.
 * @method Models\DescribeDiscoveredResourceResponse DescribeDiscoveredResource(Models\DescribeDiscoveredResourceRequest $req) This API is used to view the basic information of discovered resources.
 * @method Models\DescribeRecorderResponse DescribeRecorder(Models\DescribeRecorderRequest $req) This API is used to display current configurations and status of a recorder.
 * @method Models\GetConfigurationItemsResponse GetConfigurationItems(Models\GetConfigurationItemsRequest $req) This API is used to get the list of resource configuration items and display resource configuration changes in chronological order.
 * @method Models\ListDiscoveredResourcesResponse ListDiscoveredResources(Models\ListDiscoveredResourcesRequest $req) This API is used to view the list of discovered resources.
 * @method Models\ListSupportResourceTypesResponse ListSupportResourceTypes(Models\ListSupportResourceTypesRequest $req) This API is used to query the list of all CFA supported resource types.
 * @method Models\UpdateRecorderResponse UpdateRecorder(Models\UpdateRecorderRequest $req) This API is used to modify the resources to monitor, recorder name, and other recorder configurations.
 */

class CloudauditClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cloudaudit.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cloudaudit";

    /**
     * @var string
     */
    protected $version = "2019-03-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("cloudaudit")."\\"."V20190319\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
