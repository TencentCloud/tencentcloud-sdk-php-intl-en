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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Control parameters for video quality evaluation.
 *
 * @method string getSwitch() Obtain Video quality evaluation switch, optional values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>
 * @method void setSwitch(string $Switch) Set Video quality evaluation switch, optional values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>
 * @method integer getScore() Obtain Video quality evaluation filter threshold, the result only returns the time periods lower than this value, the default value is 60.
 * @method void setScore(integer $Score) Set Video quality evaluation filter threshold, the result only returns the time periods lower than this value, the default value is 60.
 */
class QualityEvaluationConfigureInfo extends AbstractModel
{
    /**
     * @var string Video quality evaluation switch, optional values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>
     */
    public $Switch;

    /**
     * @var integer Video quality evaluation filter threshold, the result only returns the time periods lower than this value, the default value is 60.
     */
    public $Score;

    /**
     * @param string $Switch Video quality evaluation switch, optional values:
<li>ON: enabled;</li>
<li>OFF: disabled.</li>
     * @param integer $Score Video quality evaluation filter threshold, the result only returns the time periods lower than this value, the default value is 60.
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
