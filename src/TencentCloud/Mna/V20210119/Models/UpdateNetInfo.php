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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Update device network status information
 *
 * @method integer getType() Obtain Network type:
Data
1:Wi-Fi
 * @method void setType(integer $Type) Set Network type:
Data
1:Wi-Fi
 * @method boolean getDataEnable() Obtain Enable or disable.
 * @method void setDataEnable(boolean $DataEnable) Set Enable or disable.
 * @method integer getUploadLimit() Obtain Uplink speed limit: bit
 * @method void setUploadLimit(integer $UploadLimit) Set Uplink speed limit: bit
 * @method integer getDownloadLimit() Obtain Downstream speed limit: bit.
 * @method void setDownloadLimit(integer $DownloadLimit) Set Downstream speed limit: bit.
 * @method string getNetInfoName() Obtain NIC Name
 * @method void setNetInfoName(string $NetInfoName) Set NIC Name
 */
class UpdateNetInfo extends AbstractModel
{
    /**
     * @var integer Network type:
Data
1:Wi-Fi
     */
    public $Type;

    /**
     * @var boolean Enable or disable.
     */
    public $DataEnable;

    /**
     * @var integer Uplink speed limit: bit
     */
    public $UploadLimit;

    /**
     * @var integer Downstream speed limit: bit.
     */
    public $DownloadLimit;

    /**
     * @var string NIC Name
     */
    public $NetInfoName;

    /**
     * @param integer $Type Network type:
Data
1:Wi-Fi
     * @param boolean $DataEnable Enable or disable.
     * @param integer $UploadLimit Uplink speed limit: bit
     * @param integer $DownloadLimit Downstream speed limit: bit.
     * @param string $NetInfoName NIC Name
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DataEnable",$param) and $param["DataEnable"] !== null) {
            $this->DataEnable = $param["DataEnable"];
        }

        if (array_key_exists("UploadLimit",$param) and $param["UploadLimit"] !== null) {
            $this->UploadLimit = $param["UploadLimit"];
        }

        if (array_key_exists("DownloadLimit",$param) and $param["DownloadLimit"] !== null) {
            $this->DownloadLimit = $param["DownloadLimit"];
        }

        if (array_key_exists("NetInfoName",$param) and $param["NetInfoName"] !== null) {
            $this->NetInfoName = $param["NetInfoName"];
        }
    }
}
