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

namespace TencentCloud\Trro\V20220325;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Trro\V20220325\Models as Models;

/**
 * @method Models\BatchDeleteDevicesResponse BatchDeleteDevices(Models\BatchDeleteDevicesRequest $req) This API is used to delete devices in batches.
 * @method Models\BatchDeletePolicyResponse BatchDeletePolicy(Models\BatchDeletePolicyRequest $req) This API is used to batch delete and modify permission configurations.
 * @method Models\CreateDeviceResponse CreateDevice(Models\CreateDeviceRequest $req) This API is used to create a device.
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) This API is used to create a project.
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) This API is used to delete a project.
 * @method Models\DescribeDeviceInfoResponse DescribeDeviceInfo(Models\DescribeDeviceInfoRequest $req) This API is used to get specified device information.
 * @method Models\DescribeDeviceSessionListResponse DescribeDeviceSessionList(Models\DescribeDeviceSessionListRequest $req) Getting the device session list
 * @method Models\DescribeProjectInfoResponse DescribeProjectInfo(Models\DescribeProjectInfoRequest $req) This API is used to get project information.
 * @method Models\DescribeProjectListResponse DescribeProjectList(Models\DescribeProjectListRequest $req) This API is used to get project lists.
 * @method Models\DescribeRecentSessionListResponse DescribeRecentSessionList(Models\DescribeRecentSessionListRequest $req) Get the latest device session list
 * @method Models\DescribeSessionStatisticsResponse DescribeSessionStatistics(Models\DescribeSessionStatisticsRequest $req) Get session statistical values
 * @method Models\DescribeSessionStatisticsByIntervalResponse DescribeSessionStatisticsByInterval(Models\DescribeSessionStatisticsByIntervalRequest $req) Getting session statistics for each time period
 * @method Models\GetDeviceLicenseResponse GetDeviceLicense(Models\GetDeviceLicenseRequest $req) Obtain the quantity of available authorizations already bound to the device
 * @method Models\GetDevicesResponse GetDevices(Models\GetDevicesRequest $req) Query the authorization binding status of user devices
 * @method Models\GetLicenseStatResponse GetLicenseStat(Models\GetLicenseStatRequest $req) Statistics of license types and quantities
 * @method Models\GetLicensesResponse GetLicenses(Models\GetLicensesRequest $req) View the license list by authorization
 * @method Models\ModifyDeviceResponse ModifyDevice(Models\ModifyDeviceRequest $req) This API is used to modify device information.
 * @method Models\ModifyPolicyResponse ModifyPolicy(Models\ModifyPolicyRequest $req) This API is used to modify permission configuration.
 * @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) This API is used to modify project information.
 */

class TrroClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "trro.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "trro";

    /**
     * @var string
     */
    protected $version = "2022-03-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("trro")."\\"."V20220325\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
