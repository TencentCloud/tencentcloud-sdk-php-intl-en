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
 * The RTMP configuration of the output to create.
 *
 * @method array getDestinations() Obtain The relay destination addresses. One or two addresses are allowed.
 * @method void setDestinations(array $Destinations) Set The relay destination addresses. One or two addresses are allowed.
 * @method integer getChunkSize() Obtain The RTMP chunk size. Value range: [4096, 40960].
 * @method void setChunkSize(integer $ChunkSize) Set The RTMP chunk size. Value range: [4096, 40960].
 */
class CreateOutputRTMPSettings extends AbstractModel
{
    /**
     * @var array The relay destination addresses. One or two addresses are allowed.
     */
    public $Destinations;

    /**
     * @var integer The RTMP chunk size. Value range: [4096, 40960].
     */
    public $ChunkSize;

    /**
     * @param array $Destinations The relay destination addresses. One or two addresses are allowed.
     * @param integer $ChunkSize The RTMP chunk size. Value range: [4096, 40960].
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
        if (array_key_exists("Destinations",$param) and $param["Destinations"] !== null) {
            $this->Destinations = [];
            foreach ($param["Destinations"] as $key => $value){
                $obj = new CreateOutputRtmpSettingsDestinations();
                $obj->deserialize($value);
                array_push($this->Destinations, $obj);
            }
        }

        if (array_key_exists("ChunkSize",$param) and $param["ChunkSize"] !== null) {
            $this->ChunkSize = $param["ChunkSize"];
        }
    }
}
