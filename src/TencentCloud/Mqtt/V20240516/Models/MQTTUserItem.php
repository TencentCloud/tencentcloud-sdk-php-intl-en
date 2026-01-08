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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT cluster user information.
 *
 * @method string getUsername() Obtain Username.
 * @method void setUsername(string $Username) Set Username.
 * @method string getPassword() Obtain Password.
 * @method void setPassword(string $Password) Set Password.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getCreatedTime() Obtain Creation time. millisecond-level timestamp.
 * @method void setCreatedTime(integer $CreatedTime) Set Creation time. millisecond-level timestamp.
 * @method integer getModifiedTime() Obtain Modification time. millisecond-level timestamp.
 * @method void setModifiedTime(integer $ModifiedTime) Set Modification time. millisecond-level timestamp.
 */
class MQTTUserItem extends AbstractModel
{
    /**
     * @var string Username.
     */
    public $Username;

    /**
     * @var string Password.
     */
    public $Password;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer Creation time. millisecond-level timestamp.
     */
    public $CreatedTime;

    /**
     * @var integer Modification time. millisecond-level timestamp.
     */
    public $ModifiedTime;

    /**
     * @param string $Username Username.
     * @param string $Password Password.
     * @param string $Remark Remarks
     * @param integer $CreatedTime Creation time. millisecond-level timestamp.
     * @param integer $ModifiedTime Modification time. millisecond-level timestamp.
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
        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }
    }
}
