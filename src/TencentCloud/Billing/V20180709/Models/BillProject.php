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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Project filter list
 *
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getProjectName() Obtain Project name: The Project to which a resource belongs, which is independently allocated by the user for the resource in the console. If a resource has not been allocated to an Project, it will be a default Project.
 * @method void setProjectName(string $ProjectName) Set Project name: The Project to which a resource belongs, which is independently allocated by the user for the resource in the console. If a resource has not been allocated to an Project, it will be a default Project.
 */
class BillProject extends AbstractModel
{
    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Project name: The Project to which a resource belongs, which is independently allocated by the user for the resource in the console. If a resource has not been allocated to an Project, it will be a default Project.
     */
    public $ProjectName;

    /**
     * @param integer $ProjectId Project ID
     * @param string $ProjectName Project name: The Project to which a resource belongs, which is independently allocated by the user for the resource in the console. If a resource has not been allocated to an Project, it will be a default Project.
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
    }
}
