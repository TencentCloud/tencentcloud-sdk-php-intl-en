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
 * CreateInferenceDomain request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getServiceId() Obtain <p>Inference service ID.</p>
 * @method void setServiceId(string $ServiceId) Set <p>Inference service ID.</p>
 * @method string getDomain() Obtain <p>Reasoning service domain name.</p>
 * @method void setDomain(string $Domain) Set <p>Reasoning service domain name.</p>
 * @method string getAuthSwitch() Obtain <p>Inference task request authentication switch.</p><p>Enumeration values:</p><ul><li>Off: Disable authentication;</li><li>On: Enable authentication.</li></ul><p>Default value: On.</p>
 * @method void setAuthSwitch(string $AuthSwitch) Set <p>Inference task request authentication switch.</p><p>Enumeration values:</p><ul><li>Off: Disable authentication;</li><li>On: Enable authentication.</li></ul><p>Default value: On.</p>
 */
class CreateInferenceDomainRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Inference service ID.</p>
     */
    public $ServiceId;

    /**
     * @var string <p>Reasoning service domain name.</p>
     */
    public $Domain;

    /**
     * @var string <p>Inference task request authentication switch.</p><p>Enumeration values:</p><ul><li>Off: Disable authentication;</li><li>On: Enable authentication.</li></ul><p>Default value: On.</p>
     */
    public $AuthSwitch;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $ServiceId <p>Inference service ID.</p>
     * @param string $Domain <p>Reasoning service domain name.</p>
     * @param string $AuthSwitch <p>Inference task request authentication switch.</p><p>Enumeration values:</p><ul><li>Off: Disable authentication;</li><li>On: Enable authentication.</li></ul><p>Default value: On.</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AuthSwitch",$param) and $param["AuthSwitch"] !== null) {
            $this->AuthSwitch = $param["AuthSwitch"];
        }
    }
}
