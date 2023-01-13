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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Top slow SQL statements
 *
 * @method float getLockTime() Obtain Total SQL lock wait time in seconds.
 * @method void setLockTime(float $LockTime) Set Total SQL lock wait time in seconds.
 * @method float getLockTimeMax() Obtain Maximum lock wait time in seconds
 * @method void setLockTimeMax(float $LockTimeMax) Set Maximum lock wait time in seconds
 * @method float getLockTimeMin() Obtain Minimum lock wait time in seconds
 * @method void setLockTimeMin(float $LockTimeMin) Set Minimum lock wait time in seconds
 * @method integer getRowsExamined() Obtain Total number of scanned rows
 * @method void setRowsExamined(integer $RowsExamined) Set Total number of scanned rows
 * @method integer getRowsExaminedMax() Obtain Maximum number of scanned rows
 * @method void setRowsExaminedMax(integer $RowsExaminedMax) Set Maximum number of scanned rows
 * @method integer getRowsExaminedMin() Obtain Minimum number of scanned rows
 * @method void setRowsExaminedMin(integer $RowsExaminedMin) Set Minimum number of scanned rows
 * @method float getQueryTime() Obtain Total duration in seconds
 * @method void setQueryTime(float $QueryTime) Set Total duration in seconds
 * @method float getQueryTimeMax() Obtain Maximum execution time in seconds
 * @method void setQueryTimeMax(float $QueryTimeMax) Set Maximum execution time in seconds
 * @method float getQueryTimeMin() Obtain Minimum execution time in seconds
 * @method void setQueryTimeMin(float $QueryTimeMin) Set Minimum execution time in seconds
 * @method integer getRowsSent() Obtain Total number of returned rows
 * @method void setRowsSent(integer $RowsSent) Set Total number of returned rows
 * @method integer getRowsSentMax() Obtain Maximum number of returned rows
 * @method void setRowsSentMax(integer $RowsSentMax) Set Maximum number of returned rows
 * @method integer getRowsSentMin() Obtain Minimum number of returned rows
 * @method void setRowsSentMin(integer $RowsSentMin) Set Minimum number of returned rows
 * @method integer getExecTimes() Obtain Number of executions
 * @method void setExecTimes(integer $ExecTimes) Set Number of executions
 * @method string getSqlTemplate() Obtain SQL template
 * @method void setSqlTemplate(string $SqlTemplate) Set SQL template
 * @method string getSqlText() Obtain SQL statements with parameter (random)
 * @method void setSqlText(string $SqlText) Set SQL statements with parameter (random)
 * @method string getSchema() Obtain Database name
 * @method void setSchema(string $Schema) Set Database name
 * @method float getQueryTimeRatio() Obtain Ratio of the total duration in %
 * @method void setQueryTimeRatio(float $QueryTimeRatio) Set Ratio of the total duration in %
 * @method float getLockTimeRatio() Obtain Ratio of the total SQL lock wait time in %
 * @method void setLockTimeRatio(float $LockTimeRatio) Set Ratio of the total SQL lock wait time in %
 * @method float getRowsExaminedRatio() Obtain Ratio of total number of scanned rows in %
 * @method void setRowsExaminedRatio(float $RowsExaminedRatio) Set Ratio of total number of scanned rows in %
 * @method float getRowsSentRatio() Obtain Ratio of total number of returned rows in %
 * @method void setRowsSentRatio(float $RowsSentRatio) Set Ratio of total number of returned rows in %
 * @method float getQueryTimeAvg() Obtain Average execution time in seconds
 * @method void setQueryTimeAvg(float $QueryTimeAvg) Set Average execution time in seconds
 * @method float getRowsSentAvg() Obtain Average number of returned rows
 * @method void setRowsSentAvg(float $RowsSentAvg) Set Average number of returned rows
 * @method float getLockTimeAvg() Obtain Average lock wait time in seconds
 * @method void setLockTimeAvg(float $LockTimeAvg) Set Average lock wait time in seconds
 * @method float getRowsExaminedAvg() Obtain Average number of scanned rows
 * @method void setRowsExaminedAvg(float $RowsExaminedAvg) Set Average number of scanned rows
 * @method string getMd5() Obtain MD5 value of the SQL template
 * @method void setMd5(string $Md5) Set MD5 value of the SQL template
 */
