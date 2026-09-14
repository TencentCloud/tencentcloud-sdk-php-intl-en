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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio track information.
 *
 * @method integer getChannelsRemix() Obtain 
 * @method void setChannelsRemix(integer $ChannelsRemix) Set 
 * @method string getSelectType() Obtain 
 * @method void setSelectType(string $SelectType) Set 
 * @method array getInputTrackInfo() Obtain 
 * @method void setInputTrackInfo(array $InputTrackInfo) Set 
 */
class AudioTrackChannelInfo extends AbstractModel
{
    /**
     * @var integer 
     */
    public $ChannelsRemix;

    /**
     * @var string 
     */
    public $SelectType;

    /**
     * @var array 
     */
    public $InputTrackInfo;

    /**
     * @param integer $ChannelsRemix 
     * @param string $SelectType 
     * @param array $InputTrackInfo 
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
        if (array_key_exists("ChannelsRemix",$param) and $param["ChannelsRemix"] !== null) {
            $this->ChannelsRemix = $param["ChannelsRemix"];
        }

        if (array_key_exists("SelectType",$param) and $param["SelectType"] !== null) {
            $this->SelectType = $param["SelectType"];
        }

        if (array_key_exists("InputTrackInfo",$param) and $param["InputTrackInfo"] !== null) {
            $this->InputTrackInfo = [];
            foreach ($param["InputTrackInfo"] as $key => $value){
                $obj = new TrackInfo();
                $obj->deserialize($value);
                array_push($this->InputTrackInfo, $obj);
            }
        }
    }
}
