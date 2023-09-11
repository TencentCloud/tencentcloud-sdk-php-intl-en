<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getDomain() Obtain The domain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set The domain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain The status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set The status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDNSStatus() Obtain The resolution status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDNSStatus(string $DNSStatus) Set The resolution status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOldCertificateId() Obtain The ID of the associated certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOldCertificateId(string $OldCertificateId) Set The ID of the associated certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TCBHostInstance extends AbstractModel
{
    /**
     * @var string The domain.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string The status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string The resolution status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DNSStatus;

    /**
     * @var string The ID of the associated certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OldCertificateId;

    /**
     * @param string $Domain The domain.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status The status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DNSStatus The resolution status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OldCertificateId The ID of the associated certificate.
Note: This field may return null, indicating that no valid values can be obtained.
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
