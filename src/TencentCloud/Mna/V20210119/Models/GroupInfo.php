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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic info of the group
 *
 * @method string getGroupId() Obtain group ID
 * @method void setGroupId(string $GroupId) Set group ID
 * @method string getGroupName() Obtain Group name
 * @method void setGroupName(string $GroupName) Set Group name
 * @method string getCreateTime() Obtain The time when the group is created, in ms.	
 * @method void setCreateTime(string $CreateTime) Set The time when the group is created, in ms.	
 * @method string getUpdateTime() Obtain The time when the group is updated, in ms.	
 * @method void setUpdateTime(string $UpdateTime) Set The time when the group is updated, in ms.	
 * @method string getDescription() Obtain Group description
 * @method void setDescription(string $Description) Set Group description
 * @method integer getDeviceNum() Obtain Number of devices grouped in
 * @method void setDeviceNum(integer $DeviceNum) Set Number of devices grouped in
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string group ID
     */
    public $GroupId;

    /**
     * @var string Group name
     */
    public $GroupName;

    /**
     * @var string The time when the group is created, in ms.	
     */
    public $CreateTime;

    /**
     * @var string The time when the group is updated, in ms.	
     */
    public $UpdateTime;

    /**
     * @var string Group description
     */
    public $Description;

    /**
     * @var integer Number of devices grouped in
     */
    public $DeviceNum;

    /**
     * @param string $GroupId group ID
     * @param string $GroupName Group name
     * @param string $CreateTime The time when the group is created, in ms.	
     * @param string $UpdateTime The time when the group is updated, in ms.	
     * @param string $Description Group description
     * @param integer $DeviceNum Number of devices grouped in
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DeviceNum",$param) and $param["DeviceNum"] !== null) {
            $this->DeviceNum = $param["DeviceNum"];
        }
    }
}
