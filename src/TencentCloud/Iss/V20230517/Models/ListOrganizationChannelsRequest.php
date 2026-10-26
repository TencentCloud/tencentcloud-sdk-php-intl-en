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
 * ListOrganizationChannels request structure.
 *
 * @method string getOrganizationId() Obtain Organization ID
 * @method void setOrganizationId(string $OrganizationId) Set Organization ID
 * @method integer getPageSize() Obtain Maximum number of items per page
 * @method void setPageSize(integer $PageSize) Set Maximum number of items per page
 * @method integer getPageNumber() Obtain Which page. 
 * @method void setPageNumber(integer $PageNumber) Set Which page. 
 * @method string getDeviceName() Obtain Query condition. Query by device name.
Only one query condition can take effect at a time. Length not exceeding 32 bytes.
 * @method void setDeviceName(string $DeviceName) Set Query condition. Query by device name.
Only one query condition can take effect at a time. Length not exceeding 32 bytes.
 * @method string getChannelName() Obtain Query condition. Proceed to query by channel name.
Only one query condition can take effect at a time. Length not exceeding 32 bytes.
 * @method void setChannelName(string $ChannelName) Set Query condition. Proceed to query by channel name.
Only one query condition can take effect at a time. Length not exceeding 32 bytes.
 */
class ListOrganizationChannelsRequest extends AbstractModel
{
    /**
     * @var string Organization ID
     */
    public $OrganizationId;

    /**
     * @var integer Maximum number of items per page
     */
    public $PageSize;

    /**
     * @var integer Which page. 
     */
    public $PageNumber;

    /**
     * @var string Query condition. Query by device name.
Only one query condition can take effect at a time. Length not exceeding 32 bytes.
     */
    public $DeviceName;

    /**
     * @var string Query condition. Proceed to query by channel name.
Only one query condition can take effect at a time. Length not exceeding 32 bytes.
     */
    public $ChannelName;

    /**
     * @param string $OrganizationId Organization ID
     * @param integer $PageSize Maximum number of items per page
     * @param integer $PageNumber Which page. 
     * @param string $DeviceName Query condition. Query by device name.
Only one query condition can take effect at a time. Length not exceeding 32 bytes.
     * @param string $ChannelName Query condition. Proceed to query by channel name.
Only one query condition can take effect at a time. Length not exceeding 32 bytes.
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

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }
    }
}
