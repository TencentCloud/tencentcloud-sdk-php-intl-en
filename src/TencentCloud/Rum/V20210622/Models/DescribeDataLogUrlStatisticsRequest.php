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
 * DescribeDataLogUrlStatistics request structure.
 *
 * @method integer getStartTime() Obtain Start time
 * @method void setStartTime(integer $StartTime) Set Start time
 * @method string getType() Obtain `analysis`: exception analysis; `compare`: exception list comparison; `allcount`: performance view; `condition`: condition list; `nettype`/`version`/`platform`/`isp`/`region`/`device`/`browser`/`ext1`/`ext2`/`ext3`/`ret`/`status`/`from`/`url`/`env`: network/platform view; version view; device view; ISP view; region view; browser view; custom view, and so on.
 * @method void setType(string $Type) Set `analysis`: exception analysis; `compare`: exception list comparison; `allcount`: performance view; `condition`: condition list; `nettype`/`version`/`platform`/`isp`/`region`/`device`/`browser`/`ext1`/`ext2`/`ext3`/`ret`/`status`/`from`/`url`/`env`: network/platform view; version view; device view; ISP view; region view; browser view; custom view, and so on.
 * @method integer getEndTime() Obtain End time
 * @method void setEndTime(integer $EndTime) Set End time
 * @method integer getID() Obtain Project ID
 * @method void setID(integer $ID) Set Project ID
 * @method string getExtSecond() Obtain Custom 2
 * @method void setExtSecond(string $ExtSecond) Set Custom 2
 * @method string getEngine() Obtain Browser engine
 * @method void setEngine(string $Engine) Set Browser engine
 * @method string getIsp() Obtain ISP
 * @method void setIsp(string $Isp) Set ISP
 * @method string getFrom() Obtain Source page
 * @method void setFrom(string $From) Set Source page
 * @method string getLevel() Obtain Log level
 * @method void setLevel(string $Level) Set Log level
 * @method string getBrand() Obtain Brand
 * @method void setBrand(string $Brand) Set Brand
 * @method string getArea() Obtain Region
 * @method void setArea(string $Area) Set Region
 * @method string getVersionNum() Obtain Version
 * @method void setVersionNum(string $VersionNum) Set Version
 * @method string getPlatform() Obtain Platform
 * @method void setPlatform(string $Platform) Set Platform
 * @method string getExtThird() Obtain Custom 3
 * @method void setExtThird(string $ExtThird) Set Custom 3
 * @method string getExtFirst() Obtain Custom 1
 * @method void setExtFirst(string $ExtFirst) Set Custom 1
 * @method string getNetType() Obtain Network type
 * @method void setNetType(string $NetType) Set Network type
 * @method string getDevice() Obtain Model
 * @method void setDevice(string $Device) Set Model
 * @method string getIsAbroad() Obtain Whether it is outside the Chinese mainland
 * @method void setIsAbroad(string $IsAbroad) Set Whether it is outside the Chinese mainland
 * @method string getOs() Obtain OS
 * @method void setOs(string $Os) Set OS
 * @method string getBrowser() Obtain Browser
 * @method void setBrowser(string $Browser) Set Browser
 * @method string getEnv() Obtain Environment
 * @method void setEnv(string $Env) Set Environment
 */
class DescribeDataLogUrlStatisticsRequest extends AbstractModel
{
    /**
     * @var integer Start time
     */
    public $StartTime;

    /**
     * @var string `analysis`: exception analysis; `compare`: exception list comparison; `allcount`: performance view; `condition`: condition list; `nettype`/`version`/`platform`/`isp`/`region`/`device`/`browser`/`ext1`/`ext2`/`ext3`/`ret`/`status`/`from`/`url`/`env`: network/platform view; version view; device view; ISP view; region view; browser view; custom view, and so on.
     */
    public $Type;

    /**
     * @var integer End time
     */
    public $EndTime;

    /**
     * @var integer Project ID
     */
    public $ID;

    /**
     * @var string Custom 2
     */
    public $ExtSecond;

    /**
     * @var string Browser engine
     */
    public $Engine;

    /**
     * @var string ISP
     */
    public $Isp;

    /**
     * @var string Source page
     */
    public $From;

    /**
     * @var string Log level
     */
    public $Level;

    /**
     * @var string Brand
     */
    public $Brand;

    /**
     * @var string Region
     */
    public $Area;

    /**
     * @var string Version
     */
    public $VersionNum;

    /**
     * @var string Platform
     */
    public $Platform;

    /**
     * @var string Custom 3
     */
    public $ExtThird;

    /**
     * @var string Custom 1
     */
    public $ExtFirst;

    /**
     * @var string Network type
     */
    public $NetType;

    /**
     * @var string Model
     */
    public $Device;

    /**
     * @var string Whether it is outside the Chinese mainland
     */
    public $IsAbroad;

    /**
     * @var string OS
     */
    public $Os;

    /**
     * @var string Browser
     */
    public $Browser;

    /**
     * @var string Environment
     */
    public $Env;

    /**
     * @param integer $StartTime Start time
     * @param string $Type `analysis`: exception analysis; `compare`: exception list comparison; `allcount`: performance view; `condition`: condition list; `nettype`/`version`/`platform`/`isp`/`region`/`device`/`browser`/`ext1`/`ext2`/`ext3`/`ret`/`status`/`from`/`url`/`env`: network/platform view; version view; device view; ISP view; region view; browser view; custom view, and so on.
     * @param integer $EndTime End time
     * @param integer $ID Project ID
     * @param string $ExtSecond Custom 2
     * @param string $Engine Browser engine
     * @param string $Isp ISP
     * @param string $From Source page
     * @param string $Level Log level
     * @param string $Brand Brand
     * @param string $Area Region
     * @param string $VersionNum Version
     * @param string $Platform Platform
     * @param string $ExtThird Custom 3
     * @param string $ExtFirst Custom 1
     * @param string $NetType Network type
     * @param string $Device Model
     * @param string $IsAbroad Whether it is outside the Chinese mainland
     * @param string $Os OS
     * @param string $Browser Browser
     * @param string $Env Environment
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ExtSecond",$param) and $param["ExtSecond"] !== null) {
            $this->ExtSecond = $param["ExtSecond"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("VersionNum",$param) and $param["VersionNum"] !== null) {
            $this->VersionNum = $param["VersionNum"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ExtThird",$param) and $param["ExtThird"] !== null) {
            $this->ExtThird = $param["ExtThird"];
        }

        if (array_key_exists("ExtFirst",$param) and $param["ExtFirst"] !== null) {
            $this->ExtFirst = $param["ExtFirst"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = $param["Device"];
        }

        if (array_key_exists("IsAbroad",$param) and $param["IsAbroad"] !== null) {
            $this->IsAbroad = $param["IsAbroad"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
        }

        if (array_key_exists("Browser",$param) and $param["Browser"] !== null) {
            $this->Browser = $param["Browser"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }
    }
}
