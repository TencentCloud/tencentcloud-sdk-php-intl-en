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

namespace TencentCloud\Cynosdb\V20190107;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cynosdb\V20190107\Models as Models;

/**
 * @method Models\ActivateInstanceResponse ActivateInstance(Models\ActivateInstanceRequest $req) This API is used to restore access to isolated instances.
 * @method Models\ActivateLibraDBClusterResponse ActivateLibraDBCluster(Models\ActivateLibraDBClusterRequest $req) Release the analysis cluster from quarantined state
 * @method Models\ActivateLibraDBInstanceResponse ActivateLibraDBInstance(Models\ActivateLibraDBInstanceRequest $req) This API is used to unbind an isolated read-only analysis engine instance.
 * @method Models\AddClusterSlaveZoneResponse AddClusterSlaveZone(Models\AddClusterSlaveZoneRequest $req) This API is used to enable multi-AZ deployment for a cluster.
 * @method Models\AddInstancesResponse AddInstances(Models\AddInstancesRequest $req) This API is used to add instances to a cluster.
 * @method Models\AddLibraDBInstancesResponse AddLibraDBInstances(Models\AddLibraDBInstancesRequest $req) This API is used to add read-only analysis engine to a cluster.
 * @method Models\AddServerlessRoInstancesResponse AddServerlessRoInstances(Models\AddServerlessRoInstancesRequest $req) Add a read-only instance to a serverless cluster
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) This API is used to bulk bind security groups to cloud resources.
 * @method Models\BindClusterResourcePackagesResponse BindClusterResourcePackages(Models\BindClusterResourcePackagesRequest $req) This API is used to bind resource packages to a cluster.
 * @method Models\CalculateBackupSaveSecExpiresResponse CalculateBackupSaveSecExpires(Models\CalculateBackupSaveSecExpiresRequest $req) Calculate the backup file list that will expire and be deleted after the backup retention period is modified.
 * @method Models\CancelTaskResponse CancelTask(Models\CancelTaskRequest $req) Cancel to be executed tasks
 * @method Models\CheckCreateLibraDBInstanceResponse CheckCreateLibraDBInstance(Models\CheckCreateLibraDBInstanceRequest $req) This API is used to verify whether it is possible to add a read-only analysis engine instance to the cluster.
 * @method Models\CheckTransferClusterZoneResponse CheckTransferClusterZone(Models\CheckTransferClusterZoneRequest $req) This API is used to check whether cross-AZ migration can be initiated.
 * @method Models\CloseAuditServiceResponse CloseAuditService(Models\CloseAuditServiceRequest $req) This API is used to close the database audit service for a TDSQL-C MySQL instance.
 * @method Models\CloseClusterPasswordComplexityResponse CloseClusterPasswordComplexity(Models\CloseClusterPasswordComplexityRequest $req) This API is used to disable password complexity for a cluster.
 * @method Models\CloseProxyResponse CloseProxy(Models\CloseProxyRequest $req) This API is used to shut down the database proxy service of a cluster.
 * @method Models\CloseProxyEndPointResponse CloseProxyEndPoint(Models\CloseProxyEndPointRequest $req) This API is used to close the database proxy connection address.
 * @method Models\CloseSSLResponse CloseSSL(Models\CloseSSLRequest $req) Disable SSL encryption
 * @method Models\CloseWanResponse CloseWan(Models\CloseWanRequest $req) This API is used to disable public network.
 * @method Models\CopyBackupToVaultResponse CopyBackupToVault(Models\CopyBackupToVaultRequest $req) Copy the backup file to the designated backup safe.
 * @method Models\CopyClusterPasswordComplexityResponse CopyClusterPasswordComplexity(Models\CopyClusterPasswordComplexityRequest $req) This API is used to copy the password complexity of a replication cluster.
 * @method Models\CreateAccountsResponse CreateAccounts(Models\CreateAccountsRequest $req) This API is used to create user accounts.
 * @method Models\CreateAuditRuleTemplateResponse CreateAuditRuleTemplate(Models\CreateAuditRuleTemplateRequest $req) This API is used to create an audit rule template.
 * @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) This API is used to create a manual backup for a cluster.
 * @method Models\CreateCLSDeliveryResponse CreateCLSDelivery(Models\CreateCLSDeliveryRequest $req) This API is used to create log delivery.
 * @method Models\CreateClusterDatabaseResponse CreateClusterDatabase(Models\CreateClusterDatabaseRequest $req) This API is used to create a database.
 * @method Models\CreateClustersResponse CreateClusters(Models\CreateClustersRequest $req) This API is used to create a cluster.
 * @method Models\CreateIntegrateClusterResponse CreateIntegrateCluster(Models\CreateIntegrateClusterRequest $req) This API is used to purchase a new cluster.
 * @method Models\CreateLibraDBClusterAccountsResponse CreateLibraDBClusterAccounts(Models\CreateLibraDBClusterAccountsRequest $req) This API is used to create an analysis cluster account.
 * @method Models\CreateLibraDBClustersResponse CreateLibraDBClusters(Models\CreateLibraDBClustersRequest $req) This API is used to create a TDSQL-C analysis cluster
 * @method Models\CreateParamTemplateResponse CreateParamTemplate(Models\CreateParamTemplateRequest $req) This API is used to create a parameter template.
 * @method Models\CreateProxyResponse CreateProxy(Models\CreateProxyRequest $req) This API is used to enable the database proxy for a cluster.
 * @method Models\CreateProxyEndPointResponse CreateProxyEndPoint(Models\CreateProxyEndPointRequest $req) This API is used to create a database proxy connection point.
 * @method Models\CreateResourcePackageResponse CreateResourcePackage(Models\CreateResourcePackageRequest $req) This API is used to create a resource package.
 * @method Models\CreateVaultResponse CreateVault(Models\CreateVaultRequest $req) This API is used to create a backup vault.
 * @method Models\DeleteAccountsResponse DeleteAccounts(Models\DeleteAccountsRequest $req) This API is used to delete user accounts.
 * @method Models\DeleteAuditRuleTemplatesResponse DeleteAuditRuleTemplates(Models\DeleteAuditRuleTemplatesRequest $req) This API is used to delete audit rule templates.
 * @method Models\DeleteBackupResponse DeleteBackup(Models\DeleteBackupRequest $req) This API is used to delete a manual backup for a cluster. Auto-backups cannot be deleted.
 * @method Models\DeleteBackupVaultResponse DeleteBackupVault(Models\DeleteBackupVaultRequest $req) Delete the specified backup file from the backup safe.
 * @method Models\DeleteCLSDeliveryResponse DeleteCLSDelivery(Models\DeleteCLSDeliveryRequest $req) This API is used to delete log delivery.
 * @method Models\DeleteClusterDatabaseResponse DeleteClusterDatabase(Models\DeleteClusterDatabaseRequest $req) This API is used to delete a database.
 * @method Models\DeleteClusterSaveBackupResponse DeleteClusterSaveBackup(Models\DeleteClusterSaveBackupRequest $req) This API is used to delete residual backups for a cluster.
 * @method Models\DeleteLibraDBClusterResponse DeleteLibraDBCluster(Models\DeleteLibraDBClusterRequest $req) Deleting a TDSQL-C Analysis Cluster
 * @method Models\DeleteLibraDBClusterAccountsResponse DeleteLibraDBClusterAccounts(Models\DeleteLibraDBClusterAccountsRequest $req) This API is used to delete cluster accounts.
 * @method Models\DeleteParamTemplateResponse DeleteParamTemplate(Models\DeleteParamTemplateRequest $req) This API is used to delete a user-created parameter template.
 * @method Models\DeleteVaultsResponse DeleteVaults(Models\DeleteVaultsRequest $req) Bulk deletion of backup safes
 * @method Models\DescribeAccountPrivilegesResponse DescribeAccountPrivileges(Models\DescribeAccountPrivilegesRequest $req) This API is used to query the permissions of an account.
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) This API is used to query the database account list.
 * @method Models\DescribeAuditInstanceListResponse DescribeAuditInstanceList(Models\DescribeAuditInstanceListRequest $req) This API is used to obtain the instance list of database audit.
 * @method Models\DescribeAuditLogsResponse DescribeAuditLogs(Models\DescribeAuditLogsRequest $req) This API is used to query database audit logs.
 * @method Models\DescribeAuditRuleTemplatesResponse DescribeAuditRuleTemplates(Models\DescribeAuditRuleTemplatesRequest $req) This API is used to query the information of audit rule templates.
 * @method Models\DescribeAuditRuleWithInstanceIdsResponse DescribeAuditRuleWithInstanceIds(Models\DescribeAuditRuleWithInstanceIdsRequest $req) This API is used to obtain audit rules of the instance.
 * @method Models\DescribeBackupConfigResponse DescribeBackupConfig(Models\DescribeBackupConfigRequest $req) This API is used to obtain the backup configuration information of a specified cluster, including the full backup time period and backup file retention time.
 * @method Models\DescribeBackupDownloadRestrictionResponse DescribeBackupDownloadRestriction(Models\DescribeBackupDownloadRestrictionRequest $req) This API is used to query the default backup download access restrictions configured by the user in the current region.
 * @method Models\DescribeBackupDownloadUrlResponse DescribeBackupDownloadUrl(Models\DescribeBackupDownloadUrlRequest $req) This API is used to query the download URL of cluster backup files.
 * @method Models\DescribeBackupDownloadUserRestrictionResponse DescribeBackupDownloadUserRestriction(Models\DescribeBackupDownloadUserRestrictionRequest $req) This API is used to query the default backup download access restrictions for user-level settings in the current region.
 * @method Models\DescribeBackupListResponse DescribeBackupList(Models\DescribeBackupListRequest $req) This API is used to query the backup file list of a cluster.
 * @method Models\DescribeBackupListByVaultResponse DescribeBackupListByVault(Models\DescribeBackupListByVaultRequest $req) Query backup file list based on safe ID
 * @method Models\DescribeBackupOverviewResponse DescribeBackupOverview(Models\DescribeBackupOverviewRequest $req) This API is used to query the backup usage overview.
 * @method Models\DescribeBinlogConfigResponse DescribeBinlogConfig(Models\DescribeBinlogConfigRequest $req) This API is used to query the binlog configuration.
 * @method Models\DescribeBinlogDownloadUrlResponse DescribeBinlogDownloadUrl(Models\DescribeBinlogDownloadUrlRequest $req) This API is used to query the download URL of a Binlog.
 * @method Models\DescribeBinlogListByVaultResponse DescribeBinlogListByVault(Models\DescribeBinlogListByVaultRequest $req) Queries binlog backups in a vault
 * @method Models\DescribeBinlogSaveDaysResponse DescribeBinlogSaveDays(Models\DescribeBinlogSaveDaysRequest $req) This API is used to query the Binlog retention days of a cluster.
 * @method Models\DescribeBinlogsResponse DescribeBinlogs(Models\DescribeBinlogsRequest $req) This API is used to query the Binlog list of a cluster.
 * @method Models\DescribeChangedParamsAfterUpgradeResponse DescribeChangedParamsAfterUpgrade(Models\DescribeChangedParamsAfterUpgradeRequest $req) This API is used to query the parameter comparison for scaling.
 * @method Models\DescribeClusterDatabaseTablesResponse DescribeClusterDatabaseTables(Models\DescribeClusterDatabaseTablesRequest $req) Access the table list.
 * @method Models\DescribeClusterDatabasesResponse DescribeClusterDatabases(Models\DescribeClusterDatabasesRequest $req) This API is used to obtain the cluster database list.
 * @method Models\DescribeClusterDetailResponse DescribeClusterDetail(Models\DescribeClusterDetailRequest $req) This API is used to display cluster details.
 * @method Models\DescribeClusterDetailDatabasesResponse DescribeClusterDetailDatabases(Models\DescribeClusterDetailDatabasesRequest $req) This API is used to query the database list.
 * @method Models\DescribeClusterInstanceGroupsResponse DescribeClusterInstanceGroups(Models\DescribeClusterInstanceGroupsRequest $req) This API is used to query instance group information.
 * @method Models\DescribeClusterInstanceGrpsResponse DescribeClusterInstanceGrps(Models\DescribeClusterInstanceGrpsRequest $req) This API is used to query instance group information. This API is deprecated. DescribeClusterInstanceGroups is recommended.
 * @method Models\DescribeClusterParamsResponse DescribeClusterParams(Models\DescribeClusterParamsRequest $req) This API is used to query cluster parameters.
 * @method Models\DescribeClusterPasswordComplexityResponse DescribeClusterPasswordComplexity(Models\DescribeClusterPasswordComplexityRequest $req) This API is used to view the password complexity details of a cluster.
 * @method Models\DescribeClusterReadOnlyResponse DescribeClusterReadOnly(Models\DescribeClusterReadOnlyRequest $req) This API is used to query the cluster read-only switch.
 * @method Models\DescribeClusterStorageAutoExpandResponse DescribeClusterStorageAutoExpand(Models\DescribeClusterStorageAutoExpandRequest $req) This API is used to query the automated storage expansion configuration.
 * @method Models\DescribeClusterTransparentEncryptInfoResponse DescribeClusterTransparentEncryptInfo(Models\DescribeClusterTransparentEncryptInfoRequest $req) Queries cluster transparent encryption information
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) This API is used to describe clusters.
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) This API is used to query instance security group information.
 * @method Models\DescribeFlowResponse DescribeFlow(Models\DescribeFlowRequest $req) This API is used to query task flow information.
 * @method Models\DescribeInstanceCLSLogDeliveryResponse DescribeInstanceCLSLogDelivery(Models\DescribeInstanceCLSLogDeliveryRequest $req) This API is used to query instance log delivery information.
 * @method Models\DescribeInstanceDetailResponse DescribeInstanceDetail(Models\DescribeInstanceDetailRequest $req) This API is used to query instance details.
 * @method Models\DescribeInstanceErrorLogsResponse DescribeInstanceErrorLogs(Models\DescribeInstanceErrorLogsRequest $req) This API is used to query the list of instance error logs.
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) This API is used to query the instance parameter list.
 * @method Models\DescribeInstanceSlowQueriesResponse DescribeInstanceSlowQueries(Models\DescribeInstanceSlowQueriesRequest $req) This API is used to query the slow log details of an instance. Subject to platform return size limits, return results may be truncated if they are too large.
 * @method Models\DescribeInstanceSpecsResponse DescribeInstanceSpecs(Models\DescribeInstanceSpecsRequest $req) This API is used to query the instance specifications available for purchase on the purchase page.
 * @method Models\DescribeInstanceSpecsByOperationTypeResponse DescribeInstanceSpecsByOperationType(Models\DescribeInstanceSpecsByOperationTypeRequest $req) Query instance specifications according to the operation type.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query the instance list.
 * @method Models\DescribeInstancesWithinSameClusterResponse DescribeInstancesWithinSameCluster(Models\DescribeInstancesWithinSameClusterRequest $req) This API is used to query the instance list under the same cluster.
 * @method Models\DescribeIntegrateTaskResponse DescribeIntegrateTask(Models\DescribeIntegrateTaskRequest $req) This API is used to query cluster tasks.
 * @method Models\DescribeIsolatedInstancesResponse DescribeIsolatedInstances(Models\DescribeIsolatedInstancesRequest $req) This API is used to query the recycle bin instance list.
 * @method Models\DescribeLibraDBClusterAccountAllPrivilegesResponse DescribeLibraDBClusterAccountAllPrivileges(Models\DescribeLibraDBClusterAccountAllPrivilegesRequest $req) This API is used to query and analyze all permissions of a cluster account.
 * @method Models\DescribeLibraDBClusterAccountPrivilegesResponse DescribeLibraDBClusterAccountPrivileges(Models\DescribeLibraDBClusterAccountPrivilegesRequest $req) This API is used to query the permissions of a cluster account.
 * @method Models\DescribeLibraDBClusterAccountsResponse DescribeLibraDBClusterAccounts(Models\DescribeLibraDBClusterAccountsRequest $req) This API is used to query and analyze cluster accounts.
 * @method Models\DescribeLibraDBClusterAutoMapRuleResponse DescribeLibraDBClusterAutoMapRule(Models\DescribeLibraDBClusterAutoMapRuleRequest $req) This API is used to view advanced mapping rules for an analysis cluster.
 * @method Models\DescribeLibraDBClusterDetailResponse DescribeLibraDBClusterDetail(Models\DescribeLibraDBClusterDetailRequest $req) Queries TDSQL-C analysis cluster information
 * @method Models\DescribeLibraDBClusterTableMappingResponse DescribeLibraDBClusterTableMapping(Models\DescribeLibraDBClusterTableMappingRequest $req) This API is used to view the mapping relationship between databases and tables in an analysis cluster.
 * @method Models\DescribeLibraDBClustersResponse DescribeLibraDBClusters(Models\DescribeLibraDBClustersRequest $req) This API is used to query the list of analysis clusters.
 * @method Models\DescribeLibraDBDataSourceResponse DescribeLibraDBDataSource(Models\DescribeLibraDBDataSourceRequest $req) This API is used to query source instance information of the analysis cluster.
 * @method Models\DescribeLibraDBForwardConfigResponse DescribeLibraDBForwardConfig(Models\DescribeLibraDBForwardConfigRequest $req) This API is used to query the forwarding parameters of the analysis engine.
 * @method Models\DescribeLibraDBInstanceDetailResponse DescribeLibraDBInstanceDetail(Models\DescribeLibraDBInstanceDetailRequest $req) This API is used to query read-only analysis engine details.
 * @method Models\DescribeLibraDBInstanceSpecsResponse DescribeLibraDBInstanceSpecs(Models\DescribeLibraDBInstanceSpecsRequest $req) This API is used to query the specification information list supported for read-only analysis engines in the region.
 * @method Models\DescribeLibraDBSlowLogsResponse DescribeLibraDBSlowLogs(Models\DescribeLibraDBSlowLogsRequest $req) This API is used to query slow SQL details of the read-only analysis engine.
 * @method Models\DescribeLibraDBVersionResponse DescribeLibraDBVersion(Models\DescribeLibraDBVersionRequest $req) This API is used to query the list of supported versions for the read-only analysis engine.
 * @method Models\DescribeMaintainPeriodResponse DescribeMaintainPeriod(Models\DescribeMaintainPeriodRequest $req) This API is used to query instance maintenance window.
 * @method Models\DescribeParamTemplateDetailResponse DescribeParamTemplateDetail(Models\DescribeParamTemplateDetailRequest $req) This API is used to query user parameter template details.
 * @method Models\DescribeParamTemplatesResponse DescribeParamTemplates(Models\DescribeParamTemplatesRequest $req) This API is used to query all parameter template information under a user-specified product.
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) This API is used to query project security group information.
 * @method Models\DescribeProxiesResponse DescribeProxies(Models\DescribeProxiesRequest $req) This API is used to query the database proxy list.
 * @method Models\DescribeProxyNodesResponse DescribeProxyNodes(Models\DescribeProxyNodesRequest $req) This API is used to query the proxy node list.
 * @method Models\DescribeProxySpecsResponse DescribeProxySpecs(Models\DescribeProxySpecsRequest $req) This API is used to query database proxy specifications.
 * @method Models\DescribeProxyZoneStocksResponse DescribeProxyZoneStocks(Models\DescribeProxyZoneStocksRequest $req) This API is used to query regional inventory for database proxy.
 * @method Models\DescribeRedoLogListByVaultResponse DescribeRedoLogListByVault(Models\DescribeRedoLogListByVaultRequest $req) Query RedoLog backups
 * @method Models\DescribeRedoLogsResponse DescribeRedoLogs(Models\DescribeRedoLogsRequest $req) This API is used to query the redo log list.
 * @method Models\DescribeResourcePackageDetailResponse DescribeResourcePackageDetail(Models\DescribeResourcePackageDetailRequest $req) This API is used to query resource package usage details.
 * @method Models\DescribeResourcePackageListResponse DescribeResourcePackageList(Models\DescribeResourcePackageListRequest $req) This API is used to query the resource package list.
 * @method Models\DescribeResourcePackageSaleSpecResponse DescribeResourcePackageSaleSpec(Models\DescribeResourcePackageSaleSpecRequest $req) This API is used to query resource package specifications.
 * @method Models\DescribeResourcesByDealNameResponse DescribeResourcesByDealName(Models\DescribeResourcesByDealNameRequest $req) This API is used to query order associated instances.
 * @method Models\DescribeRollbackTimeRangeResponse DescribeRollbackTimeRange(Models\DescribeRollbackTimeRangeRequest $req) This API is used to query the rollback time range.
 * @method Models\DescribeSQLExecutionPlanResponse DescribeSQLExecutionPlan(Models\DescribeSQLExecutionPlanRequest $req) This API is used to query the details of a query execution plan.
 * @method Models\DescribeSaveBackupClustersResponse DescribeSaveBackupClusters(Models\DescribeSaveBackupClustersRequest $req) This API is used to query legacy backup cluster information.
 * @method Models\DescribeServerlessInstanceSpecsResponse DescribeServerlessInstanceSpecs(Models\DescribeServerlessInstanceSpecsRequest $req) Query the available specifications of a Serverless instance
 * @method Models\DescribeServerlessStrategyResponse DescribeServerlessStrategy(Models\DescribeServerlessStrategyRequest $req) Queries a serverless policy.
 * @method Models\DescribeSlaveZonesResponse DescribeSlaveZones(Models\DescribeSlaveZonesRequest $req) Query the secondary AZ
 * @method Models\DescribeSupportProxyVersionResponse DescribeSupportProxyVersion(Models\DescribeSupportProxyVersionRequest $req) This API is used to query supported database proxy versions.
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) This API is used to query the task list.
 * @method Models\DescribeVaultBackupClusterInfoResponse DescribeVaultBackupClusterInfo(Models\DescribeVaultBackupClusterInfoRequest $req) This API is used to query the cluster information list associated with a backup safe.
 * @method Models\DescribeVaultsResponse DescribeVaults(Models\DescribeVaultsRequest $req) Queries the backup vault list, supporting pagination, filtering, and sorting.
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) This API is used to query the information of marketable regional availability zones.
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) This API is used to unbind cloud resources from security groups in batches.
 * @method Models\DownloadLibraDBClusterListResponse DownloadLibraDBClusterList(Models\DownloadLibraDBClusterListRequest $req) Download the analysis cluster list
 * @method Models\ExportInstanceErrorLogsResponse ExportInstanceErrorLogs(Models\ExportInstanceErrorLogsRequest $req) This API is used to export instance error logs.
 * @method Models\ExportInstanceSlowQueriesResponse ExportInstanceSlowQueries(Models\ExportInstanceSlowQueriesRequest $req) This API is used to export slow logs of an instance.
 * @method Models\ExportResourcePackageDeductDetailsResponse ExportResourcePackageDeductDetails(Models\ExportResourcePackageDeductDetailsRequest $req) Export resource package usage details
 * @method Models\GrantAccountPrivilegesResponse GrantAccountPrivileges(Models\GrantAccountPrivilegesRequest $req) This API is used to grant account permissions in batches.
 * @method Models\InquirePriceCreateResponse InquirePriceCreate(Models\InquirePriceCreateRequest $req) This API is used to query the price of a newly purchased cluster.
 * @method Models\InquirePriceModifyResponse InquirePriceModify(Models\InquirePriceModifyRequest $req) Inquires about the price of changing the configuration of a prepaid cluster
 * @method Models\InquirePriceMultiSpecResponse InquirePriceMultiSpec(Models\InquirePriceMultiSpecRequest $req) This API is used to batch inquire prices.
 * @method Models\InquirePriceRenewResponse InquirePriceRenew(Models\InquirePriceRenewRequest $req) This API is used to query the renewal price of a cluster.
 * @method Models\IsolateClusterResponse IsolateCluster(Models\IsolateClusterRequest $req) This API is used to isolate a cluster.
 * @method Models\IsolateInstanceResponse IsolateInstance(Models\IsolateInstanceRequest $req) This API is used to isolate an instance.
 * @method Models\IsolateLibraDBClusterResponse IsolateLibraDBCluster(Models\IsolateLibraDBClusterRequest $req) Isolate a TDSQL-C analysis cluster
 * @method Models\IsolateLibraDBInstanceResponse IsolateLibraDBInstance(Models\IsolateLibraDBInstanceRequest $req) This API is used to isolate a read-only analysis engine instance.
 * @method Models\ModifyAccountDescriptionResponse ModifyAccountDescription(Models\ModifyAccountDescriptionRequest $req) This API is used to modify database account description information.
 * @method Models\ModifyAccountHostResponse ModifyAccountHost(Models\ModifyAccountHostRequest $req) This API is used to modify the account host.
 * @method Models\ModifyAccountPrivilegesResponse ModifyAccountPrivileges(Models\ModifyAccountPrivilegesRequest $req) This API is used to modify account database/table permissions.
 * @method Models\ModifyAuditRuleTemplatesResponse ModifyAuditRuleTemplates(Models\ModifyAuditRuleTemplatesRequest $req) This API is used to modify an audit rule template.
 * @method Models\ModifyAuditServiceResponse ModifyAuditService(Models\ModifyAuditServiceRequest $req) This API is used to modify the audit log retention period, audit rules, and other service settings of CDB.
 * @method Models\ModifyBackupConfigResponse ModifyBackupConfig(Models\ModifyBackupConfigRequest $req) This API is used to modify the backup configuration of a specified cluster.
 * @method Models\ModifyBackupDownloadRestrictionResponse ModifyBackupDownloadRestriction(Models\ModifyBackupDownloadRestrictionRequest $req) This API is used to modify the backup file download access restrictions for users in the current region. It can be set to allow downloads from both private and public networks, only private networks, or designated VPCs and IPs within the private network.
 * @method Models\ModifyBackupDownloadUserRestrictionResponse ModifyBackupDownloadUserRestriction(Models\ModifyBackupDownloadUserRestrictionRequest $req) This API is used to modify the download source limits for backup files of a user in the current region. It can be set to allow downloads from both private and public networks, only from a private network, or from designated VPCs and IPs within a private network.
 * @method Models\ModifyBackupNameResponse ModifyBackupName(Models\ModifyBackupNameRequest $req) This API is used to modify the backup file remark name.
 * @method Models\ModifyBinlogConfigResponse ModifyBinlogConfig(Models\ModifyBinlogConfigRequest $req) This API is used to modify the Binlog configuration.
 * @method Models\ModifyBinlogSaveDaysResponse ModifyBinlogSaveDays(Models\ModifyBinlogSaveDaysRequest $req) This API is used to modify the retention days of cluster binlogs.
 * @method Models\ModifyClusterBinlogRedoLogAutoCopyVaultResponse ModifyClusterBinlogRedoLogAutoCopyVault(Models\ModifyClusterBinlogRedoLogAutoCopyVaultRequest $req) Modify the configuration for automatically copying cluster Binlog and RedoLog to the safe.
 * @method Models\ModifyClusterDatabaseResponse ModifyClusterDatabase(Models\ModifyClusterDatabaseRequest $req) This API is used to modify account authorization for a database.
 * @method Models\ModifyClusterGlobalEncryptionResponse ModifyClusterGlobalEncryption(Models\ModifyClusterGlobalEncryptionRequest $req) Toggle global encryption
 * @method Models\ModifyClusterLevelResponse ModifyClusterLevel(Models\ModifyClusterLevelRequest $req) Modify cluster
 * @method Models\ModifyClusterNameResponse ModifyClusterName(Models\ModifyClusterNameRequest $req) This API is used to modify cluster names.
 * @method Models\ModifyClusterParamResponse ModifyClusterParam(Models\ModifyClusterParamRequest $req) This API is used to modify cluster parameters.
 * @method Models\ModifyClusterPasswordComplexityResponse ModifyClusterPasswordComplexity(Models\ModifyClusterPasswordComplexityRequest $req) This API is used to modify or enable cluster password complexity.
 * @method Models\ModifyClusterReadOnlyResponse ModifyClusterReadOnly(Models\ModifyClusterReadOnlyRequest $req) This API is used to modify the read-only switch of a cluster.
 * @method Models\ModifyClusterSlaveZoneResponse ModifyClusterSlaveZone(Models\ModifyClusterSlaveZoneRequest $req) This API is used to modify the replica AZ of a cluster.
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) This API is used to modify the security group bound to the instance.
 * @method Models\ModifyInstanceNameResponse ModifyInstanceName(Models\ModifyInstanceNameRequest $req) This API is used to modify instance name.
 * @method Models\ModifyInstanceParamResponse ModifyInstanceParam(Models\ModifyInstanceParamRequest $req) This API is used to modify instance parameters.
 * @method Models\ModifyInstanceUpgradeLimitDaysResponse ModifyInstanceUpgradeLimitDays(Models\ModifyInstanceUpgradeLimitDaysRequest $req) This API is used to modify the upgrade time limit for the kernel minor version of an instance.
 * @method Models\ModifyLibraDBClusterAccountDescriptionResponse ModifyLibraDBClusterAccountDescription(Models\ModifyLibraDBClusterAccountDescriptionRequest $req) This API is used to modify the account description of an analysis cluster.
 * @method Models\ModifyLibraDBClusterAccountHostResponse ModifyLibraDBClusterAccountHost(Models\ModifyLibraDBClusterAccountHostRequest $req) This API is used to modify the login host info of an analysis cluster account.
 * @method Models\ModifyLibraDBClusterAccountPrivilegeResponse ModifyLibraDBClusterAccountPrivilege(Models\ModifyLibraDBClusterAccountPrivilegeRequest $req) This API is used to modify account permissions of an analysis cluster.
 * @method Models\ModifyLibraDBClusterDataSourceResponse ModifyLibraDBClusterDataSource(Models\ModifyLibraDBClusterDataSourceRequest $req) This API is used to modify the data source of a TDSQL-C analytical cluster.
 * @method Models\ModifyLibraDBClusterNameResponse ModifyLibraDBClusterName(Models\ModifyLibraDBClusterNameRequest $req) Modify the analytical cluster name
 * @method Models\ModifyLibraDBClusterProjectResponse ModifyLibraDBClusterProject(Models\ModifyLibraDBClusterProjectRequest $req) Modifies the project ID of an analysis cluster
 * @method Models\ModifyLibraDBClusterReplicationObjectResponse ModifyLibraDBClusterReplicationObject(Models\ModifyLibraDBClusterReplicationObjectRequest $req) This API is used to modify the sync objects of an analysis cluster.
 * @method Models\ModifyLibraDBForwardConfigResponse ModifyLibraDBForwardConfig(Models\ModifyLibraDBForwardConfigRequest $req) This API is used to modify the automatic forwarding parameters of a read-only analysis instance.
 * @method Models\ModifyMaintainPeriodConfigResponse ModifyMaintainPeriodConfig(Models\ModifyMaintainPeriodConfigRequest $req) This API is used to modify the maintenance time configuration.
 * @method Models\ModifyParamTemplateResponse ModifyParamTemplate(Models\ModifyParamTemplateRequest $req) This API is used to modify user parameter templates.
 * @method Models\ModifyProxyDescResponse ModifyProxyDesc(Models\ModifyProxyDescRequest $req) This API is used to modify the description of a database proxy.
 * @method Models\ModifyProxyRwSplitResponse ModifyProxyRwSplit(Models\ModifyProxyRwSplitRequest $req) This API is used to configure read-write separation for database proxy.
 * @method Models\ModifyResourcePackageClustersResponse ModifyResourcePackageClusters(Models\ModifyResourcePackageClustersRequest $req) This API is used to modify the binding relationship between a resource package and clusters.
 * @method Models\ModifyResourcePackageNameResponse ModifyResourcePackageName(Models\ModifyResourcePackageNameRequest $req) This API is used to modify resource package name.
 * @method Models\ModifyResourcePackagesDeductionPriorityResponse ModifyResourcePackagesDeductionPriority(Models\ModifyResourcePackagesDeductionPriorityRequest $req) Modify the deduction priority of bound resource packages.
 * @method Models\ModifyServerlessStrategyResponse ModifyServerlessStrategy(Models\ModifyServerlessStrategyRequest $req) Modify a serverless policy
 * @method Models\ModifySnapBackupCrossRegionConfigResponse ModifySnapBackupCrossRegionConfig(Models\ModifySnapBackupCrossRegionConfigRequest $req) This API is used to modify the cross-region configuration for snapshot backup of a specified cluster.
 * @method Models\ModifyVaultResponse ModifyVault(Models\ModifyVaultRequest $req) Modify the configuration of a backup safe, including the name, description, retention duration, encryption key, and lock time.
 * @method Models\ModifyVipVportResponse ModifyVipVport(Models\ModifyVipVportRequest $req) This API is used to modify the ip and port of an instance group.
 * @method Models\OfflineClusterResponse OfflineCluster(Models\OfflineClusterRequest $req) This API is used to terminate clusters.
 * @method Models\OfflineInstanceResponse OfflineInstance(Models\OfflineInstanceRequest $req) This API is used to destroy an instance.
 * @method Models\OfflineLibraDBClusterResponse OfflineLibraDBCluster(Models\OfflineLibraDBClusterRequest $req) This API is used to decommission an analysis cluster.
 * @method Models\OfflineLibraDBInstanceResponse OfflineLibraDBInstance(Models\OfflineLibraDBInstanceRequest $req) This API is used to decommission a read-only analysis engine instance.
 * @method Models\OpenAIOptimizerResponse OpenAIOptimizer(Models\OpenAIOptimizerRequest $req) This API is used to enable the AI optimizer switch for an instance.
 * @method Models\OpenAuditServiceResponse OpenAuditService(Models\OpenAuditServiceRequest $req) This API is used to enable the database audit service for an instance.
 * @method Models\OpenClusterPasswordComplexityResponse OpenClusterPasswordComplexity(Models\OpenClusterPasswordComplexityRequest $req) This API is used to enable the custom password complexity feature.
 * @method Models\OpenClusterReadOnlyInstanceGroupAccessResponse OpenClusterReadOnlyInstanceGroupAccess(Models\OpenClusterReadOnlyInstanceGroupAccessRequest $req) This API is used to enable read-only instance group access.
 * @method Models\OpenClusterTransparentEncryptResponse OpenClusterTransparentEncrypt(Models\OpenClusterTransparentEncryptRequest $req) Enable transparent encryption for the cluster.
 * @method Models\OpenReadOnlyInstanceExclusiveAccessResponse OpenReadOnlyInstanceExclusiveAccess(Models\OpenReadOnlyInstanceExclusiveAccessRequest $req) This API is used to enable dedicated access groups for read-only instances.
 * @method Models\OpenWanResponse OpenWan(Models\OpenWanRequest $req) This API is used to enable public network access.
 * @method Models\PauseServerlessResponse PauseServerless(Models\PauseServerlessRequest $req) This API is used to suspend a serverless cluster.
 * @method Models\RefundResourcePackageResponse RefundResourcePackage(Models\RefundResourcePackageRequest $req) This API is used to refund a resource package.
 * @method Models\ReloadBalanceProxyNodeResponse ReloadBalanceProxyNode(Models\ReloadBalanceProxyNodeRequest $req) This API is used to load balance database proxy.
 * @method Models\RemoveClusterSlaveZoneResponse RemoveClusterSlaveZone(Models\RemoveClusterSlaveZoneRequest $req) This API is used to disable multi-AZ deployment for a cluster.
 * @method Models\RenewClustersResponse RenewClusters(Models\RenewClustersRequest $req) Renew a cluster
 * @method Models\RenewLibraDBClustersResponse RenewLibraDBClusters(Models\RenewLibraDBClustersRequest $req) Renews an analysis cluster
 * @method Models\ReplayInstanceAuditLogResponse ReplayInstanceAuditLog(Models\ReplayInstanceAuditLogRequest $req) Replay instance audit logs
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) This API is used to modify database account passwords.
 * @method Models\ResetLibraDBClusterAccountPasswordResponse ResetLibraDBClusterAccountPassword(Models\ResetLibraDBClusterAccountPasswordRequest $req) Modifies the account password of an analysis cluster
 * @method Models\RestartInstanceResponse RestartInstance(Models\RestartInstanceRequest $req) This API is used to reboot an instance.
 * @method Models\RestartLibraDBInstanceResponse RestartLibraDBInstance(Models\RestartLibraDBInstanceRequest $req) Restart the read-only analysis engine
 * @method Models\ResumeServerlessResponse ResumeServerless(Models\ResumeServerlessRequest $req) This API is used to resume a serverless cluster.
 * @method Models\RollBackClusterResponse RollBackCluster(Models\RollBackClusterRequest $req) This API is used to roll back a cluster.
 * @method Models\RollbackToNewClusterResponse RollbackToNewCluster(Models\RollbackToNewClusterRequest $req) This API is used to roll back to a new cluster.
 * @method Models\SearchClusterDatabasesResponse SearchClusterDatabases(Models\SearchClusterDatabasesRequest $req) This API is used to search the cluster database list.
 * @method Models\SearchClusterTablesResponse SearchClusterTables(Models\SearchClusterTablesRequest $req) This API is used to search the cluster data table list.
 * @method Models\SetLibraDBClusterRenewFlagResponse SetLibraDBClusterRenewFlag(Models\SetLibraDBClusterRenewFlagRequest $req) Set whether to renew a TDSQL-C analysis cluster
 * @method Models\SetRenewFlagResponse SetRenewFlag(Models\SetRenewFlagRequest $req) This API is used to set the auto-renewal feature of an instance.
 * @method Models\StartCLSDeliveryResponse StartCLSDelivery(Models\StartCLSDeliveryRequest $req) This API is used to enable log delivery.
 * @method Models\StopCLSDeliveryResponse StopCLSDelivery(Models\StopCLSDeliveryRequest $req) This API is used to disable the log delivery feature.
 * @method Models\SwitchClusterVpcResponse SwitchClusterVpc(Models\SwitchClusterVpcRequest $req) This API is used to replace the cluster vpc.
 * @method Models\SwitchClusterZoneResponse SwitchClusterZone(Models\SwitchClusterZoneRequest $req) This API is used to switch the primary and secondary AZs of a cluster.
 * @method Models\SwitchProxyVpcResponse SwitchProxyVpc(Models\SwitchProxyVpcRequest $req) This API is used to replace the vpc of a database proxy.
 * @method Models\TransferClusterPrepayToPostpayResponse TransferClusterPrepayToPostpay(Models\TransferClusterPrepayToPostpayRequest $req) This API is used to convert a prepaid cluster to a postpaid cluster.
 * @method Models\TransferClusterZoneResponse TransferClusterZone(Models\TransferClusterZoneRequest $req) This API is used to initiate cross-AZ migration.
 * @method Models\TransferStoragePrepayToPostpayResponse TransferStoragePrepayToPostpay(Models\TransferStoragePrepayToPostpayRequest $req) This API is used to convert prepaid storage to postpaid storage.
 * @method Models\UnbindClusterResourcePackagesResponse UnbindClusterResourcePackages(Models\UnbindClusterResourcePackagesRequest $req) This API is used to unbind resource packages from clusters.
 * @method Models\UpgradeClusterVersionResponse UpgradeClusterVersion(Models\UpgradeClusterVersionRequest $req) This API is used to update the kernel minor version.
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) This API is used to upgrade or downgrade the configuration of an instance.
 * @method Models\UpgradeProxyResponse UpgradeProxy(Models\UpgradeProxyRequest $req) This API is used to upgrade the database proxy configuration.
 * @method Models\UpgradeProxyVersionResponse UpgradeProxyVersion(Models\UpgradeProxyVersionRequest $req) This API is used to upgrade the database proxy version.
 */

class CynosdbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cynosdb.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cynosdb";

    /**
     * @var string
     */
    protected $version = "2019-01-07";

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
        $respClass = "TencentCloud"."\\".ucfirst("cynosdb")."\\"."V20190107\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