class SlowLogTopSqlItem extends AbstractModel
{
    /**
     * @var float Total SQL lock wait time in seconds.
     */
    public $LockTime;

    /**
     * @var float Maximum lock wait time in seconds
     */
    public $LockTimeMax;

    /**
     * @var float Minimum lock wait time in seconds
     */
    public $LockTimeMin;

    /**
     * @var integer Total number of scanned rows
     */
    public $RowsExamined;

    /**
     * @var integer Maximum number of scanned rows
     */
    public $RowsExaminedMax;

    /**
     * @var integer Minimum number of scanned rows
     */
    public $RowsExaminedMin;

    /**
     * @var float Total duration in seconds
     */
    public $QueryTime;

    /**
     * @var float Maximum execution time in seconds
     */
    public $QueryTimeMax;

    /**
     * @var float Minimum execution time in seconds
     */
    public $QueryTimeMin;

    /**
     * @var integer Total number of returned rows
     */
    public $RowsSent;

    /**
     * @var integer Maximum number of returned rows
     */
    public $RowsSentMax;

    /**
     * @var integer Minimum number of returned rows
     */
    public $RowsSentMin;

    /**
     * @var integer Number of executions
     */
    public $ExecTimes;

    /**
     * @var string SQL template
     */
    public $SqlTemplate;

    /**
     * @var string SQL statements with parameter (random)
     */
    public $SqlText;

    /**
     * @var string Database name
     */
    public $Schema;

    /**
     * @var float Ratio of the total duration in %
     */
    public $QueryTimeRatio;

    /**
     * @var float Ratio of the total SQL lock wait time in %
     */
    public $LockTimeRatio;

    /**
     * @var float Ratio of total number of scanned rows in %
     */
    public $RowsExaminedRatio;

    /**
     * @var float Ratio of total number of returned rows in %
     */
    public $RowsSentRatio;

    /**
     * @var float Average execution time in seconds
     */
    public $QueryTimeAvg;

    /**
     * @var float Average number of returned rows
     */
    public $RowsSentAvg;

    /**
     * @var float Average lock wait time in seconds
     */
    public $LockTimeAvg;

    /**
     * @var float Average number of scanned rows
     */
    public $RowsExaminedAvg;

    /**
     * @var string MD5 value of the SQL template
     */
    public $Md5;

