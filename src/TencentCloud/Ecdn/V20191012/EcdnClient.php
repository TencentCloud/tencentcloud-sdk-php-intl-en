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

namespace TencentCloud\Ecdn\V20191012;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ecdn\V20191012\Models as Models;

/**
 * @method Models\AddEcdnDomainResponse AddEcdnDomain(Models\AddEcdnDomainRequest $req) This API is used to create an acceleration domain name.
 * @method Models\DeleteEcdnDomainResponse DeleteEcdnDomain(Models\DeleteEcdnDomainRequest $req) This API is used to delete a specified acceleration domain name. The acceleration domain name to be deleted must be in disabled status.
 * @method Models\DescribeDomainsResponse DescribeDomains(Models\DescribeDomainsRequest $req) This API is used to query the basic information of a CDN domain name, including the project ID, status, business type, creation time, update time, etc.
 * @method Models\DescribeDomainsConfigResponse DescribeDomainsConfig(Models\DescribeDomainsConfigRequest $req) This API is used to query the detailed configuration information of a CDN acceleration domain name.
 * @method Models\DescribeEcdnDomainLogsResponse DescribeEcdnDomainLogs(Models\DescribeEcdnDomainLogsRequest $req) This API is used to query the access log download link of a domain name.
 * @method Models\DescribeEcdnDomainStatisticsResponse DescribeEcdnDomainStatistics(Models\DescribeEcdnDomainStatisticsRequest $req) This API is used to query the statistical metrics of domain name access within a specified time period.
 * @method Models\DescribeEcdnStatisticsResponse DescribeEcdnStatistics(Models\DescribeEcdnStatisticsRequest $req) This API is used to query ECDN real-time access monitoring data and supports the following metrics:

+ Traffic (in bytes)
+ Bandwidth (in bps)
+ Number of requests
+ Response time (in ms)
+ Number of 2xx status codes and details of status codes starting with 2
+ Number of 3xx status codes and details of status codes starting with 3
+ Number of 4xx status codes and details of status codes starting with 4
+ Number of 5xx status codes and details of status codes starting with 5
 * @method Models\DescribePurgeQuotaResponse DescribePurgeQuota(Models\DescribePurgeQuotaRequest $req) This API is used to query the usage quota of the purge API.
 * @method Models\DescribePurgeTasksResponse DescribePurgeTasks(Models\DescribePurgeTasksRequest $req) This API is used to query the submission history of purge tasks and their execution progress.
 * @method Models\PurgePathCacheResponse PurgePathCache(Models\PurgePathCacheRequest $req) This API is used to batch purge cache directories. One purge task ID will be returned for each submission.
 * @method Models\PurgeUrlsCacheResponse PurgeUrlsCache(Models\PurgeUrlsCacheRequest $req) This API is used to batch purge URLs. One purge task ID will be returned for each submission.
 * @method Models\StartEcdnDomainResponse StartEcdnDomain(Models\StartEcdnDomainRequest $req) This API is used to enable an acceleration domain name. The domain name to be enabled must be in deactivated status.
 * @method Models\StopEcdnDomainResponse StopEcdnDomain(Models\StopEcdnDomainRequest $req) This API is used to disable an acceleration domain name. The domain name to be disabled must be in enabled or deploying status.
 * @method Models\UpdateDomainConfigResponse UpdateDomainConfig(Models\UpdateDomainConfigRequest $req) This API is used to update the configuration information of an ECDN acceleration domain name.
Note: if you need to update a complex configuration item, you must pass in all attributes of the entire object, and the default values will be used for the attributes that are not passed in. You are recommended to get the configuration attribute through the query API first and then directly modify and pass it to this API. Due to the special nature of the certificate for HTTPS configuration, you do not need to pass in the certificate and key fields during the update.
 */

class EcdnClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ecdn.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2019-10-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("ecdn")."\\"."V20191012\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
