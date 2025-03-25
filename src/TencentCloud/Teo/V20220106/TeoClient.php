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

namespace TencentCloud\Teo\V20220106;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Teo\V20220106\Models as Models;

/**
 * @method Models\CheckCertificateResponse CheckCertificate(Models\CheckCertificateRequest $req) This API is used to verify a certificate.
 * @method Models\CreateApplicationProxyResponse CreateApplicationProxy(Models\CreateApplicationProxyRequest $req) This API is used to create an application proxy.
 * @method Models\CreateApplicationProxyRuleResponse CreateApplicationProxyRule(Models\CreateApplicationProxyRuleRequest $req) This API is used to create an application proxy rule.
 * @method Models\CreateApplicationProxyRulesResponse CreateApplicationProxyRules(Models\CreateApplicationProxyRulesRequest $req) This API is used to batch create application proxy rules.
 * @method Models\CreateCustomErrorPageResponse CreateCustomErrorPage(Models\CreateCustomErrorPageRequest $req) This API is used to create a custom error page.
 * @method Models\CreateDnsRecordResponse CreateDnsRecord(Models\CreateDnsRecordRequest $req) This API is used to create a DNS record.
 * @method Models\CreateLoadBalancingResponse CreateLoadBalancing(Models\CreateLoadBalancingRequest $req) This API is used to create a CLB instance.
 * @method Models\CreateOriginGroupResponse CreateOriginGroup(Models\CreateOriginGroupRequest $req) This API is used to create an origin group.
 * @method Models\CreatePrefetchTaskResponse CreatePrefetchTask(Models\CreatePrefetchTaskRequest $req) This API is used to create a pre-warming task.
 * @method Models\CreatePurgeTaskResponse CreatePurgeTask(Models\CreatePurgeTaskRequest $req) This API is used to create a cache purging task.
 * @method Models\CreateZoneResponse CreateZone(Models\CreateZoneRequest $req) This API is used to access a new site.
 * @method Models\DeleteApplicationProxyResponse DeleteApplicationProxy(Models\DeleteApplicationProxyRequest $req) This API is used to delete an application proxy.
 * @method Models\DeleteApplicationProxyRuleResponse DeleteApplicationProxyRule(Models\DeleteApplicationProxyRuleRequest $req) This API is used to delete an application proxy rule.
 * @method Models\DeleteDnsRecordsResponse DeleteDnsRecords(Models\DeleteDnsRecordsRequest $req) This API is used to batch delete DNS records.
 * @method Models\DeleteLoadBalancingResponse DeleteLoadBalancing(Models\DeleteLoadBalancingRequest $req) This API is used to delete a CLB instance.
 * @method Models\DeleteOriginGroupResponse DeleteOriginGroup(Models\DeleteOriginGroupRequest $req) This API is used to delete an origin group.
 * @method Models\DeleteZoneResponse DeleteZone(Models\DeleteZoneRequest $req) This API is used to delete a site.
 * @method Models\DescribeApplicationProxyResponse DescribeApplicationProxy(Models\DescribeApplicationProxyRequest $req) This API is used to obtain a list of application proxies.
 * @method Models\DescribeApplicationProxyDetailResponse DescribeApplicationProxyDetail(Models\DescribeApplicationProxyDetailRequest $req) This API is used to obtain the details of an application proxy.
 * @method Models\DescribeBotLogResponse DescribeBotLog(Models\DescribeBotLogRequest $req) This API is used to query bot attack logs.
 * @method Models\DescribeBotManagedRulesResponse DescribeBotManagedRules(Models\DescribeBotManagedRulesRequest $req) This API is used to query bot managed rules.
 * @method Models\DescribeCnameStatusResponse DescribeCnameStatus(Models\DescribeCnameStatusRequest $req) This API is used to query the CNAME status of a domain name.
 * @method Models\DescribeDDoSPolicyResponse DescribeDDoSPolicy(Models\DescribeDDoSPolicyRequest $req) This API is used to query the DDoS protection configuration.
 * @method Models\DescribeDDosAttackDataResponse DescribeDDosAttackData(Models\DescribeDDosAttackDataRequest $req) This API is used to query the DDoS attack data.
 * @method Models\DescribeDDosAttackEventResponse DescribeDDosAttackEvent(Models\DescribeDDosAttackEventRequest $req) This API is used to query DDoS attack events.
 * @method Models\DescribeDDosAttackEventDetailResponse DescribeDDosAttackEventDetail(Models\DescribeDDosAttackEventDetailRequest $req) This API is used to query DDoS attack event details.
 * @method Models\DescribeDDosAttackSourceEventResponse DescribeDDosAttackSourceEvent(Models\DescribeDDosAttackSourceEventRequest $req) This API is used to query DDoS attack sources.
 * @method Models\DescribeDDosAttackTopDataResponse DescribeDDosAttackTopData(Models\DescribeDDosAttackTopDataRequest $req) This API is used to query the top data of DDoS attacks.
 * @method Models\DescribeDDosMajorAttackEventResponse DescribeDDosMajorAttackEvent(Models\DescribeDDosMajorAttackEventRequest $req) This API is used to query the major DDoS attack event.
 * @method Models\DescribeDefaultCertificatesResponse DescribeDefaultCertificates(Models\DescribeDefaultCertificatesRequest $req) This API is used to query a list of default certificates.
 * @method Models\DescribeDnsDataResponse DescribeDnsData(Models\DescribeDnsDataRequest $req) This API is used to obtain collected DNS requests.
 * @method Models\DescribeDnsRecordsResponse DescribeDnsRecords(Models\DescribeDnsRecordsRequest $req) This API is used to query DNS records. Paging, sorting and filtering are supported.
 * @method Models\DescribeDnssecResponse DescribeDnssec(Models\DescribeDnssecRequest $req) This API is used to query DNSSEC information.
 * @method Models\DescribeHostsCertificateResponse DescribeHostsCertificate(Models\DescribeHostsCertificateRequest $req) This API is used to query certificates of domain names. Paging, sorting and filtering are supported.
 * @method Models\DescribeHostsSettingResponse DescribeHostsSetting(Models\DescribeHostsSettingRequest $req) This API is used to query detailed domain name configuration.
 * @method Models\DescribeIdentificationResponse DescribeIdentification(Models\DescribeIdentificationRequest $req) This API is used to query verification results.
 * @method Models\DescribeLoadBalancingResponse DescribeLoadBalancing(Models\DescribeLoadBalancingRequest $req) This API is used to obtain a list of CLB instances.
 * @method Models\DescribeLoadBalancingDetailResponse DescribeLoadBalancingDetail(Models\DescribeLoadBalancingDetailRequest $req) This API is used to query the details of a CLB instance.
 * @method Models\DescribeOriginGroupResponse DescribeOriginGroup(Models\DescribeOriginGroupRequest $req) This API is used to get the list of origin groups.
 * @method Models\DescribeOriginGroupDetailResponse DescribeOriginGroupDetail(Models\DescribeOriginGroupDetailRequest $req) This API is used to get the details of the origin group.
 * @method Models\DescribeOverviewL7DataResponse DescribeOverviewL7Data(Models\DescribeOverviewL7DataRequest $req) This API is used to query the layer-7 time series traffic data for monitoring.
 * @method Models\DescribePrefetchTasksResponse DescribePrefetchTasks(Models\DescribePrefetchTasksRequest $req) This API is used to query the pre-warming task status.
 * @method Models\DescribePurgeTasksResponse DescribePurgeTasks(Models\DescribePurgeTasksRequest $req) This API is used to query the cache purging history.
 * @method Models\DescribeSecurityPolicyResponse DescribeSecurityPolicy(Models\DescribeSecurityPolicyRequest $req) This API is used to query the security protection configuration.
 * @method Models\DescribeSecurityPolicyListResponse DescribeSecurityPolicyList(Models\DescribeSecurityPolicyListRequest $req) This API is used to query all protected subdomain names.
 * @method Models\DescribeSecurityPolicyManagedRulesResponse DescribeSecurityPolicyManagedRules(Models\DescribeSecurityPolicyManagedRulesRequest $req) This API is used to query managed rules.
 * @method Models\DescribeSecurityPolicyManagedRulesIdResponse DescribeSecurityPolicyManagedRulesId(Models\DescribeSecurityPolicyManagedRulesIdRequest $req) This API is used to query the details of a managed rule by rule ID.
 * @method Models\DescribeSecurityPolicyRegionsResponse DescribeSecurityPolicyRegions(Models\DescribeSecurityPolicyRegionsRequest $req) This API is used to query information of all regions.
 * @method Models\DescribeSecurityPortraitRulesResponse DescribeSecurityPortraitRules(Models\DescribeSecurityPortraitRulesRequest $req) This API is used to query user profiling rules.
 * @method Models\DescribeTimingL4DataResponse DescribeTimingL4Data(Models\DescribeTimingL4DataRequest $req) This API is used to query the layer-4 time series traffic data.
 * @method Models\DescribeTimingL7AnalysisDataResponse DescribeTimingL7AnalysisData(Models\DescribeTimingL7AnalysisDataRequest $req) This API is used to query the layer-7 time series traffic data for data analysis.
 * @method Models\DescribeTimingL7CacheDataResponse DescribeTimingL7CacheData(Models\DescribeTimingL7CacheDataRequest $req) This API is used to query time-series L7 cached data.
 * @method Models\DescribeTopL7AnalysisDataResponse DescribeTopL7AnalysisData(Models\DescribeTopL7AnalysisDataRequest $req) This API is used to query the top traffic data.
 * @method Models\DescribeTopL7CacheDataResponse DescribeTopL7CacheData(Models\DescribeTopL7CacheDataRequest $req) This API is used to query the top-ranked L7 cached data.
 * @method Models\DescribeWebManagedRulesAttackEventsResponse DescribeWebManagedRulesAttackEvents(Models\DescribeWebManagedRulesAttackEventsRequest $req) This API is used to query web hosting attack events.
 * @method Models\DescribeWebManagedRulesDataResponse DescribeWebManagedRulesData(Models\DescribeWebManagedRulesDataRequest $req) This API is used to query the web hosting rule data.
 * @method Models\DescribeWebManagedRulesLogResponse DescribeWebManagedRulesLog(Models\DescribeWebManagedRulesLogRequest $req) This API is used to query web hosting logs.
 * @method Models\DescribeWebManagedRulesTopDataResponse DescribeWebManagedRulesTopData(Models\DescribeWebManagedRulesTopDataRequest $req) This API is used to query the top data of web hosting rules.
 * @method Models\DescribeWebProtectionAttackEventsResponse DescribeWebProtectionAttackEvents(Models\DescribeWebProtectionAttackEventsRequest $req) This API is used to query web attack events.
 * @method Models\DescribeWebProtectionDataResponse DescribeWebProtectionData(Models\DescribeWebProtectionDataRequest $req) This API is used to query the web protection data.
 * @method Models\DescribeWebProtectionLogResponse DescribeWebProtectionLog(Models\DescribeWebProtectionLogRequest $req) This API is used to query web protection logs.
 * @method Models\DescribeZoneDDoSPolicyResponse DescribeZoneDDoSPolicy(Models\DescribeZoneDDoSPolicyRequest $req) This API is used to query all DDoS mitigation configuration.
 * @method Models\DescribeZoneDetailsResponse DescribeZoneDetails(Models\DescribeZoneDetailsRequest $req) This API is used to query the details of a site by site ID.
 * @method Models\DescribeZoneSettingResponse DescribeZoneSetting(Models\DescribeZoneSettingRequest $req) This API is used to query the site configuration.
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) This API is used to query the list of user sites.
 * @method Models\DownloadL7LogsResponse DownloadL7Logs(Models\DownloadL7LogsRequest $req) This API is used to query layer-7 logs.
 * @method Models\IdentifyZoneResponse IdentifyZone(Models\IdentifyZoneRequest $req) This API is used to verify ownership of the site.
 * @method Models\ImportDnsRecordsResponse ImportDnsRecords(Models\ImportDnsRecordsRequest $req) This API is used to import DNS records.
 * @method Models\ModifyApplicationProxyResponse ModifyApplicationProxy(Models\ModifyApplicationProxyRequest $req) This API is used to modify an application proxy.
 * @method Models\ModifyApplicationProxyRuleResponse ModifyApplicationProxyRule(Models\ModifyApplicationProxyRuleRequest $req) This API is used to modify an application proxy rule.
 * @method Models\ModifyApplicationProxyRuleStatusResponse ModifyApplicationProxyRuleStatus(Models\ModifyApplicationProxyRuleStatusRequest $req) This API is used to modify the status of an application proxy rule.
 * @method Models\ModifyApplicationProxyStatusResponse ModifyApplicationProxyStatus(Models\ModifyApplicationProxyStatusRequest $req) This API is used to modify the status of an application proxy.
 * @method Models\ModifyDDoSPolicyResponse ModifyDDoSPolicy(Models\ModifyDDoSPolicyRequest $req) This API is used to modify DDoS mitigation configuration.
 * @method Models\ModifyDDoSPolicyHostResponse ModifyDDoSPolicyHost(Models\ModifyDDoSPolicyHostRequest $req) This API is used to enable high availability for domain names.
 * @method Models\ModifyDefaultCertificateResponse ModifyDefaultCertificate(Models\ModifyDefaultCertificateRequest $req) This API is used to modify the status of a default certificate.
 * @method Models\ModifyDnsRecordResponse ModifyDnsRecord(Models\ModifyDnsRecordRequest $req) This API is used to modify DNS records.
 * @method Models\ModifyDnssecResponse ModifyDnssec(Models\ModifyDnssecRequest $req) This API is used to modify the DNSSEC status.
 * @method Models\ModifyHostsCertificateResponse ModifyHostsCertificate(Models\ModifyHostsCertificateRequest $req) This API is used to modify the certificate of a domain name.
 * @method Models\ModifyLoadBalancingResponse ModifyLoadBalancing(Models\ModifyLoadBalancingRequest $req) This API is used to modify a CLB instance.
 * @method Models\ModifyLoadBalancingStatusResponse ModifyLoadBalancingStatus(Models\ModifyLoadBalancingStatusRequest $req) This API is used to modify the status of a CLB instance.
 * @method Models\ModifyOriginGroupResponse ModifyOriginGroup(Models\ModifyOriginGroupRequest $req) This API is used to modify an origin group.
 * @method Models\ModifySecurityPolicyResponse ModifySecurityPolicy(Models\ModifySecurityPolicyRequest $req) This API is used to modify the web and bot security configurations.
 * @method Models\ModifyZoneResponse ModifyZone(Models\ModifyZoneRequest $req) This API is used to modify the site information.
 * @method Models\ModifyZoneCnameSpeedUpResponse ModifyZoneCnameSpeedUp(Models\ModifyZoneCnameSpeedUpRequest $req) This API is used to modify the CNAME acceleration status.
 * @method Models\ModifyZoneSettingResponse ModifyZoneSetting(Models\ModifyZoneSettingRequest $req) This API is used to modify the site configuration.
 * @method Models\ModifyZoneStatusResponse ModifyZoneStatus(Models\ModifyZoneStatusRequest $req) This API is used to change the site status.
 * @method Models\ReclaimZoneResponse ReclaimZone(Models\ReclaimZoneRequest $req) This API is used to reclaim a site from other users after its ownership is verified.
 * @method Models\ScanDnsRecordsResponse ScanDnsRecords(Models\ScanDnsRecordsRequest $req) This API is used to scan resolution records.
 */

class TeoClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "teo.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "teo";

    /**
     * @var string
     */
    protected $version = "2022-01-06";

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
        $respClass = "TencentCloud"."\\".ucfirst("teo")."\\"."V20220106\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
