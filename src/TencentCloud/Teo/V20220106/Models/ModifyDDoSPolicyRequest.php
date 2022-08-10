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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDDoSPolicy request structure.
 *
 * @method integer getPolicyId() Obtain ID of the policy group
 * @method void setPolicyId(integer $PolicyId) Set ID of the policy group
 * @method string getZoneId() Obtain Top-level domain name
 * @method void setZoneId(string $ZoneId) Set Top-level domain name
 * @method DdosRule getDdosRule() Obtain Detailed DDoS mitigation configuration
 * @method void setDdosRule(DdosRule $DdosRule) Set Detailed DDoS mitigation configuration
 */
class ModifyDDoSPolicyRequest extends AbstractModel
{
    /**
     * @var integer ID of the policy group
     */
    public $PolicyId;

    /**
     * @var string Top-level domain name
     */
    public $ZoneId;

    /**
     * @var DdosRule Detailed DDoS mitigation configuration
     */
    public $DdosRule;

    /**
     * @param integer $PolicyId ID of the policy group
     * @param string $ZoneId Top-level domain name
     * @param DdosRule $DdosRule Detailed DDoS mitigation configuration
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("DdosRule",$param) and $param["DdosRule"] !== null) {
            $this->DdosRule = new DdosRule();
            $this->DdosRule->deserialize($param["DdosRule"]);
        }
    }
}
