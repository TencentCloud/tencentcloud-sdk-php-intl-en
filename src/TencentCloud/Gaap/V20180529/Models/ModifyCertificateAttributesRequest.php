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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCertificateAttributes request structure.
 *
 * @method string getCertificateId() Obtain Certificate ID.
 * @method void setCertificateId(string $CertificateId) Set Certificate ID.
 * @method string getCertificateAlias() Obtain Certificate name. Up to 50 characters.
 * @method void setCertificateAlias(string $CertificateAlias) Set Certificate name. Up to 50 characters.
 */
class ModifyCertificateAttributesRequest extends AbstractModel
{
    /**
     * @var string Certificate ID.
     */
    public $CertificateId;

    /**
     * @var string Certificate name. Up to 50 characters.
     */
    public $CertificateAlias;

    /**
     * @param string $CertificateId Certificate ID.
     * @param string $CertificateAlias Certificate name. Up to 50 characters.
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

        if (array_key_exists("CertificateAlias",$param) and $param["CertificateAlias"] !== null) {
            $this->CertificateAlias = $param["CertificateAlias"];
        }
    }
}
