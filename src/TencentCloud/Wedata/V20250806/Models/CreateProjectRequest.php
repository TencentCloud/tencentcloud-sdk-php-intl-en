<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProject request structure.
 *
 * @method ProjectRequest getProject() Obtain Basic project information.
 * @method void setProject(ProjectRequest $Project) Set Basic project information.
 * @method DLCClusterInfo getDLCInfo() Obtain DLC bind cluster information.
 * @method void setDLCInfo(DLCClusterInfo $DLCInfo) Set DLC bind cluster information.
 * @method array getResourceIds() Obtain id list to bind resource group.
 * @method void setResourceIds(array $ResourceIds) Set id list to bind resource group.
 */
class CreateProjectRequest extends AbstractModel
{
    /**
     * @var ProjectRequest Basic project information.
     */
    public $Project;

    /**
     * @var DLCClusterInfo DLC bind cluster information.
     */
    public $DLCInfo;

    /**
     * @var array id list to bind resource group.
     */
    public $ResourceIds;

    /**
     * @param ProjectRequest $Project Basic project information.
     * @param DLCClusterInfo $DLCInfo DLC bind cluster information.
     * @param array $ResourceIds id list to bind resource group.
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
        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = new ProjectRequest();
            $this->Project->deserialize($param["Project"]);
        }

        if (array_key_exists("DLCInfo",$param) and $param["DLCInfo"] !== null) {
            $this->DLCInfo = new DLCClusterInfo();
            $this->DLCInfo->deserialize($param["DLCInfo"]);
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }
    }
}
