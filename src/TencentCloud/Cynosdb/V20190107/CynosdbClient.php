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
 * @method Models\ActivateInstanceResponse ActivateInstance(Models\ActivateInstanceRequest $req) This interface (ActivateInstance) restores access to isolated instances.
 * @method Models\AddClusterSlaveZoneResponse AddClusterSlaveZone(Models\AddClusterSlaveZoneRequest $req) This interface (AddClusterSlaveZone) is used to enable multi-az deployment for a cluster.
 * @method Models\AddInstancesResponse AddInstances(Models\AddInstancesRequest $req) This API is used to add instances to a cluster.
 * @method Models\BindClusterResourcePackagesResponse BindClusterResourcePackages(Models\BindClusterResourcePackagesRequest $req) This API is used to bind resource packages to a cluster.
 * @method Models\CloseAuditServiceResponse CloseAuditService(Models\CloseAuditServiceRequest $req) This API is used to close the database audit service for TDSQL-C MySQL instances.
 * @method Models\CloseClusterPasswordComplexityResponse CloseClusterPasswordComplexity(Models\CloseClusterPasswordComplexityRequest $req) This API is used to close cluster password complexity.
 * @method Models\CloseProxyResponse CloseProxy(Models\CloseProxyRequest $req) This API is used to close the database proxy service of a cluster.
 * @method Models\CloseProxyEndPointResponse CloseProxyEndPoint(Models\CloseProxyEndPointRequest $req) This API is used to close the database proxy connection address.
 * @method Models\CloseSSLResponse CloseSSL(Models\CloseSSLRequest $req) This API is used to disable SSL encryption.
 * @method Models\CloseWanResponse CloseWan(Models\CloseWanRequest $req) This interface (CloseWan) is used to disable public network.
 * @method Models\CopyClusterPasswordComplexityResponse CopyClusterPasswordComplexity(Models\CopyClusterPasswordComplexityRequest $req) This API is used to copy the password complexity of a replication cluster.
 * @method Models\CreateAccountsResponse CreateAccounts(Models\CreateAccountsRequest $req) This API is used to create user accounts.
 * @method Models\CreateAuditRuleTemplateResponse CreateAuditRuleTemplate(Models\CreateAuditRuleTemplateRequest $req) This API is used to create audit rule templates.
 * @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) This API is used to create a manual backup for a cluster.
 * @method Models\CreateClusterDatabaseResponse CreateClusterDatabase(Models\CreateClusterDatabaseRequest $req) This API is used to create a database.
 * @method Models\CreateClustersResponse CreateClusters(Models\CreateClustersRequest $req) This API is used to purchase new clusters.
 * @method Models\CreateParamTemplateResponse CreateParamTemplate(Models\CreateParamTemplateRequest $req) This API is used to create parameter templates.
 * @method Models\CreateProxyResponse CreateProxy(Models\CreateProxyRequest $req) This API is used to enable the database proxy of a cluster.
 * @method Models\CreateProxyEndPointResponse CreateProxyEndPoint(Models\CreateProxyEndPointRequest $req) This API is used to create a database proxy connection point.
 * @method Models\CreateResourcePackageResponse CreateResourcePackage(Models\CreateResourcePackageRequest $req) This API is used to purchase new resource packets.
 * @method Models\DeleteAccountsResponse DeleteAccounts(Models\DeleteAccountsRequest $req) This API is used to delete user accounts.
 * @method Models\DeleteAuditRuleTemplatesResponse DeleteAuditRuleTemplates(Models\DeleteAuditRuleTemplatesRequest $req) This API is used to delete audit rule templates.
 * @method Models\DeleteBackupResponse DeleteBackup(Models\DeleteBackupRequest $req) This API is used to delete manual backups for a cluster. Automatic backups cannot be deleted.
 * @method Models\DeleteClusterDatabaseResponse DeleteClusterDatabase(Models\DeleteClusterDatabaseRequest $req) This interface is used to delete a database.
 * @method Models\DeleteParamTemplateResponse DeleteParamTemplate(Models\DeleteParamTemplateRequest $req) This API is used to delete a parameter template.
 * @method Models\DescribeAccountPrivilegesResponse DescribeAccountPrivileges(Models\DescribeAccountPrivilegesRequest $req) This API is used to query account privileges.
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) This API is used to query the database account list.
 * @method Models\DescribeAuditRuleTemplatesResponse DescribeAuditRuleTemplates(Models\DescribeAuditRuleTemplatesRequest $req) This API is used to query audit rule template information.
 * @method Models\DescribeAuditRuleWithInstanceIdsResponse DescribeAuditRuleWithInstanceIds(Models\DescribeAuditRuleWithInstanceIdsRequest $req) This API is used to obtain the audit rules of the instance.
 * @method Models\DescribeBackupConfigResponse DescribeBackupConfig(Models\DescribeBackupConfigRequest $req) This API is used to obtain the backup configuration information of a specified cluster, including the full backup time period and the backup file retention time.
 * @method Models\DescribeBackupDownloadRestrictionResponse DescribeBackupDownloadRestriction(Models\DescribeBackupDownloadRestrictionRequest $req) This API is used to query the download source limit of the default backup configured by the user in the current region.
 * @method Models\DescribeBackupDownloadUrlResponse DescribeBackupDownloadUrl(Models\DescribeBackupDownloadUrlRequest $req) This API is used to query the download link of cluster backup files.
 * @method Models\DescribeBackupDownloadUserRestrictionResponse DescribeBackupDownloadUserRestriction(Models\DescribeBackupDownloadUserRestrictionRequest $req) This API is used to query the default backup download access restrictions of user-level settings in the current region.
 * @method Models\DescribeBackupListResponse DescribeBackupList(Models\DescribeBackupListRequest $req) This API is used to query the backup file list of a cluster.
 * @method Models\DescribeBinlogConfigResponse DescribeBinlogConfig(Models\DescribeBinlogConfigRequest $req) This API is used to query binlog configurations.
 * @method Models\DescribeBinlogDownloadUrlResponse DescribeBinlogDownloadUrl(Models\DescribeBinlogDownloadUrlRequest $req) This API is used to query the download address of Binlog.
 * @method Models\DescribeBinlogSaveDaysResponse DescribeBinlogSaveDays(Models\DescribeBinlogSaveDaysRequest $req) This API is used to query the binlog retention period of a cluster in days.
 * @method Models\DescribeBinlogsResponse DescribeBinlogs(Models\DescribeBinlogsRequest $req) This interface (DescribeBinlogs) queries the cluster binlog list.
 * @method Models\DescribeClusterDatabaseTablesResponse DescribeClusterDatabaseTables(Models\DescribeClusterDatabaseTablesRequest $req) This API is used to access the table list.
 * @method Models\DescribeClusterDetailResponse DescribeClusterDetail(Models\DescribeClusterDetailRequest $req) This API is used to display cluster details.
 * @method Models\DescribeClusterDetailDatabasesResponse DescribeClusterDetailDatabases(Models\DescribeClusterDetailDatabasesRequest $req) This API is used to query database list.
 * @method Models\DescribeClusterInstanceGrpsResponse DescribeClusterInstanceGrps(Models\DescribeClusterInstanceGrpsRequest $req) This API is used to query instance groups.
 * @method Models\DescribeClusterParamsResponse DescribeClusterParams(Models\DescribeClusterParamsRequest $req) This API is used to query cluster parameters.
 * @method Models\DescribeClusterPasswordComplexityResponse DescribeClusterPasswordComplexity(Models\DescribeClusterPasswordComplexityRequest $req) This API is used to view the cluster password complexity details.
 * @method Models\DescribeClusterReadOnlyResponse DescribeClusterReadOnly(Models\DescribeClusterReadOnlyRequest $req) This API is used to query the cluster read-only switch.
 * @method Models\DescribeClusterTransparentEncryptInfoResponse DescribeClusterTransparentEncryptInfo(Models\DescribeClusterTransparentEncryptInfoRequest $req) This API is used to query cluster transparent encryption information.
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) This API is used to describe clusters.
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) This API is used to query instance security group information.
 * @method Models\DescribeFlowResponse DescribeFlow(Models\DescribeFlowRequest $req) This API is used to query task flow information.
 * @method Models\DescribeInstanceDetailResponse DescribeInstanceDetail(Models\DescribeInstanceDetailRequest $req) This API is used to query instance details.
 * @method Models\DescribeInstanceErrorLogsResponse DescribeInstanceErrorLogs(Models\DescribeInstanceErrorLogsRequest $req) This API is used to query the list of instance error logs.
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) This API is used to query the instance parameter list.
 * @method Models\DescribeInstanceSlowQueriesResponse DescribeInstanceSlowQueries(Models\DescribeInstanceSlowQueriesRequest $req) This API is used to query the slow query logs of an instance.
 * @method Models\DescribeInstanceSpecsResponse DescribeInstanceSpecs(Models\DescribeInstanceSpecsRequest $req) This interface (DescribeInstanceSpecs) is used to query the instance specifications available for purchase on the query purchase page.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query the list of instances.
 * @method Models\DescribeInstancesWithinSameClusterResponse DescribeInstancesWithinSameCluster(Models\DescribeInstancesWithinSameClusterRequest $req) This API is used to query the instance list under the same cluster.
 * @method Models\DescribeIsolatedInstancesResponse DescribeIsolatedInstances(Models\DescribeIsolatedInstancesRequest $req) This interface is used for querying the recycle bin instance list.
 * @method Models\DescribeMaintainPeriodResponse DescribeMaintainPeriod(Models\DescribeMaintainPeriodRequest $req) This interface (DescribeMaintainPeriod) is used to query the instance maintenance window.
 * @method Models\DescribeParamTemplateDetailResponse DescribeParamTemplateDetail(Models\DescribeParamTemplateDetailRequest $req) This API is used to query user parameter template details.
 * @method Models\DescribeParamTemplatesResponse DescribeParamTemplates(Models\DescribeParamTemplatesRequest $req) This API is used to query all parameter template information under the user-specified product.
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) This API is used to query project security group information.
 * @method Models\DescribeProxiesResponse DescribeProxies(Models\DescribeProxiesRequest $req) This API is used to query agent list.
 * @method Models\DescribeProxyNodesResponse DescribeProxyNodes(Models\DescribeProxyNodesRequest $req) This API is used to query the list of proxy nodes.
 * @method Models\DescribeProxySpecsResponse DescribeProxySpecs(Models\DescribeProxySpecsRequest $req) This API is used to query database proxy specifications.
 * @method Models\DescribeResourcePackageDetailResponse DescribeResourcePackageDetail(Models\DescribeResourcePackageDetailRequest $req) This API is used to query resource package usage details.
 * @method Models\DescribeResourcePackageListResponse DescribeResourcePackageList(Models\DescribeResourcePackageListRequest $req) This API is used to query resource package list.
 * @method Models\DescribeResourcePackageSaleSpecResponse DescribeResourcePackageSaleSpec(Models\DescribeResourcePackageSaleSpecRequest $req) This API is used to query resource package specifications.
 * @method Models\DescribeResourcesByDealNameResponse DescribeResourcesByDealName(Models\DescribeResourcesByDealNameRequest $req) This interface (DescribeResourcesByDealName) is used to query order-associated instances.
 * @method Models\DescribeRollbackTimeRangeResponse DescribeRollbackTimeRange(Models\DescribeRollbackTimeRangeRequest $req) This API is used to query the rollback time range.
 * @method Models\DescribeServerlessInstanceSpecsResponse DescribeServerlessInstanceSpecs(Models\DescribeServerlessInstanceSpecsRequest $req) This API is used to query available specifications of Serverless instances.
 * @method Models\DescribeServerlessStrategyResponse DescribeServerlessStrategy(Models\DescribeServerlessStrategyRequest $req) This API is used to query serverless policies.
 * @method Models\DescribeSlaveZonesResponse DescribeSlaveZones(Models\DescribeSlaveZonesRequest $req) This API is used to query from availability zones.
 * @method Models\DescribeSupportProxyVersionResponse DescribeSupportProxyVersion(Models\DescribeSupportProxyVersionRequest $req) This API is used to query supported database proxy versions.
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) This API is used to query marketable regional availability zone information.
 * @method Models\ExportInstanceErrorLogsResponse ExportInstanceErrorLogs(Models\ExportInstanceErrorLogsRequest $req) This API is used to export the error logs of an instance.
 * @method Models\ExportInstanceSlowQueriesResponse ExportInstanceSlowQueries(Models\ExportInstanceSlowQueriesRequest $req) This API is used to export instance slow logs.
 * @method Models\ExportResourcePackageDeductDetailsResponse ExportResourcePackageDeductDetails(Models\ExportResourcePackageDeductDetailsRequest $req) This API is used to export the usage details of a resource package.
 * @method Models\InquirePriceCreateResponse InquirePriceCreate(Models\InquirePriceCreateRequest $req) This interface (InquirePriceCreate) is used for price inquiry of newly purchased clusters.
 * @method Models\InquirePriceModifyResponse InquirePriceModify(Models\InquirePriceModifyRequest $req) This API is used to query the price for modifying the specifications of a prepaid cluster.
 * @method Models\InquirePriceRenewResponse InquirePriceRenew(Models\InquirePriceRenewRequest $req) This API is used to query the renewal price of a cluster.
 * @method Models\IsolateClusterResponse IsolateCluster(Models\IsolateClusterRequest $req) This interface (IsolateCluster) is used to isolate a cluster.
 * @method Models\IsolateInstanceResponse IsolateInstance(Models\IsolateInstanceRequest $req) This API is used to isolate an instance.
 * @method Models\ModifyAccountDescriptionResponse ModifyAccountDescription(Models\ModifyAccountDescriptionRequest $req) This API is used to modify the descriptions of a database account.
 * @method Models\ModifyAccountHostResponse ModifyAccountHost(Models\ModifyAccountHostRequest $req) This API is used to modify account hosts.
 * @method Models\ModifyAccountPrivilegesResponse ModifyAccountPrivileges(Models\ModifyAccountPrivilegesRequest $req) This API is used to modify account database and table permissions.
 * @method Models\ModifyAuditRuleTemplatesResponse ModifyAuditRuleTemplates(Models\ModifyAuditRuleTemplatesRequest $req) This API is used to modify audit rule templates.
 * @method Models\ModifyAuditServiceResponse ModifyAuditService(Models\ModifyAuditServiceRequest $req) This API is used to modify the audit configurations of an instance, such as audit log retention period and audit rule.
 * @method Models\ModifyBackupConfigResponse ModifyBackupConfig(Models\ModifyBackupConfigRequest $req) This API is used to modify the backup configuration of a specified cluster.
 * @method Models\ModifyBackupDownloadRestrictionResponse ModifyBackupDownloadRestriction(Models\ModifyBackupDownloadRestrictionRequest $req) This API is used to modify the download source limit of the backup file for the user in the current region. It can be configured to allow downloads from both private and public networks, only the private network, or a designated vpc or ip within the private network.
 * @method Models\ModifyBackupDownloadUserRestrictionResponse ModifyBackupDownloadUserRestriction(Models\ModifyBackupDownloadUserRestrictionRequest $req) This API is used to modify the download source restrictions for backup files in the user's current region. It can be configured to allow downloads from both private and public networks, only from a private network, or from a designated vpc or ip within the private network.
 * @method Models\ModifyBackupNameResponse ModifyBackupName(Models\ModifyBackupNameRequest $req) This API is used to rename a backup file.
 * @method Models\ModifyBinlogConfigResponse ModifyBinlogConfig(Models\ModifyBinlogConfigRequest $req) This API is used to modify Binlog configuration.
 * @method Models\ModifyBinlogSaveDaysResponse ModifyBinlogSaveDays(Models\ModifyBinlogSaveDaysRequest $req) This API is used to modify the binlog retention period in days.
 * @method Models\ModifyClusterDatabaseResponse ModifyClusterDatabase(Models\ModifyClusterDatabaseRequest $req) This API is used to modify account authorization of a database.
 * @method Models\ModifyClusterNameResponse ModifyClusterName(Models\ModifyClusterNameRequest $req) This API is used to modify cluster names.
 * @method Models\ModifyClusterParamResponse ModifyClusterParam(Models\ModifyClusterParamRequest $req) This API is used to modify cluster parameters.
 * @method Models\ModifyClusterPasswordComplexityResponse ModifyClusterPasswordComplexity(Models\ModifyClusterPasswordComplexityRequest $req) This API is used to modify or enable cluster password complexity.
 * @method Models\ModifyClusterReadOnlyResponse ModifyClusterReadOnly(Models\ModifyClusterReadOnlyRequest $req) This API is used to modify the read-only switch of a cluster.
 * @method Models\ModifyClusterSlaveZoneResponse ModifyClusterSlaveZone(Models\ModifyClusterSlaveZoneRequest $req) This API is used to modify the slave availability zone of a cluster.
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) This API is used to modify the security group bound to the instance.
 * @method Models\ModifyInstanceNameResponse ModifyInstanceName(Models\ModifyInstanceNameRequest $req) This API is used to modify instance name.
 * @method Models\ModifyInstanceParamResponse ModifyInstanceParam(Models\ModifyInstanceParamRequest $req) This API is used to modify the instance parameters.
 * @method Models\ModifyMaintainPeriodConfigResponse ModifyMaintainPeriodConfig(Models\ModifyMaintainPeriodConfigRequest $req) This API is used to modify maintenance time configuration.
 * @method Models\ModifyParamTemplateResponse ModifyParamTemplate(Models\ModifyParamTemplateRequest $req) This API is used to modify a parameter template.
 * @method Models\ModifyProxyDescResponse ModifyProxyDesc(Models\ModifyProxyDescRequest $req) This API is used to modify the description of a database proxy.
 * @method Models\ModifyProxyRwSplitResponse ModifyProxyRwSplit(Models\ModifyProxyRwSplitRequest $req) This API is used to configure read-write separation for database proxy.
 * @method Models\ModifyResourcePackageClustersResponse ModifyResourcePackageClusters(Models\ModifyResourcePackageClustersRequest $req) This API is used to modify the binding relationship between resource packages and clusters.
 * @method Models\ModifyResourcePackageNameResponse ModifyResourcePackageName(Models\ModifyResourcePackageNameRequest $req) This API is used to modify resource package name.
 * @method Models\ModifyResourcePackagesDeductionPriorityResponse ModifyResourcePackagesDeductionPriority(Models\ModifyResourcePackagesDeductionPriorityRequest $req) This API is used to modify the deduction priority of the bound resource package.
 * @method Models\ModifyServerlessStrategyResponse ModifyServerlessStrategy(Models\ModifyServerlessStrategyRequest $req) This API is used to modify the serverless policy.
 * @method Models\ModifyVipVportResponse ModifyVipVport(Models\ModifyVipVportRequest $req) This API is used to modify the ip and port of an instance group.
 * @method Models\OfflineClusterResponse OfflineCluster(Models\OfflineClusterRequest $req) This interface (OfflineCluster) is used to terminate clusters.
 * @method Models\OfflineInstanceResponse OfflineInstance(Models\OfflineInstanceRequest $req) This interface (OfflineInstance) is used to terminate an instance.
 * @method Models\OpenAuditServiceResponse OpenAuditService(Models\OpenAuditServiceRequest $req) This API is used to enable database audit service for an instance.
 * @method Models\OpenClusterPasswordComplexityResponse OpenClusterPasswordComplexity(Models\OpenClusterPasswordComplexityRequest $req) This API is used to enable the custom password complexity feature.
 * @method Models\OpenClusterReadOnlyInstanceGroupAccessResponse OpenClusterReadOnlyInstanceGroupAccess(Models\OpenClusterReadOnlyInstanceGroupAccessRequest $req) This API is used to enable read-only instance group access.
 * @method Models\OpenClusterTransparentEncryptResponse OpenClusterTransparentEncrypt(Models\OpenClusterTransparentEncryptRequest $req) Enable transparent data encryption for the cluster.
 * @method Models\OpenReadOnlyInstanceExclusiveAccessResponse OpenReadOnlyInstanceExclusiveAccess(Models\OpenReadOnlyInstanceExclusiveAccessRequest $req) This interface (OpenReadOnlyInstanceExclusiveAccess) is used to enable the dedicated access access group for a read-only instance.
 * @method Models\OpenWanResponse OpenWan(Models\OpenWanRequest $req) This interface (OpenWan) is used to enable external network.
 * @method Models\PauseServerlessResponse PauseServerless(Models\PauseServerlessRequest $req) This API is used to suspend a serverless cluster.
 * @method Models\RefundResourcePackageResponse RefundResourcePackage(Models\RefundResourcePackageRequest $req) This API is used to refund a resource package.
 * @method Models\ReloadBalanceProxyNodeResponse ReloadBalanceProxyNode(Models\ReloadBalanceProxyNodeRequest $req) This API is used to reload the database proxy of Cloud Load Balancer.
 * @method Models\RemoveClusterSlaveZoneResponse RemoveClusterSlaveZone(Models\RemoveClusterSlaveZoneRequest $req) This API is used to disable multi-AZ deployment for a cluster.
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) This API is used to modify the database account password.
 * @method Models\RestartInstanceResponse RestartInstance(Models\RestartInstanceRequest $req) This API is used to reboot an instance.
 * @method Models\ResumeServerlessResponse ResumeServerless(Models\ResumeServerlessRequest $req) This API is used to restore a serverless cluster.
 * @method Models\SearchClusterDatabasesResponse SearchClusterDatabases(Models\SearchClusterDatabasesRequest $req) This API is used to search cluster database lists.
 * @method Models\SearchClusterTablesResponse SearchClusterTables(Models\SearchClusterTablesRequest $req) This API is used to search cluster data table lists.
 * @method Models\SetRenewFlagResponse SetRenewFlag(Models\SetRenewFlagRequest $req) This API is used to set the auto-renewal feature of an instance.
 * @method Models\SwitchClusterVpcResponse SwitchClusterVpc(Models\SwitchClusterVpcRequest $req) This API is used to replace the cluster vpc.
 * @method Models\SwitchClusterZoneResponse SwitchClusterZone(Models\SwitchClusterZoneRequest $req) This API is used to switch the primary and secondary AZs of a cluster.
 * @method Models\SwitchProxyVpcResponse SwitchProxyVpc(Models\SwitchProxyVpcRequest $req) This API is used to replace the vpc of the database proxy.
 * @method Models\UnbindClusterResourcePackagesResponse UnbindClusterResourcePackages(Models\UnbindClusterResourcePackagesRequest $req) This API is used to unbind resource packages from clusters.
 * @method Models\UpgradeClusterVersionResponse UpgradeClusterVersion(Models\UpgradeClusterVersionRequest $req) This interface (UpgradeClusterVersion) is used to update the kernel minor version.
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) This interface (UpgradeInstance) is used to upgrade instances.
 * @method Models\UpgradeProxyResponse UpgradeProxy(Models\UpgradeProxyRequest $req) This API is used to upgrade database proxy configuration.
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
