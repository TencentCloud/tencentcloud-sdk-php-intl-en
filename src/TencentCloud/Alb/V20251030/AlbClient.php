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

namespace TencentCloud\Alb\V20251030;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Alb\V20251030\Models as Models;

/**
 * @method Models\AddTargetsToTargetGroupResponse AddTargetsToTargetGroup(Models\AddTargetsToTargetGroupRequest $req) Add a backend service in the target group.
 * @method Models\AssociateBandwidthPackageWithLoadBalancerResponse AssociateBandwidthPackageWithLoadBalancer(Models\AssociateBandwidthPackageWithLoadBalancerRequest $req) Bind a Bandwidth Package to an application CLB instance.
 * @method Models\AssociateListenerAdditionalCertificatesResponse AssociateListenerAdditionalCertificates(Models\AssociateListenerAdditionalCertificatesRequest $req) AssociateListenerAdditionalCertificates is an async API. The system returns a request ID, but the additional cert is not yet successfully added. The add task is still in progress in the system backend. You can call the DescribeListenerCertificates API to query the add status of the additional cert.
When HTTPS and QUIC listeners are in Associating status, it means certificate expansion is ongoing.
When HTTPS and QUIC listeners are in the Associated status, the extension cert is successfully added.
 * @method Models\CreateHealthCheckTemplateResponse CreateHealthCheckTemplate(Models\CreateHealthCheckTemplateRequest $req) This API is used to create a health check Template.
 * @method Models\CreateListenerResponse CreateListener(Models\CreateListenerRequest $req) This API is used to create a listener.
 * @method Models\CreateLoadBalancerResponse CreateLoadBalancer(Models\CreateLoadBalancerRequest $req) **CreateLoadBalancer** is an async API. The system returns an instance ID, but the application CLB instance is not created successfully yet, and the creation task is still in progress in the system backend. You can call [DescribeLoadBalancerDetail](https://www.tencentcloud.com/document/product/1311/84267) to query the creation status of the application CLB instance.
- When an application CLB instance is in the **Provisioning** status, it means the application CLB instance is being created.
-When an application CLB instance is in the **Active** status, the application CLB instance is successfully created.
 * @method Models\CreateRulesResponse CreateRules(Models\CreateRulesRequest $req) This API is used to create forwarding rules. It is an async API. After returning successfully, call the DescribeAsyncJobs API with the returned RequestID as an input parameter to check whether this task is successful.
A rule supports up to 10 forward Conditions and 5 forward Actions.
 * @method Models\CreateSecurityPolicyResponse CreateSecurityPolicy(Models\CreateSecurityPolicyRequest $req) Create a custom security policy for configuring the TLS protocol version and encryption suite of an HTTPS listener. With a security policy, you can flexibly control the security level of HTTPS communication between clients and load balancing.
 * @method Models\CreateTargetGroupResponse CreateTargetGroup(Models\CreateTargetGroupRequest $req) Target Group APIs
 * @method Models\DeleteHealthCheckTemplatesResponse DeleteHealthCheckTemplates(Models\DeleteHealthCheckTemplatesRequest $req) Deletes a health check Template
 * @method Models\DeleteListenerResponse DeleteListener(Models\DeleteListenerRequest $req) Delete a listener
 * @method Models\DeleteLoadBalancersResponse DeleteLoadBalancers(Models\DeleteLoadBalancersRequest $req) The **DeleteLoadBalancers** API is an async API. The system returns a request ID, but the application CLB instance is not yet deleted successfully. The deletion task is still in progress in the system backend. You can call [DescribeLoadBalancerDetail](https://www.tencentcloud.com/document/product/1311/84267) to query the deletion status of the application CLB instance.
- When an application CLB instance is in the **Deleting** status, it means the application CLB instance is being deleted.
-If the specified application CLB instance cannot be queried, the application CLB instance has been deleted successfully.
 * @method Models\DeleteRulesResponse DeleteRules(Models\DeleteRulesRequest $req) DeleteRules deletes forwarding rules. This is an async API. After returning successfully, call the DescribeAsyncJobs API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\DeleteSecurityPolicyResponse DeleteSecurityPolicy(Models\DeleteSecurityPolicyRequest $req) Delete one or more custom security policies. Before deletion, please ensure the policy hasn't been referenced by any HTTPS listener, otherwise the deletion will fail.
 * @method Models\DeleteTargetGroupsResponse DeleteTargetGroups(Models\DeleteTargetGroupsRequest $req) Delete a target group.
 * @method Models\DescribeAsyncJobsResponse DescribeAsyncJobs(Models\DescribeAsyncJobsRequest $req) Query API for async tasks
 * @method Models\DescribeHealthCheckTemplatesResponse DescribeHealthCheckTemplates(Models\DescribeHealthCheckTemplatesRequest $req) This API is used to query the health check template list.
 * @method Models\DescribeListenerCertificatesResponse DescribeListenerCertificates(Models\DescribeListenerCertificatesRequest $req) This API is used to query the list of certificates bound to a specified listener by instance id and listener id.
If `CertificateType` is set to `SVR`, the information of the extended server certificate and the default server certificate is returned.
If CertificateType is set to CA, the default CA certificate info is returned.
 * @method Models\DescribeListenerDetailResponse DescribeListenerDetail(Models\DescribeListenerDetailRequest $req) Queries details of one listener.
 * @method Models\DescribeListenerHealthStatusResponse DescribeListenerHealthStatus(Models\DescribeListenerHealthStatusRequest $req) Queries the health status of a listener.
 * @method Models\DescribeListenersResponse DescribeListeners(Models\DescribeListenersRequest $req) Queries the listener list
 * @method Models\DescribeLoadBalancerDetailResponse DescribeLoadBalancerDetail(Models\DescribeLoadBalancerDetailRequest $req) Queries detailed information of a specified load balancing instance.
 * @method Models\DescribeLoadBalancersResponse DescribeLoadBalancers(Models\DescribeLoadBalancersRequest $req) Query instance configuration.
 * @method Models\DescribeQuotaResponse DescribeQuota(Models\DescribeQuotaRequest $req) Queries the ALB quota configuration of the current account. It supports querying by quota type and allows you to pass a resource ID to query resource-level quotas. You can use DisplayFields to return the used amount and remaining available quantity as needed.
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) This API is used to query forwarding rules.
 * @method Models\DescribeSecurityPoliciesResponse DescribeSecurityPolicies(Models\DescribeSecurityPoliciesRequest $req) Queries the custom security policy list, supports filtering by security policy ID, name, or tag, and supports paging query.
 * @method Models\DescribeSecurityPolicyCapabilitiesResponse DescribeSecurityPolicyCapabilities(Models\DescribeSecurityPolicyCapabilitiesRequest $req) Query the security policy configuration capacity supported in the current region, including optional TLS protocol versions and the encryption suite list for each version. Before creating or modifying a custom security policy, call this API to get available configuration options.
 * @method Models\DescribeSecurityPolicyRelationsResponse DescribeSecurityPolicyRelations(Models\DescribeSecurityPolicyRelationsRequest $req) Query the relationship between a security policy and the HTTPS listeners that refer to it. Before deleting or modifying a security policy, it is advisable to call this API to confirm the impact.
 * @method Models\DescribeSystemSecurityPoliciesResponse DescribeSystemSecurityPolicies(Models\DescribeSystemSecurityPoliciesRequest $req) Queries system security policies.
 * @method Models\DescribeTargetGroupTargetsResponse DescribeTargetGroupTargets(Models\DescribeTargetGroupTargetsRequest $req) Queries backend services in the target group.
 * @method Models\DescribeTargetGroupsResponse DescribeTargetGroups(Models\DescribeTargetGroupsRequest $req) Query the target group list.
 * @method Models\DescribeTargetGroupsByTargetResponse DescribeTargetGroupsByTarget(Models\DescribeTargetGroupsByTargetRequest $req) Query bound target groups based on the slave machine.
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) Querying Availability Zones
 * @method Models\DisassociateBandwidthPackageFromLoadBalancerResponse DisassociateBandwidthPackageFromLoadBalancer(Models\DisassociateBandwidthPackageFromLoadBalancerRequest $req) Unbind a Bandwidth Package from an application CLB instance.
 * @method Models\DisassociateListenerAdditionalCertificatesResponse DisassociateListenerAdditionalCertificates(Models\DisassociateListenerAdditionalCertificatesRequest $req) DisassociateListenerAdditionalCertificates is an async API. The system returns a request ID, but the additional cert is not yet unbound. The unbinding task is still in progress in the system backend. You can call the DescribeListenerCertificates API to query the cert unbinding status. If the cert is in Disassociating status, it is being unbound.
 * @method Models\InquirePriceCreateLoadBalancerResponse InquirePriceCreateLoadBalancer(Models\InquirePriceCreateLoadBalancerRequest $req) This API is used to query the price for creating a load balancer.
 * @method Models\ModifyHealthCheckTemplateResponse ModifyHealthCheckTemplate(Models\ModifyHealthCheckTemplateRequest $req) Modify a health check template
 * @method Models\ModifyListenerAttributesResponse ModifyListenerAttributes(Models\ModifyListenerAttributesRequest $req) Modifies listener properties.
 * @method Models\ModifyLoadBalancerAddressTypeResponse ModifyLoadBalancerAddressType(Models\ModifyLoadBalancerAddressTypeRequest $req) **Prerequisite:**
You have created an application CLB instance. For detailed operations, please see CreateLoadBalancer.
When you need to change the network type of an application CLB instance from private network to public network through this API, you need to create an Elastic IP first.
**Instructions:**
The ModifyLoadBalancerAddressType API is an async API. The system returns a request ID, but the network type of the application CLB instance has not been changed yet. The change task is still in progress in the system backend. You can call DescribeLoadBalancerDetail to query the change status of the network type of the application CLB instance.
When an application CLB instance is in the Configuring status, it means the network type of the instance is changing.
When an application CLB instance is in the Active status, the network type change of the instance is successful.
 * @method Models\ModifyLoadBalancerAttributesResponse ModifyLoadBalancerAttributes(Models\ModifyLoadBalancerAttributesRequest $req) The **ModifyLoadBalancerAttributes** API is an async API. It returns a request ID, but the application CLB instance attribute has not been modified yet. The modifying task is still in progress in the system backend. You can call [DescribeLoadBalancerDetail](https://www.tencentcloud.com/document/product/1311/84267) to query the modification status of the application CLB instance attribute.
-When the application CLB instance attribute is in the **Configuring** status, it means the application CLB instance attribute is being modified.
- When the application CLB instance attribute is in the **Active** status, it means the application CLB instance attribute was modified successfully.
 * @method Models\ModifyLoadBalancerModificationProtectionResponse ModifyLoadBalancerModificationProtection(Models\ModifyLoadBalancerModificationProtectionRequest $req) Set load balancing instance modification protection.
 * @method Models\ModifyRulesAttributesResponse ModifyRulesAttributes(Models\ModifyRulesAttributesRequest $req) This API is used to modify forwarding rule attributes. This is an async API. After the API return succeeds, you can call the DescribeAsyncJobs API with the returned RequestID as an input parameter to check whether this task is successful.
A rule supports up to 10 forward Conditions and 5 forward Actions.
 * @method Models\ModifySecurityPolicyAttributesResponse ModifySecurityPolicyAttributes(Models\ModifySecurityPolicyAttributesRequest $req) Modify the properties of a custom security policy, including the policy name, TLS protocol version, and encryption suite. The modified configuration will be applied to all HTTPS listeners associated with this policy immediately.
 * @method Models\ModifyTargetGroupAttributesResponse ModifyTargetGroupAttributes(Models\ModifyTargetGroupAttributesRequest $req) Modify the target group.
 * @method Models\ModifyTargetsInTargetGroupResponse ModifyTargetsInTargetGroup(Models\ModifyTargetsInTargetGroupRequest $req) Modifies backend service information in the target group.
 * @method Models\NotifyUnbindTargetResponse NotifyUnbindTarget(Models\NotifyUnbindTargetRequest $req) Notify load balancing to unbind real servers
 * @method Models\RemoveTargetsFromTargetGroupResponse RemoveTargetsFromTargetGroup(Models\RemoveTargetsFromTargetGroupRequest $req) Removes a backend service from the target group
 * @method Models\SetLoadBalancerSecurityGroupsResponse SetLoadBalancerSecurityGroups(Models\SetLoadBalancerSecurityGroupsRequest $req) The SetLoadBalancerSecurityGroups API supports setting (binding and unbinding) security groups for a public network load balancing instance. To query the security groups currently bound to a load balancing instance, use the DescribeLoadBalancerDetail API (https://www.tencentcloud.com/document/api/1822/133711?from_cn_redirect=1). This API uses SET semantics.
For the binding operation, input parameters need to be passed in for all security groups that should be bound to the load balancing instance (bound + new binding).
During unbinding, input parameters need to pass in all security groups bound to a CLB instance after unbinding. To unbind all security groups, omit this parameter or specify an empty array.
 */

class AlbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "alb.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "alb";

    /**
     * @var string
     */
    protected $version = "2025-10-30";

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
        $respClass = "TencentCloud"."\\".ucfirst("alb")."\\"."V20251030\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
