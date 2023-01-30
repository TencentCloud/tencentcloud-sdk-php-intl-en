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
 * SetCheckMode request structure.
 *
 * @method array getClusterIds() Obtain List of cluster IDs to be set
 * @method void setClusterIds(array $ClusterIds) Set List of cluster IDs to be set
 * @method string getClusterCheckMode() Obtain Cluster check mode. Valid values: `Cluster_Normal` (normal mode); `Cluster_Actived` (proactive mode); `Cluster_Unset` (not set).
 * @method void setClusterCheckMode(string $ClusterCheckMode) Set Cluster check mode. Valid values: `Cluster_Normal` (normal mode); `Cluster_Actived` (proactive mode); `Cluster_Unset` (not set).
 * @method integer getClusterAutoCheck() Obtain Valid values: `0` (not set); `1` (on); `2` (off).
 * @method void setClusterAutoCheck(integer $ClusterAutoCheck) Set Valid values: `0` (not set); `1` (on); `2` (off).
 */
class SetCheckModeRequest extends AbstractModel
{
    /**
     * @var array List of cluster IDs to be set
     */
    public $ClusterIds;

    /**
     * @var string Cluster check mode. Valid values: `Cluster_Normal` (normal mode); `Cluster_Actived` (proactive mode); `Cluster_Unset` (not set).
     */
    public $ClusterCheckMode;

    /**
     * @var integer Valid values: `0` (not set); `1` (on); `2` (off).
     */
    public $ClusterAutoCheck;

    /**
     * @param array $ClusterIds List of cluster IDs to be set
     * @param string $ClusterCheckMode Cluster check mode. Valid values: `Cluster_Normal` (normal mode); `Cluster_Actived` (proactive mode); `Cluster_Unset` (not set).
     * @param integer $ClusterAutoCheck Valid values: `0` (not set); `1` (on); `2` (off).
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
        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("ClusterCheckMode",$param) and $param["ClusterCheckMode"] !== null) {
            $this->ClusterCheckMode = $param["ClusterCheckMode"];
        }

        if (array_key_exists("ClusterAutoCheck",$param) and $param["ClusterAutoCheck"] !== null) {
            $this->ClusterAutoCheck = $param["ClusterAutoCheck"];
        }
    }
}
