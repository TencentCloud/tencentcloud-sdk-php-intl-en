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
 * DescribeCVMAssets response structure.
 *
 * @method integer getTotal() Obtain u200c-
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTotal(integer $Total) Set u200c-
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getData() Obtain u200c-
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setData(array $Data) Set u200c-
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getRegionList() Obtain List of regions
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRegionList(array $RegionList) Set List of regions
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getDefenseStatusList() Obtain Protection status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setDefenseStatusList(array $DefenseStatusList) Set Protection status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getVpcList() Obtain List of VPCs
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVpcList(array $VpcList) Set List of VPCs
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getAssetTypeList() Obtain List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetTypeList(array $AssetTypeList) Set List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getSystemTypeList() Obtain List of operating systems
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSystemTypeList(array $SystemTypeList) Set List of operating systems
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getIpTypeList() Obtain List of IP types
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIpTypeList(array $IpTypeList) Set List of IP types
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getAppIdList() Obtain List of AppIds
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAppIdList(array $AppIdList) Set List of AppIds
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getZoneList() Obtain List of availability zones
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setZoneList(array $ZoneList) Set List of availability zones
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getOsList() Obtain List of operating systems
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOsList(array $OsList) Set List of operating systems
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeCVMAssetsResponse extends AbstractModel
{
    /**
     * @var integer u200c-
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Total;

    /**
     * @var array u200c-
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @var array List of regions
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $RegionList;

    /**
     * @var array Protection status
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $DefenseStatusList;

    /**
     * @var array List of VPCs
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VpcList;

    /**
     * @var array List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetTypeList;

    /**
     * @var array List of operating systems
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $SystemTypeList;

    /**
     * @var array List of IP types
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $IpTypeList;

    /**
     * @var array List of AppIds
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AppIdList;

    /**
     * @var array List of availability zones
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ZoneList;

    /**
     * @var array List of operating systems
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $OsList;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total u200c-
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $Data u200c-
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $RegionList List of regions
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $DefenseStatusList Protection status
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $VpcList List of VPCs
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $AssetTypeList List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $SystemTypeList List of operating systems
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $IpTypeList List of IP types
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $AppIdList List of AppIds
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $ZoneList List of availability zones
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $OsList List of operating systems
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new CVMAssetVO();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = [];
            foreach ($param["RegionList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->RegionList, $obj);
            }
        }

        if (array_key_exists("DefenseStatusList",$param) and $param["DefenseStatusList"] !== null) {
            $this->DefenseStatusList = [];
            foreach ($param["DefenseStatusList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->DefenseStatusList, $obj);
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

        if (array_key_exists("AssetTypeList",$param) and $param["AssetTypeList"] !== null) {
            $this->AssetTypeList = [];
            foreach ($param["AssetTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AssetTypeList, $obj);
            }
        }

        if (array_key_exists("SystemTypeList",$param) and $param["SystemTypeList"] !== null) {
            $this->SystemTypeList = [];
            foreach ($param["SystemTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->SystemTypeList, $obj);
            }
        }

        if (array_key_exists("IpTypeList",$param) and $param["IpTypeList"] !== null) {
            $this->IpTypeList = [];
            foreach ($param["IpTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->IpTypeList, $obj);
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

        if (array_key_exists("OsList",$param) and $param["OsList"] !== null) {
            $this->OsList = [];
            foreach ($param["OsList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->OsList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
