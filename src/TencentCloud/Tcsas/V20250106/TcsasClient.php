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

namespace TencentCloud\Tcsas\V20250106;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcsas\V20250106\Models as Models;

/**
 * @method Models\DescribeMNGMAUDataDetailResponse DescribeMNGMAUDataDetail(Models\DescribeMNGMAUDataDetailRequest $req) This API is used to retrieve the detailed mini game monthly active user data.
 * @method Models\DescribeMNGMAULineChartResponse DescribeMNGMAULineChart(Models\DescribeMNGMAULineChartRequest $req) This API is used to retrieve mini game monthly active user data in a line chart format.
 * @method Models\DescribeMNGMAUMonthlyComparisonMetricCardResponse DescribeMNGMAUMonthlyComparisonMetricCard(Models\DescribeMNGMAUMonthlyComparisonMetricCardRequest $req) This API is used to retrieve MAU comparison data for a mini game between two months.
 * @method Models\DescribeMNPMAUDataDetailResponse DescribeMNPMAUDataDetail(Models\DescribeMNPMAUDataDetailRequest $req) This API is used to retrieve the detailed mini program monthly active user data.
 * @method Models\DescribeMNPMAULineChartResponse DescribeMNPMAULineChart(Models\DescribeMNPMAULineChartRequest $req) This API is used to retrieve mini program monthly active user data in a line chart format.
 * @method Models\DescribeMNPMAUMetricCardResponse DescribeMNPMAUMetricCard(Models\DescribeMNPMAUMetricCardRequest $req) This API is used to retrieve MAU comparison data for a mini program between two months.
 */

class TcsasClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tcsas.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tcsas";

    /**
     * @var string
     */
    protected $version = "2025-01-06";

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
        $respClass = "TencentCloud"."\\".ucfirst("tcsas")."\\"."V20250106\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
