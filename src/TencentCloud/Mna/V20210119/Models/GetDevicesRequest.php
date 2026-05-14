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
 * GetDevices request structure.
 *
 * @method integer getPageSize() Obtain Display records per page. When both PageSize and PageNumber are -1, match all devices with unlimited entries on one page.
 * @method void setPageSize(integer $PageSize) Set Display records per page. When both PageSize and PageNumber are -1, match all devices with unlimited entries on one page.
 * @method integer getPageNumber() Obtain Currently viewed page number. When PageSize and PageNumber are both -1, match all devices with unlimited entries on one page.
 * @method void setPageNumber(integer $PageNumber) Set Currently viewed page number. When PageSize and PageNumber are both -1, match all devices with unlimited entries on one page.
 * @method string getKeyword() Obtain Search for a device by keyword (ID or device name). Leave it empty to match all devices.
 * @method void setKeyword(string $Keyword) Set Search for a device by keyword (ID or device name). Leave it empty to match all devices.
 * @method integer getDeviceType() Obtain DeviceType
Leave it blank: Return all devices.
1: Your own equipment;
2: Third-party device
 * @method void setDeviceType(integer $DeviceType) Set DeviceType
Leave it blank: Return all devices.
1: Your own equipment;
2: Third-party device
 */
class GetDevicesRequest extends AbstractModel
{
    /**
     * @var integer Display records per page. When both PageSize and PageNumber are -1, match all devices with unlimited entries on one page.
     */
    public $PageSize;

    /**
     * @var integer Currently viewed page number. When PageSize and PageNumber are both -1, match all devices with unlimited entries on one page.
     */
    public $PageNumber;

    /**
     * @var string Search for a device by keyword (ID or device name). Leave it empty to match all devices.
     */
    public $Keyword;

    /**
     * @var integer DeviceType
Leave it blank: Return all devices.
1: Your own equipment;
2: Third-party device
     */
    public $DeviceType;

    /**
     * @param integer $PageSize Display records per page. When both PageSize and PageNumber are -1, match all devices with unlimited entries on one page.
     * @param integer $PageNumber Currently viewed page number. When PageSize and PageNumber are both -1, match all devices with unlimited entries on one page.
     * @param string $Keyword Search for a device by keyword (ID or device name). Leave it empty to match all devices.
     * @param integer $DeviceType DeviceType
Leave it blank: Return all devices.
1: Your own equipment;
2: Third-party device
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}
