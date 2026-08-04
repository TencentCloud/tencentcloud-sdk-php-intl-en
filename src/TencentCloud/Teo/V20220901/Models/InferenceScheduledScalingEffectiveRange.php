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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Edge reasoning scheduled scaling validity period range configuration.
 *
 * @method string getEffectiveType() Obtain <p>Validity period type. Valid values: <li>LongTerm: Permanently valid;</li><li>Custom: Custom start and end date.</li></p>
 * @method void setEffectiveType(string $EffectiveType) Set <p>Validity period type. Valid values: <li>LongTerm: Permanently valid;</li><li>Custom: Custom start and end date.</li></p>
 * @method string getStartDate() Obtain <p>Start date of the valid period. Required when EffectiveType is Custom. Do not pass this field when EffectiveType is LongTerm.</p>
 * @method void setStartDate(string $StartDate) Set <p>Start date of the valid period. Required when EffectiveType is Custom. Do not pass this field when EffectiveType is LongTerm.</p>
 * @method string getEndDate() Obtain <p>Termination date of the valid period. Required when EffectiveType is Custom, and cannot be earlier than StartDate. Do not pass this field when EffectiveType is LongTerm.</p>
 * @method void setEndDate(string $EndDate) Set <p>Termination date of the valid period. Required when EffectiveType is Custom, and cannot be earlier than StartDate. Do not pass this field when EffectiveType is LongTerm.</p>
 */
class InferenceScheduledScalingEffectiveRange extends AbstractModel
{
    /**
     * @var string <p>Validity period type. Valid values: <li>LongTerm: Permanently valid;</li><li>Custom: Custom start and end date.</li></p>
     */
    public $EffectiveType;

    /**
     * @var string <p>Start date of the valid period. Required when EffectiveType is Custom. Do not pass this field when EffectiveType is LongTerm.</p>
     */
    public $StartDate;

    /**
     * @var string <p>Termination date of the valid period. Required when EffectiveType is Custom, and cannot be earlier than StartDate. Do not pass this field when EffectiveType is LongTerm.</p>
     */
    public $EndDate;

    /**
     * @param string $EffectiveType <p>Validity period type. Valid values: <li>LongTerm: Permanently valid;</li><li>Custom: Custom start and end date.</li></p>
     * @param string $StartDate <p>Start date of the valid period. Required when EffectiveType is Custom. Do not pass this field when EffectiveType is LongTerm.</p>
     * @param string $EndDate <p>Termination date of the valid period. Required when EffectiveType is Custom, and cannot be earlier than StartDate. Do not pass this field when EffectiveType is LongTerm.</p>
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
        if (array_key_exists("EffectiveType",$param) and $param["EffectiveType"] !== null) {
            $this->EffectiveType = $param["EffectiveType"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }
    }
}
