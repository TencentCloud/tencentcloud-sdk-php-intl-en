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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProject request structure.
 *
 * @method string getProjectId() Obtain Project id of the target project to modify.
 * @method void setProjectId(string $ProjectId) Set Project id of the target project to modify.
 * @method string getProjectName() Obtain Modified project name, leave blank if not modifying.
 * @method void setProjectName(string $ProjectName) Set Modified project name, leave blank if not modifying.
 * @method string getProjectDescription() Obtain Modified project description, leave blank if not modifying.
 * @method void setProjectDescription(string $ProjectDescription) Set Modified project description, leave blank if not modifying.
 * @method string getPolicyMode() Obtain The modified permission mode, black for blocklist, white for allowlist. if not specified, no modification will be made.
 * @method void setPolicyMode(string $PolicyMode) Set The modified permission mode, black for blocklist, white for allowlist. if not specified, no modification will be made.
 */
class ModifyProjectRequest extends AbstractModel
{
    /**
     * @var string Project id of the target project to modify.
     */
    public $ProjectId;

    /**
     * @var string Modified project name, leave blank if not modifying.
     */
    public $ProjectName;

    /**
     * @var string Modified project description, leave blank if not modifying.
     */
    public $ProjectDescription;

    /**
     * @var string The modified permission mode, black for blocklist, white for allowlist. if not specified, no modification will be made.
     */
    public $PolicyMode;

    /**
     * @param string $ProjectId Project id of the target project to modify.
     * @param string $ProjectName Modified project name, leave blank if not modifying.
     * @param string $ProjectDescription Modified project description, leave blank if not modifying.
     * @param string $PolicyMode The modified permission mode, black for blocklist, white for allowlist. if not specified, no modification will be made.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectDescription",$param) and $param["ProjectDescription"] !== null) {
            $this->ProjectDescription = $param["ProjectDescription"];
        }

        if (array_key_exists("PolicyMode",$param) and $param["PolicyMode"] !== null) {
            $this->PolicyMode = $param["PolicyMode"];
        }
    }
}
