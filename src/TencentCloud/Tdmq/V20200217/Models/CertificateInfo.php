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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pulsar cluster TLS certificate information.
 *
 * @method string getCertificateId() Obtain Specifies the id in SSL certificate management.
 * @method void setCertificateId(string $CertificateId) Set Specifies the id in SSL certificate management.
 * @method string getExpireTime() Obtain Certificate expiration time.
 * @method void setExpireTime(string $ExpireTime) Set Certificate expiration time.
 * @method string getDomainName() Obtain Specifies the domain name bound to the certificate.
 * @method void setDomainName(string $DomainName) Set Specifies the domain name bound to the certificate.
 * @method string getStatus() Obtain Certificate status: 0 indicates issued.
Expiring soon.
Not activated.
3. indicates expired.
Indicates the unavailability.
 * @method void setStatus(string $Status) Set Certificate status: 0 indicates issued.
Expiring soon.
Not activated.
3. indicates expired.
Indicates the unavailability.
 * @method string getType() Obtain Certificate type: 0: root certificate, 1: server certificate.
 * @method void setType(string $Type) Set Certificate type: 0: root certificate, 1: server certificate.
 * @method string getOrigin() Obtain TencentCloud: SSL certificate. Default: TDMQ official Default certificate.
 * @method void setOrigin(string $Origin) Set TencentCloud: SSL certificate. Default: TDMQ official Default certificate.
 * @method string getModifyTime() Obtain Certificate addition/update time.
 * @method void setModifyTime(string $ModifyTime) Set Certificate addition/update time.
 */
class CertificateInfo extends AbstractModel
{
    /**
     * @var string Specifies the id in SSL certificate management.
     */
    public $CertificateId;

    /**
     * @var string Certificate expiration time.
     */
    public $ExpireTime;

    /**
     * @var string Specifies the domain name bound to the certificate.
     */
    public $DomainName;

    /**
     * @var string Certificate status: 0 indicates issued.
Expiring soon.
Not activated.
3. indicates expired.
Indicates the unavailability.
     */
    public $Status;

    /**
     * @var string Certificate type: 0: root certificate, 1: server certificate.
     */
    public $Type;

    /**
     * @var string TencentCloud: SSL certificate. Default: TDMQ official Default certificate.
     */
    public $Origin;

    /**
     * @var string Certificate addition/update time.
     */
    public $ModifyTime;

    /**
     * @param string $CertificateId Specifies the id in SSL certificate management.
     * @param string $ExpireTime Certificate expiration time.
     * @param string $DomainName Specifies the domain name bound to the certificate.
     * @param string $Status Certificate status: 0 indicates issued.
Expiring soon.
Not activated.
3. indicates expired.
Indicates the unavailability.
     * @param string $Type Certificate type: 0: root certificate, 1: server certificate.
     * @param string $Origin TencentCloud: SSL certificate. Default: TDMQ official Default certificate.
     * @param string $ModifyTime Certificate addition/update time.
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

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
