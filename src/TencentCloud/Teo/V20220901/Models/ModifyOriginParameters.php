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
 * Modifying origin server configuration parameters
 *
 * @method string getOriginType() Obtain The origin type. values:.
<Li>IPDomain: ipv4, ipv6, or domain name type origin server;</li>.
<Li>OriginGroup: origin server group type origin server;</li>.
<Li>LoadBalance: cloud load balancer (clb), this feature is in beta test. to use it, please submit a ticket or contact smart customer service;</li>.
<Li>COS: tencent cloud COS origin server;</li>.
<Li>AWSS3: all object storage origin servers that support the aws s3 protocol.</li>.
 * @method void setOriginType(string $OriginType) Set The origin type. values:.
<Li>IPDomain: ipv4, ipv6, or domain name type origin server;</li>.
<Li>OriginGroup: origin server group type origin server;</li>.
<Li>LoadBalance: cloud load balancer (clb), this feature is in beta test. to use it, please submit a ticket or contact smart customer service;</li>.
<Li>COS: tencent cloud COS origin server;</li>.
<Li>AWSS3: all object storage origin servers that support the aws s3 protocol.</li>.
 * @method string getOrigin() Obtain Origin server address, which varies according to the value of origintype:.
<Li>When origintype = ipdomain, fill in an ipv4 address, an ipv6 address, or a domain name;</li>.
<Li>When origintype = cos, please fill in the access domain name of the cos bucket;</li>.
<Li>When origintype = awss3, fill in the access domain name of the s3 bucket;</li>.
<Li>When origintype = origingroup, fill in the origin server group id;</li>.
<Li>When origintype = loadbalance, fill in the cloud load balancer instance id. this feature is currently only available to the allowlist.</li>.
 * @method void setOrigin(string $Origin) Set Origin server address, which varies according to the value of origintype:.
<Li>When origintype = ipdomain, fill in an ipv4 address, an ipv6 address, or a domain name;</li>.
<Li>When origintype = cos, please fill in the access domain name of the cos bucket;</li>.
<Li>When origintype = awss3, fill in the access domain name of the s3 bucket;</li>.
<Li>When origintype = origingroup, fill in the origin server group id;</li>.
<Li>When origintype = loadbalance, fill in the cloud load balancer instance id. this feature is currently only available to the allowlist.</li>.
 * @method string getOriginProtocol() Obtain Origin-Pull protocol configuration. this parameter is required when origintype is ipdomain, origingroup, or loadbalance. valid values are:.
<Li>Http: use http protocol;</li>.
<Li>Https: use https protocol;</li>.
<Li>Follow: follow the protocol.</li>.
 * @method void setOriginProtocol(string $OriginProtocol) Set Origin-Pull protocol configuration. this parameter is required when origintype is ipdomain, origingroup, or loadbalance. valid values are:.
<Li>Http: use http protocol;</li>.
<Li>Https: use https protocol;</li>.
<Li>Follow: follow the protocol.</li>.
 * @method integer getHTTPOriginPort() Obtain Ports for http origin-pull requests. value range: 1-65535. this parameter takes effect only when the origin-pull protocol originprotocol is http or follow.
 * @method void setHTTPOriginPort(integer $HTTPOriginPort) Set Ports for http origin-pull requests. value range: 1-65535. this parameter takes effect only when the origin-pull protocol originprotocol is http or follow.
 * @method integer getHTTPSOriginPort() Obtain Ports for https origin-pull requests. value range: 1-65535. this parameter takes effect only when the origin-pull protocol originprotocol is https or follow.
 * @method void setHTTPSOriginPort(integer $HTTPSOriginPort) Set Ports for https origin-pull requests. value range: 1-65535. this parameter takes effect only when the origin-pull protocol originprotocol is https or follow.
 * @method string getPrivateAccess() Obtain Whether access to the private object storage origin server is allowed. this parameter is valid only when the origin server type origintype is COS or awss3. valid values:.
<Li>On: enable private authentication;</li>.
<Li>Off: disable private authentication.</li> if not specified, the default value is off.
 * @method void setPrivateAccess(string $PrivateAccess) Set Whether access to the private object storage origin server is allowed. this parameter is valid only when the origin server type origintype is COS or awss3. valid values:.
<Li>On: enable private authentication;</li>.
<Li>Off: disable private authentication.</li> if not specified, the default value is off.
 * @method OriginPrivateParameters getPrivateParameters() Obtain Private authentication parameter. this parameter is valid only when origintype = awss3 and privateaccess = on.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setPrivateParameters(OriginPrivateParameters $PrivateParameters) Set Private authentication parameter. this parameter is valid only when origintype = awss3 and privateaccess = on.
Note: this field may return null, which indicates a failure to obtain a valid value.
 */
class ModifyOriginParameters extends AbstractModel
{
    /**
     * @var string The origin type. values:.
<Li>IPDomain: ipv4, ipv6, or domain name type origin server;</li>.
<Li>OriginGroup: origin server group type origin server;</li>.
<Li>LoadBalance: cloud load balancer (clb), this feature is in beta test. to use it, please submit a ticket or contact smart customer service;</li>.
<Li>COS: tencent cloud COS origin server;</li>.
<Li>AWSS3: all object storage origin servers that support the aws s3 protocol.</li>.
     */
    public $OriginType;

