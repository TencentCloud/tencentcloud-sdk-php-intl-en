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

namespace TencentCloud\Es\V20180416;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Es\V20180416\Models as Models;

/**
 * @method Models\CreateIndexResponse CreateIndex(Models\CreateIndexRequest $req) This API is used to create indices.
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) This API is used to create an ES cluster instance with the specified specification.
 * @method Models\DeleteIndexResponse DeleteIndex(Models\DeleteIndexRequest $req) This API is used to delete indices.
 * @method Models\DeleteInstanceResponse DeleteInstance(Models\DeleteInstanceRequest $req) This API is used to terminate a cluster instance. 
 * @method Models\DescribeIndexListResponse DescribeIndexList(Models\DescribeIndexListRequest $req) This API is used to obtain the index list.
 * @method Models\DescribeIndexMetaResponse DescribeIndexMeta(Models\DescribeIndexMetaRequest $req) This API is used to obtain index metadata.
 * @method Models\DescribeInstanceLogsResponse DescribeInstanceLogs(Models\DescribeInstanceLogsRequest $req) This API is used to query the eligible ES cluster logs in the current region.
 * @method Models\DescribeInstanceOperationsResponse DescribeInstanceOperations(Models\DescribeInstanceOperationsRequest $req) This API is used to query the operation history of an instance by specified criteria.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query all eligible instances in the current region under the current account.
 * @method Models\DescribeViewsResponse DescribeViews(Models\DescribeViewsRequest $req) This API is used to query view data from three dimensions: cluster, node, and Kibana.
 * @method Models\GetRequestTargetNodeTypesResponse GetRequestTargetNodeTypes(Models\GetRequestTargetNodeTypesRequest $req) This API is used to get the node types used to receive client requests.
 * @method Models\RestartInstanceResponse RestartInstance(Models\RestartInstanceRequest $req) This API is used to restart an ES cluster instance (for operations such as system update). 
 * @method Models\RestartKibanaResponse RestartKibana(Models\RestartKibanaRequest $req) This API is used to restart Kibana. 
 * @method Models\RestartNodesResponse RestartNodes(Models\RestartNodesRequest $req) This API is used to restart cluster nodes.
 * @method Models\UpdateDictionariesResponse UpdateDictionaries(Models\UpdateDictionariesRequest $req) This API is used to update ES cluster dictionaries.
 * @method Models\UpdateIndexResponse UpdateIndex(Models\UpdateIndexRequest $req) This API is used to update indices.
 * @method Models\UpdateInstanceResponse UpdateInstance(Models\UpdateInstanceRequest $req) This API is used for operations such as modifying node specification, renaming an instance, modifying configuration, resetting password, and setting Kibana blocklist/allowlist. `InstanceId` is required, while `ForceRestart` is optional. Other parameters or parameter combinations and their meanings are as follows:
- InstanceName: renames an instance (only for instance identification)
- NodeInfoList: modifies node configuration (horizontally scaling nodes, vertically scaling nodes, adding primary nodes, adding cold nodes, etc.)
- EsConfig: modifies cluster configuration
- Password: changes the password of the default user "elastic"
- EsAcl: modifies the ACL
- CosBackUp: sets auto-backup to COS for a cluster
Only one of the parameters or parameter combinations above can be passed in at a time, while passing fewer or more ones will cause the request to fail.
 * @method Models\UpdatePluginsResponse UpdatePlugins(Models\UpdatePluginsRequest $req) This API is used to change the list of plugins.
 * @method Models\UpdateRequestTargetNodeTypesResponse UpdateRequestTargetNodeTypes(Models\UpdateRequestTargetNodeTypesRequest $req) This API is used to update the node types used to receive client requests.
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) This API is used to upgrade ES cluster version
 * @method Models\UpgradeLicenseResponse UpgradeLicense(Models\UpgradeLicenseRequest $req) This API is used to upgrade ES X-Pack.
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
