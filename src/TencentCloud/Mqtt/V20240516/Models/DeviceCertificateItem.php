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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Device certificate information
 *
 * @method string getClientId() Obtain Client ID.
 * @method void setClientId(string $ClientId) Set Client ID.
 * @method string getDeviceCertificate() Obtain device certificate
 * @method void setDeviceCertificate(string $DeviceCertificate) Set device certificate
 * @method string getDeviceCertificateSn() Obtain Device certificate SN serial number, used for unique identification of a device certificate
 * @method void setDeviceCertificateSn(string $DeviceCertificateSn) Set Device certificate SN serial number, used for unique identification of a device certificate
 * @method string getDeviceCertificateCn() Obtain Device certificate Cn
 * @method void setDeviceCertificateCn(string $DeviceCertificateCn) Set Device certificate Cn
 * @method string getCaSn() Obtain Serial number of the CA cert that issued the cert
 * @method void setCaSn(string $CaSn) Set Serial number of the CA cert that issued the cert
 * @method string getFormat() Obtain Certificate format, currently only support PEM
 * @method void setFormat(string $Format) Set Certificate format, currently only support PEM
 * @method string getStatus() Obtain Device certificate status
ACTIVE: Activate
INACTIVE: Inactive
REVOKED: Revoked
PENDING_ACTIVATION: To be activated.
 * @method void setStatus(string $Status) Set Device certificate status
ACTIVE: Activate
INACTIVE: Inactive
REVOKED: Revoked
PENDING_ACTIVATION: To be activated.
 * @method string getOrganizationalUnit() Obtain Organization unit
 * @method void setOrganizationalUnit(string $OrganizationalUnit) Set Organization unit
 * @method integer getLastActivationTime() Obtain Last activation time, millisecond-level timestamp.
 * @method void setLastActivationTime(integer $LastActivationTime) Set Last activation time, millisecond-level timestamp.
 * @method integer getLastInactivationTime() Obtain Last cancellation activation time, millisecond-level timestamp.
 * @method void setLastInactivationTime(integer $LastInactivationTime) Set Last cancellation activation time, millisecond-level timestamp.
 * @method integer getCreatedTime() Obtain createTime, millisecond-level timestamp.
 * @method void setCreatedTime(integer $CreatedTime) Set createTime, millisecond-level timestamp.
 * @method integer getUpdateTime() Obtain Update time, millisecond-level timestamp.
 * @method void setUpdateTime(integer $UpdateTime) Set Update time, millisecond-level timestamp.
 * @method string getCertificateSource() Obtain Certificate source:
API, Manual Registration   
Automatic JITP registration
 * @method void setCertificateSource(string $CertificateSource) Set Certificate source:
API, Manual Registration   
Automatic JITP registration
 * @method integer getNotAfterTime() Obtain Certificate expiration date, millisecond-level timestamp.
 * @method void setNotAfterTime(integer $NotAfterTime) Set Certificate expiration date, millisecond-level timestamp.
 * @method integer getNotBeforeTime() Obtain Start date when the certificate takes effect, millisecond-level timestamp.
 * @method void setNotBeforeTime(integer $NotBeforeTime) Set Start date when the certificate takes effect, millisecond-level timestamp.
 */
class DeviceCertificateItem extends AbstractModel
{
    /**
     * @var string Client ID.
     */
    public $ClientId;

    /**
     * @var string device certificate
     */
    public $DeviceCertificate;

    /**
     * @var string Device certificate SN serial number, used for unique identification of a device certificate
     */
    public $DeviceCertificateSn;

    /**
     * @var string Device certificate Cn
     */
    public $DeviceCertificateCn;

    /**
     * @var string Serial number of the CA cert that issued the cert
     */
    public $CaSn;

    /**
     * @var string Certificate format, currently only support PEM
     */
    public $Format;

