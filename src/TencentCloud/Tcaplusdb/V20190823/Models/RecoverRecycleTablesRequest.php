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
 * RecoverRecycleTables request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster where a table resides
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where a table resides
 * @method array getSelectedTables() Obtain Information of tables to be recovered
 * @method void setSelectedTables(array $SelectedTables) Set Information of tables to be recovered
 */
class RecoverRecycleTablesRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster where a table resides
     */
    public $ClusterId;

    /**
     * @var array Information of tables to be recovered
     */
    public $SelectedTables;

    /**
     * @param string $ClusterId ID of the cluster where a table resides
     * @param array $SelectedTables Information of tables to be recovered
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
    }
}
