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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Control parameters for video frame quality evaluation.
 *
 * @method string getSwitch() Obtain Video quality evaluation switch. Available values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>
 * @method void setSwitch(string $Switch) Set Video quality evaluation switch. Available values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>
 * @method integer getScore() Obtain Video quality rating filter threshold. Only time periods with values below this threshold are returned.
 * @method void setScore(integer $Score) Set Video quality rating filter threshold. Only time periods with values below this threshold are returned.
 */
class QualityEvaluationConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var string Video quality evaluation switch. Available values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>
     */
    public $Switch;

    /**
     * @var integer Video quality rating filter threshold. Only time periods with values below this threshold are returned.
     */
    public $Score;

    /**
     * @param string $Switch Video quality evaluation switch. Available values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>
     * @param integer $Score Video quality rating filter threshold. Only time periods with values below this threshold are returned.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
