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

namespace TencentCloud\Batch\V20170312;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Batch\V20170312\Models as Models;

/**
 * @method Models\DescribeAvailableCvmInstanceTypesResponse DescribeAvailableCvmInstanceTypes(Models\DescribeAvailableCvmInstanceTypesRequest $req) This API is used to view the information of available CVM model configurations.
 * @method Models\DescribeCvmZoneInstanceConfigInfosResponse DescribeCvmZoneInstanceConfigInfos(Models\DescribeCvmZoneInstanceConfigInfosRequest $req) This API is used to get the model configuration information of the availability zone of BatchCompute.
 * @method Models\DescribeInstanceCategoriesResponse DescribeInstanceCategories(Models\DescribeInstanceCategoriesRequest $req) Currently, CVM instance families are classified into different category, and each category contains several instance families. This API is used to query the instance category information.
 */

class BatchClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "batch.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "batch";

    /**
     * @var string
     */
    protected $version = "2017-03-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("batch")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
