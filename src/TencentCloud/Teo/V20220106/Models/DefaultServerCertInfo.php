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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTPS server certificate configuration
 *
 * @method string getCertId() Obtain Server certificate ID, which is the ID of the default certificate. If you choose to upload an external certificate for SSL certificate management, a certificate ID will be generated.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCertId(string $CertId) Set Server certificate ID, which is the ID of the default certificate. If you choose to upload an external certificate for SSL certificate management, a certificate ID will be generated.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getAlias() Obtain Certificate alias
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAlias(string $Alias) Set Certificate alias
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getType() Obtain Certificate type. Valid values:
`default`: Default certificate
`upload`: External certificate
`managed`: Tencent Cloud managed certificate
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set Certificate type. Valid values:
`default`: Default certificate
`upload`: External certificate
`managed`: Tencent Cloud managed certificate
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getExpireTime() Obtain Time when the certificate expires
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Time when the certificate expires
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getEffectiveTime() Obtain Time when the certificate takes effect
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEffectiveTime(string $EffectiveTime) Set Time when the certificate takes effect
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getCommonName() Obtain Certificate common name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCommonName(string $CommonName) Set Certificate common name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getSubjectAltName() Obtain Domain names added to the SAN certificate
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSubjectAltName(array $SubjectAltName) Set Domain names added to the SAN certificate
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getStatus() Obtain Certificate status. Valid values:
`applying`: Application in progress
`failed`: Application failed
`processing`: Deploying certificate
`deployed`: Certificate deployed
`disabled`: Certificate disabled
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set Certificate status. Valid values:
`applying`: Application in progress
`failed`: Application failed
`processing`: Deploying certificate
`deployed`: Certificate deployed
`disabled`: Certificate disabled
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getMessage() Obtain Returns a message to display failure causes when `Status=failed`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMessage(string $Message) Set Returns a message to display failure causes when `Status=failed`
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class DefaultServerCertInfo extends AbstractModel
{
    /**
     * @var string Server certificate ID, which is the ID of the default certificate. If you choose to upload an external certificate for SSL certificate management, a certificate ID will be generated.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CertId;

    /**
     * @var string Certificate alias
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Alias;

    /**
     * @var string Certificate type. Valid values:
`default`: Default certificate
`upload`: External certificate
`managed`: Tencent Cloud managed certificate
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string Time when the certificate expires
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Time when the certificate takes effect
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $EffectiveTime;

    /**
     * @var string Certificate common name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CommonName;

    /**
     * @var array Domain names added to the SAN certificate
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SubjectAltName;

    /**
     * @var string Certificate status. Valid values:
`applying`: Application in progress
`failed`: Application failed
`processing`: Deploying certificate
`deployed`: Certificate deployed
`disabled`: Certificate disabled
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Returns a message to display failure causes when `Status=failed`
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Message;

    /**
     * @param string $CertId Server certificate ID, which is the ID of the default certificate. If you choose to upload an external certificate for SSL certificate management, a certificate ID will be generated.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Alias Certificate alias
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Type Certificate type. Valid values:
`default`: Default certificate
`upload`: External certificate
`managed`: Tencent Cloud managed certificate
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ExpireTime Time when the certificate expires
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $EffectiveTime Time when the certificate takes effect
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $CommonName Certificate common name
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $SubjectAltName Domain names added to the SAN certificate
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Status Certificate status. Valid values:
`applying`: Application in progress
`failed`: Application failed
`processing`: Deploying certificate
`deployed`: Certificate deployed
`disabled`: Certificate disabled
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Message Returns a message to display failure causes when `Status=failed`
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("CommonName",$param) and $param["CommonName"] !== null) {
            $this->CommonName = $param["CommonName"];
        }

        if (array_key_exists("SubjectAltName",$param) and $param["SubjectAltName"] !== null) {
            $this->SubjectAltName = $param["SubjectAltName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
