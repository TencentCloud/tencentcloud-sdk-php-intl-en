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

namespace TencentCloud\Tse\V20201207;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tse\V20201207\Models as Models;

/**
 * @method Models\BindAutoScalerResourceStrategyToGroupsResponse BindAutoScalerResourceStrategyToGroups(Models\BindAutoScalerResourceStrategyToGroupsRequest $req) Bind auto scaling policies to gateway groupings in batch
 * @method Models\CloseWafProtectionResponse CloseWafProtection(Models\CloseWafProtectionRequest $req) Disables WAF protection
 * @method Models\CreateAutoScalerResourceStrategyResponse CreateAutoScalerResourceStrategy(Models\CreateAutoScalerResourceStrategyRequest $req) Create AS policy
 * @method Models\CreateCloudNativeAPIGatewayResponse CreateCloudNativeAPIGateway(Models\CreateCloudNativeAPIGatewayRequest $req) Create a cloud native API gateway instance
 * @method Models\CreateCloudNativeAPIGatewayCanaryRuleResponse CreateCloudNativeAPIGatewayCanaryRule(Models\CreateCloudNativeAPIGatewayCanaryRuleRequest $req) Create a grayscale rule for the cloud-native gateway
 * @method Models\CreateCloudNativeAPIGatewayCertificateResponse CreateCloudNativeAPIGatewayCertificate(Models\CreateCloudNativeAPIGatewayCertificateRequest $req) This API is used to create a cloud-native gateway certificate
 * @method Models\CreateCloudNativeAPIGatewayPublicNetworkResponse CreateCloudNativeAPIGatewayPublicNetwork(Models\CreateCloudNativeAPIGatewayPublicNetworkRequest $req) Create a public network configuration
 * @method Models\CreateCloudNativeAPIGatewayRouteResponse CreateCloudNativeAPIGatewayRoute(Models\CreateCloudNativeAPIGatewayRouteRequest $req) This API is used to create a cloud-native gateway route.
 * @method Models\CreateCloudNativeAPIGatewayRouteRateLimitResponse CreateCloudNativeAPIGatewayRouteRateLimit(Models\CreateCloudNativeAPIGatewayRouteRateLimitRequest $req) This API is used to create a cloud-native gateway traffic throttling plugin.
 * @method Models\CreateCloudNativeAPIGatewayServiceResponse CreateCloudNativeAPIGatewayService(Models\CreateCloudNativeAPIGatewayServiceRequest $req) Create a cloud-native gateway service
 * @method Models\CreateCloudNativeAPIGatewayServiceRateLimitResponse CreateCloudNativeAPIGatewayServiceRateLimit(Models\CreateCloudNativeAPIGatewayServiceRateLimitRequest $req) This API is used to create a traffic throttling plugin for a cloud-native gateway
 * @method Models\CreateGovernanceLaneGroupsResponse CreateGovernanceLaneGroups(Models\CreateGovernanceLaneGroupsRequest $req) Create a lane group
 * @method Models\CreateNativeGatewayServerGroupResponse CreateNativeGatewayServerGroup(Models\CreateNativeGatewayServerGroupRequest $req) Create a Cloud Native Gateway Engine group
 * @method Models\CreateNativeGatewayServiceSourceResponse CreateNativeGatewayServiceSource(Models\CreateNativeGatewayServiceSourceRequest $req) Create a gateway service source
 * @method Models\CreateOrModifyCloudNativeAPIGatewayCORSResponse CreateOrModifyCloudNativeAPIGatewayCORS(Models\CreateOrModifyCloudNativeAPIGatewayCORSRequest $req) Create or edit a cloud-native gateway cross-domain configuration
 * @method Models\CreateWafDomainsResponse CreateWafDomains(Models\CreateWafDomainsRequest $req) Create a WAF-protected domain name
 * @method Models\DeleteAutoScalerResourceStrategyResponse DeleteAutoScalerResourceStrategy(Models\DeleteAutoScalerResourceStrategyRequest $req) Delete AS policy
 * @method Models\DeleteCloudNativeAPIGatewayResponse DeleteCloudNativeAPIGateway(Models\DeleteCloudNativeAPIGatewayRequest $req) Delete a cloud native API gateway instance
 * @method Models\DeleteCloudNativeAPIGatewayCORSResponse DeleteCloudNativeAPIGatewayCORS(Models\DeleteCloudNativeAPIGatewayCORSRequest $req) This API is used to delete a cloud-native gateway cross-domain plug-in.
 * @method Models\DeleteCloudNativeAPIGatewayCanaryRuleResponse DeleteCloudNativeAPIGatewayCanaryRule(Models\DeleteCloudNativeAPIGatewayCanaryRuleRequest $req) This API is used to delete the grayscale rule of the cloud-native gateway.
 * @method Models\DeleteCloudNativeAPIGatewayCertificateResponse DeleteCloudNativeAPIGatewayCertificate(Models\DeleteCloudNativeAPIGatewayCertificateRequest $req) This API is used to delete a cloud-native gateway cert.
 * @method Models\DeleteCloudNativeAPIGatewayPublicNetworkResponse DeleteCloudNativeAPIGatewayPublicNetwork(Models\DeleteCloudNativeAPIGatewayPublicNetworkRequest $req) Delete public network configuration
 * @method Models\DeleteCloudNativeAPIGatewayRouteResponse DeleteCloudNativeAPIGatewayRoute(Models\DeleteCloudNativeAPIGatewayRouteRequest $req) Delete a cloud-native gateway route
 * @method Models\DeleteCloudNativeAPIGatewayRouteRateLimitResponse DeleteCloudNativeAPIGatewayRouteRateLimit(Models\DeleteCloudNativeAPIGatewayRouteRateLimitRequest $req) This API is used to delete a traffic throttling plugin of a cloud-native gateway (Route).
 * @method Models\DeleteCloudNativeAPIGatewayServiceResponse DeleteCloudNativeAPIGatewayService(Models\DeleteCloudNativeAPIGatewayServiceRequest $req) This API is used to delete a cloud-native gateway service.
 * @method Models\DeleteCloudNativeAPIGatewayServiceRateLimitResponse DeleteCloudNativeAPIGatewayServiceRateLimit(Models\DeleteCloudNativeAPIGatewayServiceRateLimitRequest $req) This API is used to delete the traffic throttling plugin of a cloud-native gateway (Service).
 * @method Models\DeleteGovernanceLaneGroupsResponse DeleteGovernanceLaneGroups(Models\DeleteGovernanceLaneGroupsRequest $req) Delete a lane group
 * @method Models\DeleteNativeGatewayServerGroupResponse DeleteNativeGatewayServerGroup(Models\DeleteNativeGatewayServerGroupRequest $req) Delete a Gateway Instance Group
 * @method Models\DeleteNativeGatewayServiceSourceResponse DeleteNativeGatewayServiceSource(Models\DeleteNativeGatewayServiceSourceRequest $req) Delete a gateway service source instance
 * @method Models\DeleteWafDomainsResponse DeleteWafDomains(Models\DeleteWafDomainsRequest $req) Delete a WAF-protected domain name
 * @method Models\DescribeAutoScalerResourceStrategiesResponse DescribeAutoScalerResourceStrategies(Models\DescribeAutoScalerResourceStrategiesRequest $req) View AS policy list
 * @method Models\DescribeAutoScalerResourceStrategyBindingGroupsResponse DescribeAutoScalerResourceStrategyBindingGroups(Models\DescribeAutoScalerResourceStrategyBindingGroupsRequest $req) View gateway groupings bound to an auto scaling policy
 * @method Models\DescribeCloudNativeAPIGatewayResponse DescribeCloudNativeAPIGateway(Models\DescribeCloudNativeAPIGatewayRequest $req) This API is used to obtain cloud native API gateway instance information.
 * @method Models\DescribeCloudNativeAPIGatewayCORSResponse DescribeCloudNativeAPIGatewayCORS(Models\DescribeCloudNativeAPIGatewayCORSRequest $req) Query cloud-native gateway cross-domain configuration
 * @method Models\DescribeCloudNativeAPIGatewayCanaryRulesResponse DescribeCloudNativeAPIGatewayCanaryRules(Models\DescribeCloudNativeAPIGatewayCanaryRulesRequest $req) Query the grayscale rule list of the cloud-native gateway
 * @method Models\DescribeCloudNativeAPIGatewayCertificateDetailsResponse DescribeCloudNativeAPIGatewayCertificateDetails(Models\DescribeCloudNativeAPIGatewayCertificateDetailsRequest $req) Query the certificate detail of one cloud-native gateway
 * @method Models\DescribeCloudNativeAPIGatewayCertificatesResponse DescribeCloudNativeAPIGatewayCertificates(Models\DescribeCloudNativeAPIGatewayCertificatesRequest $req) Query the certificate list of the cloud-native gateway
 * @method Models\DescribeCloudNativeAPIGatewayConfigResponse DescribeCloudNativeAPIGatewayConfig(Models\DescribeCloudNativeAPIGatewayConfigRequest $req) This API is used to obtain cloud native API gateway instance network configuration information
 * @method Models\DescribeCloudNativeAPIGatewayInfoByIpResponse DescribeCloudNativeAPIGatewayInfoByIp(Models\DescribeCloudNativeAPIGatewayInfoByIpRequest $req) Query cloud native gateway instance information based on public IP address
 * @method Models\DescribeCloudNativeAPIGatewayNodesResponse DescribeCloudNativeAPIGatewayNodes(Models\DescribeCloudNativeAPIGatewayNodesRequest $req) This API is used to get a cloud-native gateway node list
 * @method Models\DescribeCloudNativeAPIGatewayPortsResponse DescribeCloudNativeAPIGatewayPorts(Models\DescribeCloudNativeAPIGatewayPortsRequest $req) Retrieve port information of a cloud native API gateway instance
 * @method Models\DescribeCloudNativeAPIGatewayRouteRateLimitResponse DescribeCloudNativeAPIGatewayRouteRateLimit(Models\DescribeCloudNativeAPIGatewayRouteRateLimitRequest $req) Query the traffic throttling plugin of a cloud-native gateway (Route).
 * @method Models\DescribeCloudNativeAPIGatewayRoutesResponse DescribeCloudNativeAPIGatewayRoutes(Models\DescribeCloudNativeAPIGatewayRoutesRequest $req) Query the routing list of the cloud-native gateway
 * @method Models\DescribeCloudNativeAPIGatewayServiceRateLimitResponse DescribeCloudNativeAPIGatewayServiceRateLimit(Models\DescribeCloudNativeAPIGatewayServiceRateLimitRequest $req) This API is used to query the traffic throttling plugin of a cloud-native gateway (Service).
 * @method Models\DescribeCloudNativeAPIGatewayServicesResponse DescribeCloudNativeAPIGatewayServices(Models\DescribeCloudNativeAPIGatewayServicesRequest $req) Query the service list of the cloud-native gateway
 * @method Models\DescribeCloudNativeAPIGatewayServicesLightResponse DescribeCloudNativeAPIGatewayServicesLight(Models\DescribeCloudNativeAPIGatewayServicesLightRequest $req) Lightweight query the service list of the cloud-native gateway
 * @method Models\DescribeCloudNativeAPIGatewayUpstreamResponse DescribeCloudNativeAPIGatewayUpstream(Models\DescribeCloudNativeAPIGatewayUpstreamRequest $req) This API is used to query the Upstream list in the service detail of a cloud-native gateway.
 * @method Models\DescribeCloudNativeAPIGatewaysResponse DescribeCloudNativeAPIGateways(Models\DescribeCloudNativeAPIGatewaysRequest $req) This API is used to obtain the cloud native API gateway instance list.
 * @method Models\DescribeGovernanceLaneGroupsResponse DescribeGovernanceLaneGroups(Models\DescribeGovernanceLaneGroupsRequest $req) Query lane group list
 * @method Models\DescribeNativeGatewayServerGroupsResponse DescribeNativeGatewayServerGroups(Models\DescribeNativeGatewayServerGroupsRequest $req) Query cloud native gateway group information
 * @method Models\DescribeNativeGatewayServiceSourcesResponse DescribeNativeGatewayServiceSources(Models\DescribeNativeGatewayServiceSourcesRequest $req) Query the instance list of the gateway service source
 * @method Models\DescribeOneCloudNativeAPIGatewayServiceResponse DescribeOneCloudNativeAPIGatewayService(Models\DescribeOneCloudNativeAPIGatewayServiceRequest $req) This API is used to obtain the service detail of the cloud-native gateway.
 * @method Models\DescribePublicAddressConfigResponse DescribePublicAddressConfig(Models\DescribePublicAddressConfigRequest $req) Query public IP address info
 * @method Models\DescribePublicNetworkResponse DescribePublicNetwork(Models\DescribePublicNetworkRequest $req) Query the public network details of a cloud native API gateway instance
 * @method Models\DescribeUpstreamHealthCheckConfigResponse DescribeUpstreamHealthCheckConfig(Models\DescribeUpstreamHealthCheckConfigRequest $req) This API is used to obtain the health check configuration of the cloud-native gateway service.
 * @method Models\DescribeWafDomainsResponse DescribeWafDomains(Models\DescribeWafDomainsRequest $req) Query a WAF-protected domain name
 * @method Models\DescribeWafProtectionResponse DescribeWafProtection(Models\DescribeWafProtectionRequest $req) Query WAF protection status
 * @method Models\ModifyAutoScalerResourceStrategyResponse ModifyAutoScalerResourceStrategy(Models\ModifyAutoScalerResourceStrategyRequest $req) Update AS policy
 * @method Models\ModifyCloudNativeAPIGatewayResponse ModifyCloudNativeAPIGateway(Models\ModifyCloudNativeAPIGatewayRequest $req) This API is used to modify the basic information of a cloud native API gateway instance.
 * @method Models\ModifyCloudNativeAPIGatewayCanaryRuleResponse ModifyCloudNativeAPIGatewayCanaryRule(Models\ModifyCloudNativeAPIGatewayCanaryRuleRequest $req) Modify the grayscale rule of the cloud-native gateway
 * @method Models\ModifyCloudNativeAPIGatewayCertificateResponse ModifyCloudNativeAPIGatewayCertificate(Models\ModifyCloudNativeAPIGatewayCertificateRequest $req) Update the cloud-native gateway certificate
 * @method Models\ModifyCloudNativeAPIGatewayRouteResponse ModifyCloudNativeAPIGatewayRoute(Models\ModifyCloudNativeAPIGatewayRouteRequest $req) This API is used to modify a cloud-native gateway route.
 * @method Models\ModifyCloudNativeAPIGatewayRouteRateLimitResponse ModifyCloudNativeAPIGatewayRouteRateLimit(Models\ModifyCloudNativeAPIGatewayRouteRateLimitRequest $req) This API is used to modify the traffic throttling plugin of a cloud-native gateway (Route).
 * @method Models\ModifyCloudNativeAPIGatewayServiceResponse ModifyCloudNativeAPIGatewayService(Models\ModifyCloudNativeAPIGatewayServiceRequest $req) Modify a cloud-native gateway service
 * @method Models\ModifyCloudNativeAPIGatewayServiceRateLimitResponse ModifyCloudNativeAPIGatewayServiceRateLimit(Models\ModifyCloudNativeAPIGatewayServiceRateLimitRequest $req) This API is used to modify the traffic throttling plugin of a cloud-native gateway (Service).
 * @method Models\ModifyConsoleNetworkResponse ModifyConsoleNetwork(Models\ModifyConsoleNetworkRequest $req) Modify the network configuration of the Konga gateway instance
 * @method Models\ModifyGovernanceLaneGroupsResponse ModifyGovernanceLaneGroups(Models\ModifyGovernanceLaneGroupsRequest $req) Create a lane group
 * @method Models\ModifyNativeGatewayServerGroupResponse ModifyNativeGatewayServerGroup(Models\ModifyNativeGatewayServerGroupRequest $req) Modify the basic information of a cloud native API gateway instance group
 * @method Models\ModifyNativeGatewayServiceSourceResponse ModifyNativeGatewayServiceSource(Models\ModifyNativeGatewayServiceSourceRequest $req) Modify the gateway service source
 * @method Models\ModifyNetworkAccessStrategyResponse ModifyNetworkAccessStrategy(Models\ModifyNetworkAccessStrategyRequest $req) Modify the access policy of the Kong cloud native API gateway instance to support allowlist or blocklist.
 * @method Models\ModifyNetworkBasicInfoResponse ModifyNetworkBasicInfo(Models\ModifyNetworkBasicInfoRequest $req) This API is used to modify the basic information of a cloud native API gateway instance network, such as bandwidth and description, as well as specification upgrade. Only modification of client public network or private network information is supported.
 * @method Models\ModifyUpstreamNodeStatusResponse ModifyUpstreamNodeStatus(Models\ModifyUpstreamNodeStatusRequest $req) Modify the node health status of the upstream instance for the cloud-native gateway
 * @method Models\OpenWafProtectionResponse OpenWafProtection(Models\OpenWafProtectionRequest $req) Enable WAF protection
 * @method Models\UnbindAutoScalerResourceStrategyFromGroupsResponse UnbindAutoScalerResourceStrategyFromGroups(Models\UnbindAutoScalerResourceStrategyFromGroupsRequest $req) Unbind gateway groupings in batch with auto scaling policy
 * @method Models\UpdateCloudNativeAPIGatewayCertificateInfoResponse UpdateCloudNativeAPIGatewayCertificateInfo(Models\UpdateCloudNativeAPIGatewayCertificateInfoRequest $req) Modify the certificate information of a cloud-native gateway
 * @method Models\UpdateCloudNativeAPIGatewaySpecResponse UpdateCloudNativeAPIGatewaySpec(Models\UpdateCloudNativeAPIGatewaySpecRequest $req) Modify the node specification information of a cloud native API gateway instance, such as node scaling or specification adjustment
 * @method Models\UpdateUpstreamHealthCheckConfigResponse UpdateUpstreamHealthCheckConfig(Models\UpdateUpstreamHealthCheckConfigRequest $req) This API is used to update the health check configuration of the cloud-native gateway.
 * @method Models\UpdateUpstreamTargetsResponse UpdateUpstreamTargets(Models\UpdateUpstreamTargetsRequest $req) Refresh the upstream instance list of the gateway, only supported for the IPList service type
 */

class TseClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tse.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tse";

    /**
     * @var string
     */
    protected $version = "2020-12-07";

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
        $respClass = "TencentCloud"."\\".ucfirst("tse")."\\"."V20201207\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
