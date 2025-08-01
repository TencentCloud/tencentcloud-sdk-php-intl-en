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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindZoneToPlan request structure.
 *
 * @method string getZoneId() Obtain ID of the site to be bound.
 * @method void setZoneId(string $ZoneId) Set ID of the site to be bound.
 * @method string getPlanId() Obtain ID of the target plan.
 * @method void setPlanId(string $PlanId) Set ID of the target plan.
 */
class BindZoneToPlanRequest extends AbstractModel
{
    /**
     * @var string ID of the site to be bound.
     */
    public $ZoneId;

    /**
     * @var string ID of the target plan.
     */
    public $PlanId;

    /**
     * @param string $ZoneId ID of the site to be bound.
     * @param string $PlanId ID of the target plan.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }
    }
}
