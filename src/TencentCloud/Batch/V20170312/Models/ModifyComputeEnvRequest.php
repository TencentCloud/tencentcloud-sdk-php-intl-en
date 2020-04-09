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
 * ModifyComputeEnv request structure.
 *
 * @method string getEnvId() Obtain Compute environment ID
 * @method void setEnvId(string $EnvId) Set Compute environment ID
 * @method integer getDesiredComputeNodeCount() Obtain Number of desired compute nodes
 * @method void setDesiredComputeNodeCount(integer $DesiredComputeNodeCount) Set Number of desired compute nodes
 * @method string getEnvName() Obtain Compute environment name
 * @method void setEnvName(string $EnvName) Set Compute environment name
 * @method string getEnvDescription() Obtain Compute environment description
 * @method void setEnvDescription(string $EnvDescription) Set Compute environment description
 * @method ComputeEnvData getEnvData() Obtain Compute environment attributes
 * @method void setEnvData(ComputeEnvData $EnvData) Set Compute environment attributes
 */
class ModifyComputeEnvRequest extends AbstractModel
{
    /**
     * @var string Compute environment ID
     */
    public $EnvId;

    /**
     * @var integer Number of desired compute nodes
     */
    public $DesiredComputeNodeCount;

    /**
     * @var string Compute environment name
     */
    public $EnvName;

    /**
     * @var string Compute environment description
     */
    public $EnvDescription;

    /**
     * @var ComputeEnvData Compute environment attributes
     */
    public $EnvData;

    /**
     * @param string $EnvId Compute environment ID
     * @param integer $DesiredComputeNodeCount Number of desired compute nodes
     * @param string $EnvName Compute environment name
     * @param string $EnvDescription Compute environment description
     * @param ComputeEnvData $EnvData Compute environment attributes
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

        if (array_key_exists("DesiredComputeNodeCount",$param) and $param["DesiredComputeNodeCount"] !== null) {
            $this->DesiredComputeNodeCount = $param["DesiredComputeNodeCount"];
        }

        if (array_key_exists("EnvName",$param) and $param["EnvName"] !== null) {
            $this->EnvName = $param["EnvName"];
        }

        if (array_key_exists("EnvDescription",$param) and $param["EnvDescription"] !== null) {
            $this->EnvDescription = $param["EnvDescription"];
        }

        if (array_key_exists("EnvData",$param) and $param["EnvData"] !== null) {
            $this->EnvData = new ComputeEnvData();
            $this->EnvData->deserialize($param["EnvData"]);
        }
    }
}
