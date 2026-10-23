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
 * RollBackCluster request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getRollbackStrategy() Obtain Rollback policy. timeRollback: rollback by time point. snapRollback: rollback by backup file.
 * @method void setRollbackStrategy(string $RollbackStrategy) Set Rollback policy. timeRollback: rollback by time point. snapRollback: rollback by backup file.
 * @method integer getRollbackId() Obtain Backup file ID.
Required when the rollback policy is rollback by backup file.
 * @method void setRollbackId(integer $RollbackId) Set Backup file ID.
Required when the rollback policy is rollback by backup file.
 * @method string getExpectTime() Obtain Expected restore time.
Required if the rollback policy is timeRollback for rollback by time point.
 * @method void setExpectTime(string $ExpectTime) Set Expected restore time.
Required if the rollback policy is timeRollback for rollback by time point.
 * @method integer getExpectTimeThresh() Obtain Expected threshold (abandoned)
 * @method void setExpectTimeThresh(integer $ExpectTimeThresh) Set Expected threshold (abandoned)
 * @method array getRollbackDatabases() Obtain Database list for rollback
 * @method void setRollbackDatabases(array $RollbackDatabases) Set Database list for rollback
 * @method array getRollbackTables() Obtain List of rollback database tables
 * @method void setRollbackTables(array $RollbackTables) Set List of rollback database tables
 * @method string getRollbackMode() Obtain Point-in-Time Restore Mode. full: ordinary; db: quick; table: ultra-fast (ordinary is selected by default)
 * @method void setRollbackMode(string $RollbackMode) Set Point-in-Time Restore Mode. full: ordinary; db: quick; table: ultra-fast (ordinary is selected by default)
 * @method string getVaultId() Obtain Safe id
 * @method void setVaultId(string $VaultId) Set Safe id
 */
class RollBackClusterRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Rollback policy. timeRollback: rollback by time point. snapRollback: rollback by backup file.
     */
    public $RollbackStrategy;

    /**
     * @var integer Backup file ID.
Required when the rollback policy is rollback by backup file.
     */
    public $RollbackId;

    /**
     * @var string Expected restore time.
Required if the rollback policy is timeRollback for rollback by time point.
     */
    public $ExpectTime;

    /**
     * @var integer Expected threshold (abandoned)
     */
    public $ExpectTimeThresh;

    /**
     * @var array Database list for rollback
     */
    public $RollbackDatabases;

    /**
     * @var array List of rollback database tables
     */
    public $RollbackTables;

    /**
     * @var string Point-in-Time Restore Mode. full: ordinary; db: quick; table: ultra-fast (ordinary is selected by default)
     */
    public $RollbackMode;

    /**
     * @var string Safe id
     */
    public $VaultId;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $RollbackStrategy Rollback policy. timeRollback: rollback by time point. snapRollback: rollback by backup file.
     * @param integer $RollbackId Backup file ID.
Required when the rollback policy is rollback by backup file.
     * @param string $ExpectTime Expected restore time.
Required if the rollback policy is timeRollback for rollback by time point.
     * @param integer $ExpectTimeThresh Expected threshold (abandoned)
     * @param array $RollbackDatabases Database list for rollback
     * @param array $RollbackTables List of rollback database tables
     * @param string $RollbackMode Point-in-Time Restore Mode. full: ordinary; db: quick; table: ultra-fast (ordinary is selected by default)
     * @param string $VaultId Safe id
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("RollbackStrategy",$param) and $param["RollbackStrategy"] !== null) {
            $this->RollbackStrategy = $param["RollbackStrategy"];
        }

        if (array_key_exists("RollbackId",$param) and $param["RollbackId"] !== null) {
            $this->RollbackId = $param["RollbackId"];
        }

        if (array_key_exists("ExpectTime",$param) and $param["ExpectTime"] !== null) {
            $this->ExpectTime = $param["ExpectTime"];
        }

        if (array_key_exists("ExpectTimeThresh",$param) and $param["ExpectTimeThresh"] !== null) {
            $this->ExpectTimeThresh = $param["ExpectTimeThresh"];
        }

        if (array_key_exists("RollbackDatabases",$param) and $param["RollbackDatabases"] !== null) {
            $this->RollbackDatabases = [];
            foreach ($param["RollbackDatabases"] as $key => $value){
                $obj = new RollbackDatabase();
                $obj->deserialize($value);
                array_push($this->RollbackDatabases, $obj);
            }
        }

        if (array_key_exists("RollbackTables",$param) and $param["RollbackTables"] !== null) {
            $this->RollbackTables = [];
            foreach ($param["RollbackTables"] as $key => $value){
                $obj = new RollbackTable();
                $obj->deserialize($value);
                array_push($this->RollbackTables, $obj);
            }
        }

        if (array_key_exists("RollbackMode",$param) and $param["RollbackMode"] !== null) {
            $this->RollbackMode = $param["RollbackMode"];
        }

        if (array_key_exists("VaultId",$param) and $param["VaultId"] !== null) {
            $this->VaultId = $param["VaultId"];
        }
    }
}
