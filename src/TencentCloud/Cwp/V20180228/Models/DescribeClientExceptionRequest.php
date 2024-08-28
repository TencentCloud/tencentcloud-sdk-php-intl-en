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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClientException request structure.
 *
 * @method integer getExceptionType() Obtain Client Exception Type 1: Client Offline, 2: Client Uninstallation
 * @method void setExceptionType(integer $ExceptionType) Set Client Exception Type 1: Client Offline, 2: Client Uninstallation
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method integer getLimit() Obtain Limit per Page, not 0, up to 100
 * @method void setLimit(integer $Limit) Set Limit per Page, not 0, up to 100
 * @method string getStartTime() Obtain Start time in the format of `2006-01-02 15:04:05`
 * @method void setStartTime(string $StartTime) Set Start time in the format of `2006-01-02 15:04:05`
 * @method string getEndTime() Obtain End time in the format of `2006-01-02 15:04:05`
 * @method void setEndTime(string $EndTime) Set End time in the format of `2006-01-02 15:04:05`
 */
class DescribeClientExceptionRequest extends AbstractModel
{
    /**
     * @var integer Client Exception Type 1: Client Offline, 2: Client Uninstallation
     */
    public $ExceptionType;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var integer Limit per Page, not 0, up to 100
     */
    public $Limit;

    /**
     * @var string Start time in the format of `2006-01-02 15:04:05`
     */
    public $StartTime;

    /**
     * @var string End time in the format of `2006-01-02 15:04:05`
     */
    public $EndTime;

    /**
     * @param integer $ExceptionType Client Exception Type 1: Client Offline, 2: Client Uninstallation
     * @param integer $Offset Pagination offset
     * @param integer $Limit Limit per Page, not 0, up to 100
     * @param string $StartTime Start time in the format of `2006-01-02 15:04:05`
     * @param string $EndTime End time in the format of `2006-01-02 15:04:05`
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
        if (array_key_exists("ExceptionType",$param) and $param["ExceptionType"] !== null) {
            $this->ExceptionType = $param["ExceptionType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
