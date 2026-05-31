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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Execution plan list
 *
 * @method integer getId() Obtain <p>Serial number of the query</p>
 * @method void setId(integer $Id) Set <p>Serial number of the query</p>
 * @method string getSelectType() Obtain <p>Query type. Common values: SIMPLE (simple query, excluding subqueries or UNION), PRIMARY (outermost query), SUBQUERY (first SELECT in a subquery), DERIVED (derivative table/subquery in FROM clause), UNION (second and subsequent SELECTs in UNION), UNION RESULT (result set of UNION).</p>
 * @method void setSelectType(string $SelectType) Set <p>Query type. Common values: SIMPLE (simple query, excluding subqueries or UNION), PRIMARY (outermost query), SUBQUERY (first SELECT in a subquery), DERIVED (derivative table/subquery in FROM clause), UNION (second and subsequent SELECTs in UNION), UNION RESULT (result set of UNION).</p>
 * @method string getTable() Obtain <p>Data table name</p>
 * @method void setTable(string $Table) Set <p>Data table name</p>
 * @method string getPartitions() Obtain <p>Query matching partition</p>
 * @method void setPartitions(string $Partitions) Set <p>Query matching partition</p>
 * @method string getType() Obtain <p>Access type (very important, a key metric for measuring query efficiency), ranked from best to worst: system &gt; const &gt; eq_ref &gt; ref &gt; fulltext &gt; ref_or_null &gt; index_merge &gt; unique_subquery &gt; index_subquery &gt; range &gt; index &gt; ALL. Common value descriptions: • system: The table has only one row (system table). • const: Matches one row through primary key or unique index, commonly seen in WHERE pk = 1. • eq_ref: Uses primary key or unique index when connecting, each index value matches only one row. • ref: Uses non-unique index to search, may match multiple rows. • range: Index range scan, such as BETWEEN, &gt;, &lt;, IN. • index: Full index scan (traversal of the entire index tree). • ALL: Full-table scan (worst, requires optimization).</p>
 * @method void setType(string $Type) Set <p>Access type (very important, a key metric for measuring query efficiency), ranked from best to worst: system &gt; const &gt; eq_ref &gt; ref &gt; fulltext &gt; ref_or_null &gt; index_merge &gt; unique_subquery &gt; index_subquery &gt; range &gt; index &gt; ALL. Common value descriptions: • system: The table has only one row (system table). • const: Matches one row through primary key or unique index, commonly seen in WHERE pk = 1. • eq_ref: Uses primary key or unique index when connecting, each index value matches only one row. • ref: Uses non-unique index to search, may match multiple rows. • range: Index range scan, such as BETWEEN, &gt;, &lt;, IN. • index: Full index scan (traversal of the entire index tree). • ALL: Full-table scan (worst, requires optimization).</p>
 * @method string getPossibleKeys() Obtain <p>Indexes that may be used in querying. NULL means no available index.</p>
 * @method void setPossibleKeys(string $PossibleKeys) Set <p>Indexes that may be used in querying. NULL means no available index.</p>
 * @method string getKey() Obtain <p>Indexes actually used. NULL means no index is used.</p>
 * @method void setKey(string $Key) Set <p>Indexes actually used. NULL means no index is used.</p>
 * @method string getKeyLen() Obtain <p>The length of the actual used index (number of bytes). It can be used to determine which columns are actually used in the composite index. A shorter value indicates fewer index columns are used.</p>
 * @method void setKeyLen(string $KeyLen) Set <p>The length of the actual used index (number of bytes). It can be used to determine which columns are actually used in the composite index. A shorter value indicates fewer index columns are used.</p>
 * @method string getRef() Obtain <p>Display which columns or constants are compared with indexes in the key column. Common values: const (constant), certain column name, func (function result).</p>
 * @method void setRef(string $Ref) Set <p>Display which columns or constants are compared with indexes in the key column. Common values: const (constant), certain column name, func (function result).</p>
 * @method integer getRows() Obtain <p>Estimate the number of rows to scan</p>
 * @method void setRows(integer $Rows) Set <p>Estimate the number of rows to scan</p>
 * @method float getFiltered() Obtain <p>Indicates the estimation of the percentage of rows remaining after table conditional filtering. 100% means no additional filtering. The higher the value, the better.</p>
 * @method void setFiltered(float $Filtered) Set <p>Indicates the estimation of the percentage of rows remaining after table conditional filtering. 100% means no additional filtering. The higher the value, the better.</p>
 * @method string getExtra() Obtain <p>Additional information (very important), common values: • Using index: covering index, no need to return to the table (good) • Using where: filter with WHERE after the storage engine returns rows • Using temporary: used a temporary table (commonly used in GROUP BY/ORDER BY, needs optimization) • Using filesort: used file sort instead of index sorting (needs optimization) • Using index condition: used pushdown of index (ICP)</p>
 * @method void setExtra(string $Extra) Set <p>Additional information (very important), common values: • Using index: covering index, no need to return to the table (good) • Using where: filter with WHERE after the storage engine returns rows • Using temporary: used a temporary table (commonly used in GROUP BY/ORDER BY, needs optimization) • Using filesort: used file sort instead of index sorting (needs optimization) • Using index condition: used pushdown of index (ICP)</p>
 */
