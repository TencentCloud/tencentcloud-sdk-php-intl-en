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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a slow query that has been logged
 *
 * @method string getCheckSum() Obtain Statement checksum for querying details
 * @method void setCheckSum(string $CheckSum) Set Statement checksum for querying details
 * @method string getDb() Obtain Database name
 * @method void setDb(string $Db) Set Database name
 * @method string getFingerPrint() Obtain Abstracted SQL statement
 * @method void setFingerPrint(string $FingerPrint) Set Abstracted SQL statement
 * @method string getLockTimeAvg() Obtain Average lock time
 * @method void setLockTimeAvg(string $LockTimeAvg) Set Average lock time
 * @method string getLockTimeMax() Obtain Maximum lock time
 * @method void setLockTimeMax(string $LockTimeMax) Set Maximum lock time
 * @method string getLockTimeMin() Obtain Minimum lock time
 * @method void setLockTimeMin(string $LockTimeMin) Set Minimum lock time
 * @method string getLockTimeSum() Obtain Total lock time
 * @method void setLockTimeSum(string $LockTimeSum) Set Total lock time
 * @method string getQueryCount() Obtain Number of queries
 * @method void setQueryCount(string $QueryCount) Set Number of queries
 * @method string getQueryTimeAvg() Obtain Average query time
 * @method void setQueryTimeAvg(string $QueryTimeAvg) Set Average query time
 * @method string getQueryTimeMax() Obtain Maximum query time
 * @method void setQueryTimeMax(string $QueryTimeMax) Set Maximum query time
 * @method string getQueryTimeMin() Obtain Minimum query time
 * @method void setQueryTimeMin(string $QueryTimeMin) Set Minimum query time
 * @method string getQueryTimeSum() Obtain Total query time
 * @method void setQueryTimeSum(string $QueryTimeSum) Set Total query time
 * @method string getRowsExaminedSum() Obtain Number of scanned rows
 * @method void setRowsExaminedSum(string $RowsExaminedSum) Set Number of scanned rows
 * @method string getRowsSentSum() Obtain Number of sent rows
 * @method void setRowsSentSum(string $RowsSentSum) Set Number of sent rows
 * @method string getTsMax() Obtain Last execution time
 * @method void setTsMax(string $TsMax) Set Last execution time
 * @method string getTsMin() Obtain First execution time
 * @method void setTsMin(string $TsMin) Set First execution time
 * @method string getUser() Obtain Account
 * @method void setUser(string $User) Set Account
 * @method string getExampleSql() Obtain Sample SQL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExampleSql(string $ExampleSql) Set Sample SQL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHost() Obtain Host address of account
 * @method void setHost(string $Host) Set Host address of account
 */
class SlowLogData extends AbstractModel
{
    /**
     * @var string Statement checksum for querying details
     */
    public $CheckSum;

    /**
     * @var string Database name
     */
    public $Db;

    /**
     * @var string Abstracted SQL statement
     */
    public $FingerPrint;

    /**
     * @var string Average lock time
     */
    public $LockTimeAvg;

    /**
     * @var string Maximum lock time
     */
    public $LockTimeMax;

    /**
     * @var string Minimum lock time
     */
    public $LockTimeMin;

    /**
     * @var string Total lock time
     */
    public $LockTimeSum;

    /**
     * @var string Number of queries
     */
    public $QueryCount;

    /**
     * @var string Average query time
     */
    public $QueryTimeAvg;

    /**
     * @var string Maximum query time
     */
    public $QueryTimeMax;

    /**
     * @var string Minimum query time
     */
    public $QueryTimeMin;

    /**
     * @var string Total query time
     */
    public $QueryTimeSum;

    /**
     * @var string Number of scanned rows
     */
    public $RowsExaminedSum;

    /**
     * @var string Number of sent rows
     */
    public $RowsSentSum;

    /**
     * @var string Last execution time
     */
    public $TsMax;

    /**
     * @var string First execution time
     */
    public $TsMin;

    /**
     * @var string Account
     */
    public $User;

    /**
     * @var string Sample SQL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExampleSql;

    /**
     * @var string Host address of account
     */
    public $Host;

    /**
     * @param string $CheckSum Statement checksum for querying details
     * @param string $Db Database name
     * @param string $FingerPrint Abstracted SQL statement
     * @param string $LockTimeAvg Average lock time
     * @param string $LockTimeMax Maximum lock time
     * @param string $LockTimeMin Minimum lock time
     * @param string $LockTimeSum Total lock time
     * @param string $QueryCount Number of queries
     * @param string $QueryTimeAvg Average query time
     * @param string $QueryTimeMax Maximum query time
     * @param string $QueryTimeMin Minimum query time
     * @param string $QueryTimeSum Total query time
     * @param string $RowsExaminedSum Number of scanned rows
     * @param string $RowsSentSum Number of sent rows
     * @param string $TsMax Last execution time
     * @param string $TsMin First execution time
     * @param string $User Account
     * @param string $ExampleSql Sample SQL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Host Host address of account
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
        if (array_key_exists("CheckSum",$param) and $param["CheckSum"] !== null) {
            $this->CheckSum = $param["CheckSum"];
        }

        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("FingerPrint",$param) and $param["FingerPrint"] !== null) {
            $this->FingerPrint = $param["FingerPrint"];
        }

        if (array_key_exists("LockTimeAvg",$param) and $param["LockTimeAvg"] !== null) {
            $this->LockTimeAvg = $param["LockTimeAvg"];
        }

        if (array_key_exists("LockTimeMax",$param) and $param["LockTimeMax"] !== null) {
            $this->LockTimeMax = $param["LockTimeMax"];
        }

        if (array_key_exists("LockTimeMin",$param) and $param["LockTimeMin"] !== null) {
            $this->LockTimeMin = $param["LockTimeMin"];
        }

        if (array_key_exists("LockTimeSum",$param) and $param["LockTimeSum"] !== null) {
            $this->LockTimeSum = $param["LockTimeSum"];
        }

        if (array_key_exists("QueryCount",$param) and $param["QueryCount"] !== null) {
            $this->QueryCount = $param["QueryCount"];
        }

        if (array_key_exists("QueryTimeAvg",$param) and $param["QueryTimeAvg"] !== null) {
            $this->QueryTimeAvg = $param["QueryTimeAvg"];
        }

        if (array_key_exists("QueryTimeMax",$param) and $param["QueryTimeMax"] !== null) {
            $this->QueryTimeMax = $param["QueryTimeMax"];
        }

        if (array_key_exists("QueryTimeMin",$param) and $param["QueryTimeMin"] !== null) {
            $this->QueryTimeMin = $param["QueryTimeMin"];
        }

        if (array_key_exists("QueryTimeSum",$param) and $param["QueryTimeSum"] !== null) {
            $this->QueryTimeSum = $param["QueryTimeSum"];
        }

        if (array_key_exists("RowsExaminedSum",$param) and $param["RowsExaminedSum"] !== null) {
            $this->RowsExaminedSum = $param["RowsExaminedSum"];
        }

        if (array_key_exists("RowsSentSum",$param) and $param["RowsSentSum"] !== null) {
            $this->RowsSentSum = $param["RowsSentSum"];
        }

        if (array_key_exists("TsMax",$param) and $param["TsMax"] !== null) {
            $this->TsMax = $param["TsMax"];
        }

        if (array_key_exists("TsMin",$param) and $param["TsMin"] !== null) {
            $this->TsMin = $param["TsMin"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("ExampleSql",$param) and $param["ExampleSql"] !== null) {
            $this->ExampleSql = $param["ExampleSql"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
