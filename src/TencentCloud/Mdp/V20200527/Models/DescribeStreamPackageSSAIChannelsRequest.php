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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamPackageSSAIChannels request structure.
 *
 * @method integer getPageNum() Obtain Page number, default is 1
 * @method void setPageNum(integer $PageNum) Set Page number, default is 1
 * @method integer getPageSize() Obtain Page size, default is 10
 * @method void setPageSize(integer $PageSize) Set Page size, default is 10
 */
class DescribeStreamPackageSSAIChannelsRequest extends AbstractModel
{
    /**
     * @var integer Page number, default is 1
     */
    public $PageNum;

    /**
     * @var integer Page size, default is 10
     */
    public $PageSize;

    /**
     * @param integer $PageNum Page number, default is 1
     * @param integer $PageSize Page size, default is 10
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
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
