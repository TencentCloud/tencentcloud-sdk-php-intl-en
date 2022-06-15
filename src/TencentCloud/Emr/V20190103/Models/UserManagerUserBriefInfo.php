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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Brief user information in user management
 *
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method string getUserGroup() Obtain The group to which the user belongs
 * @method void setUserGroup(string $UserGroup) Set The group to which the user belongs
 * @method string getUserType() Obtain `Manager` represents an admin, and `NormalUser` represents a general user.
 * @method void setUserType(string $UserType) Set `Manager` represents an admin, and `NormalUser` represents a general user.
 * @method string getCreateTime() Obtain Account creation time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Account creation time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getSupportDownLoadKeyTab() Obtain Whether the corresponding Keytab file of the user is available for download. This parameter applies only to a Kerberos-enabled cluster.
 * @method void setSupportDownLoadKeyTab(boolean $SupportDownLoadKeyTab) Set Whether the corresponding Keytab file of the user is available for download. This parameter applies only to a Kerberos-enabled cluster.
 * @method string getDownLoadKeyTabUrl() Obtain Download link of the Keytab file
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDownLoadKeyTabUrl(string $DownLoadKeyTabUrl) Set Download link of the Keytab file
Note: This field may return null, indicating that no valid value can be obtained.
 */
class UserManagerUserBriefInfo extends AbstractModel
{
    /**
     * @var string Username
     */
    public $UserName;

    /**
     * @var string The group to which the user belongs
     */
    public $UserGroup;

    /**
     * @var string `Manager` represents an admin, and `NormalUser` represents a general user.
     */
    public $UserType;

    /**
     * @var string Account creation time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var boolean Whether the corresponding Keytab file of the user is available for download. This parameter applies only to a Kerberos-enabled cluster.
     */
    public $SupportDownLoadKeyTab;

    /**
     * @var string Download link of the Keytab file
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DownLoadKeyTabUrl;

    /**
     * @param string $UserName Username
     * @param string $UserGroup The group to which the user belongs
     * @param string $UserType `Manager` represents an admin, and `NormalUser` represents a general user.
     * @param string $CreateTime Account creation time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $SupportDownLoadKeyTab Whether the corresponding Keytab file of the user is available for download. This parameter applies only to a Kerberos-enabled cluster.
     * @param string $DownLoadKeyTabUrl Download link of the Keytab file
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SupportDownLoadKeyTab",$param) and $param["SupportDownLoadKeyTab"] !== null) {
            $this->SupportDownLoadKeyTab = $param["SupportDownLoadKeyTab"];
        }

        if (array_key_exists("DownLoadKeyTabUrl",$param) and $param["DownLoadKeyTabUrl"] !== null) {
            $this->DownLoadKeyTabUrl = $param["DownLoadKeyTabUrl"];
        }
    }
}
