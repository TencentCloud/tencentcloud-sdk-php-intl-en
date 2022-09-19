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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Account details
 *
 * @method string getNotes() Obtain Account remarks
 * @method void setNotes(string $Notes) Set Account remarks
 * @method string getHost() Obtain Account domain name
 * @method void setHost(string $Host) Set Account domain name
 * @method string getUser() Obtain Account name
 * @method void setUser(string $User) Set Account name
 * @method string getModifyTime() Obtain Account information modification time
 * @method void setModifyTime(string $ModifyTime) Set Account information modification time
 * @method string getModifyPasswordTime() Obtain Password modification time
 * @method void setModifyPasswordTime(string $ModifyPasswordTime) Set Password modification time
 * @method string getCreateTime() Obtain This parameter is deprecated.
 * @method void setCreateTime(string $CreateTime) Set This parameter is deprecated.
 * @method integer getMaxUserConnections() Obtain The maximum number of instance connections supported by an account
 * @method void setMaxUserConnections(integer $MaxUserConnections) Set The maximum number of instance connections supported by an account
 */
class AccountInfo extends AbstractModel
{
    /**
     * @var string Account remarks
     */
    public $Notes;

    /**
     * @var string Account domain name
     */
    public $Host;

    /**
     * @var string Account name
     */
    public $User;

    /**
     * @var string Account information modification time
     */
    public $ModifyTime;

    /**
     * @var string Password modification time
     */
    public $ModifyPasswordTime;

    /**
     * @var string This parameter is deprecated.
     */
    public $CreateTime;

    /**
     * @var integer The maximum number of instance connections supported by an account
     */
    public $MaxUserConnections;

    /**
     * @param string $Notes Account remarks
     * @param string $Host Account domain name
     * @param string $User Account name
     * @param string $ModifyTime Account information modification time
     * @param string $ModifyPasswordTime Password modification time
     * @param string $CreateTime This parameter is deprecated.
     * @param integer $MaxUserConnections The maximum number of instance connections supported by an account
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
        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ModifyPasswordTime",$param) and $param["ModifyPasswordTime"] !== null) {
            $this->ModifyPasswordTime = $param["ModifyPasswordTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MaxUserConnections",$param) and $param["MaxUserConnections"] !== null) {
            $this->MaxUserConnections = $param["MaxUserConnections"];
        }
    }
}
