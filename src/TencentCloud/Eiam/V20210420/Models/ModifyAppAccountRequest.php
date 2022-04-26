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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAppAccount request structure.
 *
 * @method string getAccountId() Obtain Account ID.
 * @method void setAccountId(string $AccountId) Set Account ID.
 * @method string getAccountName() Obtain Account name. When this parameter is not specified, the name will not be modified.
 * @method void setAccountName(string $AccountName) Set Account name. When this parameter is not specified, the name will not be modified.
 * @method string getPassword() Obtain Account password. When this parameter is not specified, the password will not be changed.
 * @method void setPassword(string $Password) Set Account password. When this parameter is not specified, the password will not be changed.
 * @method string getDescription() Obtain Description. When this parameter is not specified, the description will not be modified.
 * @method void setDescription(string $Description) Set Description. When this parameter is not specified, the description will not be modified.
 */
class ModifyAppAccountRequest extends AbstractModel
{
    /**
     * @var string Account ID.
     */
    public $AccountId;

    /**
     * @var string Account name. When this parameter is not specified, the name will not be modified.
     */
    public $AccountName;

    /**
     * @var string Account password. When this parameter is not specified, the password will not be changed.
     */
    public $Password;

    /**
     * @var string Description. When this parameter is not specified, the description will not be modified.
     */
    public $Description;

    /**
     * @param string $AccountId Account ID.
     * @param string $AccountName Account name. When this parameter is not specified, the name will not be modified.
     * @param string $Password Account password. When this parameter is not specified, the password will not be changed.
     * @param string $Description Description. When this parameter is not specified, the description will not be modified.
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
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
