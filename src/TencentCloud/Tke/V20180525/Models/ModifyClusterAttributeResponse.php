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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterAttribute response structure.
 *
 * @method integer getProjectId() Obtain Project of the Cluster
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(integer $ProjectId) Set Project of the Cluster
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClusterName() Obtain Cluster name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClusterName(string $ClusterName) Set Cluster name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClusterDesc() Obtain Cluster description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClusterDesc(string $ClusterDesc) Set Cluster description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClusterLevel() Obtain Cluster specification
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setClusterLevel(string $ClusterLevel) Set Cluster specification
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method AutoUpgradeClusterLevel getAutoUpgradeClusterLevel() Obtain Auto-upgrades cluster specification
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAutoUpgradeClusterLevel(AutoUpgradeClusterLevel $AutoUpgradeClusterLevel) Set Auto-upgrades cluster specification
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ModifyClusterAttributeResponse extends AbstractModel
{
    /**
     * @var integer Project of the Cluster
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Cluster name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterName;

    /**
     * @var string Cluster description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterDesc;

    /**
     * @var string Cluster specification
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClusterLevel;

    /**
     * @var AutoUpgradeClusterLevel Auto-upgrades cluster specification
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AutoUpgradeClusterLevel;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ProjectId Project of the Cluster
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterName Cluster name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterDesc Cluster description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterLevel Cluster specification
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param AutoUpgradeClusterLevel $AutoUpgradeClusterLevel Auto-upgrades cluster specification
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            $this->ClusterDesc = $param["ClusterDesc"];
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }

        if (array_key_exists("AutoUpgradeClusterLevel",$param) and $param["AutoUpgradeClusterLevel"] !== null) {
            $this->AutoUpgradeClusterLevel = new AutoUpgradeClusterLevel();
            $this->AutoUpgradeClusterLevel->deserialize($param["AutoUpgradeClusterLevel"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
