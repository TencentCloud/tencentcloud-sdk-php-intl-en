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
 * Audio and video track selection
 *
 * @method array getVideoIndex() Obtain Video track serial number. It starts from 1. Maximum value: 32.
 * @method void setVideoIndex(array $VideoIndex) Set Video track serial number. It starts from 1. Maximum value: 32.
 * @method array getAudioIndex() Obtain Video track serial number. Starts from 1. Maximum value: 32.
 * @method void setAudioIndex(array $AudioIndex) Set Video track serial number. Starts from 1. Maximum value: 32.
 */
class TrackSelector extends AbstractModel
{
    /**
     * @var array Video track serial number. It starts from 1. Maximum value: 32.
     */
    public $VideoIndex;

    /**
     * @var array Video track serial number. Starts from 1. Maximum value: 32.
     */
    public $AudioIndex;

    /**
     * @param array $VideoIndex Video track serial number. It starts from 1. Maximum value: 32.
     * @param array $AudioIndex Video track serial number. Starts from 1. Maximum value: 32.
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
        if (array_key_exists("VideoIndex",$param) and $param["VideoIndex"] !== null) {
            $this->VideoIndex = $param["VideoIndex"];
        }

        if (array_key_exists("AudioIndex",$param) and $param["AudioIndex"] !== null) {
            $this->AudioIndex = $param["AudioIndex"];
        }
    }
}
