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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bandwidth information of the corresponding month
 *
 * @method ZoneInfo getZoneInfo() Obtain Zone information of the node
 * @method void setZoneInfo(ZoneInfo $ZoneInfo) Set Zone information of the node
 * @method string getMonth() Obtain Bandwidth month, such as `202103`
 * @method void setMonth(string $Month) Set Bandwidth month, such as `202103`
 * @method string getBandwidthPkgId() Obtain Bandwidth package ID format, such as `bwp-xxxxxxxx`
 * @method void setBandwidthPkgId(string $BandwidthPkgId) Set Bandwidth package ID format, such as `bwp-xxxxxxxx`
 * @method string getIsp() Obtain ISP abbreviation. Valid values: CUCC, CTCC, CMCC
 * @method void setIsp(string $Isp) Set ISP abbreviation. Valid values: CUCC, CTCC, CMCC
 * @method float getTrafficMaxIn() Obtain Inbound bandwidth package peak. Value range: 0.0–xxx.xxx
 * @method void setTrafficMaxIn(float $TrafficMaxIn) Set Inbound bandwidth package peak. Value range: 0.0–xxx.xxx
 * @method float getTrafficMaxOut() Obtain Outbound bandwidth package peak. Value range: 0.0–xxx.xxx
 * @method void setTrafficMaxOut(float $TrafficMaxOut) Set Outbound bandwidth package peak. Value range: 0.0–xxx.xxx
 * @method float getFeeTraffic() Obtain Billable bandwidth. Value range: 0.0–xxx.xxx
 * @method void setFeeTraffic(float $FeeTraffic) Set Billable bandwidth. Value range: 0.0–xxx.xxx
 * @method string getStartTime() Obtain Start time of the monthly billable bandwidth in the format of `yyyy-mm-dd HH:mm:ss`
 * @method void setStartTime(string $StartTime) Set Start time of the monthly billable bandwidth in the format of `yyyy-mm-dd HH:mm:ss`
 * @method string getEndTime() Obtain End time of the monthly billable bandwidth in the format of `yyyy-mm-dd HH:mm:ss`
 * @method void setEndTime(string $EndTime) Set End time of the monthly billable bandwidth in the format of `yyyy-mm-dd HH:mm:ss`
 * @method integer getEffectiveDays() Obtain Number of actual valid days for the monthly billable bandwidth, which must be an integer greater than or equal to 0
 * @method void setEffectiveDays(integer $EffectiveDays) Set Number of actual valid days for the monthly billable bandwidth, which must be an integer greater than or equal to 0
 * @method integer getMonthDays() Obtain Actual number of days in the specified month, such as 30
 * @method void setMonthDays(integer $MonthDays) Set Actual number of days in the specified month, such as 30
 * @method float getEffectiveDaysRate() Obtain Proportion of the number of valid days, accurate to four decimal places, such as `0.2134`
 * @method void setEffectiveDaysRate(float $EffectiveDaysRate) Set Proportion of the number of valid days, accurate to four decimal places, such as `0.2134`
 * @method string getBandwidthPkgType() Obtain Billable bandwidth package type. Valid values: Address, LoadBalance, AddressIpv6
 * @method void setBandwidthPkgType(string $BandwidthPkgType) Set Billable bandwidth package type. Valid values: Address, LoadBalance, AddressIpv6
 */
class MonthNetwork extends AbstractModel
{
    /**
     * @var ZoneInfo Zone information of the node
     */
    public $ZoneInfo;

    /**
     * @var string Bandwidth month, such as `202103`
     */
    public $Month;

    /**
     * @var string Bandwidth package ID format, such as `bwp-xxxxxxxx`
     */
    public $BandwidthPkgId;

    /**
     * @var string ISP abbreviation. Valid values: CUCC, CTCC, CMCC
     */
    public $Isp;

    /**
     * @var float Inbound bandwidth package peak. Value range: 0.0–xxx.xxx
     */
    public $TrafficMaxIn;

    /**
     * @var float Outbound bandwidth package peak. Value range: 0.0–xxx.xxx
     */
    public $TrafficMaxOut;

