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
 * dspm associated identification template info
 *
 * @method integer getComplianceId() Obtain <p>Identification template ID</p>
 * @method void setComplianceId(integer $ComplianceId) Set <p>Identification template ID</p>
 * @method string getComplianceName() Obtain <p>Recognition template name.</p>
 * @method void setComplianceName(string $ComplianceName) Set <p>Recognition template name.</p>
 * @method integer getComplianceType() Obtain <p>Identification template type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
 * @method void setComplianceType(integer $ComplianceType) Set <p>Identification template type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
 */
class DspmIdentifyRefComplianceInfo extends AbstractModel
{
    /**
     * @var integer <p>Identification template ID</p>
     */
    public $ComplianceId;

    /**
     * @var string <p>Recognition template name.</p>
     */
    public $ComplianceName;

    /**
     * @var integer <p>Identification template type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
     */
    public $ComplianceType;

    /**
     * @param integer $ComplianceId <p>Identification template ID</p>
     * @param string $ComplianceName <p>Recognition template name.</p>
     * @param integer $ComplianceType <p>Identification template type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
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
        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("ComplianceName",$param) and $param["ComplianceName"] !== null) {
            $this->ComplianceName = $param["ComplianceName"];
        }

        if (array_key_exists("ComplianceType",$param) and $param["ComplianceType"] !== null) {
            $this->ComplianceType = $param["ComplianceType"];
        }
    }
}
