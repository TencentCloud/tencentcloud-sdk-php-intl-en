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
 * @method Models\CreateDBInstanceResponse CreateDBInstance(Models\CreateDBInstanceRequest $req) This API is used to create a monthly subscription TencentDB for MongoDB instance. The purchasable specifications supported by this API can be obtained through the `DescribeSpecInfo` API.
 * @method Models\CreateDBInstanceHourResponse CreateDBInstanceHour(Models\CreateDBInstanceHourRequest $req) This API is used to create a pay-as-you-go TencentDB for MongoDB instance.
 * @method Models\DescribeAsyncRequestInfoResponse DescribeAsyncRequestInfo(Models\DescribeAsyncRequestInfoRequest $req) This API is used to query the asynchronous task status.
 * @method Models\DescribeBackupDownloadTaskResponse DescribeBackupDownloadTask(Models\DescribeBackupDownloadTaskRequest $req) This API is used to query backup download task information.
 * @method Models\DescribeClientConnectionsResponse DescribeClientConnections(Models\DescribeClientConnectionsRequest $req) This API is used to query the client connection information on an instance, including the IP address for connection and the number of connections.
 * @method Models\DescribeDBBackupsResponse DescribeDBBackups(Models\DescribeDBBackupsRequest $req) This API is used to query the list of instance backups. Currently, only backups created in the last seven days can be queried.
 * @method Models\DescribeDBInstanceDealResponse DescribeDBInstanceDeal(Models\DescribeDBInstanceDealRequest $req) This API is used to get order details of purchase, renewal, and specification adjustment of a MongoDB instance.
 * @method Models\DescribeDBInstanceNamespaceResponse DescribeDBInstanceNamespace(Models\DescribeDBInstanceNamespaceRequest $req) This API is used to query the table information on a database.
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) This API is used to query the list of TencentDB for MongoDB instances. It supports filtering primary instances, disaster recovery instances, and read-only instances by project ID, instance ID, instance status, and other conditions.
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) This API is used to query the list of parameters that can be modified for the current instance.
 * @method Models\DescribeSecurityGroupResponse DescribeSecurityGroup(Models\DescribeSecurityGroupRequest $req) This API is used to query security groups bound to an instance.
 * @method Models\DescribeSlowLogPatternsResponse DescribeSlowLogPatterns(Models\DescribeSlowLogPatternsRequest $req) This API is used to get the slow log statistics of a database instance.
 * @method Models\DescribeSlowLogsResponse DescribeSlowLogs(Models\DescribeSlowLogsRequest $req) This API is used to get the slow log information of a TencentDB instance. Only slow logs for the last 7 days can be queried.
 * @method Models\DescribeSpecInfoResponse DescribeSpecInfo(Models\DescribeSpecInfoRequest $req) This API is used to query the purchasable instance specifications.
 * @method Models\FlushInstanceRouterConfigResponse FlushInstanceRouterConfig(Models\FlushInstanceRouterConfigRequest $req) This API is used to run the `FlushRouterConfig` command on all mongos instances.
 * @method Models\InquirePriceCreateDBInstancesResponse InquirePriceCreateDBInstances(Models\InquirePriceCreateDBInstancesRequest $req) This API is used to query price of instance creation. The `region` parameter must be passed in this API, otherwise verification will fail. This API allows queries only for purchasable instance specifications.
 * @method Models\InquirePriceModifyDBInstanceSpecResponse InquirePriceModifyDBInstanceSpec(Models\InquirePriceModifyDBInstanceSpecRequest $req) This API is used to query the price of instance specification adjustment.
 * @method Models\InquirePriceRenewDBInstancesResponse InquirePriceRenewDBInstances(Models\InquirePriceRenewDBInstancesRequest $req) This API is used to query the renewal price of a monthly subscription instance.
 * @method Models\IsolateDBInstanceResponse IsolateDBInstance(Models\IsolateDBInstanceRequest $req) This API is used to isolate a pay-as-you-go TencentDB for MongoDB instance. An isolated instance is retained in the recycle bin and data can no longer be written to it. After it is isolated for a certain period of time, it will be completely deleted. For the retention period in the recycle bin, please see the terms of service for pay-as-you-go billing. Isolated pay-as-you-go instances cannot be recovered, so please proceed with caution.
 * @method Models\ModifyDBInstanceNetworkAddressResponse ModifyDBInstanceNetworkAddress(Models\ModifyDBInstanceNetworkAddressRequest $req) This API is used to modify the network information on a TencentDB for MongoDB instance. It supports switching from a basic network to a VPC network or from one VPC network to another VPC network.
 * @method Models\ModifyDBInstanceSecurityGroupResponse ModifyDBInstanceSecurityGroup(Models\ModifyDBInstanceSecurityGroupRequest $req) This API is used to modify security groups bound to an instance.
 * @method Models\ModifyDBInstanceSpecResponse ModifyDBInstanceSpec(Models\ModifyDBInstanceSpecRequest $req) This API is used to adjust the configuration of a TencentDB for MongoDB instance. Saleable specifications supported for this API can be obtained from the DescribeSpecInfo API for querying saleable TencentDB for MongoDB specifications.
 * @method Models\OfflineIsolatedDBInstanceResponse OfflineIsolatedDBInstance(Models\OfflineIsolatedDBInstanceRequest $req) This API is used to deactivate isolated TencentDB instances immediately. The instances must be in isolated status.
 * @method Models\RenameInstanceResponse RenameInstance(Models\RenameInstanceRequest $req) This API is used to rename a TencentDB instance.
 * @method Models\RenewDBInstancesResponse RenewDBInstances(Models\RenewDBInstancesRequest $req) This API is used to renew a monthly subscription TencentDB instance. Only monthly subscription instances are supported, while pay-as-you-go instances do not need to be renewed.
 * @method Models\ResetDBInstancePasswordResponse ResetDBInstancePassword(Models\ResetDBInstancePasswordRequest $req) This API is used to modify instance password.
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
