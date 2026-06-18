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

namespace TencentCloud\Tdmysql\V20211122;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tdmysql\V20211122\Models as Models;

/**
 * @method Models\CancelIsolateDBInstancesResponse CancelIsolateDBInstances(Models\CancelIsolateDBInstancesRequest $req) This API is used to lift isolation for instances in batch.
 * @method Models\CreateCloneInstanceResponse CreateCloneInstance(Models\CreateCloneInstanceRequest $req) This API is used to create clone instances.
 * @method Models\CreateDBInstancesResponse CreateDBInstances(Models\CreateDBInstancesRequest $req) This API is used to batch create instances.
 * @method Models\CreateDBSBackupResponse CreateDBSBackup(Models\CreateDBSBackupRequest $req) This API is used to create a manual backup of an instance.
 * @method Models\CreateUsersResponse CreateUsers(Models\CreateUsersRequest $req) This API is used to create users in batches.
 * @method Models\DeleteDBSBackupSetsResponse DeleteDBSBackupSets(Models\DeleteDBSBackupSetsRequest $req) This API is used to delete manual backups of instances.
 * @method Models\DeleteUsersResponse DeleteUsers(Models\DeleteUsersRequest $req) This API is used to batch delete users.
 * @method Models\DescribeDBInstanceDetailResponse DescribeDBInstanceDetail(Models\DescribeDBInstanceDetailRequest $req) This API is used to query instance details.
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) This API is used to query instance list.
 * @method Models\DescribeDBParametersResponse DescribeDBParameters(Models\DescribeDBParametersRequest $req) This API is used to obtain the current parameter settings of the instance.
 * @method Models\DescribeDBSArchiveLogsResponse DescribeDBSArchiveLogs(Models\DescribeDBSArchiveLogsRequest $req) This API is used to query instance archived WAL log list.
 * @method Models\DescribeDBSAvailableRecoveryTimeResponse DescribeDBSAvailableRecoveryTime(Models\DescribeDBSAvailableRecoveryTimeRequest $req) This API is used to obtain the recoverable time.
 * @method Models\DescribeDBSBackupPolicyResponse DescribeDBSBackupPolicy(Models\DescribeDBSBackupPolicyRequest $req) Query an instance backup strategy
 * @method Models\DescribeDBSBackupSetsResponse DescribeDBSBackupSets(Models\DescribeDBSBackupSetsRequest $req) This API is used to query instance backup set information.
 * @method Models\DescribeDBSBackupStatisticsResponse DescribeDBSBackupStatistics(Models\DescribeDBSBackupStatisticsRequest $req) This API is used to query instance backup space overview.
 * @method Models\DescribeDBSBackupStatisticsDetailResponse DescribeDBSBackupStatisticsDetail(Models\DescribeDBSBackupStatisticsDetailRequest $req) This API is used to query backup set statistical detail.
 * @method Models\DescribeDBSCloneInstancesResponse DescribeDBSCloneInstances(Models\DescribeDBSCloneInstancesRequest $req) Query clone list
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) This API is used to query instance security group information.
 * @method Models\DescribeDatabaseObjectsResponse DescribeDatabaseObjects(Models\DescribeDatabaseObjectsRequest $req) This API is used to query the object list in the database of a cloud database instance, including table, stored procedure, view and function.
 * @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) This API is used to query the database list of a cloud database instance.
 * @method Models\DescribeFlowResponse DescribeFlow(Models\DescribeFlowRequest $req) This API is used to query the process status of an asynchronous task.
 * @method Models\DescribeInstanceSSLStatusResponse DescribeInstanceSSLStatus(Models\DescribeInstanceSSLStatusRequest $req) This API is used to query the SSL status of an instance.
 * @method Models\DescribeMaintenanceWindowResponse DescribeMaintenanceWindow(Models\DescribeMaintenanceWindowRequest $req) Query maintenance time window configurations
 * @method Models\DescribeSaleInfoResponse DescribeSaleInfo(Models\DescribeSaleInfoRequest $req) This API is used to query available regions.
 * @method Models\DescribeSlowLogsResponse DescribeSlowLogs(Models\DescribeSlowLogsRequest $req) This API is used to query slow logs.
 * @method Models\DescribeSpecsResponse DescribeSpecs(Models\DescribeSpecsRequest $req) This API is used to list available component specifications.
 * @method Models\DescribeUserPrivilegesResponse DescribeUserPrivileges(Models\DescribeUserPrivilegesRequest $req) This API is used to query user permissions.
 * @method Models\DescribeUsersResponse DescribeUsers(Models\DescribeUsersRequest $req) This API is used to query user list.
 * @method Models\DestroyInstancesResponse DestroyInstances(Models\DestroyInstancesRequest $req) This API is used to destroy instances in batch.
 * @method Models\ExpandInstanceResponse ExpandInstance(Models\ExpandInstanceRequest $req) This API is used to horizontally scale out instances.
 * @method Models\IsolateDBInstanceResponse IsolateDBInstance(Models\IsolateDBInstanceRequest $req) This API is used to batch isolate instances.
 * @method Models\ModifyAutoRenewFlagResponse ModifyAutoRenewFlag(Models\ModifyAutoRenewFlagRequest $req) This API is used to modify the auto-renewal flag.
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) This API is used to modify cloud database security groups.
 * @method Models\ModifyDBInstanceVPortResponse ModifyDBInstanceVPort(Models\ModifyDBInstanceVPortRequest $req) This API is used to modify the VPC port of an instance.
 * @method Models\ModifyDBParametersResponse ModifyDBParameters(Models\ModifyDBParametersRequest $req) This API is used to modify instance parameters.
 * @method Models\ModifyDBSBackupPolicyResponse ModifyDBSBackupPolicy(Models\ModifyDBSBackupPolicyRequest $req) This API is used to modify the instance backup strategy.
 * @method Models\ModifyDBSBackupSetCommentResponse ModifyDBSBackupSetComment(Models\ModifyDBSBackupSetCommentRequest $req) This API is used to modify backup notes of an instance.
 * @method Models\ModifyInstanceNameResponse ModifyInstanceName(Models\ModifyInstanceNameRequest $req) This API is used to modify instance name.
 * @method Models\ModifyInstanceNetworkResponse ModifyInstanceNetwork(Models\ModifyInstanceNetworkRequest $req) This API is used to modify the network to which the instance belongs.
 * @method Models\ModifyInstanceSSLStatusResponse ModifyInstanceSSLStatus(Models\ModifyInstanceSSLStatusRequest $req) This API is used to enable or disable the SSL feature of an instance.
 * @method Models\ModifyMaintenanceWindowResponse ModifyMaintenanceWindow(Models\ModifyMaintenanceWindowRequest $req) Add new or modify instance maintenance time window configurations
 * @method Models\ModifyUserPrivilegesResponse ModifyUserPrivileges(Models\ModifyUserPrivilegesRequest $req) This API is used to modify user permissions.
 * @method Models\ResetUserPasswordResponse ResetUserPassword(Models\ResetUserPasswordRequest $req) This API is used to reset user password.
 * @method Models\RestartDBInstancesResponse RestartDBInstances(Models\RestartDBInstancesRequest $req) This API is used to restart database instances.
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) This API is used to scale up a TDSQL Boundless instance, which can be a primary instance or a disaster recovery instance.
 */

class TdmysqlClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tdmysql.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tdmysql";

    /**
     * @var string
     */
    protected $version = "2021-11-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("tdmysql")."\\"."V20211122\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
