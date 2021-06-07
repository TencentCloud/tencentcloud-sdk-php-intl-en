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
 * MergeTablesData request structure.
 *
 * @method array getSelectedTables() Obtain Tables to be merged
 * @method void setSelectedTables(array $SelectedTables) Set Tables to be merged
 * @method boolean getIsOnlyCompare() Obtain Valid values: `true` (only compare), `false` (compare and merge)
 * @method void setIsOnlyCompare(boolean $IsOnlyCompare) Set Valid values: `true` (only compare), `false` (compare and merge)
 */
class MergeTablesDataRequest extends AbstractModel
{
    /**
     * @var array Tables to be merged
     */
    public $SelectedTables;

    /**
     * @var boolean Valid values: `true` (only compare), `false` (compare and merge)
     */
    public $IsOnlyCompare;

    /**
     * @param array $SelectedTables Tables to be merged
     * @param boolean $IsOnlyCompare Valid values: `true` (only compare), `false` (compare and merge)
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
        if (array_key_exists("SelectedTables",$param) and $param["SelectedTables"] !== null) {
            $this->SelectedTables = [];
            foreach ($param["SelectedTables"] as $key => $value){
                $obj = new MergeTablesInfo();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
        }

        if (array_key_exists("IsOnlyCompare",$param) and $param["IsOnlyCompare"] !== null) {
            $this->IsOnlyCompare = $param["IsOnlyCompare"];
        }
    }
}
