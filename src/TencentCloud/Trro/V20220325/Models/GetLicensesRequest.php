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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetLicenses request structure.
 *
 * @method integer getPageNum() Obtain Page number.
 * @method void setPageNum(integer $PageNum) Set Page number.
 * @method integer getPageSize() Obtain Number of pages.
 * @method void setPageSize(integer $PageSize) Set Number of pages.
 * @method string getProjectId() Obtain projectId
 * @method void setProjectId(string $ProjectId) Set projectId
 * @method string getDeviceId() Obtain DeviceId
 * @method void setDeviceId(string $DeviceId) Set DeviceId
 * @method integer getStatus() Obtain License status. 0: unbound; 1: bound; 2: service suspension; 3: refund.
 * @method void setStatus(integer $Status) Set License status. 0: unbound; 1: bound; 2: service suspension; 3: refund.
 */
class GetLicensesRequest extends AbstractModel
{
    /**
     * @var integer Page number.
     */
    public $PageNum;

    /**
     * @var integer Number of pages.
     */
    public $PageSize;

    /**
     * @var string projectId
     */
    public $ProjectId;

    /**
     * @var string DeviceId
     */
    public $DeviceId;

    /**
     * @var integer License status. 0: unbound; 1: bound; 2: service suspension; 3: refund.
     */
    public $Status;

    /**
     * @param integer $PageNum Page number.
     * @param integer $PageSize Number of pages.
     * @param string $ProjectId projectId
     * @param string $DeviceId DeviceId
     * @param integer $Status License status. 0: unbound; 1: bound; 2: service suspension; 3: refund.
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
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
