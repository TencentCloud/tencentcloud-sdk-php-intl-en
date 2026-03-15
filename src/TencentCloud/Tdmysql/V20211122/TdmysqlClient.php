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
 * @method Models\CreateDBSBackupResponse CreateDBSBackup(Models\CreateDBSBackupRequest $req) Create an instance backup set.
 * @method Models\DeleteDBSBackupSetsResponse DeleteDBSBackupSets(Models\DeleteDBSBackupSetsRequest $req) Delete instance backup sets.
 * @method Models\DescribeDBParametersResponse DescribeDBParameters(Models\DescribeDBParametersRequest $req) This API is used to obtain the current parameter settings of the instance.
 * @method Models\DescribeDBSAvailableRecoveryTimeResponse DescribeDBSAvailableRecoveryTime(Models\DescribeDBSAvailableRecoveryTimeRequest $req) Query recoverable time.
 * @method Models\DescribeDBSCloneInstancesResponse DescribeDBSCloneInstances(Models\DescribeDBSCloneInstancesRequest $req) Query clone list of instances.
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) This API is used to query instance security group information.
 * @method Models\DescribeDatabaseObjectsResponse DescribeDatabaseObjects(Models\DescribeDatabaseObjectsRequest $req) This API is used to query the object list in the database of a cloud database instance, including table, stored procedure, view and function.
 * @method Models\DescribeFlowResponse DescribeFlow(Models\DescribeFlowRequest $req) This API is used to query the process status of an asynchronous task.
 * @method Models\DestroyInstancesResponse DestroyInstances(Models\DestroyInstancesRequest $req) This API is used to destroy instances in batch.
 * @method Models\IsolateDBInstanceResponse IsolateDBInstance(Models\IsolateDBInstanceRequest $req) This API is used to batch isolate instances.
 * @method Models\ModifyAutoRenewFlagResponse ModifyAutoRenewFlag(Models\ModifyAutoRenewFlagRequest $req) This API is used to modify the auto-renewal flag.
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) This API is used to modify cloud database security groups.
 * @method Models\ModifyDBParametersResponse ModifyDBParameters(Models\ModifyDBParametersRequest $req) This API is used to modify instance parameters.
 * @method Models\ModifyDBSBackupPolicyResponse ModifyDBSBackupPolicy(Models\ModifyDBSBackupPolicyRequest $req) Modify the instance backup strategy.
 * @method Models\ModifyDBSBackupSetCommentResponse ModifyDBSBackupSetComment(Models\ModifyDBSBackupSetCommentRequest $req) Modify the backup set remark.
 * @method Models\ModifyInstanceNameResponse ModifyInstanceName(Models\ModifyInstanceNameRequest $req) This API is used to modify instance name.
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
