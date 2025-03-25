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

namespace TencentCloud\Config\V20220802;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Config\V20220802\Models as Models;

/**
 * @method Models\DescribeDiscoveredResourceResponse DescribeDiscoveredResource(Models\DescribeDiscoveredResourceRequest $req) Resource details.
 * @method Models\ListAggregateConfigRulesResponse ListAggregateConfigRules(Models\ListAggregateConfigRulesRequest $req) This API is used to get the account group rule list.
 * @method Models\ListAggregateDiscoveredResourcesResponse ListAggregateDiscoveredResources(Models\ListAggregateDiscoveredResourcesRequest $req) Account Group access the list of resources.
 * @method Models\ListConfigRulesResponse ListConfigRules(Models\ListConfigRulesRequest $req) This API is used to get the rule list.
 * @method Models\ListDiscoveredResourcesResponse ListDiscoveredResources(Models\ListDiscoveredResourcesRequest $req) This API is used to get the resource list.
 * @method Models\PutEvaluationsResponse PutEvaluations(Models\PutEvaluationsRequest $req) This API is used to report custom rule evaluation results.
 */

class ConfigClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "config.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "config";

    /**
     * @var string
     */
    protected $version = "2022-08-02";

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
        $respClass = "TencentCloud"."\\".ucfirst("config")."\\"."V20220802\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
