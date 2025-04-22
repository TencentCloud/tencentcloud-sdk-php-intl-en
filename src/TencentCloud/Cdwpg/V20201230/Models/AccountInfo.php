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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description of the account name and instance IDs under the account
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getUserName() Obtain Account name.
 * @method void setUserName(string $UserName) Set Account name.
 * @method array getPerms() Obtain Account attribute.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPerms(array $Perms) Set Account attribute.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AccountInfo extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Account name.
     */
    public $UserName;

    /**
     * @var array Account attribute.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Perms;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $UserName Account name.
     * @param array $Perms Account attribute.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Perms",$param) and $param["Perms"] !== null) {
            $this->Perms = $param["Perms"];
        }
    }
}
