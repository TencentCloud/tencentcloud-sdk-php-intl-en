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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DemoteServiceUsagePlan request structure.
 *
 * @method string getUsagePlanId() Obtain Usage plan ID.
 * @method void setUsagePlanId(string $UsagePlanId) Set Usage plan ID.
 * @method string getServiceId() Obtain Unique ID of the service to be demoted.
 * @method void setServiceId(string $ServiceId) Set Unique ID of the service to be demoted.
 * @method string getEnvironment() Obtain Environment name.
 * @method void setEnvironment(string $Environment) Set Environment name.
 */
class DemoteServiceUsagePlanRequest extends AbstractModel
{
    /**
     * @var string Usage plan ID.
     */
    public $UsagePlanId;

    /**
     * @var string Unique ID of the service to be demoted.
     */
    public $ServiceId;

    /**
     * @var string Environment name.
     */
    public $Environment;

    /**
     * @param string $UsagePlanId Usage plan ID.
     * @param string $ServiceId Unique ID of the service to be demoted.
     * @param string $Environment Environment name.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UsagePlanId",$param) and $param["UsagePlanId"] !== null) {
            $this->UsagePlanId = $param["UsagePlanId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
