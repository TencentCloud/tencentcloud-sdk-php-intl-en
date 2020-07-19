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
 * DescribeProIspPlaySumInfoList response structure.
 *
 * @method float getTotalFlux() Obtain Total traffic.
 * @method void setTotalFlux(float $TotalFlux) Set Total traffic.
 * @method integer getTotalRequest() Obtain Total number of requests.
 * @method void setTotalRequest(integer $TotalRequest) Set Total number of requests.
 * @method string getStatType() Obtain Statistics type.
 * @method void setStatType(string $StatType) Set Statistics type.
 * @method integer getPageSize() Obtain Number of results per page.
 * @method void setPageSize(integer $PageSize) Set Number of results per page.
 * @method integer getPageNum() Obtain Page number.
 * @method void setPageNum(integer $PageNum) Set Page number.
 * @method integer getTotalNum() Obtain Total number of results.
 * @method void setTotalNum(integer $TotalNum) Set Total number of results.
 * @method integer getTotalPage() Obtain Total number of pages.
 * @method void setTotalPage(integer $TotalPage) Set Total number of pages.
 * @method array getDataInfoList() Obtain Aggregated data list by district, ISP, or country/region.
 * @method void setDataInfoList(array $DataInfoList) Set Aggregated data list by district, ISP, or country/region.
 * @method float getAvgFluxPerSecond() Obtain Download speed in MB/s. Calculation method: total traffic/total duration.
 * @method void setAvgFluxPerSecond(float $AvgFluxPerSecond) Set Download speed in MB/s. Calculation method: total traffic/total duration.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeProIspPlaySumInfoListResponse extends AbstractModel
{
    /**
     * @var float Total traffic.
     */
    public $TotalFlux;

    /**
     * @var integer Total number of requests.
     */
    public $TotalRequest;

    /**
     * @var string Statistics type.
     */
    public $StatType;

    /**
     * @var integer Number of results per page.
     */
    public $PageSize;

    /**
     * @var integer Page number.
     */
    public $PageNum;

    /**
     * @var integer Total number of results.
     */
    public $TotalNum;

    /**
     * @var integer Total number of pages.
     */
    public $TotalPage;

    /**
     * @var array Aggregated data list by district, ISP, or country/region.
     */
    public $DataInfoList;

    /**
     * @var float Download speed in MB/s. Calculation method: total traffic/total duration.
     */
    public $AvgFluxPerSecond;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param float $TotalFlux Total traffic.
     * @param integer $TotalRequest Total number of requests.
     * @param string $StatType Statistics type.
     * @param integer $PageSize Number of results per page.
     * @param integer $PageNum Page number.
     * @param integer $TotalNum Total number of results.
     * @param integer $TotalPage Total number of pages.
     * @param array $DataInfoList Aggregated data list by district, ISP, or country/region.
     * @param float $AvgFluxPerSecond Download speed in MB/s. Calculation method: total traffic/total duration.
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
        if (array_key_exists("TotalFlux",$param) and $param["TotalFlux"] !== null) {
            $this->TotalFlux = $param["TotalFlux"];
        }

        if (array_key_exists("TotalRequest",$param) and $param["TotalRequest"] !== null) {
            $this->TotalRequest = $param["TotalRequest"];
        }

        if (array_key_exists("StatType",$param) and $param["StatType"] !== null) {
            $this->StatType = $param["StatType"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
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
                $obj = new ProIspPlaySumInfo();
                $obj->deserialize($value);
                array_push($this->DataInfoList, $obj);
            }
        }

        if (array_key_exists("AvgFluxPerSecond",$param) and $param["AvgFluxPerSecond"] !== null) {
            $this->AvgFluxPerSecond = $param["AvgFluxPerSecond"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
