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
 * Rollback Database Information
 *
 * @method string getOldDatabase() Obtain Old Database Name
 * @method void setOldDatabase(string $OldDatabase) Set Old Database Name
 * @method string getNewDatabase() Obtain New Database Name
 * @method void setNewDatabase(string $NewDatabase) Set New Database Name
 */
class RollbackDatabase extends AbstractModel
{
    /**
     * @var string Old Database Name
     */
    public $OldDatabase;

    /**
     * @var string New Database Name
     */
    public $NewDatabase;

    /**
     * @param string $OldDatabase Old Database Name
     * @param string $NewDatabase New Database Name
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
