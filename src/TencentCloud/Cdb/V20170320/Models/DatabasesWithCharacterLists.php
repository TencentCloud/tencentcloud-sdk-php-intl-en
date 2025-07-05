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
 * Database name and character set
 *
 * @method string getDatabaseName() Obtain Database name
 * @method void setDatabaseName(string $DatabaseName) Set Database name
 * @method string getCharacterSet() Obtain Character set
 * @method void setCharacterSet(string $CharacterSet) Set Character set
 */
class DatabasesWithCharacterLists extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $DatabaseName;

    /**
     * @var string Character set
     */
    public $CharacterSet;

    /**
     * @param string $DatabaseName Database name
     * @param string $CharacterSet Character set
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("CharacterSet",$param) and $param["CharacterSet"] !== null) {
            $this->CharacterSet = $param["CharacterSet"];
        }
    }
}
