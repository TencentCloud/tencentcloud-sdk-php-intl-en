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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Used to enable/disable origin-pull mutual authentication and origin certificate verification. the certificate for origin-pull mutual authentication is carried by EO during origin-pull, and the origin server can optionally validate this certificate to ensure the request originates from a trusted EO node. when enabled, the certificate configuration is used for EO nodes to verify whether the origin certificate is trustworthy.
 *
 * @method MutualTLS getUpstreamMutualTLS() Obtain In the origin-pull mutual authentication scenario, this field represents the certificate (including the public and private keys) carried during EO node origin-pull, which is deployed in the EO node for the origin server to authenticate the EO node. When used as an input parameter, it is left blank to indicate retaining the original configuration.
 * @method void setUpstreamMutualTLS(MutualTLS $UpstreamMutualTLS) Set In the origin-pull mutual authentication scenario, this field represents the certificate (including the public and private keys) carried during EO node origin-pull, which is deployed in the EO node for the origin server to authenticate the EO node. When used as an input parameter, it is left blank to indicate retaining the original configuration.
 * @method OriginCertificateVerify getUpstreamCertificateVerify() Obtain In the origin certificate verification scenario, this field represents the CA certificate used by the EO node to verify the server-side certificate when returning to the origin. it is deployed in the EO node and used for the EO node to authenticate the server certificate. when used as an input parameter, leave blank to indicate retaining the original configuration.
 * @method void setUpstreamCertificateVerify(OriginCertificateVerify $UpstreamCertificateVerify) Set In the origin certificate verification scenario, this field represents the CA certificate used by the EO node to verify the server-side certificate when returning to the origin. it is deployed in the EO node and used for the EO node to authenticate the server certificate. when used as an input parameter, leave blank to indicate retaining the original configuration.
 */
class UpstreamCertInfo extends AbstractModel
{
    /**
     * @var MutualTLS In the origin-pull mutual authentication scenario, this field represents the certificate (including the public and private keys) carried during EO node origin-pull, which is deployed in the EO node for the origin server to authenticate the EO node. When used as an input parameter, it is left blank to indicate retaining the original configuration.
     */
    public $UpstreamMutualTLS;

    /**
     * @var OriginCertificateVerify In the origin certificate verification scenario, this field represents the CA certificate used by the EO node to verify the server-side certificate when returning to the origin. it is deployed in the EO node and used for the EO node to authenticate the server certificate. when used as an input parameter, leave blank to indicate retaining the original configuration.
     */
    public $UpstreamCertificateVerify;

    /**
     * @param MutualTLS $UpstreamMutualTLS In the origin-pull mutual authentication scenario, this field represents the certificate (including the public and private keys) carried during EO node origin-pull, which is deployed in the EO node for the origin server to authenticate the EO node. When used as an input parameter, it is left blank to indicate retaining the original configuration.
     * @param OriginCertificateVerify $UpstreamCertificateVerify In the origin certificate verification scenario, this field represents the CA certificate used by the EO node to verify the server-side certificate when returning to the origin. it is deployed in the EO node and used for the EO node to authenticate the server certificate. when used as an input parameter, leave blank to indicate retaining the original configuration.
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

        if (array_key_exists("UpstreamCertificateVerify",$param) and $param["UpstreamCertificateVerify"] !== null) {
            $this->UpstreamCertificateVerify = new OriginCertificateVerify();
            $this->UpstreamCertificateVerify->deserialize($param["UpstreamCertificateVerify"]);
        }
    }
}
