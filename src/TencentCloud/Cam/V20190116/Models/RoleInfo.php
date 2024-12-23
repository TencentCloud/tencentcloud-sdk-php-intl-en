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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Role details
 *
 * @method string getRoleId() Obtain Role ID
 * @method void setRoleId(string $RoleId) Set Role ID
 * @method string getRoleName() Obtain Role name
 * @method void setRoleName(string $RoleName) Set Role name
 * @method string getPolicyDocument() Obtain Role policy document
 * @method void setPolicyDocument(string $PolicyDocument) Set Role policy document
 * @method string getDescription() Obtain Role description
 * @method void setDescription(string $Description) Set Role description
 * @method string getAddTime() Obtain Time role created
 * @method void setAddTime(string $AddTime) Set Time role created
 * @method string getUpdateTime() Obtain Time role last updated
 * @method void setUpdateTime(string $UpdateTime) Set Time role last updated
 * @method integer getConsoleLogin() Obtain If login is allowed for the role
 * @method void setConsoleLogin(integer $ConsoleLogin) Set If login is allowed for the role
 * @method string getRoleType() Obtain User role. Valid values: `user`, `system`, `service_linked`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRoleType(string $RoleType) Set User role. Valid values: `user`, `system`, `service_linked`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSessionDuration() Obtain Valid period
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSessionDuration(integer $SessionDuration) Set Valid period
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDeletionTaskId() Obtain Task identifier for deleting a service-linked role 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeletionTaskId(string $DeletionTaskId) Set Task identifier for deleting a service-linked role 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tags.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tags.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRoleArn() Obtain The Role Arn 
 * @method void setRoleArn(string $RoleArn) Set The Role Arn 
 */
class RoleInfo extends AbstractModel
{
    /**
     * @var string Role ID
     */
    public $RoleId;

    /**
     * @var string Role name
     */
    public $RoleName;

    /**
     * @var string Role policy document
     */
    public $PolicyDocument;

    /**
     * @var string Role description
     */
    public $Description;

    /**
     * @var string Time role created
     */
    public $AddTime;

    /**
     * @var string Time role last updated
     */
    public $UpdateTime;

    /**
     * @var integer If login is allowed for the role
     */
    public $ConsoleLogin;

    /**
     * @var string User role. Valid values: `user`, `system`, `service_linked`
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RoleType;

    /**
     * @var integer Valid period
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SessionDuration;

    /**
     * @var string Task identifier for deleting a service-linked role 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeletionTaskId;

    /**
     * @var array Tags.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string The Role Arn 
     */
    public $RoleArn;

    /**
     * @param string $RoleId Role ID
     * @param string $RoleName Role name
     * @param string $PolicyDocument Role policy document
     * @param string $Description Role description
     * @param string $AddTime Time role created
     * @param string $UpdateTime Time role last updated
     * @param integer $ConsoleLogin If login is allowed for the role
     * @param string $RoleType User role. Valid values: `user`, `system`, `service_linked`
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SessionDuration Valid period
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DeletionTaskId Task identifier for deleting a service-linked role 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tags.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $RoleArn The Role Arn 
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
        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("SessionDuration",$param) and $param["SessionDuration"] !== null) {
            $this->SessionDuration = $param["SessionDuration"];
        }

        if (array_key_exists("DeletionTaskId",$param) and $param["DeletionTaskId"] !== null) {
            $this->DeletionTaskId = $param["DeletionTaskId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new RoleTags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }
    }
}
