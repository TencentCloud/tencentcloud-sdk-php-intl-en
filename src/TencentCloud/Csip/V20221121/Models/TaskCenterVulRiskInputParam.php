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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Advanced vulnerability scan configuration
 *
 * @method string getRiskId() Obtain Risk ID
 * @method void setRiskId(string $RiskId) Set Risk ID
 * @method integer getEnable() Obtain Whether to enable. `0`: no, `1`: yes.
 * @method void setEnable(integer $Enable) Set Whether to enable. `0`: no, `1`: yes.
 */
class TaskCenterVulRiskInputParam extends AbstractModel
{
    /**
     * @var string Risk ID
     */
    public $RiskId;

    /**
     * @var integer Whether to enable. `0`: no, `1`: yes.
     */
    public $Enable;

    /**
     * @param string $RiskId Risk ID
     * @param integer $Enable Whether to enable. `0`: no, `1`: yes.
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
        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
