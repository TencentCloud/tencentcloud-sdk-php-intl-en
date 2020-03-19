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
* @method Models\CreateAccountResponse CreateAccount(Models\CreateAccountRequest $req) This API is used to create an instance account.
* @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) This API is used to create a backup.
* @method Models\CreateDBResponse CreateDB(Models\CreateDBRequest $req) This API is used to create a database.
* @method Models\CreateDBInstancesResponse CreateDBInstances(Models\CreateDBInstancesRequest $req) This API is used to create an instance.
* @method Models\CreateMigrationResponse CreateMigration(Models\CreateMigrationRequest $req) This API is used to create a migration task.
* @method Models\DeleteAccountResponse DeleteAccount(Models\DeleteAccountRequest $req) This API is used to delete an instance account.
* @method Models\DeleteDBResponse DeleteDB(Models\DeleteDBRequest $req) This API is used to drop a database.
* @method Models\DeleteMigrationResponse DeleteMigration(Models\DeleteMigrationRequest $req) This API is used to delete a migration task.
* @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) This API is used to pull the list of instance accounts.
* @method Models\DescribeBackupsResponse DescribeBackups(Models\DescribeBackupsRequest $req) This API is used to query the list of backups.
* @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) This API is used to query the list of instances.
* @method Models\DescribeDBsResponse DescribeDBs(Models\DescribeDBsRequest $req) This API is used to query the list of databases
* @method Models\DescribeFlowStatusResponse DescribeFlowStatus(Models\DescribeFlowStatusRequest $req) This API is used to query flow status.
* @method Models\DescribeMigrationDetailResponse DescribeMigrationDetail(Models\DescribeMigrationDetailRequest $req) This API is used to query migration task details.
* @method Models\DescribeMigrationsResponse DescribeMigrations(Models\DescribeMigrationsRequest $req) This API is used to query the list of eligible migration tasks based on the entered criteria.
* @method Models\DescribeOrdersResponse DescribeOrders(Models\DescribeOrdersRequest $req) This API is used to query order information.
* @method Models\DescribeProductConfigResponse DescribeProductConfig(Models\DescribeProductConfigRequest $req) This API is used to query purchasable specification configuration.
* @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) This API is used to query purchasable regions.
* @method Models\DescribeRollbackTimeResponse DescribeRollbackTime(Models\DescribeRollbackTimeRequest $req) This API is used to query the time range available for instance rollback.
* @method Models\DescribeSlowlogsResponse DescribeSlowlogs(Models\DescribeSlowlogsRequest $req) This API is used to get file information of slow query logs.
* @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) This API is used to query currently purchasable AZs.
* @method Models\InquiryPriceCreateDBInstancesResponse InquiryPriceCreateDBInstances(Models\InquiryPriceCreateDBInstancesRequest $req) This API is used to query the price of requested instances.
* @method Models\InquiryPriceUpgradeDBInstanceResponse InquiryPriceUpgradeDBInstance(Models\InquiryPriceUpgradeDBInstanceRequest $req) This API is used to query the upgrade price of an instance.
* @method Models\ModifyAccountPrivilegeResponse ModifyAccountPrivilege(Models\ModifyAccountPrivilegeRequest $req) This API is used to modify instance account permissions.
* @method Models\ModifyAccountRemarkResponse ModifyAccountRemark(Models\ModifyAccountRemarkRequest $req) This API is used to modify account remarks.
* @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) This API is used to rename an instance.
* @method Models\ModifyDBInstanceProjectResponse ModifyDBInstanceProject(Models\ModifyDBInstanceProjectRequest $req) This API is used to modify the project to which a database instance belongs.
* @method Models\ModifyDBNameResponse ModifyDBName(Models\ModifyDBNameRequest $req) This API is used to rename a database.
* @method Models\ModifyDBRemarkResponse ModifyDBRemark(Models\ModifyDBRemarkRequest $req) This API is used to modify database remarks.
* @method Models\ModifyMigrationResponse ModifyMigration(Models\ModifyMigrationRequest $req) This API is used to modify an existing migration task.
* @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) This API is used to reset the account password of an instance.
* @method Models\RestartDBInstanceResponse RestartDBInstance(Models\RestartDBInstanceRequest $req) This API is used to restart a database instance.
* @method Models\RestoreInstanceResponse RestoreInstance(Models\RestoreInstanceRequest $req) This API is used to restore an instance from a backup file.
* @method Models\RollbackInstanceResponse RollbackInstance(Models\RollbackInstanceRequest $req) This API is used to roll back an instance.
* @method Models\RunMigrationResponse RunMigration(Models\RunMigrationRequest $req) This API is used to start running a migration task.
* @method Models\TerminateDBInstanceResponse TerminateDBInstance(Models\TerminateDBInstanceRequest $req) This API is used to manually terminate a pay-as-you-go instance.
* @method Models\UpgradeDBInstanceResponse UpgradeDBInstance(Models\UpgradeDBInstanceRequest $req) This API is used to upgrade an instance.
 */

class SqlserverClient extends AbstractClient
{
    protected $endpoint = "sqlserver.tencentcloudapi.com";

    protected $version = "2018-03-28";

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
