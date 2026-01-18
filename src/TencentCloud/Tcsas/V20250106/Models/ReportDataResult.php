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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * General response for data query reports
 *
 * @method string getDataResult() Obtain Base64-encoded result data
 * @method void setDataResult(string $DataResult) Set Base64-encoded result data
 * @method string getExecSql() Obtain Executed SQL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecSql(string $ExecSql) Set Executed SQL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getExecTime() Obtain Execution time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecTime(integer $ExecTime) Set Execution time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIndexId() Obtain Query index ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIndexId(string $IndexId) Set Query index ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ReportDataResult extends AbstractModel
{
    /**
     * @var string Base64-encoded result data
     */
    public $DataResult;

    /**
     * @var string Executed SQL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecSql;

    /**
     * @var integer Execution time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecTime;

    /**
     * @var string Query index ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IndexId;

    /**
     * @param string $DataResult Base64-encoded result data
     * @param string $ExecSql Executed SQL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ExecTime Execution time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IndexId Query index ID
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DataResult",$param) and $param["DataResult"] !== null) {
            $this->DataResult = $param["DataResult"];
        }

        if (array_key_exists("ExecSql",$param) and $param["ExecSql"] !== null) {
            $this->ExecSql = $param["ExecSql"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("IndexId",$param) and $param["IndexId"] !== null) {
            $this->IndexId = $param["IndexId"];
        }
    }
}
