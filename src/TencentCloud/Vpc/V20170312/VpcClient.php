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
 * @method Models\AddTemplateMemberResponse AddTemplateMember(Models\AddTemplateMemberRequest $req) This API is used to add a parameter template of the IP address, protocol port, IP address group, or protocol port group type.
 * @method Models\AdjustPublicAddressResponse AdjustPublicAddress(Models\AdjustPublicAddressRequest $req) This API is used to change the public IP of a CVM or the EIP of the associated bandwidth package.
 * @method Models\AllocateAddressesResponse AllocateAddresses(Models\AllocateAddressesRequest $req) This API is used to apply for one or more [Elastic IP Addresses](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1) (EIPs for short).
* An EIP is a static IP address that is dedicated for dynamic cloud computing. You can quickly re-map an EIP to another instance under your account to protect against instance failures.
* Your EIP is associated with your Tencent Cloud account rather than an instance. It remains associated with your Tencent Cloud account until you choose to explicitly release it or your account is in arrears for more than 24 hours.
* The maximum number of EIPs that can be applied for a Tencent Cloud account in each region is restricted. For more information, see [EIP Product Introduction](https://intl.cloud.tencent.com/document/product/213/5733?from_cn_redirect=1). You can get the quota information through the DescribeAddressQuota API.
 * @method Models\AllocateIPv6AddressesResponse AllocateIPv6Addresses(Models\AllocateIPv6AddressesRequest $req) This API is used to apply for one or more Elastic IPv6 (EIPv6) instances.

- EIPv6 is a fixed public IPv6 address that can be independently applied for and held in a Tencent Cloud region, providing a consistent product experience with Elastic IPv4.
- You can quickly bind an EIPv6 instance to the private IPv6 address of a cloud resource, so as to quickly enable IPv6 public bandwidth for the cloud resource.
- You can also bind an EIPv6 instance to other cloud resources as needed, so as to shield instance failures.
 * @method Models\AllocateIp6AddressesBandwidthResponse AllocateIp6AddressesBandwidth(Models\AllocateIp6AddressesBandwidthRequest $req) This API is used to allocate IPv6 public network bandwidth for classic elastic public IPv6 addresses.

- Classic elastic public IPv6 addresses only have the private network communication capability by default. They can have the IPv6 public network communication capability and be displayed in the list of Classic Elastic Public IPv6 only after IPv6 public network bandwidth is allocated in the console or by calling this API. 
- You can allocate public network bandwidth for one or multiple Classic elastic public IPv6 addresses each time.
 * @method Models\AssignIpv6AddressesResponse AssignIpv6Addresses(Models\AssignIpv6AddressesRequest $req) This API is used to apply for an IPv6 address for the ENI. <br />
This API is completed asynchronously. If you need to query the execution result of an async task, please use the `RequestId` returned by this API to poll the `DescribeVpcTaskResult` API.
* The number of IPs bound with an ENI is limited. For more information, see <a href="/document/product/576/18527">ENI Use Limits</a>.
* You can apply for a specified IPv6 address. Currently, the IPv6 address can only be used as a secondary IP, instead of the primary IP.
* The address must be an idle IP in the subnet to which the ENI belongs.
* When applying for one or more secondary IPv6 addresses for an ENI, the API will return the specified number of secondary IPv6 addresses in the subnet range where the ENI is located.
 * @method Models\AssignIpv6CidrBlockResponse AssignIpv6CidrBlock(Models\AssignIpv6CidrBlockRequest $req) This API is used to assign IPv6 ranges.
* To use this API, you must already have a VPC instance. If you do not have a VPC instance yet, use the <a href="https://intl.cloud.tencent.com/document/api/215/15774?from_cn_redirect=1" title="CreateVpc" target="_blank">CreateVpc</a> API to create one.
* Each VPC can apply for only one IPv6 range.
 * @method Models\AssignIpv6SubnetCidrBlockResponse AssignIpv6SubnetCidrBlock(Models\AssignIpv6SubnetCidrBlockRequest $req) This API (AssignIpv6SubnetCidrBlock) is used to assign IPv6 subnet IP ranges.
* To assign an `IPv6` IP range to a subnet, the `VPC` that the subnet belongs to should have obtained the `IPv6` IP range. If this has not been assigned, use the `AssignIpv6CidrBlock` API to assign an `IPv6` IP range to the `VPC` to which the subnet belongs. Otherwise, the `IPv6` subnet IP range cannot be assigned.
* Each subnet can only be assigned one IPv6 IP range.
 * @method Models\AssignPrivateIpAddressesResponse AssignPrivateIpAddresses(Models\AssignPrivateIpAddressesRequest $req) This API is used to apply for private IPs for an ENI.
* An ENI can only be bound with a limited number of IP addresses. For more information about resource limits, see <a href="/document/product/576/18527">ENI Use Limits</a>.
* You can apply for a specified private IP. It cannot be a primary IP because the primary IP already exists and cannot be modified. The private IP address must be an idle IP in the subnet to which the ENI belongs.
* You can apply for more than one secondary private IP on the ENI. The API will return the specified number of secondary private IPs in the subnet IP range.
>?This API is async. You can call the [`DescribeVpcTaskResult`](https://intl.cloud.tencent.com/document/api/215/59037?from_cn_redirect=1) API to query the task result. When the task is completed, you can continue other tasks.
>
 * @method Models\AssociateAddressResponse AssociateAddress(Models\AssociateAddressRequest $req) This API is used to bind an [Elastic IP](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1) (EIP for short) to the specified private IP of an instance or ENI.
* Binding an EIP to a CVM instance is actually binding the EIP to the primary private IP of the primary ENI on the CVM instance.
* When an EIP is bound, the public IP previously bound to the CVM instance will be unbound and released automatically.
* To bind another EIP to the private IP of the specified ENI, you must first unbind the EIP.
* To bind an EIP to a NAT Gateway, use the API [AssociateNatGatewayAddress](https://intl.cloud.tencent.com/document/product/215/36722?from_cn_redirect=1).
* An EIP cannot be bound if it’s overdue or blocked
* Only EIP in the `UNBIND` status can be bound.
 * @method Models\AssociateDirectConnectGatewayNatGatewayResponse AssociateDirectConnectGatewayNatGateway(Models\AssociateDirectConnectGatewayNatGatewayRequest $req) This API is used to bind a direct connect gateway with a NAT gateway,  and direct its default route to the NAT Gateway.
 * @method Models\AssociateIPv6AddressResponse AssociateIPv6Address(Models\AssociateIPv6AddressRequest $req) This API is used to bind an EIPv6 instance to the private IPv6 address configured on the CVM or ENI.

- Binding an EIPv6 to the CVM essentially indicates binding the EIPv6 to the private IPv6 address configured on the ENI of the CVM.
- Before binding an EIPv6 to the private IPv6 of a specified ENI, ensure that the private IPv6 address is unbound before the binding operation is performed.
 * @method Models\AssociateNatGatewayAddressResponse AssociateNatGatewayAddress(Models\AssociateNatGatewayAddressRequest $req) This API is used to bind an EIP to a NAT gateway.
 * @method Models\AssociateNetworkAclSubnetsResponse AssociateNetworkAclSubnets(Models\AssociateNetworkAclSubnetsRequest $req) This API is used to associate a network ACL with subnets in a VPC instance.
 * @method Models\AssociateNetworkInterfaceSecurityGroupsResponse AssociateNetworkInterfaceSecurityGroups(Models\AssociateNetworkInterfaceSecurityGroupsRequest $req) This API (AssociateNetworkInterfaceSecurityGroups) is used to attach a security group to an ENI.
 * @method Models\AttachCcnInstancesResponse AttachCcnInstances(Models\AttachCcnInstancesRequest $req) This API is used to add a network instance to a CCN instance. Network instances include VPCs and Direct Connect gateways. <br />
The number of network instances that each CCN can be associated with is limited. For more information, see the product documentation. If you need to associate more instances, please submit a ticket.
 * @method Models\AttachClassicLinkVpcResponse AttachClassicLinkVpc(Models\AttachClassicLinkVpcRequest $req) This API is used to create a Classiclink between a VPC instance and a classic network device.
* The VPC instance and the classic network device must be in the same region.
* For differences between VPC and the classic network, see <a href="https://intl.cloud.tencent.com/document/product/215/30720?from_cn_redirect=1">VPC and Classic Network</a>.
>?This API is async. You can call the [`DescribeVpcTaskResult`](https://intl.cloud.tencent.com/document/api/215/59037?from_cn_redirect=1) API to query the task result. When the task is completed, you can continue other tasks.
>
 * @method Models\AttachNetworkInterfaceResponse AttachNetworkInterface(Models\AttachNetworkInterfaceRequest $req) This API is used to bind an ENI to a CVM.
* An ENI must be bound with one security group at least. To bind it, see <a href="https://intl.cloud.tencent.com/document/product/215/43132?from_cn_redirect=1">AssociateNetworkInterfaceSecurityGroups</a>.
* One CVM can be bound with multiple ENIs, but only one can be the primary ENI. For more information about the limits, see <a href="https://intl.cloud.tencent.com/document/product/576/18527?from_cn_redirect=1">ENI Use Limits</a>.
* An ENI can only be bound to one CVM.
* Only the running or shutdown CVMs can be bound with ENIs. For more information about the CVM status, see <a href="https://intl.cloud.tencent.com/document/api/213/9452?from_cn_redirect=1#InstanceStatus">InstanceStatus</a> in the Data Types.
* An ENI can only be bound to a VPC-based CVM under the same availability zone as the ENI subnet.

This API is completed asynchronously. If you need to query the execution result of an async task, please use the `RequestId` returned by this API to poll the `DescribeVpcTaskResult` API.
 * @method Models\AttachSnapshotInstancesResponse AttachSnapshotInstances(Models\AttachSnapshotInstancesRequest $req) This API is used to associate a snapshot policy with specified instances.
 * @method Models\AuditCrossBorderComplianceResponse AuditCrossBorderCompliance(Models\AuditCrossBorderComplianceRequest $req) This API is used by the service provider to perform a compliance audit.
* This API is only provided for service providers to audit compliance review requests received. Tencent Cloud will verify the identity of the service provider by the `APPID`. 
* The status of the review request can be changed between `APPROVED` and `DENY`.
 * @method Models\CheckAssistantCidrResponse CheckAssistantCidr(Models\CheckAssistantCidrRequest $req) This API is used to check whether the secondary CIDR block conflicts with existing routes, peering connections (peer VPC CIDR blocks), and other resources. 
* Check whether the secondary CIDR block overlaps with the primary/secondary CIDR block of the current VPC.
* Check whether the secondary CIDR block overlaps with the routing destination of the current VPC.
* If the current VPC is used in a peering connection, check whether the secondary CIDR block overlaps with the primary/secondary CIDR block of the peer VPC.
 * @method Models\CheckNetDetectStateResponse CheckNetDetectState(Models\CheckNetDetectStateRequest $req) This API is used to verify the network detection status.
 * @method Models\CloneSecurityGroupResponse CloneSecurityGroup(Models\CloneSecurityGroupRequest $req) This API is used to create a security group with the same rule configurations as an existing security group. The cloning only copies the security group and its rules, but not the security group tags.
 * @method Models\CreateAddressTemplateResponse CreateAddressTemplate(Models\CreateAddressTemplateRequest $req) This API is used to create an IP address template.
 * @method Models\CreateAddressTemplateGroupResponse CreateAddressTemplateGroup(Models\CreateAddressTemplateGroupRequest $req) This API is used to create an IP address template group.
 * @method Models\CreateAndAttachNetworkInterfaceResponse CreateAndAttachNetworkInterface(Models\CreateAndAttachNetworkInterfaceRequest $req) This API is used to create an ENI and bind it to a CVM.
* You can specify private IP addresses and a primary IP when creating an ENI. The specified private IP must be idle and in the same subnet as the ENI.
* When creating an ENI, you can specify the number of private IPs that you want to apply for. The system will randomly generate private IP addresses.
* The number of IPs bound with an ENI is limited. For more information, see <a href="/document/product/576/18527">ENI Use Limits</a>.
* You can bind an existing security group when creating an ENI.
* You can bind a tag when creating an ENI. The tag list in the response indicates the tags that have been successfully added.
>?This API is async. You can call the [`DescribeVpcTaskResult`](https://intl.cloud.tencent.com/document/api/215/59037?from_cn_redirect=1) API to query the task result. When the task is completed, you can continue other tasks.
>
 * @method Models\CreateAssistantCidrResponse CreateAssistantCidr(Models\CreateAssistantCidrRequest $req) This API is used to batch create secondary CIDR blocks.
 * @method Models\CreateBandwidthPackageResponse CreateBandwidthPackage(Models\CreateBandwidthPackageRequest $req) This API is used to create a [device bandwidth package](https://intl.cloud.tencent.com/document/product/684/15245?from_cn_redirect=1#bwptype) or an [IP bandwidth package](https://intl.cloud.tencent.com/document/product/684/15245?from_cn_redirect=1#bwptype).
 * @method Models\CreateCcnResponse CreateCcn(Models\CreateCcnRequest $req) This API is used to create a CCN instance.
* You can add tags to a CCN instance upon the creation. The tags are added successfully if they are listed in the response.
* There is a quota of CCN instances for each account. For more information, see product documentation. To increase the quota, please submit a ticket.
 * @method Models\CreateCustomerGatewayResponse CreateCustomerGateway(Models\CreateCustomerGatewayRequest $req) This API (CreateCustomerGateway) is used to create customer gateways.
 * @method Models\CreateDefaultVpcResponse CreateDefaultVpc(Models\CreateDefaultVpcRequest $req) This API is used to create a VPC with default settings.

To create a VPC with custom settings, such as VPC name, IP range, subnet IP range, and subnet availability zone, use `CreateVpc` instead.

This API may not create a default VPC. It depends on the network attributes (`DescribeAccountAttributes`) of your account.
* If both basic network and VPC are supported, the returned `VpcId` is 0.
* If only VPC is supported, the default VPC information is returned.

You can also use the `Force` parameter to forcibly return a default VPC.
 * @method Models\CreateDirectConnectGatewayResponse CreateDirectConnectGateway(Models\CreateDirectConnectGatewayRequest $req) This API is used to create a direct connect gateway.
 * @method Models\CreateDirectConnectGatewayCcnRoutesResponse CreateDirectConnectGatewayCcnRoutes(Models\CreateDirectConnectGatewayCcnRoutesRequest $req) This API (CreateDirectConnectGatewayCcnRoutes) is used to create the CCN route (IDC IP range) of a Direct Connect gateway.
 * @method Models\CreateFlowLogResponse CreateFlowLog(Models\CreateFlowLogRequest $req) This API is used to create a flow log.
 * @method Models\CreateHaVipResponse CreateHaVip(Models\CreateHaVipRequest $req) This API is used to create a highly available virtual IP (HAVIP).
 * @method Models\CreateLocalGatewayResponse CreateLocalGateway(Models\CreateLocalGatewayRequest $req) This API is used to create a local gateway for a CDC instance.
 * @method Models\CreateNatGatewayResponse CreateNatGateway(Models\CreateNatGatewayRequest $req) This API is used to create a NAT Gateway.
Before taking actions on a NAT gateway, ensure that it has been successfully created, namely, the `State` field in the response of the `DescribeNatGateway` API is `AVAILABLE`.
 * @method Models\CreateNatGatewayDestinationIpPortTranslationNatRuleResponse CreateNatGatewayDestinationIpPortTranslationNatRule(Models\CreateNatGatewayDestinationIpPortTranslationNatRuleRequest $req) This API is used to create the port forwarding rules of a NAT gateway.
 * @method Models\CreateNatGatewaySourceIpTranslationNatRuleResponse CreateNatGatewaySourceIpTranslationNatRule(Models\CreateNatGatewaySourceIpTranslationNatRuleRequest $req) This API is used to create SNAT rules for a NAT gateway.
 * @method Models\CreateNetDetectResponse CreateNetDetect(Models\CreateNetDetectRequest $req) This API is used to create a network probe.
 * @method Models\CreateNetworkAclResponse CreateNetworkAcl(Models\CreateNetworkAclRequest $req) This API is used to create a <a href="https://intl.cloud.tencent.com/document/product/215/20088?from_cn_redirect=1">network ACL</a>.
* The inbound and outbound rules for a new network ACL are "Deny All" by default. You need to call `ModifyNetworkAclEntries` to set rules for the new network ACL as needed.
 * @method Models\CreateNetworkAclQuintupleEntriesResponse CreateNetworkAclQuintupleEntries(Models\CreateNetworkAclQuintupleEntriesRequest $req) This API is used to add one or more in/outbound rules of the network ACL quintuple.
 * @method Models\CreateNetworkInterfaceResponse CreateNetworkInterface(Models\CreateNetworkInterfaceRequest $req) This API is used to create an ENI.
* You can specify private IP addresses and a primary IP when creating an ENI. The specified private IP must be in the same subnet as the ENI and is not occupied.
* When creating an ENI, you can specify the number of private IP addresses that you want to apply for. The system will randomly generate private IP addresses.
* An ENI can only be bound with a limited number of IP addresses. For more information about resource limits, see <a href="/document/product/576/18527">ENI Use Limits</a>.
* You can bind an existing security group when creating an ENI.
* You can bind a tag when creating an ENI. The tag list in the response indicates the tags that have been successfully added.
>?This API is async. You can call the [`DescribeVpcTaskResult`](https://intl.cloud.tencent.com/document/api/215/59037?from_cn_redirect=1) API to query the task result. When the task is completed, you can continue other tasks.
>
 * @method Models\CreateReserveIpAddressesResponse CreateReserveIpAddresses(Models\CreateReserveIpAddressesRequest $req) This API is used to create a reserved private IP address.
 * @method Models\CreateRouteTableResponse CreateRouteTable(Models\CreateRouteTableRequest $req) This API is used to create a route table.
* After the VPC instance has been created, the system creates a default route table with which all newly created subnets will be associated. By default, you can use this route table to manage your routing policies. If you have multiple routing policies, you can call the API for creating route tables to create more route tables to manage these routing policies.
* You can bind a tag when creating a route table. The tag list in the response indicates the tags that have been successfully added.
 * @method Models\CreateRoutesResponse CreateRoutes(Models\CreateRoutesRequest $req) This API is used to create routes. 
* You can batch add routes to a specified route table.
 * @method Models\CreateSecurityGroupResponse CreateSecurityGroup(Models\CreateSecurityGroupRequest $req) This API is used to create a security group (SecurityGroup).
* Note the <a href="https://intl.cloud.tencent.com/document/product/213/12453?from_cn_redirect=1">maximum number of security groups</a> per project in each region under each account.
* Both the inbound and outbound rules for a newly created security group are "Deny All" by default. You need to call CreateSecurityGroupPolicies to set security group rules based on your needs.
* You can bind a tag when creating a security group. The tag list in the response indicates the tags that have been successfully added.
 * @method Models\CreateSecurityGroupPoliciesResponse CreateSecurityGroupPolicies(Models\CreateSecurityGroupPoliciesRequest $req) This API is used to create security group policies (`SecurityGroupPolicy`).

For parameters of `SecurityGroupPolicySet`,
<ul>
<li>`Version`: The version number of a security group policy, which automatically increases by one each time you update the security policy, to prevent expiration of the updated routing policies. If it is left empty, any conflicts will be ignored.</li>
<li>When creating the `Egress` and `Ingress` polices,<ul>
<li>`Protocol`: Allows `TCP`, `UDP`, `ICMP`, `ICMPV6`, `GRE` and `ALL`.</li>
<li>`CidrBlock`: For the classic network, the `CidrBlock` can contain private IPs of Tencent Cloud resources that are not under your account. It does not mean that you can access these devices. The network isolation policies between tenants take priority over the private network policies in security groups.</li>
<li>`Ipv6CidrBlock`: For the classic network, `Ipv6CidrBlock` can contain private IPv6 addresses of Tencent Cloud resources that are not under your account. It does not mean that you can access these devices. The network isolation policies between tenants take priority over the private network policies in security groups.</li>
<li>`SecurityGroupId`: ID of the security group to create policies. </li>
<li>`Port`: A single port (“80”) or a port range ("8000-8010"). This parameter is only available when `Protocol` is `TCP` or `UDP`.</li>
<li>`Action`: `ACCEPT` or `DROP`.</li>
<li><code>CidrBlock</code>, <code>Ipv6CidrBlock</code>, <code>SecurityGroupId</code>, and <code>AddressTemplate</code> are mutually exclusive. <code>Protocol</code> + <code>Port</code> and <code>ServiceTemplate</code> are mutually exclusive. <code>IPv6CidrBlock</code> and <code>ICMP</code> are mutually exclusive; to use them, enter <code>ICMPV6</code>.</li>
<li>You can only create policies in one direction in each request. To specify the `PolicyIndex` parameter, use the same index number in policies. If you want to insert a rule before the first rule, enter 0; if you want to add a rule after the last rule, leave it empty.</li>
</ul></li></ul>
 * @method Models\CreateSecurityGroupWithPoliciesResponse CreateSecurityGroupWithPolicies(Models\CreateSecurityGroupWithPoliciesRequest $req) This API is used to create a security group, and add security group policies.
* For the the upper limit of security groups per project in each region under each account, <a href="https://intl.cloud.tencent.com/document/product/213/12453?from_cn_redirect=1">see here</a>
* For newly created security groups, the inbound and outbound policies are set to `Deny All` by default. You need to call <a href="https://intl.cloud.tencent.com/document/product/215/15807?from_cn_redirect=1">CreateSecurityGroupPolicies</a>
to change it.

Description:
* `Version`: The version number of a security group policy. It automatically increments by 1 every time you update the security policy, so to prevent the expiration of the updated policies. If this field is left empty, any conflicts will be ignored.
* `Protocol`: Values can be `TCP`, `UDP`, `ICMP`, `ICMPV6`, `GRE`, and `ALL`.
* `CidrBlock`: Enter a CIDR block in the correct format. In the classic network, even if the CIDR block specified in `CidrBlock` contains the Tencent Cloud private IPs not used for CVMs under your Tencent Cloud account, it does not mean this policy allows you to access those resources. The network isolation policies between tenants take priority over the private network policies in security groups.
* `Ipv6CidrBlock`: Enter an IPv6 CIDR block in the correct format. In the classic network, even if the CIDR block specified in `Ipv6CidrBlock` contains the Tencent Cloud private IPv6 addresses not used for CVMs under your Tencent Cloud account, it does not mean this policy allows you to access those resources. The network isolation policies between tenants take priority over the private network policies in security groups.
* `SecurityGroupId`: ID of the security group. It can be the ID of a security group to be modified, or the ID of another security group in the same project. All private IPs of all CVMs under the security group will be covered. If this field is used, the policy will automatically change according to the CVM associated with the group ID while being used to match network messages. You don't need to change it manually.
* `Port`: Enter a single port number (such as `80`), or a port range (such as `8000-8010`). `Port` is only applicable when `Protocol` is `TCP` or `UDP`. If `Protocol` is not `TCP` or `UDP`, `Protocol` and `Port` cannot be both specified. 
* `Action`: Values can be `ACCEPT` or `DROP`.
* `CidrBlock`, `Ipv6CidrBlock`, `SecurityGroupId`, and `AddressTemplate` are exclusive to one another. "Protocol + Port" and `ServiceTemplate` are mutually exclusive.
* Only policies in one direction can be created in each request. If you need to specify the `PolicyIndex` parameter, the indexes of policies must be consistent.
 * @method Models\CreateServiceTemplateResponse CreateServiceTemplate(Models\CreateServiceTemplateRequest $req) This API (CreateServiceTemplate) is used to create a protocol port template.
 * @method Models\CreateServiceTemplateGroupResponse CreateServiceTemplateGroup(Models\CreateServiceTemplateGroupRequest $req) This API (CreateServiceTemplateGroup) is used to create a protocol port template group.
 * @method Models\CreateSnapshotPoliciesResponse CreateSnapshotPolicies(Models\CreateSnapshotPoliciesRequest $req) This API is used to create snapshot policies.
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
* The subnet mask of the smallest IP address range that can be created is 28 (16 IP addresses), that of the largest IP address ranges 10.0.0.0/12 and 172.16.0.0/12 is 12 (1,048,576 IP addresses), and that of the largest IP address range 192.168.0.0/16 is 16 (65,536 IP addresses). For more information on how to plan VPC IP ranges, see [Network Planning](https://intl.cloud.tencent.com/document/product/215/30313?from_cn_redirect=1).
* The number of VPC instances that can be created in a region is limited. For more information, see <a href="https://intl.cloud.tencent.com/doc/product/215/537?from_cn_redirect=1" title="VPC Use Limits">VPC Use Limits</a>. To request more resources, [submit a ticket](https://console.cloud.tencent.com/workorder/category).
* You can bind tags when creating a VPC instance. The tag list in the response indicates the tags that have been successfully added.
 * @method Models\CreateVpcEndPointResponse CreateVpcEndPoint(Models\CreateVpcEndPointRequest $req) This API is used to create an endpoint.
 * @method Models\CreateVpcEndPointServiceResponse CreateVpcEndPointService(Models\CreateVpcEndPointServiceRequest $req) This API is used to create an endpoint service.
 * @method Models\CreateVpcEndPointServiceWhiteListResponse CreateVpcEndPointServiceWhiteList(Models\CreateVpcEndPointServiceWhiteListRequest $req) This API is used to create the endpoint service allowlist.
 * @method Models\CreateVpnConnectionResponse CreateVpnConnection(Models\CreateVpnConnectionRequest $req) This API is used to create a VPN tunnel.
>?This API is async. You can call the [`DescribeVpcTaskResult`](https://intl.cloud.tencent.com/document/api/215/59037?from_cn_redirect=1) API to query the task result. When the task is completed, you can continue other tasks.
>
 * @method Models\CreateVpnGatewayResponse CreateVpnGateway(Models\CreateVpnGatewayRequest $req) This API (CreateVpnGateway) is used to create a VPN gateway.
 * @method Models\CreateVpnGatewayRoutesResponse CreateVpnGatewayRoutes(Models\CreateVpnGatewayRoutesRequest $req) This API is used to create destination routes of a route-based VPN gateway.
 * @method Models\DeleteAddressTemplateResponse DeleteAddressTemplate(Models\DeleteAddressTemplateRequest $req) This API (DeleteAddressTemplate) is used to delete an IP address template.
 * @method Models\DeleteAddressTemplateGroupResponse DeleteAddressTemplateGroup(Models\DeleteAddressTemplateGroupRequest $req) This API (DeleteAddressTemplateGroup) is used to delete an IP address template group.
 * @method Models\DeleteAssistantCidrResponse DeleteAssistantCidr(Models\DeleteAssistantCidrRequest $req) This API is used to delete a secondary CIDR block.
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
 * @method Models\DeleteHaVipResponse DeleteHaVip(Models\DeleteHaVipRequest $req) This API is used to delete an HAVIP. <br />
This API is completed asynchronously. If you need to query the execution result of an async task, please use the `RequestId` returned by this API to poll the `DescribeVpcTaskResult` API.
 * @method Models\DeleteLocalGatewayResponse DeleteLocalGateway(Models\DeleteLocalGatewayRequest $req) This API is used to delete the local gateway of a CDC instance.
 * @method Models\DeleteNatGatewayResponse DeleteNatGateway(Models\DeleteNatGatewayRequest $req) This API is used to delete a NAT gateway.
When a NAT gateway is deleted, all routes containing this gateway are deleted automatically, and the elastic IP is unbound.
 * @method Models\DeleteNatGatewayDestinationIpPortTranslationNatRuleResponse DeleteNatGatewayDestinationIpPortTranslationNatRule(Models\DeleteNatGatewayDestinationIpPortTranslationNatRuleRequest $req) This API is used to delete the port forwarding rule of a NAT gateway.
 * @method Models\DeleteNatGatewaySourceIpTranslationNatRuleResponse DeleteNatGatewaySourceIpTranslationNatRule(Models\DeleteNatGatewaySourceIpTranslationNatRuleRequest $req) This API is used to delete a SNAT forwarding rule of a NAT gateway.
 * @method Models\DeleteNetDetectResponse DeleteNetDetect(Models\DeleteNetDetectRequest $req) This API is used to delete a network probe.
 * @method Models\DeleteNetworkAclResponse DeleteNetworkAcl(Models\DeleteNetworkAclRequest $req) This API is used to delete a network ACL.
 * @method Models\DeleteNetworkAclQuintupleEntriesResponse DeleteNetworkAclQuintupleEntries(Models\DeleteNetworkAclQuintupleEntriesRequest $req) This API is used to delete specified in/outbound rules of the network ACL quintuple. In the `NetworkAclQuintupleEntrySet` parameters, `NetworkAclQuintupleEntryId` is required for `NetworkAclQuintupleEntry`.
 * @method Models\DeleteNetworkInterfaceResponse DeleteNetworkInterface(Models\DeleteNetworkInterfaceRequest $req) This API is used to delete an ENI.
* An ENI cannot be deleted when it’s bound to a CVM.
 * After the deletion, all of its private IP addresses will be released.

This API is completed asynchronously. If you need to query the execution result of an async task, please use the `RequestId` returned by this API to poll the `DescribeVpcTaskResult` API.
 * @method Models\DeleteReserveIpAddressesResponse DeleteReserveIpAddresses(Models\DeleteReserveIpAddressesRequest $req) This API is used to delete a reserved private IP address.
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
 * @method Models\DeleteSnapshotPoliciesResponse DeleteSnapshotPolicies(Models\DeleteSnapshotPoliciesRequest $req) This API is used to delete snapshot policies.
 * @method Models\DeleteSubnetResponse DeleteSubnet(Models\DeleteSubnetRequest $req) This API is used to delete a subnet.
* Remove all resources in the subnet before deleting it
 * @method Models\DeleteTemplateMemberResponse DeleteTemplateMember(Models\DeleteTemplateMemberRequest $req) This API is used to delete a parameter template of the IP address, protocol port, IP address group, or protocol port group type.
 * @method Models\DeleteTrafficPackagesResponse DeleteTrafficPackages(Models\DeleteTrafficPackagesRequest $req) This API is used to delete traffic packages. Note that only non-valid traffic packages can be deleted. 
 * @method Models\DeleteVpcResponse DeleteVpc(Models\DeleteVpcRequest $req) This API (DeleteVpc) is used to delete VPCs.
* Before deleting a VPC, ensure that the VPC contains no resources, including CVMs, cloud databases, NoSQL databases, VPN gateways, direct connect gateways, load balancers, peering connections, and basic network devices that are linked to the VPC.
* The deletion of VPCs is irreversible. Proceed with caution.
 * @method Models\DeleteVpcEndPointResponse DeleteVpcEndPoint(Models\DeleteVpcEndPointRequest $req) This API is used to delete an endpoint.
 * @method Models\DeleteVpcEndPointServiceResponse DeleteVpcEndPointService(Models\DeleteVpcEndPointServiceRequest $req) This API is used to delete an endpoint service.


 * @method Models\DeleteVpcEndPointServiceWhiteListResponse DeleteVpcEndPointServiceWhiteList(Models\DeleteVpcEndPointServiceWhiteListRequest $req) This API is used to delete the endpoint service allowlist.
 * @method Models\DeleteVpnConnectionResponse DeleteVpnConnection(Models\DeleteVpnConnectionRequest $req) This API is used to delete a VPN tunnel.
 * @method Models\DeleteVpnGatewayResponse DeleteVpnGateway(Models\DeleteVpnGatewayRequest $req) This API (DeleteVpnGateway) is used to delete a VPN gateway. Currently, only deletion of pay-as-you-go IPSEC gateway instances in running status is supported.
 * @method Models\DeleteVpnGatewayRoutesResponse DeleteVpnGatewayRoutes(Models\DeleteVpnGatewayRoutesRequest $req) This API is used to delete routes of a VPN gateway. 
 * @method Models\DescribeAccountAttributesResponse DescribeAccountAttributes(Models\DescribeAccountAttributesRequest $req) This API (DescribeAccountAttributes) is used to query your account attributes.
 * @method Models\DescribeAddressQuotaResponse DescribeAddressQuota(Models\DescribeAddressQuotaRequest $req) This API (DescribeAddressQuota) is used to query the quota information of your [Elastic IP](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1) (EIP) in the current region. For more information, see [EIP product introduction](https://intl.cloud.tencent.com/document/product/213/5733?from_cn_redirect=1).
 * @method Models\DescribeAddressTemplateGroupsResponse DescribeAddressTemplateGroups(Models\DescribeAddressTemplateGroupsRequest $req) This API (DescribeAddressTemplateGroups) is used to query an IP address template group.
 * @method Models\DescribeAddressTemplatesResponse DescribeAddressTemplates(Models\DescribeAddressTemplatesRequest $req) This API (DescribeAddressTemplates) is used to query an IP address template.
 * @method Models\DescribeAddressesResponse DescribeAddresses(Models\DescribeAddressesRequest $req) This API (DescribeAddresses) is used to query the information of one or multiple [Elastic IPs](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1).
* If the parameter is empty, a number (as specified by the `Limit`, the default value is 20) of EIPs will be returned.
 * @method Models\DescribeAssistantCidrResponse DescribeAssistantCidr(Models\DescribeAssistantCidrRequest $req) This API is used to query the list of secondary CIDR blocks.
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
 * @method Models\DescribeGatewayFlowQosResponse DescribeGatewayFlowQos(Models\DescribeGatewayFlowQosRequest $req) This API is used to query the inbound IP bandwidth limit of a gateway.
 * @method Models\DescribeHaVipsResponse DescribeHaVips(Models\DescribeHaVipsRequest $req) This API (DescribeHaVips) is used to query the list of highly available virtual IPs (HAVIP).
 * @method Models\DescribeIPv6AddressesResponse DescribeIPv6Addresses(Models\DescribeIPv6AddressesRequest $req) This API is used to query detailed information of one or more EIPv6 instances.

- You can query EIPv6 and traditional EIPv6 instance information in a specified region.
- The system returns a certain number (as specified by the Limit, the default value is 20) of EIPv6 instances of the current user if the parameter is empty.
 * @method Models\DescribeInstanceJumboResponse DescribeInstanceJumbo(Models\DescribeInstanceJumboRequest $req) This API is used to check whether Cloud Virtual Machines support jumbo frames.
Usage limits.
This API is used to perform operations that require CAM policy authorization and read access to the corresponding instance. The API accesses CVM instances, so it verifies whether there are CAM permissions for the instance. For example: CAM action allows vpc:DescribeInstanceJumbo; resource allows qcs::cvm:ap-guangzhou:uin/2126195383:instance/*.
This API is used to check the jumbo frame status before and after instance migration. The status returned by this API may be inconsistent before and after migration. You need to check whether the host machines of the instance before and after migration both support jumbo frames. One possible reason is that the instance has been migrated to a host machine that does not support jumbo frames.
 * @method Models\DescribeIp6AddressesResponse DescribeIp6Addresses(Models\DescribeIp6AddressesRequest $req) This API is used to query the detailed information on one or multiple classic elastic public IPv6 instances.
 * @method Models\DescribeIpGeolocationDatabaseUrlResponse DescribeIpGeolocationDatabaseUrl(Models\DescribeIpGeolocationDatabaseUrlRequest $req) This API is used to obtain the download link of an IP location database.
<font color="#FF0000">This API will be discontinued soon and is only available for existing users.</font>
 * @method Models\DescribeIpGeolocationInfosResponse DescribeIpGeolocationInfos(Models\DescribeIpGeolocationInfosRequest $req) This API is used to query the location and network information of one or more IP addresses.
<font color="#FF0000">This API will be discontinued soon and is only available for existing users.</font>
 * @method Models\DescribeLocalGatewayResponse DescribeLocalGateway(Models\DescribeLocalGatewayRequest $req) This API is used to query local gateways of a CDC instance.
 * @method Models\DescribeNatGatewayDestinationIpPortTranslationNatRulesResponse DescribeNatGatewayDestinationIpPortTranslationNatRules(Models\DescribeNatGatewayDestinationIpPortTranslationNatRulesRequest $req) This API is used to query the array of objects of a NAT gateway's port forwarding rules.
 * @method Models\DescribeNatGatewayDirectConnectGatewayRouteResponse DescribeNatGatewayDirectConnectGatewayRoute(Models\DescribeNatGatewayDirectConnectGatewayRouteRequest $req) This API is used to query the routes between a NAT gateway and Direct Connect.
 * @method Models\DescribeNatGatewaySourceIpTranslationNatRulesResponse DescribeNatGatewaySourceIpTranslationNatRules(Models\DescribeNatGatewaySourceIpTranslationNatRulesRequest $req) This API is used to query the NAT gateway's SNAT forwarding rules.
 * @method Models\DescribeNatGatewaysResponse DescribeNatGateways(Models\DescribeNatGatewaysRequest $req) This API is used to query NAT gateways.
 * @method Models\DescribeNetDetectStatesResponse DescribeNetDetectStates(Models\DescribeNetDetectStatesRequest $req) This API (DescribeNetDetectStates) is used to query the list of network detection verification results.
 * @method Models\DescribeNetDetectsResponse DescribeNetDetects(Models\DescribeNetDetectsRequest $req) This API (DescribeNetDetects) is used to query the list of network detection instances.
 * @method Models\DescribeNetworkAclQuintupleEntriesResponse DescribeNetworkAclQuintupleEntries(Models\DescribeNetworkAclQuintupleEntriesRequest $req) This API is used to query the list of in/outbound network ACL quintuple entries.
 * @method Models\DescribeNetworkAclsResponse DescribeNetworkAcls(Models\DescribeNetworkAclsRequest $req) This API is used to query a list of network ACLs.
 * @method Models\DescribeNetworkInterfaceLimitResponse DescribeNetworkInterfaceLimit(Models\DescribeNetworkInterfaceLimitRequest $req) This API (DescribeNetworkInterfaceLimit) is used to query the ENI quota based on the ID of CVM instance or ENI. It returns the ENI quota to which the CVM instance can be bound and the IP address quota that can be allocated to the ENI.
 * @method Models\DescribeNetworkInterfacesResponse DescribeNetworkInterfaces(Models\DescribeNetworkInterfacesRequest $req) This API (DescribeNetworkInterfaces) is used to query the ENI list.
 * @method Models\DescribeReserveIpAddressesResponse DescribeReserveIpAddresses(Models\DescribeReserveIpAddressesRequest $req) This API is used to query reserved private IP addresses.
 * @method Models\DescribeRouteTablesResponse DescribeRouteTables(Models\DescribeRouteTablesRequest $req) This API is used to query route tables.
 * @method Models\DescribeSecurityGroupAssociationStatisticsResponse DescribeSecurityGroupAssociationStatistics(Models\DescribeSecurityGroupAssociationStatisticsRequest $req) This API (DescribeSecurityGroupAssociationStatistics) is used to query statistics on the instances associated with a security group.
 * @method Models\DescribeSecurityGroupPoliciesResponse DescribeSecurityGroupPolicies(Models\DescribeSecurityGroupPoliciesRequest $req) This API (DescribeSecurityGroupPolicies) is used to query security group policies.
 * @method Models\DescribeSecurityGroupReferencesResponse DescribeSecurityGroupReferences(Models\DescribeSecurityGroupReferencesRequest $req) This API (DescribeSecurityGroupReferences) is used to query referred security groups.
 * @method Models\DescribeSecurityGroupsResponse DescribeSecurityGroups(Models\DescribeSecurityGroupsRequest $req) This API (DescribeSecurityGroups) is used to query security groups.
 * @method Models\DescribeServiceTemplateGroupsResponse DescribeServiceTemplateGroups(Models\DescribeServiceTemplateGroupsRequest $req) This API (DescribeServiceTemplateGroups) is used to query a protocol port template group.
 * @method Models\DescribeServiceTemplatesResponse DescribeServiceTemplates(Models\DescribeServiceTemplatesRequest $req) This API (DescribeServiceTemplates) is used to query protocol port templates.
 * @method Models\DescribeSgSnapshotFileContentResponse DescribeSgSnapshotFileContent(Models\DescribeSgSnapshotFileContentRequest $req) This API is used to query the snapshot file contents.
 * @method Models\DescribeSnapshotAttachedInstancesResponse DescribeSnapshotAttachedInstances(Models\DescribeSnapshotAttachedInstancesRequest $req) This API is used to query instances associated with a snapshot policy.
 * @method Models\DescribeSnapshotFilesResponse DescribeSnapshotFiles(Models\DescribeSnapshotFilesRequest $req) This API is used to query snapshot files.
 * @method Models\DescribeSnapshotPoliciesResponse DescribeSnapshotPolicies(Models\DescribeSnapshotPoliciesRequest $req) This API is used to query snapshot policies.
 * @method Models\DescribeSubnetResourceDashboardResponse DescribeSubnetResourceDashboard(Models\DescribeSubnetResourceDashboardRequest $req) This API is used to query the subnet resource.
 * @method Models\DescribeSubnetsResponse DescribeSubnets(Models\DescribeSubnetsRequest $req) This API (DescribeSubnets) is used to query the list of subnets.
 * @method Models\DescribeTaskResultResponse DescribeTaskResult(Models\DescribeTaskResultRequest $req) This API is used to query the EIP async job execution results.
 * @method Models\DescribeTrafficPackagesResponse DescribeTrafficPackages(Models\DescribeTrafficPackagesRequest $req) This API is used to query the details of shared traffic packages.
 * @method Models\DescribeUsedIpAddressResponse DescribeUsedIpAddress(Models\DescribeUsedIpAddressRequest $req) This API is used to query the IP usage of a subnet or VPC.
If the IP is occupied, the resource type and ID associated with the are is returned. If the IP is not used, it returns null.
 * @method Models\DescribeVpcEndPointResponse DescribeVpcEndPoint(Models\DescribeVpcEndPointRequest $req) This API is used to query the endpoint list.
 * @method Models\DescribeVpcEndPointServiceResponse DescribeVpcEndPointService(Models\DescribeVpcEndPointServiceRequest $req) This API is used to query the endpoint service list.
 * @method Models\DescribeVpcEndPointServiceWhiteListResponse DescribeVpcEndPointServiceWhiteList(Models\DescribeVpcEndPointServiceWhiteListRequest $req) This API is used to query the endpoint service allowlist.
 * @method Models\DescribeVpcInstancesResponse DescribeVpcInstances(Models\DescribeVpcInstancesRequest $req)  This API (DescribeVpcInstances) is used to query a list of VCM instances on VPC.
 * @method Models\DescribeVpcIpv6AddressesResponse DescribeVpcIpv6Addresses(Models\DescribeVpcIpv6AddressesRequest $req) This API (DescribeVpcIpv6Addresses) is used to query `VPC` `IPv6` information.
This API is used to query only the information of `IPv6` addresses that are already in use. When querying IPs that have not yet been used, this API will not report an error, but the IPs will not appear in the returned results.
 * @method Models\DescribeVpcPrivateIpAddressesResponse DescribeVpcPrivateIpAddresses(Models\DescribeVpcPrivateIpAddressesRequest $req) This API (DescribeVpcPrivateIpAddresses) is used to query the private IP information of a VPC.<br />
This API is used to query only the information of IP addresses that are already in use. When querying IPs that have not yet been used, this API will not report an error, but the IPs will not appear in the returned results.
 * @method Models\DescribeVpcResourceDashboardResponse DescribeVpcResourceDashboard(Models\DescribeVpcResourceDashboardRequest $req) View VPC resources.
 * @method Models\DescribeVpcTaskResultResponse DescribeVpcTaskResult(Models\DescribeVpcTaskResultRequest $req) This API is used to query the execution result of a VPC task.
 * @method Models\DescribeVpcsResponse DescribeVpcs(Models\DescribeVpcsRequest $req) This API (DescribeVpcs) is used to query the VPC list.
 * @method Models\DescribeVpnConnectionsResponse DescribeVpnConnections(Models\DescribeVpnConnectionsRequest $req) This API is used to used to query the list of VPN tunnels.
 * @method Models\DescribeVpnGatewayCcnRoutesResponse DescribeVpnGatewayCcnRoutes(Models\DescribeVpnGatewayCcnRoutesRequest $req) This API is used to query VPN gateway-based CCN routes.
 * @method Models\DescribeVpnGatewayRoutesResponse DescribeVpnGatewayRoutes(Models\DescribeVpnGatewayRoutesRequest $req) This API is used to query VPN gateway routes.
 * @method Models\DescribeVpnGatewaysResponse DescribeVpnGateways(Models\DescribeVpnGatewaysRequest $req) This API (DescribeVpnGateways) is used to query the VPN gateway list.
 * @method Models\DetachCcnInstancesResponse DetachCcnInstances(Models\DetachCcnInstancesRequest $req) This API (DetachCcnInstances) is used to unbind a specified network instance from a CCN instance.<br />
After unbinding the network instance, the corresponding routing policy will also be deleted.
 * @method Models\DetachClassicLinkVpcResponse DetachClassicLinkVpc(Models\DetachClassicLinkVpcRequest $req) This API is used to delete a Classiclink.
>?This API is async. You can call the [`DescribeVpcTaskResult`](https://intl.cloud.tencent.com/document/api/215/59037?from_cn_redirect=1) API to query the task result. When the task is completed, you can continue other tasks.
>
 * @method Models\DetachNetworkInterfaceResponse DetachNetworkInterface(Models\DetachNetworkInterfaceRequest $req) This API is used to unbind an ENI from a CVM.
This API is completed asynchronously. If you need to query the execution result of an async task, please use the `RequestId` returned by this API to poll the `DescribeVpcTaskResult` API.
 * @method Models\DetachSnapshotInstancesResponse DetachSnapshotInstances(Models\DetachSnapshotInstancesRequest $req) This API is used to disassociate a snapshot policy with instances.
 * @method Models\DisableCcnRoutesResponse DisableCcnRoutes(Models\DisableCcnRoutesRequest $req) This API (DisableCcnRoutes) is used to disable CCN routes that are already enabled.
 * @method Models\DisableFlowLogsResponse DisableFlowLogs(Models\DisableFlowLogsRequest $req) This API is used to disable flow log.
 * @method Models\DisableGatewayFlowMonitorResponse DisableGatewayFlowMonitor(Models\DisableGatewayFlowMonitorRequest $req) This API is used to disable gateway traffic monitor.
 * @method Models\DisableRoutesResponse DisableRoutes(Models\DisableRoutesRequest $req) This API is used to disable enabled subnet routes.
 * @method Models\DisableSnapshotPoliciesResponse DisableSnapshotPolicies(Models\DisableSnapshotPoliciesRequest $req) This API is used to disable specified snapshot policies.
 * @method Models\DisassociateAddressResponse DisassociateAddress(Models\DisassociateAddressRequest $req) This API is used to unbind an [Elastic IP](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1) (EIP for short).
* This API supports unbinding an EIP from CVM instances and ENIs.
* This API does not support unbinding an EIP from a NAT Gateway. To unbind an EIP from a NAT Gateway, use the [`DisassociateNatGatewayAddress`](https://intl.cloud.tencent.com/document/api/215/36716?from_cn_redirect=1) API.
* Only EIPs in BIND or BIND_ENI status can be unbound.
* Blocked EIPs cannot be unbound.
 * @method Models\DisassociateDirectConnectGatewayNatGatewayResponse DisassociateDirectConnectGatewayNatGateway(Models\DisassociateDirectConnectGatewayNatGatewayRequest $req) This API is used to unbind a direct connect gateway from a NAT Gateway. After unbinding, the direct connect gateway cannot access internet through the NAT Gateway.
 * @method Models\DisassociateIPv6AddressResponse DisassociateIPv6Address(Models\DisassociateIPv6AddressRequest $req) This API is used to unbind an EIPv6 instance.

- You can unbind EIPv6 instances bound to Cloud Virtual Machine (CVM) or Elastic Network Interface (ENI).
- Only EIPv6 instances in BIND or BIND_ENI status can be unbound.
 * @method Models\DisassociateNatGatewayAddressResponse DisassociateNatGatewayAddress(Models\DisassociateNatGatewayAddressRequest $req) This API is used to unbind an EIP from a NAT gateway.
 * @method Models\DisassociateNetworkAclSubnetsResponse DisassociateNetworkAclSubnets(Models\DisassociateNetworkAclSubnetsRequest $req) This API is used to disassociate a network ACL from subnets in a VPC instance.
 * @method Models\DisassociateNetworkInterfaceSecurityGroupsResponse DisassociateNetworkInterfaceSecurityGroups(Models\DisassociateNetworkInterfaceSecurityGroupsRequest $req) This API (DisassociateNetworkInterfaceSecurityGroups) is used to detach (or fully detach if possible) a security group from an ENI.
 * @method Models\DisassociateVpcEndPointSecurityGroupsResponse DisassociateVpcEndPointSecurityGroups(Models\DisassociateVpcEndPointSecurityGroupsRequest $req) This API is used to unbind an endpoint from a security group.
 * @method Models\DownloadCustomerGatewayConfigurationResponse DownloadCustomerGatewayConfiguration(Models\DownloadCustomerGatewayConfigurationRequest $req) This API is used to download VPN tunnel configurations.
 * @method Models\EnableCcnRoutesResponse EnableCcnRoutes(Models\EnableCcnRoutesRequest $req) This API (EnableCcnRoutes) is used to enable CCN routes that are already added.<br />
This API is used to verify whether there will be conflict with an existing route after a CCN route is enabled. If there is a conflict, the route will not be enabled, and the process will fail. When a conflict occurs, you must disable the conflicting route before you can enable the desired route.
 * @method Models\EnableFlowLogsResponse EnableFlowLogs(Models\EnableFlowLogsRequest $req) This API is used to enable flow log.
 * @method Models\EnableGatewayFlowMonitorResponse EnableGatewayFlowMonitor(Models\EnableGatewayFlowMonitorRequest $req) This API is used to enable gateway traffic monitor.
 * @method Models\EnableRoutesResponse EnableRoutes(Models\EnableRoutesRequest $req) This API is used to enable disabled subnet routes.<br />
The API is used to verify whether the enabled route conflicts with existing routes. If they conflict, the new route cannot be enabled and will result in a failure. When a route conflict occurs, you need to first disable the conflicting route before you can enable the new one.
 * @method Models\EnableSnapshotPoliciesResponse EnableSnapshotPolicies(Models\EnableSnapshotPoliciesRequest $req) This API is used to enable specified snapshot policies. 
 * @method Models\EnableVpcEndPointConnectResponse EnableVpcEndPointConnect(Models\EnableVpcEndPointConnectRequest $req) This API is used to determine whether to accept the request of connecting with an endpoint.
 * @method Models\GenerateVpnConnectionDefaultHealthCheckIpResponse GenerateVpnConnectionDefaultHealthCheckIp(Models\GenerateVpnConnectionDefaultHealthCheckIpRequest $req) This API is used to get a pair of VPN tunnel health check addresses. 
 * @method Models\GetCcnRegionBandwidthLimitsResponse GetCcnRegionBandwidthLimits(Models\GetCcnRegionBandwidthLimitsRequest $req) This API is used to query the bandwidth limits of a CCN instance. Monthly-subscribed CCNs only support Inter-region Bandwidth Limits, while the pay-as-you-go CCNs support both the Inter-region Bandwidth Limits and Region Outbound Bandwidth Limits. 
 * @method Models\HaVipAssociateAddressIpResponse HaVipAssociateAddressIp(Models\HaVipAssociateAddressIpRequest $req) This API is used to bind an EIP to an HAVIP. <br />
This API is completed asynchronously. If you need to query the execution result of an async task, please use the `RequestId` returned by this API to poll the `DescribeVpcTaskResult` API.
 * @method Models\HaVipDisassociateAddressIpResponse HaVipDisassociateAddressIp(Models\HaVipDisassociateAddressIpRequest $req) This API is used to unbind an EIP from an HAVIP. <br />
This API is completed asynchronously. If you need to query the execution result of an async task, please use the `RequestId` returned by this API to poll the `DescribeVpcTaskResult` API.
 * @method Models\InquirePriceCreateDirectConnectGatewayResponse InquirePriceCreateDirectConnectGateway(Models\InquirePriceCreateDirectConnectGatewayRequest $req) This API is used to query the price of creating a direct connect gateway.
 * @method Models\InquiryPriceAllocateAddressesResponse InquiryPriceAllocateAddresses(Models\InquiryPriceAllocateAddressesRequest $req) This API (InquiryPriceAllocateAddresses) is used to query the price of purchasing EIPs.
 * @method Models\InquiryPriceModifyAddressesBandwidthResponse InquiryPriceModifyAddressesBandwidth(Models\InquiryPriceModifyAddressesBandwidthRequest $req) This API is used to query the price of modifying EIP bandwidth.
 * @method Models\InquiryPriceRenewAddressesResponse InquiryPriceRenewAddresses(Models\InquiryPriceRenewAddressesRequest $req) This API (InquiryPriceRenewAddresses) is used to query the price of renewing prepaid EIPs.
 * @method Models\InquiryPriceRenewVpnGatewayResponse InquiryPriceRenewVpnGateway(Models\InquiryPriceRenewVpnGatewayRequest $req) This API (InquiryPriceRenewVpnGateway) is used to query the price for VPN gateway renewal. Currently, only querying prices for IPSEC-type gateways is supported.
 * @method Models\InquiryPriceResetVpnGatewayInternetMaxBandwidthResponse InquiryPriceResetVpnGatewayInternetMaxBandwidth(Models\InquiryPriceResetVpnGatewayInternetMaxBandwidthRequest $req) This API (InquiryPriceResetVpnGatewayInternetMaxBandwidth) is used to query the price for adjusting the bandwidth cap of a VPN gateway.
 * @method Models\MigrateNetworkInterfaceResponse MigrateNetworkInterface(Models\MigrateNetworkInterfaceRequest $req) This API is used to migrate ENIs.
This API is completed asynchronously. If you need to query the execution result of an async task, please use the `RequestId` returned by this API to poll the `DescribeVpcTaskResult` API.
 * @method Models\MigratePrivateIpAddressResponse MigratePrivateIpAddress(Models\MigratePrivateIpAddressRequest $req) This API is used to migrate the private IPs between ENIs. 
* Note that primary IPs cannot be migrated. 
* The source and destination ENI must be within the same subnet.  

This API is completed asynchronously. If you need to query the execution result of an async task, please use the `RequestId` returned by this API to poll the `DescribeVpcTaskResult` API.
 * @method Models\ModifyAddressAttributeResponse ModifyAddressAttribute(Models\ModifyAddressAttributeRequest $req) This API (ModifyAddressAttribute) is used to modify the name of an [Elastic IP](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1).
 * @method Models\ModifyAddressInternetChargeTypeResponse ModifyAddressInternetChargeType(Models\ModifyAddressInternetChargeTypeRequest $req) This API is used to adjust the network billing mode of an EIP. Please note that it's available to users whose network fees are billed on IPs but not CVMs.
* The network billing mode can be switched between `BANDWIDTH_PREPAID_BY_MONTH` and `TRAFFIC_POSTPAID_BY_HOUR`.
* The network billing mode for each EIP be changed for up to twice.
 * @method Models\ModifyAddressTemplateAttributeResponse ModifyAddressTemplateAttribute(Models\ModifyAddressTemplateAttributeRequest $req) This API (ModifyAddressTemplateAttribute) is used to modify an IP address template.
 * @method Models\ModifyAddressTemplateGroupAttributeResponse ModifyAddressTemplateGroupAttribute(Models\ModifyAddressTemplateGroupAttributeRequest $req) This API (ModifyAddressTemplateGroupAttribute) is used to modify an IP address template group.
 * @method Models\ModifyAddressesBandwidthResponse ModifyAddressesBandwidth(Models\ModifyAddressesBandwidthRequest $req) This API is used to adjust the bandwidth of [Elastic IP](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1), including EIP billed on a pay-as-you-go, monthly subscription, and bandwidth package basis.
 * @method Models\ModifyAddressesRenewFlagResponse ModifyAddressesRenewFlag(Models\ModifyAddressesRenewFlagRequest $req) This API is used to adjust the renewal flag for the monthly subscription EIP.
 * @method Models\ModifyAssistantCidrResponse ModifyAssistantCidr(Models\ModifyAssistantCidrRequest $req) This API is used to batch modify (add or delete) secondary CIDR blocks.
 * @method Models\ModifyBandwidthPackageAttributeResponse ModifyBandwidthPackageAttribute(Models\ModifyBandwidthPackageAttributeRequest $req) This API is used to modify the attributes of a bandwidth package, including the bandwidth package name, and so on.
 * @method Models\ModifyBandwidthPackageBandwidthResponse ModifyBandwidthPackageBandwidth(Models\ModifyBandwidthPackageBandwidthRequest $req) This API is used to adjust the bandwidth of a [bandwidth package](https://www.tencentcloud.com/document/product/684/15245).
 * @method Models\ModifyCcnAttachedInstancesAttributeResponse ModifyCcnAttachedInstancesAttribute(Models\ModifyCcnAttachedInstancesAttributeRequest $req) This API is used to modify CCN-associated instance attributes. Currently, only the `description` can be modified.
 * @method Models\ModifyCcnAttributeResponse ModifyCcnAttribute(Models\ModifyCcnAttributeRequest $req) This API (ModifyCcnAttribute) is used to modify CCN attributes.
 * @method Models\ModifyCcnRegionBandwidthLimitsTypeResponse ModifyCcnRegionBandwidthLimitsType(Models\ModifyCcnRegionBandwidthLimitsTypeRequest $req) This API is used to modify the bandwidth limit policy of a postpaid CCN instance.
 * @method Models\ModifyCustomerGatewayAttributeResponse ModifyCustomerGatewayAttribute(Models\ModifyCustomerGatewayAttributeRequest $req) This API (ModifyCustomerGatewayAttribute) is used to modify the customer gateway information.
 * @method Models\ModifyDirectConnectGatewayAttributeResponse ModifyDirectConnectGatewayAttribute(Models\ModifyDirectConnectGatewayAttributeRequest $req) This API is used to modify the attributes of a direct connect gateway.

 * @method Models\ModifyFlowLogAttributeResponse ModifyFlowLogAttribute(Models\ModifyFlowLogAttributeRequest $req) This API is used to modify the attributes of a flow log.
 * @method Models\ModifyGatewayFlowQosResponse ModifyGatewayFlowQos(Models\ModifyGatewayFlowQosRequest $req) This API is used to adjust the bandwidth limit of a gateway.
 * @method Models\ModifyHaVipAttributeResponse ModifyHaVipAttribute(Models\ModifyHaVipAttributeRequest $req) This API (ModifyHaVipAttribute) is used to modify HAVIP attributes.
 * @method Models\ModifyIPv6AddressesAttributesResponse ModifyIPv6AddressesAttributes(Models\ModifyIPv6AddressesAttributesRequest $req) This API is used to modify the name of an EIPv6 instance.

- You can modify the name of both EIPv6 and traditional EIPv6 instances.
 * @method Models\ModifyIPv6AddressesBandwidthResponse ModifyIPv6AddressesBandwidth(Models\ModifyIPv6AddressesBandwidthRequest $req) This API is used to modify the bandwidth cap of an EIPv6 instance.
 * @method Models\ModifyIp6AddressesBandwidthResponse ModifyIp6AddressesBandwidth(Models\ModifyIp6AddressesBandwidthRequest $req) This API is used to adjust the bandwidth limit of a classic elastic public IPv6 instance.

- You can adjust the bandwidth limit of only classic elastic public IPv6 instances.
- To adjust the bandwidth limit of an elastic public IPv6 instance, call the ModifyIPv6AddressesBandwidth API.
 * @method Models\ModifyIpv6AddressesAttributeResponse ModifyIpv6AddressesAttribute(Models\ModifyIpv6AddressesAttributeRequest $req) This API (ModifyIpv6AddressesAttribute) is used to modify the private IPv6 address attributes of an ENI.
 * @method Models\ModifyLocalGatewayResponse ModifyLocalGateway(Models\ModifyLocalGatewayRequest $req) This API is used to modify the local gateway of a CDC instance.
 * @method Models\ModifyNatGatewayAttributeResponse ModifyNatGatewayAttribute(Models\ModifyNatGatewayAttributeRequest $req) This API is used to modify the attributes of a NAT gateway.
 * @method Models\ModifyNatGatewayDestinationIpPortTranslationNatRuleResponse ModifyNatGatewayDestinationIpPortTranslationNatRule(Models\ModifyNatGatewayDestinationIpPortTranslationNatRuleRequest $req) This API is used to modify the port forwarding rule of a NAT gateway.
 * @method Models\ModifyNatGatewaySourceIpTranslationNatRuleResponse ModifyNatGatewaySourceIpTranslationNatRule(Models\ModifyNatGatewaySourceIpTranslationNatRuleRequest $req) This API is used to modify a NAT gateway's SNAT forwarding rules.
 * @method Models\ModifyNetDetectResponse ModifyNetDetect(Models\ModifyNetDetectRequest $req) This API (ModifyNetDetect) is used to modify network detection parameters.
 * @method Models\ModifyNetworkAclAttributeResponse ModifyNetworkAclAttribute(Models\ModifyNetworkAclAttributeRequest $req) This API is used to modify the attributes of a network ACL.
 * @method Models\ModifyNetworkAclEntriesResponse ModifyNetworkAclEntries(Models\ModifyNetworkAclEntriesRequest $req) This API is used to modify (add or delete) the inbound and outbound rules of a network ACL. In `NetworkAclEntrySet` parameters,
* Passing in the new inbound/outbound rules will reset the original rules.
* Passing in the inbound rules will only reset the original inbound rules and not affect the original outbound rules, and vice versa.
 * @method Models\ModifyNetworkAclQuintupleEntriesResponse ModifyNetworkAclQuintupleEntries(Models\ModifyNetworkAclQuintupleEntriesRequest $req) This API is used to modify the in/outbound rules of the network ACL quintuple. In the `NetworkAclQuintupleEntrySet` parameters, `NetworkAclQuintupleEntryId` is required for `NetworkAclQuintupleEntry`.
 * @method Models\ModifyNetworkInterfaceAttributeResponse ModifyNetworkInterfaceAttribute(Models\ModifyNetworkInterfaceAttributeRequest $req) This API (ModifyNetworkInterfaceAttribute) is used to modify ENI attributes.
 * @method Models\ModifyPrivateIpAddressesAttributeResponse ModifyPrivateIpAddressesAttribute(Models\ModifyPrivateIpAddressesAttributeRequest $req) This API (ModifyPrivateIpAddressesAttribute) is used to modify the private IP attributes of an ENI.
 * @method Models\ModifyReserveIpAddressResponse ModifyReserveIpAddress(Models\ModifyReserveIpAddressRequest $req) This API is used to modify a reserved private IP address.
 * @method Models\ModifyRouteTableAttributeResponse ModifyRouteTableAttribute(Models\ModifyRouteTableAttributeRequest $req) This API (ModifyRouteTableAttribute) is used to modify the attributes of a route table.
 * @method Models\ModifySecurityGroupAttributeResponse ModifySecurityGroupAttribute(Models\ModifySecurityGroupAttributeRequest $req) This API (ModifySecurityGroupAttribute) is used to modify the attributes of a security group (SecurityGroupPolicy).
 * @method Models\ModifySecurityGroupPoliciesResponse ModifySecurityGroupPolicies(Models\ModifySecurityGroupPoliciesRequest $req) This API is used to reset the `Egress` and `Ingress` rules (SecurityGroupPolicy) of a security group.

<ul>
<li>This API does not support custom indexes <code>PolicyIndex</code>. </li>
<li>For <code>SecurityGroupPolicySet</code> parameter,<ul> <ul>
	<li>If <code>SecurityGroupPolicySet.Version</code> is set to `0`, all policies will be cleared, and <code>Egress</code> and <code>Ingress</code> will be ignored. </li>
	<li>If <code>SecurityGroupPolicySet.Version</code> is not set to `0`, add <code>Egress</code> and <code>Ingress</code> policies: <ul>
		<li><code>Protocol</code>: <code>TCP</code>, <code>UDP</code>, <code>ICMP</code>, <code>ICMPV6</code>, <code>GRE</code>, or <code>ALL</code>. </li>
		<li><code>CidrBlock</code>: a CIDR block in the correct format. In the classic network, even if the CIDR block specified in <code>CidrBlock</code> contains the Tencent Cloud private IPs that are not using for CVMs under your Tencent Cloud account, it does not mean this policy allows you to access those resources. The network isolation policies between tenants take priority over the private network policies in security groups. </li>
		<li><code>Ipv6CidrBlock</code>: an IPv6 CIDR block in the correct format. In the classic network, even if the CIDR block specified in <code>Ipv6CidrBlock</code> contains the Tencent Cloud private IPv6 addresses that are not using for CVMs under your Tencent Cloud account, it does not mean this policy allows you to access those resources. The network isolation policies between tenants take priority over the private network policies in security groups. </li>
		<li><code>SecurityGroupId</code>: ID of the security group. It can be the ID of a security group to be modified, or the ID of another security group in the same project. All private IPs of all CVMs under the security group will be covered. If this field is used, the policy will automatically change according to the CVM associated with the group ID while being used to match network messages. You don't need to change it manually. </li>
		<li><code>Port</code>: a single port number such as 80, or a port range in the format of '8000-8010'.  You may use this field only if the <code>Protocol</code> field takes the value <code>TCP</code> or <code>UDP</code>. </li>
		<li><code>Action</code>: only allows <code>ACCEPT</code> or <code>DROP</code>. </li>
		<li><code>CidrBlock</code>, <code>Ipv6CidrBlock</code>, <code>SecurityGroupId</code>, and <code>AddressTemplate</code> are mutually exclusive. <code>Protocol</code> + <code>Port</code> and <code>ServiceTemplate</code> are mutually exclusive.</li> </li>
</ul></li></ul></li>
</ul>
 * @method Models\ModifyServiceTemplateAttributeResponse ModifyServiceTemplateAttribute(Models\ModifyServiceTemplateAttributeRequest $req) This API (ModifyServiceTemplateAttribute) is used to modify a protocol port template.
 * @method Models\ModifyServiceTemplateGroupAttributeResponse ModifyServiceTemplateGroupAttribute(Models\ModifyServiceTemplateGroupAttributeRequest $req) This API (ModifyServiceTemplateGroupAttribute) is used to modify a protocol port template group.
 * @method Models\ModifySnapshotPoliciesResponse ModifySnapshotPolicies(Models\ModifySnapshotPoliciesRequest $req) This API is used to modify specified snapshot policies.
 * @method Models\ModifySubnetAttributeResponse ModifySubnetAttribute(Models\ModifySubnetAttributeRequest $req) This API (ModifySubnetAttribute) is used to modify subnet attributes.
 * @method Models\ModifyTemplateMemberResponse ModifyTemplateMember(Models\ModifyTemplateMemberRequest $req) This API is used to modify a parameter template of the IP address, protocol port, IP address group, or protocol port group type.
 * @method Models\ModifyVpcAttributeResponse ModifyVpcAttribute(Models\ModifyVpcAttributeRequest $req) This API (ModifyVpcAttribute) is used to modify VPC attributes.
 * @method Models\ModifyVpcEndPointAttributeResponse ModifyVpcEndPointAttribute(Models\ModifyVpcEndPointAttributeRequest $req) This API is used to modify endpoint attributes.
 * @method Models\ModifyVpcEndPointServiceAttributeResponse ModifyVpcEndPointServiceAttribute(Models\ModifyVpcEndPointServiceAttributeRequest $req) This API is used to modify the VPC endpoint service attributes.


 * @method Models\ModifyVpcEndPointServiceWhiteListResponse ModifyVpcEndPointServiceWhiteList(Models\ModifyVpcEndPointServiceWhiteListRequest $req) This API is used to modify the attributes of the endpoint service allowlist.
 * @method Models\ModifyVpnConnectionAttributeResponse ModifyVpnConnectionAttribute(Models\ModifyVpnConnectionAttributeRequest $req) This API (ModifyVpnConnectionAttribute) is used to modify VPN tunnels.
 * @method Models\ModifyVpnGatewayAttributeResponse ModifyVpnGatewayAttribute(Models\ModifyVpnGatewayAttributeRequest $req) This API (ModifyVpnGatewayAttribute) is used to modify the attributes of VPN gateways.
 * @method Models\ModifyVpnGatewayCcnRoutesResponse ModifyVpnGatewayCcnRoutes(Models\ModifyVpnGatewayCcnRoutesRequest $req) This API is used to modify VPN gateway-based CCN routes.
 * @method Models\ModifyVpnGatewayRoutesResponse ModifyVpnGatewayRoutes(Models\ModifyVpnGatewayRoutesRequest $req) This API is used to modify VPN gateway routes.
 * @method Models\NotifyRoutesResponse NotifyRoutes(Models\NotifyRoutesRequest $req) This API is used to publish a route to CCN. This can also be done by clicking "Publish to CCN" in the operation column on the page of route table list.
 * @method Models\RefreshDirectConnectGatewayRouteToNatGatewayResponse RefreshDirectConnectGatewayRouteToNatGateway(Models\RefreshDirectConnectGatewayRouteToNatGatewayRequest $req) This API is used to refresh the route between a NAT gateway and  Direct Connect and update the associated route table.
 * @method Models\RejectAttachCcnInstancesResponse RejectAttachCcnInstances(Models\RejectAttachCcnInstancesRequest $req) This API (RejectAttachCcnInstances) is used to reject association operations when instances are associated across accounts for the CCN owner.

 * @method Models\ReleaseAddressesResponse ReleaseAddresses(Models\ReleaseAddressesRequest $req) This API (ReleaseAddresses) is used to release one or multiple [Elastic IPs](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1).
* This operation is irreversible. Once you release an EIP, the IP address associated with the EIP no longer belongs to you.
* Only EIPs in UNBIND status can be released.
 * @method Models\ReleaseIPv6AddressesResponse ReleaseIPv6Addresses(Models\ReleaseIPv6AddressesRequest $req) This API is used to release one or more EIPv6 instances.

- You can release the obtained EIPv6 instances. To use them again, please reapply.
- Only EIPv6 instances in UNBIND status can be released.
 * @method Models\ReleaseIp6AddressesBandwidthResponse ReleaseIp6AddressesBandwidth(Models\ReleaseIp6AddressesBandwidthRequest $req) This API is used to release the IPv6 public network bandwidth of classic elastic public IPv6 instances.

- Classic elastic public IPv6 addresses still have the IPv6 private network communication capability after the public network bandwidth is released.
- To allocate IPV6 public network bandwidth, call the AllocateIp6AddressesBandwidth API.
 * @method Models\RemoveBandwidthPackageResourcesResponse RemoveBandwidthPackageResources(Models\RemoveBandwidthPackageResourcesRequest $req) This API is used to delete a bandwidth package resource, including [Elastic IP](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1), [Cloud Load Balancer](https://intl.cloud.tencent.com/document/product/214/517?from_cn_redirect=1), and so on.
 * @method Models\RenewVpnGatewayResponse RenewVpnGateway(Models\RenewVpnGatewayRequest $req) This API (RenewVpnGateway) is used to renew prepaid (monthly subscription) VPN gateways. Currently, only IPSEC gateways are supported.
 * @method Models\ReplaceDirectConnectGatewayCcnRoutesResponse ReplaceDirectConnectGatewayCcnRoutes(Models\ReplaceDirectConnectGatewayCcnRoutesRequest $req) This API (ReplaceDirectConnectGatewayCcnRoutes) is used to modify the specified route according to the route ID. Batch modification is supported.
 * @method Models\ReplaceRouteTableAssociationResponse ReplaceRouteTableAssociation(Models\ReplaceRouteTableAssociationRequest $req) This API (ReplaceRouteTableAssociation) is used to modify the route table associated with a subnet.
* A subnet can only be associated with one route table.
 * @method Models\ReplaceRoutesResponse ReplaceRoutes(Models\ReplaceRoutesRequest $req) This API (ReplaceRoutes) is used to modify a specified routing policy by its ID (RouteId). Batch modification is supported.
 * @method Models\ReplaceSecurityGroupPoliciesResponse ReplaceSecurityGroupPolicies(Models\ReplaceSecurityGroupPoliciesRequest $req) This API is used to batch modify security group policies.
Policies to modify must be in the same direction. `PolicyIndex` must be specified.
 * @method Models\ReplaceSecurityGroupPolicyResponse ReplaceSecurityGroupPolicy(Models\ReplaceSecurityGroupPolicyRequest $req) This API (ReplaceSecurityGroupPolicy) is used to replace a single security group policy (SecurityGroupPolicy).
Only one policy in a single direction can be replaced in each request, and the PolicyIndex parameter must be specified.
 * @method Models\ResetAttachCcnInstancesResponse ResetAttachCcnInstances(Models\ResetAttachCcnInstancesRequest $req) This API (ResetAttachCcnInstances) is used to re-apply for the association operation when the application for cross-account instance association expires.
 * @method Models\ResetNatGatewayConnectionResponse ResetNatGatewayConnection(Models\ResetNatGatewayConnectionRequest $req) This API is used to adjust concurrent connection cap for the NAT gateway.
 * @method Models\ResetRoutesResponse ResetRoutes(Models\ResetRoutesRequest $req) This API (ResetRoutes) is used to reset the name of a route table and all its routing policies.<br />
Note: When this API is called, all routing policies in the current route table are deleted before new routing policies are saved, which may incur network interruption.
 * @method Models\ResetVpnConnectionResponse ResetVpnConnection(Models\ResetVpnConnectionRequest $req) The API is used to reset a VPN tunnel.
 * @method Models\ResetVpnGatewayInternetMaxBandwidthResponse ResetVpnGatewayInternetMaxBandwidth(Models\ResetVpnGatewayInternetMaxBandwidthRequest $req) This API is used to adjust the bandwidth cap of a VPN gateway. The adjustment of the VPN gateway bandwidth is limited to [5,100] Mbps and [200,1000] Mbps. 
 * @method Models\ResumeSnapshotInstanceResponse ResumeSnapshotInstance(Models\ResumeSnapshotInstanceRequest $req) This API is used to restore security group policies with a backup.
 * @method Models\ReturnNormalAddressesResponse ReturnNormalAddresses(Models\ReturnNormalAddressesRequest $req) This API is used to unbind and release public IPs. 
Note: Starting from Dec 15, 2022, CAM authorization is required for a sub-account to call this API. For more details, see [Authorization Guide](https://intl.cloud.tencent.com/document/product/598/34545?from_cn_redirect=1).
 * @method Models\SetCcnRegionBandwidthLimitsResponse SetCcnRegionBandwidthLimits(Models\SetCcnRegionBandwidthLimitsRequest $req) This API (SetCcnRegionBandwidthLimits) is used to set the outbound bandwidth cap for CCNs in each region. This API can only set the outbound bandwidth cap for regions in the network instances that have already been associated.
 * @method Models\SetVpnGatewaysRenewFlagResponse SetVpnGatewaysRenewFlag(Models\SetVpnGatewaysRenewFlagRequest $req) This API is used set the auto-renewal configuration of a VPN gateway.
 * @method Models\TransformAddressResponse TransformAddress(Models\TransformAddressRequest $req) This API is used to convert a common public IP into an [Elastic IP](https://intl.cloud.tencent.com/document/product/213/1941?from_cn_redirect=1) (EIP for short).
* Tencent Cloud limits the number of times that a user can unbind EIPs and reassign public IPs in each region per day. For more information, see product introduction of [Elastic IP](https://intl.cloud.tencent.com/document/product/213/5733?from_cn_redirect=1). The preceding quota can be obtained through the API [DescribeAddressQuota](https://intl.cloud.tencent.com/document/product/215/16701).
 * @method Models\UnassignIpv6AddressesResponse UnassignIpv6Addresses(Models\UnassignIpv6AddressesRequest $req) This API is used to release the IPv6 addresses of an ENI. <br />
This API is completed asynchronously. If you need to query the execution result of an async task, please use the `RequestId` returned by this API to poll the `DescribeVpcTaskResult` API.
 * @method Models\UnassignIpv6CidrBlockResponse UnassignIpv6CidrBlock(Models\UnassignIpv6CidrBlockRequest $req) This API (UnassignIpv6CidrBlock) is used to release IPv6 IP ranges.
If the IP range still has occupied IPs that are not yet repossessed, the IP range cannot be released.
 * @method Models\UnassignIpv6SubnetCidrBlockResponse UnassignIpv6SubnetCidrBlock(Models\UnassignIpv6SubnetCidrBlockRequest $req) This API (UnassignIpv6SubnetCidrBlock) is used to release IPv6 subnet IP ranges.
If the subnet IP range still has occupied IPs that are not yet repossessed, the subnet IP range cannot be released.
 * @method Models\UnassignPrivateIpAddressesResponse UnassignPrivateIpAddresses(Models\UnassignPrivateIpAddressesRequest $req) This API is used to return the private IP addresses of an ENI.
* If a secondary private IP of an ENI is returned, the EIP will be automatically unassociated as well. The primary private IP of the ENI cannot be returned.

This API is completed asynchronously. If you need to query the execution result of an async task, please use the `RequestId` returned by this API to poll the `DescribeVpcTaskResult` API.
 * @method Models\WithdrawNotifyRoutesResponse WithdrawNotifyRoutes(Models\WithdrawNotifyRoutesRequest $req) This API is used to withdraw a route from CCN. 
 */

class VpcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "vpc.intl.tencentcloudapi.com";

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
