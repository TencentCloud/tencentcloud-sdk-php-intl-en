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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Partial information about working groups
 *
 * @method integer getWorkGroupId() Obtain Unique ID of the working group
 * @method void setWorkGroupId(integer $WorkGroupId) Set Unique ID of the working group
 * @method string getWorkGroupName() Obtain Working group name
 * @method void setWorkGroupName(string $WorkGroupName) Set Working group name
 * @method string getWorkGroupDescription() Obtain Working group description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkGroupDescription(string $WorkGroupDescription) Set Working group description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreator() Obtain Creator
 * @method void setCreator(string $Creator) Set Creator
 * @method string getCreateTime() Obtain The creation time of the working group, e.g. at 16:19:32 on Jul 28, 2021
 * @method void setCreateTime(string $CreateTime) Set The creation time of the working group, e.g. at 16:19:32 on Jul 28, 2021
 */
class WorkGroupMessage extends AbstractModel
{
    /**
     * @var integer Unique ID of the working group
     */
    public $WorkGroupId;

    /**
     * @var string Working group name
     */
    public $WorkGroupName;

    /**
     * @var string Working group description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkGroupDescription;

    /**
     * @var string Creator
     */
    public $Creator;

    /**
     * @var string The creation time of the working group, e.g. at 16:19:32 on Jul 28, 2021
     */
    public $CreateTime;

    /**
     * @param integer $WorkGroupId Unique ID of the working group
     * @param string $WorkGroupName Working group name
     * @param string $WorkGroupDescription Working group description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Creator Creator
     * @param string $CreateTime The creation time of the working group, e.g. at 16:19:32 on Jul 28, 2021
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
        if (array_key_exists("WorkGroupId",$param) and $param["WorkGroupId"] !== null) {
            $this->WorkGroupId = $param["WorkGroupId"];
        }

        if (array_key_exists("WorkGroupName",$param) and $param["WorkGroupName"] !== null) {
            $this->WorkGroupName = $param["WorkGroupName"];
        }

        if (array_key_exists("WorkGroupDescription",$param) and $param["WorkGroupDescription"] !== null) {
            $this->WorkGroupDescription = $param["WorkGroupDescription"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
