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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database account information
 *
 * @method string getAccountName() Obtain Database account name
 * @method void setAccountName(string $AccountName) Set Database account name
 * @method string getDescription() Obtain Database account description
 * @method void setDescription(string $Description) Set Database account description
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getHost() Obtain Host
 * @method void setHost(string $Host) Set Host
 * @method integer getMaxUserConnections() Obtain The max connections
 * @method void setMaxUserConnections(integer $MaxUserConnections) Set The max connections
 */
class Account extends AbstractModel
{
    /**
     * @var string Database account name
     */
    public $AccountName;

    /**
     * @var string Database account description
     */
    public $Description;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Host
     */
    public $Host;

    /**
     * @var integer The max connections
     */
    public $MaxUserConnections;

    /**
     * @param string $AccountName Database account name
     * @param string $Description Database account description
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Update time
     * @param string $Host Host
     * @param integer $MaxUserConnections The max connections
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
        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
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

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("MaxUserConnections",$param) and $param["MaxUserConnections"] !== null) {
            $this->MaxUserConnections = $param["MaxUserConnections"];
        }
    }
}
