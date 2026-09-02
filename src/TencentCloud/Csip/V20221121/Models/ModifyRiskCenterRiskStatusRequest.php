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
 * ModifyRiskCenterRiskStatus request structure.
 *
 * @method array getRiskStatusKeys() Obtain Risky Asset Related Data
 * @method void setRiskStatusKeys(array $RiskStatusKeys) Set Risky Asset Related Data
 * @method integer getStatus() Obtain Disposition status. 1: Handled; 2: Ignored; 3: Cancel disposed; 4: Cancel ignored.
 * @method void setStatus(integer $Status) Set Disposition status. 1: Handled; 2: Ignored; 3: Cancel disposed; 4: Cancel ignored.
 * @method integer getType() Obtain Risk Type. 0: Port Risk; 1: Vulnerability Risk; 2: Weak Password Risk; 3: Web Sites Content Risk; 4: Configuration Risk; 5: Exposed Risk Service
 * @method void setType(integer $Type) Set Risk Type. 0: Port Risk; 1: Vulnerability Risk; 2: Weak Password Risk; 3: Web Sites Content Risk; 4: Configuration Risk; 5: Exposed Risk Service
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 */
class ModifyRiskCenterRiskStatusRequest extends AbstractModel
{
    /**
     * @var array Risky Asset Related Data
     */
    public $RiskStatusKeys;

    /**
     * @var integer Disposition status. 1: Handled; 2: Ignored; 3: Cancel disposed; 4: Cancel ignored.
     */
    public $Status;

    /**
     * @var integer Risk Type. 0: Port Risk; 1: Vulnerability Risk; 2: Weak Password Risk; 3: Web Sites Content Risk; 4: Configuration Risk; 5: Exposed Risk Service
     */
    public $Type;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @param array $RiskStatusKeys Risky Asset Related Data
     * @param integer $Status Disposition status. 1: Handled; 2: Ignored; 3: Cancel disposed; 4: Cancel ignored.
     * @param integer $Type Risk Type. 0: Port Risk; 1: Vulnerability Risk; 2: Weak Password Risk; 3: Web Sites Content Risk; 4: Configuration Risk; 5: Exposed Risk Service
     * @param array $MemberId Group Account Member ID
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
