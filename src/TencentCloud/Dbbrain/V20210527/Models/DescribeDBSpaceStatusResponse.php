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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBSpaceStatus response structure.
 *
 * @method integer getGrowth() Obtain Disk usage growth in MB.
 * @method void setGrowth(integer $Growth) Set Disk usage growth in MB.
 * @method integer getRemain() Obtain Available disk space in MB.
 * @method void setRemain(integer $Remain) Set Available disk space in MB.
 * @method integer getTotal() Obtain Total disk space in MB.
 * @method void setTotal(integer $Total) Set Total disk space in MB.
 * @method integer getAvailableDays() Obtain Estimated number of available days.
 * @method void setAvailableDays(integer $AvailableDays) Set Estimated number of available days.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDBSpaceStatusResponse extends AbstractModel
{
    /**
     * @var integer Disk usage growth in MB.
     */
    public $Growth;

    /**
     * @var integer Available disk space in MB.
     */
    public $Remain;

    /**
     * @var integer Total disk space in MB.
     */
    public $Total;

    /**
     * @var integer Estimated number of available days.
     */
    public $AvailableDays;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Growth Disk usage growth in MB.
     * @param integer $Remain Available disk space in MB.
     * @param integer $Total Total disk space in MB.
     * @param integer $AvailableDays Estimated number of available days.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Growth",$param) and $param["Growth"] !== null) {
            $this->Growth = $param["Growth"];
        }

        if (array_key_exists("Remain",$param) and $param["Remain"] !== null) {
            $this->Remain = $param["Remain"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("AvailableDays",$param) and $param["AvailableDays"] !== null) {
            $this->AvailableDays = $param["AvailableDays"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
