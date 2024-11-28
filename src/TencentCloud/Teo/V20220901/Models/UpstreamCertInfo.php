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
 * The certificate carried during EO node origin-pull is used when the origin server enables the mutual authentication handshake to validate the client certificate, ensuring that the request originates from a trusted EO node.
 *
 * @method MutualTLS getUpstreamMutualTLS() Obtain In the origin-pull mutual authentication scenario, this field represents the certificate (including the public and private keys) carried during EO node origin-pull, which is deployed in the EO node for the origin server to authenticate the EO node. When used as an input parameter, it is left blank to indicate retaining the original configuration.
 * @method void setUpstreamMutualTLS(MutualTLS $UpstreamMutualTLS) Set In the origin-pull mutual authentication scenario, this field represents the certificate (including the public and private keys) carried during EO node origin-pull, which is deployed in the EO node for the origin server to authenticate the EO node. When used as an input parameter, it is left blank to indicate retaining the original configuration.
 */
class UpstreamCertInfo extends AbstractModel
{
    /**
     * @var MutualTLS In the origin-pull mutual authentication scenario, this field represents the certificate (including the public and private keys) carried during EO node origin-pull, which is deployed in the EO node for the origin server to authenticate the EO node. When used as an input parameter, it is left blank to indicate retaining the original configuration.
     */
    public $UpstreamMutualTLS;

    /**
     * @param MutualTLS $UpstreamMutualTLS In the origin-pull mutual authentication scenario, this field represents the certificate (including the public and private keys) carried during EO node origin-pull, which is deployed in the EO node for the origin server to authenticate the EO node. When used as an input parameter, it is left blank to indicate retaining the original configuration.
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
        if (array_key_exists("UpstreamMutualTLS",$param) and $param["UpstreamMutualTLS"] !== null) {
            $this->UpstreamMutualTLS = new MutualTLS();
            $this->UpstreamMutualTLS->deserialize($param["UpstreamMutualTLS"]);
        }
    }
}
