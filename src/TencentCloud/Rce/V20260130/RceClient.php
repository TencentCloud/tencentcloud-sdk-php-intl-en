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

namespace TencentCloud\Rce\V20260130;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Rce\V20260130\Models as Models;

/**
 * @method Models\AssessDeviceRiskPremiumProResponse AssessDeviceRiskPremiumPro(Models\AssessDeviceRiskPremiumProRequest $req) Device Risk assessment - Premium
 * @method Models\AssessDeviceRiskProResponse AssessDeviceRiskPro(Models\AssessDeviceRiskProRequest $req) Device Risk Assessment - Basic
 * @method Models\AssessEnvironmentRiskResponse AssessEnvironmentRisk(Models\AssessEnvironmentRiskRequest $req) Environment Risk Assessment
 * @method Models\ReportEventResponse ReportEvent(Models\ReportEventRequest $req) Used to report events that do not require real-time decision-making in your business. Our engine will perform computations and apply machine learning to mine risk features from these events, which are then used to support real-time event risk assessment.
 */

class RceClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "rce.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "rce";

    /**
     * @var string
     */
    protected $version = "2026-01-30";

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
        $respClass = "TencentCloud"."\\".ucfirst("rce")."\\"."V20260130\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
