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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sync target of the TMP template
 *
 * @method string getRegion() Obtain Target region
 * @method void setRegion(string $Region) Set Target region
 * @method string getInstanceId() Obtain Target instance
 * @method void setInstanceId(string $InstanceId) Set Target instance
 * @method string getClusterId() Obtain Cluster ID, which is required only if the `Level` of the collection template is `cluster`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set Cluster ID, which is required only if the `Level` of the collection template is `cluster`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSyncTime() Obtain Last sync time, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSyncTime(string $SyncTime) Set Last sync time, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain The currently used template version, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set The currently used template version, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterType() Obtain Cluster type, which is required only if the `Level` of the collection template is `cluster`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterType(string $ClusterType) Set Cluster type, which is required only if the `Level` of the collection template is `cluster`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Instance name, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance name, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterName() Obtain Cluster name, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterName(string $ClusterName) Set Cluster name, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusTemplateSyncTarget extends AbstractModel
{
    /**
     * @var string Target region
     */
    public $Region;

    /**
     * @var string Target instance
     */
    public $InstanceId;

    /**
     * @var string Cluster ID, which is required only if the `Level` of the collection template is `cluster`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var string Last sync time, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SyncTime;

    /**
     * @var string The currently used template version, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var string Cluster type, which is required only if the `Level` of the collection template is `cluster`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterType;

    /**
     * @var string Instance name, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Cluster name, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterName;

    /**
     * @param string $Region Target region
     * @param string $InstanceId Target instance
     * @param string $ClusterId Cluster ID, which is required only if the `Level` of the collection template is `cluster`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SyncTime Last sync time, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Version The currently used template version, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterType Cluster type, which is required only if the `Level` of the collection template is `cluster`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Instance name, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterName Cluster name, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SyncTime",$param) and $param["SyncTime"] !== null) {
            $this->SyncTime = $param["SyncTime"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
