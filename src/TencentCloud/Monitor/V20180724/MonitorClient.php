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

namespace TencentCloud\Monitor\V20180724;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Monitor\V20180724\Models as Models;

/**
 * @method Models\BindPrometheusManagedGrafanaResponse BindPrometheusManagedGrafana(Models\BindPrometheusManagedGrafanaRequest $req) This API is used to bind a Grafana instance.
 * @method Models\BindingPolicyObjectResponse BindingPolicyObject(Models\BindingPolicyObjectRequest $req) This API is used to bind an alarm policy to a specific object.
 * @method Models\CheckIsPrometheusNewUserResponse CheckIsPrometheusNewUser(Models\CheckIsPrometheusNewUserRequest $req) This API is used to determine whether the user is new to TMP, that is, whether the user has never created a TMP instance in any region.
 * @method Models\CleanGrafanaInstanceResponse CleanGrafanaInstance(Models\CleanGrafanaInstanceRequest $req) This API is used to forcibly terminate a Grafana instance.
 * @method Models\CreateAlarmNoticeResponse CreateAlarmNotice(Models\CreateAlarmNoticeRequest $req) This API is used to create a notification template.
 * @method Models\CreateAlarmPolicyResponse CreateAlarmPolicy(Models\CreateAlarmPolicyRequest $req) This API is used to create an alarm policy.
 * @method Models\CreateAlertRuleResponse CreateAlertRule(Models\CreateAlertRuleRequest $req) This API is used to create a Prometheus alerting rule.

Note that alert object and alert message are special fields of Prometheus Rule Annotations, which need to be passed in through `annotations` and correspond to `summary` and `description` keys respectively. For more information, see [Alerting rules](https://prometheus.io/docs/prometheus/latest/configuration/alerting_rules/).
 * @method Models\CreateExporterIntegrationResponse CreateExporterIntegration(Models\CreateExporterIntegrationRequest $req) This API is used to create an exporter integration.
 * @method Models\CreateGrafanaInstanceResponse CreateGrafanaInstance(Models\CreateGrafanaInstanceRequest $req) This API is used to create a monthly subscribed TCMG instance of the Basic Edition, with auto-renewal enabled and vouchers not allowed by default.
 * @method Models\CreateGrafanaIntegrationResponse CreateGrafanaIntegration(Models\CreateGrafanaIntegrationRequest $req) This API is used to create a Grafana integration configuration.
 * @method Models\CreateGrafanaNotificationChannelResponse CreateGrafanaNotificationChannel(Models\CreateGrafanaNotificationChannelRequest $req) This API is used to create a Grafana notification channel.
 * @method Models\CreatePolicyGroupResponse CreatePolicyGroup(Models\CreatePolicyGroupRequest $req) This API is used to add a policy group.
 * @method Models\CreatePrometheusAgentResponse CreatePrometheusAgent(Models\CreatePrometheusAgentRequest $req) This API is used to create a Prometheus CVM agent.
 * @method Models\CreatePrometheusAlertPolicyResponse CreatePrometheusAlertPolicy(Models\CreatePrometheusAlertPolicyRequest $req) This API is used to create an alerting rule.
 * @method Models\CreatePrometheusClusterAgentResponse CreatePrometheusClusterAgent(Models\CreatePrometheusClusterAgentRequest $req) This API is used to associate a cluster with a Cloud Monitor (CM)-integrated Tencent Managed Service for Prometheus (TMP) 2.0 instance.
 * @method Models\CreatePrometheusConfigResponse CreatePrometheusConfig(Models\CreatePrometheusConfigRequest $req) This API is used to create Prometheus configurations.
 * @method Models\CreatePrometheusGlobalNotificationResponse CreatePrometheusGlobalNotification(Models\CreatePrometheusGlobalNotificationRequest $req) This API is used to create a global alert notification channel.
 * @method Models\CreatePrometheusMultiTenantInstancePostPayModeResponse CreatePrometheusMultiTenantInstancePostPayMode(Models\CreatePrometheusMultiTenantInstancePostPayModeRequest $req) This API is used to create a pay-as-you-go Prometheus instance.
 * @method Models\CreatePrometheusRecordRuleYamlResponse CreatePrometheusRecordRuleYaml(Models\CreatePrometheusRecordRuleYamlRequest $req) This API is used to create a recording rule in the YAML way.
 * @method Models\CreatePrometheusScrapeJobResponse CreatePrometheusScrapeJob(Models\CreatePrometheusScrapeJobRequest $req) This API is used to create a Prometheus scrape task.
 * @method Models\CreatePrometheusTempResponse CreatePrometheusTemp(Models\CreatePrometheusTempRequest $req) This API is used to create a TMP template.
 * @method Models\CreateRecordingRuleResponse CreateRecordingRule(Models\CreateRecordingRuleRequest $req) This API is used to create a Prometheus recording rule.
 * @method Models\CreateSSOAccountResponse CreateSSOAccount(Models\CreateSSOAccountRequest $req) This API is used to authorize a Grafana instance to another Tencent Cloud user.
 * @method Models\CreateServiceDiscoveryResponse CreateServiceDiscovery(Models\CreateServiceDiscoveryRequest $req) This API is used to create a Prometheus scrape configuration in TKE.
<p>Note: The prerequisite is that the corresponding TKE service has been integrated through the Prometheus console. For more information, see
<a href="https://intl.cloud.tencent.com/document/product/248/48859?from_cn_redirect=1" target="_blank">Agent Management</a>.</p>
 * @method Models\DeleteAlarmNoticesResponse DeleteAlarmNotices(Models\DeleteAlarmNoticesRequest $req) This API is used to delete an alarm notification template.
 * @method Models\DeleteAlarmPolicyResponse DeleteAlarmPolicy(Models\DeleteAlarmPolicyRequest $req) This API is used to delete an alarm policy.
 * @method Models\DeleteAlertRulesResponse DeleteAlertRules(Models\DeleteAlertRulesRequest $req) This API is used to batch delete Prometheus alerting rules.
 * @method Models\DeleteExporterIntegrationResponse DeleteExporterIntegration(Models\DeleteExporterIntegrationRequest $req) This API is used to delete an exporter integration.
 * @method Models\DeleteGrafanaInstanceResponse DeleteGrafanaInstance(Models\DeleteGrafanaInstanceRequest $req) This API is used to refund a monthly subscribed TCMG instance. Once it is called, the instance cannot be used and will be automatically terminated seven days later.
 * @method Models\DeleteGrafanaIntegrationResponse DeleteGrafanaIntegration(Models\DeleteGrafanaIntegrationRequest $req) This API is used to delete a Grafana integration configuration.
 * @method Models\DeleteGrafanaNotificationChannelResponse DeleteGrafanaNotificationChannel(Models\DeleteGrafanaNotificationChannelRequest $req) This API is used to delete a Grafana notification channel.
 * @method Models\DeletePolicyGroupResponse DeletePolicyGroup(Models\DeletePolicyGroupRequest $req) This API is used to delete an alarm policy group.
 * @method Models\DeletePrometheusAlertPolicyResponse DeletePrometheusAlertPolicy(Models\DeletePrometheusAlertPolicyRequest $req) This API is used to delete a TMP 2.0 instance alerting rule.
 * @method Models\DeletePrometheusClusterAgentResponse DeletePrometheusClusterAgent(Models\DeletePrometheusClusterAgentRequest $req) This API is used to disassociate a TMP instance from a cluster.
 * @method Models\DeletePrometheusConfigResponse DeletePrometheusConfig(Models\DeletePrometheusConfigRequest $req) This API is used to delete Prometheus configurations. If the target cluster does not exist, a result indicating success will be returned.
 * @method Models\DeletePrometheusRecordRuleYamlResponse DeletePrometheusRecordRuleYaml(Models\DeletePrometheusRecordRuleYamlRequest $req) This API is used to delete a recording instance.
 * @method Models\DeletePrometheusScrapeJobsResponse DeletePrometheusScrapeJobs(Models\DeletePrometheusScrapeJobsRequest $req) This API is used to delete a Prometheus scrape task.
 * @method Models\DeletePrometheusTempResponse DeletePrometheusTemp(Models\DeletePrometheusTempRequest $req) This API is used to delete a TMP template.
 * @method Models\DeletePrometheusTempSyncResponse DeletePrometheusTempSync(Models\DeletePrometheusTempSyncRequest $req) This API is used to unsync a template, which will delete the configuration generated by the template in the target. It takes effect for v2 instances.
 * @method Models\DeleteRecordingRulesResponse DeleteRecordingRules(Models\DeleteRecordingRulesRequest $req) This API is used to batch delete Prometheus recording rules.
 * @method Models\DeleteSSOAccountResponse DeleteSSOAccount(Models\DeleteSSOAccountRequest $req) This API is used to delete an authorized TCMG user.
 * @method Models\DescribeAccidentEventListResponse DescribeAccidentEventList(Models\DescribeAccidentEventListRequest $req) This API is used to get the platform event list.
 * @method Models\DescribeAlarmEventsResponse DescribeAlarmEvents(Models\DescribeAlarmEventsRequest $req) This API is used to query the list of alarm events.
 * @method Models\DescribeAlarmHistoriesResponse DescribeAlarmHistories(Models\DescribeAlarmHistoriesRequest $req) This API is used to query the alarm records.

Note: **If you use a sub-account, you can only query the alarm records of authorized projects** or uncategorized products.
 * @method Models\DescribeAlarmMetricsResponse DescribeAlarmMetrics(Models\DescribeAlarmMetricsRequest $req) This API is used to query the list of alarm metrics.
 * @method Models\DescribeAlarmNoticeResponse DescribeAlarmNotice(Models\DescribeAlarmNoticeRequest $req) This API is used to query the details of a single notification template.
 * @method Models\DescribeAlarmNoticeCallbacksResponse DescribeAlarmNoticeCallbacks(Models\DescribeAlarmNoticeCallbacksRequest $req) This API is used to obtain all the callback URLs of an alarm notification template.
 * @method Models\DescribeAlarmNoticesResponse DescribeAlarmNotices(Models\DescribeAlarmNoticesRequest $req) This API is used to query the list of notification templates.
 * @method Models\DescribeAlarmPoliciesResponse DescribeAlarmPolicies(Models\DescribeAlarmPoliciesRequest $req) This API is used to query the list of alarm policies.
 * @method Models\DescribeAlarmPolicyResponse DescribeAlarmPolicy(Models\DescribeAlarmPolicyRequest $req) This API is used to get the details of a single alarm policy.
 * @method Models\DescribeAlertRulesResponse DescribeAlertRules(Models\DescribeAlertRulesRequest $req) This API is used to query a Prometheus alerting rule.
 * @method Models\DescribeAllNamespacesResponse DescribeAllNamespaces(Models\DescribeAllNamespacesRequest $req) This API is used to query all namespaces.
 * @method Models\DescribeBaseMetricsResponse DescribeBaseMetrics(Models\DescribeBaseMetricsRequest $req) This API is used to get the attributes of basic metrics.
 * @method Models\DescribeBasicAlarmListResponse DescribeBasicAlarmList(Models\DescribeBasicAlarmListRequest $req) This API is used to get the basic alarm list.
 * @method Models\DescribeBindingPolicyObjectListResponse DescribeBindingPolicyObjectList(Models\DescribeBindingPolicyObjectListRequest $req) This API is used to get the bound object list.
 * @method Models\DescribeClusterAgentCreatingProgressResponse DescribeClusterAgentCreatingProgress(Models\DescribeClusterAgentCreatingProgressRequest $req) This API is used to obtain the binding status between the TencentCloud Managed Service for Prometheus instance and the TKE cluster.
 * @method Models\DescribeConditionsTemplateListResponse DescribeConditionsTemplateList(Models\DescribeConditionsTemplateListRequest $req) This API is used to get the trigger condition template.
 * @method Models\DescribeDNSConfigResponse DescribeDNSConfig(Models\DescribeDNSConfigRequest $req) This API is used to list Grafana DNS configurations.
 * @method Models\DescribeExporterIntegrationsResponse DescribeExporterIntegrations(Models\DescribeExporterIntegrationsRequest $req) This API is used to query the list of exporter integrations.
 * @method Models\DescribeGrafanaChannelsResponse DescribeGrafanaChannels(Models\DescribeGrafanaChannelsRequest $req) This API is used to list all Grafana alert channels.
 * @method Models\DescribeGrafanaConfigResponse DescribeGrafanaConfig(Models\DescribeGrafanaConfigRequest $req) This API is used to list Grafana settings, i.e., the `grafana.ini` file content.
 * @method Models\DescribeGrafanaEnvironmentsResponse DescribeGrafanaEnvironments(Models\DescribeGrafanaEnvironmentsRequest $req) This API is used to list Grafana environment variables.
 * @method Models\DescribeGrafanaInstancesResponse DescribeGrafanaInstances(Models\DescribeGrafanaInstancesRequest $req) This API is used to list all Grafana instances under a user account.
 * @method Models\DescribeGrafanaIntegrationsResponse DescribeGrafanaIntegrations(Models\DescribeGrafanaIntegrationsRequest $req) This API is used to list installed Grafana integrations.
 * @method Models\DescribeGrafanaNotificationChannelsResponse DescribeGrafanaNotificationChannels(Models\DescribeGrafanaNotificationChannelsRequest $req) This API is used to list Grafana notification channels.
 * @method Models\DescribeGrafanaWhiteListResponse DescribeGrafanaWhiteList(Models\DescribeGrafanaWhiteListRequest $req) This API is used to list the Grafana allowlist.
 * @method Models\DescribeInstalledPluginsResponse DescribeInstalledPlugins(Models\DescribeInstalledPluginsRequest $req) This API is used to list the plugins installed in an instance.
 * @method Models\DescribeMonitorTypesResponse DescribeMonitorTypes(Models\DescribeMonitorTypesRequest $req) This API is used to list all the monitoring types supported by CM.
 * @method Models\DescribePolicyConditionListResponse DescribePolicyConditionList(Models\DescribePolicyConditionListRequest $req) This API is used to get basic alarm policy conditions.
 * @method Models\DescribePolicyGroupInfoResponse DescribePolicyGroupInfo(Models\DescribePolicyGroupInfoRequest $req) This API is used to get details of a basic policy group.
 * @method Models\DescribePolicyGroupListResponse DescribePolicyGroupList(Models\DescribePolicyGroupListRequest $req) This API is used to get the list of basic policy alarm groups.
 * @method Models\DescribeProductEventListResponse DescribeProductEventList(Models\DescribeProductEventListRequest $req) This API is used to get the list of product events by page.
 * @method Models\DescribePrometheusAgentInstancesResponse DescribePrometheusAgentInstances(Models\DescribePrometheusAgentInstancesRequest $req) This API is used to get the list of instances associated with the target cluster.
 * @method Models\DescribePrometheusAgentsResponse DescribePrometheusAgents(Models\DescribePrometheusAgentsRequest $req) This API is used to list Prometheus CVM agents.
 * @method Models\DescribePrometheusAlertPolicyResponse DescribePrometheusAlertPolicy(Models\DescribePrometheusAlertPolicyRequest $req) This API is used to get the list of v2.0 instance alerting rules.
 * @method Models\DescribePrometheusClusterAgentsResponse DescribePrometheusClusterAgents(Models\DescribePrometheusClusterAgentsRequest $req) This API is used to get the list of clusters associated with the TMP instance.
 * @method Models\DescribePrometheusConfigResponse DescribePrometheusConfig(Models\DescribePrometheusConfigRequest $req) This API is used to get the Prometheus configuration.
 * @method Models\DescribePrometheusGlobalConfigResponse DescribePrometheusGlobalConfig(Models\DescribePrometheusGlobalConfigRequest $req) This API is used to get the instance-level scrape configurations.
 * @method Models\DescribePrometheusGlobalNotificationResponse DescribePrometheusGlobalNotification(Models\DescribePrometheusGlobalNotificationRequest $req) This API is used to query the global alert notification channel.
 * @method Models\DescribePrometheusInstanceDetailResponse DescribePrometheusInstanceDetail(Models\DescribePrometheusInstanceDetailRequest $req) This API is used to get the details of a TMP instance.
 * @method Models\DescribePrometheusInstanceInitStatusResponse DescribePrometheusInstanceInitStatus(Models\DescribePrometheusInstanceInitStatusRequest $req) This API is used to get the initialization task status of a v2.0 instance.
 * @method Models\DescribePrometheusInstanceUsageResponse DescribePrometheusInstanceUsage(Models\DescribePrometheusInstanceUsageRequest $req)  This API is used to query the usage of a pay-as-you-go Tencent Managed Service for Prometheus (TMP) instance.
 * @method Models\DescribePrometheusInstancesResponse DescribePrometheusInstances(Models\DescribePrometheusInstancesRequest $req) This API is used to query the details of one or multiple instances.
<ul>
<li>You can query the details of an instance by its ID, name, or status.</li>
<li>If this parameter is empty, the information of a certain number of instances under the current account will be returned. The number is specified by `Limit` and is 20 by default.</li>
</ul>
 * @method Models\DescribePrometheusInstancesOverviewResponse DescribePrometheusInstancesOverview(Models\DescribePrometheusInstancesOverviewRequest $req) This API is used to obtain the list of Tencent Managed Service for Prometheus (TMP) instances and the clusters associated with them.
 * @method Models\DescribePrometheusRecordRuleYamlResponse DescribePrometheusRecordRuleYaml(Models\DescribePrometheusRecordRuleYamlRequest $req) This API is used to get the YAML list of Prometheus recording rules.
 * @method Models\DescribePrometheusRecordRulesResponse DescribePrometheusRecordRules(Models\DescribePrometheusRecordRulesRequest $req) This API is used to get the list of recording rules, including those created by CRD resources in the associated cluster.
 * @method Models\DescribePrometheusScrapeJobsResponse DescribePrometheusScrapeJobs(Models\DescribePrometheusScrapeJobsRequest $req) This API is used to list Prometheus scrape tasks.
 * @method Models\DescribePrometheusTargetsTMPResponse DescribePrometheusTargetsTMP(Models\DescribePrometheusTargetsTMPRequest $req) This API is used to get the targets information.
 * @method Models\DescribePrometheusTempResponse DescribePrometheusTemp(Models\DescribePrometheusTempRequest $req) This API is used to get the list of templates, where the default template is always on top.
 * @method Models\DescribePrometheusTempSyncResponse DescribePrometheusTempSync(Models\DescribePrometheusTempSyncRequest $req) This API is used to get the information of instances associated with a template. It takes effect for v2 instances.
 * @method Models\DescribePrometheusZonesResponse DescribePrometheusZones(Models\DescribePrometheusZonesRequest $req) This API is used to list the AZs of Tencent Managed Service for Prometheus (TMP).
 * @method Models\DescribeRecordingRulesResponse DescribeRecordingRules(Models\DescribeRecordingRulesRequest $req) This API is used to query Prometheus recording rules by filter.
 * @method Models\DescribeSSOAccountResponse DescribeSSOAccount(Models\DescribeSSOAccountRequest $req) This API is used to list all authorized accounts of the current Grafana instance.
 * @method Models\DescribeServiceDiscoveryResponse DescribeServiceDiscovery(Models\DescribeServiceDiscoveryRequest $req) This API is used to list Prometheus scrape configurations in TKE.
<p>Note: The prerequisite is that the corresponding TKE service has been integrated through the Prometheus console. For more information, see
<a href="https://intl.cloud.tencent.com/document/product/248/48859?from_cn_redirect=1" target="_blank">Agent Management</a>.</p>
 * @method Models\DescribeStatisticDataResponse DescribeStatisticData(Models\DescribeStatisticDataRequest $req) This API is used to query monitoring data by dimension conditions.
 * @method Models\DestroyPrometheusInstanceResponse DestroyPrometheusInstance(Models\DestroyPrometheusInstanceRequest $req) This API is used to delete the data of a Prometheus instance. The specified instance must be terminated first.
 * @method Models\EnableGrafanaInternetResponse EnableGrafanaInternet(Models\EnableGrafanaInternetRequest $req) This API is used to set the Grafana public network access.
 * @method Models\EnableGrafanaSSOResponse EnableGrafanaSSO(Models\EnableGrafanaSSORequest $req) This API is used to set the Grafana SSO through a Tencent Cloud account.
 * @method Models\EnableSSOCamCheckResponse EnableSSOCamCheck(Models\EnableSSOCamCheckRequest $req) This API is used to set whether to enable CAM authentication during SSO.
 * @method Models\GetMonitorDataResponse GetMonitorData(Models\GetMonitorDataRequest $req) This API is used to get the monitoring data of Tencent Cloud services except TKE. To pull TKE’s monitoring data, use the [DescribeStatisticData](https://www.tencentcloud.com/document/product/248/39481) API.
You can get the monitoring data of a Tencent Cloud service by passing in its namespace, object dimension description, and monitoring metrics.
API call rate limit: 20 calls/second (1,200 calls/minute). A single request can get the data of up to 10 instances for up to 1,440 data points.
If you need to call a large number of APIs to pull metrics or objects at a time, some APIs may fail to be called due to the rate limit. We suggest you evenly arrange API calls at a time granularity.

 * @method Models\GetPrometheusAgentManagementCommandResponse GetPrometheusAgentManagementCommand(Models\GetPrometheusAgentManagementCommandRequest $req) This API is used to get the command line for Prometheus agent management.
 * @method Models\InstallPluginsResponse InstallPlugins(Models\InstallPluginsRequest $req) This API is used to install a Grafana plugin.
 * @method Models\ModifyAlarmNoticeResponse ModifyAlarmNotice(Models\ModifyAlarmNoticeRequest $req) This API is used to edit an alarm notification template.
 * @method Models\ModifyAlarmPolicyConditionResponse ModifyAlarmPolicyCondition(Models\ModifyAlarmPolicyConditionRequest $req) This API is used to modify the trigger condition of an alarm policy.
 * @method Models\ModifyAlarmPolicyInfoResponse ModifyAlarmPolicyInfo(Models\ModifyAlarmPolicyInfoRequest $req) This API is used to edit the basic information of a v2.0 alarm policy, including policy name and remarks.
 * @method Models\ModifyAlarmPolicyNoticeResponse ModifyAlarmPolicyNotice(Models\ModifyAlarmPolicyNoticeRequest $req) This API is used to modify the alarm notification template bound to an alarm policy.
 * @method Models\ModifyAlarmPolicyStatusResponse ModifyAlarmPolicyStatus(Models\ModifyAlarmPolicyStatusRequest $req) This API is used to enable/disable an alarm policy.
 * @method Models\ModifyAlarmPolicyTasksResponse ModifyAlarmPolicyTasks(Models\ModifyAlarmPolicyTasksRequest $req) This API is used to modify the tasks triggered by alarm policy, which are listed by the value of the `TriggerTasks` field. If an empty array is passed in for `TriggerTasks`, it means unbinding all the trigger tasks from the policy.
 * @method Models\ModifyAlarmReceiversResponse ModifyAlarmReceivers(Models\ModifyAlarmReceiversRequest $req) This API is used to modify alarm recipients.
 * @method Models\ModifyGrafanaInstanceResponse ModifyGrafanaInstance(Models\ModifyGrafanaInstanceRequest $req) This API is used to modify the attributes of a Grafana instance.
 * @method Models\ModifyPolicyGroupResponse ModifyPolicyGroup(Models\ModifyPolicyGroupRequest $req) This API is used to update policy group.
 * @method Models\ModifyPrometheusAgentExternalLabelsResponse ModifyPrometheusAgentExternalLabels(Models\ModifyPrometheusAgentExternalLabelsRequest $req) This API is used to modify the external labels of the associated cluster.
 * @method Models\ModifyPrometheusAlertPolicyResponse ModifyPrometheusAlertPolicy(Models\ModifyPrometheusAlertPolicyRequest $req) This API is used to modify a TMP 2.0 instance alerting rule.
 * @method Models\ModifyPrometheusConfigResponse ModifyPrometheusConfig(Models\ModifyPrometheusConfigRequest $req) This API is used to modify the Prometheus configuration. If there are no configuration items, one will be added.
 * @method Models\ModifyPrometheusGlobalNotificationResponse ModifyPrometheusGlobalNotification(Models\ModifyPrometheusGlobalNotificationRequest $req) This API is used to modify the global alert notification channel.
 * @method Models\ModifyPrometheusInstanceAttributesResponse ModifyPrometheusInstanceAttributes(Models\ModifyPrometheusInstanceAttributesRequest $req) This API is used to modify the attributes of a Prometheus instance.
 * @method Models\ModifyPrometheusRecordRuleYamlResponse ModifyPrometheusRecordRuleYaml(Models\ModifyPrometheusRecordRuleYamlRequest $req) This API is used to modify a Prometheus recording instance through YAML.
 * @method Models\ModifyPrometheusTempResponse ModifyPrometheusTemp(Models\ModifyPrometheusTempRequest $req) This API is used to modify a template.
 * @method Models\ResumeGrafanaInstanceResponse ResumeGrafanaInstance(Models\ResumeGrafanaInstanceRequest $req) This API is used to renew a monthly subscribed TCMG instance for a month without changing the instance edition. It doesn't apply to running instances.
 * @method Models\RunPrometheusInstanceResponse RunPrometheusInstance(Models\RunPrometheusInstanceRequest $req) This API is used to initialize a TMP instance, which is called when the integration center is enabled.
 * @method Models\SendCustomAlarmMsgResponse SendCustomAlarmMsg(Models\SendCustomAlarmMsgRequest $req) This API is used to send a custom alarm notification.
 * @method Models\SetDefaultAlarmPolicyResponse SetDefaultAlarmPolicy(Models\SetDefaultAlarmPolicyRequest $req) This API is used to set an alarm policy as the default policy in the current policy type under the current project.
Alarm policies in the same type under the project will be set as non-default.
 * @method Models\SyncPrometheusTempResponse SyncPrometheusTemp(Models\SyncPrometheusTempRequest $req) This API is used to sync a template to an instance or cluster. It takes effect for v2 instances.
 * @method Models\TerminatePrometheusInstancesResponse TerminatePrometheusInstances(Models\TerminatePrometheusInstancesRequest $req) This API is used to terminate a pay-as-you-go Prometheus instance.
 * @method Models\UnBindingAllPolicyObjectResponse UnBindingAllPolicyObject(Models\UnBindingAllPolicyObjectRequest $req) This API is used to delete all bound objects.
 * @method Models\UnBindingPolicyObjectResponse UnBindingPolicyObject(Models\UnBindingPolicyObjectRequest $req) This API is used to delete an object that is bound to a policy.
 * @method Models\UnbindPrometheusManagedGrafanaResponse UnbindPrometheusManagedGrafana(Models\UnbindPrometheusManagedGrafanaRequest $req) This API is used to unbind a Grafana instance from an instance.
 * @method Models\UninstallGrafanaDashboardResponse UninstallGrafanaDashboard(Models\UninstallGrafanaDashboardRequest $req) This API is used to delete a Grafana dashboard.
 * @method Models\UninstallGrafanaPluginsResponse UninstallGrafanaPlugins(Models\UninstallGrafanaPluginsRequest $req) This API is used to delete installed plugins.
 * @method Models\UpdateAlertRuleResponse UpdateAlertRule(Models\UpdateAlertRuleRequest $req) This API is used to update a Prometheus alerting rule.

Note that alert object and alert message are special fields of Prometheus Rule Annotations, which need to be passed in through `annotations` and correspond to `summary` and `description` keys respectively. For more information, see [Alerting rules](https://prometheus.io/docs/prometheus/latest/configuration/alerting_rules/).
 * @method Models\UpdateAlertRuleStateResponse UpdateAlertRuleState(Models\UpdateAlertRuleStateRequest $req) This API is used to update the status of a Prometheus alerting rule.
 * @method Models\UpdateDNSConfigResponse UpdateDNSConfig(Models\UpdateDNSConfigRequest $req) This API is used to update the Grafana DNS configuration.
 * @method Models\UpdateExporterIntegrationResponse UpdateExporterIntegration(Models\UpdateExporterIntegrationRequest $req) This API is used to update the exporter integration configuration.
 * @method Models\UpdateGrafanaConfigResponse UpdateGrafanaConfig(Models\UpdateGrafanaConfigRequest $req) This API is used to update the Grafana configuration.
 * @method Models\UpdateGrafanaEnvironmentsResponse UpdateGrafanaEnvironments(Models\UpdateGrafanaEnvironmentsRequest $req) This API is used to update Grafana environment variables.
 * @method Models\UpdateGrafanaIntegrationResponse UpdateGrafanaIntegration(Models\UpdateGrafanaIntegrationRequest $req) This API is used to update the Grafana integration configuration.
 * @method Models\UpdateGrafanaNotificationChannelResponse UpdateGrafanaNotificationChannel(Models\UpdateGrafanaNotificationChannelRequest $req) This API is used to update the Grafana notification channel.
 * @method Models\UpdateGrafanaWhiteListResponse UpdateGrafanaWhiteList(Models\UpdateGrafanaWhiteListRequest $req) This API is used to update the Grafana allowlist.
 * @method Models\UpdatePrometheusAgentStatusResponse UpdatePrometheusAgentStatus(Models\UpdatePrometheusAgentStatusRequest $req) This API is used to update the status of a Prometheus CVM agent.
 * @method Models\UpdatePrometheusScrapeJobResponse UpdatePrometheusScrapeJob(Models\UpdatePrometheusScrapeJobRequest $req) This API is used to update a Prometheus scrape task.
 * @method Models\UpdateRecordingRuleResponse UpdateRecordingRule(Models\UpdateRecordingRuleRequest $req) This API is used to update a Prometheus recording rule.
 * @method Models\UpdateSSOAccountResponse UpdateSSOAccount(Models\UpdateSSOAccountRequest $req) This API is used to update the remarks and permission information of an authorized account in an overwriting manner.
 * @method Models\UpgradeGrafanaDashboardResponse UpgradeGrafanaDashboard(Models\UpgradeGrafanaDashboardRequest $req) This API is used to update a Grafana dashboard.
 * @method Models\UpgradeGrafanaInstanceResponse UpgradeGrafanaInstance(Models\UpgradeGrafanaInstanceRequest $req) This API is used to upgrade a Grafana instance.
 */

class MonitorClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "monitor.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "monitor";

    /**
     * @var string
     */
    protected $version = "2018-07-24";

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
        $respClass = "TencentCloud"."\\".ucfirst("monitor")."\\"."V20180724\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
