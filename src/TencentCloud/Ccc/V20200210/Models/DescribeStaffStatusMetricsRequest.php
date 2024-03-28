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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStaffStatusMetrics request structure.
 *
 * @method integer getSdkAppId() Obtain Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method array getStaffList() Obtain Filter agent list. By default, do not pass all returned agent information.
 * @method void setStaffList(array $StaffList) Set Filter agent list. By default, do not pass all returned agent information.
 * @method array getGroupIdList() Obtain Filter skill group ID list.
 * @method void setGroupIdList(array $GroupIdList) Set Filter skill group ID list.
 * @method array getStatusList() Obtain Filter agent status list.
 * @method void setStatusList(array $StatusList) Set Filter agent status list.
 */
class DescribeStaffStatusMetricsRequest extends AbstractModel
{
    /**
     * @var integer Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var array Filter agent list. By default, do not pass all returned agent information.
     */
    public $StaffList;

    /**
     * @var array Filter skill group ID list.
     */
    public $GroupIdList;

    /**
     * @var array Filter agent status list.
     */
    public $StatusList;

    /**
     * @param integer $SdkAppId Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param array $StaffList Filter agent list. By default, do not pass all returned agent information.
     * @param array $GroupIdList Filter skill group ID list.
     * @param array $StatusList Filter agent status list.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("StaffList",$param) and $param["StaffList"] !== null) {
            $this->StaffList = $param["StaffList"];
        }

        if (array_key_exists("GroupIdList",$param) and $param["GroupIdList"] !== null) {
            $this->GroupIdList = $param["GroupIdList"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }
    }
}
