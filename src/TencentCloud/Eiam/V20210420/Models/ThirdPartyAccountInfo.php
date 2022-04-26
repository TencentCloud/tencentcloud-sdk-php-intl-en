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
 * Third-Party account information.
 *
 * @method string getAccountCode() Obtain Third-Party account code. `2` indicates WeCom account.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAccountCode(string $AccountCode) Set Third-Party account code. `2` indicates WeCom account.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAccountName() Obtain Username of the account.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAccountName(string $AccountName) Set Username of the account.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ThirdPartyAccountInfo extends AbstractModel
{
    /**
     * @var string Third-Party account code. `2` indicates WeCom account.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AccountCode;

    /**
     * @var string Username of the account.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AccountName;

    /**
     * @param string $AccountCode Third-Party account code. `2` indicates WeCom account.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AccountName Username of the account.
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
        if (array_key_exists("AccountCode",$param) and $param["AccountCode"] !== null) {
            $this->AccountCode = $param["AccountCode"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }
    }
}
