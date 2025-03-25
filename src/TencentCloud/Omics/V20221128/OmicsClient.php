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

namespace TencentCloud\Omics\V20221128;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Omics\V20221128\Models as Models;

/**
 * @method Models\CreateEnvironmentResponse CreateEnvironment(Models\CreateEnvironmentRequest $req) This API is used to create an environment for Tencent Healthcare Omics Platform.
 * @method Models\CreateVolumeResponse CreateVolume(Models\CreateVolumeRequest $req) This API is used to create a volume.
 * @method Models\DeleteEnvironmentResponse DeleteEnvironment(Models\DeleteEnvironmentRequest $req) This API is used to delete the environment.
 * @method Models\DeleteVolumeResponse DeleteVolume(Models\DeleteVolumeRequest $req) This API is used to delete the volume.
 * @method Models\DeleteVolumeDataResponse DeleteVolumeData(Models\DeleteVolumeDataRequest $req) This API is used to delete the volume data.
 * @method Models\DescribeEnvironmentsResponse DescribeEnvironments(Models\DescribeEnvironmentsRequest $req) This API is used to query the environment list.
 * @method Models\DescribeRunGroupsResponse DescribeRunGroups(Models\DescribeRunGroupsRequest $req) This API is used to query the run group list.
 * @method Models\DescribeRunsResponse DescribeRuns(Models\DescribeRunsRequest $req) This API is used to query the run list.
 * @method Models\DescribeTablesResponse DescribeTables(Models\DescribeTablesRequest $req) This API is used to query the table.
 * @method Models\DescribeTablesRowsResponse DescribeTablesRows(Models\DescribeTablesRowsRequest $req) This API is used to query the table row data.
 * @method Models\DescribeVolumesResponse DescribeVolumes(Models\DescribeVolumesRequest $req) This API is used to query the volume list.
 * @method Models\GetRunCallsResponse GetRunCalls(Models\GetRunCallsRequest $req) This API is used to query job details.
 * @method Models\GetRunMetadataFileResponse GetRunMetadataFile(Models\GetRunMetadataFileRequest $req) This API is used to get the run details file.
 * @method Models\GetRunStatusResponse GetRunStatus(Models\GetRunStatusRequest $req) This API is used to query run details.
 * @method Models\ImportTableFileResponse ImportTableFile(Models\ImportTableFileRequest $req) This API is used to import the table file.
 * @method Models\ModifyVolumeResponse ModifyVolume(Models\ModifyVolumeRequest $req) This API is used to modify the volume.
 * @method Models\RetryRunsResponse RetryRuns(Models\RetryRunsRequest $req) This API is used to retry the run.
 * @method Models\RunApplicationResponse RunApplication(Models\RunApplicationRequest $req) This API is used to run the application.
 * @method Models\RunWorkflowResponse RunWorkflow(Models\RunWorkflowRequest $req) This API is used to run the workflow.
 * @method Models\TerminateRunGroupResponse TerminateRunGroup(Models\TerminateRunGroupRequest $req) This API is used to terminate the run group.
 */

class OmicsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "omics.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "omics";

    /**
     * @var string
     */
    protected $version = "2022-11-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("omics")."\\"."V20221128\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
