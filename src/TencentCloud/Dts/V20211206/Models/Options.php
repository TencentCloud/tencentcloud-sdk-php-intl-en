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
 * Data sync options
 *
 * @method string getInitType() Obtain <p>Synchronization initialization options: Data (Full Data initialization), Structure (Structure initialization), Full (Full Data and Structure initialization, default), None (incremental only). The mongodb link supports only Full Data initialization or incremental only.</p>
 * @method void setInitType(string $InitType) Set <p>Synchronization initialization options: Data (Full Data initialization), Structure (Structure initialization), Full (Full Data and Structure initialization, default), None (incremental only). The mongodb link supports only Full Data initialization or incremental only.</p>
 * @method string getDealOfExistSameTable() Obtain <p>Handling of tables with the same name, ReportErrorAfterCheck (pre-validation and error reporting, default), ExecuteAfterIgnore (ignore and continue execution).</p>
 * @method void setDealOfExistSameTable(string $DealOfExistSameTable) Set <p>Handling of tables with the same name, ReportErrorAfterCheck (pre-validation and error reporting, default), ExecuteAfterIgnore (ignore and continue execution).</p>
 * @method string getConflictHandleType() Obtain <p>Conflict resolution options: ReportError (report error, default), Ignore, Cover, ConditionCover</p>
 * @method void setConflictHandleType(string $ConflictHandleType) Set <p>Conflict resolution options: ReportError (report error, default), Ignore, Cover, ConditionCover</p>
 * @method boolean getAddAdditionalColumn() Obtain <p>Whether to add an additional column</p>
 * @method void setAddAdditionalColumn(boolean $AddAdditionalColumn) Set <p>Whether to add an additional column</p>
 * @method array getOpTypes() Obtain <p>Options for DML and DDL to be synchronized: Insert, Update, Delete, DDL (structure synchronization), PartialDDL (custom, can be used together with DdlOptions). Note that it must contain at least one DML option.</p>
 * @method void setOpTypes(array $OpTypes) Set <p>Options for DML and DDL to be synchronized: Insert, Update, Delete, DDL (structure synchronization), PartialDDL (custom, can be used together with DdlOptions). Note that it must contain at least one DML option.</p>
 * @method ConflictHandleOption getConflictHandleOption() Obtain <p>Detailed options for conflict resolution, such as condition row and conditional operation in condition coverage</p>
 * @method void setConflictHandleOption(ConflictHandleOption $ConflictHandleOption) Set <p>Detailed options for conflict resolution, such as condition row and conditional operation in condition coverage</p>
 * @method array getDdlOptions() Obtain <p>DDL synchronization option. Description of which DDLs to synchronize.</p>
 * @method void setDdlOptions(array $DdlOptions) Set <p>DDL synchronization option. Description of which DDLs to synchronize.</p>
 * @method KafkaOption getKafkaOption() Obtain <p>kafka sync options</p>
 * @method void setKafkaOption(KafkaOption $KafkaOption) Set <p>kafka sync options</p>
 * @method RateLimitOption getRateLimitOption() Obtain <p>Task speed limit information</p>
 * @method void setRateLimitOption(RateLimitOption $RateLimitOption) Set <p>Task speed limit information</p>
 * @method integer getAutoRetryTimeRangeMinutes() Obtain <p>Time window for automatic retry settings</p>
 * @method void setAutoRetryTimeRangeMinutes(integer $AutoRetryTimeRangeMinutes) Set <p>Time window for automatic retry settings</p>
 * @method string getStartPosition() Obtain <p>Synchronize to the specified checkpoint of the kafka link. Currently only support time format: 2023-12-20T19:24:23+08:00. If not specified, it is empty.</p>
 * @method void setStartPosition(string $StartPosition) Set <p>Synchronize to the specified checkpoint of the kafka link. Currently only support time format: 2023-12-20T19:24:23+08:00. If not specified, it is empty.</p>
 * @method boolean getFilterBeginCommit() Obtain <p>Whether to filter out begin and commit messages when synchronizing to kafka. Currently, only the mysql-to-kafka link supports this.</p>
 * @method void setFilterBeginCommit(boolean $FilterBeginCommit) Set <p>Whether to filter out begin and commit messages when synchronizing to kafka. Currently, only the mysql-to-kafka link supports this.</p>
 * @method boolean getFilterCheckpoint() Obtain <p>Whether to filter out checkpoint messages when synchronizing to kafka. Currently, only the mysql-to-kafka link supports this.</p>
 * @method void setFilterCheckpoint(boolean $FilterCheckpoint) Set <p>Whether to filter out checkpoint messages when synchronizing to kafka. Currently, only the mysql-to-kafka link supports this.</p>
 */
class Options extends AbstractModel
{
    /**
     * @var string <p>Synchronization initialization options: Data (Full Data initialization), Structure (Structure initialization), Full (Full Data and Structure initialization, default), None (incremental only). The mongodb link supports only Full Data initialization or incremental only.</p>
     */
    public $InitType;

