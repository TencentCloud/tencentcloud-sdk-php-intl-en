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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRiskCenterRiskStatus request structure.
 *
 * @method array getRiskStatusKeys() Obtain Data of risk assets
 * @method void setRiskStatusKeys(array $RiskStatusKeys) Set Data of risk assets
 * @method integer getStatus() Obtain Specify how you want to change the risk status. `1`: Change to Handled, `2`: Change to Ignored; `3`: Remove from Handled; `4`: Remove from Ignored
 * @method void setStatus(integer $Status) Set Specify how you want to change the risk status. `1`: Change to Handled, `2`: Change to Ignored; `3`: Remove from Handled; `4`: Remove from Ignored
 * @method integer getType() Obtain Risk type. `0`: Port risk; `1`: Vulnerability; `2`: Weak password; `3`: Website content risk; `4`: Configuration risk; `5`: Risk services
 * @method void setType(integer $Type) Set Risk type. `0`: Port risk; `1`: Vulnerability; `2`: Weak password; `3`: Website content risk; `4`: Configuration risk; `5`: Risk services
 */
class ModifyRiskCenterRiskStatusRequest extends AbstractModel
{
    /**
     * @var array Data of risk assets
     */
    public $RiskStatusKeys;

    /**
     * @var integer Specify how you want to change the risk status. `1`: Change to Handled, `2`: Change to Ignored; `3`: Remove from Handled; `4`: Remove from Ignored
     */
    public $Status;

    /**
     * @var integer Risk type. `0`: Port risk; `1`: Vulnerability; `2`: Weak password; `3`: Website content risk; `4`: Configuration risk; `5`: Risk services
     */
    public $Type;

    /**
     * @param array $RiskStatusKeys Data of risk assets
     * @param integer $Status Specify how you want to change the risk status. `1`: Change to Handled, `2`: Change to Ignored; `3`: Remove from Handled; `4`: Remove from Ignored
     * @param integer $Type Risk type. `0`: Port risk; `1`: Vulnerability; `2`: Weak password; `3`: Website content risk; `4`: Configuration risk; `5`: Risk services
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
        if (array_key_exists("RiskStatusKeys",$param) and $param["RiskStatusKeys"] !== null) {
            $this->RiskStatusKeys = [];
            foreach ($param["RiskStatusKeys"] as $key => $value){
                $obj = new RiskCenterStatusKey();
                $obj->deserialize($value);
                array_push($this->RiskStatusKeys, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
