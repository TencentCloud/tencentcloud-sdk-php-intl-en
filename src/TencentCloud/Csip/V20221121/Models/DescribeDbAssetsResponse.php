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
 * DescribeDbAssets response structure.
 *
 * @method integer getTotal() Obtain Total number of results
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTotal(integer $Total) Set Total number of results
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getData() Obtain Total of assets
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setData(array $Data) Set Total of assets
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getRegionList() Obtain List of regions
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRegionList(array $RegionList) Set List of regions
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getAssetTypeList() Obtain List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetTypeList(array $AssetTypeList) Set List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getVpcList() Obtain List of VPCs
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVpcList(array $VpcList) Set List of VPCs
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getAppIdList() Obtain List of users (AppId)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAppIdList(array $AppIdList) Set List of users (AppId)
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDbAssetsResponse extends AbstractModel
{
    /**
     * @var integer Total number of results
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Total;

    /**
     * @var array Total of assets
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @var array List of regions
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $RegionList;

    /**
     * @var array List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetTypeList;

    /**
     * @var array List of VPCs
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VpcList;

    /**
     * @var array List of users (AppId)
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AppIdList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total Total number of results
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $Data Total of assets
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $RegionList List of regions
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $AssetTypeList List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $VpcList List of VPCs
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $AppIdList List of users (AppId)
Note: This field may return·null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new DBAssetVO();
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

        if (array_key_exists("AssetTypeList",$param) and $param["AssetTypeList"] !== null) {
            $this->AssetTypeList = [];
            foreach ($param["AssetTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AssetTypeList, $obj);
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
