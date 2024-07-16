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

namespace TencentCloud\Cdwdoris\V20211228;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdwdoris\V20211228\Models as Models;

/**
 * @method Models\CreateInstanceNewResponse CreateInstanceNew(Models\CreateInstanceNewRequest $req) This API is used to create clusters.
 * @method Models\DescribeClusterConfigsResponse DescribeClusterConfigs(Models\DescribeClusterConfigsRequest $req) This API is used to get the contents of the latest configuration files (config.xml, metrika.xml, and user.xml) of the cluster and display them to the user.
 * @method Models\DescribeDatabaseAuditDownloadResponse DescribeDatabaseAuditDownload(Models\DescribeDatabaseAuditDownloadRequest $req) This API is used to download database audit logs.
 * @method Models\DescribeDatabaseAuditRecordsResponse DescribeDatabaseAuditRecords(Models\DescribeDatabaseAuditRecordsRequest $req) This API is used to get database audit records.
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) This API is used to query the specific information of a cluster based on the cluster ID.
 * @method Models\DescribeInstanceNodesResponse DescribeInstanceNodes(Models\DescribeInstanceNodesRequest $req) This API is used to get the list of cluster node information.
 * @method Models\DescribeInstanceNodesInfoResponse DescribeInstanceNodesInfo(Models\DescribeInstanceNodesInfoRequest $req) This API is used to get the BE/FE node roles.
 * @method Models\DescribeInstanceStateResponse DescribeInstanceState(Models\DescribeInstanceStateRequest $req) This API is used to display cluster status, process progress, etc. in the cluster details page.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to get the list of clusters.
 * @method Models\DescribeSlowQueryRecordsResponse DescribeSlowQueryRecords(Models\DescribeSlowQueryRecordsRequest $req) This API is used to get the slow log list.
 * @method Models\DescribeSlowQueryRecordsDownloadResponse DescribeSlowQueryRecordsDownload(Models\DescribeSlowQueryRecordsDownloadRequest $req) This API is used to download slow log files.
 * @method Models\DestroyInstanceResponse DestroyInstance(Models\DestroyInstanceRequest $req) This API is used to terminate clusters.
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) This API is used to modify the cluster's name.
 * @method Models\ResizeDiskResponse ResizeDisk(Models\ResizeDiskRequest $req) This API is used to expand cloud disks.
 * @method Models\RestartClusterForNodeResponse RestartClusterForNode(Models\RestartClusterForNodeRequest $req) This API is used to indicate the rolling restart of the clusters.
 * @method Models\ScaleOutInstanceResponse ScaleOutInstance(Models\ScaleOutInstanceRequest $req) This API is used to horizontally scale out nodes.
 * @method Models\ScaleUpInstanceResponse ScaleUpInstance(Models\ScaleUpInstanceRequest $req) This API is used to scale up/down computing resources.
 */

class CdwdorisClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdwdoris.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cdwdoris";

    /**
     * @var string
     */
    protected $version = "2021-12-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("cdwdoris")."\\"."V20211228\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
