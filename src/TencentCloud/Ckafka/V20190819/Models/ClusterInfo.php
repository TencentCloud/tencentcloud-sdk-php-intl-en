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
 * @method integer getMaxDiskSize() Obtain Maximum disk of the cluster (unit: GB).
 * @method void setMaxDiskSize(integer $MaxDiskSize) Set Maximum disk of the cluster (unit: GB).
 * @method integer getMaxBandWidth() Obtain Maximum bandwidth of the cluster. unit: MB/s.
 * @method void setMaxBandWidth(integer $MaxBandWidth) Set Maximum bandwidth of the cluster. unit: MB/s.
 * @method integer getAvailableDiskSize() Obtain Current availability of cluster disk (unit: GB).
 * @method void setAvailableDiskSize(integer $AvailableDiskSize) Set Current availability of cluster disk (unit: GB).
 * @method integer getAvailableBandWidth() Obtain Available bandwidth of the cluster. unit: MB/s.
 * @method void setAvailableBandWidth(integer $AvailableBandWidth) Set Available bandwidth of the cluster. unit: MB/s.
 * @method integer getZoneId() Obtain Indicates the AZ to which the cluster belongs.
 * @method void setZoneId(integer $ZoneId) Set Indicates the AZ to which the cluster belongs.
 * @method array getZoneIds() Obtain The AZ where the cluster nodes are located. If the cluster is a cross-AZ cluster, it includes multiple AZs where the cluster nodes are located.
 * @method void setZoneIds(array $ZoneIds) Set The AZ where the cluster nodes are located. If the cluster is a cross-AZ cluster, it includes multiple AZs where the cluster nodes are located.
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
     * @var integer Maximum disk of the cluster (unit: GB).
     */
    public $MaxDiskSize;

    /**
     * @var integer Maximum bandwidth of the cluster. unit: MB/s.
     */
    public $MaxBandWidth;

    /**
     * @var integer Current availability of cluster disk (unit: GB).
     */
    public $AvailableDiskSize;

    /**
     * @var integer Available bandwidth of the cluster. unit: MB/s.
     */
    public $AvailableBandWidth;

    /**
     * @var integer Indicates the AZ to which the cluster belongs.
     */
    public $ZoneId;

    /**
     * @var array The AZ where the cluster nodes are located. If the cluster is a cross-AZ cluster, it includes multiple AZs where the cluster nodes are located.
     */
    public $ZoneIds;

    /**
     * @param integer $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param integer $MaxDiskSize Maximum disk of the cluster (unit: GB).
     * @param integer $MaxBandWidth Maximum bandwidth of the cluster. unit: MB/s.
     * @param integer $AvailableDiskSize Current availability of cluster disk (unit: GB).
     * @param integer $AvailableBandWidth Available bandwidth of the cluster. unit: MB/s.
     * @param integer $ZoneId Indicates the AZ to which the cluster belongs.
     * @param array $ZoneIds The AZ where the cluster nodes are located. If the cluster is a cross-AZ cluster, it includes multiple AZs where the cluster nodes are located.
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
