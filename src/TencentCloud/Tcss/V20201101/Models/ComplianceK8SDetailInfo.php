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
 * K8s asset details
 *
 * @method string getClusterName() Obtain K8s cluster name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterName(string $ClusterName) Set K8s cluster name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterVersion() Obtain K8s cluster version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterVersion(string $ClusterVersion) Set K8s cluster version
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ComplianceK8SDetailInfo extends AbstractModel
{
    /**
     * @var string K8s cluster name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterName;

    /**
     * @var string K8s cluster version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterVersion;

    /**
     * @param string $ClusterName K8s cluster name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterVersion K8s cluster version
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
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }
    }
}
