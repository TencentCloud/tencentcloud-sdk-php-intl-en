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
 * ModifyEDRRuleStatus request structure.
 *
 * @method integer getStatus() Obtain <p>Enabled status: 0 - Enabled, 1 - Disabled</p>
 * @method void setStatus(integer $Status) Set <p>Enabled status: 0 - Enabled, 1 - Disabled</p>
 * @method array getRuleIDs() Obtain <p>Policy ID array</p>
 * @method void setRuleIDs(array $RuleIDs) Set <p>Policy ID array</p>
 * @method integer getRuleType() Obtain <p>Policy type. 0: system; 1: custom</p>
 * @method void setRuleType(integer $RuleType) Set <p>Policy type. 0: system; 1: custom</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getTargetAppIDs() Obtain <p>APPID of the modify policy</p>
 * @method void setTargetAppIDs(array $TargetAppIDs) Set <p>APPID of the modify policy</p>
 */
class ModifyEDRRuleStatusRequest extends AbstractModel
{
    /**
     * @var integer <p>Enabled status: 0 - Enabled, 1 - Disabled</p>
     */
    public $Status;

    /**
     * @var array <p>Policy ID array</p>
     */
    public $RuleIDs;

    /**
     * @var integer <p>Policy type. 0: system; 1: custom</p>
     */
    public $RuleType;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>APPID of the modify policy</p>
     */
    public $TargetAppIDs;

    /**
     * @param integer $Status <p>Enabled status: 0 - Enabled, 1 - Disabled</p>
     * @param array $RuleIDs <p>Policy ID array</p>
     * @param integer $RuleType <p>Policy type. 0: system; 1: custom</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $TargetAppIDs <p>APPID of the modify policy</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleIDs",$param) and $param["RuleIDs"] !== null) {
            $this->RuleIDs = $param["RuleIDs"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("TargetAppIDs",$param) and $param["TargetAppIDs"] !== null) {
            $this->TargetAppIDs = $param["TargetAppIDs"];
        }
    }
}
