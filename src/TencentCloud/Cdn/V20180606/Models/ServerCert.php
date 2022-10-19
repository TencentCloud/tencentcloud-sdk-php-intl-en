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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTPS acceleration server certificate configuration:
+ Supports deployment with certificates that are being hosted by the SSL Certificate Services
+ Supports uploading certificates of PEM format for deployment
 *
 * @method string getCertId() Obtain Server certificate ID, which is auto-generated when the certificate is being managed by the SSL Certificate Service
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCertId(string $CertId) Set Server certificate ID, which is auto-generated when the certificate is being managed by the SSL Certificate Service
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCertName() Obtain Server certificate name
This is auto-generated when the certificate is being hosted by the SSL Certificate Service
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCertName(string $CertName) Set Server certificate name
This is auto-generated when the certificate is being hosted by the SSL Certificate Service
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getCertificate() Obtain Server certificate information
This is required when uploading an external certificate, which should contain the complete certificate chain.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCertificate(string $Certificate) Set Server certificate information
This is required when uploading an external certificate, which should contain the complete certificate chain.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getPrivateKey() Obtain Server key information
This is required when uploading an external certificate.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPrivateKey(string $PrivateKey) Set Server key information
This is required when uploading an external certificate.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getExpireTime() Obtain Time when the certificate expires
Can be left blank when used as an input parameter
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Time when the certificate expires
Can be left blank when used as an input parameter
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getDeployTime() Obtain Certificate issuance time
Can be left blank when used as an input parameter
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDeployTime(string $DeployTime) Set Certificate issuance time
Can be left blank when used as an input parameter
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getMessage() Obtain Certificate remarks
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMessage(string $Message) Set Certificate remarks
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getFrom() Obtain Certificate source
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFrom(string $From) Set Certificate source
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ServerCert extends AbstractModel
{
    /**
     * @var string Server certificate ID, which is auto-generated when the certificate is being managed by the SSL Certificate Service
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CertId;

    /**
     * @var string Server certificate name
This is auto-generated when the certificate is being hosted by the SSL Certificate Service
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CertName;

    /**
     * @var string Server certificate information
This is required when uploading an external certificate, which should contain the complete certificate chain.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Certificate;

    /**
     * @var string Server key information
This is required when uploading an external certificate.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PrivateKey;

    /**
     * @var string Time when the certificate expires
Can be left blank when used as an input parameter
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Certificate issuance time
Can be left blank when used as an input parameter
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DeployTime;

    /**
     * @var string Certificate remarks
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Message;

    /**
     * @var string Certificate source
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $From;

    /**
     * @param string $CertId Server certificate ID, which is auto-generated when the certificate is being managed by the SSL Certificate Service
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CertName Server certificate name
This is auto-generated when the certificate is being hosted by the SSL Certificate Service
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Certificate Server certificate information
This is required when uploading an external certificate, which should contain the complete certificate chain.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $PrivateKey Server key information
This is required when uploading an external certificate.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ExpireTime Time when the certificate expires
Can be left blank when used as an input parameter
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $DeployTime Certificate issuance time
Can be left blank when used as an input parameter
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Message Certificate remarks
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $From Certificate source
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

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = $param["Certificate"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("DeployTime",$param) and $param["DeployTime"] !== null) {
            $this->DeployTime = $param["DeployTime"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }
    }
}
