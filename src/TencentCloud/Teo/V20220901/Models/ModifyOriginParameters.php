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
 * Modify origin server configuration parameters.
 *
 * @method string getOriginType() Obtain Origin server type. Valid values:
<li>IPDomain: IPV4, IPV6, or domain type origin server;</li>
<li>OriginGroup: origin server group type origin server;</li>
<li>LoadBalance: load balancing. This feature is in beta test. If needed, submit a ticket;</li>
<li>COS: Tencent Cloud COS origin server;</li>
<li>AWSS3: supports all COS origin servers using the AWS S3 protocol.</li>
 * @method void setOriginType(string $OriginType) Set Origin server type. Valid values:
<li>IPDomain: IPV4, IPV6, or domain type origin server;</li>
<li>OriginGroup: origin server group type origin server;</li>
<li>LoadBalance: load balancing. This feature is in beta test. If needed, submit a ticket;</li>
<li>COS: Tencent Cloud COS origin server;</li>
<li>AWSS3: supports all COS origin servers using the AWS S3 protocol.</li>
 * @method string getOrigin() Obtain Origin server address, which varies according to the value of OriginType:
<li>When OriginType = IPDomain, fill in an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When OriginType = COS, specify the access domain of the COS bucket;</li>
<li>When OriginType = AWSS3, fill in the access domain name of the S3 bucket;</li>
<li>When OriginType = OriginGroup, fill in the origin server group ID. As an output parameter, if an origin server group from another site is referenced, the format is {origin server group ID}@{ZoneID}. For example: og-testorigin@zone-38moq1z10wwwy;</li>
<li>When OriginType = LoadBalance, specify the Cloud Load Balancer instance ID. This feature is currently only available to the allowlist. As an output parameter, if a load balancer from another site is referenced, the format is {load balancer ID}@{ZoneID}. For example: lb-2rxpamcyqfzg@zone-38moq1z10wwwy.</li>
 * @method void setOrigin(string $Origin) Set Origin server address, which varies according to the value of OriginType:
<li>When OriginType = IPDomain, fill in an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When OriginType = COS, specify the access domain of the COS bucket;</li>
<li>When OriginType = AWSS3, fill in the access domain name of the S3 bucket;</li>
<li>When OriginType = OriginGroup, fill in the origin server group ID. As an output parameter, if an origin server group from another site is referenced, the format is {origin server group ID}@{ZoneID}. For example: og-testorigin@zone-38moq1z10wwwy;</li>
<li>When OriginType = LoadBalance, specify the Cloud Load Balancer instance ID. This feature is currently only available to the allowlist. As an output parameter, if a load balancer from another site is referenced, the format is {load balancer ID}@{ZoneID}. For example: lb-2rxpamcyqfzg@zone-38moq1z10wwwy.</li>
 * @method string getOriginProtocol() Obtain Origin-pull protocol configuration. This parameter is required when OriginType is IPDomain, OriginGroup, or LoadBalance. Valid values:
<li>http: use HTTP protocol;</li>
<li>https: Use HTTPS protocol;</li>
<li>follow: follow protocol.</li>
 * @method void setOriginProtocol(string $OriginProtocol) Set Origin-pull protocol configuration. This parameter is required when OriginType is IPDomain, OriginGroup, or LoadBalance. Valid values:
<li>http: use HTTP protocol;</li>
<li>https: Use HTTPS protocol;</li>
<li>follow: follow protocol.</li>
 * @method integer getHTTPOriginPort() Obtain HTTP origin-pull port, value ranges from 1 to 65535. This parameter is required when the origin-pull protocol OriginProtocol is http or follow.
 * @method void setHTTPOriginPort(integer $HTTPOriginPort) Set HTTP origin-pull port, value ranges from 1 to 65535. This parameter is required when the origin-pull protocol OriginProtocol is http or follow.
 * @method integer getHTTPSOriginPort() Obtain HTTPS origin-pull port, value range: 1–65535. This parameter is required when OriginProtocol is https or follow.
 * @method void setHTTPSOriginPort(integer $HTTPSOriginPort) Set HTTPS origin-pull port, value range: 1–65535. This parameter is required when OriginProtocol is https or follow.
 * @method string getPrivateAccess() Obtain Whether access to the private object storage origin server is allowed. This parameter is required when the origin server type OriginType is COS or AWSS3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication. </li>
 * @method void setPrivateAccess(string $PrivateAccess) Set Whether access to the private object storage origin server is allowed. This parameter is required when the origin server type OriginType is COS or AWSS3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication. </li>
 * @method OriginPrivateParameters getPrivateParameters() Obtain Private authentication parameter. This parameter is valid only when OriginType = AWSS3 and PrivateAccess = on.
 * @method void setPrivateParameters(OriginPrivateParameters $PrivateParameters) Set Private authentication parameter. This parameter is valid only when OriginType = AWSS3 and PrivateAccess = on.
 */
