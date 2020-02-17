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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getEnvId() Obtain Compute environment ID
 * @method void setEnvId(string $EnvId) Set Compute environment ID
 * @method string getEnvName() Obtain Compute environment name
 * @method void setEnvName(string $EnvName) Set Compute environment name
 * @method Placement getPlacement() Obtain Location information
 * @method void setPlacement(Placement $Placement) Set Location information
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method ComputeNodeMetrics getComputeNodeMetrics() Obtain Compute node statistical metrics
 * @method void setComputeNodeMetrics(ComputeNodeMetrics $ComputeNodeMetrics) Set Compute node statistical metrics
 * @method string getEnvType() Obtain Compute environment type
 * @method void setEnvType(string $EnvType) Set Compute environment type
 * @method integer getDesiredComputeNodeCount() Obtain Number of desired compute nodes
 * @method void setDesiredComputeNodeCount(integer $DesiredComputeNodeCount) Set Number of desired compute nodes
 */

/**
 *Compute environment information
 */
class ComputeEnvView extends AbstractModel
{
    /**
     * @var string Compute environment ID
     */
    public $EnvId;

    /**
     * @var string Compute environment name
     */
    public $EnvName;

    /**
     * @var Placement Location information
     */
    public $Placement;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var ComputeNodeMetrics Compute node statistical metrics
     */
    public $ComputeNodeMetrics;

    /**
     * @var string Compute environment type
     */
    public $EnvType;

    /**
     * @var integer Number of desired compute nodes
     */
    public $DesiredComputeNodeCount;
    /**
     * @param string $EnvId Compute environment ID
     * @param string $EnvName Compute environment name
     * @param Placement $Placement Location information
     * @param string $CreateTime Creation time
     * @param ComputeNodeMetrics $ComputeNodeMetrics Compute node statistical metrics
     * @param string $EnvType Compute environment type
     * @param integer $DesiredComputeNodeCount Number of desired compute nodes
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("EnvName",$param) and $param["EnvName"] !== null) {
            $this->EnvName = $param["EnvName"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ComputeNodeMetrics",$param) and $param["ComputeNodeMetrics"] !== null) {
            $this->ComputeNodeMetrics = new ComputeNodeMetrics();
            $this->ComputeNodeMetrics->deserialize($param["ComputeNodeMetrics"]);
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("DesiredComputeNodeCount",$param) and $param["DesiredComputeNodeCount"] !== null) {
            $this->DesiredComputeNodeCount = $param["DesiredComputeNodeCount"];
        }
    }
}
