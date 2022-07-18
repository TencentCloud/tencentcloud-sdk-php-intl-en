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

namespace TencentCloud\Cdb\V20170320;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdb\V20170320\Models as Models;

/**
 * @method Models\AddTimeWindowResponse AddTimeWindow(Models\AddTimeWindowRequest $req) This API (AddTimeWindow) is used to add a maintenance time window for a TencentDB instance, so as to specify when the instance can automatically perform access switch operations.
 * @method Models\ApplyCDBProxyResponse ApplyCDBProxy(Models\ApplyCDBProxyRequest $req) This API is used to create a database proxy group for a source instance.
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) This API (AssociateSecurityGroups) is used to bind security groups to instances in batches.
 * @method Models\BalanceRoGroupLoadResponse BalanceRoGroupLoad(Models\BalanceRoGroupLoadRequest $req) This API is used to rebalance the loads of instances in an RO group. Please note that the database connections to those instances will be interrupted transiently; therefore, you should ensure that your application can reconnect to the databases. This operation should be performed with caution.
 * @method Models\CloseCDBProxyResponse CloseCDBProxy(Models\CloseCDBProxyRequest $req) This API is used to disable database proxy.
 * @method Models\CloseWanServiceResponse CloseWanService(Models\CloseWanServiceRequest $req) This API (CloseWanService) is used to disable public network access for TencentDB instance, which will make public IP addresses inaccessible.
 * @method Models\CreateAuditPolicyResponse CreateAuditPolicy(Models\CreateAuditPolicyRequest $req) This API is used to create an audit policy for a TencentDB instance by associating an audit rule with the TencentDB instance.
 * @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) This API (CreateBackup) is used to create a TencentDB instance backup.
 * @method Models\CreateCloneInstanceResponse CreateCloneInstance(Models\CreateCloneInstanceRequest $req) This API is used to create a clone of a specific instance, and roll back the clone by using a physical backup file of the instance or roll back the clone to a point in time.
 * @method Models\CreateDBImportJobResponse CreateDBImportJob(Models\CreateDBImportJobRequest $req) This API (CreateDBImportJob) is used to create a data import task for a TencentDB instance.

Note that the files for a data import task must be uploaded to Tencent Cloud in advance. You need to do so in the console.
 * @method Models\CreateDBInstanceHourResponse CreateDBInstanceHour(Models\CreateDBInstanceHourRequest $req) This API is used to create pay-as-you-go TencentDB instances (which can be source instances, disaster recovery instances, or read-only replicas) by passing in information such as instance specifications, MySQL version number, and instance quantity.

This is an asynchronous API. You can also use the [DescribeDBInstances](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) API to query instance details. If the output parameter `Status` is `1` and the output parameter `TaskStatus` is `0`, the instances have been successfully delivered.

1. Use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1) API to query the purchasable instance specifications, and then use the [DescribeDBPrice](https://intl.cloud.tencent.com/document/api/236/18566?from_cn_redirect=1) API to query the prices of the purchasable instances;
2. You can create up to 100 instances at a time, with an instance validity period of up to 36 months;
3. MySQL v5.5, v5.6, v5.7, and v8.0 are supported;
4. Source instances, disaster recovery instances, and read-only replicas can be created;
5. If `Port`, `ParamList`, or `Password` is specified in the input parameters, the instance (excluding basic instances) will be initialized.
 * @method Models\CreateParamTemplateResponse CreateParamTemplate(Models\CreateParamTemplateRequest $req) This API is used to create a parameter template. The common request parameter `Region` can only be set to `ap-guangzhou`.
 * @method Models\CreateRoInstanceIpResponse CreateRoInstanceIp(Models\CreateRoInstanceIpRequest $req) This API is used to create a VIP exclusive to a TencentDB read-only instance.
 * @method Models\DeleteAccountsResponse DeleteAccounts(Models\DeleteAccountsRequest $req) This API (DeleteAccounts) is used to delete TencentDB accounts.
 * @method Models\DeleteBackupResponse DeleteBackup(Models\DeleteBackupRequest $req) This API is used to delete a database backup. It can only delete manually initiated backups.
 * @method Models\DeleteParamTemplateResponse DeleteParamTemplate(Models\DeleteParamTemplateRequest $req) This API is used to delete a parameter template. The common request parameter `Region` can only be set to `ap-guangzhou`.
 * @method Models\DeleteTimeWindowResponse DeleteTimeWindow(Models\DeleteTimeWindowRequest $req) This API (DeleteTimeWindow) is used to delete a maintenance time window for a TencentDB instance. After it is deleted, the default maintenance time window will be 03:00-04:00, i.e., switch to a new instance will be performed during 03:00-04:00 by default.
 * @method Models\DescribeAccountPrivilegesResponse DescribeAccountPrivileges(Models\DescribeAccountPrivilegesRequest $req) This API (DescribeAccountPrivileges) is used to query the information of TencentDB account permissions.
 * @method Models\DescribeAsyncRequestInfoResponse DescribeAsyncRequestInfo(Models\DescribeAsyncRequestInfoRequest $req) This API (DescribeAsyncRequestInfo) is used to query the async task execution result of a TencentDB instance.
 * @method Models\DescribeAuditPoliciesResponse DescribeAuditPolicies(Models\DescribeAuditPoliciesRequest $req) This API is used to query the audit policies of a TencentDB instance.
 * @method Models\DescribeAuditRulesResponse DescribeAuditRules(Models\DescribeAuditRulesRequest $req) This API is used to query the audit rules in the current region.
 * @method Models\DescribeBackupConfigResponse DescribeBackupConfig(Models\DescribeBackupConfigRequest $req) This API (DescribeBackupConfig) is used to query the configuration information of a TencentDB instance backup.
 * @method Models\DescribeBackupDownloadRestrictionResponse DescribeBackupDownloadRestriction(Models\DescribeBackupDownloadRestrictionRequest $req) This API is used to query the restrictions of downloading backups in a region.
 * @method Models\DescribeBackupOverviewResponse DescribeBackupOverview(Models\DescribeBackupOverviewRequest $req) This API is used to query the backup overview of a user. It will return the user's current total number of backups, total capacity used by backups, capacity in the free tier, and paid capacity (all capacity values are in bytes).
 * @method Models\DescribeBackupSummariesResponse DescribeBackupSummaries(Models\DescribeBackupSummariesRequest $req) This API is used to query the statistics of backups. It will return the capacity used by backups at the instance level and the number and used capacity of data backups and log backups of each instance (all capacity values are in bytes).
 * @method Models\DescribeBackupsResponse DescribeBackups(Models\DescribeBackupsRequest $req) This API (DescribeBackups) is used to query the backups of a TencentDB instance.
 * @method Models\DescribeBinlogBackupOverviewResponse DescribeBinlogBackupOverview(Models\DescribeBinlogBackupOverviewRequest $req) This API is used to query the log backup overview of a user in the current region.
 * @method Models\DescribeBinlogsResponse DescribeBinlogs(Models\DescribeBinlogsRequest $req) This API is used to query the list of binlog files of a TencentDB instance.
 * @method Models\DescribeCDBProxyResponse DescribeCDBProxy(Models\DescribeCDBProxyRequest $req) This API is used to query database proxy. It will be deprecated and replaced by the `QueryCDBProxy` API.
 * @method Models\DescribeCloneListResponse DescribeCloneList(Models\DescribeCloneListRequest $req) This API is used to query the clone task list of an instance.
 * @method Models\DescribeDBImportRecordsResponse DescribeDBImportRecords(Models\DescribeDBImportRecordsRequest $req) This API (DescribeDBImportRecords) is used to query the records of import tasks in a TencentDB instance.
 * @method Models\DescribeDBInstanceCharsetResponse DescribeDBInstanceCharset(Models\DescribeDBInstanceCharsetRequest $req) This API (DescribeDBInstanceCharset) is used to query the character set and its name of a TencentDB instance.
 * @method Models\DescribeDBInstanceConfigResponse DescribeDBInstanceConfig(Models\DescribeDBInstanceConfigRequest $req) This API (DescribeDBInstanceConfig) is used to query the configuration information of a TencentDB instance, such as its synchronization mode and deployment mode.
 * @method Models\DescribeDBInstanceGTIDResponse DescribeDBInstanceGTID(Models\DescribeDBInstanceGTIDRequest $req) This API (DescribeDBInstanceGTID) is used to query whether GTID is activated for a TencentDB instance. Instances on or below version 5.5 are not supported.
 * @method Models\DescribeDBInstanceInfoResponse DescribeDBInstanceInfo(Models\DescribeDBInstanceInfoRequest $req) This API is used to query the basic information of an instance (instance ID, instance name, and whether encryption is enabled).
 * @method Models\DescribeDBInstanceRebootTimeResponse DescribeDBInstanceRebootTime(Models\DescribeDBInstanceRebootTimeRequest $req) This API (DescribeDBInstanceRebootTime) is used to query the estimated time needed for a TencentDB instance to restart.
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) This API (DescribeDBInstances) is used to query the list of TencentDB instances (which can be primary, disaster recovery, or read-only instances). It supports filtering instances by project ID, instance ID, access address, and instance status.
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) This API (DescribeDBSecurityGroups) is used to query the security group details of an instance.
 * @method Models\DescribeDBSwitchRecordsResponse DescribeDBSwitchRecords(Models\DescribeDBSwitchRecordsRequest $req) This API (DescribeDBSwitchRecords) is used to query the instance switch records.
 * @method Models\DescribeDBZoneConfigResponse DescribeDBZoneConfig(Models\DescribeDBZoneConfigRequest $req) This API (DescribeDBZoneConfig) is used to query the specifications of TencentDB instances purchasable in a region.
 * @method Models\DescribeDataBackupOverviewResponse DescribeDataBackupOverview(Models\DescribeDataBackupOverviewRequest $req) This API is used to query the data backup overview of a user in the current region.
 * @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) This API is used to query the information of databases in a TencentDB instance which must be a source or disaster recovery instance.
 * @method Models\DescribeDefaultParamsResponse DescribeDefaultParams(Models\DescribeDefaultParamsRequest $req) This API (DescribeDefaultParams) is used to query the list of default configurable parameters.
 * @method Models\DescribeDeviceMonitorInfoResponse DescribeDeviceMonitorInfo(Models\DescribeDeviceMonitorInfoRequest $req) This API (DescribeDeviceMonitorInfo) is used to query the monitoring information of a TencentDB physical machine on the day. Currently, it only supports instances with 488 GB memory and 6 TB disk.
 * @method Models\DescribeErrorLogDataResponse DescribeErrorLogData(Models\DescribeErrorLogDataRequest $req) This API is used to query the error logs of an instance over the past month by search criteria.
Note: the HTTP response packet will be very large if it contain a single large error log, which causes the API call to time out. If this happens, we recommend you lower the value of the input parameter `Limit` to reduce the packet size so that the API can respond timely.
 * @method Models\DescribeInstanceParamRecordsResponse DescribeInstanceParamRecords(Models\DescribeInstanceParamRecordsRequest $req) This API (DescribeInstanceParamRecords) is used to query the parameter modification records of an instance.
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) This API (DescribeInstanceParams) is used to query the list of parameters for an instance.
 * @method Models\DescribeLocalBinlogConfigResponse DescribeLocalBinlogConfig(Models\DescribeLocalBinlogConfigRequest $req) This API is used to query the retention policy of local binlog of an instance.
 * @method Models\DescribeParamTemplateInfoResponse DescribeParamTemplateInfo(Models\DescribeParamTemplateInfoRequest $req) This API is used to query parameter template details. The common request parameter `Region` can only be set to `ap-guangzhou`.
 * @method Models\DescribeParamTemplatesResponse DescribeParamTemplates(Models\DescribeParamTemplatesRequest $req) This API is used to query the parameter template list. The common request parameter `Region` can only be set to `ap-guangzhou`.
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) This API (DescribeProjectSecurityGroups) is used to query the security group details of a project.
 * @method Models\DescribeProxyConnectionPoolConfResponse DescribeProxyConnectionPoolConf(Models\DescribeProxyConnectionPoolConfRequest $req) This API is used to query the connection pool configuration of database proxy.
 * @method Models\DescribeProxyCustomConfResponse DescribeProxyCustomConf(Models\DescribeProxyCustomConfRequest $req) This API is used to query the proxy configuration.
 * @method Models\DescribeRoGroupsResponse DescribeRoGroups(Models\DescribeRoGroupsRequest $req) This API is used to query the information of all RO groups of a TencentDB instance.
 * @method Models\DescribeRoMinScaleResponse DescribeRoMinScale(Models\DescribeRoMinScaleRequest $req) This API is used to query the minimum specification of a read-only instance that can be purchased or upgraded to.
 * @method Models\DescribeRollbackRangeTimeResponse DescribeRollbackRangeTime(Models\DescribeRollbackRangeTimeRequest $req) This API (DescribeRollbackRangeTime) is used to query the time range available for instance rollback.
 * @method Models\DescribeRollbackTaskDetailResponse DescribeRollbackTaskDetail(Models\DescribeRollbackTaskDetailRequest $req) This API is used to query the details of a TencentDB instance rollback task.
 * @method Models\DescribeSlowLogDataResponse DescribeSlowLogData(Models\DescribeSlowLogDataRequest $req) This API is used to query the slow logs of an instance over the past month by search criteria.
Note: the HTTP response packet will be very large if it contain a single large slow log, which causes the API call to time out. If this happens, we recommend you lower the value of the input parameter `Limit` to reduce the packet size so that the API can respond timely.
 * @method Models\DescribeSlowLogsResponse DescribeSlowLogs(Models\DescribeSlowLogsRequest $req) This API (DescribeSlowLogs) is used to query the slow logs of a TencentDB instance.
 * @method Models\DescribeSupportedPrivilegesResponse DescribeSupportedPrivileges(Models\DescribeSupportedPrivilegesRequest $req) This API (DescribeSupportedPrivileges) is used to query the information of TencentDB account permissions, including global permissions, database permissions, table permissions, and column permissions.
 * @method Models\DescribeTablesResponse DescribeTables(Models\DescribeTablesRequest $req) This API is used to query the information of database tables in a TencentDB instance. It only supports source or disaster recovery instances.
 * @method Models\DescribeTagsOfInstanceIdsResponse DescribeTagsOfInstanceIds(Models\DescribeTagsOfInstanceIdsRequest $req) This API (DescribeTagsOfInstanceIds) is used to query the tag information of a TencentDB instance.
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) This API (DescribeTasks) is used to query the list of tasks for a TencentDB instance.
 * @method Models\DescribeTimeWindowResponse DescribeTimeWindow(Models\DescribeTimeWindowRequest $req) This API (DescribeTimeWindow) is used to query the maintenance time window of a TencentDB instance.
 * @method Models\DescribeUploadedFilesResponse DescribeUploadedFiles(Models\DescribeUploadedFilesRequest $req) This API is used to query the list of SQL files imported by users. The common request parameter `Region` must be `ap-shanghai`.
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) This API (DisassociateSecurityGroups) is used to unbind security groups from instances in batches.
 * @method Models\InitDBInstancesResponse InitDBInstances(Models\InitDBInstancesRequest $req) This API (InitDBInstances) is used to initialize instances, including their password, default character set, and instance port number.
 * @method Models\IsolateDBInstanceResponse IsolateDBInstance(Models\IsolateDBInstanceRequest $req) This API is used to isolate a TencentDB instance, which will no longer be accessible via IP and port. The isolated instance can be started up in the recycle bin. If it is isolated due to arrears, please top up your account as soon as possible.
 * @method Models\ModifyAccountDescriptionResponse ModifyAccountDescription(Models\ModifyAccountDescriptionRequest $req) This API (ModifyAccountDescription) is used to modify the remarks of a TencentDB instance account.
 * @method Models\ModifyAccountMaxUserConnectionsResponse ModifyAccountMaxUserConnections(Models\ModifyAccountMaxUserConnectionsRequest $req) This API is used to modify the maximum connections of one or more TencentDB instance accounts.
 * @method Models\ModifyAccountPasswordResponse ModifyAccountPassword(Models\ModifyAccountPasswordRequest $req) This API (ModifyAccountPassword) is used to modify the password of a TencentDB instance account.
 * @method Models\ModifyAccountPrivilegesResponse ModifyAccountPrivileges(Models\ModifyAccountPrivilegesRequest $req) This API is used to modify the permissions of a TencentDB instance account.

Note that when modifying account permissions, you need to pass in the full permission information of the account. You can [query the account permission information
](https://intl.cloud.tencent.com/document/api/236/17500?from_cn_redirect=1) first before modifying permissions.
 * @method Models\ModifyAutoRenewFlagResponse ModifyAutoRenewFlag(Models\ModifyAutoRenewFlagRequest $req) This API is used to modify the auto-renewal flag of a TencentDB instance.
 * @method Models\ModifyBackupConfigResponse ModifyBackupConfig(Models\ModifyBackupConfigRequest $req) This API (ModifyBackupConfig) is used to modify the database backup configuration.
 * @method Models\ModifyBackupDownloadRestrictionResponse ModifyBackupDownloadRestriction(Models\ModifyBackupDownloadRestrictionRequest $req) This API is used to modify the restrictions of downloading backups in a region. You can specify which types of networks (private, or both private and public), VPCs, and IPs to download backups.
 * @method Models\ModifyCDBProxyResponse ModifyCDBProxy(Models\ModifyCDBProxyRequest $req) This API is used to configure read/write separation of database proxy.
 * @method Models\ModifyCDBProxyConnectionPoolResponse ModifyCDBProxyConnectionPool(Models\ModifyCDBProxyConnectionPoolRequest $req) This API is used to configure the connection pool of database proxy. You can use the `DescribeProxyConnectionPoolConf` API to query the supported connection pool configurations.
 * @method Models\ModifyCDBProxyDescResponse ModifyCDBProxyDesc(Models\ModifyCDBProxyDescRequest $req) This API is used to modify the description of database proxy.
 * @method Models\ModifyCDBProxyVipVPortResponse ModifyCDBProxyVipVPort(Models\ModifyCDBProxyVipVPortRequest $req) This API is used to modify the VIP or port of database proxy.
 * @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) This API (ModifyDBInstanceName) is used to rename a TencentDB instance.
 * @method Models\ModifyDBInstanceProjectResponse ModifyDBInstanceProject(Models\ModifyDBInstanceProjectRequest $req) This API (ModifyDBInstanceProject) is used to modify the project to which a TencentDB instance belongs.
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) This API (ModifyDBInstanceSecurityGroups) is used to modify the security groups bound to a TencentDB instance.
 * @method Models\ModifyInstanceParamResponse ModifyInstanceParam(Models\ModifyInstanceParamRequest $req) This API (ModifyInstanceParam) is used to modify instance parameters.
 * @method Models\ModifyInstanceTagResponse ModifyInstanceTag(Models\ModifyInstanceTagRequest $req) This API (ModifyInstanceTag) is used to add, modify, or delete an instance tag.
 * @method Models\ModifyLocalBinlogConfigResponse ModifyLocalBinlogConfig(Models\ModifyLocalBinlogConfigRequest $req) This API is used to modify the retention policy of local binlog of an instance.
 * @method Models\ModifyParamTemplateResponse ModifyParamTemplate(Models\ModifyParamTemplateRequest $req) This API is used to modify a parameter template. The common request parameter `Region` can only be set to `ap-guangzhou`.
 * @method Models\ModifyRoGroupInfoResponse ModifyRoGroupInfo(Models\ModifyRoGroupInfoRequest $req) This API is used to update the information of a TencentDB RO group, such as configuring a read-only instance removal policy in case of excessive delay, setting read weights of read-only instances, and setting the replication delay.
 * @method Models\ModifyTimeWindowResponse ModifyTimeWindow(Models\ModifyTimeWindowRequest $req) This API (ModifyTimeWindow) is used to update the maintenance time window of a TencentDB instance.
 * @method Models\OfflineIsolatedInstancesResponse OfflineIsolatedInstances(Models\OfflineIsolatedInstancesRequest $req) This API (OfflineIsolatedInstances) is used to deactivate isolated TencentDB instances immediately. The instances must be in isolated status, i.e., their `Status` value is 5 in the return of the [instance list querying API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1).

This is an asynchronous API. There may be a delay in repossessing some resources. You can query the details by using the [instance list querying API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) and specifying the InstanceId and the `Status` value as [5, 6, 7]. If the returned instance is empty, then all its resources have been released.

Note that once an instance is deactivated, its resources and data will not be recoverable. Please do so with caution.
 * @method Models\OpenAuditServiceResponse OpenAuditService(Models\OpenAuditServiceRequest $req) This API is used to enable the audit service.
 * @method Models\OpenDBInstanceGTIDResponse OpenDBInstanceGTID(Models\OpenDBInstanceGTIDRequest $req) This API (OpenDBInstanceGTID) is used to enable GTID for a TencentDB instance. Only instances on or above version 5.6 are supported.
 * @method Models\OpenWanServiceResponse OpenWanService(Models\OpenWanServiceRequest $req) This API (OpenWanService) is used to enable public network access for an instance.

Note that before enabling public network access, you need to first [initialize the instance](https://intl.cloud.tencent.com/document/api/236/15873?from_cn_redirect=1).
 * @method Models\QueryCDBProxyResponse QueryCDBProxy(Models\QueryCDBProxyRequest $req) This API is used to query the proxy details.
 * @method Models\ReleaseIsolatedDBInstancesResponse ReleaseIsolatedDBInstances(Models\ReleaseIsolatedDBInstancesRequest $req) This API is used to deisolate an isolated TencentDB instance.
 * @method Models\ReloadBalanceProxyNodeResponse ReloadBalanceProxyNode(Models\ReloadBalanceProxyNodeRequest $req) This API is used to rebalance the load on database proxy.
 * @method Models\ResetRootAccountResponse ResetRootAccount(Models\ResetRootAccountRequest $req) This API is used to reset the root account and initialize the account permissions.
 * @method Models\RestartDBInstancesResponse RestartDBInstances(Models\RestartDBInstancesRequest $req) This API (RestartDBInstances) is used to restart TencentDB instances.

Note:
1. This API only supports restarting primary instances.
2. The instance status must be normal, and no other async tasks are in progress.
 * @method Models\StartBatchRollbackResponse StartBatchRollback(Models\StartBatchRollbackRequest $req) This API (StartBatchRollback) is used to roll back the tables of a TencentDB instance in batches.
 * @method Models\StartReplicationResponse StartReplication(Models\StartReplicationRequest $req) This API is used to start the data replication from the source instance to the read-only instance.
 * @method Models\StopDBImportJobResponse StopDBImportJob(Models\StopDBImportJobRequest $req) This API (StopDBImportJob) is used to stop a data import task.
 * @method Models\StopReplicationResponse StopReplication(Models\StopReplicationRequest $req) This API is used to stop the data replication from the source instance to the read-only instance.
 * @method Models\StopRollbackResponse StopRollback(Models\StopRollbackRequest $req) This API is used to cancel a rollback task in progress, and returns an async task ID. You can use the `DescribeAsyncRequestInfo` API to query the result of cancellation.
 * @method Models\SwitchCDBProxyResponse SwitchCDBProxy(Models\SwitchCDBProxyRequest $req) This API is used to switch database proxy after the proxy configuration is modified or the proxy version is upgraded.
 * @method Models\SwitchDBInstanceMasterSlaveResponse SwitchDBInstanceMasterSlave(Models\SwitchDBInstanceMasterSlaveRequest $req) This API is used for source-to-replica switch.
 * @method Models\SwitchDrInstanceToMasterResponse SwitchDrInstanceToMaster(Models\SwitchDrInstanceToMasterRequest $req) This API is used to promote a disaster recovery instance to source instance. The request parameter `Region` must be the region of the disaster recovery instance.
 * @method Models\SwitchForUpgradeResponse SwitchForUpgrade(Models\SwitchForUpgradeRequest $req) This API (SwitchForUpgrade) is used to switch to a new instance. You can initiate this process when the primary instance being upgraded is pending switch.
 * @method Models\UpgradeCDBProxyResponse UpgradeCDBProxy(Models\UpgradeCDBProxyRequest $req) This API is used to upgrade the configuration of database proxy.
 * @method Models\UpgradeCDBProxyVersionResponse UpgradeCDBProxyVersion(Models\UpgradeCDBProxyVersionRequest $req) This API is used to upgrade the version of database proxy.
 * @method Models\UpgradeDBInstanceResponse UpgradeDBInstance(Models\UpgradeDBInstanceRequest $req) This API is used to upgrade or downgrade a TencentDB instance, which can be a primary instance, disaster recovery instance, or read-only instance.
 * @method Models\UpgradeDBInstanceEngineVersionResponse UpgradeDBInstanceEngineVersion(Models\UpgradeDBInstanceEngineVersionRequest $req) This API (UpgradeDBInstanceEngineVersion) is used to upgrade the version of a TencentDB instance, which can be a primary instance, disaster recovery instance, or read-only instance.
 */

class CdbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cdb";

    /**
     * @var string
     */
    protected $version = "2017-03-20";

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
        $respClass = "TencentCloud"."\\".ucfirst("cdb")."\\"."V20170320\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
