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
 * DescribeDomainAssets response structure.
 *
 * @method integer getTotal() Obtain u200c-
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTotal(integer $Total) Set u200c-
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getData() Obtain u200c-
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setData(array $Data) Set u200c-
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getDefenseStatusList() Obtain List of protection status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setDefenseStatusList(array $DefenseStatusList) Set List of protection status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getAssetLocationList() Obtain List of asset locations
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetLocationList(array $AssetLocationList) Set List of asset locations
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getSourceTypeList() Obtain List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSourceTypeList(array $SourceTypeList) Set List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getRegionList() Obtain List of regions
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRegionList(array $RegionList) Set List of regions
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDomainAssetsResponse extends AbstractModel
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
     * @var array List of protection status
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $DefenseStatusList;

    /**
     * @var array List of asset locations
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetLocationList;

    /**
     * @var array List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $SourceTypeList;

    /**
     * @var array List of regions
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $RegionList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total u200c-
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $Data u200c-
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $DefenseStatusList List of protection status
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $AssetLocationList List of asset locations
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $SourceTypeList List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $RegionList List of regions
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
                $obj = new DomainAssetVO();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
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

        if (array_key_exists("AssetLocationList",$param) and $param["AssetLocationList"] !== null) {
            $this->AssetLocationList = [];
            foreach ($param["AssetLocationList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AssetLocationList, $obj);
            }
        }

        if (array_key_exists("SourceTypeList",$param) and $param["SourceTypeList"] !== null) {
            $this->SourceTypeList = [];
            foreach ($param["SourceTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->SourceTypeList, $obj);
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
