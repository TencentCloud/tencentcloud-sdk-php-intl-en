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
 * @method Models\AddBandwidthPackageResourcesResponse AddBandwidthPackageResources(Models\AddBandwidthPackageResourcesRequest $req) This API is used to add resources to a bandwidth package, including [Elastic IP](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1), [Cloud Load Balancer](https://intl.cloud.tencent.com/document/product/214/517?from_cn_redirect=1), and so on.
 * @method Models\AllocateAddressesResponse AllocateAddresses(Models\AllocateAddressesRequest $req) This API is used to apply for one or more [Elastic IP Addresses](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1) (EIPs for short).
* An EIP is a static IP address that is dedicated for dynamic cloud computing. You can quickly re-map an EIP to another instance under your account to protect against instance failures.
* Your EIP is associated with your Tencent Cloud account rather than an instance. It remains associated with your Tencent Cloud account until you choose to explicitly release it or your account is in arrears for more than 24 hours.
* The maximum number of EIPs that can be applied for a Tencent Cloud account in each region is restricted. For more information, see [EIP Product Introduction](https://intl.cloud.tencent.com/document/product/213/5733?from_cn_redirect=1). You can get the quota information through the DescribeAddressQuota API.
 * @method Models\AssignIpv6AddressesResponse AssignIpv6Addresses(Models\AssignIpv6AddressesRequest $req) This API (AssignIpv6Addresses) is used to apply for an IPv6 address for the ENI.<br />
This API is completed asynchronously. If you need to query the async execution results, use the `RequestId` returned by this API to query the `QueryTask` API.
* An ENI can only be bound with a limited number of IPs. For more information about resource limits, see<a href="/document/product/576/18527">ENI use limits</a>.
* You can specify the `IPv6` address when applying. The address type cannot be the primary `IP`. Currently, `IPv6` can only be supported as the secondary `IP`.
* The address must be unoccupied and is in the subnet to which the ENI belongs.
* When applying for one to multiple secondary `IPv6` addresses on ENI, the API will return the specified number of secondary `IPv6` addresses in the subnet range where the ENI is located.
 * @method Models\AssignIpv6CidrBlockResponse AssignIpv6CidrBlock(Models\AssignIpv6CidrBlockRequest $req) This API is used to assign IPv6 ranges.
* To use this API, you must already have a VPC instance. If you do not have a VPC instance yet, use the <a href="https://intl.cloud.tencent.com/document/api/215/15774?from_cn_redirect=1" title="CreateVpc" target="_blank">CreateVpc</a> API to create one.
* Each VPC can apply for only one IPv6 range.
 * @method Models\AssignIpv6SubnetCidrBlockResponse AssignIpv6SubnetCidrBlock(Models\AssignIpv6SubnetCidrBlockRequest $req) This API (AssignIpv6SubnetCidrBlock) is used to assign IPv6 subnet IP ranges.
* To assign an `IPv6` IP range to a subnet, the `VPC` that the subnet belongs to should have obtained the `IPv6` IP range. If this has not been assigned, use the `AssignIpv6CidrBlock` API to assign an `IPv6` IP range to the `VPC` to which the subnet belongs. Otherwise, the `IPv6` subnet IP range cannot be assigned.
* Each subnet can only be assigned one IPv6 IP range.
 * @method Models\AssignPrivateIpAddressesResponse AssignPrivateIpAddresses(Models\AssignPrivateIpAddressesRequest $req) This API (AssignPrivateIpAddresses) is used for the ENI to apply for private IPs.
* An ENI can only be bound with a limited number of IP addresses. For more information about resource limits, see <a href="/document/product/576/18527">ENI Use Limits</a>.
* You can specify the private IP you want to apply for. It cannot be the primary IP, which already exists and cannot be modified. The private IP must be in the same subnet as the ENI, and cannot be occupied.
* You can apply for more than one secondary private IP on the ENI. The API will return the specified number of secondary private IPs in the subnet IP range of the ENI.
 * @method Models\AssociateAddressResponse AssociateAddress(Models\AssociateAddressRequest $req) This API is used to bind an [Elastic IP](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1) (EIP for short) to the specified private IP of an instance or ENI.
* The EIP is essentially bound to the primary private IP of the primary ENI on a CVM instance.
* The EIP binding will automatically unbind and release the public IP previously bound to the CVM instance.
* To bind another EIP to the private IP of the specified ENI (not the primary private IP of the primary ENI), you must first unbind the EIP.
* To bind an EIP to a NAT Gateway, use the [`AssociateNatGatewayAddress`](https://intl.cloud.tencent.com/document/product/215/36722?from_cn_redirect=1) API.
* EIP that is in arrears or blocked cannot be bound.
* Only EIP in the UNBIND status can be bound.
 * @method Models\AssociateDirectConnectGatewayNatGatewayResponse AssociateDirectConnectGatewayNatGateway(Models\AssociateDirectConnectGatewayNatGatewayRequest $req) This API is used to bind a direct connect gateway with a NAT gateway,  and direct its default route to the NAT Gateway.
 * @method Models\AssociateNatGatewayAddressResponse AssociateNatGatewayAddress(Models\AssociateNatGatewayAddressRequest $req) This API is used to bind an EIP to NAT Gateway.
 * @method Models\AssociateNetworkAclSubnetsResponse AssociateNetworkAclSubnets(Models\AssociateNetworkAclSubnetsRequest $req) This API is used to associate a network ACL with subnets in a VPC instance.
 * @method Models\AssociateNetworkInterfaceSecurityGroupsResponse AssociateNetworkInterfaceSecurityGroups(Models\AssociateNetworkInterfaceSecurityGroupsRequest $req) This API (AssociateNetworkInterfaceSecurityGroups) is used to attach a security group to an ENI.
 * @method Models\AttachCcnInstancesResponse AttachCcnInstances(Models\AttachCcnInstancesRequest $req) This API (AttachCcnInstances) is used to load a network instance to a CCN instance. Network instances include VPCs and Direct Connect gateways.<br />
The number of network instances that each CCN can be associated with is limited. For more information, see the product documentation. If you need to associate more instances, please contact online customer service.
 * @method Models\AttachClassicLinkVpcResponse AttachClassicLinkVpc(Models\AttachClassicLinkVpcRequest $req) This API is used to create a Classiclink between a VPC instance and a basic network device.
* The VPC instance and the basic network device must be in the same region.
* For differences between VPC and basic networks, see <a href="https://intl.cloud.tencent.com/document/product/215/30720?from_cn_redirect=1">VPC and Basic Networks</a>.
 * @method Models\AttachNetworkInterfaceResponse AttachNetworkInterface(Models\AttachNetworkInterfaceRequest $req) This API is used to bind an ENI to a CVM.
* One CVM can be bound with multiple ENIs, but only one primary ENI. For more information about the limits, please see <a href="https://intl.cloud.tencent.com/document/product/576/18527?from_cn_redirect=1">ENI Use Limits</a>.
* An ENI can only be bound to one CVM at a time.
* Only the running or shutdown CVMs can be bound with ENIs. For more information about the CVM status, see <a href="https://intl.cloud.tencent.com/document/api/213/9452?from_cn_redirect=1#InstanceStatus">InstanceStatus</a> in the Data Types.
* An ENI can only be bound to a VPC-based CVM under the same availability zone as the ENI subnet.
 * @method Models\AuditCrossBorderComplianceResponse AuditCrossBorderCompliance(Models\AuditCrossBorderComplianceRequest $req) This API is used by the service provider to perform a compliance audit.
* This API is only provided for service providers to audit compliance review requests received. Tencent Cloud will verify the identity of the service provider by the `APPID`. 
* The status of the review request can be changed between `APPROVED` and `DENY`.
 * @method Models\CheckAssistantCidrResponse CheckAssistantCidr(Models\CheckAssistantCidrRequest $req) This API (CheckAssistantCidr) is used to check overlapping of a secondary CIDR block with inventory routing, peering connection (opposite VPC CIDR block), and any other resources. If an overlap is present, the overlapped resources are returned. (To use this API that is in Beta, please submit a ticket.)
* Check whether the secondary CIDR block overlaps with a primary or secondary CIDR block of the current VPC.
* Check whether the secondary CIDR block overlaps with the routing destination of the current VPC.
* Check whether the secondary CIDR block is peer-connected to the current VPC, and whether it overlaps with a main or secondary CIDR block of the opposite VPC.
 * @method Models\CheckNetDetectStateResponse CheckNetDetectState(Models\CheckNetDetectStateRequest $req) This API is used to verify the network detection status.
 * @method Models\CloneSecurityGroupResponse CloneSecurityGroup(Models\CloneSecurityGroupRequest $req) This API is used to create a security group with the same rule configurations as an existing security group. The cloning only copies the security group and its rules, but not the security group tags.
 * @method Models\CreateAddressTemplateResponse CreateAddressTemplate(Models\CreateAddressTemplateRequest $req) This API (CreateAddressTemplate) is used to create an IP address template.
 * @method Models\CreateAddressTemplateGroupResponse CreateAddressTemplateGroup(Models\CreateAddressTemplateGroupRequest $req) This API (CreateAddressTemplateGroup) is used to create an IP address template group.
 * @method Models\CreateAndAttachNetworkInterfaceResponse CreateAndAttachNetworkInterface(Models\CreateAndAttachNetworkInterfaceRequest $req) This API is used to create an ENI and bind it to a CVM.
* You can specify private IP addresses and a primary IP when creating an ENI. The specified private IP must be idle and in the same subnet as the ENI.
* When creating an ENI, you can specify the number of private IPs that you want to apply for. The system will randomly generate private IP addresses.
* The number of IPs bound with an ENI is limited. For more information, see <a href="/document/product/576/18527">ENI Use Limits</a>.
* You can bind an existing security group when creating an ENI.
* You can bind a tag when creating an ENI. The tag list in the response indicates the tags that have been successfully added.
 * @method Models\CreateAssistantCidrResponse CreateAssistantCidr(Models\CreateAssistantCidrRequest $req) This API (CreateAssistantCidr) is used to batch create secondary CIDR blocks. (To use this API that is in Beta, please submit a ticket.)
 * @method Models\CreateBandwidthPackageResponse CreateBandwidthPackage(Models\CreateBandwidthPackageRequest $req) This API is used to create [device bandwidth packages](https://intl.cloud.tencent.com/document/product/684/15246?from_cn_redirect=1#.E8.AE.BE.E5.A4.87.E5.B8.A6.E5.AE.BD.E5.8C.85) and [IP bandwidth packages](https://intl.cloud.tencent.com/document/product/684/15246?from_cn_redirect=1#ip-.E5.B8.A6.E5.AE.BD.E5.8C.85)
 * @method Models\CreateCcnResponse CreateCcn(Models\CreateCcnRequest $req) This API is used to create a Cloud Connect Network (CCN).<br />
* You can bind a tag when creating a CCN instance. The tag list in the response indicates the tags that have been successfully added.
Each account can only create a limited number of CCN instances. For more information, see product documentation. To create more instances, contact the online customer service.
 * @method Models\CreateCustomerGatewayResponse CreateCustomerGateway(Models\CreateCustomerGatewayRequest $req) This API (CreateCustomerGateway) is used to create customer gateways.
 * @method Models\CreateDefaultVpcResponse CreateDefaultVpc(Models\CreateDefaultVpcRequest $req) This API is used to create a default VPC.

The default VPC is suitable for getting started with and launching public instances, and it can be used like any other VPCs. To create a standard VPC, for which you need to specify a VPC name, VPC IP range, subnet IP range, and subnet availability zone, use the regular CreateVpc API.

Under normal circumstances, this API may not create a default VPC. It depends on the network attributes (DescribeAccountAttributes) of your account.
* If both basic network and VPC are supported, the returned VpcId is 0.
* If only VPC is supported, the default VPC information is returned.

You can also use the Force parameter to forcibly return a default VPC.
 * @method Models\CreateDirectConnectGatewayResponse CreateDirectConnectGateway(Models\CreateDirectConnectGatewayRequest $req) This API is used to create a direct connect gateway.
 * @method Models\CreateDirectConnectGatewayCcnRoutesResponse CreateDirectConnectGatewayCcnRoutes(Models\CreateDirectConnectGatewayCcnRoutesRequest $req) This API (CreateDirectConnectGatewayCcnRoutes) is used to create the CCN route (IDC IP range) of a Direct Connect gateway.
 * @method Models\CreateFlowLogResponse CreateFlowLog(Models\CreateFlowLogRequest $req) This API is used to create a flow log.
 * @method Models\CreateHaVipResponse CreateHaVip(Models\CreateHaVipRequest $req) This API (CreateHaVip) is used to create a highly available virtual IP (HAVIP)
 * @method Models\CreateLocalGatewayResponse CreateLocalGateway(Models\CreateLocalGatewayRequest $req) This API is used to create a local gateway for a CDC instance.
 * @method Models\CreateNatGatewayResponse CreateNatGateway(Models\CreateNatGatewayRequest $req) This API (CreateNatGateway) is used to create a NAT gateway.
 * @method Models\CreateNatGatewayDestinationIpPortTranslationNatRuleResponse CreateNatGatewayDestinationIpPortTranslationNatRule(Models\CreateNatGatewayDestinationIpPortTranslationNatRuleRequest $req) This API (CreateNatGatewayDestinationIpPortTranslationNatRule) is used to create a port forwarding rule for a NAT gateway.
 * @method Models\CreateNatGatewaySourceIpTranslationNatRuleResponse CreateNatGatewaySourceIpTranslationNatRule(Models\CreateNatGatewaySourceIpTranslationNatRuleRequest $req) This API is used to create a SNAT rule for the NAT Gateway.
 * @method Models\CreateNetDetectResponse CreateNetDetect(Models\CreateNetDetectRequest $req) This API is used to create a network detection instance.
 * @method Models\CreateNetworkAclResponse CreateNetworkAcl(Models\CreateNetworkAclRequest $req) This API is used to create a <a href="https://intl.cloud.tencent.com/document/product/215/20088?from_cn_redirect=1">network ACL</a>.
* The inbound and outbound rules for a new network ACL are "Deny All" by default. You need to call `ModifyNetworkAclEntries` after creation to set rules for the network ACL as needed.
 * @method Models\CreateNetworkInterfaceResponse CreateNetworkInterface(Models\CreateNetworkInterfaceRequest $req) This API is used to create one or more ENIs.
* You can specify private IP addresses and a primary IP when creating an ENI. The specified private IP must be in the same subnet as the ENI and is not occupied.
* When creating an ENI, you can specify the number of private IP addresses that you want to apply for. The system will randomly generate private IP addresses.
* An ENI can only be bound with a limited number of IP addresses. For more information about resource limits, see <a href="/document/product/576/18527">ENI Use Limits</a>.
* You can bind an existing security group when creating an ENI.
* You can bind a tag when creating an ENI. The tag list in the response indicates the tags that have been successfully added.
 * @method Models\CreateRouteTableResponse CreateRouteTable(Models\CreateRouteTableRequest $req) This API is used to create a route table.
* After the VPC instance has been created, the system creates a default route table with which all newly created subnets will be associated. By default, you can use this route table to manage your routing policies. If you have multiple routing policies, you can call the API for creating route tables to create more route tables to manage these routing policies.
* You can bind a tag when creating a route table. The tag list in the response indicates the tags that have been successfully added.
 * @method Models\CreateRoutesResponse CreateRoutes(Models\CreateRoutesRequest $req) This API (CreateRoutes) is used to create a routing policy.
* You can create routing policies in batch for a specified route table.
 * @method Models\CreateSecurityGroupResponse CreateSecurityGroup(Models\CreateSecurityGroupRequest $req) This API is used to create a security group (SecurityGroup).
* Note the <a href="https://intl.cloud.tencent.com/document/product/213/12453?from_cn_redirect=1">maximum number of security groups</a> per project in each region under each account.
* Both the inbound and outbound rules for a newly created security group are "Deny All" by default. You need to call CreateSecurityGroupPolicies to set security group rules based on your needs.
* You can bind a tag when creating a security group. The tag list in the response indicates the tags that have been successfully added.
 * @method Models\CreateSecurityGroupPoliciesResponse CreateSecurityGroupPolicies(Models\CreateSecurityGroupPoliciesRequest $req) This API is used to create a security group policy (SecurityGroupPolicy).

For parameters of SecurityGroupPolicySet,
<ul>
<li>`Version`: the version number of a security group policy, which automatically increases by one each time you update the security policy, to prevent expiration of the updated routing policies. If it is left empty, any conflicts will be ignored.</li>
<li>When creating the `Egress` and `Ingress` policies,<ul>
<li>`Protocol`: allows `TCP`, `UDP`, `ICMP`, `ICMPV6`, `GRE`, or `ALL`.</li>
<li>`CidrBlock`: a CIDR block in the correct format. In the classic network, if a `CidrBlock` contains private IPs of devices under your account other than CVMs, it does not mean this policy allows you to access these devices. The network isolation policies between tenants take priority over the private network policies in security groups.</li>
<li>`Ipv6CidrBlock`: an IPv6 CIDR block in the correct format. In a classic network, if an `Ipv6CidrBlock` contains private IPv6 addresses on Tencent Cloud for devices under your account other than CVMs, it does not mean this policy allows you to access these devices. The network isolation policies between tenants take priority over the private network policies in security groups.</li>
<li>`SecurityGroupId`: ID of the security group. It can be the ID of security group to be modified, or the ID of another security group in the same project. All private IPs of all CVMs under the security group will be covered. If this field is used, the policy will automatically change according to the CVM associated with the group ID while being used to match network messages. You don’t need to change it manually.</li>
<li>`Port`: a single port number such as 80, or a port range in the format of “8000-8010”. You may use this field only if the `Protocol` field takes the value `TCP` or `UDP`. Otherwise `Protocol` and `Port` are mutually exclusive.</li>
<li>`Action`: only allows `ACCEPT` or `DROP`.</li>
<li>`CidrBlock`, `Ipv6CidrBlock`, `SecurityGroupId`, and `AddressTemplate` are mutually exclusive. `Protocol` + `Port` and `ServiceTemplate` are mutually exclusive.</li>
<li>You can only create policies in one direction in each request. To specify the `PolicyIndex` parameter, use the same index number in policies.</li>
</ul></li></ul>
 * @method Models\CreateSecurityGroupWithPoliciesResponse CreateSecurityGroupWithPolicies(Models\CreateSecurityGroupWithPoliciesRequest $req) This API (CreateSecurityGroupWithPolicies) is used to create security groups, and add security group policies.
* Note the<a href="https://intl.cloud.tencent.com/document/product/213/12453?from_cn_redirect=1">maximum number of security groups</a>per project in each region under each account.
* Both the inbound and outbound policies for a newly created security group are Deny All by default. You need to call CreateSecurityGroupPolicies to set security group policies according to your needs.

Description:
* `Version`: Indicates the version number of a security group policy, which will automatically increment by 1 every time you update the security policy, to prevent the expiration of the updated policies. If this field is left empty, any conflicts will be ignored.
* `Protocol`: Values can be TCP, UDP, ICMP, ICMPV6, GRE, or ALL.
* `CidrBlock`:  A CIDR block in the correct format. In a basic network, if a CidrBlock contains private IPs on Tencent Cloud for devices under your account other than CVMs, it does not mean this policy allows you to access these devices. The network isolation policies between tenants take priority over the private network policies in security groups.
* `Ipv6CidrBlock`: An IPv6 CIDR block in the correct format. In a basic network, if an Ipv6CidrBlock contains private IPv6 addresses on Tencent Cloud for devices under your account other than CVMs, it does not mean this policy allows you to access these devices. The network isolation policies between tenants take priority over the private network policies in security groups.
* `SecurityGroupId`: ID of the security group. It can be in the same project as the security group to be modified, including the ID of the security group itself, to represent private IP addresses of all CVMs under the security group. If this field is used, the policy will change without manual modification according to the CVM associated with the policy ID while being used to match network messages.
* `Port`: A single port number, or a port range in the format of “8000-8010”. The Port field is accepted only if the value of the `Protocol` field is `TCP` or `UDP`. Otherwise Protocol and Port are mutually exclusive. 
* `Action`: Values can be `ACCEPT` or `DROP`.
* CidrBlock, Ipv6CidrBlock, SecurityGroupId, and AddressTemplate are exclusive and cannot be entered at the same time. “Protocol + Port” and ServiceTemplate are mutually exclusive and cannot be entered at the same time.
* Only policies in one direction can be created in each request. If you need to specify the `PolicyIndex` parameter, the indexes of policies must be consistent.
 * @method Models\CreateServiceTemplateResponse CreateServiceTemplate(Models\CreateServiceTemplateRequest $req) This API (CreateServiceTemplate) is used to create a protocol port template.
 * @method Models\CreateServiceTemplateGroupResponse CreateServiceTemplateGroup(Models\CreateServiceTemplateGroupRequest $req) This API (CreateServiceTemplateGroup) is used to create a protocol port template group.
 * @method Models\CreateSubnetResponse CreateSubnet(Models\CreateSubnetRequest $req) This API is used to create a subnet.
* You must create a VPC instance before creating a subnet.
* After the subnet is successfully created, its IP address range cannot be modified. The subnet IP address range must fall within the VPC IP address range. They can be the same if the VPC instance has only one subnet. We recommend that you keep the subnet IP address range within the VPC IP address range to reserve IP address ranges for other subnets.
* The subnet mask of the smallest IP address range that can be created is 28 (16 IP addresses), and that of the largest IP address range is 16 (65,536 IP addresses).
* IP address ranges of different subnets cannot overlap with each other within the same VPC instance.
* A subnet is automatically associated with the default route table once created.
* You can bind a tag when creating a subnet. The tag list in the response indicates the tags that have been successfully added.
 * @method Models\CreateSubnetsResponse CreateSubnets(Models\CreateSubnetsRequest $req) This API is used to create subnets in batches.
* You must create a VPC instance before creating a subnet.
* After the subnet is successfully created, its IP address range cannot be modified. The subnet IP address range must fall within the VPC IP address range. They can be the same if the VPC has only one subnet. We recommend that you keep the subnet IP address range within the VPC IP address range to reserve IP address ranges for other subnets.
* The subnet mask of the smallest IP address range that can be created is 28 (16 IP addresses), and that of the largest IP address range is 16 (65,536 IP addresses).
* IP address ranges of different subnets cannot overlap with each other within the same VPC instance.
* A subnet is automatically associated with the default route table once created.
* You can bind a tag when creating a subnet. The tag list in the response indicates the tags that have been successfully added.
 * @method Models\CreateVpcResponse CreateVpc(Models\CreateVpcRequest $req) This API is used to create a VPC instance.
* The subnet mask of the smallest IP address range that can be created is 28 (16 IP addresses), and that of the largest IP address range is 16 (65,536 IP addresses). For more information on how to plan VPC IP ranges, see [Network Planning](https://intl.cloud.tencent.com/document/product/215/30313?from_cn_redirect=1).
* The number of VPC instances that can be created in a region is limited. For more information, see <a href="https://intl.cloud.tencent.com/doc/product/215/537?from_cn_redirect=1" title="VPC Use Limits">VPC Use Limits</a>. To request more resources, please [submit a ticket](https://console.cloud.tencent.com/workorder/category).
* You can bind tags when creating a VPC instance. The tag list in the response indicates the tags that have been successfully added.
 * @method Models\CreateVpcEndPointResponse CreateVpcEndPoint(Models\CreateVpcEndPointRequest $req) This API is used to create an endpoint.
 * @method Models\CreateVpcEndPointServiceResponse CreateVpcEndPointService(Models\CreateVpcEndPointServiceRequest $req) This API is used to create an endpoint service.
 * @method Models\CreateVpcEndPointServiceWhiteListResponse CreateVpcEndPointServiceWhiteList(Models\CreateVpcEndPointServiceWhiteListRequest $req) This API is used to create the endpoint service allowlist.
 * @method Models\CreateVpnConnectionResponse CreateVpnConnection(Models\CreateVpnConnectionRequest $req) This API (CreateVpnConnection) is used to create VPN tunnel.
 * @method Models\CreateVpnGatewayResponse CreateVpnGateway(Models\CreateVpnGatewayRequest $req) This API (CreateVpnGateway) is used to create a VPN gateway.
 * @method Models\CreateVpnGatewayRoutesResponse CreateVpnGatewayRoutes(Models\CreateVpnGatewayRoutesRequest $req) This API is used to create destination routes of a route-based VPN gateway.
 * @method Models\DeleteAddressTemplateResponse DeleteAddressTemplate(Models\DeleteAddressTemplateRequest $req) This API (DeleteAddressTemplate) is used to delete an IP address template.
 * @method Models\DeleteAddressTemplateGroupResponse DeleteAddressTemplateGroup(Models\DeleteAddressTemplateGroupRequest $req) This API (DeleteAddressTemplateGroup) is used to delete an IP address template group.
 * @method Models\DeleteAssistantCidrResponse DeleteAssistantCidr(Models\DeleteAssistantCidrRequest $req) This API (DeleteAssistantCidr) is used to delete secondary CIDR blocks. (To use this API that is in Beta, please submit a ticket.)
 * @method Models\DeleteBandwidthPackageResponse DeleteBandwidthPackage(Models\DeleteBandwidthPackageRequest $req) This API is used to delete bandwidth packages, including [device bandwidth packages](https://intl.cloud.tencent.com/document/product/684/15246?from_cn_redirect=1#.E8.AE.BE.E5.A4.87.E5.B8.A6.E5.AE.BD.E5.8C.85) and [IP bandwidth packages](https://intl.cloud.tencent.com/document/product/684/15246?from_cn_redirect=1#ip-.E5.B8.A6.E5.AE.BD.E5.8C.85).
 * @method Models\DeleteCcnResponse DeleteCcn(Models\DeleteCcnRequest $req) This API (DeleteCcn) is used to delete CCNs.
* After deletion, the routes between all instances associated with the CCN will be deleted, and the network will be interrupted. Please confirm this operation in advance.
* CCN deletion is an irreversible operation. Please proceed with caution.

 * @method Models\DeleteCustomerGatewayResponse DeleteCustomerGateway(Models\DeleteCustomerGatewayRequest $req) This API (DeleteCustomerGateway) is used to delete customer gateways.
 * @method Models\DeleteDirectConnectGatewayResponse DeleteDirectConnectGateway(Models\DeleteDirectConnectGatewayRequest $req) This API is used to delete a direct connect gateway.
<li>For a NAT gateway, NAT and ACL rules will be cleared upon the deletion of a direct connect gateway.
<li>After the deletion of a direct connect gateway, the routing policy associated with the gateway in the route table will also be deleted.
This API is completed asynchronously. If you need to query the async job execution results, please use the `RequestId` returned by this API to poll the `QueryTask` API.
 * @method Models\DeleteDirectConnectGatewayCcnRoutesResponse DeleteDirectConnectGatewayCcnRoutes(Models\DeleteDirectConnectGatewayCcnRoutesRequest $req) This API (DeleteDirectConnectGatewayCcnRoutes) is used to delete the CCN routes (IDC IP range) of a Direct Connect gateway.
 * @method Models\DeleteFlowLogResponse DeleteFlowLog(Models\DeleteFlowLogRequest $req) This API is used to delete a flow log.
 * @method Models\DeleteHaVipResponse DeleteHaVip(Models\DeleteHaVipRequest $req) This API (DeleteHaVip) is used to delete Highly Available Virtual IP (HAVIP)<br />
This API is completed asynchronously. If you need to query the async job execution results, please use the `RequestId` returned by this API to query the `QueryTask` API.
 * @method Models\DeleteLocalGatewayResponse DeleteLocalGateway(Models\DeleteLocalGatewayRequest $req) This API is used to delete the local gateway of a CDC instance.
 * @method Models\DeleteNatGatewayResponse DeleteNatGateway(Models\DeleteNatGatewayRequest $req) This API (DeleteNatGateway) is used to delete a NAT gateway.
After the deletion of a NAT gateway, the system will automatically delete the routing entry that contains the NAT gateway from the route table. It will also unbind the Elastic IP.
 * @method Models\DeleteNatGatewayDestinationIpPortTranslationNatRuleResponse DeleteNatGatewayDestinationIpPortTranslationNatRule(Models\DeleteNatGatewayDestinationIpPortTranslationNatRuleRequest $req) This API (DeleteNatGatewayDestinationIpPortTranslationNatRule) is used to delete a port forwarding rule for a NAT gateway.
 * @method Models\DeleteNatGatewaySourceIpTranslationNatRuleResponse DeleteNatGatewaySourceIpTranslationNatRule(Models\DeleteNatGatewaySourceIpTranslationNatRuleRequest $req) This API is used to delete a SNAT forwarding rule of the NAT Gateway.
 * @method Models\DeleteNetDetectResponse DeleteNetDetect(Models\DeleteNetDetectRequest $req) This API (DeleteNetDetect) is used to delete a network detection instance.
 * @method Models\DeleteNetworkAclResponse DeleteNetworkAcl(Models\DeleteNetworkAclRequest $req) This API is used to delete a network ACL.
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
 * @method Models\DeleteVpcEndPointResponse DeleteVpcEndPoint(Models\DeleteVpcEndPointRequest $req) This API is used to delete an endpoint.
 * @method Models\DeleteVpcEndPointServiceResponse DeleteVpcEndPointService(Models\DeleteVpcEndPointServiceRequest $req) This API is used to delete an endpoint service.


 * @method Models\DeleteVpcEndPointServiceWhiteListResponse DeleteVpcEndPointServiceWhiteList(Models\DeleteVpcEndPointServiceWhiteListRequest $req) This API is used to delete the endpoint service allowlist.
 * @method Models\DeleteVpnConnectionResponse DeleteVpnConnection(Models\DeleteVpnConnectionRequest $req) This API (DeleteVpnConnection) is used to delete VPN tunnels.
 * @method Models\DeleteVpnGatewayResponse DeleteVpnGateway(Models\DeleteVpnGatewayRequest $req) This API (DeleteVpnGateway) is used to delete a VPN gateway. Currently, only deletion of pay-as-you-go IPSEC gateway instances in running status is supported.
 * @method Models\DeleteVpnGatewayRoutesResponse DeleteVpnGatewayRoutes(Models\DeleteVpnGatewayRoutesRequest $req) This API is used to delete routes of a VPN gateway.
 * @method Models\DescribeAccountAttributesResponse DescribeAccountAttributes(Models\DescribeAccountAttributesRequest $req) This API (DescribeAccountAttributes) is used to query your account attributes.
 * @method Models\DescribeAddressQuotaResponse DescribeAddressQuota(Models\DescribeAddressQuotaRequest $req) This API (DescribeAddressQuota) is used to query the quota information of your [Elastic IP](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1) (EIP) in the current region. For more information, see [EIP product introduction](https://intl.cloud.tencent.com/document/product/213/5733?from_cn_redirect=1).
 * @method Models\DescribeAddressTemplateGroupsResponse DescribeAddressTemplateGroups(Models\DescribeAddressTemplateGroupsRequest $req) This API (DescribeAddressTemplateGroups) is used to query an IP address template group.
 * @method Models\DescribeAddressTemplatesResponse DescribeAddressTemplates(Models\DescribeAddressTemplatesRequest $req) This API (DescribeAddressTemplates) is used to query an IP address template.
 * @method Models\DescribeAddressesResponse DescribeAddresses(Models\DescribeAddressesRequest $req) This API (DescribeAddresses) is used to query the information of one or multiple [Elastic IPs](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1).
* If the parameter is empty, a number (as specified by the `Limit`, the default value is 20) of EIPs will be returned.
 * @method Models\DescribeAssistantCidrResponse DescribeAssistantCidr(Models\DescribeAssistantCidrRequest $req) This API (DescribeAssistantCidr) is used to query a list of secondary CIDR blocks. (To use this API that is in Beta, please submit a ticket.)
 * @method Models\DescribeBandwidthPackageBillUsageResponse DescribeBandwidthPackageBillUsage(Models\DescribeBandwidthPackageBillUsageRequest $req) This API is used to query the current billable usage of a pay-as-you-go bandwidth package.
 * @method Models\DescribeBandwidthPackageQuotaResponse DescribeBandwidthPackageQuota(Models\DescribeBandwidthPackageQuotaRequest $req) This API is used to query the maximum and used number of bandwidth packages under the account in the current region.
 * @method Models\DescribeBandwidthPackageResourcesResponse DescribeBandwidthPackageResources(Models\DescribeBandwidthPackageResourcesRequest $req) This API is used to query resources in a bandwidth package based on the unique package ID. You can filter the result by specifying conditions and paginate the query results.

 * @method Models\DescribeBandwidthPackagesResponse DescribeBandwidthPackages(Models\DescribeBandwidthPackagesRequest $req) This API is used to query bandwidth package information, including the unique ID of the bandwidth package, the type, the billing mode, the name, and the resource information.
 * @method Models\DescribeCcnAttachedInstancesResponse DescribeCcnAttachedInstances(Models\DescribeCcnAttachedInstancesRequest $req) This API (DescribeCcnAttachedInstances) is used to query the network instances associated with the CCN instance.
 * @method Models\DescribeCcnRegionBandwidthLimitsResponse DescribeCcnRegionBandwidthLimits(Models\DescribeCcnRegionBandwidthLimitsRequest $req) This API is used to query the outbound bandwidth caps of all regions connected with a CCN instance. The API only returns regions included in the associated network instances.
 * @method Models\DescribeCcnRoutesResponse DescribeCcnRoutes(Models\DescribeCcnRoutesRequest $req) This API (DescribeCcnRoutes) is used to query routes that have been added to a CCN.
 * @method Models\DescribeCcnsResponse DescribeCcns(Models\DescribeCcnsRequest $req) This API (DescribeCcns) is used to query the CCN list.
 * @method Models\DescribeClassicLinkInstancesResponse DescribeClassicLinkInstances(Models\DescribeClassicLinkInstancesRequest $req) This API (DescribeClassicLinkInstances) is used to query the Classiclink instances list.
 * @method Models\DescribeCrossBorderComplianceResponse DescribeCrossBorderCompliance(Models\DescribeCrossBorderComplianceRequest $req) This API is used to query the compliance review requests created by the user. 
A service provider can query all review requests created by any `APPID` under its account. Other users can only query their own review requests.
 * @method Models\DescribeCustomerGatewayVendorsResponse DescribeCustomerGatewayVendors(Models\DescribeCustomerGatewayVendorsRequest $req) This API (DescribeCustomerGatewayVendors) is used to query the information of supported customer gateway vendors.
 * @method Models\DescribeCustomerGatewaysResponse DescribeCustomerGateways(Models\DescribeCustomerGatewaysRequest $req) This API (DescribeCustomerGateways) is used to query the customer gateway list.
 * @method Models\DescribeDirectConnectGatewayCcnRoutesResponse DescribeDirectConnectGatewayCcnRoutes(Models\DescribeDirectConnectGatewayCcnRoutesRequest $req) This API (DescribeDirectConnectGatewayCcnRoutes) is used to query the CCN routes (IDC IP range) of the Direct Connect gateway.
 * @method Models\DescribeDirectConnectGatewaysResponse DescribeDirectConnectGateways(Models\DescribeDirectConnectGatewaysRequest $req) This API is used to query direct connect gateways.
 * @method Models\DescribeFlowLogResponse DescribeFlowLog(Models\DescribeFlowLogRequest $req) This API is used to query the information of a flow log.
 * @method Models\DescribeFlowLogsResponse DescribeFlowLogs(Models\DescribeFlowLogsRequest $req) This API is used to query all the flow logs of the current account.
 * @method Models\DescribeGatewayFlowMonitorDetailResponse DescribeGatewayFlowMonitorDetail(Models\DescribeGatewayFlowMonitorDetailRequest $req) This API is used to query the traffic monitoring details of the gateway.
* You can only use this API to query a single gateway instance, which means you must pass in only one of `VpnId`, `DirectConnectGatewayId`, `PeeringConnectionId`, or `NatId`.
* If the gateway has traffic, but no data is returned when this API is called, please check whether gateway traffic monitoring has been enabled in the corresponding gateway details page in the console.
 * @method Models\DescribeGatewayFlowQosResponse DescribeGatewayFlowQos(Models\DescribeGatewayFlowQosRequest $req) This API (DescribeGatewayFlowQos) is used to query the QoS bandwidth limit of inbound IP flow in a gateway.
 * @method Models\DescribeHaVipsResponse DescribeHaVips(Models\DescribeHaVipsRequest $req) This API (DescribeHaVips) is used to query the list of highly available virtual IPs (HAVIP).
 * @method Models\DescribeIpGeolocationDatabaseUrlResponse DescribeIpGeolocationDatabaseUrl(Models\DescribeIpGeolocationDatabaseUrlRequest $req) This API is used to obtain the download link of an IP location database.
 * @method Models\DescribeIpGeolocationInfosResponse DescribeIpGeolocationInfos(Models\DescribeIpGeolocationInfosRequest $req) This API is used to query the information of IP addresses, including their geographical locations and networks.
 * @method Models\DescribeLocalGatewayResponse DescribeLocalGateway(Models\DescribeLocalGatewayRequest $req) This API is used to query local gateways of a CDC instance.
 * @method Models\DescribeNatGatewayDestinationIpPortTranslationNatRulesResponse DescribeNatGatewayDestinationIpPortTranslationNatRules(Models\DescribeNatGatewayDestinationIpPortTranslationNatRulesRequest $req) This API (DescribeNatGatewayDestinationIpPortTranslationNatRules) is used to query the array of objects of the port forwarding rules for a NAT gateway.
 * @method Models\DescribeNatGatewaySourceIpTranslationNatRulesResponse DescribeNatGatewaySourceIpTranslationNatRules(Models\DescribeNatGatewaySourceIpTranslationNatRulesRequest $req) This API is used to query the object arrays of SNAT forwarding rules of the NAT Gateway.
 * @method Models\DescribeNatGatewaysResponse DescribeNatGateways(Models\DescribeNatGatewaysRequest $req) This API (DescribeNatGateways) is used to query NAT gateways.
 * @method Models\DescribeNetDetectStatesResponse DescribeNetDetectStates(Models\DescribeNetDetectStatesRequest $req) This API (DescribeNetDetectStates) is used to query the list of network detection verification results.
 * @method Models\DescribeNetDetectsResponse DescribeNetDetects(Models\DescribeNetDetectsRequest $req) This API (DescribeNetDetects) is used to query the list of network detection instances.
 * @method Models\DescribeNetworkAclsResponse DescribeNetworkAcls(Models\DescribeNetworkAclsRequest $req) This API is used to query a list of network ACLs.
 * @method Models\DescribeNetworkInterfaceLimitResponse DescribeNetworkInterfaceLimit(Models\DescribeNetworkInterfaceLimitRequest $req) This API (DescribeNetworkInterfaceLimit) is used to query the ENI quota based on the ID of CVM instance or ENI. It returns the ENI quota to which the CVM instance can be bound and the IP address quota that can be allocated to the ENI.
 * @method Models\DescribeNetworkInterfacesResponse DescribeNetworkInterfaces(Models\DescribeNetworkInterfacesRequest $req) This API (DescribeNetworkInterfaces) is used to query the ENI list.
 * @method Models\DescribeRouteTablesResponse DescribeRouteTables(Models\DescribeRouteTablesRequest $req)  This API (DescribeRouteTables) is used to query route tables.
 * @method Models\DescribeSecurityGroupAssociationStatisticsResponse DescribeSecurityGroupAssociationStatistics(Models\DescribeSecurityGroupAssociationStatisticsRequest $req) This API (DescribeSecurityGroupAssociationStatistics) is used to query statistics on the instances associated with a security group.
 * @method Models\DescribeSecurityGroupPoliciesResponse DescribeSecurityGroupPolicies(Models\DescribeSecurityGroupPoliciesRequest $req) This API (DescribeSecurityGroupPolicies) is used to query security group policies.
 * @method Models\DescribeSecurityGroupReferencesResponse DescribeSecurityGroupReferences(Models\DescribeSecurityGroupReferencesRequest $req) This API (DescribeSecurityGroupReferences) is used to query referred security groups.
 * @method Models\DescribeSecurityGroupsResponse DescribeSecurityGroups(Models\DescribeSecurityGroupsRequest $req) This API (DescribeSecurityGroups) is used to query security groups.
 * @method Models\DescribeServiceTemplateGroupsResponse DescribeServiceTemplateGroups(Models\DescribeServiceTemplateGroupsRequest $req) This API (DescribeServiceTemplateGroups) is used to query a protocol port template group.
 * @method Models\DescribeServiceTemplatesResponse DescribeServiceTemplates(Models\DescribeServiceTemplatesRequest $req) This API (DescribeServiceTemplates) is used to query protocol port templates.
 * @method Models\DescribeSubnetsResponse DescribeSubnets(Models\DescribeSubnetsRequest $req) This API (DescribeSubnets) is used to query the list of subnets.
 * @method Models\DescribeTaskResultResponse DescribeTaskResult(Models\DescribeTaskResultRequest $req) This API is used to query the EIP async job execution results.
 * @method Models\DescribeVpcEndPointResponse DescribeVpcEndPoint(Models\DescribeVpcEndPointRequest $req) This API is used to query the endpoint list.
 * @method Models\DescribeVpcEndPointServiceResponse DescribeVpcEndPointService(Models\DescribeVpcEndPointServiceRequest $req) This API is used to query the endpoint service list.
 * @method Models\DescribeVpcEndPointServiceWhiteListResponse DescribeVpcEndPointServiceWhiteList(Models\DescribeVpcEndPointServiceWhiteListRequest $req) This API is used to query the endpoint service allowlist.
 * @method Models\DescribeVpcInstancesResponse DescribeVpcInstances(Models\DescribeVpcInstancesRequest $req)  This API (DescribeVpcInstances) is used to query a list of VCM instances on VPC.
 * @method Models\DescribeVpcIpv6AddressesResponse DescribeVpcIpv6Addresses(Models\DescribeVpcIpv6AddressesRequest $req) This API (DescribeVpcIpv6Addresses) is used to query `VPC` `IPv6` information.
This API is used to query only the information of `IPv6` addresses that are already in use. When querying IPs that have not yet been used, this API will not report an error, but the IPs will not appear in the returned results.
 * @method Models\DescribeVpcPrivateIpAddressesResponse DescribeVpcPrivateIpAddresses(Models\DescribeVpcPrivateIpAddressesRequest $req) This API (DescribeVpcPrivateIpAddresses) is used to query the private IP information of a VPC.<br />
This API is used to query only the information of IP addresses that are already in use. When querying IPs that have not yet been used, this API will not report an error, but the IPs will not appear in the returned results.
 * @method Models\DescribeVpcResourceDashboardResponse DescribeVpcResourceDashboard(Models\DescribeVpcResourceDashboardRequest $req) View VPC resources.
 * @method Models\DescribeVpcsResponse DescribeVpcs(Models\DescribeVpcsRequest $req) This API (DescribeVpcs) is used to query the VPC list.
 * @method Models\DescribeVpnConnectionsResponse DescribeVpnConnections(Models\DescribeVpnConnectionsRequest $req)  This API (DescribeVpnConnections) is used to query the VPN tunnel list.
 * @method Models\DescribeVpnGatewayCcnRoutesResponse DescribeVpnGatewayCcnRoutes(Models\DescribeVpnGatewayCcnRoutesRequest $req) This API (DescribeVpnGatewayCcnRoutes) is used to query VPN gateway-based CCN routes.
 * @method Models\DescribeVpnGatewayRoutesResponse DescribeVpnGatewayRoutes(Models\DescribeVpnGatewayRoutesRequest $req) This API is used to query destination routes of a route-based VPN gateway.
 * @method Models\DescribeVpnGatewaysResponse DescribeVpnGateways(Models\DescribeVpnGatewaysRequest $req) This API (DescribeVpnGateways) is used to query the VPN gateway list.
 * @method Models\DetachCcnInstancesResponse DetachCcnInstances(Models\DetachCcnInstancesRequest $req) This API (DetachCcnInstances) is used to unbind a specified network instance from a CCN instance.<br />
After unbinding the network instance, the corresponding routing policy will also be deleted.
 * @method Models\DetachClassicLinkVpcResponse DetachClassicLinkVpc(Models\DetachClassicLinkVpcRequest $req) This API (DetachClassicLinkVpc) is used to delete a Classiclink.
 * @method Models\DetachNetworkInterfaceResponse DetachNetworkInterface(Models\DetachNetworkInterfaceRequest $req) This API is used to unbind an ENI from a CVM.
 * @method Models\DisableCcnRoutesResponse DisableCcnRoutes(Models\DisableCcnRoutesRequest $req) This API (DisableCcnRoutes) is used to disable CCN routes that are already enabled.
 * @method Models\DisableGatewayFlowMonitorResponse DisableGatewayFlowMonitor(Models\DisableGatewayFlowMonitorRequest $req) This API (DisableGatewayFlowMonitor) is used to disable gateway flow monitor.
 * @method Models\DisassociateAddressResponse DisassociateAddress(Models\DisassociateAddressRequest $req) This API is used to unbind an [Elastic IP](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1) (EIP for short).
* This API supports unbinding an EIP from CVM instances and ENIs.
* This API does not support unbinding an EIP from a NAT Gateway. To unbind an EIP from a NAT Gateway, use the [`DisassociateNatGatewayAddress`](https://intl.cloud.tencent.com/document/api/215/36716?from_cn_redirect=1) API.
* Only EIPs in BIND or BIND_ENI status can be unbound.
* Blocked EIPs cannot be unbound.
 * @method Models\DisassociateDirectConnectGatewayNatGatewayResponse DisassociateDirectConnectGatewayNatGateway(Models\DisassociateDirectConnectGatewayNatGatewayRequest $req) This API is used to unbind a direct connect gateway from a NAT Gateway. After unbinding, the direct connect gateway cannot access internet through the NAT Gateway.
 * @method Models\DisassociateNatGatewayAddressResponse DisassociateNatGatewayAddress(Models\DisassociateNatGatewayAddressRequest $req) This API (DisassociateNatGatewayAddress) is used to unbind an EIP from a NAT gateway.
 * @method Models\DisassociateNetworkAclSubnetsResponse DisassociateNetworkAclSubnets(Models\DisassociateNetworkAclSubnetsRequest $req) This API is used to disassociate a network ACL from subnets in a VPC instance.
 * @method Models\DisassociateNetworkInterfaceSecurityGroupsResponse DisassociateNetworkInterfaceSecurityGroups(Models\DisassociateNetworkInterfaceSecurityGroupsRequest $req) This API (DisassociateNetworkInterfaceSecurityGroups) is used to detach (or fully detach if possible) a security group from an ENI.
 * @method Models\DisassociateVpcEndPointSecurityGroupsResponse DisassociateVpcEndPointSecurityGroups(Models\DisassociateVpcEndPointSecurityGroupsRequest $req) This API is used to unbind an endpoint from a security group.
 * @method Models\DownloadCustomerGatewayConfigurationResponse DownloadCustomerGatewayConfiguration(Models\DownloadCustomerGatewayConfigurationRequest $req) This API (DownloadCustomerGatewayConfiguration) is used to download a VPN tunnel configuration.
 * @method Models\EnableCcnRoutesResponse EnableCcnRoutes(Models\EnableCcnRoutesRequest $req) This API (EnableCcnRoutes) is used to enable CCN routes that are already added.<br />
This API is used to verify whether there will be conflict with an existing route after a CCN route is enabled. If there is a conflict, the route will not be enabled, and the process will fail. When a conflict occurs, you must disable the conflicting route before you can enable the desired route.
 * @method Models\EnableGatewayFlowMonitorResponse EnableGatewayFlowMonitor(Models\EnableGatewayFlowMonitorRequest $req) This API (EnableGatewayFlowMonitor) is used to enable gateway flow monitor.
 * @method Models\EnableVpcEndPointConnectResponse EnableVpcEndPointConnect(Models\EnableVpcEndPointConnectRequest $req) This API is used to determine whether to accept the request of connecting with an endpoint.
 * @method Models\GetCcnRegionBandwidthLimitsResponse GetCcnRegionBandwidthLimits(Models\GetCcnRegionBandwidthLimitsRequest $req) This API is used to query the bandwidth limits of a CCN instance. Monthly-subscribed CCNs only support Inter-region Bandwidth Limits, while the pay-as-you-go CCNs support both the Inter-region Bandwidth Limits and Region Outbound Bandwidth Limits. 
 * @method Models\HaVipAssociateAddressIpResponse HaVipAssociateAddressIp(Models\HaVipAssociateAddressIpRequest $req) This API (HaVipAssociateAddressIp) is used to bind an EIP to an HAVIP.<br />
This API is completed asynchronously. If you need to query the async job execution results, please use the `RequestId` returned by this API to query the `QueryTask` API.
 * @method Models\HaVipDisassociateAddressIpResponse HaVipDisassociateAddressIp(Models\HaVipDisassociateAddressIpRequest $req) This API (HaVipDisassociateAddressIp) is used to unbind an EIP which has been bound to an HAVIP.<br />
This API is completed asynchronously. If you need to query the async job execution results, please use the `RequestId` returned by this API to query the `QueryTask` API.
 * @method Models\InquirePriceCreateDirectConnectGatewayResponse InquirePriceCreateDirectConnectGateway(Models\InquirePriceCreateDirectConnectGatewayRequest $req) This API is used to query the price of creating a direct connect gateway.
 * @method Models\InquiryPriceCreateVpnGatewayResponse InquiryPriceCreateVpnGateway(Models\InquiryPriceCreateVpnGatewayRequest $req) This API (InquiryPriceCreateVpnGateway) is used to query the price for VPN gateway creation.
 * @method Models\InquiryPriceRenewVpnGatewayResponse InquiryPriceRenewVpnGateway(Models\InquiryPriceRenewVpnGatewayRequest $req) This API (InquiryPriceRenewVpnGateway) is used to query the price for VPN gateway renewal. Currently, only querying prices for IPSEC-type gateways is supported.
 * @method Models\InquiryPriceResetVpnGatewayInternetMaxBandwidthResponse InquiryPriceResetVpnGatewayInternetMaxBandwidth(Models\InquiryPriceResetVpnGatewayInternetMaxBandwidthRequest $req) This API (InquiryPriceResetVpnGatewayInternetMaxBandwidth) is used to query the price for adjusting the bandwidth cap of a VPN gateway.
 * @method Models\MigrateNetworkInterfaceResponse MigrateNetworkInterface(Models\MigrateNetworkInterfaceRequest $req) This API (MigrateNetworkInterface) is used to migrate ENIs.
 * @method Models\MigratePrivateIpAddressResponse MigratePrivateIpAddress(Models\MigratePrivateIpAddressRequest $req)  This API (MigratePrivateIpAddress) is used to migrate the private IPs of ENIs.

* This API is used to migrate a private IP from one ENI to another. Primary IPs cannot be migrated.
* The ENIs before and after migration must belong to the same subnet.
 * @method Models\ModifyAddressAttributeResponse ModifyAddressAttribute(Models\ModifyAddressAttributeRequest $req) This API (ModifyAddressAttribute) is used to modify the name of an [Elastic IP](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1).
 * @method Models\ModifyAddressInternetChargeTypeResponse ModifyAddressInternetChargeType(Models\ModifyAddressInternetChargeTypeRequest $req) This API is used to adjust the network billing mode of an EIP. Please note that it's available to users whose network fees are billed on IPs but not CVMs.
* The network billing mode can be switched between `BANDWIDTH_PREPAID_BY_MONTH` and `TRAFFIC_POSTPAID_BY_HOUR`.
* The network billing mode for each EIP be changed for up to twice.
 * @method Models\ModifyAddressTemplateAttributeResponse ModifyAddressTemplateAttribute(Models\ModifyAddressTemplateAttributeRequest $req) This API (ModifyAddressTemplateAttribute) is used to modify an IP address template.
 * @method Models\ModifyAddressTemplateGroupAttributeResponse ModifyAddressTemplateGroupAttribute(Models\ModifyAddressTemplateGroupAttributeRequest $req) This API (ModifyAddressTemplateGroupAttribute) is used to modify an IP address template group.
 * @method Models\ModifyAddressesBandwidthResponse ModifyAddressesBandwidth(Models\ModifyAddressesBandwidthRequest $req) This API is used to adjust the bandwidth of [Elastic IP](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1), including EIP billed on a pay-as-you-go, monthly subscription, and bandwidth package basis.
 * @method Models\ModifyAssistantCidrResponse ModifyAssistantCidr(Models\ModifyAssistantCidrRequest $req) This API (ModifyAssistantCidr) is used to batch modify (e.g. add and delete) secondary CIDR blocks. (To use this API that is in Beta, please submit a ticket.)
 * @method Models\ModifyBandwidthPackageAttributeResponse ModifyBandwidthPackageAttribute(Models\ModifyBandwidthPackageAttributeRequest $req) This API is used to modify the attributes of a bandwidth package, including the bandwidth package name, and so on.
 * @method Models\ModifyCcnAttachedInstancesAttributeResponse ModifyCcnAttachedInstancesAttribute(Models\ModifyCcnAttachedInstancesAttributeRequest $req) This API is used to modify CCN-associated instance attributes. Currently, only the `description` can be modified.
 * @method Models\ModifyCcnAttributeResponse ModifyCcnAttribute(Models\ModifyCcnAttributeRequest $req) This API (ModifyCcnAttribute) is used to modify CCN attributes.
 * @method Models\ModifyCcnRegionBandwidthLimitsTypeResponse ModifyCcnRegionBandwidthLimitsType(Models\ModifyCcnRegionBandwidthLimitsTypeRequest $req) This API is used to modify the bandwidth limit policy of a postpaid CCN instance.
 * @method Models\ModifyCustomerGatewayAttributeResponse ModifyCustomerGatewayAttribute(Models\ModifyCustomerGatewayAttributeRequest $req) This API (ModifyCustomerGatewayAttribute) is used to modify the customer gateway information.
 * @method Models\ModifyDirectConnectGatewayAttributeResponse ModifyDirectConnectGatewayAttribute(Models\ModifyDirectConnectGatewayAttributeRequest $req) This API is used to modify the attributes of a direct connect gateway.

 * @method Models\ModifyFlowLogAttributeResponse ModifyFlowLogAttribute(Models\ModifyFlowLogAttributeRequest $req) This API is used to modify the attributes of a flow log.
 * @method Models\ModifyGatewayFlowQosResponse ModifyGatewayFlowQos(Models\ModifyGatewayFlowQosRequest $req) This API (ModifyGatewayFlowQos) is used to adjust the QoS bandwidth limit in a gateway.
 * @method Models\ModifyHaVipAttributeResponse ModifyHaVipAttribute(Models\ModifyHaVipAttributeRequest $req) This API (ModifyHaVipAttribute) is used to modify HAVIP attributes.
 * @method Models\ModifyIpv6AddressesAttributeResponse ModifyIpv6AddressesAttribute(Models\ModifyIpv6AddressesAttributeRequest $req) This API (ModifyIpv6AddressesAttribute) is used to modify the private IPv6 address attributes of an ENI.
 * @method Models\ModifyLocalGatewayResponse ModifyLocalGateway(Models\ModifyLocalGatewayRequest $req) This API is used to modify the local gateway of a CDC instance.
 * @method Models\ModifyNatGatewayAttributeResponse ModifyNatGatewayAttribute(Models\ModifyNatGatewayAttributeRequest $req) This API (ModifyNatGatewayAttribute) is used to modify the attributes of a NAT gateway.
 * @method Models\ModifyNatGatewayDestinationIpPortTranslationNatRuleResponse ModifyNatGatewayDestinationIpPortTranslationNatRule(Models\ModifyNatGatewayDestinationIpPortTranslationNatRuleRequest $req) This API (ModifyNatGatewayDestinationIpPortTranslationNatRule) is used to modify a port forwarding rule for a NAT gateway.
 * @method Models\ModifyNatGatewaySourceIpTranslationNatRuleResponse ModifyNatGatewaySourceIpTranslationNatRule(Models\ModifyNatGatewaySourceIpTranslationNatRuleRequest $req) This API is used to modify a SNAT forwarding rule of the NAT Gateway.
 * @method Models\ModifyNetDetectResponse ModifyNetDetect(Models\ModifyNetDetectRequest $req) This API (ModifyNetDetect) is used to modify network detection parameters.
 * @method Models\ModifyNetworkAclAttributeResponse ModifyNetworkAclAttribute(Models\ModifyNetworkAclAttributeRequest $req) This API is used to modify the attributes of a network ACL.
 * @method Models\ModifyNetworkAclEntriesResponse ModifyNetworkAclEntries(Models\ModifyNetworkAclEntriesRequest $req) This API is used to modify (add or delete) the inbound and outbound rules of a network ACL.
 * @method Models\ModifyNetworkInterfaceAttributeResponse ModifyNetworkInterfaceAttribute(Models\ModifyNetworkInterfaceAttributeRequest $req) This API (ModifyNetworkInterfaceAttribute) is used to modify ENI attributes.
 * @method Models\ModifyPrivateIpAddressesAttributeResponse ModifyPrivateIpAddressesAttribute(Models\ModifyPrivateIpAddressesAttributeRequest $req) This API (ModifyPrivateIpAddressesAttribute) is used to modify the private IP attributes of an ENI.
 * @method Models\ModifyRouteTableAttributeResponse ModifyRouteTableAttribute(Models\ModifyRouteTableAttributeRequest $req) This API (ModifyRouteTableAttribute) is used to modify the attributes of a route table.
 * @method Models\ModifySecurityGroupAttributeResponse ModifySecurityGroupAttribute(Models\ModifySecurityGroupAttributeRequest $req) This API (ModifySecurityGroupAttribute) is used to modify the attributes of a security group (SecurityGroupPolicy).
 * @method Models\ModifySecurityGroupPoliciesResponse ModifySecurityGroupPolicies(Models\ModifySecurityGroupPoliciesRequest $req) This API is used to reset the egress and ingress policies (SecurityGroupPolicy) of a security group.

<ul>
<li>This API deletes all the existing egress and ingress policies, and then adds Egress and Ingress policies. It does not support custom indexes `PolicyIndex`.</li>
<li>For parameters of SecurityGroupPolicySet,<ul>
	<li>If `SecurityGroupPolicySet.Version` is set to 0, all policies will be cleared, and `Egress` and `Ingress` will be ignored.</li>
	<li>If `SecurityGroupPolicySet.Version` is not set to 0, add `Egress` and `Ingress` policies:<ul>
		<li>`Protocol`: allows TCP, UDP, ICMP, ICMPV6, GRE, or ALL.</li>
		<li>`CidrBlock`: a CIDR block in the correct format. In a classic network, if a `CidrBlock` contains private IPs on Tencent Cloud for devices under your account other than CVMs, it does not mean this policy allows you to access these devices. The network isolation policies between tenants take priority over the private network policies in security groups.</li>
		<li>`Ipv6CidrBlock`: an IPv6 CIDR block in the correct format. In a classic network, if an `Ipv6CidrBlock` contains private IPv6 addresses on Tencent Cloud for devices under your account other than CVMs, it does not mean this policy allows you to access these devices. The network isolation policies between tenants take priority over the private network policies in security groups.</li>
		<li>`SecurityGroupId`: ID of the security group. It can be the ID of security group to be modified, or the ID of other security group in the same project. All private IPs of all CVMs under the security group will be covered. If this field is used, the policy will automatically change according to the CVM associated with the group ID while being used to match network messages. You don't need to change it manually.</li>
		<li>`Port`: a single port number such as 80, or a port range in the format of '8000-8010'. You may use this field only if the `Protocol` field takes the value `TCP` or `UDP`.</li>
		<li>`Action`: only allows ACCEPT or DROP.</li>
		<li>`CidrBlock`, `Ipv6CidrBlock`, `SecurityGroupId`, and `AddressTemplate` are mutually exclusive. `Protocol` + `Port` and `ServiceTemplate` are mutually exclusive.</li>
</ul></li></ul></li>
</ul>
 * @method Models\ModifyServiceTemplateAttributeResponse ModifyServiceTemplateAttribute(Models\ModifyServiceTemplateAttributeRequest $req) This API (ModifyServiceTemplateAttribute) is used to modify a protocol port template.
 * @method Models\ModifyServiceTemplateGroupAttributeResponse ModifyServiceTemplateGroupAttribute(Models\ModifyServiceTemplateGroupAttributeRequest $req) This API (ModifyServiceTemplateGroupAttribute) is used to modify a protocol port template group.
 * @method Models\ModifySubnetAttributeResponse ModifySubnetAttribute(Models\ModifySubnetAttributeRequest $req) This API (ModifySubnetAttribute) is used to modify subnet attributes.
 * @method Models\ModifyVpcAttributeResponse ModifyVpcAttribute(Models\ModifyVpcAttributeRequest $req) This API (ModifyVpcAttribute) is used to modify VPC attributes.
 * @method Models\ModifyVpcEndPointAttributeResponse ModifyVpcEndPointAttribute(Models\ModifyVpcEndPointAttributeRequest $req) This API is used to modify endpoint attributes.
 * @method Models\ModifyVpcEndPointServiceAttributeResponse ModifyVpcEndPointServiceAttribute(Models\ModifyVpcEndPointServiceAttributeRequest $req) This API is used to modify endpoint service attributes.


 * @method Models\ModifyVpcEndPointServiceWhiteListResponse ModifyVpcEndPointServiceWhiteList(Models\ModifyVpcEndPointServiceWhiteListRequest $req) This API is used to modify the attributes of the endpoint service allowlist.
 * @method Models\ModifyVpnConnectionAttributeResponse ModifyVpnConnectionAttribute(Models\ModifyVpnConnectionAttributeRequest $req) This API (ModifyVpnConnectionAttribute) is used to modify VPN tunnels.
 * @method Models\ModifyVpnGatewayAttributeResponse ModifyVpnGatewayAttribute(Models\ModifyVpnGatewayAttributeRequest $req) This API (ModifyVpnGatewayAttribute) is used to modify the attributes of VPN gateways.
 * @method Models\ModifyVpnGatewayCcnRoutesResponse ModifyVpnGatewayCcnRoutes(Models\ModifyVpnGatewayCcnRoutesRequest $req) This API (ModifyVpnGatewayCcnRoutes) is used to modify VPN gateway-based CCN routes.
 * @method Models\ModifyVpnGatewayRoutesResponse ModifyVpnGatewayRoutes(Models\ModifyVpnGatewayRoutesRequest $req) This API is used to modify the route status of a VPN gateway.
 * @method Models\NotifyRoutesResponse NotifyRoutes(Models\NotifyRoutesRequest $req) This API is used to publish a route to CCN. This can also be done by clicking the **Publish to CCN** button on the route table page.
 * @method Models\RejectAttachCcnInstancesResponse RejectAttachCcnInstances(Models\RejectAttachCcnInstancesRequest $req) This API (RejectAttachCcnInstances) is used to reject association operations when instances are associated across accounts for the CCN owner.

 * @method Models\ReleaseAddressesResponse ReleaseAddresses(Models\ReleaseAddressesRequest $req) This API (ReleaseAddresses) is used to release one or multiple [Elastic IPs](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1).
* This operation is irreversible. Once you release an EIP, the IP address associated with the EIP no longer belongs to you.
* Only EIPs in UNBIND status can be released.
 * @method Models\RemoveBandwidthPackageResourcesResponse RemoveBandwidthPackageResources(Models\RemoveBandwidthPackageResourcesRequest $req) This API is used to delete a bandwidth package resource, including [Elastic IP](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1), [Cloud Load Balancer](https://intl.cloud.tencent.com/document/product/214/517?from_cn_redirect=1), and so on.
 * @method Models\RenewVpnGatewayResponse RenewVpnGateway(Models\RenewVpnGatewayRequest $req) This API (RenewVpnGateway) is used to renew prepaid (monthly subscription) VPN gateways. Currently, only IPSEC gateways are supported.
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
 * @method Models\TransformAddressResponse TransformAddress(Models\TransformAddressRequest $req) This API (TransformAddress) is used to switch common public IPs into [Elastic IPs](https://intl.cloud.tencent.comhttps://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1?from_cn_redirect=1).
* The platform limits the number of times that a user can unbind an EIP and reassign public IPs in each region per day. For more information, see [EIP product introduction](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1)). The preceding quota can be obtained through the [DescribeAddressQuota](https://intl.cloud.tencent.com/document/api/213/1378?from_cn_redirect=1) API.
 * @method Models\UnassignIpv6AddressesResponse UnassignIpv6Addresses(Models\UnassignIpv6AddressesRequest $req) This API (UnassignIpv6Addresses) is used to release ENI `IPv6` addresses.<br />
This API is completed asynchronously. If you need to query the async execution results, use the `RequestId` returned by this API to query the `QueryTask` API.
 * @method Models\UnassignIpv6CidrBlockResponse UnassignIpv6CidrBlock(Models\UnassignIpv6CidrBlockRequest $req) This API (UnassignIpv6CidrBlock) is used to release IPv6 IP ranges.
If the IP range still has occupied IPs that are not yet repossessed, the IP range cannot be released.
 * @method Models\UnassignIpv6SubnetCidrBlockResponse UnassignIpv6SubnetCidrBlock(Models\UnassignIpv6SubnetCidrBlockRequest $req) This API (UnassignIpv6SubnetCidrBlock) is used to release IPv6 subnet IP ranges.
If the subnet IP range still has occupied IPs that are not yet repossessed, the subnet IP range cannot be released.
 * @method Models\UnassignPrivateIpAddressesResponse UnassignPrivateIpAddresses(Models\UnassignPrivateIpAddressesRequest $req) This API (UnassignPrivateIpAddresses) is used to return the private IPs of ENI.
* To return the secondary private IPs of an ENI, the API will automatically unbind the IPs of an ENI. The primary private IP of the ENI cannot be returned.
 * @method Models\WithdrawNotifyRoutesResponse WithdrawNotifyRoutes(Models\WithdrawNotifyRoutesRequest $req) This API is used to withdraw a route from CCN. This can also be done by clicking the **Withdraw from CCN** button on the route table page.
 */

class VpcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "vpc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "vpc";

    /**
     * @var string
     */
    protected $version = "2017-03-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("vpc")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
