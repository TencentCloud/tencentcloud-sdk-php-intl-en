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

namespace TencentCloud\Controlcenter\V20230110;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Controlcenter\V20230110\Models as Models;

/**
 * @method Models\BatchApplyAccountBaselinesResponse BatchApplyAccountBaselines(Models\BatchApplyAccountBaselinesRequest $req) This API is used to apply baselines to existing accounts in batches.
 * @method Models\GetAccountFactoryBaselineResponse GetAccountFactoryBaseline(Models\GetAccountFactoryBaselineRequest $req) This API is used to retrieve user baseline configuration data.
 * @method Models\ListAccountFactoryBaselineItemsResponse ListAccountFactoryBaselineItems(Models\ListAccountFactoryBaselineItemsRequest $req) This API is used to obtain account factory system baseline items.
 * @method Models\ListDeployStepTasksResponse ListDeployStepTasks(Models\ListDeployStepTasksRequest $req) This API is used to retrieve the application history of a certain baseline item.
 * @method Models\UpdateAccountFactoryBaselineResponse UpdateAccountFactoryBaseline(Models\UpdateAccountFactoryBaselineRequest $req) This API is used to update the current baseline item configuration of a user. The baseline configuration will be overwritten with the current configuration. When adding new baseline items, the newly-added baseline configuration needs to be added to the existing configuration. When deleting baseline items, the deleted baseline configuration needs to be removed from the existing configuration, then save the latest baseline configuration.
 */

class ControlcenterClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "controlcenter.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "controlcenter";

    /**
     * @var string
     */
    protected $version = "2023-01-10";

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
        $respClass = "TencentCloud"."\\".ucfirst("controlcenter")."\\"."V20230110\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
