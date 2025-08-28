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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupStatistical request structure.
 *
 * @method integer getLimit() Obtain The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 100.
 * @method void setLimit(integer $Limit) Set The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 100.
 * @method integer getOffset() Obtain Page number in pagination mode. The default value is 0.
 * @method void setOffset(integer $Offset) Set Page number in pagination mode. The default value is 0.
 * @method array getInstanceIdSet() Obtain One or more instance IDs. The instance ID is in the format of mssql-si2823jyl.
 * @method void setInstanceIdSet(array $InstanceIdSet) Set One or more instance IDs. The instance ID is in the format of mssql-si2823jyl.
 * @method array getInstanceNameSet() Obtain Instance name list. Fuzzy query is supported.
 * @method void setInstanceNameSet(array $InstanceNameSet) Set Instance name list. Fuzzy query is supported.
 * @method string getOrderBy() Obtain Sorting field. The default value is default, which indicates sorting by backup space in descending order. default - sort by backup space; data - sort by data backup; log - sort by log backup; auto - sort by automatic backup; manual - sort by manual backup.
 * @method void setOrderBy(string $OrderBy) Set Sorting field. The default value is default, which indicates sorting by backup space in descending order. default - sort by backup space; data - sort by data backup; log - sort by log backup; auto - sort by automatic backup; manual - sort by manual backup.
 * @method string getOrderByType() Obtain The default value is desc. [desc - descending order; asc - ascending order].
 * @method void setOrderByType(string $OrderByType) Set The default value is desc. [desc - descending order; asc - ascending order].
 */
class DescribeBackupStatisticalRequest extends AbstractModel
{
    /**
     * @var integer The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 100.
     */
    public $Limit;

    /**
     * @var integer Page number in pagination mode. The default value is 0.
     */
    public $Offset;

    /**
     * @var array One or more instance IDs. The instance ID is in the format of mssql-si2823jyl.
     */
    public $InstanceIdSet;

    /**
     * @var array Instance name list. Fuzzy query is supported.
     */
    public $InstanceNameSet;

    /**
     * @var string Sorting field. The default value is default, which indicates sorting by backup space in descending order. default - sort by backup space; data - sort by data backup; log - sort by log backup; auto - sort by automatic backup; manual - sort by manual backup.
     */
    public $OrderBy;

    /**
     * @var string The default value is desc. [desc - descending order; asc - ascending order].
     */
    public $OrderByType;

    /**
     * @param integer $Limit The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 100.
     * @param integer $Offset Page number in pagination mode. The default value is 0.
     * @param array $InstanceIdSet One or more instance IDs. The instance ID is in the format of mssql-si2823jyl.
     * @param array $InstanceNameSet Instance name list. Fuzzy query is supported.
     * @param string $OrderBy Sorting field. The default value is default, which indicates sorting by backup space in descending order. default - sort by backup space; data - sort by data backup; log - sort by log backup; auto - sort by automatic backup; manual - sort by manual backup.
     * @param string $OrderByType The default value is desc. [desc - descending order; asc - ascending order].
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("InstanceNameSet",$param) and $param["InstanceNameSet"] !== null) {
            $this->InstanceNameSet = $param["InstanceNameSet"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
