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

namespace TencentCloud\Cynosdb\V20190107;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cynosdb\V20190107\Models as Models;

/**
 * @method Models\ActivateInstanceResponse ActivateInstance(Models\ActivateInstanceRequest $req) This API is used to remove the isolation of an instance to make it accessible again.
 * @method Models\AddClusterSlaveZoneResponse AddClusterSlaveZone(Models\AddClusterSlaveZoneRequest $req) This API is used to add the replica AZ.
 * @method Models\AddInstancesResponse AddInstances(Models\AddInstancesRequest $req) This API is used to add an instance in a cluster.
 * @method Models\BindClusterResourcePackagesResponse BindClusterResourcePackages(Models\BindClusterResourcePackagesRequest $req) This API is used to bind a resource pack to a cluster.
 * @method Models\CloseAuditServiceResponse CloseAuditService(Models\CloseAuditServiceRequest $req) This API is used to disable the audit service for a TDSQL-C for MySQL instance.
 * @method Models\CloseClusterPasswordComplexityResponse CloseClusterPasswordComplexity(Models\CloseClusterPasswordComplexityRequest $req) This API is used to disable the password complexity for a cluster.
 * @method Models\CloseWanResponse CloseWan(Models\CloseWanRequest $req) This API is used to disable the public network.
 * @method Models\CopyClusterPasswordComplexityResponse CopyClusterPasswordComplexity(Models\CopyClusterPasswordComplexityRequest $req) This API is used to replicate the password complexity for a cluster.
 * @method Models\CreateAccountsResponse CreateAccounts(Models\CreateAccountsRequest $req) This API is used to create an account.
 * @method Models\CreateAuditRuleTemplateResponse CreateAuditRuleTemplate(Models\CreateAuditRuleTemplateRequest $req) This API is used to create an audit rule template.
 * @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) This API is used to create manual backup.
 * @method Models\CreateClusterDatabaseResponse CreateClusterDatabase(Models\CreateClusterDatabaseRequest $req) This API is used to create a database.
 * @method Models\CreateClustersResponse CreateClusters(Models\CreateClustersRequest $req) This API is used to create a cluster.
 * @method Models\CreateParamTemplateResponse CreateParamTemplate(Models\CreateParamTemplateRequest $req) This API is used to create a parameter template.
 * @method Models\CreateResourcePackageResponse CreateResourcePackage(Models\CreateResourcePackageRequest $req) This API is used to purchase a resource pack.
 * @method Models\DeleteAccountsResponse DeleteAccounts(Models\DeleteAccountsRequest $req) This API is used to delete an account.
 * @method Models\DeleteAuditRuleTemplatesResponse DeleteAuditRuleTemplates(Models\DeleteAuditRuleTemplatesRequest $req) This API is used to delete an audit rule template.
 * @method Models\DeleteBackupResponse DeleteBackup(Models\DeleteBackupRequest $req) This API is used to delete the manual backup for a cluster. It cannot be used to delete the automatic backup.
 * @method Models\DeleteClusterDatabaseResponse DeleteClusterDatabase(Models\DeleteClusterDatabaseRequest $req) This API is used to delete a database.
 * @method Models\DeleteParamTemplateResponse DeleteParamTemplate(Models\DeleteParamTemplateRequest $req) This API is used to delete a parameter template.
 * @method Models\DescribeAccountPrivilegesResponse DescribeAccountPrivileges(Models\DescribeAccountPrivilegesRequest $req) This API is used to query the existing permissions of an account.
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) This API is used to query database management accounts.
 * @method Models\DescribeAuditRuleTemplatesResponse DescribeAuditRuleTemplates(Models\DescribeAuditRuleTemplatesRequest $req) This API is used to query audit rule templates.
 * @method Models\DescribeAuditRuleWithInstanceIdsResponse DescribeAuditRuleWithInstanceIds(Models\DescribeAuditRuleWithInstanceIdsRequest $req) This API is used to get the audit rule templates of an instance.
 * @method Models\DescribeBackupConfigResponse DescribeBackupConfig(Models\DescribeBackupConfigRequest $req) This API is used to get the backup configuration information of the specified cluster, including the full backup time range and backup file retention period.
 * @method Models\DescribeBackupDownloadUrlResponse DescribeBackupDownloadUrl(Models\DescribeBackupDownloadUrlRequest $req) This API is used to query the download address of a cluster backup file.
 * @method Models\DescribeBackupListResponse DescribeBackupList(Models\DescribeBackupListRequest $req) This API is used to query the list of backup files.
 * @method Models\DescribeBinlogDownloadUrlResponse DescribeBinlogDownloadUrl(Models\DescribeBinlogDownloadUrlRequest $req) This API is used to query the download address of a binlog.
 * @method Models\DescribeBinlogSaveDaysResponse DescribeBinlogSaveDays(Models\DescribeBinlogSaveDaysRequest $req) This API is used to query the binlog retention period of a cluster in days.
 * @method Models\DescribeBinlogsResponse DescribeBinlogs(Models\DescribeBinlogsRequest $req) This API is used to query the list of binlogs in a cluster.
 * @method Models\DescribeClusterDetailResponse DescribeClusterDetail(Models\DescribeClusterDetailRequest $req) This API is used to show the details of an instance.
 * @method Models\DescribeClusterDetailDatabasesResponse DescribeClusterDetailDatabases(Models\DescribeClusterDetailDatabasesRequest $req) This API is used to query the database list.
 * @method Models\DescribeClusterInstanceGrpsResponse DescribeClusterInstanceGrps(Models\DescribeClusterInstanceGrpsRequest $req) This API is used to query instance groups.
 * @method Models\DescribeClusterParamsResponse DescribeClusterParams(Models\DescribeClusterParamsRequest $req) This API is used to query the parameters of a cluster.
 * @method Models\DescribeClusterPasswordComplexityResponse DescribeClusterPasswordComplexity(Models\DescribeClusterPasswordComplexityRequest $req) This API is used to query the details of password complexity for a cluster.
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) This API is used to the list of clusters.
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) This API is used to query the security group information of an instance.
 * @method Models\DescribeFlowResponse DescribeFlow(Models\DescribeFlowRequest $req) This API is used to query task flow information.
 * @method Models\DescribeInstanceDetailResponse DescribeInstanceDetail(Models\DescribeInstanceDetailRequest $req) This API is used to query instance details.
 * @method Models\DescribeInstanceErrorLogsResponse DescribeInstanceErrorLogs(Models\DescribeInstanceErrorLogsRequest $req) This API is used to query the list of error logs for an instance.
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) This API is used to query the parameter list of an instance.
 * @method Models\DescribeInstanceSlowQueriesResponse DescribeInstanceSlowQueries(Models\DescribeInstanceSlowQueriesRequest $req) This API is used to query the slow query logs of an instance.
 * @method Models\DescribeInstanceSpecsResponse DescribeInstanceSpecs(Models\DescribeInstanceSpecsRequest $req) This API is used to query instance specifications.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query the list of instances.
 * @method Models\DescribeMaintainPeriodResponse DescribeMaintainPeriod(Models\DescribeMaintainPeriodRequest $req) This API is used to query the instance maintenance window.
 * @method Models\DescribeParamTemplateDetailResponse DescribeParamTemplateDetail(Models\DescribeParamTemplateDetailRequest $req) This API is used to query the details of a parameter template.
 * @method Models\DescribeParamTemplatesResponse DescribeParamTemplates(Models\DescribeParamTemplatesRequest $req) This API is used to query all parameter templates information of a user-specified product.
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) This API is used to query the security group information of a project.
 * @method Models\DescribeResourcePackageDetailResponse DescribeResourcePackageDetail(Models\DescribeResourcePackageDetailRequest $req) This API is used to query the usage details of a resource pack.
 * @method Models\DescribeResourcePackageListResponse DescribeResourcePackageList(Models\DescribeResourcePackageListRequest $req) This API is used to query the list of the resource packs.
 * @method Models\DescribeResourcePackageSaleSpecResponse DescribeResourcePackageSaleSpec(Models\DescribeResourcePackageSaleSpecRequest $req) This API is used to query the specifications of a resource pack.
 * @method Models\DescribeResourcesByDealNameResponse DescribeResourcesByDealName(Models\DescribeResourcesByDealNameRequest $req) This API is used to query the list of resources by billing order ID.
 * @method Models\DescribeRollbackTimeRangeResponse DescribeRollbackTimeRange(Models\DescribeRollbackTimeRangeRequest $req) This API is used to query the valid rollback time range for the specified cluster.
 * @method Models\DescribeRollbackTimeValidityResponse DescribeRollbackTimeValidity(Models\DescribeRollbackTimeValidityRequest $req) This API is used to query whether rollback is possible based on the specified time and cluster.
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) This API is used to query the AZ information in a purchasable region.
 * @method Models\ExportInstanceErrorLogsResponse ExportInstanceErrorLogs(Models\ExportInstanceErrorLogsRequest $req) This API is used to export the error logs of an instance.
 * @method Models\ExportInstanceSlowQueriesResponse ExportInstanceSlowQueries(Models\ExportInstanceSlowQueriesRequest $req) This API is used to export the slow logs of an instance.
 * @method Models\InquirePriceCreateResponse InquirePriceCreate(Models\InquirePriceCreateRequest $req) This API is used to query the purchasable price of a cluster.
 * @method Models\InquirePriceRenewResponse InquirePriceRenew(Models\InquirePriceRenewRequest $req) This API is used to query the renewal price of a cluster.
 * @method Models\IsolateClusterResponse IsolateCluster(Models\IsolateClusterRequest $req) This API is used to isolate a cluster.
 * @method Models\IsolateInstanceResponse IsolateInstance(Models\IsolateInstanceRequest $req) This API is used to isolate an instance.
 * @method Models\ModifyAccountDescriptionResponse ModifyAccountDescription(Models\ModifyAccountDescriptionRequest $req) This API is used to modify the descriptions of a database account.
 * @method Models\ModifyAccountHostResponse ModifyAccountHost(Models\ModifyAccountHostRequest $req) This API is used to modify the account host.
 * @method Models\ModifyAccountPrivilegesResponse ModifyAccountPrivileges(Models\ModifyAccountPrivilegesRequest $req) This API is used to modify the account permissions.
 * @method Models\ModifyAuditRuleTemplatesResponse ModifyAuditRuleTemplates(Models\ModifyAuditRuleTemplatesRequest $req) This API is used to modify an audit rule template.
 * @method Models\ModifyAuditServiceResponse ModifyAuditService(Models\ModifyAuditServiceRequest $req) This API is used to modify the audit configurations of an instance, such as audit log retention period and audit rule.
 * @method Models\ModifyBackupConfigResponse ModifyBackupConfig(Models\ModifyBackupConfigRequest $req) This API is used to modify the backup configuration of the specified cluster.
 * @method Models\ModifyBackupNameResponse ModifyBackupName(Models\ModifyBackupNameRequest $req) This API is used to rename a backup file.
 * @method Models\ModifyBinlogSaveDaysResponse ModifyBinlogSaveDays(Models\ModifyBinlogSaveDaysRequest $req) This API is used to modify the binlog retention period in days.
 * @method Models\ModifyClusterDatabaseResponse ModifyClusterDatabase(Models\ModifyClusterDatabaseRequest $req) This API is used to modify the database.
 * @method Models\ModifyClusterNameResponse ModifyClusterName(Models\ModifyClusterNameRequest $req) This API is used to modify cluster name.
 * @method Models\ModifyClusterParamResponse ModifyClusterParam(Models\ModifyClusterParamRequest $req) This API is used to modify the parameters of a cluster.
 * @method Models\ModifyClusterPasswordComplexityResponse ModifyClusterPasswordComplexity(Models\ModifyClusterPasswordComplexityRequest $req) This API is used to modify or enable the password complexity for a cluster.
 * @method Models\ModifyClusterSlaveZoneResponse ModifyClusterSlaveZone(Models\ModifyClusterSlaveZoneRequest $req) This API is used to modify the replica AZ.
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) This API is used to modify the security groups bound to an instance.
 * @method Models\ModifyInstanceNameResponse ModifyInstanceName(Models\ModifyInstanceNameRequest $req) This API is used to modify instance name.
 * @method Models\ModifyInstanceParamResponse ModifyInstanceParam(Models\ModifyInstanceParamRequest $req) This API is used to modify the instance parameters.
 * @method Models\ModifyMaintainPeriodConfigResponse ModifyMaintainPeriodConfig(Models\ModifyMaintainPeriodConfigRequest $req) This API is used to modify the maintenance time configuration.
 * @method Models\ModifyParamTemplateResponse ModifyParamTemplate(Models\ModifyParamTemplateRequest $req) This API is used to modify a parameter template.
 * @method Models\ModifyResourcePackageClustersResponse ModifyResourcePackageClusters(Models\ModifyResourcePackageClustersRequest $req) This API is used to bind a resource pack to a cluster.
 * @method Models\ModifyResourcePackageNameResponse ModifyResourcePackageName(Models\ModifyResourcePackageNameRequest $req) This API is used to modify the name of a resource pack.
 * @method Models\ModifyVipVportResponse ModifyVipVport(Models\ModifyVipVportRequest $req) This API is used to modify the IP and port of an instance group.
 * @method Models\OfflineClusterResponse OfflineCluster(Models\OfflineClusterRequest $req) This API is used to deactivate a cluster.
 * @method Models\OfflineInstanceResponse OfflineInstance(Models\OfflineInstanceRequest $req) This API is used to deactivate an instance.
 * @method Models\OpenAuditServiceResponse OpenAuditService(Models\OpenAuditServiceRequest $req) This API is used to enable the audit service for a TDSQL-C for MySQL instance.
 * @method Models\OpenClusterPasswordComplexityResponse OpenClusterPasswordComplexity(Models\OpenClusterPasswordComplexityRequest $req) This API is used to enable the password complexity for a cluster.
 * @method Models\OpenReadOnlyInstanceExclusiveAccessResponse OpenReadOnlyInstanceExclusiveAccess(Models\OpenReadOnlyInstanceExclusiveAccessRequest $req) This API is used to enable the dedicated access group for a read-only instance.
 * @method Models\OpenWanResponse OpenWan(Models\OpenWanRequest $req) This API is used to enable the public network.
 * @method Models\PauseServerlessResponse PauseServerless(Models\PauseServerlessRequest $req) This API is used to pause a serverless cluster.
 * @method Models\RefundResourcePackageResponse RefundResourcePackage(Models\RefundResourcePackageRequest $req) This API is used to refund a resource pack.
 * @method Models\RemoveClusterSlaveZoneResponse RemoveClusterSlaveZone(Models\RemoveClusterSlaveZoneRequest $req) This API is used to delete the replica AZ.
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) This API is used to reset the password of a TencentDB instance account.
 * @method Models\RestartInstanceResponse RestartInstance(Models\RestartInstanceRequest $req) This API is used to restart an instance.
 * @method Models\ResumeServerlessResponse ResumeServerless(Models\ResumeServerlessRequest $req) This API is used to resume a serverless cluster.
 * @method Models\SearchClusterDatabasesResponse SearchClusterDatabases(Models\SearchClusterDatabasesRequest $req) This API is used to search the list of cluster databases.
 * @method Models\SearchClusterTablesResponse SearchClusterTables(Models\SearchClusterTablesRequest $req) This API is used to search the list of cluster data tables.
 * @method Models\SetRenewFlagResponse SetRenewFlag(Models\SetRenewFlagRequest $req) This API is used to set auto-renewal for an instance.
 * @method Models\SwitchClusterVpcResponse SwitchClusterVpc(Models\SwitchClusterVpcRequest $req) This API is used to modify the cluster VPC.
 * @method Models\SwitchClusterZoneResponse SwitchClusterZone(Models\SwitchClusterZoneRequest $req) This API is used to switch to the replica AZ.
 * @method Models\SwitchProxyVpcResponse SwitchProxyVpc(Models\SwitchProxyVpcRequest $req) This API is used to modify the database proxy VPC.
 * @method Models\UnbindClusterResourcePackagesResponse UnbindClusterResourcePackages(Models\UnbindClusterResourcePackagesRequest $req) This API is used to unbind a TDSQL-C for MySQL resource pack.
 * @method Models\UpgradeClusterVersionResponse UpgradeClusterVersion(Models\UpgradeClusterVersionRequest $req) This API is used to upgrade the kernel version of a TDSQL-C for MySQL cluster.
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) This API is used to upgrade an instance.
 */

class CynosdbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cynosdb.tencentcloudapi.com";

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
