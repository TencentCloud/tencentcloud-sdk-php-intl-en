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

namespace TencentCloud\Advisor\V20200721;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Advisor\V20200721\Models as Models;

/**
 * @method Models\DescribeStrategiesResponse DescribeStrategies(Models\DescribeStrategiesRequest $req) This API is used to query information about assessment items.
 * @method Models\DescribeTaskStrategyRisksResponse DescribeTaskStrategyRisks(Models\DescribeTaskStrategyRisksRequest $req) This API is used to query the risky instance list of the assessment item.
 */

class AdvisorClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "advisor.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "advisor";

    /**
     * @var string
     */
    protected $version = "2020-07-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("advisor")."\\"."V20200721\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
