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
 * Table Quality Details
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
 * @method integer getOwnerUserId() Obtain Table Owner ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerUserId(integer $OwnerUserId) Set Table Owner ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerUserName() Obtain Table Owner Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerUserName(string $OwnerUserName) Set Table Owner Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getDatabaseScore() Obtain Database Score
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseScore(float $DatabaseScore) Set Database Score
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getTableScore() Obtain Table Score
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableScore(float $TableScore) Set Table Score
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getLastPeriodRatio() Obtain Table Month-over-Month Growth
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastPeriodRatio(float $LastPeriodRatio) Set Table Month-over-Month Growth
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDsEnvType() Obtain 0 or not returned or null: Undefined, 1: Production, 2: Development
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDsEnvType(integer $DsEnvType) Set 0 or not returned or null: Undefined, 1: Production, 2: Development
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TableQualityDetail extends AbstractModel
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
     * @var integer Table Owner ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerUserId;

    /**
     * @var string Table Owner Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerUserName;

    /**
     * @var float Database Score
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseScore;

    /**
     * @var float Table Score
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableScore;

    /**
     * @var float Table Month-over-Month Growth
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastPeriodRatio;

    /**
     * @var integer 0 or not returned or null: Undefined, 1: Production, 2: Development
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DsEnvType;

    /**
     * @param string $DatabaseId Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseName Database nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableId Table ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableName Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $OwnerUserId Table Owner ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerUserName Table Owner Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $DatabaseScore Database Score
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $TableScore Table Score
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $LastPeriodRatio Table Month-over-Month Growth
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DsEnvType 0 or not returned or null: Undefined, 1: Production, 2: Development
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

        if (array_key_exists("OwnerUserId",$param) and $param["OwnerUserId"] !== null) {
            $this->OwnerUserId = $param["OwnerUserId"];
        }

        if (array_key_exists("OwnerUserName",$param) and $param["OwnerUserName"] !== null) {
            $this->OwnerUserName = $param["OwnerUserName"];
        }

        if (array_key_exists("DatabaseScore",$param) and $param["DatabaseScore"] !== null) {
            $this->DatabaseScore = $param["DatabaseScore"];
        }

        if (array_key_exists("TableScore",$param) and $param["TableScore"] !== null) {
            $this->TableScore = $param["TableScore"];
        }

        if (array_key_exists("LastPeriodRatio",$param) and $param["LastPeriodRatio"] !== null) {
            $this->LastPeriodRatio = $param["LastPeriodRatio"];
        }

        if (array_key_exists("DsEnvType",$param) and $param["DsEnvType"] !== null) {
            $this->DsEnvType = $param["DsEnvType"];
        }
    }
}
