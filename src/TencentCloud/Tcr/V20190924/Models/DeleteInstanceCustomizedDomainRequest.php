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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteInstanceCustomizedDomain request structure.
 *
 * @method string getRegistryId() Obtain Primary instance ID
 * @method void setRegistryId(string $RegistryId) Set Primary instance ID
 * @method string getDomainName() Obtain Custom domain name
 * @method void setDomainName(string $DomainName) Set Custom domain name
 * @method string getCertificateId() Obtain Certificate ID
 * @method void setCertificateId(string $CertificateId) Set Certificate ID
 */
class DeleteInstanceCustomizedDomainRequest extends AbstractModel
{
    /**
     * @var string Primary instance ID
     */
    public $RegistryId;

    /**
     * @var string Custom domain name
     */
    public $DomainName;

    /**
     * @var string Certificate ID
     */
    public $CertificateId;

    /**
     * @param string $RegistryId Primary instance ID
     * @param string $DomainName Custom domain name
     * @param string $CertificateId Certificate ID
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }
    }
}
