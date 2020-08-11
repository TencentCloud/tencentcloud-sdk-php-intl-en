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
 * @method Models\BatchDeregisterTargetsResponse BatchDeregisterTargets(Models\BatchDeregisterTargetsRequest $req) This API is used to unbind layer-4/layer-7 real servers in batches.
 * @method Models\BatchModifyTargetWeightResponse BatchModifyTargetWeight(Models\BatchModifyTargetWeightRequest $req) This API is used to modify the forwarding weights of real servers bound to a CLB listener in batches. It supports layer-4 and layer-7 CLB listeners but not Classic CLB.
This is an async API. After it is returned successfully, you can call the `DescribeTaskStatus` API with the returned `RequestID` as an input parameter to check whether this task is successful.
 * @method Models\BatchRegisterTargetsResponse BatchRegisterTargets(Models\BatchRegisterTargetsRequest $req) This API is used to bind CVM instances or ENIs in batches. It supports cross-region binding and layer-4 and layer-7 (TCP, UDP, HTTP, HTTPS) protocols.
 * @method Models\CreateClsLogSetResponse CreateClsLogSet(Models\CreateClsLogSetRequest $req) This API is used to create a CLB exclusive logset for storing CLB logs.
 * @method Models\CreateListenerResponse CreateListener(Models\CreateListenerRequest $req) This API is used to create a listener for a CLB instance.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestId as an input parameter to check whether this task is successful.
 * @method Models\CreateLoadBalancerResponse CreateLoadBalancer(Models\CreateLoadBalancerRequest $req) This API (CreateLoadBalancer) is used to create a CLB instance. To use the CLB service, you first need to purchase one or more instances. After this API is called successfully, a unique instance ID will be returned. There are two types of instances: public network and private network. For more information, see the product types in the product documentation.
Note: (1) To apply for a CLB instance in the specified AZ and cross-AZ disaster recovery, please [submit a ticket](https://console.cloud.tencent.com/workorder/category); (2) Currently, IPv6 is supported only in Beijing, Shanghai, and Guangzhou regions.
This is an async API. After it is returned successfully, you can call the DescribeLoadBalancers API to query the status of the instance (such as creating and normal) to check whether it is successfully created.
 * @method Models\CreateLoadBalancerSnatIpsResponse CreateLoadBalancerSnatIps(Models\CreateLoadBalancerSnatIpsRequest $req) This API is used to add a SNAT IP for a SnatPro CLB instance. If SnatPro is not enabled for CLB, it will be automatically enabled after the SNAT IP is added.
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
 * @method Models\DeleteLoadBalancerSnatIpsResponse DeleteLoadBalancerSnatIps(Models\DeleteLoadBalancerSnatIpsRequest $req) This API is used to delete a SNAT IP for a SnatPro CLB instance.
 * @method Models\DeleteRewriteResponse DeleteRewrite(Models\DeleteRewriteRequest $req) This API (DeleteRewrite) is used to delete the redirection relationship between the specified forwarding rules.
 * @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) This API (DeleteRule) is used to delete a forwarding rule under a layer-7 CLB instance listener
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\DeleteTargetGroupsResponse DeleteTargetGroups(Models\DeleteTargetGroupsRequest $req) This API is used to delete a target group.
 * @method Models\DeregisterTargetGroupInstancesResponse DeregisterTargetGroupInstances(Models\DeregisterTargetGroupInstancesRequest $req) This API is used to unbind a server from a target group.
