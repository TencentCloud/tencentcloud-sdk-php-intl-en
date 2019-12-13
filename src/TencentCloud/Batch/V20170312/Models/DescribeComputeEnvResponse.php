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
 * @method string getEnvId() 获取Compute environment ID
 * @method void setEnvId(string $EnvId) 设置Compute environment ID
 * @method string getEnvName() 获取Compute environment name
 * @method void setEnvName(string $EnvName) 设置Compute environment name
 * @method Placement getPlacement() 获取Location information
 * @method void setPlacement(Placement $Placement) 设置Location information
 * @method string getCreateTime() 获取Compute environment creation time
 * @method void setCreateTime(string $CreateTime) 设置Compute environment creation time
 * @method array getComputeNodeSet() 获取List of compute nodes
 * @method void setComputeNodeSet(array $ComputeNodeSet) 设置List of compute nodes
 * @method ComputeNodeMetrics getComputeNodeMetrics() 获取Compute node statistical metrics
 * @method void setComputeNodeMetrics(ComputeNodeMetrics $ComputeNodeMetrics) 设置Compute node statistical metrics
 * @method integer getDesiredComputeNodeCount() 获取Number of desired compute nodes
 * @method void setDesiredComputeNodeCount(integer $DesiredComputeNodeCount) 设置Number of desired compute nodes
 * @method string getEnvType() 获取Compute environment type
 * @method void setEnvType(string $EnvType) 设置Compute environment type
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeComputeEnv response structure.
 */
class DescribeComputeEnvResponse extends AbstractModel
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
     * @var string Compute environment creation time
     */
    public $CreateTime;

    /**
     * @var array List of compute nodes
     */
    public $ComputeNodeSet;

    /**
     * @var ComputeNodeMetrics Compute node statistical metrics
     */
    public $ComputeNodeMetrics;

    /**
     * @var integer Number of desired compute nodes
     */
    public $DesiredComputeNodeCount;

    /**
     * @var string Compute environment type
     */
    public $EnvType;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $EnvId Compute environment ID
     * @param string $EnvName Compute environment name
     * @param Placement $Placement Location information
     * @param string $CreateTime Compute environment creation time
     * @param array $ComputeNodeSet List of compute nodes
     * @param ComputeNodeMetrics $ComputeNodeMetrics Compute node statistical metrics
     * @param integer $DesiredComputeNodeCount Number of desired compute nodes
     * @param string $EnvType Compute environment type
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("ComputeNodeSet",$param) and $param["ComputeNodeSet"] !== null) {
            $this->ComputeNodeSet = [];
            foreach ($param["ComputeNodeSet"] as $key => $value){
                $obj = new ComputeNode();
                $obj->deserialize($value);
                array_push($this->ComputeNodeSet, $obj);
            }
        }

        if (array_key_exists("ComputeNodeMetrics",$param) and $param["ComputeNodeMetrics"] !== null) {
            $this->ComputeNodeMetrics = new ComputeNodeMetrics();
            $this->ComputeNodeMetrics->deserialize($param["ComputeNodeMetrics"]);
        }

        if (array_key_exists("DesiredComputeNodeCount",$param) and $param["DesiredComputeNodeCount"] !== null) {
            $this->DesiredComputeNodeCount = $param["DesiredComputeNodeCount"];
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
