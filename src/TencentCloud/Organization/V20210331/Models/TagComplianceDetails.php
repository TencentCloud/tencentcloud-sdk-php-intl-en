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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tag compliance information.
 *
 * @method boolean getComplianceStatus() Obtain Compliance status. true: compliant; false: non-compliant.
 * @method void setComplianceStatus(boolean $ComplianceStatus) Set Compliance status. true: compliant; false: non-compliant.
 * @method array getKeysWithNonCompliantValues() Obtain List of tag keys with invalid values.
 * @method void setKeysWithNonCompliantValues(array $KeysWithNonCompliantValues) Set List of tag keys with invalid values.
 * @method array getNonCompliantKeys() Obtain List of invalid tag keys.
 * @method void setNonCompliantKeys(array $NonCompliantKeys) Set List of invalid tag keys.
 */
class TagComplianceDetails extends AbstractModel
{
    /**
     * @var boolean Compliance status. true: compliant; false: non-compliant.
     */
    public $ComplianceStatus;

    /**
     * @var array List of tag keys with invalid values.
     */
    public $KeysWithNonCompliantValues;

    /**
     * @var array List of invalid tag keys.
     */
    public $NonCompliantKeys;

    /**
     * @param boolean $ComplianceStatus Compliance status. true: compliant; false: non-compliant.
     * @param array $KeysWithNonCompliantValues List of tag keys with invalid values.
     * @param array $NonCompliantKeys List of invalid tag keys.
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
        if (array_key_exists("ComplianceStatus",$param) and $param["ComplianceStatus"] !== null) {
            $this->ComplianceStatus = $param["ComplianceStatus"];
        }

        if (array_key_exists("KeysWithNonCompliantValues",$param) and $param["KeysWithNonCompliantValues"] !== null) {
            $this->KeysWithNonCompliantValues = $param["KeysWithNonCompliantValues"];
        }

        if (array_key_exists("NonCompliantKeys",$param) and $param["NonCompliantKeys"] !== null) {
            $this->NonCompliantKeys = $param["NonCompliantKeys"];
        }
    }
}