This is an async API. After it is returned successfully, you can call the `DescribeTaskStatus` API with the returned `RequestID` as an input parameter to check whether this task is successful.
 * @method Models\DeregisterTargetsResponse DeregisterTargets(Models\DeregisterTargetsRequest $req) This API (DeregisterTargets) is used to unbind one or more real servers from a CLB listener or forwarding rule. For layer-4 listeners, only the listener ID needs to be specified. For layer-7 listeners, the forwarding rule also needs to be specified through LocationId or Domain+Url.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\DeregisterTargetsFromClassicalLBResponse DeregisterTargetsFromClassicalLB(Models\DeregisterTargetsFromClassicalLBRequest $req) This API (DeregisterTargetsFromClassicalLB) is used to unbind real servers from a classic load balancer.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestId as an input parameter to check whether this task is successful.
 * @method Models\DescribeBlockIPListResponse DescribeBlockIPList(Models\DescribeBlockIPListRequest $req) This API is used to query the list of blocked IPs (blocklist) of a CLB instance. (This API is in beta test. To use it, please submit a ticket.)
 * @method Models\DescribeBlockIPTaskResponse DescribeBlockIPTask(Models\DescribeBlockIPTaskRequest $req) This API is used to query the execution status of an async IP blocking (blocklisting) task by the async task ID returned by the `ModifyBlockIPList` API. (This API is in beta test. To use it, please submit a ticket.)
 * @method Models\DescribeClassicalLBByInstanceIdResponse DescribeClassicalLBByInstanceId(Models\DescribeClassicalLBByInstanceIdRequest $req) This API (DescribeClassicalLBByInstanceId) is used to get the list of classic CLB IDs through the real server instance ID.
 * @method Models\DescribeClassicalLBHealthStatusResponse DescribeClassicalLBHealthStatus(Models\DescribeClassicalLBHealthStatusRequest $req) This API (DescribeClassicalLBHealthStatus) is used to get the real server health status of a classic CLB
 * @method Models\DescribeClassicalLBListenersResponse DescribeClassicalLBListeners(Models\DescribeClassicalLBListenersRequest $req) This API (DescribeClassicalLBListeners) is used to get the listener information of a classic CLB.
 * @method Models\DescribeClassicalLBTargetsResponse DescribeClassicalLBTargets(Models\DescribeClassicalLBTargetsRequest $req) This API (DescribeClassicalLBTargets) is used to get the real servers bound to a classic CLB.
 * @method Models\DescribeClsLogSetResponse DescribeClsLogSet(Models\DescribeClsLogSetRequest $req) This API is used to obtain the CLB exclusive logset of a user.
 * @method Models\DescribeListenersResponse DescribeListeners(Models\DescribeListenersRequest $req) This API is used to get the list of listeners by CLB instance ID, listener protocol, or port. If no filter is specified, all listeners under the CLB instance will be returned.
 * @method Models\DescribeLoadBalancerListByCertIdResponse DescribeLoadBalancerListByCertId(Models\DescribeLoadBalancerListByCertIdRequest $req) This API is used to query the list of CLB instances associated with a certificate in a region by certificate ID.
 * @method Models\DescribeLoadBalancersResponse DescribeLoadBalancers(Models\DescribeLoadBalancersRequest $req) This API is used to query the list of CLB instances in a region.

 * @method Models\DescribeRewriteResponse DescribeRewrite(Models\DescribeRewriteRequest $req) This API (DescribeRewrite) is used to query the redirection relationship between the forwarding rules of a CLB instance by instance ID. If no listener ID or forwarding rule ID is specified, all redirection relationships in the instance will be returned.
 * @method Models\DescribeTargetGroupInstancesResponse DescribeTargetGroupInstances(Models\DescribeTargetGroupInstancesRequest $req) This API is used to get the information of servers bound to a target group.
 * @method Models\DescribeTargetGroupListResponse DescribeTargetGroupList(Models\DescribeTargetGroupListRequest $req) This API is used to get the target group list.
 * @method Models\DescribeTargetGroupsResponse DescribeTargetGroups(Models\DescribeTargetGroupsRequest $req) This API is used to query the target group information.
 * @method Models\DescribeTargetHealthResponse DescribeTargetHealth(Models\DescribeTargetHealthRequest $req) This API (DescribeTargetHealth) is used to query the health check result of a real server of a CLB instance.
 * @method Models\DescribeTargetsResponse DescribeTargets(Models\DescribeTargetsRequest $req) This API (DescribeTargets) is used to query the list of real servers bound to some listeners of a CLB instance.
 * @method Models\DescribeTaskStatusResponse DescribeTaskStatus(Models\DescribeTaskStatusRequest $req) This API is used to query the execution status of an async task. After non-query APIs (used to create/delete CLB instances, listeners, or rules or to bind/unbind real servers) are called successfully, this API needs to be used to query whether the task is successful.
 * @method Models\DisassociateTargetGroupsResponse DisassociateTargetGroups(Models\DisassociateTargetGroupsRequest $req) This API is used to unbind target groups from a rule.
This is an async API. After it is returned successfully, you can call the `DescribeTaskStatus` API with the returned `RequestID` as an input parameter to check whether this task is successful.
 * @method Models\ManualRewriteResponse ManualRewrite(Models\ManualRewriteRequest $req) After the original access address and the address to be redirected are configured manually, the system will automatically redirect requests made to the original access address to the target address of the corresponding path. Multiple paths can be configured as a redirection policy under one domain name to achieve automatic redirection between HTTP and HTTPS. A redirection policy should meet the following rules: if A has already been redirected to B, then it cannot be redirected to C (unless the original redirection relationship is deleted and a new one is created), and B cannot be redirected to any other addresses.
 * @method Models\ModifyBlockIPListResponse ModifyBlockIPList(Models\ModifyBlockIPListRequest $req) This API is used to modify the client IP blocklist of a CLB instance. One forwarding rule supports blocking up to 2,000,000 IPs. One blocklist can contain up to 2,000,000 entries.
