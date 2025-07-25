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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstancesProject request structure.
 *
 * @method array getInstanceIds() Obtain List of IDs of instances to be modified. Instance ID is in the format of dcdbt-ow728lmc.
 * @method void setInstanceIds(array $InstanceIds) Set List of IDs of instances to be modified. Instance ID is in the format of dcdbt-ow728lmc.
 * @method integer getProjectId() Obtain ID of the project to be assigned, which can be obtained through the `DescribeProjects` API.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to be assigned, which can be obtained through the `DescribeProjects` API.
 */
class ModifyDBInstancesProjectRequest extends AbstractModel
{
    /**
     * @var array List of IDs of instances to be modified. Instance ID is in the format of dcdbt-ow728lmc.
     */
    public $InstanceIds;

    /**
     * @var integer ID of the project to be assigned, which can be obtained through the `DescribeProjects` API.
     */
    public $ProjectId;

    /**
     * @param array $InstanceIds List of IDs of instances to be modified. Instance ID is in the format of dcdbt-ow728lmc.
     * @param integer $ProjectId ID of the project to be assigned, which can be obtained through the `DescribeProjects` API.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
