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
 * @method Models\BindSecurityTemplateToEntityResponse BindSecurityTemplateToEntity(Models\BindSecurityTemplateToEntityRequest $req) This API is used to bind/unbind a domain name to/from a specific policy template. 
 * @method Models\BindSharedCNAMEResponse BindSharedCNAME(Models\BindSharedCNAMERequest $req) This API is used to bind/unbind a domain name to/from a shared CNAME. It is now only available to beta users.
 * @method Models\BindZoneToPlanResponse BindZoneToPlan(Models\BindZoneToPlanRequest $req) This API is used to bind a site to a plan.
 * @method Models\CheckCnameStatusResponse CheckCnameStatus(Models\CheckCnameStatusRequest $req) This API is used to query the CNAME status of a domain name.
 * @method Models\CreateAccelerationDomainResponse CreateAccelerationDomain(Models\CreateAccelerationDomainRequest $req) This API is used to create an acceleration domain name. 

For sites connected via the CNAME, if you have not verified the ownership of the domain name, the ownership verification information of the domain name is returned. To verify your ownership of the domain name, see [Ownership Verification](https://intl.cloud.tencent.com/document/product/1552/70789?from_cn_redirect=1).
 * @method Models\CreateAliasDomainResponse CreateAliasDomain(Models\CreateAliasDomainRequest $req) This API is used to create an alias domain name.
 * @method Models\CreateApplicationProxyResponse CreateApplicationProxy(Models\CreateApplicationProxyRequest $req) This API is on an earlier version. If you want to call it, please switch to the latest version [CreateL4Proxy] (https://intl.cloud.tencent.com/document/product/1552/103417?from_cn_redirect=1).
 * @method Models\CreateApplicationProxyRuleResponse CreateApplicationProxyRule(Models\CreateApplicationProxyRuleRequest $req) This API is on an earlier version. If you want to call it, please switch to the latest version. For details, see [CreateL4ProxyRules] (https://intl.cloud.tencent.com/document/product/1552/103416?from_cn_redirect=1).
 * @method Models\CreateCLSIndexResponse CreateCLSIndex(Models\CreateCLSIndexRequest $req) This API is used to create key-value indexes for relevant delivered log fields in the corresponding Tencent Cloud CLS log topic for a specified real-time log delivery task (task-id). If such indexes have been created in CLS, this API will append indexes through merging.
 * @method Models\CreateConfigGroupVersionResponse CreateConfigGroupVersion(Models\CreateConfigGroupVersionRequest $req) This API is used to create a new version for the specified configuration group in version management mode. The version management feature is currently undergoing beta testing and is accessible only to users on the whitelist.
 * @method Models\CreateL4ProxyResponse CreateL4Proxy(Models\CreateL4ProxyRequest $req) This API is used to create Layer 4 proxy instances.
 * @method Models\CreateL4ProxyRulesResponse CreateL4ProxyRules(Models\CreateL4ProxyRulesRequest $req) This API is used to create Layer 4 proxy instance rules, supporting both individual and batch creation.
 * @method Models\CreateOriginGroupResponse CreateOriginGroup(Models\CreateOriginGroupRequest $req) This API is used to create an origin group for easy management. The created origin server group can be used for **adding acceleration domain names** and **layer-4 proxy configuration**.
 * @method Models\CreatePlanForZoneResponse CreatePlanForZone(Models\CreatePlanForZoneRequest $req) This API is used to purchase a plan for a new site.
 * @method Models\CreatePrefetchTaskResponse CreatePrefetchTask(Models\CreatePrefetchTaskRequest $req) This API is used to create a pre-warming task.
 * @method Models\CreatePurgeTaskResponse CreatePurgeTask(Models\CreatePurgeTaskRequest $req) When there are resources updated on the origin with the TTL remaining valid, users cannot access the latest resources. In this case, you can purge the cache using this API. There are two methods: <li>Delete: This method deletes the node cache without verification and retrieves the latest resources from the origin when receiving a request.</li><li>Invalidate: This method marks the node cache as invalid and sends a request with the If-None-Match and If-Modified-Since headers to the origin. If the origin responses with 200, the latest resources are retrieved to be cached on the node. If a 304 response is returned, the latest resources are not cached on the node.

</li>For more details, see [Cache Purge](https://intl.cloud.tencent.com/document/product/1552/70759?from_cn_redirect=1). </li>
 * @method Models\CreateRealtimeLogDeliveryTaskResponse CreateRealtimeLogDeliveryTask(Models\CreateRealtimeLogDeliveryTaskRequest $req) This API is used to create real-time log delivery tasks. This API has the following restrictions:
Under the same combination of data delivery type (LogType) and data delivery area (Area), an entity (Layer 7 domain or Layer 4 proxy instance) can be added to only one real-time log delivery task. It is recommended to first query the real-time log delivery task list by entity through the [DescribeRealtimeLogDeliveryTasks](https://tcloud4api.woa.com/document/product/1657/343539?!preview&!document=1) API to check whether an entity has been added to a real-time log delivery task.
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) This API is used to create a rule in the rule engine.
 * @method Models\CreateSecurityIPGroupResponse CreateSecurityIPGroup(Models\CreateSecurityIPGroupRequest $req) This API is used to create a security IP group.
 * @method Models\CreateSharedCNAMEResponse CreateSharedCNAME(Models\CreateSharedCNAMERequest $req) This API is used to create a shared CNAME. It is now only available to beta users.
 * @method Models\CreateZoneResponse CreateZone(Models\CreateZoneRequest $req) This API is used to create a site. After you create the site, you can connect it to EdgeOne via the CNAME or NS (see [Quick Start](https://intl.cloud.tencent.com/document/product/1552/87601?from_cn_redirect=1)), or connect it without a domain name (see [Quick Access to L4 Proxy Service](https://intl.cloud.tencent.com/document/product/1552/96051?from_cn_redirect=1)).

If there are already EdgeOne plans under the current account, it is recommended to pass in the `PlanId` to bind the site with the plan directly. If `PlanId` is not passed in, the created site is not activated. You need to call [BindZoneToPlan](https://intl.cloud.tencent.com/document/product/1552/83042?from_cn_redirect=1) to bind the site with a plan. To purchase a plan, please go to the EdgeOne console.
 * @method Models\DeleteAccelerationDomainsResponse DeleteAccelerationDomains(Models\DeleteAccelerationDomainsRequest $req) This API is used to batch remove accelerated domain names.
 * @method Models\DeleteAliasDomainResponse DeleteAliasDomain(Models\DeleteAliasDomainRequest $req) This API is used to delete an alias domain name.
 * @method Models\DeleteApplicationProxyResponse DeleteApplicationProxy(Models\DeleteApplicationProxyRequest $req) This API is on an earlier version. If you want to call it, please switch to the latest version. For details, see [DeleteL4Proxy] (https://intl.cloud.tencent.com/document/product/1552/103415?from_cn_redirect=1).
 * @method Models\DeleteApplicationProxyRuleResponse DeleteApplicationProxyRule(Models\DeleteApplicationProxyRuleRequest $req) This API is on an earlier version. If you want to call it, please switch to the latest version. For details, see [DeleteL4ProxyRules] (https://intl.cloud.tencent.com/document/product/1552/103414?from_cn_redirect=1).
 * @method Models\DeleteL4ProxyResponse DeleteL4Proxy(Models\DeleteL4ProxyRequest $req) This API is used to delete a Layer 4 proxy instance.
 * @method Models\DeleteL4ProxyRulesResponse DeleteL4ProxyRules(Models\DeleteL4ProxyRulesRequest $req) This API is used to delete Layer 4 proxy forwarding rules, supporting both individual and batch operation.
 * @method Models\DeleteOriginGroupResponse DeleteOriginGroup(Models\DeleteOriginGroupRequest $req) This API is used to delete an origin group. Note that an origin group can not be deleted if it is referenced by services (e.g. L4 Proxy, domain name service, load balancing, rule engines). 
 * @method Models\DeleteRealtimeLogDeliveryTaskResponse DeleteRealtimeLogDeliveryTask(Models\DeleteRealtimeLogDeliveryTaskRequest $req) This API is used to delete a real-time log delivery task.
 * @method Models\DeleteRulesResponse DeleteRules(Models\DeleteRulesRequest $req) This API is used to batch delete rules from the rule engine.
 * @method Models\DeleteSecurityIPGroupResponse DeleteSecurityIPGroup(Models\DeleteSecurityIPGroupRequest $req) This API is used to delete a specified security IP group. Note that the security IP group cannot be deleted if it is referenced in a rule.
 * @method Models\DeleteSharedCNAMEResponse DeleteSharedCNAME(Models\DeleteSharedCNAMERequest $req) This API is used to delete a shared CNAME. It is now only available to beta users.
 * @method Models\DeleteZoneResponse DeleteZone(Models\DeleteZoneRequest $req) This API is used to delete a site.
 * @method Models\DeployConfigGroupVersionResponse DeployConfigGroupVersion(Models\DeployConfigGroupVersionRequest $req) This API is used to release versions in version management mode. Users can deploy the version to either the testing environment or the production environment by specifying the EnvId parameter. The version management feature is currently undergoing beta testing and is accessible only to users on the whitelist.
 * @method Models\DescribeAccelerationDomainsResponse DescribeAccelerationDomains(Models\DescribeAccelerationDomainsRequest $req) This API is used to query domain name information of a site, including the acceleration domain name, origin, and domain name status. You can query the information of all domain names, or specific domain names by specifying filters information.
 * @method Models\DescribeAliasDomainsResponse DescribeAliasDomains(Models\DescribeAliasDomainsRequest $req) This API is used to query the information of alias domain names.
 * @method Models\DescribeApplicationProxiesResponse DescribeApplicationProxies(Models\DescribeApplicationProxiesRequest $req) This API is on an earlier version. If you want to call it, please switch to the latest version. In the latest version, this API has been split into two APIs: one for querying the Layer 4 proxy instance list and the other for querying Layer 4 forwarding rules. For details, see [DescribeL4Proxy] (https://intl.cloud.tencent.com/document/product/1552/103413?from_cn_redirect=1) and [DescribeL4ProxyRules] (https://intl.cloud.tencent.com/document/product/1552/103412?from_cn_redirect=1).
 * @method Models\DescribeAvailablePlansResponse DescribeAvailablePlans(Models\DescribeAvailablePlansRequest $req) This API is used to query plan options available for purchase.
 * @method Models\DescribeBillingDataResponse DescribeBillingData(Models\DescribeBillingDataRequest $req) This API is used to query billing data.
 * @method Models\DescribeConfigGroupVersionDetailResponse DescribeConfigGroupVersionDetail(Models\DescribeConfigGroupVersionDetailRequest $req) This API is used to obtain detailed information about a version in version management mode. The response includes the version ID, description, status, creation time, configuration group information, and the content of the version configuration file. The version management feature is currently undergoing beta testing and is accessible only to users on the whitelist.
 * @method Models\DescribeConfigGroupVersionsResponse DescribeConfigGroupVersions(Models\DescribeConfigGroupVersionsRequest $req) This API is used to query the version list for the specified configuration group in version management mode. The version management feature is currently undergoing beta testing and is accessible only to users on the whitelist.
 * @method Models\DescribeContentQuotaResponse DescribeContentQuota(Models\DescribeContentQuotaRequest $req) This API is used to query content management quotas.
 * @method Models\DescribeDDoSAttackDataResponse DescribeDDoSAttackData(Models\DescribeDDoSAttackDataRequest $req) This API is used to query the time-series data of DDoS attacks.
 * @method Models\DescribeDDoSAttackEventResponse DescribeDDoSAttackEvent(Models\DescribeDDoSAttackEventRequest $req) This API is used to query DDoS attack events.
 * @method Models\DescribeDDoSAttackTopDataResponse DescribeDDoSAttackTopData(Models\DescribeDDoSAttackTopDataRequest $req) This API is used to query the top-ranked DDoS attack data.
 * @method Models\DescribeDefaultCertificatesResponse DescribeDefaultCertificates(Models\DescribeDefaultCertificatesRequest $req) This API is used to query a list of default certificates.
 * @method Models\DescribeDeployHistoryResponse DescribeDeployHistory(Models\DescribeDeployHistoryRequest $req) This API is used to query the release history of versions in the production or test environment in version management mode. The version management feature is currently undergoing beta testing and is accessible only to users on the whitelist.
 * @method Models\DescribeEnvironmentsResponse DescribeEnvironments(Models\DescribeEnvironmentsRequest $req) This API is used to query environment information in version management mode. The response includes the environment ID, type, and current effective version. The version management feature is currently undergoing beta testing and is accessible only to users on the whitelist.
 * @method Models\DescribeHostsSettingResponse DescribeHostsSetting(Models\DescribeHostsSettingRequest $req) This API is used to query detailed domain name configuration.
 * @method Models\DescribeIPRegionResponse DescribeIPRegion(Models\DescribeIPRegionRequest $req) This API is used to check if the IP is an EdgeOne IP.
 * @method Models\DescribeIdentificationsResponse DescribeIdentifications(Models\DescribeIdentificationsRequest $req) This API is used to query the verification information of a site.
 * @method Models\DescribeL4ProxyResponse DescribeL4Proxy(Models\DescribeL4ProxyRequest $req) This API is used to query a Layer 4 proxy instance list.
 * @method Models\DescribeL4ProxyRulesResponse DescribeL4ProxyRules(Models\DescribeL4ProxyRulesRequest $req) This API is used to query the forwarding rule list under a Layer 4 proxy instance.
 * @method Models\DescribeOriginGroupResponse DescribeOriginGroup(Models\DescribeOriginGroupRequest $req) This API is used to obtain a list of origin groups.
 * @method Models\DescribeOriginProtectionResponse DescribeOriginProtection(Models\DescribeOriginProtectionRequest $req) This API is used to query the origin protection configuration.
 * @method Models\DescribeOverviewL7DataResponse DescribeOverviewL7Data(Models\DescribeOverviewL7DataRequest $req) This API is used to query the time sequence traffic data of the monitoring category in L7. This API is to be discarded. Please use the API <a href="https://intl.cloud.tencent.com/document/product/1552/80648?from_cn_redirect=1">DescribeTimingL7AnalysisData</a>.
 * @method Models\DescribePrefetchTasksResponse DescribePrefetchTasks(Models\DescribePrefetchTasksRequest $req) DescribePrefetchTasks is used to query the submission history and execution progress of preheating tasks. This interface can be used to query the tasks submitted by the CreatePrefetchTasks interface.
 * @method Models\DescribePurgeTasksResponse DescribePurgeTasks(Models\DescribePurgeTasksRequest $req) DescribePurgeTasks is used to query the submitted URL refreshing and directory refreshing records and execution progress. This interface can be used to query the tasks submitted by the CreatePurgeTasks API.
 * @method Models\DescribeRealtimeLogDeliveryTasksResponse DescribeRealtimeLogDeliveryTasks(Models\DescribeRealtimeLogDeliveryTasksRequest $req) This API is used to query the real-time log delivery task list.
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) This API is used to query the rules in the rule engine.
 * @method Models\DescribeRulesSettingResponse DescribeRulesSetting(Models\DescribeRulesSettingRequest $req) This API is used to return the list of the settings of the rule engine that can be used for request match and their detailed recommended configuration information.
 * @method Models\DescribeSecurityTemplateBindingsResponse DescribeSecurityTemplateBindings(Models\DescribeSecurityTemplateBindingsRequest $req) This API is used to query bindings of a policy template.
 * @method Models\DescribeTimingL4DataResponse DescribeTimingL4Data(Models\DescribeTimingL4DataRequest $req) This API is used to query the list of L4 traffic data recorded over time.
 * @method Models\DescribeTimingL7AnalysisDataResponse DescribeTimingL7AnalysisData(Models\DescribeTimingL7AnalysisDataRequest $req) This API is used to query the L7 data recorded over time.
 * @method Models\DescribeTimingL7CacheDataResponse DescribeTimingL7CacheData(Models\DescribeTimingL7CacheDataRequest $req) This API is used to query the time-series L7 cached data.
 * @method Models\DescribeTopL7AnalysisDataResponse DescribeTopL7AnalysisData(Models\DescribeTopL7AnalysisDataRequest $req) This API is used to query the top-ranked L7 traffic data.
 * @method Models\DescribeTopL7CacheDataResponse DescribeTopL7CacheData(Models\DescribeTopL7CacheDataRequest $req) This API is used to query the cached L7 top-ranked data.
 * @method Models\DescribeZoneSettingResponse DescribeZoneSetting(Models\DescribeZoneSettingRequest $req) This API is used to query the site configuration.
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) This API is used to query the information of sites that you have access to. You can filter sites based on different query criteria.
 * @method Models\DownloadL4LogsResponse DownloadL4Logs(Models\DownloadL4LogsRequest $req) This API is used to download L4 logs.
 * @method Models\DownloadL7LogsResponse DownloadL7Logs(Models\DownloadL7LogsRequest $req) This API is used to download L7 logs.
 * @method Models\IdentifyZoneResponse IdentifyZone(Models\IdentifyZoneRequest $req) This API is used to verify ownership of the site.
 * @method Models\ModifyAccelerationDomainResponse ModifyAccelerationDomain(Models\ModifyAccelerationDomainRequest $req) This API is used to modify an accelerated domain name.
 * @method Models\ModifyAccelerationDomainStatusesResponse ModifyAccelerationDomainStatuses(Models\ModifyAccelerationDomainStatusesRequest $req) This API is used to batch modify the status of accelerated domains.
 * @method Models\ModifyAliasDomainResponse ModifyAliasDomain(Models\ModifyAliasDomainRequest $req) This API is used to modify an alias domain name.
 * @method Models\ModifyAliasDomainStatusResponse ModifyAliasDomainStatus(Models\ModifyAliasDomainStatusRequest $req) This API is used to modify the status of an alias domain name.
 * @method Models\ModifyApplicationProxyResponse ModifyApplicationProxy(Models\ModifyApplicationProxyRequest $req) This API is on an earlier version. If you want to call it, please switch to the latest version. For details, see [ModifyL4Proxy
] (https://intl.cloud.tencent.com/document/product/1552/103411?from_cn_redirect=1).
 * @method Models\ModifyApplicationProxyRuleResponse ModifyApplicationProxyRule(Models\ModifyApplicationProxyRuleRequest $req) This API is on an earlier version. If you want to call it, please switch to the latest version. For details, see [ModifyL4ProxyRules] (https://intl.cloud.tencent.com/document/product/1552/103410?from_cn_redirect=1).
 * @method Models\ModifyApplicationProxyRuleStatusResponse ModifyApplicationProxyRuleStatus(Models\ModifyApplicationProxyRuleStatusRequest $req) This API is on an earlier version. If you want to call it, please switch to the latest version. For details, see [ModifyL4ProxyRulesStatus
] (https://intl.cloud.tencent.com/document/product/1552/103409?from_cn_redirect=1).
 * @method Models\ModifyApplicationProxyStatusResponse ModifyApplicationProxyStatus(Models\ModifyApplicationProxyStatusRequest $req) This API is on an earlier version. If you want to call it, please switch to the latest version. For details, see [ModifyL4ProxyStatus] (https://intl.cloud.tencent.com/document/product/1552/103408?from_cn_redirect=1).
 * @method Models\ModifyHostsCertificateResponse ModifyHostsCertificate(Models\ModifyHostsCertificateRequest $req) This API is used to configure the certificate of a site. You can use your own certificate or [apply for a free certificate](https://intl.cloud.tencent.com/document/product/1552/90437?from_cn_redirect=1).
To use an external certificate, upload the certificate to [SSL Certificates Console](https://console.cloud.tencent.com/certoview) first, and then input the certificate ID in this API. For details, see [Deploying Own Certificates to EdgeOne Domains](https://intl.cloud.tencent.com/document/product/1552/88874?from_cn_redirect=1).
 
 * @method Models\ModifyL4ProxyResponse ModifyL4Proxy(Models\ModifyL4ProxyRequest $req) This API is used to modify the configuration of a Layer 4 proxy instance.
 * @method Models\ModifyL4ProxyRulesResponse ModifyL4ProxyRules(Models\ModifyL4ProxyRulesRequest $req) This API is used to modify Layer 4 proxy forwarding rules, supporting both individual and batch modification.
 * @method Models\ModifyL4ProxyRulesStatusResponse ModifyL4ProxyRulesStatus(Models\ModifyL4ProxyRulesStatusRequest $req) This API is used to start or stop Layer 4 proxy forwarding rules, supporting both individual and batch operation.
 * @method Models\ModifyL4ProxyStatusResponse ModifyL4ProxyStatus(Models\ModifyL4ProxyStatusRequest $req) This API is used to enable or disable a Layer 4 proxy instance.
 * @method Models\ModifyOriginGroupResponse ModifyOriginGroup(Models\ModifyOriginGroupRequest $req) This API is used to modify the configuration of an origin group. The original configuration will be overwritten. 
 * @method Models\ModifyRealtimeLogDeliveryTaskResponse ModifyRealtimeLogDeliveryTask(Models\ModifyRealtimeLogDeliveryTaskRequest $req) This API is used to modify the real-time log delivery task configuration. This API has the following restrictions:<li>Does not support modifying the destination type of the real-time log delivery task (TaskType);</li><li>Does not support modifying the data delivery type (LogType)</li><li>Does not support modifying the data delivery area (Area)</li><li>Does not support modifying the detailed destination configuration, such as log set and log topic, when the destination of the original real-time log delivery task is Tencent Cloud CLS.</li>
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) This API is used to modify a rule in the rule engine.
 * @method Models\ModifySecurityIPGroupResponse ModifySecurityIPGroup(Models\ModifySecurityIPGroupRequest $req) This API is used to modify a security IP group.
 * @method Models\ModifySecurityPolicyResponse ModifySecurityPolicy(Models\ModifySecurityPolicyRequest $req) This API is used to modify the web and bot security configurations.
 * @method Models\ModifyZoneResponse ModifyZone(Models\ModifyZoneRequest $req) This API is used to modify a site.
 * @method Models\ModifyZoneSettingResponse ModifyZoneSetting(Models\ModifyZoneSettingRequest $req) This API is used to modify the site configuration.
 * @method Models\ModifyZoneStatusResponse ModifyZoneStatus(Models\ModifyZoneStatusRequest $req) This API is used to change the site status.
 * @method Models\VerifyOwnershipResponse VerifyOwnership(Models\VerifyOwnershipRequest $req) This API is used to verify your ownership of a site or domain name. It's required in the CNAME access mode. After a site is verified, you don't need to verify the ownership again for domain names added to it in the future. For details, see [Ownership Verification](https://intl.cloud.tencent.com/document/product/1552/70789?from_cn_redirect=1).

For sites connected via the NS, you can query whether the NS is successfully switched through this API. For details, see [Modifying DNS Servers](https://intl.cloud.tencent.com/document/product/1552/90452?from_cn_redirect=1).
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
