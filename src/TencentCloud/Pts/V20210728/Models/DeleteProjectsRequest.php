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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteProjects request structure.
 *
 * @method array getProjectIds() Obtain Array of Project ID to be deleted.
 * @method void setProjectIds(array $ProjectIds) Set Array of Project ID to be deleted.
 * @method boolean getDeleteScenarios() Obtain Whether to delete project-related scenarios. The default value is false.
 * @method void setDeleteScenarios(boolean $DeleteScenarios) Set Whether to delete project-related scenarios. The default value is false.
 * @method boolean getDeleteJobs() Obtain Whether to delete project-related jobs. The default value is false.
 * @method void setDeleteJobs(boolean $DeleteJobs) Set Whether to delete project-related jobs. The default value is false.
 */
class DeleteProjectsRequest extends AbstractModel
{
    /**
     * @var array Array of Project ID to be deleted.
     */
    public $ProjectIds;

    /**
     * @var boolean Whether to delete project-related scenarios. The default value is false.
     */
    public $DeleteScenarios;

    /**
     * @var boolean Whether to delete project-related jobs. The default value is false.
     */
    public $DeleteJobs;

    /**
     * @param array $ProjectIds Array of Project ID to be deleted.
     * @param boolean $DeleteScenarios Whether to delete project-related scenarios. The default value is false.
     * @param boolean $DeleteJobs Whether to delete project-related jobs. The default value is false.
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
        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("DeleteScenarios",$param) and $param["DeleteScenarios"] !== null) {
            $this->DeleteScenarios = $param["DeleteScenarios"];
        }

        if (array_key_exists("DeleteJobs",$param) and $param["DeleteJobs"] !== null) {
            $this->DeleteJobs = $param["DeleteJobs"];
        }
    }
}
