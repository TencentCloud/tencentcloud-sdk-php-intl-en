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
 * Brief information of the baseline policy
 *
 * @method integer getID() Obtain <p>Baseline policy ID.</p>
 * @method void setID(integer $ID) Set <p>Baseline policy ID.</p>
 * @method string getPolicyName() Obtain <p>Baseline policy name.</p>
 * @method void setPolicyName(string $PolicyName) Set <p>Baseline policy name.</p>
 * @method boolean getIsSystem() Obtain <p>Whether it is a system built-in policy. true indicates yes, false indicates no (user-defined policy).</p>
 * @method void setIsSystem(boolean $IsSystem) Set <p>Whether it is a system built-in policy. true indicates yes, false indicates no (user-defined policy).</p>
 */
class BaselinePolicyBrief extends AbstractModel
{
    /**
     * @var integer <p>Baseline policy ID.</p>
     */
    public $ID;

    /**
     * @var string <p>Baseline policy name.</p>
     */
    public $PolicyName;

    /**
     * @var boolean <p>Whether it is a system built-in policy. true indicates yes, false indicates no (user-defined policy).</p>
     */
    public $IsSystem;

    /**
     * @param integer $ID <p>Baseline policy ID.</p>
     * @param string $PolicyName <p>Baseline policy name.</p>
     * @param boolean $IsSystem <p>Whether it is a system built-in policy. true indicates yes, false indicates no (user-defined policy).</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("IsSystem",$param) and $param["IsSystem"] !== null) {
            $this->IsSystem = $param["IsSystem"];
        }
    }
}
