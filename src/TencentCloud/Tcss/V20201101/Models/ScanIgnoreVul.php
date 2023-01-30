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
 * Scan for ignored vulnerabilities
 *
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method string getCVEID() Obtain Vulnerability CVE ID
 * @method void setCVEID(string $CVEID) Set Vulnerability CVE ID
 * @method string getPocID() Obtain POC ID
 * @method void setPocID(string $PocID) Set POC ID
 * @method integer getRegistryImageCount() Obtain Number of ignored repository images
 * @method void setRegistryImageCount(integer $RegistryImageCount) Set Number of ignored repository images
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method integer getIsIgnoreAll() Obtain Whether to ignore all images. Valid values: `0` (no); `1` (yes).
 * @method void setIsIgnoreAll(integer $IsIgnoreAll) Set Whether to ignore all images. Valid values: `0` (no); `1` (yes).
 * @method integer getLocalImageCount() Obtain Number of ignored local images
 * @method void setLocalImageCount(integer $LocalImageCount) Set Number of ignored local images
 */
class ScanIgnoreVul extends AbstractModel
{
    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var string Vulnerability CVE ID
     */
    public $CVEID;

    /**
     * @var string POC ID
     */
    public $PocID;

    /**
     * @var integer Number of ignored repository images
     */
    public $RegistryImageCount;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var integer Whether to ignore all images. Valid values: `0` (no); `1` (yes).
     */
    public $IsIgnoreAll;

    /**
     * @var integer Number of ignored local images
     */
    public $LocalImageCount;

    /**
     * @param string $VulName Vulnerability name
     * @param string $CVEID Vulnerability CVE ID
     * @param string $PocID POC ID
     * @param integer $RegistryImageCount Number of ignored repository images
     * @param string $UpdateTime Update time
     * @param integer $IsIgnoreAll Whether to ignore all images. Valid values: `0` (no); `1` (yes).
     * @param integer $LocalImageCount Number of ignored local images
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
        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }

        if (array_key_exists("RegistryImageCount",$param) and $param["RegistryImageCount"] !== null) {
            $this->RegistryImageCount = $param["RegistryImageCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsIgnoreAll",$param) and $param["IsIgnoreAll"] !== null) {
            $this->IsIgnoreAll = $param["IsIgnoreAll"];
        }

        if (array_key_exists("LocalImageCount",$param) and $param["LocalImageCount"] !== null) {
            $this->LocalImageCount = $param["LocalImageCount"];
        }
    }
}
