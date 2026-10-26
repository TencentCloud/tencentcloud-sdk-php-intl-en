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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateRecordPlan request structure.
 *
 * @method string getPlanId() Obtain Plan ID
 * @method void setPlanId(string $PlanId) Set Plan ID
 * @method UpdateRecordPlanData getMod() Obtain Modify the content of the plan
 * @method void setMod(UpdateRecordPlanData $Mod) Set Modify the content of the plan
 */
class UpdateRecordPlanRequest extends AbstractModel
{
    /**
     * @var string Plan ID
     */
    public $PlanId;

    /**
     * @var UpdateRecordPlanData Modify the content of the plan
     */
    public $Mod;

    /**
     * @param string $PlanId Plan ID
     * @param UpdateRecordPlanData $Mod Modify the content of the plan
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

        if (array_key_exists("Mod",$param) and $param["Mod"] !== null) {
            $this->Mod = new UpdateRecordPlanData();
            $this->Mod->deserialize($param["Mod"]);
        }
    }
}
