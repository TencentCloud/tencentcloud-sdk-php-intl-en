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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data Monitoring Results
 *
 * @method integer getTableTotal() Obtain Total Tables
 * @method void setTableTotal(integer $TableTotal) Set Total Tables
 * @method integer getColumnTotal() Obtain Total Number of Fields
 * @method void setColumnTotal(integer $ColumnTotal) Set Total Number of Fields
 * @method integer getTableConfig() Obtain Number of Table Configuration Checks
 * @method void setTableConfig(integer $TableConfig) Set Number of Table Configuration Checks
 * @method integer getColumnConfig() Obtain Number of Field Configuration Checks
 * @method void setColumnConfig(integer $ColumnConfig) Set Number of Field Configuration Checks
 * @method integer getTableExec() Obtain Actual Number of Table Checks
 * @method void setTableExec(integer $TableExec) Set Actual Number of Table Checks
 * @method integer getColumnExec() Obtain Actual Number of Field Checks
 * @method void setColumnExec(integer $ColumnExec) Set Actual Number of Field Checks
 */
class DataCheckStat extends AbstractModel
{
    /**
     * @var integer Total Tables
     */
    public $TableTotal;

    /**
     * @var integer Total Number of Fields
     */
    public $ColumnTotal;

    /**
     * @var integer Number of Table Configuration Checks
     */
    public $TableConfig;

    /**
     * @var integer Number of Field Configuration Checks
     */
    public $ColumnConfig;

    /**
     * @var integer Actual Number of Table Checks
     */
    public $TableExec;

    /**
     * @var integer Actual Number of Field Checks
     */
    public $ColumnExec;

    /**
     * @param integer $TableTotal Total Tables
     * @param integer $ColumnTotal Total Number of Fields
     * @param integer $TableConfig Number of Table Configuration Checks
     * @param integer $ColumnConfig Number of Field Configuration Checks
     * @param integer $TableExec Actual Number of Table Checks
     * @param integer $ColumnExec Actual Number of Field Checks
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
        if (array_key_exists("TableTotal",$param) and $param["TableTotal"] !== null) {
            $this->TableTotal = $param["TableTotal"];
        }

        if (array_key_exists("ColumnTotal",$param) and $param["ColumnTotal"] !== null) {
            $this->ColumnTotal = $param["ColumnTotal"];
        }

        if (array_key_exists("TableConfig",$param) and $param["TableConfig"] !== null) {
            $this->TableConfig = $param["TableConfig"];
        }

        if (array_key_exists("ColumnConfig",$param) and $param["ColumnConfig"] !== null) {
            $this->ColumnConfig = $param["ColumnConfig"];
        }

        if (array_key_exists("TableExec",$param) and $param["TableExec"] !== null) {
            $this->TableExec = $param["TableExec"];
        }

        if (array_key_exists("ColumnExec",$param) and $param["ColumnExec"] !== null) {
            $this->ColumnExec = $param["ColumnExec"];
        }
    }
}
