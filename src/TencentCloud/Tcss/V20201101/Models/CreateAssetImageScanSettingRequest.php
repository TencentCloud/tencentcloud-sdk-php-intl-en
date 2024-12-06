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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAssetImageScanSetting request structure.
 *
 * @method boolean getEnable() Obtain Switch
 * @method void setEnable(boolean $Enable) Set Switch
 * @method string getScanTime() Obtain Scan time
 * @method void setScanTime(string $ScanTime) Set Scan time
 * @method integer getScanPeriod() Obtain Scan cycle
 * @method void setScanPeriod(integer $ScanPeriod) Set Scan cycle
 * @method boolean getScanVirus() Obtain Trojan scan
 * @method void setScanVirus(boolean $ScanVirus) Set Trojan scan
 * @method boolean getScanRisk() Obtain Sensitive data scan
 * @method void setScanRisk(boolean $ScanRisk) Set Sensitive data scan
 * @method boolean getScanVul() Obtain Vulnerability scan
 * @method void setScanVul(boolean $ScanVul) Set Vulnerability scan
 * @method boolean getAll() Obtain All images
 * @method void setAll(boolean $All) Set All images
 * @method array getImages() Obtain Custom image
 * @method void setImages(array $Images) Set Custom image
 */
class CreateAssetImageScanSettingRequest extends AbstractModel
{
    /**
     * @var boolean Switch
     */
    public $Enable;

    /**
     * @var string Scan time
     */
    public $ScanTime;

    /**
     * @var integer Scan cycle
     */
    public $ScanPeriod;

    /**
     * @var boolean Trojan scan
     */
    public $ScanVirus;

    /**
     * @var boolean Sensitive data scan
     */
    public $ScanRisk;

    /**
     * @var boolean Vulnerability scan
     */
    public $ScanVul;

    /**
     * @var boolean All images
     * @deprecated
     */
    public $All;

    /**
     * @var array Custom image
     */
    public $Images;

    /**
     * @param boolean $Enable Switch
     * @param string $ScanTime Scan time
     * @param integer $ScanPeriod Scan cycle
     * @param boolean $ScanVirus Trojan scan
     * @param boolean $ScanRisk Sensitive data scan
     * @param boolean $ScanVul Vulnerability scan
     * @param boolean $All All images
     * @param array $Images Custom image
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("ScanPeriod",$param) and $param["ScanPeriod"] !== null) {
            $this->ScanPeriod = $param["ScanPeriod"];
        }

        if (array_key_exists("ScanVirus",$param) and $param["ScanVirus"] !== null) {
            $this->ScanVirus = $param["ScanVirus"];
        }

        if (array_key_exists("ScanRisk",$param) and $param["ScanRisk"] !== null) {
            $this->ScanRisk = $param["ScanRisk"];
        }

        if (array_key_exists("ScanVul",$param) and $param["ScanVul"] !== null) {
            $this->ScanVul = $param["ScanVul"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }
    }
}
