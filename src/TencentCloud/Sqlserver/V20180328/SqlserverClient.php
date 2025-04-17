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

namespace TencentCloud\Sqlserver\V20180328;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Sqlserver\V20180328\Models as Models;

/**
 * @method Models\CloneDBResponse CloneDB(Models\CloneDBRequest $req) This API is used to clone and rename databases of an instance. The clones are still in the instance from which they are cloned.
 * @method Models\CloseInterCommunicationResponse CloseInterCommunication(Models\CloseInterCommunicationRequest $req) This API is used to disable instance interconnection.
 * @method Models\CreateAccountResponse CreateAccount(Models\CreateAccountRequest $req) This API is used to create an instance account.
 * @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) This API is used to create a backup.
 * @method Models\CreateBackupMigrationResponse CreateBackupMigration(Models\CreateBackupMigrationRequest $req) This API is used to create a backup import task.
 * @method Models\CreateBasicDBInstancesResponse CreateBasicDBInstances(Models\CreateBasicDBInstancesRequest $req) This API is used to create basic edition instances (cloud disk).
 * @method Models\CreateBusinessDBInstancesResponse CreateBusinessDBInstances(Models\CreateBusinessDBInstancesRequest $req) This API is used to create business intelligence service instances (cloud disk).
 * @method Models\CreateBusinessIntelligenceFileResponse CreateBusinessIntelligenceFile(Models\CreateBusinessIntelligenceFileRequest $req) This API is used to add a business intelligence service file.
 * @method Models\CreateCloudDBInstancesResponse CreateCloudDBInstances(Models\CreateCloudDBInstancesRequest $req) This API is used to create high-availability instances (cloud disk).
 * @method Models\CreateCloudReadOnlyDBInstancesResponse CreateCloudReadOnlyDBInstances(Models\CreateCloudReadOnlyDBInstancesRequest $req) This API is used to create read-only instances (cloud disk).
 * @method Models\CreateDBResponse CreateDB(Models\CreateDBRequest $req) This API is used to create a database.
 * @method Models\CreateDBInstancesResponse CreateDBInstances(Models\CreateDBInstancesRequest $req) This API is used to create high-availability instances (local disk)
 * @method Models\CreateIncrementalMigrationResponse CreateIncrementalMigration(Models\CreateIncrementalMigrationRequest $req) This API is used to create an incremental backup import task.
 * @method Models\CreateMigrationResponse CreateMigration(Models\CreateMigrationRequest $req) This API is used to create a migration task.
 * @method Models\CreateReadOnlyDBInstancesResponse CreateReadOnlyDBInstances(Models\CreateReadOnlyDBInstancesRequest $req) This API is used to create read-only instances (local disk).
 * @method Models\DeleteAccountResponse DeleteAccount(Models\DeleteAccountRequest $req) This API is used to delete an instance account.
 * @method Models\DeleteBackupMigrationResponse DeleteBackupMigration(Models\DeleteBackupMigrationRequest $req) This API is used to delete a backup import task.
 * @method Models\DeleteBusinessIntelligenceFileResponse DeleteBusinessIntelligenceFile(Models\DeleteBusinessIntelligenceFileRequest $req) This API is used to delete a business intelligence service file.
 * @method Models\DeleteDBResponse DeleteDB(Models\DeleteDBRequest $req) This API is used to drop a database.
 * @method Models\DeleteIncrementalMigrationResponse DeleteIncrementalMigration(Models\DeleteIncrementalMigrationRequest $req) This API is used to delete an incremental backup import task.
 * @method Models\DeleteMigrationResponse DeleteMigration(Models\DeleteMigrationRequest $req) This API is used to delete a migration task.
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) This API is used to pull the list of instance accounts.
 * @method Models\DescribeBackupCommandResponse DescribeBackupCommand(Models\DescribeBackupCommandRequest $req) This API is used to query the commands of creating backups canonically.
 * @method Models\DescribeBackupFilesResponse DescribeBackupFiles(Models\DescribeBackupFilesRequest $req) This API is used to query the details of an unarchived backup.
 * @method Models\DescribeBackupMigrationResponse DescribeBackupMigration(Models\DescribeBackupMigrationRequest $req) This API is used to create an incremental backup import task.
 * @method Models\DescribeBackupUploadSizeResponse DescribeBackupUploadSize(Models\DescribeBackupUploadSizeRequest $req) This API is used to query the size of uploaded backup files. It is valid if the backup file type is `COS_UPLOAD` (the file is stored in COS).
 * @method Models\DescribeBackupsResponse DescribeBackups(Models\DescribeBackupsRequest $req) This API is used to query the list of backups.
 * @method Models\DescribeBusinessIntelligenceFileResponse DescribeBusinessIntelligenceFile(Models\DescribeBusinessIntelligenceFileRequest $req) This API is used to query the files required by business intelligence service.
 * @method Models\DescribeDBCharsetsResponse DescribeDBCharsets(Models\DescribeDBCharsetsRequest $req) This API is used to query the database character sets supported by an instance.
 * @method Models\DescribeDBInstanceInterResponse DescribeDBInstanceInter(Models\DescribeDBInstanceInterRequest $req) This API is used to query the information of the interconnected instances.
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) This API is used to query the list of instances.
 * @method Models\DescribeDBInstancesAttributeResponse DescribeDBInstancesAttribute(Models\DescribeDBInstancesAttributeRequest $req) This API is used to query the attributes of an instance.
 * @method Models\DescribeDBsResponse DescribeDBs(Models\DescribeDBsRequest $req) This API is used to query the list of databases
 * @method Models\DescribeDBsNormalResponse DescribeDBsNormal(Models\DescribeDBsNormalRequest $req) This API is used to query database configurations. It does not return information of the accounts that have permissions to operate the database.
 * @method Models\DescribeFlowStatusResponse DescribeFlowStatus(Models\DescribeFlowStatusRequest $req) This API is used to query flow status.
 * @method Models\DescribeIncrementalMigrationResponse DescribeIncrementalMigration(Models\DescribeIncrementalMigrationRequest $req) This API is used to query an incremental backup import task.
 * @method Models\DescribeInstanceByOrdersResponse DescribeInstanceByOrders(Models\DescribeInstanceByOrdersRequest $req) This API is used to query the instance ID by the order number.
 * @method Models\DescribeInstanceParamRecordsResponse DescribeInstanceParamRecords(Models\DescribeInstanceParamRecordsRequest $req) This API is used to query the parameter modification records of an instance.
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) This API is used to query the parameter list of an instance.
 * @method Models\DescribeMaintenanceSpanResponse DescribeMaintenanceSpan(Models\DescribeMaintenanceSpanRequest $req) This API is used to query the maintenance time window of an instance based on its instance ID.
 * @method Models\DescribeMigrationDetailResponse DescribeMigrationDetail(Models\DescribeMigrationDetailRequest $req) This API is used to query migration task details.
 * @method Models\DescribeMigrationsResponse DescribeMigrations(Models\DescribeMigrationsRequest $req) This API is used to query the list of eligible migration tasks based on the entered criteria.
 * @method Models\DescribeOrdersResponse DescribeOrders(Models\DescribeOrdersRequest $req) This API is used to query order information.
 * @method Models\DescribeProductConfigResponse DescribeProductConfig(Models\DescribeProductConfigRequest $req) This API is used to query purchasable specification configuration.
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) This API is used to query purchasable regions.
 * @method Models\DescribeRestoreTimeRangeResponse DescribeRestoreTimeRange(Models\DescribeRestoreTimeRangeRequest $req) This API is used to query the time range available for rollback by time point.
 * @method Models\DescribeRollbackTimeResponse DescribeRollbackTime(Models\DescribeRollbackTimeRequest $req) This API is used to query the time range available for instance rollback.
 * @method Models\DescribeSlowlogsResponse DescribeSlowlogs(Models\DescribeSlowlogsRequest $req) This API is used to get file information of slow query logs.
 * @method Models\DescribeUploadBackupInfoResponse DescribeUploadBackupInfo(Models\DescribeUploadBackupInfoRequest $req) This API is used to query a backup upload permission.
 * @method Models\DescribeXEventsResponse DescribeXEvents(Models\DescribeXEventsRequest $req) This API is used to query the list of extended events.
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) This API is used to query currently purchasable AZs.
 * @method Models\InquiryPriceCreateDBInstancesResponse InquiryPriceCreateDBInstances(Models\InquiryPriceCreateDBInstancesRequest $req) This API is used to query the price of requested instances.
 * @method Models\InquiryPriceUpgradeDBInstanceResponse InquiryPriceUpgradeDBInstance(Models\InquiryPriceUpgradeDBInstanceRequest $req) This API is used to query the upgrade prices of a monthly subscribed instance
.
 * @method Models\ModifyAccountPrivilegeResponse ModifyAccountPrivilege(Models\ModifyAccountPrivilegeRequest $req) This API is used to modify instance account permissions.
 * @method Models\ModifyAccountRemarkResponse ModifyAccountRemark(Models\ModifyAccountRemarkRequest $req) This API is used to modify account remarks.
 * @method Models\ModifyBackupMigrationResponse ModifyBackupMigration(Models\ModifyBackupMigrationRequest $req) This API is used to modify a backup import task.
 * @method Models\ModifyBackupStrategyResponse ModifyBackupStrategy(Models\ModifyBackupStrategyRequest $req) This API is used to modify the backup policy.
 * @method Models\ModifyDBEncryptAttributesResponse ModifyDBEncryptAttributes(Models\ModifyDBEncryptAttributesRequest $req) This API is used to enable or disable TDE of a database.
 * @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) This API is used to rename an instance.
 * @method Models\ModifyDBInstanceNetworkResponse ModifyDBInstanceNetwork(Models\ModifyDBInstanceNetworkRequest $req) This API is used to switch a running instance from a VPC to another.
 * @method Models\ModifyDBInstanceProjectResponse ModifyDBInstanceProject(Models\ModifyDBInstanceProjectRequest $req) This API is used to modify the project to which a database instance belongs.
 * @method Models\ModifyDBNameResponse ModifyDBName(Models\ModifyDBNameRequest $req) This API is used to rename a database.
 * @method Models\ModifyDBRemarkResponse ModifyDBRemark(Models\ModifyDBRemarkRequest $req) This API is used to modify database remarks.
 * @method Models\ModifyDReadableResponse ModifyDReadable(Models\ModifyDReadableRequest $req) This API is used to enable or disable the read-only feature of the replica server.
 * @method Models\ModifyDatabaseCDCResponse ModifyDatabaseCDC(Models\ModifyDatabaseCDCRequest $req) This API is used to enable or disable the change data capture (CDC) feature.
 * @method Models\ModifyDatabaseCTResponse ModifyDatabaseCT(Models\ModifyDatabaseCTRequest $req) This API is used to enable or disable the change tracking (CT) feature.
 * @method Models\ModifyDatabaseMdfResponse ModifyDatabaseMdf(Models\ModifyDatabaseMdfRequest $req) This API is used to shrink database MDF files.
 * @method Models\ModifyIncrementalMigrationResponse ModifyIncrementalMigration(Models\ModifyIncrementalMigrationRequest $req) This API is used to modify an incremental backup import task.
 * @method Models\ModifyInstanceEncryptAttributesResponse ModifyInstanceEncryptAttributes(Models\ModifyInstanceEncryptAttributesRequest $req) This API is used to enable TDE of an instance.
 * @method Models\ModifyInstanceParamResponse ModifyInstanceParam(Models\ModifyInstanceParamRequest $req) This API is used to modify instance parameters.
<b>Note</b>: if <b>the instance needs to be restarted</b> for the modified parameter to take effect, <b>it will be restarted</b> immediately or during the maintenance time according to the `WaitSwitch` parameter.
Before you modify a parameter, you can use the `DescribeInstanceParams` API to query whether the instance needs to be restarted.
 * @method Models\ModifyMigrationResponse ModifyMigration(Models\ModifyMigrationRequest $req) This API is used to modify an existing migration task.
 * @method Models\OpenInterCommunicationResponse OpenInterCommunication(Models\OpenInterCommunicationRequest $req) This API is used to enable instance interconnection, which can interconnect business intelligence services.
 * @method Models\RecycleDBInstanceResponse RecycleDBInstance(Models\RecycleDBInstanceRequest $req) This API is used to return a deactivated SQL Server instance.
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) This API is used to reset the account password of an instance.
 * @method Models\RestartDBInstanceResponse RestartDBInstance(Models\RestartDBInstanceRequest $req) This API is used to restart a database instance.
 * @method Models\RestoreInstanceResponse RestoreInstance(Models\RestoreInstanceRequest $req) This API is used to roll back the database by backup set.
 * @method Models\RollbackInstanceResponse RollbackInstance(Models\RollbackInstanceRequest $req) This API is used to roll back the instance by time point.
 * @method Models\RunMigrationResponse RunMigration(Models\RunMigrationRequest $req) This API is used to start running a migration task.
 * @method Models\StartBackupMigrationResponse StartBackupMigration(Models\StartBackupMigrationRequest $req) This API is used to start a backup import task.
 * @method Models\StartIncrementalMigrationResponse StartIncrementalMigration(Models\StartIncrementalMigrationRequest $req) This API is used to start an incremental backup import task.
 * @method Models\StartInstanceXEventResponse StartInstanceXEvent(Models\StartInstanceXEventRequest $req) This API is used to start and stop an extended event.
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
