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
 * Modifying origin server configuration parameters
 *
 * @method string getOriginType() Obtain Origin server type. Valid values:
<li>IPDomain: IPV4, IPV6, or domain type origin server;</li>
<li>OriginGroup: origin server group type origin server;</li>
<li>LoadBalance: load balancing. This feature is in beta test. If needed, submit a ticket;</li>
<li>COS: Tencent Cloud COS origin server;</li>
<li>AWSS3: supports ALL AWS S3-compatible COS origin servers.</li>
 * @method void setOriginType(string $OriginType) Set Origin server type. Valid values:
<li>IPDomain: IPV4, IPV6, or domain type origin server;</li>
<li>OriginGroup: origin server group type origin server;</li>
<li>LoadBalance: load balancing. This feature is in beta test. If needed, submit a ticket;</li>
<li>COS: Tencent Cloud COS origin server;</li>
<li>AWSS3: supports ALL AWS S3-compatible COS origin servers.</li>
 * @method string getOrigin() Obtain Origin server address, which varies according to the value of OriginType:
<li>When OriginType = IPDomain, specify this parameter with an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When OriginType = COS, specify the cos bucket access domain.</li>
<li>When OriginType = AWSS3, specify this parameter as the access domain of the S3 bucket;</li>
<li>When OriginType = OriginGroup, fill in the origin server group ID; when it is an output parameter, if the origin server group of other sites is referenced, the format is {origin server group ID}@{ZoneID}. For example: og-testorigin@zone-38moq1z10wwwy;</li>
<li>When OriginType = LoadBalance, specify this parameter as the Cloud Load Balancer instance ID. This feature is currently only available to the allowlist. When it is an output parameter, if the load balancing of other sites is referenced, the format is {LoadBalancer ID}@{ZoneID}, such as lb-2rxpamcyqfzg@zone-38moq1z10wwwy.</li>
 * @method void setOrigin(string $Origin) Set Origin server address, which varies according to the value of OriginType:
<li>When OriginType = IPDomain, specify this parameter with an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When OriginType = COS, specify the cos bucket access domain.</li>
<li>When OriginType = AWSS3, specify this parameter as the access domain of the S3 bucket;</li>
<li>When OriginType = OriginGroup, fill in the origin server group ID; when it is an output parameter, if the origin server group of other sites is referenced, the format is {origin server group ID}@{ZoneID}. For example: og-testorigin@zone-38moq1z10wwwy;</li>
<li>When OriginType = LoadBalance, specify this parameter as the Cloud Load Balancer instance ID. This feature is currently only available to the allowlist. When it is an output parameter, if the load balancing of other sites is referenced, the format is {LoadBalancer ID}@{ZoneID}, such as lb-2rxpamcyqfzg@zone-38moq1z10wwwy.</li>
 * @method string getOriginProtocol() Obtain Origin-Pull protocol configuration. this parameter is required when origintype is ipdomain, origingroup, or loadbalance. valid values are:.
<Li>Http: use http protocol;</li>.
<Li>Https: use https protocol;</li>.
<Li>Follow: follow the protocol.</li>.
 * @method void setOriginProtocol(string $OriginProtocol) Set Origin-Pull protocol configuration. this parameter is required when origintype is ipdomain, origingroup, or loadbalance. valid values are:.
<Li>Http: use http protocol;</li>.
<Li>Https: use https protocol;</li>.
<Li>Follow: follow the protocol.</li>.
 * @method integer getHTTPOriginPort() Obtain The HTTP origin port, value ranges from 1 to 65535. this parameter is required when the origin-pull protocol OriginProtocol is HTTP or follow.
 * @method void setHTTPOriginPort(integer $HTTPOriginPort) Set The HTTP origin port, value ranges from 1 to 65535. this parameter is required when the origin-pull protocol OriginProtocol is HTTP or follow.
 * @method integer getHTTPSOriginPort() Obtain The HTTPS origin port, value ranges from 1 to 65535. this parameter is required when the origin-pull protocol OriginProtocol is HTTPS or follow.
 * @method void setHTTPSOriginPort(integer $HTTPSOriginPort) Set The HTTPS origin port, value ranges from 1 to 65535. this parameter is required when the origin-pull protocol OriginProtocol is HTTPS or follow.
 * @method string getPrivateAccess() Obtain Specifies whether access to the private object storage origin server is allowed. this parameter is required when the origin server type OriginType is COS or AWSS3. valid values:.
<Li>On: enable private authentication;</li>.
<li>off: disable private authentication.</li>.
 * @method void setPrivateAccess(string $PrivateAccess) Set Specifies whether access to the private object storage origin server is allowed. this parameter is required when the origin server type OriginType is COS or AWSS3. valid values:.
