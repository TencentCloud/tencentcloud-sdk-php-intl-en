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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceUpgradeType request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
 * @method float getDstCpu() Obtain <p>The number of CPU cores of the target instance. To ensure the input value is valid, please use <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> to get the saleable CPU range of the instance.</p>
 * @method void setDstCpu(float $DstCpu) Set <p>The number of CPU cores of the target instance. To ensure the input value is valid, please use <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> to get the saleable CPU range of the instance.</p>
 * @method integer getDstMemory() Obtain <p>Target instance memory size, measurement unit: MB. To ensure the input value is valid, please use <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> to get the saleable memory size range of the instance.</p>
 * @method void setDstMemory(integer $DstMemory) Set <p>Target instance memory size, measurement unit: MB. To ensure the input value is valid, please use <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> to get the saleable memory size range of the instance.</p>
 * @method integer getDstDisk() Obtain <p>Target instance disk size, unit: GB. To ensure the input value is valid, please use <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> to get the saleable disk size range of the instance.</p>
 * @method void setDstDisk(integer $DstDisk) Set <p>Target instance disk size, unit: GB. To ensure the input value is valid, please use <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> to get the saleable disk size range of the instance.</p>
 * @method string getDstVersion() Obtain <p>Target instance database version. Available values: 5.6, 5.7, 8.0.</p>
 * @method void setDstVersion(string $DstVersion) Set <p>Target instance database version. Available values: 5.6, 5.7, 8.0.</p>
 * @method integer getDstDeployMode() Obtain <p>Deployment model of the target instance. Defaults to 0. Supported values include: 0 - means single availability zone, 1 - means multi-availability zone.</p>
 * @method void setDstDeployMode(integer $DstDeployMode) Set <p>Deployment model of the target instance. Defaults to 0. Supported values include: 0 - means single availability zone, 1 - means multi-availability zone.</p>
 * @method integer getDstProtectMode() Obtain <p>Replication type of the target instance. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
 * @method void setDstProtectMode(integer $DstProtectMode) Set <p>Replication type of the target instance. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
 * @method integer getDstSlaveZone() Obtain <p>AZ ID of the standby instance 1 of the target instance. You can use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the availability zone ID.</p>
 * @method void setDstSlaveZone(integer $DstSlaveZone) Set <p>AZ ID of the standby instance 1 of the target instance. You can use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the availability zone ID.</p>
 * @method integer getDstBackupZone() Obtain <p>AZ ID of the standby instance 2. You can use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the AZ ID.</p>
 * @method void setDstBackupZone(integer $DstBackupZone) Set <p>AZ ID of the standby instance 2. You can use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the AZ ID.</p>
 * @method string getDstCdbType() Obtain <p>Target instance type. Supported values include: "CUSTOM" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "ONTKE" - ONTKE single-node instance, "CLOUD_NATIVE_CLUSTER" - standard type for CLOUD disk, "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - enhanced type for CLOUD disk.</p>
 * @method void setDstCdbType(string $DstCdbType) Set <p>Target instance type. Supported values include: "CUSTOM" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "ONTKE" - ONTKE single-node instance, "CLOUD_NATIVE_CLUSTER" - standard type for CLOUD disk, "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - enhanced type for CLOUD disk.</p>
 * @method integer getDstZoneId() Obtain <p>Primary availability zone ID of the target instance. You can use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the AZ ID.</p>
 * @method void setDstZoneId(integer $DstZoneId) Set <p>Primary availability zone ID of the target instance. You can use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the AZ ID.</p>
 * @method NodeDistribution getNodeDistribution() Obtain <p>Node distribution of CDB instances in the dedicated cluster.</p>
 * @method void setNodeDistribution(NodeDistribution $NodeDistribution) Set <p>Node distribution of CDB instances in the dedicated cluster.</p>
 * @method ClusterTopology getClusterTopology() Obtain <p>Topology configuration for cloud disk edition nodes. Nodeld information can be obtained through the <a href="https://www.tencentcloud.com/document/api/236/105116?from_cn_redirect=1">DescribeClusterInfo</a> API.</p>
 * @method void setClusterTopology(ClusterTopology $ClusterTopology) Set <p>Topology configuration for cloud disk edition nodes. Nodeld information can be obtained through the <a href="https://www.tencentcloud.com/document/api/236/105116?from_cn_redirect=1">DescribeClusterInfo</a> API.</p>
 * @method integer getDstFourthZone() Obtain <p>AZ ID of the standby instance 3 in the target instance. Use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the availability zone ID.</p>
 * @method void setDstFourthZone(integer $DstFourthZone) Set <p>AZ ID of the standby instance 3 in the target instance. Use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the availability zone ID.</p>
 */
class DescribeInstanceUpgradeTypeRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
     */
    public $InstanceId;

    /**
     * @var float <p>The number of CPU cores of the target instance. To ensure the input value is valid, please use <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> to get the saleable CPU range of the instance.</p>
     */
    public $DstCpu;

    /**
     * @var integer <p>Target instance memory size, measurement unit: MB. To ensure the input value is valid, please use <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> to get the saleable memory size range of the instance.</p>
     */
    public $DstMemory;

    /**
     * @var integer <p>Target instance disk size, unit: GB. To ensure the input value is valid, please use <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> to get the saleable disk size range of the instance.</p>
     */
    public $DstDisk;

    /**
     * @var string <p>Target instance database version. Available values: 5.6, 5.7, 8.0.</p>
     */
    public $DstVersion;

    /**
     * @var integer <p>Deployment model of the target instance. Defaults to 0. Supported values include: 0 - means single availability zone, 1 - means multi-availability zone.</p>
     */
    public $DstDeployMode;

    /**
     * @var integer <p>Replication type of the target instance. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
     */
    public $DstProtectMode;

    /**
     * @var integer <p>AZ ID of the standby instance 1 of the target instance. You can use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the availability zone ID.</p>
     */
    public $DstSlaveZone;

    /**
     * @var integer <p>AZ ID of the standby instance 2. You can use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the AZ ID.</p>
     */
    public $DstBackupZone;

    /**
     * @var string <p>Target instance type. Supported values include: "CUSTOM" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "ONTKE" - ONTKE single-node instance, "CLOUD_NATIVE_CLUSTER" - standard type for CLOUD disk, "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - enhanced type for CLOUD disk.</p>
     */
    public $DstCdbType;

    /**
     * @var integer <p>Primary availability zone ID of the target instance. You can use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the AZ ID.</p>
     */
    public $DstZoneId;

    /**
     * @var NodeDistribution <p>Node distribution of CDB instances in the dedicated cluster.</p>
     */
    public $NodeDistribution;

    /**
     * @var ClusterTopology <p>Topology configuration for cloud disk edition nodes. Nodeld information can be obtained through the <a href="https://www.tencentcloud.com/document/api/236/105116?from_cn_redirect=1">DescribeClusterInfo</a> API.</p>
     */
    public $ClusterTopology;

    /**
     * @var integer <p>AZ ID of the standby instance 3 in the target instance. Use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the availability zone ID.</p>
     */
    public $DstFourthZone;

    /**
     * @param string $InstanceId <p>Instance ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
     * @param float $DstCpu <p>The number of CPU cores of the target instance. To ensure the input value is valid, please use <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> to get the saleable CPU range of the instance.</p>
     * @param integer $DstMemory <p>Target instance memory size, measurement unit: MB. To ensure the input value is valid, please use <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> to get the saleable memory size range of the instance.</p>
     * @param integer $DstDisk <p>Target instance disk size, unit: GB. To ensure the input value is valid, please use <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> to get the saleable disk size range of the instance.</p>
     * @param string $DstVersion <p>Target instance database version. Available values: 5.6, 5.7, 8.0.</p>
     * @param integer $DstDeployMode <p>Deployment model of the target instance. Defaults to 0. Supported values include: 0 - means single availability zone, 1 - means multi-availability zone.</p>
     * @param integer $DstProtectMode <p>Replication type of the target instance. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
     * @param integer $DstSlaveZone <p>AZ ID of the standby instance 1 of the target instance. You can use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the availability zone ID.</p>
     * @param integer $DstBackupZone <p>AZ ID of the standby instance 2. You can use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the AZ ID.</p>
     * @param string $DstCdbType <p>Target instance type. Supported values include: "CUSTOM" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "ONTKE" - ONTKE single-node instance, "CLOUD_NATIVE_CLUSTER" - standard type for CLOUD disk, "CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - enhanced type for CLOUD disk.</p>
     * @param integer $DstZoneId <p>Primary availability zone ID of the target instance. You can use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the AZ ID.</p>
     * @param NodeDistribution $NodeDistribution <p>Node distribution of CDB instances in the dedicated cluster.</p>
     * @param ClusterTopology $ClusterTopology <p>Topology configuration for cloud disk edition nodes. Nodeld information can be obtained through the <a href="https://www.tencentcloud.com/document/api/236/105116?from_cn_redirect=1">DescribeClusterInfo</a> API.</p>
     * @param integer $DstFourthZone <p>AZ ID of the standby instance 3 in the target instance. Use the <a href="https://www.tencentcloud.com/document/product/236/80281?from_cn_redirect=1">DescribeCdbZoneConfig</a> API to obtain the availability zone ID.</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DstCpu",$param) and $param["DstCpu"] !== null) {
            $this->DstCpu = $param["DstCpu"];
        }

        if (array_key_exists("DstMemory",$param) and $param["DstMemory"] !== null) {
            $this->DstMemory = $param["DstMemory"];
        }

        if (array_key_exists("DstDisk",$param) and $param["DstDisk"] !== null) {
            $this->DstDisk = $param["DstDisk"];
        }

        if (array_key_exists("DstVersion",$param) and $param["DstVersion"] !== null) {
            $this->DstVersion = $param["DstVersion"];
        }

        if (array_key_exists("DstDeployMode",$param) and $param["DstDeployMode"] !== null) {
            $this->DstDeployMode = $param["DstDeployMode"];
        }

        if (array_key_exists("DstProtectMode",$param) and $param["DstProtectMode"] !== null) {
            $this->DstProtectMode = $param["DstProtectMode"];
        }

        if (array_key_exists("DstSlaveZone",$param) and $param["DstSlaveZone"] !== null) {
            $this->DstSlaveZone = $param["DstSlaveZone"];
        }

        if (array_key_exists("DstBackupZone",$param) and $param["DstBackupZone"] !== null) {
            $this->DstBackupZone = $param["DstBackupZone"];
        }

        if (array_key_exists("DstCdbType",$param) and $param["DstCdbType"] !== null) {
            $this->DstCdbType = $param["DstCdbType"];
        }

        if (array_key_exists("DstZoneId",$param) and $param["DstZoneId"] !== null) {
            $this->DstZoneId = $param["DstZoneId"];
        }

        if (array_key_exists("NodeDistribution",$param) and $param["NodeDistribution"] !== null) {
            $this->NodeDistribution = new NodeDistribution();
            $this->NodeDistribution->deserialize($param["NodeDistribution"]);
        }

        if (array_key_exists("ClusterTopology",$param) and $param["ClusterTopology"] !== null) {
            $this->ClusterTopology = new ClusterTopology();
            $this->ClusterTopology->deserialize($param["ClusterTopology"]);
        }

        if (array_key_exists("DstFourthZone",$param) and $param["DstFourthZone"] !== null) {
            $this->DstFourthZone = $param["DstFourthZone"];
        }
    }
}
