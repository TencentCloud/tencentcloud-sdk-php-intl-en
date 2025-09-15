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

namespace TencentCloud\Sqlserver\V20180328;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Sqlserver\V20180328\Models as Models;

/**
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) This API is used to bind security groups to instances in batches.
 * @method Models\BalanceReadOnlyGroupResponse BalanceReadOnlyGroup(Models\BalanceReadOnlyGroupRequest $req) This API is used to balance the routing weight of each read-only instance according to the predefined weights. The DescribeReadOnlyGroupAutoWeight API is used to query the predefined weights.
 * @method Models\CloneDBResponse CloneDB(Models\CloneDBRequest $req) This API is used to clone and rename databases of an instance. The clones are still in the instance from which they are cloned.
 * @method Models\CloseInterCommunicationResponse CloseInterCommunication(Models\CloseInterCommunicationRequest $req) This API is used to disable instance interconnection.
 * @method Models\CompleteExpansionResponse CompleteExpansion(Models\CompleteExpansionRequest $req) This API is used to complete the instance upgrade and switch immediately without waiting for the maintenance window when the instance status is "upgrade pending switch" after scale-out is initiated. This API needs to be called during off-peak hours of the instance. Some databases cannot be accessed before the switch is completed.
 * @method Models\CompleteMigrationResponse CompleteMigration(Models\CompleteMigrationRequest $req) This API is used to complete a migration task.
 * @method Models\CreateAccountResponse CreateAccount(Models\CreateAccountRequest $req) This API is used to create an instance account.
 * @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) This API is used to create a backup.
 * @method Models\CreateBackupMigrationResponse CreateBackupMigration(Models\CreateBackupMigrationRequest $req) This API is used to create a backup import task.
 * @method Models\CreateBasicDBInstancesResponse CreateBasicDBInstances(Models\CreateBasicDBInstancesRequest $req) This API is used to create basic edition instances (cloud disk).
 * @method Models\CreateBusinessDBInstancesResponse CreateBusinessDBInstances(Models\CreateBusinessDBInstancesRequest $req) This API is used to create business intelligence service instances (cloud disk).
 * @method Models\CreateBusinessIntelligenceFileResponse CreateBusinessIntelligenceFile(Models\CreateBusinessIntelligenceFileRequest $req) This API is used to add a business intelligence service file.
 * @method Models\CreateCloudDBInstancesResponse CreateCloudDBInstances(Models\CreateCloudDBInstancesRequest $req) This API is used to create high-availability instances (cloud disk).
 * @method Models\CreateCloudReadOnlyDBInstancesResponse CreateCloudReadOnlyDBInstances(Models\CreateCloudReadOnlyDBInstancesRequest $req) This API is used to create read-only instances (cloud disk).
 * @method Models\CreateDBResponse CreateDB(Models\CreateDBRequest $req) This API is used to create a database.
 * @method Models\CreateDBInstancesResponse CreateDBInstances(Models\CreateDBInstancesRequest $req) This API is used to create high-availability instances (local disk).
 * @method Models\CreateIncrementalMigrationResponse CreateIncrementalMigration(Models\CreateIncrementalMigrationRequest $req) This API is used to create an incremental backup import task.
 * @method Models\CreateMigrationResponse CreateMigration(Models\CreateMigrationRequest $req) This API is used to create a migration task.
 * @method Models\CreatePublishSubscribeResponse CreatePublishSubscribe(Models\CreatePublishSubscribeRequest $req) This API is used to create a publish/subscribe relationship between two databases. A subscriber cannot act as a publisher, and a publisher can have multiple subscriber instances.
 * @method Models\CreateReadOnlyDBInstancesResponse CreateReadOnlyDBInstances(Models\CreateReadOnlyDBInstancesRequest $req) This API is used to create read-only instances (local disk).
 * @method Models\CutXEventsResponse CutXEvents(Models\CutXEventsRequest $req) This API is used to manually cut block logs and deadlock logs.
 * @method Models\DeleteAccountResponse DeleteAccount(Models\DeleteAccountRequest $req) This API is used to delete an instance account.
 * @method Models\DeleteBackupMigrationResponse DeleteBackupMigration(Models\DeleteBackupMigrationRequest $req) This API is used to delete a backup import task.
 * @method Models\DeleteBusinessIntelligenceFileResponse DeleteBusinessIntelligenceFile(Models\DeleteBusinessIntelligenceFileRequest $req) This API is used to delete a business intelligence service file.
 * @method Models\DeleteDBResponse DeleteDB(Models\DeleteDBRequest $req) This API is used to drop a database.
 * @method Models\DeleteDBInstanceResponse DeleteDBInstance(Models\DeleteDBInstanceRequest $req) This API is used to release SQL server instances (eliminated immediately) in the recycle bin. The released instances will be physically terminated after being retained for a period of time. Their publish-subscribe relationships will be automatically disassociated, and their RO replicas will be automatically released.
 * @method Models\DeleteIncrementalMigrationResponse DeleteIncrementalMigration(Models\DeleteIncrementalMigrationRequest $req) This API is used to delete an incremental backup import task.
 * @method Models\DeleteMigrationResponse DeleteMigration(Models\DeleteMigrationRequest $req) This API is used to delete a migration task.
 * @method Models\DeletePublishSubscribeResponse DeletePublishSubscribe(Models\DeletePublishSubscribeRequest $req) This API is used to delete the publish/subscribe relationship between two databases.
 * @method Models\DescribeAccountPrivilegeByDBResponse DescribeAccountPrivilegeByDB(Models\DescribeAccountPrivilegeByDBRequest $req) This API is used to query information on the account and permissions associated with the database.
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) This API is used to pull the list of instance accounts.
 * @method Models\DescribeBackupByFlowIdResponse DescribeBackupByFlowId(Models\DescribeBackupByFlowIdRequest $req) This API is used to query the created backup details through the backup creation process ID. The process ID can be obtained through the CreateBackup API.
 * @method Models\DescribeBackupCommandResponse DescribeBackupCommand(Models\DescribeBackupCommandRequest $req) This API is used to query the commands of creating backups canonically.
 * @method Models\DescribeBackupFilesResponse DescribeBackupFiles(Models\DescribeBackupFilesRequest $req) This API is used to query the details of an unarchived backup.
 * @method Models\DescribeBackupMigrationResponse DescribeBackupMigration(Models\DescribeBackupMigrationRequest $req) This API is used to create an incremental backup import task.
 * @method Models\DescribeBackupMonitorResponse DescribeBackupMonitor(Models\DescribeBackupMonitorRequest $req) This API is used to query backup space usage details.
 * @method Models\DescribeBackupStatisticalResponse DescribeBackupStatistical(Models\DescribeBackupStatisticalRequest $req) This API is used to query the real-time statistics list of backups.
 * @method Models\DescribeBackupSummaryResponse DescribeBackupSummary(Models\DescribeBackupSummaryRequest $req) This API is used to query the backup overview information of databases.
 * @method Models\DescribeBackupUploadSizeResponse DescribeBackupUploadSize(Models\DescribeBackupUploadSizeRequest $req) This API is used to query the size of uploaded backup files. It is valid if the backup file type is `COS_UPLOAD` (the file is stored in COS).
 * @method Models\DescribeBackupsResponse DescribeBackups(Models\DescribeBackupsRequest $req) This API is used to query the list of backups.
 * @method Models\DescribeBusinessIntelligenceFileResponse DescribeBusinessIntelligenceFile(Models\DescribeBusinessIntelligenceFileRequest $req) This API is used to query the files required by business intelligence service.
 * @method Models\DescribeCollationTimeZoneResponse DescribeCollationTimeZone(Models\DescribeCollationTimeZoneRequest $req) This API is used to query the character set and time zone supported by the instance.
 * @method Models\DescribeCrossBackupStatisticalResponse DescribeCrossBackupStatistical(Models\DescribeCrossBackupStatisticalRequest $req) This API is used to query the real-time statistics list of cross-region backups.
 * @method Models\DescribeCrossRegionZoneResponse DescribeCrossRegionZone(Models\DescribeCrossRegionZoneRequest $req) This API is used to query the disaster recovery region and AZ of the secondary node based on the primary instance.
 * @method Models\DescribeCrossRegionsResponse DescribeCrossRegions(Models\DescribeCrossRegionsRequest $req) This API is used to query the target region for cross-region backups.
 * @method Models\DescribeDBCharsetsResponse DescribeDBCharsets(Models\DescribeDBCharsetsRequest $req) This API is used to query the database character sets supported by an instance.
 * @method Models\DescribeDBInstanceInterResponse DescribeDBInstanceInter(Models\DescribeDBInstanceInterRequest $req) This API is used to query the information of the interconnected instances.
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) This API is used to query the list of instances.
 * @method Models\DescribeDBInstancesAttributeResponse DescribeDBInstancesAttribute(Models\DescribeDBInstancesAttributeRequest $req) This API is used to query the attributes of an instance.
 * @method Models\DescribeDBPrivilegeByAccountResponse DescribeDBPrivilegeByAccount(Models\DescribeDBPrivilegeByAccountRequest $req) This API is used to query information on the databases and permissions associated with the account.
 * @method Models\DescribeDBRestoreTimeResponse DescribeDBRestoreTime(Models\DescribeDBRestoreTimeRequest $req) This API is used to query databases that can be rolled back.
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) This API is used to query the security group details of instances.
 * @method Models\DescribeDBsResponse DescribeDBs(Models\DescribeDBsRequest $req) This API is used to query the list of databases
 * @method Models\DescribeDBsNormalResponse DescribeDBsNormal(Models\DescribeDBsNormalRequest $req) This API is used to query database configurations. It does not return information of the accounts that have permissions to operate the database.
 * @method Models\DescribeDatabaseNamesResponse DescribeDatabaseNames(Models\DescribeDatabaseNamesRequest $req) This API is used to query the database name associated with the account.
 * @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) This API is used to query the database list.
 * @method Models\DescribeDatabasesNormalResponse DescribeDatabasesNormal(Models\DescribeDatabasesNormalRequest $req) This API is used to query database configuration information. This API does not contain accounts associated with databases.
 * @method Models\DescribeFlowStatusResponse DescribeFlowStatus(Models\DescribeFlowStatusRequest $req) This API is used to query flow status.
 * @method Models\DescribeHASwitchLogResponse DescribeHASwitchLog(Models\DescribeHASwitchLogRequest $req) This API is used to perform the manual primary-secondary switch.
 * @method Models\DescribeIncrementalMigrationResponse DescribeIncrementalMigration(Models\DescribeIncrementalMigrationRequest $req) This API is used to query an incremental backup import task.
 * @method Models\DescribeInstanceByOrdersResponse DescribeInstanceByOrders(Models\DescribeInstanceByOrdersRequest $req) This API is used to query the instance ID by the order number.
 * @method Models\DescribeInstanceParamRecordsResponse DescribeInstanceParamRecords(Models\DescribeInstanceParamRecordsRequest $req) This API is used to query the parameter modification records of an instance.
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) This API is used to query the parameter list of an instance.
 * @method Models\DescribeInstanceTasksResponse DescribeInstanceTasks(Models\DescribeInstanceTasksRequest $req) This API is used to query the list of asynchronous tasks related to an instance.
 * @method Models\DescribeInstanceTradeParameterResponse DescribeInstanceTradeParameter(Models\DescribeInstanceTradeParameterRequest $req) This API is used to query the instance billing parameters.
 * @method Models\DescribeMaintenanceSpanResponse DescribeMaintenanceSpan(Models\DescribeMaintenanceSpanRequest $req) This API is used to query the maintenance time window of an instance based on its instance ID.
 * @method Models\DescribeMigrationDatabasesResponse DescribeMigrationDatabases(Models\DescribeMigrationDatabasesRequest $req) This API is used to query the list of databases to be migrated.
 * @method Models\DescribeMigrationDetailResponse DescribeMigrationDetail(Models\DescribeMigrationDetailRequest $req) This API is used to query migration task details.
 * @method Models\DescribeMigrationsResponse DescribeMigrations(Models\DescribeMigrationsRequest $req) This API is used to query the list of eligible migration tasks based on the entered criteria.
 * @method Models\DescribeOrdersResponse DescribeOrders(Models\DescribeOrdersRequest $req) This API is used to query order information.
 * @method Models\DescribeProductConfigResponse DescribeProductConfig(Models\DescribeProductConfigRequest $req) This API is used to query purchasable specification configuration.
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) This API is used to query security group details of a project.
 * @method Models\DescribePublishSubscribeResponse DescribePublishSubscribe(Models\DescribePublishSubscribeRequest $req) This API is used to query the publish/subscribe relationship list.
 * @method Models\DescribeReadOnlyGroupAutoWeightResponse DescribeReadOnlyGroupAutoWeight(Models\DescribeReadOnlyGroupAutoWeightRequest $req) This API is used to query the automatic weight assignment result of the read-only group. The BalanceReadOnlyGroup API is used to perform routing weight assignment according to the automatic weight assignment result.
 * @method Models\DescribeReadOnlyGroupByReadOnlyInstanceResponse DescribeReadOnlyGroupByReadOnlyInstance(Models\DescribeReadOnlyGroupByReadOnlyInstanceRequest $req) This API is used to query the read-only group where the read-only instance is located by its ID.
 * @method Models\DescribeReadOnlyGroupDetailsResponse DescribeReadOnlyGroupDetails(Models\DescribeReadOnlyGroupDetailsRequest $req) This API is used to query read-only group details.
 * @method Models\DescribeReadOnlyGroupListResponse DescribeReadOnlyGroupList(Models\DescribeReadOnlyGroupListRequest $req) This API is used to query the read-only group list.
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) This API is used to query purchasable regions.
 * @method Models\DescribeRegularBackupPlanResponse DescribeRegularBackupPlan(Models\DescribeRegularBackupPlanRequest $req) This API is used to query the scheduled backup retention plans of instances.
 * @method Models\DescribeRestoreTaskResponse DescribeRestoreTask(Models\DescribeRestoreTaskRequest $req) This API is used to query the list of rollback tasks.
 * @method Models\DescribeRestoreTimeRangeResponse DescribeRestoreTimeRange(Models\DescribeRestoreTimeRangeRequest $req) This API is used to query the time range available for rollback by time point.
 * @method Models\DescribeRollbackTimeResponse DescribeRollbackTime(Models\DescribeRollbackTimeRequest $req) This API is used to query the time range available for instance rollback.
 * @method Models\DescribeSlowlogsResponse DescribeSlowlogs(Models\DescribeSlowlogsRequest $req) This API is used to get file information of slow query logs.
 * @method Models\DescribeSpecSellStatusResponse DescribeSpecSellStatus(Models\DescribeSpecSellStatusRequest $req) This API is used to query the status information on specifications, including the sales status and reference price. (The actual price is subject to the result returned by price querying APIs.)
 * @method Models\DescribeUpgradeInstanceCheckResponse DescribeUpgradeInstanceCheck(Models\DescribeUpgradeInstanceCheckRequest $req) This API is used to pre-check the impact of the instance configuration adjustment before the adjustment.
 * @method Models\DescribeUploadBackupInfoResponse DescribeUploadBackupInfo(Models\DescribeUploadBackupInfoRequest $req) This API is used to query a backup upload permission.
 * @method Models\DescribeXEventsResponse DescribeXEvents(Models\DescribeXEventsRequest $req) This API is used to query the list of extended events.
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) This API is used to query currently purchasable AZs.
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) This API is used to unbind security groups from instances in batches.
 * @method Models\InquiryPriceCreateDBInstancesResponse InquiryPriceCreateDBInstances(Models\InquiryPriceCreateDBInstancesRequest $req) This API is used to query the price of requested instances.
 * @method Models\InquiryPriceUpgradeDBInstanceResponse InquiryPriceUpgradeDBInstance(Models\InquiryPriceUpgradeDBInstanceRequest $req) This API is used to query the upgrade prices of a monthly subscribed instance.
.
 * @method Models\ModifyAccountPrivilegeResponse ModifyAccountPrivilege(Models\ModifyAccountPrivilegeRequest $req) This API is used to modify instance account permissions.
 * @method Models\ModifyAccountRemarkResponse ModifyAccountRemark(Models\ModifyAccountRemarkRequest $req) This API is used to modify account remarks.
 * @method Models\ModifyBackupMigrationResponse ModifyBackupMigration(Models\ModifyBackupMigrationRequest $req) This API is used to modify a backup import task.
 * @method Models\ModifyBackupNameResponse ModifyBackupName(Models\ModifyBackupNameRequest $req) This API is used to modify the name of a backup task.
 * @method Models\ModifyBackupStrategyResponse ModifyBackupStrategy(Models\ModifyBackupStrategyRequest $req) This API is used to modify the backup policy.
 * @method Models\ModifyCloseWanIpResponse ModifyCloseWanIp(Models\ModifyCloseWanIpRequest $req) This API is used to disable the public network for the instance.
 * @method Models\ModifyCrossBackupStrategyResponse ModifyCrossBackupStrategy(Models\ModifyCrossBackupStrategyRequest $req) This API is used to enable or disable cross-region backup policies.
 * @method Models\ModifyDBEncryptAttributesResponse ModifyDBEncryptAttributes(Models\ModifyDBEncryptAttributesRequest $req) This API is used to enable or disable TDE of a database.
 * @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) This API is used to rename an instance.
 * @method Models\ModifyDBInstanceNetworkResponse ModifyDBInstanceNetwork(Models\ModifyDBInstanceNetworkRequest $req) This API is used to switch a running instance from a VPC to another.
 * @method Models\ModifyDBInstanceNoteResponse ModifyDBInstanceNote(Models\ModifyDBInstanceNoteRequest $req) This API is used to modify the instance remarks.
 * @method Models\ModifyDBInstanceProjectResponse ModifyDBInstanceProject(Models\ModifyDBInstanceProjectRequest $req) This API is used to modify the project to which a database instance belongs.
 * @method Models\ModifyDBInstanceSSLResponse ModifyDBInstanceSSL(Models\ModifyDBInstanceSSLRequest $req) This API is used to enable/disable/update SSL encryption.
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) This API is used to modify security groups bound to an instance.
 * @method Models\ModifyDBNameResponse ModifyDBName(Models\ModifyDBNameRequest $req) This API is used to rename a database.
 * @method Models\ModifyDBRemarkResponse ModifyDBRemark(Models\ModifyDBRemarkRequest $req) This API is used to modify database remarks.
 * @method Models\ModifyDReadableResponse ModifyDReadable(Models\ModifyDReadableRequest $req) This API is used to enable or disable the read-only feature of the replica server.
 * @method Models\ModifyDatabaseCDCResponse ModifyDatabaseCDC(Models\ModifyDatabaseCDCRequest $req) This API is used to enable or disable the change data capture (CDC) feature.
 * @method Models\ModifyDatabaseCTResponse ModifyDatabaseCT(Models\ModifyDatabaseCTRequest $req) This API is used to enable or disable the change tracking (CT) feature.
 * @method Models\ModifyDatabaseMdfResponse ModifyDatabaseMdf(Models\ModifyDatabaseMdfRequest $req) This API is used to shrink database MDF files.
 * @method Models\ModifyDatabasePrivilegeResponse ModifyDatabasePrivilege(Models\ModifyDatabasePrivilegeRequest $req) This API is used to modify instance database permissions.
 * @method Models\ModifyDatabaseShrinkMDFResponse ModifyDatabaseShrinkMDF(Models\ModifyDatabaseShrinkMDFRequest $req) This API is used to shrink the database mdf (Shrink mdf).
 * @method Models\ModifyIncrementalMigrationResponse ModifyIncrementalMigration(Models\ModifyIncrementalMigrationRequest $req) This API is used to modify an incremental backup import task.
 * @method Models\ModifyInstanceEncryptAttributesResponse ModifyInstanceEncryptAttributes(Models\ModifyInstanceEncryptAttributesRequest $req) This API is used to enable TDE of an instance.
 * @method Models\ModifyInstanceParamResponse ModifyInstanceParam(Models\ModifyInstanceParamRequest $req) This API is used to modify instance parameters.
<b>Note</b>: if <b>the instance needs to be restarted</b> for the modified parameter to take effect, <b>it will be restarted</b> immediately or during the maintenance time according to the `WaitSwitch` parameter.
Before you modify a parameter, you can use the `DescribeInstanceParams` API to query whether the instance needs to be restarted.
 * @method Models\ModifyMaintenanceSpanResponse ModifyMaintenanceSpan(Models\ModifyMaintenanceSpanRequest $req) This API is used to modify the maintenance window of the instance.
 * @method Models\ModifyMigrationResponse ModifyMigration(Models\ModifyMigrationRequest $req) This API is used to modify an existing migration task.
 * @method Models\ModifyOpenWanIpResponse ModifyOpenWanIp(Models\ModifyOpenWanIpRequest $req) This API is used to enable the public network for the instance.
 * @method Models\ModifyPublishSubscribeResponse ModifyPublishSubscribe(Models\ModifyPublishSubscribeRequest $req) This API is used to modify the publish/subscribe relationship of the instance.
 * @method Models\ModifyPublishSubscribeNameResponse ModifyPublishSubscribeName(Models\ModifyPublishSubscribeNameRequest $req) This API is used to modify the publish/subscribe names.
 * @method Models\ModifyReadOnlyGroupDetailsResponse ModifyReadOnlyGroupDetails(Models\ModifyReadOnlyGroupDetailsRequest $req) This API is used to modify read-only group details.
 * @method Models\OpenInterCommunicationResponse OpenInterCommunication(Models\OpenInterCommunicationRequest $req) This API is used to enable instance interconnection, which can interconnect business intelligence services.
 * @method Models\QueryMigrationCheckProcessResponse QueryMigrationCheckProcess(Models\QueryMigrationCheckProcessRequest $req) This API is used to query the progress of the migration verification task, inquiry of migration check task progress, applicable to the migration method where the migration source type is TencentDB for SQL Server.
 * @method Models\RecycleDBInstanceResponse RecycleDBInstance(Models\RecycleDBInstanceRequest $req) This API is used to return a deactivated SQL Server instance.
 * @method Models\RecycleReadOnlyGroupResponse RecycleReadOnlyGroup(Models\RecycleReadOnlyGroupRequest $req) This API is used to reclaim resources of read-only groups immediately. The resources, such as VIP, occupied by the read-only group will be released immediately and cannot be recovered.
 * @method Models\RemoveBackupsResponse RemoveBackups(Models\RemoveBackupsRequest $req) This API is used to delete backup files created by users manually. The backup policy to be deleted can be instance backup or multi-database backup.
 * @method Models\RenewPostpaidDBInstanceResponse RenewPostpaidDBInstance(Models\RenewPostpaidDBInstanceRequest $req) This API is used to recover the pay-as-you-go instance that is manually isolated through the API TerminateDBInstance from the recycle bin.
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) This API is used to reset the account password of an instance.
 * @method Models\RestartDBInstanceResponse RestartDBInstance(Models\RestartDBInstanceRequest $req) This API is used to restart a database instance.
 * @method Models\RestoreInstanceResponse RestoreInstance(Models\RestoreInstanceRequest $req) This API is used to roll back the database by backup set.
 * @method Models\RollbackInstanceResponse RollbackInstance(Models\RollbackInstanceRequest $req) This API is used to roll back the instance by time point.
 * @method Models\RunMigrationResponse RunMigration(Models\RunMigrationRequest $req) This API is used to start running a migration task.
 * @method Models\StartBackupMigrationResponse StartBackupMigration(Models\StartBackupMigrationRequest $req) This API is used to start a backup import task.
 * @method Models\StartIncrementalMigrationResponse StartIncrementalMigration(Models\StartIncrementalMigrationRequest $req) This API is used to start an incremental backup import task.
 * @method Models\StartInstanceXEventResponse StartInstanceXEvent(Models\StartInstanceXEventRequest $req) This API is used to start and stop an extended event.
 * @method Models\SwitchCloudInstanceHAResponse SwitchCloudInstanceHA(Models\SwitchCloudInstanceHARequest $req) This API is used to manually switch between primary and secondary.
 * @method Models\TerminateDBInstanceResponse TerminateDBInstance(Models\TerminateDBInstanceRequest $req) This API is used to isolate an instance to move it into a recycle bin.
 * @method Models\UpgradeDBInstanceResponse UpgradeDBInstance(Models\UpgradeDBInstanceRequest $req) This API is used to upgrade an instance.
 */

class SqlserverClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "sqlserver.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "sqlserver";

    /**
     * @var string
     */
    protected $version = "2018-03-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("sqlserver")."\\"."V20180328\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
