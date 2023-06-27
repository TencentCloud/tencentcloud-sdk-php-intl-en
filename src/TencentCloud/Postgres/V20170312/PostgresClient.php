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

namespace TencentCloud\Postgres\V20170312;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Postgres\V20170312\Models as Models;

/**
 * @method Models\AddDBInstanceToReadOnlyGroupResponse AddDBInstanceToReadOnlyGroup(Models\AddDBInstanceToReadOnlyGroupRequest $req) This API is used to add a read-only replica to an RO group.
 * @method Models\CloneDBInstanceResponse CloneDBInstance(Models\CloneDBInstanceRequest $req) This API is used to clone an instance by specifying a backup set or a point in time.
 * @method Models\CloseDBExtranetAccessResponse CloseDBExtranetAccess(Models\CloseDBExtranetAccessRequest $req) This API is used to disable the public network link to an instance.
 * @method Models\CloseServerlessDBExtranetAccessResponse CloseServerlessDBExtranetAccess(Models\CloseServerlessDBExtranetAccessRequest $req) This API is used to disable public network access for a PostgreSQL for Serverless instance.
 * @method Models\CreateBaseBackupResponse CreateBaseBackup(Models\CreateBaseBackupRequest $req) This API is used to create a full backup of an instance.
 * @method Models\CreateDBInstanceNetworkAccessResponse CreateDBInstanceNetworkAccess(Models\CreateDBInstanceNetworkAccessRequest $req) This API is used to add a network for an instance.
 * @method Models\CreateDBInstancesResponse CreateDBInstances(Models\CreateDBInstancesRequest $req) This API is used to create (but not initialize) one or more TencentDB for PostgreSQL instances.
 * @method Models\CreateInstancesResponse CreateInstances(Models\CreateInstancesRequest $req) This API is used to create and initialize one or more TencentDB for PostgreSQL instances.
 * @method Models\CreateParameterTemplateResponse CreateParameterTemplate(Models\CreateParameterTemplateRequest $req) This API is used to create a parameter template.
 * @method Models\CreateReadOnlyDBInstanceResponse CreateReadOnlyDBInstance(Models\CreateReadOnlyDBInstanceRequest $req) This API is used to create read-only replicas.
 * @method Models\CreateReadOnlyGroupResponse CreateReadOnlyGroup(Models\CreateReadOnlyGroupRequest $req) This API is used to create an RO group.
 * @method Models\CreateReadOnlyGroupNetworkAccessResponse CreateReadOnlyGroupNetworkAccess(Models\CreateReadOnlyGroupNetworkAccessRequest $req) This API is used to add a network for an RO group.
 * @method Models\CreateServerlessDBInstanceResponse CreateServerlessDBInstance(Models\CreateServerlessDBInstanceRequest $req) This API is used to create a PostgreSQL for Serverless instance. If the creation succeeds, the instance ID will be returned.
 * @method Models\DeleteBaseBackupResponse DeleteBaseBackup(Models\DeleteBaseBackupRequest $req) This API is used to delete the specified full backup of an instance.
 * @method Models\DeleteDBInstanceNetworkAccessResponse DeleteDBInstanceNetworkAccess(Models\DeleteDBInstanceNetworkAccessRequest $req) This API is used to delete a network of an instance.
 * @method Models\DeleteLogBackupResponse DeleteLogBackup(Models\DeleteLogBackupRequest $req) This API is used to delete the specified log backup of an instance.
 * @method Models\DeleteParameterTemplateResponse DeleteParameterTemplate(Models\DeleteParameterTemplateRequest $req) This API is used to delete a parameter template.
 * @method Models\DeleteReadOnlyGroupResponse DeleteReadOnlyGroup(Models\DeleteReadOnlyGroupRequest $req) This API is used to delete an RO group.
 * @method Models\DeleteReadOnlyGroupNetworkAccessResponse DeleteReadOnlyGroupNetworkAccess(Models\DeleteReadOnlyGroupNetworkAccessRequest $req) This API is used to delete a network of an RO group.
 * @method Models\DeleteServerlessDBInstanceResponse DeleteServerlessDBInstance(Models\DeleteServerlessDBInstanceRequest $req) This API is used to delete a PostgreSQL for Serverless instance.
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) This API is used to get the instance user list.
 * @method Models\DescribeAvailableRecoveryTimeResponse DescribeAvailableRecoveryTime(Models\DescribeAvailableRecoveryTimeRequest $req) This API is used to query the available restoration time of an instance.
 * @method Models\DescribeBackupDownloadRestrictionResponse DescribeBackupDownloadRestriction(Models\DescribeBackupDownloadRestrictionRequest $req) This API is used to query the backup download restrictions.
 * @method Models\DescribeBackupDownloadURLResponse DescribeBackupDownloadURL(Models\DescribeBackupDownloadURLRequest $req) This API is used to get the download URL of a backup.
 * @method Models\DescribeBackupOverviewResponse DescribeBackupOverview(Models\DescribeBackupOverviewRequest $req) This API is used to query the backup overview. It will return the current number and size of backups, free backup space size, and paid backup space size (all size values are in bytes).
 * @method Models\DescribeBackupPlansResponse DescribeBackupPlans(Models\DescribeBackupPlansRequest $req) This API is used to query all backup plans of an instance.
 * @method Models\DescribeBackupSummariesResponse DescribeBackupSummaries(Models\DescribeBackupSummariesRequest $req) This API is used to query the backup statistics of an instance. It will return the number and size (bytes) of backups of the instance.
 * @method Models\DescribeBaseBackupsResponse DescribeBaseBackups(Models\DescribeBaseBackupsRequest $req) This API is used to query the list of full backups.
 * @method Models\DescribeClassesResponse DescribeClasses(Models\DescribeClassesRequest $req) This API is used to query purchasable instance specifications.
 * @method Models\DescribeCloneDBInstanceSpecResponse DescribeCloneDBInstanceSpec(Models\DescribeCloneDBInstanceSpecRequest $req) This API is used to query the minimum specification required by a cloned instance, including `SpecCode` and disk specification.
 * @method Models\DescribeDBBackupsResponse DescribeDBBackups(Models\DescribeDBBackupsRequest $req) This API is used to query the instance backup list.
 * @method Models\DescribeDBErrlogsResponse DescribeDBErrlogs(Models\DescribeDBErrlogsRequest $req) This API is used to get error logs.
 * @method Models\DescribeDBInstanceAttributeResponse DescribeDBInstanceAttribute(Models\DescribeDBInstanceAttributeRequest $req) This API is used to query the details of one instance.
 * @method Models\DescribeDBInstanceParametersResponse DescribeDBInstanceParameters(Models\DescribeDBInstanceParametersRequest $req) This API is used to get the list of modifiable parameters of an instance.
 * @method Models\DescribeDBInstanceSecurityGroupsResponse DescribeDBInstanceSecurityGroups(Models\DescribeDBInstanceSecurityGroupsRequest $req) This API is used to query the security group information of an instance.
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) This API is used to query the details of one or more instances.
 * @method Models\DescribeDBSlowlogsResponse DescribeDBSlowlogs(Models\DescribeDBSlowlogsRequest $req) This API was used to get slow query logs. Since it was deprecated on September 1, 2021, it has no longer returned data. Please use the [DescribeSlowQueryList](https://intl.cloud.tencent.com/document/product/409/60540?from_cn_redirect=1) API instead to get slow query logs.
 * @method Models\DescribeDBVersionsResponse DescribeDBVersions(Models\DescribeDBVersionsRequest $req) This API is used to query the list of supported database versions.
 * @method Models\DescribeDBXlogsResponse DescribeDBXlogs(Models\DescribeDBXlogsRequest $req) This API is used to get the instance Xlog list.
 * @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) This API is used to pull the list of databases.
 * @method Models\DescribeDefaultParametersResponse DescribeDefaultParameters(Models\DescribeDefaultParametersRequest $req) This API is used to query all parameters supported by a database version and engine.
 * @method Models\DescribeEncryptionKeysResponse DescribeEncryptionKeys(Models\DescribeEncryptionKeysRequest $req) This API is used to get instance key list.
 * @method Models\DescribeLogBackupsResponse DescribeLogBackups(Models\DescribeLogBackupsRequest $req) This API is used to query the list of log backups.
 * @method Models\DescribeOrdersResponse DescribeOrders(Models\DescribeOrdersRequest $req) This API is used to get order information.
 * @method Models\DescribeParameterTemplateAttributesResponse DescribeParameterTemplateAttributes(Models\DescribeParameterTemplateAttributesRequest $req) This API is used to query the details of a parameter template, including basic information and parameter information.
 * @method Models\DescribeParameterTemplatesResponse DescribeParameterTemplates(Models\DescribeParameterTemplatesRequest $req) This API is used to query the list of parameter templates.
 * @method Models\DescribeParamsEventResponse DescribeParamsEvent(Models\DescribeParamsEventRequest $req) This API is used to get the details of parameter modification events.
 * @method Models\DescribeProductConfigResponse DescribeProductConfig(Models\DescribeProductConfigRequest $req) This API is used to query the purchasable specification configuration.
 * @method Models\DescribeReadOnlyGroupsResponse DescribeReadOnlyGroups(Models\DescribeReadOnlyGroupsRequest $req) This API is used to query RO group information by specifying the primary instance IDs.
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) This API is used to query the purchasable regions.
 * @method Models\DescribeServerlessDBInstancesResponse DescribeServerlessDBInstances(Models\DescribeServerlessDBInstancesRequest $req) This API is used to query the details of one or more PostgreSQL for Serverless instances.
 * @method Models\DescribeSlowQueryAnalysisResponse DescribeSlowQueryAnalysis(Models\DescribeSlowQueryAnalysisRequest $req) This API is used to count and analyze slow query statements during the specified period of time and return aggregated statistical analysis results which are classified by statement with abstract parameter values.
 * @method Models\DescribeSlowQueryListResponse DescribeSlowQueryList(Models\DescribeSlowQueryListRequest $req) This API is used to get the slow queries during the specified period of time.
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) This API is used to query the supported AZs.
 * @method Models\DestroyDBInstanceResponse DestroyDBInstance(Models\DestroyDBInstanceRequest $req) This API is used to terminate an isolated instance by specifying the `DBInstanceId` parameter. The data of an terminated instance will be deleted and cannot be recovered.
 * @method Models\DisIsolateDBInstancesResponse DisIsolateDBInstances(Models\DisIsolateDBInstancesRequest $req) This API is used to remove one or more instances from isolation.
 * @method Models\InitDBInstancesResponse InitDBInstances(Models\InitDBInstancesRequest $req) This API is used to initialize a TencentDB for PostgreSQL instance.
 * @method Models\InquiryPriceCreateDBInstancesResponse InquiryPriceCreateDBInstances(Models\InquiryPriceCreateDBInstancesRequest $req) This API is used to query the purchase price of one or multiple instances.
 * @method Models\InquiryPriceRenewDBInstanceResponse InquiryPriceRenewDBInstance(Models\InquiryPriceRenewDBInstanceRequest $req) This API is used to query the renewal price of an instance.
 * @method Models\InquiryPriceUpgradeDBInstanceResponse InquiryPriceUpgradeDBInstance(Models\InquiryPriceUpgradeDBInstanceRequest $req) This API is used to query the fees of upgrading a specified database instance. Only pay-as-you-go instance is supported.
 * @method Models\IsolateDBInstancesResponse IsolateDBInstances(Models\IsolateDBInstancesRequest $req) This API is used to isolate one or more instances.
 * @method Models\ModifyAccountRemarkResponse ModifyAccountRemark(Models\ModifyAccountRemarkRequest $req) This API is used to modify account remarks.
 * @method Models\ModifyBackupDownloadRestrictionResponse ModifyBackupDownloadRestriction(Models\ModifyBackupDownloadRestrictionRequest $req) This API is used to modify the backup download restrictions.
 * @method Models\ModifyBackupPlanResponse ModifyBackupPlan(Models\ModifyBackupPlanRequest $req) This API is used to modify the backup plan of an instance, such as modifying the backup start time. By default, a full backup starts at midnight every day and the generated backup files will be retained for seven days.
 * @method Models\ModifyBaseBackupExpireTimeResponse ModifyBaseBackupExpireTime(Models\ModifyBaseBackupExpireTimeRequest $req) This API is used to modify the expiration time of the specified full backup of an instance.
 * @method Models\ModifyDBInstanceChargeTypeResponse ModifyDBInstanceChargeType(Models\ModifyDBInstanceChargeTypeRequest $req) This API is used to switch the instance billing mode from pay-as-you-go to monthly subscription.
 * @method Models\ModifyDBInstanceDeploymentResponse ModifyDBInstanceDeployment(Models\ModifyDBInstanceDeploymentRequest $req) This API is used to modify the AZs where the nodes of a source instance reside.
 * @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) This API is used to rename a TencentDB for PostgreSQL instance.
 * @method Models\ModifyDBInstanceParametersResponse ModifyDBInstanceParameters(Models\ModifyDBInstanceParametersRequest $req) This API is used to modify parameters in batches.
 * @method Models\ModifyDBInstanceReadOnlyGroupResponse ModifyDBInstanceReadOnlyGroup(Models\ModifyDBInstanceReadOnlyGroupRequest $req) This API is used to modify the RO group of an instance.
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) This API is used to modify the security group of an instance.
 * @method Models\ModifyDBInstanceSpecResponse ModifyDBInstanceSpec(Models\ModifyDBInstanceSpecRequest $req) This API is used to modify instance specifications including memory and disk size.
 * @method Models\ModifyDBInstancesProjectResponse ModifyDBInstancesProject(Models\ModifyDBInstancesProjectRequest $req) This API is used to transfer an instance to another project.
 * @method Models\ModifyParameterTemplateResponse ModifyParameterTemplate(Models\ModifyParameterTemplateRequest $req) This API is used to modify the parameter template name and description, and add or delete parameter template parameters.
 * @method Models\ModifyReadOnlyGroupConfigResponse ModifyReadOnlyGroupConfig(Models\ModifyReadOnlyGroupConfigRequest $req) This API is used to modify RO group configuration.
 * @method Models\ModifySwitchTimePeriodResponse ModifySwitchTimePeriod(Models\ModifySwitchTimePeriodRequest $req) This API is used to perform a primary-standby switch for an instance waiting for the switch after it is upgraded.
 * @method Models\OpenDBExtranetAccessResponse OpenDBExtranetAccess(Models\OpenDBExtranetAccessRequest $req) This API is used to enable public network access.
 * @method Models\OpenServerlessDBExtranetAccessResponse OpenServerlessDBExtranetAccess(Models\OpenServerlessDBExtranetAccessRequest $req) This API is used to enable public network access for a PostgreSQL for Serverless instance.
 * @method Models\RebalanceReadOnlyGroupResponse RebalanceReadOnlyGroup(Models\RebalanceReadOnlyGroupRequest $req) This API is used to rebalance the loads of read-only replicas in an RO group. Please note that connections to those read-only replicas will be interrupted transiently; therefore, you should ensure that your application can reconnect to the databases. This operation should be performed with caution.
 * @method Models\RemoveDBInstanceFromReadOnlyGroupResponse RemoveDBInstanceFromReadOnlyGroup(Models\RemoveDBInstanceFromReadOnlyGroupRequest $req) This API is used to remove a read-only replica from an RO group.
 * @method Models\RenewInstanceResponse RenewInstance(Models\RenewInstanceRequest $req) This API is used to renew an instance.
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) This API is used to reset the account password of an instance.
 * @method Models\RestartDBInstanceResponse RestartDBInstance(Models\RestartDBInstanceRequest $req) This API is used to restart an instance.
 * @method Models\SetAutoRenewFlagResponse SetAutoRenewFlag(Models\SetAutoRenewFlagRequest $req) This API is used to set auto-renewal.
 * @method Models\UpgradeDBInstanceResponse UpgradeDBInstance(Models\UpgradeDBInstanceRequest $req) This API is used to upgrade instance configurations.
 * @method Models\UpgradeDBInstanceKernelVersionResponse UpgradeDBInstanceKernelVersion(Models\UpgradeDBInstanceKernelVersionRequest $req) This API is used to upgrade the kernel version of an instance.
 */

class PostgresClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "postgres.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "postgres";

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
        $respClass = "TencentCloud"."\\".ucfirst("postgres")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
