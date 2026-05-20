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
 * Cloud-native gateway certificate information
 *
 * @method string getId() Obtain Gateway certificate ID
 * @method void setId(string $Id) Set Gateway certificate ID
 * @method string getName() Obtain gateway certificate name
 * @method void setName(string $Name) Set gateway certificate name
 * @method array getBindDomains() Obtain Bind Domain Name
 * @method void setBindDomains(array $BindDomains) Set Bind Domain Name
 * @method string getCertSource() Obtain Certificate source
 * @method void setCertSource(string $CertSource) Set Certificate source
 * @method string getCertId() Obtain Currently bound SSL certificate ID
 * @method void setCertId(string $CertId) Set Currently bound SSL certificate ID
 */
class GatewayCertificate extends AbstractModel
{
    /**
     * @var string Gateway certificate ID
     */
    public $Id;

    /**
     * @var string gateway certificate name
     */
    public $Name;

    /**
     * @var array Bind Domain Name
     */
    public $BindDomains;

    /**
     * @var string Certificate source
     */
    public $CertSource;

    /**
     * @var string Currently bound SSL certificate ID
     */
    public $CertId;

    /**
     * @param string $Id Gateway certificate ID
     * @param string $Name gateway certificate name
     * @param array $BindDomains Bind Domain Name
     * @param string $CertSource Certificate source
     * @param string $CertId Currently bound SSL certificate ID
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BindDomains",$param) and $param["BindDomains"] !== null) {
            $this->BindDomains = $param["BindDomains"];
        }

        if (array_key_exists("CertSource",$param) and $param["CertSource"] !== null) {
            $this->CertSource = $param["CertSource"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }
    }
}
