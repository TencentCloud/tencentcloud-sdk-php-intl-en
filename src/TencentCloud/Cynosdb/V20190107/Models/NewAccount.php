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
 * The newly created x08 account
 *
 * @method string getAccountName() Obtain Account name, which can contain 1-16 letters, digits, and underscores. It must begin with a letter and end with a letter or digit.
 * @method void setAccountName(string $AccountName) Set Account name, which can contain 1-16 letters, digits, and underscores. It must begin with a letter and end with a letter or digit.
 * @method string getAccountPassword() Obtain Password, which can contain 8-64 characters.
 * @method void setAccountPassword(string $AccountPassword) Set Password, which can contain 8-64 characters.
 * @method string getHost() Obtain Host
 * @method void setHost(string $Host) Set Host
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method integer getMaxUserConnections() Obtain Maximum number of user connections, which cannot be above 10,240.
 * @method void setMaxUserConnections(integer $MaxUserConnections) Set Maximum number of user connections, which cannot be above 10,240.
 */
class NewAccount extends AbstractModel
{
    /**
     * @var string Account name, which can contain 1-16 letters, digits, and underscores. It must begin with a letter and end with a letter or digit.
     */
    public $AccountName;

    /**
     * @var string Password, which can contain 8-64 characters.
     */
    public $AccountPassword;

    /**
     * @var string Host
     */
    public $Host;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var integer Maximum number of user connections, which cannot be above 10,240.
     */
    public $MaxUserConnections;

    /**
     * @param string $AccountName Account name, which can contain 1-16 letters, digits, and underscores. It must begin with a letter and end with a letter or digit.
     * @param string $AccountPassword Password, which can contain 8-64 characters.
     * @param string $Host Host
     * @param string $Description Description
     * @param integer $MaxUserConnections Maximum number of user connections, which cannot be above 10,240.
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

        if (array_key_exists("AccountPassword",$param) and $param["AccountPassword"] !== null) {
            $this->AccountPassword = $param["AccountPassword"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MaxUserConnections",$param) and $param["MaxUserConnections"] !== null) {
            $this->MaxUserConnections = $param["MaxUserConnections"];
        }
    }
}
