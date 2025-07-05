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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSNetEvInfo request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type (`net`: Anti-DDoS Ultimate)
 * @method void setBusiness(string $Business) Set Anti-DDoS service type (`net`: Anti-DDoS Ultimate)
 * @method string getId() Obtain Anti-DDoS instance ID
 * @method void setId(string $Id) Set Anti-DDoS instance ID
 * @method string getStartTime() Obtain Attack start time
 * @method void setStartTime(string $StartTime) Set Attack start time
 * @method string getEndTime() Obtain Attack end time
 * @method void setEndTime(string $EndTime) Set Attack end time
 */
class DescribeDDoSNetEvInfoRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type (`net`: Anti-DDoS Ultimate)
     */
    public $Business;

    /**
     * @var string Anti-DDoS instance ID
     */
    public $Id;

    /**
     * @var string Attack start time
     */
    public $StartTime;

    /**
     * @var string Attack end time
     */
    public $EndTime;

    /**
     * @param string $Business Anti-DDoS service type (`net`: Anti-DDoS Ultimate)
     * @param string $Id Anti-DDoS instance ID
     * @param string $StartTime Attack start time
     * @param string $EndTime Attack end time
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
