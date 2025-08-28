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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getDataBaseName() Obtain 
 * @method void setDataBaseName(string $DataBaseName) Set 
 * @method array getAccountPrivileges() Obtain 
 * @method void setAccountPrivileges(array $AccountPrivileges) Set 
 */
class DataBasePrivilegeModifyInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $DataBaseName;

    /**
     * @var array 
     */
    public $AccountPrivileges;

    /**
     * @param string $DataBaseName 
     * @param array $AccountPrivileges 
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
        if (array_key_exists("DataBaseName",$param) and $param["DataBaseName"] !== null) {
            $this->DataBaseName = $param["DataBaseName"];
        }

        if (array_key_exists("AccountPrivileges",$param) and $param["AccountPrivileges"] !== null) {
            $this->AccountPrivileges = [];
            foreach ($param["AccountPrivileges"] as $key => $value){
                $obj = new AccountPrivilege();
                $obj->deserialize($value);
                array_push($this->AccountPrivileges, $obj);
            }
        }
    }
}
