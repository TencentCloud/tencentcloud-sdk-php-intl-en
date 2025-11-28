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

namespace TencentCloud\Tdmq\V20200217;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tdmq\V20200217\Models as Models;

/**
 * @method Models\AcknowledgeMessageResponse AcknowledgeMessage(Models\AcknowledgeMessageRequest $req) This API is used to acknowledge the message in the specified topic by the provided `MessageID`.
 * @method Models\ClearCmqQueueResponse ClearCmqQueue(Models\ClearCmqQueueRequest $req) This API is used to clear the messages in the CMQ message queue.
 * @method Models\ClearCmqSubscriptionFilterTagsResponse ClearCmqSubscriptionFilterTags(Models\ClearCmqSubscriptionFilterTagsRequest $req) This API is used to clear the message tags of a subscriber.
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) This API is used to create a cluster.
 * @method Models\CreateCmqQueueResponse CreateCmqQueue(Models\CreateCmqQueueRequest $req) This API is used to create a CMQ queue.
 * @method Models\CreateCmqSubscribeResponse CreateCmqSubscribe(Models\CreateCmqSubscribeRequest $req) This API is used to create a CMQ subscription.
 * @method Models\CreateCmqTopicResponse CreateCmqTopic(Models\CreateCmqTopicRequest $req) This API is used to create a CMQ topic.
 * @method Models\CreateEnvironmentResponse CreateEnvironment(Models\CreateEnvironmentRequest $req) This API is used to create a TDMQ namespace.
 * @method Models\CreateEnvironmentRoleResponse CreateEnvironmentRole(Models\CreateEnvironmentRoleRequest $req) This API is used to create an environment role.
 * @method Models\CreateProClusterResponse CreateProCluster(Models\CreateProClusterRequest $req) This api is used to create a professional cluster with prepayment via api calls.
 * @method Models\CreateRabbitMQBindingResponse CreateRabbitMQBinding(Models\CreateRabbitMQBindingRequest $req) This API is used to create a TDMQ for RabbitMQ routing relationship.
 * @method Models\CreateRabbitMQUserResponse CreateRabbitMQUser(Models\CreateRabbitMQUserRequest $req) This API is used to create a TDMQ for RabbitMQ user.
 * @method Models\CreateRabbitMQVipInstanceResponse CreateRabbitMQVipInstance(Models\CreateRabbitMQVipInstanceRequest $req) This API is used to create a RabbitMQ managed instance.
 * @method Models\CreateRabbitMQVirtualHostResponse CreateRabbitMQVirtualHost(Models\CreateRabbitMQVirtualHostRequest $req) This API is used to create a TDMQ for RabbitMQ vhost.
 * @method Models\CreateRocketMQClusterResponse CreateRocketMQCluster(Models\CreateRocketMQClusterRequest $req) This API is used to create a RocketMQ cluster.
 * @method Models\CreateRocketMQEnvironmentRoleResponse CreateRocketMQEnvironmentRole(Models\CreateRocketMQEnvironmentRoleRequest $req) Creates environment role authorization
 * @method Models\CreateRocketMQGroupResponse CreateRocketMQGroup(Models\CreateRocketMQGroupRequest $req) This API is used to create a RocketMQ consumer group.
 * @method Models\CreateRocketMQNamespaceResponse CreateRocketMQNamespace(Models\CreateRocketMQNamespaceRequest $req) This API is used to create a RocketMQ namespace.
 * @method Models\CreateRocketMQRoleResponse CreateRocketMQRole(Models\CreateRocketMQRoleRequest $req) This API is used to create a role.
 * @method Models\CreateRocketMQTopicResponse CreateRocketMQTopic(Models\CreateRocketMQTopicRequest $req) This API is used to create a RocketMQ topic.
 * @method Models\CreateRocketMQVipInstanceResponse CreateRocketMQVipInstance(Models\CreateRocketMQVipInstanceRequest $req) This API is used to create a RocketMQ Exclusive Edition instance.
 * @method Models\CreateRoleResponse CreateRole(Models\CreateRoleRequest $req) This API is used to create a role.
 * @method Models\CreateSubscriptionResponse CreateSubscription(Models\CreateSubscriptionRequest $req) This API is used to create a subscription to a topic.
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) This API is used to add a message topic in the specified partition and type.
 * @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) This API is used to delete a cluster.
 * @method Models\DeleteCmqQueueResponse DeleteCmqQueue(Models\DeleteCmqQueueRequest $req) This API is used to delete a CMQ queue.
 * @method Models\DeleteCmqSubscribeResponse DeleteCmqSubscribe(Models\DeleteCmqSubscribeRequest $req) This API is used to delete a CMQ subscription.
 * @method Models\DeleteCmqTopicResponse DeleteCmqTopic(Models\DeleteCmqTopicRequest $req) This API is used to delete a CMQ topic.
 * @method Models\DeleteEnvironmentRolesResponse DeleteEnvironmentRoles(Models\DeleteEnvironmentRolesRequest $req) This API is used to delete an environment role.
 * @method Models\DeleteEnvironmentsResponse DeleteEnvironments(Models\DeleteEnvironmentsRequest $req) This API is used to batch delete namespaces under a tenant.
 * @method Models\DeleteProClusterResponse DeleteProCluster(Models\DeleteProClusterRequest $req) This API is used to delete a professional cluster with prepayment via API calls.
 * @method Models\DeleteRabbitMQBindingResponse DeleteRabbitMQBinding(Models\DeleteRabbitMQBindingRequest $req) This API is used to unbind RabbitMQ routing relationships.
 * @method Models\DeleteRabbitMQPermissionResponse DeleteRabbitMQPermission(Models\DeleteRabbitMQPermissionRequest $req) This API is used to delete RabbitMQ permissions.
 * @method Models\DeleteRabbitMQUserResponse DeleteRabbitMQUser(Models\DeleteRabbitMQUserRequest $req) This API is used to delete a TDMQ for RabbitMQ user.
 * @method Models\DeleteRabbitMQVipInstanceResponse DeleteRabbitMQVipInstance(Models\DeleteRabbitMQVipInstanceRequest $req) This API is used to delete a RabbitMQ managed instance.
 * @method Models\DeleteRabbitMQVirtualHostResponse DeleteRabbitMQVirtualHost(Models\DeleteRabbitMQVirtualHostRequest $req) This API is used to delete a TDMQ for RabbitMQ vhost.
 * @method Models\DeleteRocketMQClusterResponse DeleteRocketMQCluster(Models\DeleteRocketMQClusterRequest $req) This API is used to delete a RocketMQ cluster.
 * @method Models\DeleteRocketMQEnvironmentRolesResponse DeleteRocketMQEnvironmentRoles(Models\DeleteRocketMQEnvironmentRolesRequest $req) Deletes environment role authorization
 * @method Models\DeleteRocketMQGroupResponse DeleteRocketMQGroup(Models\DeleteRocketMQGroupRequest $req) This API is used to delete a RocketMQ consumer group.
 * @method Models\DeleteRocketMQNamespaceResponse DeleteRocketMQNamespace(Models\DeleteRocketMQNamespaceRequest $req) This API is used to delete a RocketMQ namespace.
 * @method Models\DeleteRocketMQRolesResponse DeleteRocketMQRoles(Models\DeleteRocketMQRolesRequest $req) Deletes roles. Batch deletion is supported.
 * @method Models\DeleteRocketMQTopicResponse DeleteRocketMQTopic(Models\DeleteRocketMQTopicRequest $req) This API is used to delete a RocketMQ topic.
 * @method Models\DeleteRocketMQVipInstanceResponse DeleteRocketMQVipInstance(Models\DeleteRocketMQVipInstanceRequest $req) This API is used to delete a RocketMQ Exclusive Edition instance.
 * @method Models\DeleteRolesResponse DeleteRoles(Models\DeleteRolesRequest $req) This API is used to delete one or multiple roles.
 * @method Models\DeleteSubscriptionsResponse DeleteSubscriptions(Models\DeleteSubscriptionsRequest $req) This API is used to delete a subscription.
 * @method Models\DeleteTopicsResponse DeleteTopics(Models\DeleteTopicsRequest $req) This API is used to batch delete topics.
 * @method Models\DescribeBindClustersResponse DescribeBindClusters(Models\DescribeBindClustersRequest $req) This API is used to get the list of dedicated clusters bound to a user.
 * @method Models\DescribeBindVpcsResponse DescribeBindVpcs(Models\DescribeBindVpcsRequest $req) This API is used to get the tenant-VPC binding relationship.
 * @method Models\DescribeClusterDetailResponse DescribeClusterDetail(Models\DescribeClusterDetailRequest $req) This API is used to get the details of a cluster.
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) This API is used to get the list of clusters.
 * @method Models\DescribeCmqQueueDetailResponse DescribeCmqQueueDetail(Models\DescribeCmqQueueDetailRequest $req) This API is used to query the details of a CMQ queue.
 * @method Models\DescribeCmqQueuesResponse DescribeCmqQueues(Models\DescribeCmqQueuesRequest $req) This API is used to query all CMQ queues.
 * @method Models\DescribeCmqSubscriptionDetailResponse DescribeCmqSubscriptionDetail(Models\DescribeCmqSubscriptionDetailRequest $req) This API is used to query the CMQ subscription details.
 * @method Models\DescribeCmqTopicDetailResponse DescribeCmqTopicDetail(Models\DescribeCmqTopicDetailRequest $req) This API is used to query the details of a CMQ topic.
 * @method Models\DescribeCmqTopicsResponse DescribeCmqTopics(Models\DescribeCmqTopicsRequest $req) This API is used to enumerate all CMQ topics.
 * @method Models\DescribeEnvironmentAttributesResponse DescribeEnvironmentAttributes(Models\DescribeEnvironmentAttributesRequest $req) This API is used to get the attributes of the specified namespace.
 * @method Models\DescribeEnvironmentRolesResponse DescribeEnvironmentRoles(Models\DescribeEnvironmentRolesRequest $req) This API is used to get the list of namespace roles.
 * @method Models\DescribeEnvironmentsResponse DescribeEnvironments(Models\DescribeEnvironmentsRequest $req) This API is used to get the list of namespaces under a tenant.
 * @method Models\DescribeMqMsgTraceResponse DescribeMqMsgTrace(Models\DescribeMqMsgTraceRequest $req) Queries message trajectory
 * @method Models\DescribeMsgResponse DescribeMsg(Models\DescribeMsgRequest $req) This API is used to get message details.
 * @method Models\DescribeMsgTraceResponse DescribeMsgTrace(Models\DescribeMsgTraceRequest $req) Queries message trajectory
 * @method Models\DescribePublisherSummaryResponse DescribePublisherSummary(Models\DescribePublisherSummaryRequest $req) This API is used to obtain message production overview information.
 * @method Models\DescribePublishersResponse DescribePublishers(Models\DescribePublishersRequest $req) This API is used to obtain the list of producer information.
 * @method Models\DescribePulsarProInstanceDetailResponse DescribePulsarProInstanceDetail(Models\DescribePulsarProInstanceDetailRequest $req) This API is used to obtain the information of a TDMQ for Pulsar pro cluster instance.
 * @method Models\DescribePulsarProInstancesResponse DescribePulsarProInstances(Models\DescribePulsarProInstancesRequest $req) This API is used to query the list of the purchased TDMQ for Pulsar pro instances.
 * @method Models\DescribeRabbitMQBindingsResponse DescribeRabbitMQBindings(Models\DescribeRabbitMQBindingsRequest $req) This API is used to query the list of RabbitMQ route relations.
 * @method Models\DescribeRabbitMQExchangesResponse DescribeRabbitMQExchanges(Models\DescribeRabbitMQExchangesRequest $req) This API is used to query the list of TDMQ for RabbitMQ exchanges.
 * @method Models\DescribeRabbitMQNodeListResponse DescribeRabbitMQNodeList(Models\DescribeRabbitMQNodeListRequest $req) This API is used to query the RabbitMQ managed node list.
 * @method Models\DescribeRabbitMQPermissionResponse DescribeRabbitMQPermission(Models\DescribeRabbitMQPermissionRequest $req) This API is used to query the list of TDMQ for RabbitMQ permissions.
 * @method Models\DescribeRabbitMQQueueDetailResponse DescribeRabbitMQQueueDetail(Models\DescribeRabbitMQQueueDetailRequest $req) This API is used to query the details of RabbitMQ queues.
 * @method Models\DescribeRabbitMQQueuesResponse DescribeRabbitMQQueues(Models\DescribeRabbitMQQueuesRequest $req) This API is used to query the list of TDMQ for RabbitMQ queues.
 * @method Models\DescribeRabbitMQUserResponse DescribeRabbitMQUser(Models\DescribeRabbitMQUserRequest $req) This API is used to query the list of TDMQ for RabbitMQ users.
 * @method Models\DescribeRabbitMQVipInstanceResponse DescribeRabbitMQVipInstance(Models\DescribeRabbitMQVipInstanceRequest $req) This API is used to obtain information about one RabbitMQ managed instance.
 * @method Models\DescribeRabbitMQVipInstancesResponse DescribeRabbitMQVipInstances(Models\DescribeRabbitMQVipInstancesRequest $req) This API is used to query the RabbitMQ managed instance list of user purchases.
 * @method Models\DescribeRabbitMQVirtualHostResponse DescribeRabbitMQVirtualHost(Models\DescribeRabbitMQVirtualHostRequest $req) This API is used to query the list of TDMQ for RabbitMQ vhosts.
 * @method Models\DescribeRocketMQClusterResponse DescribeRocketMQCluster(Models\DescribeRocketMQClusterRequest $req) This API is used to get the information of a specific RocketMQ cluster.
 * @method Models\DescribeRocketMQClustersResponse DescribeRocketMQClusters(Models\DescribeRocketMQClustersRequest $req) This API is used to get the list of RocketMQ clusters.
 * @method Models\DescribeRocketMQEnvironmentRolesResponse DescribeRocketMQEnvironmentRoles(Models\DescribeRocketMQEnvironmentRolesRequest $req) Obtains the namespace role list
 * @method Models\DescribeRocketMQGroupsResponse DescribeRocketMQGroups(Models\DescribeRocketMQGroupsRequest $req) This API is used to get the list of RocketMQ consumer groups.
 * @method Models\DescribeRocketMQMsgResponse DescribeRocketMQMsg(Models\DescribeRocketMQMsgRequest $req) This API is used to query the TDMQ for RocketMQ message details.
 * @method Models\DescribeRocketMQMsgTraceResponse DescribeRocketMQMsgTrace(Models\DescribeRocketMQMsgTraceRequest $req) Queries message trajectory
 * @method Models\DescribeRocketMQNamespacesResponse DescribeRocketMQNamespaces(Models\DescribeRocketMQNamespacesRequest $req) This API is used to get the list of RocketMQ namespaces.
 * @method Models\DescribeRocketMQProducersResponse DescribeRocketMQProducers(Models\DescribeRocketMQProducersRequest $req) This API is used to query the producer client list under a specified topic in RocketMQ.
 * @method Models\DescribeRocketMQPublicAccessMonitorDataResponse DescribeRocketMQPublicAccessMonitorData(Models\DescribeRocketMQPublicAccessMonitorDataRequest $req) This API is used to pull public network metric monitoring data from TCOP. Currently, only inbound bandwidth and outbound bandwidth metrics from client to LB are supported.
 * @method Models\DescribeRocketMQPublicAccessPointResponse DescribeRocketMQPublicAccessPoint(Models\DescribeRocketMQPublicAccessPointRequest $req) This API is used to query the public network access information of RocketMQ instances.
 * @method Models\DescribeRocketMQRolesResponse DescribeRocketMQRoles(Models\DescribeRocketMQRolesRequest $req) Obtains the list of roles
 * @method Models\DescribeRocketMQTopUsagesResponse DescribeRocketMQTopUsages(Models\DescribeRocketMQTopUsagesRequest $req) Used to obtain the RocketMQ metric sorting list, such as sorting topics under a cluster instance by the most occupied storage space.
 * @method Models\DescribeRocketMQTopicResponse DescribeRocketMQTopic(Models\DescribeRocketMQTopicRequest $req) This API is used to obtain RocketMQ topic details.
 * @method Models\DescribeRocketMQTopicMsgsResponse DescribeRocketMQTopicMsgs(Models\DescribeRocketMQTopicMsgsRequest $req) Query RocketMQ messages.
 * @method Models\DescribeRocketMQTopicStatsResponse DescribeRocketMQTopicStats(Models\DescribeRocketMQTopicStatsRequest $req) This API is used to obtain the topic production details list.
 * @method Models\DescribeRocketMQTopicsResponse DescribeRocketMQTopics(Models\DescribeRocketMQTopicsRequest $req) This API is used to get the list of RocketMQ topics.
 * @method Models\DescribeRocketMQTopicsByGroupResponse DescribeRocketMQTopicsByGroup(Models\DescribeRocketMQTopicsByGroupRequest $req) Obtains the list of topics subscribed under a specified consumer group
 * @method Models\DescribeRocketMQVipInstanceDetailResponse DescribeRocketMQVipInstanceDetail(Models\DescribeRocketMQVipInstanceDetailRequest $req) This API is used to get the information of a specific TDMQ for RocketMQ exclusive cluster.
 * @method Models\DescribeRocketMQVipInstancesResponse DescribeRocketMQVipInstances(Models\DescribeRocketMQVipInstancesRequest $req) This API is used to query the list of the purchased TDMQ for RocketMQ exclusive instances.
 * @method Models\DescribeRolesResponse DescribeRoles(Models\DescribeRolesRequest $req) This API is used to get the list of roles.
 * @method Models\DescribeSubscriptionsResponse DescribeSubscriptions(Models\DescribeSubscriptionsRequest $req) This API is used to query the list of subscribers under the specified environment and topic.
 * @method Models\DescribeTopicMsgsResponse DescribeTopicMsgs(Models\DescribeTopicMsgsRequest $req) This API is used to query messages.
 * @method Models\DescribeTopicsResponse DescribeTopics(Models\DescribeTopicsRequest $req) This API is used to get the list of topics under an environment.
 * @method Models\ExportRocketMQMessageDetailResponse ExportRocketMQMessageDetail(Models\ExportRocketMQMessageDetailRequest $req) Export the RocketMQ message details.
 * @method Models\ModifyClusterResponse ModifyCluster(Models\ModifyClusterRequest $req) This API is used to update a cluster.
 * @method Models\ModifyCmqQueueAttributeResponse ModifyCmqQueueAttribute(Models\ModifyCmqQueueAttributeRequest $req) This API is used to modify the attributes of a CMQ queue.
 * @method Models\ModifyCmqSubscriptionAttributeResponse ModifyCmqSubscriptionAttribute(Models\ModifyCmqSubscriptionAttributeRequest $req) This API is used to modify the attributes of a CMQ subscription.
 * @method Models\ModifyCmqTopicAttributeResponse ModifyCmqTopicAttribute(Models\ModifyCmqTopicAttributeRequest $req) This API is used to modify the attributes of a CMQ topic.
 * @method Models\ModifyEnvironmentAttributesResponse ModifyEnvironmentAttributes(Models\ModifyEnvironmentAttributesRequest $req) This API is used to modify the attributes of the specified namespace.
 * @method Models\ModifyEnvironmentRoleResponse ModifyEnvironmentRole(Models\ModifyEnvironmentRoleRequest $req) This API is used to modify an environment role.
 * @method Models\ModifyPublicNetworkSecurityPolicyResponse ModifyPublicNetworkSecurityPolicy(Models\ModifyPublicNetworkSecurityPolicyRequest $req) This API is used to modify the public network security policy for pulsar Pro Edition.
 * @method Models\ModifyRabbitMQPermissionResponse ModifyRabbitMQPermission(Models\ModifyRabbitMQPermissionRequest $req) This API is used to modify RabbitMQ permissions.
 * @method Models\ModifyRabbitMQUserResponse ModifyRabbitMQUser(Models\ModifyRabbitMQUserRequest $req) This API is used to modify a TDMQ for RabbitMQ user.
 * @method Models\ModifyRabbitMQVirtualHostResponse ModifyRabbitMQVirtualHost(Models\ModifyRabbitMQVirtualHostRequest $req) This API is used to modify a TDMQ for RabbitMQ vhost.
 * @method Models\ModifyRocketMQClusterResponse ModifyRocketMQCluster(Models\ModifyRocketMQClusterRequest $req) This API is used to update a RocketMQ cluster.
 * @method Models\ModifyRocketMQEnvironmentRoleResponse ModifyRocketMQEnvironmentRole(Models\ModifyRocketMQEnvironmentRoleRequest $req) Modifies environment role authorization
 * @method Models\ModifyRocketMQGroupResponse ModifyRocketMQGroup(Models\ModifyRocketMQGroupRequest $req) This API is used to update a RocketMQ consumer group.
 * @method Models\ModifyRocketMQInstanceResponse ModifyRocketMQInstance(Models\ModifyRocketMQInstanceRequest $req) Modify the RocketMQ dedicated instance.
 * @method Models\ModifyRocketMQInstanceSpecResponse ModifyRocketMQInstanceSpec(Models\ModifyRocketMQInstanceSpecRequest $req) This API is used to modify the configurations of a TDMQ for RocketMQ exclusive instance, including the upgrade of the instance specification, node count, and storage, and the downgrade of the instance specification. After you call this API to place the order and make payments, the configuration modification will be in progress. You can query whether the modification has been completed through the `DescribeRocketMQVipInstances` API`.
 * @method Models\ModifyRocketMQNamespaceResponse ModifyRocketMQNamespace(Models\ModifyRocketMQNamespaceRequest $req) This API is used to update a RocketMQ namespace.
 * @method Models\ModifyRocketMQRoleResponse ModifyRocketMQRole(Models\ModifyRocketMQRoleRequest $req) Modifies roles
 * @method Models\ModifyRocketMQTopicResponse ModifyRocketMQTopic(Models\ModifyRocketMQTopicRequest $req) This API is used to update a RocketMQ topic.
 * @method Models\ModifyRoleResponse ModifyRole(Models\ModifyRoleRequest $req) This API is used to modify a role.
 * @method Models\ModifyTopicResponse ModifyTopic(Models\ModifyTopicRequest $req) This API is used to modify the topic remarks and number of partitions.
 * @method Models\PublishCmqMsgResponse PublishCmqMsg(Models\PublishCmqMsgRequest $req) This API is used to send a CMQ topic message.
 * @method Models\ReceiveMessageResponse ReceiveMessage(Models\ReceiveMessageRequest $req) This API is used to receive messages sent to a specified Partitioned Topic. It supports only Partitioned Topic type. When there are no messages in the Partitioned Topic but the API is still called, it throws a ReceiveTimeout exception.

This API is used to batch receive policies.

This API is used to provide the following three parameters:.

MaxNumMessages: The maximum number of messages returned by the Receive API each time when using BatchReceive.
MaxNumBytes: the maximum size of messages returned by the Receive API in a single BatchReceive operation, in bytes.
Timeout: The maximum timeout period for each Receive API call when using BatchReceive is how long, in MS.

This API is used to disable the BatchReceive feature if none of the three parameters are specified. If any one of the three parameters has a value greater than 0, BatchReceive is enabled. BatchReceive completes when reaching the threshold specified in any one of the three parameters.

Note: MaxNumMessages and MaxNumBytes are subject to the size of ReceiveQueueSize for each receipt of messages. If ReceiveQueueSize is set to 5 and MaxNumMessages is set to 10, then BatchReceive will receive at most 5 messages at once rather than 10.



This API is used to return multiple messages at one time.

This API is used to Split multiple messages with the special character '###', allowing the business side to use Split tools in different languages to separate messages after receiving them.
Multiple MessageIDs use the special character '###' to separate with each other. After receiving the message, the business side can leverage the Split tool provided by different languages to separate different messages. (Used for filling in the necessary MessageID field information when calling the AcknowledgeMessage API.).
 * @method Models\ResetMsgSubOffsetByTimestampResponse ResetMsgSubOffsetByTimestamp(Models\ResetMsgSubOffsetByTimestampRequest $req) This API is used to rewind a message by timestamp, accurate down to the millisecond.
 * @method Models\ResetRocketMQConsumerOffSetResponse ResetRocketMQConsumerOffSet(Models\ResetRocketMQConsumerOffSetRequest $req) This API is used to reset the consumption offset of a specified consumer group to a specified timestamp.
 * @method Models\RetryRocketMQDlqMessageResponse RetryRocketMQDlqMessage(Models\RetryRocketMQDlqMessageRequest $req) Resend the RocketMQ dead letter messages.
 * @method Models\RewindCmqQueueResponse RewindCmqQueue(Models\RewindCmqQueueRequest $req) This API is used to rewind a CMQ queue.
 * @method Models\SendBatchMessagesResponse SendBatchMessages(Models\SendBatchMessagesRequest $req) This API is used to batch send messages.

Note: the batch message sending API in TDMQ is to package messages into a batch on the service side of TDMQ-HTTP and then send the batch as a TCP request inside the service. Therefore, when using this API, you should still follow the logic of sending a single message: each message is an independent HTTP request, and multiple HTTP requests are aggregated into one batch inside the TDMQ-HTTP service and then sent to the server; that is, batch sending messages is the same as sending a single message in terms of usage, and batch aggregation is completed inside the TDMQ-HTTP service.
 * @method Models\SendCmqMsgResponse SendCmqMsg(Models\SendCmqMsgRequest $req) This API is used to send a CMQ message.
 * @method Models\SendMessagesResponse SendMessages(Models\SendMessagesRequest $req) This API is used to send a single message.
The message cannot be sent to a persistent topic.
 * @method Models\SendMsgResponse SendMsg(Models\SendMsgRequest $req) This API is used to test message sending. It cannot be used in the production environment.
 * @method Models\SendRocketMQMessageResponse SendRocketMQMessage(Models\SendRocketMQMessageRequest $req) This API is used to send messages through RocketMQ. It is only used for sending a small number of test messages from the console and does not provide SLA. Cloud API is subject to traffic throttling. In real business scenarios, use the RocketMQ SDK to send messages.
 * @method Models\SetRocketMQPublicAccessPointResponse SetRocketMQPublicAccessPoint(Models\SetRocketMQPublicAccessPointRequest $req) This API is used to enable/disable public network access, and set the security access policy.
 * @method Models\UnbindCmqDeadLetterResponse UnbindCmqDeadLetter(Models\UnbindCmqDeadLetterRequest $req) This API is used to unbind a CMQ dead letter queue.
 */

class TdmqClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tdmq.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tdmq";

    /**
     * @var string
     */
    protected $version = "2020-02-17";

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
        $respClass = "TencentCloud"."\\".ucfirst("tdmq")."\\"."V20200217\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
