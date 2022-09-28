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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckCertificate request structure.
 *
 * @method string getCertificate() Obtain Content of the certificate.
 * @method void setCertificate(string $Certificate) Set Content of the certificate.
 * @method string getPrivateKey() Obtain Content of the private key.
 * @method void setPrivateKey(string $PrivateKey) Set Content of the private key.
 */
class CheckCertificateRequest extends AbstractModel
{
    /**
     * @var string Content of the certificate.
     */
    public $Certificate;

    /**
     * @var string Content of the private key.
     */
    public $PrivateKey;

    /**
     * @param string $Certificate Content of the certificate.
     * @param string $PrivateKey Content of the private key.
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
        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = $param["Certificate"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }
    }
}
