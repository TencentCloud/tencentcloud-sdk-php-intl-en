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

namespace TencentCloud\Cls\V20201016;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cls\V20201016\Models as Models;

/**
 * @method Models\AddMachineGroupInfoResponse AddMachineGroupInfo(Models\AddMachineGroupInfoRequest $req) This API is used to add machine group information.
 * @method Models\ApplyConfigToMachineGroupResponse ApplyConfigToMachineGroup(Models\ApplyConfigToMachineGroupRequest $req) This API is used to apply the collection configuration to a specified machine group.
 * @method Models\CancelRebuildIndexTaskResponse CancelRebuildIndexTask(Models\CancelRebuildIndexTaskRequest $req) This API is used to cancel creating a reindexing task.
 * @method Models\ChatCompletionsResponse ChatCompletions(Models\ChatCompletionsRequest $req) Call the API to initiate a dialogue request.
This API supports AI-powered logging features such as intelligently generating retrieval analysis statements.
Note: When calling this API via SSE streaming, ensure the request domain name is set to cls.ai.tencentcloudapi.com (configurable as cls.ai.internal.tencentcloudapi.com in a private network environment).
 * @method Models\CheckFunctionResponse CheckFunction(Models\CheckFunctionRequest $req) This API is used to verify the syntax of data processing DSL functions.
 * @method Models\CheckRechargeKafkaServerResponse CheckRechargeKafkaServer(Models\CheckRechargeKafkaServerRequest $req) This API is used to check whether the Kafka service cluster is accessible.
 * @method Models\CloseKafkaConsumerResponse CloseKafkaConsumer(Models\CloseKafkaConsumerRequest $req) This API is used to disable Kafka consumption.
 * @method Models\CommitConsumerOffsetsResponse CommitConsumerOffsets(Models\CommitConsumerOffsetsRequest $req) This API is used to submit a consumption offset.
 * @method Models\CreateAlarmResponse CreateAlarm(Models\CreateAlarmRequest $req) This API is used to create an alarm policy.
 * @method Models\CreateAlarmNoticeResponse CreateAlarmNotice(Models\CreateAlarmNoticeRequest $req) This API is used to create a notification channel group with two configuration modes to choose from.
1. Easy mode provides the most basic notification channel function. The following parameters are required:
- Type
- NoticeReceivers
- WebCallbacks

2. Advanced mode: On the basis of easy mode, it supports setting rules, setting notification channels for different types of alarms, and escalating alarms. The following parameters are required:
- NoticeRules
 * @method Models\CreateAlarmShieldResponse CreateAlarmShield(Models\CreateAlarmShieldRequest $req) This API is used to create an alarm blocking rule.
 * @method Models\CreateCloudProductLogCollectionResponse CreateCloudProductLogCollection(Models\CreateCloudProductLogCollectionRequest $req) Cloud product integration uses internal APIs
 * @method Models\CreateConfigResponse CreateConfig(Models\CreateConfigRequest $req) This API is used to create collection rule configuration.
 * @method Models\CreateConsoleResponse CreateConsole(Models\CreateConsoleRequest $req) This API is used to create the DataSight Console
 * @method Models\CreateConsumerResponse CreateConsumer(Models\CreateConsumerRequest $req) This API is used to create a CKafka delivery task.
 * @method Models\CreateConsumerGroupResponse CreateConsumerGroup(Models\CreateConsumerGroupRequest $req) This API is used to check the heartbeat of a consumer group.
 * @method Models\CreateCosRechargeResponse CreateCosRecharge(Models\CreateCosRechargeRequest $req) This API is used to create a COS import task.
 * @method Models\CreateDashboardResponse CreateDashboard(Models\CreateDashboardRequest $req) This API is used to create a dashboard.
 * @method Models\CreateDashboardSubscribeResponse CreateDashboardSubscribe(Models\CreateDashboardSubscribeRequest $req) This API is used to create a dashboard subscription.
 * @method Models\CreateDataTransformResponse CreateDataTransform(Models\CreateDataTransformRequest $req) This API is used to create a data processing task.
 * @method Models\CreateDeliverCloudFunctionResponse CreateDeliverCloudFunction(Models\CreateDeliverCloudFunctionRequest $req) This API is used to create a delivery SCF task.
 * @method Models\CreateDlcDeliverResponse CreateDlcDeliver(Models\CreateDlcDeliverRequest $req) Create a DLC delivery task
 * @method Models\CreateEsRechargeResponse CreateEsRecharge(Models\CreateEsRechargeRequest $req) This API is used to create an es import configuration
 * @method Models\CreateExportResponse CreateExport(Models\CreateExportRequest $req) This API only creates download tasks. The download address returned by the task can be obtained by user invocation of [DescribeExports](https://www.tencentcloud.com/document/product/614/56449?from_cn_redirect=1) to view task list, which includes the CosPath parameter for the download address.
 * @method Models\CreateHostMetricConfigResponse CreateHostMetricConfig(Models\CreateHostMetricConfigRequest $req) This API is used to create host metric collection configurations.
 * @method Models\CreateIndexResponse CreateIndex(Models\CreateIndexRequest $req) This API is used to create an index.
 * @method Models\CreateKafkaRechargeResponse CreateKafkaRecharge(Models\CreateKafkaRechargeRequest $req) This API is used to create a Kafka data subscription task.
 * @method Models\CreateLogsetResponse CreateLogset(Models\CreateLogsetRequest $req) This API is used to create a logset. The ID of the created logset is returned.
 * @method Models\CreateMachineGroupResponse CreateMachineGroup(Models\CreateMachineGroupRequest $req) This API is used to create a machine group.
 * @method Models\CreateMetricConfigResponse CreateMetricConfig(Models\CreateMetricConfigRequest $req) This API is used to create metric collection configurations.
 * @method Models\CreateMetricSubscribeResponse CreateMetricSubscribe(Models\CreateMetricSubscribeRequest $req) This API is used to create metric subscription configurations.
 * @method Models\CreateNetworkApplicationResponse CreateNetworkApplication(Models\CreateNetworkApplicationRequest $req) This API is used to create a network application.
 * @method Models\CreateNoticeContentResponse CreateNoticeContent(Models\CreateNoticeContentRequest $req) This API is used to create notification content.
 * @method Models\CreateRebuildIndexTaskResponse CreateRebuildIndexTask(Models\CreateRebuildIndexTaskRequest $req) This API is used to creates rebuild index tasks.
Note:
-A single log topic allows only one index reconstruction task at a time and can have up to 10 rebuild index task records. Delete task records that are no longer needed before creating an index task.
-Logs within the same time range only allow rebuilding indexes once. Delete previous task records before rebuilding again.
-Deleting a rebuild index task record restores the index data before rebuilding an index.
-The log write traffic of the selected time range cannot exceed 5TB.
-The index rebuilding time range is subject to the log time. When the log uploading time has a deviation exceeding one hour from the index rebuilding time range (for example, reporting a new log at 16:00 for 02:00 to CLS and rebuilding the log index for 00:00–12:00), the logs will not be rebuilt and cannot be retrieved subsequently. When reporting a new log to the reconstructed log time range, it will not be rebuilt and cannot be retrieved subsequently.
 * @method Models\CreateRecordingRuleTaskResponse CreateRecordingRuleTask(Models\CreateRecordingRuleTaskRequest $req) Creating a Metric Pre-Aggregation Task
 * @method Models\CreateRecordingRuleYamlTaskResponse CreateRecordingRuleYamlTask(Models\CreateRecordingRuleYamlTaskRequest $req) Creating a Metric Pre-Aggregation Task Through a YAML File
 * @method Models\CreateRemoteWriteTaskResponse CreateRemoteWriteTask(Models\CreateRemoteWriteTaskRequest $req) This API is used to create a remote write delivery task.
 * @method Models\CreateScheduledSqlResponse CreateScheduledSql(Models\CreateScheduledSqlRequest $req) This API is used to create a scheduled SQL analysis task.
 * @method Models\CreateSearchViewResponse CreateSearchView(Models\CreateSearchViewRequest $req) Create a query view
 * @method Models\CreateShipperResponse CreateShipper(Models\CreateShipperRequest $req) This API is used to create a task to ship to COS. Note: To use this API, you need to check whether you have configured the role and permission for shipping to COS. If not, see **Viewing and Configuring Shipping Authorization** at https://intl.cloud.tencent.com/document/product/614/71623.?from_cn_redirect=1
 * @method Models\CreateSplunkDeliverResponse CreateSplunkDeliver(Models\CreateSplunkDeliverRequest $req) Create a Splunk delivery task
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) This API is used to create logs or metric topics.
 * @method Models\CreateWebCallbackResponse CreateWebCallback(Models\CreateWebCallbackRequest $req) This API is used to create alarm channel callback configurations.
 * @method Models\DeleteAlarmResponse DeleteAlarm(Models\DeleteAlarmRequest $req) This API is used to delete an alarm policy.
 * @method Models\DeleteAlarmNoticeResponse DeleteAlarmNotice(Models\DeleteAlarmNoticeRequest $req) This API is used to delete a notification group.
 * @method Models\DeleteAlarmShieldResponse DeleteAlarmShield(Models\DeleteAlarmShieldRequest $req) This API is used to delete an alarm blocking rule. When the alarm blocking rule is active or invalid, it cannot be deleted.
 * @method Models\DeleteCloudProductLogCollectionResponse DeleteCloudProductLogCollection(Models\DeleteCloudProductLogCollectionRequest $req) Cloud product integration uses internal APIs
 * @method Models\DeleteConfigResponse DeleteConfig(Models\DeleteConfigRequest $req) This API is used to delete collection rule configuration.
 * @method Models\DeleteConfigFromMachineGroupResponse DeleteConfigFromMachineGroup(Models\DeleteConfigFromMachineGroupRequest $req) This API is used to delete the collection configuration applied to a machine group.
 * @method Models\DeleteConsoleResponse DeleteConsole(Models\DeleteConsoleRequest $req) This API is used to delete the DataSight Console
 * @method Models\DeleteConsumerResponse DeleteConsumer(Models\DeleteConsumerRequest $req) Deleting a CKafka Delivery Task
 * @method Models\DeleteConsumerGroupResponse DeleteConsumerGroup(Models\DeleteConsumerGroupRequest $req) Delete consumer groups.
 * @method Models\DeleteCosRechargeResponse DeleteCosRecharge(Models\DeleteCosRechargeRequest $req) This API is used to delete a cos Import Task.
 * @method Models\DeleteDashboardResponse DeleteDashboard(Models\DeleteDashboardRequest $req) This API is used to delete dashboards.
 * @method Models\DeleteDashboardSubscribeResponse DeleteDashboardSubscribe(Models\DeleteDashboardSubscribeRequest $req) This API is used to delete dashboard subscriptions.
 * @method Models\DeleteDataTransformResponse DeleteDataTransform(Models\DeleteDataTransformRequest $req) This API is used to delete a data processing task.
 * @method Models\DeleteDlcDeliverResponse DeleteDlcDeliver(Models\DeleteDlcDeliverRequest $req) Delete a DLC delivery task
 * @method Models\DeleteEsRechargeResponse DeleteEsRecharge(Models\DeleteEsRechargeRequest $req) Delete es import configuration
 * @method Models\DeleteExportResponse DeleteExport(Models\DeleteExportRequest $req) This API is used to delete a log download task.
 * @method Models\DeleteHostMetricConfigResponse DeleteHostMetricConfig(Models\DeleteHostMetricConfigRequest $req) Delete host metric collection configuration
 * @method Models\DeleteIndexResponse DeleteIndex(Models\DeleteIndexRequest $req) This API is used to delete the index configuration of a log topic. After deleting, you cannot retrieve or query the collected logs.
 * @method Models\DeleteKafkaRechargeResponse DeleteKafkaRecharge(Models\DeleteKafkaRechargeRequest $req) This API is used to delete a Kafka data subscription task.
 * @method Models\DeleteLogsetResponse DeleteLogset(Models\DeleteLogsetRequest $req) This API is used to delete a logset.
 * @method Models\DeleteMachineGroupResponse DeleteMachineGroup(Models\DeleteMachineGroupRequest $req) This API is used to delete a machine group.
 * @method Models\DeleteMachineGroupInfoResponse DeleteMachineGroupInfo(Models\DeleteMachineGroupInfoRequest $req) This API is used to delete machine group information.
 * @method Models\DeleteMetricConfigResponse DeleteMetricConfig(Models\DeleteMetricConfigRequest $req) This API is used to delete metric collection configurations.
 * @method Models\DeleteMetricSubscribeResponse DeleteMetricSubscribe(Models\DeleteMetricSubscribeRequest $req) This API is used to delete metric subscription configurations.
 * @method Models\DeleteNetworkApplicationResponse DeleteNetworkApplication(Models\DeleteNetworkApplicationRequest $req) Delete a web application
 * @method Models\DeleteNoticeContentResponse DeleteNoticeContent(Models\DeleteNoticeContentRequest $req) This API is used to delete notification content configuration.
 * @method Models\DeleteRecordingRuleTaskResponse DeleteRecordingRuleTask(Models\DeleteRecordingRuleTaskRequest $req) This API is used to delete a pre-aggregation analysis task.
 * @method Models\DeleteRecordingRuleYamlTaskResponse DeleteRecordingRuleYamlTask(Models\DeleteRecordingRuleYamlTaskRequest $req) This API is used to delete the pre-aggregation task in yaml.
 * @method Models\DeleteRemoteWriteTaskResponse DeleteRemoteWriteTask(Models\DeleteRemoteWriteTaskRequest $req) This API is used to delete a RemoteWrite task.
 * @method Models\DeleteScheduledSqlResponse DeleteScheduledSql(Models\DeleteScheduledSqlRequest $req) This API is used to delete a scheduled SQL analysis task.
 * @method Models\DeleteSearchViewResponse DeleteSearchView(Models\DeleteSearchViewRequest $req) This API is used to delete a query view.
 * @method Models\DeleteShipperResponse DeleteShipper(Models\DeleteShipperRequest $req) This API is used to delete a COS shipping task.
 * @method Models\DeleteSplunkDeliverResponse DeleteSplunkDeliver(Models\DeleteSplunkDeliverRequest $req) Delete a Splunk delivery task
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) This API is used to delete logs or metric topics.
 * @method Models\DeleteWebCallbackResponse DeleteWebCallback(Models\DeleteWebCallbackRequest $req) This API is used to delete alarm channel callback configurations.
 * @method Models\DescribeAlarmNoticesResponse DescribeAlarmNotices(Models\DescribeAlarmNoticesRequest $req) This API is used to get the notification group list.
 * @method Models\DescribeAlarmShieldsResponse DescribeAlarmShields(Models\DescribeAlarmShieldsRequest $req) This API is used to access alarm blocking configuration rules.
 * @method Models\DescribeAlarmsResponse DescribeAlarms(Models\DescribeAlarmsRequest $req) This API is used to get the alarm policy list.
 * @method Models\DescribeAlertRecordHistoryResponse DescribeAlertRecordHistory(Models\DescribeAlertRecordHistoryRequest $req) This API is used to get alarm records, such as today's uncleared alarms.
 * @method Models\DescribeCloudProductLogTasksResponse DescribeCloudProductLogTasks(Models\DescribeCloudProductLogTasksRequest $req) Cloud product integration uses relevant APIs
 * @method Models\DescribeClusterBaseMetricConfigsResponse DescribeClusterBaseMetricConfigs(Models\DescribeClusterBaseMetricConfigsRequest $req) This API is used to obtain metric subscription configurations.
 * @method Models\DescribeClusterMetricConfigsResponse DescribeClusterMetricConfigs(Models\DescribeClusterMetricConfigsRequest $req) This API is used to obtain metric subscription configurations.
 * @method Models\DescribeConfigMachineGroupsResponse DescribeConfigMachineGroups(Models\DescribeConfigMachineGroupsRequest $req) This API is used to get the machine group bound to collection rule configuration.
 * @method Models\DescribeConfigsResponse DescribeConfigs(Models\DescribeConfigsRequest $req) This API is used to get collection rule configuration.
 * @method Models\DescribeConsolesResponse DescribeConsoles(Models\DescribeConsolesRequest $req) Query the DataSight console instance list
 * @method Models\DescribeConsumerResponse DescribeConsumer(Models\DescribeConsumerRequest $req) This API is used to query a shipping task.
 * @method Models\DescribeConsumerGroupsResponse DescribeConsumerGroups(Models\DescribeConsumerGroupsRequest $req) This API is used to obtain the consumer group list.
 * @method Models\DescribeConsumerOffsetsResponse DescribeConsumerOffsets(Models\DescribeConsumerOffsetsRequest $req) Obtaining the Consumer Group Point Information
 * @method Models\DescribeConsumerPreviewResponse DescribeConsumerPreview(Models\DescribeConsumerPreviewRequest $req) This API is used to preview Kafka shipping data.
 * @method Models\DescribeConsumersResponse DescribeConsumers(Models\DescribeConsumersRequest $req) This API is used to obtain the shipping rule information list.
 * @method Models\DescribeCosRechargesResponse DescribeCosRecharges(Models\DescribeCosRechargesRequest $req) This API is used to get COS import configuration.
 * @method Models\DescribeDashboardSubscribesResponse DescribeDashboardSubscribes(Models\DescribeDashboardSubscribesRequest $req) This API is used to obtain the dashboard subscription list, and supports paging.
 * @method Models\DescribeDataTransformInfoResponse DescribeDataTransformInfo(Models\DescribeDataTransformInfoRequest $req) This API is used to get the basic information of data processing tasks.
 * @method Models\DescribeDlcDeliversResponse DescribeDlcDelivers(Models\DescribeDlcDeliversRequest $req) This API is used to search alarm channel callback configuration lists.
 * @method Models\DescribeEsRechargePreviewResponse DescribeEsRechargePreview(Models\DescribeEsRechargePreviewRequest $req) Import Preview
 * @method Models\DescribeEsRechargesResponse DescribeEsRecharges(Models\DescribeEsRechargesRequest $req) Retrieve the es import configuration
 * @method Models\DescribeExportsResponse DescribeExports(Models\DescribeExportsRequest $req) This API is used to get the list of log download tasks.
 * @method Models\DescribeHostMetricConfigsResponse DescribeHostMetricConfigs(Models\DescribeHostMetricConfigsRequest $req) This API is used to obtain metric subscription configurations.
 * @method Models\DescribeIndexResponse DescribeIndex(Models\DescribeIndexRequest $req) This API is used to get the index configuration information.
 * @method Models\DescribeKafkaConsumerResponse DescribeKafkaConsumer(Models\DescribeKafkaConsumerRequest $req) This API is used to access Kafka protocol consumption information.
 * @method Models\DescribeKafkaConsumerGroupDetailResponse DescribeKafkaConsumerGroupDetail(Models\DescribeKafkaConsumerGroupDetailRequest $req) Retrieve Kafka protocol consumption group details
 * @method Models\DescribeKafkaConsumerGroupListResponse DescribeKafkaConsumerGroupList(Models\DescribeKafkaConsumerGroupListRequest $req) Retrieve the information list of Kafka protocol consumption groups
 * @method Models\DescribeKafkaConsumerPreviewResponse DescribeKafkaConsumerPreview(Models\DescribeKafkaConsumerPreviewRequest $req) This API is used to preview the Kafka consumption.
 * @method Models\DescribeKafkaConsumerTopicsResponse DescribeKafkaConsumerTopics(Models\DescribeKafkaConsumerTopicsRequest $req) This API is used to obtain the topic information list of Kafka consumption.
 * @method Models\DescribeKafkaRechargesResponse DescribeKafkaRecharges(Models\DescribeKafkaRechargesRequest $req) This API is used to get the list of Kafka data subscription tasks.
 * @method Models\DescribeLogContextResponse DescribeLogContext(Models\DescribeLogContextRequest $req) This API is used to search for content near the log context. For more details, see [Context Search](https://intl.cloud.tencent.com/document/product/614/53248?from_cn_redirect=1).The maximum value of API's return data packet is 49MB. It is recommended to enable gzip compression (HTTP Request Header Accept-Encoding: gzip).
 * @method Models\DescribeLogHistogramResponse DescribeLogHistogram(Models\DescribeLogHistogramRequest $req) This API is used to get a log count histogram.
 * @method Models\DescribeLogsetsResponse DescribeLogsets(Models\DescribeLogsetsRequest $req) This API is used to get the list of logsets.
 * @method Models\DescribeMachineGroupConfigsResponse DescribeMachineGroupConfigs(Models\DescribeMachineGroupConfigsRequest $req) This API is used to get the collection rule configuration bound to a machine group.
 * @method Models\DescribeMachineGroupsResponse DescribeMachineGroups(Models\DescribeMachineGroupsRequest $req) This API is used to get the list of machine groups.
 * @method Models\DescribeMachinesResponse DescribeMachines(Models\DescribeMachinesRequest $req) This API is used to get the status of a machine under the specified machine group.
 * @method Models\DescribeMetricCorrectDimensionResponse DescribeMetricCorrectDimension(Models\DescribeMetricCorrectDimensionRequest $req) This API is used to obtain metric subscription configurations.
 * @method Models\DescribeMetricSubscribePreviewResponse DescribeMetricSubscribePreview(Models\DescribeMetricSubscribePreviewRequest $req) This API is used to create metric subscription configurations.
 * @method Models\DescribeMetricSubscribesResponse DescribeMetricSubscribes(Models\DescribeMetricSubscribesRequest $req) This API is used to obtain metric subscription configurations.
 * @method Models\DescribeNetworkApplicationDetailResponse DescribeNetworkApplicationDetail(Models\DescribeNetworkApplicationDetailRequest $req) Retrieve web application details
 * @method Models\DescribeNetworkApplicationsResponse DescribeNetworkApplications(Models\DescribeNetworkApplicationsRequest $req) Retrieve the network application list
 * @method Models\DescribeNoticeContentsResponse DescribeNoticeContents(Models\DescribeNoticeContentsRequest $req) This API is used to obtain the notification content list.
 * @method Models\DescribePartitionsResponse DescribePartitions(Models\DescribePartitionsRequest $req) This API is deprecated. If needed, please use the DescribeTopics API to get the number of partitions.
 * @method Models\DescribeRebuildIndexTasksResponse DescribeRebuildIndexTasks(Models\DescribeRebuildIndexTasksRequest $req) This API is used to obtain the list of rebuild index tasks.
 * @method Models\DescribeRecordingRuleTaskResponse DescribeRecordingRuleTask(Models\DescribeRecordingRuleTaskRequest $req) This API is used to retrieve the pre-aggregation task list.
 * @method Models\DescribeRecordingRuleYamlTaskResponse DescribeRecordingRuleYamlTask(Models\DescribeRecordingRuleYamlTaskRequest $req) This API is used to retrieve the pre-aggregation task list in yaml.
 * @method Models\DescribeRemoteWriteTasksResponse DescribeRemoteWriteTasks(Models\DescribeRemoteWriteTasksRequest $req) This API is used to obtain the list of RemoteWrite delivery tasks.
 * @method Models\DescribeScheduledSqlInfoResponse DescribeScheduledSqlInfo(Models\DescribeScheduledSqlInfoRequest $req) This API is used to access the scheduled SQL analysis task list.
 * @method Models\DescribeSearchViewsResponse DescribeSearchViews(Models\DescribeSearchViewsRequest $req) Query view list
 * @method Models\DescribeShipperTasksResponse DescribeShipperTasks(Models\DescribeShipperTasksRequest $req) This API is used to get the list of shipping tasks.
 * @method Models\DescribeShippersResponse DescribeShippers(Models\DescribeShippersRequest $req) This API is used to get the configuration of the task shipped to COS.
 * @method Models\DescribeSplunkDeliversResponse DescribeSplunkDelivers(Models\DescribeSplunkDeliversRequest $req) Retrieve the Splunk delivery task list
 * @method Models\DescribeSplunkPreviewResponse DescribeSplunkPreview(Models\DescribeSplunkPreviewRequest $req) splunk delivery task preview
 * @method Models\DescribeTopicBaseMetricConfigsResponse DescribeTopicBaseMetricConfigs(Models\DescribeTopicBaseMetricConfigsRequest $req) This API is used to obtain metric subscription configurations.
 * @method Models\DescribeTopicMetricConfigsResponse DescribeTopicMetricConfigs(Models\DescribeTopicMetricConfigsRequest $req) This API is used to obtain metric subscription configurations.
 * @method Models\DescribeTopicsResponse DescribeTopics(Models\DescribeTopicsRequest $req) This API is used to obtain logs or metric topic lists and supports pagination.
 * @method Models\DescribeWebCallbacksResponse DescribeWebCallbacks(Models\DescribeWebCallbacksRequest $req) This API is used to search alarm channel callback configuration lists.
 * @method Models\EstimateRebuildIndexTaskResponse EstimateRebuildIndexTask(Models\EstimateRebuildIndexTaskRequest $req) This API is used to estimate rebuild index tasks.
 * @method Models\GetAlarmLogResponse GetAlarmLog(Models\GetAlarmLogRequest $req) This API is used to access alarm policy execution details.
 * @method Models\GetClsServiceResponse GetClsService(Models\GetClsServiceRequest $req) This API is used to check whether CLS is enabled.
This API is used to fill in any region for Region, recommend using Guangzhou (ap-guangzhou).
 * @method Models\GetMetricLabelValuesResponse GetMetricLabelValues(Models\GetMetricLabelValuesRequest $req) This API is used to obtain the list of time series label values.
 * @method Models\MergePartitionResponse MergePartition(Models\MergePartitionRequest $req) This API is deprecated. If needed, please use the ModifyTopic API to change the number of partitions.
 * @method Models\ModifyAlarmResponse ModifyAlarm(Models\ModifyAlarmRequest $req) This API is used to modify an alarm policy. At least one valid configuration item needs to be modified.
 * @method Models\ModifyAlarmNoticeResponse ModifyAlarmNotice(Models\ModifyAlarmNoticeRequest $req) This API is used to modify a notification group.
 * @method Models\ModifyAlarmShieldResponse ModifyAlarmShield(Models\ModifyAlarmShieldRequest $req) This API is used to modify alarm blocking rules. When the alarm blocking rule is invalid, it cannot be modified.
 * @method Models\ModifyCloudProductLogCollectionResponse ModifyCloudProductLogCollection(Models\ModifyCloudProductLogCollectionRequest $req) Cloud product integration uses internal APIs
 * @method Models\ModifyConfigResponse ModifyConfig(Models\ModifyConfigRequest $req) This API is used to modify collection rule configuration.
 * @method Models\ModifyConsoleResponse ModifyConsole(Models\ModifyConsoleRequest $req) This API is used to edit the DataSight Console
 * @method Models\ModifyConsumerResponse ModifyConsumer(Models\ModifyConsumerRequest $req) This API is used to modify a CKafka delivery task.
 * @method Models\ModifyConsumerGroupResponse ModifyConsumerGroup(Models\ModifyConsumerGroupRequest $req) This API is used to update the consumer group information.
 * @method Models\ModifyCosRechargeResponse ModifyCosRecharge(Models\ModifyCosRechargeRequest $req) This API is used to modify a COS import task.
 * @method Models\ModifyDashboardResponse ModifyDashboard(Models\ModifyDashboardRequest $req) This API is used to modify the dashboard.
 * @method Models\ModifyDashboardSubscribeResponse ModifyDashboardSubscribe(Models\ModifyDashboardSubscribeRequest $req) This API is used to modify dashboard subscriptions.
 * @method Models\ModifyDataTransformResponse ModifyDataTransform(Models\ModifyDataTransformRequest $req) This API is used to modify a data processing task.
 * @method Models\ModifyDlcDeliverResponse ModifyDlcDeliver(Models\ModifyDlcDeliverRequest $req) Modify a DLC delivery task
 * @method Models\ModifyEsRechargeResponse ModifyEsRecharge(Models\ModifyEsRechargeRequest $req) Modify es import configuration
 * @method Models\ModifyHostMetricConfigResponse ModifyHostMetricConfig(Models\ModifyHostMetricConfigRequest $req) Modify host metric collection configuration
 * @method Models\ModifyIndexResponse ModifyIndex(Models\ModifyIndexRequest $req) This API is used to modify the index configuration. It is subject to the default request frequency limit, and the number of concurrent requests to the same log topic cannot exceed 1, i.e., the index configuration of only one log topic can be modified at a time.
 * @method Models\ModifyKafkaConsumerResponse ModifyKafkaConsumer(Models\ModifyKafkaConsumerRequest $req) This API is used to modify Kafka protocol consumption information.
 * @method Models\ModifyKafkaConsumerGroupOffsetResponse ModifyKafkaConsumerGroupOffset(Models\ModifyKafkaConsumerGroupOffsetRequest $req) This API is used to modify Kafka protocol consumption group offsets.
 * @method Models\ModifyKafkaRechargeResponse ModifyKafkaRecharge(Models\ModifyKafkaRechargeRequest $req) This API is used to modify a Kafka data subscription task.
 * @method Models\ModifyLogsetResponse ModifyLogset(Models\ModifyLogsetRequest $req) This API is used to modify a logset.
 * @method Models\ModifyMachineGroupResponse ModifyMachineGroup(Models\ModifyMachineGroupRequest $req) Modify machine group.
Note: Modifying the interface will directly overwrite historical data and change it to valid input parameters this time. Please be cautious when calling this API.
 * @method Models\ModifyMetricConfigResponse ModifyMetricConfig(Models\ModifyMetricConfigRequest $req) This API is used to create metric collection configurations.
 * @method Models\ModifyMetricSubscribeResponse ModifyMetricSubscribe(Models\ModifyMetricSubscribeRequest $req) This API is used to modify metric subscription configurations.
 * @method Models\ModifyNetworkApplicationResponse ModifyNetworkApplication(Models\ModifyNetworkApplicationRequest $req) Modify a web application
 * @method Models\ModifyNoticeContentResponse ModifyNoticeContent(Models\ModifyNoticeContentRequest $req) This API is used to modify notification content configuration.
 * @method Models\ModifyRecordingRuleTaskResponse ModifyRecordingRuleTask(Models\ModifyRecordingRuleTaskRequest $req) This API is used to modify a scheduled pre-aggregation task.
 * @method Models\ModifyRecordingRuleYamlTaskResponse ModifyRecordingRuleYamlTask(Models\ModifyRecordingRuleYamlTaskRequest $req) Modifying a Metric Pre-Aggregation Task Through a YAML File
 * @method Models\ModifyRemoteWriteTaskResponse ModifyRemoteWriteTask(Models\ModifyRemoteWriteTaskRequest $req) This API is used to modify a RemoteWrite task.
 * @method Models\ModifyScheduledSqlResponse ModifyScheduledSql(Models\ModifyScheduledSqlRequest $req) This API is used to modify a scheduled SQL analysis task.
 * @method Models\ModifySearchViewResponse ModifySearchView(Models\ModifySearchViewRequest $req) This API is used to modify a query view.
 * @method Models\ModifyShipperResponse ModifyShipper(Models\ModifyShipperRequest $req) This API is used to modify an existing shipping rule. To use this API, you need to grant CLS the write permission of the specified bucket.
 * @method Models\ModifySplunkDeliverResponse ModifySplunkDeliver(Models\ModifySplunkDeliverRequest $req) Modify information related to splunk delivery task
 * @method Models\ModifyTopicResponse ModifyTopic(Models\ModifyTopicRequest $req) This API is used to modify logs or metric topics.
 * @method Models\ModifyWebCallbackResponse ModifyWebCallback(Models\ModifyWebCallbackRequest $req) This API is used to modify alarm channel callback configurations.
 * @method Models\OpenClawServiceResponse OpenClawService(Models\OpenClawServiceRequest $req) This API is used to create resources and indexes dependent on OpenClaw.
 * @method Models\OpenClsServiceResponse OpenClsService(Models\OpenClsServiceRequest $req) Enable logging
This API is used to enable CLS in all regions by filling any region for Region, recommend using Guangzhou (ap-guangzhou).
 * @method Models\OpenKafkaConsumerResponse OpenKafkaConsumer(Models\OpenKafkaConsumerRequest $req) This API is used to enable the Kafka consumption feature.
 * @method Models\PreviewKafkaRechargeResponse PreviewKafkaRecharge(Models\PreviewKafkaRechargeRequest $req) This API is used to preview the logs of Kafka data subscription tasks.
 * @method Models\QueryMetricResponse QueryMetric(Models\QueryMetricRequest $req) Query the latest metric value at a specified time.
If there is no metric data in the 5 minutes before that moment, there will be no query result.
 * @method Models\QueryRangeMetricResponse QueryRangeMetric(Models\QueryRangeMetricRequest $req) This API is used to query the trend of metrics within a specified time range.
 * @method Models\RetryShipperTaskResponse RetryShipperTask(Models\RetryShipperTaskRequest $req) This API is used to retry a failed shipping task.
 * @method Models\SearchCosRechargeInfoResponse SearchCosRechargeInfo(Models\SearchCosRechargeInfoRequest $req) This API is used to preview COS import information.
 * @method Models\SearchDashboardSubscribeResponse SearchDashboardSubscribe(Models\SearchDashboardSubscribeRequest $req) This API is used to preview the dashboard subscription.
 * @method Models\SearchLogResponse SearchLog(Models\SearchLogRequest $req) This API is used to retrieve and analyze logs. Please note the following matters when using this API.
1. Besides being subject to the default API request rate limit, for a single log topic, the number of concurrent queries cannot exceed 15.
2. The API's return data packet maximum is 49MB. It is recommended to enable gzip compression (HTTP Request Header Accept-Encoding: gzip).
 * @method Models\SendConsumerHeartbeatResponse SendConsumerHeartbeat(Models\SendConsumerHeartbeatRequest $req) This API is used to check the heartbeat of a consumer group.
 * @method Models\SplitPartitionResponse SplitPartition(Models\SplitPartitionRequest $req) This API is deprecated. If needed, please use the ModifyTopic API to change the number of partitions.
 * @method Models\UploadLogResponse UploadLog(Models\UploadLogRequest $req) ## Notification
To ensure the reliability of your log data and use the log service more efficiently, we recommend that you use the CLS-optimized API to upload structured logs (https://www.tencentcloud.com/document/product/614/16873?from_cn_redirect=1).

Meanwhile, we have specially optimized and customized SDKs in multiple languages for this API for you to choose from. The SDK provides unified async sending, resource control, automatic retry, graceful shutdown, perception reporting, and other features to improve the log reporting function. For details, refer to [SDK Collection](https://www.tencentcloud.com/document/product/614/67157?from_cn_redirect=1).

Meanwhile, the log upload API also supports synchronous log data upload. If you select to continue using this API, refer to the following text.

## Feature Description

This API is used to write logs to the designated log topic.

#### Input parameter (pb binary stream, located in body)

| Field name | Data type | Location | Must | Description |
| ------------ | ------- | ---- | ---- | ------------------------------------------------------------ |
| logGroupList | message | pb   | Yes | logGroup list, encapsulated content of the log group list. It is advisable not to exceed 5 logGroups. |

Group description:

| Field name | Required or optional | Description |
| ----------- | -------- | ------------------------------------------------------------ |
| logs        | is       | a log array, which means a set of multiple logs. One Log represents one log, and the number of logs in one LogGroup cannot exceed 10000 |
| contextFlow | No | The unique ID of LogGroup, which must be imported when using context features. Format: "{context ID}-{LogGroupID}".<br>Context ID: A unique identifier for a context (a series of consecutively scrolled log files or a sequence of logs requiring order preservation), a 64-bit integer string in base 16.<br>LogGroupID: A consecutively incremental integer string in base 16. Example: "102700A66102516A-59F59".
| filename    | No       | Log file name |
| source      | No       | Log source, using machine IP as a label in general use       |
| logTags     | No       | Log tag list                                               |

Log description:

| field name | Required or optional | Description |
| -------- | -------- | ------------------------------------------------------------ |
| time     | is       | log time (Unix timestamp), supports second, millisecond, microsecond, milliseconds is recommended |
| contents | No | Key-value formatted log content, representing multiple key-value composites in a log |

Content description:

| Field name | Required or optional | Description |
| ------ | -------- | ------------------------------------------------------------ |
| key    | Yes       | The key value of a field group in a single-line log. It cannot start with `_` |
| value  | Yes       | The value of a field group in a single-line log. The value of a single-line log must not exceed 1MB, and the sum of ALL values in a LogGroup cannot exceed 5MB. |

LogTag description:

| Field name | Required or optional | Description |
| ------ | -------- | -------------------------------- |
| key    | Yes      | Custom tag key                 |
| value  | is       | value corresponding to the custom tag key |

## PB Compilation Example

This example shows how to use the official protoc compiler to compile and generate a C++ language adjustable log upload API from a description file.

Currently protoc officially supports compilation for languages such as Java, C++, and Python. For details, see [protoc](https://github.com/protocolbuffers/protobuf).

#### 1. Protocol Buffer installation

Download [Protocol Buffer](https://main.qcloudimg.com/raw/d7810aaf8b3073fbbc9d4049c21532aa/protobuf-2.6.1.tar.gz), unzip and install. The example version is protobuf 2.6.1, and the environment is Centos 7.3 system. Decompress the `protobuf-2.6.1.tar.gz` compressed package to the `/usr/local` directory and enter the directory. Execute the command as follows:

```
tar -zxvf protobuf-2.6.1.tar.gz -C /usr/local/ && cd /usr/local/protobuf-2.6.1
```

Start compilation and installation, configure environment variables, execute the command as follows:

```
[root@VM_0_8_centos protobuf-2.6.1]# ./configure 
[root@VM_0_8_centos protobuf-2.6.1]# make && make install
[root@VM_0_8_centos protobuf-2.6.1]# export PATH=$PATH:/usr/local/protobuf-2.6.1/bin
```

After successful compilation, view the version using the following command:

```
[root@VM_0_8_centos protobuf-2.6.1]# protoc --version
liprotoc 2.6.1
```

#### 2. Create PB description file

The PB description file is the data interchange format agreed by the communication parties. When uploading logs, compile the specified protocol format into the calling interface of the corresponding language version, then add to engineering code. For details, see [protoc](https://github.com/protocolbuffers/protobuf).

Create a local PB message description file cls.proto based on the PB data format specified by the log service.

!PB description file content immutable, and the file name must end with `.proto`.

The content of cls.proto (PB description file) is as follows:

```
package cls;

message Log
{
    message Content
    {
required string key = 1; // key for each group of fields
required string value = 2; // The value of the group field
    }
required int64   time     = 1; // A timestamp in UNIX time format
repeated Content contents = 2; // multiple kv combinations in a log
}

message LogTag
{
    required string key       = 1;
    required string value     = 2;
}

message LogGroup
{
repeated Log    logs        = 1; // log array composed of multiple logs
optional string contextFlow = 2; // Currently no utility
optional string filename = 3; // log file name
optional string source      = 4; // log source, general use machine IP
    repeated LogTag logTags     = 5;
}

message LogGroupList
{
repeated LogGroup logGroupList = 1; // log group list
}
```

#### 3. Compile and generate

In this example, use the proto compiler to generate C++ language files under the same directory as the cls.proto file and execute the following compilation command:

```
protoc --cpp_out=./ ./cls.proto 
```

`--cpp_out=./` means compile to cpp format and output in the current directory. `./cls.proto` refers to the cls.proto description file located in the current directory.

After successful compilation, it will output the code file in the corresponding language. This routine generates the cls.pb.h header file and the cls.pb.cc code implementation file, as shown below:

```
[root@VM_0_8_centos protobuf-2.6.1]# protoc --cpp_out=./ ./cls.proto
[root@VM_0_8_centos protobuf-2.6.1]# ls
cls.pb.cc cls.pb.h cls.proto
```

#### 4. Call

Import the generated cls.pb.h header file into the code and call the interface to encapsulate the data format.
 */

class ClsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cls.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cls";

    /**
     * @var string
     */
    protected $version = "2020-10-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("cls")."\\"."V20201016\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
