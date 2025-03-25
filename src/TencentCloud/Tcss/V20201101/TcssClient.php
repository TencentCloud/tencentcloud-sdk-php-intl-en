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

namespace TencentCloud\Tcss\V20201101;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcss\V20201101\Models as Models;

/**
 * @method Models\AddAndPublishNetworkFirewallPolicyDetailResponse AddAndPublishNetworkFirewallPolicyDetail(Models\AddAndPublishNetworkFirewallPolicyDetailRequest $req) This API is used to create a task to add and publish a network policy in the container network.
 * @method Models\AddAndPublishNetworkFirewallPolicyYamlDetailResponse AddAndPublishNetworkFirewallPolicyYamlDetail(Models\AddAndPublishNetworkFirewallPolicyYamlDetailRequest $req) This API is used to create a task to configure and publish a YAML network policy in the container network.
 * @method Models\AddAssetImageRegistryRegistryDetailResponse AddAssetImageRegistryRegistryDetail(Models\AddAssetImageRegistryRegistryDetailRequest $req) This API is used to add the details of an image repository.
 * @method Models\AddComplianceAssetPolicySetToWhitelistResponse AddComplianceAssetPolicySetToWhitelist(Models\AddComplianceAssetPolicySetToWhitelistRequest $req) This API is used to ignore the specified asset IDs and check item IDs so as to hide the assets contained in the specified check items.
`AddCompliancePolicyItemToWhitelist` is the reference API. Except for the input field, others should be the same, and if not, it may be due to the definition.
 * @method Models\AddCompliancePolicyAssetSetToWhitelistResponse AddCompliancePolicyAssetSetToWhitelist(Models\AddCompliancePolicyAssetSetToWhitelistRequest $req) This API is used to ignore the specified asset IDs and check item IDs so as to hide the assets contained in the specified check items.
`AddCompliancePolicyItemToWhitelist` is the reference API. Except for the input field, others should be the same, and if not, it may be due to the definition.
 * @method Models\AddCompliancePolicyItemToWhitelistResponse AddCompliancePolicyItemToWhitelist(Models\AddCompliancePolicyItemToWhitelistRequest $req) This API is used to add the specified check item IDs to the allowlist so as to hide the failure result.
 * @method Models\AddEditAbnormalProcessRuleResponse AddEditAbnormalProcessRule(Models\AddEditAbnormalProcessRuleRequest $req) This API is used to add or edit an abnormal process policy at runtime.
 * @method Models\AddEditAccessControlRuleResponse AddEditAccessControlRule(Models\AddEditAccessControlRuleRequest $req) This API is used to add or edit an access control policy at runtime.
 * @method Models\AddEditImageAutoAuthorizedRuleResponse AddEditImageAutoAuthorizedRule(Models\AddEditImageAutoAuthorizedRuleRequest $req) This API is used to add or edit an automatic licensing rule for local images.
 * @method Models\AddEditReverseShellWhiteListResponse AddEditReverseShellWhiteList(Models\AddEditReverseShellWhiteListRequest $req) This API is used to add or edit an allowed reverse shell at runtime.
 * @method Models\AddEditRiskSyscallWhiteListResponse AddEditRiskSyscallWhiteList(Models\AddEditRiskSyscallWhiteListRequest $req) This API is used to add or edit an allowed high-risk syscall at runtime.
 * @method Models\AddEditWarningRulesResponse AddEditWarningRules(Models\AddEditWarningRulesRequest $req) This API is used to add or edit an alert policy.
 * @method Models\AddEscapeWhiteListResponse AddEscapeWhiteList(Models\AddEscapeWhiteListRequest $req) This API is used to add an allowed escape.
 * @method Models\AddIgnoreVulResponse AddIgnoreVul(Models\AddIgnoreVulRequest $req) This API is used to add ignored vulnerabilities in a vulnerability scan.
 * @method Models\AddNetworkFirewallPolicyDetailResponse AddNetworkFirewallPolicyDetail(Models\AddNetworkFirewallPolicyDetailRequest $req) This API is used to create a task to add a network policy in the container network.
 * @method Models\AddNetworkFirewallPolicyYamlDetailResponse AddNetworkFirewallPolicyYamlDetail(Models\AddNetworkFirewallPolicyYamlDetailRequest $req) This API is used to create a task to add a YAML network policy in the container network.
 * @method Models\CheckNetworkFirewallPolicyYamlResponse CheckNetworkFirewallPolicyYaml(Models\CheckNetworkFirewallPolicyYamlRequest $req) This API is used to create a task to check a YAML network policy in the container network.
 * @method Models\CheckRepeatAssetImageRegistryResponse CheckRepeatAssetImageRegistry(Models\CheckRepeatAssetImageRegistryRequest $req) This API is used to check whether an image repository name is duplicated.
 * @method Models\ConfirmNetworkFirewallPolicyResponse ConfirmNetworkFirewallPolicy(Models\ConfirmNetworkFirewallPolicyRequest $req) This API is used to create a task to confirm a network policy in the container network.
 * @method Models\CreateAbnormalProcessRulesExportJobResponse CreateAbnormalProcessRulesExportJob(Models\CreateAbnormalProcessRulesExportJobRequest $req) This API is used to export abnormal process rules.
 * @method Models\CreateAccessControlsRuleExportJobResponse CreateAccessControlsRuleExportJob(Models\CreateAccessControlsRuleExportJobRequest $req) This API is used to export file tampering detection rules.
 * @method Models\CreateAssetImageRegistryScanTaskResponse CreateAssetImageRegistryScanTask(Models\CreateAssetImageRegistryScanTaskRequest $req) This API is used to create an image scan task for an image repository.
 * @method Models\CreateAssetImageRegistryScanTaskOneKeyResponse CreateAssetImageRegistryScanTaskOneKey(Models\CreateAssetImageRegistryScanTaskOneKeyRequest $req) This API is used to create a quick image scan task for an image repository.
 * @method Models\CreateAssetImageScanSettingResponse CreateAssetImageScanSetting(Models\CreateAssetImageScanSettingRequest $req) This API is used to set an image scan.
 * @method Models\CreateAssetImageScanTaskResponse CreateAssetImageScanTask(Models\CreateAssetImageScanTaskRequest $req) This API is used to create an image scan task.
 * @method Models\CreateAssetImageVirusExportJobResponse CreateAssetImageVirusExportJob(Models\CreateAssetImageVirusExportJobRequest $req) This API is used to create a task to export the list of trojans in a local image.
 * @method Models\CreateCheckComponentResponse CreateCheckComponent(Models\CreateCheckComponentRequest $req) This API is used to install the check component and create a defender.
 * @method Models\CreateClusterCheckTaskResponse CreateClusterCheckTask(Models\CreateClusterCheckTaskRequest $req) This API is used to create a cluster check task to check it for risk items.
 * @method Models\CreateComplianceTaskResponse CreateComplianceTask(Models\CreateComplianceTaskRequest $req) This API is used to create a compliance check task for another check triggered at the asset level.
 * @method Models\CreateComponentExportJobResponse CreateComponentExportJob(Models\CreateComponentExportJobRequest $req) This API is used to export the list of components in a local image.
 * @method Models\CreateDefenceVulExportJobResponse CreateDefenceVulExportJob(Models\CreateDefenceVulExportJobRequest $req) This API is used to create a task to export vulnerabilities that can be prevented.
 * @method Models\CreateEmergencyVulExportJobResponse CreateEmergencyVulExportJob(Models\CreateEmergencyVulExportJobRequest $req) This API is used to create a task to export emergency vulnerabilities.
 * @method Models\CreateEscapeEventsExportJobResponse CreateEscapeEventsExportJob(Models\CreateEscapeEventsExportJobRequest $req) This API is used to create a task to asynchronously export escape events.
 * @method Models\CreateEscapeWhiteListExportJobResponse CreateEscapeWhiteListExportJob(Models\CreateEscapeWhiteListExportJobRequest $req) This API is used to create a task to export the allowlist of escapes.
 * @method Models\CreateExportComplianceStatusListJobResponse CreateExportComplianceStatusListJob(Models\CreateExportComplianceStatusListJobRequest $req) This API is used to create a task to export security compliance information.
 * @method Models\CreateHostExportJobResponse CreateHostExportJob(Models\CreateHostExportJobRequest $req) This API is used to create a task to export the list of servers.
 * @method Models\CreateImageExportJobResponse CreateImageExportJob(Models\CreateImageExportJobRequest $req) This API is used to create an image export task.
 * @method Models\CreateK8sApiAbnormalEventExportJobResponse CreateK8sApiAbnormalEventExportJob(Models\CreateK8sApiAbnormalEventExportJobRequest $req) This API is used to create K8sApi abnormal event export jobs.
 * @method Models\CreateK8sApiAbnormalRuleExportJobResponse CreateK8sApiAbnormalRuleExportJob(Models\CreateK8sApiAbnormalRuleExportJobRequest $req) This API is used to export rules of K8sApi exceptions. 
 * @method Models\CreateK8sApiAbnormalRuleInfoResponse CreateK8sApiAbnormalRuleInfo(Models\CreateK8sApiAbnormalRuleInfoRequest $req) This API is used to create K8sApi abnormal event rules.
 * @method Models\CreateNetworkFirewallClusterRefreshResponse CreateNetworkFirewallClusterRefresh(Models\CreateNetworkFirewallClusterRefreshRequest $req) This API is used to distribute a refresh task in the container network cluster.
 * @method Models\CreateNetworkFirewallPolicyDiscoverResponse CreateNetworkFirewallPolicyDiscover(Models\CreateNetworkFirewallPolicyDiscoverRequest $req) This API is used to create a task to sync a network policy from the container network cluster.
 * @method Models\CreateNetworkFirewallPublishResponse CreateNetworkFirewallPublish(Models\CreateNetworkFirewallPublishRequest $req) This API is used to create a task to publish a network policy in the container network.
 * @method Models\CreateNetworkFirewallUndoPublishResponse CreateNetworkFirewallUndoPublish(Models\CreateNetworkFirewallUndoPublishRequest $req) This API is used to create a task to revoke a network policy in the container network.
 * @method Models\CreateOrModifyPostPayCoresResponse CreateOrModifyPostPayCores(Models\CreateOrModifyPostPayCoresRequest $req) This API is used to create or edit the upper limit for elastic billing.
 * @method Models\CreateProcessEventsExportJobResponse CreateProcessEventsExportJob(Models\CreateProcessEventsExportJobRequest $req) This API is used to create a task to asynchronously export abnormal process events.
 * @method Models\CreateRefreshTaskResponse CreateRefreshTask(Models\CreateRefreshTaskRequest $req) This API is used to distribute a task to refresh the asset information.
 * @method Models\CreateRiskDnsEventExportJobResponse CreateRiskDnsEventExportJob(Models\CreateRiskDnsEventExportJobRequest $req) This API is used to export malicious request events.
 * @method Models\CreateSearchTemplateResponse CreateSearchTemplate(Models\CreateSearchTemplateRequest $req) This API is used to add a search template.
 * @method Models\CreateSystemVulExportJobResponse CreateSystemVulExportJob(Models\CreateSystemVulExportJobRequest $req) This API is used to create a task to export system vulnerabilities.
 * @method Models\CreateVirusScanAgainResponse CreateVirusScanAgain(Models\CreateVirusScanAgainRequest $req) This API is used to perform another virus scan at runtime.
 * @method Models\CreateVirusScanTaskResponse CreateVirusScanTask(Models\CreateVirusScanTaskRequest $req) This API is used to perform a quick virus scan at runtime.
 * @method Models\CreateVulContainerExportJobResponse CreateVulContainerExportJob(Models\CreateVulContainerExportJobRequest $req) This API is used to create a task to export containers affected by vulnerabilities.
 * @method Models\CreateVulDefenceEventExportJobResponse CreateVulDefenceEventExportJob(Models\CreateVulDefenceEventExportJobRequest $req) This API is used to create an exploit prevention event export task.
 * @method Models\CreateVulDefenceHostExportJobResponse CreateVulDefenceHostExportJob(Models\CreateVulDefenceHostExportJobRequest $req) This API is used to create a task to export servers with exploit prevention enabled.
 * @method Models\CreateVulExportJobResponse CreateVulExportJob(Models\CreateVulExportJobRequest $req) This API is used to export the list of vulnerabilities in a local image.
 * @method Models\CreateVulImageExportJobResponse CreateVulImageExportJob(Models\CreateVulImageExportJobRequest $req) This API is used to create a task to export images affected by vulnerabilities.
 * @method Models\CreateVulScanTaskResponse CreateVulScanTask(Models\CreateVulScanTaskRequest $req) This API is used to create a vulnerability scan task.
 * @method Models\CreateWebVulExportJobResponse CreateWebVulExportJob(Models\CreateWebVulExportJobRequest $req) This API is used to create a task to export web vulnerabilities.
 * @method Models\DeleteAbnormalProcessRulesResponse DeleteAbnormalProcessRules(Models\DeleteAbnormalProcessRulesRequest $req) This API is used to delete an abnormal process policy at runtime.
 * @method Models\DeleteAccessControlRulesResponse DeleteAccessControlRules(Models\DeleteAccessControlRulesRequest $req) This API is used to delete an access control policy at runtime.
 * @method Models\DeleteComplianceAssetPolicySetFromWhitelistResponse DeleteComplianceAssetPolicySetFromWhitelist(Models\DeleteComplianceAssetPolicySetFromWhitelistRequest $req) This API is used to unignore the specified asset IDs and check item IDs so as to show the assets contained in the specified check items.
`AddCompliancePolicyAssetSetToWhitelist` is the reference API. Except for the input field, others should be the same, and if not, it may be due to the definition.
 * @method Models\DeleteCompliancePolicyAssetSetFromWhitelistResponse DeleteCompliancePolicyAssetSetFromWhitelist(Models\DeleteCompliancePolicyAssetSetFromWhitelistRequest $req) This API is used to unignore the specified asset IDs and check item IDs so as to show the assets contained in the specified check items.
 * @method Models\DeleteCompliancePolicyItemFromWhitelistResponse DeleteCompliancePolicyItemFromWhitelist(Models\DeleteCompliancePolicyItemFromWhitelistRequest $req) This API is used to remove the specified check item from the allowlist.
 * @method Models\DeleteEscapeWhiteListResponse DeleteEscapeWhiteList(Models\DeleteEscapeWhiteListRequest $req) This API is used to delete an allowed escape.
 * @method Models\DeleteIgnoreVulResponse DeleteIgnoreVul(Models\DeleteIgnoreVulRequest $req) This API is used to unignore vulnerabilities in a vulnerability scan.
 * @method Models\DeleteK8sApiAbnormalRuleResponse DeleteK8sApiAbnormalRule(Models\DeleteK8sApiAbnormalRuleRequest $req) This API is used to delete a K8sApi abnormal event rules.
 * @method Models\DeleteMachineResponse DeleteMachine(Models\DeleteMachineRequest $req) This API is used to uninstall the agent.
 * @method Models\DeleteNetworkFirewallPolicyDetailResponse DeleteNetworkFirewallPolicyDetail(Models\DeleteNetworkFirewallPolicyDetailRequest $req) This API is used to create a task to delete a network policy in the container network.
 * @method Models\DeleteReverseShellEventsResponse DeleteReverseShellEvents(Models\DeleteReverseShellEventsRequest $req) This API is used to delete a reverse shell event at runtime.
 * @method Models\DeleteReverseShellWhiteListsResponse DeleteReverseShellWhiteLists(Models\DeleteReverseShellWhiteListsRequest $req) This API is used to delete an allowed reverse shell at runtime.
 * @method Models\DeleteRiskSyscallEventsResponse DeleteRiskSyscallEvents(Models\DeleteRiskSyscallEventsRequest $req) This API is used to delete a high-risk syscall event at runtime.
 * @method Models\DeleteRiskSyscallWhiteListsResponse DeleteRiskSyscallWhiteLists(Models\DeleteRiskSyscallWhiteListsRequest $req) This API is used to delete an allowed high-risk syscall at runtime.
 * @method Models\DeleteSearchTemplateResponse DeleteSearchTemplate(Models\DeleteSearchTemplateRequest $req) This API is used to delete a search template.
 * @method Models\DescribeABTestConfigResponse DescribeABTestConfig(Models\DescribeABTestConfigRequest $req) This API is used to get the current canary configuration of the user.
 * @method Models\DescribeAbnormalProcessDetailResponse DescribeAbnormalProcessDetail(Models\DescribeAbnormalProcessDetailRequest $req) This API is used to query the details of an abnormal process event at runtime.
 * @method Models\DescribeAbnormalProcessEventTendencyResponse DescribeAbnormalProcessEventTendency(Models\DescribeAbnormalProcessEventTendencyRequest $req) This API is used to query the trend of pending abnormal process events.
 * @method Models\DescribeAbnormalProcessEventsResponse DescribeAbnormalProcessEvents(Models\DescribeAbnormalProcessEventsRequest $req) This API is used to query the list of abnormal process events at runtime.
 * @method Models\DescribeAbnormalProcessEventsExportResponse DescribeAbnormalProcessEventsExport(Models\DescribeAbnormalProcessEventsExportRequest $req) 接口已废弃

This API is used to query and export the list of abnormal process events at runtime.
 * @method Models\DescribeAbnormalProcessLevelSummaryResponse DescribeAbnormalProcessLevelSummary(Models\DescribeAbnormalProcessLevelSummaryRequest $req) This API is used to count the number of pending abnormal process events at each severity level.
 * @method Models\DescribeAbnormalProcessRuleDetailResponse DescribeAbnormalProcessRuleDetail(Models\DescribeAbnormalProcessRuleDetailRequest $req) This API is used to query the details of an abnormal process policy at runtime.
 * @method Models\DescribeAbnormalProcessRulesResponse DescribeAbnormalProcessRules(Models\DescribeAbnormalProcessRulesRequest $req) This API is used to query the list of abnormal process policies at runtime.
 * @method Models\DescribeAbnormalProcessRulesExportResponse DescribeAbnormalProcessRulesExport(Models\DescribeAbnormalProcessRulesExportRequest $req) 接口已废弃

This API is used to query and export the list of abnormal process policies at runtime.
 * @method Models\DescribeAccessControlDetailResponse DescribeAccessControlDetail(Models\DescribeAccessControlDetailRequest $req) This API is used to query the details of an access control event at runtime.
 * @method Models\DescribeAccessControlEventsResponse DescribeAccessControlEvents(Models\DescribeAccessControlEventsRequest $req) This API is used to query the list of access control events at runtime.
 * @method Models\DescribeAccessControlEventsExportResponse DescribeAccessControlEventsExport(Models\DescribeAccessControlEventsExportRequest $req) This API is used to export the list of access control events at runtime.
 * @method Models\DescribeAccessControlRuleDetailResponse DescribeAccessControlRuleDetail(Models\DescribeAccessControlRuleDetailRequest $req) This API is used to query the details of an access control policy at runtime.
 * @method Models\DescribeAccessControlRulesResponse DescribeAccessControlRules(Models\DescribeAccessControlRulesRequest $req) This API is used to query the list of access control policies at runtime.
 * @method Models\DescribeAccessControlRulesExportResponse DescribeAccessControlRulesExport(Models\DescribeAccessControlRulesExportRequest $req) 接口已废弃

This API is used to export the list of access control policies at runtime.
 * @method Models\DescribeAffectedClusterCountResponse DescribeAffectedClusterCount(Models\DescribeAffectedClusterCountRequest $req) This API is used to get and return the number of affected clusters.
 * @method Models\DescribeAffectedNodeListResponse DescribeAffectedNodeList(Models\DescribeAffectedNodeListRequest $req) This API is used to query affected node types and return the node list.
 * @method Models\DescribeAffectedWorkloadListResponse DescribeAffectedWorkloadList(Models\DescribeAffectedWorkloadListRequest $req) This API is used to query affected workload types and return the workload list.
 * @method Models\DescribeAgentDaemonSetCmdResponse DescribeAgentDaemonSetCmd(Models\DescribeAgentDaemonSetCmdRequest $req) This API is used to query parallel container installation commands.
 * @method Models\DescribeAgentInstallCommandResponse DescribeAgentInstallCommand(Models\DescribeAgentInstallCommandRequest $req) This API is used to query agent installation commands.
 * @method Models\DescribeAssetAppServiceListResponse DescribeAssetAppServiceList(Models\DescribeAssetAppServiceListRequest $req) This API is used to query the list of application services.
 * @method Models\DescribeAssetClusterListResponse DescribeAssetClusterList(Models\DescribeAssetClusterListRequest $req) This API is used to query the list of clusters.
 * @method Models\DescribeAssetComponentListResponse DescribeAssetComponentList(Models\DescribeAssetComponentListRequest $req) This API is used to query the list of container components.
 * @method Models\DescribeAssetContainerDetailResponse DescribeAssetContainerDetail(Models\DescribeAssetContainerDetailRequest $req) This API is used to query the information of a container.
 * @method Models\DescribeAssetContainerListResponse DescribeAssetContainerList(Models\DescribeAssetContainerListRequest $req) This API is used to query the list of containers.
 * @method Models\DescribeAssetDBServiceListResponse DescribeAssetDBServiceList(Models\DescribeAssetDBServiceListRequest $req) This API is used to query the list of database services.
 * @method Models\DescribeAssetHostDetailResponse DescribeAssetHostDetail(Models\DescribeAssetHostDetailRequest $req) This API is used to query the details of a server.
 * @method Models\DescribeAssetHostListResponse DescribeAssetHostList(Models\DescribeAssetHostListRequest $req) This API is used to query the list of servers.
 * @method Models\DescribeAssetImageBindRuleInfoResponse DescribeAssetImageBindRuleInfo(Models\DescribeAssetImageBindRuleInfoRequest $req) This API is used to query the list of rules bound to images, including runtime access control and abnormal process rules.
 * @method Models\DescribeAssetImageDetailResponse DescribeAssetImageDetail(Models\DescribeAssetImageDetailRequest $req) This API is used to query the details of an image.
 * @method Models\DescribeAssetImageHostListResponse DescribeAssetImageHostList(Models\DescribeAssetImageHostListRequest $req) This API is used to query the servers associated with an image.
 * @method Models\DescribeAssetImageListResponse DescribeAssetImageList(Models\DescribeAssetImageListRequest $req) This API is used to query the list of images.
 * @method Models\DescribeAssetImageListExportResponse DescribeAssetImageListExport(Models\DescribeAssetImageListExportRequest $req) 接口已废弃

This API is used to export the list of images.
 * @method Models\DescribeAssetImageRegistryAssetStatusResponse DescribeAssetImageRegistryAssetStatus(Models\DescribeAssetImageRegistryAssetStatusRequest $req) This API is used to view the update progress of the assets in an image repository.
 * @method Models\DescribeAssetImageRegistryDetailResponse DescribeAssetImageRegistryDetail(Models\DescribeAssetImageRegistryDetailRequest $req) This API is used to query the image repository details.
 * @method Models\DescribeAssetImageRegistryListResponse DescribeAssetImageRegistryList(Models\DescribeAssetImageRegistryListRequest $req) This API is used to query the list of image repositories.
 * @method Models\DescribeAssetImageRegistryListExportResponse DescribeAssetImageRegistryListExport(Models\DescribeAssetImageRegistryListExportRequest $req) This API is used to export the list of images for an image repository.
 * @method Models\DescribeAssetImageRegistryRegistryDetailResponse DescribeAssetImageRegistryRegistryDetail(Models\DescribeAssetImageRegistryRegistryDetailRequest $req) This API is used to view the details of an image repository.
 * @method Models\DescribeAssetImageRegistryRegistryListResponse DescribeAssetImageRegistryRegistryList(Models\DescribeAssetImageRegistryRegistryListRequest $req) This API is used to query the list of image registries.
 * @method Models\DescribeAssetImageRegistryRiskInfoListResponse DescribeAssetImageRegistryRiskInfoList(Models\DescribeAssetImageRegistryRiskInfoListRequest $req) This API is used to query the list of image high-risk behaviors of an image repository.
 * @method Models\DescribeAssetImageRegistryRiskListExportResponse DescribeAssetImageRegistryRiskListExport(Models\DescribeAssetImageRegistryRiskListExportRequest $req) This API is used to export the list of sensitive data for an image repository.
 * @method Models\DescribeAssetImageRegistryScanStatusOneKeyResponse DescribeAssetImageRegistryScanStatusOneKey(Models\DescribeAssetImageRegistryScanStatusOneKeyRequest $req) This API is used to query the quick image scanning status of an image repository.
 * @method Models\DescribeAssetImageRegistrySummaryResponse DescribeAssetImageRegistrySummary(Models\DescribeAssetImageRegistrySummaryRequest $req) This API is used to query the image statistics of an image repository.
 * @method Models\DescribeAssetImageRegistryVirusListResponse DescribeAssetImageRegistryVirusList(Models\DescribeAssetImageRegistryVirusListRequest $req) This API is used to query the list of viruses and trojans in an image repository.
 * @method Models\DescribeAssetImageRegistryVirusListExportResponse DescribeAssetImageRegistryVirusListExport(Models\DescribeAssetImageRegistryVirusListExportRequest $req) This API is used to export the list of trojan information for an image repository.
 * @method Models\DescribeAssetImageRegistryVulListResponse DescribeAssetImageRegistryVulList(Models\DescribeAssetImageRegistryVulListRequest $req) This API is used to query the list of image vulnerabilities of an image repository
 * @method Models\DescribeAssetImageRegistryVulListExportResponse DescribeAssetImageRegistryVulListExport(Models\DescribeAssetImageRegistryVulListExportRequest $req) This API is used to export the list of vulnerabilities for an image repository.
 * @method Models\DescribeAssetImageRiskListResponse DescribeAssetImageRiskList(Models\DescribeAssetImageRiskListRequest $req) This API is used to query the list of risks in an image.
 * @method Models\DescribeAssetImageRiskListExportResponse DescribeAssetImageRiskListExport(Models\DescribeAssetImageRiskListExportRequest $req) This API is used to export the list of risks in an image.
 * @method Models\DescribeAssetImageScanSettingResponse DescribeAssetImageScanSetting(Models\DescribeAssetImageScanSettingRequest $req) This API is used to get the image scan settings.
 * @method Models\DescribeAssetImageScanStatusResponse DescribeAssetImageScanStatus(Models\DescribeAssetImageScanStatusRequest $req) This API is used to query the image scanning status.
 * @method Models\DescribeAssetImageScanTaskResponse DescribeAssetImageScanTask(Models\DescribeAssetImageScanTaskRequest $req) This API is used to query the ID of a running quick image scan task.
 * @method Models\DescribeAssetImageSimpleListResponse DescribeAssetImageSimpleList(Models\DescribeAssetImageSimpleListRequest $req) This API is used to query the brief information list of an image.
 * @method Models\DescribeAssetImageVirusListResponse DescribeAssetImageVirusList(Models\DescribeAssetImageVirusListRequest $req) This API is used to query the list of viruses in an image.
 * @method Models\DescribeAssetImageVirusListExportResponse DescribeAssetImageVirusListExport(Models\DescribeAssetImageVirusListExportRequest $req) This API is used to export the list of trojans in an image.
 * @method Models\DescribeAssetImageVulListResponse DescribeAssetImageVulList(Models\DescribeAssetImageVulListRequest $req) This API is used to query the list of vulnerabilities in an image.
 * @method Models\DescribeAssetImageVulListExportResponse DescribeAssetImageVulListExport(Models\DescribeAssetImageVulListExportRequest $req) This API is used to export the list of vulnerabilities in an image.
 * @method Models\DescribeAssetPortListResponse DescribeAssetPortList(Models\DescribeAssetPortListRequest $req) This API is used to query the list of occupied ports.
 * @method Models\DescribeAssetProcessListResponse DescribeAssetProcessList(Models\DescribeAssetProcessListRequest $req) This API is used to query the list of processes.
 * @method Models\DescribeAssetSummaryResponse DescribeAssetSummary(Models\DescribeAssetSummaryRequest $req) This API is used to query the statistics of containers and images under an account.
 * @method Models\DescribeAssetSyncLastTimeResponse DescribeAssetSyncLastTime(Models\DescribeAssetSyncLastTimeRequest $req) This API is used to query the last asset sync time.
 * @method Models\DescribeAssetWebServiceListResponse DescribeAssetWebServiceList(Models\DescribeAssetWebServiceListRequest $req) This API is used to query the list of web services.
 * @method Models\DescribeAutoAuthorizedRuleHostResponse DescribeAutoAuthorizedRuleHost(Models\DescribeAutoAuthorizedRuleHostRequest $req) This API is used to query the servers licensed according to an automatic licensing rule.
 * @method Models\DescribeCheckItemListResponse DescribeCheckItemList(Models\DescribeCheckItemListRequest $req) This API is used to query all check items and return the total number and list of check items.
 * @method Models\DescribeClusterDetailResponse DescribeClusterDetail(Models\DescribeClusterDetailRequest $req) This API is used to query the details of a cluster.
 * @method Models\DescribeClusterSummaryResponse DescribeClusterSummary(Models\DescribeClusterSummaryRequest $req) This API is used to query the overview of cluster assets.
 * @method Models\DescribeComplianceAssetDetailInfoResponse DescribeComplianceAssetDetailInfo(Models\DescribeComplianceAssetDetailInfoRequest $req) This API is used to query the details of an asset.
 * @method Models\DescribeComplianceAssetListResponse DescribeComplianceAssetList(Models\DescribeComplianceAssetListRequest $req) This API is used to query the list of assets of a certain type.
 * @method Models\DescribeComplianceAssetPolicyItemListResponse DescribeComplianceAssetPolicyItemList(Models\DescribeComplianceAssetPolicyItemListRequest $req) This API is used to query the list of check items of an asset.
 * @method Models\DescribeCompliancePeriodTaskListResponse DescribeCompliancePeriodTaskList(Models\DescribeCompliancePeriodTaskListRequest $req) This API is used to query the list of scheduled tasks.
 * @method Models\DescribeCompliancePolicyItemAffectedAssetListResponse DescribeCompliancePolicyItemAffectedAssetList(Models\DescribeCompliancePolicyItemAffectedAssetListRequest $req) This API is used to apply the asset level in the "check item + asset" two-level structure.
 * @method Models\DescribeCompliancePolicyItemAffectedSummaryResponse DescribeCompliancePolicyItemAffectedSummary(Models\DescribeCompliancePolicyItemAffectedSummaryRequest $req) This API is used to apply the check item level in the "check item + asset" two-level structure.
 * @method Models\DescribeComplianceScanFailedAssetListResponse DescribeComplianceScanFailedAssetList(Models\DescribeComplianceScanFailedAssetListRequest $req) This API is used to query the aggregate information of the pass rate at the asset level, the first level in the "asset + check item" two-level structure.
 * @method Models\DescribeComplianceTaskAssetSummaryResponse DescribeComplianceTaskAssetSummary(Models\DescribeComplianceTaskAssetSummaryRequest $req) This API is used to query the aggregated information of the asset pass rate in the last task.
 * @method Models\DescribeComplianceTaskPolicyItemSummaryListResponse DescribeComplianceTaskPolicyItemSummaryList(Models\DescribeComplianceTaskPolicyItemSummaryListRequest $req) This API is used to query the list of aggregated information of check items identified in the last task in line with the "check item + asset" two-level structure.
 * @method Models\DescribeComplianceWhitelistItemListResponse DescribeComplianceWhitelistItemList(Models\DescribeComplianceWhitelistItemListRequest $req) This API is used to query the allowlist.
 * @method Models\DescribeContainerAssetSummaryResponse DescribeContainerAssetSummary(Models\DescribeContainerAssetSummaryRequest $req) This API is used to query the asset overview.
 * @method Models\DescribeContainerSecEventSummaryResponse DescribeContainerSecEventSummary(Models\DescribeContainerSecEventSummaryRequest $req) This API is used to query the overview of pending events.
 * @method Models\DescribeESAggregationsResponse DescribeESAggregations(Models\DescribeESAggregationsRequest $req) This API is used to get the aggregation result of the ES field.
 * @method Models\DescribeESHitsResponse DescribeESHits(Models\DescribeESHitsRequest $req) This API is used to get the list of ES query files.
 * @method Models\DescribeEmergencyVulListResponse DescribeEmergencyVulList(Models\DescribeEmergencyVulListRequest $req) This API is used to query the list of emergency vulnerabilities.
 * @method Models\DescribeEscapeEventDetailResponse DescribeEscapeEventDetail(Models\DescribeEscapeEventDetailRequest $req) This API is used to query the details of a container escape event.
 * @method Models\DescribeEscapeEventInfoResponse DescribeEscapeEventInfo(Models\DescribeEscapeEventInfoRequest $req) This API is used to query the list of container escape events.
 * @method Models\DescribeEscapeEventTendencyResponse DescribeEscapeEventTendency(Models\DescribeEscapeEventTendencyRequest $req) This API is used to query the trend of pending escape events.
 * @method Models\DescribeEscapeEventTypeSummaryResponse DescribeEscapeEventTypeSummary(Models\DescribeEscapeEventTypeSummaryRequest $req) This API is used to query the types of container escape events and the number of pending events.
 * @method Models\DescribeEscapeEventsExportResponse DescribeEscapeEventsExport(Models\DescribeEscapeEventsExportRequest $req) 接口已废弃

This API is used to export the list of container escape events.
 * @method Models\DescribeEscapeRuleInfoResponse DescribeEscapeRuleInfo(Models\DescribeEscapeRuleInfoRequest $req) This API is used to query the information of a container escape scan rule.
 * @method Models\DescribeEscapeSafeStateResponse DescribeEscapeSafeState(Models\DescribeEscapeSafeStateRequest $req) This API is used to query the container escape security status.
 * @method Models\DescribeEscapeWhiteListResponse DescribeEscapeWhiteList(Models\DescribeEscapeWhiteListRequest $req) This API is used to query the allowlist of escapes.
 * @method Models\DescribeExportJobDownloadURLResponse DescribeExportJobDownloadURL(Models\DescribeExportJobDownloadURLRequest $req) This API is used to query the URL to download the result of an exportation task.
 * @method Models\DescribeExportJobManageListResponse DescribeExportJobManageList(Models\DescribeExportJobManageListRequest $req) This API is used to query the export job management list.
 * @method Models\DescribeExportJobResultResponse DescribeExportJobResult(Models\DescribeExportJobResultRequest $req) This API is used to query the result of an export task.
 * @method Models\DescribeImageAuthorizedInfoResponse DescribeImageAuthorizedInfo(Models\DescribeImageAuthorizedInfoRequest $req) This API is used to query the image licensing information.
 * @method Models\DescribeImageAutoAuthorizedLogListResponse DescribeImageAutoAuthorizedLogList(Models\DescribeImageAutoAuthorizedLogListRequest $req) This API is used to query the list of automatic image licensing results.
 * @method Models\DescribeImageAutoAuthorizedRuleResponse DescribeImageAutoAuthorizedRule(Models\DescribeImageAutoAuthorizedRuleRequest $req) This API is used to query an automatic licensing rule for local images.
 * @method Models\DescribeImageAutoAuthorizedTaskListResponse DescribeImageAutoAuthorizedTaskList(Models\DescribeImageAutoAuthorizedTaskListRequest $req) This API is used to query the list of automatic image licensing tasks.
 * @method Models\DescribeImageComponentListResponse DescribeImageComponentList(Models\DescribeImageComponentListRequest $req) This API is used to query the list of components in an local image.
 * @method Models\DescribeImageRegistryNamespaceListResponse DescribeImageRegistryNamespaceList(Models\DescribeImageRegistryNamespaceListRequest $req) This API is used to query the list of namespaces for an image repository.
 * @method Models\DescribeImageRegistryTimingScanTaskResponse DescribeImageRegistryTimingScanTask(Models\DescribeImageRegistryTimingScanTaskRequest $req) This API is used to view a scheduled task of an image repository.
 * @method Models\DescribeImageRiskSummaryResponse DescribeImageRiskSummary(Models\DescribeImageRiskSummaryRequest $req) This API is used to query the overview of local image risks.
 * @method Models\DescribeImageRiskTendencyResponse DescribeImageRiskTendency(Models\DescribeImageRiskTendencyRequest $req) This API is used to query the trend of local image risks.
 * @method Models\DescribeImageSimpleListResponse DescribeImageSimpleList(Models\DescribeImageSimpleListRequest $req) This API is used to query the list of all images.
 * @method Models\DescribeIndexListResponse DescribeIndexList(Models\DescribeIndexListRequest $req) This API is used to get the index list.
 * @method Models\DescribeInspectionReportResponse DescribeInspectionReport(Models\DescribeInspectionReportRequest $req) This API is used to query check reports.
 * @method Models\DescribeK8sApiAbnormalEventInfoResponse DescribeK8sApiAbnormalEventInfo(Models\DescribeK8sApiAbnormalEventInfoRequest $req) Querying details of a K8s API exception event
 * @method Models\DescribeK8sApiAbnormalEventListResponse DescribeK8sApiAbnormalEventList(Models\DescribeK8sApiAbnormalEventListRequest $req) This API is used to query the K8sApi abnormal event list.
 * @method Models\DescribeK8sApiAbnormalRuleInfoResponse DescribeK8sApiAbnormalRuleInfo(Models\DescribeK8sApiAbnormalRuleInfoRequest $req) This API is used to query K8sApi abnormal request rule details.
 * @method Models\DescribeK8sApiAbnormalRuleListResponse DescribeK8sApiAbnormalRuleList(Models\DescribeK8sApiAbnormalRuleListRequest $req) This API is used to the K8sApi abnormal request rule list.
 * @method Models\DescribeK8sApiAbnormalRuleScopeListResponse DescribeK8sApiAbnormalRuleScopeList(Models\DescribeK8sApiAbnormalRuleScopeListRequest $req) This API is used to query rules for K8s API exceptions. 
 * @method Models\DescribeK8sApiAbnormalSummaryResponse DescribeK8sApiAbnormalSummary(Models\DescribeK8sApiAbnormalSummaryRequest $req) This API is used to query the statistics of K8sApi abnormal events.
 * @method Models\DescribeK8sApiAbnormalTendencyResponse DescribeK8sApiAbnormalTendency(Models\DescribeK8sApiAbnormalTendencyRequest $req) This API is used to query the trend of K8sApi abnormal events.
 * @method Models\DescribeLogStorageStatisticResponse DescribeLogStorageStatistic(Models\DescribeLogStorageStatisticRequest $req) This API is used to get the statistics of the log search usage.
 * @method Models\DescribeNetworkFirewallAuditRecordResponse DescribeNetworkFirewallAuditRecord(Models\DescribeNetworkFirewallAuditRecordRequest $req) This API is used to query the list of cluster policy audits.
 * @method Models\DescribeNetworkFirewallClusterListResponse DescribeNetworkFirewallClusterList(Models\DescribeNetworkFirewallClusterListRequest $req) This API is used to query the list of clusters.
 * @method Models\DescribeNetworkFirewallClusterRefreshStatusResponse DescribeNetworkFirewallClusterRefreshStatus(Models\DescribeNetworkFirewallClusterRefreshStatusRequest $req) This API is used to query the progress of the asset query task in the container network.
 * @method Models\DescribeNetworkFirewallNamespaceLabelListResponse DescribeNetworkFirewallNamespaceLabelList(Models\DescribeNetworkFirewallNamespaceLabelListRequest $req) This API is used to query the list of cluster network namespace labels.
 * @method Models\DescribeNetworkFirewallPodLabelsListResponse DescribeNetworkFirewallPodLabelsList(Models\DescribeNetworkFirewallPodLabelsListRequest $req) This API is used to query cluster network Pod labels.
 * @method Models\DescribeNetworkFirewallPolicyDetailResponse DescribeNetworkFirewallPolicyDetail(Models\DescribeNetworkFirewallPolicyDetailRequest $req) This API is used to view the details of a policy in the container network cluster.
 * @method Models\DescribeNetworkFirewallPolicyDiscoverResponse DescribeNetworkFirewallPolicyDiscover(Models\DescribeNetworkFirewallPolicyDiscoverRequest $req) This API is used to query the progress of a network policy sync task in the container network.
 * @method Models\DescribeNetworkFirewallPolicyListResponse DescribeNetworkFirewallPolicyList(Models\DescribeNetworkFirewallPolicyListRequest $req) This API is used to query the list of cluster network policies.
 * @method Models\DescribeNetworkFirewallPolicyStatusResponse DescribeNetworkFirewallPolicyStatus(Models\DescribeNetworkFirewallPolicyStatusRequest $req) This API is used to query the execution status of a network policy in the container network.
 * @method Models\DescribeNetworkFirewallPolicyYamlDetailResponse DescribeNetworkFirewallPolicyYamlDetail(Models\DescribeNetworkFirewallPolicyYamlDetailRequest $req) This API is used to view the details of a YAML network policy in the container network cluster.
 * @method Models\DescribeNewestVulResponse DescribeNewestVul(Models\DescribeNewestVulRequest $req) This API is used to query the latest list of vulnerabilities.
 * @method Models\DescribePostPayDetailResponse DescribePostPayDetail(Models\DescribePostPayDetailRequest $req) This API is used to query the pay-as-you-go billing details.
 * @method Models\DescribeProVersionInfoResponse DescribeProVersionInfo(Models\DescribeProVersionInfoRequest $req) This API is used to check whether the Pro Edition needs to be purchased.
 * @method Models\DescribePromotionActivityResponse DescribePromotionActivity(Models\DescribePromotionActivityRequest $req) This API is used to query promotions.
 * @method Models\DescribePublicKeyResponse DescribePublicKey(Models\DescribePublicKeyRequest $req) This API is used to get the public key.
 * @method Models\DescribePurchaseStateInfoResponse DescribePurchaseStateInfo(Models\DescribePurchaseStateInfoRequest $req) This API is used to check whether TCSS is purchased.
 * @method Models\DescribeRefreshTaskResponse DescribeRefreshTask(Models\DescribeRefreshTaskRequest $req) This API is used to query a refresh task.
 * @method Models\DescribeReverseShellDetailResponse DescribeReverseShellDetail(Models\DescribeReverseShellDetailRequest $req) This API is used to query the details of a reverse shell event at runtime.
 * @method Models\DescribeReverseShellEventsResponse DescribeReverseShellEvents(Models\DescribeReverseShellEventsRequest $req) This API is used to query the list of reverse shell events at runtime.
 * @method Models\DescribeReverseShellEventsExportResponse DescribeReverseShellEventsExport(Models\DescribeReverseShellEventsExportRequest $req) This API is used to query and export the list of reverse shell events at runtime.
 * @method Models\DescribeReverseShellWhiteListDetailResponse DescribeReverseShellWhiteListDetail(Models\DescribeReverseShellWhiteListDetailRequest $req) This API is used to query the details of the allowlist of reverse shells at runtime.
 * @method Models\DescribeReverseShellWhiteListsResponse DescribeReverseShellWhiteLists(Models\DescribeReverseShellWhiteListsRequest $req) This API is used to query the allowlist of reverse shells at runtime.
 * @method Models\DescribeRiskListResponse DescribeRiskList(Models\DescribeRiskListRequest $req) This API is used to query the list of risk items identified in the last task and filter them by special field.
 * @method Models\DescribeRiskSyscallDetailResponse DescribeRiskSyscallDetail(Models\DescribeRiskSyscallDetailRequest $req) This API is used to query the details of a high-risk syscall event.
 * @method Models\DescribeRiskSyscallEventsResponse DescribeRiskSyscallEvents(Models\DescribeRiskSyscallEventsRequest $req) This API is used to query the list of high-risk syscalls at runtime.
 * @method Models\DescribeRiskSyscallEventsExportResponse DescribeRiskSyscallEventsExport(Models\DescribeRiskSyscallEventsExportRequest $req) This API is used to export the list of high-risk syscalls at runtime.
 * @method Models\DescribeRiskSyscallNamesResponse DescribeRiskSyscallNames(Models\DescribeRiskSyscallNamesRequest $req) This API is used to query the list of names of high-risk syscalls at runtime.
 * @method Models\DescribeRiskSyscallWhiteListDetailResponse DescribeRiskSyscallWhiteListDetail(Models\DescribeRiskSyscallWhiteListDetailRequest $req) This API is used to query the details of the allowlist of high-risk syscalls at runtime.
 * @method Models\DescribeRiskSyscallWhiteListsResponse DescribeRiskSyscallWhiteLists(Models\DescribeRiskSyscallWhiteListsRequest $req) This API is used to query the allowlist of high-risk syscalls at runtime.
 * @method Models\DescribeScanIgnoreVulListResponse DescribeScanIgnoreVulList(Models\DescribeScanIgnoreVulListRequest $req) This API is used to query the list of vulnerabilities ignored in a scan.
 * @method Models\DescribeSearchExportListResponse DescribeSearchExportList(Models\DescribeSearchExportListRequest $req) This API is used to export the list of ES query files.
 * @method Models\DescribeSearchLogsResponse DescribeSearchLogs(Models\DescribeSearchLogsRequest $req) This API is used to get historical search records.
 * @method Models\DescribeSearchTemplatesResponse DescribeSearchTemplates(Models\DescribeSearchTemplatesRequest $req) This API is used to get the list of search templates.
 * @method Models\DescribeSecEventsTendencyResponse DescribeSecEventsTendency(Models\DescribeSecEventsTendencyRequest $req) This API is used to query the trend of security events at runtime.
 * @method Models\DescribeSecLogAlertMsgResponse DescribeSecLogAlertMsg(Models\DescribeSecLogAlertMsgRequest $req) This API is used to query a security log alert message.
 * @method Models\DescribeSecLogCleanSettingInfoResponse DescribeSecLogCleanSettingInfo(Models\DescribeSecLogCleanSettingInfoRequest $req) This API is used to query the settings of security log cleanup.
 * @method Models\DescribeSecLogDeliveryClsOptionsResponse DescribeSecLogDeliveryClsOptions(Models\DescribeSecLogDeliveryClsOptionsRequest $req) This API is used to query the options of security log delivery to CLS.
 * @method Models\DescribeSecLogDeliveryClsSettingResponse DescribeSecLogDeliveryClsSetting(Models\DescribeSecLogDeliveryClsSettingRequest $req) This API is used to query the settings of security log delivery to CLS.
 * @method Models\DescribeSecLogDeliveryKafkaOptionsResponse DescribeSecLogDeliveryKafkaOptions(Models\DescribeSecLogDeliveryKafkaOptionsRequest $req) This API is used to query the options of security log delivery to Kafka.
 * @method Models\DescribeSecLogDeliveryKafkaSettingResponse DescribeSecLogDeliveryKafkaSetting(Models\DescribeSecLogDeliveryKafkaSettingRequest $req) This API is used to query the settings of security log delivery to Kafka.
 * @method Models\DescribeSecLogJoinObjectListResponse DescribeSecLogJoinObjectList(Models\DescribeSecLogJoinObjectListRequest $req) This API is used to query the list of accessed security log objects.
 * @method Models\DescribeSecLogJoinTypeListResponse DescribeSecLogJoinTypeList(Models\DescribeSecLogJoinTypeListRequest $req) This API is used to query the list of security log access types.
 * @method Models\DescribeSecLogKafkaUINResponse DescribeSecLogKafkaUIN(Models\DescribeSecLogKafkaUINRequest $req) This API is used to query the UIN of a Kafka security log.
 * @method Models\DescribeSecLogVasInfoResponse DescribeSecLogVasInfo(Models\DescribeSecLogVasInfoRequest $req) This API is used to query the information of the security log product.
 * @method Models\DescribeSupportDefenceVulResponse DescribeSupportDefenceVul(Models\DescribeSupportDefenceVulRequest $req) This API is used to query the list of vulnerabilities that can be prevented
 * @method Models\DescribeSystemVulListResponse DescribeSystemVulList(Models\DescribeSystemVulListRequest $req) This API is used to query the list of system vulnerabilities.
 * @method Models\DescribeTaskResultSummaryResponse DescribeTaskResultSummary(Models\DescribeTaskResultSummaryRequest $req) This API is used to query the overview of a check result and return the number of affected nodes in the last seven days.
 * @method Models\DescribeTcssSummaryResponse DescribeTcssSummary(Models\DescribeTcssSummaryRequest $req) This API is used to query the TCSS overview.
 * @method Models\DescribeUnauthorizedCoresTendencyResponse DescribeUnauthorizedCoresTendency(Models\DescribeUnauthorizedCoresTendencyRequest $req) This API is used to query the trend of daily unlicensed cores.
 * @method Models\DescribeUnfinishRefreshTaskResponse DescribeUnfinishRefreshTask(Models\DescribeUnfinishRefreshTaskRequest $req) This API is used to query the information of an unfinished asset refreshing task.
 * @method Models\DescribeUserClusterResponse DescribeUserCluster(Models\DescribeUserClusterRequest $req) This API is used to query the information of a cluster on the Security Dashboard and Cluster Security pages.
 * @method Models\DescribeValueAddedSrvInfoResponse DescribeValueAddedSrvInfo(Models\DescribeValueAddedSrvInfoRequest $req) This API is used to query the information of the required value-added service.
 * @method Models\DescribeVirusAutoIsolateSampleDetailResponse DescribeVirusAutoIsolateSampleDetail(Models\DescribeVirusAutoIsolateSampleDetailRequest $req) This API is used to query the details of an automatically isolated trojan sample.
 * @method Models\DescribeVirusAutoIsolateSampleDownloadURLResponse DescribeVirusAutoIsolateSampleDownloadURL(Models\DescribeVirusAutoIsolateSampleDownloadURLRequest $req) This API is used to query the download URL of an automatically isolated trojan sample.
 * @method Models\DescribeVirusAutoIsolateSampleListResponse DescribeVirusAutoIsolateSampleList(Models\DescribeVirusAutoIsolateSampleListRequest $req) This API is used to query the list of automatically isolated trojan samples.
 * @method Models\DescribeVirusAutoIsolateSettingResponse DescribeVirusAutoIsolateSetting(Models\DescribeVirusAutoIsolateSettingRequest $req) This API is used to query the settings of automatic trojan isolation.
 * @method Models\DescribeVirusDetailResponse DescribeVirusDetail(Models\DescribeVirusDetailRequest $req) This API is used to query the information of a trojan file at runtime.
 * @method Models\DescribeVirusEventTendencyResponse DescribeVirusEventTendency(Models\DescribeVirusEventTendencyRequest $req) This API is used to query the trend of trojan events.
 * @method Models\DescribeVirusListResponse DescribeVirusList(Models\DescribeVirusListRequest $req) This API is used to query the list of virus scanning events at runtime.
 * @method Models\DescribeVirusManualScanEstimateTimeoutResponse DescribeVirusManualScanEstimateTimeout(Models\DescribeVirusManualScanEstimateTimeoutRequest $req) This API is used to query the estimated timeout period of a quick trojan scan.
 * @method Models\DescribeVirusMonitorSettingResponse DescribeVirusMonitorSetting(Models\DescribeVirusMonitorSettingRequest $req) This API is used to query the real-time monitoring settings of virus scanning at runtime.
 * @method Models\DescribeVirusSampleDownloadUrlResponse DescribeVirusSampleDownloadUrl(Models\DescribeVirusSampleDownloadUrlRequest $req) This API is used to query the download URL of a trojan sample.
 * @method Models\DescribeVirusScanSettingResponse DescribeVirusScanSetting(Models\DescribeVirusScanSettingRequest $req) This API is used to query virus scanning settings at runtime.
 * @method Models\DescribeVirusScanTaskStatusResponse DescribeVirusScanTaskStatus(Models\DescribeVirusScanTaskStatusRequest $req) This API is used to query the status of a virus scanning task at runtime.
 * @method Models\DescribeVirusScanTimeoutSettingResponse DescribeVirusScanTimeoutSetting(Models\DescribeVirusScanTimeoutSettingRequest $req) This API is used to query the timeout settings of a file scan at runtime.
 * @method Models\DescribeVirusSummaryResponse DescribeVirusSummary(Models\DescribeVirusSummaryRequest $req) This API is used to query the trojan overview at runtime.
 * @method Models\DescribeVirusTaskListResponse DescribeVirusTaskList(Models\DescribeVirusTaskListRequest $req) This API is used to query the list of virus scanning tasks at runtime.
 * @method Models\DescribeVulContainerListResponse DescribeVulContainerList(Models\DescribeVulContainerListRequest $req) This API is used to query the list of containers affected by vulnerabilities.
 * @method Models\DescribeVulDefenceEventResponse DescribeVulDefenceEvent(Models\DescribeVulDefenceEventRequest $req) This API is used to query the list of exploit prevention events.
 * @method Models\DescribeVulDefenceEventDetailResponse DescribeVulDefenceEventDetail(Models\DescribeVulDefenceEventDetailRequest $req) This API is used to query the details of an exploit prevention event.
 * @method Models\DescribeVulDefenceEventTendencyResponse DescribeVulDefenceEventTendency(Models\DescribeVulDefenceEventTendencyRequest $req) This API is used to query the trend of exploit prevention events.
 * @method Models\DescribeVulDefenceHostResponse DescribeVulDefenceHost(Models\DescribeVulDefenceHostRequest $req) This API is used to query the list of servers with exploit prevention enabled.
 * @method Models\DescribeVulDefencePluginResponse DescribeVulDefencePlugin(Models\DescribeVulDefencePluginRequest $req) This API is used to query the list of exploit prevention plugins.
 * @method Models\DescribeVulDefenceSettingResponse DescribeVulDefenceSetting(Models\DescribeVulDefenceSettingRequest $req) This API is used to query the exploit prevention settings.
 * @method Models\DescribeVulDetailResponse DescribeVulDetail(Models\DescribeVulDetailRequest $req) This API is used to query vulnerability details.
 * @method Models\DescribeVulIgnoreLocalImageListResponse DescribeVulIgnoreLocalImageList(Models\DescribeVulIgnoreLocalImageListRequest $req) This API is used to query the list of local images ignored in a vulnerability scan.
 * @method Models\DescribeVulIgnoreRegistryImageListResponse DescribeVulIgnoreRegistryImageList(Models\DescribeVulIgnoreRegistryImageListRequest $req) This API is used to query the list of repository images ignored in a vulnerability scan.
 * @method Models\DescribeVulImageListResponse DescribeVulImageList(Models\DescribeVulImageListRequest $req) This API is used to query the list of images affected by vulnerabilities.
 * @method Models\DescribeVulImageSummaryResponse DescribeVulImageSummary(Models\DescribeVulImageSummaryRequest $req) This API is used to query the statistics of images affected by vulnerabilities.
 * @method Models\DescribeVulLevelImageSummaryResponse DescribeVulLevelImageSummary(Models\DescribeVulLevelImageSummaryRequest $req) This API is used to query the numbers of images affected by emergency vulnerabilities at each severity level.
 * @method Models\DescribeVulLevelSummaryResponse DescribeVulLevelSummary(Models\DescribeVulLevelSummaryRequest $req) This API is used to query the numbers of vulnerabilities at each severity level.
 * @method Models\DescribeVulRegistryImageListResponse DescribeVulRegistryImageList(Models\DescribeVulRegistryImageListRequest $req) This API is used to query the list of repository images affected by vulnerabilities.
 * @method Models\DescribeVulScanAuthorizedImageSummaryResponse DescribeVulScanAuthorizedImageSummary(Models\DescribeVulScanAuthorizedImageSummaryRequest $req) This API is used to count the number of licensed but not scanned images on the vulnerability scanning page.
 * @method Models\DescribeVulScanInfoResponse DescribeVulScanInfo(Models\DescribeVulScanInfoRequest $req) This API is used to query the information of a vulnerability scan task.
 * @method Models\DescribeVulScanLocalImageListResponse DescribeVulScanLocalImageList(Models\DescribeVulScanLocalImageListRequest $req) This API is used to query the list of local images in a vulnerability scan task.
 * @method Models\DescribeVulSummaryResponse DescribeVulSummary(Models\DescribeVulSummaryRequest $req) This API is used to query the overview of vulnerability risks.
 * @method Models\DescribeVulTendencyResponse DescribeVulTendency(Models\DescribeVulTendencyRequest $req) This API is used to query the trend of critical and high-risk vulnerabilities in local and repository images.
 * @method Models\DescribeVulTopRankingResponse DescribeVulTopRanking(Models\DescribeVulTopRankingRequest $req) This API is used to query the list of top vulnerabilities.
 * @method Models\DescribeWarningRulesResponse DescribeWarningRules(Models\DescribeWarningRulesRequest $req) This API is used to get the list of alert policies.
 * @method Models\DescribeWebVulListResponse DescribeWebVulList(Models\DescribeWebVulListRequest $req) This API is used to query the list of web application vulnerabilities.
 * @method Models\ExportVirusListResponse ExportVirusList(Models\ExportVirusListRequest $req) This API is used to export the list of virus scanning events at runtime.
 * @method Models\InitializeUserComplianceEnvironmentResponse InitializeUserComplianceEnvironment(Models\InitializeUserComplianceEnvironmentRequest $req) This API is used to initialize the compliance baseline environment and create necessary data and options.
 * @method Models\ModifyAbnormalProcessRuleStatusResponse ModifyAbnormalProcessRuleStatus(Models\ModifyAbnormalProcessRuleStatusRequest $req) This API is used to change the status of an abnormal process policy at runtime.
 * @method Models\ModifyAbnormalProcessStatusResponse ModifyAbnormalProcessStatus(Models\ModifyAbnormalProcessStatusRequest $req) This API is used to change the status of an abnormal process event.
 * @method Models\ModifyAccessControlRuleStatusResponse ModifyAccessControlRuleStatus(Models\ModifyAccessControlRuleStatusRequest $req) This API is used to change the status of an access control policy at runtime, i.e., enable or disable it.
 * @method Models\ModifyAccessControlStatusResponse ModifyAccessControlStatus(Models\ModifyAccessControlStatusRequest $req) This API is used to change the status of an access control event at runtime.
 * @method Models\ModifyAssetResponse ModifyAsset(Models\ModifyAssetRequest $req) This API is used to refresh server assets.
 * @method Models\ModifyAssetImageRegistryScanStopResponse ModifyAssetImageRegistryScanStop(Models\ModifyAssetImageRegistryScanStopRequest $req) This API is used to stop an image scan task for an image repository.
 * @method Models\ModifyAssetImageRegistryScanStopOneKeyResponse ModifyAssetImageRegistryScanStopOneKey(Models\ModifyAssetImageRegistryScanStopOneKeyRequest $req) This API is used to stop a quick image scan task for an image repository.
 * @method Models\ModifyAssetImageScanStopResponse ModifyAssetImageScanStop(Models\ModifyAssetImageScanStopRequest $req) This API is used to stop an image scan.
 * @method Models\ModifyCompliancePeriodTaskResponse ModifyCompliancePeriodTask(Models\ModifyCompliancePeriodTaskRequest $req) This API is used to modify the settings of a scheduled task, including the check cycle and the status of the compliance benchmark.
 * @method Models\ModifyContainerNetStatusResponse ModifyContainerNetStatus(Models\ModifyContainerNetStatusRequest $req) This API is used to isolate a container.
 * @method Models\ModifyEscapeEventStatusResponse ModifyEscapeEventStatus(Models\ModifyEscapeEventStatusRequest $req) This API is used to change the status of a container escape scan event.
 * @method Models\ModifyEscapeRuleResponse ModifyEscapeRule(Models\ModifyEscapeRuleRequest $req) This API is used to modify the information of a container escape scan rule.
 * @method Models\ModifyEscapeWhiteListResponse ModifyEscapeWhiteList(Models\ModifyEscapeWhiteListRequest $req) This API is used to modify an allowed escape.
 * @method Models\ModifyImageAuthorizedResponse ModifyImageAuthorized(Models\ModifyImageAuthorizedRequest $req) This API is used to batch license images to be scanned (v2.0).
 * @method Models\ModifyK8sApiAbnormalEventStatusResponse ModifyK8sApiAbnormalEventStatus(Models\ModifyK8sApiAbnormalEventStatusRequest $req) This API is used to modify the status of K8sApi exception events.
 * @method Models\ModifyK8sApiAbnormalRuleInfoResponse ModifyK8sApiAbnormalRuleInfo(Models\ModifyK8sApiAbnormalRuleInfoRequest $req) This API is used to modify the information of K8sApi abnormal rules.
 * @method Models\ModifyK8sApiAbnormalRuleStatusResponse ModifyK8sApiAbnormalRuleStatus(Models\ModifyK8sApiAbnormalRuleStatusRequest $req) This API is used to modify the status of K8sApi abnormal event rules.
 * @method Models\ModifyReverseShellStatusResponse ModifyReverseShellStatus(Models\ModifyReverseShellStatusRequest $req) This API is used to change the status of a reverse shell event.
 * @method Models\ModifyRiskSyscallStatusResponse ModifyRiskSyscallStatus(Models\ModifyRiskSyscallStatusRequest $req) This API is used to change the status of a high-risk syscall event.
 * @method Models\ModifySecLogCleanSettingInfoResponse ModifySecLogCleanSettingInfo(Models\ModifySecLogCleanSettingInfoRequest $req) This API is used to modify the settings of security log cleanup.
 * @method Models\ModifySecLogDeliveryClsSettingResponse ModifySecLogDeliveryClsSetting(Models\ModifySecLogDeliveryClsSettingRequest $req) This API is used to update the configuration of security log delivery to CLS.
 * @method Models\ModifySecLogDeliveryKafkaSettingResponse ModifySecLogDeliveryKafkaSetting(Models\ModifySecLogDeliveryKafkaSettingRequest $req) This API is used to update the settings of security log delivery to Kafka.
 * @method Models\ModifySecLogJoinObjectsResponse ModifySecLogJoinObjects(Models\ModifySecLogJoinObjectsRequest $req) This API is used to modify an accessed security log object.
 * @method Models\ModifySecLogJoinStateResponse ModifySecLogJoinState(Models\ModifySecLogJoinStateRequest $req) This API is used to change the security log access status.
 * @method Models\ModifySecLogKafkaUINResponse ModifySecLogKafkaUIN(Models\ModifySecLogKafkaUINRequest $req) This API is used to modify the UIN of a Kafka security log.
 * @method Models\ModifyVirusAutoIsolateExampleSwitchResponse ModifyVirusAutoIsolateExampleSwitch(Models\ModifyVirusAutoIsolateExampleSwitchRequest $req) This API is used to enable/disable automatic trojan sample isolation.
 * @method Models\ModifyVirusAutoIsolateSettingResponse ModifyVirusAutoIsolateSetting(Models\ModifyVirusAutoIsolateSettingRequest $req) This API is used to modify the settings of automatic trojan isolation.
 * @method Models\ModifyVirusFileStatusResponse ModifyVirusFileStatus(Models\ModifyVirusFileStatusRequest $req) This API is used to update the status of a trojan file at runtime.
 * @method Models\ModifyVirusMonitorSettingResponse ModifyVirusMonitorSetting(Models\ModifyVirusMonitorSettingRequest $req) This API is used to update the real-time monitoring settings of virus scanning at runtime.
 * @method Models\ModifyVirusScanSettingResponse ModifyVirusScanSetting(Models\ModifyVirusScanSettingRequest $req) This API is used to update virus scanning settings at runtime.
 * @method Models\ModifyVirusScanTimeoutSettingResponse ModifyVirusScanTimeoutSetting(Models\ModifyVirusScanTimeoutSettingRequest $req) This API is used to modify the timeout settings of a file scan at runtime.
 * @method Models\ModifyVulDefenceEventStatusResponse ModifyVulDefenceEventStatus(Models\ModifyVulDefenceEventStatusRequest $req) This API is used to change the status of an exploit prevention event.
 * @method Models\ModifyVulDefenceSettingResponse ModifyVulDefenceSetting(Models\ModifyVulDefenceSettingRequest $req) This API is used to edit the exploit prevention settings.
 * @method Models\OpenTcssTrialResponse OpenTcssTrial(Models\OpenTcssTrialRequest $req) This API is used to activate TCSS trial.
 * @method Models\RemoveAssetImageRegistryRegistryDetailResponse RemoveAssetImageRegistryRegistryDetail(Models\RemoveAssetImageRegistryRegistryDetailRequest $req) This API is used to delete the details of an image repository.
 * @method Models\RenewImageAuthorizeStateResponse RenewImageAuthorizeState(Models\RenewImageAuthorizeStateRequest $req) This API is used to license an image to be scanned.
 * @method Models\ResetSecLogTopicConfigResponse ResetSecLogTopicConfig(Models\ResetSecLogTopicConfigRequest $req) This API is used to reset a security log topic.
 * @method Models\ScanComplianceAssetsResponse ScanComplianceAssets(Models\ScanComplianceAssetsRequest $req) This API is used to check the specified asset again.
 * @method Models\ScanComplianceAssetsByPolicyItemResponse ScanComplianceAssetsByPolicyItem(Models\ScanComplianceAssetsByPolicyItemRequest $req) This API is used to check the specified asset again with the specified check item and return the ID of the created compliance check task.
 * @method Models\ScanCompliancePolicyItemsResponse ScanCompliancePolicyItems(Models\ScanCompliancePolicyItemsRequest $req) This API is used to check all the assets of the specified check item again and return the ID of the created compliance check task.
 * @method Models\ScanComplianceScanFailedAssetsResponse ScanComplianceScanFailedAssets(Models\ScanComplianceScanFailedAssetsRequest $req) This API is used to check all the failed check items of the specified asset again and return the ID of the created compliance check task.
 * @method Models\SetCheckModeResponse SetCheckMode(Models\SetCheckModeRequest $req) This API is used to set the check mode and automatic check.
 * @method Models\StopVirusScanTaskResponse StopVirusScanTask(Models\StopVirusScanTaskRequest $req) This API is used to stop a trojan scan task at runtime.
 * @method Models\StopVulScanTaskResponse StopVulScanTask(Models\StopVulScanTaskRequest $req) This API is used to stop a vulnerability scan task.
 * @method Models\SwitchImageAutoAuthorizedRuleResponse SwitchImageAutoAuthorizedRule(Models\SwitchImageAutoAuthorizedRuleRequest $req) This API is used to enable/disable automatic licensing for local images.
 * @method Models\SyncAssetImageRegistryAssetResponse SyncAssetImageRegistryAsset(Models\SyncAssetImageRegistryAssetRequest $req) This API is used to refresh the assets in an image repository.
 * @method Models\UpdateAndPublishNetworkFirewallPolicyDetailResponse UpdateAndPublishNetworkFirewallPolicyDetail(Models\UpdateAndPublishNetworkFirewallPolicyDetailRequest $req) This API is used to create a task to update and publish a network policy in the container network.
 * @method Models\UpdateAndPublishNetworkFirewallPolicyYamlDetailResponse UpdateAndPublishNetworkFirewallPolicyYamlDetail(Models\UpdateAndPublishNetworkFirewallPolicyYamlDetailRequest $req) This API is used to create a task to update and publish a YAML network policy in the container network.
 * @method Models\UpdateAssetImageRegistryRegistryDetailResponse UpdateAssetImageRegistryRegistryDetail(Models\UpdateAssetImageRegistryRegistryDetailRequest $req) This API is used to update the details of an image repository.
 * @method Models\UpdateImageRegistryTimingScanTaskResponse UpdateImageRegistryTimingScanTask(Models\UpdateImageRegistryTimingScanTaskRequest $req) This API is used to update a scheduled task for an image repository.
 * @method Models\UpdateNetworkFirewallPolicyDetailResponse UpdateNetworkFirewallPolicyDetail(Models\UpdateNetworkFirewallPolicyDetailRequest $req) This API is used to create a task to update a network policy in the container network.
 * @method Models\UpdateNetworkFirewallPolicyYamlDetailResponse UpdateNetworkFirewallPolicyYamlDetail(Models\UpdateNetworkFirewallPolicyYamlDetailRequest $req) This API is used to create a task to update a YAML network policy in the container network.
 */

class TcssClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tcss.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tcss";

    /**
     * @var string
     */
    protected $version = "2020-11-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("tcss")."\\"."V20201101\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
