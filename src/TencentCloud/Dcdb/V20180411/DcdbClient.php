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

namespace TencentCloud\Dcdb\V20180411;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dcdb\V20180411\Models as Models;

/**
 * @method Models\ActiveHourDCDBInstanceResponse ActiveHourDCDBInstance(Models\ActiveHourDCDBInstanceRequest $req) This API is used to remove a pay-as-you-go TDSQL instance from isolation.
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) This API is used to associate security groups with Tencent Cloud resources in batches.
 * @method Models\CancelDcnJobResponse CancelDcnJob(Models\CancelDcnJobRequest $req) This API is used to cancel DCN synchronization.
 * @method Models\CloneAccountResponse CloneAccount(Models\CloneAccountRequest $req) This API is used to clone an instance account.
 * @method Models\CloseDBExtranetAccessResponse CloseDBExtranetAccess(Models\CloseDBExtranetAccessRequest $req) This API is used to disable public network access for a TencentDB instance, which will make the public IP address inaccessible. The `DescribeDCDBInstances` API will not return the public domain name and port information of the corresponding instance.
 * @method Models\CopyAccountPrivilegesResponse CopyAccountPrivileges(Models\CopyAccountPrivilegesRequest $req) This API is used to copy the permissions of a TencentDB account.
Note: Accounts with the same username but different hosts are different accounts. Permissions can only be copied between accounts with the same `Readonly` attribute.
 * @method Models\CreateAccountResponse CreateAccount(Models\CreateAccountRequest $req) This API is used to create a TencentDB account. Multiple accounts can be created for one instance. Accounts with the same username but different hosts are different accounts.
 * @method Models\CreateDCDBInstanceResponse CreateDCDBInstance(Models\CreateDCDBInstanceRequest $req) This API is used to create a monthly subscribed TDSQL instance by passing in information such as instance specifications, database version number, and purchased duration.
 * @method Models\CreateDedicatedClusterDCDBInstanceResponse CreateDedicatedClusterDCDBInstance(Models\CreateDedicatedClusterDCDBInstanceRequest $req) This API is used to create a dedicated TDSQL cluster instance.
 * @method Models\CreateHourDCDBInstanceResponse CreateHourDCDBInstance(Models\CreateHourDCDBInstanceRequest $req) This API is used to create a pay-as-you-go TDSQL instance.
 * @method Models\CreateOnlineDDLJobResponse CreateOnlineDDLJob(Models\CreateOnlineDDLJobRequest $req) This API is used to create an online DDL job.
 * @method Models\DeleteAccountResponse DeleteAccount(Models\DeleteAccountRequest $req) This API is used to delete a TencentDB account, which is uniquely identified by username and host.
 * @method Models\DescribeAccountPrivilegesResponse DescribeAccountPrivileges(Models\DescribeAccountPrivilegesRequest $req) This API is used to query the permissions of a TencentDB account.
Note: Accounts with the same username but different hosts are considered as different accounts.
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) This API is used to query the list of accounts of a specified TencentDB instance.
 * @method Models\DescribeBackupFilesResponse DescribeBackupFiles(Models\DescribeBackupFilesRequest $req) This API is used to query the list of backup files.
 * @method Models\DescribeDBEncryptAttributesResponse DescribeDBEncryptAttributes(Models\DescribeDBEncryptAttributesRequest $req) This API is used to query the encryption status of the instance data.
 * @method Models\DescribeDBLogFilesResponse DescribeDBLogFiles(Models\DescribeDBLogFilesRequest $req) This API is used to get the list of various logs of a database, including cold backups, binlogs, errlogs, and slowlogs.
 * @method Models\DescribeDBParametersResponse DescribeDBParameters(Models\DescribeDBParametersRequest $req) This API is used to get the current parameter settings of a database.
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) This API is used to query the security group information of an instance.
 * @method Models\DescribeDBSlowLogsResponse DescribeDBSlowLogs(Models\DescribeDBSlowLogsRequest $req) This API is used to query the list of slow query logs.
 * @method Models\DescribeDBSyncModeResponse DescribeDBSyncMode(Models\DescribeDBSyncModeRequest $req) This API is used to query the sync mode of a TencentDB instance.
 * @method Models\DescribeDBTmpInstancesResponse DescribeDBTmpInstances(Models\DescribeDBTmpInstancesRequest $req) This API is used to obtain a temp rollback instance.
 * @method Models\DescribeDCDBInstanceDetailResponse DescribeDCDBInstanceDetail(Models\DescribeDCDBInstanceDetailRequest $req) This API is used to get the details of a TDSQL instance.
 * @method Models\DescribeDCDBInstanceNodeInfoResponse DescribeDCDBInstanceNodeInfo(Models\DescribeDCDBInstanceNodeInfoRequest $req) This API is used to query the information of instance nodes.
 * @method Models\DescribeDCDBInstancesResponse DescribeDCDBInstances(Models\DescribeDCDBInstancesRequest $req) This API is used to query the list of TencentDB instances. It supports filtering instances by project ID, instance ID, private network address, and instance name.
If no filter is specified, 10 instances will be returned by default. Up to 100 instances can be returned for a single request.
 * @method Models\DescribeDCDBPriceResponse DescribeDCDBPrice(Models\DescribeDCDBPriceRequest $req) This API is used to query the price of an instance before you purchase it.
 * @method Models\DescribeDCDBShardsResponse DescribeDCDBShards(Models\DescribeDCDBShardsRequest $req) This API is used to query the information of shards of a TencentDB instance.
 * @method Models\DescribeDatabaseObjectsResponse DescribeDatabaseObjects(Models\DescribeDatabaseObjectsRequest $req) This API is used to query the list of database objects in a TencentDB instance, including tables, stored procedures, views, and functions.
 * @method Models\DescribeDatabaseTableResponse DescribeDatabaseTable(Models\DescribeDatabaseTableRequest $req) This API is used to query the table information of a TencentDB instance.
 * @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) This API is used to query the database list of a TencentDB instance.
 * @method Models\DescribeDcnDetailResponse DescribeDcnDetail(Models\DescribeDcnDetailRequest $req) This API is used to query the disaster recovery details of an instance.
 * @method Models\DescribeFileDownloadUrlResponse DescribeFileDownloadUrl(Models\DescribeFileDownloadUrlRequest $req) This API is used to get the download URL of a specific backup or log file of a database.
 * @method Models\DescribeFlowResponse DescribeFlow(Models\DescribeFlowRequest $req) This API is used to query task status.
 * @method Models\DescribeLogFileRetentionPeriodResponse DescribeLogFileRetentionPeriod(Models\DescribeLogFileRetentionPeriodRequest $req) This API is used to view the backup log retention days.
 * @method Models\DescribeOrdersResponse DescribeOrders(Models\DescribeOrdersRequest $req) This API is used to query TDSQL order information. You can pass in an order ID to query the TDSQL instance associated with the order and the corresponding task process ID.
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) This API is used to query the security group details of a project.
 * @method Models\DestroyDCDBInstanceResponse DestroyDCDBInstance(Models\DestroyDCDBInstanceRequest $req) This API is used to terminate an isolated monthly subscribed TDSQL instance.
 * @method Models\DestroyHourDCDBInstanceResponse DestroyHourDCDBInstance(Models\DestroyHourDCDBInstanceRequest $req) This API is used to terminate a pay-as-you-go TDSQL instance.
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) This API is used to unassociate security groups from instances in batches.
 * @method Models\GrantAccountPrivilegesResponse GrantAccountPrivileges(Models\GrantAccountPrivilegesRequest $req) This API is used to grant permissions to a TencentDB account.
Note: accounts with the same username but different hosts are different accounts.
 * @method Models\InitDCDBInstancesResponse InitDCDBInstances(Models\InitDCDBInstancesRequest $req) This API is used to initialize instances, including setting the default character set and table name case sensitivity.
 * @method Models\IsolateDCDBInstanceResponse IsolateDCDBInstance(Models\IsolateDCDBInstanceRequest $req) This API is used to isolate a monthly subscribed TDSQL instance, which will no longer be accessible via IP and port.  The isolated instance can be started up in the recycle bin.  If it is isolated due to overdue payments, top up your account as soon as possible.
 * @method Models\IsolateDedicatedDBInstanceResponse IsolateDedicatedDBInstance(Models\IsolateDedicatedDBInstanceRequest $req) This API is used to isolate a dedicated TencentDB instance.
 * @method Models\IsolateHourDCDBInstanceResponse IsolateHourDCDBInstance(Models\IsolateHourDCDBInstanceRequest $req) This API is used to isolate a pay-as-you-go TDSQL instance.
 * @method Models\KillSessionResponse KillSession(Models\KillSessionRequest $req) This API is used to kill the specified session.
 * @method Models\ModifyAccountConfigResponse ModifyAccountConfig(Models\ModifyAccountConfigRequest $req) This API is used to modify the configurations of an account, such as `max_user_connections`.
 * @method Models\ModifyAccountDescriptionResponse ModifyAccountDescription(Models\ModifyAccountDescriptionRequest $req) This API is used to modify the remarks of a TencentDB account.
Note: accounts with the same username but different hosts are different accounts.
 * @method Models\ModifyAccountPrivilegesResponse ModifyAccountPrivileges(Models\ModifyAccountPrivilegesRequest $req) This API is used to modify the permissions of a TencentDB instance account. \n\n**Note**\n-Only the SELECT permission (that is, set the permission parameter to `["SELECT"]`) of the system database `mysql` can be granted. An error will be reported if read-write permissions are granted to a read-only account. If the parameter is not passed in, no change will be made to the granted table permissions. To clear the granted view permissions, set `Privileges` to an empty array.
 * @method Models\ModifyDBEncryptAttributesResponse ModifyDBEncryptAttributes(Models\ModifyDBEncryptAttributesRequest $req) This API is used to modify the instance data encryption.
 * @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) This API is used to modify instance name.
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) This API is used to modify the security groups associated with TencentDB.
 * @method Models\ModifyDBInstancesProjectResponse ModifyDBInstancesProject(Models\ModifyDBInstancesProjectRequest $req) This API is used to modify the project to which TencentDB instances belong.
 * @method Models\ModifyDBParametersResponse ModifyDBParameters(Models\ModifyDBParametersRequest $req) This API is used to modify database parameters.
 * @method Models\ModifyDBSyncModeResponse ModifyDBSyncMode(Models\ModifyDBSyncModeRequest $req) This API is used to modify the sync mode of a TencentDB instance.
 * @method Models\ModifyInstanceNetworkResponse ModifyInstanceNetwork(Models\ModifyInstanceNetworkRequest $req) This API is used to modify instance network.
 * @method Models\ModifyInstanceVipResponse ModifyInstanceVip(Models\ModifyInstanceVipRequest $req) This API is used to modify instance VIP.
 * @method Models\ModifyInstanceVportResponse ModifyInstanceVport(Models\ModifyInstanceVportRequest $req) This API is used to modify instance Vport.
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) This API is used to reset the password of a TencentDB account.
Note: accounts with the same username but different hosts are different accounts.
 * @method Models\SwitchDBInstanceHAResponse SwitchDBInstanceHA(Models\SwitchDBInstanceHARequest $req) This API is used to start a source-replica switch of instances.
 * @method Models\TerminateDedicatedDBInstanceResponse TerminateDedicatedDBInstance(Models\TerminateDedicatedDBInstanceRequest $req) This API is used to terminate the isolated dedicated TDSQL instance.
 * @method Models\UpgradeDedicatedDCDBInstanceResponse UpgradeDedicatedDCDBInstance(Models\UpgradeDedicatedDCDBInstanceRequest $req) This API is used to upgrade a dedicated TDSQL cluster instance.
 * @method Models\UpgradeHourDCDBInstanceResponse UpgradeHourDCDBInstance(Models\UpgradeHourDCDBInstanceRequest $req) This API is used to upgrade a pay-as-you-go TDSQL instance.
 */

class DcdbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dcdb.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dcdb";

    /**
     * @var string
     */
    protected $version = "2018-04-11";

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
        $respClass = "TencentCloud"."\\".ucfirst("dcdb")."\\"."V20180411\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
