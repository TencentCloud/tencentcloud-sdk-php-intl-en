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
 * GetL3ConnList request structure.
 *
 * @method integer getPageSize() Obtain Display records per page. When both PageSize and PageNumber are -1, match all devices with unlimited entries on one page.
 * @method void setPageSize(integer $PageSize) Set Display records per page. When both PageSize and PageNumber are -1, match all devices with unlimited entries on one page.
 * @method integer getPageNumber() Obtain Currently viewed page number. When PageSize and PageNumber are both -1, match all devices with unlimited entries on one page.
 * @method void setPageNumber(integer $PageNumber) Set Currently viewed page number. When PageSize and PageNumber are both -1, match all devices with unlimited entries on one page.
 * @method string getDeviceId() Obtain Search for groups by DeviceId. Match all groups when empty.
 * @method void setDeviceId(string $DeviceId) Set Search for groups by DeviceId. Match all groups when empty.
 */
class GetL3ConnListRequest extends AbstractModel
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
     * @var string Search for groups by DeviceId. Match all groups when empty.
     */
    public $DeviceId;

    /**
     * @param integer $PageSize Display records per page. When both PageSize and PageNumber are -1, match all devices with unlimited entries on one page.
     * @param integer $PageNumber Currently viewed page number. When PageSize and PageNumber are both -1, match all devices with unlimited entries on one page.
     * @param string $DeviceId Search for groups by DeviceId. Match all groups when empty.
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

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }
    }
}
