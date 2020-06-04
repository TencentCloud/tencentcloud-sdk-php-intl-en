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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Channel output information.
 *
 * @method string getOutputGroupName() Obtain Output group name.
 * @method void setOutputGroupName(string $OutputGroupName) Set Output group name.
 * @method OutputsStatistics getStatistics() Obtain Output group statistics.
 * @method void setStatistics(OutputsStatistics $Statistics) Set Output group statistics.
 */
class ChannelOutputsStatistics extends AbstractModel
{
    /**
     * @var string Output group name.
     */
    public $OutputGroupName;

    /**
     * @var OutputsStatistics Output group statistics.
     */
    public $Statistics;

    /**
     * @param string $OutputGroupName Output group name.
     * @param OutputsStatistics $Statistics Output group statistics.
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
        if (array_key_exists("OutputGroupName",$param) and $param["OutputGroupName"] !== null) {
            $this->OutputGroupName = $param["OutputGroupName"];
        }

        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = new OutputsStatistics();
            $this->Statistics->deserialize($param["Statistics"]);
        }
    }
}
