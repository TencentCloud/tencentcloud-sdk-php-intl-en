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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * When creating a backup, you need to specify the information of the table to be backed up.
 *
 * @method string getDb() Obtain Name of the database to be backed up
 * @method void setDb(string $Db) Set Name of the database to be backed up
 * @method string getTable() Obtain Name of the table to be backed up. If this parameter is passed in, the specified table in the database will be backed up; otherwise, the database will be backed up.
 * @method void setTable(string $Table) Set Name of the table to be backed up. If this parameter is passed in, the specified table in the database will be backed up; otherwise, the database will be backed up.
 */
class BackupItem extends AbstractModel
{
    /**
     * @var string Name of the database to be backed up
     */
    public $Db;

    /**
     * @var string Name of the table to be backed up. If this parameter is passed in, the specified table in the database will be backed up; otherwise, the database will be backed up.
     */
    public $Table;

    /**
     * @param string $Db Name of the database to be backed up
     * @param string $Table Name of the table to be backed up. If this parameter is passed in, the specified table in the database will be backed up; otherwise, the database will be backed up.
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
        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }
    }
}
