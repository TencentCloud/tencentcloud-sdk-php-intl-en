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
 * Project information.
 *
 * @method string getProjectId() Obtain Project id.
 * @method void setProjectId(string $ProjectId) Set Project id.
 * @method string getProjectName() Obtain Project name.
 * @method void setProjectName(string $ProjectName) Set Project name.
 * @method string getProjectDescription() Obtain Project description.
 * @method void setProjectDescription(string $ProjectDescription) Set Project description.
 * @method string getPolicyMode() Obtain Project permission mode, black for blocklist, white for allowlist.
 * @method void setPolicyMode(string $PolicyMode) Set Project permission mode, black for blocklist, white for allowlist.
 * @method string getModifyTime() Obtain Project information modification time.
 * @method void setModifyTime(string $ModifyTime) Set Project information modification time.
 */
class ProjectInfo extends AbstractModel
{
    /**
     * @var string Project id.
     */
    public $ProjectId;

    /**
     * @var string Project name.
     */
    public $ProjectName;

    /**
     * @var string Project description.
     */
    public $ProjectDescription;

    /**
     * @var string Project permission mode, black for blocklist, white for allowlist.
     */
    public $PolicyMode;

    /**
     * @var string Project information modification time.
     */
    public $ModifyTime;

    /**
     * @param string $ProjectId Project id.
     * @param string $ProjectName Project name.
     * @param string $ProjectDescription Project description.
     * @param string $PolicyMode Project permission mode, black for blocklist, white for allowlist.
     * @param string $ModifyTime Project information modification time.
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

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
