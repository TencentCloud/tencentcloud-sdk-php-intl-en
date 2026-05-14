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
 * GetFlowPackages request structure.
 *
 * @method integer getPageNumber() Obtain Page number, starting from 1.
 * @method void setPageNumber(integer $PageNumber) Set Page number, starting from 1.
 * @method integer getPageSize() Obtain Number of Entry Per Page
 * @method void setPageSize(integer $PageSize) Set Number of Entry Per Page
 * @method string getResourceId() Obtain Unique resource ID of the data transfer plan
 * @method void setResourceId(string $ResourceId) Set Unique resource ID of the data transfer plan
 * @method string getDeviceId() Obtain Device ID bound to the data transfer plan
 * @method void setDeviceId(string $DeviceId) Set Device ID bound to the data transfer plan
 * @method integer getStatus() Obtain Traffic packet status. 0: Not in effect, 1: Within the validity period, 2: Expired.

 * @method void setStatus(integer $Status) Set Traffic packet status. 0: Not in effect, 1: Within the validity period, 2: Expired.
 */
class GetFlowPackagesRequest extends AbstractModel
{
    /**
     * @var integer Page number, starting from 1.
     */
    public $PageNumber;

    /**
     * @var integer Number of Entry Per Page
     */
    public $PageSize;

    /**
     * @var string Unique resource ID of the data transfer plan
     */
    public $ResourceId;

    /**
     * @var string Device ID bound to the data transfer plan
     */
    public $DeviceId;

    /**
     * @var integer Traffic packet status. 0: Not in effect, 1: Within the validity period, 2: Expired.

     */
    public $Status;

    /**
     * @param integer $PageNumber Page number, starting from 1.
     * @param integer $PageSize Number of Entry Per Page
     * @param string $ResourceId Unique resource ID of the data transfer plan
     * @param string $DeviceId Device ID bound to the data transfer plan
     * @param integer $Status Traffic packet status. 0: Not in effect, 1: Within the validity period, 2: Expired.
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
