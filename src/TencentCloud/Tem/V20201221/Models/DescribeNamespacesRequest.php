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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNamespaces request structure.
 *
 * @method integer getLimit() Obtain Number of items per page
 * @method void setLimit(integer $Limit) Set Number of items per page
 * @method integer getOffset() Obtain Page number
 * @method void setOffset(integer $Offset) Set Page number
 * @method integer getSourceChannel() Obtain Source
 * @method void setSourceChannel(integer $SourceChannel) Set Source
 */
class DescribeNamespacesRequest extends AbstractModel
{
    /**
     * @var integer Number of items per page
     */
    public $Limit;

    /**
     * @var integer Page number
     */
    public $Offset;

    /**
     * @var integer Source
     */
    public $SourceChannel;

    /**
     * @param integer $Limit Number of items per page
     * @param integer $Offset Page number
     * @param integer $SourceChannel Source
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

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
