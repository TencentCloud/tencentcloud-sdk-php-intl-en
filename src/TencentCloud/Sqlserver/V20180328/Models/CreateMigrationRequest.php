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
 * CreateMigration request structure.
 *
 * @method string getMigrateName() Obtain Migration task name
 * @method void setMigrateName(string $MigrateName) Set Migration task name
 * @method integer getMigrateType() Obtain Migration type (1: structure migration, 2: data migration, 3: incremental sync)
 * @method void setMigrateType(integer $MigrateType) Set Migration type (1: structure migration, 2: data migration, 3: incremental sync)
 * @method integer getSourceType() Obtain Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode)
 * @method void setSourceType(integer $SourceType) Set Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode)
 * @method MigrateSource getSource() Obtain Migration source
 * @method void setSource(MigrateSource $Source) Set Migration source
 * @method MigrateTarget getTarget() Obtain Migration target
 * @method void setTarget(MigrateTarget $Target) Set Migration target
 * @method array getMigrateDBSet() Obtain Database objects to be migrated. This parameter is not used for offline migration (SourceType=4 or SourceType=5)
 * @method void setMigrateDBSet(array $MigrateDBSet) Set Database objects to be migrated. This parameter is not used for offline migration (SourceType=4 or SourceType=5)
 * @method array getRenameRestore() Obtain Restore and rename the databases listed in `ReNameRestoreDatabase`. If this parameter is left empty, all restored databases will be renamed in the default format. This parameter takes effect only when `SourceType=5`.
 * @method void setRenameRestore(array $RenameRestore) Set Restore and rename the databases listed in `ReNameRestoreDatabase`. If this parameter is left empty, all restored databases will be renamed in the default format. This parameter takes effect only when `SourceType=5`.
 */
class CreateMigrationRequest extends AbstractModel
{
    /**
     * @var string Migration task name
     */
    public $MigrateName;

    /**
     * @var integer Migration type (1: structure migration, 2: data migration, 3: incremental sync)
     */
    public $MigrateType;

    /**
     * @var integer Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode)
     */
    public $SourceType;

    /**
     * @var MigrateSource Migration source
     */
    public $Source;

    /**
     * @var MigrateTarget Migration target
     */
    public $Target;

    /**
     * @var array Database objects to be migrated. This parameter is not used for offline migration (SourceType=4 or SourceType=5)
     */
    public $MigrateDBSet;

    /**
     * @var array Restore and rename the databases listed in `ReNameRestoreDatabase`. If this parameter is left empty, all restored databases will be renamed in the default format. This parameter takes effect only when `SourceType=5`.
     */
    public $RenameRestore;

    /**
     * @param string $MigrateName Migration task name
     * @param integer $MigrateType Migration type (1: structure migration, 2: data migration, 3: incremental sync)
     * @param integer $SourceType Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode)
     * @param MigrateSource $Source Migration source
     * @param MigrateTarget $Target Migration target
     * @param array $MigrateDBSet Database objects to be migrated. This parameter is not used for offline migration (SourceType=4 or SourceType=5)
     * @param array $RenameRestore Restore and rename the databases listed in `ReNameRestoreDatabase`. If this parameter is left empty, all restored databases will be renamed in the default format. This parameter takes effect only when `SourceType=5`.
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
        if (array_key_exists("MigrateName",$param) and $param["MigrateName"] !== null) {
            $this->MigrateName = $param["MigrateName"];
        }

        if (array_key_exists("MigrateType",$param) and $param["MigrateType"] !== null) {
            $this->MigrateType = $param["MigrateType"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = new MigrateSource();
            $this->Source->deserialize($param["Source"]);
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new MigrateTarget();
            $this->Target->deserialize($param["Target"]);
        }

        if (array_key_exists("MigrateDBSet",$param) and $param["MigrateDBSet"] !== null) {
            $this->MigrateDBSet = [];
            foreach ($param["MigrateDBSet"] as $key => $value){
                $obj = new MigrateDB();
                $obj->deserialize($value);
                array_push($this->MigrateDBSet, $obj);
            }
        }

        if (array_key_exists("RenameRestore",$param) and $param["RenameRestore"] !== null) {
            $this->RenameRestore = [];
            foreach ($param["RenameRestore"] as $key => $value){
                $obj = new RenameRestoreDatabase();
                $obj->deserialize($value);
                array_push($this->RenameRestore, $obj);
            }
        }
    }
}
