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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDL/DML allowlist at the database/table/view level
 *
 * @method string getDbName() Obtain Database name for rule effectiveness
 * @method void setDbName(string $DbName) Set Database name for rule effectiveness
 * @method OpFilter getOpFilter() Obtain Database-level DDL/DML Filter Rule
 * @method void setOpFilter(OpFilter $OpFilter) Set Database-level DDL/DML Filter Rule
 * @method array getTables() Obtain Table-level DDL/DML filtering information
 * @method void setTables(array $Tables) Set Table-level DDL/DML filtering information
 * @method array getViews() Obtain View-level DDL/DML filtering information
 * @method void setViews(array $Views) Set View-level DDL/DML filtering information
 */
class DBOpFilter extends AbstractModel
{
    /**
     * @var string Database name for rule effectiveness
     */
    public $DbName;

    /**
     * @var OpFilter Database-level DDL/DML Filter Rule
     */
    public $OpFilter;

    /**
     * @var array Table-level DDL/DML filtering information
     */
    public $Tables;

    /**
     * @var array View-level DDL/DML filtering information
     */
    public $Views;

    /**
     * @param string $DbName Database name for rule effectiveness
     * @param OpFilter $OpFilter Database-level DDL/DML Filter Rule
     * @param array $Tables Table-level DDL/DML filtering information
     * @param array $Views View-level DDL/DML filtering information
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("OpFilter",$param) and $param["OpFilter"] !== null) {
            $this->OpFilter = new OpFilter();
            $this->OpFilter->deserialize($param["OpFilter"]);
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = [];
            foreach ($param["Tables"] as $key => $value){
                $obj = new TableFilter();
                $obj->deserialize($value);
                array_push($this->Tables, $obj);
            }
        }

        if (array_key_exists("Views",$param) and $param["Views"] !== null) {
            $this->Views = [];
            foreach ($param["Views"] as $key => $value){
                $obj = new ViewFilter();
                $obj->deserialize($value);
                array_push($this->Views, $obj);
            }
        }
    }
}
