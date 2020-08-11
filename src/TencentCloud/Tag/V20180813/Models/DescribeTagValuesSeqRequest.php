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
 * DescribeTagValuesSeq request structure.
 *
 * @method array getTagKeys() Obtain Tag key list
 * @method void setTagKeys(array $TagKeys) Set Tag key list
 * @method integer getCreateUin() Obtain Creator `Uin`. If this parameter is blank or left empty, only `Uin` will be used as a condition for query
 * @method void setCreateUin(integer $CreateUin) Set Creator `Uin`. If this parameter is blank or left empty, only `Uin` will be used as a condition for query
 * @method integer getOffset() Obtain Data offset. Default value: 0. It must be an integer multiple of the `Limit` parameter
 * @method void setOffset(integer $Offset) Set Data offset. Default value: 0. It must be an integer multiple of the `Limit` parameter
 * @method integer getLimit() Obtain Number of entries per page. Default value: 15
 * @method void setLimit(integer $Limit) Set Number of entries per page. Default value: 15
 */
class DescribeTagValuesSeqRequest extends AbstractModel
{
    /**
     * @var array Tag key list
     */
    public $TagKeys;

    /**
     * @var integer Creator `Uin`. If this parameter is blank or left empty, only `Uin` will be used as a condition for query
     */
    public $CreateUin;

    /**
     * @var integer Data offset. Default value: 0. It must be an integer multiple of the `Limit` parameter
     */
    public $Offset;

    /**
     * @var integer Number of entries per page. Default value: 15
     */
    public $Limit;

    /**
     * @param array $TagKeys Tag key list
     * @param integer $CreateUin Creator `Uin`. If this parameter is blank or left empty, only `Uin` will be used as a condition for query
     * @param integer $Offset Data offset. Default value: 0. It must be an integer multiple of the `Limit` parameter
     * @param integer $Limit Number of entries per page. Default value: 15
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
    }
}
