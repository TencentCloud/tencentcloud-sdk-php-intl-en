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
 * @method integer getCreateUin() 获取Creator `Uin`. If not specified, `Uin` is only used as the query condition.
 * @method void setCreateUin(integer $CreateUin) 设置Creator `Uin`. If not specified, `Uin` is only used as the query condition.
 * @method integer getOffset() 获取Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
 * @method void setOffset(integer $Offset) 设置Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
 * @method integer getLimit() 获取Page size. The default value is 0.
 * @method void setLimit(integer $Limit) 设置Page size. The default value is 0.
 */

/**
 *DescribeTagKeys request structure.
 */
class DescribeTagKeysRequest extends AbstractModel
{
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
     * @param integer $CreateUin Creator `Uin`. If not specified, `Uin` is only used as the query condition.
     * @param integer $Offset Data offset. The default value is 0. Must be an integral multiple of the `Limit` parameter.
     * @param integer $Limit Page size. The default value is 0.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
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
    }
}
