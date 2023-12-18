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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTagValues request structure.
 *
 * @method array getTagKeys() Obtain Tag key list.
 * @method void setTagKeys(array $TagKeys) Set Tag key list.
 * @method integer getCreateUin() Obtain Creator `Uin`. If not specified, `Uin` is only used as the query condition.
 * @method void setCreateUin(integer $CreateUin) Set Creator `Uin`. If not specified, `Uin` is only used as the query condition.
 * @method integer getOffset() Obtain Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
 * @method void setOffset(integer $Offset) Set Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
 * @method integer getLimit() Obtain Page size. The default value is 0.
 * @method void setLimit(integer $Limit) Set Page size. The default value is 0.
 * @method string getCategory() Obtain Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.
 * @method void setCategory(string $Category) Set Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.
 */
class DescribeTagValuesRequest extends AbstractModel
{
    /**
     * @var array Tag key list.
     */
    public $TagKeys;

    /**
     * @var integer Creator `Uin`. If not specified, `Uin` is only used as the query condition.
     */
    public $CreateUin;

    /**
     * @var integer Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
     */
    public $Offset;

    /**
     * @var integer Page size. The default value is 0.
     */
    public $Limit;

    /**
     * @var string Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.
     */
    public $Category;

    /**
     * @param array $TagKeys Tag key list.
     * @param integer $CreateUin Creator `Uin`. If not specified, `Uin` is only used as the query condition.
     * @param integer $Offset Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
     * @param integer $Limit Page size. The default value is 0.
     * @param string $Category Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.
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
        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
