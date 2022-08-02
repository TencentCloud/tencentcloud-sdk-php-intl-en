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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 *  SQL query task
 *
 * @method string getSQL() Obtain Base64-encrypted SQL statement
 * @method void setSQL(string $SQL) Set Base64-encrypted SQL statement
 * @method array getConfig() Obtain Task configuration information
 * @method void setConfig(array $Config) Set Task configuration information
 */
class SQLTask extends AbstractModel
{
    /**
     * @var string Base64-encrypted SQL statement
     */
    public $SQL;

    /**
     * @var array Task configuration information
     */
    public $Config;

    /**
     * @param string $SQL Base64-encrypted SQL statement
     * @param array $Config Task configuration information
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
        if (array_key_exists("SQL",$param) and $param["SQL"] !== null) {
            $this->SQL = $param["SQL"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
            }
        }
    }
}
