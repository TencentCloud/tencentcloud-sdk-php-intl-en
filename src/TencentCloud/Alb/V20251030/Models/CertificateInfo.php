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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Certificate information.
 *
 * @method string getAssociatedTime() Obtain Certificate binding time.
 * @method void setAssociatedTime(string $AssociatedTime) Set Certificate binding time.
 * @method string getCertificateId() Obtain Certificate ID.
 * @method void setCertificateId(string $CertificateId) Set Certificate ID.
 * @method string getCertificateType() Obtain Certificate type. Valid values: CA or SVR (server certificate).
 * @method void setCertificateType(string $CertificateType) Set Certificate type. Valid values: CA or SVR (server certificate).
 * @method boolean getIsDefault() Obtain Whether it is the default certificate of the listener. Value:
true: default certificate.
false: expand the certificate.
 * @method void setIsDefault(boolean $IsDefault) Set Whether it is the default certificate of the listener. Value:
true: default certificate.
false: expand the certificate.
 * @method string getStatus() Obtain The binding status of the certificate and listener. Values: Associated, Associating, Disassociating, Error.
 * @method void setStatus(string $Status) Set The binding status of the certificate and listener. Values: Associated, Associating, Disassociating, Error.
 */
class CertificateInfo extends AbstractModel
{
    /**
     * @var string Certificate binding time.
     */
    public $AssociatedTime;

    /**
     * @var string Certificate ID.
     */
    public $CertificateId;

    /**
     * @var string Certificate type. Valid values: CA or SVR (server certificate).
     */
    public $CertificateType;

    /**
     * @var boolean Whether it is the default certificate of the listener. Value:
true: default certificate.
false: expand the certificate.
     */
    public $IsDefault;

    /**
     * @var string The binding status of the certificate and listener. Values: Associated, Associating, Disassociating, Error.
     */
    public $Status;

    /**
     * @param string $AssociatedTime Certificate binding time.
     * @param string $CertificateId Certificate ID.
     * @param string $CertificateType Certificate type. Valid values: CA or SVR (server certificate).
     * @param boolean $IsDefault Whether it is the default certificate of the listener. Value:
true: default certificate.
false: expand the certificate.
     * @param string $Status The binding status of the certificate and listener. Values: Associated, Associating, Disassociating, Error.
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
        if (array_key_exists("AssociatedTime",$param) and $param["AssociatedTime"] !== null) {
            $this->AssociatedTime = $param["AssociatedTime"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
