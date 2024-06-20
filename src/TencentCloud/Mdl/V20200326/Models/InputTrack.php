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
 * Audio track configuration.
 *
 * @method integer getTrackIndex() Obtain Audio track index 1-based index mapping to the specified audio track integer starting from 1.
 * @method void setTrackIndex(integer $TrackIndex) Set Audio track index 1-based index mapping to the specified audio track integer starting from 1.
 */
class InputTrack extends AbstractModel
{
    /**
     * @var integer Audio track index 1-based index mapping to the specified audio track integer starting from 1.
     */
    public $TrackIndex;

    /**
     * @param integer $TrackIndex Audio track index 1-based index mapping to the specified audio track integer starting from 1.
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
        if (array_key_exists("TrackIndex",$param) and $param["TrackIndex"] !== null) {
            $this->TrackIndex = $param["TrackIndex"];
        }
    }
}
