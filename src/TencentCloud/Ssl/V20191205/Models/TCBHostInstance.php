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
 * Details of TCB service instances subject to static hosting
 *
 * @method string getDomain() Obtain Domain
 * @method void setDomain(string $Domain) Set Domain
 * @method string getStatus() Obtain Status.
 * @method void setStatus(string $Status) Set Status.
 * @method string getDNSStatus() Obtain Parsing status
 * @method void setDNSStatus(string $DNSStatus) Set Parsing status
 * @method string getOldCertificateId() Obtain Bound Certificate ID
 * @method void setOldCertificateId(string $OldCertificateId) Set Bound Certificate ID
 */
class TCBHostInstance extends AbstractModel
{
    /**
     * @var string Domain
     */
    public $Domain;

    /**
     * @var string Status.
     */
    public $Status;

    /**
     * @var string Parsing status
     */
    public $DNSStatus;

    /**
     * @var string Bound Certificate ID
     */
    public $OldCertificateId;

    /**
     * @param string $Domain Domain
     * @param string $Status Status.
     * @param string $DNSStatus Parsing status
     * @param string $OldCertificateId Bound Certificate ID
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DNSStatus",$param) and $param["DNSStatus"] !== null) {
            $this->DNSStatus = $param["DNSStatus"];
        }

        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }
    }
}
