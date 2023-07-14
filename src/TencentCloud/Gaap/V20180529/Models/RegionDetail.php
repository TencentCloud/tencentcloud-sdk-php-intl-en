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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region details
 *
 * @method string getRegionId() Obtain Region ID
 * @method void setRegionId(string $RegionId) Set Region ID
 * @method string getRegionName() Obtain Region name in Chinese or English
 * @method void setRegionName(string $RegionName) Set Region name in Chinese or English
 * @method string getRegionArea() Obtain Region where the data center locates
 * @method void setRegionArea(string $RegionArea) Set Region where the data center locates
 * @method string getRegionAreaName() Obtain Name of the region where the data center locates
 * @method void setRegionAreaName(string $RegionAreaName) Set Name of the region where the data center locates
 * @method string getIDCType() Obtain Data center type. `dc`: data center; `ec`: edge server.
 * @method void setIDCType(string $IDCType) Set Data center type. `dc`: data center; `ec`: edge server.
 * @method integer getFeatureBitmap() Obtain Feature bitmap. Valid values:
`0`: the feature is not supported;
`1`: the feature is supported.
Each bit in the bitmap represents a feature:
1st bit: layer-4 acceleration;
2nd bit: layer-7 acceleration;
3rd bit: HTTP3 access;
4th bit: IPv6;
5th bit: dedicated BGP access;
6th bit: non-BGP access;
7th bit: QoS acceleration.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFeatureBitmap(integer $FeatureBitmap) Set Feature bitmap. Valid values:
`0`: the feature is not supported;
`1`: the feature is supported.
Each bit in the bitmap represents a feature:
1st bit: layer-4 acceleration;
2nd bit: layer-7 acceleration;
3rd bit: HTTP3 access;
4th bit: IPv6;
5th bit: dedicated BGP access;
6th bit: non-BGP access;
7th bit: QoS acceleration.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method SupportFeature getSupportFeature() Obtain Network support 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportFeature(SupportFeature $SupportFeature) Set Network support 
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RegionDetail extends AbstractModel
{
    /**
     * @var string Region ID
     */
    public $RegionId;

    /**
     * @var string Region name in Chinese or English
     */
    public $RegionName;

    /**
     * @var string Region where the data center locates
     */
    public $RegionArea;

    /**
     * @var string Name of the region where the data center locates
     */
    public $RegionAreaName;

    /**
     * @var string Data center type. `dc`: data center; `ec`: edge server.
     */
    public $IDCType;

    /**
     * @var integer Feature bitmap. Valid values:
`0`: the feature is not supported;
`1`: the feature is supported.
Each bit in the bitmap represents a feature:
1st bit: layer-4 acceleration;
2nd bit: layer-7 acceleration;
3rd bit: HTTP3 access;
4th bit: IPv6;
5th bit: dedicated BGP access;
6th bit: non-BGP access;
7th bit: QoS acceleration.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $FeatureBitmap;

    /**
     * @var SupportFeature Network support 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportFeature;

    /**
     * @param string $RegionId Region ID
     * @param string $RegionName Region name in Chinese or English
     * @param string $RegionArea Region where the data center locates
     * @param string $RegionAreaName Name of the region where the data center locates
     * @param string $IDCType Data center type. `dc`: data center; `ec`: edge server.
     * @param integer $FeatureBitmap Feature bitmap. Valid values:
`0`: the feature is not supported;
`1`: the feature is supported.
Each bit in the bitmap represents a feature:
1st bit: layer-4 acceleration;
2nd bit: layer-7 acceleration;
3rd bit: HTTP3 access;
4th bit: IPv6;
5th bit: dedicated BGP access;
6th bit: non-BGP access;
7th bit: QoS acceleration.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param SupportFeature $SupportFeature Network support 
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionArea",$param) and $param["RegionArea"] !== null) {
            $this->RegionArea = $param["RegionArea"];
        }

        if (array_key_exists("RegionAreaName",$param) and $param["RegionAreaName"] !== null) {
            $this->RegionAreaName = $param["RegionAreaName"];
        }

        if (array_key_exists("IDCType",$param) and $param["IDCType"] !== null) {
            $this->IDCType = $param["IDCType"];
        }

        if (array_key_exists("FeatureBitmap",$param) and $param["FeatureBitmap"] !== null) {
            $this->FeatureBitmap = $param["FeatureBitmap"];
        }

        if (array_key_exists("SupportFeature",$param) and $param["SupportFeature"] !== null) {
            $this->SupportFeature = new SupportFeature();
            $this->SupportFeature->deserialize($param["SupportFeature"]);
        }
    }
}
