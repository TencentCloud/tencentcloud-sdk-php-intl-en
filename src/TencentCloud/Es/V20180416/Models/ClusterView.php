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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster dimension view data
 *
 * @method float getHealth() Obtain Cluster health status
 * @method void setHealth(float $Health) Set Cluster health status
 * @method float getVisible() Obtain Whether the cluster is visible
 * @method void setVisible(float $Visible) Set Whether the cluster is visible
 * @method float getBreak() Obtain Whether to fuse the cluster
 * @method void setBreak(float $Break) Set Whether to fuse the cluster
 * @method float getAvgDiskUsage() Obtain Average Disk Usage
 * @method void setAvgDiskUsage(float $AvgDiskUsage) Set Average Disk Usage
 * @method float getAvgMemUsage() Obtain Average memory utilization
 * @method void setAvgMemUsage(float $AvgMemUsage) Set Average memory utilization
 * @method float getAvgCpuUsage() Obtain Average CPU Usage
 * @method void setAvgCpuUsage(float $AvgCpuUsage) Set Average CPU Usage
 * @method integer getTotalDiskSize() Obtain Total storage size of a cluster.
 * @method void setTotalDiskSize(integer $TotalDiskSize) Set Total storage size of a cluster.
 * @method array getTargetNodeTypes() Obtain Client request node
 * @method void setTargetNodeTypes(array $TargetNodeTypes) Set Client request node
 * @method integer getNodeNum() Obtain Number of online nodes
 * @method void setNodeNum(integer $NodeNum) Set Number of online nodes
 * @method integer getTotalNodeNum() Obtain Total number of nodes
 * @method void setTotalNodeNum(integer $TotalNodeNum) Set Total number of nodes
 * @method integer getDataNodeNum() Obtain Number of Data Nodes
 * @method void setDataNodeNum(integer $DataNodeNum) Set Number of Data Nodes
 * @method integer getIndexNum() Obtain Index count
 * @method void setIndexNum(integer $IndexNum) Set Index count
 * @method integer getDocNum() Obtain Number of documents
 * @method void setDocNum(integer $DocNum) Set Number of documents
 * @method integer getDiskUsedInBytes() Obtain Used bytes of the disk
 * @method void setDiskUsedInBytes(integer $DiskUsedInBytes) Set Used bytes of the disk
 * @method integer getShardNum() Obtain Number of shards
 * @method void setShardNum(integer $ShardNum) Set Number of shards
 * @method integer getPrimaryShardNum() Obtain Number of primary shards
 * @method void setPrimaryShardNum(integer $PrimaryShardNum) Set Number of primary shards
 * @method integer getRelocatingShardNum() Obtain Number of migrating shards
 * @method void setRelocatingShardNum(integer $RelocatingShardNum) Set Number of migrating shards
 * @method integer getInitializingShardNum() Obtain Number of initializing shards.
 * @method void setInitializingShardNum(integer $InitializingShardNum) Set Number of initializing shards.
 * @method integer getUnassignedShardNum() Obtain Number of unassigned shards
 * @method void setUnassignedShardNum(integer $UnassignedShardNum) Set Number of unassigned shards
 * @method integer getTotalCosStorage() Obtain Enterprise Edition COS storage capacity size in GB
 * @method void setTotalCosStorage(integer $TotalCosStorage) Set Enterprise Edition COS storage capacity size in GB
 * @method string getSearchableSnapshotCosBucket() Obtain bucket name for storing cos searchable snapshots in the Enterprise Edition cluster
 * @method void setSearchableSnapshotCosBucket(string $SearchableSnapshotCosBucket) Set bucket name for storing cos searchable snapshots in the Enterprise Edition cluster
 * @method string getSearchableSnapshotCosAppId() Obtain App ID of the cos bucket for searchable snapshots in the Enterprise Edition cluster
 * @method void setSearchableSnapshotCosAppId(string $SearchableSnapshotCosAppId) Set App ID of the cos bucket for searchable snapshots in the Enterprise Edition cluster
 */
class ClusterView extends AbstractModel
{
    /**
     * @var float Cluster health status
     */
    public $Health;

    /**
     * @var float Whether the cluster is visible
     */
    public $Visible;

    /**
     * @var float Whether to fuse the cluster
     */
    public $Break;

    /**
     * @var float Average Disk Usage
     */
    public $AvgDiskUsage;

    /**
     * @var float Average memory utilization
     */
    public $AvgMemUsage;

    /**
     * @var float Average CPU Usage
     */
    public $AvgCpuUsage;

    /**
     * @var integer Total storage size of a cluster.
     */
    public $TotalDiskSize;

    /**
     * @var array Client request node
     */
    public $TargetNodeTypes;

    /**
     * @var integer Number of online nodes
     */
    public $NodeNum;

    /**
     * @var integer Total number of nodes
     */
    public $TotalNodeNum;

    /**
     * @var integer Number of Data Nodes
     */
    public $DataNodeNum;

    /**
     * @var integer Index count
     */
    public $IndexNum;

    /**
     * @var integer Number of documents
     */
    public $DocNum;

    /**
     * @var integer Used bytes of the disk
     */
    public $DiskUsedInBytes;

    /**
     * @var integer Number of shards
     */
    public $ShardNum;

    /**
     * @var integer Number of primary shards
     */
    public $PrimaryShardNum;

    /**
     * @var integer Number of migrating shards
     */
    public $RelocatingShardNum;

    /**
     * @var integer Number of initializing shards.
     */
    public $InitializingShardNum;

