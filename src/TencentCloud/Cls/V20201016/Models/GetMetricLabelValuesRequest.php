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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetMetricLabelValues request structure.
 *
 * @method string getTopicId() Obtain <p>Time Series Topic id</p>
 * @method void setTopicId(string $TopicId) Set <p>Time Series Topic id</p>
 * @method string getLabelName() Obtain <p>Name of time series label</p>
 * @method void setLabelName(string $LabelName) Set <p>Name of time series label</p>
 * @method integer getStart() Obtain <p>Start time</p>
 * @method void setStart(integer $Start) Set <p>Start time</p>
 * @method integer getEnd() Obtain <p>End time.</p>
 * @method void setEnd(integer $End) Set <p>End time.</p>
 * @method array getMatch() Obtain <p>Label match rule</p>
 * @method void setMatch(array $Match) Set <p>Label match rule</p>
 */
class GetMetricLabelValuesRequest extends AbstractModel
{
    /**
     * @var string <p>Time Series Topic id</p>
     */
    public $TopicId;

    /**
     * @var string <p>Name of time series label</p>
     */
    public $LabelName;

    /**
     * @var integer <p>Start time</p>
     */
    public $Start;

    /**
     * @var integer <p>End time.</p>
     */
    public $End;

    /**
     * @var array <p>Label match rule</p>
     */
    public $Match;

    /**
     * @param string $TopicId <p>Time Series Topic id</p>
     * @param string $LabelName <p>Name of time series label</p>
     * @param integer $Start <p>Start time</p>
     * @param integer $End <p>End time.</p>
     * @param array $Match <p>Label match rule</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("Match",$param) and $param["Match"] !== null) {
            $this->Match = $param["Match"];
        }
    }
}
