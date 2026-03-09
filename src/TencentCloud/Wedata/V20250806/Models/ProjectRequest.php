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
 * This API is used to obtain project information.
 *
 * @method string getProjectName() Obtain Project id, english name, starts with a letter, can contain letters, numbers, and underscores, and must not exceed 32 characters.
 * @method void setProjectName(string $ProjectName) Set Project id, english name, starts with a letter, can contain letters, numbers, and underscores, and must not exceed 32 characters.
 * @method string getDisplayName() Obtain The project display name can be a chinese name, starts with a letter, and can contain letters, numbers, and underscores, with a maximum of 32 characters.
 * @method void setDisplayName(string $DisplayName) Set The project display name can be a chinese name, starts with a letter, and can contain letters, numbers, and underscores, with a maximum of 32 characters.
 * @method string getProjectModel() Obtain Project mode, SIMPLE (default): SIMPLE mode STANDARD: STANDARD mode.
 * @method void setProjectModel(string $ProjectModel) Set Project mode, SIMPLE (default): SIMPLE mode STANDARD: STANDARD mode.
 */
class ProjectRequest extends AbstractModel
{
    /**
     * @var string Project id, english name, starts with a letter, can contain letters, numbers, and underscores, and must not exceed 32 characters.
     */
    public $ProjectName;

    /**
     * @var string The project display name can be a chinese name, starts with a letter, and can contain letters, numbers, and underscores, with a maximum of 32 characters.
     */
    public $DisplayName;

    /**
     * @var string Project mode, SIMPLE (default): SIMPLE mode STANDARD: STANDARD mode.
     */
    public $ProjectModel;

    /**
     * @param string $ProjectName Project id, english name, starts with a letter, can contain letters, numbers, and underscores, and must not exceed 32 characters.
     * @param string $DisplayName The project display name can be a chinese name, starts with a letter, and can contain letters, numbers, and underscores, with a maximum of 32 characters.
     * @param string $ProjectModel Project mode, SIMPLE (default): SIMPLE mode STANDARD: STANDARD mode.
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

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("ProjectModel",$param) and $param["ProjectModel"] !== null) {
            $this->ProjectModel = $param["ProjectModel"];
        }
    }
}
