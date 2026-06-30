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

namespace TencentCloud\Cdn\V20180606;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdn\V20180606\Models as Models;

/**
 * @method Models\AddCLSTopicDomainsResponse AddCLSTopicDomains(Models\AddCLSTopicDomainsRequest $req) This API is used to add one or more domains to a specified log topic.
 * @method Models\AddCdnDomainResponse AddCdnDomain(Models\AddCdnDomainRequest $req) This API is used to add a CDN acceleration domain name. Up to 100 domain names can be added per minute.
 * @method Models\CreateClsLogTopicResponse CreateClsLogTopic(Models\CreateClsLogTopicRequest $req) This API is used to create a log topic. Up to 10 log topics can be created under one logset.
 * @method Models\DeleteCdnDomainResponse DeleteCdnDomain(Models\DeleteCdnDomainRequest $req) This API is used to delete a specified acceleration domain name.
 * @method Models\DeleteClsLogTopicResponse DeleteClsLogTopic(Models\DeleteClsLogTopicRequest $req) This API is used to delete a log topic. Note: when a log topic is deleted, all logs of the domain names bound to it will no longer be published to the topic, and the logs previously published to the topic will be deleted. This action will take effect within 5–15 minutes.
 * @method Models\DescribeBillingDataResponse DescribeBillingData(Models\DescribeBillingDataRequest $req) This API is used to query billing data details. 
Notes: 
Due to the impact of the billing and settlement methods, the data returned by the DescribeBillingData  has a certain delay. For hourly-billed customers, the expected delay is 3 to 5 hours. For monthly-billed customers, the expected delay is 4 to 28 hours. Before 4:00 AM  (UTC+8, excluding 4:00 AM), only data from two days prior can be queried; after 4:00 AM (including 4:00 AM), data from the previous day can be queried. 
If you have a strong requirement for data timeliness, it is recommended to use the DescribeCdnData.
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
This API is used to create and bind a policy. (Note: The API request frequency limit follows CDN's restriction: 200 requests/10 minutes).
 * @method Models\DescribeCdnOriginIpResponse DescribeCdnOriginIp(Models\DescribeCdnOriginIpRequest $req) **This API is deprecated.**.
This API is used to query the IP information of CDN origin-pull nodes. (Note: The replace API is DescribeIpStatus.).
 * @method Models\DescribeCertDomainsResponse DescribeCertDomains(Models\DescribeCertDomainsRequest $req) This API is used to verify a SSL certificate and obtain its domain names.
 * @method Models\DescribeDomainsResponse DescribeDomains(Models\DescribeDomainsRequest $req) This API is used to query the basic configuration information of CDN acceleration domain names (inside and outside mainland China), including the project ID, service status, service type, creation time, and update time, etc.
 * @method Models\DescribeDomainsConfigResponse DescribeDomainsConfig(Models\DescribeDomainsConfigRequest $req) This API is used to query the complete configuration information of CDN acceleration domain names (inside and outside mainland China).
 * @method Models\DescribeIpStatusResponse DescribeIpStatus(Models\DescribeIpStatusRequest $req) This API is used to query the IP details of edge nodes (available soon) and intermediate nodes. Note that there is a certain delay in data availability.

If you have migrated your ECDN service to CDN, you can use the [DescribeIpStatus](https://www.tencentcloud.com/document/api/228/37471).
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
 * @method Models\DescribeUrlViolationsResponse DescribeUrlViolations(Models\DescribeUrlViolationsRequest $req) This API is used to query the URL list with domain violations detected by the CDN system scan and their status.
This API is used to correspond to the content compliant webpage in the CDN console.
 * @method Models\DisableClsLogTopicResponse DisableClsLogTopic(Models\DisableClsLogTopicRequest $req) This API is used to stop publishing to a log topic. Note: after a log topic is disabled, all logs of the domain names bound to it will no longer be published to the topic, and the logs that have already been published will be retained. This action will take effect within 5–15 minutes.

 * @method Models\DuplicateDomainConfigResponse DuplicateDomainConfig(Models\DuplicateDomainConfigRequest $req) This API is used to copy the configuration of a reference domain to a new domain name. Self-owned certificates and customization options are not currently supported.
 * @method Models\EnableClsLogTopicResponse EnableClsLogTopic(Models\EnableClsLogTopicRequest $req) This API is used to start publishing to a log topic. Note: after a log topic is enabled, all logs of the domain names bound to the topic will be published to it. This action will take effect within 5–15 minutes.
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
 * @method Models\ModifyDomainConfigResponse ModifyDomainConfig(Models\ModifyDomainConfigRequest $req) This API is used to modify the configuration of a CDN acceleration domain name.
Create and bind policy Query instance Reset instance access password.
The Route field uses dot separation, with the last segment called the leaf node, while non-leaf node configurations remain unchanged.
The Value Field is serialized using json, with "update" fixed as the key. For the configuration path Value, refer to the complex type of each configuration item in the API at [UpdateDomainConfig](https://www.tencentcloud.com/document/api/228/34018). It corresponds to the nodes under the complex type of the configuration path.
This API is used for CloudAudit-related operations. The input parameters may contain sensitive information such as keys, so they will not be reported to CloudAudit.
 * @method Models\PurgePathCacheResponse PurgePathCache(Models\PurgePathCacheRequest $req) This API is used to submit multiple directory purge tasks, which are carried out according to the acceleration region of the domain names.
By default, a maximum of 100 directories can be purged per day for acceleration regions either within or outside the Chinese mainland, and up to 500 tasks can be submitted at a time.
 * @method Models\PurgeUrlsCacheResponse PurgeUrlsCache(Models\PurgeUrlsCacheRequest $req) This API is used to submit multiple URL purge tasks, which are carried out according to the current acceleration region of the domain names in the URLs.
By default, a maximum of 10,000 URLs can be purged per day for acceleration regions either within or outside Mainland China, and up to 1,000 tasks can be submitted at a time.
 * @method Models\PushUrlsCacheResponse PushUrlsCache(Models\PushUrlsCacheRequest $req) This API is used to load a list of specified URL resources to CDN nodes and supports preheating in designated acceleration regions.
By default, the daily pre-warming quota for domestic and outside the Chinese mainland is 1000 URLs each. You can submit up to 500 URLs with each submission. The number of URLs submitted will consume the total quota. For example, if you submit 500 URLs for global pre-warming, the remaining quota for domestic and outside the Chinese mainland pre-warming will be 500 URLs each. Note: For pre-warming outside the Chinese mainland, resources are loaded to edge nodes outside the Chinese mainland by default.
 * @method Models\SearchClsLogResponse SearchClsLog(Models\SearchClsLogRequest $req) This API is used to search for CLS logs. Search filters can be set to today, 24 hours (one of the last 7 days), and the last 7 days.
 * @method Models\StartCdnDomainResponse StartCdnDomain(Models\StartCdnDomainRequest $req) This API is used to enable the acceleration service for a disabled domain name.
 * @method Models\StopCdnDomainResponse StopCdnDomain(Models\StopCdnDomainRequest $req) This API is used to suspend the acceleration service for a domain name.
Note: after the acceleration service has been suspended, requests to the cache node will return a 404 error. In order to avoid impact to your business, please move the domain name to another service before suspending the acceleration service.
 * @method Models\UpdateDomainConfigResponse UpdateDomainConfig(Models\UpdateDomainConfigRequest $req) This API is used to modify the configuration message of a CDN acceleration domain name.
Note: If you need to update a complex type configuration item, you must transmit all attributes of the entire object. Untransmitted attributes will use default values. It is recommended to pass the configuration attributes obtained from the query API after direct modification to this interface. If only modifying an individual configuration item, just pass the corresponding configuration parameter.
This API is used for CloudAudit-related operations. The input parameters may contain sensitive information such as keys, so they will not be reported to CloudAudit.
 * @method Models\UpdatePayTypeResponse UpdatePayType(Models\UpdatePayTypeRequest $req) This API is used to modify the billing mode of an account. At present, the billing mode of accounts on a monthly billing cycle and sub-accounts cannot be modified.
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
