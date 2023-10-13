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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The transition element information of a video editing/compositing task.
 *
 * @method string getDuration() Obtain The element duration. <li>The value of this parameter ends with `s`, which means seconds. For example, `3s` indicates 3 seconds. </li>
Default value: `1s`.
Note
<li>The number before `s` must be an integer. Non-integers will be rounded down to the nearest integer. </li>
<li>The transition element must be between two non-empty elements. </li>
<li>The duration of the transition element must be shorter than that of the preceding element and the following element. </li>
u200c<li>The start time of the following element on the track will be automatically changed to the end time of the preceding element minus the duration of the transition element. </li>
 * @method void setDuration(string $Duration) Set The element duration. <li>The value of this parameter ends with `s`, which means seconds. For example, `3s` indicates 3 seconds. </li>
Default value: `1s`.
Note
<li>The number before `s` must be an integer. Non-integers will be rounded down to the nearest integer. </li>
<li>The transition element must be between two non-empty elements. </li>
<li>The duration of the transition element must be shorter than that of the preceding element and the following element. </li>
u200c<li>The start time of the following element on the track will be automatically changed to the end time of the preceding element minus the duration of the transition element. </li>
 * @method array getTransitions() Obtain The transition effects.
The default transition effect is fade.
Note: You can add at most one image transition and one audio transition.
 * @method void setTransitions(array $Transitions) Set The transition effects.
The default transition effect is fade.
Note: You can add at most one image transition and one audio transition.
 */
class ComposeTransitionItem extends AbstractModel
{
    /**
     * @var string The element duration. <li>The value of this parameter ends with `s`, which means seconds. For example, `3s` indicates 3 seconds. </li>
Default value: `1s`.
Note
<li>The number before `s` must be an integer. Non-integers will be rounded down to the nearest integer. </li>
<li>The transition element must be between two non-empty elements. </li>
<li>The duration of the transition element must be shorter than that of the preceding element and the following element. </li>
u200c<li>The start time of the following element on the track will be automatically changed to the end time of the preceding element minus the duration of the transition element. </li>
     */
    public $Duration;

    /**
     * @var array The transition effects.
The default transition effect is fade.
Note: You can add at most one image transition and one audio transition.
     */
    public $Transitions;

    /**
     * @param string $Duration The element duration. <li>The value of this parameter ends with `s`, which means seconds. For example, `3s` indicates 3 seconds. </li>
Default value: `1s`.
Note
<li>The number before `s` must be an integer. Non-integers will be rounded down to the nearest integer. </li>
<li>The transition element must be between two non-empty elements. </li>
<li>The duration of the transition element must be shorter than that of the preceding element and the following element. </li>
u200c<li>The start time of the following element on the track will be automatically changed to the end time of the preceding element minus the duration of the transition element. </li>
     * @param array $Transitions The transition effects.
The default transition effect is fade.
Note: You can add at most one image transition and one audio transition.
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Transitions",$param) and $param["Transitions"] !== null) {
            $this->Transitions = [];
            foreach ($param["Transitions"] as $key => $value){
                $obj = new ComposeTransitionOperation();
                $obj->deserialize($value);
                array_push($this->Transitions, $obj);
            }
        }
    }
}
