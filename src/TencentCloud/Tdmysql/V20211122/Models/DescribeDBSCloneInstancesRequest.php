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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBSCloneInstances request structure.
 *
 * @method string getSourceInstanceId() Obtain <p>Source instance ID.</p>
 * @method void setSourceInstanceId(string $SourceInstanceId) Set <p>Source instance ID.</p>
 * @method string getDBType() Obtain <P>Engine type</p>
 * @method void setDBType(string $DBType) Set <P>Engine type</p>
 * @method string getEndCreateTime() Obtain <P>Creation end time</p>
 * @method void setEndCreateTime(string $EndCreateTime) Set <P>Creation end time</p>
 * @method string getFilterCloneType() Obtain <p>Clone kind: PITR time point BackupSet backup set</p>
 * @method void setFilterCloneType(string $FilterCloneType) Set <p>Clone kind: PITR time point BackupSet backup set</p>
 * @method integer getLimit() Obtain <P>Query count [0,200]</p>
 * @method void setLimit(integer $Limit) Set <P>Query count [0,200]</p>
 * @method integer getOffset() Obtain <p>Query offset [0,INF]</p>
 * @method void setOffset(integer $Offset) Set <p>Query offset [0,INF]</p>
 * @method string getOrderBy() Obtain <p>Sorting field: CloneTime, CreateTime</p>
 * @method void setOrderBy(string $OrderBy) Set <p>Sorting field: CloneTime, CreateTime</p>
 * @method string getOrderType() Obtain <p>Sorting type: ASC, DESC</p>
 * @method void setOrderType(string $OrderType) Set <p>Sorting type: ASC, DESC</p>
 * @method string getStartCreateTime() Obtain <P>Creation start time</p>
 * @method void setStartCreateTime(string $StartCreateTime) Set <P>Creation start time</p>
 */
class DescribeDBSCloneInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>Source instance ID.</p>
     */
    public $SourceInstanceId;

    /**
     * @var string <P>Engine type</p>
     */
    public $DBType;

    /**
     * @var string <P>Creation end time</p>
     */
    public $EndCreateTime;

    /**
     * @var string <p>Clone kind: PITR time point BackupSet backup set</p>
     */
    public $FilterCloneType;

    /**
     * @var integer <P>Query count [0,200]</p>
     */
    public $Limit;

    /**
     * @var integer <p>Query offset [0,INF]</p>
     */
    public $Offset;

    /**
     * @var string <p>Sorting field: CloneTime, CreateTime</p>
     */
    public $OrderBy;

    /**
     * @var string <p>Sorting type: ASC, DESC</p>
     */
    public $OrderType;

    /**
     * @var string <P>Creation start time</p>
     */
    public $StartCreateTime;

    /**
     * @param string $SourceInstanceId <p>Source instance ID.</p>
     * @param string $DBType <P>Engine type</p>
     * @param string $EndCreateTime <P>Creation end time</p>
     * @param string $FilterCloneType <p>Clone kind: PITR time point BackupSet backup set</p>
     * @param integer $Limit <P>Query count [0,200]</p>
     * @param integer $Offset <p>Query offset [0,INF]</p>
     * @param string $OrderBy <p>Sorting field: CloneTime, CreateTime</p>
     * @param string $OrderType <p>Sorting type: ASC, DESC</p>
     * @param string $StartCreateTime <P>Creation start time</p>
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
        if (array_key_exists("SourceInstanceId",$param) and $param["SourceInstanceId"] !== null) {
            $this->SourceInstanceId = $param["SourceInstanceId"];
        }

        if (array_key_exists("DBType",$param) and $param["DBType"] !== null) {
            $this->DBType = $param["DBType"];
        }

        if (array_key_exists("EndCreateTime",$param) and $param["EndCreateTime"] !== null) {
            $this->EndCreateTime = $param["EndCreateTime"];
        }

        if (array_key_exists("FilterCloneType",$param) and $param["FilterCloneType"] !== null) {
            $this->FilterCloneType = $param["FilterCloneType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("StartCreateTime",$param) and $param["StartCreateTime"] !== null) {
            $this->StartCreateTime = $param["StartCreateTime"];
        }
    }
}