(This API is in beta test. To use it, please submit a ticket.)
 * @method Models\ModifyDomainResponse ModifyDomain(Models\ModifyDomainRequest $req) This API (ModifyDomain) is used to modify a domain name under a layer-7 CLB listener.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\ModifyDomainAttributesResponse ModifyDomainAttributes(Models\ModifyDomainAttributesRequest $req) This API is used to modify the domain name-level attributes of a layer-7 listener's forwarding rule, such as modifying the domain name, changing the DefaultServer, enabling/disabling HTTP/2, and modifying certificates.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestId as an input parameter to check whether this task is successful.
 * @method Models\ModifyListenerResponse ModifyListener(Models\ModifyListenerRequest $req) This API (ModifyListener) is used to modify the attributes of a CLB listener, such as listener name, health check parameter, certificate information, and forwarding policy.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\ModifyLoadBalancerAttributesResponse ModifyLoadBalancerAttributes(Models\ModifyLoadBalancerAttributesRequest $req) This API is used to modify the attributes of a CLB instance such as name and cross-region attributes.
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
 * @method Models\RegisterTargetGroupInstancesResponse RegisterTargetGroupInstances(Models\RegisterTargetGroupInstancesRequest $req) This API is used to register servers to a target group.
This is an async API. After it is returned successfully, you can call the `DescribeTaskStatus` API with the returned `RequestID` as an input parameter to check whether this task is successful.
 * @method Models\RegisterTargetsResponse RegisterTargets(Models\RegisterTargetsRequest $req) This API (RegisterTargets) is used to bind one or more real servers to a CLB listener or layer-7 forwarding rule. Before using this API, you need to create relevant layer-4 listeners or layer-7 forwarding rules. For the former (TCP/UDP), only the listener ID needs to be specified, while for the latter (HTTP/HTTPS), the forwarding rule also needs to be specified through LocationId or Domain+Url.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\RegisterTargetsWithClassicalLBResponse RegisterTargetsWithClassicalLB(Models\RegisterTargetsWithClassicalLBRequest $req) This API (RegisterTargetsWithClassicalLB) is used to bind real servers to a classic CLB.
This is an async API. After it is returned successfully, you can call the DescribeTaskStatus API with the returned RequestId as an input parameter to check whether this task is successful.
 * @method Models\ReplaceCertForLoadBalancersResponse ReplaceCertForLoadBalancers(Models\ReplaceCertForLoadBalancersRequest $req) This API (ReplaceCertForLoadBalancers) is used to replace the certificate associated with a CLB instance. A new certificates can be associated with a CLB only after the original certificate is disassociated from it.
This API supports replacing server certificates and client certificates.
The new certificate to be used can be specified by passing in the certificate ID. If no certificate ID is specified, relevant information such as certificate content must be passed in to create a new certificate and bind it to the CLB.
Note: This API can only be called in the Guangzhou region; for other regions, an error will occur due to domain name resolution problems.
 * @method Models\SetLoadBalancerClsLogResponse SetLoadBalancerClsLog(Models\SetLoadBalancerClsLogRequest $req) This API is used to add, delete, and update the CLS topic of a CLB instance.
 * @method Models\SetLoadBalancerSecurityGroupsResponse SetLoadBalancerSecurityGroups(Models\SetLoadBalancerSecurityGroupsRequest $req) This API (SetLoadBalancerSecurityGroups) is used to bind/unbind security groups for a public network CLB instance. You can use the DescribeLoadBalancers API to query the security groups bound to a CLB instance. This API uses `set` semantics.
During a binding operation, the input parameters need to be all security groups to be bound to the CLB instance (including those already bound ones and new ones).
During an unbinding operation, the input parameters need to be all the security groups still bound to the CLB instance after the unbinding operation. To unbind all security groups, you can leave this parameter empty or pass in an empty array. Note: Private network CLB do not support binding security groups.
 * @method Models\SetSecurityGroupForLoadbalancersResponse SetSecurityGroupForLoadbalancers(Models\SetSecurityGroupForLoadbalancersRequest $req) This API is used to bind or unbind a security group for multiple public network CLB instances. Note: Private network CLB do not support binding security groups.
 */

class ClbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "clb.tencentcloudapi.com";

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
