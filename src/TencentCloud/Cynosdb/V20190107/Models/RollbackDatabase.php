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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rollback database information.
 *
 * @method string getOldDatabase() Obtain Old database name.
 * @method void setOldDatabase(string $OldDatabase) Set Old database name.
 * @method string getNewDatabase() Obtain New database name.
 * @method void setNewDatabase(string $NewDatabase) Set New database name.
 */
class RollbackDatabase extends AbstractModel
{
    /**
     * @var string Old database name.
     */
    public $OldDatabase;

    /**
     * @var string New database name.
     */
    public $NewDatabase;

    /**
     * @param string $OldDatabase Old database name.
     * @param string $NewDatabase New database name.
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
        if (array_key_exists("OldDatabase",$param) and $param["OldDatabase"] !== null) {
            $this->OldDatabase = $param["OldDatabase"];
        }

        if (array_key_exists("NewDatabase",$param) and $param["NewDatabase"] !== null) {
            $this->NewDatabase = $param["NewDatabase"];
        }
    }
}
