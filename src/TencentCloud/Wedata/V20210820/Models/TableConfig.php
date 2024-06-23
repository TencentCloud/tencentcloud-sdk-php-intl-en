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
 * Rule Table Variable Replacement
 *
 * @method string getDatabaseId() Obtain Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseId(string $DatabaseId) Set Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseName() Obtain Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableId() Obtain Table ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableId(string $TableId) Set Table ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableName() Obtain Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableName(string $TableName) Set Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableKey() Obtain Table Key
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableKey(string $TableKey) Set Table Key
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getFieldConfig() Obtain Field Variable
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFieldConfig(array $FieldConfig) Set Field Variable
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TableConfig extends AbstractModel
{
    /**
     * @var string Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseId;

    /**
     * @var string Database nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseName;

    /**
     * @var string Table ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableId;

    /**
     * @var string Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableName;

    /**
     * @var string Table Key
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableKey;

    /**
     * @var array Field Variable
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FieldConfig;

    /**
     * @param string $DatabaseId Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseName Database nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableId Table ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableName Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableKey Table Key
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $FieldConfig Field Variable
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableKey",$param) and $param["TableKey"] !== null) {
            $this->TableKey = $param["TableKey"];
        }

        if (array_key_exists("FieldConfig",$param) and $param["FieldConfig"] !== null) {
            $this->FieldConfig = [];
            foreach ($param["FieldConfig"] as $key => $value){
                $obj = new FieldConfig();
                $obj->deserialize($value);
                array_push($this->FieldConfig, $obj);
            }
        }
    }
}
