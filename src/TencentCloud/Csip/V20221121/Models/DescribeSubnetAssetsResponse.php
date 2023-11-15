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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubnetAssets response structure.
 *
 * @method array getData() Obtain Data list
 * @method void setData(array $Data) Set Data list
 * @method integer getTotalCount() Obtain Total number of results
 * @method void setTotalCount(integer $TotalCount) Set Total number of results
 * @method array getRegionList() Obtain List of regions
 * @method void setRegionList(array $RegionList) Set List of regions
 * @method array getVpcList() Obtain List of VPCs
 * @method void setVpcList(array $VpcList) Set List of VPCs
 * @method array getAppIdList() Obtain List of AppIds
 * @method void setAppIdList(array $AppIdList) Set List of AppIds
 * @method array getZoneList() Obtain List of availability zones
 * @method void setZoneList(array $ZoneList) Set List of availability zones
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSubnetAssetsResponse extends AbstractModel
{
    /**
     * @var array Data list
     */
    public $Data;

    /**
     * @var integer Total number of results
     */
    public $TotalCount;

    /**
     * @var array List of regions
     */
    public $RegionList;

    /**
     * @var array List of VPCs
     */
    public $VpcList;

    /**
     * @var array List of AppIds
     */
    public $AppIdList;

    /**
     * @var array List of availability zones
     */
    public $ZoneList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Data Data list
     * @param integer $TotalCount Total number of results
     * @param array $RegionList List of regions
     * @param array $VpcList List of VPCs
     * @param array $AppIdList List of AppIds
     * @param array $ZoneList List of availability zones
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SubnetAsset();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = [];
            foreach ($param["RegionList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->RegionList, $obj);
            }
        }

        if (array_key_exists("VpcList",$param) and $param["VpcList"] !== null) {
            $this->VpcList = [];
            foreach ($param["VpcList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->VpcList, $obj);
            }
        }

        if (array_key_exists("AppIdList",$param) and $param["AppIdList"] !== null) {
            $this->AppIdList = [];
            foreach ($param["AppIdList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AppIdList, $obj);
            }
        }

        if (array_key_exists("ZoneList",$param) and $param["ZoneList"] !== null) {
            $this->ZoneList = [];
            foreach ($param["ZoneList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->ZoneList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
