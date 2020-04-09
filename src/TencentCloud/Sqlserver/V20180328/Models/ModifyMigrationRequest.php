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
 * ModifyMigration request structure.
 *
 * @method integer getMigrateId() Obtain Migration task ID
 * @method void setMigrateId(integer $MigrateId) Set Migration task ID
 * @method string getMigrateName() Obtain New name of migration task. If this parameter is left empty, no modification will be made
 * @method void setMigrateName(string $MigrateName) Set New name of migration task. If this parameter is left empty, no modification will be made
 * @method integer getMigrateType() Obtain New migration type (1: structure migration, 2: data migration, 3: incremental sync). If this parameter is left empty, no modification will be made
 * @method void setMigrateType(integer $MigrateType) Set New migration type (1: structure migration, 2: data migration, 3: incremental sync). If this parameter is left empty, no modification will be made
 * @method integer getSourceType() Obtain Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode). If this parameter is left empty, no modification will be made
 * @method void setSourceType(integer $SourceType) Set Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode). If this parameter is left empty, no modification will be made
 * @method MigrateSource getSource() Obtain Migration source. If this parameter is left empty, no modification will be made
 * @method void setSource(MigrateSource $Source) Set Migration source. If this parameter is left empty, no modification will be made
 * @method MigrateTarget getTarget() Obtain Migration target. If this parameter is left empty, no modification will be made
 * @method void setTarget(MigrateTarget $Target) Set Migration target. If this parameter is left empty, no modification will be made
 * @method array getMigrateDBSet() Obtain Database objects to be migrated. This parameter is not used for offline migration (SourceType=4 or SourceType=5). If it left empty, no modification will be made
 * @method void setMigrateDBSet(array $MigrateDBSet) Set Database objects to be migrated. This parameter is not used for offline migration (SourceType=4 or SourceType=5). If it left empty, no modification will be made
 */
class ModifyMigrationRequest extends AbstractModel
{
    /**
     * @var integer Migration task ID
     */
    public $MigrateId;

    /**
     * @var string New name of migration task. If this parameter is left empty, no modification will be made
     */
    public $MigrateName;

    /**
     * @var integer New migration type (1: structure migration, 2: data migration, 3: incremental sync). If this parameter is left empty, no modification will be made
     */
    public $MigrateType;

    /**
     * @var integer Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode). If this parameter is left empty, no modification will be made
     */
    public $SourceType;

    /**
     * @var MigrateSource Migration source. If this parameter is left empty, no modification will be made
     */
    public $Source;

    /**
     * @var MigrateTarget Migration target. If this parameter is left empty, no modification will be made
     */
    public $Target;

    /**
     * @var array Database objects to be migrated. This parameter is not used for offline migration (SourceType=4 or SourceType=5). If it left empty, no modification will be made
     */
    public $MigrateDBSet;

    /**
     * @param integer $MigrateId Migration task ID
     * @param string $MigrateName New name of migration task. If this parameter is left empty, no modification will be made
     * @param integer $MigrateType New migration type (1: structure migration, 2: data migration, 3: incremental sync). If this parameter is left empty, no modification will be made
     * @param integer $SourceType Migration source type. 1: TencentDB for SQL Server, 2: CVM-based self-created SQL Server database; 3: SQL Server backup restoration, 4: SQL Server backup restoration (in COS mode). If this parameter is left empty, no modification will be made
     * @param MigrateSource $Source Migration source. If this parameter is left empty, no modification will be made
     * @param MigrateTarget $Target Migration target. If this parameter is left empty, no modification will be made
     * @param array $MigrateDBSet Database objects to be migrated. This parameter is not used for offline migration (SourceType=4 or SourceType=5). If it left empty, no modification will be made
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
        if (array_key_exists("MigrateId",$param) and $param["MigrateId"] !== null) {
            $this->MigrateId = $param["MigrateId"];
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
    }
}
