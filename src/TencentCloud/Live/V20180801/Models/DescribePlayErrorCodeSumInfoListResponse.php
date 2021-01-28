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
 * DescribePlayErrorCodeSumInfoList response structure.
 *
 * @method array getProIspInfoList() Obtain Information of error codes starting with 2, 3, 4, or 5 by district and ISP.
 * @method void setProIspInfoList(array $ProIspInfoList) Set Information of error codes starting with 2, 3, 4, or 5 by district and ISP.
 * @method integer getTotalCodeAll() Obtain Total occurrences of all status codes.
 * @method void setTotalCodeAll(integer $TotalCodeAll) Set Total occurrences of all status codes.
 * @method integer getTotalCode4xx() Obtain Occurrences of 4xx status codes.
 * @method void setTotalCode4xx(integer $TotalCode4xx) Set Occurrences of 4xx status codes.
 * @method integer getTotalCode5xx() Obtain Occurrences of 5xx status codes.
 * @method void setTotalCode5xx(integer $TotalCode5xx) Set Occurrences of 5xx status codes.
 * @method array getTotalCodeList() Obtain Total occurrences of each status code.
 * @method void setTotalCodeList(array $TotalCodeList) Set Total occurrences of each status code.
 * @method integer getPageNum() Obtain Page number.
 * @method void setPageNum(integer $PageNum) Set Page number.
 * @method integer getPageSize() Obtain Number of entries per page.
 * @method void setPageSize(integer $PageSize) Set Number of entries per page.
 * @method integer getTotalPage() Obtain Total number of pages.
 * @method void setTotalPage(integer $TotalPage) Set Total number of pages.
 * @method integer getTotalNum() Obtain Total number of results.
 * @method void setTotalNum(integer $TotalNum) Set Total number of results.
 * @method integer getTotalCode2xx() Obtain Occurrences of 2xx status codes.
 * @method void setTotalCode2xx(integer $TotalCode2xx) Set Occurrences of 2xx status codes.
 * @method integer getTotalCode3xx() Obtain Occurrences of 3xx status codes.
 * @method void setTotalCode3xx(integer $TotalCode3xx) Set Occurrences of 3xx status codes.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePlayErrorCodeSumInfoListResponse extends AbstractModel
{
    /**
     * @var array Information of error codes starting with 2, 3, 4, or 5 by district and ISP.
     */
    public $ProIspInfoList;

    /**
     * @var integer Total occurrences of all status codes.
     */
    public $TotalCodeAll;

    /**
     * @var integer Occurrences of 4xx status codes.
     */
    public $TotalCode4xx;

    /**
     * @var integer Occurrences of 5xx status codes.
     */
    public $TotalCode5xx;

    /**
     * @var array Total occurrences of each status code.
     */
    public $TotalCodeList;

    /**
     * @var integer Page number.
     */
    public $PageNum;

    /**
     * @var integer Number of entries per page.
     */
    public $PageSize;

    /**
     * @var integer Total number of pages.
     */
    public $TotalPage;

    /**
     * @var integer Total number of results.
     */
    public $TotalNum;

    /**
     * @var integer Occurrences of 2xx status codes.
     */
    public $TotalCode2xx;

    /**
     * @var integer Occurrences of 3xx status codes.
     */
    public $TotalCode3xx;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $ProIspInfoList Information of error codes starting with 2, 3, 4, or 5 by district and ISP.
     * @param integer $TotalCodeAll Total occurrences of all status codes.
     * @param integer $TotalCode4xx Occurrences of 4xx status codes.
     * @param integer $TotalCode5xx Occurrences of 5xx status codes.
     * @param array $TotalCodeList Total occurrences of each status code.
     * @param integer $PageNum Page number.
     * @param integer $PageSize Number of entries per page.
     * @param integer $TotalPage Total number of pages.
     * @param integer $TotalNum Total number of results.
     * @param integer $TotalCode2xx Occurrences of 2xx status codes.
     * @param integer $TotalCode3xx Occurrences of 3xx status codes.
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
        if (array_key_exists("ProIspInfoList",$param) and $param["ProIspInfoList"] !== null) {
            $this->ProIspInfoList = [];
            foreach ($param["ProIspInfoList"] as $key => $value){
                $obj = new ProIspPlayCodeDataInfo();
                $obj->deserialize($value);
                array_push($this->ProIspInfoList, $obj);
            }
        }

        if (array_key_exists("TotalCodeAll",$param) and $param["TotalCodeAll"] !== null) {
            $this->TotalCodeAll = $param["TotalCodeAll"];
        }

        if (array_key_exists("TotalCode4xx",$param) and $param["TotalCode4xx"] !== null) {
            $this->TotalCode4xx = $param["TotalCode4xx"];
        }

        if (array_key_exists("TotalCode5xx",$param) and $param["TotalCode5xx"] !== null) {
            $this->TotalCode5xx = $param["TotalCode5xx"];
        }

        if (array_key_exists("TotalCodeList",$param) and $param["TotalCodeList"] !== null) {
            $this->TotalCodeList = [];
            foreach ($param["TotalCodeList"] as $key => $value){
                $obj = new PlayCodeTotalInfo();
                $obj->deserialize($value);
                array_push($this->TotalCodeList, $obj);
            }
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("TotalCode2xx",$param) and $param["TotalCode2xx"] !== null) {
            $this->TotalCode2xx = $param["TotalCode2xx"];
        }

        if (array_key_exists("TotalCode3xx",$param) and $param["TotalCode3xx"] !== null) {
            $this->TotalCode3xx = $param["TotalCode3xx"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
