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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic Information
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getProjectIdent() Obtain Project Identifier
 * @method void setProjectIdent(string $ProjectIdent) Set Project Identifier
 * @method string getProjectName() Obtain Project name
 * @method void setProjectName(string $ProjectName) Set Project name
 * @method boolean getIsAdmin() Obtain Whether admin
 * @method void setIsAdmin(boolean $IsAdmin) Set Whether admin
 */
class ProjectBaseInfoOpsRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Project Identifier
     */
    public $ProjectIdent;

    /**
     * @var string Project name
     */
    public $ProjectName;

    /**
     * @var boolean Whether admin
     */
    public $IsAdmin;

    /**
     * @param string $ProjectId Project ID
     * @param string $ProjectIdent Project Identifier
     * @param string $ProjectName Project name
     * @param boolean $IsAdmin Whether admin
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

        if (array_key_exists("ProjectIdent",$param) and $param["ProjectIdent"] !== null) {
            $this->ProjectIdent = $param["ProjectIdent"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("IsAdmin",$param) and $param["IsAdmin"] !== null) {
            $this->IsAdmin = $param["IsAdmin"];
        }
    }
}
