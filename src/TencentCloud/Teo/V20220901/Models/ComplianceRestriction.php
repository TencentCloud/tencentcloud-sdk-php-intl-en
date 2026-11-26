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
 * Information on regional access restrictions for resources due to government laws and regulations, user agreements, and other requirements.
 *
 * @method string getReason() Obtain <p>The causes for access restriction.</p><p>Enumeration values:</p><ul><li>ICP_RECORD_REQUIRED: unlicensed (no ICP filing);</li><li>GOVERNMENT_ORDER: government directive.</li></ul>
 * @method void setReason(string $Reason) Set <p>The causes for access restriction.</p><p>Enumeration values:</p><ul><li>ICP_RECORD_REQUIRED: unlicensed (no ICP filing);</li><li>GOVERNMENT_ORDER: government directive.</li></ul>
 * @method string getRegion() Obtain <p>Restrict access to specific country/region codes using the "ISO 3166 country/region code standard".</p><p>Parameter format: view link: https://www.iso.org/iso-3166-country-codes.html.</p>
 * @method void setRegion(string $Region) Set <p>Restrict access to specific country/region codes using the "ISO 3166 country/region code standard".</p><p>Parameter format: view link: https://www.iso.org/iso-3166-country-codes.html.</p>
 */
class ComplianceRestriction extends AbstractModel
{
    /**
     * @var string <p>The causes for access restriction.</p><p>Enumeration values:</p><ul><li>ICP_RECORD_REQUIRED: unlicensed (no ICP filing);</li><li>GOVERNMENT_ORDER: government directive.</li></ul>
     */
    public $Reason;

    /**
     * @var string <p>Restrict access to specific country/region codes using the "ISO 3166 country/region code standard".</p><p>Parameter format: view link: https://www.iso.org/iso-3166-country-codes.html.</p>
     */
    public $Region;

    /**
     * @param string $Reason <p>The causes for access restriction.</p><p>Enumeration values:</p><ul><li>ICP_RECORD_REQUIRED: unlicensed (no ICP filing);</li><li>GOVERNMENT_ORDER: government directive.</li></ul>
     * @param string $Region <p>Restrict access to specific country/region codes using the "ISO 3166 country/region code standard".</p><p>Parameter format: view link: https://www.iso.org/iso-3166-country-codes.html.</p>
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
        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
