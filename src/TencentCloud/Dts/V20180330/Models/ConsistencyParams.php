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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sampling parameter for spot check
 *
 * @method integer getSelectRowsPerTable() Obtain Data content check parameter, which refers to the proportion of the rows selected for data comparison in all the rows of the table. Value: an integer between 1 and 100.
 * @method void setSelectRowsPerTable(integer $SelectRowsPerTable) Set Data content check parameter, which refers to the proportion of the rows selected for data comparison in all the rows of the table. Value: an integer between 1 and 100.
 * @method integer getTablesSelectAll() Obtain Data content check parameter, which refers to the proportion of the tables selected for data detection in all the tables. Value: an integer between 1 and 100.
 * @method void setTablesSelectAll(integer $TablesSelectAll) Set Data content check parameter, which refers to the proportion of the tables selected for data detection in all the tables. Value: an integer between 1 and 100.
 * @method integer getTablesSelectCount() Obtain Data quantity check parameter, which checks whether the numbers of rows are identical. It refers to the proportion of the tables selected for quantity check in all the tables. Value: an integer between 1 and 100.
 * @method void setTablesSelectCount(integer $TablesSelectCount) Set Data quantity check parameter, which checks whether the numbers of rows are identical. It refers to the proportion of the tables selected for quantity check in all the tables. Value: an integer between 1 and 100.
 */
class ConsistencyParams extends AbstractModel
{
    /**
     * @var integer Data content check parameter, which refers to the proportion of the rows selected for data comparison in all the rows of the table. Value: an integer between 1 and 100.
     */
    public $SelectRowsPerTable;

    /**
     * @var integer Data content check parameter, which refers to the proportion of the tables selected for data detection in all the tables. Value: an integer between 1 and 100.
     */
    public $TablesSelectAll;

    /**
     * @var integer Data quantity check parameter, which checks whether the numbers of rows are identical. It refers to the proportion of the tables selected for quantity check in all the tables. Value: an integer between 1 and 100.
     */
    public $TablesSelectCount;

    /**
     * @param integer $SelectRowsPerTable Data content check parameter, which refers to the proportion of the rows selected for data comparison in all the rows of the table. Value: an integer between 1 and 100.
     * @param integer $TablesSelectAll Data content check parameter, which refers to the proportion of the tables selected for data detection in all the tables. Value: an integer between 1 and 100.
     * @param integer $TablesSelectCount Data quantity check parameter, which checks whether the numbers of rows are identical. It refers to the proportion of the tables selected for quantity check in all the tables. Value: an integer between 1 and 100.
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
        if (array_key_exists("SelectRowsPerTable",$param) and $param["SelectRowsPerTable"] !== null) {
            $this->SelectRowsPerTable = $param["SelectRowsPerTable"];
        }

        if (array_key_exists("TablesSelectAll",$param) and $param["TablesSelectAll"] !== null) {
            $this->TablesSelectAll = $param["TablesSelectAll"];
        }

        if (array_key_exists("TablesSelectCount",$param) and $param["TablesSelectCount"] !== null) {
            $this->TablesSelectCount = $param["TablesSelectCount"];
        }
    }
}
