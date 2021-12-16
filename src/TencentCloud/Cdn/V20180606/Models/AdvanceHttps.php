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
 * 
 *
 * @method string getCustomTlsStatus() Obtain 
 * @method void setCustomTlsStatus(string $CustomTlsStatus) Set 
 * @method array getTlsVersion() Obtain 
 * @method void setTlsVersion(array $TlsVersion) Set 
 * @method string getCipher() Obtain 
 * @method void setCipher(string $Cipher) Set 
 * @method string getVerifyOriginType() Obtain 
 * @method void setVerifyOriginType(string $VerifyOriginType) Set 
 * @method ServerCert getCertInfo() Obtain 
 * @method void setCertInfo(ServerCert $CertInfo) Set 
 * @method ClientCert getOriginCertInfo() Obtain 
 * @method void setOriginCertInfo(ClientCert $OriginCertInfo) Set 
 */
class AdvanceHttps extends AbstractModel
{
    /**
     * @var string 
     */
    public $CustomTlsStatus;

    /**
     * @var array 
     */
    public $TlsVersion;

    /**
     * @var string 
     */
    public $Cipher;

    /**
     * @var string 
     */
    public $VerifyOriginType;

    /**
     * @var ServerCert 
     */
    public $CertInfo;

    /**
     * @var ClientCert 
     */
    public $OriginCertInfo;

    /**
     * @param string $CustomTlsStatus 
     * @param array $TlsVersion 
     * @param string $Cipher 
     * @param string $VerifyOriginType 
     * @param ServerCert $CertInfo 
     * @param ClientCert $OriginCertInfo 
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
        if (array_key_exists("CustomTlsStatus",$param) and $param["CustomTlsStatus"] !== null) {
            $this->CustomTlsStatus = $param["CustomTlsStatus"];
        }

        if (array_key_exists("TlsVersion",$param) and $param["TlsVersion"] !== null) {
            $this->TlsVersion = $param["TlsVersion"];
        }

        if (array_key_exists("Cipher",$param) and $param["Cipher"] !== null) {
            $this->Cipher = $param["Cipher"];
        }

        if (array_key_exists("VerifyOriginType",$param) and $param["VerifyOriginType"] !== null) {
            $this->VerifyOriginType = $param["VerifyOriginType"];
        }

        if (array_key_exists("CertInfo",$param) and $param["CertInfo"] !== null) {
            $this->CertInfo = new ServerCert();
            $this->CertInfo->deserialize($param["CertInfo"]);
        }

        if (array_key_exists("OriginCertInfo",$param) and $param["OriginCertInfo"] !== null) {
            $this->OriginCertInfo = new ClientCert();
            $this->OriginCertInfo->deserialize($param["OriginCertInfo"]);
        }
    }
}
