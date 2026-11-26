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
 * OperateInferenceDomain request structure.
 *
 * @method string getZoneId() Obtain <p>Zone ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Zone ID.</p>
 * @method string getServiceId() Obtain <p>Inference service ID.</p>
 * @method void setServiceId(string $ServiceId) Set <p>Inference service ID.</p>
 * @method string getDomain() Obtain <p>Reasoning service domain name.</p>
 * @method void setDomain(string $Domain) Set <p>Reasoning service domain name.</p>
 * @method string getOperation() Obtain <p>Operation type.</p><p>Enumeration values:</p><ul><li>Resume: Enable domain;</li><li>Stop: Deactivate domain;</li><li>Delete: Delete domain name.</li></ul>
 * @method void setOperation(string $Operation) Set <p>Operation type.</p><p>Enumeration values:</p><ul><li>Resume: Enable domain;</li><li>Stop: Deactivate domain;</li><li>Delete: Delete domain name.</li></ul>
 */
class OperateInferenceDomainRequest extends AbstractModel
{
    /**
     * @var string <p>Zone ID.</p>
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
     * @var string <p>Operation type.</p><p>Enumeration values:</p><ul><li>Resume: Enable domain;</li><li>Stop: Deactivate domain;</li><li>Delete: Delete domain name.</li></ul>
     */
    public $Operation;

    /**
     * @param string $ZoneId <p>Zone ID.</p>
     * @param string $ServiceId <p>Inference service ID.</p>
     * @param string $Domain <p>Reasoning service domain name.</p>
     * @param string $Operation <p>Operation type.</p><p>Enumeration values:</p><ul><li>Resume: Enable domain;</li><li>Stop: Deactivate domain;</li><li>Delete: Delete domain name.</li></ul>
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}
