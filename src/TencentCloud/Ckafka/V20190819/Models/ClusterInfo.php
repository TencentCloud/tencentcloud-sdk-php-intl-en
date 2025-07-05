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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster information entity
 *
 * @method integer getClusterId() Obtain Cluster ID
 * @method void setClusterId(integer $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method integer getMaxDiskSize() Obtain The cluster’s maximum disk capacity in GB
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setMaxDiskSize(integer $MaxDiskSize) Set The cluster’s maximum disk capacity in GB
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getMaxBandWidth() Obtain The cluster’s maximum bandwidth in MB/s
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setMaxBandWidth(integer $MaxBandWidth) Set The cluster’s maximum bandwidth in MB/s
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getAvailableDiskSize() Obtain The cluster’s available disk capacity in GB
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setAvailableDiskSize(integer $AvailableDiskSize) Set The cluster’s available disk capacity in GB
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getAvailableBandWidth() Obtain The cluster’s available bandwidth in MB/s
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setAvailableBandWidth(integer $AvailableBandWidth) Set The cluster’s available bandwidth in MB/s
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getZoneId() Obtain The AZ where the cluster resides
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setZoneId(integer $ZoneId) Set The AZ where the cluster resides
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method array getZoneIds() Obtain The AZ where the cluster nodes reside. If the cluster is a multi-AZ cluster, this field means multiple AZs where the cluster nodes reside.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setZoneIds(array $ZoneIds) Set The AZ where the cluster nodes reside. If the cluster is a multi-AZ cluster, this field means multiple AZs where the cluster nodes reside.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 */
class ClusterInfo extends AbstractModel
{
    /**
     * @var integer Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var integer The cluster’s maximum disk capacity in GB
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $MaxDiskSize;

    /**
     * @var integer The cluster’s maximum bandwidth in MB/s
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $MaxBandWidth;

    /**
     * @var integer The cluster’s available disk capacity in GB
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $AvailableDiskSize;

    /**
     * @var integer The cluster’s available bandwidth in MB/s
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $AvailableBandWidth;

    /**
     * @var integer The AZ where the cluster resides
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @var array The AZ where the cluster nodes reside. If the cluster is a multi-AZ cluster, this field means multiple AZs where the cluster nodes reside.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $ZoneIds;

    /**
     * @param integer $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param integer $MaxDiskSize The cluster’s maximum disk capacity in GB
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $MaxBandWidth The cluster’s maximum bandwidth in MB/s
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $AvailableDiskSize The cluster’s available disk capacity in GB
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $AvailableBandWidth The cluster’s available bandwidth in MB/s
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $ZoneId The AZ where the cluster resides
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param array $ZoneIds The AZ where the cluster nodes reside. If the cluster is a multi-AZ cluster, this field means multiple AZs where the cluster nodes reside.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
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

        if (array_key_exists("MaxDiskSize",$param) and $param["MaxDiskSize"] !== null) {
            $this->MaxDiskSize = $param["MaxDiskSize"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("AvailableDiskSize",$param) and $param["AvailableDiskSize"] !== null) {
            $this->AvailableDiskSize = $param["AvailableDiskSize"];
        }

        if (array_key_exists("AvailableBandWidth",$param) and $param["AvailableBandWidth"] !== null) {
            $this->AvailableBandWidth = $param["AvailableBandWidth"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }
    }
}
