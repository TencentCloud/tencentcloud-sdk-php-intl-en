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
 * 
 *
 * @method string getOldTable() Obtain Old table name.
 * @method void setOldTable(string $OldTable) Set Old table name.
 * @method string getNewTable() Obtain New table name.
 * @method void setNewTable(string $NewTable) Set New table name.
 */
class RollbackTableInfo extends AbstractModel
{
    /**
     * @var string Old table name.
     */
    public $OldTable;

    /**
     * @var string New table name.
     */
    public $NewTable;

    /**
     * @param string $OldTable Old table name.
     * @param string $NewTable New table name.
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
        if (array_key_exists("OldTable",$param) and $param["OldTable"] !== null) {
            $this->OldTable = $param["OldTable"];
        }

        if (array_key_exists("NewTable",$param) and $param["NewTable"] !== null) {
            $this->NewTable = $param["NewTable"];
        }
    }
}
