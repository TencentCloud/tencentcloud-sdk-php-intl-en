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

namespace TencentCloud\Emr\V20190103;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Emr\V20190103\Models as Models;

/**
* @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) This API is used to create EMR instance.
* @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query EMR instances.
* @method Models\InquiryPriceCreateInstanceResponse InquiryPriceCreateInstance(Models\InquiryPriceCreateInstanceRequest $req) This API is used to query price of instance creation.
* @method Models\InquiryPriceRenewInstanceResponse InquiryPriceRenewInstance(Models\InquiryPriceRenewInstanceRequest $req) This API is used to query the price for renewal.
* @method Models\InquiryPriceScaleOutInstanceResponse InquiryPriceScaleOutInstance(Models\InquiryPriceScaleOutInstanceRequest $req) This API is used to query price of scale-out.
* @method Models\InquiryPriceUpdateInstanceResponse InquiryPriceUpdateInstance(Models\InquiryPriceUpdateInstanceRequest $req) This API is used to query price of scaling.
* @method Models\ScaleOutInstanceResponse ScaleOutInstance(Models\ScaleOutInstanceRequest $req) This API is used to scale out instance.
* @method Models\TerminateInstanceResponse TerminateInstance(Models\TerminateInstanceRequest $req) This API is used to terminate EMR instance.
* @method Models\TerminateTasksResponse TerminateTasks(Models\TerminateTasksRequest $req) This API is used to terminate a task node.
 */

class EmrClient extends AbstractClient
{
    protected $endpoint = "emr.tencentcloudapi.com";

    protected $version = "2019-01-03";

    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("emr")."\\"."V20190103\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
