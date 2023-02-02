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
 * UpgradeClusterInstances request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getOperation() Obtain create: starting an upgrade task
pause: pausing the task
resume: continuing the task
abort: stopping the task
 * @method void setOperation(string $Operation) Set create: starting an upgrade task
pause: pausing the task
resume: continuing the task
abort: stopping the task
 * @method string getUpgradeType() Obtain Upgrade type. It’s only required when `Operation` is set as `create`.
reset: the reinstallation and upgrade of major version
hot: the hot upgrade of minor version
major: in-place upgrade of major version
 * @method void setUpgradeType(string $UpgradeType) Set Upgrade type. It’s only required when `Operation` is set as `create`.
reset: the reinstallation and upgrade of major version
hot: the hot upgrade of minor version
major: in-place upgrade of major version
 * @method array getInstanceIds() Obtain List of nodes that need to upgrade
 * @method void setInstanceIds(array $InstanceIds) Set List of nodes that need to upgrade
 * @method UpgradeNodeResetParam getResetParam() Obtain This parameter is used when the node joins the cluster again. Refer to the API of creating one or more cluster nodes.
 * @method void setResetParam(UpgradeNodeResetParam $ResetParam) Set This parameter is used when the node joins the cluster again. Refer to the API of creating one or more cluster nodes.
 * @method boolean getSkipPreCheck() Obtain Whether to skip the pre-upgrade check of the node
 * @method void setSkipPreCheck(boolean $SkipPreCheck) Set Whether to skip the pre-upgrade check of the node
 * @method float getMaxNotReadyPercent() Obtain The maximum tolerable proportion of unavailable pods
 * @method void setMaxNotReadyPercent(float $MaxNotReadyPercent) Set The maximum tolerable proportion of unavailable pods
 * @method boolean getUpgradeRunTime() Obtain Whether to upgrade node runtime. Values: `true`, `false` (default).
 * @method void setUpgradeRunTime(boolean $UpgradeRunTime) Set Whether to upgrade node runtime. Values: `true`, `false` (default).
 */
class UpgradeClusterInstancesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string create: starting an upgrade task
pause: pausing the task
resume: continuing the task
abort: stopping the task
     */
    public $Operation;

    /**
     * @var string Upgrade type. It’s only required when `Operation` is set as `create`.
reset: the reinstallation and upgrade of major version
hot: the hot upgrade of minor version
major: in-place upgrade of major version
     */
    public $UpgradeType;

    /**
     * @var array List of nodes that need to upgrade
     */
    public $InstanceIds;

    /**
     * @var UpgradeNodeResetParam This parameter is used when the node joins the cluster again. Refer to the API of creating one or more cluster nodes.
     */
    public $ResetParam;

    /**
     * @var boolean Whether to skip the pre-upgrade check of the node
     */
    public $SkipPreCheck;

    /**
     * @var float The maximum tolerable proportion of unavailable pods
     */
    public $MaxNotReadyPercent;

    /**
     * @var boolean Whether to upgrade node runtime. Values: `true`, `false` (default).
     */
    public $UpgradeRunTime;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $Operation create: starting an upgrade task
pause: pausing the task
resume: continuing the task
abort: stopping the task
     * @param string $UpgradeType Upgrade type. It’s only required when `Operation` is set as `create`.
reset: the reinstallation and upgrade of major version
hot: the hot upgrade of minor version
major: in-place upgrade of major version
     * @param array $InstanceIds List of nodes that need to upgrade
     * @param UpgradeNodeResetParam $ResetParam This parameter is used when the node joins the cluster again. Refer to the API of creating one or more cluster nodes.
     * @param boolean $SkipPreCheck Whether to skip the pre-upgrade check of the node
     * @param float $MaxNotReadyPercent The maximum tolerable proportion of unavailable pods
     * @param boolean $UpgradeRunTime Whether to upgrade node runtime. Values: `true`, `false` (default).
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ResetParam",$param) and $param["ResetParam"] !== null) {
            $this->ResetParam = new UpgradeNodeResetParam();
            $this->ResetParam->deserialize($param["ResetParam"]);
        }

        if (array_key_exists("SkipPreCheck",$param) and $param["SkipPreCheck"] !== null) {
            $this->SkipPreCheck = $param["SkipPreCheck"];
        }

        if (array_key_exists("MaxNotReadyPercent",$param) and $param["MaxNotReadyPercent"] !== null) {
            $this->MaxNotReadyPercent = $param["MaxNotReadyPercent"];
        }

        if (array_key_exists("UpgradeRunTime",$param) and $param["UpgradeRunTime"] !== null) {
            $this->UpgradeRunTime = $param["UpgradeRunTime"];
        }
    }
}