class ExplainRow extends AbstractModel
{
    /**
     * @var integer <p>Serial number of the query</p>
     */
    public $Id;

    /**
     * @var string <p>Query type. Common values: SIMPLE (simple query, excluding subqueries or UNION), PRIMARY (outermost query), SUBQUERY (first SELECT in a subquery), DERIVED (derivative table/subquery in FROM clause), UNION (second and subsequent SELECTs in UNION), UNION RESULT (result set of UNION).</p>
     */
    public $SelectType;

    /**
     * @var string <p>Data table name</p>
     */
    public $Table;

    /**
     * @var string <p>Query matching partition</p>
     */
    public $Partitions;

    /**
     * @var string <p>Access type (very important, a key metric for measuring query efficiency), ranked from best to worst: system &gt; const &gt; eq_ref &gt; ref &gt; fulltext &gt; ref_or_null &gt; index_merge &gt; unique_subquery &gt; index_subquery &gt; range &gt; index &gt; ALL. Common value descriptions: • system: The table has only one row (system table). • const: Matches one row through primary key or unique index, commonly seen in WHERE pk = 1. • eq_ref: Uses primary key or unique index when connecting, each index value matches only one row. • ref: Uses non-unique index to search, may match multiple rows. • range: Index range scan, such as BETWEEN, &gt;, &lt;, IN. • index: Full index scan (traversal of the entire index tree). • ALL: Full-table scan (worst, requires optimization).</p>
     */
    public $Type;

    /**
     * @var string <p>Indexes that may be used in querying. NULL means no available index.</p>
     */
    public $PossibleKeys;

    /**
     * @var string <p>Indexes actually used. NULL means no index is used.</p>
     */
    public $Key;

    /**
     * @var string <p>The length of the actual used index (number of bytes). It can be used to determine which columns are actually used in the composite index. A shorter value indicates fewer index columns are used.</p>
     */
    public $KeyLen;

    /**
     * @var string <p>Display which columns or constants are compared with indexes in the key column. Common values: const (constant), certain column name, func (function result).</p>
     */
    public $Ref;

    /**
     * @var integer <p>Estimate the number of rows to scan</p>
     */
    public $Rows;

    /**
     * @var float <p>Indicates the estimation of the percentage of rows remaining after table conditional filtering. 100% means no additional filtering. The higher the value, the better.</p>
     */
    public $Filtered;

    /**
     * @var string <p>Additional information (very important), common values: • Using index: covering index, no need to return to the table (good) • Using where: filter with WHERE after the storage engine returns rows • Using temporary: used a temporary table (commonly used in GROUP BY/ORDER BY, needs optimization) • Using filesort: used file sort instead of index sorting (needs optimization) • Using index condition: used pushdown of index (ICP)</p>
     */
    public $Extra;

    /**
     * @param integer $Id <p>Serial number of the query</p>
     * @param string $SelectType <p>Query type. Common values: SIMPLE (simple query, excluding subqueries or UNION), PRIMARY (outermost query), SUBQUERY (first SELECT in a subquery), DERIVED (derivative table/subquery in FROM clause), UNION (second and subsequent SELECTs in UNION), UNION RESULT (result set of UNION).</p>
     * @param string $Table <p>Data table name</p>
     * @param string $Partitions <p>Query matching partition</p>
     * @param string $Type <p>Access type (very important, a key metric for measuring query efficiency), ranked from best to worst: system &gt; const &gt; eq_ref &gt; ref &gt; fulltext &gt; ref_or_null &gt; index_merge &gt; unique_subquery &gt; index_subquery &gt; range &gt; index &gt; ALL. Common value descriptions: • system: The table has only one row (system table). • const: Matches one row through primary key or unique index, commonly seen in WHERE pk = 1. • eq_ref: Uses primary key or unique index when connecting, each index value matches only one row. • ref: Uses non-unique index to search, may match multiple rows. • range: Index range scan, such as BETWEEN, &gt;, &lt;, IN. • index: Full index scan (traversal of the entire index tree). • ALL: Full-table scan (worst, requires optimization).</p>
     * @param string $PossibleKeys <p>Indexes that may be used in querying. NULL means no available index.</p>
     * @param string $Key <p>Indexes actually used. NULL means no index is used.</p>
     * @param string $KeyLen <p>The length of the actual used index (number of bytes). It can be used to determine which columns are actually used in the composite index. A shorter value indicates fewer index columns are used.</p>
     * @param string $Ref <p>Display which columns or constants are compared with indexes in the key column. Common values: const (constant), certain column name, func (function result).</p>
     * @param integer $Rows <p>Estimate the number of rows to scan</p>
     * @param float $Filtered <p>Indicates the estimation of the percentage of rows remaining after table conditional filtering. 100% means no additional filtering. The higher the value, the better.</p>
     * @param string $Extra <p>Additional information (very important), common values: • Using index: covering index, no need to return to the table (good) • Using where: filter with WHERE after the storage engine returns rows • Using temporary: used a temporary table (commonly used in GROUP BY/ORDER BY, needs optimization) • Using filesort: used file sort instead of index sorting (needs optimization) • Using index condition: used pushdown of index (ICP)</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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
