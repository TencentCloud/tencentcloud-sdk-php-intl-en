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
 * @method Models\CreateRocketMQClusterResponse CreateRocketMQCluster(Models\CreateRocketMQClusterRequest $req) Create a RocketMQ cluster.
This API is applicable to clusters: 4.x virtual cluster. For 4.x dedicated or generic clusters, refer to the API documentation [CreateRocketMQVipInstance](https://www.tencentcloud.com/document/api/1179/95721?from_cn_redirect=1). For 5.x clusters, refer to the API documentation [CreateInstance](https://www.tencentcloud.com/document/api/1493/97868?from_cn_redirect=1).
 * @method Models\CreateRocketMQEnvironmentRoleResponse CreateRocketMQEnvironmentRole(Models\CreateRocketMQEnvironmentRoleRequest $req) Grant access by role.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [CreateRole](https://www.tencentcloud.com/document/api/1493/98864?from_cn_redirect=1).
 * @method Models\CreateRocketMQGroupResponse CreateRocketMQGroup(Models\CreateRocketMQGroupRequest $req) This API is used to create a RocketMQ consumption group.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [CreateConsumerGroup](https://www.tencentcloud.com/document/api/1493/97943?from_cn_redirect=1) to create a consumer group.
 * @method Models\CreateRocketMQGroupV2Response CreateRocketMQGroupV2(Models\CreateRocketMQGroupV2Request $req) This API is used to create a RocketMQ consumption group.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [CreateConsumerGroup](https://www.tencentcloud.com/document/api/1493/97943?from_cn_redirect=1) to create a consumer group.
 * @method Models\CreateRocketMQNamespaceResponse CreateRocketMQNamespace(Models\CreateRocketMQNamespaceRequest $req) This API is used to create a RocketMQ namespace.
This API is applicable to clusters: 4.x virtual cluster and 4.x dedicated cluster. Other cluster types do not support this feature.
 * @method Models\CreateRocketMQRoleResponse CreateRocketMQRole(Models\CreateRocketMQRoleRequest $req) Create a role.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [CreateRole](https://www.tencentcloud.com/document/api/1493/98864?from_cn_redirect=1).
 * @method Models\CreateRocketMQTopicResponse CreateRocketMQTopic(Models\CreateRocketMQTopicRequest $req) Create RocketMQ topics in batches.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [CreateTopic](https://www.tencentcloud.com/document/api/1493/97947?from_cn_redirect=1).
 * @method Models\CreateRocketMQTopicV2Response CreateRocketMQTopicV2(Models\CreateRocketMQTopicV2Request $req) This API is used to create a RocketMQ topic.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [CreateTopic](https://www.tencentcloud.com/document/api/1493/97947?from_cn_redirect=1).
 * @method Models\CreateRocketMQVipInstanceResponse CreateRocketMQVipInstance(Models\CreateRocketMQVipInstanceRequest $req) This API is used to create a RocketMQ 4.x cluster.
This API is applicable to clusters: 4.x dedicated cluster and 4.x generic cluster. For 5.x clusters, refer to the API documentation [CreateInstance](https://www.tencentcloud.com/document/api/1493/97868?from_cn_redirect=1).
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
This API is applicable to clusters: 4.x virtual cluster. For 4.x dedicated or generic clusters, refer to the API documentation [DeleteRocketMQVipInstance](https://www.tencentcloud.com/document/api/1179/95802?from_cn_redirect=1). For 5.x clusters, refer to [DeleteInstance](https://www.tencentcloud.com/document/product/1493/97867?from_cn_redirect=1).
 * @method Models\DeleteRocketMQEnvironmentRolesResponse DeleteRocketMQEnvironmentRoles(Models\DeleteRocketMQEnvironmentRolesRequest $req) Delete role authorizations in batches.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [DeleteRole](https://www.tencentcloud.com/document/api/1493/98863?from_cn_redirect=1).
 * @method Models\DeleteRocketMQGroupResponse DeleteRocketMQGroup(Models\DeleteRocketMQGroupRequest $req) This API is used to delete a RocketMQ consumption group.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [DeleteConsumerGroup](https://www.tencentcloud.com/document/api/1493/97942?from_cn_redirect=1) to delete the consumer group.
 * @method Models\DeleteRocketMQNamespaceResponse DeleteRocketMQNamespace(Models\DeleteRocketMQNamespaceRequest $req) This API is used to delete a RocketMQ namespace.
This API is applicable to clusters: 4.x virtual cluster and 4.x dedicated cluster. Other cluster types do not support this feature.
 * @method Models\DeleteRocketMQRolesResponse DeleteRocketMQRoles(Models\DeleteRocketMQRolesRequest $req) Delete roles in batches.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [DeleteRole](https://www.tencentcloud.com/document/api/1493/98863?from_cn_redirect=1).
 * @method Models\DeleteRocketMQTopicResponse DeleteRocketMQTopic(Models\DeleteRocketMQTopicRequest $req) Delete a RocketMQ topic.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [DeleteTopic](https://www.tencentcloud.com/document/api/1493/97946?from_cn_redirect=1).
 * @method Models\DeleteRocketMQVipInstanceResponse DeleteRocketMQVipInstance(Models\DeleteRocketMQVipInstanceRequest $req) This API is used to delete a RocketMQ dedicated or generic cluster.
This API is applicable to clusters: 4.x dedicated cluster and 4.x generic cluster. For 5.x clusters, refer to the API documentation [DeleteInstance](https://www.tencentcloud.com/document/api/1493/97867?from_cn_redirect=1).
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
 * @method Models\DescribeMsgTraceResponse DescribeMsgTrace(Models\DescribeMsgTraceRequest $req) Query the message trace of a single message
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
 * @method Models\DescribeRocketMQClusterResponse DescribeRocketMQCluster(Models\DescribeRocketMQClusterRequest $req) Query RocketMQ virtual cluster information.
Current API applicable clusters: 4.x virtual cluster. For 4.x dedicated or generic clusters, see the REST API documentation for querying cluster information at [DescribeRocketMQVipInstanceDetail](https://www.tencentcloud.com/document/api/1179/86725?from_cn_redirect=1). For 5.x clusters, see the REST API documentation for querying cluster information at [DescribeInstance](https://www.tencentcloud.com/document/api/1493/97866?from_cn_redirect=1).
 * @method Models\DescribeRocketMQClustersResponse DescribeRocketMQClusters(Models\DescribeRocketMQClustersRequest $req) Query the RocketMQ virtual cluster list.
This API is applicable to clusters: 4.x virtual cluster. For querying 5.x cluster list, see List API Documentation [DescribeInstanceList](https://www.tencentcloud.com/document/api/1493/96028?from_cn_redirect=1), or use [DescribeFusionInstanceList](https://www.tencentcloud.com/document/api/1493/106745?from_cn_redirect=1) applicable to all cluster types.
 * @method Models\DescribeRocketMQEnvironmentRolesResponse DescribeRocketMQEnvironmentRoles(Models\DescribeRocketMQEnvironmentRolesRequest $req) Query a role-based license list.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the List API Documentation [DescribeRoleList](https://www.tencentcloud.com/document/api/1493/98862?from_cn_redirect=1).
 * @method Models\DescribeRocketMQGeneralSKUsResponse DescribeRocketMQGeneralSKUs(Models\DescribeRocketMQGeneralSKUsRequest $req) Query the sales specification of a generic cluster.
This API is applicable to clusters: 4.x generic cluster. For 5.x clusters, refer to the API documentation [DescribeProductSKUs](https://www.tencentcloud.com/document/api/1493/107676?from_cn_redirect=1).
 * @method Models\DescribeRocketMQGroupsResponse DescribeRocketMQGroups(Models\DescribeRocketMQGroupsRequest $req) Query the RocketMQ consumer group list.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [DescribeConsumerGroupList](https://www.tencentcloud.com/document/api/1493/101535?from_cn_redirect=1) to query the consumption group list.
 * @method Models\DescribeRocketMQMsgResponse DescribeRocketMQMsg(Models\DescribeRocketMQMsgRequest $req) Query RocketMQ message details.
Current API applicable clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, see the REST API documentation for query message details at [DescribeMessage](https://www.tencentcloud.com/document/api/1493/114594?from_cn_redirect=1).
 * @method Models\DescribeRocketMQMsgTraceResponse DescribeRocketMQMsgTrace(Models\DescribeRocketMQMsgTraceRequest $req) Query message trajectory.
Current API applicable clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, see the REST API documentation for query message trajectory at [DescribeMessageTrace](https://www.tencentcloud.com/document/api/1493/114302?from_cn_redirect=1).
 * @method Models\DescribeRocketMQNamespacesResponse DescribeRocketMQNamespaces(Models\DescribeRocketMQNamespacesRequest $req) Query the RocketMQ namespace list.
This API is applicable to clusters: 4.x virtual cluster and 4.x dedicated cluster. Other cluster types do not support this feature.
 * @method Models\DescribeRocketMQProducersResponse DescribeRocketMQProducers(Models\DescribeRocketMQProducersRequest $req) This API is used to query the producer client list under a specified topic in RocketMQ.
This API is applicable to clusters: 4.x dedicated cluster and 4.x generic cluster. For 5.x clusters, refer to the List API Documentation [DescribeProducerList](https://www.tencentcloud.com/document/api/1493/122548?from_cn_redirect=1) for producer clients.
 * @method Models\DescribeRocketMQPublicAccessMonitorDataResponse DescribeRocketMQPublicAccessMonitorData(Models\DescribeRocketMQPublicAccessMonitorDataRequest $req) Query public network metric monitoring data. Currently only support inbound bandwidth and outbound bandwidth metrics for Client to LB.
This API is applicable to clusters: 4.x dedicated cluster and 4.x generic cluster. 5.x clusters are not supported yet.
 * @method Models\DescribeRocketMQPublicAccessPointResponse DescribeRocketMQPublicAccessPoint(Models\DescribeRocketMQPublicAccessPointRequest $req) Query the public network access point information of a RocketMQ cluster.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For public network access point information of 5.x clusters, refer to the API Documentation [DescribeInstance](https://www.tencentcloud.com/document/api/1493/97866?from_cn_redirect=1).
 * @method Models\DescribeRocketMQRolesResponse DescribeRocketMQRoles(Models\DescribeRocketMQRolesRequest $req) This API is used to query the list of roles.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the List API Documentation [DescribeRoleList](https://www.tencentcloud.com/document/api/1493/98862?from_cn_redirect=1).
 * @method Models\DescribeRocketMQTopUsagesResponse DescribeRocketMQTopUsages(Models\DescribeRocketMQTopUsagesRequest $req) Used to obtain the RocketMQ metric sorting list, such as sorting topics under a cluster instance by the most occupied storage space.
This API is used for applicable clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. The feature is not supported yet for 5.x clusters.
 * @method Models\DescribeRocketMQTopicResponse DescribeRocketMQTopic(Models\DescribeRocketMQTopicRequest $req) This API is used to obtain RocketMQ topic details.
 * @method Models\DescribeRocketMQTopicMsgsResponse DescribeRocketMQTopicMsgs(Models\DescribeRocketMQTopicMsgsRequest $req) Query the RocketMQ message list.
Current API applicable clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, see the List API Documentation for query messages at [DescribeMessageList](https://www.tencentcloud.com/document/api/1493/114593?from_cn_redirect=1).
 * @method Models\DescribeRocketMQTopicStatsResponse DescribeRocketMQTopicStats(Models\DescribeRocketMQTopicStatsRequest $req) Query the production detail list of RocketMQ topics.
This API is used for applicable clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. The feature is not supported yet for 5.x clusters.
 * @method Models\DescribeRocketMQTopicsResponse DescribeRocketMQTopics(Models\DescribeRocketMQTopicsRequest $req) Query the RocketMQ topic list.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [DescribeTopicList](https://www.tencentcloud.com/document/api/1493/96030?from_cn_redirect=1).
 * @method Models\DescribeRocketMQTopicsByGroupResponse DescribeRocketMQTopicsByGroup(Models\DescribeRocketMQTopicsByGroupRequest $req) This API is used to query the list of subscribed topics for a RocketMQ consumption group.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [DescribeTopicListByGroup](https://www.tencentcloud.com/document/api/1493/115314?from_cn_redirect=1) to query the list of subscribed topics for a consumption group.
 * @method Models\DescribeRocketMQVipInstanceDetailResponse DescribeRocketMQVipInstanceDetail(Models\DescribeRocketMQVipInstanceDetailRequest $req) Query RocketMQ cluster info.
This API is applicable to clusters: 4.x dedicated cluster and 4.x generic cluster. For 5.x clusters, refer to the API documentation [DescribeInstance](https://www.tencentcloud.com/document/api/1493/97866?from_cn_redirect=1).
 * @method Models\DescribeRocketMQVipInstancesResponse DescribeRocketMQVipInstances(Models\DescribeRocketMQVipInstancesRequest $req) Query the RocketMQ 4.x cluster list.
This API is applicable to clusters: 4.x dedicated cluster and 4.x generic cluster. For 5.x clusters, refer to the API documentation [DescribeInstanceList](https://www.tencentcloud.com/document/api/1493/96028?from_cn_redirect=1), or use the [DescribeFusionInstanceList](https://www.tencentcloud.com/document/api/1493/106745?from_cn_redirect=1) API applicable to all cluster types.
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
 * @method Models\ModifyRocketMQClusterResponse ModifyRocketMQCluster(Models\ModifyRocketMQClusterRequest $req) This API is used to modify the attributes of a RocketMQ cluster.
This API is applicable to clusters: 4.x virtual cluster. For 4.x dedicated or generic clusters, refer to the API documentation [ModifyRocketMQInstance](https://www.tencentcloud.com/document/api/1179/108862?from_cn_redirect=1). For 5.x clusters, refer to the API documentation [ModifyInstance](https://www.tencentcloud.com/document/api/1493/97865?from_cn_redirect=1).
 * @method Models\ModifyRocketMQEnvironmentRoleResponse ModifyRocketMQEnvironmentRole(Models\ModifyRocketMQEnvironmentRoleRequest $req) Modify role authorization.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [ModifyRole](https://www.tencentcloud.com/document/api/1493/98861?from_cn_redirect=1).
 * @method Models\ModifyRocketMQGroupResponse ModifyRocketMQGroup(Models\ModifyRocketMQGroupRequest $req) Modify a RocketMQ consumption group property.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [ModifyConsumerGroup](https://www.tencentcloud.com/document/api/1493/97940?from_cn_redirect=1) to modify the consumer group's attributes.
 * @method Models\ModifyRocketMQInstanceResponse ModifyRocketMQInstance(Models\ModifyRocketMQInstanceRequest $req) Modify RocketMQ Dedicated or Generic Cluster Property.
This API is applicable to clusters: 4.x dedicated cluster and 4.x generic cluster. For 5.x clusters, refer to the API documentation [ModifyInstance](https://www.tencentcloud.com/document/api/1493/97865?from_cn_redirect=1).
 * @method Models\ModifyRocketMQInstanceSpecResponse ModifyRocketMQInstanceSpec(Models\ModifyRocketMQInstanceSpecRequest $req) This API is used to modify the RocketMQ dedicated cluster configuration, supporting upgrades of instance specification, number of nodes and storage, as well as downgrades of instance specification. After initiating order and completing payment, it will enter the instance configuration change process. You can check whether the change is completed via [DescribeRocketMQVipInstances](https://www.tencentcloud.com/document/api/1179/80903?from_cn_redirect=1).
This API is applicable to clusters: 4.x dedicated cluster and 4.x generic cluster. For 5.x clusters, refer to the API documentation [ModifyInstance](https://www.tencentcloud.com/document/api/1493/97865?from_cn_redirect=1).
 * @method Models\ModifyRocketMQNamespaceResponse ModifyRocketMQNamespace(Models\ModifyRocketMQNamespaceRequest $req) This API is used to update a RocketMQ namespace.
This API is applicable to clusters: 4.x virtual cluster and 4.x dedicated cluster. Other cluster types do not support this feature.
 * @method Models\ModifyRocketMQRoleResponse ModifyRocketMQRole(Models\ModifyRocketMQRoleRequest $req) Modify a role.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [ModifyRole](https://www.tencentcloud.com/document/api/1493/98861?from_cn_redirect=1).
 * @method Models\ModifyRocketMQTopicResponse ModifyRocketMQTopic(Models\ModifyRocketMQTopicRequest $req) This API is used to modify RocketMQ topic attributes.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [ModifyTopic](https://www.tencentcloud.com/document/api/1493/97944?from_cn_redirect=1).
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
 * @method Models\ResetRocketMQConsumerOffSetResponse ResetRocketMQConsumerOffSet(Models\ResetRocketMQConsumerOffSetRequest $req) Reset consumer offset.
This API is applicable to clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, refer to the API documentation [ResetConsumerGroupOffset](https://www.tencentcloud.com/document/api/1493/116942?from_cn_redirect=1) to reset the consumer offset.
 * @method Models\RetryRocketMQDlqMessageResponse RetryRocketMQDlqMessage(Models\RetryRocketMQDlqMessageRequest $req) Resend a RocketMQ dead letter message.
Current API applicable clusters: 4.x virtual cluster, 4.x dedicated cluster, and 4.x generic cluster. For 5.x clusters, see the REST API documentation for resending dead letter messages at [ResendDeadLetterMessage](https://www.tencentcloud.com/document/api/1493/114592?from_cn_redirect=1).
 * @method Models\RewindCmqQueueResponse RewindCmqQueue(Models\RewindCmqQueueRequest $req) This API is used to rewind a CMQ queue.
 * @method Models\SendBatchMessagesResponse SendBatchMessages(Models\SendBatchMessagesRequest $req) This API is used to batch send messages.

Note: the batch message sending API in TDMQ is to package messages into a batch on the service side of TDMQ-HTTP and then send the batch as a TCP request inside the service. Therefore, when using this API, you should still follow the logic of sending a single message: each message is an independent HTTP request, and multiple HTTP requests are aggregated into one batch inside the TDMQ-HTTP service and then sent to the server; that is, batch sending messages is the same as sending a single message in terms of usage, and batch aggregation is completed inside the TDMQ-HTTP service.
 * @method Models\SendCmqMsgResponse SendCmqMsg(Models\SendCmqMsgRequest $req) This API is used to send a CMQ message.
 * @method Models\SendMessagesResponse SendMessages(Models\SendMessagesRequest $req) This API is used to send a single message.
The message cannot be sent to a persistent topic.
 * @method Models\SendMsgResponse SendMsg(Models\SendMsgRequest $req) This API is used to test message sending. It cannot be used in the production environment.
 * @method Models\SendRocketMQMessageResponse SendRocketMQMessage(Models\SendRocketMQMessageRequest $req) This API is used to send messages through RocketMQ. It is only used for sending a small number of test messages from the console and does not provide SLA. Cloud API is subject to traffic throttling. In real business scenarios, use the RocketMQ SDK to send messages.
 * @method Models\SetRocketMQPublicAccessPointResponse SetRocketMQPublicAccessPoint(Models\SetRocketMQPublicAccessPointRequest $req) Enable or disable public network access, set security access policy.
This API is applicable to clusters: 4.x dedicated cluster and 4.x generic cluster. For public network access point settings of 5.x clusters, refer to the API Documentation [ModifyInstanceEndpoint](https://www.tencentcloud.com/document/api/1493/115981?from_cn_redirect=1).
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
