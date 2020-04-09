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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccountRemark request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of mssql-j8kv137v
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of mssql-j8kv137v
 * @method array getAccounts() Obtain Information of account for which to modify remarks
 * @method void setAccounts(array $Accounts) Set Information of account for which to modify remarks
 */
class ModifyAccountRemarkRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of mssql-j8kv137v
     */
    public $InstanceId;

    /**
     * @var array Information of account for which to modify remarks
     */
    public $Accounts;

    /**
     * @param string $InstanceId Instance ID in the format of mssql-j8kv137v
     * @param array $Accounts Information of account for which to modify remarks
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

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->Accounts = [];
            foreach ($param["Accounts"] as $key => $value){
                $obj = new AccountRemark();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }
    }
}
