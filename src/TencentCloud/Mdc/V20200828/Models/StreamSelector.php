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
 * Select the specified audio track or video output
 *
 * @method string getSelectorType() Obtain Selection type: PID | TRACK
 * @method void setSelectorType(string $SelectorType) Set Selection type: PID | TRACK
 * @method PidSelector getPidSelector() Obtain Based on the PID configuration selector
 * @method void setPidSelector(PidSelector $PidSelector) Set Based on the PID configuration selector
 * @method TrackSelector getTrackSelector() Obtain Select a selector based on the Track configuration
 * @method void setTrackSelector(TrackSelector $TrackSelector) Set Select a selector based on the Track configuration
 */
class StreamSelector extends AbstractModel
{
    /**
     * @var string Selection type: PID | TRACK
     */
    public $SelectorType;

    /**
     * @var PidSelector Based on the PID configuration selector
     */
    public $PidSelector;

    /**
     * @var TrackSelector Select a selector based on the Track configuration
     */
    public $TrackSelector;

    /**
     * @param string $SelectorType Selection type: PID | TRACK
     * @param PidSelector $PidSelector Based on the PID configuration selector
     * @param TrackSelector $TrackSelector Select a selector based on the Track configuration
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
