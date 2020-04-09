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
 * DescribeLiveStreamOnlineList response structure.
 *
 * @method integer getTotalNum() Obtain Total number of eligible ones.
 * @method void setTotalNum(integer $TotalNum) Set Total number of eligible ones.
 * @method integer getTotalPage() Obtain Total number of pages.
 * @method void setTotalPage(integer $TotalPage) Set Total number of pages.
 * @method integer getPageNum() Obtain Page number.
 * @method void setPageNum(integer $PageNum) Set Page number.
 * @method integer getPageSize() Obtain Number of entries displayed per page.
 * @method void setPageSize(integer $PageSize) Set Number of entries displayed per page.
 * @method array getOnlineInfo() Obtain Active push information list.
 * @method void setOnlineInfo(array $OnlineInfo) Set Active push information list.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeLiveStreamOnlineListResponse extends AbstractModel
{
    /**
     * @var integer Total number of eligible ones.
     */
    public $TotalNum;

    /**
     * @var integer Total number of pages.
     */
    public $TotalPage;

    /**
     * @var integer Page number.
     */
    public $PageNum;

    /**
     * @var integer Number of entries displayed per page.
     */
    public $PageSize;

    /**
     * @var array Active push information list.
     */
    public $OnlineInfo;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalNum Total number of eligible ones.
     * @param integer $TotalPage Total number of pages.
     * @param integer $PageNum Page number.
     * @param integer $PageSize Number of entries displayed per page.
     * @param array $OnlineInfo Active push information list.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("OnlineInfo",$param) and $param["OnlineInfo"] !== null) {
            $this->OnlineInfo = [];
            foreach ($param["OnlineInfo"] as $key => $value){
                $obj = new StreamOnlineInfo();
                $obj->deserialize($value);
                array_push($this->OnlineInfo, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
