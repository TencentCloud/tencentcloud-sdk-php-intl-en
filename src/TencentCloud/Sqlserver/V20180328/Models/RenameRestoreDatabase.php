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
 * It is used to specify and rename the database to be restored through the `RestoreInstance`, `RollbackInstance`, `CreateMigration`, `CloneDB` or `ModifyBackupMigration` APIs.
 *
 * @method string getOldName() Obtain Database name. If the `OldName` database does not exist, a failure will be returned.
It can be left empty in offline migration tasks.
 * @method void setOldName(string $OldName) Set Database name. If the `OldName` database does not exist, a failure will be returned.
It can be left empty in offline migration tasks.
 * @method string getNewName() Obtain New database name. In offline migration, `OldName` will be used if `NewName` is left empty (`OldName` and `NewName` cannot be both empty). In database cloning, `OldName` and `NewName` must be both specified and cannot have the same value.
 * @method void setNewName(string $NewName) Set New database name. In offline migration, `OldName` will be used if `NewName` is left empty (`OldName` and `NewName` cannot be both empty). In database cloning, `OldName` and `NewName` must be both specified and cannot have the same value.
 */
class RenameRestoreDatabase extends AbstractModel
{
    /**
     * @var string Database name. If the `OldName` database does not exist, a failure will be returned.
It can be left empty in offline migration tasks.
     */
    public $OldName;

    /**
     * @var string New database name. In offline migration, `OldName` will be used if `NewName` is left empty (`OldName` and `NewName` cannot be both empty). In database cloning, `OldName` and `NewName` must be both specified and cannot have the same value.
     */
    public $NewName;

    /**
     * @param string $OldName Database name. If the `OldName` database does not exist, a failure will be returned.
It can be left empty in offline migration tasks.
     * @param string $NewName New database name. In offline migration, `OldName` will be used if `NewName` is left empty (`OldName` and `NewName` cannot be both empty). In database cloning, `OldName` and `NewName` must be both specified and cannot have the same value.
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
        if (array_key_exists("OldName",$param) and $param["OldName"] !== null) {
            $this->OldName = $param["OldName"];
        }

        if (array_key_exists("NewName",$param) and $param["NewName"] !== null) {
            $this->NewName = $param["NewName"];
        }
    }
}
