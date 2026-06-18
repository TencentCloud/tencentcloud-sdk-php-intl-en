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
 * Execution plan
 *
 * @method string getID() Obtain <p>Identifier</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setID(string $ID) Set <p>Identifier</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSelectType() Obtain <p>Query type</p><p>Enumeration value:</p><ul><li>SIMPLE: A regular query with no subquery and UNION. Single table or ordinary JOIN is SIMPLE.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSelectType(string $SelectType) Set <p>Query type</p><p>Enumeration value:</p><ul><li>SIMPLE: A regular query with no subquery and UNION. Single table or ordinary JOIN is SIMPLE.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTable() Obtain <p>Table name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTable(string $Table) Set <p>Table name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPartitions() Obtain <p>Partition</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPartitions(string $Partitions) Set <p>Partition</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain <p>Access type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set <p>Access type</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPossibleKeys() Obtain <p>Possibly used indexes</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPossibleKeys(string $PossibleKeys) Set <p>Possibly used indexes</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKey() Obtain <p>Used Indexes</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKey(string $Key) Set <p>Used Indexes</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKeyLen() Obtain <p>Used Indexes length</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeyLen(string $KeyLen) Set <p>Used Indexes length</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRef() Obtain <p>Column or constant to compare with the index</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRef(string $Ref) Set <p>Column or constant to compare with the index</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRows() Obtain <p>Estimate the number of scanned rows</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRows(string $Rows) Set <p>Estimate the number of scanned rows</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFiltered() Obtain <p>Estimated percentage of remaining rows after conditional filtering</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFiltered(string $Filtered) Set <p>Estimated percentage of remaining rows after conditional filtering</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtra() Obtain <p>Additional information, such as Using index, Using filesort</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtra(string $Extra) Set <p>Additional information, such as Using index, Using filesort</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Explain extends AbstractModel
{
    /**
     * @var string <p>Identifier</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ID;

    /**
     * @var string <p>Query type</p><p>Enumeration value:</p><ul><li>SIMPLE: A regular query with no subquery and UNION. Single table or ordinary JOIN is SIMPLE.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SelectType;

    /**
     * @var string <p>Table name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Table;

    /**
     * @var string <p>Partition</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Partitions;

    /**
     * @var string <p>Access type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string <p>Possibly used indexes</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PossibleKeys;

    /**
     * @var string <p>Used Indexes</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Key;

    /**
     * @var string <p>Used Indexes length</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KeyLen;

    /**
     * @var string <p>Column or constant to compare with the index</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ref;

    /**
     * @var string <p>Estimate the number of scanned rows</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rows;

    /**
     * @var string <p>Estimated percentage of remaining rows after conditional filtering</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Filtered;

    /**
     * @var string <p>Additional information, such as Using index, Using filesort</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Extra;

    /**
     * @param string $ID <p>Identifier</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SelectType <p>Query type</p><p>Enumeration value:</p><ul><li>SIMPLE: A regular query with no subquery and UNION. Single table or ordinary JOIN is SIMPLE.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Table <p>Table name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Partitions <p>Partition</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type <p>Access type</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PossibleKeys <p>Possibly used indexes</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Key <p>Used Indexes</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $KeyLen <p>Used Indexes length</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Ref <p>Column or constant to compare with the index</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Rows <p>Estimate the number of scanned rows</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Filtered <p>Estimated percentage of remaining rows after conditional filtering</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Extra <p>Additional information, such as Using index, Using filesort</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("SelectType",$param) and $param["SelectType"] !== null) {
            $this->SelectType = $param["SelectType"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PossibleKeys",$param) and $param["PossibleKeys"] !== null) {
            $this->PossibleKeys = $param["PossibleKeys"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("KeyLen",$param) and $param["KeyLen"] !== null) {
            $this->KeyLen = $param["KeyLen"];
        }

        if (array_key_exists("Ref",$param) and $param["Ref"] !== null) {
            $this->Ref = $param["Ref"];
        }

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = $param["Rows"];
        }

        if (array_key_exists("Filtered",$param) and $param["Filtered"] !== null) {
            $this->Filtered = $param["Filtered"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }
    }
}
