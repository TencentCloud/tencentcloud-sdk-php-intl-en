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
 * DescribeAssetImageScanSetting response structure.
 *
 * @method boolean getEnable() Obtain Switch
 * @method void setEnable(boolean $Enable) Set Switch
 * @method string getScanTime() Obtain Scan time, which is a complete time and parsed as hour/minute/second in time zone 0 on the backend.
 * @method void setScanTime(string $ScanTime) Set Scan time, which is a complete time and parsed as hour/minute/second in time zone 0 on the backend.
 * @method integer getScanPeriod() Obtain Scan interval
 * @method void setScanPeriod(integer $ScanPeriod) Set Scan interval
 * @method boolean getScanVirus() Obtain Trojan scan
 * @method void setScanVirus(boolean $ScanVirus) Set Trojan scan
 * @method boolean getScanRisk() Obtain Sensitive data scan
 * @method void setScanRisk(boolean $ScanRisk) Set Sensitive data scan
 * @method boolean getScanVul() Obtain Vulnerability scan
 * @method void setScanVul(boolean $ScanVul) Set Vulnerability scan
 * @method boolean getAll() Obtain Scan of all images
 * @method void setAll(boolean $All) Set Scan of all images
 * @method array getImages() Obtain Scan of specified images
 * @method void setImages(array $Images) Set Scan of specified images
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAssetImageScanSettingResponse extends AbstractModel
{
    /**
     * @var boolean Switch
     */
    public $Enable;

    /**
     * @var string Scan time, which is a complete time and parsed as hour/minute/second in time zone 0 on the backend.
     */
    public $ScanTime;

    /**
     * @var integer Scan interval
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
     * @var boolean Scan of all images
     */
    public $All;

    /**
     * @var array Scan of specified images
     */
    public $Images;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $Enable Switch
     * @param string $ScanTime Scan time, which is a complete time and parsed as hour/minute/second in time zone 0 on the backend.
     * @param integer $ScanPeriod Scan interval
     * @param boolean $ScanVirus Trojan scan
     * @param boolean $ScanRisk Sensitive data scan
     * @param boolean $ScanVul Vulnerability scan
     * @param boolean $All Scan of all images
     * @param array $Images Scan of specified images
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
