<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCDNStatDetails request structure.
 *
 * @method string getMetric() Obtain 
 * @method void setMetric(string $Metric) Set 
 * @method string getStartTime() Obtain 
 * @method void setStartTime(string $StartTime) Set 
 * @method string getEndTime() Obtain 
 * @method void setEndTime(string $EndTime) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method array getDomainNames() Obtain 
 * @method void setDomainNames(array $DomainNames) Set 
 * @method string getArea() Obtain 
 * @method void setArea(string $Area) Set 
 * @method array getDistricts() Obtain 
 * @method void setDistricts(array $Districts) Set 
 * @method array getIsps() Obtain 
 * @method void setIsps(array $Isps) Set 
 * @method integer getDataInterval() Obtain 
 * @method void setDataInterval(integer $DataInterval) Set 
 */
class DescribeCDNStatDetailsRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Metric;

    /**
     * @var string 
     */
    public $StartTime;

    /**
     * @var string 
     */
    public $EndTime;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var array 
     */
    public $DomainNames;

    /**
     * @var string 
     */
    public $Area;

    /**
     * @var array 
     */
    public $Districts;

    /**
     * @var array 
     */
    public $Isps;

    /**
     * @var integer 
     */
    public $DataInterval;

    /**
     * @param string $Metric 
     * @param string $StartTime 
     * @param string $EndTime 
     * @param integer $SubAppId 
     * @param array $DomainNames 
     * @param string $Area 
     * @param array $Districts 
     * @param array $Isps 
     * @param integer $DataInterval 
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
        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("DomainNames",$param) and $param["DomainNames"] !== null) {
            $this->DomainNames = $param["DomainNames"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Districts",$param) and $param["Districts"] !== null) {
            $this->Districts = $param["Districts"];
        }

        if (array_key_exists("Isps",$param) and $param["Isps"] !== null) {
            $this->Isps = $param["Isps"];
        }

        if (array_key_exists("DataInterval",$param) and $param["DataInterval"] !== null) {
            $this->DataInterval = $param["DataInterval"];
        }
    }
}