    /**
     * @var string <p>Handling of tables with the same name, ReportErrorAfterCheck (pre-validation and error reporting, default), ExecuteAfterIgnore (ignore and continue execution).</p>
     */
    public $DealOfExistSameTable;

    /**
     * @var string <p>Conflict resolution options: ReportError (report error, default), Ignore, Cover, ConditionCover</p>
     */
    public $ConflictHandleType;

    /**
     * @var boolean <p>Whether to add an additional column</p>
     */
    public $AddAdditionalColumn;

    /**
     * @var array <p>Options for DML and DDL to be synchronized: Insert, Update, Delete, DDL (structure synchronization), PartialDDL (custom, can be used together with DdlOptions). Note that it must contain at least one DML option.</p>
     */
    public $OpTypes;

    /**
     * @var ConflictHandleOption <p>Detailed options for conflict resolution, such as condition row and conditional operation in condition coverage</p>
     */
    public $ConflictHandleOption;

    /**
     * @var array <p>DDL synchronization option. Description of which DDLs to synchronize.</p>
     */
    public $DdlOptions;

    /**
     * @var KafkaOption <p>kafka sync options</p>
     */
    public $KafkaOption;

    /**
     * @var RateLimitOption <p>Task speed limit information</p>
     */
    public $RateLimitOption;

    /**
     * @var integer <p>Time window for automatic retry settings</p>
     */
    public $AutoRetryTimeRangeMinutes;

    /**
     * @var string <p>Synchronize to the specified checkpoint of the kafka link. Currently only support time format: 2023-12-20T19:24:23+08:00. If not specified, it is empty.</p>
     */
    public $StartPosition;

    /**
     * @var boolean <p>Whether to filter out begin and commit messages when synchronizing to kafka. Currently, only the mysql-to-kafka link supports this.</p>
     */
    public $FilterBeginCommit;

    /**
     * @var boolean <p>Whether to filter out checkpoint messages when synchronizing to kafka. Currently, only the mysql-to-kafka link supports this.</p>
     */
    public $FilterCheckpoint;

    /**
     * @param string $InitType <p>Synchronization initialization options: Data (Full Data initialization), Structure (Structure initialization), Full (Full Data and Structure initialization, default), None (incremental only). The mongodb link supports only Full Data initialization or incremental only.</p>
     * @param string $DealOfExistSameTable <p>Handling of tables with the same name, ReportErrorAfterCheck (pre-validation and error reporting, default), ExecuteAfterIgnore (ignore and continue execution).</p>
     * @param string $ConflictHandleType <p>Conflict resolution options: ReportError (report error, default), Ignore, Cover, ConditionCover</p>
     * @param boolean $AddAdditionalColumn <p>Whether to add an additional column</p>
     * @param array $OpTypes <p>Options for DML and DDL to be synchronized: Insert, Update, Delete, DDL (structure synchronization), PartialDDL (custom, can be used together with DdlOptions). Note that it must contain at least one DML option.</p>
     * @param ConflictHandleOption $ConflictHandleOption <p>Detailed options for conflict resolution, such as condition row and conditional operation in condition coverage</p>
     * @param array $DdlOptions <p>DDL synchronization option. Description of which DDLs to synchronize.</p>
     * @param KafkaOption $KafkaOption <p>kafka sync options</p>
     * @param RateLimitOption $RateLimitOption <p>Task speed limit information</p>
     * @param integer $AutoRetryTimeRangeMinutes <p>Time window for automatic retry settings</p>
     * @param string $StartPosition <p>Synchronize to the specified checkpoint of the kafka link. Currently only support time format: 2023-12-20T19:24:23+08:00. If not specified, it is empty.</p>
     * @param boolean $FilterBeginCommit <p>Whether to filter out begin and commit messages when synchronizing to kafka. Currently, only the mysql-to-kafka link supports this.</p>
     * @param boolean $FilterCheckpoint <p>Whether to filter out checkpoint messages when synchronizing to kafka. Currently, only the mysql-to-kafka link supports this.</p>
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

        if (array_key_exists("RateLimitOption",$param) and $param["RateLimitOption"] !== null) {
            $this->RateLimitOption = new RateLimitOption();
            $this->RateLimitOption->deserialize($param["RateLimitOption"]);
        }

        if (array_key_exists("AutoRetryTimeRangeMinutes",$param) and $param["AutoRetryTimeRangeMinutes"] !== null) {
            $this->AutoRetryTimeRangeMinutes = $param["AutoRetryTimeRangeMinutes"];
        }

        if (array_key_exists("StartPosition",$param) and $param["StartPosition"] !== null) {
            $this->StartPosition = $param["StartPosition"];
        }

        if (array_key_exists("FilterBeginCommit",$param) and $param["FilterBeginCommit"] !== null) {
            $this->FilterBeginCommit = $param["FilterBeginCommit"];
        }

        if (array_key_exists("FilterCheckpoint",$param) and $param["FilterCheckpoint"] !== null) {
            $this->FilterCheckpoint = $param["FilterCheckpoint"];
        }
    }
}
