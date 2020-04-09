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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDeployGroup request structure.
 *
 * @method string getDeployGroupName() Obtain Name of a placement group, which can contain up to 60 characters.
 * @method void setDeployGroupName(string $DeployGroupName) Set Name of a placement group, which can contain up to 60 characters.
 * @method string getDescription() Obtain Description of a placement group, which can contain up to 200 characters.
 * @method void setDescription(string $Description) Set Description of a placement group, which can contain up to 200 characters.
 * @method array getAffinity() Obtain Affinity policy of placement group. Currently, the value of this parameter can only be 1. Policy 1 indicates the upper limit of instances on one physical machine.
 * @method void setAffinity(array $Affinity) Set Affinity policy of placement group. Currently, the value of this parameter can only be 1. Policy 1 indicates the upper limit of instances on one physical machine.
 * @method integer getLimitNum() Obtain Upper limit of instances on one physical machine as defined in affinity policy 1 of placement group.
 * @method void setLimitNum(integer $LimitNum) Set Upper limit of instances on one physical machine as defined in affinity policy 1 of placement group.
 */
class CreateDeployGroupRequest extends AbstractModel
{
    /**
     * @var string Name of a placement group, which can contain up to 60 characters.
     */
    public $DeployGroupName;

    /**
     * @var string Description of a placement group, which can contain up to 200 characters.
     */
    public $Description;

    /**
     * @var array Affinity policy of placement group. Currently, the value of this parameter can only be 1. Policy 1 indicates the upper limit of instances on one physical machine.
     */
    public $Affinity;

    /**
     * @var integer Upper limit of instances on one physical machine as defined in affinity policy 1 of placement group.
     */
    public $LimitNum;

    /**
     * @param string $DeployGroupName Name of a placement group, which can contain up to 60 characters.
     * @param string $Description Description of a placement group, which can contain up to 200 characters.
     * @param array $Affinity Affinity policy of placement group. Currently, the value of this parameter can only be 1. Policy 1 indicates the upper limit of instances on one physical machine.
     * @param integer $LimitNum Upper limit of instances on one physical machine as defined in affinity policy 1 of placement group.
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
        if (array_key_exists("DeployGroupName",$param) and $param["DeployGroupName"] !== null) {
            $this->DeployGroupName = $param["DeployGroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Affinity",$param) and $param["Affinity"] !== null) {
            $this->Affinity = $param["Affinity"];
        }

        if (array_key_exists("LimitNum",$param) and $param["LimitNum"] !== null) {
            $this->LimitNum = $param["LimitNum"];
        }
    }
}
