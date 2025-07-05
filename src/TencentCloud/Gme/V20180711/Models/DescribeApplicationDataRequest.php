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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationData request structure.
 *
 * @method integer getBizId() Obtain Application ID
 * @method void setBizId(integer $BizId) Set Application ID
 * @method string getStartDate() Obtain Data start date in the format of yyyy-mm-dd, such as 2018-07-13.
 * @method void setStartDate(string $StartDate) Set Data start date in the format of yyyy-mm-dd, such as 2018-07-13.
 * @method string getEndDate() Obtain Data end date in the format of yyyy-mm-dd, such as 2018-07-13.
 * @method void setEndDate(string $EndDate) Set Data end date in the format of yyyy-mm-dd, such as 2018-07-13.
 */
class DescribeApplicationDataRequest extends AbstractModel
{
    /**
     * @var integer Application ID
     */
    public $BizId;

    /**
     * @var string Data start date in the format of yyyy-mm-dd, such as 2018-07-13.
     */
    public $StartDate;

    /**
     * @var string Data end date in the format of yyyy-mm-dd, such as 2018-07-13.
     */
    public $EndDate;

    /**
     * @param integer $BizId Application ID
     * @param string $StartDate Data start date in the format of yyyy-mm-dd, such as 2018-07-13.
     * @param string $EndDate Data end date in the format of yyyy-mm-dd, such as 2018-07-13.
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }
    }
}
