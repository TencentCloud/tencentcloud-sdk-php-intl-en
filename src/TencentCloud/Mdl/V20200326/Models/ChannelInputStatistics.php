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
 * Channel output statistics.
 *
 * @method string getInputId() Obtain Input ID.
 * @method void setInputId(string $InputId) Set Input ID.
 * @method InputStatistics getStatistics() Obtain Input statistics.
 * @method void setStatistics(InputStatistics $Statistics) Set Input statistics.
 */
class ChannelInputStatistics extends AbstractModel
{
    /**
     * @var string Input ID.
     */
    public $InputId;

    /**
     * @var InputStatistics Input statistics.
     */
    public $Statistics;

    /**
     * @param string $InputId Input ID.
     * @param InputStatistics $Statistics Input statistics.
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
        if (array_key_exists("InputId",$param) and $param["InputId"] !== null) {
            $this->InputId = $param["InputId"];
        }

        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = new InputStatistics();
            $this->Statistics->deserialize($param["Statistics"]);
        }
    }
}
