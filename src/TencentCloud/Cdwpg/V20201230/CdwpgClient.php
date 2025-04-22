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

namespace TencentCloud\Cdwpg\V20201230;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdwpg\V20201230\Models as Models;

/**
 * @method Models\CreateInstanceByApiResponse CreateInstanceByApi(Models\CreateInstanceByApiRequest $req) This API is used to create  instance
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) This API is used to obtain the account list corresponding to the instance.
 * @method Models\DescribeDBConfigHistoryResponse DescribeDBConfigHistory(Models\DescribeDBConfigHistoryRequest $req) Describe DBConfig History
 * @method Models\DescribeDBParamsResponse DescribeDBParams(Models\DescribeDBParamsRequest $req) This API is used to describe instance configurations.
 * @method Models\DescribeErrorLogResponse DescribeErrorLog(Models\DescribeErrorLogRequest $req) This API is used to query error logs.
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) This API is used to query the instance information by an instance ID.
 * @method Models\DescribeInstanceInfoResponse DescribeInstanceInfo(Models\DescribeInstanceInfoRequest $req) This API is used to get instance information.
 * @method Models\DescribeInstanceNodesResponse DescribeInstanceNodes(Models\DescribeInstanceNodesRequest $req) This API is used to list nodes.
 * @method Models\DescribeInstanceOperationsResponse DescribeInstanceOperations(Models\DescribeInstanceOperationsRequest $req) This API is used to get operations of the instance .
 * @method Models\DescribeInstanceStateResponse DescribeInstanceState(Models\DescribeInstanceStateRequest $req) This API is used to display instance status, process progress, etc., in the instance details page.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to get a list of  instances.
 * @method Models\DescribeSimpleInstancesResponse DescribeSimpleInstances(Models\DescribeSimpleInstancesRequest $req) This API is used to get a list of instance
 * @method Models\DescribeSlowLogResponse DescribeSlowLog(Models\DescribeSlowLogRequest $req) This API is used to query slow SQL logs.
 * @method Models\DescribeUpgradeListResponse DescribeUpgradeList(Models\DescribeUpgradeListRequest $req) This API is used to obtain instance upgrade records.
 * @method Models\DescribeUserHbaConfigResponse DescribeUserHbaConfig(Models\DescribeUserHbaConfigRequest $req) Describe User HbaConfig.
 * @method Models\DestroyInstanceByApiResponse DestroyInstanceByApi(Models\DestroyInstanceByApiRequest $req) This API is used to destroy instance.
 * @method Models\ModifyDBParametersResponse ModifyDBParameters(Models\ModifyDBParametersRequest $req) This API is used to modify instance configurations
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) This API is used to modify instance information. Only the name of an instance can be modified currently.
 * @method Models\ModifyUserHbaResponse ModifyUserHba(Models\ModifyUserHbaRequest $req) This API is used to modify user Hba configurations.
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) This API is used to change account password.
 * @method Models\RestartInstanceResponse RestartInstance(Models\RestartInstanceRequest $req) This API is used by users to proactively restart instances in the console.
 * @method Models\ScaleOutInstanceResponse ScaleOutInstance(Models\ScaleOutInstanceRequest $req) This API is used to scale out instance.
 * @method Models\ScaleUpInstanceResponse ScaleUpInstance(Models\ScaleUpInstanceRequest $req) This API is used to scale up instance in the console.
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) This API is used to upgrade Instance.
 */

class CdwpgClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdwpg.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cdwpg";

    /**
     * @var string
     */
    protected $version = "2020-12-30";

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
        $respClass = "TencentCloud"."\\".ucfirst("cdwpg")."\\"."V20201230\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
