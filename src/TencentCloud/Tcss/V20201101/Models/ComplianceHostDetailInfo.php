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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Server asset details
 *
 * @method string getDockerVersion() Obtain Docker version on the server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDockerVersion(string $DockerVersion) Set Docker version on the server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getK8SVersion() Obtain K8s version on the server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setK8SVersion(string $K8SVersion) Set K8s version on the server
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ComplianceHostDetailInfo extends AbstractModel
{
    /**
     * @var string Docker version on the server
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DockerVersion;

    /**
     * @var string K8s version on the server
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $K8SVersion;

    /**
     * @param string $DockerVersion Docker version on the server
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $K8SVersion K8s version on the server
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
