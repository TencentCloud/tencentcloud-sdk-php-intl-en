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
 * Newly created account
 *
 * @method string getAccountName() Obtain Account name
 * @method void setAccountName(string $AccountName) Set Account name
 * @method string getAccountPassword() Obtain Password
 * @method void setAccountPassword(string $AccountPassword) Set Password
 * @method string getHost() Obtain Host
 * @method void setHost(string $Host) Set Host
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 */
class NewAccount extends AbstractModel
{
    /**
     * @var string Account name
     */
    public $AccountName;

    /**
     * @var string Password
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
     * @param string $AccountName Account name
     * @param string $AccountPassword Password
     * @param string $Host Host
     * @param string $Description Description
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
    }
}
