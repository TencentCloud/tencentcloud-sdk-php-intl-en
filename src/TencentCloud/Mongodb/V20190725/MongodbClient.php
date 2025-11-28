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

namespace TencentCloud\Mongodb\V20190725;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mongodb\V20190725\Models as Models;

/**
 * @method Models\AssignProjectResponse AssignProject(Models\AssignProjectRequest $req) This API is used to specify the project of a TencentDB for MongoDB instance.
 * @method Models\CreateBackupDBInstanceResponse CreateBackupDBInstance(Models\CreateBackupDBInstanceRequest $req) This API is used to back up an instance.
 * @method Models\CreateBackupDownloadTaskResponse CreateBackupDownloadTask(Models\CreateBackupDownloadTaskRequest $req) This API is used to create a backup download task.
 * @method Models\CreateDBInstanceResponse CreateDBInstance(Models\CreateDBInstanceRequest $req) This API is used to create a yearly/monthly subscription TencentDB for MongoDB instance. The [DescribeSpecInfo](https://www.tencentcloud.comom/document/product/240/35767?from_cn_redirect=1) API can be called to query and obtain the supported sales specifications.
 * @method Models\CreateDBInstanceHourResponse CreateDBInstanceHour(Models\CreateDBInstanceHourRequest $req) This API is used to create a pay-as-you-go TencentDB for MongoDB instance.
 * @method Models\CreateLogDownloadTaskResponse CreateLogDownloadTask(Models\CreateLogDownloadTaskRequest $req) This API is used to create a log download task.
 * @method Models\DeleteLogDownloadTaskResponse DeleteLogDownloadTask(Models\DeleteLogDownloadTaskRequest $req) This API is used to delete a log download task.
 * @method Models\DescribeAsyncRequestInfoResponse DescribeAsyncRequestInfo(Models\DescribeAsyncRequestInfoRequest $req) This API is used to query the asynchronous task status.
 * @method Models\DescribeBackupDownloadTaskResponse DescribeBackupDownloadTask(Models\DescribeBackupDownloadTaskRequest $req) This API is used to query information about the backup download task.
 * @method Models\DescribeClientConnectionsResponse DescribeClientConnections(Models\DescribeClientConnectionsRequest $req) This API is used to query the client connection information on an instance, including the IP address for connection and the number of connections.
 * @method Models\DescribeDBBackupsResponse DescribeDBBackups(Models\DescribeDBBackupsRequest $req) This API is used to query the list of instance backups. Currently, only backups created in the last seven days can be queried.
 * @method Models\DescribeDBInstanceDealResponse DescribeDBInstanceDeal(Models\DescribeDBInstanceDealRequest $req) This API is used to get order details of purchase, renewal, and specification adjustment of a MongoDB instance.
 * @method Models\DescribeDBInstanceNamespaceResponse DescribeDBInstanceNamespace(Models\DescribeDBInstanceNamespaceRequest $req) This API is used to query the table information on a database.
 * @method Models\DescribeDBInstanceNodePropertyResponse DescribeDBInstanceNodeProperty(Models\DescribeDBInstanceNodePropertyRequest $req) This API is used to query node attributes, such as the AZ, node name, address, role, status, delay between primary and secondary nodes, priority, voting right, and tags.
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) This API is used to query the list of TencentDB for MongoDB instances. It supports filtering primary instances, disaster recovery instances, and read-only instances by project ID, instance ID, instance status, and other conditions.
 * @method Models\DescribeDetailedSlowLogsResponse DescribeDetailedSlowLogs(Models\DescribeDetailedSlowLogsRequest $req) This API is used to query slow log details of the instance.
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) This API is used to query the list of parameters that can be modified for the current instance.
 * @method Models\DescribeInstanceSSLResponse DescribeInstanceSSL(Models\DescribeInstanceSSLRequest $req) This API is used to view the enabling status of Secure Sockets Layer (SSL) for an instance.
 * @method Models\DescribeLogDownloadTasksResponse DescribeLogDownloadTasks(Models\DescribeLogDownloadTasksRequest $req) This API is used to query a log download task.
 * @method Models\DescribeMongodbLogsResponse DescribeMongodbLogs(Models\DescribeMongodbLogsRequest $req) This API is used to query running logs.
 * @method Models\DescribeSecurityGroupResponse DescribeSecurityGroup(Models\DescribeSecurityGroupRequest $req) This API is used to query security groups bound to an instance.
 * @method Models\DescribeSlowLogPatternsResponse DescribeSlowLogPatterns(Models\DescribeSlowLogPatternsRequest $req) This API is used to get the slow log statistics of a database instance.
 * @method Models\DescribeSlowLogsResponse DescribeSlowLogs(Models\DescribeSlowLogsRequest $req) This API is used to get the slow log information of a TencentDB instance. Only slow logs for the last 7 days can be queried.
 * @method Models\DescribeSpecInfoResponse DescribeSpecInfo(Models\DescribeSpecInfoRequest $req) This API is used to query the sales specification of an instance.
 * @method Models\FlushInstanceRouterConfigResponse FlushInstanceRouterConfig(Models\FlushInstanceRouterConfigRequest $req) This API is used to run the `FlushRouterConfig` command on all mongos instances.
 * @method Models\InquirePriceCreateDBInstancesResponse InquirePriceCreateDBInstances(Models\InquirePriceCreateDBInstancesRequest $req) This API is used to query price of instance creation. The `region` parameter must be passed in this API, otherwise verification will fail. This API allows queries only for purchasable instance specifications.
 * @method Models\InquirePriceModifyDBInstanceSpecResponse InquirePriceModifyDBInstanceSpec(Models\InquirePriceModifyDBInstanceSpecRequest $req) This API is used to query the price of instance specification adjustment.
 * @method Models\InquirePriceRenewDBInstancesResponse InquirePriceRenewDBInstances(Models\InquirePriceRenewDBInstancesRequest $req) This API is used to query the renewal price of a monthly subscription instance.
 * @method Models\InstanceEnableSSLResponse InstanceEnableSSL(Models\InstanceEnableSSLRequest $req) This API is used to set the SSL status for an instance.
 * @method Models\IsolateDBInstanceResponse IsolateDBInstance(Models\IsolateDBInstanceRequest $req) This API is used to isolate a pay-as-you-go TencentDB for MongoDB instance. After isolation, the instance is retained in the recycle bin, and data cannot be written into it. After a certain period of isolation, the instance is deleted permanently. For the retention time in the recycle bin, see the pay-as-you-go service terms. The deleted pay-as-you-go instance cannot be recovered. Proceed with caution.
 * @method Models\ModifyDBInstanceNetworkAddressResponse ModifyDBInstanceNetworkAddress(Models\ModifyDBInstanceNetworkAddressRequest $req) This API is used to modify the network information on a TencentDB for MongoDB instance. It supports switching from a basic network to a VPC network or from one VPC network to another VPC network.
 * @method Models\ModifyDBInstanceSecurityGroupResponse ModifyDBInstanceSecurityGroup(Models\ModifyDBInstanceSecurityGroupRequest $req) This API is used to modify security groups bound to an instance.
 * @method Models\ModifyDBInstanceSpecResponse ModifyDBInstanceSpec(Models\ModifyDBInstanceSpecRequest $req) This API is used to adjust the TencentDB for MongoDB instance configuration. The [DescribeSpecInfo](https://www.tencentcloud.comom/document/product/240/38567?from_cn_redirect=1) API can be called to query and obtain the supported sales specifications.
 * @method Models\OfflineIsolatedDBInstanceResponse OfflineIsolatedDBInstance(Models\OfflineIsolatedDBInstanceRequest $req) This API is used to deactivate isolated TencentDB instances immediately. The instances must be in isolated status.
 * @method Models\RenameInstanceResponse RenameInstance(Models\RenameInstanceRequest $req) This API is used to rename a TencentDB instance.
 * @method Models\RenewDBInstancesResponse RenewDBInstances(Models\RenewDBInstancesRequest $req) This API is used to renew a monthly subscription TencentDB instance. Only monthly subscription instances are supported, while pay-as-you-go instances do not need to be renewed.
 * @method Models\ResetDBInstancePasswordResponse ResetDBInstancePassword(Models\ResetDBInstancePasswordRequest $req) This API is used to reset the instance access password.
 * @method Models\SetDBInstanceDeletionProtectionResponse SetDBInstanceDeletionProtection(Models\SetDBInstanceDeletionProtectionRequest $req) This API is used to set instance termination protection.
 * @method Models\TerminateDBInstancesResponse TerminateDBInstances(Models\TerminateDBInstancesRequest $req) This API is used to terminate monthly subscription billing instances.
 * @method Models\UpgradeDBInstanceKernelVersionResponse UpgradeDBInstanceKernelVersion(Models\UpgradeDBInstanceKernelVersionRequest $req) This API is used to upgrade the kernel version of the database instance.
 * @method Models\UpgradeDbInstanceVersionResponse UpgradeDbInstanceVersion(Models\UpgradeDbInstanceVersionRequest $req) This API is used to upgrade the database kernel across versions. Currently, it is only supported to upgrade from version 3.6 to 4.0, 4.0 to 4.2, 4.2 to 4.4, and 4.4 to 5.0.
 */

class MongodbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mongodb.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mongodb";

    /**
     * @var string
     */
    protected $version = "2019-07-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("mongodb")."\\"."V20190725\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
