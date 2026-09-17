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
 * 
 *
 * @method float getDuration() Obtain 
 * @method void setDuration(float $Duration) Set 
 * @method array getTransitions() Obtain 
 * @method void setTransitions(array $Transitions) Set 
 * @method array getMediaTransitions() Obtain 
 * @method void setMediaTransitions(array $MediaTransitions) Set 
 */
class MediaTransitionItem extends AbstractModel
{
    /**
     * @var float 
     */
    public $Duration;

    /**
     * @var array 
     * @deprecated
     */
    public $Transitions;

    /**
     * @var array 
     */
    public $MediaTransitions;

    /**
     * @param float $Duration 
     * @param array $Transitions 
     * @param array $MediaTransitions 
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