<Li>On: enable private authentication;</li>.
<li>off: disable private authentication.</li>.
 * @method OriginPrivateParameters getPrivateParameters() Obtain Private authentication parameter. this parameter is valid only when origintype = awss3 and privateaccess = on.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setPrivateParameters(OriginPrivateParameters $PrivateParameters) Set Private authentication parameter. this parameter is valid only when origintype = awss3 and privateaccess = on.
Note: this field may return null, which indicates a failure to obtain a valid value.
 */
class ModifyOriginParameters extends AbstractModel
{
    /**
     * @var string Origin server type. Valid values:
<li>IPDomain: IPV4, IPV6, or domain type origin server;</li>
<li>OriginGroup: origin server group type origin server;</li>
<li>LoadBalance: load balancing. This feature is in beta test. If needed, submit a ticket;</li>
<li>COS: Tencent Cloud COS origin server;</li>
<li>AWSS3: supports ALL AWS S3-compatible COS origin servers.</li>
     */
    public $OriginType;

    /**
     * @var string Origin server address, which varies according to the value of OriginType:
<li>When OriginType = IPDomain, specify this parameter with an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When OriginType = COS, specify the cos bucket access domain.</li>
<li>When OriginType = AWSS3, specify this parameter as the access domain of the S3 bucket;</li>
<li>When OriginType = OriginGroup, fill in the origin server group ID; when it is an output parameter, if the origin server group of other sites is referenced, the format is {origin server group ID}@{ZoneID}. For example: og-testorigin@zone-38moq1z10wwwy;</li>
<li>When OriginType = LoadBalance, specify this parameter as the Cloud Load Balancer instance ID. This feature is currently only available to the allowlist. When it is an output parameter, if the load balancing of other sites is referenced, the format is {LoadBalancer ID}@{ZoneID}, such as lb-2rxpamcyqfzg@zone-38moq1z10wwwy.</li>
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
     * @var integer The HTTP origin port, value ranges from 1 to 65535. this parameter is required when the origin-pull protocol OriginProtocol is HTTP or follow.
     */
    public $HTTPOriginPort;

    /**
     * @var integer The HTTPS origin port, value ranges from 1 to 65535. this parameter is required when the origin-pull protocol OriginProtocol is HTTPS or follow.
     */
    public $HTTPSOriginPort;

    /**
     * @var string Specifies whether access to the private object storage origin server is allowed. this parameter is required when the origin server type OriginType is COS or AWSS3. valid values:.
<Li>On: enable private authentication;</li>.
<li>off: disable private authentication.</li>.
     */
    public $PrivateAccess;

    /**
     * @var OriginPrivateParameters Private authentication parameter. this parameter is valid only when origintype = awss3 and privateaccess = on.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $PrivateParameters;

    /**
     * @param string $OriginType Origin server type. Valid values:
<li>IPDomain: IPV4, IPV6, or domain type origin server;</li>
<li>OriginGroup: origin server group type origin server;</li>
<li>LoadBalance: load balancing. This feature is in beta test. If needed, submit a ticket;</li>
<li>COS: Tencent Cloud COS origin server;</li>
<li>AWSS3: supports ALL AWS S3-compatible COS origin servers.</li>
     * @param string $Origin Origin server address, which varies according to the value of OriginType:
<li>When OriginType = IPDomain, specify this parameter with an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When OriginType = COS, specify the cos bucket access domain.</li>
<li>When OriginType = AWSS3, specify this parameter as the access domain of the S3 bucket;</li>
<li>When OriginType = OriginGroup, fill in the origin server group ID; when it is an output parameter, if the origin server group of other sites is referenced, the format is {origin server group ID}@{ZoneID}. For example: og-testorigin@zone-38moq1z10wwwy;</li>
<li>When OriginType = LoadBalance, specify this parameter as the Cloud Load Balancer instance ID. This feature is currently only available to the allowlist. When it is an output parameter, if the load balancing of other sites is referenced, the format is {LoadBalancer ID}@{ZoneID}, such as lb-2rxpamcyqfzg@zone-38moq1z10wwwy.</li>
     * @param string $OriginProtocol Origin-Pull protocol configuration. this parameter is required when origintype is ipdomain, origingroup, or loadbalance. valid values are:.
<Li>Http: use http protocol;</li>.
<Li>Https: use https protocol;</li>.
<Li>Follow: follow the protocol.</li>.
     * @param integer $HTTPOriginPort The HTTP origin port, value ranges from 1 to 65535. this parameter is required when the origin-pull protocol OriginProtocol is HTTP or follow.
     * @param integer $HTTPSOriginPort The HTTPS origin port, value ranges from 1 to 65535. this parameter is required when the origin-pull protocol OriginProtocol is HTTPS or follow.
     * @param string $PrivateAccess Specifies whether access to the private object storage origin server is allowed. this parameter is required when the origin server type OriginType is COS or AWSS3. valid values:.
<Li>On: enable private authentication;</li>.
<li>off: disable private authentication.</li>.
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
