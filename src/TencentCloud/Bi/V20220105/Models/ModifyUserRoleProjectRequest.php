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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserRoleProject request structure.
 *
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method string getUserId() Obtain User ID.
 * @method void setUserId(string $UserId) Set User ID.
 * @method array getRoleIdList() Obtain Role ID list.
 * @method void setRoleIdList(array $RoleIdList) Set Role ID list.
 * @method string getEmail() Obtain Mailbox.
 * @method void setEmail(string $Email) Set Mailbox.
 * @method string getUserName() Obtain Username.
 * @method void setUserName(string $UserName) Set Username.
 * @method string getAppUserId() Obtain WeCom app user ID.
 * @method void setAppUserId(string $AppUserId) Set WeCom app user ID.
 */
class ModifyUserRoleProjectRequest extends AbstractModel
{
    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var string User ID.
     */
    public $UserId;

    /**
     * @var array Role ID list.
     */
    public $RoleIdList;

    /**
     * @var string Mailbox.
     */
    public $Email;

    /**
     * @var string Username.
     */
    public $UserName;

    /**
     * @var string WeCom app user ID.
     */
    public $AppUserId;

    /**
     * @param integer $ProjectId Project ID.
     * @param string $UserId User ID.
     * @param array $RoleIdList Role ID list.
     * @param string $Email Mailbox.
     * @param string $UserName Username.
     * @param string $AppUserId WeCom app user ID.
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

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("RoleIdList",$param) and $param["RoleIdList"] !== null) {
            $this->RoleIdList = $param["RoleIdList"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("AppUserId",$param) and $param["AppUserId"] !== null) {
            $this->AppUserId = $param["AppUserId"];
        }
    }
}