    /**
     * @param float $LockTime Total SQL lock wait time in seconds.
     * @param float $LockTimeMax Maximum lock wait time in seconds
     * @param float $LockTimeMin Minimum lock wait time in seconds
     * @param integer $RowsExamined Total number of scanned rows
     * @param integer $RowsExaminedMax Maximum number of scanned rows
     * @param integer $RowsExaminedMin Minimum number of scanned rows
     * @param float $QueryTime Total duration in seconds
     * @param float $QueryTimeMax Maximum execution time in seconds
     * @param float $QueryTimeMin Minimum execution time in seconds
     * @param integer $RowsSent Total number of returned rows
     * @param integer $RowsSentMax Maximum number of returned rows
     * @param integer $RowsSentMin Minimum number of returned rows
     * @param integer $ExecTimes Number of executions
     * @param string $SqlTemplate SQL template
     * @param string $SqlText SQL statements with parameter (random)
     * @param string $Schema Database name
     * @param float $QueryTimeRatio Ratio of the total duration in %
     * @param float $LockTimeRatio Ratio of the total SQL lock wait time in %
     * @param float $RowsExaminedRatio Ratio of total number of scanned rows in %
     * @param float $RowsSentRatio Ratio of total number of returned rows in %
     * @param float $QueryTimeAvg Average execution time in seconds
     * @param float $RowsSentAvg Average number of returned rows
     * @param float $LockTimeAvg Average lock wait time in seconds
     * @param float $RowsExaminedAvg Average number of scanned rows
     * @param string $Md5 MD5 value of the SQL template
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
        if (array_key_exists("LockTime",$param) and $param["LockTime"] !== null) {
            $this->LockTime = $param["LockTime"];
        }

        if (array_key_exists("LockTimeMax",$param) and $param["LockTimeMax"] !== null) {
            $this->LockTimeMax = $param["LockTimeMax"];
        }

        if (array_key_exists("LockTimeMin",$param) and $param["LockTimeMin"] !== null) {
            $this->LockTimeMin = $param["LockTimeMin"];
        }

        if (array_key_exists("RowsExamined",$param) and $param["RowsExamined"] !== null) {
            $this->RowsExamined = $param["RowsExamined"];
        }

        if (array_key_exists("RowsExaminedMax",$param) and $param["RowsExaminedMax"] !== null) {
            $this->RowsExaminedMax = $param["RowsExaminedMax"];
        }

        if (array_key_exists("RowsExaminedMin",$param) and $param["RowsExaminedMin"] !== null) {
            $this->RowsExaminedMin = $param["RowsExaminedMin"];
        }

        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
        }

        if (array_key_exists("QueryTimeMax",$param) and $param["QueryTimeMax"] !== null) {
            $this->QueryTimeMax = $param["QueryTimeMax"];
        }

        if (array_key_exists("QueryTimeMin",$param) and $param["QueryTimeMin"] !== null) {
            $this->QueryTimeMin = $param["QueryTimeMin"];
        }

        if (array_key_exists("RowsSent",$param) and $param["RowsSent"] !== null) {
            $this->RowsSent = $param["RowsSent"];
        }

        if (array_key_exists("RowsSentMax",$param) and $param["RowsSentMax"] !== null) {
            $this->RowsSentMax = $param["RowsSentMax"];
        }

        if (array_key_exists("RowsSentMin",$param) and $param["RowsSentMin"] !== null) {
            $this->RowsSentMin = $param["RowsSentMin"];
        }

        if (array_key_exists("ExecTimes",$param) and $param["ExecTimes"] !== null) {
            $this->ExecTimes = $param["ExecTimes"];
        }

        if (array_key_exists("SqlTemplate",$param) and $param["SqlTemplate"] !== null) {
            $this->SqlTemplate = $param["SqlTemplate"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("QueryTimeRatio",$param) and $param["QueryTimeRatio"] !== null) {
            $this->QueryTimeRatio = $param["QueryTimeRatio"];
        }

        if (array_key_exists("LockTimeRatio",$param) and $param["LockTimeRatio"] !== null) {
            $this->LockTimeRatio = $param["LockTimeRatio"];
        }

        if (array_key_exists("RowsExaminedRatio",$param) and $param["RowsExaminedRatio"] !== null) {
            $this->RowsExaminedRatio = $param["RowsExaminedRatio"];
        }

        if (array_key_exists("RowsSentRatio",$param) and $param["RowsSentRatio"] !== null) {
            $this->RowsSentRatio = $param["RowsSentRatio"];
        }

        if (array_key_exists("QueryTimeAvg",$param) and $param["QueryTimeAvg"] !== null) {
            $this->QueryTimeAvg = $param["QueryTimeAvg"];
        }

        if (array_key_exists("RowsSentAvg",$param) and $param["RowsSentAvg"] !== null) {
            $this->RowsSentAvg = $param["RowsSentAvg"];
        }

        if (array_key_exists("LockTimeAvg",$param) and $param["LockTimeAvg"] !== null) {
            $this->LockTimeAvg = $param["LockTimeAvg"];
        }

        if (array_key_exists("RowsExaminedAvg",$param) and $param["RowsExaminedAvg"] !== null) {
            $this->RowsExaminedAvg = $param["RowsExaminedAvg"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }
    }
}
