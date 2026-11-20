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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Signature verification conclusion
 *
 * @method integer getVerifyStatus() Obtain <p>Signature verification status. 1 indicates that the signature verification is passed.</p>
 * @method void setVerifyStatus(integer $VerifyStatus) Set <p>Signature verification status. 1 indicates that the signature verification is passed.</p>
 * @method string getSignerName() Obtain <p>Signer name</p>
 * @method void setSignerName(string $SignerName) Set <p>Signer name</p>
 * @method string getSignAlgorithm() Obtain <p>Signature algorithm, such as SHA256withRSA</p>
 * @method void setSignAlgorithm(string $SignAlgorithm) Set <p>Signature algorithm, such as SHA256withRSA</p>
 * @method integer getSignTime() Obtain <p>Signature time (Unix timestamp in milliseconds)</p>
 * @method void setSignTime(integer $SignTime) Set <p>Signature time (Unix timestamp in milliseconds)</p>
 * @method string getCertSn() Obtain <p>Signature verification information</p>
 * @method void setCertSn(string $CertSn) Set <p>Signature verification information</p>
 */
class SignResult extends AbstractModel
{
    /**
     * @var integer <p>Signature verification status. 1 indicates that the signature verification is passed.</p>
     */
    public $VerifyStatus;

    /**
     * @var string <p>Signer name</p>
     */
    public $SignerName;

    /**
     * @var string <p>Signature algorithm, such as SHA256withRSA</p>
     */
    public $SignAlgorithm;

    /**
     * @var integer <p>Signature time (Unix timestamp in milliseconds)</p>
     */
    public $SignTime;

    /**
     * @var string <p>Signature verification information</p>
     */
    public $CertSn;

    /**
     * @param integer $VerifyStatus <p>Signature verification status. 1 indicates that the signature verification is passed.</p>
     * @param string $SignerName <p>Signer name</p>
     * @param string $SignAlgorithm <p>Signature algorithm, such as SHA256withRSA</p>
     * @param integer $SignTime <p>Signature time (Unix timestamp in milliseconds)</p>
     * @param string $CertSn <p>Signature verification information</p>
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
        if (array_key_exists("VerifyStatus",$param) and $param["VerifyStatus"] !== null) {
            $this->VerifyStatus = $param["VerifyStatus"];
        }

        if (array_key_exists("SignerName",$param) and $param["SignerName"] !== null) {
            $this->SignerName = $param["SignerName"];
        }

        if (array_key_exists("SignAlgorithm",$param) and $param["SignAlgorithm"] !== null) {
            $this->SignAlgorithm = $param["SignAlgorithm"];
        }

        if (array_key_exists("SignTime",$param) and $param["SignTime"] !== null) {
            $this->SignTime = $param["SignTime"];
        }

        if (array_key_exists("CertSn",$param) and $param["CertSn"] !== null) {
            $this->CertSn = $param["CertSn"];
        }
    }
}
