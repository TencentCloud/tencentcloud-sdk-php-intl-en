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
 * Modification object of DRM-protected adaptive bitstream playback information
 *
 * @method integer getSimpleAesDefinition() Obtain ID of the adaptive bitrate streaming template whose protection type is SimpleAES.
 * @method void setSimpleAesDefinition(integer $SimpleAesDefinition) Set ID of the adaptive bitrate streaming template whose protection type is SimpleAES.
 * @method integer getWidevineDefinition() Obtain The ID of the adaptive bitrate streaming template that encrypts the streams by Widewine.
 * @method void setWidevineDefinition(integer $WidevineDefinition) Set The ID of the adaptive bitrate streaming template that encrypts the streams by Widewine.
 * @method integer getFairPlayDefinition() Obtain The ID of the adaptive bitrate streaming template that encrypts the streams by FairPlay.
 * @method void setFairPlayDefinition(integer $FairPlayDefinition) Set The ID of the adaptive bitrate streaming template that encrypts the streams by FairPlay.
 */
class DrmStreamingsInfoForUpdate extends AbstractModel
{
    /**
     * @var integer ID of the adaptive bitrate streaming template whose protection type is SimpleAES.
     */
    public $SimpleAesDefinition;

    /**
     * @var integer The ID of the adaptive bitrate streaming template that encrypts the streams by Widewine.
     */
    public $WidevineDefinition;

    /**
     * @var integer The ID of the adaptive bitrate streaming template that encrypts the streams by FairPlay.
     */
    public $FairPlayDefinition;

    /**
     * @param integer $SimpleAesDefinition ID of the adaptive bitrate streaming template whose protection type is SimpleAES.
     * @param integer $WidevineDefinition The ID of the adaptive bitrate streaming template that encrypts the streams by Widewine.
     * @param integer $FairPlayDefinition The ID of the adaptive bitrate streaming template that encrypts the streams by FairPlay.
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
        if (array_key_exists("SimpleAesDefinition",$param) and $param["SimpleAesDefinition"] !== null) {
            $this->SimpleAesDefinition = $param["SimpleAesDefinition"];
        }

        if (array_key_exists("WidevineDefinition",$param) and $param["WidevineDefinition"] !== null) {
            $this->WidevineDefinition = $param["WidevineDefinition"];
        }

        if (array_key_exists("FairPlayDefinition",$param) and $param["FairPlayDefinition"] !== null) {
            $this->FairPlayDefinition = $param["FairPlayDefinition"];
        }
    }
}
