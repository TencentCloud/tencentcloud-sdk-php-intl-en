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
 * DescribeTopClientIpSumInfoList response structure.
 *
 * @method integer getPageNum() Obtain Page number. Value range: [1,1000]. Default value: 1.
 * @method void setPageNum(integer $PageNum) Set Page number. Value range: [1,1000]. Default value: 1.
 * @method integer getPageSize() Obtain Number of entries per page. Value range: [1,1000]. Default value: 20.
 * @method void setPageSize(integer $PageSize) Set Number of entries per page. Value range: [1,1000]. Default value: 20.
 * @method string getOrderParam() Obtain Sorting metric. Valid values: "TotalRequest", "FailedRequest", "TotalFlux".
 * @method void setOrderParam(string $OrderParam) Set Sorting metric. Valid values: "TotalRequest", "FailedRequest", "TotalFlux".
 * @method integer getTotalNum() Obtain Total number of results.
 * @method void setTotalNum(integer $TotalNum) Set Total number of results.
 * @method integer getTotalPage() Obtain Total number of result pages.
 * @method void setTotalPage(integer $TotalPage) Set Total number of result pages.
 * @method array getDataInfoList() Obtain Data content.
 * @method void setDataInfoList(array $DataInfoList) Set Data content.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTopClientIpSumInfoListResponse extends AbstractModel
{
    /**
     * @var integer Page number. Value range: [1,1000]. Default value: 1.
     */
    public $PageNum;

    /**
     * @var integer Number of entries per page. Value range: [1,1000]. Default value: 20.
     */
    public $PageSize;

    /**
     * @var string Sorting metric. Valid values: "TotalRequest", "FailedRequest", "TotalFlux".
     */
    public $OrderParam;

    /**
     * @var integer Total number of results.
     */
    public $TotalNum;

    /**
     * @var integer Total number of result pages.
     */
    public $TotalPage;

    /**
     * @var array Data content.
     */
    public $DataInfoList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $PageNum Page number. Value range: [1,1000]. Default value: 1.
     * @param integer $PageSize Number of entries per page. Value range: [1,1000]. Default value: 20.
     * @param string $OrderParam Sorting metric. Valid values: "TotalRequest", "FailedRequest", "TotalFlux".
     * @param integer $TotalNum Total number of results.
     * @param integer $TotalPage Total number of result pages.
     * @param array $DataInfoList Data content.
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
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("OrderParam",$param) and $param["OrderParam"] !== null) {
            $this->OrderParam = $param["OrderParam"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("DataInfoList",$param) and $param["DataInfoList"] !== null) {
            $this->DataInfoList = [];
            foreach ($param["DataInfoList"] as $key => $value){
                $obj = new ClientIpPlaySumInfo();
                $obj->deserialize($value);
                array_push($this->DataInfoList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
