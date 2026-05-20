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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCF instance details
 *
 * @method string getCertificateId() Obtain Certificate ID
 * @method void setCertificateId(string $CertificateId) Set Certificate ID
 * @method string getProtocol() Obtain Protocol
 * @method void setProtocol(string $Protocol) Set Protocol
 * @method string getDomain() Obtain Domain
 * @method void setDomain(string $Domain) Set Domain
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 */
class SCFInstanceDetail extends AbstractModel
{
    /**
     * @var string Certificate ID
     */
    public $CertificateId;

    /**
     * @var string Protocol
     */
    public $Protocol;

    /**
     * @var string Domain
     */
    public $Domain;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @param string $CertificateId Certificate ID
     * @param string $Protocol Protocol
     * @param string $Domain Domain
     * @param string $Region Region.
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
