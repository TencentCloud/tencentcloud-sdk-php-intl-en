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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Relationship between shared components and the current cluster
 *
 * @method integer getDependType() Obtain Dependency relationship. 0: being depended on by other clusters, 1: depending on other clusters.
 * @method void setDependType(integer $DependType) Set Dependency relationship. 0: being depended on by other clusters, 1: depending on other clusters.
 * @method string getService() Obtain Shared component.
 * @method void setService(string $Service) Set Shared component.
 * @method string getClusterId() Obtain Shared cluster.
 * @method void setClusterId(string $ClusterId) Set Shared cluster.
 * @method integer getClusterStatus() Obtain Shared cluster status.
 * @method void setClusterStatus(integer $ClusterStatus) Set Shared cluster status.
 */
class ClusterExternalServiceInfo extends AbstractModel
{
    /**
     * @var integer Dependency relationship. 0: being depended on by other clusters, 1: depending on other clusters.
     */
    public $DependType;

    /**
     * @var string Shared component.
     */
    public $Service;

    /**
     * @var string Shared cluster.
     */
    public $ClusterId;

    /**
     * @var integer Shared cluster status.
     */
    public $ClusterStatus;

    /**
     * @param integer $DependType Dependency relationship. 0: being depended on by other clusters, 1: depending on other clusters.
     * @param string $Service Shared component.
     * @param string $ClusterId Shared cluster.
     * @param integer $ClusterStatus Shared cluster status.
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
