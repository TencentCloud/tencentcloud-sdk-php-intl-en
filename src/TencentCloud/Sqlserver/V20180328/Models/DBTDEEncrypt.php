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
 * This example shows you how to enable or disable TDE of a database.
 *
 * @method string getDBName() Obtain 
 * @method void setDBName(string $DBName) Set 
 * @method string getEncryption() Obtain TDE status. Valid values: `enable` (enabled), `disable` (disabled).
 * @method void setEncryption(string $Encryption) Set TDE status. Valid values: `enable` (enabled), `disable` (disabled).
 */
class DBTDEEncrypt extends AbstractModel
{
    /**
     * @var string 
     */
    public $DBName;

    /**
     * @var string TDE status. Valid values: `enable` (enabled), `disable` (disabled).
     */
    public $Encryption;

    /**
     * @param string $DBName 
     * @param string $Encryption TDE status. Valid values: `enable` (enabled), `disable` (disabled).
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
        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }
    }
}
