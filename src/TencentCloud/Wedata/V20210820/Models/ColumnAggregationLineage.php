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
 * Column Lineage Aggregation Information
 *
 * @method string getTableName() Obtain Table nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableName(string $TableName) Set Table nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getParentId() Obtain Parent Node ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParentId(string $ParentId) Set Parent Node ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMetastoreType() Obtain Metadata Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMetastoreType(string $MetastoreType) Set Metadata Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getParentSet() Obtain String Type Parent Node Collection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParentSet(string $ParentSet) Set String Type Parent Node Collection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getChildSet() Obtain String Type Child Node Collection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setChildSet(string $ChildSet) Set String Type Child Node Collection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getColumnInfoSet() Obtain Column Information Collection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnInfoSet(array $ColumnInfoSet) Set Column Information Collection
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ColumnAggregationLineage extends AbstractModel
{
    /**
     * @var string Table nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableName;

    /**
     * @var string Parent Node ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ParentId;

    /**
     * @var string Metadata Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MetastoreType;

    /**
     * @var string String Type Parent Node Collection
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ParentSet;

    /**
     * @var string String Type Child Node Collection
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ChildSet;

    /**
     * @var array Column Information Collection
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnInfoSet;

    /**
     * @param string $TableName Table nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ParentId Parent Node ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $MetastoreType Metadata Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ParentSet String Type Parent Node Collection
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ChildSet String Type Child Node Collection
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ColumnInfoSet Column Information Collection
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("MetastoreType",$param) and $param["MetastoreType"] !== null) {
            $this->MetastoreType = $param["MetastoreType"];
        }

        if (array_key_exists("ParentSet",$param) and $param["ParentSet"] !== null) {
            $this->ParentSet = $param["ParentSet"];
        }

        if (array_key_exists("ChildSet",$param) and $param["ChildSet"] !== null) {
            $this->ChildSet = $param["ChildSet"];
        }

        if (array_key_exists("ColumnInfoSet",$param) and $param["ColumnInfoSet"] !== null) {
            $this->ColumnInfoSet = [];
            foreach ($param["ColumnInfoSet"] as $key => $value){
                $obj = new SimpleColumnInfo();
                $obj->deserialize($value);
                array_push($this->ColumnInfoSet, $obj);
            }
        }
    }
}
