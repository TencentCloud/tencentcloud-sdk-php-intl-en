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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDevices request structure.
 *
 * @method string getOrganizationId() Obtain Organization ID
 * @method void setOrganizationId(string $OrganizationId) Set Organization ID
 * @method boolean getIsContainSubLevel() Obtain Whether to obtain the device list of the current level and sub-levels. Default value: false.
 * @method void setIsContainSubLevel(boolean $IsContainSubLevel) Set Whether to obtain the device list of the current level and sub-levels. Default value: false.
 * @method boolean getIsContainUser() Obtain Whether the devices already associated with the current user are included. Default value: false.
 * @method void setIsContainUser(boolean $IsContainUser) Set Whether the devices already associated with the current user are included. Default value: false.
 * @method integer getAccessProtocol() Obtain Device access protocol. 1: RTMP, 2: GB, 3: GW, 4: IVCP (private protocol)
 * @method void setAccessProtocol(integer $AccessProtocol) Set Device access protocol. 1: RTMP, 2: GB, 3: GW, 4: IVCP (private protocol)
 * @method integer getType() Obtain Device type. 1: IPC, 2: NVR
 * @method void setType(integer $Type) Set Device type. 1: IPC, 2: NVR
 * @method integer getStatus() Obtain Device status. 0: unregistered; 1: online; 2: offline; 3: disabled.	
 * @method void setStatus(integer $Status) Set Device status. 0: unregistered; 1: online; 2: offline; 3: disabled.	
 * @method string getClusterId() Obtain Service node ID
 * @method void setClusterId(string $ClusterId) Set Service node ID
 * @method string getKeyword() Obtain Keyword for fuzzy search of devices
 * @method void setKeyword(string $Keyword) Set Keyword for fuzzy search of devices
 * @method integer getCurrentUin() Obtain Uin of the current user
 * @method void setCurrentUin(integer $CurrentUin) Set Uin of the current user
 * @method integer getPageNumber() Obtain Page number. Default value: 1.
 * @method void setPageNumber(integer $PageNumber) Set Page number. Default value: 1.
 * @method integer getPageSize() Obtain Number of items per page. Default value: 20. Maximum: 10000 per page.
 * @method void setPageSize(integer $PageSize) Set Number of items per page. Default value: 20. Maximum: 10000 per page.
 */
class ListDevicesRequest extends AbstractModel
{
    /**
     * @var string Organization ID
     */
    public $OrganizationId;

    /**
     * @var boolean Whether to obtain the device list of the current level and sub-levels. Default value: false.
     */
    public $IsContainSubLevel;

    /**
     * @var boolean Whether the devices already associated with the current user are included. Default value: false.
     */
    public $IsContainUser;

    /**
     * @var integer Device access protocol. 1: RTMP, 2: GB, 3: GW, 4: IVCP (private protocol)
     */
    public $AccessProtocol;

    /**
     * @var integer Device type. 1: IPC, 2: NVR
     */
    public $Type;

    /**
     * @var integer Device status. 0: unregistered; 1: online; 2: offline; 3: disabled.	
     */
    public $Status;

    /**
     * @var string Service node ID
     */
    public $ClusterId;

    /**
     * @var string Keyword for fuzzy search of devices
     */
    public $Keyword;

    /**
     * @var integer Uin of the current user
     */
    public $CurrentUin;

    /**
     * @var integer Page number. Default value: 1.
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page. Default value: 20. Maximum: 10000 per page.
     */
    public $PageSize;

    /**
     * @param string $OrganizationId Organization ID
     * @param boolean $IsContainSubLevel Whether to obtain the device list of the current level and sub-levels. Default value: false.
     * @param boolean $IsContainUser Whether the devices already associated with the current user are included. Default value: false.
     * @param integer $AccessProtocol Device access protocol. 1: RTMP, 2: GB, 3: GW, 4: IVCP (private protocol)
     * @param integer $Type Device type. 1: IPC, 2: NVR
     * @param integer $Status Device status. 0: unregistered; 1: online; 2: offline; 3: disabled.	
     * @param string $ClusterId Service node ID
     * @param string $Keyword Keyword for fuzzy search of devices
     * @param integer $CurrentUin Uin of the current user
     * @param integer $PageNumber Page number. Default value: 1.
     * @param integer $PageSize Number of items per page. Default value: 20. Maximum: 10000 per page.
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
        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("IsContainSubLevel",$param) and $param["IsContainSubLevel"] !== null) {
            $this->IsContainSubLevel = $param["IsContainSubLevel"];
        }

        if (array_key_exists("IsContainUser",$param) and $param["IsContainUser"] !== null) {
            $this->IsContainUser = $param["IsContainUser"];
        }

        if (array_key_exists("AccessProtocol",$param) and $param["AccessProtocol"] !== null) {
            $this->AccessProtocol = $param["AccessProtocol"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("CurrentUin",$param) and $param["CurrentUin"] !== null) {
            $this->CurrentUin = $param["CurrentUin"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