    /**
     * @var float Billable bandwidth. Value range: 0.0–xxx.xxx
     */
    public $FeeTraffic;

    /**
     * @var string Start time of the monthly billable bandwidth in the format of `yyyy-mm-dd HH:mm:ss`
     */
    public $StartTime;

    /**
     * @var string End time of the monthly billable bandwidth in the format of `yyyy-mm-dd HH:mm:ss`
     */
    public $EndTime;

    /**
     * @var integer Number of actual valid days for the monthly billable bandwidth, which must be an integer greater than or equal to 0
     */
    public $EffectiveDays;

    /**
     * @var integer Actual number of days in the specified month, such as 30
     */
    public $MonthDays;

    /**
     * @var float Proportion of the number of valid days, accurate to four decimal places, such as `0.2134`
     */
    public $EffectiveDaysRate;

    /**
     * @var string Billable bandwidth package type. Valid values: Address, LoadBalance, AddressIpv6
     */
    public $BandwidthPkgType;

    /**
     * @param ZoneInfo $ZoneInfo Zone information of the node
     * @param string $Month Bandwidth month, such as `202103`
     * @param string $BandwidthPkgId Bandwidth package ID format, such as `bwp-xxxxxxxx`
     * @param string $Isp ISP abbreviation. Valid values: CUCC, CTCC, CMCC
     * @param float $TrafficMaxIn Inbound bandwidth package peak. Value range: 0.0–xxx.xxx
     * @param float $TrafficMaxOut Outbound bandwidth package peak. Value range: 0.0–xxx.xxx
     * @param float $FeeTraffic Billable bandwidth. Value range: 0.0–xxx.xxx
     * @param string $StartTime Start time of the monthly billable bandwidth in the format of `yyyy-mm-dd HH:mm:ss`
     * @param string $EndTime End time of the monthly billable bandwidth in the format of `yyyy-mm-dd HH:mm:ss`
     * @param integer $EffectiveDays Number of actual valid days for the monthly billable bandwidth, which must be an integer greater than or equal to 0
     * @param integer $MonthDays Actual number of days in the specified month, such as 30
     * @param float $EffectiveDaysRate Proportion of the number of valid days, accurate to four decimal places, such as `0.2134`
     * @param string $BandwidthPkgType Billable bandwidth package type. Valid values: Address, LoadBalance, AddressIpv6
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
        if (array_key_exists("ZoneInfo",$param) and $param["ZoneInfo"] !== null) {
            $this->ZoneInfo = new ZoneInfo();
            $this->ZoneInfo->deserialize($param["ZoneInfo"]);
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("BandwidthPkgId",$param) and $param["BandwidthPkgId"] !== null) {
            $this->BandwidthPkgId = $param["BandwidthPkgId"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("TrafficMaxIn",$param) and $param["TrafficMaxIn"] !== null) {
            $this->TrafficMaxIn = $param["TrafficMaxIn"];
        }

        if (array_key_exists("TrafficMaxOut",$param) and $param["TrafficMaxOut"] !== null) {
            $this->TrafficMaxOut = $param["TrafficMaxOut"];
        }

        if (array_key_exists("FeeTraffic",$param) and $param["FeeTraffic"] !== null) {
            $this->FeeTraffic = $param["FeeTraffic"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EffectiveDays",$param) and $param["EffectiveDays"] !== null) {
            $this->EffectiveDays = $param["EffectiveDays"];
        }

        if (array_key_exists("MonthDays",$param) and $param["MonthDays"] !== null) {
            $this->MonthDays = $param["MonthDays"];
        }

        if (array_key_exists("EffectiveDaysRate",$param) and $param["EffectiveDaysRate"] !== null) {
            $this->EffectiveDaysRate = $param["EffectiveDaysRate"];
        }

        if (array_key_exists("BandwidthPkgType",$param) and $param["BandwidthPkgType"] !== null) {
            $this->BandwidthPkgType = $param["BandwidthPkgType"];
        }
    }
}
