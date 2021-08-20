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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrivateCA request structure.
 *
 * @method string getCertName() Obtain CA certificate name
 * @method void setCertName(string $CertName) Set CA certificate name
 * @method string getCertText() Obtain CA certificate content
 * @method void setCertText(string $CertText) Set CA certificate content
 * @method string getVerifyCertText() Obtain Content verifying the CA certificate
 * @method void setVerifyCertText(string $VerifyCertText) Set Content verifying the CA certificate
 */
class CreatePrivateCARequest extends AbstractModel
{
    /**
     * @var string CA certificate name
     */
    public $CertName;

    /**
     * @var string CA certificate content
     */
    public $CertText;

    /**
     * @var string Content verifying the CA certificate
     */
    public $VerifyCertText;

    /**
     * @param string $CertName CA certificate name
     * @param string $CertText CA certificate content
     * @param string $VerifyCertText Content verifying the CA certificate
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
        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("CertText",$param) and $param["CertText"] !== null) {
            $this->CertText = $param["CertText"];
        }

        if (array_key_exists("VerifyCertText",$param) and $param["VerifyCertText"] !== null) {
            $this->VerifyCertText = $param["VerifyCertText"];
        }
    }
}
