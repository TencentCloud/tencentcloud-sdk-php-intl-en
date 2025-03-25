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

namespace TencentCloud\Gaap\V20180529;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Gaap\V20180529\Models as Models;

/**
 * @method Models\AddRealServersResponse AddRealServers(Models\AddRealServersRequest $req) This API is used to add the information of the origin server (server), which supports IP or the domain name.
 * @method Models\BindListenerRealServersResponse BindListenerRealServers(Models\BindListenerRealServersRequest $req) This API (BindListenerRealServers) is used for the TCP/UDP listener to bind/unbind the origin server.
Note: This API unbinds the previously bound origin servers, and binds the origin servers selected for this call. For example, the previously bound origin servers are A, B and C, and the origin servers selected for this call are C, D and E, then the origin servers bound after this call will be C, D and E.
 * @method Models\BindRuleRealServersResponse BindRuleRealServers(Models\BindRuleRealServersRequest $req) This API is used to bind an origin server to the forwarding rules of layer-7 listeners. Note: This API unbinds all previously bound origin servers before binding those selected.
 * @method Models\CheckProxyCreateResponse CheckProxyCreate(Models\CheckProxyCreateRequest $req) This API (CheckProxyCreate) is used to query whether an acceleration connection with the specified configuration can be created.
 * @method Models\CloseProxiesResponse CloseProxies(Models\CloseProxiesRequest $req) This API (CloseProxies) is used to disable connections. If disabled, no traffic will be generated, but the basic configuration fee will still be incurred.
 * @method Models\CloseProxyGroupResponse CloseProxyGroup(Models\CloseProxyGroupRequest $req) This API is used to disable a connection group. Once disabled, the connection group will no longer generate traffic, but the basic connection configuration fees will still be incurred every day.
 * @method Models\CloseSecurityPolicyResponse CloseSecurityPolicy(Models\CloseSecurityPolicyRequest $req) This API is used to disable a security policy.
 * @method Models\CreateCertificateResponse CreateCertificate(Models\CreateCertificateRequest $req) This API (CreateCertificate) is used to create the GAAP certificates and configuration files, including basic authentication configuration files, client CA certificates, server SSL certificates, GAAP SSL certificates, and origin server CA certificates.
 * @method Models\CreateCustomHeaderResponse CreateCustomHeader(Models\CreateCustomHeaderRequest $req) This API is used to create a custom header of the HTTP/HTTPS listener. When client requests reach the listener, they will be forwarded to the origin with this custom hearer.
 * @method Models\CreateDomainResponse CreateDomain(Models\CreateDomainRequest $req) This API (CreateDomain) is used to create the access domain name for the HTTP/HTTPS listener. Clients request the backend data by accessing this domain.
This API only supports connections of version 3.0.
 * @method Models\CreateDomainErrorPageInfoResponse CreateDomainErrorPageInfo(Models\CreateDomainErrorPageInfoRequest $req) This API is used to customize the error code of an error response to the specified domain name.
 * @method Models\CreateHTTPListenerResponse CreateHTTPListener(Models\CreateHTTPListenerRequest $req) This API (CreateHTTPListener) is used to create an HTTP listener in the connection instance.
 * @method Models\CreateHTTPSListenerResponse CreateHTTPSListener(Models\CreateHTTPSListenerRequest $req) This API (CreateHTTPListener) is used to create an HTTPS listener in the connection instance.
 * @method Models\CreateProxyResponse CreateProxy(Models\CreateProxyRequest $req) This API is used to create/replicate an acceleration connection with the specified configuration. To replicate a connection, the basic configuration parameters need to be set for the new connection, and `ClonedProxyId` is needed to identify the replicated connection.
 * @method Models\CreateProxyGroupResponse CreateProxyGroup(Models\CreateProxyGroupRequest $req) This API (CreateProxyGroup) is used to create a connection group.
 * @method Models\CreateProxyGroupDomainResponse CreateProxyGroupDomain(Models\CreateProxyGroupDomainRequest $req) This API (CreateProxyGroupDomain) is used to create the connection group domain name, and enable the domain name resolution.
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) This API (CreateRule) is used to create the forwarding rules of HTTP/HTTPS listeners.
 * @method Models\CreateSecurityPolicyResponse CreateSecurityPolicy(Models\CreateSecurityPolicyRequest $req) This API is used to create security policies.
 * @method Models\CreateSecurityRulesResponse CreateSecurityRules(Models\CreateSecurityRulesRequest $req) This API is used to add security policy rules.
 * @method Models\CreateTCPListenersResponse CreateTCPListeners(Models\CreateTCPListenersRequest $req) This API (CreateTCPListeners) is used to batch create TCP listeners of single connections or connection groups.
 * @method Models\CreateUDPListenersResponse CreateUDPListeners(Models\CreateUDPListenersRequest $req) This API (CreateTCPListeners) is used to batch create UDP listeners of single connections or connection groups.
 * @method Models\DeleteCertificateResponse DeleteCertificate(Models\DeleteCertificateRequest $req) This API is used to delete a certificate.
 * @method Models\DeleteDomainResponse DeleteDomain(Models\DeleteDomainRequest $req) This API (DeleteDomain) is only applicable to layer-7 listeners. It is used to delete the domain names of this listener, and all the rules under the domain name. All rules bound to the origin server are unbound automatically.
 * @method Models\DeleteDomainErrorPageInfoResponse DeleteDomainErrorPageInfo(Models\DeleteDomainErrorPageInfoRequest $req) This API is used to delete a custom error code for a domain name.
 * @method Models\DeleteListenersResponse DeleteListeners(Models\DeleteListenersRequest $req) This API (DeleteListeners) is used to batch delete the listeners of a connection or connection group, including layer-4/7 listeners.
 * @method Models\DeleteProxyGroupResponse DeleteProxyGroup(Models\DeleteProxyGroupRequest $req) This API (DeleteProxyGroup) is used to delete a connection group.
 * @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) This API (DeleteRule) is used to delete the forwarding rules of HTTP/HTTPS listeners.
 * @method Models\DeleteSecurityPolicyResponse DeleteSecurityPolicy(Models\DeleteSecurityPolicyRequest $req) This API is used to delete a security policy.
 * @method Models\DeleteSecurityRulesResponse DeleteSecurityRules(Models\DeleteSecurityRulesRequest $req) This API is used to delete security policy rules.
 * @method Models\DescribeAccessRegionsResponse DescribeAccessRegions(Models\DescribeAccessRegionsRequest $req) This API (DescribeAccessRegions) is used to query acceleration region (client access region).
 * @method Models\DescribeAccessRegionsByDestRegionResponse DescribeAccessRegionsByDestRegion(Models\DescribeAccessRegionsByDestRegionRequest $req) This API is used to query the available accelerator region based on the origin server region.
 * @method Models\DescribeAuthSignatureResponse DescribeAuthSignature(Models\DescribeAuthSignatureRequest $req) This API is used to get a request signature that can prevent parameter tampering in the process of triggering orders, getting quotes, or activating subscription services.
 * @method Models\DescribeBlackHeaderResponse DescribeBlackHeader(Models\DescribeBlackHeaderRequest $req) This API is used to query names of blocked custom headers.
 * @method Models\DescribeCertificateDetailResponse DescribeCertificateDetail(Models\DescribeCertificateDetailRequest $req) This API (DescribeCertificateDetail) is used to query certificate details, including the certificate ID, name, type, content, key, and other information.
 * @method Models\DescribeCertificatesResponse DescribeCertificates(Models\DescribeCertificatesRequest $req) This API (DescribeCertificates) is used to query the list of available certificates.
 * @method Models\DescribeCountryAreaMappingResponse DescribeCountryAreaMapping(Models\DescribeCountryAreaMappingRequest $req) This API (DescribeCountryAreaMapping) is used to obtain the country/region code mapping table.
 * @method Models\DescribeCustomHeaderResponse DescribeCustomHeader(Models\DescribeCustomHeaderRequest $req) This API is used to query the list of custom headers.
 * @method Models\DescribeDestRegionsResponse DescribeDestRegions(Models\DescribeDestRegionsRequest $req) This API (DescribeDestRegions) is used to query an origin server region (i.e., the region in which the origin server locates).
 * @method Models\DescribeDomainErrorPageInfoResponse DescribeDomainErrorPageInfo(Models\DescribeDomainErrorPageInfoRequest $req) This API is used to query the custom error response to a domain name.
 * @method Models\DescribeDomainErrorPageInfoByIdsResponse DescribeDomainErrorPageInfoByIds(Models\DescribeDomainErrorPageInfoByIdsRequest $req) This API is used to query the corresponding error response by a custom error ID.
 * @method Models\DescribeGroupAndStatisticsProxyResponse DescribeGroupAndStatisticsProxy(Models\DescribeGroupAndStatisticsProxyRequest $req) This is an internal API. It is used to query the information of connections and connection groups from which the statistics can be derived.
 * @method Models\DescribeGroupDomainConfigResponse DescribeGroupDomainConfig(Models\DescribeGroupDomainConfigRequest $req) This API (DescribeGroupDomainConfig) is used to obtain the domain name resolution configuration details of a connection group.
 * @method Models\DescribeHTTPListenersResponse DescribeHTTPListeners(Models\DescribeHTTPListenersRequest $req) This API (DescribeHTTPListeners) is used to query HTTP listener information.
 * @method Models\DescribeHTTPSListenersResponse DescribeHTTPSListeners(Models\DescribeHTTPSListenersRequest $req) This API (DescribeHTTPSListeners) is used to query HTTPS listener information.
 * @method Models\DescribeListenerRealServersResponse DescribeListenerRealServers(Models\DescribeListenerRealServersRequest $req) This API (DescribeListenerRealServers) is used to query the origin server list of TCP/UDP listeners, including the list of bound origin servers and origin servers that can be bound.
 * @method Models\DescribeListenerStatisticsResponse DescribeListenerStatistics(Models\DescribeListenerStatisticsRequest $req) This API is used to query listener statistics, including inbound/outbound bandwidth, inbound/outbound packets, and concurrence data. It supports granularities of 300, 3,600, and 86,400. Default value is the highest within the granularity range.
 * @method Models\DescribeProxiesResponse DescribeProxies(Models\DescribeProxiesRequest $req) This API (DescribeProxies) is used to query the connection instance list.
 * @method Models\DescribeProxiesStatusResponse DescribeProxiesStatus(Models\DescribeProxiesStatusRequest $req) This API (DescribeProxiesStatus) is used to query the connection status list.
 * @method Models\DescribeProxyAndStatisticsListenersResponse DescribeProxyAndStatisticsListeners(Models\DescribeProxyAndStatisticsListenersRequest $req) This is an internal API. It is used to query the information of connections and listeners from which the statistics can be derived.
 * @method Models\DescribeProxyDetailResponse DescribeProxyDetail(Models\DescribeProxyDetailRequest $req) This API (DescribeProxyDetail) is used to query connection details.
 * @method Models\DescribeProxyGroupDetailsResponse DescribeProxyGroupDetails(Models\DescribeProxyGroupDetailsRequest $req) This API (DescribeProxyGroupDetails) is used to query connection group details.
 * @method Models\DescribeProxyGroupListResponse DescribeProxyGroupList(Models\DescribeProxyGroupListRequest $req) This API (DescribeProxyGroupList) is used to pull the list of connection groups and the basic information of each connection group.
 * @method Models\DescribeProxyGroupStatisticsResponse DescribeProxyGroupStatistics(Models\DescribeProxyGroupStatisticsRequest $req) This API is used to query listener statistics, including inbound/outbound bandwidth, inbound/outbound packets, and concurrence data. It supports granularities of 300, 3,600, and 86,400. Default value is the highest within the granularity range.
 * @method Models\DescribeProxyStatisticsResponse DescribeProxyStatistics(Models\DescribeProxyStatisticsRequest $req) This API is used to query listener statistics, including inbound/outbound bandwidth, inbound/outbound packets, concurrence, packet loss, and latency data. It supports granularities of 300, 3,600, and 86,400. Default value is the highest within the granularity range.
 * @method Models\DescribeRealServerStatisticsResponse DescribeRealServerStatistics(Models\DescribeRealServerStatisticsRequest $req) This API is used to query the statistics of an origin server's health check results. Origin server status is displayed as 1 (normal) or 0 (exceptional). The queried origin server must be bound to a listener or rule, and the ID of the bound listener or rule must be specified for the query. This API supports displaying origin server status statistics at a 1-minute granularity.
 * @method Models\DescribeRealServersResponse DescribeRealServers(Models\DescribeRealServersRequest $req) This API is used to query origin server information. It can query all origin servers under the specified project name, and supports fuzzy query by specified IPs or domain names.
 * @method Models\DescribeRealServersStatusResponse DescribeRealServersStatus(Models\DescribeRealServersStatusRequest $req) This API (DescribeRealServersStatus) is used to query whether an origin server has been bound to a rule or listener.
 * @method Models\DescribeRegionAndPriceResponse DescribeRegionAndPrice(Models\DescribeRegionAndPriceRequest $req) This API (DescribeRegionAndPrice) is used to obtain the origin server regions and the bandwidth price gradient.
 * @method Models\DescribeResourcesByTagResponse DescribeResourcesByTag(Models\DescribeResourcesByTagRequest $req) This API (DescribeResourcesByTag) is used to query corresponding resource information by tags, including connection, connection group, and origin server.
 * @method Models\DescribeRuleRealServersResponse DescribeRuleRealServers(Models\DescribeRuleRealServersRequest $req) This API (DescribeRuleRealServers) is used to query forwarding rules-related origin server information, including information of origin servers that can be bound and have been bound.
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) This API (DescribeRules) is used to query all rule information of a listener, including the domain names, paths, and list of bound origin servers. For version 3.0 connections, this API returns the advanced authentication configuration information of the domain name.
 * @method Models\DescribeRulesByRuleIdsResponse DescribeRulesByRuleIds(Models\DescribeRulesByRuleIdsRequest $req) This API is used to pull the list of rules based on rule ID. It supports pulling 1 to 10 rules at a time.
 * @method Models\DescribeSecurityPolicyDetailResponse DescribeSecurityPolicyDetail(Models\DescribeSecurityPolicyDetailRequest $req) This API is used to obtain security policy details.
 * @method Models\DescribeSecurityRulesResponse DescribeSecurityRules(Models\DescribeSecurityRulesRequest $req) This API is used to query the list of security rules based on security rule ID. It supports querying 1 to 20 security rules at a time.
 * @method Models\DescribeTCPListenersResponse DescribeTCPListeners(Models\DescribeTCPListenersRequest $req) This API (DescribeTCPListeners) is used to query the TCP listener information of a single connection or connection group.
 * @method Models\DescribeUDPListenersResponse DescribeUDPListeners(Models\DescribeUDPListenersRequest $req) This API (DescribeUDPListeners) is used to query the UDP listener information of a single connection or connection group.
 * @method Models\DestroyProxiesResponse DestroyProxies(Models\DestroyProxiesRequest $req) This API (DestroyProxies) is used to terminate a connection. If terminated, no fees will be incurred.
 * @method Models\InquiryPriceCreateProxyResponse InquiryPriceCreateProxy(Models\InquiryPriceCreateProxyRequest $req) This API (InquiryPriceCreateProxy) is used to create the price inquiries of acceleration connections.
 * @method Models\ModifyCertificateResponse ModifyCertificate(Models\ModifyCertificateRequest $req) This API (ModifyCertificate) is used to modify a domain name certificate of a listener. domain name certificate. This API is only applicable to connections of version 3.0.
 * @method Models\ModifyCertificateAttributesResponse ModifyCertificateAttributes(Models\ModifyCertificateAttributesRequest $req) This API is used to modify certificate name and content.
 * @method Models\ModifyDomainResponse ModifyDomain(Models\ModifyDomainRequest $req) This API (ModifyDomain) is used to modify domain names of listeners. For connections of version 3.0, it supports modifying certificates of the domain names.
 * @method Models\ModifyGroupDomainConfigResponse ModifyGroupDomainConfig(Models\ModifyGroupDomainConfigRequest $req) This API (ModifyGroupDomainConfig) is used to configure the nearest access domain name of a connection group.
 * @method Models\ModifyHTTPListenerAttributeResponse ModifyHTTPListenerAttribute(Models\ModifyHTTPListenerAttributeRequest $req) This API (ModifyHTTPListenerAttribute) is used to modify the HTTP listener configuration information of a connection. Currently only supports modifying listener name.
Note: Grouped connections currently do not support HTTP/HTTPS listeners.
 * @method Models\ModifyHTTPSListenerAttributeResponse ModifyHTTPSListenerAttribute(Models\ModifyHTTPSListenerAttributeRequest $req) This API (ModifyHTTPSListenerAttribute) is used to modify HTTPS listener configurations. It currently do not support connection groups and connections of version 1.0.
 * @method Models\ModifyProxiesAttributeResponse ModifyProxiesAttribute(Models\ModifyProxiesAttributeRequest $req) This API (ModifyProxiesAttribute) is used to modify instance attributes (currently only supports modifying connection name).
 * @method Models\ModifyProxiesProjectResponse ModifyProxiesProject(Models\ModifyProxiesProjectRequest $req) This API (ModifyProxiesProject) is used to modify the project to which a connection belongs.
 * @method Models\ModifyProxyConfigurationResponse ModifyProxyConfiguration(Models\ModifyProxyConfigurationRequest $req) This API (ModifyProxyConfiguration) is used to modify connection configurations. You can expand or reduce the capacity based on current business requirements. It only supports connections with a Scalarable of 1. Scalarable can be obtained via DescribeProxies API.
 * @method Models\ModifyProxyGroupAttributeResponse ModifyProxyGroupAttribute(Models\ModifyProxyGroupAttributeRequest $req) This API (ModifyProxyGroupAttribute) is used to modify connection group attributes. It currently only supports modifying connection group name.
 * @method Models\ModifyRealServerNameResponse ModifyRealServerName(Models\ModifyRealServerNameRequest $req) This API (ModifyRealServerName) is used to modify origin server names.
 * @method Models\ModifyRuleAttributeResponse ModifyRuleAttribute(Models\ModifyRuleAttributeRequest $req) This API (ModifyRuleAttribute) is used to modify forwarding rule information, including health check configuration and forwarding policies.
 * @method Models\ModifySecurityRuleResponse ModifySecurityRule(Models\ModifySecurityRuleRequest $req) This API is used to modify security policy rule names.
 * @method Models\ModifyTCPListenerAttributeResponse ModifyTCPListenerAttribute(Models\ModifyTCPListenerAttributeRequest $req) This API (ModifyTCPListenerAttribute) is used to modify the TCP listener configuration of a connection instance, including health check configuration and scheduling policies.
 * @method Models\ModifyUDPListenerAttributeResponse ModifyUDPListenerAttribute(Models\ModifyUDPListenerAttributeRequest $req) This API (ModifyUDPListenerAttribute) is used to modify the UDP listener configuration of a connection instance, including modification of listener names and scheduling policies.
 * @method Models\OpenProxiesResponse OpenProxies(Models\OpenProxiesRequest $req) This API (OpenProxies) is used to enable one or more connections.
 * @method Models\OpenProxyGroupResponse OpenProxyGroup(Models\OpenProxyGroupRequest $req) This API is used to enable all connections in a connection group.
 * @method Models\OpenSecurityPolicyResponse OpenSecurityPolicy(Models\OpenSecurityPolicyRequest $req) This API is used to enable a security policy.
 * @method Models\RemoveRealServersResponse RemoveRealServers(Models\RemoveRealServersRequest $req) This API is used to delete the added origin server (server) IP or domain name.
 * @method Models\SetAuthenticationResponse SetAuthentication(Models\SetAuthenticationRequest $req) This API (SetAuthentication) is used for the advanced authentication configuration of connections, including authentication methods and their certificates. If only supports connections of version 3.0.
 */

class GaapClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "gaap.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "gaap";

    /**
     * @var string
     */
    protected $version = "2018-05-29";

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
        $respClass = "TencentCloud"."\\".ucfirst("gaap")."\\"."V20180529\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
