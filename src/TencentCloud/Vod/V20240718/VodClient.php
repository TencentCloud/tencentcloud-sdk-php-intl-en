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

namespace TencentCloud\Vod\V20240718;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Vod\V20240718\Models as Models;

/**
 * @method Models\CreateIncrementalMigrationStrategyResponse CreateIncrementalMigrationStrategy(Models\CreateIncrementalMigrationStrategyRequest $req) Create an incremental migration strategy for the storage of the professional application.
 * @method Models\CreateStorageResponse CreateStorage(Models\CreateStorageRequest $req) This API is used to create storage for professional applications.

Note:
- This API is exclusively for professional applications.
- When a customer creates a VOD professional application, the system automatically enables storage in certain regions by default. If the customer needs to enable storage in other regions, they can do so using this API.
- All storage regions and the regions where storage have already been enabled can be queried using the [DescribeStorageRegions](https://cloud.tencent.com/document/product/266/72480) API.
 * @method Models\CreateStorageCredentialsResponse CreateStorageCredentials(Models\CreateStorageCredentialsRequest $req) The API is used to generate access credentials for VOD professional applications, such as generating credentials for client uploads.
 * @method Models\DeleteIncrementalMigrationStrategyResponse DeleteIncrementalMigrationStrategy(Models\DeleteIncrementalMigrationStrategyRequest $req) Delete the incremental migration strategy.
 * @method Models\DescribeIncrementalMigrationStrategyInfosResponse DescribeIncrementalMigrationStrategyInfos(Models\DescribeIncrementalMigrationStrategyInfosRequest $req) Describe the information of the incremental migration strategy.
 * @method Models\DescribeStorageResponse DescribeStorage(Models\DescribeStorageRequest $req) This API is used to query bucket information in the professional application, and it also supports paginated queries.
Note:
- This API is exclusively for use in the professional application.
 * @method Models\ModifyIncrementalMigrationStrategyResponse ModifyIncrementalMigrationStrategy(Models\ModifyIncrementalMigrationStrategyRequest $req) Modify the information of incremental migration strategy.
 */

class VodClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "vod.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "vod";

    /**
     * @var string
     */
    protected $version = "2024-07-18";

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
        $respClass = "TencentCloud"."\\".ucfirst("vod")."\\"."V20240718\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
