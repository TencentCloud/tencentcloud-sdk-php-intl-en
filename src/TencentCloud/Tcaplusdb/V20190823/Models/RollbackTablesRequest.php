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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RollbackTables request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster where the table to be rolled back resides
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where the table to be rolled back resides
 * @method array getSelectedTables() Obtain List of tables to be rolled back
 * @method void setSelectedTables(array $SelectedTables) Set List of tables to be rolled back
 * @method string getRollbackTime() Obtain Time to roll back to
 * @method void setRollbackTime(string $RollbackTime) Set Time to roll back to
 * @method string getMode() Obtain Rollback mode. `KEYS` is supported
 * @method void setMode(string $Mode) Set Rollback mode. `KEYS` is supported
 */
class RollbackTablesRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster where the table to be rolled back resides
     */
    public $ClusterId;

    /**
     * @var array List of tables to be rolled back
     */
    public $SelectedTables;

    /**
     * @var string Time to roll back to
     */
    public $RollbackTime;

    /**
     * @var string Rollback mode. `KEYS` is supported
     */
    public $Mode;

    /**
     * @param string $ClusterId ID of the cluster where the table to be rolled back resides
     * @param array $SelectedTables List of tables to be rolled back
     * @param string $RollbackTime Time to roll back to
     * @param string $Mode Rollback mode. `KEYS` is supported
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

        if (array_key_exists("SelectedTables",$param) and $param["SelectedTables"] !== null) {
            $this->SelectedTables = [];
            foreach ($param["SelectedTables"] as $key => $value){
                $obj = new SelectedTableInfoNew();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
        }

        if (array_key_exists("RollbackTime",$param) and $param["RollbackTime"] !== null) {
            $this->RollbackTime = $param["RollbackTime"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
