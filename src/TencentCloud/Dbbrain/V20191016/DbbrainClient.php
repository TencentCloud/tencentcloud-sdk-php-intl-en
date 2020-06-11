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

namespace TencentCloud\Dbbrain\V20191016;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dbbrain\V20191016\Models as Models;

/**
 * @method Models\DescribeDBDiagEventResponse DescribeDBDiagEvent(Models\DescribeDBDiagEventRequest $req) This API is used to get the details of an instance exception diagnosis event.
 * @method Models\DescribeDBDiagHistoryResponse DescribeDBDiagHistory(Models\DescribeDBDiagHistoryRequest $req) This API is used to get the list of instance diagnosis events.
 * @method Models\DescribeSlowLogTimeSeriesStatsResponse DescribeSlowLogTimeSeriesStats(Models\DescribeSlowLogTimeSeriesStatsRequest $req) This API is used to get the slow log statistics histogram.
 * @method Models\DescribeSlowLogTopSqlsResponse DescribeSlowLogTopSqls(Models\DescribeSlowLogTopSqlsRequest $req) This API is used to get and sort the top slow SQL statements in a specified time period by the aggregation mode of SQL template plus schema.
 */

class DbbrainClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dbbrain.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2019-10-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("dbbrain")."\\"."V20191016\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
