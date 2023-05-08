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
 * Compute environment information
 *
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
 * @method string getResourceType() Obtain Compute environment resource type. Values: `CVM`, `CPM` (Bare Metal)
 * @method void setResourceType(string $ResourceType) Set Compute environment resource type. Values: `CVM`, `CPM` (Bare Metal)
 * @method string getNextAction() Obtain Next action
 * @method void setNextAction(string $NextAction) Set Next action
 * @method integer getAttachedComputeNodeCount() Obtain Number of compute nodes added to the compute environment
 * @method void setAttachedComputeNodeCount(integer $AttachedComputeNodeCount) Set Number of compute nodes added to the compute environment
 * @method array getTags() Obtain Tag list bound to the compute environment.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTags(array $Tags) Set Tag list bound to the compute environment.
Note: This field may return `null`, indicating that no valid value was found.
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
     * @var string Compute environment resource type. Values: `CVM`, `CPM` (Bare Metal)
     */
    public $ResourceType;

    /**
     * @var string Next action
     */
    public $NextAction;

    /**
     * @var integer Number of compute nodes added to the compute environment
     */
    public $AttachedComputeNodeCount;

    /**
     * @var array Tag list bound to the compute environment.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Tags;

    /**
     * @param string $EnvId Compute environment ID
     * @param string $EnvName Compute environment name
     * @param Placement $Placement Location information
     * @param string $CreateTime Creation time
     * @param ComputeNodeMetrics $ComputeNodeMetrics Compute node statistical metrics
     * @param string $EnvType Compute environment type
     * @param integer $DesiredComputeNodeCount Number of desired compute nodes
     * @param string $ResourceType Compute environment resource type. Values: `CVM`, `CPM` (Bare Metal)
     * @param string $NextAction Next action
     * @param integer $AttachedComputeNodeCount Number of compute nodes added to the compute environment
     * @param array $Tags Tag list bound to the compute environment.
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("NextAction",$param) and $param["NextAction"] !== null) {
            $this->NextAction = $param["NextAction"];
        }

        if (array_key_exists("AttachedComputeNodeCount",$param) and $param["AttachedComputeNodeCount"] !== null) {
            $this->AttachedComputeNodeCount = $param["AttachedComputeNodeCount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