    /**
     * @var string Device certificate status
ACTIVE: Activate
INACTIVE: Inactive
REVOKED: Revoked
PENDING_ACTIVATION: To be activated.
     */
    public $Status;

    /**
     * @var string Organization unit
     */
    public $OrganizationalUnit;

    /**
     * @var integer Last activation time, millisecond-level timestamp.
     */
    public $LastActivationTime;

    /**
     * @var integer Last cancellation activation time, millisecond-level timestamp.
     */
    public $LastInactivationTime;

    /**
     * @var integer createTime, millisecond-level timestamp.
     */
    public $CreatedTime;

    /**
     * @var integer Update time, millisecond-level timestamp.
     */
    public $UpdateTime;

    /**
     * @var string Certificate source:
API, Manual Registration   
Automatic JITP registration
     */
    public $CertificateSource;

    /**
     * @var integer Certificate expiration date, millisecond-level timestamp.
     */
    public $NotAfterTime;

    /**
     * @var integer Start date when the certificate takes effect, millisecond-level timestamp.
     */
    public $NotBeforeTime;

    /**
     * @param string $ClientId Client ID.
     * @param string $DeviceCertificate device certificate
     * @param string $DeviceCertificateSn Device certificate SN serial number, used for unique identification of a device certificate
     * @param string $DeviceCertificateCn Device certificate Cn
     * @param string $CaSn Serial number of the CA cert that issued the cert
     * @param string $Format Certificate format, currently only support PEM
     * @param string $Status Device certificate status
ACTIVE: Activate
INACTIVE: Inactive
REVOKED: Revoked
PENDING_ACTIVATION: To be activated.
     * @param string $OrganizationalUnit Organization unit
     * @param integer $LastActivationTime Last activation time, millisecond-level timestamp.
     * @param integer $LastInactivationTime Last cancellation activation time, millisecond-level timestamp.
     * @param integer $CreatedTime createTime, millisecond-level timestamp.
     * @param integer $UpdateTime Update time, millisecond-level timestamp.
     * @param string $CertificateSource Certificate source:
API, Manual Registration   
Automatic JITP registration
     * @param integer $NotAfterTime Certificate expiration date, millisecond-level timestamp.
     * @param integer $NotBeforeTime Start date when the certificate takes effect, millisecond-level timestamp.
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
        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("DeviceCertificate",$param) and $param["DeviceCertificate"] !== null) {
            $this->DeviceCertificate = $param["DeviceCertificate"];
        }

        if (array_key_exists("DeviceCertificateSn",$param) and $param["DeviceCertificateSn"] !== null) {
            $this->DeviceCertificateSn = $param["DeviceCertificateSn"];
        }

        if (array_key_exists("DeviceCertificateCn",$param) and $param["DeviceCertificateCn"] !== null) {
            $this->DeviceCertificateCn = $param["DeviceCertificateCn"];
        }

        if (array_key_exists("CaSn",$param) and $param["CaSn"] !== null) {
            $this->CaSn = $param["CaSn"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OrganizationalUnit",$param) and $param["OrganizationalUnit"] !== null) {
            $this->OrganizationalUnit = $param["OrganizationalUnit"];
        }

        if (array_key_exists("LastActivationTime",$param) and $param["LastActivationTime"] !== null) {
            $this->LastActivationTime = $param["LastActivationTime"];
        }

        if (array_key_exists("LastInactivationTime",$param) and $param["LastInactivationTime"] !== null) {
            $this->LastInactivationTime = $param["LastInactivationTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CertificateSource",$param) and $param["CertificateSource"] !== null) {
            $this->CertificateSource = $param["CertificateSource"];
        }

        if (array_key_exists("NotAfterTime",$param) and $param["NotAfterTime"] !== null) {
            $this->NotAfterTime = $param["NotAfterTime"];
        }

        if (array_key_exists("NotBeforeTime",$param) and $param["NotBeforeTime"] !== null) {
            $this->NotBeforeTime = $param["NotBeforeTime"];
        }
    }
}