    /**
     * @var string Origin server address, which varies according to the value of origintype:.
<Li>When origintype = ipdomain, fill in an ipv4 address, an ipv6 address, or a domain name;</li>.
<Li>When origintype = cos, please fill in the access domain name of the cos bucket;</li>.
<Li>When origintype = awss3, fill in the access domain name of the s3 bucket;</li>.
<Li>When origintype = origingroup, fill in the origin server group id;</li>.
<Li>When origintype = loadbalance, fill in the cloud load balancer instance id. this feature is currently only available to the allowlist.</li>.
     */
    public $Origin;

    /**
     * @var string Origin-Pull protocol configuration. this parameter is required when origintype is ipdomain, origingroup, or loadbalance. valid values are:.
<Li>Http: use http protocol;</li>.
<Li>Https: use https protocol;</li>.
<Li>Follow: follow the protocol.</li>.
     */
    public $OriginProtocol;

    /**
     * @var integer Ports for http origin-pull requests. value range: 1-65535. this parameter takes effect only when the origin-pull protocol originprotocol is http or follow.
     */
    public $HTTPOriginPort;

    /**
     * @var integer Ports for https origin-pull requests. value range: 1-65535. this parameter takes effect only when the origin-pull protocol originprotocol is https or follow.
     */
    public $HTTPSOriginPort;

    /**
     * @var string Whether access to the private object storage origin server is allowed. this parameter is valid only when the origin server type origintype is COS or awss3. valid values:.
<Li>On: enable private authentication;</li>.
<Li>Off: disable private authentication.</li> if not specified, the default value is off.
     */
    public $PrivateAccess;

    /**
     * @var OriginPrivateParameters Private authentication parameter. this parameter is valid only when origintype = awss3 and privateaccess = on.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $PrivateParameters;

    /**
     * @param string $OriginType The origin type. values:.
<Li>IPDomain: ipv4, ipv6, or domain name type origin server;</li>.
<Li>OriginGroup: origin server group type origin server;</li>.
<Li>LoadBalance: cloud load balancer (clb), this feature is in beta test. to use it, please submit a ticket or contact smart customer service;</li>.
<Li>COS: tencent cloud COS origin server;</li>.
<Li>AWSS3: all object storage origin servers that support the aws s3 protocol.</li>.
     * @param string $Origin Origin server address, which varies according to the value of origintype:.
<Li>When origintype = ipdomain, fill in an ipv4 address, an ipv6 address, or a domain name;</li>.
<Li>When origintype = cos, please fill in the access domain name of the cos bucket;</li>.
<Li>When origintype = awss3, fill in the access domain name of the s3 bucket;</li>.
<Li>When origintype = origingroup, fill in the origin server group id;</li>.
<Li>When origintype = loadbalance, fill in the cloud load balancer instance id. this feature is currently only available to the allowlist.</li>.
     * @param string $OriginProtocol Origin-Pull protocol configuration. this parameter is required when origintype is ipdomain, origingroup, or loadbalance. valid values are:.
<Li>Http: use http protocol;</li>.
<Li>Https: use https protocol;</li>.
<Li>Follow: follow the protocol.</li>.
     * @param integer $HTTPOriginPort Ports for http origin-pull requests. value range: 1-65535. this parameter takes effect only when the origin-pull protocol originprotocol is http or follow.
     * @param integer $HTTPSOriginPort Ports for https origin-pull requests. value range: 1-65535. this parameter takes effect only when the origin-pull protocol originprotocol is https or follow.
     * @param string $PrivateAccess Whether access to the private object storage origin server is allowed. this parameter is valid only when the origin server type origintype is COS or awss3. valid values:.
<Li>On: enable private authentication;</li>.
<Li>Off: disable private authentication.</li> if not specified, the default value is off.
     * @param OriginPrivateParameters $PrivateParameters Private authentication parameter. this parameter is valid only when origintype = awss3 and privateaccess = on.
Note: this field may return null, which indicates a failure to obtain a valid value.
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
        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("OriginProtocol",$param) and $param["OriginProtocol"] !== null) {
            $this->OriginProtocol = $param["OriginProtocol"];
        }

        if (array_key_exists("HTTPOriginPort",$param) and $param["HTTPOriginPort"] !== null) {
            $this->HTTPOriginPort = $param["HTTPOriginPort"];
        }

        if (array_key_exists("HTTPSOriginPort",$param) and $param["HTTPSOriginPort"] !== null) {
            $this->HTTPSOriginPort = $param["HTTPSOriginPort"];
        }

        if (array_key_exists("PrivateAccess",$param) and $param["PrivateAccess"] !== null) {
            $this->PrivateAccess = $param["PrivateAccess"];
        }

        if (array_key_exists("PrivateParameters",$param) and $param["PrivateParameters"] !== null) {
            $this->PrivateParameters = new OriginPrivateParameters();
            $this->PrivateParameters->deserialize($param["PrivateParameters"]);
        }
    }
}
