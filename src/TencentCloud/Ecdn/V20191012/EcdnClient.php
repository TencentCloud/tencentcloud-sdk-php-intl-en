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

>? If you have migrated your ECDN service to CDN, you can use the <a href="https://intl.cloud.tencent.com/document/api/228/41123?from_cn_redirect=1">corresponding CDN API</a>.
 * @method Models\DeleteEcdnDomainResponse DeleteEcdnDomain(Models\DeleteEcdnDomainRequest $req) This API is used to delete a specified acceleration domain name. The acceleration domain name to be deleted must be in disabled status.

>? If you have migrated your ECDN service to CDN, you can use the <a href="https://intl.cloud.tencent.com/document/api/570/42471?from_cn_redirect=1">corresponding CDN API</a>.
 * @method Models\DescribeDomainsResponse DescribeDomains(Models\DescribeDomainsRequest $req) This API is used to query the basic information of a CDN domain name, including the project ID, status, business type, creation time, update time, etc.

>? If you have migrated your ECDN service to CDN, you can use the <a href="https://intl.cloud.tencent.com/document/api/228/41118?from_cn_redirect=1">corresponding CDN API</a>.
 * @method Models\DescribeDomainsConfigResponse DescribeDomainsConfig(Models\DescribeDomainsConfigRequest $req) This API is used to query the detailed configuration information of a CDN acceleration domain name.

>? If you have migrated your ECDN service to CDN, you can use the <a href="https://intl.cloud.tencent.com/document/api/228/41117?from_cn_redirect=1">corresponding CDN API</a>.
 * @method Models\DescribeEcdnDomainLogsResponse DescribeEcdnDomainLogs(Models\DescribeEcdnDomainLogsRequest $req) This API is used to query the access log download link of a domain name.
 * @method Models\DescribeEcdnDomainStatisticsResponse DescribeEcdnDomainStatistics(Models\DescribeEcdnDomainStatisticsRequest $req) This API is used to query the statistical metrics of domain name access within a specified time period.
 * @method Models\DescribeEcdnStatisticsResponse DescribeEcdnStatistics(Models\DescribeEcdnStatisticsRequest $req) This API is used to query ECDN real-time access monitoring data and supports the following metrics:

+ Traffic (in bytes)
+ Bandwidth (in bps)
+ Number of requests
+ Number of 2xx status codes and details of status codes starting with 2
+ Number of 3xx status codes and details of status codes starting with 3
+ Number of 4xx status codes and details of status codes starting with 4
+ Number of 5xx status codes and details of status codes starting with 5
 * @method Models\DescribeIpStatusResponse DescribeIpStatus(Models\DescribeIpStatusRequest $req) This API is used to query ECDN node IPs. This API is only available to beta users. Please submit a ticket to use it.

If you need to add the node IPs to your origin allowlist, keep querying the updating the IPs regularly to ensure the success of origin forwarding. 
 * @method Models\DescribePurgeQuotaResponse DescribePurgeQuota(Models\DescribePurgeQuotaRequest $req) This API is used to query the usage quota of the purge API.

>? If you have migrated your ECDN service to CDN, you can use the <a href="https://intl.cloud.tencent.com/document/api/228/41956?from_cn_redirect=1">corresponding CDN API</a>.
 * @method Models\DescribePurgeTasksResponse DescribePurgeTasks(Models\DescribePurgeTasksRequest $req) This API is used to query the submission record and progress of purge tasks.

>? If you have migrated your ECDN service to CDN, you can use the <a href="https://intl.cloud.tencent.com/document/api/228/37873?from_cn_redirect=1">corresponding CDN API</a>.
 * @method Models\PurgePathCacheResponse PurgePathCache(Models\PurgePathCacheRequest $req) This API is used to purge cache directories in batches. One purge task ID will be returned for each submission.

>? If you have migrated your ECDN service to CDN, you can use the <a href="https://intl.cloud.tencent.com/document/api/570/42475?from_cn_redirect=1">corresponding CDN API</a>.
 * @method Models\PurgeUrlsCacheResponse PurgeUrlsCache(Models\PurgeUrlsCacheRequest $req) This API is used to batch purge URLs. One purge task ID will be returned for each submission.

>? If you have migrated your ECDN service to CDN, you can use the <a href="https://intl.cloud.tencent.com/document/api/228/37870?from_cn_redirect=1">corresponding CDN API</a>.
 * @method Models\StartEcdnDomainResponse StartEcdnDomain(Models\StartEcdnDomainRequest $req) This API is used to enable an acceleration domain name. The domain name to be enabled must be in deactivated status.

>? If you have migrated your ECDN service to CDN, you can use the <a href="https://intl.cloud.tencent.com/document/product/228/41121?from_cn_redirect=1">corresponding CDN API</a>.
 * @method Models\StopEcdnDomainResponse StopEcdnDomain(Models\StopEcdnDomainRequest $req) This API is used to disable an acceleration domain name. The domain name to be disabled must be in enabled or deploying status.

>? If you have migrated your ECDN service to CDN, you can use the <a href="https://intl.cloud.tencent.com/document/product/228/41120?from_cn_redirect=1">corresponding CDN API</a>.
 * @method Models\UpdateDomainConfigResponse UpdateDomainConfig(Models\UpdateDomainConfigRequest $req) This API is used to update the configuration information of an ECDN acceleration domain name.
Note: if you need to update complex configuration items, you must pass all the attributes of the entire object. The default value will be used for attributes that are not passed. We recommend calling the querying API to obtain the configuration attributes first. You can then modify and pass the attributes to the API. The certificate and key fields do not need to be passed for HTTPS configuration.

>?  If your application has been migrated to Tencent Cloud CDN, you can use <a href="https://intl.cloud.tencent.com/document/product/228/41116?from_cn_redirect=1">CDN APIs</a>.
 */

class EcdnClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ecdn.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ecdn";

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
