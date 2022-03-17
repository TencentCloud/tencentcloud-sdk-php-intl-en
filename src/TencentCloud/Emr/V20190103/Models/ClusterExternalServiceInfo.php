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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Relationship between shared components and the current cluster
 *
 * @method integer getDependType() Obtain Dependency. `0`: Other clusters depend on the current cluster. `1`: The current cluster depends on other clusters.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDependType(integer $DependType) Set Dependency. `0`: Other clusters depend on the current cluster. `1`: The current cluster depends on other clusters.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getService() Obtain Shared component
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setService(string $Service) Set Shared component
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain Sharing cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set Sharing cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getClusterStatus() Obtain Sharing cluster status
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setClusterStatus(integer $ClusterStatus) Set Sharing cluster status
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ClusterExternalServiceInfo extends AbstractModel
{
    /**
     * @var integer Dependency. `0`: Other clusters depend on the current cluster. `1`: The current cluster depends on other clusters.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DependType;

    /**
     * @var string Shared component
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Service;

    /**
     * @var string Sharing cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var integer Sharing cluster status
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClusterStatus;

    /**
     * @param integer $DependType Dependency. `0`: Other clusters depend on the current cluster. `1`: The current cluster depends on other clusters.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Service Shared component
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ClusterId Sharing cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ClusterStatus Sharing cluster status
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("DependType",$param) and $param["DependType"] !== null) {
            $this->DependType = $param["DependType"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }
    }
}
