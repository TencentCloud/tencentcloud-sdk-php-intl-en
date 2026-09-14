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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageTasks request structure.
 *
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method integer getLimit() Obtain 
 * @method void setLimit(integer $Limit) Set 
 * @method string getScrollToken() Obtain 
 * @method void setScrollToken(string $ScrollToken) Set 
 * @method string getStartTime() Obtain 
 * @method void setStartTime(string $StartTime) Set 
 * @method string getEndTime() Obtain 
 * @method void setEndTime(string $EndTime) Set 
 * @method boolean getSubTaskHasFailed() Obtain 
 * @method void setSubTaskHasFailed(boolean $SubTaskHasFailed) Set 
 */
class DescribeImageTasksRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Status;

    /**
     * @var integer 
     */
    public $Limit;

    /**
     * @var string 
     */
    public $ScrollToken;

    /**
     * @var string 
     */
    public $StartTime;

    /**
     * @var string 
     */
    public $EndTime;

    /**
     * @var boolean 
     */
    public $SubTaskHasFailed;

    /**
     * @param string $Status 
     * @param integer $Limit 
     * @param string $ScrollToken 
     * @param string $StartTime 
     * @param string $EndTime 
     * @param boolean $SubTaskHasFailed 
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SubTaskHasFailed",$param) and $param["SubTaskHasFailed"] !== null) {
            $this->SubTaskHasFailed = $param["SubTaskHasFailed"];
        }
    }
}
