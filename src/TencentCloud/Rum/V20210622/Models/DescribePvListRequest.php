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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePvList request structure.
 *
 * @method integer getProjectId() Obtain ID
 * @method void setProjectId(integer $ProjectId) Set ID
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getDimension() Obtain Get day:d (leave this parameter empty if to get min)
 * @method void setDimension(string $Dimension) Set Get day:d (leave this parameter empty if to get min)
 */
class DescribePvListRequest extends AbstractModel
{
    /**
     * @var integer ID
     */
    public $ProjectId;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string Get day:d (leave this parameter empty if to get min)
     */
    public $Dimension;

    /**
     * @param integer $ProjectId ID
     * @param string $EndTime End time
     * @param string $StartTime Start time
     * @param string $Dimension Get day:d (leave this parameter empty if to get min)
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }
    }
}
