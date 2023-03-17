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

namespace TencentCloud\Teo\V20220901;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Teo\V20220901\Models as Models;

/**
 * @method Models\BindZoneToPlanResponse BindZoneToPlan(Models\BindZoneToPlanRequest $req) This API is used to bind a site to a plan.
 * @method Models\CheckCertificateResponse CheckCertificate(Models\CheckCertificateRequest $req) This API is used to verify a certificate.
 * @method Models\CreateAccelerationDomainResponse CreateAccelerationDomain(Models\CreateAccelerationDomainRequest $req) This API is used to connect a domain to EdgeOne.
 * @method Models\CreateAliasDomainResponse CreateAliasDomain(Models\CreateAliasDomainRequest $req) This API is used to create an alias domain name.
 * @method Models\CreateApplicationProxyResponse CreateApplicationProxy(Models\CreateApplicationProxyRequest $req) This API is used to create an application proxy.
 * @method Models\CreateApplicationProxyRuleResponse CreateApplicationProxyRule(Models\CreateApplicationProxyRuleRequest $req) This API is used to create an application proxy rule.
 * @method Models\CreateCredentialResponse CreateCredential(Models\CreateCredentialRequest $req) Creates a credential for COS origin-pull.
 * @method Models\CreateOriginGroupResponse CreateOriginGroup(Models\CreateOriginGroupRequest $req) This API is used to create an origin group.
 * @method Models\CreatePlanForZoneResponse CreatePlanForZone(Models\CreatePlanForZoneRequest $req) This API is used to purchase a plan for a new site.
 * @method Models\CreatePrefetchTaskResponse CreatePrefetchTask(Models\CreatePrefetchTaskRequest $req) This API is used to create a pre-warming task.
 * @method Models\CreatePurgeTaskResponse CreatePurgeTask(Models\CreatePurgeTaskRequest $req) This API is used to create a cache purging task.
 * @method Models\CreateReplayTaskResponse CreateReplayTask(Models\CreateReplayTaskRequest $req) This API is used to create a replay task for purging or pre-warming URLs.
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) This API is used to create a rule in the rule engine.
 * @method Models\CreateSpeedTestingResponse CreateSpeedTesting(Models\CreateSpeedTestingRequest $req) This API is used to create a site testing task for a specified domain name.
 * @method Models\CreateZoneResponse CreateZone(Models\CreateZoneRequest $req) This API is used to access a new site.
 * @method Models\DeleteAccelerationDomainsResponse DeleteAccelerationDomains(Models\DeleteAccelerationDomainsRequest $req) This API is used to batch remove accelerated domain names.
 * @method Models\DeleteAliasDomainResponse DeleteAliasDomain(Models\DeleteAliasDomainRequest $req) This API is used to delete an alias domain name.
 * @method Models\DeleteApplicationProxyResponse DeleteApplicationProxy(Models\DeleteApplicationProxyRequest $req) This API is used to delete an application proxy.
 * @method Models\DeleteApplicationProxyRuleResponse DeleteApplicationProxyRule(Models\DeleteApplicationProxyRuleRequest $req) This API is used to delete an application proxy rule.
 * @method Models\DeleteOriginGroupResponse DeleteOriginGroup(Models\DeleteOriginGroupRequest $req) This API is used to delete an origin group.
 * @method Models\DeleteRulesResponse DeleteRules(Models\DeleteRulesRequest $req) This API is used to batch delete rules from the rule engine.
 * @method Models\DeleteZoneResponse DeleteZone(Models\DeleteZoneRequest $req) This API is used to delete a site.
 * @method Models\DescribeAccelerationDomainsResponse DescribeAccelerationDomains(Models\DescribeAccelerationDomainsRequest $req) This API is used to query accelerated domain names. Paging, sorting and filtering are supported.
 * @method Models\DescribeAddableEntityListResponse DescribeAddableEntityList(Models\DescribeAddableEntityListRequest $req) This API is used to query available shipping entities.
 * @method Models\DescribeAliasDomainsResponse DescribeAliasDomains(Models\DescribeAliasDomainsRequest $req) This API is used to query the information of alias domain names.
 * @method Models\DescribeApplicationProxiesResponse DescribeApplicationProxies(Models\DescribeApplicationProxiesRequest $req) This API is used to query the list of application proxies.
 * @method Models\DescribeAvailablePlansResponse DescribeAvailablePlans(Models\DescribeAvailablePlansRequest $req) This API is used to query plan options available for purchase.
 * @method Models\DescribeClientRuleListResponse DescribeClientRuleList(Models\DescribeClientRuleListRequest $req) This API is used to query the information of blocked clients.
 * @method Models\DescribeContentQuotaResponse DescribeContentQuota(Models\DescribeContentQuotaRequest $req) This API is used to query content management quotas.
 * @method Models\DescribeDDoSAttackDataResponse DescribeDDoSAttackData(Models\DescribeDDoSAttackDataRequest $req) This API is used to query the time-series data of DDoS attacks.
 * @method Models\DescribeDDoSAttackTopDataResponse DescribeDDoSAttackTopData(Models\DescribeDDoSAttackTopDataRequest $req) This API is used to query the top-ranked DDoS attack data.
 * @method Models\DescribeDefaultCertificatesResponse DescribeDefaultCertificates(Models\DescribeDefaultCertificatesRequest $req) This API is used to query a list of default certificates.
 * @method Models\DescribeDnsDataResponse DescribeDnsData(Models\DescribeDnsDataRequest $req) This API is used to get DNS requests.
 * @method Models\DescribeHostsSettingResponse DescribeHostsSetting(Models\DescribeHostsSettingRequest $req) This API is used to query detailed domain name configuration.
 * @method Models\DescribeIdentificationsResponse DescribeIdentifications(Models\DescribeIdentificationsRequest $req) This API is used to query the verification information of a site.
 * @method Models\DescribeLogSetsResponse DescribeLogSets(Models\DescribeLogSetsRequest $req) This API is used to get a list of logsets.
 * @method Models\DescribeLogTopicTasksResponse DescribeLogTopicTasks(Models\DescribeLogTopicTasksRequest $req) This API is used to get a list of shipping tasks.
 * @method Models\DescribeOriginGroupResponse DescribeOriginGroup(Models\DescribeOriginGroupRequest $req) This API is used to obtain a list of origin groups.
 * @method Models\DescribeOriginProtectionResponse DescribeOriginProtection(Models\DescribeOriginProtectionRequest $req) This API is used to query the origin protection configuration.
 * @method Models\DescribeOverviewL7DataResponse DescribeOverviewL7Data(Models\DescribeOverviewL7DataRequest $req) This API is used to query the L7 traffic summary statistics recorded over time.
 * @method Models\DescribePrefetchTasksResponse DescribePrefetchTasks(Models\DescribePrefetchTasksRequest $req) This API is used to query the pre-warming task status.
 * @method Models\DescribePurgeTasksResponse DescribePurgeTasks(Models\DescribePurgeTasksRequest $req) Querying the cache purging history
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) This API is used to query the rules in the rule engine.
 * @method Models\DescribeRulesSettingResponse DescribeRulesSetting(Models\DescribeRulesSettingRequest $req) This API is used to return the list of the settings of the rule engine that can be used for request match and their detailed recommended configuration information.
 * @method Models\DescribeSingleL7AnalysisDataResponse DescribeSingleL7AnalysisData(Models\DescribeSingleL7AnalysisDataRequest $req) This API is used to query the statistical calculation result of an L7 traffic metric. In common cases, only one value is returned for the query of statistical calculation results.
 * @method Models\DescribeSpeedTestingDetailsResponse DescribeSpeedTestingDetails(Models\DescribeSpeedTestingDetailsRequest $req) This API is used to query the site’s load speed across regions.
 * @method Models\DescribeSpeedTestingMetricDataResponse DescribeSpeedTestingMetricData(Models\DescribeSpeedTestingMetricDataRequest $req) This API is used to query the result of a site test.
 * @method Models\DescribeSpeedTestingQuotaResponse DescribeSpeedTestingQuota(Models\DescribeSpeedTestingQuotaRequest $req) This API is used to query the quota limit on site tests.
 * @method Models\DescribeTimingL4DataResponse DescribeTimingL4Data(Models\DescribeTimingL4DataRequest $req) This API is used to query the list of L4 traffic data recorded over time.
 * @method Models\DescribeTimingL7AnalysisDataResponse DescribeTimingL7AnalysisData(Models\DescribeTimingL7AnalysisDataRequest $req) This API is used to query the L7 data recorded over time.
 * @method Models\DescribeTimingL7CacheDataResponse DescribeTimingL7CacheData(Models\DescribeTimingL7CacheDataRequest $req) This API is used to query the time-series L7 cached data.
 * @method Models\DescribeTimingL7SourceDataResponse DescribeTimingL7SourceData(Models\DescribeTimingL7SourceDataRequest $req) This API is used to query the L7 time-series data of origin-pull.
 * @method Models\DescribeTopL7AnalysisDataResponse DescribeTopL7AnalysisData(Models\DescribeTopL7AnalysisDataRequest $req) This API is used to query the top-ranked L7 traffic data.
 * @method Models\DescribeTopL7CacheDataResponse DescribeTopL7CacheData(Models\DescribeTopL7CacheDataRequest $req) This API is used to query the cached L7 top-ranked data.
 * @method Models\DescribeWebManagedRulesDataResponse DescribeWebManagedRulesData(Models\DescribeWebManagedRulesDataRequest $req) This API is used to query the WAF attack data recorded over time.
 * @method Models\DescribeWebManagedRulesHitRuleDetailResponse DescribeWebManagedRulesHitRuleDetail(Models\DescribeWebManagedRulesHitRuleDetailRequest $req) This API is used to query the details of a hit WAF security rule.
 * @method Models\DescribeWebManagedRulesLogResponse DescribeWebManagedRulesLog(Models\DescribeWebManagedRulesLogRequest $req) This API is used to query web attack logs.
 * @method Models\DescribeWebProtectionClientIpListResponse DescribeWebProtectionClientIpList(Models\DescribeWebProtectionClientIpListRequest $req) This API is used to query the information of CC attackers.
 * @method Models\DescribeWebProtectionDataResponse DescribeWebProtectionData(Models\DescribeWebProtectionDataRequest $req) This API is used to query the CC protection data recorded over time.
 * @method Models\DescribeWebProtectionHitRuleDetailResponse DescribeWebProtectionHitRuleDetail(Models\DescribeWebProtectionHitRuleDetailRequest $req) This API is used to query the details of a hit CC protection rule.
 * @method Models\DescribeWebProtectionTopDataResponse DescribeWebProtectionTopData(Models\DescribeWebProtectionTopDataRequest $req) This API is used to query the top-ranked CC protection data.
 * @method Models\DescribeZoneSettingResponse DescribeZoneSetting(Models\DescribeZoneSettingRequest $req) This API is used to query the site configuration.
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) This API is used to query the list of user sites.
 * @method Models\DownloadL4LogsResponse DownloadL4Logs(Models\DownloadL4LogsRequest $req) This API is used to download L4 logs.
 * @method Models\DownloadL7LogsResponse DownloadL7Logs(Models\DownloadL7LogsRequest $req) This API is used to download L7 logs.
 * @method Models\IdentifyZoneResponse IdentifyZone(Models\IdentifyZoneRequest $req) This API is used to verify ownership of the site.
 * @method Models\ModifyAccelerationDomainResponse ModifyAccelerationDomain(Models\ModifyAccelerationDomainRequest $req) This API is used to modify an accelerated domain name.
 * @method Models\ModifyAccelerationDomainStatusesResponse ModifyAccelerationDomainStatuses(Models\ModifyAccelerationDomainStatusesRequest $req) This API is used to batch modify the status of accelerated domains.
 * @method Models\ModifyAliasDomainResponse ModifyAliasDomain(Models\ModifyAliasDomainRequest $req) This API is used to modify an alias domain name.
 * @method Models\ModifyAliasDomainStatusResponse ModifyAliasDomainStatus(Models\ModifyAliasDomainStatusRequest $req) This API is used to modify the status of an alias domain name.
 * @method Models\ModifyApplicationProxyResponse ModifyApplicationProxy(Models\ModifyApplicationProxyRequest $req) This API is used to modify an application proxy.
 * @method Models\ModifyApplicationProxyRuleResponse ModifyApplicationProxyRule(Models\ModifyApplicationProxyRuleRequest $req) This API is used to modify an application proxy rule.
 * @method Models\ModifyApplicationProxyRuleStatusResponse ModifyApplicationProxyRuleStatus(Models\ModifyApplicationProxyRuleStatusRequest $req) This API is used to modify the status of an application proxy rule.
 * @method Models\ModifyApplicationProxyStatusResponse ModifyApplicationProxyStatus(Models\ModifyApplicationProxyStatusRequest $req) This API is used to modify the status of an application proxy.
 * @method Models\ModifyDefaultCertificateResponse ModifyDefaultCertificate(Models\ModifyDefaultCertificateRequest $req) This example shows you how to modify the status of a default certificate.
 * @method Models\ModifyHostsCertificateResponse ModifyHostsCertificate(Models\ModifyHostsCertificateRequest $req) This API is used to modify the certificate of a domain name.
 * @method Models\ModifyOriginGroupResponse ModifyOriginGroup(Models\ModifyOriginGroupRequest $req) This API is used to modify an origin group.
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) This API is used to modify a rule in the rule engine.
 * @method Models\ModifyRulePriorityResponse ModifyRulePriority(Models\ModifyRulePriorityRequest $req) This API is used to modify the priority of a rule in the rule engine.
 * @method Models\ModifySecurityPolicyResponse ModifySecurityPolicy(Models\ModifySecurityPolicyRequest $req) This API is used to modify the web and bot security configurations.
 * @method Models\ModifySecurityWafGroupPolicyResponse ModifySecurityWafGroupPolicy(Models\ModifySecurityWafGroupPolicyRequest $req) This API is used to modify a managed rule.
 * @method Models\ModifyZoneResponse ModifyZone(Models\ModifyZoneRequest $req) This API is used to modify a site.
 * @method Models\ModifyZoneSettingResponse ModifyZoneSetting(Models\ModifyZoneSettingRequest $req) This API is used to modify the site configuration.
 * @method Models\ModifyZoneStatusResponse ModifyZoneStatus(Models\ModifyZoneStatusRequest $req) This API is used to change the site status.
 * @method Models\ReclaimAliasDomainResponse ReclaimAliasDomain(Models\ReclaimAliasDomainRequest $req) To reclaim a site and its associated alias domain names, specify the "ZoneId" field; to reclaim an alias domain name that is already added, specify the "ZoneName" filed.
 * @method Models\ReclaimZoneResponse ReclaimZone(Models\ReclaimZoneRequest $req) This API is used to reclaim a site from other users after its ownership is verified.
 * @method Models\UpdateOriginProtectionIPWhitelistResponse UpdateOriginProtectionIPWhitelist(Models\UpdateOriginProtectionIPWhitelistRequest $req) This API is used to update the list of intermediate IPs.
 */

class TeoClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "teo.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "teo";

    /**
     * @var string
     */
    protected $version = "2022-09-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("teo")."\\"."V20220901\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
