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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccountPassword request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method string getNewPassword() Obtain New password of the database account. It can only contain 8-64 characters and must contain at least two of the following types of characters: letters, digits, and special characters (_+-&=!@#$%^*()).
 * @method void setNewPassword(string $NewPassword) Set New password of the database account. It can only contain 8-64 characters and must contain at least two of the following types of characters: letters, digits, and special characters (_+-&=!@#$%^*()).
 * @method array getAccounts() Obtain TDSQL for MySQL accounts. Obtain through the [DescribeAccounts](https://www.tencentcloud.com/document/api/236/17499?from_cn_redirect=1) API.
 * @method void setAccounts(array $Accounts) Set TDSQL for MySQL accounts. Obtain through the [DescribeAccounts](https://www.tencentcloud.com/document/api/236/17499?from_cn_redirect=1) API.
 * @method boolean getSkipValidatePassword() Obtain Deprecated.
 * @method void setSkipValidatePassword(boolean $SkipValidatePassword) Set Deprecated.
 */
class ModifyAccountPasswordRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var string New password of the database account. It can only contain 8-64 characters and must contain at least two of the following types of characters: letters, digits, and special characters (_+-&=!@#$%^*()).
     */
    public $NewPassword;

    /**
     * @var array TDSQL for MySQL accounts. Obtain through the [DescribeAccounts](https://www.tencentcloud.com/document/api/236/17499?from_cn_redirect=1) API.
     */
    public $Accounts;

    /**
     * @var boolean Deprecated.
     * @deprecated
     */
    public $SkipValidatePassword;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param string $NewPassword New password of the database account. It can only contain 8-64 characters and must contain at least two of the following types of characters: letters, digits, and special characters (_+-&=!@#$%^*()).
     * @param array $Accounts TDSQL for MySQL accounts. Obtain through the [DescribeAccounts](https://www.tencentcloud.com/document/api/236/17499?from_cn_redirect=1) API.
     * @param boolean $SkipValidatePassword Deprecated.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NewPassword",$param) and $param["NewPassword"] !== null) {
            $this->NewPassword = $param["NewPassword"];
        }

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->Accounts = [];
            foreach ($param["Accounts"] as $key => $value){
                $obj = new Account();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }

        if (array_key_exists("SkipValidatePassword",$param) and $param["SkipValidatePassword"] !== null) {
            $this->SkipValidatePassword = $param["SkipValidatePassword"];
        }
    }
}
