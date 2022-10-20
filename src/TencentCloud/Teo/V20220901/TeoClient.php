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
 * @method Models\CheckCertificateResponse CheckCertificate(Models\CheckCertificateRequest $req) This API is used to verify a certificate.
 * @method Models\CreateApplicationProxyResponse CreateApplicationProxy(Models\CreateApplicationProxyRequest $req) This API is used to create an application proxy.
 * @method Models\CreateApplicationProxyRuleResponse CreateApplicationProxyRule(Models\CreateApplicationProxyRuleRequest $req) This API is used to create an application proxy rule.
 * @method Models\CreateCredentialResponse CreateCredential(Models\CreateCredentialRequest $req) Creates a credential for COS origin-pull.
 * @method Models\CreateCustomErrorPageResponse CreateCustomErrorPage(Models\CreateCustomErrorPageRequest $req) This API is used to create a custom error page.
 * @method Models\CreateDnsRecordResponse CreateDnsRecord(Models\CreateDnsRecordRequest $req) This API is used to create a DNS record.
 * @method Models\CreateIpTableListResponse CreateIpTableList(Models\CreateIpTableListRequest $req) This API is used to create an IP blocklist/allowlist.
 * @method Models\CreateLoadBalancingResponse CreateLoadBalancing(Models\CreateLoadBalancingRequest $req) This API is used to create a CLB instance.
 * @method Models\CreateLogSetResponse CreateLogSet(Models\CreateLogSetRequest $req) This API is used to create a CLS logset.
 * @method Models\CreateLogTopicTaskResponse CreateLogTopicTask(Models\CreateLogTopicTaskRequest $req) This API is used to create a shipping task.
 * @method Models\CreateOriginGroupResponse CreateOriginGroup(Models\CreateOriginGroupRequest $req) This API is used to create an origin group.
 * @method Models\CreatePlanForZoneResponse CreatePlanForZone(Models\CreatePlanForZoneRequest $req) This API is used to purchase a plan for a new site.
 * @method Models\CreatePrefetchTaskResponse CreatePrefetchTask(Models\CreatePrefetchTaskRequest $req) This API is used to create a pre-warming task.
 * @method Models\CreatePurgeTaskResponse CreatePurgeTask(Models\CreatePurgeTaskRequest $req) This API is used to create a cache purging task.
 * @method Models\CreateReplayTaskResponse CreateReplayTask(Models\CreateReplayTaskRequest $req) This API is used to create a replay task for purging or pre-warming URLs.
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) This API is used to create a rule in the rule engine.
 * @method Models\CreateSecurityDropPageResponse CreateSecurityDropPage(Models\CreateSecurityDropPageRequest $req) This API is used to create a custom block page.
 * @method Models\CreateSpeedTestingResponse CreateSpeedTesting(Models\CreateSpeedTestingRequest $req) This API is used to create a site testing task for a specified domain name.
 * @method Models\CreateZoneResponse CreateZone(Models\CreateZoneRequest $req) This API is used to access a new site.
 * @method Models\DeleteApplicationProxyResponse DeleteApplicationProxy(Models\DeleteApplicationProxyRequest $req) This API is used to delete an application proxy.
 * @method Models\DeleteApplicationProxyRuleResponse DeleteApplicationProxyRule(Models\DeleteApplicationProxyRuleRequest $req) This API is used to delete an application proxy rule.
 * @method Models\DeleteDnsRecordsResponse DeleteDnsRecords(Models\DeleteDnsRecordsRequest $req) This API is used to delete DNS records in batches.
 * @method Models\DeleteLoadBalancingResponse DeleteLoadBalancing(Models\DeleteLoadBalancingRequest $req) This API is used to delete a CLB instance.
 * @method Models\DeleteLogTopicTaskResponse DeleteLogTopicTask(Models\DeleteLogTopicTaskRequest $req) This API is used to delete a shipping task.
 * @method Models\DeleteOriginGroupResponse DeleteOriginGroup(Models\DeleteOriginGroupRequest $req) This API is used to delete an origin group.
 * @method Models\DeleteRulesResponse DeleteRules(Models\DeleteRulesRequest $req) This API is used to batch delete rules from the rule engine.
 * @method Models\DeleteZoneResponse DeleteZone(Models\DeleteZoneRequest $req) This API is used to delete a site.
 * @method Models\DescribeAddableEntityListResponse DescribeAddableEntityList(Models\DescribeAddableEntityListRequest $req) This API is used to query available shipping entities.
 * @method Models\DescribeApplicationProxiesResponse DescribeApplicationProxies(Models\DescribeApplicationProxiesRequest $req) This API is used to query the list of application proxies.
 * @method Models\DescribeAvailablePlansResponse DescribeAvailablePlans(Models\DescribeAvailablePlansRequest $req) This API is used to query plan options available for purchase.
 * @method Models\DescribeBillingDataResponse DescribeBillingData(Models\DescribeBillingDataRequest $req) This API is used to get the billing data.
 * @method Models\DescribeBotClientIpListResponse DescribeBotClientIpList(Models\DescribeBotClientIpListRequest $req) This API is used to query the list of bot attackers.
 * @method Models\DescribeBotDataResponse DescribeBotData(Models\DescribeBotDataRequest $req) This API is used to query the bot attack data recorded over time.
 * @method Models\DescribeBotHitRuleDetailResponse DescribeBotHitRuleDetail(Models\DescribeBotHitRuleDetailRequest $req) This API is used to query the details of a hit bot security rule.
 * @method Models\DescribeBotLogResponse DescribeBotLog(Models\DescribeBotLogRequest $req) This API is used to query bot attack logs.
 * @method Models\DescribeBotManagedRulesResponse DescribeBotManagedRules(Models\DescribeBotManagedRulesRequest $req) This API is used to query a bot managed rule.
 * @method Models\DescribeBotTopDataResponse DescribeBotTopData(Models\DescribeBotTopDataRequest $req) This API is used to query the top-ranked bot attack data.
 * @method Models\DescribeClientRuleListResponse DescribeClientRuleList(Models\DescribeClientRuleListRequest $req) This API is used to query the information of blocked clients.
 * @method Models\DescribeContentQuotaResponse DescribeContentQuota(Models\DescribeContentQuotaRequest $req) This API is used to query content management quotas.
 * @method Models\DescribeDDoSAttackDataResponse DescribeDDoSAttackData(Models\DescribeDDoSAttackDataRequest $req) This API is used to query the DDoS attack data recorded over time.
 * @method Models\DescribeDDoSAttackEventResponse DescribeDDoSAttackEvent(Models\DescribeDDoSAttackEventRequest $req) This API is used to query the list of DDoS attack events.
 * @method Models\DescribeDDoSAttackEventDetailResponse DescribeDDoSAttackEventDetail(Models\DescribeDDoSAttackEventDetailRequest $req) This API is used to query the details of a DDoS attack event.
 * @method Models\DescribeDDoSAttackSourceEventResponse DescribeDDoSAttackSourceEvent(Models\DescribeDDoSAttackSourceEventRequest $req) This API is used to query the list of DDoS attackers.
 * @method Models\DescribeDDoSAttackTopDataResponse DescribeDDoSAttackTopData(Models\DescribeDDoSAttackTopDataRequest $req) This API is used to query the top-ranked DDoS attack data.
 * @method Models\DescribeDDoSBlockListResponse DescribeDDoSBlockList(Models\DescribeDDoSBlockListRequest $req) This API is used to query the list of DDoS blocking data.
 * @method Models\DescribeDDoSMajorAttackEventResponse DescribeDDoSMajorAttackEvent(Models\DescribeDDoSMajorAttackEventRequest $req) This API is used to query the list of large attack events.
 * @method Models\DescribeDDoSPolicyResponse DescribeDDoSPolicy(Models\DescribeDDoSPolicyRequest $req) This API is used to query the DDoS protection configuration.
 * @method Models\DescribeDefaultCertificatesResponse DescribeDefaultCertificates(Models\DescribeDefaultCertificatesRequest $req) This API is used to query a list of default certificates.
 * @method Models\DescribeDnsDataResponse DescribeDnsData(Models\DescribeDnsDataRequest $req) This API is used to get DNS requests.
 * @method Models\DescribeDnsRecordsResponse DescribeDnsRecords(Models\DescribeDnsRecordsRequest $req) This API is used to query DNS records. Paging, sorting and filtering are supported.
 * @method Models\DescribeDnssecResponse DescribeDnssec(Models\DescribeDnssecRequest $req) This API is used to query DNSSEC information.
 * @method Models\DescribeHostsSettingResponse DescribeHostsSetting(Models\DescribeHostsSettingRequest $req) This API is used to query detailed domain name configuration.
 * @method Models\DescribeIdentificationsResponse DescribeIdentifications(Models\DescribeIdentificationsRequest $req) This API is used to query the verification information of a site.
 * @method Models\DescribeLoadBalancingResponse DescribeLoadBalancing(Models\DescribeLoadBalancingRequest $req) This API is used to obtain a list of CLB instances.
 * @method Models\DescribeLogSetsResponse DescribeLogSets(Models\DescribeLogSetsRequest $req) This API is used to get a list of logsets.
 * @method Models\DescribeLogTopicTaskDetailResponse DescribeLogTopicTaskDetail(Models\DescribeLogTopicTaskDetailRequest $req) This API is used to get the details of a shipping task.
 * @method Models\DescribeLogTopicTasksResponse DescribeLogTopicTasks(Models\DescribeLogTopicTasksRequest $req) This API is used to get a list of shipping tasks.
 * @method Models\DescribeOriginGroupResponse DescribeOriginGroup(Models\DescribeOriginGroupRequest $req) This API is used to obtain a list of origin groups.
 * @method Models\DescribeOverviewL7DataResponse DescribeOverviewL7Data(Models\DescribeOverviewL7DataRequest $req) This API is used to query the L7 traffic summary statistics recorded over time.
 * @method Models\DescribePrefetchTasksResponse DescribePrefetchTasks(Models\DescribePrefetchTasksRequest $req) This API is used to query the pre-warming task status.
 * @method Models\DescribePurgeTasksResponse DescribePurgeTasks(Models\DescribePurgeTasksRequest $req) Querying the cache purging history
 * @method Models\DescribeRateLimitIntelligenceRuleResponse DescribeRateLimitIntelligenceRule(Models\DescribeRateLimitIntelligenceRuleRequest $req) This API is used to query an intelligent rate limiting rule.
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) This API is used to query the rules in the rule engine.
 * @method Models\DescribeRulesSettingResponse DescribeRulesSetting(Models\DescribeRulesSettingRequest $req) This API is used to return the list of the settings of the rule engine that can be used for request match and their detailed recommended configuration information.
 * @method Models\DescribeSecurityGroupManagedRulesResponse DescribeSecurityGroupManagedRules(Models\DescribeSecurityGroupManagedRulesRequest $req) This API is used to obtain a managed rule group.
 * @method Models\DescribeSecurityPolicyResponse DescribeSecurityPolicy(Models\DescribeSecurityPolicyRequest $req) This API is used to query the security protection configuration.
 * @method Models\DescribeSecurityPolicyListResponse DescribeSecurityPolicyList(Models\DescribeSecurityPolicyListRequest $req) This API is used to query all protected subdomain names.
 * @method Models\DescribeSecurityPolicyRegionsResponse DescribeSecurityPolicyRegions(Models\DescribeSecurityPolicyRegionsRequest $req) This API is used to query information of all regions.
 * @method Models\DescribeSecurityPortraitRulesResponse DescribeSecurityPortraitRules(Models\DescribeSecurityPortraitRulesRequest $req) This API is used to query user profiling rules.
 * @method Models\DescribeSecurityRuleIdResponse DescribeSecurityRuleId(Models\DescribeSecurityRuleIdRequest $req) This API is used to query a security rule.
 * @method Models\DescribeSingleL7AnalysisDataResponse DescribeSingleL7AnalysisData(Models\DescribeSingleL7AnalysisDataRequest $req) This API is used to query the list of L7 dimensional data.
 * @method Models\DescribeSpeedTestingDetailsResponse DescribeSpeedTestingDetails(Models\DescribeSpeedTestingDetailsRequest $req) This API is used to query the site’s load speed across regions.
 * @method Models\DescribeSpeedTestingMetricDataResponse DescribeSpeedTestingMetricData(Models\DescribeSpeedTestingMetricDataRequest $req) This API is used to query the result of a site test.
 * @method Models\DescribeSpeedTestingQuotaResponse DescribeSpeedTestingQuota(Models\DescribeSpeedTestingQuotaRequest $req) This API is used to query the quota limit on site tests.
 * @method Models\DescribeTimingL4DataResponse DescribeTimingL4Data(Models\DescribeTimingL4DataRequest $req) This API is used to query the list of L4 traffic data recorded over time.
 * @method Models\DescribeTimingL7AnalysisDataResponse DescribeTimingL7AnalysisData(Models\DescribeTimingL7AnalysisDataRequest $req) This API is used to query the L7 data recorded over time.
 * @method Models\DescribeTimingL7CacheDataResponse DescribeTimingL7CacheData(Models\DescribeTimingL7CacheDataRequest $req) This API is used to query the time-series L7 cached data.
 * @method Models\DescribeTopL7AnalysisDataResponse DescribeTopL7AnalysisData(Models\DescribeTopL7AnalysisDataRequest $req) This API is used to query the top-ranked L7 traffic data.
 * @method Models\DescribeTopL7CacheDataResponse DescribeTopL7CacheData(Models\DescribeTopL7CacheDataRequest $req) This API is used to query the cached L7 top-ranked data.
 * @method Models\DescribeWebManagedRulesDataResponse DescribeWebManagedRulesData(Models\DescribeWebManagedRulesDataRequest $req) This API is used to query the WAF attack data recorded over time.
 * @method Models\DescribeWebManagedRulesHitRuleDetailResponse DescribeWebManagedRulesHitRuleDetail(Models\DescribeWebManagedRulesHitRuleDetailRequest $req) This API is used to query the details of a hit WAF security rule.
 * @method Models\DescribeWebManagedRulesLogResponse DescribeWebManagedRulesLog(Models\DescribeWebManagedRulesLogRequest $req) This API is used to query web attack logs.
 * @method Models\DescribeWebProtectionAttackEventsResponse DescribeWebProtectionAttackEvents(Models\DescribeWebProtectionAttackEventsRequest $req) This API is used to query the list of CC attack events.
 * @method Models\DescribeWebProtectionClientIpListResponse DescribeWebProtectionClientIpList(Models\DescribeWebProtectionClientIpListRequest $req) This API is used to query the information of CC attackers.
 * @method Models\DescribeWebProtectionDataResponse DescribeWebProtectionData(Models\DescribeWebProtectionDataRequest $req) This API is used to query the CC protection data recorded over time.
 * @method Models\DescribeWebProtectionHitRuleDetailResponse DescribeWebProtectionHitRuleDetail(Models\DescribeWebProtectionHitRuleDetailRequest $req) This API is used to query the details of a hit CC protection rule.
 * @method Models\DescribeWebProtectionTopDataResponse DescribeWebProtectionTopData(Models\DescribeWebProtectionTopDataRequest $req) This API is used to query the top-ranked CC protection data.
 * @method Models\DescribeZoneDDoSPolicyResponse DescribeZoneDDoSPolicy(Models\DescribeZoneDDoSPolicyRequest $req) This API is used to query all DDoS mitigation configuration.
 * @method Models\DescribeZoneSettingResponse DescribeZoneSetting(Models\DescribeZoneSettingRequest $req) This API is used to query the site configuration.
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) This API is used to query the list of user sites.
 * @method Models\DownloadL4LogsResponse DownloadL4Logs(Models\DownloadL4LogsRequest $req) This API is used to download L4 logs.
 * @method Models\DownloadL7LogsResponse DownloadL7Logs(Models\DownloadL7LogsRequest $req) This API is used to download L7 logs.
 * @method Models\IdentifyZoneResponse IdentifyZone(Models\IdentifyZoneRequest $req) This API is used to verify ownership of the site.
 * @method Models\ModifyAlarmConfigResponse ModifyAlarmConfig(Models\ModifyAlarmConfigRequest $req) This API is used to modify alarm configuration.
 * @method Models\ModifyAlarmDefaultThresholdResponse ModifyAlarmDefaultThreshold(Models\ModifyAlarmDefaultThresholdRequest $req) This API is used to modify the default alarm threshold.
 * @method Models\ModifyApplicationProxyResponse ModifyApplicationProxy(Models\ModifyApplicationProxyRequest $req) This API is used to modify an application proxy.
 * @method Models\ModifyApplicationProxyRuleResponse ModifyApplicationProxyRule(Models\ModifyApplicationProxyRuleRequest $req) This API is used to modify an application proxy rule.
 * @method Models\ModifyApplicationProxyRuleStatusResponse ModifyApplicationProxyRuleStatus(Models\ModifyApplicationProxyRuleStatusRequest $req) This API is used to modify the status of an application proxy rule.
 * @method Models\ModifyApplicationProxyStatusResponse ModifyApplicationProxyStatus(Models\ModifyApplicationProxyStatusRequest $req) This API is used to modify the status of an application proxy.
 * @method Models\ModifyDDoSPolicyResponse ModifyDDoSPolicy(Models\ModifyDDoSPolicyRequest $req) This API is used to modify DDoS mitigation configuration.
 * @method Models\ModifyDDoSPolicyHostResponse ModifyDDoSPolicyHost(Models\ModifyDDoSPolicyHostRequest $req) This API is used to enable high availability for domain names.
 * @method Models\ModifyDefaultCertificateResponse ModifyDefaultCertificate(Models\ModifyDefaultCertificateRequest $req) This example shows you how to modify the status of a default certificate.
 * @method Models\ModifyDnsRecordResponse ModifyDnsRecord(Models\ModifyDnsRecordRequest $req) This API is used to modify DNS records.
 * @method Models\ModifyDnssecResponse ModifyDnssec(Models\ModifyDnssecRequest $req) This API is used to modify the DNSSEC status of a site.
 * @method Models\ModifyHostsCertificateResponse ModifyHostsCertificate(Models\ModifyHostsCertificateRequest $req) This API is used to modify the certificate of a domain name.
 * @method Models\ModifyLoadBalancingResponse ModifyLoadBalancing(Models\ModifyLoadBalancingRequest $req) This API is used to modify a CLB instance.
 * @method Models\ModifyLoadBalancingStatusResponse ModifyLoadBalancingStatus(Models\ModifyLoadBalancingStatusRequest $req) This API is used to modify the status of a CLB instance.
 * @method Models\ModifyLogTopicTaskResponse ModifyLogTopicTask(Models\ModifyLogTopicTaskRequest $req) This API is used to modify a shipping task.
 * @method Models\ModifyOriginGroupResponse ModifyOriginGroup(Models\ModifyOriginGroupRequest $req) This API is used to modify an origin group.
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) This API is used to modify a rule in the rule engine.
 * @method Models\ModifyRulePriorityResponse ModifyRulePriority(Models\ModifyRulePriorityRequest $req) This API is used to modify the priority of a rule in the rule engine.
 * @method Models\ModifySecurityPolicyResponse ModifySecurityPolicy(Models\ModifySecurityPolicyRequest $req) This API is used to modify the web and bot security configurations.
 * @method Models\ModifySecurityWafGroupPolicyResponse ModifySecurityWafGroupPolicy(Models\ModifySecurityWafGroupPolicyRequest $req) This API is used to modify a managed rule.
 * @method Models\ModifyZoneResponse ModifyZone(Models\ModifyZoneRequest $req) This API is used to modify a site.
 * @method Models\ModifyZoneCnameSpeedUpResponse ModifyZoneCnameSpeedUp(Models\ModifyZoneCnameSpeedUpRequest $req) This API is used to modify the CNAME acceleration status.
 * @method Models\ModifyZoneSettingResponse ModifyZoneSetting(Models\ModifyZoneSettingRequest $req) This API is used to modify the site configuration.
 * @method Models\ModifyZoneStatusResponse ModifyZoneStatus(Models\ModifyZoneStatusRequest $req) This API is used to change the site status.
 * @method Models\ReclaimZoneResponse ReclaimZone(Models\ReclaimZoneRequest $req) This API is used to reclaim a site from other users after its ownership is verified.
 * @method Models\SwitchLogTopicTaskResponse SwitchLogTopicTask(Models\SwitchLogTopicTaskRequest $req) This API is used to enable or disable a shipping task.
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