    /**
     * @var integer Number of unassigned shards
     */
    public $UnassignedShardNum;

    /**
     * @var integer Enterprise Edition COS storage capacity size in GB
     */
    public $TotalCosStorage;

    /**
     * @var string bucket name for storing cos searchable snapshots in the Enterprise Edition cluster
     */
    public $SearchableSnapshotCosBucket;

    /**
     * @var string App ID of the cos bucket for searchable snapshots in the Enterprise Edition cluster
     */
    public $SearchableSnapshotCosAppId;

    /**
     * @param float $Health Cluster health status
     * @param float $Visible Whether the cluster is visible
     * @param float $Break Whether to fuse the cluster
     * @param float $AvgDiskUsage Average Disk Usage
     * @param float $AvgMemUsage Average memory utilization
     * @param float $AvgCpuUsage Average CPU Usage
     * @param integer $TotalDiskSize Total storage size of a cluster.
     * @param array $TargetNodeTypes Client request node
     * @param integer $NodeNum Number of online nodes
     * @param integer $TotalNodeNum Total number of nodes
     * @param integer $DataNodeNum Number of Data Nodes
     * @param integer $IndexNum Index count
     * @param integer $DocNum Number of documents
     * @param integer $DiskUsedInBytes Used bytes of the disk
     * @param integer $ShardNum Number of shards
     * @param integer $PrimaryShardNum Number of primary shards
     * @param integer $RelocatingShardNum Number of migrating shards
     * @param integer $InitializingShardNum Number of initializing shards.
     * @param integer $UnassignedShardNum Number of unassigned shards
     * @param integer $TotalCosStorage Enterprise Edition COS storage capacity size in GB
     * @param string $SearchableSnapshotCosBucket bucket name for storing cos searchable snapshots in the Enterprise Edition cluster
     * @param string $SearchableSnapshotCosAppId App ID of the cos bucket for searchable snapshots in the Enterprise Edition cluster
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
        if (array_key_exists("Health",$param) and $param["Health"] !== null) {
            $this->Health = $param["Health"];
        }

        if (array_key_exists("Visible",$param) and $param["Visible"] !== null) {
            $this->Visible = $param["Visible"];
        }

        if (array_key_exists("Break",$param) and $param["Break"] !== null) {
            $this->Break = $param["Break"];
        }

        if (array_key_exists("AvgDiskUsage",$param) and $param["AvgDiskUsage"] !== null) {
            $this->AvgDiskUsage = $param["AvgDiskUsage"];
        }

        if (array_key_exists("AvgMemUsage",$param) and $param["AvgMemUsage"] !== null) {
            $this->AvgMemUsage = $param["AvgMemUsage"];
        }

        if (array_key_exists("AvgCpuUsage",$param) and $param["AvgCpuUsage"] !== null) {
            $this->AvgCpuUsage = $param["AvgCpuUsage"];
        }

        if (array_key_exists("TotalDiskSize",$param) and $param["TotalDiskSize"] !== null) {
            $this->TotalDiskSize = $param["TotalDiskSize"];
        }

        if (array_key_exists("TargetNodeTypes",$param) and $param["TargetNodeTypes"] !== null) {
            $this->TargetNodeTypes = $param["TargetNodeTypes"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("TotalNodeNum",$param) and $param["TotalNodeNum"] !== null) {
            $this->TotalNodeNum = $param["TotalNodeNum"];
        }

        if (array_key_exists("DataNodeNum",$param) and $param["DataNodeNum"] !== null) {
            $this->DataNodeNum = $param["DataNodeNum"];
        }

        if (array_key_exists("IndexNum",$param) and $param["IndexNum"] !== null) {
            $this->IndexNum = $param["IndexNum"];
        }

        if (array_key_exists("DocNum",$param) and $param["DocNum"] !== null) {
            $this->DocNum = $param["DocNum"];
        }

        if (array_key_exists("DiskUsedInBytes",$param) and $param["DiskUsedInBytes"] !== null) {
            $this->DiskUsedInBytes = $param["DiskUsedInBytes"];
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("PrimaryShardNum",$param) and $param["PrimaryShardNum"] !== null) {
            $this->PrimaryShardNum = $param["PrimaryShardNum"];
        }

        if (array_key_exists("RelocatingShardNum",$param) and $param["RelocatingShardNum"] !== null) {
            $this->RelocatingShardNum = $param["RelocatingShardNum"];
        }

        if (array_key_exists("InitializingShardNum",$param) and $param["InitializingShardNum"] !== null) {
            $this->InitializingShardNum = $param["InitializingShardNum"];
        }

        if (array_key_exists("UnassignedShardNum",$param) and $param["UnassignedShardNum"] !== null) {
            $this->UnassignedShardNum = $param["UnassignedShardNum"];
        }

        if (array_key_exists("TotalCosStorage",$param) and $param["TotalCosStorage"] !== null) {
            $this->TotalCosStorage = $param["TotalCosStorage"];
        }

        if (array_key_exists("SearchableSnapshotCosBucket",$param) and $param["SearchableSnapshotCosBucket"] !== null) {
            $this->SearchableSnapshotCosBucket = $param["SearchableSnapshotCosBucket"];
        }

        if (array_key_exists("SearchableSnapshotCosAppId",$param) and $param["SearchableSnapshotCosAppId"] !== null) {
            $this->SearchableSnapshotCosAppId = $param["SearchableSnapshotCosAppId"];
        }
    }
}