class ModifyOriginParameters extends AbstractModel
{
    /**
     * @var string Origin server type. Valid values:
<li>IPDomain: IPV4, IPV6, or domain type origin server;</li>
<li>OriginGroup: origin server group type origin server;</li>
<li>LoadBalance: load balancing. This feature is in beta test. If needed, submit a ticket;</li>
<li>COS: Tencent Cloud COS origin server;</li>
<li>AWSS3: supports all COS origin servers using the AWS S3 protocol.</li>
     */
    public $OriginType;

    /**
     * @var string Origin server address, which varies according to the value of OriginType:
<li>When OriginType = IPDomain, fill in an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When OriginType = COS, specify the access domain of the COS bucket;</li>
<li>When OriginType = AWSS3, fill in the access domain name of the S3 bucket;</li>
<li>When OriginType = OriginGroup, fill in the origin server group ID. As an output parameter, if an origin server group from another site is referenced, the format is {origin server group ID}@{ZoneID}. For example: og-testorigin@zone-38moq1z10wwwy;</li>
<li>When OriginType = LoadBalance, specify the Cloud Load Balancer instance ID. This feature is currently only available to the allowlist. As an output parameter, if a load balancer from another site is referenced, the format is {load balancer ID}@{ZoneID}. For example: lb-2rxpamcyqfzg@zone-38moq1z10wwwy.</li>
     */
    public $Origin;

    /**
     * @var string Origin-pull protocol configuration. This parameter is required when OriginType is IPDomain, OriginGroup, or LoadBalance. Valid values:
<li>http: use HTTP protocol;</li>
<li>https: Use HTTPS protocol;</li>
<li>follow: follow protocol.</li>
     */
    public $OriginProtocol;

    /**
     * @var integer HTTP origin-pull port, value ranges from 1 to 65535. This parameter is required when the origin-pull protocol OriginProtocol is http or follow.
     */
    public $HTTPOriginPort;

    /**
     * @var integer HTTPS origin-pull port, value range: 1–65535. This parameter is required when OriginProtocol is https or follow.
     */
    public $HTTPSOriginPort;

    /**
     * @var string Whether access to the private object storage origin server is allowed. This parameter is required when the origin server type OriginType is COS or AWSS3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication. </li>
     */
    public $PrivateAccess;

    /**
     * @var OriginPrivateParameters Private authentication parameter. This parameter is valid only when OriginType = AWSS3 and PrivateAccess = on.
     */
    public $PrivateParameters;

    /**
     * @param string $OriginType Origin server type. Valid values:
<li>IPDomain: IPV4, IPV6, or domain type origin server;</li>
<li>OriginGroup: origin server group type origin server;</li>
<li>LoadBalance: load balancing. This feature is in beta test. If needed, submit a ticket;</li>
<li>COS: Tencent Cloud COS origin server;</li>
<li>AWSS3: supports all COS origin servers using the AWS S3 protocol.</li>
     * @param string $Origin Origin server address, which varies according to the value of OriginType:
<li>When OriginType = IPDomain, fill in an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When OriginType = COS, specify the access domain of the COS bucket;</li>
<li>When OriginType = AWSS3, fill in the access domain name of the S3 bucket;</li>
<li>When OriginType = OriginGroup, fill in the origin server group ID. As an output parameter, if an origin server group from another site is referenced, the format is {origin server group ID}@{ZoneID}. For example: og-testorigin@zone-38moq1z10wwwy;</li>
<li>When OriginType = LoadBalance, specify the Cloud Load Balancer instance ID. This feature is currently only available to the allowlist. As an output parameter, if a load balancer from another site is referenced, the format is {load balancer ID}@{ZoneID}. For example: lb-2rxpamcyqfzg@zone-38moq1z10wwwy.</li>
     * @param string $OriginProtocol Origin-pull protocol configuration. This parameter is required when OriginType is IPDomain, OriginGroup, or LoadBalance. Valid values:
<li>http: use HTTP protocol;</li>
<li>https: Use HTTPS protocol;</li>
<li>follow: follow protocol.</li>
     * @param integer $HTTPOriginPort HTTP origin-pull port, value ranges from 1 to 65535. This parameter is required when the origin-pull protocol OriginProtocol is http or follow.
     * @param integer $HTTPSOriginPort HTTPS origin-pull port, value range: 1–65535. This parameter is required when OriginProtocol is https or follow.
     * @param string $PrivateAccess Whether access to the private object storage origin server is allowed. This parameter is required when the origin server type OriginType is COS or AWSS3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication. </li>
     * @param OriginPrivateParameters $PrivateParameters Private authentication parameter. This parameter is valid only when OriginType = AWSS3 and PrivateAccess = on.
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
