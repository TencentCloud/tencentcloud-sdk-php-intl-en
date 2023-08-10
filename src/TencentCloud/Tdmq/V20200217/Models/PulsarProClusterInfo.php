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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDMQ for Pulsar pro cluster information
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getRemark() Obtain Description
 * @method void setRemark(string $Remark) Set Description
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getStatus() Obtain Cluster status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated).
 * @method void setStatus(integer $Status) Set Cluster status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated).
 * @method string getVersion() Obtain Cluster version
 * @method void setVersion(string $Version) Set Cluster version
 * @method array getNodeDistribution() Obtain Node distribution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeDistribution(array $NodeDistribution) Set Node distribution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxStorage() Obtain Max storage capacity in MB
 * @method void setMaxStorage(integer $MaxStorage) Set Max storage capacity in MB
 * @method boolean getCanEditRoute() Obtain Whether the route can be modified
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setCanEditRoute(boolean $CanEditRoute) Set Whether the route can be modified
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 */
class PulsarProClusterInfo extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Description
     */
    public $Remark;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Cluster status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated).
     */
    public $Status;

    /**
     * @var string Cluster version
     */
    public $Version;

    /**
     * @var array Node distribution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeDistribution;

    /**
     * @var integer Max storage capacity in MB
     */
    public $MaxStorage;

    /**
     * @var boolean Whether the route can be modified
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $CanEditRoute;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $Remark Description
     * @param string $CreateTime Creation time
     * @param integer $Status Cluster status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated).
     * @param string $Version Cluster version
     * @param array $NodeDistribution Node distribution
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxStorage Max storage capacity in MB
     * @param boolean $CanEditRoute Whether the route can be modified
Note: u200dThis field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("NodeDistribution",$param) and $param["NodeDistribution"] !== null) {
            $this->NodeDistribution = [];
            foreach ($param["NodeDistribution"] as $key => $value){
                $obj = new InstanceNodeDistribution();
                $obj->deserialize($value);
                array_push($this->NodeDistribution, $obj);
            }
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("CanEditRoute",$param) and $param["CanEditRoute"] !== null) {
            $this->CanEditRoute = $param["CanEditRoute"];
        }
    }
}
