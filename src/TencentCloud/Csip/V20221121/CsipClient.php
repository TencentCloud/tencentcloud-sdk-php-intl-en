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

namespace TencentCloud\Csip\V20221121;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Csip\V20221121\Models as Models;

/**
 * @method Models\AccessAIAnalysisSMTPResponse AccessAIAnalysisSMTP(Models\AccessAIAnalysisSMTPRequest $req) This API is used to create or modify SMTP mailbox access requests.
 * @method Models\AddDspmAssetManagerResponse AddDspmAssetManager(Models\AddDspmAssetManagerRequest $req) Add asset administrator
 * @method Models\AddImageRegistryResponse AddImageRegistry(Models\AddImageRegistryRequest $req) Add mirror repository information.
 * @method Models\AddLoginWhiteListsResponse AddLoginWhiteLists(Models\AddLoginWhiteListsRequest $req) This API is used to add cross-region log-in allowlists in batches.
 * @method Models\AddNewBindRoleUserResponse AddNewBindRoleUser(Models\AddNewBindRoleUserRequest $req) CSIP Role Authorization Binding API
 * @method Models\AddVulWhitelistResponse AddVulWhitelist(Models\AddVulWhitelistRequest $req) Add a vulnerability allowlist
 * @method Models\BatchModifyBaselinePolicyResponse BatchModifyBaselinePolicy(Models\BatchModifyBaselinePolicyRequest $req) Batch modify the "periodic scan configuration / automatic synchronization of newly-added detection items / detection item hit configuration / customized detection items" settings in the baseline policy. Only fields passed in the request are modified.
 * @method Models\BatchModifyImageRegistryTimedScanTaskConfigResponse BatchModifyImageRegistryTimedScanTaskConfig(Models\BatchModifyImageRegistryTimedScanTaskConfigRequest $req) Batch modify the scheduled scan task configurations of image repositories.
 * @method Models\BatchModifyImageSensitiveWhitelistResponse BatchModifyImageSensitiveWhitelist(Models\BatchModifyImageSensitiveWhitelistRequest $req) Batch Modify Sensitive Information Allowlist for Container Images
 * @method Models\BatchModifyImageVirusWhitelistResponse BatchModifyImageVirusWhitelist(Models\BatchModifyImageVirusWhitelistRequest $req) Batch modify the Trojan allowlist for images.
 * @method Models\BatchModifyImageVulWhitelistResponse BatchModifyImageVulWhitelist(Models\BatchModifyImageVulWhitelistRequest $req) Batch Modify Vulnerability Allowlist for Container Images
 * @method Models\CancelEdrAlertIgnoreResponse CancelEdrAlertIgnore(Models\CancelEdrAlertIgnoreRequest $req) Cancel a permanently ignored EDR multi-behavior alarm. Remove the corresponding host and rule record from the AI-Link permanent ignore allowlist and restore the alarm status to PENDING.
 * @method Models\CheckCWPExposePathPermissionResponse CheckCWPExposePathPermission(Models\CheckCWPExposePathPermissionRequest $req) Determine whether the current user is on the flagship edition for hosts.
 * @method Models\CheckImageRegistryInstanceNameDuplicateResponse CheckImageRegistryInstanceNameDuplicate(Models\CheckImageRegistryInstanceNameDuplicateRequest $req) Check whether the image repository instance name is duplicate.
 * @method Models\CheckIsUltimateVersionResponse CheckIsUltimateVersion(Models\CheckIsUltimateVersionRequest $req) Determine whether the current user is on the flagship edition.
 * @method Models\CheckRiskResponse CheckRisk(Models\CheckRiskRequest $req) Risk verification example
 * @method Models\CopyBaselinePolicyResponse CopyBaselinePolicy(Models\CopyBaselinePolicyRequest $req) Replicate a custom baseline policy.
 * @method Models\CreateAIScheduleResponse CreateAISchedule(Models\CreateAIScheduleRequest $req) Create an AI scheduled task.

Create an AI scheduled task by entering the task name, prompt content, and trigger configuration. The AI scheduled task ID will be returned after successful creation.
 * @method Models\CreateAccessKeyCheckTaskResponse CreateAccessKeyCheckTask(Models\CreateAccessKeyCheckTaskRequest $req) Detect async tasks of AK
 * @method Models\CreateAccessKeySyncTaskResponse CreateAccessKeySyncTask(Models\CreateAccessKeySyncTaskRequest $req) Trigger an AK asset sync task.
 * @method Models\CreateAllAssetsExportJobResponse CreateAllAssetsExportJob(Models\CreateAllAssetsExportJobRequest $req) Creates a task to export all assets.
 * @method Models\CreateAssetComponentListExportJobResponse CreateAssetComponentListExportJob(Models\CreateAssetComponentListExportJobRequest $req) Creates a component list export task for image assets.
 * @method Models\CreateAssetComponentRelatedImageListExportJobResponse CreateAssetComponentRelatedImageListExportJob(Models\CreateAssetComponentRelatedImageListExportJobRequest $req) Create a mirror repository component associated image list export task.
 * @method Models\CreateAssetFilterViewResponse CreateAssetFilterView(Models\CreateAssetFilterViewRequest $req) Create an asset search view.
 * @method Models\CreateAssetProcessExportJobResponse CreateAssetProcessExportJob(Models\CreateAssetProcessExportJobRequest $req) Create a host process list export task
 * @method Models\CreateAssetSyncTaskResponse CreateAssetSyncTask(Models\CreateAssetSyncTaskRequest $req) This API is used to create an asset sync task.
 * @method Models\CreateAssetTagResponse CreateAssetTag(Models\CreateAssetTagRequest $req) Create an asset tag.
 * @method Models\CreateAssetViewRisksExportJobResponse CreateAssetViewRisksExportJob(Models\CreateAssetViewRisksExportJobRequest $req) Create a sample risk list export task from the asset perspective
 * @method Models\CreateBaselineAggregatedItemExportJobResponse CreateBaselineAggregatedItemExportJob(Models\CreateBaselineAggregatedItemExportJobRequest $req) Create a baseline aggregation detection item export task. Use ExportType to select exporting statistics or risk details. You can limit the range by conditions such as policy and category. The task executes asynchronously in the backend. Once completed, you can download the result file from the export task list.
 * @method Models\CreateBaselineFixRecordExportJobResponse CreateBaselineFixRecordExportJob(Models\CreateBaselineFixRecordExportJobRequest $req) This API is used to create a baseline fix record export task to export the records of fixed detection items, including detection item information, asset information, and repair time. The task executes asynchronously in the backend. Once completed, the result file can be downloaded from the export task list.
 * @method Models\CreateBaselineMainTaskExportJobResponse CreateBaselineMainTaskExportJob(Models\CreateBaselineMainTaskExportJobRequest $req) Create a baseline main task export task to export detection items and subtask data under the specified main task. The task executes asynchronously in the backend. Once completed, the result file can be downloaded in the export task list.
 * @method Models\CreateCFGRiskPDFReportExportJobResponse CreateCFGRiskPDFReportExportJob(Models\CreateCFGRiskPDFReportExportJobRequest $req) Example of creating an export task for a cloud resource configuration detection PDF report.
 * @method Models\CreateCFGRisksExportJobResponse CreateCFGRisksExportJob(Models\CreateCFGRisksExportJobRequest $req) Example of creating an asset perspective risk list export task
 * @method Models\CreateCSIPManualMalwareScanResponse CreateCSIPManualMalwareScan(Models\CreateCSIPManualMalwareScanRequest $req) This API is used to create a CSIP manual scan.
 * @method Models\CreateCheckViewRisksExportJobResponse CreateCheckViewRisksExportJob(Models\CreateCheckViewRisksExportJobRequest $req) Create a sample risk list export task from the asset perspective
 * @method Models\CreateCloudFunctionExportJobResponse CreateCloudFunctionExportJob(Models\CreateCloudFunctionExportJobRequest $req) This API is used to create an SCF export task.
 * @method Models\CreateClusterAssetSyncTaskResponse CreateClusterAssetSyncTask(Models\CreateClusterAssetSyncTaskRequest $req) This API is used to create a cluster asset sync task.
 * @method Models\CreateClusterContainerListExportJobResponse CreateClusterContainerListExportJob(Models\CreateClusterContainerListExportJobRequest $req) Creates a cluster container list export task
 * @method Models\CreateClusterListExportJobResponse CreateClusterListExportJob(Models\CreateClusterListExportJobRequest $req) Create a cluster list export task
 * @method Models\CreateClusterNamespaceListExportJobResponse CreateClusterNamespaceListExportJob(Models\CreateClusterNamespaceListExportJobRequest $req) Creates a cluster namespace list export task. The export fields include namespace name, Labels, and creation time. Filter filtering is supported. Export is implemented through an async task. After JobId is returned, the frontend polls to query the export task status.
 * @method Models\CreateClusterNodeListExportJobResponse CreateClusterNodeListExportJob(Models\CreateClusterNodeListExportJobRequest $req) This API is used to create a cluster node list export task. The export fields include node ID, node name, public IP address, private IP address, node type, cores, client status, and running state. NodeType, ClientStatus, and RunStatus are internationalized. Filter filtering is supported, including ClientStatus memory filtering. Export is implemented through an async task. After JobId is returned, the frontend polls to query the export task status.
 * @method Models\CreateComplianceRiskExportJobResponse CreateComplianceRiskExportJob(Models\CreateComplianceRiskExportJobRequest $req) Example of creating a risk list export task from a compliance standard aggregation perspective
 * @method Models\CreateDomainAndIpResponse CreateDomainAndIp(Models\CreateDomainAndIpRequest $req) Create Domain and IP Information
 * @method Models\CreateDspmAccessExportJobResponse CreateDspmAccessExportJob(Models\CreateDspmAccessExportJobRequest $req) Creates a Dspm access record export task
 * @method Models\CreateDspmApplyOrderResponse CreateDspmApplyOrder(Models\CreateDspmApplyOrderRequest $req) This API is used to create a Dspm application.
 * @method Models\CreateDspmApproveHistoryExportJobResponse CreateDspmApproveHistoryExportJob(Models\CreateDspmApproveHistoryExportJobRequest $req) Creates a Dspm approval history export task
 * @method Models\CreateDspmAssetAccessTopologyExportJobResponse CreateDspmAssetAccessTopologyExportJob(Models\CreateDspmAssetAccessTopologyExportJobRequest $req) This API is used to create a Dspm asset access topology export task.
 * @method Models\CreateDspmAssetIdentifyInfoExportJobResponse CreateDspmAssetIdentifyInfoExportJob(Models\CreateDspmAssetIdentifyInfoExportJobRequest $req) Create an asset list export task for Dspm.
 * @method Models\CreateDspmAssetsExportJobResponse CreateDspmAssetsExportJob(Models\CreateDspmAssetsExportJobRequest $req) Creates a Dspm asset list export task
 * @method Models\CreateDspmAuditFilterStrategyResponse CreateDspmAuditFilterStrategy(Models\CreateDspmAuditFilterStrategyRequest $req) This API is used to create a Dspm audit filter policy.
 * @method Models\CreateDspmExportTaskResponse CreateDspmExportTask(Models\CreateDspmExportTaskRequest $req) This API is used to create log export tasks.
 * @method Models\CreateDspmIdentifyCategoryResponse CreateDspmIdentifyCategory(Models\CreateDspmIdentifyCategoryRequest $req) This API is used to create a dspm data identification category.
 * @method Models\CreateDspmIdentifyComplianceCategoryRelationResponse CreateDspmIdentifyComplianceCategoryRelation(Models\CreateDspmIdentifyComplianceCategoryRelationRequest $req) This API is used to create a dspm data identification template category association.
 * @method Models\CreateDspmIdentifyComplianceGroupResponse CreateDspmIdentifyComplianceGroup(Models\CreateDspmIdentifyComplianceGroupRequest $req) This API is used to create a dspm data identification template.
 * @method Models\CreateDspmIdentifyComplianceGroupCopyResponse CreateDspmIdentifyComplianceGroupCopy(Models\CreateDspmIdentifyComplianceGroupCopyRequest $req) Replicate a dspm data identification template.
 * @method Models\CreateDspmIdentifyComplianceRuleRelationResponse CreateDspmIdentifyComplianceRuleRelation(Models\CreateDspmIdentifyComplianceRuleRelationRequest $req) Creates a dspm data identification template data item association
 * @method Models\CreateDspmIdentifyInfoListExportJobResponse CreateDspmIdentifyInfoListExportJob(Models\CreateDspmIdentifyInfoListExportJobRequest $req) This API is used to create a Dspm identity list export task.
 * @method Models\CreateDspmIdentifyLevelGroupResponse CreateDspmIdentifyLevelGroup(Models\CreateDspmIdentifyLevelGroupRequest $req) Creating a dspm Data Identification and Classification Group
 * @method Models\CreateDspmIdentifyRuleResponse CreateDspmIdentifyRule(Models\CreateDspmIdentifyRuleRequest $req) This API is used to create a dspm identification data item.
 * @method Models\CreateDspmPersonalIdentifyResponse CreateDspmPersonalIdentify(Models\CreateDspmPersonalIdentifyRequest $req) Create a Dspm personal identity id.
 * @method Models\CreateDspmResourceResponse CreateDspmResource(Models\CreateDspmResourceRequest $req) Create a Dspm instance
 * @method Models\CreateDspmRiskExportJobResponse CreateDspmRiskExportJob(Models\CreateDspmRiskExportJobRequest $req) Create a Dspm risk export task
 * @method Models\CreateDspmRiskStrategyResponse CreateDspmRiskStrategy(Models\CreateDspmRiskStrategyRequest $req) This API is used to create a Dspm custom risk policy.
 * @method Models\CreateDspmWhitelistStrategyResponse CreateDspmWhitelistStrategy(Models\CreateDspmWhitelistStrategyRequest $req) Create a Dspm allowlist policy.
 * @method Models\CreateDynamicAssetsExportJobResponse CreateDynamicAssetsExportJob(Models\CreateDynamicAssetsExportJobRequest $req) Creates a public network asset export task
 * @method Models\CreateEDRManualScanResponse CreateEDRManualScan(Models\CreateEDRManualScanRequest $req) Triggered after you click start scanning. It supports multi-account and multiple asset types. When both hosts and container clusters are selected, it splits into two independent tasks (host + container).
 * @method Models\CreateEdrAlertExportJobResponse CreateEdrAlertExportJob(Models\CreateEdrAlertExportJobRequest $req) This API is used to create an EDR alert export task.
 * @method Models\CreateEdrLessAlertExportJobResponse CreateEdrLessAlertExportJob(Models\CreateEdrLessAlertExportJobRequest $req) This API is used to create an EDR alert ordinary export task.
 * @method Models\CreateExposureAutoTagRuleResponse CreateExposureAutoTagRule(Models\CreateExposureAutoTagRuleRequest $req) Create rules for automatic cloud boundary tagging.
 * @method Models\CreateExposuresExportJobResponse CreateExposuresExportJob(Models\CreateExposuresExportJobRequest $req) Export Task for Exposed Assets
 * @method Models\CreateHighBaseLineRisksExportJobResponse CreateHighBaseLineRisksExportJob(Models\CreateHighBaseLineRisksExportJobRequest $req) This API is used to create a high-risk baseline risk export task.
 * @method Models\CreateHostImageListExportJobResponse CreateHostImageListExportJob(Models\CreateHostImageListExportJobRequest $req) Create a local image list export task. The export fields include image ID, image name, mirror version, number of associated containers, number of associated hosts, creation time, account nickname, and risk fields such as scan status, vulnerability, Trojan, and sensitive information. Filtering is supported. Export is implemented through an async task. After JobId is returned, the frontend polls to query the export task status. In single account mode, the NickName field is automatically excluded.
 * @method Models\CreateHostVulExportJobResponse CreateHostVulExportJob(Models\CreateHostVulExportJobRequest $req) This API is used to create a host vulnerability table export task.
 * @method Models\CreateIaCAccessTokenResponse CreateIaCAccessToken(Models\CreateIaCAccessTokenRequest $req) Create an IaC detection integration Token.
 * @method Models\CreateIaCFileExportJobResponse CreateIaCFileExportJob(Models\CreateIaCFileExportJobRequest $req) Creates an IaC detection file export task
 * @method Models\CreateIaCFileReScanTaskResponse CreateIaCFileReScanTask(Models\CreateIaCFileReScanTaskRequest $req) This API is used to create an IaC detection file rescan task.
 * @method Models\CreateImageAssetListExportJobResponse CreateImageAssetListExportJob(Models\CreateImageAssetListExportJobRequest $req) Create an image asset list export task
 * @method Models\CreateImageAssociatedContainerListExportJobResponse CreateImageAssociatedContainerListExportJob(Models\CreateImageAssociatedContainerListExportJobRequest $req) Create an image associated container asset export task
 * @method Models\CreateImageAssociatedHostListExportJobResponse CreateImageAssociatedHostListExportJob(Models\CreateImageAssociatedHostListExportJobRequest $req) Create image associated host asset list export task
 * @method Models\CreateImageComponentListExportJobResponse CreateImageComponentListExportJob(Models\CreateImageComponentListExportJobRequest $req) Create an image component list export task.
 * @method Models\CreateImageLayerVulListExportJobResponse CreateImageLayerVulListExportJob(Models\CreateImageLayerVulListExportJobRequest $req) Create Image Layer Vulnerability List Export Task
 * @method Models\CreateImageRegistryConnectivityTaskResponse CreateImageRegistryConnectivityTask(Models\CreateImageRegistryConnectivityTaskRequest $req) This API is used to create a mirror repository connectivity check task.
 * @method Models\CreateImageRegistryListExportJobResponse CreateImageRegistryListExportJob(Models\CreateImageRegistryListExportJobRequest $req) This API is used to create an image repository list export task.
 * @method Models\CreateImageRegistryScanTaskResponse CreateImageRegistryScanTask(Models\CreateImageRegistryScanTaskRequest $req) Creating an Image Scanning Task
 * @method Models\CreateImageRegistryTimedScanTaskConfigResponse CreateImageRegistryTimedScanTaskConfig(Models\CreateImageRegistryTimedScanTaskConfigRequest $req) Create an image scanning task configuration for an image repository
 * @method Models\CreateImageSensitiveInfoListExportJobResponse CreateImageSensitiveInfoListExportJob(Models\CreateImageSensitiveInfoListExportJobRequest $req) Create Image Sensitive Information List Export Task
 * @method Models\CreateImageSensitiveWhitelistResponse CreateImageSensitiveWhitelist(Models\CreateImageSensitiveWhitelistRequest $req) This API is used to create an allowlist for sensitive information in container images.
 * @method Models\CreateImageVirusListExportJobResponse CreateImageVirusListExportJob(Models\CreateImageVirusListExportJobRequest $req) Create an image Trojan virus list export task
 * @method Models\CreateImageVirusWhitelistResponse CreateImageVirusWhitelist(Models\CreateImageVirusWhitelistRequest $req) This API is used to create an image Trojan allowlist.
 * @method Models\CreateImageVulListExportJobResponse CreateImageVulListExportJob(Models\CreateImageVulListExportJobRequest $req) This API is used to create a task of exporting the image vulnerability list.
 * @method Models\CreateImageVulSummaryListExportJobResponse CreateImageVulSummaryListExportJob(Models\CreateImageVulSummaryListExportJobRequest $req) Creates an export task for the vulnerability overview list of an image.
 * @method Models\CreateImageVulWhitelistResponse CreateImageVulWhitelist(Models\CreateImageVulWhitelistRequest $req) This API is used to create a vulnerability allowlist for container images.
 * @method Models\CreatePodContainerListExportJobResponse CreatePodContainerListExportJob(Models\CreatePodContainerListExportJobRequest $req) This API is used to create a Pod associated container list export task. Export fields include container ID, container name, running state, node ID, node type, image ID, image name, and isolation status. Filtering is supported. Export is implemented through an async task. After JobId is returned, front-end polling is used to query the export task status.
 * @method Models\CreatePodServiceListExportJobResponse CreatePodServiceListExportJob(Models\CreatePodServiceListExportJobRequest $req) Creates a Pod Association service list export task. The export fields include service name, type, Selector, namespace, and creation time. Filtering is supported. When PodUniqueID is input, the Pod Association matching logic of DescribeClusterServiceList is reused. Export is implemented through an async task, and after JobId is returned, the frontend polls to query the export task status.
 * @method Models\CreatePublicAssetsExportJobResponse CreatePublicAssetsExportJob(Models\CreatePublicAssetsExportJobRequest $req) This API is used to create a public network asset export task.
 * @method Models\CreateRiskCenterScanTaskResponse CreateRiskCenterScanTask(Models\CreateRiskCenterScanTaskRequest $req) Create Risk Center Scan Task
 * @method Models\CreateRiskDetailExportJobResponse CreateRiskDetailExportJob(Models\CreateRiskDetailExportJobRequest $req) Sample code for creating a cloud resource configuration check risk details export task
 * @method Models\CreateSandboxACLRuleResponse CreateSandboxACLRule(Models\CreateSandboxACLRuleRequest $req) This API is used to create an ACL user access control rule. You can refer to several system rules or define a custom rule. At least one of them must be provided.
 * @method Models\CreateSandboxDLPRuleResponse CreateSandboxDLPRule(Models\CreateSandboxDLPRuleRequest $req) Create a DLP user rule. You can reference several system rules (SystemRuleIDList) or define a custom rule (UserRuleContent, name + regular). At least one of both is required. UserRuleInfo is a newly-added optional structured input parameter. When it is passed together with UserRuleContent, UserRuleInfo takes precedence.
 * @method Models\CreateSandboxFileRuleResponse CreateSandboxFileRule(Models\CreateSandboxFileRuleRequest $req) Create command sandbox file access policy
 * @method Models\CreateSandboxLLMAuditRuleResponse CreateSandboxLLMAuditRule(Models\CreateSandboxLLMAuditRuleRequest $req) This API is used to create an LLM audit user rule. It must refer to at least one system rule and does not support user customization of rule content.
 * @method Models\CreateScanStatisticExportJobResponse CreateScanStatisticExportJob(Models\CreateScanStatisticExportJobRequest $req) Exported task for exposed surface scanning results
 * @method Models\CreateScanTaskResponse CreateScanTask(Models\CreateScanTaskRequest $req) This API is used to create an immediate detection task.
 * @method Models\CreateSkillScanResponse CreateSkillScan(Models\CreateSkillScanRequest $req) Upload a Skill ZIP file to trigger asynchronous security detection. After a successful upload, poll the DescribeSkillScanResult API using the returned ContentHash and EngineVersion to obtain the result. The upload API is idempotent. Re-uploading a file with the same Hash does not create a repetition task. Detection results are retained for 90 days. Re-upload for detection after the retention period expires.
 * @method Models\CreateVulFixRetryTaskResponse CreateVulFixRetryTask(Models\CreateVulFixRetryTaskRequest $req) Retry the vulnerability repair task that failed to fix, and redispatch the repair instruction only for the hosts of the original task that failed to fix. Retry is allowed only when the task status is partially or totally failed to fix.
 * @method Models\CreateVulFixTaskResponse CreateVulFixTask(Models\CreateVulFixTaskRequest $req) Users manually submit vulnerability repair tasks, specify the vulnerabilities and target hosts that need to be repaired, and the system creates fixing tasks and dispatches execution. It supports options such as specifying the repair timeout period and whether to create a snapshot. The FixItems array is used to precisely control which hosts each vulnerability or KB patch repairs.
 * @method Models\CreateVulFixedExportJobResponse CreateVulFixedExportJob(Models\CreateVulFixedExportJobRequest $req) Create an export task for the list of fixed vulnerabilities. It supports the same filter criteria as DescribeVulFixedList. The export is implemented via an asynchronous task. After a JobID is returned, the frontend polls to query the export task status. The export fields include vulnerability ID, vulnerability name, vulnerability level, VPR rating, vulnerability type, CVE ID, host name, instance ID, associated component & path, and repair time.
 * @method Models\CreateVulReScanResponse CreateVulReScan(Models\CreateVulReScanRequest $req) This API is used to create a vulnerability rescan
 * @method Models\CreateVulRisksExportJobResponse CreateVulRisksExportJob(Models\CreateVulRisksExportJobRequest $req) This API is used to create a vulnerability risk export task.
 * @method Models\CreateVulScanManualResponse CreateVulScanManual(Models\CreateVulScanManualRequest $req) This API is used to create a vulnerability scanning (one-click scan).
 * @method Models\DeleteAIAnalysisSMTPAccessResponse DeleteAIAnalysisSMTPAccess(Models\DeleteAIAnalysisSMTPAccessRequest $req) Delete the SMTP mailbox access information of the AI assistant.
 * @method Models\DeleteAIScheduleResponse DeleteAISchedule(Models\DeleteAIScheduleRequest $req) This API is used to delete AI scheduled tasks.

This API is used to delete a scheduled task based on the specified AI scheduled task ID. Deletion is irreversible.
 * @method Models\DeleteAssetFilterViewResponse DeleteAssetFilterView(Models\DeleteAssetFilterViewRequest $req) Delete the search view of a user-created specified asset
 * @method Models\DeleteAssetTagResponse DeleteAssetTag(Models\DeleteAssetTagRequest $req) Delete asset tag
 * @method Models\DeleteBaselineSelfDefinedPolicyListResponse DeleteBaselineSelfDefinedPolicyList(Models\DeleteBaselineSelfDefinedPolicyListRequest $req) Delete custom baseline policies in batches. Only support deletion of policies with PolicyType=SELF. After deletion, historical risk records are retained, but no new results are generated.
 * @method Models\DeleteCSIPMalwareScanTaskResponse DeleteCSIPMalwareScanTask(Models\DeleteCSIPMalwareScanTaskRequest $req) CSIP manual scan task delete API
 * @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) Deleting a cluster
 * @method Models\DeleteDomainAndIpResponse DeleteDomainAndIp(Models\DeleteDomainAndIpRequest $req) Delete Domain and IP Request
 * @method Models\DeleteDspmApplyOrderResponse DeleteDspmApplyOrder(Models\DeleteDspmApplyOrderRequest $req) Deletes a Dspm application form.
 * @method Models\DeleteDspmAssetAccountResponse DeleteDspmAssetAccount(Models\DeleteDspmAssetAccountRequest $req) Delete a Dspm asset account
 * @method Models\DeleteDspmAuditFilterStrategyResponse DeleteDspmAuditFilterStrategy(Models\DeleteDspmAuditFilterStrategyRequest $req) Delete a Dspm audit filter policy
 * @method Models\DeleteDspmBackupLogListResponse DeleteDspmBackupLogList(Models\DeleteDspmBackupLogListRequest $req) This API is used to delete the backup logs.
 * @method Models\DeleteDspmCkafkaConfigResponse DeleteDspmCkafkaConfig(Models\DeleteDspmCkafkaConfigRequest $req) This API is used to cancel the log shipping configuration.
 * @method Models\DeleteDspmExportTaskResponse DeleteDspmExportTask(Models\DeleteDspmExportTaskRequest $req) This API is used to delete export tasks.
 * @method Models\DeleteDspmIdentifyCategoryResponse DeleteDspmIdentifyCategory(Models\DeleteDspmIdentifyCategoryRequest $req) Delete dspm data identification category
 * @method Models\DeleteDspmIdentifyComplianceCategoryRelationResponse DeleteDspmIdentifyComplianceCategoryRelation(Models\DeleteDspmIdentifyComplianceCategoryRelationRequest $req) Deletes classification association from a dspm identification template
 * @method Models\DeleteDspmIdentifyComplianceGroupResponse DeleteDspmIdentifyComplianceGroup(Models\DeleteDspmIdentifyComplianceGroupRequest $req) Delete dspm data identification template
 * @method Models\DeleteDspmIdentifyComplianceRuleRelationResponse DeleteDspmIdentifyComplianceRuleRelation(Models\DeleteDspmIdentifyComplianceRuleRelationRequest $req) Delete dspm data identification template data item association
 * @method Models\DeleteDspmIdentifyLevelGroupResponse DeleteDspmIdentifyLevelGroup(Models\DeleteDspmIdentifyLevelGroupRequest $req) Delete a dspm data identification classification group
 * @method Models\DeleteDspmIdentifyRuleResponse DeleteDspmIdentifyRule(Models\DeleteDspmIdentifyRuleRequest $req) Delete dspm data identification data item
 * @method Models\DeleteDspmPersonalIdentifyResponse DeleteDspmPersonalIdentify(Models\DeleteDspmPersonalIdentifyRequest $req) Delete a Dspm personal identity id.
 * @method Models\DeleteDspmRestoreLogListResponse DeleteDspmRestoreLogList(Models\DeleteDspmRestoreLogListRequest $req) Delete restore logs
 * @method Models\DeleteDspmRiskStrategyResponse DeleteDspmRiskStrategy(Models\DeleteDspmRiskStrategyRequest $req) This API is used to delete a DSPM custom risk policy. It only supports deletion of custom policies with rule_source=custom. Built-in policies are non-deletable. Disable them by setting IsEnabled in ModifyDspmRiskStrategy.
 * @method Models\DeleteDspmShareUserDataResponse DeleteDspmShareUserData(Models\DeleteDspmShareUserDataRequest $req) Delete dspmg shared account data
 * @method Models\DeleteDspmWhitelistStrategyResponse DeleteDspmWhitelistStrategy(Models\DeleteDspmWhitelistStrategyRequest $req) Delete a Dspm allowlist policy.
 * @method Models\DeleteEDRRulesResponse DeleteEDRRules(Models\DeleteEDRRulesRequest $req) This API is used to delete EDR policies.
 * @method Models\DeleteEDRScanTaskResponse DeleteEDRScanTask(Models\DeleteEDRScanTaskRequest $req) This API is used to delete terminated scan tasks by physically deleting the primary and detailed tables. Only tasks in the final state can be deleted, and only the creator can perform the deletion.
 * @method Models\DeleteEdrLogCollectPathsResponse DeleteEdrLogCollectPaths(Models\DeleteEdrLogCollectPathsRequest $req) Delete EDR log collection path configurations in batches.
 * @method Models\DeleteExposureAutoTagRuleResponse DeleteExposureAutoTagRule(Models\DeleteExposureAutoTagRuleRequest $req) Delete rules for automatic cloud boundary tagging.
 * @method Models\DeleteIaCAccessTokenResponse DeleteIaCAccessToken(Models\DeleteIaCAccessTokenRequest $req) Delete an IaC detection integration Token
 * @method Models\DeleteIaCFileResponse DeleteIaCFile(Models\DeleteIaCFileRequest $req) Delete an IaC detection file
 * @method Models\DeleteImageRegistryResponse DeleteImageRegistry(Models\DeleteImageRegistryRequest $req) Delete image repository information.
 * @method Models\DeleteImageRegistryScanTaskResponse DeleteImageRegistryScanTask(Models\DeleteImageRegistryScanTaskRequest $req) Deletes an image repository scanning task.
 * @method Models\DeleteImageRegistryTimedScanTaskConfigResponse DeleteImageRegistryTimedScanTaskConfig(Models\DeleteImageRegistryTimedScanTaskConfigRequest $req) Delete the scheduled scan task configuration of an image repository.
 * @method Models\DeleteImageSensitiveWhitelistResponse DeleteImageSensitiveWhitelist(Models\DeleteImageSensitiveWhitelistRequest $req) This API is used to delete an allowlist for sensitive information from a container image.
 * @method Models\DeleteImageVirusWhitelistResponse DeleteImageVirusWhitelist(Models\DeleteImageVirusWhitelistRequest $req) This API is used to delete the image Trojan allowlist.
 * @method Models\DeleteImageVulWhitelistResponse DeleteImageVulWhitelist(Models\DeleteImageVulWhitelistRequest $req) Deletes the vulnerability allowlist of a container image
 * @method Models\DeleteLoginWhiteListResponse DeleteLoginWhiteList(Models\DeleteLoginWhiteListRequest $req) This API is used to delete the cross-region log-in allowlist rules.
 * @method Models\DeleteMachineClearHistoryResponse DeleteMachineClearHistory(Models\DeleteMachineClearHistoryRequest $req) This API is used to delete clearing records of a machine.
 * @method Models\DeleteRiskScanTaskResponse DeleteRiskScanTask(Models\DeleteRiskScanTaskRequest $req) Delete Risk Center Scan Task
 * @method Models\DeleteSandboxACLRuleResponse DeleteSandboxACLRule(Models\DeleteSandboxACLRuleRequest $req) Delete ACL user rules in batches. After deletion, rules are no longer returned in list queries and no longer take effect on traffic. If any ID does not exist or belongs to another tenant, an error is returned overall.
 * @method Models\DeleteSandboxDLPRuleResponse DeleteSandboxDLPRule(Models\DeleteSandboxDLPRuleRequest $req) Batch delete DLP user rules. If any ID does not exist or belongs to another tenant, an error is returned for the entire request.
 * @method Models\DeleteSandboxFileRuleResponse DeleteSandboxFileRule(Models\DeleteSandboxFileRuleRequest $req) Create command sandbox file access policy
 * @method Models\DeleteSandboxLLMAuditRuleResponse DeleteSandboxLLMAuditRule(Models\DeleteSandboxLLMAuditRuleRequest $req) Batch delete LLM audit user rules. If any ID does not exist or belongs to another tenant, an error is returned overall.
 * @method Models\DeleteVulWhitelistResponse DeleteVulWhitelist(Models\DeleteVulWhitelistRequest $req) This API is used to delete a vulnerability allowlist.
 * @method Models\DeleteWebhookPoliciesResponse DeleteWebhookPolicies(Models\DeleteWebhookPoliciesRequest $req) Delete notification policies in batches.
 * @method Models\DeleteWebhookReceiversResponse DeleteWebhookReceivers(Models\DeleteWebhookReceiversRequest $req) Delete receiving robots in batches. Before deletion, the reference relationships are automatically removed from all policies that refer to these robots.
 * @method Models\DescribeAIAgentAssetListResponse DescribeAIAgentAssetList(Models\DescribeAIAgentAssetListRequest $req) Search for AI agent asset list.
 * @method Models\DescribeAIAgentCredentialListResponse DescribeAIAgentCredentialList(Models\DescribeAIAgentCredentialListRequest $req) Retrieves the scan list of AIAgent asset credentials
 * @method Models\DescribeAIAgentCredentialLocationListResponse DescribeAIAgentCredentialLocationList(Models\DescribeAIAgentCredentialLocationListRequest $req) This API is used to query the leaked location list of one credential by credential group row ID in pages. It is used with the DescribeAIAgentCredentialList interface in the split and unfold scenario to avoid performance issues caused by pulling hundreds of thousands of locations at once in data skew scenarios.
 * @method Models\DescribeAIAgentSkillListResponse DescribeAIAgentSkillList(Models\DescribeAIAgentSkillListRequest $req) Search the skill list of an AI Agent
 * @method Models\DescribeAIAnalysisFileDownloadURLResponse DescribeAIAnalysisFileDownloadURL(Models\DescribeAIAnalysisFileDownloadURLRequest $req) Get the temporary download link of an AI analysis file.

The original address of the input file. Returns a signed temporary download link with a validity period of 2 hours.
 * @method Models\DescribeAIAnalysisHistoryResponse DescribeAIAnalysisHistory(Models\DescribeAIAnalysisHistoryRequest $req) Retrieve historical analysis records of the cloud security AI assistant.
 * @method Models\DescribeAIAnalysisRecommendQuestionsResponse DescribeAIAnalysisRecommendQuestions(Models\DescribeAIAnalysisRecommendQuestionsRequest $req) Retrieve recommended questions for AI QA.
 * @method Models\DescribeAIAnalysisRobotInfoResponse DescribeAIAnalysisRobotInfo(Models\DescribeAIAnalysisRobotInfoRequest $req) This API is used to obtain basic information of the Cloud Security AI Assistant.
 * @method Models\DescribeAIAnalysisSMTPResponse DescribeAIAnalysisSMTP(Models\DescribeAIAnalysisSMTPRequest $req) Query SMTP mailbox access information of the AI assistant
 * @method Models\DescribeAILinkSettingResponse DescribeAILinkSetting(Models\DescribeAILinkSettingRequest $req) Query the AI-Link engine configuration
 * @method Models\DescribeAIScheduleListResponse DescribeAIScheduleList(Models\DescribeAIScheduleListRequest $req) Query the list of AI scheduled tasks.

Supports paging query and status filtering, and returns the scheduled task list and total number of entries.
 * @method Models\DescribeAISchedulePlanListResponse DescribeAISchedulePlanList(Models\DescribeAISchedulePlanListRequest $req) Queries AI scheduled task trigger plans.

This API is used to query the future trigger plan list of a specified AI scheduled task within a given time window.
 * @method Models\DescribeAIScheduleStatsResponse DescribeAIScheduleStats(Models\DescribeAIScheduleStatsRequest $req) Queries AI scheduled task statistics information.

Returns the total number of scheduled tasks and the number of running tasks for the current user.
 * @method Models\DescribeAIScheduleTaskDetailResponse DescribeAIScheduleTaskDetail(Models\DescribeAIScheduleTaskDetailRequest $req) Queries the details of AI scheduled task executions.

This API is used to query the detailed information of a specified task execution by task ID, including the execution status and results.
 * @method Models\DescribeAIScheduleTaskListResponse DescribeAIScheduleTaskList(Models\DescribeAIScheduleTaskListRequest $req) This API is used to query the scheduled AI task execution list.

Queries the historical execution records of AI scheduled tasks. Supports pagination and filtering by scheduled task ID.
 * @method Models\DescribeAKAnalysisDetailResponse DescribeAKAnalysisDetail(Models\DescribeAKAnalysisDetailRequest $req) Access key alarm record AI analysis result details
 * @method Models\DescribeAbTestUserResponse DescribeAbTestUser(Models\DescribeAbTestUserRequest $req) Determine whether the user is a grayscale user
 * @method Models\DescribeAbnormalCallRecordResponse DescribeAbnormalCallRecord(Models\DescribeAbnormalCallRecordRequest $req) Get the call record list
 * @method Models\DescribeAccessKeyAlarmResponse DescribeAccessKeyAlarm(Models\DescribeAccessKeyAlarmRequest $req) List of access key alarm records
 * @method Models\DescribeAccessKeyAlarmDetailResponse DescribeAccessKeyAlarmDetail(Models\DescribeAccessKeyAlarmDetailRequest $req) Access key alarm record details
 * @method Models\DescribeAccessKeyAssetResponse DescribeAccessKeyAsset(Models\DescribeAccessKeyAssetRequest $req) Retrieve the user access key asset list
 * @method Models\DescribeAccessKeyRiskResponse DescribeAccessKeyRisk(Models\DescribeAccessKeyRiskRequest $req) List of access key risk records
 * @method Models\DescribeAccessKeyRiskDetailResponse DescribeAccessKeyRiskDetail(Models\DescribeAccessKeyRiskDetailRequest $req) Access key risk record details
 * @method Models\DescribeAccessKeyUserDetailResponse DescribeAccessKeyUserDetail(Models\DescribeAccessKeyUserDetailRequest $req) This API is used to query account details of a user.
 * @method Models\DescribeAccessKeyUserListResponse DescribeAccessKeyUserList(Models\DescribeAccessKeyUserListRequest $req) Query user account list
 * @method Models\DescribeAccessKeyWhiteListResponse DescribeAccessKeyWhiteList(Models\DescribeAccessKeyWhiteListRequest $req) Access key alarm record list
 * @method Models\DescribeAgentConfigSettingResponse DescribeAgentConfigSetting(Models\DescribeAgentConfigSettingRequest $req) Query client configuration settings (configuration group). This is a standalone API split from DescribeAgentRunMode.
 * @method Models\DescribeAgentRunModeResponse DescribeAgentRunMode(Models\DescribeAgentRunModeRequest $req) Get the client running mode and runtime configuration information
 * @method Models\DescribeAgentRunPolicyResponse DescribeAgentRunPolicy(Models\DescribeAgentRunPolicyRequest $req) Query client running policies (policy groups). This is a standalone API split from DescribeAgentRunMode.
 * @method Models\DescribeAlertListResponse DescribeAlertList(Models\DescribeAlertListRequest $req) Alarm Center full alarm list API
 * @method Models\DescribeAssetComponentListResponse DescribeAssetComponentList(Models\DescribeAssetComponentListRequest $req) Query the component list in an asset.
 * @method Models\DescribeAssetComponentRelatedImageListResponse DescribeAssetComponentRelatedImageList(Models\DescribeAssetComponentRelatedImageListRequest $req) Queries the list of associated images of image repository components.
 * @method Models\DescribeAssetDetailResponse DescribeAssetDetail(Models\DescribeAssetDetailRequest $req) Asset detail information
 * @method Models\DescribeAssetFilterViewsResponse DescribeAssetFilterViews(Models\DescribeAssetFilterViewsRequest $req) Asset search view
 * @method Models\DescribeAssetInfoResponse DescribeAssetInfo(Models\DescribeAssetInfoRequest $req) Asset information
 * @method Models\DescribeAssetLastSyncTimeResponse DescribeAssetLastSyncTime(Models\DescribeAssetLastSyncTimeRequest $req) Last Synchronization Time of Assets
 * @method Models\DescribeAssetOverviewResponse DescribeAssetOverview(Models\DescribeAssetOverviewRequest $req) Asset Overview statistics
 * @method Models\DescribeAssetProcessListResponse DescribeAssetProcessList(Models\DescribeAssetProcessListRequest $req) This API is used to query the process list of host nodes on exposed paths in cloud boundary analysis.
 * @method Models\DescribeAssetRiskDetailResponse DescribeAssetRiskDetail(Models\DescribeAssetRiskDetailRequest $req) Asset risk details
 * @method Models\DescribeAssetRiskListResponse DescribeAssetRiskList(Models\DescribeAssetRiskListRequest $req) Cloud resource configuration risk list from the asset perspective
 * @method Models\DescribeAssetSyncTaskStatusResponse DescribeAssetSyncTaskStatus(Models\DescribeAssetSyncTaskStatusRequest $req) Asset sync task status
 * @method Models\DescribeAssetTagAttributesResponse DescribeAssetTagAttributes(Models\DescribeAssetTagAttributesRequest $req) Retrieves asset tag attributes
 * @method Models\DescribeAssetTagTreeResponse DescribeAssetTagTree(Models\DescribeAssetTagTreeRequest $req) Asset tag tree structured data
 * @method Models\DescribeAssetTagsResponse DescribeAssetTags(Models\DescribeAssetTagsRequest $req) All assets
 * @method Models\DescribeAssetTreeResponse DescribeAssetTree(Models\DescribeAssetTreeRequest $req) Asset tree structure
 * @method Models\DescribeAssetViewVulRiskListResponse DescribeAssetViewVulRiskList(Models\DescribeAssetViewVulRiskListRequest $req) Obtain Vulnerability Risk List from Asset's Perspective
 * @method Models\DescribeBackendScanEngineRegionListResponse DescribeBackendScanEngineRegionList(Models\DescribeBackendScanEngineRegionListRequest $req) This API is used to query the region list of the backend scanning engine.
 * @method Models\DescribeBanModeResponse DescribeBanMode(Models\DescribeBanModeRequest $req) This API is used to obtain the brute-force blocking mode.
 * @method Models\DescribeBanStatusResponse DescribeBanStatus(Models\DescribeBanStatusRequest $req) This API is used to obtain the block button status.
 * @method Models\DescribeBaselineAggregatedItemListResponse DescribeBaselineAggregatedItemList(Models\DescribeBaselineAggregatedItemListRequest $req) This API is used to obtain the aggregated scan result list by detection item, for showing the number of passed and failed assets by detection item on the "Detection Item" Tab of the policy details page.
 * @method Models\DescribeBaselineAggregatedPolicyListResponse DescribeBaselineAggregatedPolicyList(Models\DescribeBaselineAggregatedPolicyListRequest $req) This API is used to get the aggregation scan result list by baseline policy dimension, for the "Baseline Scan Policy" module on the overview page to display pass/fail status by policy.
 * @method Models\DescribeBaselineCalculatingStatisticsPolicyIDListResponse DescribeBaselineCalculatingStatisticsPolicyIDList(Models\DescribeBaselineCalculatingStatisticsPolicyIDListRequest $req) Queries the list of Policy IDs currently at the "statistical calculation" status, used for frontend polling to judge whether the scan results statistics are ready.
 * @method Models\DescribeBaselineCategoryItemListResponse DescribeBaselineCategoryItemList(Models\DescribeBaselineCategoryItemListRequest $req) This API is used to query the detection item list of a category.
 * @method Models\DescribeBaselineFixRecordListResponse DescribeBaselineFixRecordList(Models\DescribeBaselineFixRecordListRequest $req) Get the historical record list of baseline risk corrections, used to show fixed detection items and corresponding assets on the "Correction Record" page.
 * @method Models\DescribeBaselineItemRiskListResponse DescribeBaselineItemRiskList(Models\DescribeBaselineItemRiskListRequest $req) This API is used to retrieve the risk record list of detection item dimensions.
 * @method Models\DescribeBaselineMainTaskItemListResponse DescribeBaselineMainTaskItemList(Models\DescribeBaselineMainTaskItemListRequest $req) Get the detection item list of built-in baseline classifications (parent category -> subcategory -> built-in detection item ID list) for selecting baseline detection items on the policy editing page.
 * @method Models\DescribeBaselineMainTaskListResponse DescribeBaselineMainTaskList(Models\DescribeBaselineMainTaskListRequest $req) Get the scan main task list for the Task Record page to show the history and results of one-click scan, period scanning, and disperse scan.
 * @method Models\DescribeBaselineOverviewResponse DescribeBaselineOverview(Models\DescribeBaselineOverviewRequest $req) Retrieve header data of the baseline overview page, including the total count of failed detection items, the number of fixes in the past one year, the last scan time, and whether period scanning is currently enabled.
 * @method Models\DescribeBaselinePolicyCategoryListResponse DescribeBaselinePolicyCategoryList(Models\DescribeBaselinePolicyCategoryListRequest $req) This API is used to retrieve the built-in baseline classification tree (parent category → subcategory → built-in detection item ID list) for policy details display.
 * @method Models\DescribeBaselinePolicyItemListResponse DescribeBaselinePolicyItemList(Models\DescribeBaselinePolicyItemListRequest $req) Get the Detection Item List configured in a policy.
 * @method Models\DescribeBaselinePolicyListResponse DescribeBaselinePolicyList(Models\DescribeBaselinePolicyListRequest $req) This API is used to obtain the list of baseline policies for list page display of system and custom policies and their configuration status in scenarios such as cycle plan management.
 * @method Models\DescribeBaselinePolicyNameExistAppidListResponse DescribeBaselinePolicyNameExistAppidList(Models\DescribeBaselinePolicyNameExistAppidListRequest $req) This API is used to obtain the list of existing users for a baseline policy name.
 * @method Models\DescribeBaselineSubTaskListResponse DescribeBaselineSubTaskList(Models\DescribeBaselineSubTaskListRequest $req) Get the scan subtask list to show the scan status and failure reason of each host or cluster in the "Asset dimension" section of the task details page.
 * @method Models\DescribeBaselineSyncConfResponse DescribeBaselineSyncConf(Models\DescribeBaselineSyncConfRequest $req) This API is used to get the baseline synchronization configuration of the current admin account. Only the Group Administrator can call this API. For ordinary member accounts, please use DescribeBaselineUserOtherConf.
 * @method Models\DescribeBaselineSystemCategoryListResponse DescribeBaselineSystemCategoryList(Models\DescribeBaselineSystemCategoryListRequest $req) Obtain the system built-in baseline classification tree (parent category → subcategory → built-in detection item ID list), used for selecting baseline detection items on the policy editing page.
 * @method Models\DescribeBaselineUserOtherConfResponse DescribeBaselineUserOtherConf(Models\DescribeBaselineUserOtherConfRequest $req) Retrieve user-level baseline configuration for the current account.
 * @method Models\DescribeBaselineUserWeakPasswordConfResponse DescribeBaselineUserWeakPasswordConf(Models\DescribeBaselineUserWeakPasswordConfRequest $req) This API is used to search for the custom dictionary of weak passwords for users under the current account.
 * @method Models\DescribeBruteAttackRulesResponse DescribeBruteAttackRules(Models\DescribeBruteAttackRulesRequest $req) This API is used to obtain brute force cracking rules.
 * @method Models\DescribeCFGRiskReportStatisticsResponse DescribeCFGRiskReportStatistics(Models\DescribeCFGRiskReportStatisticsRequest $req) Risk statistics for cloud resource configuration check reports
 * @method Models\DescribeCFGRiskStatisticsResponse DescribeCFGRiskStatistics(Models\DescribeCFGRiskStatisticsRequest $req) Query the statistical information of scanning results.
 * @method Models\DescribeCFWAssetStatisticsResponse DescribeCFWAssetStatistics(Models\DescribeCFWAssetStatisticsRequest $req) Cloud Defense Asset Center Statistics
 * @method Models\DescribeCLSLogIndexV3Response DescribeCLSLogIndexV3(Models\DescribeCLSLogIndexV3Request $req) Get log index information
 * @method Models\DescribeCLSLogListV3Response DescribeCLSLogListV3(Models\DescribeCLSLogListV3Request $req) Log analytics retrieval interface v3
 * @method Models\DescribeCSCPayInfoResponse DescribeCSCPayInfo(Models\DescribeCSCPayInfoRequest $req) Query the consolidated billing information of the current account, including order status, payment mode, quotas, and other detailed information.
 * @method Models\DescribeCSIPLicenseBindScheduleResponse DescribeCSIPLicenseBindSchedule(Models\DescribeCSIPLicenseBindScheduleRequest $req) Query the progress of the async binding task returned by ModifyCSIPLicenseBinds.
 * @method Models\DescribeCSIPMalwareScanTaskDetailResponse DescribeCSIPMalwareScanTaskDetail(Models\DescribeCSIPMalwareScanTaskDetailRequest $req) This API is used to get host details of a CSIP scan task.
 * @method Models\DescribeCSIPMalwareScanTaskProgressResponse DescribeCSIPMalwareScanTaskProgress(Models\DescribeCSIPMalwareScanTaskProgressRequest $req) This API is used to query the progress of CSIP manual scan.
 * @method Models\DescribeCSIPRiskStatisticsResponse DescribeCSIPRiskStatistics(Models\DescribeCSIPRiskStatisticsRequest $req) Obtain risk center risk overview sample code
 * @method Models\DescribeCSPMPayInfoResponse DescribeCSPMPayInfo(Models\DescribeCSPMPayInfoRequest $req) This API is used to obtain purchased CSPM order information.
 * @method Models\DescribeCVMAssetInfoResponse DescribeCVMAssetInfo(Models\DescribeCVMAssetInfoRequest $req) CVM Details
 * @method Models\DescribeCVMAssetsResponse DescribeCVMAssets(Models\DescribeCVMAssetsRequest $req) Get cvm list
 * @method Models\DescribeCWPExposePathResponse DescribeCWPExposePath(Models\DescribeCWPExposePathRequest $req) Queries cloud boundary analysis path nodes (dedicated for hosts)
 * @method Models\DescribeCWPExposuresResponse DescribeCWPExposures(Models\DescribeCWPExposuresRequest $req) Cloud boundary analysis asset list (suitable for host assets)
 * @method Models\DescribeCWPLicenseBindScheduleResponse DescribeCWPLicenseBindSchedule(Models\DescribeCWPLicenseBindScheduleRequest $req) This API is used to query the binding task progress of the authorization.
 * @method Models\DescribeCWPMachineDetailResponse DescribeCWPMachineDetail(Models\DescribeCWPMachineDetailRequest $req) Host details
 * @method Models\DescribeCWPMachineOsListResponse DescribeCWPMachineOsList(Models\DescribeCWPMachineOsListRequest $req) This API is used to query the machine operating system list.
 * @method Models\DescribeCWPMachinesResponse DescribeCWPMachines(Models\DescribeCWPMachinesRequest $req) Host list
 * @method Models\DescribeCWPOrderListResponse DescribeCWPOrderList(Models\DescribeCWPOrderListRequest $req) Query the resource order list.
 * @method Models\DescribeCWPScanIpInfoResponse DescribeCWPScanIpInfo(Models\DescribeCWPScanIpInfoRequest $req) Query Tencent Cloud scan IP information
 * @method Models\DescribeCWPTaskDurationResponse DescribeCWPTaskDuration(Models\DescribeCWPTaskDurationRequest $req) Obtain Task Distribution Duration
 * @method Models\DescribeCallRecordResponse DescribeCallRecord(Models\DescribeCallRecordRequest $req) Query the call record list
 * @method Models\DescribeCheckConnectivityHostListResponse DescribeCheckConnectivityHostList(Models\DescribeCheckConnectivityHostListRequest $req) Query the list of connectivity detection hosts
 * @method Models\DescribeCheckViewRisksResponse DescribeCheckViewRisks(Models\DescribeCheckViewRisksRequest $req) Cloud resource configuration risk list from the check perspective
 * @method Models\DescribeClbListenerListResponse DescribeClbListenerList(Models\DescribeClbListenerListRequest $req) Queries the listener list corresponding to a specified Tencent Cloud CLB instance.
 * @method Models\DescribeClbListenerRulesResponse DescribeClbListenerRules(Models\DescribeClbListenerRulesRequest $req) Queries the list of Layer 7 forwarding rules corresponding to a specified CLB instance.
 * @method Models\DescribeClbTargetsResponse DescribeClbTargets(Models\DescribeClbTargetsRequest $req) Query the CLB backend service list
 * @method Models\DescribeCloudAssetsResponse DescribeCloudAssets(Models\DescribeCloudAssetsRequest $req) All assets
 * @method Models\DescribeCloudFunctionListResponse DescribeCloudFunctionList(Models\DescribeCloudFunctionListRequest $req) Function list
 * @method Models\DescribeClusterAssetListResponse DescribeClusterAssetList(Models\DescribeClusterAssetListRequest $req) Queries the asset list of a container cluster
 * @method Models\DescribeClusterAssetSyncTaskStatusResponse DescribeClusterAssetSyncTaskStatus(Models\DescribeClusterAssetSyncTaskStatusRequest $req) This API is used to query the synchronization task status of cluster assets.
 * @method Models\DescribeClusterAssetsResponse DescribeClusterAssets(Models\DescribeClusterAssetsRequest $req) This example shows you how to obtain the cluster list.
 * @method Models\DescribeClusterContainerAppListResponse DescribeClusterContainerAppList(Models\DescribeClusterContainerAppListRequest $req) This API is used to query the associated application list of a container. It retrieves associated application service information by container ID and supports pagination.
 * @method Models\DescribeClusterContainerComponentListResponse DescribeClusterContainerComponentList(Models\DescribeClusterContainerComponentListRequest $req) Query the list of components associated with a container. Get associated component information by container ID. Pagination is supported.
 * @method Models\DescribeClusterContainerDetailResponse DescribeClusterContainerDetail(Models\DescribeClusterContainerDetailRequest $req) This API is used to query cluster container details. It retrieves basic container info, mirror information, mount information, network info, and associated node information by container ID.
 * @method Models\DescribeClusterContainerListResponse DescribeClusterContainerList(Models\DescribeClusterContainerListRequest $req) Query the container list of a cluster.
 * @method Models\DescribeClusterContainerPortListResponse DescribeClusterContainerPortList(Models\DescribeClusterContainerPortListRequest $req) Query the list of ports associated with a container. This API is used to obtain associated port information by container ID and supports pagination.
 * @method Models\DescribeClusterContainerProcessListResponse DescribeClusterContainerProcessList(Models\DescribeClusterContainerProcessListRequest $req) This API is used to query the associated process list of a container. It obtains associated process information by container ID, supports time sorting and pagination. Filter.By supports StartTime; Filter.Order supports ASC/DESC.
 * @method Models\DescribeClusterContainerWebServiceListResponse DescribeClusterContainerWebServiceList(Models\DescribeClusterContainerWebServiceListRequest $req) This API is used to query the associated Web Service List of a container. It retrieves associated web service information by container ID and supports pagination.
 * @method Models\DescribeClusterDetailResponse DescribeClusterDetail(Models\DescribeClusterDetailRequest $req) Querying Cluster Details
 * @method Models\DescribeClusterInstallCommandResponse DescribeClusterInstallCommand(Models\DescribeClusterInstallCommandRequest $req) Query the cluster installation command
 * @method Models\DescribeClusterNamespaceListResponse DescribeClusterNamespaceList(Models\DescribeClusterNamespaceListRequest $req) Query the cluster namespace list.
 * @method Models\DescribeClusterNodeListResponse DescribeClusterNodeList(Models\DescribeClusterNodeListRequest $req) Query the cluster node list.
 * @method Models\DescribeClusterPodAssetsResponse DescribeClusterPodAssets(Models\DescribeClusterPodAssetsRequest $req) Cluster Pod List
 * @method Models\DescribeClusterPodDetailResponse DescribeClusterPodDetail(Models\DescribeClusterPodDetailRequest $req) This API is used to query Pod details in A cluster. It is A new Type A API for the container asset revision and serves as the main entrance to the Pod Asset Details Page. The input parameter is only UniqueID. The output parameters cover asset information, cluster, namespace, node, Workload, as well as the number of risk events and alarm events grouped by four risk levels.
 * @method Models\DescribeClusterPodListResponse DescribeClusterPodList(Models\DescribeClusterPodListRequest $req) Inquires the cluster pod list
 * @method Models\DescribeClusterServiceListResponse DescribeClusterServiceList(Models\DescribeClusterServiceListRequest $req) Query the cluster service list.
 * @method Models\DescribeClusterSummaryResponse DescribeClusterSummary(Models\DescribeClusterSummaryRequest $req) Query cluster overview data
 * @method Models\DescribeClusterSuperNodeInfoResponse DescribeClusterSuperNodeInfo(Models\DescribeClusterSuperNodeInfoRequest $req) This API is used to query super node details in a cluster and return basic info (region, availability zone, last asset update time, node origin, subnet, and core count) and cluster information (cluster name, Cluster ID, cluster status, Kubernetes version, and Kubelet version).
 * @method Models\DescribeComplianceOverviewResponse DescribeComplianceOverview(Models\DescribeComplianceOverviewRequest $req) Cloud resource configuration detection compliance overview
 * @method Models\DescribeComplianceRiskListResponse DescribeComplianceRiskList(Models\DescribeComplianceRiskListRequest $req) Cloud resource configuration risk list from the compliance standard aggregation perspective
 * @method Models\DescribeComplianceStandardTermTreeResponse DescribeComplianceStandardTermTree(Models\DescribeComplianceStandardTermTreeRequest $req) Cloud resource configuration inspection standard chapter clause tree
 * @method Models\DescribeComplianceStatisticsResponse DescribeComplianceStatistics(Models\DescribeComplianceStatisticsRequest $req) Category statistics for cloud resource configuration detection specifications
 * @method Models\DescribeConfigCheckRulesResponse DescribeConfigCheckRules(Models\DescribeConfigCheckRulesRequest $req) Example of cloud resource configuration risk rule list
 * @method Models\DescribeCspmShardConfigResponse DescribeCspmShardConfig(Models\DescribeCspmShardConfigRequest $req) This API is used to query the CSPM auto quota shared configuration.
 * @method Models\DescribeCustomAssetTagCountResponse DescribeCustomAssetTagCount(Models\DescribeCustomAssetTagCountRequest $req) number of user-customized tags
 * @method Models\DescribeCustomRiskRuleDetailResponse DescribeCustomRiskRuleDetail(Models\DescribeCustomRiskRuleDetailRequest $req) Example of a custom risk rule configuration detail list
 * @method Models\DescribeCustomRiskRulesResponse DescribeCustomRiskRules(Models\DescribeCustomRiskRulesRequest $req) Lists the configuration of custom risk rules
 * @method Models\DescribeDbAssetInfoResponse DescribeDbAssetInfo(Models\DescribeDbAssetInfoRequest $req) DB Asset Details
 * @method Models\DescribeDbAssetsResponse DescribeDbAssets(Models\DescribeDbAssetsRequest $req) Database Asset List
 * @method Models\DescribeDefaultSecurityScoreRuleResponse DescribeDefaultSecurityScoreRule(Models\DescribeDefaultSecurityScoreRuleRequest $req) Retrieve the built-in default security scoring rules for resetting custom rules.
 * @method Models\DescribeDomainAssetsResponse DescribeDomainAssets(Models\DescribeDomainAssetsRequest $req) Domain name list
 * @method Models\DescribeDspmAccessRecordResponse DescribeDspmAccessRecord(Models\DescribeDspmAccessRecordRequest $req) Query Dspm access records
 * @method Models\DescribeDspmAccessTopologyAccountsResponse DescribeDspmAccessTopologyAccounts(Models\DescribeDspmAccessTopologyAccountsRequest $req) Queries the Dspm access topology account list
 * @method Models\DescribeDspmAccessTopologyAssetsResponse DescribeDspmAccessTopologyAssets(Models\DescribeDspmAccessTopologyAssetsRequest $req) Query the Dspm access topology asset list
 * @method Models\DescribeDspmAccessTopologyIpsResponse DescribeDspmAccessTopologyIps(Models\DescribeDspmAccessTopologyIpsRequest $req) Query the Dspm access topology ip list
 * @method Models\DescribeDspmApplyHistoryResponse DescribeDspmApplyHistory(Models\DescribeDspmApplyHistoryRequest $req) Queries Dspm application history
 * @method Models\DescribeDspmApplyOrderListResponse DescribeDspmApplyOrderList(Models\DescribeDspmApplyOrderListRequest $req) Queries the Dspm application form list
 * @method Models\DescribeDspmApproveHistoryResponse DescribeDspmApproveHistory(Models\DescribeDspmApproveHistoryRequest $req) Query Dspm approval history
 * @method Models\DescribeDspmApproveOrderListResponse DescribeDspmApproveOrderList(Models\DescribeDspmApproveOrderListRequest $req) Queries Dspm approval form list
 * @method Models\DescribeDspmAssetAccessTopologyResponse DescribeDspmAssetAccessTopology(Models\DescribeDspmAssetAccessTopologyRequest $req) Query the Dspm asset access topology
 * @method Models\DescribeDspmAssetAccountIdentifyResponse DescribeDspmAssetAccountIdentify(Models\DescribeDspmAssetAccountIdentifyRequest $req) Query Dspm asset account identity information
 * @method Models\DescribeDspmAssetAccountPresetPrivilegesResponse DescribeDspmAssetAccountPresetPrivileges(Models\DescribeDspmAssetAccountPresetPrivilegesRequest $req) Querying preset privileged information of Dspm asset accounts
 * @method Models\DescribeDspmAssetAccountRecycledPrivilegesResponse DescribeDspmAssetAccountRecycledPrivileges(Models\DescribeDspmAssetAccountRecycledPrivilegesRequest $req) Querying privileged information of Dspm asset accounts after recycling
 * @method Models\DescribeDspmAssetAccountsResponse DescribeDspmAssetAccounts(Models\DescribeDspmAssetAccountsRequest $req) Query the Dspm asset account list.
 * @method Models\DescribeDspmAssetDatabaseListResponse DescribeDspmAssetDatabaseList(Models\DescribeDspmAssetDatabaseListRequest $req) This API is used to query asset database information.
 * @method Models\DescribeDspmAssetDatabasesResponse DescribeDspmAssetDatabases(Models\DescribeDspmAssetDatabasesRequest $req) This API is used to query the list of Dspm asset databases.
 * @method Models\DescribeDspmAssetFieldListResponse DescribeDspmAssetFieldList(Models\DescribeDspmAssetFieldListRequest $req) Queries the dspm asset field information
 * @method Models\DescribeDspmAssetFieldSamplesResponse DescribeDspmAssetFieldSamples(Models\DescribeDspmAssetFieldSamplesRequest $req) Query sample values of dspm asset fields
 * @method Models\DescribeDspmAssetIdentifyInfoListResponse DescribeDspmAssetIdentifyInfoList(Models\DescribeDspmAssetIdentifyInfoListRequest $req) Queries the dspm asset data recognition information list
 * @method Models\DescribeDspmAssetIdsResponse DescribeDspmAssetIds(Models\DescribeDspmAssetIdsRequest $req) Queries the list of Dspm asset IDs
 * @method Models\DescribeDspmAssetLoginCredentialResponse DescribeDspmAssetLoginCredential(Models\DescribeDspmAssetLoginCredentialRequest $req) Query Dspm asset login credentials
 * @method Models\DescribeDspmAssetSecurityAnalyseStatusResponse DescribeDspmAssetSecurityAnalyseStatus(Models\DescribeDspmAssetSecurityAnalyseStatusRequest $req) Query the security analysis status of Dspm assets.
 * @method Models\DescribeDspmAssetSupportedPrivilegesResponse DescribeDspmAssetSupportedPrivileges(Models\DescribeDspmAssetSupportedPrivilegesRequest $req) Queries supported permissions for Dspm assets
 * @method Models\DescribeDspmAssetTableListResponse DescribeDspmAssetTableList(Models\DescribeDspmAssetTableListRequest $req) This API is used to query asset table information.
 * @method Models\DescribeDspmAssetsResponse DescribeDspmAssets(Models\DescribeDspmAssetsRequest $req) Queries the Dspm asset list.
 * @method Models\DescribeDspmAuditFilterStrategyResponse DescribeDspmAuditFilterStrategy(Models\DescribeDspmAuditFilterStrategyRequest $req) Query dspm audit filter policies
 * @method Models\DescribeDspmBackupLogListResponse DescribeDspmBackupLogList(Models\DescribeDspmBackupLogListRequest $req) This API is used to query the backup log list.
 * @method Models\DescribeDspmBackupSettingResponse DescribeDspmBackupSetting(Models\DescribeDspmBackupSettingRequest $req) This API is used to query the log backup configuration.
 * @method Models\DescribeDspmCkafkaRouteListResponse DescribeDspmCkafkaRouteList(Models\DescribeDspmCkafkaRouteListRequest $req) This API is used to query the routing information of the CKafka instance.
 * @method Models\DescribeDspmCkafkaTopicListResponse DescribeDspmCkafkaTopicList(Models\DescribeDspmCkafkaTopicListRequest $req) This API is used to query the topic list of the instance.
 * @method Models\DescribeDspmDictionaryListResponse DescribeDspmDictionaryList(Models\DescribeDspmDictionaryListRequest $req) Query the list of dspm dictionary information
 * @method Models\DescribeDspmExportTaskResponse DescribeDspmExportTask(Models\DescribeDspmExportTaskRequest $req) This API is used to query export tasks.
 * @method Models\DescribeDspmIdentifyCategoryListResponse DescribeDspmIdentifyCategoryList(Models\DescribeDspmIdentifyCategoryListRequest $req) Querying the dspm data identification classification list
 * @method Models\DescribeDspmIdentifyComplianceCategoryRuleListResponse DescribeDspmIdentifyComplianceCategoryRuleList(Models\DescribeDspmIdentifyComplianceCategoryRuleListRequest $req) This API is used to query the list of data items associated with dspm data recognition template classifications.
 * @method Models\DescribeDspmIdentifyComplianceGroupDetailResponse DescribeDspmIdentifyComplianceGroupDetail(Models\DescribeDspmIdentifyComplianceGroupDetailRequest $req) Query dspm identification template details
 * @method Models\DescribeDspmIdentifyComplianceGroupListResponse DescribeDspmIdentifyComplianceGroupList(Models\DescribeDspmIdentifyComplianceGroupListRequest $req) Queries the dspm data identification template list
 * @method Models\DescribeDspmIdentifyDistributionStatisticsResponse DescribeDspmIdentifyDistributionStatistics(Models\DescribeDspmIdentifyDistributionStatisticsRequest $req) Querying dspm data identification distribution statistics
 * @method Models\DescribeDspmIdentifyIdListResponse DescribeDspmIdentifyIdList(Models\DescribeDspmIdentifyIdListRequest $req) Query the Dspm identity ID list.
 * @method Models\DescribeDspmIdentifyInfoResponse DescribeDspmIdentifyInfo(Models\DescribeDspmIdentifyInfoRequest $req) Queries the Dspm identity information.
 * @method Models\DescribeDspmIdentifyInfoListResponse DescribeDspmIdentifyInfoList(Models\DescribeDspmIdentifyInfoListRequest $req) Query the Dspm identity information list
 * @method Models\DescribeDspmIdentifyLevelGroupListResponse DescribeDspmIdentifyLevelGroupList(Models\DescribeDspmIdentifyLevelGroupListRequest $req) Query the dspm data identification classification group list
 * @method Models\DescribeDspmIdentifyRuleDetailResponse DescribeDspmIdentifyRuleDetail(Models\DescribeDspmIdentifyRuleDetailRequest $req) Queries the dspm data identification data item details
 * @method Models\DescribeDspmIdentifyRuleListResponse DescribeDspmIdentifyRuleList(Models\DescribeDspmIdentifyRuleListRequest $req) Query the list of dspm identification data items.
 * @method Models\DescribeDspmIdentifyRuleTestResultResponse DescribeDspmIdentifyRuleTestResult(Models\DescribeDspmIdentifyRuleTestResultRequest $req) This API is used to query verification results of dspm data identification data items.
 * @method Models\DescribeDspmLogDeliveryTypeResponse DescribeDspmLogDeliveryType(Models\DescribeDspmLogDeliveryTypeRequest $req) This API is used to query the log type for log shipping.
 * @method Models\DescribeDspmLogListResponse DescribeDspmLogList(Models\DescribeDspmLogListRequest $req) This API is used to query the log list information.
 * @method Models\DescribeDspmLogTypeConfigListResponse DescribeDspmLogTypeConfigList(Models\DescribeDspmLogTypeConfigListRequest $req) This API is used to query the log shipping configuration of a tenant.
 * @method Models\DescribeDspmPayInfoResponse DescribeDspmPayInfo(Models\DescribeDspmPayInfoRequest $req) Get purchased Dspm order information
 * @method Models\DescribeDspmPersonApplyHistoryResponse DescribeDspmPersonApplyHistory(Models\DescribeDspmPersonApplyHistoryRequest $req) Queries Dspm visitor application records.
 * @method Models\DescribeDspmPersonalIdentifyListResponse DescribeDspmPersonalIdentifyList(Models\DescribeDspmPersonalIdentifyListRequest $req) Query the list of Dspm personal identification information.
 * @method Models\DescribeDspmResourceResponse DescribeDspmResource(Models\DescribeDspmResourceRequest $req) Queries Dspm instances
 * @method Models\DescribeDspmRiskResponse DescribeDspmRisk(Models\DescribeDspmRiskRequest $req) Queries Dspm risk records
 * @method Models\DescribeDspmRiskDetailResponse DescribeDspmRiskDetail(Models\DescribeDspmRiskDetailRequest $req) Queries Dspm risk details
 * @method Models\DescribeDspmRiskStrategyResponse DescribeDspmRiskStrategy(Models\DescribeDspmRiskStrategyRequest $req) Queries Dspm risk policies
 * @method Models\DescribeDspmRiskStrategyGroupResponse DescribeDspmRiskStrategyGroup(Models\DescribeDspmRiskStrategyGroupRequest $req) Query Dspm risk group policies
 * @method Models\DescribeDspmRiskTendencyResponse DescribeDspmRiskTendency(Models\DescribeDspmRiskTendencyRequest $req) Query Dspm risk trends.
 * @method Models\DescribeDspmSessionListResponse DescribeDspmSessionList(Models\DescribeDspmSessionListRequest $req) This API is used to query the audit session list information.
 * @method Models\DescribeDspmStatisticsResponse DescribeDspmStatistics(Models\DescribeDspmStatisticsRequest $req) Query Dspm statistical information
 * @method Models\DescribeDspmSupportedAssetTypeResponse DescribeDspmSupportedAssetType(Models\DescribeDspmSupportedAssetTypeRequest $req) Queries information on asset types supported by Dspm.
 * @method Models\DescribeDspmSyncAssetsStatusResponse DescribeDspmSyncAssetsStatus(Models\DescribeDspmSyncAssetsStatusRequest $req) Query the Dspm asset status synchronization.
 * @method Models\DescribeDspmSyncUsersStatusResponse DescribeDspmSyncUsersStatus(Models\DescribeDspmSyncUsersStatusRequest $req) Query the Dspm user synchronization status.
 * @method Models\DescribeDspmUserCkafkaInstanceListResponse DescribeDspmUserCkafkaInstanceList(Models\DescribeDspmUserCkafkaInstanceListRequest $req) This API is used to query the tenant CKafka instance list.
 * @method Models\DescribeDspmWhitelistStrategyResponse DescribeDspmWhitelistStrategy(Models\DescribeDspmWhitelistStrategyRequest $req) Query the Dspm allowlist policy.
 * @method Models\DescribeDynamicAssetsResponse DescribeDynamicAssets(Models\DescribeDynamicAssetsRequest $req) List of specified asset types
 * @method Models\DescribeEDRRuleListResponse DescribeEDRRuleList(Models\DescribeEDRRuleListRequest $req) This API is used to obtain the list of EDR policies.
 * @method Models\DescribeEDRScanRecordListResponse DescribeEDRScanRecordList(Models\DescribeEDRScanRecordListRequest $req) This API is used to query the scan task list. Filter.Filters supports Name: Keyword (blurry, OperatorType=9), ScanType (MANUAL/CYCLE), TaskType (HOST/CONTAINER), Status (WAIT/SCANNING/FINISHED/FAILED/CANCELED), AppId (account).
 * @method Models\DescribeEDRScanTaskDetailResponse DescribeEDRScanTaskDetail(Models\DescribeEDRScanTaskDetailRequest $req) Query scan task details. Filter.Filters supports Name: Status (asset scan status, OperatorType=7 IN match, Value: WAIT/SCANNING/FINISHED/FAILED).
 * @method Models\DescribeEdrAlertCountForAssetResponse DescribeEdrAlertCountForAsset(Models\DescribeEdrAlertCountForAssetRequest $req) This API is used to obtain EDR alarm quantity statistics for the asset module. It queries the EDR alarm table based on the passed-in MemberId and InstanceIDs and returns the number of alarm records. If InstanceIDs is empty, summarized statistics are returned. Otherwise, statistics are returned by InstanceID granularity.
 * @method Models\DescribeEdrAlertCountForContainerResponse DescribeEdrAlertCountForContainer(Models\DescribeEdrAlertCountForContainerRequest $req) Alarm quantity statistics in the container scenario.
 * @method Models\DescribeEdrAlertInfoResponse DescribeEdrAlertInfo(Models\DescribeEdrAlertInfoRequest $req) This API is used to obtain EDR alert details, including complete information such as alert content JSON, asset enrichment, and intelligence enrichment.
 * @method Models\DescribeEdrAlertListResponse DescribeEdrAlertList(Models\DescribeEdrAlertListRequest $req) Query the EDR alarm list.
 * @method Models\DescribeEdrAlertMultiAttackStagesResponse DescribeEdrAlertMultiAttackStages(Models\DescribeEdrAlertMultiAttackStagesRequest $req) EDR alert multi-attack stage queries
 * @method Models\DescribeEdrAlertSummaryResponse DescribeEdrAlertSummary(Models\DescribeEdrAlertSummaryRequest $req) Retrieves EDR alarm statistics
 * @method Models\DescribeEdrAlertThreatTagsResponse DescribeEdrAlertThreatTags(Models\DescribeEdrAlertThreatTagsRequest $req) This API is used to query EDR alarm tags in batches.
 * @method Models\DescribeEdrExcludeNetworkSegmentsResponse DescribeEdrExcludeNetworkSegments(Models\DescribeEdrExcludeNetworkSegmentsRequest $req) This API is used to query the exclusion network segment configurations for EDR log collection. TCP logs from network segments in the exclusion list will not be collected. If no user configuration exists, the system-recommended default network segments will be returned.
 * @method Models\DescribeEdrExportJobDownloadURLResponse DescribeEdrExportJobDownloadURL(Models\DescribeEdrExportJobDownloadURLRequest $req) Query the EDR export download link
 * @method Models\DescribeEdrExportJobListResponse DescribeEdrExportJobList(Models\DescribeEdrExportJobListRequest $req) Export the EDR task list.
 * @method Models\DescribeEdrLogCollectPathsResponse DescribeEdrLogCollectPaths(Models\DescribeEdrLogCollectPathsRequest $req) This API is used to query the collection path configuration.
 * @method Models\DescribeExportJobDownloadURLResponse DescribeExportJobDownloadURL(Models\DescribeExportJobDownloadURLRequest $req) Result download URL of an export task
 * @method Models\DescribeExportJobManageListResponse DescribeExportJobManageList(Models\DescribeExportJobManageListRequest $req) Exports the task list
 * @method Models\DescribeExposeAssetCategoryResponse DescribeExposeAssetCategory(Models\DescribeExposeAssetCategoryRequest $req) Cloud boundary analysis asset category
 * @method Models\DescribeExposePathResponse DescribeExposePath(Models\DescribeExposePathRequest $req) Query the cloud boundary analysis path node
 * @method Models\DescribeExposeRiskStatisticsResponse DescribeExposeRiskStatistics(Models\DescribeExposeRiskStatisticsRequest $req) Pending risks to be governed for cloud boundaries
 * @method Models\DescribeExposeRisksResponse DescribeExposeRisks(Models\DescribeExposeRisksRequest $req) List of pending risks in cloud boundaries
 * @method Models\DescribeExposeRulesResponse DescribeExposeRules(Models\DescribeExposeRulesRequest $req) List of boundary rules
 * @method Models\DescribeExposureAutoTagAttributeResponse DescribeExposureAutoTagAttribute(Models\DescribeExposureAutoTagAttributeRequest $req) Rule attributes for automatic tagging at cloud boundaries
 * @method Models\DescribeExposureAutoTagRulesResponse DescribeExposureAutoTagRules(Models\DescribeExposureAutoTagRulesRequest $req) Automatic tagging of cloud boundaries - rule list
 * @method Models\DescribeExposureTrendResponse DescribeExposureTrend(Models\DescribeExposureTrendRequest $req) Query Internet exposure cycle count trend statistics.
 * @method Models\DescribeExposuresResponse DescribeExposures(Models\DescribeExposuresRequest $req) Cloud boundary analysis asset list
 * @method Models\DescribeGatewayAssetsResponse DescribeGatewayAssets(Models\DescribeGatewayAssetsRequest $req) Obtain Gateway List
 * @method Models\DescribeHighBaseLineRiskListResponse DescribeHighBaseLineRiskList(Models\DescribeHighBaseLineRiskListRequest $req) Query the high-risk baseline risk list of host nodes under the cloud boundary analysis exposed path.
 * @method Models\DescribeHostKBRiskListResponse DescribeHostKBRiskList(Models\DescribeHostKBRiskListRequest $req) Search the host kb risk list.
 * @method Models\DescribeHostVulItemVPRInfoResponse DescribeHostVulItemVPRInfo(Models\DescribeHostVulItemVPRInfoRequest $req) This API is used to obtain host vulnerability VPR information.
 * @method Models\DescribeHostVulOverviewResponse DescribeHostVulOverview(Models\DescribeHostVulOverviewRequest $req) This API is used to obtain the host vulnerability overview.
 * @method Models\DescribeHostVulRiskListResponse DescribeHostVulRiskList(Models\DescribeHostVulRiskListRequest $req) This API is used to retrieve the host vulnerability risk list.
 * @method Models\DescribeIaCFileListResponse DescribeIaCFileList(Models\DescribeIaCFileListRequest $req) Retrieve the IaC detection file list.
 * @method Models\DescribeIaCFileOverviewResponse DescribeIaCFileOverview(Models\DescribeIaCFileOverviewRequest $req) Obtain the IaC detection file overview.
 * @method Models\DescribeIaCFileReportResponse DescribeIaCFileReport(Models\DescribeIaCFileReportRequest $req) Obtain the IaC detection file report.
 * @method Models\DescribeIaCTokenListResponse DescribeIaCTokenList(Models\DescribeIaCTokenListRequest $req) This API is used to search the IaC detection integration Token list.
 * @method Models\DescribeImageAssetDetailResponse DescribeImageAssetDetail(Models\DescribeImageAssetDetailRequest $req) Queries image asset details.
 * @method Models\DescribeImageAssetListResponse DescribeImageAssetList(Models\DescribeImageAssetListRequest $req) Query the image asset list
 * @method Models\DescribeImageAssociatedAssetCountResponse DescribeImageAssociatedAssetCount(Models\DescribeImageAssociatedAssetCountRequest $req) Query the number of related assets of an image.
 * @method Models\DescribeImageAssociatedContainerListResponse DescribeImageAssociatedContainerList(Models\DescribeImageAssociatedContainerListRequest $req) Queries the container assets associated with an image.
 * @method Models\DescribeImageAssociatedHostListResponse DescribeImageAssociatedHostList(Models\DescribeImageAssociatedHostListRequest $req) Query the asset list of hosts associated with the image.
 * @method Models\DescribeImageComponentListResponse DescribeImageComponentList(Models\DescribeImageComponentListRequest $req) Queries the image component list.
 * @method Models\DescribeImageExportJobListResponse DescribeImageExportJobList(Models\DescribeImageExportJobListRequest $req) Queries the image repository export task list
 * @method Models\DescribeImageLayerListResponse DescribeImageLayerList(Models\DescribeImageLayerListRequest $req) Query the image layer information list
 * @method Models\DescribeImageLayerVulListResponse DescribeImageLayerVulList(Models\DescribeImageLayerVulListRequest $req) Queries the list of vulnerabilities in an image layer
 * @method Models\DescribeImageRegistryAssetOverviewResponse DescribeImageRegistryAssetOverview(Models\DescribeImageRegistryAssetOverviewRequest $req) Query the repository asset overview of images
 * @method Models\DescribeImageRegistryConnectivityTaskResultResponse DescribeImageRegistryConnectivityTaskResult(Models\DescribeImageRegistryConnectivityTaskResultRequest $req) Query the connectivity check task result of an image repository.
 * @method Models\DescribeImageRegistryListResponse DescribeImageRegistryList(Models\DescribeImageRegistryListRequest $req) This API is used to query the image repository list.
 * @method Models\DescribeImageRegistryNamespaceListResponse DescribeImageRegistryNamespaceList(Models\DescribeImageRegistryNamespaceListRequest $req) This API is used to query the mirror repository namespace list.
 * @method Models\DescribeImageRegistryScanSubTaskListResponse DescribeImageRegistryScanSubTaskList(Models\DescribeImageRegistryScanSubTaskListRequest $req) Query subtask information of image repository scanning
 * @method Models\DescribeImageRegistryScanTaskListResponse DescribeImageRegistryScanTaskList(Models\DescribeImageRegistryScanTaskListRequest $req) Query the image repository scan task list
 * @method Models\DescribeImageRegistryTimedScanTaskConfigResponse DescribeImageRegistryTimedScanTaskConfig(Models\DescribeImageRegistryTimedScanTaskConfigRequest $req) View the scheduled scan task configuration of a mirror repository
 * @method Models\DescribeImageRegistryTimedScanTaskPreviewResponse DescribeImageRegistryTimedScanTaskPreview(Models\DescribeImageRegistryTimedScanTaskPreviewRequest $req) Query the preview of a scheduled scan task in the mirror repository
 * @method Models\DescribeImageSensitiveInfoListResponse DescribeImageSensitiveInfoList(Models\DescribeImageSensitiveInfoListRequest $req) Query the sensitive information list of an image
 * @method Models\DescribeImageSensitiveWhitelistResponse DescribeImageSensitiveWhitelist(Models\DescribeImageSensitiveWhitelistRequest $req) Query the sensitive information allowlist for container images
 * @method Models\DescribeImageVirusListResponse DescribeImageVirusList(Models\DescribeImageVirusListRequest $req) Queries the Trojan virus list of an image
 * @method Models\DescribeImageVirusWhitelistResponse DescribeImageVirusWhitelist(Models\DescribeImageVirusWhitelistRequest $req) This API is used to query the Trojan allowlist of an image.
 * @method Models\DescribeImageVirusWhitelistDetailResponse DescribeImageVirusWhitelistDetail(Models\DescribeImageVirusWhitelistDetailRequest $req) Queries the detailed information of the Trojan allowlist of an image.
 * @method Models\DescribeImageVulListResponse DescribeImageVulList(Models\DescribeImageVulListRequest $req) This API is used to query the image vulnerability list.
 * @method Models\DescribeImageVulSummaryListResponse DescribeImageVulSummaryList(Models\DescribeImageVulSummaryListRequest $req) Queries the image vulnerability overview list
 * @method Models\DescribeImageVulWhitelistResponse DescribeImageVulWhitelist(Models\DescribeImageVulWhitelistRequest $req) This API is used to query the vulnerability allowlist of a container image.
 * @method Models\DescribeKBDetailResponse DescribeKBDetail(Models\DescribeKBDetailRequest $req) Query the details of a single Windows KB patch based on the user's input KB internal ID, and return the basic KB info, release time, whether restart is required, as well as the list of vulnerabilities associated with the KB.
 * @method Models\DescribeKBUpdatableMachineListResponse DescribeKBUpdatableMachineList(Models\DescribeKBUpdatableMachineListRequest $req) Query the list of hosts that can update a specified KB patch. This API is used for Windows patch repair scenarios to query which hosts lack the patch and support auto-update before user-submitted KB patch update tasks.
 * @method Models\DescribeKeySandboxCredentialResponse DescribeKeySandboxCredential(Models\DescribeKeySandboxCredentialRequest $req) This API is used to query credential details and return credential metadata and masked credential data. The access type returns an Access array (original Key, masked Value), and the sts type returns an STS object (original System, masked SecretID and SecretKey).
 * @method Models\DescribeKeySandboxCredentialListResponse DescribeKeySandboxCredentialList(Models\DescribeKeySandboxCredentialListRequest $req) Query the voucher list.
 * @method Models\DescribeLastScanTaskInfoResponse DescribeLastScanTaskInfo(Models\DescribeLastScanTaskInfoRequest $req) Get last check-now task info
 * @method Models\DescribeLicenseStatusResponse DescribeLicenseStatus(Models\DescribeLicenseStatusRequest $req) Queries the overall status of all valid authorizations under the current account, returns total count, used, remaining, and expiry time grouped by billing item, and also returns the auto-purchase switch status and merged remaining unbind count. The output sequence is fixed as: flagship edition → pro edition → RASP → other.
 * @method Models\DescribeLighthouseFirewallRulesResponse DescribeLighthouseFirewallRules(Models\DescribeLighthouseFirewallRulesRequest $req) Query the firewall rules of a lightweight application server
 * @method Models\DescribeListenerListResponse DescribeListenerList(Models\DescribeListenerListRequest $req) Query CLB Listener List
 * @method Models\DescribeLoginTypeGlobalConfResponse DescribeLoginTypeGlobalConf(Models\DescribeLoginTypeGlobalConfRequest $req) This API is used to obtain the global configuration for anti-uninstallation.
 * @method Models\DescribeLoginTypeHostResponse DescribeLoginTypeHost(Models\DescribeLoginTypeHostRequest $req) Get the host list for QR code log-in
 * @method Models\DescribeLoginWhiteCombinedListResponse DescribeLoginWhiteCombinedList(Models\DescribeLoginWhiteCombinedListRequest $req) This API is used to obtain the list of cross-region log-in allowlists after merge.
 * @method Models\DescribeLoginWhiteHostListResponse DescribeLoginWhiteHostList(Models\DescribeLoginWhiteHostListRequest $req) This API is used to query the list of allowlisted machines after merge.
 * @method Models\DescribeMachineClearHistoryResponse DescribeMachineClearHistory(Models\DescribeMachineClearHistoryRequest $req) This API is used to query the clearing history records of a machine.
 * @method Models\DescribeMachineGeneralResponse DescribeMachineGeneral(Models\DescribeMachineGeneralRequest $req) This API is used to query the information of the host overview.
 * @method Models\DescribeMachineLoginTypeResponse DescribeMachineLoginType(Models\DescribeMachineLoginTypeRequest $req) This API is used to obtain the host login method.
 * @method Models\DescribeMalwareTimingScanSettingResponse DescribeMalwareTimingScanSetting(Models\DescribeMalwareTimingScanSettingRequest $req) This API is used to query the scheduled scan configuration for file scan and removal.
 * @method Models\DescribeMandatoryVulSetResponse DescribeMandatoryVulSet(Models\DescribeMandatoryVulSetRequest $req) Show mandatory vulnerability intelligence for businesses.
 * @method Models\DescribeModifyMachinesLoginTypeTasksResponse DescribeModifyMachinesLoginTypeTasks(Models\DescribeModifyMachinesLoginTypeTasksRequest $req) This API is used to obtain a list of batch tasks for modification of host login methods.
 * @method Models\DescribeMultiCloudAssetCountResponse DescribeMultiCloudAssetCount(Models\DescribeMultiCloudAssetCountRequest $req) Retrieve the total number of assets integrated across multiple clouds (Tencent Cloud, Alibaba Cloud, AWS, Huawei Cloud, Azure, etc.) and the details of asset counts for each cloud service provider.
 * @method Models\DescribeNFSScanConfResponse DescribeNFSScanConf(Models\DescribeNFSScanConfRequest $req) This API is used to obtain the global configuration for NFS scanning.
 * @method Models\DescribeNFSScanHostResponse DescribeNFSScanHost(Models\DescribeNFSScanHostRequest $req) This API is used to query the host list for QR code log-in.
 * @method Models\DescribeNICAssetsResponse DescribeNICAssets(Models\DescribeNICAssetsRequest $req) Obtain Network Interface Card List
 * @method Models\DescribeNatRulesResponse DescribeNatRules(Models\DescribeNatRulesRequest $req) Query the nat policy corresponding to a Tencent Cloud nat gateway instance
 * @method Models\DescribeNetAttackSettingResponse DescribeNetAttackSetting(Models\DescribeNetAttackSettingRequest $req) Query the cyber attack detection switch and asset scope configuration
 * @method Models\DescribeNotifyAgentOfflineDurationResponse DescribeNotifyAgentOfflineDuration(Models\DescribeNotifyAgentOfflineDurationRequest $req) Query client offline duration
 * @method Models\DescribeNotifyAssetConfigResponse DescribeNotifyAssetConfig(Models\DescribeNotifyAssetConfigRequest $req) Get the notification asset scope configuration.
 * @method Models\DescribeNotifySettingResponse DescribeNotifySetting(Models\DescribeNotifySettingRequest $req) Get notification settings
 * @method Models\DescribeNotifySettingAkResponse DescribeNotifySettingAk(Models\DescribeNotifySettingAkRequest $req) Gets notification settings for risk governance.
 * @method Models\DescribeNotifySettingAlertResponse DescribeNotifySettingAlert(Models\DescribeNotifySettingAlertRequest $req) This API is used to obtain advanced configurations for alarm center notifications.
 * @method Models\DescribeOrganizationInfoResponse DescribeOrganizationInfo(Models\DescribeOrganizationInfoRequest $req) Query Group Account Details
 * @method Models\DescribeOrganizationUserInfoResponse DescribeOrganizationUserInfo(Models\DescribeOrganizationUserInfoRequest $req) Query Group Account User List
 * @method Models\DescribeOtherCloudAssetsResponse DescribeOtherCloudAssets(Models\DescribeOtherCloudAssetsRequest $req) Asset list
 * @method Models\DescribePodContainerListResponse DescribePodContainerList(Models\DescribePodContainerListRequest $req) Query the container list associated with a Pod
 * @method Models\DescribePortDetectListResponse DescribePortDetectList(Models\DescribePortDetectListRequest $req) Port detection list
 * @method Models\DescribePortScanTaskCountResponse DescribePortScanTaskCount(Models\DescribePortScanTaskCountRequest $req) Query the number of port scanning tasks under the current account.
 * @method Models\DescribePreventUninstallGlobalConfResponse DescribePreventUninstallGlobalConf(Models\DescribePreventUninstallGlobalConfRequest $req) This API is used to obtain the global configuration for anti-uninstallation.
 * @method Models\DescribePreventUninstallHostResponse DescribePreventUninstallHost(Models\DescribePreventUninstallHostRequest $req) Retrieve the host list for uninstallation prevention.
 * @method Models\DescribeProcessDaemonGlobalConfResponse DescribeProcessDaemonGlobalConf(Models\DescribeProcessDaemonGlobalConfRequest $req) Obtain the global configuration for process protection.
 * @method Models\DescribeProcessDaemonHostResponse DescribeProcessDaemonHost(Models\DescribeProcessDaemonHostRequest $req) Get the process daemon host list.
 * @method Models\DescribePublicCloudAssetsResponse DescribePublicCloudAssets(Models\DescribePublicCloudAssetsRequest $req) Public network asset
 * @method Models\DescribePublicIpAssetsResponse DescribePublicIpAssets(Models\DescribePublicIpAssetsRequest $req) IP Public Network List
 * @method Models\DescribeRaspLicenseListResponse DescribeRaspLicenseList(Models\DescribeRaspLicenseListRequest $req) This API is used to query the authorization list for application protection.
 * @method Models\DescribeRegistryOverviewResponse DescribeRegistryOverview(Models\DescribeRegistryOverviewRequest $req) Query repository overview
 * @method Models\DescribeRegistryRegionListResponse DescribeRegistryRegionList(Models\DescribeRegistryRegionListRequest $req) Queries the region list of an image repository.
 * @method Models\DescribeRepositoryImageAssetsResponse DescribeRepositoryImageAssets(Models\DescribeRepositoryImageAssetsRequest $req) Repository Image List
 * @method Models\DescribeReverseShellSystemPolicyConfigResponse DescribeReverseShellSystemPolicyConfig(Models\DescribeReverseShellSystemPolicyConfigRequest $req) This API is used to query the intranet alert and asset scope configuration for rebound Shell.
 * @method Models\DescribeRiskCallRecordResponse DescribeRiskCallRecord(Models\DescribeRiskCallRecordRequest $req) This API is used to obtain the risk call record list.
 * @method Models\DescribeRiskCenterAssetViewCFGRiskListResponse DescribeRiskCenterAssetViewCFGRiskList(Models\DescribeRiskCenterAssetViewCFGRiskListRequest $req) Obtain Configuration Risk List from Asset's Perspective
 * @method Models\DescribeRiskCenterAssetViewPortRiskListResponse DescribeRiskCenterAssetViewPortRiskList(Models\DescribeRiskCenterAssetViewPortRiskListRequest $req) Obtain Port Risk List from Asset's Perspective
 * @method Models\DescribeRiskCenterAssetViewVULRiskListResponse DescribeRiskCenterAssetViewVULRiskList(Models\DescribeRiskCenterAssetViewVULRiskListRequest $req) Obtain Vulnerability Risk List from Asset's Perspective
 * @method Models\DescribeRiskCenterAssetViewWeakPasswordRiskListResponse DescribeRiskCenterAssetViewWeakPasswordRiskList(Models\DescribeRiskCenterAssetViewWeakPasswordRiskListRequest $req) Obtain Weak Password Risk List from Asset's Perspective
 * @method Models\DescribeRiskCenterCFGViewCFGRiskListResponse DescribeRiskCenterCFGViewCFGRiskList(Models\DescribeRiskCenterCFGViewCFGRiskListRequest $req) Obtain Configuration Risk List from Configuration's Perspective
 * @method Models\DescribeRiskCenterPortViewPortRiskListResponse DescribeRiskCenterPortViewPortRiskList(Models\DescribeRiskCenterPortViewPortRiskListRequest $req) Obtain Port Risk List from Port's Perspective
 * @method Models\DescribeRiskCenterRiskTrendAnalysisResponse DescribeRiskCenterRiskTrendAnalysis(Models\DescribeRiskCenterRiskTrendAnalysisRequest $req) Sample code for obtaining risk trend analysis
 * @method Models\DescribeRiskCenterServerRiskListResponse DescribeRiskCenterServerRiskList(Models\DescribeRiskCenterServerRiskListRequest $req) Obtain Risk Service List
 * @method Models\DescribeRiskCenterVULViewVULRiskListResponse DescribeRiskCenterVULViewVULRiskList(Models\DescribeRiskCenterVULViewVULRiskListRequest $req) Obtain Vulnerability Risk List from Vulnerability's Perspective
 * @method Models\DescribeRiskCenterWebsiteRiskListResponse DescribeRiskCenterWebsiteRiskList(Models\DescribeRiskCenterWebsiteRiskListRequest $req) Obtain Content Risk List
 * @method Models\DescribeRiskDetailListResponse DescribeRiskDetailList(Models\DescribeRiskDetailListRequest $req) Sample risk detail list
 * @method Models\DescribeRiskRuleDetailResponse DescribeRiskRuleDetail(Models\DescribeRiskRuleDetailRequest $req) Sample code for querying risk rule details
 * @method Models\DescribeRiskRulesResponse DescribeRiskRules(Models\DescribeRiskRulesRequest $req) Illustrative example of the advanced configuration risk rule list
 * @method Models\DescribeRiskScanCronConfigResponse DescribeRiskScanCronConfig(Models\DescribeRiskScanCronConfigRequest $req) Get the periodic schedule for risk scans
 * @method Models\DescribeSCFAliasListResponse DescribeSCFAliasList(Models\DescribeSCFAliasListRequest $req) Queries the alias list of a specified SCF function.
 * @method Models\DescribeSCFFunctionListResponse DescribeSCFFunctionList(Models\DescribeSCFFunctionListRequest $req) Query the list of SCF functions in the specified namespace. Only functions of the Event trigger type are returned.
 * @method Models\DescribeSCFFunctionVersionListResponse DescribeSCFFunctionVersionList(Models\DescribeSCFFunctionVersionListRequest $req) Queries the version list of a specified SCF function.
 * @method Models\DescribeSCFNamespaceListResponse DescribeSCFNamespaceList(Models\DescribeSCFNamespaceListRequest $req) Queries the namespace list of SCF in the designated region for the current user.
 * @method Models\DescribeSandboxACLAlertListResponse DescribeSandboxACLAlertList(Models\DescribeSandboxACLAlertListRequest $req) This API is used to query the ACL access control alarm log list by paging. It supports precise filtering of a single alarm by Filter.Name=ID for the details page scenario.
 * @method Models\DescribeSandboxACLRuleListResponse DescribeSandboxACLRuleList(Models\DescribeSandboxACLRuleListRequest $req) This API is used to query the access control rule list for ACL users under the current tenant. Import Filter.Name=RuleID to query an individual rule precisely.
 * @method Models\DescribeSandboxACLSystemRuleListResponse DescribeSandboxACLSystemRuleList(Models\DescribeSandboxACLSystemRuleListRequest $req) Queries the traffic sandbox access control (ACL) system rule list. System rules are built into the CSIP platform and can be referenced by user rules.
 * @method Models\DescribeSandboxDLPAlertListResponse DescribeSandboxDLPAlertList(Models\DescribeSandboxDLPAlertListRequest $req) Paging query for the DLP data leakage alert log list. Supports precise filtering of a single alert by Filter.Name=ID for the details page scenario.
 * @method Models\DescribeSandboxDLPRuleListResponse DescribeSandboxDLPRuleList(Models\DescribeSandboxDLPRuleListRequest $req) Query the DLP user rule list of the current tenant. Input Filter.Name=RuleID to query an individual rule for the details page scenario.
 * @method Models\DescribeSandboxDLPSystemRuleListResponse DescribeSandboxDLPSystemRuleList(Models\DescribeSandboxDLPSystemRuleListRequest $req) Queries the traffic sandbox data leakage protection (DLP) system rule list. System rules are built into the CSIP platform and can be referenced by user rules.
 * @method Models\DescribeSandboxFileRuleListResponse DescribeSandboxFileRuleList(Models\DescribeSandboxFileRuleListRequest $req) Query the command sandbox file rule list.
 * @method Models\DescribeSandboxLLMAuditAlertListResponse DescribeSandboxLLMAuditAlertList(Models\DescribeSandboxLLMAuditAlertListRequest $req) Paging query for the LLM audit alarm log list. Supports precise filtering of a single alarm by Filter.Name=ID for the details page scenario.
 * @method Models\DescribeSandboxLLMAuditRuleListResponse DescribeSandboxLLMAuditRuleList(Models\DescribeSandboxLLMAuditRuleListRequest $req) Queries the LLM audit user rule list for the current tenant. LLM audit rules do not support user-defined content and can only refer to system rule composites. Import Filter.Name=RuleID for exact querying of an individual rule (for details page scenarios).
 * @method Models\DescribeSandboxLLMAuditSystemRuleListResponse DescribeSandboxLLMAuditSystemRuleList(Models\DescribeSandboxLLMAuditSystemRuleListRequest $req) This API is used to query the rule list of the LLM audit system. System rules are built into the CSIP platform and originate from the LLM audit system rule base. They are split into two flat rule arrays by LLM reasoning protection and ToolCall protection and can be referenced by user rules.
 * @method Models\DescribeScanReportListResponse DescribeScanReportList(Models\DescribeScanReportListRequest $req) Obtain Scan Report List
 * @method Models\DescribeScanStatisticResponse DescribeScanStatistic(Models\DescribeScanStatisticRequest $req) This API is used to query result statistics of cloud boundary analysis scans.
 * @method Models\DescribeScanTaskListResponse DescribeScanTaskList(Models\DescribeScanTaskListRequest $req) Obtain Scan Task List
 * @method Models\DescribeScanTaskRecordListResponse DescribeScanTaskRecordList(Models\DescribeScanTaskRecordListRequest $req) This API is used to query the scan task record list.
 * @method Models\DescribeScfCustomDomainEndpointsResponse DescribeScfCustomDomainEndpoints(Models\DescribeScfCustomDomainEndpointsRequest $req) Query the list of custom domain name endpoints for Tencent Cloud SCF
 * @method Models\DescribeSearchBugInfoResponse DescribeSearchBugInfo(Models\DescribeSearchBugInfoRequest $req) Query vulnerability information in the three-dimensional protection center.
 * @method Models\DescribeSecurityGroupPolicyResponse DescribeSecurityGroupPolicy(Models\DescribeSecurityGroupPolicyRequest $req) Query the security group rules correspond to the specified security group ID.
 * @method Models\DescribeSecurityRiskTrendResponse DescribeSecurityRiskTrend(Models\DescribeSecurityRiskTrendRequest $req) This API is used to obtain security risk trends and return the daily number of risks grouped by dimension.
 * @method Models\DescribeSecurityScoreOverviewResponse DescribeSecurityScoreOverview(Models\DescribeSecurityScoreOverviewRequest $req) This API is used to obtain the security score overview and real-time compute point deductions in each dimension and sub-item.
 * @method Models\DescribeSecurityScoreRuleResponse DescribeSecurityScoreRule(Models\DescribeSecurityScoreRuleRequest $req) Retrieve the security scoring rules for the current account. If no custom rules exist, return the built-in default.
 * @method Models\DescribeSkillScanAlertDetailResponse DescribeSkillScanAlertDetail(Models\DescribeSkillScanAlertDetailRequest $req) This API is used to query Skill security detection alarm details, including local alarm information and engine real-time detection data.
 * @method Models\DescribeSkillScanAlertListResponse DescribeSkillScanAlertList(Models\DescribeSkillScanAlertListRequest $req) Queries the Skill security detection alarm list with pagination, filtering, and sorting supported.
 * @method Models\DescribeSkillScanPayInfoResponse DescribeSkillScanPayInfo(Models\DescribeSkillScanPayInfoRequest $req) This API is used to query Skill security detection billing information, including order status, total quota, consumed quota, expiration time, and payment mode. If no order exists, zero values are returned (only TimeNow and BetaEndTime). Trial orders are claimed through ModifyTrialStatus(Module=9), and official orders are created through the billing system.
 * @method Models\DescribeSkillScanResultResponse DescribeSkillScanResult(Models\DescribeSkillScanResultRequest $req) Queries the security detection result of a skill. After calling CreateSkillScan successfully, use the returned ContentHash + EngineVersion to poll this API to obtain the result. We recommend polling for the first time 5 minutes after a successful upload. If detection is not completed, poll once every 1 minute afterward. The response uses the Status field to distinguish four statuses: detection completed (SUCCESS), detecting (SCANNING), no record (NOT_FOUND), and detection failed (FAILED). Note: Detection results are retained for 90 days. NOT_FOUND will be returned after they expire.
 * @method Models\DescribeSourceIPAssetResponse DescribeSourceIPAsset(Models\DescribeSourceIPAssetRequest $req) Retrieve the user access key asset list from an IP perspective.
 * @method Models\DescribeSourceIPDetailResponse DescribeSourceIPDetail(Models\DescribeSourceIPDetailRequest $req) This API is used to query user access key asset list from source IP perspective.
 * @method Models\DescribeSubUserInfoResponse DescribeSubUserInfo(Models\DescribeSubUserInfoRequest $req) Query the sub-account list of a group
 * @method Models\DescribeSubnetAssetsResponse DescribeSubnetAssets(Models\DescribeSubnetAssetsRequest $req) Obtain Subnet List
 * @method Models\DescribeTCRInstanceListResponse DescribeTCRInstanceList(Models\DescribeTCRInstanceListRequest $req) This API is used to obtain the TCR instance list.
 * @method Models\DescribeTagRuleAssetsResponse DescribeTagRuleAssets(Models\DescribeTagRuleAssetsRequest $req) Tagging policy enforcement asset list
 * @method Models\DescribeTaskLogListResponse DescribeTaskLogList(Models\DescribeTaskLogListRequest $req) Obtain Task Scan Report List
 * @method Models\DescribeTaskLogURLResponse DescribeTaskLogURL(Models\DescribeTaskLogURLRequest $req) Obtain the Temporary Link for Report Download
 * @method Models\DescribeTaskPredictCostQuotaResponse DescribeTaskPredictCostQuota(Models\DescribeTaskPredictCostQuotaRequest $req) Obtain the pre-consumed quota for scans.
 * @method Models\DescribeTopAttackInfoResponse DescribeTopAttackInfo(Models\DescribeTopAttackInfoRequest $req) Query TOP attack information
 * @method Models\DescribeUebaBehaviorSummaryResponse DescribeUebaBehaviorSummary(Models\DescribeUebaBehaviorSummaryRequest $req) Queries the behavior overview of user behavior analysis.
 * @method Models\DescribeUebaRuleResponse DescribeUebaRule(Models\DescribeUebaRuleRequest $req) Query the list of user behavior analysis policies
 * @method Models\DescribeUebaUserSummaryResponse DescribeUebaUserSummary(Models\DescribeUebaUserSummaryRequest $req) This API is used to get the user overview of the user behavior analysis module.
 * @method Models\DescribeUserAKInfoListResponse DescribeUserAKInfoList(Models\DescribeUserAKInfoListRequest $req) Obtain AK information of the account
 * @method Models\DescribeUserCSPMInfoListResponse DescribeUserCSPMInfoList(Models\DescribeUserCSPMInfoListRequest $req) This API is used to obtain CSPM information of an account.
 * @method Models\DescribeUserCallRecordResponse DescribeUserCallRecord(Models\DescribeUserCallRecordRequest $req) This API is used to obtain the account call record list.
 * @method Models\DescribeUserDspmInfoListResponse DescribeUserDspmInfoList(Models\DescribeUserDspmInfoListRequest $req) Get the dspm information list of an account
 * @method Models\DescribeUserInfoResponse DescribeUserInfo(Models\DescribeUserInfoRequest $req) CSPM quota information of a user
 * @method Models\DescribeVULListResponse DescribeVULList(Models\DescribeVULListRequest $req) Vulnerability list in the risk center of the new security center
 * @method Models\DescribeVULRiskAdvanceCFGListResponse DescribeVULRiskAdvanceCFGList(Models\DescribeVULRiskAdvanceCFGListRequest $req) Query Vulnerability Risk Advanced Configuration
 * @method Models\DescribeVULRiskDetailResponse DescribeVULRiskDetail(Models\DescribeVULRiskDetailRequest $req) Retrieve vulnerability details
 * @method Models\DescribeVdbAndPocInfoResponse DescribeVdbAndPocInfo(Models\DescribeVdbAndPocInfoRequest $req) This API is used to obtain virus database and POC updates.
 * @method Models\DescribeVoucherEligibilityResponse DescribeVoucherEligibility(Models\DescribeVoucherEligibilityRequest $req) Check whether the current user is eligible to claim vouchers for the designated promotion.
 * @method Models\DescribeVpcAssetsResponse DescribeVpcAssets(Models\DescribeVpcAssetsRequest $req) Obtain VPC List
 * @method Models\DescribeVulComponentRelateHostResponse DescribeVulComponentRelateHost(Models\DescribeVulComponentRelateHostRequest $req) This API is used to query the associated server of a vulnerable component.
 * @method Models\DescribeVulFixTaskDetailResponse DescribeVulFixTaskDetail(Models\DescribeVulFixTaskDetailRequest $req) This API is used to query the details of a specified vulnerability repair task, including detailed data such as remediation status and snapshot status for each host, and supports pagination and filtering.
 * @method Models\DescribeVulFixTaskListResponse DescribeVulFixTaskList(Models\DescribeVulFixTaskListRequest $req) This API is used to query the vulnerability repair task record list with paging, support by conditional filtering such as remediation status and time range, and show summary information for each repair task.
 * @method Models\DescribeVulFixableMachineListResponse DescribeVulFixableMachineList(Models\DescribeVulFixableMachineListRequest $req) This API is used to query the host list where specified vulnerabilities can be repaired. Before a user submits a repair task, it is necessary to query which hosts support automatic fix, providing data support for users to select repair targets.
 * @method Models\DescribeVulFixedHostDetailResponse DescribeVulFixedHostDetail(Models\DescribeVulFixedHostDetailRequest $req) This API is used to query the repair details of a certain fixed vulnerability on a specified host, including basic information about the vulnerability, repair host information, and a detailed list of associated components and paths (component name, version number hit, associated path, repair command).
 * @method Models\DescribeVulFixedListResponse DescribeVulFixedList(Models\DescribeVulFixedListRequest $req) This API is used to query the list of repaired vulnerabilities, show vulnerability information with successful fixes and statistics on repair conditions, helping users understand the repair results.
 * @method Models\DescribeVulHostRelateComponentResponse DescribeVulHostRelateComponent(Models\DescribeVulHostRelateComponentRequest $req) This API is used to query host-associated vulnerability components.
 * @method Models\DescribeVulIgnoreRuleListResponse DescribeVulIgnoreRuleList(Models\DescribeVulIgnoreRuleListRequest $req) This API is used to retrieve the vulnerability ignore list.
 * @method Models\DescribeVulItemListResponse DescribeVulItemList(Models\DescribeVulItemListRequest $req) This API is used to obtain vulnerability list
 * @method Models\DescribeVulLabelListResponse DescribeVulLabelList(Models\DescribeVulLabelListRequest $req) Obtains the vulnerability tag list
 * @method Models\DescribeVulRiskListResponse DescribeVulRiskList(Models\DescribeVulRiskListRequest $req) Query the list of vulnerabilities on host nodes under the exposed path in cloud boundary analysis.
 * @method Models\DescribeVulRiskRelateComponentResponse DescribeVulRiskRelateComponent(Models\DescribeVulRiskRelateComponentRequest $req) Retrieve the associated component of a vulnerability
 * @method Models\DescribeVulRiskRelateHostResponse DescribeVulRiskRelateHost(Models\DescribeVulRiskRelateHostRequest $req) Search for hosts associated with vulnerabilities or KBs
 * @method Models\DescribeVulScanPeriodicResponse DescribeVulScanPeriodic(Models\DescribeVulScanPeriodicRequest $req) This API is used to obtain vulnerability scanning (period scanning).
 * @method Models\DescribeVulScanTaskDetailResponse DescribeVulScanTaskDetail(Models\DescribeVulScanTaskDetailRequest $req) This API is used to retrieve vulnerability scanning task detail
 * @method Models\DescribeVulScanTaskListResponse DescribeVulScanTaskList(Models\DescribeVulScanTaskListRequest $req) This API is used to search vulnerability scanning task history
 * @method Models\DescribeVulViewVulRiskListResponse DescribeVulViewVulRiskList(Models\DescribeVulViewVulRiskListRequest $req) Obtain Vulnerability Risk List from Vulnerability's Perspective
 * @method Models\DescribeWebhookPolicyListResponse DescribeWebhookPolicyList(Models\DescribeWebhookPolicyListRequest $req) This API is used to query the notification policy list for the current tenant by page, corresponding to the table on the Notification Policy Configuration Tab in Notification Center - Robot Notification. The returned fields are simplified info required for row display. Use DescribeWebhookPolicy for complete configuration in editing scenarios. Each tenant can have up to 100 notification policies.
 * @method Models\DescribeWebhookReceiverListResponse DescribeWebhookReceiverList(Models\DescribeWebhookReceiverListRequest $req) This API is used to query the list of receiving robots for the current tenant by page, corresponding to the table on the Receive Bot Management Tab in Notification Center - Robot Notification. Each tenant can have up to 50 robots.
 * @method Models\DisableAIScheduleResponse DisableAISchedule(Models\DisableAIScheduleRequest $req) Disable scheduled AI tasks.

Set the status of the specified AI scheduled task to disabled. After it is disabled, the task will suspend automatic execution.
 * @method Models\DownloadDspmExportLogResponse DownloadDspmExportLog(Models\DownloadDspmExportLogRequest $req) This API is used to download export logs.
 * @method Models\EnableAIScheduleResponse EnableAISchedule(Models\EnableAIScheduleRequest $req) Enable AI scheduled tasks.

Set the status of the specified AI scheduled task to enabled. After it is enabled, the task will automatically execute based on the trigger configuration.
 * @method Models\ExportCSIPMalwareScanTaskDetailResponse ExportCSIPMalwareScanTaskDetail(Models\ExportCSIPMalwareScanTaskDetailRequest $req) Exports host details of a CSIP scan task to Excel files. This API is used to query the download link through DescribeExportMachines after asynchronous generation.
 * @method Models\ExportClientSettingHostListResponse ExportClientSettingHostList(Models\ExportClientSettingHostListRequest $req) Export the host list for client settings.
 * @method Models\ExportEDRRulesResponse ExportEDRRules(Models\ExportEDRRulesRequest $req) This API is used to export the EDR policy list.
 * @method Models\ExportTasksResponse ExportTasks(Models\ExportTasksRequest $req) This API is used to export log files with large data volumes asynchronously.
 * @method Models\InstallClusterAgentResponse InstallClusterAgent(Models\InstallClusterAgentRequest $req) Install Agent for cluster container security (parallel container installation method).

capi layer processing process:
1. Query the DB cluster list by ClusterCaMD5List (only used for resolving the appid ownership of each cluster, not for existence/type verification)
2. Group by appid and pass through to the access side ClusterInstall RPC

Description (container asset revision 2026 H1): This API is a passthrough API. The capi layer does not verify the existence, data type, or format of ClusterCaMD5. ClusterCaMD5 values that miss in the DB are silently skipped with no error reported.
 * @method Models\InstallKeySandboxSkillResponse InstallKeySandboxSkill(Models\InstallKeySandboxSkillRequest $req) Install the key sandbox SKILL on specified machine instances. Batch operations are supported, allowing input of multiple instance IDs at once. After installation, the AI Agent on the target machine can access credentials through the key sandbox proxy without being exposed to plaintext keys. Duplicate invocations on installed instances will not trigger an error (idempotent) and are deemed successful.
 * @method Models\InstallSandboxPluginResponse InstallSandboxPlugin(Models\InstallSandboxPluginRequest $req) Trigger installation of the traffic sandbox plugin to AI Agent assets in a specified range. Use BelongAssetType to distinguish host or container dimensions, and use EffectScope to specify the installation target (INCLUDE = install only to specified assets, EXCLUDE = all assets minus specified assets). This API only triggers the action and does not wait for completion.
 * @method Models\ModifyAILinkSettingResponse ModifyAILinkSetting(Models\ModifyAILinkSettingRequest $req) Modify the AI-Link engine configuration.
 * @method Models\ModifyAIScheduleResponse ModifyAISchedule(Models\ModifyAIScheduleRequest $req) Modify a scheduled AI task.

Partial update is supported. Only the passed-in optional fields are updated. Whether the trigger list is fully replaced is controlled by the UpdateTriggers flag.
 * @method Models\ModifyAgentConfigSettingResponse ModifyAgentConfigSetting(Models\ModifyAgentConfigSettingRequest $req) This API is used to modify client log collection settings exclusive to CSIP. It allows you to set the log collection type and asset scope for which the settings take effect.
 * @method Models\ModifyAgentRunModeResponse ModifyAgentRunMode(Models\ModifyAgentRunModeRequest $req) Set the client running mode and configuration
 * @method Models\ModifyAgentRunPolicyResponse ModifyAgentRunPolicy(Models\ModifyAgentRunPolicyRequest $req) Modify the client running policy group. This API is used to set custom policies and associate machine lists.
 * @method Models\ModifyAssetCoreAttributeResponse ModifyAssetCoreAttribute(Models\ModifyAssetCoreAttributeRequest $req) Tag an asset as core or not.
 * @method Models\ModifyAssetFilterViewResponse ModifyAssetFilterView(Models\ModifyAssetFilterViewRequest $req) Update the asset search view.
 * @method Models\ModifyAssetTagResponse ModifyAssetTag(Models\ModifyAssetTagRequest $req) This API is used to edit asset tags.
 * @method Models\ModifyAssetTagsResponse ModifyAssetTags(Models\ModifyAssetTagsRequest $req) Operate assets to edit tags.
 * @method Models\ModifyAssetTagsByAssetInfoResponse ModifyAssetTagsByAssetInfo(Models\ModifyAssetTagsByAssetInfoRequest $req) Operate assets and edit tags.
 * @method Models\ModifyBanModeResponse ModifyBanMode(Models\ModifyBanModeRequest $req) This API is used to modify the brute-force blocking mode.
 * @method Models\ModifyBaselinePolicyResponse ModifyBaselinePolicy(Models\ModifyBaselinePolicyRequest $req) Create or edit a baseline policy. Policy.ID 0 means create, non-zero means edit. Name is required when creating or editing. CheckAssetType and Type must comply with the CheckAssetType and PolicyType enums.
 * @method Models\ModifyBaselinePolicyEnableResponse ModifyBaselinePolicyEnable(Models\ModifyBaselinePolicyEnableRequest $req) Batch enable or disable baseline policies. Once disabled, a policy will no longer be included in scans and statistics.
 * @method Models\ModifyBaselineSyncConfResponse ModifyBaselineSyncConf(Models\ModifyBaselineSyncConfRequest $req) This API is used to update the baseline synchronization configuration of the current account (admin). When AutoSync is true, TargetAppidList cannot be empty and its elements cannot be 0.
 * @method Models\ModifyBaselineUserOtherConfResponse ModifyBaselineUserOtherConf(Models\ModifyBaselineUserOtherConfRequest $req) This API is used to update user-level baseline configurations for the current account, including sync permission, offline risk clearing, and Agent scan timeout.
 * @method Models\ModifyBaselineUserWeakPasswordConfResponse ModifyBaselineUserWeakPasswordConf(Models\ModifyBaselineUserWeakPasswordConfRequest $req) Update the custom "user weak password" dictionary for the current account. The dictionary content is stored after server encryption. Input an empty string to clear it.
 * @method Models\ModifyBruteAttackBanStatusResponse ModifyBruteAttackBanStatus(Models\ModifyBruteAttackBanStatusRequest $req) This API is used to set the status of brute force attack blocking.
 * @method Models\ModifyBruteAttackRulesResponse ModifyBruteAttackRules(Models\ModifyBruteAttackRulesRequest $req) This API is used to modify brute force cracking rules.
 * @method Models\ModifyCSIPLicenseBindsResponse ModifyCSIPLicenseBinds(Models\ModifyCSIPLicenseBindsRequest $req) Bind host authorization or RASP authorization to a specified order. Execute asynchronously and return TaskId to query progress. Specify the authorized version by LicenseType.
 * @method Models\ModifyCSIPLicenseUnBindsResponse ModifyCSIPLicenseUnBinds(Models\ModifyCSIPLicenseUnBindsRequest $req) Manually unbind host authorization. Execute synchronously and return results directly. Only unbind host authorization (category=0, including Pro and Ultimate editions). In single order mode, appid can locate the order without the need to pass ResourceId. For RASP unbinding, use ModifyCSIPRaspLicenseUnBinds.
 * @method Models\ModifyCSIPRaspLicenseBindsResponse ModifyCSIPRaspLicenseBinds(Models\ModifyCSIPRaspLicenseBindsRequest $req) Bind RASP or Flagship Edition Authorization to a specified order. Execute asynchronously and return TaskId to query progress. LicenseType=rasp binds RASP, LicenseType=enterprise_hp binds flagship host authorization. AssetType is case-sensitive for host/container node/EKS.
 * @method Models\ModifyCSIPRaspLicenseUnBindsResponse ModifyCSIPRaspLicenseUnBinds(Models\ModifyCSIPRaspLicenseUnBindsRequest $req) Manually unbind RASP authorization. Execute synchronously and return results directly. Only unbind RASP authorization (category=1), with no unbinding frequency limit. In single order mode, appid can locate the order without the need to pass ResourceId.
 * @method Models\ModifyClusterDefendStatusResponse ModifyClusterDefendStatus(Models\ModifyClusterDefendStatusRequest $req) Modify the cluster protection status.
 * @method Models\ModifyCosAuditBucketMonitorStatusResponse ModifyCosAuditBucketMonitorStatus(Models\ModifyCosAuditBucketMonitorStatusRequest $req) Modify the bucket monitoring status.
 * @method Models\ModifyCspmShardConfigResponse ModifyCspmShardConfig(Models\ModifyCspmShardConfigRequest $req) Updates the CSPM automated quota manager shared switch.
 * @method Models\ModifyDspmAccessRecordResponse ModifyDspmAccessRecord(Models\ModifyDspmAccessRecordRequest $req) Modify Dspm access management information
 * @method Models\ModifyDspmApplyingIdentifyComplianceGroupResponse ModifyDspmApplyingIdentifyComplianceGroup(Models\ModifyDspmApplyingIdentifyComplianceGroupRequest $req) Modifies the data identification template of the current dspm application
 * @method Models\ModifyDspmApproveStatusResponse ModifyDspmApproveStatus(Models\ModifyDspmApproveStatusRequest $req) Modifies the Dspm approval form status.
 * @method Models\ModifyDspmAssetAccountResponse ModifyDspmAssetAccount(Models\ModifyDspmAssetAccountRequest $req) Modify Dspm asset account information.
 * @method Models\ModifyDspmAssetAccountPrivilegesResponse ModifyDspmAssetAccountPrivileges(Models\ModifyDspmAssetAccountPrivilegesRequest $req) Modify Dspm asset account permissions
 * @method Models\ModifyDspmAssetDataScanTaskResponse ModifyDspmAssetDataScanTask(Models\ModifyDspmAssetDataScanTaskRequest $req) Modifies a Dspm Asset Data scan task
 * @method Models\ModifyDspmAssetDataScanTaskStatusResponse ModifyDspmAssetDataScanTaskStatus(Models\ModifyDspmAssetDataScanTaskStatusRequest $req) Modify the status of a Dspm Asset Data scan task
 * @method Models\ModifyDspmAssetLogDeliverySwitchResponse ModifyDspmAssetLogDeliverySwitch(Models\ModifyDspmAssetLogDeliverySwitchRequest $req) Modify the Dspm asset log delivery switch.
 * @method Models\ModifyDspmAssetSecurityAnalysisSwitchResponse ModifyDspmAssetSecurityAnalysisSwitch(Models\ModifyDspmAssetSecurityAnalysisSwitchRequest $req) Modify the Dspm asset log delivery switch
 * @method Models\ModifyDspmAuditFilterStrategyResponse ModifyDspmAuditFilterStrategy(Models\ModifyDspmAuditFilterStrategyRequest $req) Modify a Dspm audit filter policy
 * @method Models\ModifyDspmBackupSettingResponse ModifyDspmBackupSetting(Models\ModifyDspmBackupSettingRequest $req) This API is used to modify the log backup settings.
 * @method Models\ModifyDspmCkafkaSaveResponse ModifyDspmCkafkaSave(Models\ModifyDspmCkafkaSaveRequest $req) This API is used to save the tenant CKafka configuration.
 * @method Models\ModifyDspmCkafkaStartResponse ModifyDspmCkafkaStart(Models\ModifyDspmCkafkaStartRequest $req) This API is used to enable the log shipping.
 * @method Models\ModifyDspmCkafkaStopResponse ModifyDspmCkafkaStop(Models\ModifyDspmCkafkaStopRequest $req) This API is used to disable the log type shipping.
 * @method Models\ModifyDspmIdentifyCategoryResponse ModifyDspmIdentifyCategory(Models\ModifyDspmIdentifyCategoryRequest $req) Modifies dspm data identification categorization
 * @method Models\ModifyDspmIdentifyComplianceGroupResponse ModifyDspmIdentifyComplianceGroup(Models\ModifyDspmIdentifyComplianceGroupRequest $req) Modifies a dspm data identification template
 * @method Models\ModifyDspmIdentifyComplianceGroupStatusResponse ModifyDspmIdentifyComplianceGroupStatus(Models\ModifyDspmIdentifyComplianceGroupStatusRequest $req) Modifies the status of a dspm data identification template
 * @method Models\ModifyDspmIdentifyComplianceRuleLevelInfoResponse ModifyDspmIdentifyComplianceRuleLevelInfo(Models\ModifyDspmIdentifyComplianceRuleLevelInfoRequest $req) This API is used to modify association level information of dspm data identification template data items.
 * @method Models\ModifyDspmIdentifyInfoResponse ModifyDspmIdentifyInfo(Models\ModifyDspmIdentifyInfoRequest $req) Modify Dspm identity information.
 * @method Models\ModifyDspmIdentifyLevelGroupResponse ModifyDspmIdentifyLevelGroup(Models\ModifyDspmIdentifyLevelGroupRequest $req) Modifies dspm data identification classification groups
 * @method Models\ModifyDspmIdentifyLevelItemResponse ModifyDspmIdentifyLevelItem(Models\ModifyDspmIdentifyLevelItemRequest $req) Modify dspm data identification grading information.
 * @method Models\ModifyDspmIdentifyRuleResponse ModifyDspmIdentifyRule(Models\ModifyDspmIdentifyRuleRequest $req) Modify a dspm identification data item
 * @method Models\ModifyDspmIdentifyRuleStatusResponse ModifyDspmIdentifyRuleStatus(Models\ModifyDspmIdentifyRuleStatusRequest $req) Modifies the status of a dspm identification data item
 * @method Models\ModifyDspmIpInfoResponse ModifyDspmIpInfo(Models\ModifyDspmIpInfoRequest $req) Modify DspmIp information.
 * @method Models\ModifyDspmLogDeliveryTypeResponse ModifyDspmLogDeliveryType(Models\ModifyDspmLogDeliveryTypeRequest $req) This API is used to modify the log shipping configuration information.
 * @method Models\ModifyDspmPersonalIdentifyResponse ModifyDspmPersonalIdentify(Models\ModifyDspmPersonalIdentifyRequest $req) Modifies the Dspm personal identity ID.
 * @method Models\ModifyDspmRestoreLogTaskResponse ModifyDspmRestoreLogTask(Models\ModifyDspmRestoreLogTaskRequest $req) This API is used to restore the backup logs.
 * @method Models\ModifyDspmRiskInfoResponse ModifyDspmRiskInfo(Models\ModifyDspmRiskInfoRequest $req) Modifies Dspm risk information
 * @method Models\ModifyDspmRiskStrategyResponse ModifyDspmRiskStrategy(Models\ModifyDspmRiskStrategyRequest $req) Modifies Dspm risk policies
 * @method Models\ModifyDspmWhitelistStrategyResponse ModifyDspmWhitelistStrategy(Models\ModifyDspmWhitelistStrategyRequest $req) Modify the Dspm allowlist policy
 * @method Models\ModifyEDRRuleResponse ModifyEDRRule(Models\ModifyEDRRuleRequest $req) This API is used to edit or create an EDR policy.
 * @method Models\ModifyEDRRuleStatusResponse ModifyEDRRuleStatus(Models\ModifyEDRRuleStatusRequest $req) This API is used to modify the switch status of EDR policies.
 * @method Models\ModifyEDRRulesActionResponse ModifyEDRRulesAction(Models\ModifyEDRRulesActionRequest $req) Batch modify EDR policy actions.
 * @method Models\ModifyEdrAlertIsolationResponse ModifyEdrAlertIsolation(Models\ModifyEdrAlertIsolationRequest $req) EDR alert quarantine and recovery
 * @method Models\ModifyEdrAlertPermanentIgnoreResponse ModifyEdrAlertPermanentIgnore(Models\ModifyEdrAlertPermanentIgnoreRequest $req) Permanently ignore EDR multi-behavior alarms. Add the host and rule corresponding to the alarm to the AI-Link permanent ignore allowlist. Subsequently, alarms of the same type will be automatically discarded.
 * @method Models\ModifyEdrAlertStatusResponse ModifyEdrAlertStatus(Models\ModifyEdrAlertStatusRequest $req) Handle the status of an EDR alert
 * @method Models\ModifyEdrExcludeNetworkSegmentsResponse ModifyEdrExcludeNetworkSegments(Models\ModifyEdrExcludeNetworkSegmentsRequest $req) This API is used to modify the CIDR block exclusion settings for log collection. IPs, IP ranges, and CIDR formats are supported, with up to 100 entries.
 * @method Models\ModifyEdrLogCollectPathResponse ModifyEdrLogCollectPath(Models\ModifyEdrLogCollectPathRequest $req) This API is used to modify path configurations for application log collection.
 * @method Models\ModifyExposureAutoTagRuleResponse ModifyExposureAutoTagRule(Models\ModifyExposureAutoTagRuleRequest $req) Update automatic cloud boundary tagging rules
 * @method Models\ModifyExposureAutoTagRuleStatusResponse ModifyExposureAutoTagRuleStatus(Models\ModifyExposureAutoTagRuleStatusRequest $req) Enable or disable automatic cloud boundary tagging rules.
 * @method Models\ModifyExposureTagResponse ModifyExposureTag(Models\ModifyExposureTagRequest $req) Update custom tags for cloud boundaries
 * @method Models\ModifyIaCTokenPeriodResponse ModifyIaCTokenPeriod(Models\ModifyIaCTokenPeriodRequest $req) Modify the storage cycle of IaC detection integration tokens.
 * @method Models\ModifyImageRegistryResponse ModifyImageRegistry(Models\ModifyImageRegistryRequest $req) Modify image repository information.
 * @method Models\ModifyImageRegistryTimedScanTaskConfigResponse ModifyImageRegistryTimedScanTaskConfig(Models\ModifyImageRegistryTimedScanTaskConfigRequest $req) Modify the scheduled scan task configuration of an image repository
 * @method Models\ModifyImageSensitiveWhitelistResponse ModifyImageSensitiveWhitelist(Models\ModifyImageSensitiveWhitelistRequest $req) Modifies the Sensitive Information Allowlist of a Container Image
 * @method Models\ModifyImageVirusWhitelistResponse ModifyImageVirusWhitelist(Models\ModifyImageVirusWhitelistRequest $req) This API is used to query asset database information.
 * @method Models\ModifyImageVulWhitelistResponse ModifyImageVulWhitelist(Models\ModifyImageVulWhitelistRequest $req) Modifies the vulnerability allowlist of a container image.
 * @method Models\ModifyLoginWhiteRecordResponse ModifyLoginWhiteRecord(Models\ModifyLoginWhiteRecordRequest $req) This API is used to update the log-in audit allowlist information. (The number of server lists needs to be less than 1,000.)
 * @method Models\ModifyMachineAutoClearConfigResponse ModifyMachineAutoClearConfig(Models\ModifyMachineAutoClearConfigRequest $req) This API is used to modify the cleanup configuration of the machine.
 * @method Models\ModifyMachineRemarkResponse ModifyMachineRemark(Models\ModifyMachineRemarkRequest $req) Modify the remark information of a host asset
 * @method Models\ModifyMachinesLoginTypeResponse ModifyMachinesLoginType(Models\ModifyMachinesLoginTypeRequest $req) This API is used to modify host login methods in batches.
 * @method Models\ModifyMalwareTimingScanSettingsResponse ModifyMalwareTimingScanSettings(Models\ModifyMalwareTimingScanSettingsRequest $req) Modify the scheduled scan configuration for malicious file scan, including scan cycle, detection mode, asset scope, engine selection, and quarantine configuration.
 * @method Models\ModifyNFSScanConfResponse ModifyNFSScanConf(Models\ModifyNFSScanConfRequest $req) This API is used to add or update the global configuration for NFS scanning.
 * @method Models\ModifyNFSScanHostResponse ModifyNFSScanHost(Models\ModifyNFSScanHostRequest $req) This API is used to disable process guard.
 * @method Models\ModifyNetAttackSettingResponse ModifyNetAttackSetting(Models\ModifyNetAttackSettingRequest $req) Modify the network attack detection switch and asset scope configuration.
 * @method Models\ModifyNotifyAgentOfflineDurationResponse ModifyNotifyAgentOfflineDuration(Models\ModifyNotifyAgentOfflineDurationRequest $req) This API is used to modify client offline duration.
 * @method Models\ModifyNotifyAssetConfigResponse ModifyNotifyAssetConfig(Models\ModifyNotifyAssetConfigRequest $req) Modify the asset scope configuration for notifications
 * @method Models\ModifyNotifyMemberResponse ModifyNotifyMember(Models\ModifyNotifyMemberRequest $req) Modify the member account for notification.
 * @method Models\ModifyNotifySettingResponse ModifyNotifySetting(Models\ModifyNotifySettingRequest $req) Modifies notification settings
 * @method Models\ModifyNotifySettingAkResponse ModifyNotifySettingAk(Models\ModifyNotifySettingAkRequest $req) Modify notification settings
 * @method Models\ModifyNotifySettingAlertResponse ModifyNotifySettingAlert(Models\ModifyNotifySettingAlertRequest $req) Modify alarm center notification advanced configuration
 * @method Models\ModifyOrganizationAccountStatusResponse ModifyOrganizationAccountStatus(Models\ModifyOrganizationAccountStatusRequest $req) Modify Group Account Status
 * @method Models\ModifyPayConfigResponse ModifyPayConfig(Models\ModifyPayConfigRequest $req) Modify the auto-scaling configuration (multi-module and expandable; only the CWP module is available in the current period).

Auto-scaling is an external user-oriented concept equivalent to automatic purchase (auto_repurchase) at the underlying layer: when an account has new assets, the desired authorization is automatically purchased.

Supplemental description:
1. In the current period, only the HostConfig module is implemented for host security. Subsequent scalability allows named module fields for container security and AI-Agent security. Configuration fields of each module can be heterogeneous.
2. Partial update semantics: An empty module object indicates that the module is not modified, and an empty field in the module indicates that this field is not modified;
3. HostConfig.Switch linkage map: auto_repurchase_switch; auto_bind_switch is always on and not modified by this API.
4. Auto renewal (renew_flag) is not modified by this API; to query the limit/amount, call DescribeLicenseStatus.
5. The top auto scaling global switch state is aggregated by the frontend based on each module switch. The backend does not store or return the global switch.
 * @method Models\ModifyProtectionSettingResponse ModifyProtectionSetting(Models\ModifyProtectionSettingRequest $req) This API is used to configure protection settings for the major event protection package.
 * @method Models\ModifyRaspLicenseBindsResponse ModifyRaspLicenseBinds(Models\ModifyRaspLicenseBindsRequest $req) Bind an important period guarantee protection authorization package.
 * @method Models\ModifyReverseShellSystemPolicyConfigResponse ModifyReverseShellSystemPolicyConfig(Models\ModifyReverseShellSystemPolicyConfigRequest $req) This API is used to modify the intranet alert and asset scope configuration for rebound Shell.
 * @method Models\ModifyRiskCenterRiskStatusResponse ModifyRiskCenterRiskStatus(Models\ModifyRiskCenterRiskStatusRequest $req) Modify Risk Center Risk Status
 * @method Models\ModifyRiskCenterScanTaskResponse ModifyRiskCenterScanTask(Models\ModifyRiskCenterScanTaskRequest $req) Modify Risk Center Scan Task
 * @method Models\ModifyRiskScanCronConfigResponse ModifyRiskScanCronConfig(Models\ModifyRiskScanCronConfigRequest $req) Update the periodic scanning plan
 * @method Models\ModifySandboxACLRuleResponse ModifySandboxACLRule(Models\ModifySandboxACLRuleRequest $req) Modify an existing ACL user rule. Fields not passed retain their original values, and partial field update is supported.
 * @method Models\ModifySandboxACLRuleStatusResponse ModifySandboxACLRuleStatus(Models\ModifySandboxACLRuleStatusRequest $req) Batch switch the enable/disable status of ACL user rules. If any rule does not exist, belongs to another tenant, or has been deleted, an error is returned for the entirety.
 * @method Models\ModifySandboxAlertStatusResponse ModifySandboxAlertStatus(Models\ModifySandboxAlertStatusRequest $req) Batch update traffic sandbox alarms (overwrite ACL, DLP, and LLM audit). Locate the alarm source by AlertType + BelongAssetType. Status supports HANDLED / IGNORE to modify status, as well as DELETE to delete. If any alarm ID does not exist or belongs to another tenant, an error is returned overall. Note: Whitelisting (PASS) is not handled by this interface. It is triggered by Create/Modify***Rule writing back through AlertID.
 * @method Models\ModifySandboxDLPRuleResponse ModifySandboxDLPRule(Models\ModifySandboxDLPRuleRequest $req) Modify an existing DLP user rule. Fields not passed retain their original values, and partial field update is supported. BelongAssetType cannot be modified.
 * @method Models\ModifySandboxDLPRuleStatusResponse ModifySandboxDLPRuleStatus(Models\ModifySandboxDLPRuleStatusRequest $req) Batch switch the enable/disable status of DLP user rules. If any rule does not exist, belongs to another tenant, or has been deleted, an error is returned for the entirety.
 * @method Models\ModifySandboxFileRuleResponse ModifySandboxFileRule(Models\ModifySandboxFileRuleRequest $req) Modify command sandbox file access rule
 * @method Models\ModifySandboxFileRuleStatusResponse ModifySandboxFileRuleStatus(Models\ModifySandboxFileRuleStatusRequest $req) Batch enable or disable command sandbox file access rules.
 * @method Models\ModifySandboxLLMAuditRuleResponse ModifySandboxLLMAuditRule(Models\ModifySandboxLLMAuditRuleRequest $req) Modify an existing LLM audit user rule. Fields not passed retain their original values, and partial field update is supported.
 * @method Models\ModifySandboxLLMAuditRuleStatusResponse ModifySandboxLLMAuditRuleStatus(Models\ModifySandboxLLMAuditRuleStatusRequest $req) Batch switch the enable or disable status of LLM audit user rules. If any rule does not exist, belongs to another tenant, or has been deleted, an error is returned overall.
 * @method Models\ModifySecurityScoreRuleResponse ModifySecurityScoreRule(Models\ModifySecurityScoreRuleRequest $req) Modify a security scoring rule. You need to pass in a complete rule set.
 * @method Models\ModifyShareUserAKResponse ModifyShareUserAK(Models\ModifyShareUserAKRequest $req) Edit the ak monitoring account.
 * @method Models\ModifyShareUserCSPMResponse ModifyShareUserCSPM(Models\ModifyShareUserCSPMRequest $req) Edit a CSPM shared account
 * @method Models\ModifyShareUserDspmResponse ModifyShareUserDspm(Models\ModifyShareUserDspmRequest $req) Edit dspm monitored account
 * @method Models\ModifySkillScanAlertStatusResponse ModifySkillScanAlertStatus(Models\ModifySkillScanAlertStatusRequest $req) Batch modify the processing status of Skill security detection alarms.
 * @method Models\ModifyUebaRuleSwitchResponse ModifyUebaRuleSwitch(Models\ModifyUebaRuleSwitchRequest $req) Update the switch of a custom policy
 * @method Models\ModifyVulScanPeriodicResponse ModifyVulScanPeriodic(Models\ModifyVulScanPeriodicRequest $req) This API is used to modify vulnerability scanning (period scanning).
 * @method Models\ModifyVulWhitelistConfigResponse ModifyVulWhitelistConfig(Models\ModifyVulWhitelistConfigRequest $req) This API is used to modify the vulnerability allowlist configuration.
 * @method Models\ModifyVulWhitelistSwitchResponse ModifyVulWhitelistSwitch(Models\ModifyVulWhitelistSwitchRequest $req) This API is used to modify the vulnerability allowlist switch.
 * @method Models\ModifyWebhookPolicyResponse ModifyWebhookPolicy(Models\ModifyWebhookPolicyRequest $req) Add or modify a notification policy. ID > 0 means modification; ID = 0 or not passed means adding new. When MemberAppIds is configured as empty, the policy only acts on current root account events; when not empty, it acts on the self account + listed member accounts at the same time.
 * @method Models\ModifyWebhookPolicyStatusResponse ModifyWebhookPolicyStatus(Models\ModifyWebhookPolicyStatusRequest $req) Switch the enable status of the notification policy.
 * @method Models\ModifyWebhookReceiverResponse ModifyWebhookReceiver(Models\ModifyWebhookReceiverRequest $req) Add or modify a receiving robot. ID > 0 means modifying an existing record; ID = 0 or not passed means adding new. The robot type is determined by the Type field. When Type=WEBHOOK, WebhookAddr is required. When Type=SCF, SCFRegion/Namespace/FunctionName/FunctionVersion/Alias/MaxWaitSeconds are all required. Type is not allowed to be changed during modification.
 * @method Models\OperateRiskResponse OperateRisk(Models\OperateRiskRequest $req) Risk operation example
 * @method Models\OperateRiskRulePolicyResponse OperateRiskRulePolicy(Models\OperateRiskRulePolicyRequest $req) Custom risk rule
 * @method Models\ResetDspmAssetAccountPasswordResponse ResetDspmAssetAccountPassword(Models\ResetDspmAssetAccountPasswordRequest $req) Reset the Dspm asset account password.
 * @method Models\RetryDspmExportLogResponse RetryDspmExportLog(Models\RetryDspmExportLogRequest $req) RetryExportLog
 * @method Models\RevertDspmAssetAccountResponse RevertDspmAssetAccount(Models\RevertDspmAssetAccountRequest $req) Restore a Dspm asset account.
 * @method Models\ScanBaselineAssetItemListResponse ScanBaselineAssetItemList(Models\ScanBaselineAssetItemListRequest $req) This API is used to trigger a rescan of some detection items for a single asset.
 * @method Models\ScanBaselineItemListResponse ScanBaselineItemList(Models\ScanBaselineItemListRequest $req) This API is used to rescan detection items under a specified policy.
 * @method Models\ScanBaselinePolicyListResponse ScanBaselinePolicyList(Models\ScanBaselinePolicyListRequest $req) Trigger a holistic rescan for a batch of baseline policies via the one-click scan entry on the strategy list page. All assets within the policy hit scope will be rescanned.
 * @method Models\ScanBaselineRiskListResponse ScanBaselineRiskList(Models\ScanBaselineRiskListRequest $req) Triggers a rescan for a batch of risk records. It is commonly used for rescanning after selecting multiple risks on the Risk List page.
 * @method Models\ScanCSIPTaskAgainResponse ScanCSIPTaskAgain(Models\ScanCSIPTaskAgainRequest $req) This API is used to delete CSIP manual scan tasks.
 * @method Models\ScanEDRTaskAgainResponse ScanEDRTaskAgain(Models\ScanEDRTaskAgainRequest $req) Create a scan task based on the original task configuration. If AssetId is empty, get all asset info from TaskId. If AssetId is not empty, only the single asset is included.
 * @method Models\SendDspmAssetLoginSmsCodeResponse SendDspmAssetLoginSmsCode(Models\SendDspmAssetLoginSmsCodeRequest $req) Sends the access verification code for a Dspm asset
 * @method Models\SendDspmCkafkaTestResponse SendDspmCkafkaTest(Models\SendDspmCkafkaTestRequest $req) This API is used to test the tenant CKafka connectivity.
 * @method Models\StartOrModifyPreventUninstallResponse StartOrModifyPreventUninstall(Models\StartOrModifyPreventUninstallRequest $req) Enable or modify the anti-uninstall feature configuration.
 * @method Models\StartOrModifyProcessDaemonResponse StartOrModifyProcessDaemon(Models\StartOrModifyProcessDaemonRequest $req) This API is used to enable or modify process guard feature configurations.
 * @method Models\StopBaselineScanTaskResponse StopBaselineScanTask(Models\StopBaselineScanTaskRequest $req) This API is used to stop a specified baseline scan main task. It only takes effect for tasks in the INIT, SUBTASK_CREATING, or SCANNING status.
 * @method Models\StopCSIPManualMalwareScanResponse StopCSIPManualMalwareScan(Models\StopCSIPManualMalwareScanRequest $req) CSIP manual scan stop API
 * @method Models\StopEDRScanTaskResponse StopEDRScanTask(Models\StopEDRScanTaskRequest $req) Stop or cancel a scan task. For tasks in SCANNING status, call RPC to stop them. For tasks in WAIT status, update the database directly to cancel them. Only the task creator can perform these operations.
 * @method Models\StopImageRegistryScanTaskResponse StopImageRegistryScanTask(Models\StopImageRegistryScanTaskRequest $req) Terminate an image scanning task in a mirror repository
 * @method Models\StopPreventUninstallResponse StopPreventUninstall(Models\StopPreventUninstallRequest $req) This API is used to disable the anti-uninstallation feature.
 * @method Models\StopProcessDaemonResponse StopProcessDaemon(Models\StopProcessDaemonRequest $req) This API is used to disable process guard.
 * @method Models\StopRiskCenterTaskResponse StopRiskCenterTask(Models\StopRiskCenterTaskRequest $req) Stop Scanning Tasks of Risk Center
 * @method Models\StopVulScanTaskResponse StopVulScanTask(Models\StopVulScanTaskRequest $req) Stop vulnerability scanning (task scan).
 * @method Models\SyncDspmAssetsResponse SyncDspmAssets(Models\SyncDspmAssetsRequest $req) Synchronize assets supported by dspm
 * @method Models\SyncDspmUsersResponse SyncDspmUsers(Models\SyncDspmUsersRequest $req) Synchronize the list of dspm users.
 * @method Models\SyncImageRegistryResponse SyncImageRegistry(Models\SyncImageRegistryRequest $req) Synchronize the mirror repository
 * @method Models\TestWebhookReceiverResponse TestWebhookReceiver(Models\TestWebhookReceiverRequest $req) Send a test message to the designated receiving robot to verify reachability and configuration. Use the "Test" button in the corresponding table row.
 * @method Models\UninstallClusterAgentResponse UninstallClusterAgent(Models\UninstallClusterAgentRequest $req) Uninstall the cluster container security Agent.
 * @method Models\UninstallKeySandboxSkillResponse UninstallKeySandboxSkill(Models\UninstallKeySandboxSkillRequest $req) Uninstall the key sandbox SKILL from designated machine instances. Support batch operations, allowing multiple instance IDs at once. After uninstallation, the AI Agent on the target machine will not be able to access credentials via the key sandbox proxy. Repeated calls on instances not installed will not trigger an error (idempotent), and are directly deemed successful.
 * @method Models\UpdateAccessKeyAlarmStatusResponse UpdateAccessKeyAlarmStatus(Models\UpdateAccessKeyAlarmStatusRequest $req) Tag risks or alarms as processed or ignored.
 * @method Models\UpdateAccessKeyRemarkResponse UpdateAccessKeyRemark(Models\UpdateAccessKeyRemarkRequest $req) Edit the remark of an access key/source IP.
 * @method Models\UpdateAlertStatusListResponse UpdateAlertStatusList(Models\UpdateAlertStatusListRequest $req) This API is used to handle alarm status in batches.
 * @method Models\UpdateClusterOwnerResponse UpdateClusterOwner(Models\UpdateClusterOwnerRequest $req) Bind and update a cluster owner
 * @method Models\VerifyDspmAssetLoginCodeResponse VerifyDspmAssetLoginCode(Models\VerifyDspmAssetLoginCodeRequest $req) Verify the login verification code for a Dspm asset.
 */

class CsipClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "csip.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "csip";

    /**
     * @var string
     */
    protected $version = "2022-11-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("csip")."\\"."V20221121\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
