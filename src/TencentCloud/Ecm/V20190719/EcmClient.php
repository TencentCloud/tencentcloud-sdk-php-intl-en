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

namespace TencentCloud\Ecm\V20190719;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ecm\V20190719\Models as Models;

/**
 * @method Models\AllocateAddressesResponse AllocateAddresses(Models\AllocateAddressesRequest $req) This API is used to apply for one or multiple EIPs.
 * @method Models\AssignIpv6AddressesResponse AssignIpv6Addresses(Models\AssignIpv6AddressesRequest $req) This API is used to apply for an IPv6 address for an ENI.
 * @method Models\AssignPrivateIpAddressesResponse AssignPrivateIpAddresses(Models\AssignPrivateIpAddressesRequest $req) This API is used to apply for a private IP for an ENI.
 * @method Models\AssociateAddressResponse AssociateAddress(Models\AssociateAddressRequest $req) This API is used to bind an EIP to an instance or the specified private IP of an ENI.
Binding an EIP to an instance (ECM) is essentially to bind it to the primary private IP of the primary ENI of the instance.
When you bind an EIP to the private IP of the specified ENI, if the private IP is already bound to an EIP or public IP, a failure will be reported, and you must unbind it first before you can bind it to a new EIP.
Only EIPs in `UNBIND` status can be bound to a private IP.
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) This API is used to bind a security group.
 * @method Models\AttachNetworkInterfaceResponse AttachNetworkInterface(Models\AttachNetworkInterfaceRequest $req) This API is used to bind an ENI to a CVM instance.
 * @method Models\BatchDeregisterTargetsResponse BatchDeregisterTargets(Models\BatchDeregisterTargetsRequest $req) This API is used to batch unbind real servers.
 * @method Models\BatchModifyTargetWeightResponse BatchModifyTargetWeight(Models\BatchModifyTargetWeightRequest $req) This API is used to batch modify the forwarding weights of the real servers bound to a listener.
 * @method Models\BatchRegisterTargetsResponse BatchRegisterTargets(Models\BatchRegisterTargetsRequest $req) This API is used to batch bind backend targets.
 * @method Models\CreateHaVipResponse CreateHaVip(Models\CreateHaVipRequest $req) This API is used to create an HAVIP.
 * @method Models\CreateImageResponse CreateImage(Models\CreateImageRequest $req) This API is used to create an image with the system disk of an instance. The image can be used to create instances.
 * @method Models\CreateKeyPairResponse CreateKeyPair(Models\CreateKeyPairRequest $req) This API is used to create an `OpenSSH RSA` key pair, which can be used to log in to a Linux instance.
 * @method Models\CreateListenerResponse CreateListener(Models\CreateListenerRequest $req) This API is used to create a CLB listener.
 * @method Models\CreateLoadBalancerResponse CreateLoadBalancer(Models\CreateLoadBalancerRequest $req) This API is used to purchase a CLB instance.
 * @method Models\CreateModuleResponse CreateModule(Models\CreateModuleRequest $req) This API is used to create a module.
 * @method Models\CreateNetworkInterfaceResponse CreateNetworkInterface(Models\CreateNetworkInterfaceRequest $req) This API is used to create an ENI.
 * @method Models\CreateRouteTableResponse CreateRouteTable(Models\CreateRouteTableRequest $req) After a VPC is created, the system will create a default route table, with which all new subnets will be associated. By default, you can use the default route table to manage your routing policies. If you have multiple routing policies, you can call the API for route table creation to create more route tables to manage your routing policies.
 * @method Models\CreateRoutesResponse CreateRoutes(Models\CreateRoutesRequest $req) This API is used to create a routing policy.
 * @method Models\CreateSecurityGroupResponse CreateSecurityGroup(Models\CreateSecurityGroupRequest $req) This API is used to create a security group.
 * @method Models\CreateSecurityGroupPoliciesResponse CreateSecurityGroupPolicies(Models\CreateSecurityGroupPoliciesRequest $req) <p>This API is used to create a security group policy.</p>
<p>In the `SecurityGroupPolicySet` parameter:</p>
<ul>
<li>`Version`: the version number of a security group policy, which automatically increases by one each time you update the security policy, to prevent expiration of the updated routing policies. If it is left empty, any conflicts will be ignored.</li>
<li>When creating the `Egress` and `Ingress` polices,<ul>
<li><code>Protocol</code>: <code>TCP</code>, <code>UDP</code>, <code>ICMP</code>, <code>GRE</code>, or <code>ALL</code>.</li>
<li>`CidrBlock`: a CIDR block in the correct format. In a classic network, if a `CidrBlock` contains private IPs on Tencent Cloud for devices under your account other than CVMs, it does not mean this policy allows you to access these devices. The network isolation policies between tenants take priority over the private network policies in security groups.</li>
<li>`SecurityGroupId`: ID of the security group. It can be the ID of security group to be modified, or the ID of other security group in the same project. All private IPs of all CVMs under the security group will be covered. If this field is used, the policy will automatically change according to the CVM associated with the group ID while being used to match network messages. You don’t need to change it manually.</li>
<li>`Port`: a single port number such as 80, or a port range in the format of “8000-8010”. You may use this field only if the `Protocol` field takes the value `TCP` or `UDP`. Otherwise `Protocol` and `Port` are mutually exclusive.</li>
<li>`Action`: only allows `ACCEPT` or `DROP`.</li>
<li>`CidrBlock`, `SecurityGroupId`, and `AddressTemplate` are mutually exclusive. `Protocol` + `Port` and `ServiceTemplate` are mutually exclusive.</li>
<li>You can only create policies in one direction in each request. To specify the `PolicyIndex` parameter, use the same index number in policies.</li>
</ul></li></ul>
<p>Default API request rate limit: 20 requests/sec.</p>
 * @method Models\CreateSubnetResponse CreateSubnet(Models\CreateSubnetRequest $req) This API is used to create a subnet. After the subnet is created successfully, it will become the default subnet for the AZ.
 * @method Models\CreateVpcResponse CreateVpc(Models\CreateVpcRequest $req) This API is used to create a VPC.
 * @method Models\DeleteHaVipResponse DeleteHaVip(Models\DeleteHaVipRequest $req) This API is used to delete an HAVIP.
 * @method Models\DeleteImageResponse DeleteImage(Models\DeleteImageRequest $req) This API is used to delete an image.
 * @method Models\DeleteListenerResponse DeleteListener(Models\DeleteListenerRequest $req) This API is used to delete a CLB listener.
 * @method Models\DeleteLoadBalancerResponse DeleteLoadBalancer(Models\DeleteLoadBalancerRequest $req) This API is used to delete a CLB instance.
 * @method Models\DeleteLoadBalancerListenersResponse DeleteLoadBalancerListeners(Models\DeleteLoadBalancerListenersRequest $req) This API is used to delete multiple CLB listeners.
 * @method Models\DeleteModuleResponse DeleteModule(Models\DeleteModuleRequest $req) This API is used to delete a business module.
 * @method Models\DeleteNetworkInterfaceResponse DeleteNetworkInterface(Models\DeleteNetworkInterfaceRequest $req) This API is used to delete an ENI.
 * @method Models\DeleteRouteTableResponse DeleteRouteTable(Models\DeleteRouteTableRequest $req) This API is used to delete a route table.
 * @method Models\DeleteRoutesResponse DeleteRoutes(Models\DeleteRoutesRequest $req) This API is used to batch delete routing policies from a route table.
 * @method Models\DeleteSecurityGroupResponse DeleteSecurityGroup(Models\DeleteSecurityGroupRequest $req) Only security groups under the current account can be deleted.
A security group cannot be deleted directly if its instance ID is used in the policy of another security group. In this case, you need to modify the policy first before deleting the security group.
Deleted security groups cannot be recovered. Therefore, call this API with caution.
 * @method Models\DeleteSecurityGroupPoliciesResponse DeleteSecurityGroupPolicies(Models\DeleteSecurityGroupPoliciesRequest $req) `SecurityGroupPolicySet.Version` is used to specify the version of the security group to be manipulated. If the `Version` value passed in differs from the current latest version of the security group, a failure will be returned. If `Version` is not passed in, the policy of the specified `PolicyIndex` will be deleted directly.
 * @method Models\DeleteSnapshotsResponse DeleteSnapshots(Models\DeleteSnapshotsRequest $req) This API is used to delete a snapshot.

* Only snapshots in the `NORMAL` state can be deleted. To query the state of a snapshot, you can call the [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1) API and check the `SnapshotState` field in the response.
* Batch operations are supported. If there is any snapshot that cannot be deleted, the operation will not be performed and a specific error code will be returned.
 * @method Models\DeleteSubnetResponse DeleteSubnet(Models\DeleteSubnetRequest $req) This API is used to delete a subnet. If the subnet is the current default subnet in the AZ, after it is deleted, the default subnet automatically created by the system rather than the last subnet created by you will be used as the new default subnet. If the new default subnet does not meet your needs, you can call the API for setting the default subnet to configure it.
 * @method Models\DeleteVpcResponse DeleteVpc(Models\DeleteVpcRequest $req) This API is used to delete a VPC.
 * @method Models\DescribeAddressQuotaResponse DescribeAddressQuota(Models\DescribeAddressQuotaRequest $req) This API is used to query the quota information of the EIP under your account in the current region.
 * @method Models\DescribeAddressesResponse DescribeAddresses(Models\DescribeAddressesRequest $req) This API is used to query the list of EIPs.
 * @method Models\DescribeBaseOverviewResponse DescribeBaseOverview(Models\DescribeBaseOverviewRequest $req) This API is used to get the basic data displayed on the overview page.
 * @method Models\DescribeConfigResponse DescribeConfig(Models\DescribeConfigRequest $req) This API is used to get the limits of data such as bandwidth and disk.
 * @method Models\DescribeCustomImageTaskResponse DescribeCustomImageTask(Models\DescribeCustomImageTaskRequest $req) This API is used to query an image import task.
 * @method Models\DescribeDefaultSubnetResponse DescribeDefaultSubnet(Models\DescribeDefaultSubnetRequest $req) This API is used to query the default subnet in an AZ.
 * @method Models\DescribeHaVipsResponse DescribeHaVips(Models\DescribeHaVipsRequest $req) This API is used to query the list of HAVIPs.
 * @method Models\DescribeImageResponse DescribeImage(Models\DescribeImageRequest $req) This API is used to display the list of images.
 * @method Models\DescribeImportImageOsResponse DescribeImportImageOs(Models\DescribeImportImageOsRequest $req) This API is used to query the list of operating systems supported by an image imported from an external resource.
 * @method Models\DescribeInstanceTypeConfigResponse DescribeInstanceTypeConfig(Models\DescribeInstanceTypeConfigRequest $req) This API is used to get the list of model configurations.
 * @method Models\DescribeInstanceVncUrlResponse DescribeInstanceVncUrl(Models\DescribeInstanceVncUrlRequest $req) This API is used to query the VNC URL of an instance.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to get the information of an instance.
 * @method Models\DescribeInstancesDeniedActionsResponse DescribeInstancesDeniedActions(Models\DescribeInstancesDeniedActionsRequest $req) This API is used to get the information of prohibited operations by instance ID.
 * @method Models\DescribeListenersResponse DescribeListeners(Models\DescribeListenersRequest $req) This API is used to query the list of CLB listeners.
 * @method Models\DescribeLoadBalanceTaskStatusResponse DescribeLoadBalanceTaskStatus(Models\DescribeLoadBalanceTaskStatusRequest $req) This API is used to query the task status of a CLB instance.
 * @method Models\DescribeLoadBalancersResponse DescribeLoadBalancers(Models\DescribeLoadBalancersRequest $req) This API is used to query the list of CLB instances.
 * @method Models\DescribeModuleResponse DescribeModule(Models\DescribeModuleRequest $req) This API is used to get the list of modules.
 * @method Models\DescribeModuleDetailResponse DescribeModuleDetail(Models\DescribeModuleDetailRequest $req) This API is used to display the details of a module.
 * @method Models\DescribeMonthPeakNetworkResponse DescribeMonthPeakNetwork(Models\DescribeMonthPeakNetworkRequest $req) This API is used to get the monthly peak and billable inbound/outbound bandwidth values of your node.
 * @method Models\DescribeNetworkInterfacesResponse DescribeNetworkInterfaces(Models\DescribeNetworkInterfacesRequest $req) This API is used to query the list of ENIs.
 * @method Models\DescribeNodeResponse DescribeNode(Models\DescribeNodeRequest $req) This API is used to get the list of nodes.
 * @method Models\DescribePackingQuotaGroupResponse DescribePackingQuotaGroup(Models\DescribePackingQuotaGroupRequest $req) This API is used to get the packing quota of a model in a region (when a virtual model is used, a set of correlated packing quotas will be returned).
 * @method Models\DescribePeakBaseOverviewResponse DescribePeakBaseOverview(Models\DescribePeakBaseOverviewRequest $req) This API is used to get the peak data of basic information such as CPU, memory, and disk.
 * @method Models\DescribePeakNetworkOverviewResponse DescribePeakNetworkOverview(Models\DescribePeakNetworkOverviewRequest $req) This API is used to get the peak network data.
 * @method Models\DescribePriceRunInstanceResponse DescribePriceRunInstance(Models\DescribePriceRunInstanceRequest $req) This API is used to query the price of an instance.
 * @method Models\DescribeRouteConflictsResponse DescribeRouteConflicts(Models\DescribeRouteConflictsRequest $req) This API is used to query the list of conflicts between a custom routing policy and a CCN routing policy.
 * @method Models\DescribeRouteTablesResponse DescribeRouteTables(Models\DescribeRouteTablesRequest $req) This API is used to query the list of the objects in a route table.
 * @method Models\DescribeSecurityGroupAssociationStatisticsResponse DescribeSecurityGroupAssociationStatistics(Models\DescribeSecurityGroupAssociationStatisticsRequest $req) This API is used to query statistics on the instances associated with a security group.
 * @method Models\DescribeSecurityGroupLimitsResponse DescribeSecurityGroupLimits(Models\DescribeSecurityGroupLimitsRequest $req) This API is used to query the security group quota.
 * @method Models\DescribeSecurityGroupPoliciesResponse DescribeSecurityGroupPolicies(Models\DescribeSecurityGroupPoliciesRequest $req) This API is used to query a security group rule.
 * @method Models\DescribeSecurityGroupsResponse DescribeSecurityGroups(Models\DescribeSecurityGroupsRequest $req) This API is used to view a security group.
 * @method Models\DescribeSnapshotsResponse DescribeSnapshots(Models\DescribeSnapshotsRequest $req) This API is used to query the list of snapshots.

* You can filter results by snapshot ID and the ID and type of the cloud disk for which the snapshot is created. The relationship between different filters is `AND`. For more information on filters, see `Filter`.
* If no parameter is defined, the status of a certain number of snapshots under the current account will be returned. The number is specified by `Limit` and is 20 by default.
 * @method Models\DescribeSubnetsResponse DescribeSubnets(Models\DescribeSubnetsRequest $req) This API is used to query the list of subnets.
 * @method Models\DescribeTargetHealthResponse DescribeTargetHealth(Models\DescribeTargetHealthRequest $req) This API is used to get the health check status of a CLB real server.
 * @method Models\DescribeTargetsResponse DescribeTargets(Models\DescribeTargetsRequest $req) This API is used to query the list of the real servers bound to a CLB instance.
 * @method Models\DescribeTaskResultResponse DescribeTaskResult(Models\DescribeTaskResultRequest $req) This API is used to query the execution result of an EIP async task.
 * @method Models\DescribeTaskStatusResponse DescribeTaskStatus(Models\DescribeTaskStatusRequest $req) This API is used to get the status of an async task.
 * @method Models\DescribeVpcsResponse DescribeVpcs(Models\DescribeVpcsRequest $req) This API is used to query the list of VPCs.
 * @method Models\DetachNetworkInterfaceResponse DetachNetworkInterface(Models\DetachNetworkInterfaceRequest $req) This API is used to unbind an ENI from a CVM instance.
 * @method Models\DisableRoutesResponse DisableRoutes(Models\DisableRoutesRequest $req) This API is used to disable a subnet route.
 * @method Models\DisassociateAddressResponse DisassociateAddress(Models\DisassociateAddressRequest $req) This API is used to unbind an EIP.
Only EIPs in `BIND` or `BIND_ENI` status can be unbound.
Blocked EIPs cannot be unbound.
 * @method Models\DisassociateInstancesKeyPairsResponse DisassociateInstancesKeyPairs(Models\DisassociateInstancesKeyPairsRequest $req) This API is used to unbind a key pair from an instance.
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) This API is used to unbind a security group.
 * @method Models\EnableRoutesResponse EnableRoutes(Models\EnableRoutesRequest $req) This API is used to enable a disabled subnet route.
This API verifies whether a CCN route will conflict with an existing route after it is enabled, and if so, you cannot enable it before you disable the conflicting route first.
 * @method Models\ImportImageResponse ImportImage(Models\ImportImageRequest $req) This API is used to import an image from a CVM instance to an ECM instance.
 * @method Models\MigrateNetworkInterfaceResponse MigrateNetworkInterface(Models\MigrateNetworkInterfaceRequest $req) This API is used to migrate an ENI.
 * @method Models\MigratePrivateIpAddressResponse MigratePrivateIpAddress(Models\MigratePrivateIpAddressRequest $req) This API is used to migrate a private IP from an ENI.
It migrates a private IP from one ENI to another. Primary IPs cannot be migrated.
The source and destination ENIs must be in the same subnet.
 * @method Models\ModifyAddressAttributeResponse ModifyAddressAttribute(Models\ModifyAddressAttributeRequest $req) This API is used to modify EIP attributes.
 * @method Models\ModifyAddressesBandwidthResponse ModifyAddressesBandwidth(Models\ModifyAddressesBandwidthRequest $req) This API is used to modify the EIP bandwidth.

 * @method Models\ModifyDefaultSubnetResponse ModifyDefaultSubnet(Models\ModifyDefaultSubnetRequest $req) This API is used to modify the default subnet used when you create an instance in an AZ (if you don't specify the VPC parameter when creating the instance, `sunbetId` will be used).
 * @method Models\ModifyHaVipAttributeResponse ModifyHaVipAttribute(Models\ModifyHaVipAttributeRequest $req) This API is used to modify the attributes of an HAVIP.
 * @method Models\ModifyImageAttributeResponse ModifyImageAttribute(Models\ModifyImageAttributeRequest $req) This API is used to modify the attributes of an image.
 * @method Models\ModifyInstancesAttributeResponse ModifyInstancesAttribute(Models\ModifyInstancesAttributeRequest $req) This API is used to modify the attributes of an instance.
 * @method Models\ModifyIpv6AddressesAttributeResponse ModifyIpv6AddressesAttribute(Models\ModifyIpv6AddressesAttributeRequest $req) This API is used to modify the IPv6 address attributes of an ENI.
 * @method Models\ModifyListenerResponse ModifyListener(Models\ModifyListenerRequest $req) This API is used to modify the attributes of a CLB listener.
 * @method Models\ModifyLoadBalancerAttributesResponse ModifyLoadBalancerAttributes(Models\ModifyLoadBalancerAttributesRequest $req) This API is used to modify the attributes of a CLB instance.
 * @method Models\ModifyModuleConfigResponse ModifyModuleConfig(Models\ModifyModuleConfigRequest $req) This API is used to modify the configuration of a module. You cannot modify the configuration of the module if it is associated with an instance.
 * @method Models\ModifyModuleDisableWanIpResponse ModifyModuleDisableWanIp(Models\ModifyModuleDisableWanIpRequest $req) This API is used to specify whether to prohibit public IP assignment for a module.
 * @method Models\ModifyModuleImageResponse ModifyModuleImage(Models\ModifyModuleImageRequest $req) This API is used to modify the default image of a module.
 * @method Models\ModifyModuleIpDirectResponse ModifyModuleIpDirect(Models\ModifyModuleIpDirectRequest $req) This API is used to modify the IP direct access of a module.
 * @method Models\ModifyModuleNameResponse ModifyModuleName(Models\ModifyModuleNameRequest $req) This API is used to rename a module.
 * @method Models\ModifyModuleNetworkResponse ModifyModuleNetwork(Models\ModifyModuleNetworkRequest $req) This API is used to modify the default bandwidth cap of a module.
 * @method Models\ModifyModuleSecurityGroupsResponse ModifyModuleSecurityGroups(Models\ModifyModuleSecurityGroupsRequest $req) This API is used to modify the default security group of a module.
 * @method Models\ModifyPrivateIpAddressesAttributeResponse ModifyPrivateIpAddressesAttribute(Models\ModifyPrivateIpAddressesAttributeRequest $req) This API is used to modify the private IP attributes of an ENI.
 * @method Models\ModifyRouteTableAttributeResponse ModifyRouteTableAttribute(Models\ModifyRouteTableAttributeRequest $req) This API is used to modify the attributes of a route table.
 * @method Models\ModifySecurityGroupAttributeResponse ModifySecurityGroupAttribute(Models\ModifySecurityGroupAttributeRequest $req) This API is used to modify the attributes of a security group.
 * @method Models\ModifySecurityGroupPoliciesResponse ModifySecurityGroupPolicies(Models\ModifySecurityGroupPoliciesRequest $req) This API is used to modify the outbound and inbound rules of a security group.
 * @method Models\ModifySubnetAttributeResponse ModifySubnetAttribute(Models\ModifySubnetAttributeRequest $req) This API is used to modify the attributes of a subnet.
 * @method Models\ModifyTargetPortResponse ModifyTargetPort(Models\ModifyTargetPortRequest $req) This API is used to modify the port of a real server bound to a listener.
 * @method Models\ModifyTargetWeightResponse ModifyTargetWeight(Models\ModifyTargetWeightRequest $req) This API is used to modify the forwarding weight of a real server bound to a listener.
 * @method Models\ModifyVpcAttributeResponse ModifyVpcAttribute(Models\ModifyVpcAttributeRequest $req) This API is used to modify the attributes of a VPC.
 * @method Models\RebootInstancesResponse RebootInstances(Models\RebootInstancesRequest $req) This API is used to restart an instance. Only instances in `RUNNING` status can be restarted. The instance status will become `REBOOTING` when the API is called successfully and will become `RUNNING` when the instance is restarted successfully. Forced restart is supported. Just like powering off a physical PC and restarting it, a forced restart may cause data loss or file system corruption. Make sure that you use this API only when the server cannot be restarted normally.
 * @method Models\ReleaseAddressesResponse ReleaseAddresses(Models\ReleaseAddressesRequest $req) This API is used to release one or multiple EIPs.
This operation is irreversible. Once you release an EIP, the IP address associated with it will no longer belong to you.
Only EIPs in `UNBIND` status can be released.
 * @method Models\ReleaseIpv6AddressesResponse ReleaseIpv6Addresses(Models\ReleaseIpv6AddressesRequest $req) This API is used to release the IPv6 addresses of an ENI.
 * @method Models\RemovePrivateIpAddressesResponse RemovePrivateIpAddresses(Models\RemovePrivateIpAddressesRequest $req) This API is used to return the private IPs of an ENI.
To return the secondary private IPs of an ENI, the API will automatically unbind them from the ENI. The primary private IP of the ENI cannot be returned.
 * @method Models\ReplaceRouteTableAssociationResponse ReplaceRouteTableAssociation(Models\ReplaceRouteTableAssociationRequest $req) This API is used to modify the route table associated with a subnet. A subnet can be associated with only one route table.
 * @method Models\ReplaceRoutesResponse ReplaceRoutes(Models\ReplaceRoutesRequest $req) This API is used to replace a routing policy.
 * @method Models\ReplaceSecurityGroupPolicyResponse ReplaceSecurityGroupPolicy(Models\ReplaceSecurityGroupPolicyRequest $req) This API is used to replace a single routing rule of a security group. You can replace only one rule in a single direction in one request and must specify the index (PolicyIndex).
 * @method Models\ResetInstancesResponse ResetInstances(Models\ResetInstancesRequest $req) This API is used to reinstall an instance. If you specify the `ImageId` parameter, the specified image will be used; otherwise, the image used by the current instance will be used. If you don't specify the password, a password will be sent later in Message Center.
 * @method Models\ResetInstancesMaxBandwidthResponse ResetInstancesMaxBandwidth(Models\ResetInstancesMaxBandwidthRequest $req) This API is used to reset the bandwidth cap of an instance.
 * @method Models\ResetInstancesPasswordResponse ResetInstancesPassword(Models\ResetInstancesPasswordRequest $req) This API is used to reset the password for a running status. You need to explicitly specify the `ForceStop` parameter; otherwise, you can reset the password only for instances that have been shut down.
 * @method Models\ResetRoutesResponse ResetRoutes(Models\ResetRoutesRequest $req) This API is used to reset a route table name and all routing policies.
 * @method Models\RunInstancesResponse RunInstances(Models\RunInstancesRequest $req) This API is used to create an ECM instance.
 * @method Models\SetLoadBalancerSecurityGroupsResponse SetLoadBalancerSecurityGroups(Models\SetLoadBalancerSecurityGroupsRequest $req) This API is used to configure security groups for a CLB instance.
 * @method Models\SetSecurityGroupForLoadbalancersResponse SetSecurityGroupForLoadbalancers(Models\SetSecurityGroupForLoadbalancersRequest $req) This API is used to bind or unbind a security group to or from multiple CLB instances.
 * @method Models\StartInstancesResponse StartInstances(Models\StartInstancesRequest $req) This API is used to start an instance. Only instances in `STOPPED` status can be started. The instance status will become `STARTING` when this API is called successfully and will become `RUNNING` when the instance is started successfully.
 * @method Models\StopInstancesResponse StopInstances(Models\StopInstancesRequest $req) Only instances in `RUNNING` status can be shut down.
The instance status will become `STOPPING` when the API is called successfully and will become `STOPPED` when the instance is shut down successfully.
Forced shutdown is supported. Just like powering off a physical PC, a forced shutdown may cause data loss or file system corruption. Make sure that you use this API only when the server cannot be shut down normally.
 * @method Models\TerminateInstancesResponse TerminateInstances(Models\TerminateInstancesRequest $req) This API is used to terminate an instance.
 */

class EcmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ecm.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ecm";

    /**
     * @var string
     */
    protected $version = "2019-07-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("ecm")."\\"."V20190719\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
