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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAssetImageScanSetting request structure.
 *
 * @method boolean getEnable() Obtain <p>Switch.</p>
 * @method void setEnable(boolean $Enable) Set <p>Switch.</p>
 * @method string getScanTime() Obtain <p>Scan start time<br>01:00 Time Division</p>
 * @method void setScanTime(string $ScanTime) Set <p>Scan start time<br>01:00 Time Division</p>
 * @method integer getScanPeriod() Obtain <p>Scan cycle</p>
 * @method void setScanPeriod(integer $ScanPeriod) Set <p>Scan cycle</p>
 * @method boolean getScanVirus() Obtain <p>Scan for trojans</p>
 * @method void setScanVirus(boolean $ScanVirus) Set <p>Scan for trojans</p>
 * @method boolean getScanRisk() Obtain <p>Scan sensitive information</p>
 * @method void setScanRisk(boolean $ScanRisk) Set <p>Scan sensitive information</p>
 * @method boolean getScanVul() Obtain <p>Scan for vulnerabilities</p>
 * @method void setScanVul(boolean $ScanVul) Set <p>Scan for vulnerabilities</p>
 * @method boolean getAll() Obtain <p>All images</p>
 * @method void setAll(boolean $All) Set <p>All images</p>
 * @method array getImages() Obtain <p>Custom Image</p>
 * @method void setImages(array $Images) Set <p>Custom Image</p>
 * @method boolean getContainerRunning() Obtain <p>Whether the image has running containers</p>
 * @method void setContainerRunning(boolean $ContainerRunning) Set <p>Whether the image has running containers</p>
 * @method integer getScanScope() Obtain <p>Scan range 0 all authorized images, 1 select mirror, 2 recommended scan, 3 cluster filtering scan</p><p>Value ranges from 0 to 3</p><p>Default value: 0</p>
 * @method void setScanScope(integer $ScanScope) Set <p>Scan range 0 all authorized images, 1 select mirror, 2 recommended scan, 3 cluster filtering scan</p><p>Value ranges from 0 to 3</p><p>Default value: 0</p>
 * @method string getScanEndTime() Obtain <p>Scan end time<br>02:00 Time Division</p>
 * @method void setScanEndTime(string $ScanEndTime) Set <p>Scan end time<br>02:00 Time Division</p>
 * @method array getExcludeImages() Obtain <p>Exclude mirror scan</p>
 * @method void setExcludeImages(array $ExcludeImages) Set <p>Exclude mirror scan</p>
 * @method array getClusterIDs() Obtain <p>Cluster ID.</p>
 * @method void setClusterIDs(array $ClusterIDs) Set <p>Cluster ID.</p>
 */
class CreateAssetImageScanSettingRequest extends AbstractModel
{
    /**
     * @var boolean <p>Switch.</p>
     */
    public $Enable;

    /**
     * @var string <p>Scan start time<br>01:00 Time Division</p>
     */
    public $ScanTime;

    /**
     * @var integer <p>Scan cycle</p>
     */
    public $ScanPeriod;

    /**
     * @var boolean <p>Scan for trojans</p>
     */
    public $ScanVirus;

    /**
     * @var boolean <p>Scan sensitive information</p>
     */
    public $ScanRisk;

    /**
     * @var boolean <p>Scan for vulnerabilities</p>
     */
    public $ScanVul;

    /**
     * @var boolean <p>All images</p>
     * @deprecated
     */
    public $All;

    /**
     * @var array <p>Custom Image</p>
     */
    public $Images;

    /**
     * @var boolean <p>Whether the image has running containers</p>
     */
    public $ContainerRunning;

    /**
     * @var integer <p>Scan range 0 all authorized images, 1 select mirror, 2 recommended scan, 3 cluster filtering scan</p><p>Value ranges from 0 to 3</p><p>Default value: 0</p>
     */
    public $ScanScope;

    /**
     * @var string <p>Scan end time<br>02:00 Time Division</p>
     */
    public $ScanEndTime;

    /**
     * @var array <p>Exclude mirror scan</p>
     */
    public $ExcludeImages;

    /**
     * @var array <p>Cluster ID.</p>
     */
    public $ClusterIDs;

    /**
     * @param boolean $Enable <p>Switch.</p>
     * @param string $ScanTime <p>Scan start time<br>01:00 Time Division</p>
     * @param integer $ScanPeriod <p>Scan cycle</p>
     * @param boolean $ScanVirus <p>Scan for trojans</p>
     * @param boolean $ScanRisk <p>Scan sensitive information</p>
     * @param boolean $ScanVul <p>Scan for vulnerabilities</p>
     * @param boolean $All <p>All images</p>
     * @param array $Images <p>Custom Image</p>
     * @param boolean $ContainerRunning <p>Whether the image has running containers</p>
     * @param integer $ScanScope <p>Scan range 0 all authorized images, 1 select mirror, 2 recommended scan, 3 cluster filtering scan</p><p>Value ranges from 0 to 3</p><p>Default value: 0</p>
     * @param string $ScanEndTime <p>Scan end time<br>02:00 Time Division</p>
     * @param array $ExcludeImages <p>Exclude mirror scan</p>
     * @param array $ClusterIDs <p>Cluster ID.</p>
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

        if (array_key_exists("ContainerRunning",$param) and $param["ContainerRunning"] !== null) {
            $this->ContainerRunning = $param["ContainerRunning"];
        }

        if (array_key_exists("ScanScope",$param) and $param["ScanScope"] !== null) {
            $this->ScanScope = $param["ScanScope"];
        }

        if (array_key_exists("ScanEndTime",$param) and $param["ScanEndTime"] !== null) {
            $this->ScanEndTime = $param["ScanEndTime"];
        }

        if (array_key_exists("ExcludeImages",$param) and $param["ExcludeImages"] !== null) {
            $this->ExcludeImages = $param["ExcludeImages"];
        }

        if (array_key_exists("ClusterIDs",$param) and $param["ClusterIDs"] !== null) {
            $this->ClusterIDs = $param["ClusterIDs"];
        }
    }
}
