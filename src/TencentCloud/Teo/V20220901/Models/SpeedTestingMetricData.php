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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The site test metrics.
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method string getZoneName() Obtain The site name.
 * @method void setZoneName(string $ZoneName) Set The site name.
 * @method array getOriginSpeedTestingInfo() Obtain The origin information.
 * @method void setOriginSpeedTestingInfo(array $OriginSpeedTestingInfo) Set The origin information.
 * @method array getProxySpeedTestingInfo() Obtain The EdgeOne information.
 * @method void setProxySpeedTestingInfo(array $ProxySpeedTestingInfo) Set The EdgeOne information.
 * @method SpeedTestingStatus getSpeedTestingStatus() Obtain The site status.
 * @method void setSpeedTestingStatus(SpeedTestingStatus $SpeedTestingStatus) Set The site status.
 * @method array getOptimizeAction() Obtain The optimization suggestions.
 * @method void setOptimizeAction(array $OptimizeAction) Set The optimization suggestions.
 * @method integer getProxyLoadTime() Obtain The EdgeOne load time, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyLoadTime(integer $ProxyLoadTime) Set The EdgeOne load time, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOriginLoadTime() Obtain The origin load time, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginLoadTime(integer $OriginLoadTime) Set The origin load time, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SpeedTestingMetricData extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var string The site name.
     */
    public $ZoneName;

    /**
     * @var array The origin information.
     */
    public $OriginSpeedTestingInfo;

    /**
     * @var array The EdgeOne information.
     */
    public $ProxySpeedTestingInfo;

    /**
     * @var SpeedTestingStatus The site status.
     */
    public $SpeedTestingStatus;

    /**
     * @var array The optimization suggestions.
     */
    public $OptimizeAction;

    /**
     * @var integer The EdgeOne load time, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyLoadTime;

    /**
     * @var integer The origin load time, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginLoadTime;

    /**
     * @param string $ZoneId The site ID.
     * @param string $ZoneName The site name.
     * @param array $OriginSpeedTestingInfo The origin information.
     * @param array $ProxySpeedTestingInfo The EdgeOne information.
     * @param SpeedTestingStatus $SpeedTestingStatus The site status.
     * @param array $OptimizeAction The optimization suggestions.
     * @param integer $ProxyLoadTime The EdgeOne load time, in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OriginLoadTime The origin load time, in milliseconds.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("OriginSpeedTestingInfo",$param) and $param["OriginSpeedTestingInfo"] !== null) {
            $this->OriginSpeedTestingInfo = [];
            foreach ($param["OriginSpeedTestingInfo"] as $key => $value){
                $obj = new SpeedTestingInfo();
                $obj->deserialize($value);
                array_push($this->OriginSpeedTestingInfo, $obj);
            }
        }

        if (array_key_exists("ProxySpeedTestingInfo",$param) and $param["ProxySpeedTestingInfo"] !== null) {
            $this->ProxySpeedTestingInfo = [];
            foreach ($param["ProxySpeedTestingInfo"] as $key => $value){
                $obj = new SpeedTestingInfo();
                $obj->deserialize($value);
                array_push($this->ProxySpeedTestingInfo, $obj);
            }
        }

        if (array_key_exists("SpeedTestingStatus",$param) and $param["SpeedTestingStatus"] !== null) {
            $this->SpeedTestingStatus = new SpeedTestingStatus();
            $this->SpeedTestingStatus->deserialize($param["SpeedTestingStatus"]);
        }

        if (array_key_exists("OptimizeAction",$param) and $param["OptimizeAction"] !== null) {
            $this->OptimizeAction = [];
            foreach ($param["OptimizeAction"] as $key => $value){
                $obj = new OptimizeAction();
                $obj->deserialize($value);
                array_push($this->OptimizeAction, $obj);
            }
        }

        if (array_key_exists("ProxyLoadTime",$param) and $param["ProxyLoadTime"] !== null) {
            $this->ProxyLoadTime = $param["ProxyLoadTime"];
        }

        if (array_key_exists("OriginLoadTime",$param) and $param["OriginLoadTime"] !== null) {
            $this->OriginLoadTime = $param["OriginLoadTime"];
        }
    }
}
