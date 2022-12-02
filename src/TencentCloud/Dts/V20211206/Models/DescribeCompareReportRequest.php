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
 * DescribeCompareReport request structure.
 *
 * @method string getJobId() Obtain Migration task ID
 * @method void setJobId(string $JobId) Set Migration task ID
 * @method string getCompareTaskId() Obtain Check task ID
 * @method void setCompareTaskId(string $CompareTaskId) Set Check task ID
 * @method integer getDifferenceLimit() Obtain Number of inconsistent objects to be returned
 * @method void setDifferenceLimit(integer $DifferenceLimit) Set Number of inconsistent objects to be returned
 * @method integer getDifferenceOffset() Obtain Offset of inconsistent objects
 * @method void setDifferenceOffset(integer $DifferenceOffset) Set Offset of inconsistent objects
 * @method string getDifferenceDB() Obtain Search criterion: Inconsistent database name
 * @method void setDifferenceDB(string $DifferenceDB) Set Search criterion: Inconsistent database name
 * @method string getDifferenceTable() Obtain Search criterion: Inconsistent table name
 * @method void setDifferenceTable(string $DifferenceTable) Set Search criterion: Inconsistent table name
 * @method integer getSkippedLimit() Obtain Number of unchecked objects to be returned
 * @method void setSkippedLimit(integer $SkippedLimit) Set Number of unchecked objects to be returned
 * @method integer getSkippedOffset() Obtain Offset of unchecked objects
 * @method void setSkippedOffset(integer $SkippedOffset) Set Offset of unchecked objects
 * @method string getSkippedDB() Obtain Search criterion: Unchecked database name
 * @method void setSkippedDB(string $SkippedDB) Set Search criterion: Unchecked database name
 * @method string getSkippedTable() Obtain Search criterion: Unchecked table name
 * @method void setSkippedTable(string $SkippedTable) Set Search criterion: Unchecked table name
 */
class DescribeCompareReportRequest extends AbstractModel
{
    /**
     * @var string Migration task ID
     */
    public $JobId;

    /**
     * @var string Check task ID
     */
    public $CompareTaskId;

    /**
     * @var integer Number of inconsistent objects to be returned
     */
    public $DifferenceLimit;

    /**
     * @var integer Offset of inconsistent objects
     */
    public $DifferenceOffset;

    /**
     * @var string Search criterion: Inconsistent database name
     */
    public $DifferenceDB;

    /**
     * @var string Search criterion: Inconsistent table name
     */
    public $DifferenceTable;

    /**
     * @var integer Number of unchecked objects to be returned
     */
    public $SkippedLimit;

    /**
     * @var integer Offset of unchecked objects
     */
    public $SkippedOffset;

    /**
     * @var string Search criterion: Unchecked database name
     */
    public $SkippedDB;

    /**
     * @var string Search criterion: Unchecked table name
     */
    public $SkippedTable;

    /**
     * @param string $JobId Migration task ID
     * @param string $CompareTaskId Check task ID
     * @param integer $DifferenceLimit Number of inconsistent objects to be returned
     * @param integer $DifferenceOffset Offset of inconsistent objects
     * @param string $DifferenceDB Search criterion: Inconsistent database name
     * @param string $DifferenceTable Search criterion: Inconsistent table name
     * @param integer $SkippedLimit Number of unchecked objects to be returned
     * @param integer $SkippedOffset Offset of unchecked objects
     * @param string $SkippedDB Search criterion: Unchecked database name
     * @param string $SkippedTable Search criterion: Unchecked table name
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("CompareTaskId",$param) and $param["CompareTaskId"] !== null) {
            $this->CompareTaskId = $param["CompareTaskId"];
        }

        if (array_key_exists("DifferenceLimit",$param) and $param["DifferenceLimit"] !== null) {
            $this->DifferenceLimit = $param["DifferenceLimit"];
        }

        if (array_key_exists("DifferenceOffset",$param) and $param["DifferenceOffset"] !== null) {
            $this->DifferenceOffset = $param["DifferenceOffset"];
        }

        if (array_key_exists("DifferenceDB",$param) and $param["DifferenceDB"] !== null) {
            $this->DifferenceDB = $param["DifferenceDB"];
        }

        if (array_key_exists("DifferenceTable",$param) and $param["DifferenceTable"] !== null) {
            $this->DifferenceTable = $param["DifferenceTable"];
        }

        if (array_key_exists("SkippedLimit",$param) and $param["SkippedLimit"] !== null) {
            $this->SkippedLimit = $param["SkippedLimit"];
        }

        if (array_key_exists("SkippedOffset",$param) and $param["SkippedOffset"] !== null) {
            $this->SkippedOffset = $param["SkippedOffset"];
        }

        if (array_key_exists("SkippedDB",$param) and $param["SkippedDB"] !== null) {
            $this->SkippedDB = $param["SkippedDB"];
        }

        if (array_key_exists("SkippedTable",$param) and $param["SkippedTable"] !== null) {
            $this->SkippedTable = $param["SkippedTable"];
        }
    }
}
