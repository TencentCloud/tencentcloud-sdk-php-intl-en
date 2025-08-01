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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a VOD instance
 *
 * @method string getDomain() Obtain The domain.
 * @method void setDomain(string $Domain) Set The domain.
 * @method string getCertId() Obtain The certificate ID.
 * @method void setCertId(string $CertId) Set The certificate ID.
 */
class VodInstanceDetail extends AbstractModel
{
    /**
     * @var string The domain.
     */
    public $Domain;

    /**
     * @var string The certificate ID.
     */
    public $CertId;

    /**
     * @param string $Domain The domain.
     * @param string $CertId The certificate ID.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }
    }
}
