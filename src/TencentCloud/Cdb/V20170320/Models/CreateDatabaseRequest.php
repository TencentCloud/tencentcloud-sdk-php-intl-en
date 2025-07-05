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
 * CreateDatabase request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of `cdb-c1nl9rpv`,  which is the same as the one displayed in the TencentDB console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of `cdb-c1nl9rpv`,  which is the same as the one displayed in the TencentDB console.
 * @method string getDBName() Obtain 
 * @method void setDBName(string $DBName) Set 
 * @method string getCharacterSetName() Obtain Character set. Valid values:  `utf8`, `gbk`, `latin1`, `utf8mb4`.
 * @method void setCharacterSetName(string $CharacterSetName) Set Character set. Valid values:  `utf8`, `gbk`, `latin1`, `utf8mb4`.
 */
class CreateDatabaseRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of `cdb-c1nl9rpv`,  which is the same as the one displayed in the TencentDB console.
     */
    public $InstanceId;

    /**
     * @var string 
     */
    public $DBName;

    /**
     * @var string Character set. Valid values:  `utf8`, `gbk`, `latin1`, `utf8mb4`.
     */
    public $CharacterSetName;

    /**
     * @param string $InstanceId Instance ID in the format of `cdb-c1nl9rpv`,  which is the same as the one displayed in the TencentDB console.
     * @param string $DBName 
     * @param string $CharacterSetName Character set. Valid values:  `utf8`, `gbk`, `latin1`, `utf8mb4`.
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

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("CharacterSetName",$param) and $param["CharacterSetName"] !== null) {
            $this->CharacterSetName = $param["CharacterSetName"];
        }
    }
}
