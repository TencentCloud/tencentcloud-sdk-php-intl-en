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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDspmBackupLogList request structure.
 *
 * @method integer getLimit() Obtain <p>Number limit.</p>
 * @method void setLimit(integer $Limit) Set <p>Number limit.</p>
 * @method integer getOffset() Obtain <p>Offset.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getSort() Obtain <p>Sorting method (desc = descending order, asc = ascending order)</p>
 * @method void setSort(string $Sort) Set <p>Sorting method (desc = descending order, asc = ascending order)</p>
 * @method string getField() Obtain <p>Sorting field (supports 'StartTime')</p>
 * @method void setField(string $Field) Set <p>Sorting field (supports 'StartTime')</p>
 * @method integer getStartTime() Obtain <p>Start time.</p>
 * @method void setStartTime(integer $StartTime) Set <p>Start time.</p>
 * @method integer getEndTime() Obtain <p>End time.</p>
 * @method void setEndTime(integer $EndTime) Set <p>End time.</p>
 * @method integer getStatus() Obtain <p>Backup log status. 0: incomplete; 1: backup file; 2: recovering; 3: restored; 4: deleted; -1: full query.</p>
 * @method void setStatus(integer $Status) Set <p>Backup log status. 0: incomplete; 1: backup file; 2: recovering; 3: restored; 4: deleted; -1: full query.</p>
 * @method array getDbTypes() Obtain <p>Database type, for example: cdb, mariadb</p>
 * @method void setDbTypes(array $DbTypes) Set <p>Database type, for example: cdb, mariadb</p>
 */
class DescribeDspmBackupLogListRequest extends AbstractModel
{
    /**
     * @var integer <p>Number limit.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset.</p>
     */
    public $Offset;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Sorting method (desc = descending order, asc = ascending order)</p>
     */
    public $Sort;

    /**
     * @var string <p>Sorting field (supports 'StartTime')</p>
     */
    public $Field;

    /**
     * @var integer <p>Start time.</p>
     */
    public $StartTime;

    /**
     * @var integer <p>End time.</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Backup log status. 0: incomplete; 1: backup file; 2: recovering; 3: restored; 4: deleted; -1: full query.</p>
     */
    public $Status;

    /**
     * @var array <p>Database type, for example: cdb, mariadb</p>
     */
    public $DbTypes;

    /**
     * @param integer $Limit <p>Number limit.</p>
     * @param integer $Offset <p>Offset.</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $Sort <p>Sorting method (desc = descending order, asc = ascending order)</p>
     * @param string $Field <p>Sorting field (supports 'StartTime')</p>
     * @param integer $StartTime <p>Start time.</p>
     * @param integer $EndTime <p>End time.</p>
     * @param integer $Status <p>Backup log status. 0: incomplete; 1: backup file; 2: recovering; 3: restored; 4: deleted; -1: full query.</p>
     * @param array $DbTypes <p>Database type, for example: cdb, mariadb</p>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DbTypes",$param) and $param["DbTypes"] !== null) {
            $this->DbTypes = $param["DbTypes"];
        }
    }
}
