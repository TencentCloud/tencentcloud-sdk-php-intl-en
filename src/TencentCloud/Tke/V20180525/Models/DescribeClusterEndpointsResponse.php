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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterEndpoints response structure.
 *
 * @method string getCertificationAuthority() Obtain CA certificate of cluster APIServer
 * @method void setCertificationAuthority(string $CertificationAuthority) Set CA certificate of cluster APIServer
 * @method string getClusterExternalEndpoint() Obtain Public network access address of cluster APIServer
 * @method void setClusterExternalEndpoint(string $ClusterExternalEndpoint) Set Public network access address of cluster APIServer
 * @method string getClusterIntranetEndpoint() Obtain Private network access address of cluster APIServer
 * @method void setClusterIntranetEndpoint(string $ClusterIntranetEndpoint) Set Private network access address of cluster APIServer
 * @method string getClusterDomain() Obtain Domain name of cluster APIServer
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setClusterDomain(string $ClusterDomain) Set Domain name of cluster APIServer
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getClusterExternalACL() Obtain Public network access ACL of cluster APIServer
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setClusterExternalACL(array $ClusterExternalACL) Set Public network access ACL of cluster APIServer
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeClusterEndpointsResponse extends AbstractModel
{
    /**
     * @var string CA certificate of cluster APIServer
     */
    public $CertificationAuthority;

    /**
     * @var string Public network access address of cluster APIServer
     */
    public $ClusterExternalEndpoint;

    /**
     * @var string Private network access address of cluster APIServer
     */
    public $ClusterIntranetEndpoint;

    /**
     * @var string Domain name of cluster APIServer
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClusterDomain;

    /**
     * @var array Public network access ACL of cluster APIServer
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClusterExternalACL;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $CertificationAuthority CA certificate of cluster APIServer
     * @param string $ClusterExternalEndpoint Public network access address of cluster APIServer
     * @param string $ClusterIntranetEndpoint Private network access address of cluster APIServer
     * @param string $ClusterDomain Domain name of cluster APIServer
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $ClusterExternalACL Public network access ACL of cluster APIServer
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("CertificationAuthority",$param) and $param["CertificationAuthority"] !== null) {
            $this->CertificationAuthority = $param["CertificationAuthority"];
        }

        if (array_key_exists("ClusterExternalEndpoint",$param) and $param["ClusterExternalEndpoint"] !== null) {
            $this->ClusterExternalEndpoint = $param["ClusterExternalEndpoint"];
        }

        if (array_key_exists("ClusterIntranetEndpoint",$param) and $param["ClusterIntranetEndpoint"] !== null) {
            $this->ClusterIntranetEndpoint = $param["ClusterIntranetEndpoint"];
        }

        if (array_key_exists("ClusterDomain",$param) and $param["ClusterDomain"] !== null) {
            $this->ClusterDomain = $param["ClusterDomain"];
        }

        if (array_key_exists("ClusterExternalACL",$param) and $param["ClusterExternalACL"] !== null) {
            $this->ClusterExternalACL = $param["ClusterExternalACL"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
