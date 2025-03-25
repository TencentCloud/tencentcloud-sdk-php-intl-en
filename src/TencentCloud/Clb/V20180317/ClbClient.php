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

namespace TencentCloud\Clb\V20180317;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Clb\V20180317\Models as Models;

/**
 * @method Models\AssociateTargetGroupsResponse AssociateTargetGroups(Models\AssociateTargetGroupsRequest $req) This API is used to bind target groups to CLB listeners (layer-4 protocol) or forwarding rules (layer-7 protocol).
This is an async API. After it is returned successfully, you can call the `DescribeTaskStatus` API with the returned `RequestID` as an input parameter to check whether this task is successful.
 * @method Models\AutoRewriteResponse AutoRewrite(Models\AutoRewriteRequest $req) An HTTPS:443 listener needs to be created first, along with a forwarding rule. When this API is called, an HTTP:80 listener will be created automatically if it did not exist and a forwarding rule corresponding to `Domains` (specified in the input parameter) under the HTTPS:443 listener will also be created. After successful creation, access requests to an HTTP:80 address will be redirected to an HTTPS:443 address automatically.
 * @method Models\BatchDeregisterTargetsResponse BatchDeregisterTargets(Models\BatchDeregisterTargetsRequest $req) This API is used to batch unbind real servers of the layer-4 and layer-7 VPC-based CLBs. Up to 500 real servers can be unbound in a batch.
 * @method Models\BatchModifyTargetTagResponse BatchModifyTargetTag(Models\BatchModifyTargetTagRequest $req) This API is used to modify the tags of real servers bound to CLB listeners in batches. The maximum number of resources that can be modified in a batch is 500. This is a synchronous API. <br/> It is supported for Layer-4 and Layer-7 listeners of CLB instances, but not for classic CLB instances.
 * @method Models\BatchModifyTargetWeightResponse BatchModifyTargetWeight(Models\BatchModifyTargetWeightRequest $req) This API is used to modify forwarding weights of real servers bound to CLB listeners in batches. Up to 500 servers can be unbound in a batch. As this API is async, you should check whether the task is successful by passing the RequestId returned to the API call `DescribeTaskStatus`.<br/> This API is supported by CLB layer-4 and layer-7 listeners, but not Classis CLB counterparts.

 * @method Models\BatchRegisterTargetsResponse BatchRegisterTargets(Models\BatchRegisterTargetsRequest $req) This API is used to batch bind CVM instances or ENIs. Up to 500 servers can be bound in a batch. It supports cross-region binding, layer-4 and layer-7 (TCP/UDP/HTTP/HTTPS) protocols, and VPC-based CLBs only.
 * @method Models\CloneLoadBalancerResponse CloneLoadBalancer(Models\CloneLoadBalancerRequest $req) This API is used to clone a CLB instance. CLB instance cloning indicates copying a specified CLB instance to create one with the same rules and binding relationships. The operation of this cloning API is asynchronous. The cloned data is based on the state when CloneLoadBalancer is called. If the cloned CLB instance changes after CloneLoadBalancer is called, the changed rules will not be cloned.Note: You can query the instance creation status by calling the [DescribeTaskStatus](https://intl.cloud.tencent.com/document/product/214/30683?from_cn_redirect=1) API with the returned requestId.RestrictionsInstance attribute restrictions:- Instances billed in pay-as-you-go and monthly subscription modes can be cloned. For a new instance cloned from a monthly subscription instance, its network billing mode will switch to billing by hourly bandwidth, but its bandwidth and specifications will remain the same as the settings of the original instance.- CLB instances not associated with any billable items cannot be cloned.- Classic CLB instances and CLB instances with Anti-DDoS Pro cannot be cloned.- Classic network-based instances cannot be cloned.- Anycast instances cannot be cloned.- IPv6 NAT64 instances cannot be cloned.- Blocked or frozen instances cannot be cloned.- Before cloning an instance, make sure that all certificates used on the instance have not expired; otherwise, the cloning will fail.Quota restrictions:- Instances with more than 50 listeners cannot be cloned.- Shared instances with the public network bandwidth cap exceeding 2 Gbps cannot be cloned.API calling restrictions:The bandwidth package ID must be input for BGP bandwidth packages.Corresponding parameters should be input for cloning of an exclusive cluster; otherwise, a shared instance will be created.The feature is in beta test. You can submit a [beta test application](https://intl.cloud.tencent.com/apply/p/1akuvsmyn0g?from_cn_redirect=1).
 * @method Models\CreateClsLogSetResponse CreateClsLogSet(Models\CreateClsLogSetRequest $req) This API is used to create a CLB exclusive logset for storing CLB logs.
 * @method Models\CreateListenerResponse CreateListener(Models\CreateListenerRequest $req) This API is used to create a listener for a CLB instance.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestId as an input parameter to check whether this task is successful.
 * @method Models\CreateLoadBalancerResponse CreateLoadBalancer(Models\CreateLoadBalancerRequest $req) This API (CreateLoadBalancer) is used to create a CLB instance. To use the CLB service, you first need to purchase one or more instances. After this API is called successfully, a unique instance ID will be returned. There are two types of instances: public network and private network. For more information, see the product types in the product documentation.
Note: (1) To apply for a CLB instance in the specified AZ and cross-AZ disaster recovery, please [submit a ticket](https://console.cloud.tencent.com/workorder/category); (2) Currently, IPv6 is supported only in Beijing, Shanghai, and Guangzhou regions.
This is an async API. After it is returned successfully, you can call the DescribeLoadBalancers API to query the status of the instance (such as creating and normal) to check whether it is successfully created.
 * @method Models\CreateLoadBalancerSnatIpsResponse CreateLoadBalancerSnatIps(Models\CreateLoadBalancerSnatIpsRequest $req) This API is used to add an SNAT IP for an SnatPro CLB instance. If SnatPro is not enabled for CLB, it will be automatically enabled after the SNAT IP is added.
This is an async API. After it is returned successfully, you can check the task result by calling `DescribeTaskStatus` with the returned `RequestID`.
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) This API (CreateRule) is used to create a forwarding rule under an existing layer-7 CLB listener, where real servers must be bound to the rule instead of the listener.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\CreateTargetGroupResponse CreateTargetGroup(Models\CreateTargetGroupRequest $req) This API is used to create a target group. This feature is in beta test, if you want to try it out, please [submit a ticket](https://console.cloud.tencent.com/workorder/category?level1_id=6&level2_id=163&source=0&data_title=%E8%B4%9F%E8%BD%BD%E5%9D%87%E8%A1%A1%20LB&step=1).
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) This API is used to create a topic with the full-text index and key-value index enabled by default. The creation will fail if there is no CLB exclusive logset.
 * @method Models\DeleteListenerResponse DeleteListener(Models\DeleteListenerRequest $req) This API is used to delete a listener from a CLB instance (layer-4 or layer-7).
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\DeleteLoadBalancerResponse DeleteLoadBalancer(Models\DeleteLoadBalancerRequest $req) This API (DeleteLoadBalancer) is used to delete one or more specified CLB instances.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestId as an input parameter to check whether this task is successful.
 * @method Models\DeleteLoadBalancerListenersResponse DeleteLoadBalancerListeners(Models\DeleteLoadBalancerListenersRequest $req) This API is used to delete multiple listeners of a CLB instance.
This is an async API. After it is returned successfully, you can call the `DescribeTaskStatus` API with the returned `RequestID` as an input parameter to check whether this task is successful.
 * @method Models\DeleteLoadBalancerSnatIpsResponse DeleteLoadBalancerSnatIps(Models\DeleteLoadBalancerSnatIpsRequest $req) This API is used to delete the SNAT IP for an SnatPro CLB instance.
This is an async API. After it is returned successfully, you can check the task result by calling `DescribeTaskStatus` with the returned `RequestID`.
 * @method Models\DeleteRewriteResponse DeleteRewrite(Models\DeleteRewriteRequest $req) This API (DeleteRewrite) is used to delete the redirection relationship between the specified forwarding rules.
 * @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) This API (DeleteRule) is used to delete a forwarding rule under a layer-7 CLB instance listener
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\DeleteTargetGroupsResponse DeleteTargetGroups(Models\DeleteTargetGroupsRequest $req) This API is used to delete a target group.
 * @method Models\DeregisterFunctionTargetsResponse DeregisterFunctionTargets(Models\DeregisterFunctionTargetsRequest $req) This API is used to unbind a SCF function with a CLB forwarding rule. For L7 listeners, you need to specify the forwarding rule by using `LocationId` or `Domain+Url`. 
This is an async API. After it is returned successfully, you can call the [DescribeTaskStatus](https://intl.cloud.tencent.com/document/product/214/30683?from_cn_redirect=1) API with the returned RequestID to check whether this task is successful.
<br/>Limits: 

- Binding with SCF is only available in Guangzhou, Shenzhen Finance, Shanghai, Shanghai Finance, Beijing, Chengdu, Hong Kong (China), Singapore, Mumbai, Tokyo, and Silicon Valley.
- SCF functions can only be bound with CLB instances of bill-by-IP accounts but not with bill-by-CVM accounts. If you are using a bill-by-CVM account, we recommend upgrading it to a bill-by-IP account. For more information, please see [Checking Account Type](https://intl.cloud.tencent.com/document/product/1199/49090?from_cn_redirect=1).
- SCF functions cannot be bound with classic CLB instances.
- SCF functions cannot be bound with classic network-based CLB instances.
- SCF functions in the same region can be bound with CLB instances. SCF functions can only be bound across VPCs but not regions.
- SCF functions can only be bound with IPv4 and IPv6 NAT64 CLB instances, but currently not with IPv6 CLB instances.
- SCF functions can only be bound with layer-7 HTTP and HTTPS listeners, but not with layer-7 QUIC listeners or layer-4 (TCP, UDP, and TCP SSL) listeners.
- Only SCF event-triggered functions can be bound with CLB instances.
 * @method Models\DeregisterTargetGroupInstancesResponse DeregisterTargetGroupInstances(Models\DeregisterTargetGroupInstancesRequest $req) This API is used to unbind a server from a target group.
This is an async API. After it is returned successfully, you can call the API `DescribeTaskStatus` with the returned RequestId as an input parameter to check whether this task is successful.
 * @method Models\DeregisterTargetsResponse DeregisterTargets(Models\DeregisterTargetsRequest $req) This API (DeregisterTargets) is used to unbind one or more real servers from a CLB listener or forwarding rule. For layer-4 listeners, only the listener ID needs to be specified. For layer-7 listeners, the forwarding rule also needs to be specified through LocationId or Domain+Url.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\DeregisterTargetsFromClassicalLBResponse DeregisterTargetsFromClassicalLB(Models\DeregisterTargetsFromClassicalLBRequest $req) This API is used to unbind a CLB real server. This is an async API. After it is returned successfully, you can call the API `DescribeTaskStatus` with the returned RequestId as an input parameter to check whether this task is successful.
 * @method Models\DescribeBlockIPListResponse DescribeBlockIPList(Models\DescribeBlockIPListRequest $req) This API is used to query the list of blocked IPs (blocklist) of a CLB instance. (This API is in beta test. To use it, please submit a ticket.)
 * @method Models\DescribeBlockIPTaskResponse DescribeBlockIPTask(Models\DescribeBlockIPTaskRequest $req) This API is used to query the execution status of an async IP blocking (blocklisting) task by the async task ID returned by the `ModifyBlockIPList` API. (This API is in beta test. To use it, please submit a ticket.)
 * @method Models\DescribeClassicalLBByInstanceIdResponse DescribeClassicalLBByInstanceId(Models\DescribeClassicalLBByInstanceIdRequest $req) This API is used to get the list of classic CLB instance IDs through a real server ID.
 * @method Models\DescribeClassicalLBHealthStatusResponse DescribeClassicalLBHealthStatus(Models\DescribeClassicalLBHealthStatusRequest $req) This API (DescribeClassicalLBHealthStatus) is used to get the real server health status of a classic CLB
 * @method Models\DescribeClassicalLBListenersResponse DescribeClassicalLBListeners(Models\DescribeClassicalLBListenersRequest $req) This API (DescribeClassicalLBListeners) is used to get the listener information of a classic CLB.
 * @method Models\DescribeClassicalLBTargetsResponse DescribeClassicalLBTargets(Models\DescribeClassicalLBTargetsRequest $req) This API is used to get the real servers bound to a classic CLB instance.
 * @method Models\DescribeClsLogSetResponse DescribeClsLogSet(Models\DescribeClsLogSetRequest $req) This API is used to get the CLB exclusive logset.
 * @method Models\DescribeCrossTargetsResponse DescribeCrossTargets(Models\DescribeCrossTargetsRequest $req) Queries information of CVMs and ENIs that use cross-region binding 2.0
 * @method Models\DescribeCustomizedConfigAssociateListResponse DescribeCustomizedConfigAssociateList(Models\DescribeCustomizedConfigAssociateListRequest $req) This API is used to query the configured location, bound server or bound CLB instance. If there are domain names, the result will be filtered by domain name.
 * @method Models\DescribeCustomizedConfigListResponse DescribeCustomizedConfigList(Models\DescribeCustomizedConfigListRequest $req) This API is used to pull custom configuration lists to return the user configuration of `AppId`.
 * @method Models\DescribeIdleLoadBalancersResponse DescribeIdleLoadBalancers(Models\DescribeIdleLoadBalancersRequest $req) Idle CLB instances are pay-as-you-go load balancers that, within seven days after the creation, do not have rules configured or the configured rules are not associated with any servers. 
 * @method Models\DescribeLBListenersResponse DescribeLBListeners(Models\DescribeLBListenersRequest $req) This API is used to query CLB instances bound to the CVM or ENI.
 * @method Models\DescribeListenersResponse DescribeListeners(Models\DescribeListenersRequest $req) This API is used to get the list of listeners by CLB ID, listener protocol, or listener port. If no filter is specified, all listeners for the CLB instance will be returned.
 * @method Models\DescribeLoadBalancerListByCertIdResponse DescribeLoadBalancerListByCertId(Models\DescribeLoadBalancerListByCertIdRequest $req) This API is used to query the list of CLB instances associated with a certificate in a region by certificate ID.
 * @method Models\DescribeLoadBalancerOverviewResponse DescribeLoadBalancerOverview(Models\DescribeLoadBalancerOverviewRequest $req) Queries the total number of CLB instances and the number of CLB instances in different status (running, isolated and about to expire).
 * @method Models\DescribeLoadBalancerTrafficResponse DescribeLoadBalancerTraffic(Models\DescribeLoadBalancerTrafficRequest $req) This API is used to query CLB instances with high traffic under the current account, and return the top 10 results. For queries using a sub-account, only the CLB instances authorized to the sub-account will be returned.
 * @method Models\DescribeLoadBalancersResponse DescribeLoadBalancers(Models\DescribeLoadBalancersRequest $req) This API is used to query the list of CLB instances in a region.
 * @method Models\DescribeLoadBalancersDetailResponse DescribeLoadBalancersDetail(Models\DescribeLoadBalancersDetailRequest $req) This API is used to query CLB instance details, including listener, rules, and target real servers.
 * @method Models\DescribeQuotaResponse DescribeQuota(Models\DescribeQuotaRequest $req) This API is used to query various quotas in the current region.
 * @method Models\DescribeResourcesResponse DescribeResources(Models\DescribeResourcesRequest $req) This API is used to query the list of AZs and resources supported for the user in the current region.
 * @method Models\DescribeRewriteResponse DescribeRewrite(Models\DescribeRewriteRequest $req) This API (DescribeRewrite) is used to query the redirection relationship between the forwarding rules of a CLB instance by instance ID. If no listener ID or forwarding rule ID is specified, all redirection relationships in the instance will be returned.
 * @method Models\DescribeTargetGroupInstancesResponse DescribeTargetGroupInstances(Models\DescribeTargetGroupInstancesRequest $req) This API is used to get the information of servers bound to a target group.
 * @method Models\DescribeTargetGroupListResponse DescribeTargetGroupList(Models\DescribeTargetGroupListRequest $req) This API is used to get the target group list.
 * @method Models\DescribeTargetGroupsResponse DescribeTargetGroups(Models\DescribeTargetGroupsRequest $req) This API is used to query the target group information.
 * @method Models\DescribeTargetHealthResponse DescribeTargetHealth(Models\DescribeTargetHealthRequest $req) This API (DescribeTargetHealth) is used to query the health check result of a real server of a CLB instance.
 * @method Models\DescribeTargetsResponse DescribeTargets(Models\DescribeTargetsRequest $req) This API (DescribeTargets) is used to query the list of real servers bound to some listeners of a CLB instance.
 * @method Models\DescribeTaskStatusResponse DescribeTaskStatus(Models\DescribeTaskStatusRequest $req) This API is used to query the execution status of an async task. After non-query APIs (used to create/delete CLB instances, listeners, or rules or to bind/unbind real servers) are called successfully, this API needs to be used to query whether the task is successful.
 * @method Models\DisassociateTargetGroupsResponse DisassociateTargetGroups(Models\DisassociateTargetGroupsRequest $req) This API is used to unbind target groups from a rule.
This is an async API. After it is returned successfully, you can call the `DescribeTaskStatus` API with the returned `RequestID` as an input parameter to check whether this task is successful.
 * @method Models\InquiryPriceCreateLoadBalancerResponse InquiryPriceCreateLoadBalancer(Models\InquiryPriceCreateLoadBalancerRequest $req) This API is used to query the price of creating a CLB instance.
 * @method Models\InquiryPriceModifyLoadBalancerResponse InquiryPriceModifyLoadBalancer(Models\InquiryPriceModifyLoadBalancerRequest $req) This API is used to query the price of adjusting the specification of a CLB instance.
 * @method Models\InquiryPriceRefundLoadBalancerResponse InquiryPriceRefundLoadBalancer(Models\InquiryPriceRefundLoadBalancerRequest $req) This API is used to query the refund amount of returning a CLB instance. 
 * @method Models\InquiryPriceRenewLoadBalancerResponse InquiryPriceRenewLoadBalancer(Models\InquiryPriceRenewLoadBalancerRequest $req) This API is used to query the price of renewing a CLB instance. It's only available to prepaid CLB instances.
 * @method Models\ManualRewriteResponse ManualRewrite(Models\ManualRewriteRequest $req) After the original access address and the address to be redirected are configured manually, the system will automatically redirect requests made to the original access address to the target address of the corresponding path. Multiple paths can be configured as a redirection policy under one domain name to achieve automatic redirection between HTTP and HTTPS. A redirection policy should meet the following rules: if A has already been redirected to B, then it cannot be redirected to C (unless the original redirection relationship is deleted and a new one is created), and B cannot be redirected to any other addresses.
 * @method Models\MigrateClassicalLoadBalancersResponse MigrateClassicalLoadBalancers(Models\MigrateClassicalLoadBalancersRequest $req) This API is used to upgrade classic CLB instances to application CLB instances.
This is an async API. After it is returned successfully, you can check the action result by calling `DescribeLoadBalancers`. 
 * @method Models\ModifyBlockIPListResponse ModifyBlockIPList(Models\ModifyBlockIPListRequest $req) This API is used to modify the client IP blocklist of a CLB instance. One forwarding rule supports blocking up to 2,000,000 IPs. One blocklist can contain up to 2,000,000 entries.
(This API is in beta test. To use it, please submit a ticket.)
 * @method Models\ModifyDomainResponse ModifyDomain(Models\ModifyDomainRequest $req) This API (ModifyDomain) is used to modify a domain name under a layer-7 CLB listener.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\ModifyDomainAttributesResponse ModifyDomainAttributes(Models\ModifyDomainAttributesRequest $req) This API is used to modify the domain name-level attributes of a layer-7 listener's forwarding rule, such as modifying the domain name, changing the DefaultServer, enabling/disabling HTTP/2, and modifying certificates.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestId as an input parameter to check whether this task is successful.
 * @method Models\ModifyFunctionTargetsResponse ModifyFunctionTargets(Models\ModifyFunctionTargetsRequest $req) This API is used to modify the cloud functions associated with a load balancing forwarding rule.
 * @method Models\ModifyListenerResponse ModifyListener(Models\ModifyListenerRequest $req) This API (ModifyListener) is used to modify the attributes of a CLB listener, such as listener name, health check parameter, certificate information, and forwarding policy.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\ModifyLoadBalancerAttributesResponse ModifyLoadBalancerAttributes(Models\ModifyLoadBalancerAttributesRequest $req) This API is used to modify the attributes of a CLB instance, such as name and cross-region attributes.

Note: For CLB instances of bill-by-CVM users, cross-region attributes can be set only after a bandwidth package is purchased.This is an asynchronous API. After it returns a result successfully, the obtained RequestID should be used as an input parameter to call the DescribeTaskStatus API, for checking whether this task succeeds.
 * @method Models\ModifyLoadBalancerSlaResponse ModifyLoadBalancerSla(Models\ModifyLoadBalancerSlaRequest $req) This API is used to upgrade a pay-as-you-go shared CLB instance to an LCU-supported CLB instance. <br/>
Limits
- This API can only be used to upgrade pay-as-you-go shared instances. To upgrade monthly-subscribed shared instances, please go to the CLB console.
- An LCU-supported instance cannot be changed back to a shared instance.
- Classic CLB instances cannot be upgraded to LCU-supported instances.
 * @method Models\ModifyLoadBalancersProjectResponse ModifyLoadBalancersProject(Models\ModifyLoadBalancersProjectRequest $req) This API is used to modify the projects of CLB instances. 
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) This API (ModifyRule) is used to modify the attributes of a forwarding rule under a layer-7 CLB listener, such as forwarding path, health check attribute, and forwarding policy.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\ModifyTargetGroupAttributeResponse ModifyTargetGroupAttribute(Models\ModifyTargetGroupAttributeRequest $req) This API is used to rename a target group or modify its default port attribute.
 * @method Models\ModifyTargetGroupInstancesPortResponse ModifyTargetGroupInstancesPort(Models\ModifyTargetGroupInstancesPortRequest $req) This API is used to modify server ports of a target group in batches.
This is an async API. After it is returned successfully, you can call the `DescribeTaskStatus` API with the returned `RequestID` as an input parameter to check whether this task is successful.
 * @method Models\ModifyTargetGroupInstancesWeightResponse ModifyTargetGroupInstancesWeight(Models\ModifyTargetGroupInstancesWeightRequest $req) This API is used to modify server weights of a target group in batches.
This is an async API. After it is returned successfully, you can call the `DescribeTaskStatus` API with the returned `RequestID` as an input parameter to check whether this task is successful.
 * @method Models\ModifyTargetPortResponse ModifyTargetPort(Models\ModifyTargetPortRequest $req) This API (ModifyTargetPort) is used to modify the port of a real server bound to a listener.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\ModifyTargetWeightResponse ModifyTargetWeight(Models\ModifyTargetWeightRequest $req) This API (ModifyTargetWeight) is used to modify the forwarding weight of a real server bound to a CLB instance.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\RegisterFunctionTargetsResponse RegisterFunctionTargets(Models\RegisterFunctionTargetsRequest $req) This API is used to bind an SCF function with the L7 forwarding rule of a CLB instance. Note that you need to create an L7 listener (HTTP, HTTPS) and forwarding rule first.
This is an async API. After it is returned successfully, you can call the `DescribeTaskStatus` API with the returned `RequestID` as an input parameter to check whether this task is successful.<br/>
**Limits:**
- Binding with SCF is only available in Guangzhou, Shenzhen Finance, Shanghai, Shanghai Finance, Beijing, Chengdu, Hong Kong (China), Singapore, Mumbai, Tokyo, and Silicon Valley.
- SCF functions can only be bound with CLB instances of bill-by-IP accounts but not with bill-by-CVM accounts. If you are using a bill-by-CVM account, we recommend upgrading it to a bill-by-IP account. For more information, please see [Checking Account Type](https://intl.cloud.tencent.com/document/product/1199/49090?from_cn_redirect=1). 
- SCF functions cannot be bound with classic CLB instances.
- SCF functions cannot be bound with classic network-based CLB instances.
- SCF functions in the same region can be bound with CLB instances. SCF functions can only be bound across VPCs but not regions.
- SCF functions can only be bound with IPv4 and IPv6 NAT64 CLB instances, but currently not with IPv6 CLB instances.
- SCF functions can only be bound with layer-7 HTTP and HTTPS listeners, but not with layer-7 QUIC listeners or layer-4 (TCP, UDP, and TCP SSL) listeners.
- Only SCF event-triggered functions can be bound with CLB instances.
 * @method Models\RegisterTargetGroupInstancesResponse RegisterTargetGroupInstances(Models\RegisterTargetGroupInstancesRequest $req) This API is used to register servers to a target group.
This is an async API. After it is returned successfully, you can call the `DescribeTaskStatus` API with the returned `RequestID` as an input parameter to check whether this task is successful.
 * @method Models\RegisterTargetsResponse RegisterTargets(Models\RegisterTargetsRequest $req) This API (RegisterTargets) is used to bind one or more real servers to a CLB listener or layer-7 forwarding rule. Before using this API, you need to create relevant layer-4 listeners or layer-7 forwarding rules. For the former (TCP/UDP), only the listener ID needs to be specified, while for the latter (HTTP/HTTPS), the forwarding rule also needs to be specified through LocationId or Domain+Url.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\RegisterTargetsWithClassicalLBResponse RegisterTargetsWithClassicalLB(Models\RegisterTargetsWithClassicalLBRequest $req) This API is used to bind a real server with a classic CLB instance. This is an async API. After it is returned successfully, you can call the API `DescribeTaskStatus` with the returned RequestId as an input parameter to check whether this task is successful.
 * @method Models\ReplaceCertForLoadBalancersResponse ReplaceCertForLoadBalancers(Models\ReplaceCertForLoadBalancersRequest $req) This API (ReplaceCertForLoadBalancers) is used to replace the certificate associated with a CLB instance. A new certificates can be associated with a CLB only after the original certificate is disassociated from it.
This API supports replacing server certificates and client certificates.
The new certificate to be used can be specified by passing in the certificate ID. If no certificate ID is specified, relevant information such as certificate content must be passed in to create a new certificate and bind it to the CLB.
Note: This API can only be called in the Guangzhou region; for other regions, an error will occur due to domain name resolution problems.
 * @method Models\SetCustomizedConfigForLoadBalancerResponse SetCustomizedConfigForLoadBalancer(Models\SetCustomizedConfigForLoadBalancerRequest $req) This API is used to create or manage a user-defined CLB configuration template.
 * @method Models\SetLoadBalancerClsLogResponse SetLoadBalancerClsLog(Models\SetLoadBalancerClsLogRequest $req) This API is used to add, delete, and update the CLS topic of a CLB instance.
 * @method Models\SetLoadBalancerSecurityGroupsResponse SetLoadBalancerSecurityGroups(Models\SetLoadBalancerSecurityGroupsRequest $req) This API is used to configure (bind and unbind) security groups for a public network CLB instance. You can use the DescribeLoadBalancers API to query the security groups currently bound to a CLB instance. This API follows the set semantics.For binding operations, the input parameters should specify all security groups that should be bound (have been bound and will be bound) to the CLB instance.For unbinding operations, the input parameters should specify all security groups bound to a CLB instance after unbinding. If you want to unbind all security groups, you can omit this parameter or input an empty array. Note: After a private network CLB is bound to an EIP, the security groups on the CLB do not take effect for the traffic from the EIP, but take effect for the traffic from the private network CLB.
 * @method Models\SetLoadBalancerStartStatusResponse SetLoadBalancerStartStatus(Models\SetLoadBalancerStartStatusRequest $req) This API is used to enable or disable a CLB instance or listener.This is an asynchronous API. After it returns a result successfully, the obtained RequestID should be used as an input parameter to call the DescribeTaskStatus API, for checking whether this task succeeds.This feature is currently in beta test. To use it, submit a [ticket](https://console.cloud.tencent.com/workorder/category?level1_id=6&level2_id=163&source=0&data_title=%E8%B4%9F%E8%BD%BD%E5%9D%87%E8%A1%A1%20LB&step=1) for application.
 * @method Models\SetSecurityGroupForLoadbalancersResponse SetSecurityGroupForLoadbalancers(Models\SetSecurityGroupForLoadbalancersRequest $req) This API is used to bind or unbind a security group for multiple public network CLB instances. Note: Private network CLB do not support binding security groups.
 */

class ClbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "clb.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "clb";

    /**
     * @var string
     */
    protected $version = "2018-03-17";

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
        $respClass = "TencentCloud"."\\".ucfirst("clb")."\\"."V20180317\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
