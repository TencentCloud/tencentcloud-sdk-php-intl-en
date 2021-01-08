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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetTableIndex request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster where the table resides
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where the table resides
 * @method array getSelectedTables() Obtain The list of tables that need to create global indexes
 * @method void setSelectedTables(array $SelectedTables) Set The list of tables that need to create global indexes
 */
class SetTableIndexRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster where the table resides
     */
    public $ClusterId;

    /**
     * @var array The list of tables that need to create global indexes
     */
    public $SelectedTables;

    /**
     * @param string $ClusterId ID of the cluster where the table resides
     * @param array $SelectedTables The list of tables that need to create global indexes
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
                $obj = new SelectedTableWithField();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
        }
    }
}
