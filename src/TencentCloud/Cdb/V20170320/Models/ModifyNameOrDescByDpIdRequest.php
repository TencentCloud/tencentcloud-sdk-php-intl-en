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
 * @method string getDeployGroupId() Obtain ID of a placement group.
 * @method void setDeployGroupId(string $DeployGroupId) Set ID of a placement group.
 * @method string getDeployGroupName() Obtain Name of a placement group, which can contain up to 60 characters. The placement group name and description cannot both be empty.
 * @method void setDeployGroupName(string $DeployGroupName) Set Name of a placement group, which can contain up to 60 characters. The placement group name and description cannot both be empty.
 * @method string getDescription() Obtain Description of a placement group, which can contain up to 200 characters. The placement group name and description cannot both be empty.
 * @method void setDescription(string $Description) Set Description of a placement group, which can contain up to 200 characters. The placement group name and description cannot both be empty.
 */

/**
 *ModifyNameOrDescByDpId request structure.
 */
class ModifyNameOrDescByDpIdRequest extends AbstractModel
{
    /**
     * @var string ID of a placement group.
     */
    public $DeployGroupId;

    /**
     * @var string Name of a placement group, which can contain up to 60 characters. The placement group name and description cannot both be empty.
     */
    public $DeployGroupName;

    /**
     * @var string Description of a placement group, which can contain up to 200 characters. The placement group name and description cannot both be empty.
     */
    public $Description;
    /**
     * @param string $DeployGroupId ID of a placement group.
     * @param string $DeployGroupName Name of a placement group, which can contain up to 60 characters. The placement group name and description cannot both be empty.
     * @param string $Description Description of a placement group, which can contain up to 200 characters. The placement group name and description cannot both be empty.
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
        if (array_key_exists("DeployGroupId",$param) and $param["DeployGroupId"] !== null) {
            $this->DeployGroupId = $param["DeployGroupId"];
        }

        if (array_key_exists("DeployGroupName",$param) and $param["DeployGroupName"] !== null) {
            $this->DeployGroupName = $param["DeployGroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
