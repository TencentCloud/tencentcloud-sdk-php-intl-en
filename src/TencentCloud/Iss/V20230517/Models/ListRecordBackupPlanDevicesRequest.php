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
 * ListRecordBackupPlanDevices request structure.
 *
 * @method string getPlanId() Obtain Recording schedule ID (obtain from the ListRecordBackupPlans API for querying the recording cloud migration plan list)
 * @method void setPlanId(string $PlanId) Set Recording schedule ID (obtain from the ListRecordBackupPlans API for querying the recording cloud migration plan list)
 * @method string getDeviceName() Obtain Query by device name (if empty, this parameter is not used for reference)
 * @method void setDeviceName(string $DeviceName) Set Query by device name (if empty, this parameter is not used for reference)
 * @method string getChannelName() Obtain Query by channel name (if empty, ignore this parameter)
 * @method void setChannelName(string $ChannelName) Set Query by channel name (if empty, ignore this parameter)
 * @method string getOrganizationName() Obtain Query by organization name (if empty, this parameter is not used for reference)
 * @method void setOrganizationName(string $OrganizationName) Set Query by organization name (if empty, this parameter is not used for reference)
 * @method integer getPageSize() Obtain Maximum number of items per page
 * @method void setPageSize(integer $PageSize) Set Maximum number of items per page
 * @method integer getPageNumber() Obtain Page number
 * @method void setPageNumber(integer $PageNumber) Set Page number
 */
class ListRecordBackupPlanDevicesRequest extends AbstractModel
{
    /**
     * @var string Recording schedule ID (obtain from the ListRecordBackupPlans API for querying the recording cloud migration plan list)
     */
    public $PlanId;

    /**
     * @var string Query by device name (if empty, this parameter is not used for reference)
     */
    public $DeviceName;

    /**
     * @var string Query by channel name (if empty, ignore this parameter)
     */
    public $ChannelName;

    /**
     * @var string Query by organization name (if empty, this parameter is not used for reference)
     */
    public $OrganizationName;

    /**
     * @var integer Maximum number of items per page
     */
    public $PageSize;

    /**
     * @var integer Page number
     */
    public $PageNumber;

    /**
     * @param string $PlanId Recording schedule ID (obtain from the ListRecordBackupPlans API for querying the recording cloud migration plan list)
     * @param string $DeviceName Query by device name (if empty, this parameter is not used for reference)
     * @param string $ChannelName Query by channel name (if empty, ignore this parameter)
     * @param string $OrganizationName Query by organization name (if empty, this parameter is not used for reference)
     * @param integer $PageSize Maximum number of items per page
     * @param integer $PageNumber Page number
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

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
