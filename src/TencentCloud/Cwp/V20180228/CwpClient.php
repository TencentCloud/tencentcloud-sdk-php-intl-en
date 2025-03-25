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

namespace TencentCloud\Cwp\V20180228;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cwp\V20180228\Models as Models;

/**
 * @method Models\AddLoginWhiteListsResponse AddLoginWhiteLists(Models\AddLoginWhiteListsRequest $req) This API is used to add cross-region log-in allowlists in batches.
 * @method Models\CancelIgnoreVulResponse CancelIgnoreVul(Models\CancelIgnoreVulRequest $req) This API is used to unignore the vulnerabilities.
 * @method Models\ChangeRuleEventsIgnoreStatusResponse ChangeRuleEventsIgnoreStatus(Models\ChangeRuleEventsIgnoreStatusRequest $req) This API is used to ignore events or cancel ignoring in batches based on check item ID or event ID.
 * @method Models\ChangeStrategyEnableStatusResponse ChangeStrategyEnableStatus(Models\ChangeStrategyEnableStatusRequest $req) This API is used to change the policy availability status by policy ID.
 * @method Models\CheckBashPolicyParamsResponse CheckBashPolicyParams(Models\CheckBashPolicyParamsRequest $req) This API is used to verify parameters entered for adding and editing high-risk command user rules.
 * @method Models\CheckBashRuleParamsResponse CheckBashRuleParams(Models\CheckBashRuleParamsRequest $req) This API is used to verify parameters entered for adding and editing high-risk command user rules.
 * @method Models\CheckFileTamperRuleResponse CheckFileTamperRule(Models\CheckFileTamperRuleRequest $req) This API is used to check the rule parameters entered at the core file monitoring frontend.
 * @method Models\CheckFirstScanBaselineResponse CheckFirstScanBaseline(Models\CheckFirstScanBaselineRequest $req) This API is used to query whether the baseline is detected for the first time.
 * @method Models\CheckLogKafkaConnectionStateResponse CheckLogKafkaConnectionState(Models\CheckLogKafkaConnectionStateRequest $req) This API is used to check the connectivity for log shipping from Kafka.
 * @method Models\ClearLocalStorageResponse ClearLocalStorage(Models\ClearLocalStorageRequest $req) This API is used to clean up the locally stored data.
 * @method Models\CreateBanWhiteListResponse CreateBanWhiteList(Models\CreateBanWhiteListRequest $req) This API is used to add the list of block allowlists.
 * @method Models\CreateBaselineStrategyResponse CreateBaselineStrategy(Models\CreateBaselineStrategyRequest $req) This API is used to create a baseline policy based on the policy information.
 * @method Models\CreateBuyBindTaskResponse CreateBuyBindTask(Models\CreateBuyBindTaskRequest $req) This API is used to create an automatic binding task for newly purchased authorizations.
 * @method Models\CreateEmergencyVulScanResponse CreateEmergencyVulScan(Models\CreateEmergencyVulScanRequest $req) This API is used to create emergency vulnerability scan tasks.
 * @method Models\CreateIncidentBacktrackingResponse CreateIncidentBacktracking(Models\CreateIncidentBacktrackingRequest $req) This API is used to trigger event investigation and alarm backtracking for Ultimate Edition machines.
 * @method Models\CreateLicenseOrderResponse CreateLicenseOrder(Models\CreateLicenseOrderRequest $req) This API is used to create Professional/Flagship edition orders
.This API is used to support creating orders through prepaid and pay-as-you-go.
This API is used to directly create postpaid orders.
This API is used to call the billing payment API for payment since prepaid orders are only placed but not paid.
 * @method Models\CreateLogExportResponse CreateLogExport(Models\CreateLogExportRequest $req) This API is used to create log download tasks.
 * @method Models\CreateMaliciousRequestWhiteListResponse CreateMaliciousRequestWhiteList(Models\CreateMaliciousRequestWhiteListRequest $req) This API is used to add malicious request allowlists.
 * @method Models\CreateMalwareWhiteListResponse CreateMalwareWhiteList(Models\CreateMalwareWhiteListRequest $req) This API is used to create the Trojan allowlist.
 * @method Models\CreateNetAttackWhiteListResponse CreateNetAttackWhiteList(Models\CreateNetAttackWhiteListRequest $req) This API is used to create a network attack allowlist.
 * @method Models\CreateRansomDefenseStrategyResponse CreateRansomDefenseStrategy(Models\CreateRansomDefenseStrategyRequest $req) This API is used to create or modify anti-ransomware policies.
 * @method Models\CreateScanMalwareSettingResponse CreateScanMalwareSetting(Models\CreateScanMalwareSettingRequest $req) This API is used to detect the intrusion and virus scanning.
 * @method Models\CreateSearchLogResponse CreateSearchLog(Models\CreateSearchLogRequest $req) This API is used to add history search records.
 * @method Models\CreateSearchTemplateResponse CreateSearchTemplate(Models\CreateSearchTemplateRequest $req) This API is used to add the	retrieval template.
 * @method Models\CreateVulFixResponse CreateVulFix(Models\CreateVulFixRequest $req) This API is used to submit the vulnerabilities and fix them.
 * @method Models\CreateWhiteListOrderResponse CreateWhiteListOrder(Models\CreateWhiteListOrderRequest $req) This API is used to create allowlist orders.
 * @method Models\DeleteAllJavaMemShellsResponse DeleteAllJavaMemShells(Models\DeleteAllJavaMemShellsRequest $req) This API is used to delete all Java webshell events.
 * @method Models\DeleteBanWhiteListResponse DeleteBanWhiteList(Models\DeleteBanWhiteListRequest $req) This API is used to delete the list of blocking allowlists.
 * @method Models\DeleteBaselinePolicyResponse DeleteBaselinePolicy(Models\DeleteBaselinePolicyRequest $req) This API is used to delete the baseline policy configuration.
 * @method Models\DeleteBaselineStrategyResponse DeleteBaselineStrategy(Models\DeleteBaselineStrategyRequest $req) This API is used to delete the policy by baseline policy ID.
 * @method Models\DeleteBashEventsResponse DeleteBashEvents(Models\DeleteBashEventsRequest $req) This API is used to delete high-risk command events based on IDs.
 * @method Models\DeleteBashPoliciesResponse DeleteBashPolicies(Models\DeleteBashPoliciesRequest $req) This API is used to delete high-risk command policies.
 * @method Models\DeleteBashRulesResponse DeleteBashRules(Models\DeleteBashRulesRequest $req) This API is used to delete high-risk command rules.
 * @method Models\DeleteBruteAttacksResponse DeleteBruteAttacks(Models\DeleteBruteAttacksRequest $req) This API is used to delete brute force attack records.
 * @method Models\DeleteLicenseRecordResponse DeleteLicenseRecord(Models\DeleteLicenseRecordRequest $req) This API is used to delete expired orders in Authorization Management - Order List. (Deleted orders are not counted in statistics.)
 * @method Models\DeleteLicenseRecordAllResponse DeleteLicenseRecordAll(Models\DeleteLicenseRecordAllRequest $req) This API is used to delete all authorization records.
 * @method Models\DeleteLogExportResponse DeleteLogExport(Models\DeleteLogExportRequest $req) This API is used to delete log download tasks.
 * @method Models\DeleteLoginWhiteListResponse DeleteLoginWhiteList(Models\DeleteLoginWhiteListRequest $req) This API is used to delete the cross-region log-in allowlist rules.
 * @method Models\DeleteMachineResponse DeleteMachine(Models\DeleteMachineRequest $req) This API is used to uninstall the CWPP client.
 * @method Models\DeleteMachineClearHistoryResponse DeleteMachineClearHistory(Models\DeleteMachineClearHistoryRequest $req) This API is used to delete clearing records of a machine.
 * @method Models\DeleteMachineTagResponse DeleteMachineTag(Models\DeleteMachineTagRequest $req) This API is used to delete tags associated with the server.
 * @method Models\DeleteMaliciousRequestWhiteListResponse DeleteMaliciousRequestWhiteList(Models\DeleteMaliciousRequestWhiteListRequest $req) This API is used to delete the malicious request allowlist.
 * @method Models\DeleteMaliciousRequestsResponse DeleteMaliciousRequests(Models\DeleteMaliciousRequestsRequest $req) This API is used to delete malicious request records.
 * @method Models\DeleteMalwareScanTaskResponse DeleteMalwareScanTask(Models\DeleteMalwareScanTaskRequest $req) This API is used to terminate the scan tasks.
 * @method Models\DeleteMalwareWhiteListResponse DeleteMalwareWhiteList(Models\DeleteMalwareWhiteListRequest $req) This API is used to delete the Trojan whitelist.
 * @method Models\DeleteMalwaresResponse DeleteMalwares(Models\DeleteMalwaresRequest $req) This API is used to delete Trojan records.
 * @method Models\DeleteNetAttackWhiteListResponse DeleteNetAttackWhiteList(Models\DeleteNetAttackWhiteListRequest $req) This API is used to delete the network attack allowlist.
 * @method Models\DeleteNonlocalLoginPlacesResponse DeleteNonlocalLoginPlaces(Models\DeleteNonlocalLoginPlacesRequest $req) This API is used to delete cross-region log-in records.
 * @method Models\DeletePrivilegeEventsResponse DeletePrivilegeEvents(Models\DeletePrivilegeEventsRequest $req) This API is used to delete local privilege escalation based on IDs.
 * @method Models\DeletePrivilegeRulesResponse DeletePrivilegeRules(Models\DeletePrivilegeRulesRequest $req) This API is used to delete local privilege elevation rules.
 * @method Models\DeleteReverseShellEventsResponse DeleteReverseShellEvents(Models\DeleteReverseShellEventsRequest $req) This API is used to delete Reverse Shell events based on IDs.
 * @method Models\DeleteReverseShellRulesResponse DeleteReverseShellRules(Models\DeleteReverseShellRulesRequest $req) This API is used to delete Reverse Shell rules.
 * @method Models\DeleteRiskDnsEventResponse DeleteRiskDnsEvent(Models\DeleteRiskDnsEventRequest $req) This API is used to delete malicious request events.
 * @method Models\DeleteRiskDnsPolicyResponse DeleteRiskDnsPolicy(Models\DeleteRiskDnsPolicyRequest $req) This API is used to delete malicious request policies.
 * @method Models\DeleteScanTaskResponse DeleteScanTask(Models\DeleteScanTaskRequest $req) This API is used to stop scan tasks of a specified type.
 * @method Models\DeleteSearchTemplateResponse DeleteSearchTemplate(Models\DeleteSearchTemplateRequest $req) This API is used to delete the retrieval template.
 * @method Models\DeleteTagsResponse DeleteTags(Models\DeleteTagsRequest $req) This API is used to delete tags.
 * @method Models\DeleteWebHookPolicyResponse DeleteWebHookPolicy(Models\DeleteWebHookPolicyRequest $req) This API is used to delete alarm policies.
 * @method Models\DeleteWebHookReceiverResponse DeleteWebHookReceiver(Models\DeleteWebHookReceiverRequest $req) This API is used to delete the alert recipient.
 * @method Models\DeleteWebHookRuleResponse DeleteWebHookRule(Models\DeleteWebHookRuleRequest $req) This API is used to delete the rules of WeCom chatbots.
 * @method Models\DescribeABTestConfigResponse DescribeABTestConfig(Models\DescribeABTestConfigRequest $req) This API is used to obtain the current grayscale configuration of the user.
 * @method Models\DescribeAESKeyResponse DescribeAESKey(Models\DescribeAESKeyRequest $req) This API is used to obtain the configured aeskey and aesiv.
 * @method Models\DescribeAccountStatisticsResponse DescribeAccountStatistics(Models\DescribeAccountStatisticsRequest $req) This API is used to obtain the account statistics data.
 * @method Models\DescribeAgentInstallCommandResponse DescribeAgentInstallCommand(Models\DescribeAgentInstallCommandRequest $req) This API is used to obtain the agent installation command.
 * @method Models\DescribeAgentInstallationTokenResponse DescribeAgentInstallationToken(Models\DescribeAgentInstallationTokenRequest $req) This API is used to obtain the token for installing the agent in a hybrid cloud environment.
 * @method Models\DescribeAlarmIncidentNodesResponse DescribeAlarmIncidentNodes(Models\DescribeAlarmIncidentNodesRequest $req) This API is used to obtain all node information on the event corresponding to an alarm.
 * @method Models\DescribeAlarmVertexIdResponse DescribeAlarmVertexId(Models\DescribeAlarmVertexIdRequest $req) This API is used to query the list of alarm IDs.
 * @method Models\DescribeAssetAppCountResponse DescribeAssetAppCount(Models\DescribeAssetAppCountRequest $req) This API is used to obtain the number of all software applications.
 * @method Models\DescribeAssetAppListResponse DescribeAssetAppList(Models\DescribeAssetAppListRequest $req) This API is used to query the application list.
 * @method Models\DescribeAssetAppProcessListResponse DescribeAssetAppProcessList(Models\DescribeAssetAppProcessListRequest $req) This API is used to obtain the list of software's associated processes.
 * @method Models\DescribeAssetCoreModuleInfoResponse DescribeAssetCoreModuleInfo(Models\DescribeAssetCoreModuleInfoRequest $req) This API is used to obtain the kernel module details.
 * @method Models\DescribeAssetCoreModuleListResponse DescribeAssetCoreModuleList(Models\DescribeAssetCoreModuleListRequest $req) This API is used to query the list of asset management kernel modules.
 * @method Models\DescribeAssetDatabaseCountResponse DescribeAssetDatabaseCount(Models\DescribeAssetDatabaseCountRequest $req) This API is used to obtain the number of all databases.
 * @method Models\DescribeAssetDatabaseInfoResponse DescribeAssetDatabaseInfo(Models\DescribeAssetDatabaseInfoRequest $req) This API is used to obtain the asset management database details.
 * @method Models\DescribeAssetDatabaseListResponse DescribeAssetDatabaseList(Models\DescribeAssetDatabaseListRequest $req) This API is used to query the list of asset management databases.
 * @method Models\DescribeAssetDiskListResponse DescribeAssetDiskList(Models\DescribeAssetDiskListRequest $req) This API is used to obtain the host disk partition list.
 * @method Models\DescribeAssetEnvListResponse DescribeAssetEnvList(Models\DescribeAssetEnvListRequest $req) This API is used to query the list of asset management environment variables.
 * @method Models\DescribeAssetHostTotalCountResponse DescribeAssetHostTotalCount(Models\DescribeAssetHostTotalCountRequest $req) This API is used to obtain the total number of resources of the host.
 * @method Models\DescribeAssetInfoResponse DescribeAssetInfo(Models\DescribeAssetInfoRequest $req) This API is used to obtain the number of assets, including hosts, accounts, ports, processes, software, databases, web applications, web frameworks, web services, and web sites.
 * @method Models\DescribeAssetInitServiceListResponse DescribeAssetInitServiceList(Models\DescribeAssetInitServiceListRequest $req) This API is used to query the list of asset management start services.
 * @method Models\DescribeAssetJarInfoResponse DescribeAssetJarInfo(Models\DescribeAssetJarInfoRequest $req) This API is used to obtain Jar package details.
 * @method Models\DescribeAssetJarListResponse DescribeAssetJarList(Models\DescribeAssetJarListRequest $req) This API is used to query the list of Jar packages.
 * @method Models\DescribeAssetLoadInfoResponse DescribeAssetLoadInfo(Models\DescribeAssetLoadInfoRequest $req) This API is used to obtain the utilization of the system load, memory, and hard disk.
 * @method Models\DescribeAssetMachineDetailResponse DescribeAssetMachineDetail(Models\DescribeAssetMachineDetailRequest $req) This API is used to obtain asset management host resource details.
 * @method Models\DescribeAssetMachineListResponse DescribeAssetMachineList(Models\DescribeAssetMachineListRequest $req) This API is used to obtain the resource monitoring list of the asset fingerprint page.
 * @method Models\DescribeAssetMachineTagTopResponse DescribeAssetMachineTagTop(Models\DescribeAssetMachineTagTopRequest $req) This API is used to obtain top 5 host tags.
 * @method Models\DescribeAssetPlanTaskListResponse DescribeAssetPlanTaskList(Models\DescribeAssetPlanTaskListRequest $req) This API is used to query the list of asset management plan tasks.
 * @method Models\DescribeAssetPortCountResponse DescribeAssetPortCount(Models\DescribeAssetPortCountRequest $req) This API is used to obtain the total number of ports.
 * @method Models\DescribeAssetPortInfoListResponse DescribeAssetPortInfoList(Models\DescribeAssetPortInfoListRequest $req) This API is used to obtain the list of asset management ports.
 * @method Models\DescribeAssetProcessCountResponse DescribeAssetProcessCount(Models\DescribeAssetProcessCountRequest $req) This API is used to obtain the total number of processes.
 * @method Models\DescribeAssetProcessInfoListResponse DescribeAssetProcessInfoList(Models\DescribeAssetProcessInfoListRequest $req) This API is used to obtain the list of asset management processes.
 * @method Models\DescribeAssetRecentMachineInfoResponse DescribeAssetRecentMachineInfo(Models\DescribeAssetRecentMachineInfoRequest $req) This API is used to obtain the latest trend of hosts.
 * @method Models\DescribeAssetSystemPackageListResponse DescribeAssetSystemPackageList(Models\DescribeAssetSystemPackageListRequest $req) This API is used to obtain the list of system installation packages for asset management.
 * @method Models\DescribeAssetTotalCountResponse DescribeAssetTotalCount(Models\DescribeAssetTotalCountRequest $req) This API is used to obtain the number of resources, including hosts, accounts, ports, processes, software, databases, web applications, web frameworks, web services, and web sites.
 * @method Models\DescribeAssetTypeTopResponse DescribeAssetTypeTop(Models\DescribeAssetTypeTopRequest $req) This API is used to obtain Top5 resources of various types.
 * @method Models\DescribeAssetTypesResponse DescribeAssetTypes(Models\DescribeAssetTypesRequest $req) This API is used to obtain the asset fingerprint type list.
 * @method Models\DescribeAssetUserCountResponse DescribeAssetUserCount(Models\DescribeAssetUserCountRequest $req) This API is used to obtain the total number of accounts.
 * @method Models\DescribeAssetUserInfoResponse DescribeAssetUserInfo(Models\DescribeAssetUserInfoRequest $req) This API is used to obtain host account details.
 * @method Models\DescribeAssetUserKeyListResponse DescribeAssetUserKeyList(Models\DescribeAssetUserKeyListRequest $req) This API is used to obtain the list of host account Keys.
 * @method Models\DescribeAssetUserListResponse DescribeAssetUserList(Models\DescribeAssetUserListRequest $req) This API is used to obtain the list of accounts.
 * @method Models\DescribeAssetWebAppCountResponse DescribeAssetWebAppCount(Models\DescribeAssetWebAppCountRequest $req) This API is used to obtain the number of all web applications.
 * @method Models\DescribeAssetWebAppListResponse DescribeAssetWebAppList(Models\DescribeAssetWebAppListRequest $req) This API is used to obtain the list of asset management web applications.
 * @method Models\DescribeAssetWebAppPluginListResponse DescribeAssetWebAppPluginList(Models\DescribeAssetWebAppPluginListRequest $req) This API is used to obtain the list of asset management Web application plugins.
 * @method Models\DescribeAssetWebFrameCountResponse DescribeAssetWebFrameCount(Models\DescribeAssetWebFrameCountRequest $req) This API is used to obtain the number of all Web frameworks.
 * @method Models\DescribeAssetWebFrameListResponse DescribeAssetWebFrameList(Models\DescribeAssetWebFrameListRequest $req) This API is used to obtain the list of asset management Web frameworks.
 * @method Models\DescribeAssetWebLocationCountResponse DescribeAssetWebLocationCount(Models\DescribeAssetWebLocationCountRequest $req) This API is used to obtain the total number of Web sites.
 * @method Models\DescribeAssetWebLocationInfoResponse DescribeAssetWebLocationInfo(Models\DescribeAssetWebLocationInfoRequest $req) This API is used to obtain the Web site details.
 * @method Models\DescribeAssetWebLocationListResponse DescribeAssetWebLocationList(Models\DescribeAssetWebLocationListRequest $req) This API is used to obtain the list of Web sites.
 * @method Models\DescribeAssetWebLocationPathListResponse DescribeAssetWebLocationPathList(Models\DescribeAssetWebLocationPathListRequest $req) This API is used to obtain the list of Web sites' virtual directories.
 * @method Models\DescribeAssetWebServiceCountResponse DescribeAssetWebServiceCount(Models\DescribeAssetWebServiceCountRequest $req) This API is used to obtain the number of all web services.
 * @method Models\DescribeAssetWebServiceInfoListResponse DescribeAssetWebServiceInfoList(Models\DescribeAssetWebServiceInfoListRequest $req) This API is used to query the list of asset management Web services.
 * @method Models\DescribeAssetWebServiceProcessListResponse DescribeAssetWebServiceProcessList(Models\DescribeAssetWebServiceProcessListRequest $req) This API is used to obtain the list of processes associated with Web services.
 * @method Models\DescribeAttackEventInfoResponse DescribeAttackEventInfo(Models\DescribeAttackEventInfoRequest $req) This API is used to obtain network attack details.
 * @method Models\DescribeAttackEventsResponse DescribeAttackEvents(Models\DescribeAttackEventsRequest $req) This API is used to display the list of network attack detection events in pagination.
 * @method Models\DescribeAttackLogsResponse DescribeAttackLogs(Models\DescribeAttackLogsRequest $req) DescribeAttackEvents 代替

This API is used to display the list of network attack logs in pagination.
 * @method Models\DescribeAttackSourceResponse DescribeAttackSource(Models\DescribeAttackSourceRequest $req) 已废弃

This API is used to backtrack attacks.
 * @method Models\DescribeAttackSourceEventsResponse DescribeAttackSourceEvents(Models\DescribeAttackSourceEventsRequest $req) 已废弃

This API is used to query attack backtracking events.
 * @method Models\DescribeAttackStatisticsResponse DescribeAttackStatistics(Models\DescribeAttackStatisticsRequest $req) This API is used to obtain the statistics of network attack data.
 * @method Models\DescribeAttackTopResponse DescribeAttackTop(Models\DescribeAttackTopRequest $req) This API is used to obtain the list of Top 5 network attacks.
 * @method Models\DescribeAttackTrendsResponse DescribeAttackTrends(Models\DescribeAttackTrendsRequest $req) This API is used to obtain the network attack trend data.
 * @method Models\DescribeAttackVulTypeListResponse DescribeAttackVulTypeList(Models\DescribeAttackVulTypeListRequest $req) This API is used to obtain the list of network attack threat types.
 * @method Models\DescribeAvailableExpertServiceDetailResponse DescribeAvailableExpertServiceDetail(Models\DescribeAvailableExpertServiceDetailRequest $req) This API is used to obtain available order details.
 * @method Models\DescribeBanModeResponse DescribeBanMode(Models\DescribeBanModeRequest $req) This API is used to obtain the brute-force blocking mode.
 * @method Models\DescribeBanRegionsResponse DescribeBanRegions(Models\DescribeBanRegionsRequest $req) This API is used to obtain the block region.
 * @method Models\DescribeBanStatusResponse DescribeBanStatus(Models\DescribeBanStatusRequest $req) This API is used to obtain the block button status.
 * @method Models\DescribeBanWhiteListResponse DescribeBanWhiteList(Models\DescribeBanWhiteListRequest $req) This API is used to obtain the blocking allowlist list.
 * @method Models\DescribeBaselineBasicInfoResponse DescribeBaselineBasicInfo(Models\DescribeBaselineBasicInfoRequest $req) This API is used to query the list of baseline basic information.
 * @method Models\DescribeBaselineDefaultStrategyListResponse DescribeBaselineDefaultStrategyList(Models\DescribeBaselineDefaultStrategyListRequest $req) This API is used to query the list information of default policies of the baseline.
 * @method Models\DescribeBaselineDetailResponse DescribeBaselineDetail(Models\DescribeBaselineDetailRequest $req) This API is used to query baseline details by baseline ID.
 * @method Models\DescribeBaselineEffectHostListResponse DescribeBaselineEffectHostList(Models\DescribeBaselineEffectHostListRequest $req) This API is used to query the list of hosts affected by a baseline based on baseline ID.
 * @method Models\DescribeBaselineHostDetectListResponse DescribeBaselineHostDetectList(Models\DescribeBaselineHostDetectListRequest $req) This API is used to obtain the list of hosts for baseline detection.
 * @method Models\DescribeBaselineHostTopResponse DescribeBaselineHostTop(Models\DescribeBaselineHostTopRequest $req) This API is used to return Top N risky servers.
 * @method Models\DescribeBaselineItemDetectListResponse DescribeBaselineItemDetectList(Models\DescribeBaselineItemDetectListRequest $req) This API is used to obtain the list of baseline detection items.
 * @method Models\DescribeBaselineItemListResponse DescribeBaselineItemList(Models\DescribeBaselineItemListRequest $req) This API is used to obtain the list of check results on baseline check items.
 * @method Models\DescribeBaselineListResponse DescribeBaselineList(Models\DescribeBaselineListRequest $req) This API is used to query the information of the baseline list.
 * @method Models\DescribeBaselinePolicyListResponse DescribeBaselinePolicyList(Models\DescribeBaselinePolicyListRequest $req) This API is used to obtain the list of baseline policies.
 * @method Models\DescribeBaselineRuleResponse DescribeBaselineRule(Models\DescribeBaselineRuleRequest $req) This API is used to query the information on corresponding check items based on baseline ID.
 * @method Models\DescribeBaselineScanScheduleResponse DescribeBaselineScanSchedule(Models\DescribeBaselineScanScheduleRequest $req) This API is used to query the baseline detection progress by task ID.
 * @method Models\DescribeBaselineStrategyDetailResponse DescribeBaselineStrategyDetail(Models\DescribeBaselineStrategyDetailRequest $req) This API is used to query policy details by baseline policy ID.
 * @method Models\DescribeBaselineStrategyListResponse DescribeBaselineStrategyList(Models\DescribeBaselineStrategyListRequest $req) This API is used to query the information of baseline policies under the same user.
 * @method Models\DescribeBaselineTopResponse DescribeBaselineTop(Models\DescribeBaselineTopRequest $req) This API is used to query TOP baseline detection items based on policy IDs.
 * @method Models\DescribeBaselineWeakPasswordListResponse DescribeBaselineWeakPasswordList(Models\DescribeBaselineWeakPasswordListRequest $req) This API is used to obtain the list of baseline weak passwords.
 * @method Models\DescribeBashEventsResponse DescribeBashEvents(Models\DescribeBashEventsRequest $req) This API is used to obtain the high-risk command list.
 * @method Models\DescribeBashEventsInfoResponse DescribeBashEventsInfo(Models\DescribeBashEventsInfoRequest $req) This API is used to query high-risk command event details.
 * @method Models\DescribeBashEventsInfoNewResponse DescribeBashEventsInfoNew(Models\DescribeBashEventsInfoNewRequest $req) This API is used to query high-risk command event details (new).
 * @method Models\DescribeBashEventsNewResponse DescribeBashEventsNew(Models\DescribeBashEventsNewRequest $req) This API is used to obtain the list of high-risk commands (new).
 * @method Models\DescribeBashPoliciesResponse DescribeBashPolicies(Models\DescribeBashPoliciesRequest $req) This API is used to obtain the list of high-risk command policies.
 * @method Models\DescribeBashRulesResponse DescribeBashRules(Models\DescribeBashRulesRequest $req) This API is used to obtain the list of high-risk command rules.
 * @method Models\DescribeBruteAttackListResponse DescribeBruteAttackList(Models\DescribeBruteAttackListRequest $req) This API is used to obtain the list of password cracking.
 * @method Models\DescribeBruteAttackRulesResponse DescribeBruteAttackRules(Models\DescribeBruteAttackRulesRequest $req) This API is used to obtain brute force cracking rules.
 * @method Models\DescribeCanFixVulMachineResponse DescribeCanFixVulMachine(Models\DescribeCanFixVulMachineRequest $req) This API is used to query the fixable host information.
 * @method Models\DescribeCanNotSeparateMachineResponse DescribeCanNotSeparateMachine(Models\DescribeCanNotSeparateMachineRequest $req) This API is used to obtain hosts where Trojans cannot be isolated.
 * @method Models\DescribeClientExceptionResponse DescribeClientException(Models\DescribeClientExceptionRequest $req) This API is used to obtain client exception events.
 * @method Models\DescribeComponentStatisticsResponse DescribeComponentStatistics(Models\DescribeComponentStatisticsRequest $req) 接口已无效

This API is used to obtain the data of the component statistics list.
 * @method Models\DescribeDefenceEventDetailResponse DescribeDefenceEventDetail(Models\DescribeDefenceEventDetailRequest $req) This API is used to obtain vulnerability defense event details.
 * @method Models\DescribeDirectConnectInstallCommandResponse DescribeDirectConnectInstallCommand(Models\DescribeDirectConnectInstallCommandRequest $req) This API is used to obtain DC agent installation command, including the token.
 * @method Models\DescribeESAggregationsResponse DescribeESAggregations(Models\DescribeESAggregationsRequest $req) This API is used to obtain the aggregation result of the ES field.
 * @method Models\DescribeEmergencyResponseListResponse DescribeEmergencyResponseList(Models\DescribeEmergencyResponseListRequest $req) This API is used to obtain the emergency response list.
 * @method Models\DescribeEmergencyVulListResponse DescribeEmergencyVulList(Models\DescribeEmergencyVulListRequest $req) This API is used to obtain the list of emergency vulnerabilities.
 * @method Models\DescribeEventByTableResponse DescribeEventByTable(Models\DescribeEventByTableRequest $req) This API is used to query alarm event details based on event table names and IDs.
 * @method Models\DescribeExpertServiceListResponse DescribeExpertServiceList(Models\DescribeExpertServiceListRequest $req) This API is used to obtain the security manager list.
 * @method Models\DescribeExpertServiceOrderListResponse DescribeExpertServiceOrderList(Models\DescribeExpertServiceOrderListRequest $req) This API is used to obtain the expert service order list.
 * @method Models\DescribeExportMachinesResponse DescribeExportMachines(Models\DescribeExportMachinesRequest $req) This API is used to export the list of hosts in a specific region.
 * @method Models\DescribeFastAnalysisResponse DescribeFastAnalysis(Models\DescribeFastAnalysisRequest $req) This API is used to quickly analyze and count logs.
 * @method Models\DescribeFileTamperEventRuleInfoResponse DescribeFileTamperEventRuleInfo(Models\DescribeFileTamperEventRuleInfoRequest $req) This API is used to view the rule details API when an event occurs.
 * @method Models\DescribeFileTamperEventsResponse DescribeFileTamperEvents(Models\DescribeFileTamperEventsRequest $req) This API is used to obtain the list of core file monitoring events.
 * @method Models\DescribeFileTamperRuleCountResponse DescribeFileTamperRuleCount(Models\DescribeFileTamperRuleCountRequest $req) This API is used to query the number of rules for monitoring files associated with a host.
 * @method Models\DescribeFileTamperRuleInfoResponse DescribeFileTamperRuleInfo(Models\DescribeFileTamperRuleInfoRequest $req) This API is used to query details of a monitoring rule.
 * @method Models\DescribeFileTamperRulesResponse DescribeFileTamperRules(Models\DescribeFileTamperRulesRequest $req) This API is used to obtain the list of core file monitoring rules.
 * @method Models\DescribeGeneralStatResponse DescribeGeneralStat(Models\DescribeGeneralStatRequest $req) This API is used to obtain the statistics data of hosts.
 * @method Models\DescribeHistoryAccountsResponse DescribeHistoryAccounts(Models\DescribeHistoryAccountsRequest $req) This API is used to obtain the data of the account change history list.
 * @method Models\DescribeHistoryServiceResponse DescribeHistoryService(Models\DescribeHistoryServiceRequest $req) This API is used to query the log retrieval service information.
 * @method Models\DescribeHostInfoResponse DescribeHostInfo(Models\DescribeHostInfoRequest $req) This API is used to query the host and tag information.
 * @method Models\DescribeHostLoginListResponse DescribeHostLoginList(Models\DescribeHostLoginListRequest $req) This API is used to retrieve the log-in audit list.
 * @method Models\DescribeHotVulTopResponse DescribeHotVulTop(Models\DescribeHotVulTopRequest $req) This API is used to obtain hot spot vulnerabilities across the entire network.
 * @method Models\DescribeIgnoreBaselineRuleResponse DescribeIgnoreBaselineRule(Models\DescribeIgnoreBaselineRuleRequest $req) This API is used to query the information of ignored inspection items.
 * @method Models\DescribeIgnoreHostAndItemConfigResponse DescribeIgnoreHostAndItemConfig(Models\DescribeIgnoreHostAndItemConfigRequest $req) This API is used to obtain the information of affected inspection items and hosts ignored with one click.
 * @method Models\DescribeIgnoreRuleEffectHostListResponse DescribeIgnoreRuleEffectHostList(Models\DescribeIgnoreRuleEffectHostListRequest $req) This API is used to query the information on the list of hosts affected by ignored detection items based on detection item IDs and filter criteria.
 * @method Models\DescribeIndexListResponse DescribeIndexList(Models\DescribeIndexListRequest $req) 接口已废弃

This API is used to obtain the index list.
 * @method Models\DescribeJavaMemShellInfoResponse DescribeJavaMemShellInfo(Models\DescribeJavaMemShellInfoRequest $req) This API is used to query Java webshell event details.
 * @method Models\DescribeJavaMemShellListResponse DescribeJavaMemShellList(Models\DescribeJavaMemShellListRequest $req) This API is used to query the list of Java webshell events.
 * @method Models\DescribeJavaMemShellPluginInfoResponse DescribeJavaMemShellPluginInfo(Models\DescribeJavaMemShellPluginInfoRequest $req) This API is used to query the Java webshell plugin information of the given host.
 * @method Models\DescribeJavaMemShellPluginListResponse DescribeJavaMemShellPluginList(Models\DescribeJavaMemShellPluginListRequest $req) This API is used to query the Java webshell plugin list.
 * @method Models\DescribeLicenseResponse DescribeLicense(Models\DescribeLicenseRequest $req) This API is used to query the authorization information.
 * @method Models\DescribeLicenseBindListResponse DescribeLicenseBindList(Models\DescribeLicenseBindListRequest $req) This API is used to obtain the list of authorized machines bound to an authorization under the Settings Center-Authorization Management.
 * @method Models\DescribeLicenseBindScheduleResponse DescribeLicenseBindSchedule(Models\DescribeLicenseBindScheduleRequest $req) This API is used to query the binding task progress of the authorization.
 * @method Models\DescribeLicenseGeneralResponse DescribeLicenseGeneral(Models\DescribeLicenseGeneralRequest $req) This API is used to obtain the authorization overview information.
 * @method Models\DescribeLicenseListResponse DescribeLicenseList(Models\DescribeLicenseListRequest $req) This API is used to obtain all authorization orders of a user.
 * @method Models\DescribeLicenseWhiteConfigResponse DescribeLicenseWhiteConfig(Models\DescribeLicenseWhiteConfigRequest $req) This API is used to query the available configurations for authorization allowlists.
 * @method Models\DescribeLogDeliveryKafkaOptionsResponse DescribeLogDeliveryKafkaOptions(Models\DescribeLogDeliveryKafkaOptionsRequest $req) This API is used to query the list of logs available for shipping to Kafka.
 * @method Models\DescribeLogExportsResponse DescribeLogExports(Models\DescribeLogExportsRequest $req) This API is used to obtain the list of log download tasks.
 * @method Models\DescribeLogHistogramResponse DescribeLogHistogram(Models\DescribeLogHistogramRequest $req) This API is used to obtain the log histogram information.
 * @method Models\DescribeLogIndexResponse DescribeLogIndex(Models\DescribeLogIndexRequest $req) This API is used to query the index.
 * @method Models\DescribeLogKafkaDeliverInfoResponse DescribeLogKafkaDeliverInfo(Models\DescribeLogKafkaDeliverInfoRequest $req) This API is used to obtain the information of Kafka shipping.
 * @method Models\DescribeLogStorageConfigResponse DescribeLogStorageConfig(Models\DescribeLogStorageConfigRequest $req) This API is used to obtain the log storage configuration.
 * @method Models\DescribeLogStorageRecordResponse DescribeLogStorageRecord(Models\DescribeLogStorageRecordRequest $req) This API is used to obtain the record of stored log size.
 * @method Models\DescribeLogStorageStatisticResponse DescribeLogStorageStatistic(Models\DescribeLogStorageStatisticRequest $req) This API is used to obtain the statistics of the used log retrieval capacity.
 * @method Models\DescribeLogTypeResponse DescribeLogType(Models\DescribeLogTypeRequest $req) This API is used to obtain log types, and the returned result of this API indicates temporarily filterable log types.
 * @method Models\DescribeLoginWhiteCombinedListResponse DescribeLoginWhiteCombinedList(Models\DescribeLoginWhiteCombinedListRequest $req) This API is used to obtain the list of cross-region log-in allowlists after merge.
 * @method Models\DescribeLoginWhiteHostListResponse DescribeLoginWhiteHostList(Models\DescribeLoginWhiteHostListRequest $req) This API is used to query the list of allowlisted machines after merge.
 * @method Models\DescribeLoginWhiteListResponse DescribeLoginWhiteList(Models\DescribeLoginWhiteListRequest $req) This API is used to obtain the cross-region log-in allowlist list.
 * @method Models\DescribeMachineClearHistoryResponse DescribeMachineClearHistory(Models\DescribeMachineClearHistoryRequest $req) This API is used to query the clearing history records of a machine.
 * @method Models\DescribeMachineDefenseCntResponse DescribeMachineDefenseCnt(Models\DescribeMachineDefenseCntRequest $req) This API is used to query the statistics of advanced defense events for hosts.
 * @method Models\DescribeMachineFileTamperRulesResponse DescribeMachineFileTamperRules(Models\DescribeMachineFileTamperRulesRequest $req) This API is used to query the list of host-related core file monitoring rules.
 * @method Models\DescribeMachineGeneralResponse DescribeMachineGeneral(Models\DescribeMachineGeneralRequest $req) This API is used to query the information of the host overview.
 * @method Models\DescribeMachineLicenseDetailResponse DescribeMachineLicenseDetail(Models\DescribeMachineLicenseDetailRequest $req) This API is used to query the machine authorization information.
 * @method Models\DescribeMachineOsListResponse DescribeMachineOsList(Models\DescribeMachineOsListRequest $req) This API is used to query the machine operating system list.
 * @method Models\DescribeMachineRegionListResponse DescribeMachineRegionList(Models\DescribeMachineRegionListRequest $req) This API is used to query the list of host regions.
 * @method Models\DescribeMachineRegionsResponse DescribeMachineRegions(Models\DescribeMachineRegionsRequest $req) This API is used to obtain the list of machine regions.
 * @method Models\DescribeMachineRiskCntResponse DescribeMachineRiskCnt(Models\DescribeMachineRiskCntRequest $req) This API is used to query the statistics of host intrusion detection events.
 * @method Models\DescribeMachineSnapshotResponse DescribeMachineSnapshot(Models\DescribeMachineSnapshotRequest $req) This API is used to query snapshots created by the host.
 * @method Models\DescribeMachinesResponse DescribeMachines(Models\DescribeMachinesRequest $req) This API is used to obtain the list of hosts in a specific region.
 * @method Models\DescribeMachinesSimpleResponse DescribeMachinesSimple(Models\DescribeMachinesSimpleRequest $req) This API is used to obtain the list of hosts.
 * @method Models\DescribeMalWareListResponse DescribeMalWareList(Models\DescribeMalWareListRequest $req) This API is used to obtain the Trojan list.
 * @method Models\DescribeMaliciousRequestWhiteListResponse DescribeMaliciousRequestWhiteList(Models\DescribeMaliciousRequestWhiteListRequest $req) This API is used to query the list of malicious request allowlists.
 * @method Models\DescribeMalwareFileResponse DescribeMalwareFile(Models\DescribeMalwareFileRequest $req) This API is used to obtain Trojan file download addresses.
 * @method Models\DescribeMalwareInfoResponse DescribeMalwareInfo(Models\DescribeMalwareInfoRequest $req) This API is used to view malicious file details.
 * @method Models\DescribeMalwareRiskOverviewResponse DescribeMalwareRiskOverview(Models\DescribeMalwareRiskOverviewRequest $req) This API is used to obtain the information of virus scanning overview.
 * @method Models\DescribeMalwareRiskWarningResponse DescribeMalwareRiskWarning(Models\DescribeMalwareRiskWarningRequest $req) This API is used to open Intrusion Detection - Virus Scanning, and the risk warning content pops up.
 * @method Models\DescribeMalwareTimingScanSettingResponse DescribeMalwareTimingScanSetting(Models\DescribeMalwareTimingScanSettingRequest $req) This API is used to query the scheduled scan configuration.
 * @method Models\DescribeMalwareWhiteListResponse DescribeMalwareWhiteList(Models\DescribeMalwareWhiteListRequest $req) This API is used to obtain the list of Trojan allowlists.
 * @method Models\DescribeMalwareWhiteListAffectListResponse DescribeMalwareWhiteListAffectList(Models\DescribeMalwareWhiteListAffectListRequest $req) This API is used to obtain the list of affected Trojan allowlists.
 * @method Models\DescribeMonthInspectionReportResponse DescribeMonthInspectionReport(Models\DescribeMonthInspectionReportRequest $req) This API is used to download the monthly inspection report of the security manager.
 * @method Models\DescribeNetAttackSettingResponse DescribeNetAttackSetting(Models\DescribeNetAttackSettingRequest $req) This API is used to query network attack settings.
 * @method Models\DescribeNetAttackWhiteListResponse DescribeNetAttackWhiteList(Models\DescribeNetAttackWhiteListRequest $req) This API is used to obtain the network attack allowlist list.
 * @method Models\DescribeOpenPortStatisticsResponse DescribeOpenPortStatistics(Models\DescribeOpenPortStatisticsRequest $req) This API is used to obtain the list of port statistics.
 * @method Models\DescribeOverviewStatisticsResponse DescribeOverviewStatistics(Models\DescribeOverviewStatisticsRequest $req) This API is used to obtain the overview statistics.
 * @method Models\DescribePrivilegeEventInfoResponse DescribePrivilegeEventInfo(Models\DescribePrivilegeEventInfoRequest $req) This API is used to obtain local privilege escalation information details.
 * @method Models\DescribePrivilegeRulesResponse DescribePrivilegeRules(Models\DescribePrivilegeRulesRequest $req) This API is used to obtain the list of local privilege escalation rules.
 * @method Models\DescribeProVersionInfoResponse DescribeProVersionInfo(Models\DescribeProVersionInfoRequest $req) This API is used to obtain the overview information of the Professional edition.
 * @method Models\DescribeProVersionStatusResponse DescribeProVersionStatus(Models\DescribeProVersionStatusRequest $req) This API is used to check whether a single host or all hosts enable the professional version.
 * @method Models\DescribeProcessStatisticsResponse DescribeProcessStatistics(Models\DescribeProcessStatisticsRequest $req) This API is used to obtain the process statistics data.
 * @method Models\DescribeProductStatusResponse DescribeProductStatus(Models\DescribeProductStatusRequest $req) This API is used to query the product trial status.
 * @method Models\DescribePublicProxyInstallCommandResponse DescribePublicProxyInstallCommand(Models\DescribePublicProxyInstallCommandRequest $req) This API is used to obtain the installation command of the public network access proxy.
 * @method Models\DescribeRansomDefenseBackupListResponse DescribeRansomDefenseBackupList(Models\DescribeRansomDefenseBackupListRequest $req) This API is used to query the list of host snapshot backups.
 * @method Models\DescribeRansomDefenseEventsListResponse DescribeRansomDefenseEventsList(Models\DescribeRansomDefenseEventsListRequest $req) This API is used to query the anti-ransomware event list.
 * @method Models\DescribeRansomDefenseMachineListResponse DescribeRansomDefenseMachineList(Models\DescribeRansomDefenseMachineListRequest $req) This API is used to query the list of backup details.
 * @method Models\DescribeRansomDefenseMachineStrategyInfoResponse DescribeRansomDefenseMachineStrategyInfo(Models\DescribeRansomDefenseMachineStrategyInfoRequest $req) This API is used to obtain the list of policies bound to a host.
 * @method Models\DescribeRansomDefenseRollBackTaskListResponse DescribeRansomDefenseRollBackTaskList(Models\DescribeRansomDefenseRollBackTaskListRequest $req) This API is used to query the rollback task list.
 * @method Models\DescribeRansomDefenseStateResponse DescribeRansomDefenseState(Models\DescribeRansomDefenseStateRequest $req) This API is used to obtain user anti-ransomware trends.
 * @method Models\DescribeRansomDefenseStrategyDetailResponse DescribeRansomDefenseStrategyDetail(Models\DescribeRansomDefenseStrategyDetailRequest $req) This API is used to obtain the policy details.
 * @method Models\DescribeRansomDefenseStrategyListResponse DescribeRansomDefenseStrategyList(Models\DescribeRansomDefenseStrategyListRequest $req) This API is used to query the list of anti-ransomware policies.
 * @method Models\DescribeRansomDefenseStrategyMachinesResponse DescribeRansomDefenseStrategyMachines(Models\DescribeRansomDefenseStrategyMachinesRequest $req) This API is used to query the list of machines bound to an anti-ransomware policy.
 * @method Models\DescribeRansomDefenseTrendResponse DescribeRansomDefenseTrend(Models\DescribeRansomDefenseTrendRequest $req) This API is used to obtain the ransomware situation across the entire network.
 * @method Models\DescribeRecommendedProtectCpuResponse DescribeRecommendedProtectCpu(Models\DescribeRecommendedProtectCpuRequest $req) This API is used to query the recommended number of protection cores for purchase.
 * @method Models\DescribeReverseShellEventInfoResponse DescribeReverseShellEventInfo(Models\DescribeReverseShellEventInfoRequest $req) This API is used to query reverse shell details.
 * @method Models\DescribeReverseShellEventsResponse DescribeReverseShellEvents(Models\DescribeReverseShellEventsRequest $req) This API is used to obtain the list of Reverse Shell.
 * @method Models\DescribeReverseShellRulesResponse DescribeReverseShellRules(Models\DescribeReverseShellRulesRequest $req) This API is used to obtain the list of Reverse Shell rules.
 * @method Models\DescribeRiskBatchStatusResponse DescribeRiskBatchStatus(Models\DescribeRiskBatchStatusRequest $req) This API is used to query if the intrusion detection event update task is completed.
 * @method Models\DescribeRiskDnsEventInfoResponse DescribeRiskDnsEventInfo(Models\DescribeRiskDnsEventInfoRequest $req) This API is used to query malicious request event details.
 * @method Models\DescribeRiskDnsEventListResponse DescribeRiskDnsEventList(Models\DescribeRiskDnsEventListRequest $req) This API is used to obtain the list of malicious request events.
 * @method Models\DescribeRiskDnsInfoResponse DescribeRiskDnsInfo(Models\DescribeRiskDnsInfoRequest $req) This API is used to query malicious request details.
 * @method Models\DescribeRiskDnsListResponse DescribeRiskDnsList(Models\DescribeRiskDnsListRequest $req) This API is used to obtain the malicious request list.
 * @method Models\DescribeRiskDnsPolicyListResponse DescribeRiskDnsPolicyList(Models\DescribeRiskDnsPolicyListRequest $req) This API is used to obtain the list of malicious request policies.
 * @method Models\DescribeRiskProcessEventsResponse DescribeRiskProcessEvents(Models\DescribeRiskProcessEventsRequest $req) This API is used to obtain the list of abnormal processes.
 * @method Models\DescribeSafeInfoResponse DescribeSafeInfo(Models\DescribeSafeInfoRequest $req) This API is used to query the .security notification information.
 * @method Models\DescribeScanMalwareScheduleResponse DescribeScanMalwareSchedule(Models\DescribeScanMalwareScheduleRequest $req) This API is used to query the Trojan scan progress.
 * @method Models\DescribeScanScheduleResponse DescribeScanSchedule(Models\DescribeScanScheduleRequest $req) This API is used to query the detection progress by taskid.
 * @method Models\DescribeScanStateResponse DescribeScanState(Models\DescribeScanStateRequest $req) This API is used to query the status of recent scan tasks of the corresponding module.
 * @method Models\DescribeScanTaskDetailsResponse DescribeScanTaskDetails(Models\DescribeScanTaskDetailsRequest $req) This API is used to query the scan task details and scan progress information/exceptions.
 * @method Models\DescribeScanTaskStatusResponse DescribeScanTaskStatus(Models\DescribeScanTaskStatusRequest $req) This API is used to query the list of machine scan statuses for filtering.
 * @method Models\DescribeScanVulSettingResponse DescribeScanVulSetting(Models\DescribeScanVulSettingRequest $req) This API is used to query the configuration for regular detection.
 * @method Models\DescribeScreenAttackHotspotResponse DescribeScreenAttackHotspot(Models\DescribeScreenAttackHotspotRequest $req) This API is used to visually obtain the attacked hot spots across the entire network on the large screen.
 * @method Models\DescribeScreenBroadcastsResponse DescribeScreenBroadcasts(Models\DescribeScreenBroadcastsRequest $req) This API is used to obtain the security report on the large screen.
 * @method Models\DescribeScreenDefenseTrendsResponse DescribeScreenDefenseTrends(Models\DescribeScreenDefenseTrendsRequest $req) This API is used to obtain the visualized attack and defense trends on the large screen.
 * @method Models\DescribeScreenEmergentMsgResponse DescribeScreenEmergentMsg(Models\DescribeScreenEmergentMsgRequest $req) This API is used to obtain the visualized emergency notification on the large screen.
 * @method Models\DescribeScreenEventsCntResponse DescribeScreenEventsCnt(Models\DescribeScreenEventsCntRequest $req) This API is used to obtain the statistics data of events on the security overview page.
 * @method Models\DescribeScreenGeneralStatResponse DescribeScreenGeneralStat(Models\DescribeScreenGeneralStatRequest $req) This API is used to obtain the visualized statistics data of hosts on the screen.
 * @method Models\DescribeScreenHostInvasionResponse DescribeScreenHostInvasion(Models\DescribeScreenHostInvasionRequest $req) This API is used to obtain the visualized host intrusion details on the large screen.
 * @method Models\DescribeScreenMachineRegionsResponse DescribeScreenMachineRegions(Models\DescribeScreenMachineRegionsRequest $req) This API is used to obtain the list of available visualized host regions on the large screen.
 * @method Models\DescribeScreenMachinesResponse DescribeScreenMachines(Models\DescribeScreenMachinesRequest $req) This API is used to obtain the visualized list of host regions on the large screen.
 * @method Models\DescribeScreenProtectionCntResponse DescribeScreenProtectionCnt(Models\DescribeScreenProtectionCntRequest $req) This API is used to obtain the visualized introduction of CWPP engine on the large screen.
 * @method Models\DescribeScreenProtectionStatResponse DescribeScreenProtectionStat(Models\DescribeScreenProtectionStatRequest $req) This API is used to obtain the security protection status on the large screen.
 * @method Models\DescribeScreenRiskAssetsTopResponse DescribeScreenRiskAssetsTop(Models\DescribeScreenRiskAssetsTopRequest $req) This API is used to count today's risky assets.
 * @method Models\DescribeSearchLogsResponse DescribeSearchLogs(Models\DescribeSearchLogsRequest $req) This API is used to obtain historical search records.
 * @method Models\DescribeSearchTemplatesResponse DescribeSearchTemplates(Models\DescribeSearchTemplatesRequest $req) This API is used to obtain the list of quick retrievals.
 * @method Models\DescribeSecurityBroadcastInfoResponse DescribeSecurityBroadcastInfo(Models\DescribeSecurityBroadcastInfoRequest $req) This API is used to query the information of security report articles.
 * @method Models\DescribeSecurityBroadcastsResponse DescribeSecurityBroadcasts(Models\DescribeSecurityBroadcastsRequest $req) This API is used to obtain the security report list page.
 * @method Models\DescribeSecurityDynamicsResponse DescribeSecurityDynamics(Models\DescribeSecurityDynamicsRequest $req) This API is used to obtain the dynamic message data of security events.
 * @method Models\DescribeSecurityEventStatResponse DescribeSecurityEventStat(Models\DescribeSecurityEventStatRequest $req) This API is used to obtain the statistics of security events.
 * @method Models\DescribeSecurityEventsCntResponse DescribeSecurityEventsCnt(Models\DescribeSecurityEventsCntRequest $req) This API is used to obtain the statistics data of security overview-related events.
 * @method Models\DescribeSecurityProtectionStatResponse DescribeSecurityProtectionStat(Models\DescribeSecurityProtectionStatRequest $req) 接口已无效

This API is used to obtain the summary of security protection statuses.
 * @method Models\DescribeSecurityTrendsResponse DescribeSecurityTrends(Models\DescribeSecurityTrendsRequest $req) This API is used to obtain the security event statistics data.
 * @method Models\DescribeServersAndRiskAndFirstInfoResponse DescribeServersAndRiskAndFirstInfo(Models\DescribeServersAndRiskAndFirstInfoRequest $req) This API is used to obtain the number of risky files pending to be processed + the number of affected servers + whether to try to detect + last detection time.
 * @method Models\DescribeStrategyExistResponse DescribeStrategyExist(Models\DescribeStrategyExistRequest $req) This API is used to query whether a policy exists by policy name.
 * @method Models\DescribeTagMachinesResponse DescribeTagMachines(Models\DescribeTagMachinesRequest $req) This API is used to obtain the server information associated with the specified tag.
 * @method Models\DescribeTagsResponse DescribeTags(Models\DescribeTagsRequest $req) This API is used to obtain all host tags.
 * @method Models\DescribeTrialReportResponse DescribeTrialReport(Models\DescribeTrialReportRequest $req) This API is used to query the CWPP authorized trial report (only available for console applications).
 * @method Models\DescribeUndoVulCountsResponse DescribeUndoVulCounts(Models\DescribeUndoVulCountsRequest $req) This API is used to obtain the number of pending vulnerabilities of a specified category and the number of hosts in the vulnerability management module.
 * @method Models\DescribeUsersConfigResponse DescribeUsersConfig(Models\DescribeUsersConfigRequest $req) This API is used to query the user's custom configurations.
 * @method Models\DescribeUsualLoginPlacesResponse DescribeUsualLoginPlaces(Models\DescribeUsualLoginPlacesRequest $req) This API is used to query common log-in locations.
 * @method Models\DescribeVdbAndPocInfoResponse DescribeVdbAndPocInfo(Models\DescribeVdbAndPocInfoRequest $req) This API is used to obtain virus database and POC updates.
 * @method Models\DescribeVersionCompareChartResponse DescribeVersionCompareChart(Models\DescribeVersionCompareChartRequest $req) This API is used to obtain the version comparison information.
 * @method Models\DescribeVersionStatisticsResponse DescribeVersionStatistics(Models\DescribeVersionStatisticsRequest $req) This API is used to count the number of machines of Professional and Basic editions.
 * @method Models\DescribeVertexDetailResponse DescribeVertexDetail(Models\DescribeVertexDetailRequest $req) This API is used to obtain the attribute information of the specified point.
 * @method Models\DescribeVulCountByDatesResponse DescribeVulCountByDates(Models\DescribeVulCountByDatesRequest $req) This API is used to obtain the number of vulnerabilities of specified types in recent days and the number of hosts.
 * @method Models\DescribeVulCveIdInfoResponse DescribeVulCveIdInfo(Models\DescribeVulCveIdInfoRequest $req) This API is used to query vulnerability details by CveId.
 * @method Models\DescribeVulDefenceEventResponse DescribeVulDefenceEvent(Models\DescribeVulDefenceEventRequest $req) This API is used to obtain the list of vulnerability defense events.
 * @method Models\DescribeVulDefenceListResponse DescribeVulDefenceList(Models\DescribeVulDefenceListRequest $req) This API is used to query the vulnerability defense list.
 * @method Models\DescribeVulDefenceOverviewResponse DescribeVulDefenceOverview(Models\DescribeVulDefenceOverviewRequest $req) This API is used to obtain the vulnerability defense overview information, including event trend and plugin enabling status.
 * @method Models\DescribeVulDefencePluginDetailResponse DescribeVulDefencePluginDetail(Models\DescribeVulDefencePluginDetailRequest $req) This API is used to obtain the vulnerability defense plugin information on a single host.
 * @method Models\DescribeVulDefencePluginExceptionCountResponse DescribeVulDefencePluginExceptionCount(Models\DescribeVulDefencePluginExceptionCountRequest $req) This API is used to obtain the current number of abnormal plugins.
 * @method Models\DescribeVulDefencePluginStatusResponse DescribeVulDefencePluginStatus(Models\DescribeVulDefencePluginStatusRequest $req) This API is used to obtain the vulnerability defense plugin status of each host.
 * @method Models\DescribeVulDefenceSettingResponse DescribeVulDefenceSetting(Models\DescribeVulDefenceSettingRequest $req) This API is used to obtain the current vulnerability defense plugin settings.
 * @method Models\DescribeVulEffectHostListResponse DescribeVulEffectHostList(Models\DescribeVulEffectHostListRequest $req) This API is used to obtain the list of hosts affected by vulnerabilities.
 * @method Models\DescribeVulEffectModulesResponse DescribeVulEffectModules(Models\DescribeVulEffectModulesRequest $req) This API is used to obtain the list of components affected by vulnerabilities.
 * @method Models\DescribeVulEmergentMsgResponse DescribeVulEmergentMsg(Models\DescribeVulEmergentMsgRequest $req) This API is used to obtain vulnerability emergency notifications.
 * @method Models\DescribeVulFixStatusResponse DescribeVulFixStatus(Models\DescribeVulFixStatusRequest $req) This API is used to check the host vulnerability fixing progress.
 * @method Models\DescribeVulHostCountScanTimeResponse DescribeVulHostCountScanTime(Models\DescribeVulHostCountScanTimeRequest $req) This API is used to obtain the number of vulnerabilities pending to be processed and affected hosts.
 * @method Models\DescribeVulHostTopResponse DescribeVulHostTop(Models\DescribeVulHostTopRequest $req) This API is used to obtain the list of top server risks.
 * @method Models\DescribeVulInfoCvssResponse DescribeVulInfoCvss(Models\DescribeVulInfoCvssRequest $req) This API is used to obtain vulnerability details with the CVSS version.
 * @method Models\DescribeVulLabelsResponse DescribeVulLabels(Models\DescribeVulLabelsRequest $req) This API is used to obtain the list of all user vulnerability tags.
 * @method Models\DescribeVulLevelCountResponse DescribeVulLevelCount(Models\DescribeVulLevelCountRequest $req) This API is used to obtain the statistics of vulnerability quantity and level distribution.
 * @method Models\DescribeVulListResponse DescribeVulList(Models\DescribeVulListRequest $req) This API is used to obtain the data of the vulnerability list.
 * @method Models\DescribeVulOverviewResponse DescribeVulOverview(Models\DescribeVulOverviewRequest $req) This API is used to obtain the data for the vulnerability overview.
 * @method Models\DescribeVulStoreListResponse DescribeVulStoreList(Models\DescribeVulStoreListRequest $req) This API is used to obtain the vulnerability database list.
 * @method Models\DescribeVulTopResponse DescribeVulTop(Models\DescribeVulTopRequest $req) This API is used to count top vulnerabilities.
 * @method Models\DescribeVulTrendResponse DescribeVulTrend(Models\DescribeVulTrendRequest $req) This API is used to obtain information of the vulnerability situation.
 * @method Models\DescribeWarningHostConfigResponse DescribeWarningHostConfig(Models\DescribeWarningHostConfigRequest $req) This API is used to query the alarming machine scope settings.
 * @method Models\DescribeWarningListResponse DescribeWarningList(Models\DescribeWarningListRequest $req) This API is used to obtain the list of the current user's alarms.
 * @method Models\DescribeWebHookPolicyResponse DescribeWebHookPolicy(Models\DescribeWebHookPolicyRequest $req) This API is used to query alarm policies.
 * @method Models\DescribeWebHookReceiverResponse DescribeWebHookReceiver(Models\DescribeWebHookReceiverRequest $req) This API is used to query the list of alarm recipients.
 * @method Models\DescribeWebHookReceiverUsageResponse DescribeWebHookReceiverUsage(Models\DescribeWebHookReceiverUsageRequest $req) This API is used to query the usage of policies associated with the specified alarm recipient.
 * @method Models\DescribeWebHookRuleResponse DescribeWebHookRule(Models\DescribeWebHookRuleRequest $req) This API is used to obtain the details of the WeCom chatbot rules.
 * @method Models\DescribeWebHookRulesResponse DescribeWebHookRules(Models\DescribeWebHookRulesRequest $req) This API is used to obtain the list of WeCom chatbot rules.
 * @method Models\DestroyOrderResponse DestroyOrder(Models\DestroyOrderRequest $req) This API is used to terminate resources.
 * @method Models\EditBashRulesResponse EditBashRules(Models\EditBashRulesRequest $req) This API is used to add or modify high-risk command rules.
 * @method Models\EditPrivilegeRulesResponse EditPrivilegeRules(Models\EditPrivilegeRulesRequest $req) This API is used to add or modify local privilege escalation rules (multiple servers supported).
 * @method Models\EditReverseShellRulesResponse EditReverseShellRules(Models\EditReverseShellRulesRequest $req) This API is used to edit reverse shell rules (multiple servers supported).

 * @method Models\EditTagsResponse EditTags(Models\EditTagsRequest $req) This API is used to add or edit tags.
 * @method Models\ExportAssetAppListResponse ExportAssetAppList(Models\ExportAssetAppListRequest $req) This API is used to export the list of asset management applications.
 * @method Models\ExportAssetCoreModuleListResponse ExportAssetCoreModuleList(Models\ExportAssetCoreModuleListRequest $req) This API is used to export the list of asset management kernel modules.
 * @method Models\ExportAssetDatabaseListResponse ExportAssetDatabaseList(Models\ExportAssetDatabaseListRequest $req) This API is used to export the list of asset management databases.
 * @method Models\ExportAssetEnvListResponse ExportAssetEnvList(Models\ExportAssetEnvListRequest $req) This API is used to export the list of asset management environment variables.
 * @method Models\ExportAssetInitServiceListResponse ExportAssetInitServiceList(Models\ExportAssetInitServiceListRequest $req) This API is used to export the list of asset management startup services.
 * @method Models\ExportAssetJarListResponse ExportAssetJarList(Models\ExportAssetJarListRequest $req) This API is used to export the list of Jar packages.
 * @method Models\ExportAssetMachineDetailResponse ExportAssetMachineDetail(Models\ExportAssetMachineDetailRequest $req) This API is used to export asset management host resource details.
 * @method Models\ExportAssetMachineListResponse ExportAssetMachineList(Models\ExportAssetMachineListRequest $req) This API is used to export the list of resource monitoring.
 * @method Models\ExportAssetPlanTaskListResponse ExportAssetPlanTaskList(Models\ExportAssetPlanTaskListRequest $req) This API is used to export the list of scheduled asset management tasks.
 * @method Models\ExportAssetPortInfoListResponse ExportAssetPortInfoList(Models\ExportAssetPortInfoListRequest $req) This API is used to export the list of asset management ports.
 * @method Models\ExportAssetProcessInfoListResponse ExportAssetProcessInfoList(Models\ExportAssetProcessInfoListRequest $req) This API is used to export the asset management process list.
 * @method Models\ExportAssetRecentMachineInfoResponse ExportAssetRecentMachineInfo(Models\ExportAssetRecentMachineInfoRequest $req) This API is used to export host trends of recent days (up to last 90 days).
 * @method Models\ExportAssetSystemPackageListResponse ExportAssetSystemPackageList(Models\ExportAssetSystemPackageListRequest $req) This API is used to export the list of system installation packages for asset management.
 * @method Models\ExportAssetUserListResponse ExportAssetUserList(Models\ExportAssetUserListRequest $req) This API is used to export the account list.
 * @method Models\ExportAssetWebAppListResponse ExportAssetWebAppList(Models\ExportAssetWebAppListRequest $req) This API is used to export the list of asset management Web applications.
 * @method Models\ExportAssetWebFrameListResponse ExportAssetWebFrameList(Models\ExportAssetWebFrameListRequest $req) This API is used to export the list of asset management Web frameworks.
 * @method Models\ExportAssetWebLocationListResponse ExportAssetWebLocationList(Models\ExportAssetWebLocationListRequest $req) This API is used to export the list of Web sites.
 * @method Models\ExportAssetWebServiceInfoListResponse ExportAssetWebServiceInfoList(Models\ExportAssetWebServiceInfoListRequest $req) This API is used to export the list of asset management Web services.
 * @method Models\ExportAttackEventsResponse ExportAttackEvents(Models\ExportAttackEventsRequest $req) This API is used to export network attack events.
 * @method Models\ExportBaselineEffectHostListResponse ExportBaselineEffectHostList(Models\ExportBaselineEffectHostListRequest $req) This API is used to export the list of hosts affected by baseline.
 * @method Models\ExportBaselineFixListResponse ExportBaselineFixList(Models\ExportBaselineFixListRequest $req) This API is used to export the list of fixing baselines.
 * @method Models\ExportBaselineHostDetectListResponse ExportBaselineHostDetectList(Models\ExportBaselineHostDetectListRequest $req) This API is used to export the baseline for host detection.
 * @method Models\ExportBaselineItemDetectListResponse ExportBaselineItemDetectList(Models\ExportBaselineItemDetectListRequest $req) This API is used to export baseline check items.
 * @method Models\ExportBaselineListResponse ExportBaselineList(Models\ExportBaselineListRequest $req) This API is used to export the list of baselines.
 * @method Models\ExportBashEventsResponse ExportBashEvents(Models\ExportBashEventsRequest $req) This API is used to export high-risk command events.
 * @method Models\ExportBashEventsNewResponse ExportBashEventsNew(Models\ExportBashEventsNewRequest $req) This API is used to export high-risk command events (new).
 * @method Models\ExportBashPoliciesResponse ExportBashPolicies(Models\ExportBashPoliciesRequest $req) This API is used to export the high-risk command policy.
 * @method Models\ExportBruteAttacksResponse ExportBruteAttacks(Models\ExportBruteAttacksRequest $req) This API is used to export password cracking records to a CSV file.
 * @method Models\ExportFileTamperEventsResponse ExportFileTamperEvents(Models\ExportFileTamperEventsRequest $req) This API is used to export core file events.
 * @method Models\ExportFileTamperRulesResponse ExportFileTamperRules(Models\ExportFileTamperRulesRequest $req) This API is used to export core file monitoring rules.
 * @method Models\ExportIgnoreBaselineRuleResponse ExportIgnoreBaselineRule(Models\ExportIgnoreBaselineRuleRequest $req) This API is used to export information of ignored baseline detection items.
 * @method Models\ExportIgnoreRuleEffectHostListResponse ExportIgnoreRuleEffectHostList(Models\ExportIgnoreRuleEffectHostListRequest $req) This API is used to export the list of hosts affected by ignored detection items based on detection item IDs.
 * @method Models\ExportJavaMemShellPluginsResponse ExportJavaMemShellPlugins(Models\ExportJavaMemShellPluginsRequest $req) This API is used to export the Java webshell plugin information.
 * @method Models\ExportJavaMemShellsResponse ExportJavaMemShells(Models\ExportJavaMemShellsRequest $req) This API is used to export the list of Java webshell events.
 * @method Models\ExportLicenseDetailResponse ExportLicenseDetail(Models\ExportLicenseDetailRequest $req) This API is used to export authorization details.
 * @method Models\ExportMaliciousRequestsResponse ExportMaliciousRequests(Models\ExportMaliciousRequestsRequest $req) This API is used to export the downloaded malicious request files.
 * @method Models\ExportMalwaresResponse ExportMalwares(Models\ExportMalwaresRequest $req) This API is used to export Trojan records to a CSV file.
 * @method Models\ExportNonlocalLoginPlacesResponse ExportNonlocalLoginPlaces(Models\ExportNonlocalLoginPlacesRequest $req) This API is used to export cross-region log-in event records in CSV format.
 * @method Models\ExportPrivilegeEventsResponse ExportPrivilegeEvents(Models\ExportPrivilegeEventsRequest $req) This API is used to export local privilege escalation events.
 * @method Models\ExportRansomDefenseBackupListResponse ExportRansomDefenseBackupList(Models\ExportRansomDefenseBackupListRequest $req) This API is used to export the list of host snapshot backups.
 * @method Models\ExportRansomDefenseEventsListResponse ExportRansomDefenseEventsList(Models\ExportRansomDefenseEventsListRequest $req) This API is used to export the list of anti-ransomware events.
 * @method Models\ExportRansomDefenseMachineListResponse ExportRansomDefenseMachineList(Models\ExportRansomDefenseMachineListRequest $req) This API is used to export the backup details list.
 * @method Models\ExportRansomDefenseStrategyListResponse ExportRansomDefenseStrategyList(Models\ExportRansomDefenseStrategyListRequest $req) This API is used to export the anti-ransomware policy list.
 * @method Models\ExportRansomDefenseStrategyMachinesResponse ExportRansomDefenseStrategyMachines(Models\ExportRansomDefenseStrategyMachinesRequest $req) This API is used to export the list of machines bound to ransomware defense policies.
 * @method Models\ExportReverseShellEventsResponse ExportReverseShellEvents(Models\ExportReverseShellEventsRequest $req) This API is used to export reverse shell events.
 * @method Models\ExportRiskDnsEventListResponse ExportRiskDnsEventList(Models\ExportRiskDnsEventListRequest $req) This API is used to export the malicious request event list.
 * @method Models\ExportRiskDnsPolicyListResponse ExportRiskDnsPolicyList(Models\ExportRiskDnsPolicyListRequest $req) This API is used to export the malicious request policy list.
 * @method Models\ExportRiskProcessEventsResponse ExportRiskProcessEvents(Models\ExportRiskProcessEventsRequest $req) This API is used to export abnormal process events.
 * @method Models\ExportScanTaskDetailsResponse ExportScanTaskDetails(Models\ExportScanTaskDetailsRequest $req) This API is used to export the specified scan task details by task ID.
 * @method Models\ExportSecurityTrendsResponse ExportSecurityTrends(Models\ExportSecurityTrendsRequest $req) This API is used to export risk trends.
 * @method Models\ExportTasksResponse ExportTasks(Models\ExportTasksRequest $req) This API is used to export log files with large data volumes asynchronously.
 * @method Models\ExportVulDefenceEventResponse ExportVulDefenceEvent(Models\ExportVulDefenceEventRequest $req) This API is used to export vulnerability defense events.
 * @method Models\ExportVulDefenceListResponse ExportVulDefenceList(Models\ExportVulDefenceListRequest $req) This API is used to export the list of vulnerability defenses.
 * @method Models\ExportVulDefencePluginEventResponse ExportVulDefencePluginEvent(Models\ExportVulDefencePluginEventRequest $req) This API is used to export vulnerability defense plugin events.
 * @method Models\ExportVulDetectionExcelResponse ExportVulDetectionExcel(Models\ExportVulDetectionExcelRequest $req) This API is used to export the vulnerability detection Excel document.
 * @method Models\ExportVulDetectionReportResponse ExportVulDetectionReport(Models\ExportVulDetectionReportRequest $req) This API is used to export the vulnerability detection report.
 * @method Models\ExportVulEffectHostListResponse ExportVulEffectHostList(Models\ExportVulEffectHostListRequest $req) This API is used to export the list of hosts affected by vulnerabilities.
 * @method Models\ExportVulInfoResponse ExportVulInfo(Models\ExportVulInfoRequest $req) This API is used to export the vulnerability information, including the list of affected hosts and component information.
 * @method Models\ExportVulListResponse ExportVulList(Models\ExportVulListRequest $req) This API is used to export the vulnerability list.
 * @method Models\GetLocalStorageItemResponse GetLocalStorageItem(Models\GetLocalStorageItemRequest $req) This API is used to obtain the locally stored data.
 * @method Models\IgnoreImpactedHostsResponse IgnoreImpactedHosts(Models\IgnoreImpactedHostsRequest $req) This API is used to ignore vulnerabilities.
 * @method Models\KeysLocalStorageResponse KeysLocalStorage(Models\KeysLocalStorageRequest $req) This API is used to obtain the list of locally stored key values.
 * @method Models\ModifyAutoOpenProVersionConfigResponse ModifyAutoOpenProVersionConfig(Models\ModifyAutoOpenProVersionConfigRequest $req) This API is used to enable the configuration of automatically enabling the professional protection configuration for newly added hosts.
 * @method Models\ModifyBanModeResponse ModifyBanMode(Models\ModifyBanModeRequest $req) This API is used to modify the brute-force blocking mode.
 * @method Models\ModifyBanStatusResponse ModifyBanStatus(Models\ModifyBanStatusRequest $req) This API is used to set the block switch status.
 * @method Models\ModifyBanWhiteListResponse ModifyBanWhiteList(Models\ModifyBanWhiteListRequest $req) This API is used to modify the blocking allowlist.
 * @method Models\ModifyBaselinePolicyResponse ModifyBaselinePolicy(Models\ModifyBaselinePolicyRequest $req) This API is used to change the baseline policy settings.
 * @method Models\ModifyBashPolicyResponse ModifyBashPolicy(Models\ModifyBashPolicyRequest $req) This API is used to add or modify high-risk command policies.
 * @method Models\ModifyBashPolicyStatusResponse ModifyBashPolicyStatus(Models\ModifyBashPolicyStatusRequest $req) This API is used to switch the statuses of high-risk command policies.
 * @method Models\ModifyBruteAttackRulesResponse ModifyBruteAttackRules(Models\ModifyBruteAttackRulesRequest $req) This API is used to modify brute force cracking rules.
 * @method Models\ModifyEventAttackStatusResponse ModifyEventAttackStatus(Models\ModifyEventAttackStatusRequest $req) This API is used to modify the status of network attack events.
 * @method Models\ModifyFileTamperEventsResponse ModifyFileTamperEvents(Models\ModifyFileTamperEventsRequest $req) This API is used to update the core file events.
 * @method Models\ModifyFileTamperRuleResponse ModifyFileTamperRule(Models\ModifyFileTamperRuleRequest $req) This API is used to edit and add core file monitoring rules.
 * @method Models\ModifyFileTamperRuleStatusResponse ModifyFileTamperRuleStatus(Models\ModifyFileTamperRuleStatusRequest $req) This API is used to update the core file rule status (batch deletion and disabling supported).
 * @method Models\ModifyJavaMemShellPluginSwitchResponse ModifyJavaMemShellPluginSwitch(Models\ModifyJavaMemShellPluginSwitchRequest $req) This API is used to enable and disable Java webshell plugins.
 * @method Models\ModifyJavaMemShellsStatusResponse ModifyJavaMemShellsStatus(Models\ModifyJavaMemShellsStatusRequest $req) This API is used to modify the Java webshell event status.
 * @method Models\ModifyLicenseBindsResponse ModifyLicenseBinds(Models\ModifyLicenseBindsRequest $req) This API is used to bind machines to an authorization in batches.
 * @method Models\ModifyLicenseOrderResponse ModifyLicenseOrder(Models\ModifyLicenseOrderRequest $req) This API is used to edit CWPP - pay-as-you-go authorization orders.
 * @method Models\ModifyLogKafkaAccessResponse ModifyLogKafkaAccess(Models\ModifyLogKafkaAccessRequest $req) This API is used to add or modify the access configuration of logs shipped to Kafka.
 * @method Models\ModifyLogKafkaDeliverTypeResponse ModifyLogKafkaDeliverType(Models\ModifyLogKafkaDeliverTypeRequest $req) This API is used to modify the shipping configuration and switch of the specified log category.
 * @method Models\ModifyLogKafkaStateResponse ModifyLogKafkaState(Models\ModifyLogKafkaStateRequest $req) This API is used to modify the information of log shipping statuses.
 * @method Models\ModifyLogStorageConfigResponse ModifyLogStorageConfig(Models\ModifyLogStorageConfigRequest $req) This API is used to modify the log storage configuration.
 * @method Models\ModifyLoginWhiteInfoResponse ModifyLoginWhiteInfo(Models\ModifyLoginWhiteInfoRequest $req) This API is used to update the log-in audit allowlist information.
 * @method Models\ModifyLoginWhiteRecordResponse ModifyLoginWhiteRecord(Models\ModifyLoginWhiteRecordRequest $req) This API is used to update the log-in audit allowlist information. (The number of server lists needs to be less than 1,000.)
 * @method Models\ModifyMachineAutoClearConfigResponse ModifyMachineAutoClearConfig(Models\ModifyMachineAutoClearConfigRequest $req) This API is used to modify the cleanup configuration of the machine.
 * @method Models\ModifyMaliciousRequestWhiteListResponse ModifyMaliciousRequestWhiteList(Models\ModifyMaliciousRequestWhiteListRequest $req) This API is used to update the malicious request allowlist.
 * @method Models\ModifyMalwareTimingScanSettingsResponse ModifyMalwareTimingScanSettings(Models\ModifyMalwareTimingScanSettingsRequest $req) This API is used to set scheduled scan.
 * @method Models\ModifyMalwareWhiteListResponse ModifyMalwareWhiteList(Models\ModifyMalwareWhiteListRequest $req) This API is used to edit the Trojan allowlist.
 * @method Models\ModifyNetAttackSettingResponse ModifyNetAttackSetting(Models\ModifyNetAttackSettingRequest $req) This API is used to modify network attack settings.
 * @method Models\ModifyNetAttackWhiteListResponse ModifyNetAttackWhiteList(Models\ModifyNetAttackWhiteListRequest $req) This API is used to edit the network attack whitelist.
 * @method Models\ModifyRansomDefenseEventsStatusResponse ModifyRansomDefenseEventsStatus(Models\ModifyRansomDefenseEventsStatusRequest $req) This API is used to modify the status of anti-ransomware events.
 * @method Models\ModifyRansomDefenseStrategyStatusResponse ModifyRansomDefenseStrategyStatus(Models\ModifyRansomDefenseStrategyStatusRequest $req) This API is used to modify the anti-ransomware policy status in batches.
 * @method Models\ModifyRiskDnsPolicyResponse ModifyRiskDnsPolicy(Models\ModifyRiskDnsPolicyRequest $req) This API is used to modify malicious request policies.
 * @method Models\ModifyRiskDnsPolicyStatusResponse ModifyRiskDnsPolicyStatus(Models\ModifyRiskDnsPolicyStatusRequest $req) This API is used to modify the status of malicious request policies.
 * @method Models\ModifyRiskEventsStatusResponse ModifyRiskEventsStatus(Models\ModifyRiskEventsStatusRequest $req) This API is used to change the status of intrusion detection events, including virus scanning, abnormal log-ins, password cracking, high-risk commands, reverse shells, and local privilege escalations.
 * @method Models\ModifyUsersConfigResponse ModifyUsersConfig(Models\ModifyUsersConfigRequest $req) This API is used to create or modify user custom settings.
 * @method Models\ModifyVulDefenceEventStatusResponse ModifyVulDefenceEventStatus(Models\ModifyVulDefenceEventStatusRequest $req) This API is used to change the vulnerability defense event status. (Vulnerability fixing is carried out using another API.)
 * @method Models\ModifyVulDefenceSettingResponse ModifyVulDefenceSetting(Models\ModifyVulDefenceSettingRequest $req) This API is used to modify vulnerability defense plugin settings.
1) The new settings apply to new hosts automatically. scope is set to 1, and quuids is left blank.
2) The new settings do not apply to Ultimate Edition hosts. scope is set to 0, and the current QUUID list is specified as the value of quuids.
3) For a given QUUID list, when scope is set to 0, QUUID selected by the user is specified as the value of quuids.
 * @method Models\ModifyWarningHostConfigResponse ModifyWarningHostConfig(Models\ModifyWarningHostConfigRequest $req) This API is used to modify the alarming machine scope settings.
 * @method Models\ModifyWarningSettingResponse ModifyWarningSetting(Models\ModifyWarningSettingRequest $req) This API is used to modify alarm settings.
 * @method Models\ModifyWebHookPolicyResponse ModifyWebHookPolicy(Models\ModifyWebHookPolicyRequest $req) This API is used to add or modify alarm policies.
 * @method Models\ModifyWebHookPolicyStatusResponse ModifyWebHookPolicyStatus(Models\ModifyWebHookPolicyStatusRequest $req) This API is used to modify the alarm policy switch.
 * @method Models\ModifyWebHookReceiverResponse ModifyWebHookReceiver(Models\ModifyWebHookReceiverRequest $req) This API is used to add or update the alarm recipient.
 * @method Models\ModifyWebHookRuleResponse ModifyWebHookRule(Models\ModifyWebHookRuleRequest $req) This API is used to add or modify the rules of WeCom chatbots.
 * @method Models\ModifyWebHookRuleStatusResponse ModifyWebHookRuleStatus(Models\ModifyWebHookRuleStatusRequest $req) This API is used to modify the rules of WeCom chatbots.
 * @method Models\ModifyWebPageProtectSwitchResponse ModifyWebPageProtectSwitch(Models\ModifyWebPageProtectSwitchRequest $req) This API is used to enable or disable website anti-tampering protection.
 * @method Models\RansomDefenseRollbackResponse RansomDefenseRollback(Models\RansomDefenseRollbackRequest $req) This API is used to roll back anti-ransomware snapshots.
 * @method Models\RecoverMalwaresResponse RecoverMalwares(Models\RecoverMalwaresRequest $req) This API is used to batch recover quarantined Trojan files.
 * @method Models\RemoveLocalStorageItemResponse RemoveLocalStorageItem(Models\RemoveLocalStorageItemRequest $req) This API is used to delete the locally stored data.
 * @method Models\RemoveMachineResponse RemoveMachine(Models\RemoveMachineRequest $req) This API is used to delete all records of the host. Currently, it only supports non-Tencent Cloud hosts, and the host needs to be offline.
 * @method Models\RetryCreateSnapshotResponse RetryCreateSnapshot(Models\RetryCreateSnapshotRequest $req) This API is used to retry to create snapshots and automatically fix vulnerabilities when the creation fails.
 * @method Models\RetryVulFixResponse RetryVulFix(Models\RetryVulFixRequest $req) This API is used to fix vulnerabilities on a single host when the fix fails.
 * @method Models\ScanBaselineResponse ScanBaseline(Models\ScanBaselineRequest $req) This API is used to obtain baseline detection and re-detection APIs.
 * @method Models\ScanTaskAgainResponse ScanTaskAgain(Models\ScanTaskAgainRequest $req) This API is used to restart the scan task. Specifying the machine is supported.
 * @method Models\ScanVulResponse ScanVul(Models\ScanVulRequest $req) This API is used to perform one-click vulnerability scans.
 * @method Models\ScanVulAgainResponse ScanVulAgain(Models\ScanVulAgainRequest $req) This API is used to redetect the API.
 * @method Models\ScanVulSettingResponse ScanVulSetting(Models\ScanVulSettingRequest $req) This API is used to complete regular vulnerability scan settings.
 * @method Models\SearchLogResponse SearchLog(Models\SearchLogRequest $req) This API is used to query logs.
 * @method Models\SeparateMalwaresResponse SeparateMalwares(Models\SeparateMalwaresRequest $req) This API is used to isolate Trojans.
 * @method Models\SetBashEventsStatusResponse SetBashEventsStatus(Models\SetBashEventsStatusRequest $req) This API is used to set the high-risk command event status.
 * @method Models\SetLocalStorageExpireResponse SetLocalStorageExpire(Models\SetLocalStorageExpireRequest $req) This API is used to set the expiration time of the locally stored data.
 * @method Models\SetLocalStorageItemResponse SetLocalStorageItem(Models\SetLocalStorageItemRequest $req) This API is used to set the locally stored data.
 * @method Models\StartBaselineDetectResponse StartBaselineDetect(Models\StartBaselineDetectRequest $req) This API is used to perform baseline checks.
 * @method Models\StopAssetScanResponse StopAssetScan(Models\StopAssetScanRequest $req) This API is used to stop the asset scan task.
 * @method Models\StopBaselineDetectResponse StopBaselineDetect(Models\StopBaselineDetectRequest $req) This API is used to stop baseline check.
 * @method Models\StopNoticeBanTipsResponse StopNoticeBanTips(Models\StopNoticeBanTipsRequest $req) This API is used to stop displaying pop-up prompts about brute force cracking blocking.
 * @method Models\SwitchBashRulesResponse SwitchBashRules(Models\SwitchBashRulesRequest $req) This API is used to switch the statuses of high-risk command rules.
 * @method Models\SyncAssetScanResponse SyncAssetScan(Models\SyncAssetScanRequest $req) This API is used to synchronize the asset scan information.
 * @method Models\SyncBaselineDetectSummaryResponse SyncBaselineDetectSummary(Models\SyncBaselineDetectSummaryRequest $req) This API is used to sync the summary of baseline detection progress.
 * @method Models\SyncMachinesResponse SyncMachines(Models\SyncMachinesRequest $req) This API is used to sync the machine information.
 * @method Models\TestWebHookRuleResponse TestWebHookRule(Models\TestWebHookRuleRequest $req) This API is used to test the rules of WeCom chatbots.
 * @method Models\TrustMalwaresResponse TrustMalwares(Models\TrustMalwaresRequest $req) This API is used to mark identified Trojan files as Trusted.
 * @method Models\UntrustMalwaresResponse UntrustMalwares(Models\UntrustMalwaresRequest $req) This API is used to untrust Trojan files.
 * @method Models\UpdateBaselineStrategyResponse UpdateBaselineStrategy(Models\UpdateBaselineStrategyRequest $req) This API is used to update the policy information based on baseline policy IDs.
 * @method Models\UpdateMachineTagsResponse UpdateMachineTags(Models\UpdateMachineTagsRequest $req) This API is used to obtain the list of tags associated with machines.
 */

class CwpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cwp.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cwp";

    /**
     * @var string
     */
    protected $version = "2018-02-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("cwp")."\\"."V20180228\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
