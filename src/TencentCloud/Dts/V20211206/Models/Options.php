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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data sync options
 *
 * @method string getInitType() Obtain Sync initialization option. Valid values: `data` (full data initialization); `Structure` (structure initialization); `Full` (full data and structure initialization); `None` (incremental data only). Default value: `Full`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInitType(string $InitType) Set Sync initialization option. Valid values: `data` (full data initialization); `Structure` (structure initialization); `Full` (full data and structure initialization); `None` (incremental data only). Default value: `Full`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDealOfExistSameTable() Obtain Processing method for duplicate tables. Valid values: `ReportErrorAfterCheck`, `InitializeAfterDelete`, `ExecuteAfterIgnore`. Default value: `ReportErrorAfterCheck`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDealOfExistSameTable(string $DealOfExistSameTable) Set Processing method for duplicate tables. Valid values: `ReportErrorAfterCheck`, `InitializeAfterDelete`, `ExecuteAfterIgnore`. Default value: `ReportErrorAfterCheck`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConflictHandleType() Obtain Conflict processing option. Valid values: `ReportError` (report an error); `Ignore` (ignore); `Cover` (overwrite); `ConditionCover` (conditionally overwrite). Default value: `ReportError`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConflictHandleType(string $ConflictHandleType) Set Conflict processing option. Valid values: `ReportError` (report an error); `Ignore` (ignore); `Cover` (overwrite); `ConditionCover` (conditionally overwrite). Default value: `ReportError`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAddAdditionalColumn() Obtain Whether to add the additional column
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddAdditionalColumn(boolean $AddAdditionalColumn) Set Whether to add the additional column
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getOpTypes() Obtain DML and DDL options to be synced. Valid values: `Insert` (INSERT operations); `Update` (UPDATE operations); `Delete` (DELETE operations); `DDL` (structure sync); `PartialDDL` (custom option, which is used together with `DdlOptions`). You can also leave this parameter empty.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOpTypes(array $OpTypes) Set DML and DDL options to be synced. Valid values: `Insert` (INSERT operations); `Update` (UPDATE operations); `Delete` (DELETE operations); `DDL` (structure sync); `PartialDDL` (custom option, which is used together with `DdlOptions`). You can also leave this parameter empty.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ConflictHandleOption getConflictHandleOption() Obtain Detailed option for conflict processing, such as condition rows and operations in conditional overwrite.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConflictHandleOption(ConflictHandleOption $ConflictHandleOption) Set Detailed option for conflict processing, such as condition rows and operations in conditional overwrite.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDdlOptions() Obtain DDL statements to be synced
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDdlOptions(array $DdlOptions) Set DDL statements to be synced
Note: This field may return null, indicating that no valid values can be obtained.
 * @method KafkaOption getKafkaOption() Obtain Kafka sync options
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKafkaOption(KafkaOption $KafkaOption) Set Kafka sync options
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Options extends AbstractModel
{
    /**
     * @var string Sync initialization option. Valid values: `data` (full data initialization); `Structure` (structure initialization); `Full` (full data and structure initialization); `None` (incremental data only). Default value: `Full`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InitType;

    /**
     * @var string Processing method for duplicate tables. Valid values: `ReportErrorAfterCheck`, `InitializeAfterDelete`, `ExecuteAfterIgnore`. Default value: `ReportErrorAfterCheck`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DealOfExistSameTable;

    /**
     * @var string Conflict processing option. Valid values: `ReportError` (report an error); `Ignore` (ignore); `Cover` (overwrite); `ConditionCover` (conditionally overwrite). Default value: `ReportError`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConflictHandleType;

    /**
     * @var boolean Whether to add the additional column
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AddAdditionalColumn;

    /**
     * @var array DML and DDL options to be synced. Valid values: `Insert` (INSERT operations); `Update` (UPDATE operations); `Delete` (DELETE operations); `DDL` (structure sync); `PartialDDL` (custom option, which is used together with `DdlOptions`). You can also leave this parameter empty.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OpTypes;

    /**
     * @var ConflictHandleOption Detailed option for conflict processing, such as condition rows and operations in conditional overwrite.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConflictHandleOption;

    /**
     * @var array DDL statements to be synced
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DdlOptions;

    /**
     * @var KafkaOption Kafka sync options
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KafkaOption;

    /**
     * @param string $InitType Sync initialization option. Valid values: `data` (full data initialization); `Structure` (structure initialization); `Full` (full data and structure initialization); `None` (incremental data only). Default value: `Full`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DealOfExistSameTable Processing method for duplicate tables. Valid values: `ReportErrorAfterCheck`, `InitializeAfterDelete`, `ExecuteAfterIgnore`. Default value: `ReportErrorAfterCheck`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConflictHandleType Conflict processing option. Valid values: `ReportError` (report an error); `Ignore` (ignore); `Cover` (overwrite); `ConditionCover` (conditionally overwrite). Default value: `ReportError`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $AddAdditionalColumn Whether to add the additional column
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $OpTypes DML and DDL options to be synced. Valid values: `Insert` (INSERT operations); `Update` (UPDATE operations); `Delete` (DELETE operations); `DDL` (structure sync); `PartialDDL` (custom option, which is used together with `DdlOptions`). You can also leave this parameter empty.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ConflictHandleOption $ConflictHandleOption Detailed option for conflict processing, such as condition rows and operations in conditional overwrite.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DdlOptions DDL statements to be synced
Note: This field may return null, indicating that no valid values can be obtained.
     * @param KafkaOption $KafkaOption Kafka sync options
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
        if (array_key_exists("InitType",$param) and $param["InitType"] !== null) {
            $this->InitType = $param["InitType"];
        }

        if (array_key_exists("DealOfExistSameTable",$param) and $param["DealOfExistSameTable"] !== null) {
            $this->DealOfExistSameTable = $param["DealOfExistSameTable"];
        }

        if (array_key_exists("ConflictHandleType",$param) and $param["ConflictHandleType"] !== null) {
            $this->ConflictHandleType = $param["ConflictHandleType"];
        }

        if (array_key_exists("AddAdditionalColumn",$param) and $param["AddAdditionalColumn"] !== null) {
            $this->AddAdditionalColumn = $param["AddAdditionalColumn"];
        }

        if (array_key_exists("OpTypes",$param) and $param["OpTypes"] !== null) {
            $this->OpTypes = $param["OpTypes"];
        }

        if (array_key_exists("ConflictHandleOption",$param) and $param["ConflictHandleOption"] !== null) {
            $this->ConflictHandleOption = new ConflictHandleOption();
            $this->ConflictHandleOption->deserialize($param["ConflictHandleOption"]);
        }

        if (array_key_exists("DdlOptions",$param) and $param["DdlOptions"] !== null) {
            $this->DdlOptions = [];
            foreach ($param["DdlOptions"] as $key => $value){
                $obj = new DdlOption();
                $obj->deserialize($value);
                array_push($this->DdlOptions, $obj);
            }
        }

        if (array_key_exists("KafkaOption",$param) and $param["KafkaOption"] !== null) {
            $this->KafkaOption = new KafkaOption();
            $this->KafkaOption->deserialize($param["KafkaOption"]);
        }
    }
}
