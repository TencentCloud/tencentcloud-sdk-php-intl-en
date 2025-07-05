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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Canary project configuration
 *
 * @method string getProjectName() Obtain Canary project name
 * @method void setProjectName(string $ProjectName) Set Canary project name
 * @method boolean getStatus() Obtain Valid values: `true` (in canary upgrade); `false` (not in canary upgrade).
 * @method void setStatus(boolean $Status) Set Valid values: `true` (in canary upgrade); `false` (not in canary upgrade).
 */
class ABTestConfig extends AbstractModel
{
    /**
     * @var string Canary project name
     */
    public $ProjectName;

    /**
     * @var boolean Valid values: `true` (in canary upgrade); `false` (not in canary upgrade).
     */
    public $Status;

    /**
     * @param string $ProjectName Canary project name
     * @param boolean $Status Valid values: `true` (in canary upgrade); `false` (not in canary upgrade).
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
