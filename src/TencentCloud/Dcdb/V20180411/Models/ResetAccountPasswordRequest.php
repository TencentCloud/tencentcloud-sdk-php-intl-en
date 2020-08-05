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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetAccountPassword request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of dcdbt-ow728lmc.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of dcdbt-ow728lmc.
 * @method string getUserName() Obtain Login username.
 * @method void setUserName(string $UserName) Set Login username.
 * @method string getHost() Obtain Access host allowed for a user. An account is uniquely identified by username and host.
 * @method void setHost(string $Host) Set Access host allowed for a user. An account is uniquely identified by username and host.
 * @method string getPassword() Obtain New password, which can contain 6-32 letters, digits, and common symbols but not semicolons, single quotation marks, and double quotation marks.
 * @method void setPassword(string $Password) Set New password, which can contain 6-32 letters, digits, and common symbols but not semicolons, single quotation marks, and double quotation marks.
 */
class ResetAccountPasswordRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of dcdbt-ow728lmc.
     */
    public $InstanceId;

    /**
     * @var string Login username.
     */
    public $UserName;

    /**
     * @var string Access host allowed for a user. An account is uniquely identified by username and host.
     */
    public $Host;

    /**
     * @var string New password, which can contain 6-32 letters, digits, and common symbols but not semicolons, single quotation marks, and double quotation marks.
     */
    public $Password;

    /**
     * @param string $InstanceId Instance ID in the format of dcdbt-ow728lmc.
     * @param string $UserName Login username.
     * @param string $Host Access host allowed for a user. An account is uniquely identified by username and host.
     * @param string $Password New password, which can contain 6-32 letters, digits, and common symbols but not semicolons, single quotation marks, and double quotation marks.
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

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
