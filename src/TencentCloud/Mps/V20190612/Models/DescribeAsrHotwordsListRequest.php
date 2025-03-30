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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAsrHotwordsList request structure.
 *
 * @method string getHotwordsId() Obtain Parameter for querying by hotword lexicon ID.
 * @method void setHotwordsId(string $HotwordsId) Set Parameter for querying by hotword lexicon ID.
 * @method string getName() Obtain Parameter for querying by hotword lexicon name.
 * @method void setName(string $Name) Set Parameter for querying by hotword lexicon name.
 * @method integer getOffset() Obtain Paging offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Paging offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries. All hotword lexicons are returned by default.
 * @method void setLimit(integer $Limit) Set Number of returned entries. All hotword lexicons are returned by default.
 * @method integer getOrderType() Obtain Hotword lexicon sorting order.

0: ascending (default)
1: descending
 * @method void setOrderType(integer $OrderType) Set Hotword lexicon sorting order.

0: ascending (default)
1: descending
 * @method string getOrderBy() Obtain Sorts hotword lexicons by a specific field. By default, hotword lexicons are sorted by creation time. If an invalid field is used for sorting, the default sorting field applies.

 - CreateTime: sort by creation time
 - UpdateTime: sort by update time
 - Name: sort by hotword lexicon name
 - WordCount: sort by the number of hotwords
 - HotwordsId: sort by hotword lexicon ID
 * @method void setOrderBy(string $OrderBy) Set Sorts hotword lexicons by a specific field. By default, hotword lexicons are sorted by creation time. If an invalid field is used for sorting, the default sorting field applies.

 - CreateTime: sort by creation time
 - UpdateTime: sort by update time
 - Name: sort by hotword lexicon name
 - WordCount: sort by the number of hotwords
 - HotwordsId: sort by hotword lexicon ID
 * @method array getTypes() Obtain 0: temporary hotword; 1 file-based hotword.
 * @method void setTypes(array $Types) Set 0: temporary hotword; 1 file-based hotword.
 */
class DescribeAsrHotwordsListRequest extends AbstractModel
{
    /**
     * @var string Parameter for querying by hotword lexicon ID.
     */
    public $HotwordsId;

    /**
     * @var string Parameter for querying by hotword lexicon name.
     */
    public $Name;

    /**
     * @var integer Paging offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. All hotword lexicons are returned by default.
     */
    public $Limit;

    /**
     * @var integer Hotword lexicon sorting order.

0: ascending (default)
1: descending
     */
    public $OrderType;

    /**
     * @var string Sorts hotword lexicons by a specific field. By default, hotword lexicons are sorted by creation time. If an invalid field is used for sorting, the default sorting field applies.

 - CreateTime: sort by creation time
 - UpdateTime: sort by update time
 - Name: sort by hotword lexicon name
 - WordCount: sort by the number of hotwords
 - HotwordsId: sort by hotword lexicon ID
     */
    public $OrderBy;

    /**
     * @var array 0: temporary hotword; 1 file-based hotword.
     */
    public $Types;

    /**
     * @param string $HotwordsId Parameter for querying by hotword lexicon ID.
     * @param string $Name Parameter for querying by hotword lexicon name.
     * @param integer $Offset Paging offset. Default value: 0.
     * @param integer $Limit Number of returned entries. All hotword lexicons are returned by default.
     * @param integer $OrderType Hotword lexicon sorting order.

0: ascending (default)
1: descending
     * @param string $OrderBy Sorts hotword lexicons by a specific field. By default, hotword lexicons are sorted by creation time. If an invalid field is used for sorting, the default sorting field applies.

 - CreateTime: sort by creation time
 - UpdateTime: sort by update time
 - Name: sort by hotword lexicon name
 - WordCount: sort by the number of hotwords
 - HotwordsId: sort by hotword lexicon ID
     * @param array $Types 0: temporary hotword; 1 file-based hotword.
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
        if (array_key_exists("HotwordsId",$param) and $param["HotwordsId"] !== null) {
            $this->HotwordsId = $param["HotwordsId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }
    }
}
