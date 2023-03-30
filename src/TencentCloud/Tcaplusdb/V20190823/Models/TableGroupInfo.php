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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table group details
 *
 * @method string getTableGroupId() Obtain Table group ID
 * @method void setTableGroupId(string $TableGroupId) Set Table group ID
 * @method string getTableGroupName() Obtain Table group name
 * @method void setTableGroupName(string $TableGroupName) Set Table group name
 * @method string getCreatedTime() Obtain Table group creation time
 * @method void setCreatedTime(string $CreatedTime) Set Table group creation time
 * @method integer getTableCount() Obtain Number of tables in table group
 * @method void setTableCount(integer $TableCount) Set Number of tables in table group
 * @method integer getTotalSize() Obtain Total table storage capacity in MB in table group
 * @method void setTotalSize(integer $TotalSize) Set Total table storage capacity in MB in table group
 * @method integer getTxhBackupExpireDay() Obtain The number of days before the backup files of the Txh tables expire and are deleted.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTxhBackupExpireDay(integer $TxhBackupExpireDay) Set The number of days before the backup files of the Txh tables expire and are deleted.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnableMysql() Obtain Whether MySQL load rebalancing is enabled. Valid values: `0` (Disabled), `1` (Enabling), `2` (Enabled).
 * @method void setEnableMysql(integer $EnableMysql) Set Whether MySQL load rebalancing is enabled. Valid values: `0` (Disabled), `1` (Enabling), `2` (Enabled).
 * @method string getMysqlConnIp() Obtain MySQL load rebalancing vip
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMysqlConnIp(string $MysqlConnIp) Set MySQL load rebalancing vip
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMysqlConnPort() Obtain MySQL load rebalancing vport
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMysqlConnPort(integer $MysqlConnPort) Set MySQL load rebalancing vport
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TableGroupInfo extends AbstractModel
{
    /**
     * @var string Table group ID
     */
    public $TableGroupId;

    /**
     * @var string Table group name
     */
    public $TableGroupName;

    /**
     * @var string Table group creation time
     */
    public $CreatedTime;

    /**
     * @var integer Number of tables in table group
     */
    public $TableCount;

    /**
     * @var integer Total table storage capacity in MB in table group
     */
    public $TotalSize;

    /**
     * @var integer The number of days before the backup files of the Txh tables expire and are deleted.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TxhBackupExpireDay;

    /**
     * @var integer Whether MySQL load rebalancing is enabled. Valid values: `0` (Disabled), `1` (Enabling), `2` (Enabled).
     */
    public $EnableMysql;

    /**
     * @var string MySQL load rebalancing vip
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MysqlConnIp;

    /**
     * @var integer MySQL load rebalancing vport
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MysqlConnPort;

    /**
     * @param string $TableGroupId Table group ID
     * @param string $TableGroupName Table group name
     * @param string $CreatedTime Table group creation time
     * @param integer $TableCount Number of tables in table group
     * @param integer $TotalSize Total table storage capacity in MB in table group
     * @param integer $TxhBackupExpireDay The number of days before the backup files of the Txh tables expire and are deleted.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EnableMysql Whether MySQL load rebalancing is enabled. Valid values: `0` (Disabled), `1` (Enabling), `2` (Enabled).
     * @param string $MysqlConnIp MySQL load rebalancing vip
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MysqlConnPort MySQL load rebalancing vport
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
        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableGroupName",$param) and $param["TableGroupName"] !== null) {
            $this->TableGroupName = $param["TableGroupName"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("TableCount",$param) and $param["TableCount"] !== null) {
            $this->TableCount = $param["TableCount"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("TxhBackupExpireDay",$param) and $param["TxhBackupExpireDay"] !== null) {
            $this->TxhBackupExpireDay = $param["TxhBackupExpireDay"];
        }

        if (array_key_exists("EnableMysql",$param) and $param["EnableMysql"] !== null) {
            $this->EnableMysql = $param["EnableMysql"];
        }

        if (array_key_exists("MysqlConnIp",$param) and $param["MysqlConnIp"] !== null) {
            $this->MysqlConnIp = $param["MysqlConnIp"];
        }

        if (array_key_exists("MysqlConnPort",$param) and $param["MysqlConnPort"] !== null) {
            $this->MysqlConnPort = $param["MysqlConnPort"];
        }
    }
}
