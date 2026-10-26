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
 * ListRecordPlanDevices request structure.
 *
 * @method string getPlanId() Obtain Cloud migration plan ID
 * @method void setPlanId(string $PlanId) Set Cloud migration plan ID
 * @method integer getPageSize() Obtain Maximum number of items per page.
 * @method void setPageSize(integer $PageSize) Set Maximum number of items per page.
 * @method integer getPageNumber() Obtain Which page.
 * @method void setPageNumber(integer $PageNumber) Set Which page.
 * @method string getDeviceName() Obtain Query by device name. If it is empty, ignore this parameter.
Only one of the channel name, device name, and organization name is valid at the same time. If multiple fields have values at the same time, query by the priority order of channel name, device name, and organization name. If all are empty, perform a full query. The length cannot exceed 32 bytes.
 * @method void setDeviceName(string $DeviceName) Set Query by device name. If it is empty, ignore this parameter.
Only one of the channel name, device name, and organization name is valid at the same time. If multiple fields have values at the same time, query by the priority order of channel name, device name, and organization name. If all are empty, perform a full query. The length cannot exceed 32 bytes.
 * @method string getChannelName() Obtain Query by channel name. If it is empty, ignore this parameter.
Only one of the channel name, device name, and organization name is valid at the same time. If multiple fields have values at the same time, query by the priority order of channel name, device name, and organization name. If all are empty, perform a full query. The length cannot exceed 32 bytes.
 * @method void setChannelName(string $ChannelName) Set Query by channel name. If it is empty, ignore this parameter.
Only one of the channel name, device name, and organization name is valid at the same time. If multiple fields have values at the same time, query by the priority order of channel name, device name, and organization name. If all are empty, perform a full query. The length cannot exceed 32 bytes.
 * @method string getOrganizationName() Obtain Query by organization name. If it is empty, ignore this parameter.
Only one of the channel name, device name, and organization name is valid at the same time. If multiple fields have values at the same time, query by the priority order of channel name, device name, and organization name. If all are empty, perform a full query. The length cannot exceed 32 bytes.
 * @method void setOrganizationName(string $OrganizationName) Set Query by organization name. If it is empty, ignore this parameter.
Only one of the channel name, device name, and organization name is valid at the same time. If multiple fields have values at the same time, query by the priority order of channel name, device name, and organization name. If all are empty, perform a full query. The length cannot exceed 32 bytes.
 */
class ListRecordPlanDevicesRequest extends AbstractModel
{
    /**
     * @var string Cloud migration plan ID
     */
    public $PlanId;

    /**
     * @var integer Maximum number of items per page.
     */
    public $PageSize;

    /**
     * @var integer Which page.
     */
    public $PageNumber;

    /**
     * @var string Query by device name. If it is empty, ignore this parameter.
Only one of the channel name, device name, and organization name is valid at the same time. If multiple fields have values at the same time, query by the priority order of channel name, device name, and organization name. If all are empty, perform a full query. The length cannot exceed 32 bytes.
     */
    public $DeviceName;

    /**
     * @var string Query by channel name. If it is empty, ignore this parameter.
Only one of the channel name, device name, and organization name is valid at the same time. If multiple fields have values at the same time, query by the priority order of channel name, device name, and organization name. If all are empty, perform a full query. The length cannot exceed 32 bytes.
     */
    public $ChannelName;

    /**
     * @var string Query by organization name. If it is empty, ignore this parameter.
Only one of the channel name, device name, and organization name is valid at the same time. If multiple fields have values at the same time, query by the priority order of channel name, device name, and organization name. If all are empty, perform a full query. The length cannot exceed 32 bytes.
     */
    public $OrganizationName;

    /**
     * @param string $PlanId Cloud migration plan ID
     * @param integer $PageSize Maximum number of items per page.
     * @param integer $PageNumber Which page.
     * @param string $DeviceName Query by device name. If it is empty, ignore this parameter.
Only one of the channel name, device name, and organization name is valid at the same time. If multiple fields have values at the same time, query by the priority order of channel name, device name, and organization name. If all are empty, perform a full query. The length cannot exceed 32 bytes.
     * @param string $ChannelName Query by channel name. If it is empty, ignore this parameter.
Only one of the channel name, device name, and organization name is valid at the same time. If multiple fields have values at the same time, query by the priority order of channel name, device name, and organization name. If all are empty, perform a full query. The length cannot exceed 32 bytes.
     * @param string $OrganizationName Query by organization name. If it is empty, ignore this parameter.
Only one of the channel name, device name, and organization name is valid at the same time. If multiple fields have values at the same time, query by the priority order of channel name, device name, and organization name. If all are empty, perform a full query. The length cannot exceed 32 bytes.
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
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

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }
    }
}
