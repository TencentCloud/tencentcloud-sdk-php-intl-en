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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getSecurityGroupId() Obtain The security group instance ID, such as `sg-ohuuioma`.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set The security group instance ID, such as `sg-ohuuioma`.
 * @method string getSecurityGroupName() Obtain Security group can be named freely, but cannot exceed 60 characters.
 * @method void setSecurityGroupName(string $SecurityGroupName) Set Security group can be named freely, but cannot exceed 60 characters.
 * @method string getSecurityGroupDesc() Obtain The remarks for the security group. The maximum length is 100 characters.
 * @method void setSecurityGroupDesc(string $SecurityGroupDesc) Set The remarks for the security group. The maximum length is 100 characters.
 * @method string getProjectId() Obtain The project id is 0 by default. You can query this in the project management page of the Qcloud console.
 * @method void setProjectId(string $ProjectId) Set The project id is 0 by default. You can query this in the project management page of the Qcloud console.
 * @method boolean getIsDefault() Obtain Whether it is the default security group (which cannot be deleted).
 * @method void setIsDefault(boolean $IsDefault) Set Whether it is the default security group (which cannot be deleted).
 * @method string getCreatedTime() Obtain Security group creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Security group creation time.
 */

/**
 *Security group object
 */
class SecurityGroup extends AbstractModel
{
    /**
     * @var string The security group instance ID, such as `sg-ohuuioma`.
     */
    public $SecurityGroupId;

    /**
     * @var string Security group can be named freely, but cannot exceed 60 characters.
     */
    public $SecurityGroupName;

    /**
     * @var string The remarks for the security group. The maximum length is 100 characters.
     */
    public $SecurityGroupDesc;

    /**
     * @var string The project id is 0 by default. You can query this in the project management page of the Qcloud console.
     */
    public $ProjectId;

    /**
     * @var boolean Whether it is the default security group (which cannot be deleted).
     */
    public $IsDefault;

    /**
     * @var string Security group creation time.
     */
    public $CreatedTime;
    /**
     * @param string $SecurityGroupId The security group instance ID, such as `sg-ohuuioma`.
     * @param string $SecurityGroupName Security group can be named freely, but cannot exceed 60 characters.
     * @param string $SecurityGroupDesc The remarks for the security group. The maximum length is 100 characters.
     * @param string $ProjectId The project id is 0 by default. You can query this in the project management page of the Qcloud console.
     * @param boolean $IsDefault Whether it is the default security group (which cannot be deleted).
     * @param string $CreatedTime Security group creation time.
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("SecurityGroupName",$param) and $param["SecurityGroupName"] !== null) {
            $this->SecurityGroupName = $param["SecurityGroupName"];
        }

        if (array_key_exists("SecurityGroupDesc",$param) and $param["SecurityGroupDesc"] !== null) {
            $this->SecurityGroupDesc = $param["SecurityGroupDesc"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
