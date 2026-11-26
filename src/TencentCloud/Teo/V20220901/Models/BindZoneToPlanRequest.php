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
 * @method string getZoneId() Obtain Site ID of the selected site that is not bound to a package.
 * @method void setZoneId(string $ZoneId) Set Site ID of the selected site that is not bound to a package.
 * @method string getPlanId() Obtain Target package ID to be bound.
 * @method void setPlanId(string $PlanId) Set Target package ID to be bound.
 */
class BindZoneToPlanRequest extends AbstractModel
{
    /**
     * @var string Site ID of the selected site that is not bound to a package.
     */
    public $ZoneId;

    /**
     * @var string Target package ID to be bound.
     */
    public $PlanId;

    /**
     * @param string $ZoneId Site ID of the selected site that is not bound to a package.
     * @param string $PlanId Target package ID to be bound.
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
