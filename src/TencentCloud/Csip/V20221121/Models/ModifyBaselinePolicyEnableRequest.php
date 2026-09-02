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
 * ModifyBaselinePolicyEnable request structure.
 *
 * @method array getPolicyIDList() Obtain <p>List of baseline policy IDs that need modification. It cannot be empty and elements cannot be 0.</p>
 * @method void setPolicyIDList(array $PolicyIDList) Set <p>List of baseline policy IDs that need modification. It cannot be empty and elements cannot be 0.</p>
 * @method string getPolicyType() Obtain <p>Baseline policy type. Valid values:</p><ul><li>SYSTEM: system policy (built-in in CSIP)</li><li>SELF: user-defined policy</li></ul>
 * @method void setPolicyType(string $PolicyType) Set <p>Baseline policy type. Valid values:</p><ul><li>SYSTEM: system policy (built-in in CSIP)</li><li>SELF: user-defined policy</li></ul>
 * @method integer getEnable() Obtain <p>Target enable status. 0: disabled, 1: enabled.</p>
 * @method void setEnable(integer $Enable) Set <p>Target enable status. 0: disabled, 1: enabled.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 */
class ModifyBaselinePolicyEnableRequest extends AbstractModel
{
    /**
     * @var array <p>List of baseline policy IDs that need modification. It cannot be empty and elements cannot be 0.</p>
     */
    public $PolicyIDList;

    /**
     * @var string <p>Baseline policy type. Valid values:</p><ul><li>SYSTEM: system policy (built-in in CSIP)</li><li>SELF: user-defined policy</li></ul>
     */
    public $PolicyType;

    /**
     * @var integer <p>Target enable status. 0: disabled, 1: enabled.</p>
     */
    public $Enable;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @param array $PolicyIDList <p>List of baseline policy IDs that need modification. It cannot be empty and elements cannot be 0.</p>
     * @param string $PolicyType <p>Baseline policy type. Valid values:</p><ul><li>SYSTEM: system policy (built-in in CSIP)</li><li>SELF: user-defined policy</li></ul>
     * @param integer $Enable <p>Target enable status. 0: disabled, 1: enabled.</p>
     * @param array $MemberId <p>Group account member id</p>
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
        if (array_key_exists("PolicyIDList",$param) and $param["PolicyIDList"] !== null) {
            $this->PolicyIDList = $param["PolicyIDList"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
