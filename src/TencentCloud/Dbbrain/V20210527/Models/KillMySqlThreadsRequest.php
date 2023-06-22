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
 * KillMySqlThreads request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getStage() Obtain The stage of a session killing task. Valid values: `Prepare` (preparation stage), `Commit` (commit stage).
 * @method void setStage(string $Stage) Set The stage of a session killing task. Valid values: `Prepare` (preparation stage), `Commit` (commit stage).
 * @method array getThreads() Obtain List of IDs of the MySQL sessions to be killed. This parameter is used in the `Prepare` stage.
 * @method void setThreads(array $Threads) Set List of IDs of the MySQL sessions to be killed. This parameter is used in the `Prepare` stage.
 * @method string getSqlExecId() Obtain Execution ID. This parameter is used in the `Commit` stage.
 * @method void setSqlExecId(string $SqlExecId) Set Execution ID. This parameter is used in the `Commit` stage.
 * @method string getProduct() Obtain Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
 * @method void setProduct(string $Product) Set Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
 * @method boolean getRecordHistory() Obtain Whether to record the thread killing history. The default value is `true`, indicating “yes”. You can set it to `false` (“no”) to speed up the killing process.
 * @method void setRecordHistory(boolean $RecordHistory) Set Whether to record the thread killing history. The default value is `true`, indicating “yes”. You can set it to `false` (“no”) to speed up the killing process.
 */
class KillMySqlThreadsRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string The stage of a session killing task. Valid values: `Prepare` (preparation stage), `Commit` (commit stage).
     */
    public $Stage;

    /**
     * @var array List of IDs of the MySQL sessions to be killed. This parameter is used in the `Prepare` stage.
     */
    public $Threads;

    /**
     * @var string Execution ID. This parameter is used in the `Commit` stage.
     */
    public $SqlExecId;

    /**
     * @var string Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
     */
    public $Product;

    /**
     * @var boolean Whether to record the thread killing history. The default value is `true`, indicating “yes”. You can set it to `false` (“no”) to speed up the killing process.
     */
    public $RecordHistory;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $Stage The stage of a session killing task. Valid values: `Prepare` (preparation stage), `Commit` (commit stage).
     * @param array $Threads List of IDs of the MySQL sessions to be killed. This parameter is used in the `Prepare` stage.
     * @param string $SqlExecId Execution ID. This parameter is used in the `Commit` stage.
     * @param string $Product Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
     * @param boolean $RecordHistory Whether to record the thread killing history. The default value is `true`, indicating “yes”. You can set it to `false` (“no”) to speed up the killing process.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("Threads",$param) and $param["Threads"] !== null) {
            $this->Threads = $param["Threads"];
        }

        if (array_key_exists("SqlExecId",$param) and $param["SqlExecId"] !== null) {
            $this->SqlExecId = $param["SqlExecId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("RecordHistory",$param) and $param["RecordHistory"] !== null) {
            $this->RecordHistory = $param["RecordHistory"];
        }
    }
}
