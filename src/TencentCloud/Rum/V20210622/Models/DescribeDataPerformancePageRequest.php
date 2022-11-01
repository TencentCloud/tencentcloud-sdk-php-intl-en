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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataPerformancePage request structure.
 *
 * @method integer getID() Obtain Project ID
 * @method void setID(integer $ID) Set Project ID
 * @method integer getStartTime() Obtain Start time
 * @method void setStartTime(integer $StartTime) Set Start time
 * @method integer getEndTime() Obtain End time
 * @method void setEndTime(integer $EndTime) Set End time
 * @method string getType() Obtain `pagepv`: PV view; `allcount`: performance view; `falls`: page loading waterfall plot; `samp`: FMP, `day`: 14-day data, `nettype`: network/platform view; `performance`: top underperformed pages view; `version`/`platform`/`isp`/`region`/`device`/`browser`/`ext1`/`ext2`/`ext3`/`ret`/`status`/`from`/`url`/`env`: version view; device view; ISP view; region view; browser view, and so on.
 * @method void setType(string $Type) Set `pagepv`: PV view; `allcount`: performance view; `falls`: page loading waterfall plot; `samp`: FMP, `day`: 14-day data, `nettype`: network/platform view; `performance`: top underperformed pages view; `version`/`platform`/`isp`/`region`/`device`/`browser`/`ext1`/`ext2`/`ext3`/`ret`/`status`/`from`/`url`/`env`: version view; device view; ISP view; region view; browser view, and so on.
 * @method string getLevel() Obtain Log level
 * @method void setLevel(string $Level) Set Log level
 * @method string getIsp() Obtain ISP
 * @method void setIsp(string $Isp) Set ISP
 * @method string getArea() Obtain Region
 * @method void setArea(string $Area) Set Region
 * @method string getNetType() Obtain Network type
 * @method void setNetType(string $NetType) Set Network type
 * @method string getPlatform() Obtain Platform
 * @method void setPlatform(string $Platform) Set Platform
 * @method string getDevice() Obtain Model
 * @method void setDevice(string $Device) Set Model
 * @method string getVersionNum() Obtain Version
 * @method void setVersionNum(string $VersionNum) Set Version
 * @method string getExtFirst() Obtain Custom 1
 * @method void setExtFirst(string $ExtFirst) Set Custom 1
 * @method string getExtSecond() Obtain Custom 2
 * @method void setExtSecond(string $ExtSecond) Set Custom 2
 * @method string getExtThird() Obtain Custom 3
 * @method void setExtThird(string $ExtThird) Set Custom 3
 * @method string getIsAbroad() Obtain Whether it is outside the Chinese mainland
 * @method void setIsAbroad(string $IsAbroad) Set Whether it is outside the Chinese mainland
 * @method string getBrowser() Obtain Browser
 * @method void setBrowser(string $Browser) Set Browser
 * @method string getOs() Obtain OS
 * @method void setOs(string $Os) Set OS
 * @method string getEngine() Obtain Browser engine
 * @method void setEngine(string $Engine) Set Browser engine
 * @method string getBrand() Obtain Brand
 * @method void setBrand(string $Brand) Set Brand
 * @method string getFrom() Obtain Source page
 * @method void setFrom(string $From) Set Source page
 * @method string getCostType() Obtain Duration calculation method
 * @method void setCostType(string $CostType) Set Duration calculation method
 * @method string getEnv() Obtain Environment variable
 * @method void setEnv(string $Env) Set Environment variable
 * @method string getNetStatus() Obtain Network status
 * @method void setNetStatus(string $NetStatus) Set Network status
 */
class DescribeDataPerformancePageRequest extends AbstractModel
{
    /**
     * @var integer Project ID
     */
    public $ID;

    /**
     * @var integer Start time
     */
    public $StartTime;

    /**
     * @var integer End time
     */
    public $EndTime;

