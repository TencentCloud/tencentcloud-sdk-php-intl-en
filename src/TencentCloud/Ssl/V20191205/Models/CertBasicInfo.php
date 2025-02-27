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
 * Basic information of the certificate
 *
 * @method string getIssuer() Obtain Issuer.
 * @method void setIssuer(string $Issuer) Set Issuer.
 * @method string getSubject() Obtain Issued to.
 * @method void setSubject(string $Subject) Set Issued to.
 * @method string getFingerprint() Obtain Certificate fingerprint.
 * @method void setFingerprint(string $Fingerprint) Set Certificate fingerprint.
 * @method string getValidFrom() Obtain Certificate valid period start time.
 * @method void setValidFrom(string $ValidFrom) Set Certificate valid period start time.
 * @method string getValidTo() Obtain Certificate valid period end time.
 * @method void setValidTo(string $ValidTo) Set Certificate valid period end time.
 */
class CertBasicInfo extends AbstractModel
{
    /**
     * @var string Issuer.
     */
    public $Issuer;

    /**
     * @var string Issued to.
     */
    public $Subject;

    /**
     * @var string Certificate fingerprint.
     */
    public $Fingerprint;

    /**
     * @var string Certificate valid period start time.
     */
    public $ValidFrom;

    /**
     * @var string Certificate valid period end time.
     */
    public $ValidTo;

    /**
     * @param string $Issuer Issuer.
     * @param string $Subject Issued to.
     * @param string $Fingerprint Certificate fingerprint.
     * @param string $ValidFrom Certificate valid period start time.
     * @param string $ValidTo Certificate valid period end time.
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
        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("Fingerprint",$param) and $param["Fingerprint"] !== null) {
            $this->Fingerprint = $param["Fingerprint"];
        }

        if (array_key_exists("ValidFrom",$param) and $param["ValidFrom"] !== null) {
            $this->ValidFrom = $param["ValidFrom"];
        }

        if (array_key_exists("ValidTo",$param) and $param["ValidTo"] !== null) {
            $this->ValidTo = $param["ValidTo"];
        }
    }
}
