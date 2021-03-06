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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TencentDB account information
 *
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method string getHost() Obtain Host from which a user can log in (corresponding to the `host` field for a MySQL user; a user is uniquely identified by username and host; this parameter is in IP format and ends with % for IP range; % can be entered; if this parameter is left empty, % will be used by default)
 * @method void setHost(string $Host) Set Host from which a user can log in (corresponding to the `host` field for a MySQL user; a user is uniquely identified by username and host; this parameter is in IP format and ends with % for IP range; % can be entered; if this parameter is left empty, % will be used by default)
 * @method string getDescription() Obtain User remarks
 * @method void setDescription(string $Description) Set User remarks
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Last updated time
 * @method void setUpdateTime(string $UpdateTime) Set Last updated time
 * @method integer getReadOnly() Obtain Read-only flag. 0: no; 1: for the account's SQL requests, the secondary will be used first, and if it is unavailable, the primary will be used; 2: the secondary will be used first, and if it is unavailable, the operation will fail.
 * @method void setReadOnly(integer $ReadOnly) Set Read-only flag. 0: no; 1: for the account's SQL requests, the secondary will be used first, and if it is unavailable, the primary will be used; 2: the secondary will be used first, and if it is unavailable, the operation will fail.
 * @method integer getDelayThresh() Obtain This field is meaningful for read-only accounts, indicating to select a secondary where the primary/secondary delay is below this value
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDelayThresh(integer $DelayThresh) Set This field is meaningful for read-only accounts, indicating to select a secondary where the primary/secondary delay is below this value
Note: this field may return null, indicating that no valid values can be obtained.
 */
class DBAccount extends AbstractModel
{
    /**
     * @var string Username
     */
    public $UserName;

    /**
     * @var string Host from which a user can log in (corresponding to the `host` field for a MySQL user; a user is uniquely identified by username and host; this parameter is in IP format and ends with % for IP range; % can be entered; if this parameter is left empty, % will be used by default)
     */
    public $Host;

    /**
     * @var string User remarks
     */
    public $Description;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Last updated time
     */
    public $UpdateTime;

    /**
     * @var integer Read-only flag. 0: no; 1: for the account's SQL requests, the secondary will be used first, and if it is unavailable, the primary will be used; 2: the secondary will be used first, and if it is unavailable, the operation will fail.
     */
    public $ReadOnly;

    /**
     * @var integer This field is meaningful for read-only accounts, indicating to select a secondary where the primary/secondary delay is below this value
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DelayThresh;

    /**
     * @param string $UserName Username
     * @param string $Host Host from which a user can log in (corresponding to the `host` field for a MySQL user; a user is uniquely identified by username and host; this parameter is in IP format and ends with % for IP range; % can be entered; if this parameter is left empty, % will be used by default)
     * @param string $Description User remarks
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Last updated time
     * @param integer $ReadOnly Read-only flag. 0: no; 1: for the account's SQL requests, the secondary will be used first, and if it is unavailable, the primary will be used; 2: the secondary will be used first, and if it is unavailable, the operation will fail.
     * @param integer $DelayThresh This field is meaningful for read-only accounts, indicating to select a secondary where the primary/secondary delay is below this value
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("DelayThresh",$param) and $param["DelayThresh"] !== null) {
            $this->DelayThresh = $param["DelayThresh"];
        }
    }
}
