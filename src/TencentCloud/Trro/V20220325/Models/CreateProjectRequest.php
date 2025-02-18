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
 * CreateProject request structure.
 *
 * @method string getProjectName() Obtain Project name, up to 24 characters.
 * @method void setProjectName(string $ProjectName) Set Project name, up to 24 characters.
 * @method string getProjectDescription() Obtain Project description, up to 120 characters, default is empty if not filled.
 * @method void setProjectDescription(string $ProjectDescription) Set Project description, up to 120 characters, default is empty if not filled.
 * @method string getPolicyMode() Obtain Permission mode, black for blocklist, white for allowlist. defaults to black if not specified.
 * @method void setPolicyMode(string $PolicyMode) Set Permission mode, black for blocklist, white for allowlist. defaults to black if not specified.
 */
class CreateProjectRequest extends AbstractModel
{
    /**
     * @var string Project name, up to 24 characters.
     */
    public $ProjectName;

    /**
     * @var string Project description, up to 120 characters, default is empty if not filled.
     */
    public $ProjectDescription;

    /**
     * @var string Permission mode, black for blocklist, white for allowlist. defaults to black if not specified.
     */
    public $PolicyMode;

    /**
     * @param string $ProjectName Project name, up to 24 characters.
     * @param string $ProjectDescription Project description, up to 120 characters, default is empty if not filled.
     * @param string $PolicyMode Permission mode, black for blocklist, white for allowlist. defaults to black if not specified.
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
