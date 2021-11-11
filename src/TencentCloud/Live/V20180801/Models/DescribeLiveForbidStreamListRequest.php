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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveForbidStreamList request structure.
 *
 * @method integer getPageNum() Obtain Page number to get. Default value: 1.
 * @method void setPageNum(integer $PageNum) Set Page number to get. Default value: 1.
 * @method integer getPageSize() Obtain Number of entries per page. Maximum value: 100. 
Value: any integer between 1 and 100.
Default value: 10.
 * @method void setPageSize(integer $PageSize) Set Number of entries per page. Maximum value: 100. 
Value: any integer between 1 and 100.
Default value: 10.
 * @method string getStreamName() Obtain Stream name for query
 * @method void setStreamName(string $StreamName) Set Stream name for query
 */
class DescribeLiveForbidStreamListRequest extends AbstractModel
{
    /**
     * @var integer Page number to get. Default value: 1.
     */
    public $PageNum;

    /**
     * @var integer Number of entries per page. Maximum value: 100. 
Value: any integer between 1 and 100.
Default value: 10.
     */
    public $PageSize;

    /**
     * @var string Stream name for query
     */
    public $StreamName;

    /**
     * @param integer $PageNum Page number to get. Default value: 1.
     * @param integer $PageSize Number of entries per page. Maximum value: 100. 
Value: any integer between 1 and 100.
Default value: 10.
     * @param string $StreamName Stream name for query
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

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }
    }
}
