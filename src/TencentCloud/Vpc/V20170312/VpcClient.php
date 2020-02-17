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

namespace TencentCloud\Vpc\V20170312;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Vpc\V20170312\Models as Models;

/**
* @method Models\AcceptAttachCcnInstancesResponse AcceptAttachCcnInstances(Models\AcceptAttachCcnInstancesRequest $req) This API (AcceptAttachCcnInstances) is used to associate instances across accounts. Cloud Connect Network (CCN) owners accept and agree to the operations.
* @method Models\AllocateAddressesResponse AllocateAddresses(Models\AllocateAddressesRequest $req) This API is used to apply for one or more [Elastic IP Addresses](https://cloud.tencent.com/document/product/213/1941) (EIPs for short).
* An EIP is a static IP address that is dedicated for dynamic cloud computing. You can quickly re-map an EIP to another instance under your account to protect against instance failures.
* Your EIP is associated with your Tencent Cloud account rather than an instance. It remains associated with your Tencent Cloud account until you choose to explicitly release it or your account is in arrears for more than 24 hours.
* The maximum number of EIPs that can be applied for a Tencent Cloud account in each region is restricted. For more information, see [EIP Product Introduction](https://cloud.tencent.com/document/product/213/5733). You can get the quota information through the DescribeAddressQuota API.
* @method Models\AssignIpv6AddressesResponse AssignIpv6Addresses(Models\AssignIpv6AddressesRequest $req) This API (AssignIpv6Addresses) is used to apply for an IPv6 address for the ENI.<br />
This API is completed asynchronously. If you need to query the async execution results, use the `RequestId` returned by this API to query the `QueryTask` API.
* An ENI can only be bound with a limited number of IPs. For more information about resource limits, see<a href="/document/product/576/18527">ENI use limits</a>.
* You can specify the `IPv6` address when applying. The address type cannot be the primary `IP`. Currently, `IPv6` can only be supported as the secondary `IP`.
* The address must be unoccupied and is in the subnet to which the ENI belongs.
* When applying for one to multiple secondary `IPv6` addresses on ENI, the API will return the specified number of secondary `IPv6` addresses in the subnet range where the ENI is located.
* @method Models\AssignIpv6CidrBlockResponse AssignIpv6CidrBlock(Models\AssignIpv6CidrBlockRequest $req) This API is used to assign IPv6 ranges.
* To use this API, you must already have a VPC instance. If you do not have a VPC instance yet, use the <a href="https://cloud.tencent.com/document/api/215/15774" title="CreateVpc" target="_blank">CreateVpc</a> API to create one.
* Each VPC can apply for only one IPv6 range.
* @method Models\AssignIpv6SubnetCidrBlockResponse AssignIpv6SubnetCidrBlock(Models\AssignIpv6SubnetCidrBlockRequest $req) This API (AssignIpv6SubnetCidrBlock) is used to assign IPv6 subnet IP ranges.
* To assign an `IPv6` IP range to a subnet, the `VPC` that the subnet belongs to should have obtained the `IPv6` IP range. If this has not been assigned, use the `AssignIpv6CidrBlock` API to assign an `IPv6` IP range to the `VPC` to which the subnet belongs. Otherwise, the `IPv6` subnet IP range cannot be assigned.
* Each subnet can only be assigned one IPv6 IP range.
* @method Models\AssociateAddressResponse AssociateAddress(Models\AssociateAddressRequest $req) This API (AssociateAddress) is used to bind an [Elastic IP](https://cloud.tencent.com/document/product/213/1941) (EIP for short) to the specified private IP of an instance or ENI.
* Essentially, binding an EIP to an instance (CVM) means binding an EIP to the primary private IP of the primary ENI on an instance.
* When you bind an EIP to the primary private IP of the primary ENI, the previously bound public IP is automatically unbound and released.
* To bind the EIP to the private IP of the specified ENI (not the primary private IP of the primary ENI), you must unbind the EIP before you can bind a new one.
* To bind the EIP to a NAT gateway, use the API [EipBindNatGateway](https://cloud.tencent.com/document/product/215/4093)
* EIP that is in arrears or blocked cannot be bound.
* Only EIP in the UNBIND status can be bound.
* @method Models\AttachCcnInstancesResponse AttachCcnInstances(Models\AttachCcnInstancesRequest $req) This API (AttachCcnInstances) is used to load a network instance to a CCN instance. Network instances include VPCs and Direct Connect gateways.<br />
The number of network instances that each CCN can be associated with is limited. For more information, see the product documentation. If you need to associate more instances, please contact online customer service.
* @method Models\AttachClassicLinkVpcResponse AttachClassicLinkVpc(Models\AttachClassicLinkVpcRequest $req) This API (AttachClassicLinkVpc) is used to create a Classiclink between a VPC and a basic network device.
* The VPC and the basic network device must be in the same region.
* For the difference between VPCs and basic networks, see VPC product documentation-<a href="https://cloud.tencent.com/document/product/215/535#2.-.E7.A7.81.E6.9C.89.E7.BD.91.E7.BB.9C.E4.B8.8E.E5.9F.BA.E7.A1.80.E7.BD.91.E7.BB.9C">VPCs and basic networks</a>.
* @method Models\AttachNetworkInterfaceResponse AttachNetworkInterface(Models\AttachNetworkInterfaceRequest $req) This API (AttachNetworkInterface) is used to bind an ENI to a CVM.
* One CVM can be bound to multiple ENIs, but only one primary ENI. For more information on the limits, see <a href="https://cloud.tencent.com/document/product/215/6513">ENI use limits</a>.
* An ENI can only be bound to one CVM at a time.
* Only CVMs in running or shutdown status can be bound to an ENI. For more information about CVM status, see <a href="https://cloud.tencent.com/document/api/213/9452#instance_state">Tencent CVM information</a>.
* An ENI can only be bound to a CVM in VPC, and the CVM must reside in the same availability zone as the subnet of the ENI.
* @method Models\CheckNetDetectStateResponse CheckNetDetectState(Models\CheckNetDetectStateRequest $req) This API is used to verify the network detection status.
* @method Models\CreateAddressTemplateResponse CreateAddressTemplate(Models\CreateAddressTemplateRequest $req) This API (CreateAddressTemplate) is used to create an IP address template.
* @method Models\CreateAddressTemplateGroupResponse CreateAddressTemplateGroup(Models\CreateAddressTemplateGroupRequest $req) This API (CreateAddressTemplateGroup) is used to create an IP address template group.
* @method Models\CreateCcnResponse CreateCcn(Models\CreateCcnRequest $req) This API (CreateCcn) is used to create a Cloud Connect Network (CCN).<br />
Each account can only create a limited number of CCN instances. For more information, see the product documentation. If you need to create more instances, please contact the online customer service.
* @method Models\CreateDefaultVpcResponse CreateDefaultVpc(Models\CreateDefaultVpcRequest $req) This API is used to create a default VPC.

The default VPC is suitable for getting started with and launching public instances, and it can be used like any other VPCs. To create a standard VPC, for which you need to specify a VPC name, VPC IP range, subnet IP range, and subnet availability zone, use the regular CreateVpc API.

Under normal circumstances, this API may not create a default VPC. It depends on the network attributes (DescribeAccountAttributes) of your account.
* If both basic network and VPC are supported, the returned VpcId is 0.
* If only VPC is supported, the default VPC information is returned.

You can also use the Force parameter to forcibly return a default VPC.
* @method Models\CreateDirectConnectGatewayCcnRoutesResponse CreateDirectConnectGatewayCcnRoutes(Models\CreateDirectConnectGatewayCcnRoutesRequest $req) This API (CreateDirectConnectGatewayCcnRoutes) is used to create the CCN route (IDC IP range) of a Direct Connect gateway.
* @method Models\CreateHaVipResponse CreateHaVip(Models\CreateHaVipRequest $req) This API (CreateHaVip) is used to create a highly available virtual IP (HAVIP)
* @method Models\CreateNatGatewayResponse CreateNatGateway(Models\CreateNatGatewayRequest $req) This API (CreateNatGateway) is used to create a NAT gateway.
* @method Models\CreateNatGatewayDestinationIpPortTranslationNatRuleResponse CreateNatGatewayDestinationIpPortTranslationNatRule(Models\CreateNatGatewayDestinationIpPortTranslationNatRuleRequest $req) This API (CreateNatGatewayDestinationIpPortTranslationNatRule) is used to create a port forwarding rule for a NAT gateway.
* @method Models\CreateNetDetectResponse CreateNetDetect(Models\CreateNetDetectRequest $req) This API is used to create a network detection instance.
* @method Models\CreateNetworkInterfaceResponse CreateNetworkInterface(Models\CreateNetworkInterfaceRequest $req) This API is used to create one or more ENIs.
* You can specify private IP addresses and a primary IP when creating an ENI. The specified private IP must be in the same subnet as the ENI and is not occupied.
* When creating an ENI, you can specify the number of private IP addresses that you want to apply for. The system will randomly generate private IP addresses.
* An ENI can only be bound with a limited number of IP addresses. For more information about resource limits, see <a href="/document/product/576/18527">ENI Use Limits</a>.
* You can bind an existing security group when creating an ENI.
* You can bind a tag when creating an ENI. The tag list in the response indicates the tags that have been successfully added.
* @method Models\CreateRouteTableResponse CreateRouteTable(Models\CreateRouteTableRequest $req) This API (CreateRouteTable) is used to create a route table.
* After the VPC has been created, the system will create a default route table with which all newly created subnets will be associated. By default, you can use this route table to manage your routing policies. If you have multiple routing policies, you can call the API for creating route table to create more route tables to manage your routing policies.
* @method Models\CreateRoutesResponse CreateRoutes(Models\CreateRoutesRequest $req) This API (CreateRoutes) is used to create a routing policy.
* You can create routing policies in batch for a specified route table.
* @method Models\CreateSecurityGroupResponse CreateSecurityGroup(Models\CreateSecurityGroupRequest $req) This API (CreateSecurityGroup) is used to create security groups (SecurityGroup).
* <a href="https://cloud.tencent.com/document/product/213/500#2.-.E5.AE.89.E5.85.A8.E7.BB.84.E7.9A.84.E9.99.90.E5.88.B6">Security group limits</a> for each project in each region under each account.
* Both the inbound and outbound rules for a newly created security group are Deny All by default. You need to call CreateSecurityGroupPolicies to set the security group rules according to your needs.
* @method Models\CreateSecurityGroupPoliciesResponse CreateSecurityGroupPolicies(Models\CreateSecurityGroupPoliciesRequest $req) This API is used to create security group policies (SecurityGroupPolicy).

* The `Version` field indicates the version number of a security group policy, which will automatically increment by 1 every time you update the security policy, to prevent the expiration of the updated routing policies. If this field is left empty, any conflicts will be ignored.
* The value of the `Protocol` field can be TCP, UDP, ICMP, ICMPV6, GRE, or ALL.
* The `CidrBlock` field allows you to enter any string that conforms to the CIDR format. (More details) In a basic network, if a CidrBlock contains private IP addresses on Tencent Cloud for devices under your account other than CVMs, it does not mean this policy allows you to access these devices. The network isolation policies between tenants take priority over the private network policies in security groups.
* The `Ipv6CidrBlock` field allows you to enter any string that conforms to the IPv6 CIDR format. (More details) In a basic network, if an Ipv6CidrBlock contains private IPv6 addresses on Tencent Cloud for devices under your account other than CVMs, it does not mean this policy allows you to access these devices. The network isolation policies between tenants take priority over the private network policies in security groups.
* The SecurityGroupId field allows you to enter the IDs of security groups that are in the same project as the security group to be modified, including the ID of the security group itself, to represent private IP addresses of all CVMs under the security group. If this field is used, the policy will change without manual modification according to the CVM associated with the policy ID while being used to match network messages.
* The Port field allows you to enter a single port number, or two port numbers separated by a minus sign to represent a port range, such as 80 or 8000-8010. The Port field is accepted only if the value of the Protocol field is TCP or UDP. In other words, if the value of the Protocol field is not TCP or UDP, Protocol and Port are exclusive and cannot be entered at the same time, otherwise an error will occur with the API.
* The Action field only allows you to enter ACCEPT or DROP.
* CidrBlock, Ipv6CidrBlock, SecurityGroupId, and AddressTemplate are exclusive and cannot be entered at the same time. Protocol + Port and ServiceTemplate are mutually exclusive and cannot be entered at the same time.
* Only policies in one direction can be created in each request. If you need to specify the PolicyIndex parameter, the indexes of policies must be consistent.
* @method Models\CreateServiceTemplateResponse CreateServiceTemplate(Models\CreateServiceTemplateRequest $req) This API (CreateServiceTemplate) is used to create a protocol port template.
* @method Models\CreateServiceTemplateGroupResponse CreateServiceTemplateGroup(Models\CreateServiceTemplateGroupRequest $req) This API (CreateServiceTemplateGroup) is used to create a protocol port template group.
* @method Models\CreateSubnetResponse CreateSubnet(Models\CreateSubnetRequest $req) This API (CreateSubnet) is used to create subnets.
* You must create a VPC before creating a subnet.
* After the subnet is successfully created, its IP address range cannot be modified. The subnet IP address range must fall within the VPC IP address range. They can be the same if the VPC has only one subnet. We recommend that you keep the subnet IP address range within the VPC IP address range to reserve IP address ranges for other subnets.
* The subnet mask of the smallest IP address range that can be created is 28 (16 IP addresses), and that of the largest IP address range is 16 (65,536 IP addresses).
* IP address ranges of different subnets cannot overlap with each other within the same VPC.
* A subnet is automatically associated with the default route table once created.
* @method Models\CreateSubnetsResponse CreateSubnets(Models\CreateSubnetsRequest $req) This API (CreateSubnets) is used to create subnets in batches.
* You must create a VPC before creating a subnet.
* After the subnet is successfully created, its IP address range cannot be modified. The subnet IP address range must fall within the VPC IP address range. They can be the same if the VPC has only one subnet. We recommend that you keep the subnet IP address range within the VPC IP address range to reserve IP address ranges for other subnets.
* The subnet mask of the smallest IP address range that can be created is 28 (16 IP addresses), and that of the largest IP address range is 16 (65,536 IP addresses).
* IP address ranges of different subnets cannot overlap with each other within the same VPC.
* A subnet is automatically associated with the default route table once created.
* @method Models\CreateVpcResponse CreateVpc(Models\CreateVpcRequest $req) This API (CreateVpc) is used to create a VPC.
* The subnet mask of the smallest IP address range that can be created is 28 (16 IP addresses), and that of the largest IP address range is 16 (65,536 IP addresses). For more information, please see corresponding documents about VPC IP address ranges.
* The number of VPCs that can be created in a region is limited. For more information, please see <a href="https://intl.cloud.tencent.com/doc/product/215/537" title="VPC use limits">VPC use limits</a>. To request more resources, please contact the online customer service.
* @method Models\CreateVpnConnectionResponse CreateVpnConnection(Models\CreateVpnConnectionRequest $req) This API (CreateVpnConnection) is used to create VPN tunnel.
* @method Models\CreateVpnGatewayResponse CreateVpnGateway(Models\CreateVpnGatewayRequest $req) This API (CreateVpnGateway) is used to create a VPN gateway.
* @method Models\DeleteAddressTemplateResponse DeleteAddressTemplate(Models\DeleteAddressTemplateRequest $req) This API (DeleteAddressTemplate) is used to delete an IP address template.
* @method Models\DeleteAddressTemplateGroupResponse DeleteAddressTemplateGroup(Models\DeleteAddressTemplateGroupRequest $req) This API (DeleteAddressTemplateGroup) is used to delete an IP address template group.
* @method Models\DeleteCcnResponse DeleteCcn(Models\DeleteCcnRequest $req) This API (DeleteCcn) is used to delete CCNs.
* After deletion, the routes between all instances associated with the CCN will be deleted, and the network will be interrupted. Please confirm this operation in advance.
* CCN deletion is an irreversible operation. Please proceed with caution.

* @method Models\DeleteDirectConnectGatewayCcnRoutesResponse DeleteDirectConnectGatewayCcnRoutes(Models\DeleteDirectConnectGatewayCcnRoutesRequest $req) This API (DeleteDirectConnectGatewayCcnRoutes) is used to delete the CCN routes (IDC IP range) of a Direct Connect gateway.
* @method Models\DeleteHaVipResponse DeleteHaVip(Models\DeleteHaVipRequest $req) This API (DeleteHaVip) is used to delete Highly Available Virtual IP (HAVIP)<br />
This API is completed asynchronously. If you need to query the async job execution results, please use the `RequestId` returned by this API to query the `QueryTask` API.
* @method Models\DeleteNatGatewayResponse DeleteNatGateway(Models\DeleteNatGatewayRequest $req) This API (DeleteNatGateway) is used to delete a NAT gateway.
After the deletion of a NAT gateway, the system will automatically delete the routing entry that contains the NAT gateway from the route table. It will also unbind the Elastic IP.
* @method Models\DeleteNatGatewayDestinationIpPortTranslationNatRuleResponse DeleteNatGatewayDestinationIpPortTranslationNatRule(Models\DeleteNatGatewayDestinationIpPortTranslationNatRuleRequest $req) This API (DeleteNatGatewayDestinationIpPortTranslationNatRule) is used to delete a port forwarding rule for a NAT gateway.
* @method Models\DeleteNetDetectResponse DeleteNetDetect(Models\DeleteNetDetectRequest $req) This API (DeleteNetDetect) is used to delete a network detection instance.
* @method Models\DeleteNetworkInterfaceResponse DeleteNetworkInterface(Models\DeleteNetworkInterfaceRequest $req) This API (DeleteNetworkInterface) is used to delete ENIs.
* An ENI that has been bound to a CVM cannot be deleted.
* An ENI can be deleted only after being unbound from the server. After the deletion, all private IP addresses associated with the ENI will be released.
* @method Models\DeleteRouteTableResponse DeleteRouteTable(Models\DeleteRouteTableRequest $req) This API is used to delete a route table.
* @method Models\DeleteRoutesResponse DeleteRoutes(Models\DeleteRoutesRequest $req) This API (DeleteRoutes) is used to delete routing policies in batches from a route table.
* @method Models\DeleteSecurityGroupResponse DeleteSecurityGroup(Models\DeleteSecurityGroupRequest $req) This API (DeleteSecurityGroup) is used to delete security groups (SecurityGroup).
* Only security groups under the current account can be deleted.
* A security group cannot be deleted directly if its instance ID is used in the policy of another security group. You need to modify the policy first and then delete the security group.
* A security group cannot be recovered after deletion, please proceed with caution.
* @method Models\DeleteSecurityGroupPoliciesResponse DeleteSecurityGroupPolicies(Models\DeleteSecurityGroupPoliciesRequest $req) This API (DeleteSecurityGroupPolicies) is used to delete security group policies (SecurityGroupPolicy).
* SecurityGroupPolicySet.Version is used to specify the version of the security group you are operating. If the specified Version number differs from the latest version of the current security group, a failure will be returned. If Version is not specified, the policy of the specified PolicyIndex will be deleted directly.
* @method Models\DeleteServiceTemplateResponse DeleteServiceTemplate(Models\DeleteServiceTemplateRequest $req) This API (DeleteServiceTemplate) is used to delete a protocol port template.
* @method Models\DeleteServiceTemplateGroupResponse DeleteServiceTemplateGroup(Models\DeleteServiceTemplateGroupRequest $req) This API (DeleteServiceTemplateGroup) is used to delete a protocol port template group.
* @method Models\DeleteSubnetResponse DeleteSubnet(Models\DeleteSubnetRequest $req) This API (DeleteSubnet) is used to delete subnets.
Before deleting a subnet, you need to remove all resources in the subnet, including CVMs, load balancers, cloud data, NoSQL databases, and ENIs.
* @method Models\DeleteVpcResponse DeleteVpc(Models\DeleteVpcRequest $req) This API (DeleteVpc) is used to delete VPCs.
* Before deleting a VPC, ensure that the VPC contains no resources, including CVMs, cloud databases, NoSQL databases, VPN gateways, direct connect gateways, load balancers, peering connections, and basic network devices that are linked to the VPC.
* The deletion of VPCs is irreversible. Proceed with caution.
* @method Models\DeleteVpnConnectionResponse DeleteVpnConnection(Models\DeleteVpnConnectionRequest $req) This API (DeleteVpnConnection) is used to delete VPN tunnels.
* @method Models\DeleteVpnGatewayResponse DeleteVpnGateway(Models\DeleteVpnGatewayRequest $req) This API (DeleteVpnGateway) is used to delete a VPN gateway. Currently, only deletion of pay-as-you-go IPSEC gateway instances in running status is supported.
* @method Models\DescribeAccountAttributesResponse DescribeAccountAttributes(Models\DescribeAccountAttributesRequest $req) This API (DescribeAccountAttributes) is used to query your account attributes.
* @method Models\DescribeAddressQuotaResponse DescribeAddressQuota(Models\DescribeAddressQuotaRequest $req) This API (DescribeAddressQuota) is used to query the quota information of your [Elastic IP](https://cloud.tencent.com/document/product/213/1941) (EIP) in the current region. For more information, see [EIP product introduction](https://cloud.tencent.com/document/product/213/5733).
* @method Models\DescribeAddressTemplateGroupsResponse DescribeAddressTemplateGroups(Models\DescribeAddressTemplateGroupsRequest $req) This API (DescribeAddressTemplateGroups) is used to query an IP address template group.
* @method Models\DescribeAddressTemplatesResponse DescribeAddressTemplates(Models\DescribeAddressTemplatesRequest $req) This API (DescribeAddressTemplates) is used to query an IP address template.
* @method Models\DescribeAddressesResponse DescribeAddresses(Models\DescribeAddressesRequest $req) This API (DescribeAddresses) is used to query the information of one or multiple [Elastic IPs](https://cloud.tencent.com/document/product/213/1941).
* If the parameter is empty, a number (as specified by the `Limit`, the default value is 20) of EIPs will be returned.
* @method Models\DescribeCcnAttachedInstancesResponse DescribeCcnAttachedInstances(Models\DescribeCcnAttachedInstancesRequest $req) This API (DescribeCcnAttachedInstances) is used to query the network instances associated with the CCN instance.
* @method Models\DescribeCcnRoutesResponse DescribeCcnRoutes(Models\DescribeCcnRoutesRequest $req) This API (DescribeCcnRoutes) is used to query routes that have been added to a CCN.
* @method Models\DescribeCcnsResponse DescribeCcns(Models\DescribeCcnsRequest $req) This API (DescribeCcns) is used to query the CCN list.
* @method Models\DescribeClassicLinkInstancesResponse DescribeClassicLinkInstances(Models\DescribeClassicLinkInstancesRequest $req) This API (DescribeClassicLinkInstances) is used to query the Classiclink instances list.
* @method Models\DescribeDirectConnectGatewayCcnRoutesResponse DescribeDirectConnectGatewayCcnRoutes(Models\DescribeDirectConnectGatewayCcnRoutesRequest $req) This API (DescribeDirectConnectGatewayCcnRoutes) is used to query the CCN routes (IDC IP range) of the Direct Connect gateway.
* @method Models\DescribeGatewayFlowMonitorDetailResponse DescribeGatewayFlowMonitorDetail(Models\DescribeGatewayFlowMonitorDetailRequest $req) This API (DescribeGatewayFlowMonitorDetail) is used to query the monitoring details of the gateway traffic.
* Only querying of a single gateway instance is supported. That is, only one of the `VpnId`, `DirectConnectGatewayId`, `PeeringConnectionId`, or `NatId` input parameters is supported, and one must be used.
* If the gateway has traffic, but no data is returned when this API is called, please check whether gateway traffic monitoring has been enabled in the corresponding gateway details page in the console.
* @method Models\DescribeHaVipsResponse DescribeHaVips(Models\DescribeHaVipsRequest $req) This API (DescribeHaVips) is used to query the list of highly available virtual IPs (HAVIP).
* @method Models\DescribeNatGatewayDestinationIpPortTranslationNatRulesResponse DescribeNatGatewayDestinationIpPortTranslationNatRules(Models\DescribeNatGatewayDestinationIpPortTranslationNatRulesRequest $req) This API (DescribeNatGatewayDestinationIpPortTranslationNatRules) is used to query the array of objects of the port forwarding rules for a NAT gateway.
* @method Models\DescribeNatGatewaysResponse DescribeNatGateways(Models\DescribeNatGatewaysRequest $req) This API (DescribeNatGateways) is used to query NAT gateways.
* @method Models\DescribeNetDetectStatesResponse DescribeNetDetectStates(Models\DescribeNetDetectStatesRequest $req) This API (DescribeNetDetectStates) is used to query the list of network detection verification results.
* @method Models\DescribeNetDetectsResponse DescribeNetDetects(Models\DescribeNetDetectsRequest $req) This API (DescribeNetDetects) is used to query the list of network detection instances.
* @method Models\DescribeNetworkInterfaceLimitResponse DescribeNetworkInterfaceLimit(Models\DescribeNetworkInterfaceLimitRequest $req) This API (DescribeNetworkInterfaceLimit) is used to query the ENI quota based on the CVM instance ID. It returns the ENI quota to which the CVM instance can be bound and the IP address quota that can be allocated to each ENI.
* @method Models\DescribeSecurityGroupAssociationStatisticsResponse DescribeSecurityGroupAssociationStatistics(Models\DescribeSecurityGroupAssociationStatisticsRequest $req) This API (DescribeSecurityGroupAssociationStatistics) is used to query statistics on the instances associated with a security group.
* @method Models\DescribeSecurityGroupPoliciesResponse DescribeSecurityGroupPolicies(Models\DescribeSecurityGroupPoliciesRequest $req) This API (DescribeSecurityGroupPolicies) is used to query security group policies.
* @method Models\DescribeSecurityGroupsResponse DescribeSecurityGroups(Models\DescribeSecurityGroupsRequest $req) This API (DescribeSecurityGroups) is used to query security groups.
* @method Models\DescribeServiceTemplateGroupsResponse DescribeServiceTemplateGroups(Models\DescribeServiceTemplateGroupsRequest $req) This API (DescribeServiceTemplateGroups) is used to query a protocol port template group.
* @method Models\DescribeServiceTemplatesResponse DescribeServiceTemplates(Models\DescribeServiceTemplatesRequest $req) This API (DescribeServiceTemplates) is used to query protocol port templates.
* @method Models\DescribeSubnetsResponse DescribeSubnets(Models\DescribeSubnetsRequest $req) This API (DescribeSubnets) is used to query the list of subnets.
* @method Models\DescribeTaskResultResponse DescribeTaskResult(Models\DescribeTaskResultRequest $req) This API is used to query the EIP async job execution results.
* @method Models\DescribeVpcIpv6AddressesResponse DescribeVpcIpv6Addresses(Models\DescribeVpcIpv6AddressesRequest $req) This API (DescribeVpcIpv6Addresses) is used to query `VPC` `IPv6` information.
This API is used to query only the information of `IPv6` addresses that are already in use. When querying IPs that have not yet been used, this API will not report an error, but the IPs will not appear in the returned results.
* @method Models\DescribeVpcPrivateIpAddressesResponse DescribeVpcPrivateIpAddresses(Models\DescribeVpcPrivateIpAddressesRequest $req) This API (DescribeVpcPrivateIpAddresses) is used to query the private IP information of a VPC.<br />
This API is used to query only the information of IP addresses that are already in use. When querying IPs that have not yet been used, this API will not report an error, but the IPs will not appear in the returned results.
* @method Models\DescribeVpcsResponse DescribeVpcs(Models\DescribeVpcsRequest $req) This API (DescribeVpcs) is used to query the VPC list.
* @method Models\DescribeVpnConnectionsResponse DescribeVpnConnections(Models\DescribeVpnConnectionsRequest $req)  This API (DescribeVpnConnections) is used to query the VPN tunnel list.
* @method Models\DescribeVpnGatewaysResponse DescribeVpnGateways(Models\DescribeVpnGatewaysRequest $req) This API (DescribeVpnGateways) is used to query the VPN gateway list.
* @method Models\DetachCcnInstancesResponse DetachCcnInstances(Models\DetachCcnInstancesRequest $req) This API (DetachCcnInstances) is used to unbind a specified network instance from a CCN instance.<br />
After unbinding the network instance, the corresponding routing policy will also be deleted.
* @method Models\DetachClassicLinkVpcResponse DetachClassicLinkVpc(Models\DetachClassicLinkVpcRequest $req) This API (DetachClassicLinkVpc) is used to delete a Classiclink.
* @method Models\DetachNetworkInterfaceResponse DetachNetworkInterface(Models\DetachNetworkInterfaceRequest $req) This API (DetachNetworkInterface) is used to unbind an ENI from a CVM.
* @method Models\DisableCcnRoutesResponse DisableCcnRoutes(Models\DisableCcnRoutesRequest $req) This API (DisableCcnRoutes) is used to disable CCN routes that are already enabled.
* @method Models\DisassociateAddressResponse DisassociateAddress(Models\DisassociateAddressRequest $req) This API (DisassociateAddress) is used to unbind [Elastic IPs](https://cloud.tencent.com/document/product/213/1941).
* The unbinding of EIPs from CVM instances and ENIs is supported.
* The unbinding of EIPs from NATs is not supported. For information about how to unbind an EIP from a NAT, see [EipUnBindNatGateway](https://cloud.tencent.com/document/product/215/4092).
* You can only unbind EIPs in BIND or BIND_ENI status.
* Blocked EIPs cannot be unbound.
* @method Models\DisassociateNatGatewayAddressResponse DisassociateNatGatewayAddress(Models\DisassociateNatGatewayAddressRequest $req) This API (DisassociateNatGatewayAddress) is used to unbind an EIP from a NAT gateway.
* @method Models\DownloadCustomerGatewayConfigurationResponse DownloadCustomerGatewayConfiguration(Models\DownloadCustomerGatewayConfigurationRequest $req) This API (DownloadCustomerGatewayConfiguration) is used to download a VPN tunnel configuration.
* @method Models\EnableCcnRoutesResponse EnableCcnRoutes(Models\EnableCcnRoutesRequest $req) This API (EnableCcnRoutes) is used to enable CCN routes that are already added.<br />
This API is used to verify whether there will be conflict with an existing route after a CCN route is enabled. If there is a conflict, the route will not be enabled, and the process will fail. When a conflict occurs, you must disable the conflicting route before you can enable the desired route.
* @method Models\HaVipAssociateAddressIpResponse HaVipAssociateAddressIp(Models\HaVipAssociateAddressIpRequest $req) This API (HaVipAssociateAddressIp) is used to bind an EIP to an HAVIP.<br />
This API is completed asynchronously. If you need to query the async job execution results, please use the `RequestId` returned by this API to query the `QueryTask` API.
* @method Models\HaVipDisassociateAddressIpResponse HaVipDisassociateAddressIp(Models\HaVipDisassociateAddressIpRequest $req) This API (HaVipDisassociateAddressIp) is used to unbind an EIP which has been bound to an HAVIP.<br />
This API is completed asynchronously. If you need to query the async job execution results, please use the `RequestId` returned by this API to query the `QueryTask` API.
* @method Models\InquiryPriceCreateVpnGatewayResponse InquiryPriceCreateVpnGateway(Models\InquiryPriceCreateVpnGatewayRequest $req) This API (InquiryPriceCreateVpnGateway) is used to query the price for VPN gateway creation.
* @method Models\MigrateNetworkInterfaceResponse MigrateNetworkInterface(Models\MigrateNetworkInterfaceRequest $req) This API (MigrateNetworkInterface) is used to migrate ENIs.
* @method Models\MigratePrivateIpAddressResponse MigratePrivateIpAddress(Models\MigratePrivateIpAddressRequest $req)  This API (MigratePrivateIpAddress) is used to migrate the private IPs of ENIs.

* This API is used to migrate a private IP from one ENI to another. Primary IPs cannot be migrated.
* The ENIs before and after migration must belong to the same subnet.
* @method Models\ModifyAddressAttributeResponse ModifyAddressAttribute(Models\ModifyAddressAttributeRequest $req) This API (ModifyAddressAttribute) is used to modify the name of an [Elastic IP](https://cloud.tencent.com/document/product/213/1941).
* @method Models\ModifyAddressTemplateAttributeResponse ModifyAddressTemplateAttribute(Models\ModifyAddressTemplateAttributeRequest $req) This API (ModifyAddressTemplateAttribute) is used to modify an IP address template.
* @method Models\ModifyAddressTemplateGroupAttributeResponse ModifyAddressTemplateGroupAttribute(Models\ModifyAddressTemplateGroupAttributeRequest $req) This API (ModifyAddressTemplateGroupAttribute) is used to modify an IP address template group.
* @method Models\ModifyAddressesBandwidthResponse ModifyAddressesBandwidth(Models\ModifyAddressesBandwidthRequest $req) This API (ModifyAddressesBandwidth) is used to adjust [Elastic IP](https://cloud.tencent.com/document/product/213/1941) bandwidth, including the postpaid EIP, prepaid EIP and bandwidth package EIP.
* @method Models\ModifyCcnAttributeResponse ModifyCcnAttribute(Models\ModifyCcnAttributeRequest $req) This API (ModifyCcnAttribute) is used to modify CCN attributes.
* @method Models\ModifyHaVipAttributeResponse ModifyHaVipAttribute(Models\ModifyHaVipAttributeRequest $req) This API (ModifyHaVipAttribute) is used to modify HAVIP attributes.
* @method Models\ModifyIpv6AddressesAttributeResponse ModifyIpv6AddressesAttribute(Models\ModifyIpv6AddressesAttributeRequest $req) This API (ModifyIpv6AddressesAttribute) is used to modify the private IPv6 address attributes of an ENI.
* @method Models\ModifyNatGatewayAttributeResponse ModifyNatGatewayAttribute(Models\ModifyNatGatewayAttributeRequest $req) This API (ModifyNatGatewayAttribute) is used to modify the attributes of a NAT gateway.
* @method Models\ModifyNatGatewayDestinationIpPortTranslationNatRuleResponse ModifyNatGatewayDestinationIpPortTranslationNatRule(Models\ModifyNatGatewayDestinationIpPortTranslationNatRuleRequest $req) This API (ModifyNatGatewayDestinationIpPortTranslationNatRule) is used to modify a port forwarding rule for a NAT gateway.
* @method Models\ModifyNetDetectResponse ModifyNetDetect(Models\ModifyNetDetectRequest $req) This API (ModifyNetDetect) is used to modify network detection parameters.
* @method Models\ModifyNetworkInterfaceAttributeResponse ModifyNetworkInterfaceAttribute(Models\ModifyNetworkInterfaceAttributeRequest $req) This API (ModifyNetworkInterfaceAttribute) is used to modify ENI attributes.
* @method Models\ModifyPrivateIpAddressesAttributeResponse ModifyPrivateIpAddressesAttribute(Models\ModifyPrivateIpAddressesAttributeRequest $req) This API (ModifyPrivateIpAddressesAttribute) is used to modify the private IP attributes of an ENI.
* @method Models\ModifyRouteTableAttributeResponse ModifyRouteTableAttribute(Models\ModifyRouteTableAttributeRequest $req) This API (ModifyRouteTableAttribute) is used to modify the attributes of a route table.
* @method Models\ModifySecurityGroupAttributeResponse ModifySecurityGroupAttribute(Models\ModifySecurityGroupAttributeRequest $req) This API (ModifySecurityGroupAttribute) is used to modify the attributes of a security group (SecurityGroupPolicy).
* @method Models\ModifySecurityGroupPoliciesResponse ModifySecurityGroupPolicies(Models\ModifySecurityGroupPoliciesRequest $req) This API (ModifySecurityGroupPolicies) is used to reset the egress and ingress policies (SecurityGroupPolicy) of a security group.

* This API deletes all the current egress and ingress policies, and then adds new Egress and Ingress policies. It does not support custom PolicyIndex indexes.
* If SecurityGroupPolicySet.Version is set to 0, all policies will be cleared, and Egress and Ingress will be ignored.
* The value of the Protocol field can be TCP, UDP, ICMP, ICMPV6, GRE, or ALL.
* The CidrBlock field allows you to enter any string that conforms to the CIDR format. (More details) In a basic network, if a CidrBlock contains private IP addresses on Tencent Cloud for devices under your account other than CVMs, it does not mean this policy allows you to access these devices. The network isolation policies between tenants take priority over the private network policies in security groups.
* The Ipv6CidrBlock field allows you to enter any string that conforms to the IPv6 CIDR format. (More details) In a basic network, if an Ipv6CidrBlock contains private IPv6 addresses on Tencent Cloud for devices under your account other than CVMs, it does not mean this policy allows you to access these devices. The network isolation policies between tenants take priority over the private network policies in security groups.
* The SecurityGroupId field allows you to enter the IDs of security groups that are in the same project as the security group to be modified, including the ID of the security group itself, to represent private IP addresses of all CVMs under the security group. If this field is used, this policy will change without manual modification according to the CVM associated with the policy ID while being used to match network messages.
* The Port field allows you to enter a single port number, or two port numbers separated by a minus sign to represent a port range, such as 80 or 8000-8010. The Port field can be used only when the value of the Protocol field is TCP or UDP.
* The Action field only allows you to enter ACCEPT or DROP.
* CidrBlock, Ipv6CidrBlock, SecurityGroupId, and AddressTemplate are exclusive and cannot be entered at the same time. Protocol + Port and ServiceTemplate are mutually exclusive and cannot be entered at the same time.
* @method Models\ModifyServiceTemplateAttributeResponse ModifyServiceTemplateAttribute(Models\ModifyServiceTemplateAttributeRequest $req) This API (ModifyServiceTemplateAttribute) is used to modify a protocol port template.
* @method Models\ModifyServiceTemplateGroupAttributeResponse ModifyServiceTemplateGroupAttribute(Models\ModifyServiceTemplateGroupAttributeRequest $req) This API (ModifyServiceTemplateGroupAttribute) is used to modify a protocol port template group.
* @method Models\ModifySubnetAttributeResponse ModifySubnetAttribute(Models\ModifySubnetAttributeRequest $req) This API (ModifySubnetAttribute) is used to modify subnet attributes.
* @method Models\ModifyVpcAttributeResponse ModifyVpcAttribute(Models\ModifyVpcAttributeRequest $req) This API (ModifyVpcAttribute) is used to modify VPC attributes.
* @method Models\ModifyVpnConnectionAttributeResponse ModifyVpnConnectionAttribute(Models\ModifyVpnConnectionAttributeRequest $req) This API (ModifyVpnConnectionAttribute) is used to modify VPN tunnels.
* @method Models\ModifyVpnGatewayAttributeResponse ModifyVpnGatewayAttribute(Models\ModifyVpnGatewayAttributeRequest $req) This API (ModifyVpnGatewayAttribute) is used to modify the attributes of VPN gateways.
* @method Models\RejectAttachCcnInstancesResponse RejectAttachCcnInstances(Models\RejectAttachCcnInstancesRequest $req) This API (RejectAttachCcnInstances) is used to reject association operations when instances are associated across accounts for the CCN owner.

* @method Models\ReleaseAddressesResponse ReleaseAddresses(Models\ReleaseAddressesRequest $req) This API (ReleaseAddresses) is used to release one or multiple [Elastic IPs](https://cloud.tencent.com/document/product/213/1941).
* This operation is irreversible. Once you release an EIP, the IP address associated with the EIP no longer belongs to you.
* Only EIPs in UNBIND status can be released.
* @method Models\ReplaceDirectConnectGatewayCcnRoutesResponse ReplaceDirectConnectGatewayCcnRoutes(Models\ReplaceDirectConnectGatewayCcnRoutesRequest $req) This API (ReplaceDirectConnectGatewayCcnRoutes) is used to modify the specified route according to the route ID. Batch modification is supported.
* @method Models\ReplaceRouteTableAssociationResponse ReplaceRouteTableAssociation(Models\ReplaceRouteTableAssociationRequest $req) This API (ReplaceRouteTableAssociation) is used to modify the route table associated with a subnet.
* A subnet can only be associated with one route table.
* @method Models\ReplaceRoutesResponse ReplaceRoutes(Models\ReplaceRoutesRequest $req) This API (ReplaceRoutes) is used to modify a specified routing policy by its ID (RouteId). Batch modification is supported.
* @method Models\ReplaceSecurityGroupPolicyResponse ReplaceSecurityGroupPolicy(Models\ReplaceSecurityGroupPolicyRequest $req) This API (ReplaceSecurityGroupPolicy) is used to replace a single security group policy (SecurityGroupPolicy).
Only one policy in a single direction can be replaced in each request, and the PolicyIndex parameter must be specified.
* @method Models\ResetAttachCcnInstancesResponse ResetAttachCcnInstances(Models\ResetAttachCcnInstancesRequest $req) This API (ResetAttachCcnInstances) is used to re-apply for the association operation when the application for cross-account instance association expires.
* @method Models\ResetNatGatewayConnectionResponse ResetNatGatewayConnection(Models\ResetNatGatewayConnectionRequest $req) This API (ResetNatGatewayConnection) is used to adjust concurrent connection cap for the NAT gateway.
* @method Models\ResetRoutesResponse ResetRoutes(Models\ResetRoutesRequest $req) This API (ResetRoutes) is used to reset the name of a route table and all its routing policies.<br />
Note: When this API is called, all routing policies in the current route table are deleted before new routing policies are saved, which may incur network interruption.
* @method Models\ResetVpnConnectionResponse ResetVpnConnection(Models\ResetVpnConnectionRequest $req) The API (ResetVpnConnection) is used to reset VPN tunnels.
* @method Models\ResetVpnGatewayInternetMaxBandwidthResponse ResetVpnGatewayInternetMaxBandwidth(Models\ResetVpnGatewayInternetMaxBandwidthRequest $req) This API (ResetVpnGatewayInternetMaxBandwidth) is used to adjust the bandwidth cap of VPN gateways. Currently, only configuration upgrade is supported. VPN gateways with monthly subscription must be within the validity period.
* @method Models\SetCcnRegionBandwidthLimitsResponse SetCcnRegionBandwidthLimits(Models\SetCcnRegionBandwidthLimitsRequest $req) This API (SetCcnRegionBandwidthLimits) is used to set the outbound bandwidth cap for CCNs in each region. This API can only set the outbound bandwidth cap for regions in the network instances that have already been associated.
* @method Models\TransformAddressResponse TransformAddress(Models\TransformAddressRequest $req) This API (TransformAddress) is used to switch common public IPs into [Elastic IPs](https://cloud.tencent.com/document/product/213/1941).
* The platform limits the number of times that a user can unbind an EIP and reassign public IPs in each region per day. For more information, see [EIP product introduction](/document/product/213/1941)). The preceding quota can be obtained through the [DescribeAddressQuota](https://cloud.tencent.com/document/api/213/1378) API.
* @method Models\UnassignIpv6AddressesResponse UnassignIpv6Addresses(Models\UnassignIpv6AddressesRequest $req) This API (UnassignIpv6Addresses) is used to release ENI `IPv6` addresses.<br />
This API is completed asynchronously. If you need to query the async execution results, use the `RequestId` returned by this API to query the `QueryTask` API.
* @method Models\UnassignIpv6CidrBlockResponse UnassignIpv6CidrBlock(Models\UnassignIpv6CidrBlockRequest $req) This API (UnassignIpv6CidrBlock) is used to release IPv6 IP ranges.
If the IP range still has occupied IPs that are not yet repossessed, the IP range cannot be released.
* @method Models\UnassignIpv6SubnetCidrBlockResponse UnassignIpv6SubnetCidrBlock(Models\UnassignIpv6SubnetCidrBlockRequest $req) This API (UnassignIpv6SubnetCidrBlock) is used to release IPv6 subnet IP ranges.
If the subnet IP range still has occupied IPs that are not yet repossessed, the subnet IP range cannot be released.
* @method Models\UnassignPrivateIpAddressesResponse UnassignPrivateIpAddresses(Models\UnassignPrivateIpAddressesRequest $req) This API (UnassignPrivateIpAddresses) is used to return the private IPs of ENI.
* To return the secondary private IPs of an ENI, the API will automatically unbind the IPs of an ENI. The primary private IP of the ENI cannot be returned.
 */

class VpcClient extends AbstractClient
{
    protected $endpoint = "vpc.tencentcloudapi.com";

    protected $version = "2017-03-12";

    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("vpc")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
