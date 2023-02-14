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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetCredentialIssueTrend request structure.
 *
 * @method string getStartTime() Obtain The start date (as early as 2021-4-23).
 * @method void setStartTime(string $StartTime) Set The start date (as early as 2021-4-23).
 * @method string getEndTime() Obtain The end date (as early as 2021-4-23).
 * @method void setEndTime(string $EndTime) Set The end date (as early as 2021-4-23).
 * @method string getClusterId() Obtain The network ID.
 * @method void setClusterId(string $ClusterId) Set The network ID.
 */
class GetCredentialIssueTrendRequest extends AbstractModel
{
    /**
     * @var string The start date (as early as 2021-4-23).
     */
    public $StartTime;

    /**
     * @var string The end date (as early as 2021-4-23).
     */
    public $EndTime;

    /**
     * @var string The network ID.
     */
    public $ClusterId;

    /**
     * @param string $StartTime The start date (as early as 2021-4-23).
     * @param string $EndTime The end date (as early as 2021-4-23).
     * @param string $ClusterId The network ID.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
