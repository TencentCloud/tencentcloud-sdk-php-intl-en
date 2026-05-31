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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster information.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method string getClusterStatus() Obtain Cluster status
 * @method void setClusterStatus(string $ClusterStatus) Set Cluster status
 * @method string getClusterRegion() Obtain cluster region
 * @method void setClusterRegion(string $ClusterRegion) Set cluster region
 * @method string getClusterZone() Obtain AZ of the cluster
 * @method void setClusterZone(string $ClusterZone) Set AZ of the cluster
 */
class DescribeVaultBackupClusterInfo extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name.
     */
    public $ClusterName;

    /**
     * @var string Cluster status
     */
    public $ClusterStatus;

    /**
     * @var string cluster region
     */
    public $ClusterRegion;

    /**
     * @var string AZ of the cluster
     */
    public $ClusterZone;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name.
     * @param string $ClusterStatus Cluster status
     * @param string $ClusterRegion cluster region
     * @param string $ClusterZone AZ of the cluster
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("ClusterRegion",$param) and $param["ClusterRegion"] !== null) {
            $this->ClusterRegion = $param["ClusterRegion"];
        }

        if (array_key_exists("ClusterZone",$param) and $param["ClusterZone"] !== null) {
            $this->ClusterZone = $param["ClusterZone"];
        }
    }
}
