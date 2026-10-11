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
 * RayCluster
 *
 * @method string getRayClusterName() Obtain <p>RayCluster cluster name.</p>
 * @method void setRayClusterName(string $RayClusterName) Set <p>RayCluster cluster name.</p>
 * @method integer getRayClusterId() Obtain <p>RayCluster cluster ID.</p>
 * @method void setRayClusterId(integer $RayClusterId) Set <p>RayCluster cluster ID.</p>
 * @method integer getPodCount() Obtain <p>Number of Pods.</p>
 * @method void setPodCount(integer $PodCount) Set <p>Number of Pods.</p>
 * @method string getCreateTime() Obtain <p>Cluster creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Cluster creation time.</p>
 * @method integer getRedisCount() Obtain <p>Number of Redis instances.</p>
 * @method void setRedisCount(integer $RedisCount) Set <p>Number of Redis instances.</p>
 * @method integer getSubmitType() Obtain <p>Creation type.</p><p>Enumeration values:</p><ul><li>1: form creation</li><li>2: YAML creation</li></ul>
 * @method void setSubmitType(integer $SubmitType) Set <p>Creation type.</p><p>Enumeration values:</p><ul><li>1: form creation</li><li>2: YAML creation</li></ul>
 * @method string getDashboardUrl() Obtain <p>Head access address, which is also the dashboard address.</p>
 * @method void setDashboardUrl(string $DashboardUrl) Set <p>Head access address, which is also the dashboard address.</p>
 * @method string getNamespace() Obtain <p>Namespace.</p>
 * @method void setNamespace(string $Namespace) Set <p>Namespace.</p>
 * @method integer getStorageCount() Obtain <p>Number of volumes mounted by the RayCluster.</p>
 * @method void setStorageCount(integer $StorageCount) Set <p>Number of volumes mounted by the RayCluster.</p>
 */
class RayCluster extends AbstractModel
{
    /**
     * @var string <p>RayCluster cluster name.</p>
     */
    public $RayClusterName;

    /**
     * @var integer <p>RayCluster cluster ID.</p>
     */
    public $RayClusterId;

    /**
     * @var integer <p>Number of Pods.</p>
     */
    public $PodCount;

    /**
     * @var string <p>Cluster creation time.</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Number of Redis instances.</p>
     */
    public $RedisCount;

    /**
     * @var integer <p>Creation type.</p><p>Enumeration values:</p><ul><li>1: form creation</li><li>2: YAML creation</li></ul>
     */
    public $SubmitType;

    /**
     * @var string <p>Head access address, which is also the dashboard address.</p>
     */
    public $DashboardUrl;

    /**
     * @var string <p>Namespace.</p>
     */
    public $Namespace;

    /**
     * @var integer <p>Number of volumes mounted by the RayCluster.</p>
     */
    public $StorageCount;

    /**
     * @param string $RayClusterName <p>RayCluster cluster name.</p>
     * @param integer $RayClusterId <p>RayCluster cluster ID.</p>
     * @param integer $PodCount <p>Number of Pods.</p>
     * @param string $CreateTime <p>Cluster creation time.</p>
     * @param integer $RedisCount <p>Number of Redis instances.</p>
     * @param integer $SubmitType <p>Creation type.</p><p>Enumeration values:</p><ul><li>1: form creation</li><li>2: YAML creation</li></ul>
     * @param string $DashboardUrl <p>Head access address, which is also the dashboard address.</p>
     * @param string $Namespace <p>Namespace.</p>
     * @param integer $StorageCount <p>Number of volumes mounted by the RayCluster.</p>
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
        if (array_key_exists("RayClusterName",$param) and $param["RayClusterName"] !== null) {
            $this->RayClusterName = $param["RayClusterName"];
        }

        if (array_key_exists("RayClusterId",$param) and $param["RayClusterId"] !== null) {
            $this->RayClusterId = $param["RayClusterId"];
        }

        if (array_key_exists("PodCount",$param) and $param["PodCount"] !== null) {
            $this->PodCount = $param["PodCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RedisCount",$param) and $param["RedisCount"] !== null) {
            $this->RedisCount = $param["RedisCount"];
        }

        if (array_key_exists("SubmitType",$param) and $param["SubmitType"] !== null) {
            $this->SubmitType = $param["SubmitType"];
        }

        if (array_key_exists("DashboardUrl",$param) and $param["DashboardUrl"] !== null) {
            $this->DashboardUrl = $param["DashboardUrl"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("StorageCount",$param) and $param["StorageCount"] !== null) {
            $this->StorageCount = $param["StorageCount"];
        }
    }
}
