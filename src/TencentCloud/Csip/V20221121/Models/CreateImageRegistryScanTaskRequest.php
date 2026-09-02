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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateImageRegistryScanTask request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getScanType() Obtain <p>Scan type</p><p>Enumeration value:</p><ul><li>VUL: Vulnerability</li><li>VIRUS: Trojan</li><li>RISK: Sensitive information</li></ul>
 * @method void setScanType(array $ScanType) Set <p>Scan type</p><p>Enumeration value:</p><ul><li>VUL: Vulnerability</li><li>VIRUS: Trojan</li><li>RISK: Sensitive information</li></ul>
 * @method integer getTimeout() Obtain <p>Timeout period, in seconds</p>
 * @method void setTimeout(integer $Timeout) Set <p>Timeout period, in seconds</p>
 * @method string getName() Obtain <p>Task name</p>
 * @method void setName(string $Name) Set <p>Task name</p>
 * @method ImageScanAssetTarget getTarget() Obtain <p>Filtering configuration of scanning target mirrors</p>
 * @method void setTarget(ImageScanAssetTarget $Target) Set <p>Filtering configuration of scanning target mirrors</p>
 * @method ImageScanRegistryFilter getFilter() Obtain <p>Mirror filter configuration</p>
 * @method void setFilter(ImageScanRegistryFilter $Filter) Set <p>Mirror filter configuration</p>
 */
class CreateImageRegistryScanTaskRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Scan type</p><p>Enumeration value:</p><ul><li>VUL: Vulnerability</li><li>VIRUS: Trojan</li><li>RISK: Sensitive information</li></ul>
     */
    public $ScanType;

    /**
     * @var integer <p>Timeout period, in seconds</p>
     */
    public $Timeout;

    /**
     * @var string <p>Task name</p>
     */
    public $Name;

    /**
     * @var ImageScanAssetTarget <p>Filtering configuration of scanning target mirrors</p>
     */
    public $Target;

    /**
     * @var ImageScanRegistryFilter <p>Mirror filter configuration</p>
     */
    public $Filter;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $ScanType <p>Scan type</p><p>Enumeration value:</p><ul><li>VUL: Vulnerability</li><li>VIRUS: Trojan</li><li>RISK: Sensitive information</li></ul>
     * @param integer $Timeout <p>Timeout period, in seconds</p>
     * @param string $Name <p>Task name</p>
     * @param ImageScanAssetTarget $Target <p>Filtering configuration of scanning target mirrors</p>
     * @param ImageScanRegistryFilter $Filter <p>Mirror filter configuration</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new ImageScanAssetTarget();
            $this->Target->deserialize($param["Target"]);
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new ImageScanRegistryFilter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
