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

namespace TencentCloud\Mariadb\V20170312;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mariadb\V20170312\Models as Models;

/**
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) This API is used to associate security groups with Tencent Cloud resources in batches.
 * @method Models\CancelDcnJobResponse CancelDcnJob(Models\CancelDcnJobRequest $req) This API is used to cancel DCN synchronization.
 * @method Models\CloneAccountResponse CloneAccount(Models\CloneAccountRequest $req) This API is used to clone an instance account.
 * @method Models\CloseDBExtranetAccessResponse CloseDBExtranetAccess(Models\CloseDBExtranetAccessRequest $req) This API is used to disable public network access for a TencentDB instance, which will make the public IP address inaccessible. The `DescribeDCDBInstances` API will not return the public domain name and port information of the corresponding instance.
 * @method Models\CopyAccountPrivilegesResponse CopyAccountPrivileges(Models\CopyAccountPrivilegesRequest $req) This API is used to copy the permissions of a TencentDB account.
Note: accounts with the same username but different hosts are different accounts. Permissions can only be copied between accounts with the same `Readonly` attribute.
 * @method Models\CreateAccountResponse CreateAccount(Models\CreateAccountRequest $req) This API is used to create a TencentDB account. Multiple accounts can be created for one instance. Accounts with the same username but different hosts are different accounts.
 * @method Models\DeleteAccountResponse DeleteAccount(Models\DeleteAccountRequest $req) This API is used to delete a TencentDB account, which is uniquely identified by username and host.
 * @method Models\DescribeAccountPrivilegesResponse DescribeAccountPrivileges(Models\DescribeAccountPrivilegesRequest $req) This API is used to query the permissions of a TencentDB account.
Note: accounts with the same username but different hosts are different accounts.
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) This API is used to query the list of accounts of a specified TencentDB instance.
 * @method Models\DescribeBackupTimeResponse DescribeBackupTime(Models\DescribeBackupTimeRequest $req) This API is used to get the backup time of a TencentDB instance. The backend system will perform instance backup regularly according to this configuration.
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) This API is used to query the TencentDB instance list. It supports filtering instances by project ID, instance ID, private address, and instance name.
If no filter is specified, 20 instances will be returned by default. Up to 100 instances can be returned for a single request.
 * @method Models\DescribeDBLogFilesResponse DescribeDBLogFiles(Models\DescribeDBLogFilesRequest $req) This API is used to get the list of various logs of a database, including cold backups, binlogs, errlogs, and slowlogs.
 * @method Models\DescribeDBParametersResponse DescribeDBParameters(Models\DescribeDBParametersRequest $req) This API is used to get the current parameter settings of a database.
 * @method Models\DescribeDBPerformanceResponse DescribeDBPerformance(Models\DescribeDBPerformanceRequest $req) This API is used to view the current performance data of a database instance.
 * @method Models\DescribeDBPerformanceDetailsResponse DescribeDBPerformanceDetails(Models\DescribeDBPerformanceDetailsRequest $req) This API is used to view the instance performance data details.
 * @method Models\DescribeDBResourceUsageResponse DescribeDBResourceUsage(Models\DescribeDBResourceUsageRequest $req) This API is used to view the resource usage of a database instance.
 * @method Models\DescribeDBResourceUsageDetailsResponse DescribeDBResourceUsageDetails(Models\DescribeDBResourceUsageDetailsRequest $req) This API is used to view the current performance data of a database instance.
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) This API is used to query the security group details of an instance.
 * @method Models\DescribeDBSlowLogsResponse DescribeDBSlowLogs(Models\DescribeDBSlowLogsRequest $req) This API is used to query the slow query log list.
 * @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) This API is used to query the list of databases of a TencentDB instance.
 * @method Models\DescribeDcnDetailResponse DescribeDcnDetail(Models\DescribeDcnDetailRequest $req) This API is used to query the disaster recovery details of an instance.
 * @method Models\DescribeFlowResponse DescribeFlow(Models\DescribeFlowRequest $req) This API is used to query flow status.
 * @method Models\DescribeInstanceNodeInfoResponse DescribeInstanceNodeInfo(Models\DescribeInstanceNodeInfoRequest $req) This API is used to query the information of primary and replica nodes of an instance.
 * @method Models\DescribeLogFileRetentionPeriodResponse DescribeLogFileRetentionPeriod(Models\DescribeLogFileRetentionPeriodRequest $req) This API is used to view the configured number of days for retention of database backup logs.
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) This API is used to query the security group details of a project.
 * @method Models\DestroyHourDBInstanceResponse DestroyHourDBInstance(Models\DestroyHourDBInstanceRequest $req) This API is used to terminate a pay-as-you-go instance.
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) This API is used to unassociate security groups from instances in batches.
 * @method Models\GrantAccountPrivilegesResponse GrantAccountPrivileges(Models\GrantAccountPrivilegesRequest $req) This API is used to grant permissions to a TencentDB account.
Note: accounts with the same username but different hosts are different accounts.
 * @method Models\InitDBInstancesResponse InitDBInstances(Models\InitDBInstancesRequest $req) This API is used to initialize TencentDB instances, including setting the default character set and table name case sensitivity.
 * @method Models\ModifyAccountDescriptionResponse ModifyAccountDescription(Models\ModifyAccountDescriptionRequest $req) This API is used to modify the remarks of a TencentDB account.
Note: accounts with the same username but different hosts are different accounts.
 * @method Models\ModifyAccountPrivilegesResponse ModifyAccountPrivileges(Models\ModifyAccountPrivilegesRequest $req) This API is used to modify the permissions of a TencentDB instance account.

**Notes**
- Only the SELECT permission (that is, set the permission parameter to `["SELECT"]`) of the system database `mysql` can be granted.
- An error will be reported if read-write permissions are granted to a read-only account.
- If the parameter of permissions at a level is left empty, no change will be made to the permissions at the level that have been granted. To clear granted permissions at a level, set `GlobalPrivileges.N` or `Privileges` to an empty array.
 * @method Models\ModifyBackupTimeResponse ModifyBackupTime(Models\ModifyBackupTimeRequest $req) This API is used to set the backup time of a TencentDB instance. The backend system will perform instance backup regularly according to this configuration.
 * @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) This API is used to rename a TencentDB instance.
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) This API is used to modify the security groups associated with TencentDB.
 * @method Models\ModifyDBInstancesProjectResponse ModifyDBInstancesProject(Models\ModifyDBInstancesProjectRequest $req) This API is used to modify the project to which TencentDB instances belong.
 * @method Models\ModifyDBParametersResponse ModifyDBParameters(Models\ModifyDBParametersRequest $req) This API is used to modify database parameters.
 * @method Models\ModifyDBSyncModeResponse ModifyDBSyncMode(Models\ModifyDBSyncModeRequest $req) This API is used to modify the sync mode of a TencentDB instance.
 * @method Models\ModifyLogFileRetentionPeriodResponse ModifyLogFileRetentionPeriod(Models\ModifyLogFileRetentionPeriodRequest $req) This API is used to modify the number of days for retention of database backup logs.
 * @method Models\ModifySyncTaskAttributeResponse ModifySyncTaskAttribute(Models\ModifySyncTaskAttributeRequest $req) This API is used to modify sync task attributes (currently, only the task name can be modified).
 * @method Models\OpenDBExtranetAccessResponse OpenDBExtranetAccess(Models\OpenDBExtranetAccessRequest $req) This API is used to enable public network access for a TencentDB instance. After that, you can access the instance with the public domain name and port obtained through the `DescribeDCDBInstances` API.
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) This API is used to reset the password of a TencentDB account.
Note: accounts with the same username but different hosts are different accounts.
 */

class MariadbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mariadb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mariadb";

    /**
     * @var string
     */
    protected $version = "2017-03-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("mariadb")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
