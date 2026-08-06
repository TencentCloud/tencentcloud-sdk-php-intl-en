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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getSelectorType() Obtain 
 * @method void setSelectorType(string $SelectorType) Set 
 * @method PidSelector getPidSelector() Obtain 
 * @method void setPidSelector(PidSelector $PidSelector) Set 
 * @method TrackSelector getTrackSelector() Obtain 
 * @method void setTrackSelector(TrackSelector $TrackSelector) Set 
 */
class StreamSelector extends AbstractModel
{
    /**
     * @var string 
     */
    public $SelectorType;

    /**
     * @var PidSelector 
     */
    public $PidSelector;

    /**
     * @var TrackSelector 
     */
    public $TrackSelector;

    /**
     * @param string $SelectorType 
     * @param PidSelector $PidSelector 
     * @param TrackSelector $TrackSelector 
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
        if (array_key_exists("SelectorType",$param) and $param["SelectorType"] !== null) {
            $this->SelectorType = $param["SelectorType"];
        }

        if (array_key_exists("PidSelector",$param) and $param["PidSelector"] !== null) {
            $this->PidSelector = new PidSelector();
            $this->PidSelector->deserialize($param["PidSelector"]);
        }

        if (array_key_exists("TrackSelector",$param) and $param["TrackSelector"] !== null) {
            $this->TrackSelector = new TrackSelector();
            $this->TrackSelector->deserialize($param["TrackSelector"]);
        }
    }
}
