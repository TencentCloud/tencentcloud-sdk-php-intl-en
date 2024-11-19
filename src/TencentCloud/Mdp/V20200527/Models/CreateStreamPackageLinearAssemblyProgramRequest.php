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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStreamPackageLinearAssemblyProgram request structure.
 *
 * @method string getName() Obtain Program name.
 * @method void setName(string $Name) Set Program name.
 * @method string getAttachedChannel() Obtain The bound channel.
 * @method void setAttachedChannel(string $AttachedChannel) Set The bound channel.
 * @method string getSourceType() Obtain The type of arrangement target source is divided into live broadcast and on-demand VOD.
Optional values: Live, VOD.
 * @method void setSourceType(string $SourceType) Set The type of arrangement target source is divided into live broadcast and on-demand VOD.
Optional values: Live, VOD.
 * @method string getSourceLocationId() Obtain The associated source location.
 * @method void setSourceLocationId(string $SourceLocationId) Set The associated source location.
 * @method string getSourceName() Obtain The associated live broadcast or on-demand broadcast, source name, and location are globally unique.
 * @method void setSourceName(string $SourceName) Set The associated live broadcast or on-demand broadcast, source name, and location are globally unique.
 * @method PlaybackInfoReq getPlaybackConf() Obtain PlaybackConf.
 * @method void setPlaybackConf(PlaybackInfoReq $PlaybackConf) Set PlaybackConf.
 * @method array getAdBreaks() Obtain AdBreaks is only valid when the source type is Vod.
 * @method void setAdBreaks(array $AdBreaks) Set AdBreaks is only valid when the source type is Vod.
 */
class CreateStreamPackageLinearAssemblyProgramRequest extends AbstractModel
{
    /**
     * @var string Program name.
     */
    public $Name;

    /**
     * @var string The bound channel.
     */
    public $AttachedChannel;

    /**
     * @var string The type of arrangement target source is divided into live broadcast and on-demand VOD.
Optional values: Live, VOD.
     */
    public $SourceType;

    /**
     * @var string The associated source location.
     */
    public $SourceLocationId;

    /**
     * @var string The associated live broadcast or on-demand broadcast, source name, and location are globally unique.
     */
    public $SourceName;

    /**
     * @var PlaybackInfoReq PlaybackConf.
     */
    public $PlaybackConf;

    /**
     * @var array AdBreaks is only valid when the source type is Vod.
     */
    public $AdBreaks;

    /**
     * @param string $Name Program name.
     * @param string $AttachedChannel The bound channel.
     * @param string $SourceType The type of arrangement target source is divided into live broadcast and on-demand VOD.
Optional values: Live, VOD.
     * @param string $SourceLocationId The associated source location.
     * @param string $SourceName The associated live broadcast or on-demand broadcast, source name, and location are globally unique.
     * @param PlaybackInfoReq $PlaybackConf PlaybackConf.
     * @param array $AdBreaks AdBreaks is only valid when the source type is Vod.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AttachedChannel",$param) and $param["AttachedChannel"] !== null) {
            $this->AttachedChannel = $param["AttachedChannel"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceLocationId",$param) and $param["SourceLocationId"] !== null) {
            $this->SourceLocationId = $param["SourceLocationId"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("PlaybackConf",$param) and $param["PlaybackConf"] !== null) {
            $this->PlaybackConf = new PlaybackInfoReq();
            $this->PlaybackConf->deserialize($param["PlaybackConf"]);
        }

        if (array_key_exists("AdBreaks",$param) and $param["AdBreaks"] !== null) {
            $this->AdBreaks = [];
            foreach ($param["AdBreaks"] as $key => $value){
                $obj = new AdBreakInfo();
                $obj->deserialize($value);
                array_push($this->AdBreaks, $obj);
            }
        }
    }
}
