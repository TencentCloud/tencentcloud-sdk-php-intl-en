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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsagePlan request structure.
 *
 * @method string getUsagePlanId() Obtain Unique ID of the usage plan to be queried.
 * @method void setUsagePlanId(string $UsagePlanId) Set Unique ID of the usage plan to be queried.
 */
class DescribeUsagePlanRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the usage plan to be queried.
     */
    public $UsagePlanId;

    /**
     * @param string $UsagePlanId Unique ID of the usage plan to be queried.
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
    }
}
