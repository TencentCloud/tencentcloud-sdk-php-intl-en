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
 * DescribeCrossBackupStatistical request structure.
 *
 * @method integer getOffset() Obtain Pagination number.

 * @method void setOffset(integer $Offset) Set Pagination number.

 * @method integer getLimit() Obtain Pagination size.

 * @method void setLimit(integer $Limit) Set Pagination size.

 * @method array getInstanceIdSet() Obtain Instance ID list.

 * @method void setInstanceIdSet(array $InstanceIdSet) Set Instance ID list.

 * @method array getInstanceNameSet() Obtain Instance name list.
 * @method void setInstanceNameSet(array $InstanceNameSet) Set Instance name list.
 * @method string getCrossBackupStatus() Obtain Cross-region backup status. enable: enabled; disable: disabled.
 * @method void setCrossBackupStatus(string $CrossBackupStatus) Set Cross-region backup status. enable: enabled; disable: disabled.
 * @method string getCrossRegion() Obtain Target region for cross-region backups.
 * @method void setCrossRegion(string $CrossRegion) Set Target region for cross-region backups.
 * @method string getOrderBy() Obtain Sorting field. The default value is default, which indicates sorting by backup space in descending order. data - sort by data backup; log - sort by log backup.
 * @method void setOrderBy(string $OrderBy) Set Sorting field. The default value is default, which indicates sorting by backup space in descending order. data - sort by data backup; log - sort by log backup.
 * @method string getOrderByType() Obtain Collation rule (desc - descending order; asc - ascending order). The default value is desc.
 * @method void setOrderByType(string $OrderByType) Set Collation rule (desc - descending order; asc - ascending order). The default value is desc.
 */
class DescribeCrossBackupStatisticalRequest extends AbstractModel
{
    /**
     * @var integer Pagination number.

     */
    public $Offset;

    /**
     * @var integer Pagination size.

     */
    public $Limit;

    /**
     * @var array Instance ID list.

     */
    public $InstanceIdSet;

    /**
     * @var array Instance name list.
     */
    public $InstanceNameSet;

    /**
     * @var string Cross-region backup status. enable: enabled; disable: disabled.
     */
    public $CrossBackupStatus;

    /**
     * @var string Target region for cross-region backups.
     */
    public $CrossRegion;

    /**
     * @var string Sorting field. The default value is default, which indicates sorting by backup space in descending order. data - sort by data backup; log - sort by log backup.
     */
    public $OrderBy;

    /**
     * @var string Collation rule (desc - descending order; asc - ascending order). The default value is desc.
     */
    public $OrderByType;

    /**
     * @param integer $Offset Pagination number.

     * @param integer $Limit Pagination size.

     * @param array $InstanceIdSet Instance ID list.

     * @param array $InstanceNameSet Instance name list.
     * @param string $CrossBackupStatus Cross-region backup status. enable: enabled; disable: disabled.
     * @param string $CrossRegion Target region for cross-region backups.
     * @param string $OrderBy Sorting field. The default value is default, which indicates sorting by backup space in descending order. data - sort by data backup; log - sort by log backup.
     * @param string $OrderByType Collation rule (desc - descending order; asc - ascending order). The default value is desc.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("InstanceNameSet",$param) and $param["InstanceNameSet"] !== null) {
            $this->InstanceNameSet = $param["InstanceNameSet"];
        }

        if (array_key_exists("CrossBackupStatus",$param) and $param["CrossBackupStatus"] !== null) {
            $this->CrossBackupStatus = $param["CrossBackupStatus"];
        }

        if (array_key_exists("CrossRegion",$param) and $param["CrossRegion"] !== null) {
            $this->CrossRegion = $param["CrossRegion"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
