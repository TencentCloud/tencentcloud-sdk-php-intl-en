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
 * Execution plan details
 *
 * @method string getTemplateID() Obtain <p>Template ID</p>
 * @method void setTemplateID(string $TemplateID) Set <p>Template ID</p>
 * @method string getDb() Obtain <p>Database name.</p>
 * @method void setDb(string $Db) Set <p>Database name.</p>
 * @method string getSQLSample() Obtain <p>Original SQL sample</p>
 * @method void setSQLSample(string $SQLSample) Set <p>Original SQL sample</p>
 * @method string getSQLSampleRewritten() Obtain <p>Sample SQL after rewrite</p>
 * @method void setSQLSampleRewritten(string $SQLSampleRewritten) Set <p>Sample SQL after rewrite</p>
 * @method array getTablePlanBefore() Obtain <p>Execution plan before optimization - List</p>
 * @method void setTablePlanBefore(array $TablePlanBefore) Set <p>Execution plan before optimization - List</p>
 * @method array getTablePlanAfter() Obtain <p>Execution plan after optimization - List</p>
 * @method void setTablePlanAfter(array $TablePlanAfter) Set <p>Execution plan after optimization - List</p>
 * @method string getTreePlanBefore() Obtain <p>Tree execution plan before optimization</p>
 * @method void setTreePlanBefore(string $TreePlanBefore) Set <p>Tree execution plan before optimization</p>
 * @method string getTreePlanAfter() Obtain <p>Tree execution plan after optimization</p>
 * @method void setTreePlanAfter(string $TreePlanAfter) Set <p>Tree execution plan after optimization</p>
 * @method float getQueryTimeBefore() Obtain <p>Query time before optimization</p>
 * @method void setQueryTimeBefore(float $QueryTimeBefore) Set <p>Query time before optimization</p>
 * @method float getQueryTimeAfter() Obtain <p>Query time after optimization</p>
 * @method void setQueryTimeAfter(float $QueryTimeAfter) Set <p>Query time after optimization</p>
 * @method integer getSQLScanRowsBefore() Obtain <p>Number of scanned rows before optimization</p>
 * @method void setSQLScanRowsBefore(integer $SQLScanRowsBefore) Set <p>Number of scanned rows before optimization</p>
 * @method integer getSQLScanRowsAfter() Obtain <p>Number of scanned rows after optimization</p>
 * @method void setSQLScanRowsAfter(integer $SQLScanRowsAfter) Set <p>Number of scanned rows after optimization</p>
 */
class ExecutionPlanDetail extends AbstractModel
{
    /**
     * @var string <p>Template ID</p>
     */
    public $TemplateID;

    /**
     * @var string <p>Database name.</p>
     */
    public $Db;

    /**
     * @var string <p>Original SQL sample</p>
     */
    public $SQLSample;

    /**
     * @var string <p>Sample SQL after rewrite</p>
     */
    public $SQLSampleRewritten;

    /**
     * @var array <p>Execution plan before optimization - List</p>
     */
    public $TablePlanBefore;

    /**
     * @var array <p>Execution plan after optimization - List</p>
     */
    public $TablePlanAfter;

    /**
     * @var string <p>Tree execution plan before optimization</p>
     */
    public $TreePlanBefore;

    /**
     * @var string <p>Tree execution plan after optimization</p>
     */
    public $TreePlanAfter;

    /**
     * @var float <p>Query time before optimization</p>
     */
    public $QueryTimeBefore;

    /**
     * @var float <p>Query time after optimization</p>
     */
    public $QueryTimeAfter;

    /**
     * @var integer <p>Number of scanned rows before optimization</p>
     */
    public $SQLScanRowsBefore;

    /**
     * @var integer <p>Number of scanned rows after optimization</p>
     */
    public $SQLScanRowsAfter;

    /**
     * @param string $TemplateID <p>Template ID</p>
     * @param string $Db <p>Database name.</p>
     * @param string $SQLSample <p>Original SQL sample</p>
     * @param string $SQLSampleRewritten <p>Sample SQL after rewrite</p>
     * @param array $TablePlanBefore <p>Execution plan before optimization - List</p>
     * @param array $TablePlanAfter <p>Execution plan after optimization - List</p>
     * @param string $TreePlanBefore <p>Tree execution plan before optimization</p>
     * @param string $TreePlanAfter <p>Tree execution plan after optimization</p>
     * @param float $QueryTimeBefore <p>Query time before optimization</p>
     * @param float $QueryTimeAfter <p>Query time after optimization</p>
     * @param integer $SQLScanRowsBefore <p>Number of scanned rows before optimization</p>
     * @param integer $SQLScanRowsAfter <p>Number of scanned rows after optimization</p>
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
        if (array_key_exists("TemplateID",$param) and $param["TemplateID"] !== null) {
            $this->TemplateID = $param["TemplateID"];
        }

        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("SQLSample",$param) and $param["SQLSample"] !== null) {
            $this->SQLSample = $param["SQLSample"];
        }

        if (array_key_exists("SQLSampleRewritten",$param) and $param["SQLSampleRewritten"] !== null) {
            $this->SQLSampleRewritten = $param["SQLSampleRewritten"];
        }

        if (array_key_exists("TablePlanBefore",$param) and $param["TablePlanBefore"] !== null) {
            $this->TablePlanBefore = [];
            foreach ($param["TablePlanBefore"] as $key => $value){
                $obj = new ExplainRow();
                $obj->deserialize($value);
                array_push($this->TablePlanBefore, $obj);
            }
        }

        if (array_key_exists("TablePlanAfter",$param) and $param["TablePlanAfter"] !== null) {
            $this->TablePlanAfter = [];
            foreach ($param["TablePlanAfter"] as $key => $value){
                $obj = new ExplainRow();
                $obj->deserialize($value);
                array_push($this->TablePlanAfter, $obj);
            }
        }

        if (array_key_exists("TreePlanBefore",$param) and $param["TreePlanBefore"] !== null) {
            $this->TreePlanBefore = $param["TreePlanBefore"];
        }

        if (array_key_exists("TreePlanAfter",$param) and $param["TreePlanAfter"] !== null) {
            $this->TreePlanAfter = $param["TreePlanAfter"];
        }

        if (array_key_exists("QueryTimeBefore",$param) and $param["QueryTimeBefore"] !== null) {
            $this->QueryTimeBefore = $param["QueryTimeBefore"];
        }

        if (array_key_exists("QueryTimeAfter",$param) and $param["QueryTimeAfter"] !== null) {
            $this->QueryTimeAfter = $param["QueryTimeAfter"];
        }

        if (array_key_exists("SQLScanRowsBefore",$param) and $param["SQLScanRowsBefore"] !== null) {
            $this->SQLScanRowsBefore = $param["SQLScanRowsBefore"];
        }

        if (array_key_exists("SQLScanRowsAfter",$param) and $param["SQLScanRowsAfter"] !== null) {
            $this->SQLScanRowsAfter = $param["SQLScanRowsAfter"];
        }
    }
}
