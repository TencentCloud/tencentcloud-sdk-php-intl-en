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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGlossaries request structure.
 *
 * @method integer getLimit() Obtain Number of returned results. Defaults to 20, maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Defaults to 20, maximum value is 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filter condition list. Supported filter fields: GlossaryId (Termbase ID), Name, Source (source language code), Target (target language code).
 * @method void setFilters(array $Filters) Set Filter condition list. Supported filter fields: GlossaryId (Termbase ID), Name, Source (source language code), Target (target language code).
 * @method array getSorts() Obtain Sorting condition list. Supported sorting fields: CreatedTime (creation time), UpdatedTime (last update time).
 * @method void setSorts(array $Sorts) Set Sorting condition list. Supported sorting fields: CreatedTime (creation time), UpdatedTime (last update time).
 */
class DescribeGlossariesRequest extends AbstractModel
{
    /**
     * @var integer Number of returned results. Defaults to 20, maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filter condition list. Supported filter fields: GlossaryId (Termbase ID), Name, Source (source language code), Target (target language code).
     */
    public $Filters;

    /**
     * @var array Sorting condition list. Supported sorting fields: CreatedTime (creation time), UpdatedTime (last update time).
     */
    public $Sorts;

    /**
     * @param integer $Limit Number of returned results. Defaults to 20, maximum value is 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filter condition list. Supported filter fields: GlossaryId (Termbase ID), Name, Source (source language code), Target (target language code).
     * @param array $Sorts Sorting condition list. Supported sorting fields: CreatedTime (creation time), UpdatedTime (last update time).
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RequestFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Sorts",$param) and $param["Sorts"] !== null) {
            $this->Sorts = [];
            foreach ($param["Sorts"] as $key => $value){
                $obj = new RequestSort();
                $obj->deserialize($value);
                array_push($this->Sorts, $obj);
            }
        }
    }
}
