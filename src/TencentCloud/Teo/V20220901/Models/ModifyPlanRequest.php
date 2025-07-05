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
 * ModifyPlan request structure.
 *
 * @method string getPlanId() Obtain Plan ID, formatted as edgeone-2unuvzjmmn2q.
 * @method void setPlanId(string $PlanId) Set Plan ID, formatted as edgeone-2unuvzjmmn2q.
 * @method RenewFlag getRenewFlag() Obtain Auto-renewal configuration item in a prepaid plan. If auto-renewal is enabled, the plan will be automatically renewed one day before it expires. This feature is only available for Personal, Basic, and Standard Edition Plans. If this field is not specified, the original configuration will be retained.
 * @method void setRenewFlag(RenewFlag $RenewFlag) Set Auto-renewal configuration item in a prepaid plan. If auto-renewal is enabled, the plan will be automatically renewed one day before it expires. This feature is only available for Personal, Basic, and Standard Edition Plans. If this field is not specified, the original configuration will be retained.
 */
class ModifyPlanRequest extends AbstractModel
{
    /**
     * @var string Plan ID, formatted as edgeone-2unuvzjmmn2q.
     */
    public $PlanId;

    /**
     * @var RenewFlag Auto-renewal configuration item in a prepaid plan. If auto-renewal is enabled, the plan will be automatically renewed one day before it expires. This feature is only available for Personal, Basic, and Standard Edition Plans. If this field is not specified, the original configuration will be retained.
     */
    public $RenewFlag;

    /**
     * @param string $PlanId Plan ID, formatted as edgeone-2unuvzjmmn2q.
     * @param RenewFlag $RenewFlag Auto-renewal configuration item in a prepaid plan. If auto-renewal is enabled, the plan will be automatically renewed one day before it expires. This feature is only available for Personal, Basic, and Standard Edition Plans. If this field is not specified, the original configuration will be retained.
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = new RenewFlag();
            $this->RenewFlag->deserialize($param["RenewFlag"]);
        }
    }
}
