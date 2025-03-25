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

namespace TencentCloud\Cdn\V20180606;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdn\V20180606\Models as Models;

/**
 * @method Models\AddCLSTopicDomainsResponse AddCLSTopicDomains(Models\AddCLSTopicDomainsRequest $req) This API is used to add one or more domains to a specified log topic.
 * @method Models\AddCdnDomainResponse AddCdnDomain(Models\AddCdnDomainRequest $req) This API is used to add a CDN acceleration domain name. Up to 100 domain names can be added per minute.
 * @method Models\CreateClsLogTopicResponse CreateClsLogTopic(Models\CreateClsLogTopicRequest $req) This API is used to create a log topic. Up to 10 log topics can be created under one logset.
 * @method Models\CreateScdnFailedLogTaskResponse CreateScdnFailedLogTask(Models\CreateScdnFailedLogTaskRequest $req) This API is used to recreate a failed event log task.
 * @method Models\DeleteCdnDomainResponse DeleteCdnDomain(Models\DeleteCdnDomainRequest $req) This API is used to delete a specified acceleration domain name.
 * @method Models\DeleteClsLogTopicResponse DeleteClsLogTopic(Models\DeleteClsLogTopicRequest $req) This API is used to delete a log topic. Note: when a log topic is deleted, all logs of the domain names bound to it will no longer be published to the topic, and the logs previously published to the topic will be deleted. This action will take effect within 5–15 minutes.
 * @method Models\DescribeBillingDataResponse DescribeBillingData(Models\DescribeBillingDataRequest $req) This API is used to query billing data details.
 * @method Models\DescribeCdnDataResponse DescribeCdnData(Models\DescribeCdnDataRequest $req) This API is used to query CDN real-time access monitoring data and supports the following metrics:

+ Traffic (in bytes)
+ Bandwidth (in bps)
+ Number of requests
+ Number of hit requests
+ Request hit rate (in %)
+ Hit traffic (in bytes)
+ Traffic hit rate (in %)
+ Aggregate list of 2xx status codes and the details of status codes starting with 2 (in entries)
+ Aggregate list of 3xx status codes and the details of status codes starting with 3 (in entries)
+ Aggregate list of 4xx status codes and the details of status codes starting with 4 (in entries)
+ Aggregate list of 5xx status codes and the details of status codes starting with 5 (in entries)
 * @method Models\DescribeCdnDomainLogsResponse DescribeCdnDomainLogs(Models\DescribeCdnDomainLogsRequest $req) This API is used to query the download link of an access log. You can use this API for access logs in the last 30 days either within or outside Mainland China.
 * @method Models\DescribeCdnIpResponse DescribeCdnIp(Models\DescribeCdnIpRequest $req) This API is used to query CDN IP ownership.
 * @method Models\DescribeCdnOriginIpResponse DescribeCdnOriginIp(Models\DescribeCdnOriginIpRequest $req) This API is used to query the IP information of CDN intermediate nodes. Note: this API will be deactivated soon and no longer be maintained. Please call `DescribeIpStatus` instead.
 * @method Models\DescribeCertDomainsResponse DescribeCertDomains(Models\DescribeCertDomainsRequest $req) This API is used to verify a SSL certificate and obtain its domain names.
 * @method Models\DescribeDomainsResponse DescribeDomains(Models\DescribeDomainsRequest $req) This API is used to query the basic configuration information of CDN acceleration domain names (inside and outside mainland China), including the project ID, service status, service type, creation time, and update time, etc.
 * @method Models\DescribeDomainsConfigResponse DescribeDomainsConfig(Models\DescribeDomainsConfigRequest $req) This API is used to query the complete configuration information of CDN acceleration domain names (inside and outside mainland China).
 * @method Models\DescribeIpStatusResponse DescribeIpStatus(Models\DescribeIpStatusRequest $req) This API is used to query the IP details of edge nodes (available soon) and intermediate nodes. Note that there is a certain delay in data availability.

>? If you have migrated your ECDN service to CDN, you can use the <a href="https://intl.cloud.tencent.com/document/api/228/41954?from_cn_redirect=1">corresponding CDN API</a>.
 * @method Models\DescribeIpVisitResponse DescribeIpVisit(Models\DescribeIpVisitRequest $req) This API (DescribeIpVisit) is used to query the number of users who remain active for 5 minutes and the detailed number of daily active users.

+ Number of users who remain active for 5 minutes: Collects deduplicated statistics based on client IP addresses in the log with the 5-minute granularity.
+ Number of daily active users: Collects deduplicated statistics based on client IP addresses in the log with the 1-day granularity.
 * @method Models\DescribeMapInfoResponse DescribeMapInfo(Models\DescribeMapInfoRequest $req) This API (DescribeMapInfo) is used to query the IDs of districts or ISPs.
 * @method Models\DescribeOriginDataResponse DescribeOriginData(Models\DescribeOriginDataRequest $req) This API is used to query CDN real-time origin-pull monitoring data and supports the following metrics:

+ Origin-pull traffic (in bytes)
+ Origin-pull bandwidth (in bps)
+ Number of origin-pull requests
+ Number of failed origin-pull requests
+ Origin-pull failure rate (in % with two decimal digits)
+ Aggregate list of 2xx origin-pull status codes and the details of origin-pull status codes starting with 2 (in entries)
+ Aggregate list of 3xx origin-pull status codes and the details of origin-pull status codes starting with 3 (in entries)
+ Aggregate list of 4xx origin-pull status codes and the details of origin-pull status codes starting with 4 (in entries)
+ Aggregate list of 5xx origin-pull status codes and the details of origin-pull status codes starting with 5 (in entries)
 * @method Models\DescribePayTypeResponse DescribePayType(Models\DescribePayTypeRequest $req) This API (DescribePayType) is used to query billing information of the current account, such as billing mode and billing cycle.
 * @method Models\DescribePurgeQuotaResponse DescribePurgeQuota(Models\DescribePurgeQuotaRequest $req) This API is used to query the purge usage quota and daily available usage for an account.
 * @method Models\DescribePurgeTasksResponse DescribePurgeTasks(Models\DescribePurgeTasksRequest $req) This API is used to query the record and progress of URL or directory purge tasks submitted via the `PurgePathCache` or `PurgeUrlsCache` APIs.
 * @method Models\DescribePushQuotaResponse DescribePushQuota(Models\DescribePushQuotaRequest $req) This API is used to query the prefetch quota and daily available usage.
 * @method Models\DescribePushTasksResponse DescribePushTasks(Models\DescribePushTasksRequest $req) This API is used to query the submission record and progress of prefetch tasks.
 * @method Models\DescribeReportDataResponse DescribeReportData(Models\DescribeReportDataRequest $req) This API is used to query the daily/weekly/monthly report data at domain name/project levels.
 * @method Models\DescribeUrlViolationsResponse DescribeUrlViolations(Models\DescribeUrlViolationsRequest $req) This API is used to query the list of domain name URLs containing regulation-violating content scanned and detected by the CDN system, and the current status of the URLs.
It corresponds to the **Pornography Detection** page on the CDN Console.
 * @method Models\DisableCachesResponse DisableCaches(Models\DisableCachesRequest $req) This API is used to block access to a specific URL on CDN. When a URL is blocked, error 403 will be returned for requests from the Chinese mainland. URL blocking is not permanent. Note that this API is only available to beta users now. 
 * @method Models\DisableClsLogTopicResponse DisableClsLogTopic(Models\DisableClsLogTopicRequest $req) This API is used to stop publishing to a log topic. Note: after a log topic is disabled, all logs of the domain names bound to it will no longer be published to the topic, and the logs that have already been published will be retained. This action will take effect within 5–15 minutes.

 * @method Models\EnableCachesResponse EnableCaches(Models\EnableCachesRequest $req) This API (EnableCaches) is used to unblock manually blocked URLs. After a URL is successfully unblocked, it takes about 5 to 10 minutes to take effect across the entire network. (This API is during beta test and not fully available now.)
 * @method Models\EnableClsLogTopicResponse EnableClsLogTopic(Models\EnableClsLogTopicRequest $req) This API is used to start publishing to a log topic. Note: after a log topic is enabled, all logs of the domain names bound to the topic will be published to it. This action will take effect within 5–15 minutes.
 * @method Models\GetDisableRecordsResponse GetDisableRecords(Models\GetDisableRecordsRequest $req) This API is used to query the resource blocking history and the current URL status. (This API is in beta test and not generally available yet.)
 * @method Models\ListClsLogTopicsResponse ListClsLogTopics(Models\ListClsLogTopicsRequest $req) This API is used to display the list of log topics. Note: a logset can contain up to 10 log topics.
 * @method Models\ListClsTopicDomainsResponse ListClsTopicDomains(Models\ListClsTopicDomainsRequest $req) This API is used to get the list of domain names bound to a log topic.
 * @method Models\ListTopDataResponse ListTopData(Models\ListTopDataRequest $req) This API is used to list data sorted the following ways by using different combinations of the Metric and Filter input parameters:

+ It sorts access URLs by total traffic and total requests, and returns the top 1,000 URLs in descending order.
+ It sorts client districts by total traffic and total requests, and returns the list of districts in descending order.
+ It sorts client ISPs by total traffic and total requests, and returns the list of ISPs in descending order.
+ It sorts domain names by total traffic, peak bandwidth, total requests, average hit rate, and 2XX/3XX/4XX/5XX status codes, and returns the list of domain names in descending order.
+ It sorts domain names by total origin-pull traffic, peak origin-pull bandwidth, total origin-pull requests, average origin-pull failure rate, and 2XX/3XX/4XX/5XX origin-pull status codes, and returns the list of domain names in descending order.

Note: only data from the last 90 days will be queried.
 * @method Models\ManageClsTopicDomainsResponse ManageClsTopicDomains(Models\ManageClsTopicDomainsRequest $req) This API is used to manage the list of domain names bound to a log topic.
 * @method Models\ModifyDomainConfigResponse ModifyDomainConfig(Models\ModifyDomainConfigRequest $req) This API is used to modify the configuration of a CDN acceleration domain name in a finer manner than `UpdateDomainConfig`.
Notes:
In `Route`, separate values by dots (.). The last value is called a leaf node. For non-leaf nodes, keep the configuration unchanged.
The Value field is serialized to a JSON string {key:value}, where **key** is fixed to `update` and **value** is used to specify the value of the configuration parameter. To specify configurations with complex types, see https://intl.cloud.tencent.com/document/product/228/41116.?from_cn_redirect=1
The input parameters of this API are not reported to CloudAudit as it may contain sensitive data, such as keys and secrets.
 * @method Models\PurgePathCacheResponse PurgePathCache(Models\PurgePathCacheRequest $req) This API is used to submit multiple directory purge tasks, which are carried out according to the acceleration region of the domain names.
By default, a maximum of 100 directories can be purged per day for acceleration regions either within or outside the Chinese mainland, and up to 500 tasks can be submitted at a time.
 * @method Models\PurgeUrlsCacheResponse PurgeUrlsCache(Models\PurgeUrlsCacheRequest $req) This API is used to submit multiple URL purge tasks, which are carried out according to the current acceleration region of the domain names in the URLs.
By default, a maximum of 10,000 URLs can be purged per day for acceleration regions either within or outside Mainland China, and up to 1,000 tasks can be submitted at a time.
 * @method Models\PushUrlsCacheResponse PushUrlsCache(Models\PushUrlsCacheRequest $req) This API is used to cache specified URL resources to CDN nodes. You can specify acceleration regions for the prefetch.
By default, a maximum of 1000 URLs can be prefetched per day for regions either within or outside the Chinese mainland, and up to 500 tasks can be submitted at a time. Note that resources prefetched outside the Chinese mainland will be cached to CDN nodes outside the Chinese mainland and the traffic generated will incur costs.
 * @method Models\SearchClsLogResponse SearchClsLog(Models\SearchClsLogRequest $req) This API is used to search for CLS logs. Search filters can be set to today, 24 hours (one of the last 7 days), and the last 7 days.
 * @method Models\StartCdnDomainResponse StartCdnDomain(Models\StartCdnDomainRequest $req) This API is used to enable the acceleration service for a disabled domain name.
 * @method Models\StopCdnDomainResponse StopCdnDomain(Models\StopCdnDomainRequest $req) This API is used to suspend the acceleration service for a domain name.
Note: after the acceleration service has been suspended, requests to the cache node will return a 404 error. In order to avoid impact to your business, please move the domain name to another service before suspending the acceleration service.
 * @method Models\UpdateDomainConfigResponse UpdateDomainConfig(Models\UpdateDomainConfigRequest $req) This API is used to modify the configuration of CDN acceleration domain names.
Note: To update complex configuration items, all attributes of the object must be specified, or the default values are used. We recommend calling the querying API to get attributes before modifying and passing them to this API.
The input parameters of this API are not reported to CloudAudit as it may contain sensitive data, such as keys and secrets.
 * @method Models\UpdatePayTypeResponse UpdatePayType(Models\UpdatePayTypeRequest $req) This API is used to modify the billing mode of an account. At present, the billing mode of accounts on a monthly billing cycle and sub-accounts cannot be modified.
 * @method Models\UpdateScdnDomainResponse UpdateScdnDomain(Models\UpdateScdnDomainRequest $req) This API is used to modify security configurations of SCDN acceleration domain names.
 */

class CdnClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdn.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cdn";

    /**
     * @var string
     */
    protected $version = "2018-06-06";

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
        $respClass = "TencentCloud"."\\".ucfirst("cdn")."\\"."V20180606\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
