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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster view data
 *
 * @method float getHealth() Obtain Cluster health status
 * @method void setHealth(float $Health) Set Cluster health status
 * @method float getVisible() Obtain Whether the cluster is visible
 * @method void setVisible(float $Visible) Set Whether the cluster is visible
 * @method float getBreak() Obtain Whether the cluster encounters circuit breaking
 * @method void setBreak(float $Break) Set Whether the cluster encounters circuit breaking
 * @method float getAvgDiskUsage() Obtain Average disk usage
 * @method void setAvgDiskUsage(float $AvgDiskUsage) Set Average disk usage
 * @method float getAvgMemUsage() Obtain Average memory usage
 * @method void setAvgMemUsage(float $AvgMemUsage) Set Average memory usage
 * @method float getAvgCpuUsage() Obtain Average CPU usage
 * @method void setAvgCpuUsage(float $AvgCpuUsage) Set Average CPU usage
 * @method integer getTotalDiskSize() Obtain Total disk size of the cluster
 * @method void setTotalDiskSize(integer $TotalDiskSize) Set Total disk size of the cluster
 * @method array getTargetNodeTypes() Obtain Types of nodes to receive client requests
 * @method void setTargetNodeTypes(array $TargetNodeTypes) Set Types of nodes to receive client requests
 * @method integer getNodeNum() Obtain Number of online nodes
 * @method void setNodeNum(integer $NodeNum) Set Number of online nodes
 * @method integer getTotalNodeNum() Obtain Total number of nodes
 * @method void setTotalNodeNum(integer $TotalNodeNum) Set Total number of nodes
 * @method integer getDataNodeNum() Obtain Number of data nodes
 * @method void setDataNodeNum(integer $DataNodeNum) Set Number of data nodes
 * @method integer getIndexNum() Obtain Number of indices
 * @method void setIndexNum(integer $IndexNum) Set Number of indices
 * @method integer getDocNum() Obtain Number of documents
 * @method void setDocNum(integer $DocNum) Set Number of documents
 * @method integer getDiskUsedInBytes() Obtain Used disk size (in bytes)
 * @method void setDiskUsedInBytes(integer $DiskUsedInBytes) Set Used disk size (in bytes)
 * @method integer getShardNum() Obtain Number of shards
 * @method void setShardNum(integer $ShardNum) Set Number of shards
 * @method integer getPrimaryShardNum() Obtain Number of primary shards
 * @method void setPrimaryShardNum(integer $PrimaryShardNum) Set Number of primary shards
 * @method integer getRelocatingShardNum() Obtain Number of relocating shards
 * @method void setRelocatingShardNum(integer $RelocatingShardNum) Set Number of relocating shards
 * @method integer getInitializingShardNum() Obtain Number of initializing shards
 * @method void setInitializingShardNum(integer $InitializingShardNum) Set Number of initializing shards
 * @method integer getUnassignedShardNum() Obtain Number of unassigned shards
 * @method void setUnassignedShardNum(integer $UnassignedShardNum) Set Number of unassigned shards
 * @method integer getTotalCosStorage() Obtain Total COS storage of an enterprise cluster, in GB
 * @method void setTotalCosStorage(integer $TotalCosStorage) Set Total COS storage of an enterprise cluster, in GB
 * @method string getSearchableSnapshotCosBucket() Obtain Name of the COS bucket that stores searchable snapshots of an enterprise cluster
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSearchableSnapshotCosBucket(string $SearchableSnapshotCosBucket) Set Name of the COS bucket that stores searchable snapshots of an enterprise cluster
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getSearchableSnapshotCosAppId() Obtain COS app ID of the searchable snapshots of an enterprise cluster
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSearchableSnapshotCosAppId(string $SearchableSnapshotCosAppId) Set COS app ID of the searchable snapshots of an enterprise cluster
Note: This field may return `null`, indicating that no valid value was found.
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
     * @var float Whether the cluster encounters circuit breaking
     */
    public $Break;

    /**
     * @var float Average disk usage
     */
    public $AvgDiskUsage;

    /**
     * @var float Average memory usage
     */
    public $AvgMemUsage;

    /**
     * @var float Average CPU usage
     */
    public $AvgCpuUsage;

    /**
     * @var integer Total disk size of the cluster
     */
    public $TotalDiskSize;

    /**
     * @var array Types of nodes to receive client requests
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
     * @var integer Number of data nodes
     */
    public $DataNodeNum;

    /**
     * @var integer Number of indices
     */
    public $IndexNum;

    /**
     * @var integer Number of documents
     */
    public $DocNum;

    /**
     * @var integer Used disk size (in bytes)
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
     * @var integer Number of relocating shards
     */
    public $RelocatingShardNum;

    /**
     * @var integer Number of initializing shards
     */
    public $InitializingShardNum;

    /**
     * @var integer Number of unassigned shards
     */
    public $UnassignedShardNum;

    /**
     * @var integer Total COS storage of an enterprise cluster, in GB
     */
    public $TotalCosStorage;

    /**
     * @var string Name of the COS bucket that stores searchable snapshots of an enterprise cluster
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $SearchableSnapshotCosBucket;

    /**
     * @var string COS app ID of the searchable snapshots of an enterprise cluster
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $SearchableSnapshotCosAppId;

    /**
     * @param float $Health Cluster health status
     * @param float $Visible Whether the cluster is visible
     * @param float $Break Whether the cluster encounters circuit breaking
     * @param float $AvgDiskUsage Average disk usage
     * @param float $AvgMemUsage Average memory usage
     * @param float $AvgCpuUsage Average CPU usage
     * @param integer $TotalDiskSize Total disk size of the cluster
     * @param array $TargetNodeTypes Types of nodes to receive client requests
     * @param integer $NodeNum Number of online nodes
     * @param integer $TotalNodeNum Total number of nodes
     * @param integer $DataNodeNum Number of data nodes
     * @param integer $IndexNum Number of indices
     * @param integer $DocNum Number of documents
     * @param integer $DiskUsedInBytes Used disk size (in bytes)
     * @param integer $ShardNum Number of shards
     * @param integer $PrimaryShardNum Number of primary shards
     * @param integer $RelocatingShardNum Number of relocating shards
     * @param integer $InitializingShardNum Number of initializing shards
     * @param integer $UnassignedShardNum Number of unassigned shards
     * @param integer $TotalCosStorage Total COS storage of an enterprise cluster, in GB
     * @param string $SearchableSnapshotCosBucket Name of the COS bucket that stores searchable snapshots of an enterprise cluster
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $SearchableSnapshotCosAppId COS app ID of the searchable snapshots of an enterprise cluster
Note: This field may return `null`, indicating that no valid value was found.
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
