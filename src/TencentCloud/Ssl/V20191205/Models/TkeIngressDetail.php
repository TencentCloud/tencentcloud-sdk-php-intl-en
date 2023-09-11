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
 * Details of a TKE Ingress instance
 *
 * @method string getIngressName() Obtain The Ingress name.
 * @method void setIngressName(string $IngressName) Set The Ingress name.
 * @method array getTlsDomains() Obtain The list of TLS domains.
 * @method void setTlsDomains(array $TlsDomains) Set The list of TLS domains.
 * @method array getDomains() Obtain The list of Ingress domains.
 * @method void setDomains(array $Domains) Set The list of Ingress domains.
 */
class TkeIngressDetail extends AbstractModel
{
    /**
     * @var string The Ingress name.
     */
    public $IngressName;

    /**
     * @var array The list of TLS domains.
     */
    public $TlsDomains;

    /**
     * @var array The list of Ingress domains.
     */
    public $Domains;

    /**
     * @param string $IngressName The Ingress name.
     * @param array $TlsDomains The list of TLS domains.
     * @param array $Domains The list of Ingress domains.
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
        if (array_key_exists("IngressName",$param) and $param["IngressName"] !== null) {
            $this->IngressName = $param["IngressName"];
        }

        if (array_key_exists("TlsDomains",$param) and $param["TlsDomains"] !== null) {
            $this->TlsDomains = $param["TlsDomains"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }
    }
}
