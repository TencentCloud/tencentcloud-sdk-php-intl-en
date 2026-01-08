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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of global domain names
 *
 * @method integer getDomainId() Obtain Domain ID
 * @method void setDomainId(integer $DomainId) Set Domain ID
 * @method string getDomainUrl() Obtain Domain name
 * @method void setDomainUrl(string $DomainUrl) Set Domain name
 * @method integer getDomainType() Obtain Type. 1: allowlist; 2: blocklist.
 * @method void setDomainType(integer $DomainType) Set Type. 1: allowlist; 2: blocklist.
 * @method string getCreateUser() Obtain Creator
 * @method void setCreateUser(string $CreateUser) Set Creator
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateUser() Obtain Specifies the updater.
 * @method void setUpdateUser(string $UpdateUser) Set Specifies the updater.
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 */
class DescribeGlobalDomainsListData extends AbstractModel
{
    /**
     * @var integer Domain ID
     */
    public $DomainId;

    /**
     * @var string Domain name
     */
    public $DomainUrl;

    /**
     * @var integer Type. 1: allowlist; 2: blocklist.
     */
    public $DomainType;

    /**
     * @var string Creator
     */
    public $CreateUser;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Specifies the updater.
     */
    public $UpdateUser;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @param integer $DomainId Domain ID
     * @param string $DomainUrl Domain name
     * @param integer $DomainType Type. 1: allowlist; 2: blocklist.
     * @param string $CreateUser Creator
     * @param string $CreateTime Creation time
     * @param string $UpdateUser Specifies the updater.
     * @param string $UpdateTime Update time
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
