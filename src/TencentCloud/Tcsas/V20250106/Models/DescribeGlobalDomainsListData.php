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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of global domain names
 *
 * @method integer getDomainId() Obtain Domain ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomainId(integer $DomainId) Set Domain ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDomainUrl() Obtain Domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomainUrl(string $DomainUrl) Set Domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDomainType() Obtain Type. 1: Allowed; 2: Blocked
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomainType(integer $DomainType) Set Type. 1: Allowed; 2: Blocked
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUser() Obtain Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUser(string $CreateUser) Set Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateUser() Obtain Updater
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateUser(string $UpdateUser) Set Updater
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeGlobalDomainsListData extends AbstractModel
{
    /**
     * @var integer Domain ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DomainId;

    /**
     * @var string Domain name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DomainUrl;

    /**
     * @var integer Type. 1: Allowed; 2: Blocked
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DomainType;

    /**
     * @var string Creator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUser;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Updater
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateUser;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param integer $DomainId Domain ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DomainUrl Domain name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DomainType Type. 1: Allowed; 2: Blocked
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUser Creator
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateUser Updater
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("DomainUrl",$param) and $param["DomainUrl"] !== null) {
            $this->DomainUrl = $param["DomainUrl"];
        }

        if (array_key_exists("DomainType",$param) and $param["DomainType"] !== null) {
            $this->DomainType = $param["DomainType"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateUser",$param) and $param["UpdateUser"] !== null) {
            $this->UpdateUser = $param["UpdateUser"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
