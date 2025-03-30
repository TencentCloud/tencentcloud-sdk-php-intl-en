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
 * DescribeAsrHotwords request structure.
 *
 * @method string getHotwordsId() Obtain ID of the hotword lexicon to be queried.
**Note: Either HotwordsId or Name should be specified. If both are specified, HotwordsId has a higher priority than Name.**
 * @method void setHotwordsId(string $HotwordsId) Set ID of the hotword lexicon to be queried.
**Note: Either HotwordsId or Name should be specified. If both are specified, HotwordsId has a higher priority than Name.**
 * @method string getName() Obtain Hotword lexicon name.
**Note: Either HotwordsId or Name should be specified. If both are specified, HotwordsId has a higher priority than Name.**
 * @method void setName(string $Name) Set Hotword lexicon name.
**Note: Either HotwordsId or Name should be specified. If both are specified, HotwordsId has a higher priority than Name.**
 * @method integer getOffset() Obtain Paging offset. Default value: 0.


 * @method void setOffset(integer $Offset) Set Paging offset. Default value: 0.


 * @method integer getLimit() Obtain Number of returned entries. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 10. Maximum value: 100.
 * @method string getOrderBy() Obtain Hotword sorting field. Valid values:

 - Default: Sort by the hotword upload sequence.
 - Weight: Sort by the weight.
 - Lexical: Sort by the first letter of hotwords.
 * @method void setOrderBy(string $OrderBy) Set Hotword sorting field. Valid values:

 - Default: Sort by the hotword upload sequence.
 - Weight: Sort by the weight.
 - Lexical: Sort by the first letter of hotwords.
 * @method integer getOrderType() Obtain Hotword sorting order. 0: ascending (default); 1: descending.
 * @method void setOrderType(integer $OrderType) Set Hotword sorting order. 0: ascending (default); 1: descending.
 */
class DescribeAsrHotwordsRequest extends AbstractModel
{
    /**
     * @var string ID of the hotword lexicon to be queried.
**Note: Either HotwordsId or Name should be specified. If both are specified, HotwordsId has a higher priority than Name.**
     */
    public $HotwordsId;

    /**
     * @var string Hotword lexicon name.
**Note: Either HotwordsId or Name should be specified. If both are specified, HotwordsId has a higher priority than Name.**
     */
    public $Name;

    /**
     * @var integer Paging offset. Default value: 0.


     */
    public $Offset;

    /**
     * @var integer Number of returned entries. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Hotword sorting field. Valid values:

 - Default: Sort by the hotword upload sequence.
 - Weight: Sort by the weight.
 - Lexical: Sort by the first letter of hotwords.
     */
    public $OrderBy;

    /**
     * @var integer Hotword sorting order. 0: ascending (default); 1: descending.
     */
    public $OrderType;

    /**
     * @param string $HotwordsId ID of the hotword lexicon to be queried.
**Note: Either HotwordsId or Name should be specified. If both are specified, HotwordsId has a higher priority than Name.**
     * @param string $Name Hotword lexicon name.
**Note: Either HotwordsId or Name should be specified. If both are specified, HotwordsId has a higher priority than Name.**
     * @param integer $Offset Paging offset. Default value: 0.


     * @param integer $Limit Number of returned entries. Default value: 10. Maximum value: 100.
     * @param string $OrderBy Hotword sorting field. Valid values:

 - Default: Sort by the hotword upload sequence.
 - Weight: Sort by the weight.
 - Lexical: Sort by the first letter of hotwords.
     * @param integer $OrderType Hotword sorting order. 0: ascending (default); 1: descending.
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

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
