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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Server asset details
 *
 * @method string getDockerVersion() Obtain Docker version on the host.
 * @method void setDockerVersion(string $DockerVersion) Set Docker version on the host.
 * @method string getK8SVersion() Obtain K8S version on the host.
 * @method void setK8SVersion(string $K8SVersion) Set K8S version on the host.
 * @method string getContainerdVersion() Obtain Containerd Version on Host
 * @method void setContainerdVersion(string $ContainerdVersion) Set Containerd Version on Host
 */
class ComplianceHostDetailInfo extends AbstractModel
{
    /**
     * @var string Docker version on the host.
     */
    public $DockerVersion;

    /**
     * @var string K8S version on the host.
     */
    public $K8SVersion;

    /**
     * @var string Containerd Version on Host
     */
    public $ContainerdVersion;

    /**
     * @param string $DockerVersion Docker version on the host.
     * @param string $K8SVersion K8S version on the host.
     * @param string $ContainerdVersion Containerd Version on Host
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
        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("K8SVersion",$param) and $param["K8SVersion"] !== null) {
            $this->K8SVersion = $param["K8SVersion"];
        }

        if (array_key_exists("ContainerdVersion",$param) and $param["ContainerdVersion"] !== null) {
            $this->ContainerdVersion = $param["ContainerdVersion"];
        }
    }
}
