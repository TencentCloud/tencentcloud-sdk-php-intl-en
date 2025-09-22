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
namespace TencentCloud\Cdz\V20221123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the queried data for the statistical item of the CDZ resource, corresponding to a specific vertical product resource statistics.
 *
 * @method string getItem() Obtain Specifies the item name of resource statistics.
 * @method void setItem(string $Item) Set Specifies the item name of resource statistics.
 * @method string getUnit() Obtain Resource statistics item measurement unit.
 * @method void setUnit(string $Unit) Set Resource statistics item measurement unit.
 * @method string getTotal() Obtain Total resource amount.
 * @method void setTotal(string $Total) Set Total resource amount.
 * @method string getUsage() Obtain Used resources.
 * @method void setUsage(string $Usage) Set Used resources.
 * @method string getUsageRate() Obtain Specifies the percentage of used resources.
 * @method void setUsageRate(string $UsageRate) Set Specifies the percentage of used resources.
 * @method string getRemain() Obtain Remaining resource.
 * @method void setRemain(string $Remain) Set Remaining resource.
 * @method string getRemainRate() Obtain Remaining resource percentage.
 * @method void setRemainRate(string $RemainRate) Set Remaining resource percentage.
 * @method string getThisMondayUsageRate() Obtain Resource utilization rate at midnight this monday.
 * @method void setThisMondayUsageRate(string $ThisMondayUsageRate) Set Resource utilization rate at midnight this monday.
 * @method string getThisMondayUsageGrowthRate() Obtain Resource growth rate this week.
 * @method void setThisMondayUsageGrowthRate(string $ThisMondayUsageGrowthRate) Set Resource growth rate this week.
 * @method string getLastMondayUsageGrowthRate() Obtain Resource growth rate last week.
 * @method void setLastMondayUsageGrowthRate(string $LastMondayUsageGrowthRate) Set Resource growth rate last week.
 */
class CloudDedicatedZoneResourceStatisticsInfo extends AbstractModel
{
    /**
     * @var string Specifies the item name of resource statistics.
     */
    public $Item;

    /**
     * @var string Resource statistics item measurement unit.
     */
    public $Unit;

    /**
     * @var string Total resource amount.
     */
    public $Total;

    /**
     * @var string Used resources.
     */
    public $Usage;

    /**
     * @var string Specifies the percentage of used resources.
     */
    public $UsageRate;

    /**
     * @var string Remaining resource.
     */
    public $Remain;

    /**
     * @var string Remaining resource percentage.
     */
    public $RemainRate;

    /**
     * @var string Resource utilization rate at midnight this monday.
     */
    public $ThisMondayUsageRate;

    /**
     * @var string Resource growth rate this week.
     */
    public $ThisMondayUsageGrowthRate;

    /**
     * @var string Resource growth rate last week.
     */
    public $LastMondayUsageGrowthRate;

    /**
     * @param string $Item Specifies the item name of resource statistics.
     * @param string $Unit Resource statistics item measurement unit.
     * @param string $Total Total resource amount.
     * @param string $Usage Used resources.
     * @param string $UsageRate Specifies the percentage of used resources.
     * @param string $Remain Remaining resource.
     * @param string $RemainRate Remaining resource percentage.
     * @param string $ThisMondayUsageRate Resource utilization rate at midnight this monday.
     * @param string $ThisMondayUsageGrowthRate Resource growth rate this week.
     * @param string $LastMondayUsageGrowthRate Resource growth rate last week.
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
        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = $param["Item"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("UsageRate",$param) and $param["UsageRate"] !== null) {
            $this->UsageRate = $param["UsageRate"];
        }

        if (array_key_exists("Remain",$param) and $param["Remain"] !== null) {
            $this->Remain = $param["Remain"];
        }

        if (array_key_exists("RemainRate",$param) and $param["RemainRate"] !== null) {
            $this->RemainRate = $param["RemainRate"];
        }

        if (array_key_exists("ThisMondayUsageRate",$param) and $param["ThisMondayUsageRate"] !== null) {
            $this->ThisMondayUsageRate = $param["ThisMondayUsageRate"];
        }

        if (array_key_exists("ThisMondayUsageGrowthRate",$param) and $param["ThisMondayUsageGrowthRate"] !== null) {
            $this->ThisMondayUsageGrowthRate = $param["ThisMondayUsageGrowthRate"];
        }

        if (array_key_exists("LastMondayUsageGrowthRate",$param) and $param["LastMondayUsageGrowthRate"] !== null) {
            $this->LastMondayUsageGrowthRate = $param["LastMondayUsageGrowthRate"];
        }
    }
}
