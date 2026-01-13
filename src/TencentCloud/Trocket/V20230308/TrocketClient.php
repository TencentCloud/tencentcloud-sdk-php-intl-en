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

namespace TencentCloud\Trocket\V20230308;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Trocket\V20230308\Models as Models;

/**
 * @method Models\ChangeMigratingTopicToNextStageResponse ChangeMigratingTopicToNextStage(Models\ChangeMigratingTopicToNextStageRequest $req) This API is used to modify the Topic status during migration and go to next step.
 * @method Models\CreateConsumerGroupResponse CreateConsumerGroup(Models\CreateConsumerGroupRequest $req) Create consumer groups.
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) This API is used to create a RocketMQ 5.x cluster.
 * @method Models\CreateRoleResponse CreateRole(Models\CreateRoleRequest $req) This API is used to add a role.
 * @method Models\DeleteConsumerGroupResponse DeleteConsumerGroup(Models\DeleteConsumerGroupRequest $req) This API is used to delete a consumer group. After a consumer group is deleted, all configurations and related data of the consumer group are cleared and cannot be restored. After deletion, online consumer clients report errors. It is recommended to take clients offline in advance.
 * @method Models\DeleteInstanceResponse DeleteInstance(Models\DeleteInstanceRequest $req) This API is used to delete a TDMQ RocketMQ 5.x cluster. Topics, consumer groups, and roles in use should be deleted first.
 * @method Models\DeleteRoleResponse DeleteRole(Models\DeleteRoleRequest $req) This API is used to delete a role. Make sure that the related information on this role is not used in the current code. After the role is deleted, the keys (AccessKey and SecretKey) used to produce or consume messages with this role become invalid immediately.
 * @method Models\DeleteSmoothMigrationTaskResponse DeleteSmoothMigrationTask(Models\DeleteSmoothMigrationTaskRequest $req) This API is used to delete a smooth migration task. Only canceled tasks can be deleted.
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) This API is used to delete a topic. After deletion, all configurations and related data of the topic will be cleared and cannot be restored.
 * @method Models\DescribeConsumerClientResponse DescribeConsumerClient(Models\DescribeConsumerClientRequest $req) Query consumer client details.
 * @method Models\DescribeConsumerClientListResponse DescribeConsumerClientList(Models\DescribeConsumerClientListRequest $req) This API is used to query the client connection list of a consumer group.
 * @method Models\DescribeConsumerGroupResponse DescribeConsumerGroup(Models\DescribeConsumerGroupRequest $req) Query consumer group details.
 * @method Models\DescribeConsumerLagResponse DescribeConsumerLag(Models\DescribeConsumerLagRequest $req) This API is used to query the number of heaped messages in a specified consumer group.
 * @method Models\DescribeFusionInstanceListResponse DescribeFusionInstanceList(Models\DescribeFusionInstanceListRequest $req) This API is used to describe clusters, supporting both 4.x and 5.x clusters. Among them, parameter usage of Filters is as follows:.

-InstanceName, the cluster name, supports fuzzy query and can be obtained from the API return value or console.
-InstanceId Cluster ID, exact query, obtain from the current API or console.
- InstanceType cluster type, see [InstanceItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#InstanceItem) data structure, supports multiple selections.
- Version: cluster edition, enumeration values as follows:.
-4 RocketMQ 4.x clusters.
-Deploy a RocketMQ 5.x cluster.

This API is used to demonstrate Filters.
 [{ "Name": "InstanceId", "Values": ["rmq-72mo3a9o"] }]
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) This API is used to query RocketMQ 5.x cluster information.
 * @method Models\DescribeInstanceListResponse DescribeInstanceList(Models\DescribeInstanceListRequest $req) This API is used to describe clusters. It only supports 5.x clusters. Description of the Filters parameter use is as follows:.

-InstanceName Cluster name, supports fuzzy search.
- InstanceId The Tencent Cloud RocketMQ instance ID, obtained from the [DescribeFusionInstanceList](https://www.tencentcloud.com/document/api/1493/106745?from_cn_redirect=1) API or console.
- InstanceType cluster type, see [InstanceItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#InstanceItem) data structure, supports multiple selections.
-InstanceStatus cluster status, see [InstanceItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#InstanceItem) data structure, supports multiple selections.

This API is used to demonstrate Filters.
[{
    "Name": "InstanceId",
    "Values": ["rmq-72mo3a9o"]
}]
 * @method Models\DescribeMessageResponse DescribeMessage(Models\DescribeMessageRequest $req) Query message details.
 * @method Models\DescribeMessageListResponse DescribeMessageList(Models\DescribeMessageListRequest $req) Query the message list. If querying dead letter messages, set the ConsumerGroup parameter.
 * @method Models\DescribeMessageTraceResponse DescribeMessageTrace(Models\DescribeMessageTraceRequest $req) This API is used to query message trace by message ID.
 * @method Models\DescribeMigratingGroupStatsResponse DescribeMigratingGroupStats(Models\DescribeMigratingGroupStatsRequest $req) This API is used to view real-time information of migration consumption groups.
 * @method Models\DescribeMigratingTopicListResponse DescribeMigratingTopicList(Models\DescribeMigratingTopicListRequest $req) This API is used to query the Topic migration status list.

The Filters field is a query filter that supports the following conditions:.
This API is used to get topic names with fuzzy query support.
This api is used to query the migration status. See the data structure in MigratingTopic (https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MigratingTopic).
This API is used to manage namespaces, valid only for 4.x clusters.

This API is used to demonstrate Filters.
[{
    "Name": "TopicName",
    "Values": ["topic-a"]
}]
 * @method Models\DescribeMigratingTopicStatsResponse DescribeMigratingTopicStats(Models\DescribeMigratingTopicStatsRequest $req) This API is used to query real-time data of migration topics.
 * @method Models\DescribeMigrationTaskListResponse DescribeMigrationTaskList(Models\DescribeMigrationTaskListRequest $req) This API is used to search the data migration task list. Filter parameter usage instructions are as follows:.

This API is used to search precisely according to task ID.
InstanceId. This API is used to precisely search based on instance ID.
This API is used to search by task Type.
 * @method Models\DescribeProducerListResponse DescribeProducerList(Models\DescribeProducerListRequest $req) This API is used to query producer list information associated with a topic. Filters support the following criteria:.
-client IP.
-client ID.
 * @method Models\DescribeProductSKUsResponse DescribeProductSKUs(Models\DescribeProductSKUsRequest $req) This API is used to query product sales specifications against RocketMQ 5.x clusters.
 * @method Models\DescribeRoleListResponse DescribeRoleList(Models\DescribeRoleListRequest $req) This API is used to query the list of roles. Filter parameter usage instructions are as follows:.

-Role name supports fuzzy search and can be obtained from the API return value or console.
-AccessKey, support fuzzy search, obtain from API return value or console.

This API is used to demonstrate Filters. 
[{ "Name": "RoleName", "Values": ["test_role"] }]
 * @method Models\DescribeSmoothMigrationTaskListResponse DescribeSmoothMigrationTaskList(Models\DescribeSmoothMigrationTaskListRequest $req) This API is used to query the migration task list smoothly.

This API is used to query the supported fields of the query parameter Filters as follows:.
Task status, supports multiple selections. 
ConnectionType, network connection type, supports multiple selections. See the description of SmoothMigrationTaskItem (https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#SmoothMigrationTaskItem).
This API is used to search for an instance by instance ID with precise matching. 
This API is used to query task names with fuzzy search support.

This API is used to demonstrate Filters.
[{
    "Name": "InstanceId",
    "Values": ["rmq-1gzecldfg"]
}]
 * @method Models\DescribeSourceClusterGroupListResponse DescribeSourceClusterGroupList(Models\DescribeSourceClusterGroupListRequest $req) This API is used to obtain the group list of the source cluster during the smooth migration process.

The Filters field is a query filter that supports the following fields:.
This API is used to query consumer group names with fuzzy search support.
This API is used to check whether the data is Imported.
This api is used to check the import status. See SourceClusterGroupConfig (https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#SourceClusterGroupConfig) for details.
This API is used to manage namespaces, valid only for 4.x clusters.

This API is used to demonstrate Filters.
[{
    "Name": "GroupName",
    "Values": ["group-a"]
}]
 * @method Models\DescribeTopicResponse DescribeTopic(Models\DescribeTopicRequest $req) This API is used to query topic details. The Offset and Limit parameters are pagination parameters for consumer groups subscribing to this topic. The Filter parameter usage instructions are as follows:.

-The ConsumerGroup name can be obtained from the [ConsumeGroupItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) in the API response of [DescribeConsumerGroupList](https://www.tencentcloud.com/document/api/1493/101535?from_cn_redirect=1) or from the console.

This API is used to demonstrate Filters. 
[{ "Name": "ConsumerGroup", "Values": ["test_group"] }]
 * @method Models\DescribeTopicListResponse DescribeTopicList(Models\DescribeTopicListRequest $req) This API is used to search the topic list. Filter parameter usage instructions are as follows:.

-TopicName supports fuzzy search. Obtain it from the [TopicItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#TopicItem) in the [DescribeTopicList](https://www.tencentcloud.com/document/api/1493/96030?from_cn_redirect=1) API response or the console.
-Search by TopicType, support multiple selections. See the TopicType field in the [DescribeTopic](https://www.tencentcloud.com/document/api/1493/97945?from_cn_redirect=1) API.

This API is used to demonstrate Filters.
 [{ "Name": "TopicName", "Values": ["test_topic"] }]
 * @method Models\DescribeTopicListByGroupResponse DescribeTopicListByGroup(Models\DescribeTopicListByGroupRequest $req) This API is used to get topic list by consumer group. Filter parameter usage instructions are as follows:.

-TopicName. It can be obtained from [TopicItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#TopicItem) returned by the API [DescribeTopicList](https://www.tencentcloud.com/document/api/1493/96030?from_cn_redirect=1) or from the console.

This API is used to demonstrate Filters. 
[{ "Name": "TopicName", "Values": ["test_topic"] }]
 * @method Models\DoHealthCheckOnMigratingTopicResponse DoHealthCheckOnMigratingTopic(Models\DoHealthCheckOnMigratingTopicRequest $req) This API is used to check whether the topics being migrated are in normal status. Only topics in normal status can enter the next migration stage.
 * @method Models\ModifyConsumerGroupResponse ModifyConsumerGroup(Models\ModifyConsumerGroupRequest $req) Modify consumer group attributes.
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) This API is used to modify attributes of a TDMQ RocketMQ 5.x cluster. Only running clusters support this operation.
 * @method Models\ModifyInstanceEndpointResponse ModifyInstanceEndpoint(Models\ModifyInstanceEndpointRequest $req) This API is used to modify access points of a TDMQ RocketMQ 5.x cluster. Make sure that the access points exist before the operation.
 * @method Models\ModifyRoleResponse ModifyRole(Models\ModifyRoleRequest $req) This API is used to modify a role.
 * @method Models\ModifyTopicResponse ModifyTopic(Models\ModifyTopicRequest $req) Modify topic attributes.
 * @method Models\RemoveMigratingTopicResponse RemoveMigratingTopic(Models\RemoveMigratingTopicRequest $req) This API is used to remove a topic from the migration list. It is valid only when the topic is in the initial state.
 * @method Models\ResendDeadLetterMessageResponse ResendDeadLetterMessage(Models\ResendDeadLetterMessageRequest $req) This API is used to resend dead letter messages.
 * @method Models\ResetConsumerGroupOffsetResponse ResetConsumerGroupOffset(Models\ResetConsumerGroupOffsetRequest $req) Reset the consumption position.
 * @method Models\RollbackMigratingTopicStageResponse RollbackMigratingTopicStage(Models\RollbackMigratingTopicStageRequest $req) This API is used to roll back the topic that is undergoing migration to the previous stage.
 */

class TrocketClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "trocket.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "trocket";

    /**
     * @var string
     */
    protected $version = "2023-03-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("trocket")."\\"."V20230308\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
