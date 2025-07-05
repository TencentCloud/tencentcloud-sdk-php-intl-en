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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output mapping options
 *
 * @method string getWorkspace() Obtain The mapped output workspace on the container side for the instance.
`BATCH_WORKSPACE` (Default): The workspace is the workspace defined for the usage of Batch Compute. Batch Compute ensures the isolation between jobs.
`GLOBAL_WORKSPACE`: The workspace is the instance OS space..
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setWorkspace(string $Workspace) Set The mapped output workspace on the container side for the instance.
`BATCH_WORKSPACE` (Default): The workspace is the workspace defined for the usage of Batch Compute. Batch Compute ensures the isolation between jobs.
`GLOBAL_WORKSPACE`: The workspace is the instance OS space..
Note: This field may return `null`, indicating that no valid value was found.
 */
class OutputMappingOption extends AbstractModel
{
    /**
     * @var string The mapped output workspace on the container side for the instance.
`BATCH_WORKSPACE` (Default): The workspace is the workspace defined for the usage of Batch Compute. Batch Compute ensures the isolation between jobs.
`GLOBAL_WORKSPACE`: The workspace is the instance OS space..
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Workspace;

    /**
     * @param string $Workspace The mapped output workspace on the container side for the instance.
`BATCH_WORKSPACE` (Default): The workspace is the workspace defined for the usage of Batch Compute. Batch Compute ensures the isolation between jobs.
`GLOBAL_WORKSPACE`: The workspace is the instance OS space..
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
        if (array_key_exists("Workspace",$param) and $param["Workspace"] !== null) {
            $this->Workspace = $param["Workspace"];
        }
    }
}
