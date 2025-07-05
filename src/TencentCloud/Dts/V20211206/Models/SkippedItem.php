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
 * Details of skipped tables
 *
 * @method string getDb() Obtain Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDb(string $Db) Set Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTable() Obtain Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTable(string $Table) Set Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReason() Obtain The cause why check is not initiated
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReason(string $Reason) Set The cause why check is not initiated
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SkippedItem extends AbstractModel
{
    /**
     * @var string Database name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Db;

    /**
     * @var string Table name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Table;

    /**
     * @var string The cause why check is not initiated
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Reason;

    /**
     * @param string $Db Database name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Table Table name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Reason The cause why check is not initiated
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
        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