    /**
     * @var string `pagepv`: PV view; `allcount`: performance view; `falls`: page loading waterfall plot; `samp`: FMP, `day`: 14-day data, `nettype`: network/platform view; `performance`: top underperformed pages view; `version`/`platform`/`isp`/`region`/`device`/`browser`/`ext1`/`ext2`/`ext3`/`ret`/`status`/`from`/`url`/`env`: version view; device view; ISP view; region view; browser view, and so on.
     */
    public $Type;

    /**
     * @var string Log level
     */
    public $Level;

    /**
     * @var string ISP
     */
    public $Isp;

    /**
     * @var string Region
     */
    public $Area;

    /**
     * @var string Network type
     */
    public $NetType;

    /**
     * @var string Platform
     */
    public $Platform;

    /**
     * @var string Model
     */
    public $Device;

    /**
     * @var string Version
     */
    public $VersionNum;

    /**
     * @var string Custom 1
     */
    public $ExtFirst;

    /**
     * @var string Custom 2
     */
    public $ExtSecond;

    /**
     * @var string Custom 3
     */
    public $ExtThird;

    /**
     * @var string Whether it is outside the Chinese mainland
     */
    public $IsAbroad;

    /**
     * @var string Browser
     */
    public $Browser;

    /**
     * @var string OS
     */
    public $Os;

    /**
     * @var string Browser engine
     */
    public $Engine;

    /**
     * @var string Brand
     */
    public $Brand;

    /**
     * @var string Source page
     */
    public $From;

    /**
     * @var string Duration calculation method
     */
    public $CostType;

    /**
     * @var string Environment variable
     */
    public $Env;

    /**
     * @var string Network status
     */
    public $NetStatus;

    /**
     * @param integer $ID Project ID
     * @param integer $StartTime Start time
     * @param integer $EndTime End time
     * @param string $Type `pagepv`: PV view; `allcount`: performance view; `falls`: page loading waterfall plot; `samp`: FMP, `day`: 14-day data, `nettype`: network/platform view; `performance`: top underperformed pages view; `version`/`platform`/`isp`/`region`/`device`/`browser`/`ext1`/`ext2`/`ext3`/`ret`/`status`/`from`/`url`/`env`: version view; device view; ISP view; region view; browser view, and so on.
     * @param string $Level Log level
     * @param string $Isp ISP
     * @param string $Area Region
     * @param string $NetType Network type
     * @param string $Platform Platform
     * @param string $Device Model
     * @param string $VersionNum Version
     * @param string $ExtFirst Custom 1
     * @param string $ExtSecond Custom 2
     * @param string $ExtThird Custom 3
     * @param string $IsAbroad Whether it is outside the Chinese mainland
     * @param string $Browser Browser
     * @param string $Os OS
     * @param string $Engine Browser engine
     * @param string $Brand Brand
     * @param string $From Source page
     * @param string $CostType Duration calculation method
     * @param string $Env Environment variable
     * @param string $NetStatus Network status
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = $param["Device"];
        }

        if (array_key_exists("VersionNum",$param) and $param["VersionNum"] !== null) {
            $this->VersionNum = $param["VersionNum"];
        }

        if (array_key_exists("ExtFirst",$param) and $param["ExtFirst"] !== null) {
            $this->ExtFirst = $param["ExtFirst"];
        }

        if (array_key_exists("ExtSecond",$param) and $param["ExtSecond"] !== null) {
            $this->ExtSecond = $param["ExtSecond"];
        }

        if (array_key_exists("ExtThird",$param) and $param["ExtThird"] !== null) {
            $this->ExtThird = $param["ExtThird"];
        }

        if (array_key_exists("IsAbroad",$param) and $param["IsAbroad"] !== null) {
            $this->IsAbroad = $param["IsAbroad"];
        }

        if (array_key_exists("Browser",$param) and $param["Browser"] !== null) {
            $this->Browser = $param["Browser"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("CostType",$param) and $param["CostType"] !== null) {
            $this->CostType = $param["CostType"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("NetStatus",$param) and $param["NetStatus"] !== null) {
            $this->NetStatus = $param["NetStatus"];
        }
    }
}
