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

namespace TencentCloud\Es\V20180416;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Es\V20180416\Models as Models;

/**
 * @method Models\CreateAutoBackUpStrategyResponse CreateAutoBackUpStrategy(Models\CreateAutoBackUpStrategyRequest $req) This API is used to create an auto backup snapshot policy.
 * @method Models\CreateIndexResponse CreateIndex(Models\CreateIndexRequest $req) Create an index
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) Create an ES cluster instance with the specified specification.
 * @method Models\DeleteAutoBackUpStrategyResponse DeleteAutoBackUpStrategy(Models\DeleteAutoBackUpStrategyRequest $req) This API is used to delete an auto backup snapshot policy.
 * @method Models\DeleteIndexResponse DeleteIndex(Models\DeleteIndexRequest $req) Delete an index
 * @method Models\DeleteInstanceResponse DeleteInstance(Models\DeleteInstanceRequest $req) Terminate cluster instances
 * @method Models\DescribeAutoBackUpStrategyResponse DescribeAutoBackUpStrategy(Models\DescribeAutoBackUpStrategyRequest $req) This API is used to obtain an auto backup snapshot policy.
 * @method Models\DescribeIndexListResponse DescribeIndexList(Models\DescribeIndexListRequest $req) This API is used to obtain the index list.
 * @method Models\DescribeIndexMetaResponse DescribeIndexMeta(Models\DescribeIndexMetaRequest $req) This API is used to retrieve index metadata.
 * @method Models\DescribeInstanceLogsResponse DescribeInstanceLogs(Models\DescribeInstanceLogsRequest $req) Query the logs of eligible ES clusters in that region for the user.
 * @method Models\DescribeInstanceOperationsResponse DescribeInstanceOperations(Models\DescribeInstanceOperationsRequest $req) Query the operation records of an instance under specified conditions.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) Query all instances meeting conditions for the user in that region
 * @method Models\DescribeViewsResponse DescribeViews(Models\DescribeViewsRequest $req) Query view data of a cluster, including cluster-level, node, and Kibana dimensions.
 * @method Models\GetRequestTargetNodeTypesResponse GetRequestTargetNodeTypes(Models\GetRequestTargetNodeTypesRequest $req) Get the node type that receives client requests.
 * @method Models\ModifyAutoBackUpCommonInfoResponse ModifyAutoBackUpCommonInfo(Models\ModifyAutoBackUpCommonInfoRequest $req) This API is used to modify the common information of an auto backup snapshot policy.
 * @method Models\ModifyAutoBackUpStrategyResponse ModifyAutoBackUpStrategy(Models\ModifyAutoBackUpStrategyRequest $req) This API is used to modify an auto backup snapshot policy.
 * @method Models\RestartInstanceResponse RestartInstance(Models\RestartInstanceRequest $req) Restart ES cluster instances for system version update.
 * @method Models\RestartKibanaResponse RestartKibana(Models\RestartKibanaRequest $req) Restart Kibana
 * @method Models\RestartNodesResponse RestartNodes(Models\RestartNodesRequest $req) Used to restart cluster nodes.
 * @method Models\UpdateDictionariesResponse UpdateDictionaries(Models\UpdateDictionariesRequest $req) Update the ES cluster dictionary
 * @method Models\UpdateIndexResponse UpdateIndex(Models\UpdateIndexRequest $req) Updates an index
 * @method Models\UpdateInstanceResponse UpdateInstance(Models\UpdateInstanceRequest $req) Perform operations on the cluster, such as node specification change, instance name modification, configuration modification, password resetting, and Kibana blocklist/allowlist addition. InstanceId is a required parameter, while ForceRestart is optional. The remaining parameter combinations and their meanings are as follows:
- InstanceName: Modify the instance name (only used to identify the instance)
-NodeInfoList: Modify node configuration (horizontally scale nodes, vertically scale nodes, add primary nodes, add cold nodes, etc.)
-EsConfig: modify cluster configuration
-Password: Modify the password of the default user elastic
-EsAcl: Modify an ACL
-CosBackUp: Set cluster COS auto backup information
Only one of the above parameters can be passed. Passing more or fewer will cause request failure.
 * @method Models\UpdatePluginsResponse UpdatePlugins(Models\UpdatePluginsRequest $req) Update the plug-in list
 * @method Models\UpdateRequestTargetNodeTypesResponse UpdateRequestTargetNodeTypes(Models\UpdateRequestTargetNodeTypesRequest $req) This API is used to update the node type that receives client requests.
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) Upgrades the edition of an ES cluster
 * @method Models\UpgradeLicenseResponse UpgradeLicense(Models\UpgradeLicenseRequest $req) Upgrade ES commercial features
 */

class EsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "es.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "es";

    /**
     * @var string
     */
    protected $version = "2018-04-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("es")."\\"."V20180416\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
