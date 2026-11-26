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

namespace TencentCloud\Teo\V20220901;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Teo\V20220901\Models as Models;

/**
 * @method Models\ApplyFreeCertificateResponse ApplyFreeCertificate(Models\ApplyFreeCertificateRequest $req) When applying for a free certificate, if you need to apply through DNS delegation verification or file verification, you can call this API to initiate the certificate application and get the corresponding verification content based on the application method. The order in which to call the API is as follows:
Step 1: Call ApplyFreeCertificate to specify the verification method for the free certificate application and obtain the verification content.
Step 2: Configure the content for the corresponding domain as required for verification.
Step 3: Call CheckFreeCertificateVerification for verification. The free certificate application is completed after verification passes.
Step 4: Call ModifyHostsCertificate to configure the domain name certificate with an EdgeOne free certificate.

For the introduction to application methods, see the referenced document: Free Certificate Application Description (https://www.tencentcloud.com/document/product/1552/90437?from_cn_redirect=1) 
Description:
-Only the CNAME access mode can call this API to specify the free certificate application method. The NS/DNSPod hosting access mode uses automatic validation to apply for a free certificate, with no need to call this API.
-If you need to switch the verification method for a free certificate, you can call this API again to update it by changing the VerificationMethod field.
-A domain name can only apply for one free certificate. After calling this API, the backend will trigger the free certificate application task. You need to complete the domain name verification info configuration within 2 days, and then complete certificate authentication.
 * @method Models\BindSecurityTemplateToEntityResponse BindSecurityTemplateToEntity(Models\BindSecurityTemplateToEntityRequest $req) Operate a security policy template. This API is used to bind or rebind a domain name to a designated policy template, or unbind it from a designated policy template.
 * @method Models\BindSharedCNAMEResponse BindSharedCNAME(Models\BindSharedCNAMERequest $req) Used to bind or unbind a shared CNAME for an acceleration domain name. This feature is in beta test.
 * @method Models\BindZoneToPlanResponse BindZoneToPlan(Models\BindZoneToPlanRequest $req) Bind the selected site not bound to a package to an existing package.
 * @method Models\CheckCnameStatusResponse CheckCnameStatus(Models\CheckCnameStatusRequest $req) When the site access type is CNAME, all domain names under the site must complete CNAME record configuration as specified by the CNAME domain assigned by EdgeOne.
This API is used to obtain the CNAME domain name assigned by EdgeOne for the integrated domain name, and to validate the CNAME configuration status of the integrated domain name.
 * @method Models\CheckFreeCertificateVerificationResponse CheckFreeCertificateVerification(Models\CheckFreeCertificateVerificationRequest $req) This API is used to verify a free certificate and obtain the application result. If verification is passed, you can query the free certificate information for the corresponding domain through this API. If the application failed, this API will return the corresponding failure description.
After triggering the free certificate application API (https://www.tencentcloud.com/document/product/1552/90437?from_cn_redirect=1), you can check the free certificate application result through this API. Once the free certificate application is successful, you need to configure it through the domain certificate configuration API (https://www.tencentcloud.com/document/product/1552/80764?from_cn_redirect=1) to deploy the free certificate to the acceleration domain.
 * @method Models\ConfirmMultiPathGatewayOriginACLResponse ConfirmMultiPathGatewayOriginACL(Models\ConfirmMultiPathGatewayOriginACLRequest $req) This API is used to confirm that the latest origin-pull IP ranges have been updated to the origin server firewall when the origin-pull IP ranges of the multi-channel security acceleration gateway change.
 * @method Models\ConfirmOriginACLUpdateResponse ConfirmOriginACLUpdate(Models\ConfirmOriginACLUpdateRequest $req) This API is used to confirm that the latest origin-pull IP ranges have been updated to the origin server firewall when the origin-pull IP ranges change. After confirming the update to the latest origin-pull IP ranges, related change notifications will stop being pushed.
 * @method Models\CreateAccelerationDomainResponse CreateAccelerationDomain(Models\CreateAccelerationDomainRequest $req) After creating a site, you can create an acceleration domain name through this API. 

In CNAME mode, if site ownership verification is ongoing, this API will return domain ownership verification info. You can verify domain ownership separately. For details, see [Site/Domain Name Ownership Verification](https://www.tencentcloud.com/document/product/1552/70789?from_cn_redirect=1).
 * @method Models\CreateAliasDomainResponse CreateAliasDomain(Models\CreateAliasDomainRequest $req) This API is used to create an alias domain name.
This feature is only supported in the enterprise plan and is currently in beta test. To use it, please [contact us](https://www.tencentcloud.com/contact-us).
 * @method Models\CreateApplicationProxyResponse CreateApplicationProxy(Models\CreateApplicationProxyRequest $req) This API is on an earlier version. If you want to call it, switch to the latest version to create layer 4 proxy instances (https://www.tencentcloud.com/document/product/1552/103417?from_cn_redirect=1).
 * @method Models\CreateApplicationProxyRuleResponse CreateApplicationProxyRule(Models\CreateApplicationProxyRuleRequest $req) This API is on an earlier version. If you want to call it, switch to the latest version. For details, see [Create Layer 4 Proxy Forwarding Rule].
](https://www.tencentcloud.com/document/product/1552/103416?from_cn_redirect=1) .
 * @method Models\CreateCLSIndexResponse CreateCLSIndex(Models\CreateCLSIndexRequest $req) This API is used to create key-value indexes for delivered log fields in the corresponding Tencent Cloud CLS log topic for a specified real-time log delivery task (task-id). If indexes have been created in CLS, this API will append indexes through merging.
 * @method Models\CreateConfigGroupVersionResponse CreateConfigGroupVersion(Models\CreateConfigGroupVersionRequest $req) In version management mode, this API is used to create a new version of a specified configuration group.
 * @method Models\CreateContentIdentifierResponse CreateContentIdentifier(Models\CreateContentIdentifierRequest $req) This API is used to create a content identifier. You can set the description, tag, and other information. At the same time, you need to bind an enterprise package for billing data statistics. A content identifier can only be bound to one billing package, while a billing package can bind multiple content identifiers. This functionality is only available to allowlisted users.
 * @method Models\CreateCustomGroupResponse CreateCustomGroup(Models\CreateCustomGroupRequest $req) This API is used to create a custom group. A custom group is used to centrally manage a set of reusable matching entries. For example, you can save multiple JA3/JA4 TLS fingerprints as a TLS fingerprint group and directly reference the group in security rules, avoiding the need to maintain the same fingerprint list in multiple rules.
 * @method Models\CreateCustomizeErrorPageResponse CreateCustomizeErrorPage(Models\CreateCustomizeErrorPageRequest $req) This API is used to create a custom response page.
 * @method Models\CreateDnsRecordResponse CreateDnsRecord(Models\CreateDnsRecordRequest $req) After a site is created and accessed in NS mode, you can create DNS records through this API.
 * @method Models\CreateEdgeKVNamespaceResponse CreateEdgeKVNamespace(Models\CreateEdgeKVNamespaceRequest $req) This API is used to create a KV namespace at a specified site.
 * @method Models\CreateFunctionResponse CreateFunction(Models\CreateFunctionRequest $req) This API is used to create and deploy an edge function to EdgeOne edge nodes.
 * @method Models\CreateFunctionReplicaResponse CreateFunctionReplica(Models\CreateFunctionReplicaRequest $req) This API is used to create copies of a specified edge function. After creating copies, when client requests match the configured trigger rules or default domain name, you can access a specific function copy by adding EO-Function-Replica-Name:[copy name] to the request header. Each function supports creating two copies by default.
 * @method Models\CreateFunctionRuleResponse CreateFunctionRule(Models\CreateFunctionRuleRequest $req) Creates a trigger rule for an edge function. It supports customized filter conditions to determine whether to execute a function. When a function needs to be executed, multiple ways are provided to select the target function, including directly specifying, selecting based on the client's associated region, and weight-based selection.
 * @method Models\CreateInferenceAPITokenResponse CreateInferenceAPIToken(Models\CreateInferenceAPITokenRequest $req) Create an inference API Token for authentication when accessing the inference service. The Token content is returned only once when creating, and each site can create up to 100 tokens.
 * @method Models\CreateInferenceDomainResponse CreateInferenceDomain(Models\CreateInferenceDomainRequest $req) Create an inference service domain name for accessing the inference service through a custom domain name. An inference service supports creating a maximum of 5 custom domain names.
After successful creation, complete the following steps to make the domain name function normally for external access:
1. To validate the CNAME configuration status of a domain, see the CheckCnameStatus api.
2. To verify ownership, refer to the VerifyOwnership API (https://www.tencentcloud.com/document/api/1552/98879?from_cn_redirect=1);
3. To configure domain name certificates, refer to the ModifyHostsCertificate api.
 * @method Models\CreateInferenceServiceResponse CreateInferenceService(Models\CreateInferenceServiceRequest $req) This API is used to create an inference service. You can set the service name, listening port, container image configuration, and resource configuration. An access address is provided after successful creation.
 * @method Models\CreateJustInTimeTranscodeTemplateResponse CreateJustInTimeTranscodeTemplate(Models\CreateJustInTimeTranscodeTemplateRequest $req) JIT transcoding already provides preset transcoding templates to meet most needs. For personalized transcoding requirements, you can create custom transcoding templates through this API, with up to 100 custom templates.
To ensure consistency of JIT transcoding effects and avoid video output exceptions caused by template changes during EO cache or M3U8 sharding, the template cannot be modified after creation.
To learn about JIT transcoding capacity, see EdgeOne Video Instant Processing Function Introduction (https://www.tencentcloud.com/document/product/1552/111927?from_cn_redirect=1).
 * @method Models\CreateL4ProxyResponse CreateL4Proxy(Models\CreateL4ProxyRequest $req) This API is used to create a layer 4 proxy instance.
 * @method Models\CreateL4ProxyRulesResponse CreateL4ProxyRules(Models\CreateL4ProxyRulesRequest $req) This API is used to create Layer 4 proxy instance rules and supports individual and batch creation.
 * @method Models\CreateL7AccRulesResponse CreateL7AccRules(Models\CreateL7AccRulesRequest $req) This API is used to create rules in the [rule engine](https://www.tencentcloud.com/document/product/1552/70901?from_cn_redirect=1), with support for batch creation.
 * @method Models\CreateLoadBalancerResponse CreateLoadBalancer(Models\CreateLoadBalancerRequest $req) This API is used to create a LoadBalancer. For details, see [Quickly Create Load Balancers](https://www.tencentcloud.com/document/product/1552/104223?from_cn_redirect=1). The load balancing feature is in beta test. If you need to use it, [contact us](https://www.tencentcloud.com/contact-us).
 * @method Models\CreateLogAnalysisDownloadTaskResponse CreateLogAnalysisDownloadTask(Models\CreateLogAnalysisDownloadTaskRequest $req) This API is used to create a log analysis download task. After creation, you can query the download task through the DescribeLogAnalysisDownloadTasks API.
Note:
1. Supports up to 50 million log entries per download.
2. Log files will be retained for 3 days.
3. If multiple tasks exist at the same time, they will be processed sequentially based on task creation time.
 * @method Models\CreateMultiPathGatewayResponse CreateMultiPathGateway(Models\CreateMultiPathGatewayRequest $req) This API is used to create a multi-channel security acceleration gateway, including Cloud Gateway and Private Gateway. Use the DescribeMultiPathGateway interface to query the status. If the status is online, the creation succeeded.
 * @method Models\CreateMultiPathGatewayLineResponse CreateMultiPathGatewayLine(Models\CreateMultiPathGatewayLineRequest $req) This API is used to create lines for integrating with the multi-channel security acceleration gateway, including EdgeOne Layer 4 proxy lines and custom lines.
 * @method Models\CreateMultiPathGatewaySecretKeyResponse CreateMultiPathGatewaySecretKey(Models\CreateMultiPathGatewaySecretKeyRequest $req) This API is used to create a key for integrating with a multi-channel security acceleration gateway. Customers integrate with the multi-channel security acceleration gateway based on key signatures. Each site contains only one key, which can be used to integrate all gateways under the site. The key can be queried through the DescribeMultiPathGatewaySecretKey API.
 * @method Models\CreateOriginGroupResponse CreateOriginGroup(Models\CreateOriginGroupRequest $req) Create an origin server group to manage origin servers by group. The origin server group configured here can be referenced in features such as **adding an acceleration domain name** and **Layer 4 proxy**.
 * @method Models\CreatePlanResponse CreatePlan(Models\CreatePlanRequest $req) If you need to use the Edgeone product, you need to create a billing plan through this interface.
> After creating a package, you need to complete creating a site and binding the plan through [CreateZone](https://www.tencentcloud.com/document/product/1552/80719?from_cn_redirect=1) before Edgeone can provide services properly.
 * @method Models\CreatePlanForZoneResponse CreatePlanForZone(Models\CreatePlanForZoneRequest $req) Purchase a package for the selected site not bound to a package.
 * @method Models\CreatePrefetchTaskResponse CreatePrefetchTask(Models\CreatePrefetchTaskRequest $req) This API is used to create a preheating task.
 * @method Models\CreatePurgeTaskResponse CreatePurgeTask(Models\CreatePurgeTaskRequest $req) When origin server resources update but the node cache TTL has not expired, users still access old resources. At this point, use this API to update node resources. The following two methods can trigger updates: <li>Direct deletion: Delete the node cache without any validation. User requests trigger origin-pull.</li><li>Mark expiration: Mark node resources as expired. User requests trigger back-to-origin validation, which sends HTTP conditional requests with If-None-Match and If-Modified-Since headers. If the origin server responds with 200, the node fetches new resources from the origin and updates the cache. If the origin server responds with 304, the cache will not be updated.</li>

For details on purging cache tasks, see [Purge Cache](https://www.tencentcloud.com/document/product/1552/70759?from_cn_redirect=1).
 * @method Models\CreateRealtimeLogDeliveryTaskResponse CreateRealtimeLogDeliveryTask(Models\CreateRealtimeLogDeliveryTaskRequest $req) This API is used to create a real-time log delivery task.

**Restrictions**

An entity (a Layer 7 domain name, a Layer 4 proxy instance, or an Edge Function instance) under the same combination of `LogType` and `Area` can only have one task created for each `TaskType`. The mutual exclusion rules for different `LogType` values are as follows:

| LogType | Conflicting TaskType |
|---|---|
| Layer 4 proxy logs, Edge Function execution logs | Choose one of `custom_endpoint`, `s3`, and `aws_s3` |

When `TaskType` is `log_analysis`:

<ul>
<li>Only `LogType` = `l7-access-logs` or `web-attack` is supported.</li>
<li>Under the same combination of `ZoneId` and `Area`, only one task can be created for each `LogType`.</li>
</ul>

**Recommendation**: Before creating a task, call the [DescribeRealtimeLogDeliveryTasks](https://www.tencentcloud.com/document/product/1145/59503) API to query existing tasks and avoid duplicate additions.
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) This API is on an earlier version for creating rule engine APIs. EdgeOne comprehensively upgraded the rule engine APIs on January 21, 2025. For details on the new API for creating layer-7 acceleration rules, refer to [CreateL7AccRules](https://www.tencentcloud.com/document/product/1552/115822?from_cn_redirect=1).
<p style="color: red;">Note: Starting from January 21, 2025, the old version APIs will stop update and iteration. New features will only be provided by the latest version interface. The existing capacity supported by the old version APIs will not be affected. To avoid data field conflicts when using the old version APIs, migrate to the new version rule engine APIs as soon as possible.</p>
 * @method Models\CreateSecurityAPIResourceResponse CreateSecurityAPIResource(Models\CreateSecurityAPIResourceRequest $req) Used to create API resources.
 * @method Models\CreateSecurityAPIServiceResponse CreateSecurityAPIService(Models\CreateSecurityAPIServiceRequest $req) Used to create an API service.
 * @method Models\CreateSecurityClientAttesterResponse CreateSecurityClientAttester(Models\CreateSecurityClientAttesterRequest $req) Create client authentication options.
 * @method Models\CreateSecurityIPGroupResponse CreateSecurityIPGroup(Models\CreateSecurityIPGroupRequest $req) Create a security IP group
 * @method Models\CreateSecurityJSInjectionRuleResponse CreateSecurityJSInjectionRule(Models\CreateSecurityJSInjectionRuleRequest $req) This API is used to create JavaScript injection rules.
 * @method Models\CreateSharedCNAMEResponse CreateSharedCNAME(Models\CreateSharedCNAMERequest $req) Used to create a shared CNAME. This feature is in beta test.
 * @method Models\CreateWebSecurityTemplateResponse CreateWebSecurityTemplate(Models\CreateWebSecurityTemplateRequest $req) Create a security policy configuration template
 * @method Models\CreateZoneResponse CreateZone(Models\CreateZoneRequest $req) EdgeOne offers three access methods: CNAME, NS, and domainless access. You need to finalize site creation through this API first. For CNAME and NS connected site scenarios, see [Quickly access EdgeOne from scratch](https://www.tencentcloud.com/document/product/1552/87601?from_cn_redirect=1). For domainless access scenarios, see [Quickly enable layer 4 proxy service](https://www.tencentcloud.com/document/product/1552/96051?from_cn_redirect=1).

> It is recommended to call this API to create a site when a package already exists under the account. Please input `PlanId` in the parameter to directly bind the site to the package. If `PlanId` is not input, the created site will be inactive and unable to provide normal services. You need to complete package binding through [BindZoneToPlan](https://www.tencentcloud.com/document/product/1552/83042?from_cn_redirect=1) before the site can provide services normally. If you currently have no bindable package, go to the console to purchase a package to finalize site creation.
 * @method Models\DeleteAccelerationDomainsResponse DeleteAccelerationDomains(Models\DeleteAccelerationDomainsRequest $req) Delete acceleration domain names in batches.
 * @method Models\DeleteAliasDomainResponse DeleteAliasDomain(Models\DeleteAliasDomainRequest $req) Delete an alias domain name.
This feature is only supported in the enterprise plan and is currently in beta test. To use it, please [contact us](https://www.tencentcloud.com/contact-us).
 * @method Models\DeleteApplicationProxyResponse DeleteApplicationProxy(Models\DeleteApplicationProxyRequest $req) This API is on an earlier version. If you want to call it, switch to the latest version. For details, see Deleting a Layer 4 Proxy Instance.
](https://www.tencentcloud.com/document/product/1552/103415?from_cn_redirect=1) .
 * @method Models\DeleteApplicationProxyRuleResponse DeleteApplicationProxyRule(Models\DeleteApplicationProxyRuleRequest $req) This API is on an earlier version. If you want to call it, switch to the latest version. For details, see Deleting L4 Proxy Rules (https://www.tencentcloud.com/document/product/1552/103414?from_cn_redirect=1).
 * @method Models\DeleteContentIdentifierResponse DeleteContentIdentifier(Models\DeleteContentIdentifierRequest $req) Delete the specified content identifier. The feature is open only in the allowlist.
 * @method Models\DeleteCustomErrorPageResponse DeleteCustomErrorPage(Models\DeleteCustomErrorPageRequest $req) This API is used to delete a custom response page.
 * @method Models\DeleteCustomGroupResponse DeleteCustomGroup(Models\DeleteCustomGroupRequest $req) This API is used to delete a specified custom group. If the group is referenced by a rule, deletion is not allowed. Remove the reference first.
 * @method Models\DeleteDnsRecordsResponse DeleteDnsRecords(Models\DeleteDnsRecordsRequest $req) You can use this API to delete DNS records in batches.
 * @method Models\DeleteEdgeKVNamespaceResponse DeleteEdgeKVNamespace(Models\DeleteEdgeKVNamespaceRequest $req) This API is used to delete a specified KV namespace. After deletion, all key-value pair data in the namespace will be cleared and cannot be recovered. If the namespace is referenced by an edge function, unbind the relationship before deletion.
 * @method Models\DeleteFunctionResponse DeleteFunction(Models\DeleteFunctionRequest $req) This API is used to delete an edge function. Once deleted, the function cannot be recovered, and associated trigger rules, environment variables, and replicas are also deleted.
 * @method Models\DeleteFunctionReplicaResponse DeleteFunctionReplica(Models\DeleteFunctionReplicaRequest $req) This API is used to delete a specified edge function replica.
 * @method Models\DeleteFunctionRulesResponse DeleteFunctionRules(Models\DeleteFunctionRulesRequest $req) This API is used to delete a trigger rule for an edge function.
 * @method Models\DeleteInferenceAPITokenResponse DeleteInferenceAPIToken(Models\DeleteInferenceAPITokenRequest $req) Delete an inference API Token. Once deleted, the Token expires immediately, and requests using it to access the inference service will not pass authentication.
 * @method Models\DeleteJustInTimeTranscodeTemplatesResponse DeleteJustInTimeTranscodeTemplates(Models\DeleteJustInTimeTranscodeTemplatesRequest $req) Delete a just in time transcoding template based on the unique template identifier under the site ID.
 * @method Models\DeleteL4ProxyResponse DeleteL4Proxy(Models\DeleteL4ProxyRequest $req) This API is used to delete a layer 4 proxy instance.
 * @method Models\DeleteL4ProxyRulesResponse DeleteL4ProxyRules(Models\DeleteL4ProxyRulesRequest $req) This API is used to delete l4 proxy rules and supports both individual and batch operation.
 * @method Models\DeleteL7AccRulesResponse DeleteL7AccRules(Models\DeleteL7AccRulesRequest $req) This API is used to delete rules from the rule engine (https://www.tencentcloud.com/document/product/1552/70901?from_cn_redirect=1). Batch deletion supported.
 * @method Models\DeleteLoadBalancerResponse DeleteLoadBalancer(Models\DeleteLoadBalancerRequest $req) This API is used to delete a load balancing instance. If the load balancing instance is referenced by other services, such as a Layer 4 proxy, it cannot be deleted. Remove the reference relationship first. The load balancer feature is in beta test. If you need to use it, contact us (https://www.tencentcloud.com/online?from_cn_redirect=1-service).
 * @method Models\DeleteMultiPathGatewayResponse DeleteMultiPathGateway(Models\DeleteMultiPathGatewayRequest $req) This API is used to delete multi-channel security acceleration gateways, including private gateways and Cloud Gateways.
 * @method Models\DeleteMultiPathGatewayLineResponse DeleteMultiPathGatewayLine(Models\DeleteMultiPathGatewayLineRequest $req) This API is used to delete lines integrated with multi-channel security acceleration gateways. Only custom lines support deletion.
 * @method Models\DeleteOriginGroupResponse DeleteOriginGroup(Models\DeleteOriginGroupRequest $req) Delete an origin group. If the origin group is still referenced by a service (for example, Layer 4 proxy, DNS, load balancing, or a rule), deletion is not allowed.
 * @method Models\DeleteRealtimeLogDeliveryTaskResponse DeleteRealtimeLogDeliveryTask(Models\DeleteRealtimeLogDeliveryTaskRequest $req) This API is used to delete a real-time log delivery task.
 * @method Models\DeleteRulesResponse DeleteRules(Models\DeleteRulesRequest $req) This API is on an earlier version for deleting rule engine APIs. EdgeOne completed a comprehensive upgrade of rule engine APIs on January 21, 2025. For details on the new API for deleting L7 acceleration rules, see [DeleteL7AccRules](https://www.tencentcloud.com/document/product/1552/115821?from_cn_redirect=1).
<p style="color: red;">Note: Starting from January 21, 2025, the old version API will stop update and iteration. New features will only be provided in the new version API, and the existing capabilities supported by the old version API will not be affected. To avoid data field conflicts when using the old version API, migrate to the new version rule engine API as soon as possible.</p>
 * @method Models\DeleteSecurityAPIResourceResponse DeleteSecurityAPIResource(Models\DeleteSecurityAPIResourceRequest $req) Used to delete API resources.
 * @method Models\DeleteSecurityAPIServiceResponse DeleteSecurityAPIService(Models\DeleteSecurityAPIServiceRequest $req) Used to delete an API service.
 * @method Models\DeleteSecurityClientAttesterResponse DeleteSecurityClientAttester(Models\DeleteSecurityClientAttesterRequest $req) Delete client authentication options.
 * @method Models\DeleteSecurityIPGroupResponse DeleteSecurityIPGroup(Models\DeleteSecurityIPGroupRequest $req) Delete a specified IP group. If a rule references the IP group, deletion is not allowed.
 * @method Models\DeleteSecurityJSInjectionRuleResponse DeleteSecurityJSInjectionRule(Models\DeleteSecurityJSInjectionRuleRequest $req) This API is used to delete JavaScript injection rules.
 * @method Models\DeleteSharedCNAMEResponse DeleteSharedCNAME(Models\DeleteSharedCNAMERequest $req) Used to delete a shared CNAME. This feature is in beta test.
 * @method Models\DeleteWebSecurityTemplateResponse DeleteWebSecurityTemplate(Models\DeleteWebSecurityTemplateRequest $req) Delete a security policy configuration template
 * @method Models\DeleteZoneResponse DeleteZone(Models\DeleteZoneRequest $req) Delete a site.
 * @method Models\DeployConfigGroupVersionResponse DeployConfigGroupVersion(Models\DeployConfigGroupVersionRequest $req) In version management mode, this API is used for version release. You can release a version to the testing environment or production environment by EnvId. The version management feature is in beta test and currently only available to the allowlist.
 * @method Models\DescribeAccelerationDomainsResponse DescribeAccelerationDomains(Models\DescribeAccelerationDomainsRequest $req) This API is used to view domain information under a site, including acceleration domain names, origin servers, and domain name status. You can view information of all domains under a site, or specify filter conditions to query specific domain information.
 * @method Models\DescribeAliasDomainsResponse DescribeAliasDomains(Models\DescribeAliasDomainsRequest $req) Query the list of alias domain names.
This feature is only supported in the enterprise plan and is currently in beta test. To use it, please [contact us](https://www.tencentcloud.com/contact-us).
 * @method Models\DescribeApplicationProxiesResponse DescribeApplicationProxies(Models\DescribeApplicationProxiesRequest $req) This API is on an earlier version. If you want to call it, switch to the latest version. The latest version splits into two APIs: one for querying the Layer 4 proxy instance list and the other for querying Layer 4 forwarding rules. For details, see [Query Layer 4 Proxy Instance List](https://www.tencentcloud.com/document/product/1552/103413?from_cn_redirect=1) and [Query Layer 4 Proxy Forwarding Rule List](https://www.tencentcloud.com/document/product/1552/103412?from_cn_redirect=1).
 * @method Models\DescribeAvailableCustomActionsForRuleEngineResponse DescribeAvailableCustomActionsForRuleEngine(Models\DescribeAvailableCustomActionsForRuleEngineRequest $req) Queries the list of available custom configurations for site rule engine operations.
 * @method Models\DescribeAvailableOriginACLFamilyResponse DescribeAvailableOriginACLFamily(Models\DescribeAvailableOriginACLFamilyRequest $req) This API is used to query detailed information about the origin protection IP range control domain, including the version number and specific IP range information.
The main difference between standard control domain and streamlined control domain is the number of IP ranges provided. The latter has fewer IP ranges, but has some usage restrictions. For specific restrictions, consult the product. The format description is as follows:
Standard control domain:
<li>gaz: standard global control domain;</li>
<li>mlc: Standard China control domain;</li>
<li>emc: standard overseas (worldwide excluding China) control domain;</li>
Streamline the control domain.
<li>plat-gaz: simplified global control domain;</li>
<li>plat-mlc: Simplified China control domain;</li>
<li>plat-emc: Simplified overseas (global excluding China) control domain;</li>
<li>plat-specific-gaz: custom edition global availability zone control domain;</li>
<li>plat-specific-mlc: custom edition for controlling the Chinese mainland availability zone control domain;</li>
<li>plat-specific-emc: custom edition control domain for availability zones worldwide (excluding Chinese mainland);</li>
Abbreviation description:
<li>gaz:Global AZ Availability Zone;</li>
<li>mlc:mainlandChina;</li>
<li>emc:Exclude mainlandChina.</li>
 * @method Models\DescribeAvailablePlansResponse DescribeAvailablePlans(Models\DescribeAvailablePlansRequest $req) Query the list of available package information for the current account.
 * @method Models\DescribeBillingDataResponse DescribeBillingData(Models\DescribeBillingDataRequest $req) Query billing data via this API.
 * @method Models\DescribeConfigGroupVersionDetailResponse DescribeConfigGroupVersionDetail(Models\DescribeConfigGroupVersionDetailRequest $req) In version management mode, this API is used to obtain detailed version information, including version ID, description, status, creation time, associated configuration group information, and the content of the version configuration file. The version management feature is in beta test and currently only available to the allowlist.
 * @method Models\DescribeConfigGroupVersionsResponse DescribeConfigGroupVersions(Models\DescribeConfigGroupVersionsRequest $req) In version management mode, this API is used to query the version list of a specified configuration group. The version management feature is in beta test and currently only available to the allowlist.
 * @method Models\DescribeContentIdentifiersResponse DescribeContentIdentifiers(Models\DescribeContentIdentifiersRequest $req) This API is used to query content identifiers in batches. They can be filtered by ID, description, status, or tags. Deleted content identifiers queried by status are only retained for three months. This feature is only open in the allowlist.
 * @method Models\DescribeContentQuotaResponse DescribeContentQuota(Models\DescribeContentQuotaRequest $req) Query the content management API quota
 * @method Models\DescribeCustomErrorPagesResponse DescribeCustomErrorPages(Models\DescribeCustomErrorPagesRequest $req) This API is used to query the custom error page list.
 * @method Models\DescribeCustomGroupResponse DescribeCustomGroup(Models\DescribeCustomGroupRequest $req) This API is used to query the detailed information of a custom group, including all entries in the group (returned with pagination via Limit/Offset). The DescribeCustomGroups list API returns up to the first 500 entries for each group. To obtain all entries, use this API. The GroupId can be obtained from the response of CreateCustomGroup or by querying DescribeCustomGroups.
 * @method Models\DescribeCustomGroupReferencesResponse DescribeCustomGroupReferences(Models\DescribeCustomGroupReferencesRequest $req) This API is used to obtain the security policy configuration that uses a custom group.
 * @method Models\DescribeCustomGroupsResponse DescribeCustomGroups(Models\DescribeCustomGroupsRequest $req) This API is used to query the list of custom groups under a specified site. This API returns only the first 500 entries of each custom group. To query all entries in a group, use the DescribeSecurityCustomGroup API.
 * @method Models\DescribeDDoSAttackDataResponse DescribeDDoSAttackData(Models\DescribeDDoSAttackDataRequest $req) This API is used to query DDoS attack time-series data.
 * @method Models\DescribeDDoSAttackEventResponse DescribeDDoSAttackEvent(Models\DescribeDDoSAttackEventRequest $req) This API is used to query the list of DDoS attack events.
 * @method Models\DescribeDDoSAttackTopDataResponse DescribeDDoSAttackTopData(Models\DescribeDDoSAttackTopDataRequest $req) This API is used to query Top-ranked data of DDoS attacks.
 * @method Models\DescribeDDoSProtectionResponse DescribeDDoSProtection(Models\DescribeDDoSProtectionRequest $req) This API is used to query exclusive DDoS protection info of a site.
 * @method Models\DescribeDefaultCertificatesResponse DescribeDefaultCertificates(Models\DescribeDefaultCertificatesRequest $req) Query the default certificate list
<p style="color: red;">Note: This earlier version interface is no longer updated. New features will only be provided in the latest version interface. Existing capacities supported by the earlier version interface will not be affected. To query the cert configured for a domain name, please use DescribeAccelerationDomains.</p>
 * @method Models\DescribeDeployHistoryResponse DescribeDeployHistory(Models\DescribeDeployHistoryRequest $req) In version management mode, this API is used to query the version release history of production/test environments. The version management feature is in beta test and currently only available to the allowlist.
 * @method Models\DescribeDnsRecordsResponse DescribeDnsRecords(Models\DescribeDnsRecordsRequest $req) This API is used to view DNS records under a site, including DNS record names, record types, and record content. It supports specifying filter conditions to query specific DNS records.
 * @method Models\DescribeEdgeKVNamespacesResponse DescribeEdgeKVNamespaces(Models\DescribeEdgeKVNamespacesRequest $req) Queries the KV namespace list under a specified site. Supports pagination, sorting, and conditional filtering. Returns basic namespace info, storage capacity utilization, and reference relationships. If no data is found, an empty array is returned.
 * @method Models\DescribeEnvironmentsResponse DescribeEnvironments(Models\DescribeEnvironmentsRequest $req) In version management mode, this API is used to query environment information, including the environment ID, type, and current effective version. The version management feature is in beta test and currently only available to the allowlist.
 * @method Models\DescribeFunctionComponentBindingsResponse DescribeFunctionComponentBindings(Models\DescribeFunctionComponentBindingsRequest $req) This API is used to query the component binding list of a specified edge function. It supports pagination and conditional filtering, and returns detailed information such as the bound component type, variable name, and configuration parameters. The currently supported binding component type is KV namespace (kv_namespace).
 * @method Models\DescribeFunctionReplicasResponse DescribeFunctionReplicas(Models\DescribeFunctionReplicasRequest $req) This API is used to query the replica list of edge functions.
 * @method Models\DescribeFunctionRulesResponse DescribeFunctionRules(Models\DescribeFunctionRulesRequest $req) This API is used to query the list of trigger rules for an edge function. It supports filtering by rule ID, function ID, rule description, and so on.
 * @method Models\DescribeFunctionRuntimeEnvironmentResponse DescribeFunctionRuntimeEnvironment(Models\DescribeFunctionRuntimeEnvironmentRequest $req) This API is used to query the runtime environment of an edge function, including environment variables.
 * @method Models\DescribeFunctionsResponse DescribeFunctions(Models\DescribeFunctionsRequest $req) This API is used to query the list of edge functions. It supports filtering by function ID, name, description, and so on.
 * @method Models\DescribeHostsSettingResponse DescribeHostsSetting(Models\DescribeHostsSettingRequest $req) This API is on an earlier version. EdgeOne has completed a comprehensive upgrade of rule engine APIs. You can use [DescribeL7AccSetting](https://www.tencentcloud.com/document/product/1552/115819?from_cn_redirect=1) and [DescribeL7AccRules](https://www.tencentcloud.com/document/product/1552/115820?from_cn_redirect=1) to obtain detailed configuration of a domain.
 * @method Models\DescribeIPGroupReferencesResponse DescribeIPGroupReferences(Models\DescribeIPGroupReferencesRequest $req) This API is used to obtain policy settings that use IP grouping.
 * @method Models\DescribeIPRegionResponse DescribeIPRegion(Models\DescribeIPRegionRequest $req) This API is used to query if the IP is an EdgeOne IP.
 * @method Models\DescribeIdentificationsResponse DescribeIdentifications(Models\DescribeIdentificationsRequest $req) Queries verification information of a site.
 * @method Models\DescribeInferenceAPITokensResponse DescribeInferenceAPITokens(Models\DescribeInferenceAPITokensRequest $req) Queries the list of reasoning API tokens and returns the Token ID, name, content, and creation time. Paging query is supported.
 * @method Models\DescribeInferenceDomainsResponse DescribeInferenceDomains(Models\DescribeInferenceDomainsRequest $req) This API is used to query the inference service domain name list and return the Cname address, ownership verification, and certificate information of the domain.
 * @method Models\DescribeInferenceHardwareSpecificationsResponse DescribeInferenceHardwareSpecifications(Models\DescribeInferenceHardwareSpecificationsRequest $req) This API is used to query the inference hardware specification list and return the CPU, memory, GPU, and video memory configurations of each specification. You can select the required specification from the list when creating a service.
 * @method Models\DescribeInferenceServiceDeploymentLogsResponse DescribeInferenceServiceDeploymentLogs(Models\DescribeInferenceServiceDeploymentLogsRequest $req) This API is used to query the logs of a specified deployment of an inference service, return log content and generation time, and support time range search, pagination, and sorting.
 * @method Models\DescribeInferenceServiceDeploymentRecordsResponse DescribeInferenceServiceDeploymentRecords(Models\DescribeInferenceServiceDeploymentRecordsRequest $req) This API is used to query the deployment history list of an inference service. It returns the operation type, status, duration, configuration snapshot, and whether it is the currently effective configuration for each deployment. Pagination and sorting are supported.
 * @method Models\DescribeInferenceServiceMonitorDataResponse DescribeInferenceServiceMonitorData(Models\DescribeInferenceServiceMonitorDataRequest $req) This API is used to query the monitoring data of inference services, supporting indicators such as CPU, memory, GPU, video memory utilization, and instance count. You can specify the time range and aggregation granularity, and query data from the most recent 30 days.
 * @method Models\DescribeInferenceServicesResponse DescribeInferenceServices(Models\DescribeInferenceServicesRequest $req) This API is used to query the inference service list, support filtering by service name, service ID, and status, and return the service configuration, running state, number of instances, and inference access address.
 * @method Models\DescribeJustInTimeTranscodeTemplatesResponse DescribeJustInTimeTranscodeTemplates(Models\DescribeJustInTimeTranscodeTemplatesRequest $req) This API is used to retrieve the transcoding template detail list based on the just in time transcoding template name, template type, or unique ID. The returned results include all eligible custom templates and preset templates.
 * @method Models\DescribeL4ProxyResponse DescribeL4Proxy(Models\DescribeL4ProxyRequest $req) This API is used to query the layer 4 proxy instance list.
 * @method Models\DescribeL4ProxyRulesResponse DescribeL4ProxyRules(Models\DescribeL4ProxyRulesRequest $req) This API is used to query the forwarding rule list under a Layer 4 proxy instance.
 * @method Models\DescribeL7AccRulesResponse DescribeL7AccRules(Models\DescribeL7AccRulesRequest $req) This API is used to query the rule list of the [rule engine](https://www.tencentcloud.com/document/product/1552/70901?from_cn_redirect=1).
 * @method Models\DescribeL7AccSettingResponse DescribeL7AccSetting(Models\DescribeL7AccSettingRequest $req) This API is used to query the global configuration of site acceleration.
 * @method Models\DescribeLoadBalancerListResponse DescribeLoadBalancerList(Models\DescribeLoadBalancerListRequest $req) This API is used to query the load balancing instance list. The load balancer feature is in beta test. If you need to use it, [contact us](https://www.tencentcloud.com/contact-us).
 * @method Models\DescribeLogAnalysisDetailResponse DescribeLogAnalysisDetail(Models\DescribeLogAnalysisDetailRequest $req) This API is used to query log analysis details. The data comes from the log data pushed by real-time log push tasks under the site with the destination "log-analysis".
 * @method Models\DescribeLogAnalysisDownloadTasksResponse DescribeLogAnalysisDownloadTasks(Models\DescribeLogAnalysisDownloadTasksRequest $req) This API is used to query the log download task list for log analysis. Note: Only download task records from the last three days are retained.
 * @method Models\DescribeLogAnalysisStatisticsResponse DescribeLogAnalysisStatistics(Models\DescribeLogAnalysisStatisticsRequest $req) This API is used to query log analysis statistics results. Users append an SQL aggregation statement after the query statement ([retrieval condition] | [SQL statement]). The backend executes the aggregation and returns columnar statistics results (column definition + data row).
 * @method Models\DescribeMultiPathGatewayResponse DescribeMultiPathGateway(Models\DescribeMultiPathGatewayRequest $req) This API is used to query details of a multi-channel security acceleration gateway, such as name, Gateway ID, IP, port, and type.
 * @method Models\DescribeMultiPathGatewayLineResponse DescribeMultiPathGatewayLine(Models\DescribeMultiPathGatewayLineRequest $req) This API is used to query lines connected to the multi-channel security acceleration gateway, including direct connections, EdgeOne Layer 4 proxy lines, and custom lines.
 * @method Models\DescribeMultiPathGatewayOriginACLResponse DescribeMultiPathGatewayOriginACL(Models\DescribeMultiPathGatewayOriginACLRequest $req) This API is used to query the binding relationship between a multi-channel security acceleration gateway instance and origin IP ranges, as well as origin IP range details. If the MultiPathGatewayNextOriginACL field has a return value, synchronize the latest origin IP ranges to the origin server firewall settings.
 * @method Models\DescribeMultiPathGatewayRegionsResponse DescribeMultiPathGatewayRegions(Models\DescribeMultiPathGatewayRegionsRequest $req) This API is used to query the available region list of user-created multi-channel security acceleration gateways.
 * @method Models\DescribeMultiPathGatewaySecretKeyResponse DescribeMultiPathGatewaySecretKey(Models\DescribeMultiPathGatewaySecretKeyRequest $req) This API is used to query the key for integrating a multi-channel security acceleration gateway. Customers sign with the integration key to access the multi-channel security acceleration gateway.
 * @method Models\DescribeMultiPathGatewaysResponse DescribeMultiPathGateways(Models\DescribeMultiPathGatewaysRequest $req) This API is used to query the list of user-created multi-channel security acceleration gateways. Pagination is supported.
 * @method Models\DescribeOriginACLResponse DescribeOriginACL(Models\DescribeOriginACLRequest $req) This API is used to query the binding relationship between L7 acceleration domains/L4 proxy instances and origin IP ranges under a site, as well as origin IP range details. If you want to periodically get the latest version of origin IP ranges through an automation script, you can poll this API at a low frequency (once every three days is recommended). If the NextOriginACL field has a return value, synchronize the latest origin IP ranges to the origin server firewall configuration.
 * @method Models\DescribeOriginGroupResponse DescribeOriginGroup(Models\DescribeOriginGroupRequest $req) This API is used to query the origin server group list.
 * @method Models\DescribeOriginGroupHealthStatusResponse DescribeOriginGroupHealthStatus(Models\DescribeOriginGroupHealthStatusRequest $req) This API is used to query the health status of origin server groups under a load balancing instance. The load balancer feature is in beta test. If you need to use it, [contact us](https://www.tencentcloud.com/contact-us).
 * @method Models\DescribeOriginProtectionResponse DescribeOriginProtection(Models\DescribeOriginProtectionRequest $req) This API is on an earlier version for origin protection queries. EdgeOne comprehensively upgraded the origin protection APIs on June 27, 2025. For details on the new version of the origin protection query API, refer to [DescribeOriginACL](https://www.tencentcloud.com/document/product/1552/120408?from_cn_redirect=1).

<p style="color: red;">Note: Starting from June 27, 2025, earlier version APIs will stop update and iteration, and new features will only be provided in the new version of APIs. To avoid data field conflicts when using earlier version APIs, migrate to the new version of origin protection APIs as soon as possible.</p>
 * @method Models\DescribeOverviewL7DataResponse DescribeOverviewL7Data(Models\DescribeOverviewL7DataRequest $req) This API is used to query layer-7 monitoring time series traffic Data. This API is to be deprecated. Please use the <a href="https://www.tencentcloud.com/document/product/1552/80648?from_cn_redirect=1">DescribeTimingL7AnalysisData</a> API.
 * @method Models\DescribePlansResponse DescribePlans(Models\DescribePlansRequest $req) Query the package information list with pagination.
 * @method Models\DescribePrefetchOriginLimitResponse DescribePrefetchOriginLimit(Models\DescribePrefetchOriginLimitRequest $req) This API is used to query origin-pull rate limits. This feature is in beta test for allowlisted users.
 * @method Models\DescribePrefetchTasksResponse DescribePrefetchTasks(Models\DescribePrefetchTasksRequest $req) This API is used to query the commit history and execution progress of preheating tasks. Tasks submitted via the CreatePrefetchTasks API can be queried through this API.
 * @method Models\DescribePurgeTasksResponse DescribePurgeTasks(Models\DescribePurgeTasksRequest $req) This API is used to query submitted URL refresh and directory refresh records and task progress. All tasks submitted via the CreatePurgeTasks API can be queried through this API.
 * @method Models\DescribeRealtimeLogDeliveryTasksResponse DescribeRealtimeLogDeliveryTasks(Models\DescribeRealtimeLogDeliveryTasksRequest $req) This API is used to query real-time log delivery task list.
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) This API is on an earlier version for querying rule engine rules. EdgeOne comprehensively upgraded the rule engine APIs on January 21, 2025. For details on the new version API for querying L7 acceleration rules, see [DescribeL7AccRules](https://www.tencentcloud.com/document/product/1552/115820?from_cn_redirect=1).
<p style="color: red;">Note: Starting from January 21, 2025, the legacy version API will stop update and iteration. New features will only be provided in the new version API. The existing capacity supported by the legacy version API will not be affected. To avoid data field conflicts when using the legacy version API, migrate to the new version rule engine API as soon as possible.</p>
 * @method Models\DescribeRulesSettingResponse DescribeRulesSetting(Models\DescribeRulesSettingRequest $req) This API is on an earlier version. EdgeOne has completed a comprehensive upgrade of rule engine APIs. For details, see [RuleEngineAction](https://www.tencentcloud.com/document/product/1552/80721?from_cn_redirect=1#RuleEngineAction).
 * @method Models\DescribeSecurityAPIResourceResponse DescribeSecurityAPIResource(Models\DescribeSecurityAPIResourceRequest $req) Query API resources under a site.
 * @method Models\DescribeSecurityAPIServiceResponse DescribeSecurityAPIService(Models\DescribeSecurityAPIServiceRequest $req) Query API services under a site.
 * @method Models\DescribeSecurityClientAttesterResponse DescribeSecurityClientAttester(Models\DescribeSecurityClientAttesterRequest $req) Query client authentication option configurations.
 * @method Models\DescribeSecurityIPGroupResponse DescribeSecurityIPGroup(Models\DescribeSecurityIPGroupRequest $req) This API is used to query the configuration information of a security IP group, including its ID, name, and content. In the query result of this API, each IP group returns up to 2,000 IPs or CIDR blocks. If an ultra-large IP group exceeds 2,000 IPs or CIDR blocks, call DescribeSecurityIPGroupContent for paging query.
 * @method Models\DescribeSecurityIPGroupContentResponse DescribeSecurityIPGroupContent(Models\DescribeSecurityIPGroupContentRequest $req) This API is used to query the IP address list in a specified IP group by page. When the number of IP addresses in an IP group exceeds 2000, you can use this API to perform a paging query to obtain the complete IP address list.
 * @method Models\DescribeSecurityIPGroupInfoResponse DescribeSecurityIPGroupInfo(Models\DescribeSecurityIPGroupInfoRequest $req) This API is deprecated and will be discontinued on June 30, 2024. Please use the API for querying security IP groups.
](https://www.tencentcloud.com/document/product/1552/105866?from_cn_redirect=1).

This API is used to query the configuration information of an IP group, including the IP group name, IP group content, and the site the IP group belongs to.
 * @method Models\DescribeSecurityJSInjectionRuleResponse DescribeSecurityJSInjectionRule(Models\DescribeSecurityJSInjectionRuleRequest $req) This API is used to query JavaScript injection rules.
 * @method Models\DescribeSecurityPolicyResponse DescribeSecurityPolicy(Models\DescribeSecurityPolicyRequest $req) Query security protection configuration details.
 * @method Models\DescribeSecurityTemplateBindingsResponse DescribeSecurityTemplateBindings(Models\DescribeSecurityTemplateBindingsRequest $req) This API is used to query the binding relationship list of a specified policy template.
 * @method Models\DescribeSharedCNAMEResponse DescribeSharedCNAME(Models\DescribeSharedCNAMERequest $req) This API is used to query the shared CNAME list, supporting fuzzy search, pagination, and sorting.
 * @method Models\DescribeTimingFunctionAnalysisDataResponse DescribeTimingFunctionAnalysisData(Models\DescribeTimingFunctionAnalysisDataRequest $req) This API is used to query the time series data of edge function analysis. Note that the data queried by this API has a delay of about 10 minutes. It is recommended to pull data from at least 10 minutes before the current time.
 * @method Models\DescribeTimingL4DataResponse DescribeTimingL4Data(Models\DescribeTimingL4DataRequest $req) <p>This API is used to query the L4 time series Data list.</p>
 * @method Models\DescribeTimingL7AnalysisDataResponse DescribeTimingL7AnalysisData(Models\DescribeTimingL7AnalysisDataRequest $req) This API is used to query time series data of the L7 domain name business.
Note:
1. This API queries data with a delay of about 10 minutes. It is advisable to pull data from 10 minutes before the current time.
2. This interface returns post-protection traffic request data by default. Users can use `Filters.mitigatedByWebSecurity` to custom query defended data.
 * @method Models\DescribeTimingL7CacheDataResponse DescribeTimingL7CacheData(Models\DescribeTimingL7CacheDataRequest $req) This API is used to query L7 cache analysis time series traffic data. This API is to be deprecated. Please use the <a href="https://www.tencentcloud.com/document/product/1552/80648?from_cn_redirect=1">DescribeTimingL7AnalysisData</a> API.
 * @method Models\DescribeTimingL7OriginPullDataResponse DescribeTimingL7OriginPullData(Models\DescribeTimingL7OriginPullDataRequest $req) This API is used to query the origin-pull time series data of an L7 domain.
You can choose to group queries by specifying the query dimension <code>DimensionName</code>, which returns multiple groups of time series data. For detailed directions and usage limits, see [How to Use APIs to Implement Group Query in a Single Call](https://www.tencentcloud.com/document/product/1552/127501?from_cn_redirect=1).
 * @method Models\DescribeTopFunctionAnalysisDataResponse DescribeTopFunctionAnalysisData(Models\DescribeTopFunctionAnalysisDataRequest $req) This API is used to query the topN data of Edge Functions by a specified dimension. Note that the data returned by this API has a delay of about 10 minutes. We recommend that you query the data generated at least 10 minutes before the current time.
 * @method Models\DescribeTopL7AnalysisDataResponse DescribeTopL7AnalysisData(Models\DescribeTopL7AnalysisDataRequest $req) This API is used to query the top N data of the L7 domain name business by specified dimension.
Note:
1. This API queries data with a delay of about 10 minutes. It is recommended to pull data from 10 minutes before the current time.
2. This interface returns post-protection traffic request data by default. Users can use `Filters.mitigatedByWebSecurity` to custom query defended data.
 * @method Models\DescribeTopL7CacheDataResponse DescribeTopL7CacheData(Models\DescribeTopL7CacheDataRequest $req) This API is used to query L7 cache analysis topN data. This API is to be deprecated. Please use the <a href="https://www.tencentcloud.com/document/product/1552/80646?from_cn_redirect=1"> DescribeTopL7AnalysisData</a> API.
 * @method Models\DescribeWebSecurityTemplateResponse DescribeWebSecurityTemplate(Models\DescribeWebSecurityTemplateRequest $req) Queries security policy configuration template details
 * @method Models\DescribeWebSecurityTemplatesResponse DescribeWebSecurityTemplates(Models\DescribeWebSecurityTemplatesRequest $req) Queries the security policy configuration template list.
 * @method Models\DescribeZoneConfigImportResultResponse DescribeZoneConfigImportResult(Models\DescribeZoneConfigImportResultRequest $req) This API is used to query the results of site configuration item import via the site configuration import API.
 * @method Models\DescribeZoneCustomVariablesResponse DescribeZoneCustomVariables(Models\DescribeZoneCustomVariablesRequest $req) This API is used to query site-level custom variable configurations, including variable definitions and variable operations. If not configured, both variable definitions and variable operations return empty lists.

If needed, call the DescribeL7AccRules API to query rule-level custom variables.
 * @method Models\DescribeZoneSettingResponse DescribeZoneSetting(Models\DescribeZoneSettingRequest $req) This API is on an earlier version. EdgeOne has completed a comprehensive upgrade of rule engine APIs. For details, see [DescribeL7AccSetting](https://www.tencentcloud.com/document/product/1552/115819?from_cn_redirect=1).
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) This API is used to query site information you have permission to access. You can filter sites based on different query conditions.
 * @method Models\DestroyPlanResponse DestroyPlan(Models\DestroyPlanRequest $req) This API is used to terminate a billing plan when you need to stop billing for an Edgeone plan.
> The following conditions must be met to terminate a billing plan:
1. The plan has expired (except for the Enterprise Edition Plan);
2. All sites under the package have been shut down or deleted.

> The site status can be queried through the [Query Site List](https://www.tencentcloud.com/document/product/1552/80713?from_cn_redirect=1) interface.
A site can be deactivated by switching the site to a closed status through the [Switch Site Status](https://www.tencentcloud.com/document/product/1552/80707?from_cn_redirect=1) interface.
A site can be deleted by using the Delete Site API.
 * @method Models\DisableOriginACLResponse DisableOriginACL(Models\DisableOriginACLRequest $req) This API is used to disable origin protection for a site. Once disabled, resources related to the origin will no longer use only the origin IP range provided by origin protection to request your origin, and update notifications on origin IP ranges will stop simultaneously.
 * @method Models\DownloadL4LogsResponse DownloadL4Logs(Models\DownloadL4LogsRequest $req) This API is used to obtain the offline log download link for a Layer 4 proxy business.
**Note:** EO stores offline logs and provides a download service only when the offline log feature is enabled. For specific features, see the [document](https://www.tencentcloud.com/document/product/1552/73660?from_cn_redirect=1).
 * @method Models\DownloadL7LogsResponse DownloadL7Logs(Models\DownloadL7LogsRequest $req) This API is used to obtain the offline log download link for an L7 domain.
**Note:** EO stores offline logs and provides a download service only when the offline log feature is enabled. For specific features, see the [document](https://www.tencentcloud.com/document/product/1552/73660?from_cn_redirect=1).
 * @method Models\DummyParseZoneFullConfigResponse DummyParseZoneFullConfig(Models\DummyParseZoneFullConfigRequest $req) This API is used to define the structure of a complete site configuration for reference only. Note: This API does not return actual data.
 * @method Models\EdgeKVDeleteResponse EdgeKVDelete(Models\EdgeKVDeleteRequest $req) This API is used to delete one or more key-value pair data in a specified namespace. Batch deletion supported. Data cannot be recovered after deletion.
 * @method Models\EdgeKVGetResponse EdgeKVGet(Models\EdgeKVGetRequest $req) This API is used to batch read key values from a specified namespace. It supports querying up to 20 keys in a single query.
 * @method Models\EdgeKVListResponse EdgeKVList(Models\EdgeKVListRequest $req) This API is used to list all keys in the specified namespace, with prefix filtering supported. Cursor-based traversal is implemented, and the next cursor is returned for continued querying. It is suitable for traversing all keys in a namespace.
 * @method Models\EdgeKVPutResponse EdgeKVPut(Models\EdgeKVPutRequest $req) This API is used to write key-value pair data to a specified namespace, with support for setting expiration time. If the key already exists, the original value is overwritten. If not, a new key-value pair is created.
 * @method Models\EnableOriginACLResponse EnableOriginACL(Models\EnableOriginACLRequest $req) This API is used to enable origin protection for a site for the first time. After it is enabled, EdgeOne will use specific origin-pull IP ranges to pull from the origin for layer-7 acceleration domains/layer-4 proxy instances.
This API supports two modes: **Automatic Protection Mode** and **Specified Protection Mode**. <li>When **Automatic Protection Mode** is used (L7EnableMode/L4EnableMode is set to all), the acceleration domain list and layer-4 proxy instances under the site will be automatically added to the origin protection list in real time without manual intervention;</li><li>When **Specified Protection Mode** is used (L7EnableMode/L4EnableMode is set to specific), you need to manually specify the resources to be added to origin protection. Unspecified resources will not be added to the origin protection list. If resource adjustment is required, you need to actively call the ModifyOriginACL API to make adjustments.</li>

Instructions for using the Specified Protection Mode:
<li>The maximum number of layer-7 acceleration domains that can be submitted at a time is 200, and the maximum number of layer-4 proxy instances is 100. Mixed submission of layer-7 acceleration domains/layer-4 proxy instances is supported, with a maximum total of 200 instances;</li>
<li>When more than 200 resources need to be enabled, you need to first configure the resources of the first shard through this API, and then configure the remaining shards through the ModifyOriginACL API. For example, if 500 layer-7 acceleration domains need to be added, first use this API to set 200 domains, and then use the ModifyOriginACL API to configure the remaining 300 domains in two batches, with no more than 200 domains per batch.</li>

Note:
- When enabling, accounts on the allowlist can select other origin-pull IP range versions, such as the simplified version, to achieve the effect of pulling from the origin with fewer IP ranges.
- Calling this API is deemed as your agreement to the [Special Agreement on Enabling Origin Protection](https://www.tencentcloud.com/document/product/1552/120141?from_cn_redirect=1);
- Origin-pull IP ranges are subject to change from time to time. EdgeOne will send notifications 14 days, 7 days, 3 days, and 1 day before the change through one or more methods such as in-site messages, SMS, and emails. To ensure that you can receive notifications of origin-pull IP range changes, make sure that you have selected message notifications related to the EdgeOne product in the [Tencent Cloud Message Center Console](https://console.cloud.tencent.com/message) and configured the correct message recipients. For configuration methods, refer to [Message Subscription Management](https://www.tencentcloud.com/document/product/567/43476?from_cn_redirect=1).
 * @method Models\ExportZoneConfigResponse ExportZoneConfig(Models\ExportZoneConfigRequest $req) This API is used to export site configuration by users based on desired configuration items. The exported configuration is used for import via the site configuration import API.
 * @method Models\HandleFunctionRuntimeEnvironmentResponse HandleFunctionRuntimeEnvironment(Models\HandleFunctionRuntimeEnvironmentRequest $req) This API is used to operate the runtime environment of an edge function. It supports related settings for environment variables.
After the environment variables are set, they can be used in the function code and function replica code. For details, see [Edge Functions Referencing Environment Variables](https://www.tencentcloud.com/document/product/1552/109151?from_cn_redirect=1#0151fd9a-8b0e-407b-ae37-54553a60ded6).
 * @method Models\IdentifyZoneResponse IdentifyZone(Models\IdentifyZoneRequest $req) Used to verify site ownership.
 * @method Models\ImportZoneConfigResponse ImportZoneConfig(Models\ImportZoneConfigRequest $req) This API is used to quickly import site configuration files. After the import is initiated, the API will return the corresponding task ID (TaskId). Users need to use the site configuration import result query API to obtain the results of this import task.
 * @method Models\IncreasePlanQuotaResponse IncreasePlanQuota(Models\IncreasePlanQuotaRequest $req) This API is used to purchase additional quotas when the number of sites bound to your plan, the number of rules under "Web Protection - Custom Rules - Precision Matching Policy", or the rules under "Web Protection - Rate Limiting - Precision Rate Limiting Module" reach the plan's quota limit.
> This interface only supports the Enterprise Edition Plan.
 * @method Models\ModifyAccelerationDomainResponse ModifyAccelerationDomain(Models\ModifyAccelerationDomainRequest $req) Modify acceleration domain name information
 * @method Models\ModifyAccelerationDomainStatusesResponse ModifyAccelerationDomainStatuses(Models\ModifyAccelerationDomainStatusesRequest $req) Batch modify accelerated domain status
 * @method Models\ModifyAliasDomainResponse ModifyAliasDomain(Models\ModifyAliasDomainRequest $req) Modify an alias domain name.
This feature is only supported in the enterprise plan and is currently in beta test. To use it, please [contact us](https://www.tencentcloud.com/contact-us).
 * @method Models\ModifyAliasDomainStatusResponse ModifyAliasDomainStatus(Models\ModifyAliasDomainStatusRequest $req) Modify the status of an alias domain name.
This feature is only supported in the enterprise plan and is currently in beta test. To use it, please [contact us](https://www.tencentcloud.com/contact-us).
 * @method Models\ModifyApplicationProxyResponse ModifyApplicationProxy(Models\ModifyApplicationProxyRequest $req) This API is on an earlier version. If you want to call it, switch to the latest version. For details, refer to [Modify Layer 4 Proxy Instance].
](https://www.tencentcloud.com/document/product/1552/103411?from_cn_redirect=1) .
 * @method Models\ModifyApplicationProxyRuleResponse ModifyApplicationProxyRule(Models\ModifyApplicationProxyRuleRequest $req) This API is on an earlier version. If you want to call it, switch to the latest version. For details, see Modifying Layer 4 Proxy Forwarding Rules.
](https://www.tencentcloud.com/document/product/1552/103410?from_cn_redirect=1) .
 * @method Models\ModifyApplicationProxyRuleStatusResponse ModifyApplicationProxyRuleStatus(Models\ModifyApplicationProxyRuleStatusRequest $req) This API is on an earlier version. If you want to call it, switch to the latest version. For details, see Modifying Layer 4 Proxy Forwarding Rule Status.
](https://www.tencentcloud.com/document/product/1552/103409?from_cn_redirect=1) .
 * @method Models\ModifyApplicationProxyStatusResponse ModifyApplicationProxyStatus(Models\ModifyApplicationProxyStatusRequest $req) This API is on an earlier version. If you want to call it, switch to the latest version. For details, see [modify layer 4 proxy instance status](https://www.tencentcloud.com/document/product/1552/103408?from_cn_redirect=1).
 * @method Models\ModifyContentIdentifierResponse ModifyContentIdentifier(Models\ModifyContentIdentifierRequest $req) Modification content identifier. Only description modification is supported. The feature is open in the allowlist only.
 * @method Models\ModifyCustomErrorPageResponse ModifyCustomErrorPage(Models\ModifyCustomErrorPageRequest $req) This API is used to modify a custom response page.
 * @method Models\ModifyCustomGroupResponse ModifyCustomGroup(Models\ModifyCustomGroupRequest $req) This API is used to modify the content of a custom group. GroupType cannot be modified after creation. When modifying entries in the group, you can specify replacement, append, or removal operations through GroupItemOperation.
 * @method Models\ModifyDDoSProtectionResponse ModifyDDoSProtection(Models\ModifyDDoSProtectionRequest $req) Modify exclusive DDoS protection for a site.
 * @method Models\ModifyDnsRecordsResponse ModifyDnsRecords(Models\ModifyDnsRecordsRequest $req) You can use this API to batch modify DNS records.
 * @method Models\ModifyDnsRecordsStatusResponse ModifyDnsRecordsStatus(Models\ModifyDnsRecordsStatusRequest $req) You can use this API to batch modify the status of DNS records and enable or disable records in batches.
 * @method Models\ModifyEdgeKVNamespaceResponse ModifyEdgeKVNamespace(Models\ModifyEdgeKVNamespaceRequest $req) This API is used to modify the attribute information of a specified KV namespace. Currently, only namespace description modification is supported.
 * @method Models\ModifyFunctionResponse ModifyFunction(Models\ModifyFunctionRequest $req) This API is used to modify an edge function. It supports modifying the function content and description. The function will take effect immediately after modification and redeployment.
 * @method Models\ModifyFunctionComponentBindingsResponse ModifyFunctionComponentBindings(Models\ModifyFunctionComponentBindingsRequest $req) Modify the binding relationship between edge functions and components. Four operation modes are supported: bind, bind-override, unbind, and rebind. Manage function component binding relationships by specifying the operation type and component list.
 * @method Models\ModifyFunctionReplicaResponse ModifyFunctionReplica(Models\ModifyFunctionReplicaRequest $req) This API is used to modify the content and description of a specified edge function replica.
 * @method Models\ModifyFunctionRuleResponse ModifyFunctionRule(Models\ModifyFunctionRuleRequest $req) This API is used to modify a trigger rule for an edge function. It supports modifying rule conditions, execution functions, and description. You can first use the DescribeFunctionRules API to get the RuleId of the rule to be modified, then input the modified rule content. The original rule content will be overwritten.
 * @method Models\ModifyFunctionRulePriorityResponse ModifyFunctionRulePriority(Models\ModifyFunctionRulePriorityRequest $req) This API is used to modify the priority of trigger rules for an edge function.
 * @method Models\ModifyHostsCertificateResponse ModifyHostsCertificate(Models\ModifyHostsCertificateRequest $req) After domain name creation is completed, you can configure a self-owned certificate for the domain name, or alternatively use the free certificate (https://www.tencentcloud.com/document/product/1552/90437?from_cn_redirect=1) offered by EdgeOne.
If you need to configure a self-owned certificate, upload the certificate to the [SSL certificate console](https://console.cloud.tencent.com/certoverview) first, then import the corresponding certificate ID in this API. For details, see [Deploy self-owned certificates to EdgeOne domain names].
](https://www.tencentcloud.com/document/product/1552/88874?from_cn_redirect=1).
 * @method Models\ModifyInferenceServiceResponse ModifyInferenceService(Models\ModifyInferenceServiceRequest $req) Modify an inference service to support updates to the listening port, request path, container image, resource configuration, and description. Only passed parameters will be modified, while unpassed parameters remain unchanged.
 * @method Models\ModifyL4ProxyResponse ModifyL4Proxy(Models\ModifyL4ProxyRequest $req) This API is used to modify the configuration of a layer 4 proxy instance.
 * @method Models\ModifyL4ProxyRulesResponse ModifyL4ProxyRules(Models\ModifyL4ProxyRulesRequest $req) This API is used to modify Layer 4 proxy forwarding rules, supporting both individual and batch modification.
 * @method Models\ModifyL4ProxyRulesStatusResponse ModifyL4ProxyRulesStatus(Models\ModifyL4ProxyRulesStatusRequest $req) This API is used to enable or disable the status of layer-4 proxy rules, supporting both individual and batch operation.
 * @method Models\ModifyL4ProxyStatusResponse ModifyL4ProxyStatus(Models\ModifyL4ProxyStatusRequest $req) This API is used to enable or disable an L4 proxy instance.
 * @method Models\ModifyL7AccRuleResponse ModifyL7AccRule(Models\ModifyL7AccRuleRequest $req) This API is used to modify a rule in the [rule engine](https://www.tencentcloud.com/document/product/1552/70901?from_cn_redirect=1). Only one rule can be modified at a time.
 * @method Models\ModifyL7AccRulePriorityResponse ModifyL7AccRulePriority(Models\ModifyL7AccRulePriorityRequest $req) This API is used to modify the priority of the rule list in the rule engine (https://www.tencentcloud.com/document/product/1552/70901?from_cn_redirect=1). It requires the input of the complete rule ID list under the site ID. The rule ID list can be obtained through the API for querying layer-7 acceleration rules (https://www.tencentcloud.com/document/product/1552/115820?from_cn_redirect=1). The final priority order will be adjusted to the order of the rule ID list, executed from front to back.
 * @method Models\ModifyL7AccSettingResponse ModifyL7AccSetting(Models\ModifyL7AccSettingRequest $req) This API is used to modify the global configuration of site acceleration.
 * @method Models\ModifyLoadBalancerResponse ModifyLoadBalancer(Models\ModifyLoadBalancerRequest $req) This API is used to modify LoadBalancer configuration. The load balancing feature is in beta test. If you need to use it, [contact us](https://www.tencentcloud.com/contact-us).
 * @method Models\ModifyMultiPathGatewayResponse ModifyMultiPathGateway(Models\ModifyMultiPathGatewayRequest $req) This API is used to modify multi-channel security acceleration gateway information, such as name, gateway ID, IP, and port.
 * @method Models\ModifyMultiPathGatewayLineResponse ModifyMultiPathGatewayLine(Models\ModifyMultiPathGatewayLineRequest $req) This API is used to modify the configuration for connecting lines to the multi-channel security acceleration gateway, including EdgeOne Layer 4 proxy lines and custom lines.
 * @method Models\ModifyMultiPathGatewaySecretKeyResponse ModifyMultiPathGatewaySecretKey(Models\ModifyMultiPathGatewaySecretKeyRequest $req) This API is used to modify the key for integrating a multi-channel security acceleration gateway. Customers sign with the integration key to access the multi-channel security acceleration gateway. After modification, the original key becomes invalid.
 * @method Models\ModifyMultiPathGatewayStatusResponse ModifyMultiPathGatewayStatus(Models\ModifyMultiPathGatewayStatusRequest $req) This API is used to update the multi-channel security gateway status.
 * @method Models\ModifyOriginACLResponse ModifyOriginACL(Models\ModifyOriginACLRequest $req) This API is used to modify the origin protection configuration of a site. The following operations are supported: <li>**Resource addition and deletion**: enable or disable origin-pull from specific origin IP ranges for layer-7 accelerated domains/layer-4 proxy instances. This applies to resource adjustment in **specified protection mode**, and unspecified resources will not change;</li><li>**Mode switching**: adjust the origin protection mode of layer-7 accelerated domains/layer-4 proxy instances. After switching to all, the list of accelerated domains or layer-4 proxy instances under the site will be automatically added to the origin protection list in real time, and subsequent resource changes will also be automatically adjusted without manual intervention; after switching to specific, only the mode is changed, and resources already included in protection remain unchanged;</li><li>**IP range version switching**: for whitelisted customers, it supports switching to other available origin protection IP range versions, such as the simplified version, to reduce origin-pull IP ranges.</li>

Instructions for specified protection mode:
<li>The maximum number of layer-7 accelerated domains that can be submitted at a time is 200, and the maximum number of layer-4 proxy instances is 100. Mixed submission of layer-7 accelerated domains/layer-4 proxy instances is supported, with a maximum total of 200 instances;</li>
<li>When more than 200 resources need to be changed, submit them in batches through this API. For example, to add 500 layer-7 accelerated domains, first submit 200 domains through this API, and then submit the remaining 300 domains in two batches, with no more than 200 domains each time.</li>
 * @method Models\ModifyOriginGroupResponse ModifyOriginGroup(Models\ModifyOriginGroupRequest $req) Modify origin group configuration. Newly submitted origin records will overwrite the original origin records in the origin group.
 * @method Models\ModifyPlanResponse ModifyPlan(Models\ModifyPlanRequest $req) Modify the plan settings. Currently, only the auto-renewal switch of prepaid plans can be modified.
 * @method Models\ModifyPrefetchOriginLimitResponse ModifyPrefetchOriginLimit(Models\ModifyPrefetchOriginLimitRequest $req) This API is used to configure origin-pull rate limiting. This feature is in allowlist beta test.
This API is used to create, modify, and delete preheated origin-pull rate limits. Each account supports up to 100 limits.
 * @method Models\ModifyRealtimeLogDeliveryTaskResponse ModifyRealtimeLogDeliveryTask(Models\ModifyRealtimeLogDeliveryTaskRequest $req) This API is used to modify the configuration of a real-time log delivery task. It has the following limits:
<ul>
<li>The destination type (`TaskType`) of a real-time log delivery task cannot be modified;</li>
<li>The data delivery type (`LogType`) cannot be modified;</li>
<li>The data delivery region (`Area`) cannot be modified;</li>
<li>When the destination of the original real-time log delivery task is Tencent Cloud CLS, the destination details such as the log set and log topic cannot be modified.</li>
</ul>
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) This API is on an earlier version for modifying rule engine APIs. EdgeOne comprehensively upgraded rule engine-related APIs on January 21, 2025. For details on the new version API for modifying layer-7 acceleration rules, refer to [ModifyL7AccRule](https://www.tencentcloud.com/document/product/1552/115818?from_cn_redirect=1).
<p style="color: red;">Note: Starting from January 21, 2025, the legacy version API will stop update and iteration. New features will only be provided in the latest version API. The existing capacity supported by the legacy version API will not be affected. To avoid data field conflict when using the legacy version API, migrate to the latest version rule engine API as soon as possible.</p>
 * @method Models\ModifySecurityAPIResourceResponse ModifySecurityAPIResource(Models\ModifySecurityAPIResourceRequest $req) This API is used to modify API resources.
 * @method Models\ModifySecurityAPIServiceResponse ModifySecurityAPIService(Models\ModifySecurityAPIServiceRequest $req) This API is used to modify API services.
 * @method Models\ModifySecurityClientAttesterResponse ModifySecurityClientAttester(Models\ModifySecurityClientAttesterRequest $req) Modify client authentication options.
 * @method Models\ModifySecurityIPGroupResponse ModifySecurityIPGroup(Models\ModifySecurityIPGroupRequest $req) Modifies a security IP group.
 * @method Models\ModifySecurityJSInjectionRuleResponse ModifySecurityJSInjectionRule(Models\ModifySecurityJSInjectionRuleRequest $req) This API is used to modify JavaScript injection rules.
 * @method Models\ModifySecurityPolicyResponse ModifySecurityPolicy(Models\ModifySecurityPolicyRequest $req) Modify Web & Bot security configuration.
 * @method Models\ModifySharedCNAMEResponse ModifySharedCNAME(Models\ModifySharedCNAMERequest $req) This API is used to modify a shared CNAME. Currently, it only supports modifying the description and settings of a shared CNAME, and associating an IP SSL domain name with an IP SSL shared CNAME. Once created, a shared CNAME itself cannot be modified. This feature is in beta test.
 * @method Models\ModifyWebSecurityTemplateResponse ModifyWebSecurityTemplate(Models\ModifyWebSecurityTemplateRequest $req) Modifies a security policy configuration template
 * @method Models\ModifyZoneResponse ModifyZone(Models\ModifyZoneRequest $req) Modifies site information.
 * @method Models\ModifyZoneCustomVariablesResponse ModifyZoneCustomVariables(Models\ModifyZoneCustomVariablesRequest $req) This API is used to manage site-level custom variables, supporting the creation, modification, and deletion of variable definitions and variable operations. The submitted list will override the corresponding existing configuration. To clear the configuration, pass in an empty list. Configuration items not passed in remain unchanged. The default values for variable definitions and variable operations are both empty.

For rule-level custom variable related operations, call the CreateL7AccRules or ModifyL7AccRule API.
 * @method Models\ModifyZoneSettingResponse ModifyZoneSetting(Models\ModifyZoneSettingRequest $req) This API is on an earlier version. EdgeOne has completed a comprehensive upgrade of rule engine APIs. For details, see [ModifyL7AccSetting](https://www.tencentcloud.com/document/product/1552/115817?from_cn_redirect=1).
 * @method Models\ModifyZoneStatusResponse ModifyZoneStatus(Models\ModifyZoneStatusRequest $req) Used to enable or disable a site.
 * @method Models\ModifyZoneWorkModeResponse ModifyZoneWorkMode(Models\ModifyZoneWorkModeRequest $req) This API is used to modify the working mode of each configuration module under a site. Each configuration module of a site can enable version management mode or immediate effect mode by configuration group dimension. For details, see Version Management (https://www.tencentcloud.com/document/product/1552/113690?from_cn_redirect=1).
 * @method Models\OperateInferenceDomainResponse OperateInferenceDomain(Models\OperateInferenceDomainRequest $req) Operate an inference service domain name. You can stop, enable, and delete it. Resources cannot be recovered after deletion.
 * @method Models\OperateInferenceServiceResponse OperateInferenceService(Models\OperateInferenceServiceRequest $req) Operate an inference service. You can stop, start, and delete it. Resources cannot be recovered after deletion.
 * @method Models\RefreshMultiPathGatewaySecretKeyResponse RefreshMultiPathGatewaySecretKey(Models\RefreshMultiPathGatewaySecretKeyRequest $req) This API is used to refresh the key of a multi-channel security acceleration gateway. Customers integrate with the multi-channel security acceleration gateway based on key signatures. Each site contains only one key, which can be used to integrate all gateways under the site. After the key is refreshed, the original key becomes invalid.
 * @method Models\RenewPlanResponse RenewPlan(Models\RenewPlanRequest $req) When your plan needs to be extended, you can use this API to renew it. Plan renewal is only supported for the Personal, Basic, and Standard Editions.
> For cost details, refer to [Plan Cost](https://www.tencentcloud.com/document/product/1552/94158?from_cn_redirect=1).
 * @method Models\UpgradePlanResponse UpgradePlan(Models\UpgradePlanRequest $req) When you need features available only in higher-tier plans, you can upgrade your plan through this interface. Upgrades are only supported for Personal and Basic Edition Plans.
> For differences between different types of Edgeone billing plans, see Edgeone billing plan comparison (https://www.tencentcloud.com/document/product/1552/94165?from_cn_redirect=1)
For billing package upgrade rules and pricing details, see Edgeone billing package upgrade instructions (https://www.tencentcloud.com/document/product/1552/95291?from_cn_redirect=1)
If your plan needs to upgrade to the Enterprise Edition, please [contact us](https://www.tencentcloud.com/contact-us).
 * @method Models\VerifyOwnershipResponse VerifyOwnership(Models\VerifyOwnershipRequest $req) In CNAME access mode, you need to verify the ownership of the site or domain name. This API is used to trigger the verification. If the site passes ownership verification, no need to verify again when adding domains subsequently. For details, see [Site/Domain Name Ownership Verification](https://www.tencentcloud.com/document/product/1552/70789?from_cn_redirect=1).

In NS access mode, you can also query through this API whether the NS server switch is successful. For details, see [Modify DNS Server](https://www.tencentcloud.com/document/product/1552/90452?from_cn_redirect=1).
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
