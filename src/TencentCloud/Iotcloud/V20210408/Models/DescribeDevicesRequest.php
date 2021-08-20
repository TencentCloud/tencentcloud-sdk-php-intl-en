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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDevices request structure.
 *
 * @method string getProductId() Obtain ID of the product whose devices are queried
 * @method void setProductId(string $ProductId) Set ID of the product whose devices are queried
 * @method integer getOffset() Obtain Offset, which starts from 0
 * @method void setOffset(integer $Offset) Set Offset, which starts from 0
 * @method integer getLimit() Obtain Page size. Value range: 10-250
 * @method void setLimit(integer $Limit) Set Page size. Value range: 10-250
 * @method string getFirmwareVersion() Obtain Device firmware version. If no value is passed in, devices of all firmware versions are returned. If `None-FirmwareVersion` is passed in, devices without version numbers are returned.
 * @method void setFirmwareVersion(string $FirmwareVersion) Set Device firmware version. If no value is passed in, devices of all firmware versions are returned. If `None-FirmwareVersion` is passed in, devices without version numbers are returned.
 * @method string getDeviceName() Obtain Device name to query
 * @method void setDeviceName(string $DeviceName) Set Device name to query
 * @method integer getEnableState() Obtain Whether to query enabled or disabled devices. `0`: disabled devices; `1`: enabled devices. By default, both enabled and disabled devices are queried.
 * @method void setEnableState(integer $EnableState) Set Whether to query enabled or disabled devices. `0`: disabled devices; `1`: enabled devices. By default, both enabled and disabled devices are queried.
 */
class DescribeDevicesRequest extends AbstractModel
{
    /**
     * @var string ID of the product whose devices are queried
     */
    public $ProductId;

    /**
     * @var integer Offset, which starts from 0
     */
    public $Offset;

    /**
     * @var integer Page size. Value range: 10-250
     */
    public $Limit;

    /**
     * @var string Device firmware version. If no value is passed in, devices of all firmware versions are returned. If `None-FirmwareVersion` is passed in, devices without version numbers are returned.
     */
    public $FirmwareVersion;

    /**
     * @var string Device name to query
     */
    public $DeviceName;

    /**
     * @var integer Whether to query enabled or disabled devices. `0`: disabled devices; `1`: enabled devices. By default, both enabled and disabled devices are queried.
     */
    public $EnableState;

    /**
     * @param string $ProductId ID of the product whose devices are queried
     * @param integer $Offset Offset, which starts from 0
     * @param integer $Limit Page size. Value range: 10-250
     * @param string $FirmwareVersion Device firmware version. If no value is passed in, devices of all firmware versions are returned. If `None-FirmwareVersion` is passed in, devices without version numbers are returned.
     * @param string $DeviceName Device name to query
     * @param integer $EnableState Whether to query enabled or disabled devices. `0`: disabled devices; `1`: enabled devices. By default, both enabled and disabled devices are queried.
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FirmwareVersion",$param) and $param["FirmwareVersion"] !== null) {
            $this->FirmwareVersion = $param["FirmwareVersion"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("EnableState",$param) and $param["EnableState"] !== null) {
            $this->EnableState = $param["EnableState"];
        }
    }
}
