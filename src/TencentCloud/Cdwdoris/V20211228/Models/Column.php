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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Column information of the table
 *
 * @method string getName() Obtain Column name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Column name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Column type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Column type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAggType() Obtain Aggregation type: When the table is an aggregation model (AGG_KEY), the column with the aggregation type is set as the metric column, and other columns are dimension columns. Aggregation type: ●SUM: sum; the values of multiple rows are accumulated. ●REPLACE: replacement; the values in the next batch of data will replace the values in the previously imported rows. ●MAX: retain the maximum value.
 ●MIN: retain the minimum value. ●REPLACE_IF_NOT_NULL: non-null values replacement. The difference from REPLACE is that null values are not replaced. ●HLL_UNION: aggregation method for HLL type columns, which is aggregated by HyperLogLog algorithm. ●BITMAP_UNION: aggregation method for BIMTAP type columns; bitmap union aggregation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAggType(string $AggType) Set Aggregation type: When the table is an aggregation model (AGG_KEY), the column with the aggregation type is set as the metric column, and other columns are dimension columns. Aggregation type: ●SUM: sum; the values of multiple rows are accumulated. ●REPLACE: replacement; the values in the next batch of data will replace the values in the previously imported rows. ●MAX: retain the maximum value.
 ●MIN: retain the minimum value. ●REPLACE_IF_NOT_NULL: non-null values replacement. The difference from REPLACE is that null values are not replaced. ●HLL_UNION: aggregation method for HLL type columns, which is aggregated by HyperLogLog algorithm. ●BITMAP_UNION: aggregation method for BIMTAP type columns; bitmap union aggregation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsNull() Obtain Whether the column value is allowed to be Null
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsNull(boolean $IsNull) Set Whether the column value is allowed to be Null
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsKey() Obtain Whether it is a Key column. The meaning of different data models:
●DUP_KEY: The column specified afterwards is the sorting column.
●AGG_KEY: The column specified afterwards is the dimension column.
●UNI_KEY: The column specified afterward is the primary key column.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsKey(boolean $IsKey) Set Whether it is a Key column. The meaning of different data models:
●DUP_KEY: The column specified afterwards is the sorting column.
●AGG_KEY: The column specified afterwards is the dimension column.
●UNI_KEY: The column specified afterward is the primary key column.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDefaultValue() Obtain Column's default value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultValue(string $DefaultValue) Set Column's default value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsPartition() Obtain Whether it is a partition column. The partition column must be a Key column.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsPartition(boolean $IsPartition) Set Whether it is a partition column. The partition column must be a Key column.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsDistribution() Obtain Whether it is a bucket column. The bucket column of the aggregation model and primary key model must be Key columns, while the bucket column of the detail model can be any column.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsDistribution(boolean $IsDistribution) Set Whether it is a bucket column. The bucket column of the aggregation model and primary key model must be Key columns, while the bucket column of the detail model can be any column.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAutoInc() Obtain Whether it is an auto-increment column. Supported by TCHouse-D 2.1 version and later.
Limit:
1. Only DUP_KEY and UNI_KEY model tables can contain auto-increment columns.
2. A table can contain at most one auto-increment column.
3. The type of the auto-increment column must be BIGINT type and cannot be null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoInc(boolean $AutoInc) Set Whether it is an auto-increment column. Supported by TCHouse-D 2.1 version and later.
Limit:
1. Only DUP_KEY and UNI_KEY model tables can contain auto-increment columns.
2. A table can contain at most one auto-increment column.
3. The type of the auto-increment column must be BIGINT type and cannot be null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComment() Obtain Column description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComment(string $Comment) Set Column description
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Column extends AbstractModel
{
    /**
     * @var string Column name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Column type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Aggregation type: When the table is an aggregation model (AGG_KEY), the column with the aggregation type is set as the metric column, and other columns are dimension columns. Aggregation type: ●SUM: sum; the values of multiple rows are accumulated. ●REPLACE: replacement; the values in the next batch of data will replace the values in the previously imported rows. ●MAX: retain the maximum value.
 ●MIN: retain the minimum value. ●REPLACE_IF_NOT_NULL: non-null values replacement. The difference from REPLACE is that null values are not replaced. ●HLL_UNION: aggregation method for HLL type columns, which is aggregated by HyperLogLog algorithm. ●BITMAP_UNION: aggregation method for BIMTAP type columns; bitmap union aggregation.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AggType;

    /**
     * @var boolean Whether the column value is allowed to be Null
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsNull;

    /**
     * @var boolean Whether it is a Key column. The meaning of different data models:
●DUP_KEY: The column specified afterwards is the sorting column.
●AGG_KEY: The column specified afterwards is the dimension column.
●UNI_KEY: The column specified afterward is the primary key column.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsKey;

    /**
     * @var string Column's default value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultValue;

    /**
     * @var boolean Whether it is a partition column. The partition column must be a Key column.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsPartition;

    /**
     * @var boolean Whether it is a bucket column. The bucket column of the aggregation model and primary key model must be Key columns, while the bucket column of the detail model can be any column.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsDistribution;

    /**
     * @var boolean Whether it is an auto-increment column. Supported by TCHouse-D 2.1 version and later.
Limit:
1. Only DUP_KEY and UNI_KEY model tables can contain auto-increment columns.
2. A table can contain at most one auto-increment column.
3. The type of the auto-increment column must be BIGINT type and cannot be null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoInc;

    /**
     * @var string Column description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Comment;

    /**
     * @param string $Name Column name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Column type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AggType Aggregation type: When the table is an aggregation model (AGG_KEY), the column with the aggregation type is set as the metric column, and other columns are dimension columns. Aggregation type: ●SUM: sum; the values of multiple rows are accumulated. ●REPLACE: replacement; the values in the next batch of data will replace the values in the previously imported rows. ●MAX: retain the maximum value.
 ●MIN: retain the minimum value. ●REPLACE_IF_NOT_NULL: non-null values replacement. The difference from REPLACE is that null values are not replaced. ●HLL_UNION: aggregation method for HLL type columns, which is aggregated by HyperLogLog algorithm. ●BITMAP_UNION: aggregation method for BIMTAP type columns; bitmap union aggregation.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsNull Whether the column value is allowed to be Null
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsKey Whether it is a Key column. The meaning of different data models:
●DUP_KEY: The column specified afterwards is the sorting column.
●AGG_KEY: The column specified afterwards is the dimension column.
●UNI_KEY: The column specified afterward is the primary key column.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DefaultValue Column's default value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsPartition Whether it is a partition column. The partition column must be a Key column.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsDistribution Whether it is a bucket column. The bucket column of the aggregation model and primary key model must be Key columns, while the bucket column of the detail model can be any column.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $AutoInc Whether it is an auto-increment column. Supported by TCHouse-D 2.1 version and later.
Limit:
1. Only DUP_KEY and UNI_KEY model tables can contain auto-increment columns.
2. A table can contain at most one auto-increment column.
3. The type of the auto-increment column must be BIGINT type and cannot be null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Comment Column description
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AggType",$param) and $param["AggType"] !== null) {
            $this->AggType = $param["AggType"];
        }

        if (array_key_exists("IsNull",$param) and $param["IsNull"] !== null) {
            $this->IsNull = $param["IsNull"];
        }

        if (array_key_exists("IsKey",$param) and $param["IsKey"] !== null) {
            $this->IsKey = $param["IsKey"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("IsPartition",$param) and $param["IsPartition"] !== null) {
            $this->IsPartition = $param["IsPartition"];
        }

        if (array_key_exists("IsDistribution",$param) and $param["IsDistribution"] !== null) {
            $this->IsDistribution = $param["IsDistribution"];
        }

        if (array_key_exists("AutoInc",$param) and $param["AutoInc"] !== null) {
            $this->AutoInc = $param["AutoInc"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
