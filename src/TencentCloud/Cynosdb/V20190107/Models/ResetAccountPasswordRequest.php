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
 * ResetAccountPassword request structure.
 *
 * @method string getAccountName() Obtain Database account name
 * @method void setAccountName(string $AccountName) Set Database account name
 * @method string getAccountPassword() Obtain New password of the database account
 * @method void setAccountPassword(string $AccountPassword) Set New password of the database account
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getHost() Obtain Host. Default value: `%`
 * @method void setHost(string $Host) Set Host. Default value: `%`
 */
class ResetAccountPasswordRequest extends AbstractModel
{
    /**
     * @var string Database account name
     */
    public $AccountName;

    /**
     * @var string New password of the database account
     */
    public $AccountPassword;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Host. Default value: `%`
     */
    public $Host;

    /**
     * @param string $AccountName Database account name
     * @param string $AccountPassword New password of the database account
     * @param string $ClusterId Cluster ID
     * @param string $Host Host. Default value: `%`
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

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
