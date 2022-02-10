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
 * Query the available acceleration region information, the corresponding bandwidth options, and the concurrence based on origin servers.
 *
 * @method string getRegionId() Obtain Region ID
 * @method void setRegionId(string $RegionId) Set Region ID
 * @method string getRegionName() Obtain Region name in Chinese or English
 * @method void setRegionName(string $RegionName) Set Region name in Chinese or English
 * @method array getConcurrentList() Obtain Value array of the available concurrence
 * @method void setConcurrentList(array $ConcurrentList) Set Value array of the available concurrence
 * @method array getBandwidthList() Obtain Value array of the available bandwidth
 * @method void setBandwidthList(array $BandwidthList) Set Value array of the available bandwidth
 * @method string getRegionArea() Obtain Region where the data center locates
 * @method void setRegionArea(string $RegionArea) Set Region where the data center locates
 * @method string getRegionAreaName() Obtain Name of the region where the data center locates
 * @method void setRegionAreaName(string $RegionAreaName) Set Name of the region where the data center locates
 * @method string getIDCType() Obtain Data center type. `dc`: data center; `ec`: edge server.
 * @method void setIDCType(string $IDCType) Set Data center type. `dc`: data center; `ec`: edge server.
 * @method integer getFeatureBitmap() Obtain Feature bitmap. Valid values:
`0`: disable the feature;
`1`: enable the feature.
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
`0`: disable the feature;
`1`: enable the feature.
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
class AccessRegionDetial extends AbstractModel
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
     * @var array Value array of the available concurrence
     */
    public $ConcurrentList;

    /**
     * @var array Value array of the available bandwidth
     */
    public $BandwidthList;

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
`0`: disable the feature;
`1`: enable the feature.
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
     * @param string $RegionId Region ID
     * @param string $RegionName Region name in Chinese or English
     * @param array $ConcurrentList Value array of the available concurrence
     * @param array $BandwidthList Value array of the available bandwidth
     * @param string $RegionArea Region where the data center locates
     * @param string $RegionAreaName Name of the region where the data center locates
     * @param string $IDCType Data center type. `dc`: data center; `ec`: edge server.
     * @param integer $FeatureBitmap Feature bitmap. Valid values:
`0`: disable the feature;
`1`: enable the feature.
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

        if (array_key_exists("ConcurrentList",$param) and $param["ConcurrentList"] !== null) {
            $this->ConcurrentList = $param["ConcurrentList"];
        }

        if (array_key_exists("BandwidthList",$param) and $param["BandwidthList"] !== null) {
            $this->BandwidthList = $param["BandwidthList"];
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
    }
}
