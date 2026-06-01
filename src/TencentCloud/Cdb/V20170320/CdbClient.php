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

namespace TencentCloud\Cdb\V20170320;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdb\V20170320\Models as Models;

/**
 * @method Models\AddTimeWindowResponse AddTimeWindow(Models\AddTimeWindowRequest $req) This API is used to add a maintenance time window for cloud database instances to specify which time periods allow automatic execution of access operations.
 * @method Models\AdjustCdbProxyResponse AdjustCdbProxy(Models\AdjustCdbProxyRequest $req) This API is used to adjust database proxy configuration.
 * @method Models\AdjustCdbProxyAddressResponse AdjustCdbProxyAddress(Models\AdjustCdbProxyAddressRequest $req) This API is used to adjust the database proxy address configuration.
 * @method Models\AnalyzeAuditLogsResponse AnalyzeAuditLogs(Models\AnalyzeAuditLogsRequest $req) This API is used to perform aggregation statistics on specified data columns in audit log result sets with different filter criteria.
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) This API (AssociateSecurityGroups) is used to bind security groups to instances in batches.
 * @method Models\BalanceRoGroupLoadResponse BalanceRoGroupLoad(Models\BalanceRoGroupLoadRequest $req) This API is used to rebalance the loads of instances in an RO group. Please note that the database connections to those instances will be interrupted transiently; therefore, you should ensure that your application can reconnect to the databases. This operation should be performed with caution.
 * @method Models\CloseAuditServiceResponse CloseAuditService(Models\CloseAuditServiceRequest $req) This API is used to disable the audit service for an instance.
 * @method Models\CloseCDBProxyResponse CloseCDBProxy(Models\CloseCDBProxyRequest $req) This API is used to disable the database proxy.
 * @method Models\CloseCdbProxyAddressResponse CloseCdbProxyAddress(Models\CloseCdbProxyAddressRequest $req) This API is used to disable database proxy.
 * @method Models\CloseSSLResponse CloseSSL(Models\CloseSSLRequest $req) This API is used to close the SSL connectivity function.
 * @method Models\CloseWanServiceResponse CloseWanService(Models\CloseWanServiceRequest $req) This API (CloseWanService) is used to disable public network access for TencentDB instance, which will make public IP addresses inaccessible.
 * @method Models\CreateAccountsResponse CreateAccounts(Models\CreateAccountsRequest $req) This API is used to create cloud database accounts. It requires specifying a new account name and domain name as well as the corresponding password. You can also set the account's remark information and maximum number of available connections.
 * @method Models\CreateAuditLogFileResponse CreateAuditLogFile(Models\CreateAuditLogFileRequest $req) This API is used to create an audit log file for a TencentDB instance.
 * @method Models\CreateAuditPolicyResponse CreateAuditPolicy(Models\CreateAuditPolicyRequest $req) This API is used to create an audit policy for a TencentDB instance by associating an audit rule with the TencentDB instance.
 * @method Models\CreateAuditRuleTemplateResponse CreateAuditRuleTemplate(Models\CreateAuditRuleTemplateRequest $req) This API is used to create an audit rule template.
 * @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) This API is used to create a database backup.
 * @method Models\CreateCdbProxyResponse CreateCdbProxy(Models\CreateCdbProxyRequest $req) This API is used to create a database proxy for the primary instance.
 * @method Models\CreateCdbProxyAddressResponse CreateCdbProxyAddress(Models\CreateCdbProxyAddressRequest $req) This API is used to add a proxy address for database proxy.
 * @method Models\CreateCloneInstanceResponse CreateCloneInstance(Models\CreateCloneInstanceRequest $req) This API is used to create a clone instance from the source instance. You can specify a physical backup file or a rollback time point for the clone instance.
 * @method Models\CreateDBImportJobResponse CreateDBImportJob(Models\CreateDBImportJobRequest $req) This API is used to create a cloud database data import task.
Note that the file for the data import task must be uploaded to Tencent Cloud in advance. The user must perform file import on the console.
 * @method Models\CreateDBInstanceResponse CreateDBInstance(Models\CreateDBInstanceRequest $req) This API is used to create a cloud database instance with an annual/monthly subscription, including primary instance, disaster recovery instance, and read-only instance. You can create a cloud database instance by importing instance specification, MySQL version number, purchase period, and quantity information.

This API is an asynchronous API. You can also use the query instance list API (https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1) to query the instance details. When the Status of the instance is 1 and TaskStatus is 0, it means the instance has been delivered successfully.

1. First, please use the API for the query (https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1) to obtain the purchasable specifications of cloud databases, then please use the API for the query (https://www.tencentcloud.com/document/api/236/18566?from_cn_redirect=1) to query database price.
2. You can create up to 100 instances at a time, with a maximum instance duration of 36 months.
3. Support creating MySQL 5.5, MySQL 5.6, MySQL 5.7, and MySQL 8.0 versions.
4. Support creating primary instance, read-only instance, disaster recovery instance.
5. When ParamTemplateId or AlarmPolicyList is specified in the input parameters, you need to upgrade the SDK to the latest version to support it.
 * @method Models\CreateDBInstanceHourResponse CreateDBInstanceHour(Models\CreateDBInstanceHourRequest $req) This API is used to create pay-as-you-go instances. You can create a cloud database instance by inputting the instance specification, MySQL version number, quantity, etc. It supports the creation of primary instances, disaster recovery instances, and read-only instances.

This API is an async API. You can also use the API for the query (https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1) to check the instance details. When the instance Status is 1 and TaskStatus is 0, it means the instance has been delivered successfully.

1. First, please use the API for the query (https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1) to obtain the purchasable specifications of cloud databases, then please use the API for the query (https://www.tencentcloud.com/document/api/236/18566?from_cn_redirect=1) to query the instance selling price.
2. Supports a maximum of 100 instances created at a time, with a maximum duration of 36 months;
3. Support creating MySQL 5.5, MySQL 5.6, MySQL 5.7, and MySQL 8.0 versions.
4. Support creating primary instances, disaster recovery instances, and read-only instances.
 * @method Models\CreateDatabaseResponse CreateDatabase(Models\CreateDatabaseRequest $req) This API is used to create a database in a TencentDB instance.
 * @method Models\CreateParamTemplateResponse CreateParamTemplate(Models\CreateParamTemplateRequest $req) This API is used to create a parameter template.
Description: The parameter template is a common component, effective across all regions once configured. For api calls, Guangzhou or Singapore is available to configure region.
 * @method Models\CreateRoInstanceIpResponse CreateRoInstanceIp(Models\CreateRoInstanceIpRequest $req) This API is used to create a VIP exclusive to a TencentDB read-only instance.
 * @method Models\CreateRotationPasswordResponse CreateRotationPassword(Models\CreateRotationPasswordRequest $req) This API is used to enable password rotation.
 * @method Models\DeleteAccountsResponse DeleteAccounts(Models\DeleteAccountsRequest $req) This API is used to delete CDB accounts.
 * @method Models\DeleteAuditLogFileResponse DeleteAuditLogFile(Models\DeleteAuditLogFileRequest $req) This API is used to delete an audit log file of a TencentDB instance.
 * @method Models\DeleteAuditPolicyResponse DeleteAuditPolicy(Models\DeleteAuditPolicyRequest $req) This API is used to delete an audit policy.
 * @method Models\DeleteAuditRuleTemplatesResponse DeleteAuditRuleTemplates(Models\DeleteAuditRuleTemplatesRequest $req) This API is used to delete audit rule templates.
 * @method Models\DeleteBackupResponse DeleteBackup(Models\DeleteBackupRequest $req) This API is used to delete database backups. It only supports deleting manually initiated backups.
 * @method Models\DeleteDatabaseResponse DeleteDatabase(Models\DeleteDatabaseRequest $req) This API is used to delete a database in a cloud database instance.
 * @method Models\DeleteParamTemplateResponse DeleteParamTemplate(Models\DeleteParamTemplateRequest $req) This API is used to delete parameter template.
Description: The parameter template is a common component, effective across all regions once configured. For api calls, Guangzhou or Singapore is available to configure region.
 * @method Models\DeleteRotationPasswordResponse DeleteRotationPassword(Models\DeleteRotationPasswordRequest $req) This API is used to close instance account password rotation.
 * @method Models\DeleteTimeWindowResponse DeleteTimeWindow(Models\DeleteTimeWindowRequest $req) This API is used to delete the maintenance time window of a cloud database instance. After deleting the instance maintenance window, the default maintenance period is 03:00-04:00 daily with a data validation delay threshold of 10 seconds. When switching to a new instance during the maintenance time window, the switch is performed by default at 03:00-04:00.
 * @method Models\DescribeAccountPrivilegesResponse DescribeAccountPrivileges(Models\DescribeAccountPrivilegesRequest $req) This API is used to query the permission information supported by a cloud database account.
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) This API is used to query ALL account information of the cloud database.
 * @method Models\DescribeAsyncRequestInfoResponse DescribeAsyncRequestInfo(Models\DescribeAsyncRequestInfoRequest $req) This API (DescribeAsyncRequestInfo) is used to query the async task execution result of a TencentDB instance.
 * @method Models\DescribeAuditConfigResponse DescribeAuditConfig(Models\DescribeAuditConfigRequest $req) This API is used to query the service configurations for a TencentDB audit policy, including the audit log retention period.
 * @method Models\DescribeAuditInstanceListResponse DescribeAuditInstanceList(Models\DescribeAuditInstanceListRequest $req) This API is used to obtain the list of audit instances.
 * @method Models\DescribeAuditLogFilesResponse DescribeAuditLogFiles(Models\DescribeAuditLogFilesRequest $req) This API is used to query the audit log files of a TencentDB instance.
 * @method Models\DescribeAuditLogsResponse DescribeAuditLogs(Models\DescribeAuditLogsRequest $req) This API is used to query database audit logs.
 * @method Models\DescribeAuditPoliciesResponse DescribeAuditPolicies(Models\DescribeAuditPoliciesRequest $req) This API is used to query audit policies of cloud database instances.
 * @method Models\DescribeAuditRuleTemplateModifyHistoryResponse DescribeAuditRuleTemplateModifyHistory(Models\DescribeAuditRuleTemplateModifyHistoryRequest $req) This API is used to query the change history of rule templates.
 * @method Models\DescribeAuditRuleTemplatesResponse DescribeAuditRuleTemplates(Models\DescribeAuditRuleTemplatesRequest $req) This API is used to query the information of audit rule templates.
 * @method Models\DescribeAuditRulesResponse DescribeAuditRules(Models\DescribeAuditRulesRequest $req) This API is used to create audit rules no longer supported.

This API is used to query audit rules in current region.
 * @method Models\DescribeBackupConfigResponse DescribeBackupConfig(Models\DescribeBackupConfigRequest $req) This API is used to query database backup configuration info.
 * @method Models\DescribeBackupDecryptionKeyResponse DescribeBackupDecryptionKey(Models\DescribeBackupDecryptionKeyRequest $req) This API is used to query the decryption key of a backup file.
 * @method Models\DescribeBackupDownloadRestrictionResponse DescribeBackupDownloadRestriction(Models\DescribeBackupDownloadRestrictionRequest $req) This API is used to query the restrictions of downloading backups in a region.
 * @method Models\DescribeBackupEncryptionStatusResponse DescribeBackupEncryptionStatus(Models\DescribeBackupEncryptionStatusRequest $req) This API is used to query the default encryption status of an instance backup.
 * @method Models\DescribeBackupOverviewResponse DescribeBackupOverview(Models\DescribeBackupOverviewRequest $req) This API is used to query the backup overview of a user. It will return the user's current total number of backups, total capacity used by backups, capacity in the free tier, and paid capacity (all capacity values are in bytes).
 * @method Models\DescribeBackupSummariesResponse DescribeBackupSummaries(Models\DescribeBackupSummariesRequest $req) This API is used to query backup statistics, return the occupied capacity of backups by instance as well as the count and capacity of data backup and log backup for each instance (in bytes).
 * @method Models\DescribeBackupsResponse DescribeBackups(Models\DescribeBackupsRequest $req) This API (DescribeBackups) is used to query the backups of a TencentDB instance.
 * @method Models\DescribeBinlogBackupOverviewResponse DescribeBinlogBackupOverview(Models\DescribeBinlogBackupOverviewRequest $req) This API is used to query the log backup overview of a user in the current region.
 * @method Models\DescribeBinlogsResponse DescribeBinlogs(Models\DescribeBinlogsRequest $req) This API is used to query the list of binlog files of a TencentDB instance.
 * @method Models\DescribeCPUExpandStrategyInfoResponse DescribeCPUExpandStrategyInfo(Models\DescribeCPUExpandStrategyInfoRequest $req) This API is used to query the CPU Elastic Scaling information of an instance.
 * @method Models\DescribeCdbProxyInfoResponse DescribeCdbProxyInfo(Models\DescribeCdbProxyInfoRequest $req) This API is used to query database proxy detailed information.
 * @method Models\DescribeCdbZoneConfigResponse DescribeCdbZoneConfig(Models\DescribeCdbZoneConfigRequest $req) This API is used to query the purchasable specifications of TencentDB instances in a region.
 * @method Models\DescribeCloneListResponse DescribeCloneList(Models\DescribeCloneListRequest $req) This API is used to query the clone task list of a user instance.
 * @method Models\DescribeDBFeaturesResponse DescribeDBFeatures(Models\DescribeDBFeaturesRequest $req) This API is used to query cloud database version attributes, including whether database encryption and database audit are supported, and other features.
 * @method Models\DescribeDBImportRecordsResponse DescribeDBImportRecords(Models\DescribeDBImportRecordsRequest $req) This API (DescribeDBImportRecords) is used to query the records of import tasks in a TencentDB instance.
 * @method Models\DescribeDBInstanceCharsetResponse DescribeDBInstanceCharset(Models\DescribeDBInstanceCharsetRequest $req) This API (DescribeDBInstanceCharset) is used to query the character set and its name of a TencentDB instance.
 * @method Models\DescribeDBInstanceConfigResponse DescribeDBInstanceConfig(Models\DescribeDBInstanceConfigRequest $req) This API is used to query the configuration message of a cloud database instance, including sync mode and deployment mode.
 * @method Models\DescribeDBInstanceGTIDResponse DescribeDBInstanceGTID(Models\DescribeDBInstanceGTIDRequest $req) This API (DescribeDBInstanceGTID) is used to query whether GTID is activated for a TencentDB instance. Instances on or below version 5.5 are not supported.
 * @method Models\DescribeDBInstanceInfoResponse DescribeDBInstanceInfo(Models\DescribeDBInstanceInfoRequest $req) This API is used to query the basic information of an instance, including instance ID, instance name, and whether encryption is enabled. Querying read-only instances is not supported.
 * @method Models\DescribeDBInstanceLogToCLSResponse DescribeDBInstanceLogToCLS(Models\DescribeDBInstanceLogToCLSRequest $req) This API is used to query the configuration of slow log and error log delivery to CLS for an instance. It filters out the present instance log delivery configuration to CLS by AppId, Region, and instance ID.
 * @method Models\DescribeDBInstanceRebootTimeResponse DescribeDBInstanceRebootTime(Models\DescribeDBInstanceRebootTimeRequest $req) This API is used to query the expected time required to restart a cloud database instance.
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) This API is used to query the list of TencentDB for MySQL instances. It supports filtering instances by conditions such as project ID, instance ID, access address, and instance status. It also supports querying the list of information about primary instances, disaster recovery instances, and read-only instances.
This API is used to return the availability zone (AZ) status during purchase, which does not change along with the proactive HA switch. If you want to know the AZ status in real time, query through the [DescribeDBInstanceConfig](https://www.tencentcloud.com/document/product/236/17491?from_cn_redirect=1) API.
 * @method Models\DescribeDBPriceResponse DescribeDBPrice(Models\DescribeDBPriceRequest $req) This API is used to query the price of purchasing or renewing a cloud database instance. It supports querying the price of pay-as-you-go or yearly/monthly subscription. You can input instance type, purchase period, purchase quantity, memory size, disk capacity and availability zone information to query instance price. You can input instance name to query instance renewal price.

Note: To request a price for a certain region, please use the access point of the corresponding region. For access point information, please refer to the <a href="https://www.tencentcloud.com/document/api/236/15832?from_cn_redirect=1">service address</a> document. For example, to request a price for the Guangzhou region, send the request to: cdb.ap-guangzhou.tencentcloudapi.com. Likewise, for the Shanghai region, send the request to: cdb.ap-shanghai.tencentcloudapi.com.
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) This API (DescribeDBSecurityGroups) is used to query the security group details of an instance.
 * @method Models\DescribeDBSwitchRecordsResponse DescribeDBSwitchRecords(Models\DescribeDBSwitchRecordsRequest $req) This API (DescribeDBSwitchRecords) is used to query the instance switch records.
 * @method Models\DescribeDataBackupOverviewResponse DescribeDataBackupOverview(Models\DescribeDataBackupOverviewRequest $req) This API is used to query the data backup overview of a user in the current region.
 * @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) This API is used to query the information of databases in a TencentDB instance which must be a source or disaster recovery instance.
 * @method Models\DescribeDefaultParamsResponse DescribeDefaultParams(Models\DescribeDefaultParamsRequest $req) This API (DescribeDefaultParams) is used to query the list of default configurable parameters.
 * @method Models\DescribeDeviceMonitorInfoResponse DescribeDeviceMonitorInfo(Models\DescribeDeviceMonitorInfoRequest $req) This API (DescribeDeviceMonitorInfo) is used to query the monitoring information of a TencentDB physical machine on the day. Currently, it only supports instances with 488 GB memory and 6 TB disk.
 * @method Models\DescribeErrorLogDataResponse DescribeErrorLogData(Models\DescribeErrorLogDataRequest $req) This API is used to query the error logs of an instance over the past month by search criteria.
Note: the HTTP response packet will be very large if it contain a single large error log, which causes the API call to time out. If this happens, we recommend you lower the value of the input parameter `Limit` to reduce the packet size so that the API can respond timely.
 * @method Models\DescribeInstanceAlarmEventsResponse DescribeInstanceAlarmEvents(Models\DescribeInstanceAlarmEventsRequest $req) This API is used to query event information of instance occurrence.
 * @method Models\DescribeInstanceParamRecordsResponse DescribeInstanceParamRecords(Models\DescribeInstanceParamRecordsRequest $req) This API (DescribeInstanceParamRecords) is used to query the parameter modification records of an instance.
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) This API (DescribeInstanceParams) is used to query the list of parameters for an instance.
 * @method Models\DescribeInstancePasswordComplexityResponse DescribeInstancePasswordComplexity(Models\DescribeInstancePasswordComplexityRequest $req) This API is used to query the password complexity parameter list of the instance.
 * @method Models\DescribeInstanceUpgradeCheckJobResponse DescribeInstanceUpgradeCheckJob(Models\DescribeInstanceUpgradeCheckJobRequest $req) This API is used to query the instance version upgrade validation task.
 * @method Models\DescribeInstanceUpgradeTypeResponse DescribeInstanceUpgradeType(Models\DescribeInstanceUpgradeTypeRequest $req) This API is used to query the upgrade type of a database instance.
 * @method Models\DescribeLocalBinlogConfigResponse DescribeLocalBinlogConfig(Models\DescribeLocalBinlogConfigRequest $req) This API is used to query the retention policy of local binlog of an instance.
 * @method Models\DescribeParamTemplateInfoResponse DescribeParamTemplateInfo(Models\DescribeParamTemplateInfoRequest $req) This API is used to query parameter template details.
Description: The parameter template is a common component, effective across all regions once configured. For api calls, Guangzhou or Singapore is available to configure region.
 * @method Models\DescribeParamTemplatesResponse DescribeParamTemplates(Models\DescribeParamTemplatesRequest $req) This API is used to query the parameter template list.
Description: The parameter template is a common component, effective across all regions once configured. For api calls, Guangzhou or Singapore is available to configure region.
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) This API (DescribeProjectSecurityGroups) is used to query the security group details of a project.
 * @method Models\DescribeProxyCustomConfResponse DescribeProxyCustomConf(Models\DescribeProxyCustomConfRequest $req) This API is used to query the proxy configuration.
 * @method Models\DescribeProxySupportParamResponse DescribeProxySupportParam(Models\DescribeProxySupportParamRequest $req) This API is used to query instance support proxy version and parameters.
 * @method Models\DescribeRemoteBackupConfigResponse DescribeRemoteBackupConfig(Models\DescribeRemoteBackupConfigRequest $req) This API is used to query the configuration information of a remote TencentDB instance backup.
 * @method Models\DescribeRoGroupsResponse DescribeRoGroups(Models\DescribeRoGroupsRequest $req) This API is used to query all RO groups of a cloud database instance.
 * @method Models\DescribeRoMinScaleResponse DescribeRoMinScale(Models\DescribeRoMinScaleRequest $req) This API is used to query the minimum specification of a read-only instance that can be purchased or upgraded to.
 * @method Models\DescribeRollbackRangeTimeResponse DescribeRollbackRangeTime(Models\DescribeRollbackRangeTimeRequest $req) This API (DescribeRollbackRangeTime) is used to query the time range available for instance rollback.
 * @method Models\DescribeRollbackTaskDetailResponse DescribeRollbackTaskDetail(Models\DescribeRollbackTaskDetailRequest $req) This API is used to query the rollback task detail of a cloud database instance.
 * @method Models\DescribeSSLStatusResponse DescribeSSLStatus(Models\DescribeSSLStatusRequest $req) This API is used to query SSL activation status. If SSL has been enabled, it will synchronously return the certificate download URL.
 * @method Models\DescribeSlowLogDataResponse DescribeSlowLogData(Models\DescribeSlowLogDataRequest $req) This API is used to search for instance slow logs under usage conditions. Only allow viewing slow logs within one month.
During use, pay attention: a single slow log may be too large, causing the entire http request return content to be too large, furthermore leading to API timeout. Once timed out, narrow down the Limit parameter value when querying, thereby reducing the size and enabling the API to return content promptly.
 * @method Models\DescribeSlowLogsResponse DescribeSlowLogs(Models\DescribeSlowLogsRequest $req) This API is used to obtain the slow query log of a cloud database instance.
Description: If the data volume is too large in a single query, it may lead to response timeout. We recommend shortening the query time range per request, such as one hour, to avoid timeout.
 * @method Models\DescribeSupportedPrivilegesResponse DescribeSupportedPrivileges(Models\DescribeSupportedPrivilegesRequest $req) This API (DescribeSupportedPrivileges) is used to query the information of TencentDB account permissions, including global permissions, database permissions, table permissions, and column permissions.
 * @method Models\DescribeTableColumnsResponse DescribeTableColumns(Models\DescribeTableColumnsRequest $req) This API is used to query table column information of a designated database in a cloud database instance. It only supports primary instance and disaster recovery instance.
 * @method Models\DescribeTablesResponse DescribeTables(Models\DescribeTablesRequest $req) This API is used to query the information of database tables in a TencentDB instance. It only supports source or disaster recovery instances.
 * @method Models\DescribeTagsOfInstanceIdsResponse DescribeTagsOfInstanceIds(Models\DescribeTagsOfInstanceIdsRequest $req) This API is used to access tag information of the instance for cloud databases.
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) This API (DescribeTasks) is used to query the list of tasks for a TencentDB instance.
 * @method Models\DescribeTimeWindowResponse DescribeTimeWindow(Models\DescribeTimeWindowRequest $req) This API (DescribeTimeWindow) is used to query the maintenance time window of a TencentDB instance.
 * @method Models\DescribeUploadedFilesResponse DescribeUploadedFiles(Models\DescribeUploadedFilesRequest $req) This API is used to query the list of SQL files imported by users. The common request parameter `Region` must be `ap-shanghai`.
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) This API (DisassociateSecurityGroups) is used to unbind security groups from instances in batches.
 * @method Models\IsolateDBInstanceResponse IsolateDBInstance(Models\IsolateDBInstanceRequest $req) This API is used to isolate a cloud database instance. After an instance is isolated, you cannot access the database via IP and port. The isolated instance can be started in the recycle bin. If the instance is isolated due to arrears, please recharge as soon as possible.
 * @method Models\ModifyAccountDescriptionResponse ModifyAccountDescription(Models\ModifyAccountDescriptionRequest $req) This API (ModifyAccountDescription) is used to modify the remarks of a TencentDB instance account.
 * @method Models\ModifyAccountMaxUserConnectionsResponse ModifyAccountMaxUserConnections(Models\ModifyAccountMaxUserConnectionsRequest $req) This API is used to modify the maximum number of available connections for a cloud database account.
 * @method Models\ModifyAccountPasswordResponse ModifyAccountPassword(Models\ModifyAccountPasswordRequest $req) This API (ModifyAccountPassword) is used to modify the password of a TencentDB instance account.
 * @method Models\ModifyAccountPrivilegesResponse ModifyAccountPrivileges(Models\ModifyAccountPrivilegesRequest $req) This API is used to modify the permissions of a TencentDB instance account.

Note that when modifying account permissions, you need to pass in the full permission information of the account. You can [query the account permission information
](https://intl.cloud.tencent.com/document/api/236/17500?from_cn_redirect=1) first before modifying permissions.
 * @method Models\ModifyAuditConfigResponse ModifyAuditConfig(Models\ModifyAuditConfigRequest $req) This API is used to modify the service configurations for a TencentDB audit policy, including the audit log retention period.
 * @method Models\ModifyAuditRuleTemplatesResponse ModifyAuditRuleTemplates(Models\ModifyAuditRuleTemplatesRequest $req) This API is used to modify audit rule templates.
 * @method Models\ModifyAuditServiceResponse ModifyAuditService(Models\ModifyAuditServiceRequest $req) This API is used to modify the service configurations for a TencentDB instance, including the audit log retention period and the audit rules.
 * @method Models\ModifyAutoRenewFlagResponse ModifyAutoRenewFlag(Models\ModifyAutoRenewFlagRequest $req) This API is used to modify the auto-renewal flag of a TencentDB instance.
 * @method Models\ModifyBackupConfigResponse ModifyBackupConfig(Models\ModifyBackupConfigRequest $req) This API is used to modify database backup configuration.
 * @method Models\ModifyBackupDownloadRestrictionResponse ModifyBackupDownloadRestriction(Models\ModifyBackupDownloadRestrictionRequest $req) This API is used to modify the restrictions of downloading backups in a region. You can specify which types of networks (private, or both private and public), VPCs, and IPs to download backups.
 * @method Models\ModifyBackupEncryptionStatusResponse ModifyBackupEncryptionStatus(Models\ModifyBackupEncryptionStatusRequest $req) This API is used to set the encryption status of an instance backup.
 * @method Models\ModifyCdbProxyAddressDescResponse ModifyCdbProxyAddressDesc(Models\ModifyCdbProxyAddressDescRequest $req) This API is used to modify the proxy address description.
 * @method Models\ModifyCdbProxyAddressVipAndVPortResponse ModifyCdbProxyAddressVipAndVPort(Models\ModifyCdbProxyAddressVipAndVPortRequest $req) This API is used to modify the database proxy address VPC information.
 * @method Models\ModifyCdbProxyParamResponse ModifyCdbProxyParam(Models\ModifyCdbProxyParamRequest $req) This API is used to configure database proxy parameters.
 * @method Models\ModifyDBInstanceLogToCLSResponse ModifyDBInstanceLogToCLS(Models\ModifyDBInstanceLogToCLSRequest $req) This API is used to enable or disable the feature of sending CDB slow and error logs to CLS.
 * @method Models\ModifyDBInstanceModesResponse ModifyDBInstanceModes(Models\ModifyDBInstanceModesRequest $req) This API is used to change the mode of a cloud database.
 * @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) This API (ModifyDBInstanceName) is used to rename a TencentDB instance.
 * @method Models\ModifyDBInstanceProjectResponse ModifyDBInstanceProject(Models\ModifyDBInstanceProjectRequest $req) This API (ModifyDBInstanceProject) is used to modify the project to which a TencentDB instance belongs.
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) This API (ModifyDBInstanceSecurityGroups) is used to modify the security groups bound to a TencentDB instance.
 * @method Models\ModifyDBInstanceVipVportResponse ModifyDBInstanceVipVport(Models\ModifyDBInstanceVipVportRequest $req) This API is used to modify the IP and port number of a cloud database instance. It can also perform basic network to VPC network and subnet change under VPC network.
 * @method Models\ModifyInstanceParamResponse ModifyInstanceParam(Models\ModifyInstanceParamRequest $req) This API (ModifyInstanceParam) is used to modify instance parameters.
 * @method Models\ModifyInstancePasswordComplexityResponse ModifyInstancePasswordComplexity(Models\ModifyInstancePasswordComplexityRequest $req) This API is used to modify the password complexity of a cloud database instance.
 * @method Models\ModifyInstanceTagResponse ModifyInstanceTag(Models\ModifyInstanceTagRequest $req) This API (ModifyInstanceTag) is used to add, modify, or delete an instance tag.
 * @method Models\ModifyLocalBinlogConfigResponse ModifyLocalBinlogConfig(Models\ModifyLocalBinlogConfigRequest $req) This API is used to modify the local binlog retention policy of an instance.
 * @method Models\ModifyNameOrDescByDpIdResponse ModifyNameOrDescByDpId(Models\ModifyNameOrDescByDpIdRequest $req) This API is used to modify the name or description of a placement group.
 * @method Models\ModifyParamTemplateResponse ModifyParamTemplate(Models\ModifyParamTemplateRequest $req) This API is used to modify parameter templates.
Description: The parameter template is a common component, effective across all regions once configured. For api calls, Guangzhou or Singapore is available to configure region.
 * @method Models\ModifyProtectModeResponse ModifyProtectMode(Models\ModifyProtectModeRequest $req) This API is used to modify the sync method of an instance.
Description: This API can be called only by an exclusive cluster. This API is about to go offline.
 * @method Models\ModifyRemoteBackupConfigResponse ModifyRemoteBackupConfig(Models\ModifyRemoteBackupConfigRequest $req) This API is used to modify the configuration information of a remote TencentDB instance backup.
 * @method Models\ModifyRoGroupInfoResponse ModifyRoGroupInfo(Models\ModifyRoGroupInfoRequest $req) This API is used to update the information of a TencentDB RO group, such as configuring a read-only instance removal policy in case of excessive delay, setting read weights of read-only instances, and setting the replication delay.
 * @method Models\ModifyRoGroupVipVportResponse ModifyRoGroupVipVport(Models\ModifyRoGroupVipVportRequest $req) This API is used to modify the vip and vport of a Ro group.
 * @method Models\ModifyTimeWindowResponse ModifyTimeWindow(Models\ModifyTimeWindowRequest $req) This API (ModifyTimeWindow) is used to update the maintenance time window of a TencentDB instance.
 * @method Models\OfflineIsolatedInstancesResponse OfflineIsolatedInstances(Models\OfflineIsolatedInstancesRequest $req) This api is used to deactivate cloud database instances in quarantined state now. The instance Status for row operations must be quarantined state, such as instances with Status value 5 queried through the query instance list api.

This API is used to perform asynchronous operation, and delays may occur when reclaiming partial resources. You can query by using the query instance list API (https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1) with specified instance InstanceId and status Status as [5,6,7]. Among them, 5 represents isolated, 6 represents offline, and 7 represents Offline. If the return instance is empty, all instance resources have been released.

Note that after the instance goes offline, relevant resources and data cannot be recovered. Proceed with caution.
 * @method Models\OpenAuditServiceResponse OpenAuditService(Models\OpenAuditServiceRequest $req) This API is used to activate audit service for CDB instance.
 * @method Models\OpenDBInstanceEncryptionResponse OpenDBInstanceEncryption(Models\OpenDBInstanceEncryptionRequest $req) This API is used to enable data storage encryption for instance and support users to specify custom keys.

Note that before enabling data storage encryption for instance, perform the following operations:

1. Perform instance initialization (https://www.tencentcloud.com/document/api/236/15873?from_cn_redirect=1).

2. Enable the KMS service (https://console.cloud.tencent.com/kms2).

3. Grant the cloud database (MySQL) permission to access the KMS key (https://console.cloud.tencent.com/cam/role). The role name is MySQL_QCSRole and the preset policy name is QcloudAccessForMySQLRole.
4. Closing is not allowed after encryption being enabled.

This API may take up to 10s, and the client may timeout. If the API call returns InternalError, please call [DescribeDBInstanceInfo](https://www.tencentcloud.com/document/product/236/44160?from_cn_redirect=1) to confirm whether backend encryption is successfully enabled. After calling, if the parameter Encryption is YES, it means activation is successful.
 * @method Models\OpenDBInstanceGTIDResponse OpenDBInstanceGTID(Models\OpenDBInstanceGTIDRequest $req) This API (OpenDBInstanceGTID) is used to enable GTID for a TencentDB instance. Only instances on or above version 5.6 are supported.
 * @method Models\OpenSSLResponse OpenSSL(Models\OpenSSLRequest $req) This API is used to enable SSL connectivity function.
 * @method Models\OpenWanServiceResponse OpenWanService(Models\OpenWanServiceRequest $req) This API (OpenWanService) is used to enable public network access for an instance.

Note that before enabling public network access, you need to first [initialize the instance](https://intl.cloud.tencent.com/document/api/236/15873?from_cn_redirect=1).
 * @method Models\ReleaseIsolatedDBInstancesResponse ReleaseIsolatedDBInstances(Models\ReleaseIsolatedDBInstancesRequest $req) This API is used to restore isolated cloud database instances. It is only used for de-isolating pay-as-you-go instances. For monthly subscription instances, please use RenewDBInstance.
 * @method Models\ReloadBalanceProxyNodeResponse ReloadBalanceProxyNode(Models\ReloadBalanceProxyNodeRequest $req) This API is used to rebalance the load on database proxy.
 * @method Models\RenewDBInstanceResponse RenewDBInstance(Models\RenewDBInstanceRequest $req) This API is used to renew cloud database instances. It supports yearly/monthly subscription instances. Pay-as-you-go instances can be renewed as yearly/monthly subscription instances through this API.
 * @method Models\ResetPasswordResponse ResetPassword(Models\ResetPasswordRequest $req) Manually refresh rotation passwords
 * @method Models\ResetRootAccountResponse ResetRootAccount(Models\ResetRootAccountRequest $req) This API is used to reset the root account and initialize the account permissions.
 * @method Models\RestartDBInstancesResponse RestartDBInstances(Models\RestartDBInstancesRequest $req) This API is used to restart cloud database instances.

Note:
This API supports performing a restart operation on primary instances, read-only instances, and disaster recovery instances.
2. The instance status must be normal and no other async tasks are in progress.
 * @method Models\StartBatchRollbackResponse StartBatchRollback(Models\StartBatchRollbackRequest $req) This API (StartBatchRollback) is used to roll back the tables of a TencentDB instance in batches.
 * @method Models\StartCpuExpandResponse StartCpuExpand(Models\StartCpuExpandRequest $req) This API is used to enable CPU Elastic Scaling, including one-time manual scale-out and automatic elastic scaling.
 * @method Models\StartReplicationResponse StartReplication(Models\StartReplicationRequest $req) This API is used to enable RO replication and sync data from the primary instance.
 * @method Models\StopCpuExpandResponse StopCpuExpand(Models\StopCpuExpandRequest $req) This API is used to disable elastic CPU expansion.
 * @method Models\StopDBImportJobResponse StopDBImportJob(Models\StopDBImportJobRequest $req) This API is used to terminate a data import task.
Description: Only incomplete import jobs support termination, and the executed SQL part is retained after termination.
 * @method Models\StopReplicationResponse StopReplication(Models\StopReplicationRequest $req) This API is used to stop RO replication and interrupt data sync from the primary instance.
 * @method Models\StopRollbackResponse StopRollback(Models\StopRollbackRequest $req) This api is used to revoke an ongoing rollback task of an instance. The api response returns an Asynchronous Task ID. The revocation result can be queried through [DescribeAsyncRequestInfo](https://www.tencentcloud.com/document/api/236/20410?from_cn_redirect=1) for task execution.
 * @method Models\SubmitInstanceUpgradeCheckJobResponse SubmitInstanceUpgradeCheckJob(Models\SubmitInstanceUpgradeCheckJobRequest $req) This API is used to submit an instance version upgrade validation task.
 * @method Models\SwitchCDBProxyResponse SwitchCDBProxy(Models\SwitchCDBProxyRequest $req) This API is used to manually initiate an immediate switch after database proxy configuration modification or edition upgrade.
 * @method Models\SwitchDBInstanceMasterSlaveResponse SwitchDBInstanceMasterSlave(Models\SwitchDBInstanceMasterSlaveRequest $req) This API is used for source-to-replica switch.
 * @method Models\SwitchDrInstanceToMasterResponse SwitchDrInstanceToMaster(Models\SwitchDrInstanceToMasterRequest $req) This API is used to switch a cloud database disaster recovery instance to primary instance. Note that the request must be sent to the region where the disaster recovery instance is located.
 * @method Models\SwitchForUpgradeResponse SwitchForUpgrade(Models\SwitchForUpgradeRequest $req) This API (SwitchForUpgrade) is used to switch to a new instance. You can initiate this process when the primary instance being upgraded is pending switch.
 * @method Models\UpgradeCDBProxyVersionResponse UpgradeCDBProxyVersion(Models\UpgradeCDBProxyVersionRequest $req) This API is used to upgrade the database proxy version.
 * @method Models\UpgradeDBInstanceResponse UpgradeDBInstance(Models\UpgradeDBInstanceRequest $req) This API is used to upgrade or downgrade the configuration of a cloud database instance. Supported instance types include primary instance, disaster recovery instance and read-only instance. If you need to migrate business, fill in the instance specification (CPU, memory), otherwise the system will use the minimum allowed specification by default.
 * @method Models\UpgradeDBInstanceEngineVersionResponse UpgradeDBInstanceEngineVersion(Models\UpgradeDBInstanceEngineVersionRequest $req) This API is used to upgrade the version of a cloud database instance. Supported instance types include primary instance, disaster recovery instance, and read-only instance. Before upgrade, submit an upgrade check task via SubmitInstanceUpgradeCheckJob (https://www.tencentcloud.com/document/product/236/110468?from_cn_redirect=1).
 */

class CdbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdb.intl.tencentcloudapi.com";

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
