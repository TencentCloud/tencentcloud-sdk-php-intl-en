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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Workload details
 *
 * @method string getClusterId() Obtain The resource ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set The resource ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getVersionName() Obtain Version name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setVersionName(string $VersionName) Set Version name
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getReadyReplicas() Obtain Number of ready replicas
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setReadyReplicas(integer $ReadyReplicas) Set Number of ready replicas
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getReplicas() Obtain Number of replicas
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setReplicas(integer $Replicas) Set Number of replicas
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getUpdatedReplicas() Obtain Number of updated replicas
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setUpdatedReplicas(integer $UpdatedReplicas) Set Number of updated replicas
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getUpdatedReadyReplicas() Obtain Number of replicas ready for update
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setUpdatedReadyReplicas(integer $UpdatedReadyReplicas) Set Number of replicas ready for update
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getUpdateRevision() Obtain ## Version Updates
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setUpdateRevision(string $UpdateRevision) Set ## Version Updates
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getCurrentRevision() Obtain Current Version
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setCurrentRevision(string $CurrentRevision) Set Current Version
Note: This field may return `null`, indicating that no valid value was found.
 */
class WorkloadInfo extends AbstractModel
{
    /**
     * @var string The resource ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var string Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var string Version name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $VersionName;

    /**
     * @var integer Number of ready replicas
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ReadyReplicas;

    /**
     * @var integer Number of replicas
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Replicas;

    /**
     * @var integer Number of updated replicas
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $UpdatedReplicas;

    /**
     * @var integer Number of replicas ready for update
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $UpdatedReadyReplicas;

    /**
     * @var string ## Version Updates
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $UpdateRevision;

    /**
     * @var string Current Version
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $CurrentRevision;

    /**
     * @param string $ClusterId The resource ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ApplicationName Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $VersionName Version name
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $ReadyReplicas Number of ready replicas
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Replicas Number of replicas
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $UpdatedReplicas Number of updated replicas
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $UpdatedReadyReplicas Number of replicas ready for update
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $UpdateRevision ## Version Updates
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $CurrentRevision Current Version
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("ReadyReplicas",$param) and $param["ReadyReplicas"] !== null) {
            $this->ReadyReplicas = $param["ReadyReplicas"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("UpdatedReplicas",$param) and $param["UpdatedReplicas"] !== null) {
            $this->UpdatedReplicas = $param["UpdatedReplicas"];
        }

        if (array_key_exists("UpdatedReadyReplicas",$param) and $param["UpdatedReadyReplicas"] !== null) {
            $this->UpdatedReadyReplicas = $param["UpdatedReadyReplicas"];
        }

        if (array_key_exists("UpdateRevision",$param) and $param["UpdateRevision"] !== null) {
            $this->UpdateRevision = $param["UpdateRevision"];
        }

        if (array_key_exists("CurrentRevision",$param) and $param["CurrentRevision"] !== null) {
            $this->CurrentRevision = $param["CurrentRevision"];
        }
    }
}
