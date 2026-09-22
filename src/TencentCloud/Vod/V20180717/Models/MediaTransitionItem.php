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
 * Transition information
 *
 * @method float getDuration() Obtain Transition duration in seconds. For two media segments with transition processing, the start time of the second segment on the track is automatically adjusted to the end time of the previous segment minus the transition duration.
 * @method void setDuration(float $Duration) Set Transition duration in seconds. For two media segments with transition processing, the start time of the second segment on the track is automatically adjusted to the end time of the previous segment minus the transition duration.
 * @method array getTransitions() Obtain Transition operation list. A maximum of one image transition operation and one audio transition operation are supported respectively.
 * @method void setTransitions(array $Transitions) Set Transition operation list. A maximum of one image transition operation and one audio transition operation are supported respectively.
 * @method array getMediaTransitions() Obtain Transition operation list. A maximum of one image transition and one audio transition are supported respectively.
 * @method void setMediaTransitions(array $MediaTransitions) Set Transition operation list. A maximum of one image transition and one audio transition are supported respectively.
 */
class MediaTransitionItem extends AbstractModel
{
    /**
     * @var float Transition duration in seconds. For two media segments with transition processing, the start time of the second segment on the track is automatically adjusted to the end time of the previous segment minus the transition duration.
     */
    public $Duration;

    /**
     * @var array Transition operation list. A maximum of one image transition operation and one audio transition operation are supported respectively.
     * @deprecated
     */
    public $Transitions;

    /**
     * @var array Transition operation list. A maximum of one image transition and one audio transition are supported respectively.
     */
    public $MediaTransitions;

    /**
     * @param float $Duration Transition duration in seconds. For two media segments with transition processing, the start time of the second segment on the track is automatically adjusted to the end time of the previous segment minus the transition duration.
     * @param array $Transitions Transition operation list. A maximum of one image transition operation and one audio transition operation are supported respectively.
     * @param array $MediaTransitions Transition operation list. A maximum of one image transition and one audio transition are supported respectively.
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
                $obj = new TransitionOpertion();
                $obj->deserialize($value);
                array_push($this->Transitions, $obj);
            }
        }

        if (array_key_exists("MediaTransitions",$param) and $param["MediaTransitions"] !== null) {
            $this->MediaTransitions = [];
            foreach ($param["MediaTransitions"] as $key => $value){
                $obj = new TransitionOperation();
                $obj->deserialize($value);
                array_push($this->MediaTransitions, $obj);
            }
        }
    }
}
