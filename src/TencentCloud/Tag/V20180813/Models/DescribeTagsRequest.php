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
 * DescribeTags request structure.
 *
 * @method string getTagKey() Obtain Tag key. Either exists or does not exist alongside the tag value. If it does not exist, all of the user’s tags will be queried.
 * @method void setTagKey(string $TagKey) Set Tag key. Either exists or does not exist alongside the tag value. If it does not exist, all of the user’s tags will be queried.
 * @method string getTagValue() Obtain Tag value. Either exists or does not exist alongside the tag key. If it does not exist, all of the user’s tags will be queried.
 * @method void setTagValue(string $TagValue) Set Tag value. Either exists or does not exist alongside the tag key. If it does not exist, all of the user’s tags will be queried.
 * @method integer getOffset() Obtain Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
 * @method void setOffset(integer $Offset) Set Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
 * @method integer getLimit() Obtain Page size. The default value is 0.
 * @method void setLimit(integer $Limit) Set Page size. The default value is 0.
 * @method integer getCreateUin() Obtain Creator `Uin`. If not specified, `Uin` is only used as the query condition.
 * @method void setCreateUin(integer $CreateUin) Set Creator `Uin`. If not specified, `Uin` is only used as the query condition.
 */
class DescribeTagsRequest extends AbstractModel
{
    /**
     * @var string Tag key. Either exists or does not exist alongside the tag value. If it does not exist, all of the user’s tags will be queried.
     */
    public $TagKey;

    /**
     * @var string Tag value. Either exists or does not exist alongside the tag key. If it does not exist, all of the user’s tags will be queried.
     */
    public $TagValue;

    /**
     * @var integer Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
     */
    public $Offset;

    /**
     * @var integer Page size. The default value is 0.
     */
    public $Limit;

    /**
     * @var integer Creator `Uin`. If not specified, `Uin` is only used as the query condition.
     */
    public $CreateUin;

    /**
     * @param string $TagKey Tag key. Either exists or does not exist alongside the tag value. If it does not exist, all of the user’s tags will be queried.
     * @param string $TagValue Tag value. Either exists or does not exist alongside the tag key. If it does not exist, all of the user’s tags will be queried.
     * @param integer $Offset Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
     * @param integer $Limit Page size. The default value is 0.
     * @param integer $CreateUin Creator `Uin`. If not specified, `Uin` is only used as the query condition.
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }
    }
}
